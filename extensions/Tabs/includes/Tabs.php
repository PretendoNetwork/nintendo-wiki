<?php

class Tabs {
	public static function onParserFirstCallInit($parser) {
		$parser->setHook("tabs", [new self(), "renderTabs"]);
		$parser->setHook("tab", [new self(), "renderTab"]);

		return true;
	}

	public static function renderTabs($input, array $args, Parser $parser, PPFrame $frame) {
		$output = $parser->recursiveTagParse($input, $frame);
		$items = isset($args["items"]) ? explode(",", $args["items"]) : [];
		$storageKey = isset($args["storagekey"]) ? $args["storagekey"] : "";
		$headers = "";

		foreach ($items as $item) {
			$item = trim($item);
			$headers .= sprintf(
				"<button class=\"tab-header\" data-tab=\"%s\">%s</button>",
				htmlspecialchars($item),
				htmlspecialchars($item)
			);
		}

		$parser->getOutput()->addModules(["ext.tabs"]);

		return sprintf(
			"<div class=\"tab-container\" data-storage-key=\"%s\">
				<div class=\"tab-headers\">%s</div>
				<div class=\"tab-content-container\">%s</div>
			</div>",
			htmlspecialchars($storageKey),
			$headers,
			$output
		);
	}

	public static function renderTab($input, array $args, Parser $parser, PPFrame $frame) {
		$tabName = isset($args["name"]) ? $args["name"] : "";
		$content = $parser->recursiveTagParse($input, $frame);

		return sprintf(
			"<div class=\"tab-content\" data-tab-name=\"%s\" style=\"display:none;\">%s</div>",
			htmlspecialchars($tabName),
			$content
		);
	}
}