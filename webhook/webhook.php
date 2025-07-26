<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	http_response_code(405);
	exit("Method Not Allowed");
}

require_once __DIR__ .  "vendor/autoload.php";

use Gitonomy\Git\Repository;

Dotenv\Dotenv::createUnsafeImmutable(__DIR__)->safeLoad();

$GITHUB_WEBHOOK_SECRET = $_ENV["GITHUB_WEBHOOK_SECRET"];
$GITHUB_TOKEN = $_ENV["GITHUB_TOKEN"] ?? null; // * Only needed if working with a private repo, can be removed when public
$GITHUB_ORG_NAME = $_ENV["GITHUB_ORG_NAME"];
$GITHUB_REPO_NAME = $_ENV["GITHUB_REPO_NAME"];
$GITHUB_TARGET_REF = $_ENV["GITHUB_TARGET_REF"];
$WIKI_API_URL = $_ENV["WIKI_API_URL"];
$WIKI_API_BOT_USERNAME = $_ENV["WIKI_API_BOT_USERNAME"];
$WIKI_API_BOT_PASSWORD = $_ENV["WIKI_API_BOT_PASSWORD"];

$signature = $_SERVER["HTTP_X_HUB_SIGNATURE_256"] ?? "";
$body = file_get_contents("php://input");
$expected = "sha256=" . hash_hmac("sha256", $body, $GITHUB_WEBHOOK_SECRET);

if (!hash_equals($expected, $signature)) {
	http_response_code(403);
	exit("Invalid signature");
}

$payload = json_decode($body);

if ($payload->ref != $GITHUB_TARGET_REF) {
	http_response_code(200);
	exit("OK");
}

$changes = [];

foreach ($payload->commits as $commit) {
	if (preg_match("/^Merge pull request #\d+ from /", $commit->message)) {
		continue; // * Skip PR merges
	}

	// * Create a timeline of actions to perform on MediaWiki
	$pages = [];
	$media = [];

	foreach(["added", "removed", "modified"] as $type) {
		foreach ($commit->$type as $file) {
			$action = (object)[
				"file" => $file,
				"action" => $type
			];

			if (str_starts_with($file, "pages/")) {
				array_push($pages, $action);
			} else if (str_starts_with($file, "media/")) {
				array_push($media, $action);
			}
		}
	}

	$change = (object)[
		"hash" => $commit->id,
		"summary" => "[GitHub Sync - {$commit->author->username}] " . preg_replace([
			"/\n\n(?=\S)/",  // * Normalize double new lines as a space + period
			"/\n(?=\S)/",    // * Normalize single new lines as a space
			"/\n+$/",        // * Remove trailing newlines
		], [". ", " ", ""], $commit->message),
		"pages" => $pages,
		"media" => $media
	];

	array_push($changes, $change);
}

$branch = str_replace("refs/heads/", "", $GITHUB_TARGET_REF);
$repoUrl = $GITHUB_TOKEN ? "https://$GITHUB_TOKEN@github.com/$GITHUB_ORG_NAME/$GITHUB_REPO_NAME" : "https://github.com/$GITHUB_ORG_NAME/$GITHUB_REPO_NAME";

if (is_dir($GITHUB_REPO_NAME)) {
	chdir($GITHUB_REPO_NAME);
	exec("git remote set-url origin $repoUrl"); // * Just in case the repo name/location changes
	exec("git checkout $branch");
	exec("git pull $repoUrl");
	chdir("..");
} else {
	exec("git clone $repoUrl");
	chdir($GITHUB_REPO_NAME);
	exec("git checkout $branch");
	chdir("..");
}

class MediaWikiBot {
	private $endpoint;
	private $curl;

	function __construct($url) {
		if (str_ends_with($url, "/api.php")) {
			$this->endpoint = $url;
		} else if (str_ends_with($url, "/")) {
			$this->endpoint = $url . "api.php";
		} else {
			$this->endpoint = "$url/api.php";
		}

		$this->curl = curl_init();
		curl_setopt($this->curl, CURLOPT_COOKIEJAR, "");
		curl_setopt($this->curl, CURLOPT_COOKIEFILE, "");
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
	}

	private function request($query, $post=null) {
		curl_setopt($this->curl, CURLOPT_URL, "$this->endpoint?$query");

		if ($post == null) {
			curl_setopt($this->curl, CURLOPT_HTTPGET, true);
		} else {
			curl_setopt($this->curl, CURLOPT_POST, true);
			curl_setopt($this->curl, CURLOPT_POSTFIELDS, $post);
		}

		$response = curl_exec($this->curl);

		return json_decode($response, false);
	}

	public function login($username, $password) {
		$result = $this->request(http_build_query(array(
			"action" => "query",
			"format" => "json",
			"meta" => "tokens",
			"type" => "login"
		)));

		$loginToken = $result->query->tokens->logintoken;

		$result = $this->request(http_build_query(array(
			"action" => "login",
			"format" => "json"
		)), http_build_query(array(
			"lgname" => $username,
			"lgpassword" => $password,
			"lgtoken" => $loginToken
		)));
	}

	public function getEditToken() {
		$result = $this->request(http_build_query(array(
			"action" => "query",
			"format" => "json",
			"meta" => "tokens",
			"type" => "csrf"
		)));

		return $result->query->tokens->csrftoken;
	}

	public function createPageWithToken($token, $name, $contents, $summary) {
		return $this->request(http_build_query(array(
			"action" => "edit",
			"format" => "json"
		)), http_build_query(array(
			"title" => $name,
			"text" => $contents,
			"summary" => $summary,
			"createonly" => "true",
			"token" => $token
		)));
	}

	public function updatePageWithToken($token, $name, $contents, $summary) {
		return $this->request(http_build_query(array(
			"action" => "edit",
			"format" => "json"
		)), http_build_query(array(
			"title" => $name,
			"text" => $contents,
			"summary" => $summary,
			"token" => $token
		)));
	}

	public function deletePageWithToken($token, $name, $summary) {
		return $this->request(http_build_query(array(
			"action" => "delete",
			"format" => "json"
		)), http_build_query(array(
			"title" => $name,
			"reason" => $summary,
			"token" => $token
		)));
	}

	public function createPage($name, $contents, $summary) {
		$token = $this->getEditToken();

		return $this->request(http_build_query(array(
			"action" => "edit",
			"format" => "json"
		)), http_build_query(array(
			"title" => $name,
			"text" => $contents,
			"summary" => $summary,
			"createonly" => "true",
			"token" => $token
		)));
	}

	public function updatePage($name, $contents, $summary) {
		$token = $this->getEditToken();

		return $this->request(http_build_query(array(
			"action" => "edit",
			"format" => "json"
		)), http_build_query(array(
			"title" => $name,
			"text" => $contents,
			"summary" => $summary,
			"token" => $token
		)));
	}

	public function deletePage($name, $summary) {
		$token = $this->getEditToken();

		return $this->request(http_build_query(array(
			"action" => "delete",
			"format" => "json"
		)), http_build_query(array(
			"title" => $name,
			"reason" => $summary,
			"token" => $token
		)));
	}
}

$bot = new MediaWikiBot($WIKI_API_URL);
$bot->login($WIKI_API_BOT_USERNAME, $WIKI_API_BOT_PASSWORD);

$editToken = $bot->getEditToken();
$repository = new Repository($GITHUB_REPO_NAME);

foreach ($changes as $change) {
	$summary = $change->summary;
	$commit = $repository->getCommit($change->hash);

	if (count($commit->getParents()) > 1) {
		// * This is a merge commit that didn't get caught the first time
		continue;
	}

	foreach ($change->pages as $page) {
		$title = preg_replace("#^pages/#", "", $page->file);
		$title = preg_replace("#\.wiki$#", "", $title);

		switch ($page->action) {
			case "added":
				$bot->createPageWithToken($editToken, $title, $commit->getTree()->resolvePath($page->file)->getContent(), $summary);
				break;
			case "modified":
				$bot->updatePageWithToken($editToken, $title, $commit->getTree()->resolvePath($page->file)->getContent(), $summary);
				break;
			case "removed":
				$bot->deletePageWithToken($editToken, $title, $summary);
				break;
		}
	}

	// TODO - Sync media folder as well
}

http_response_code(200);
echo "OK";
