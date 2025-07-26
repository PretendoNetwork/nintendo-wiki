# Nintendo Wiki

WikiMedia source for Nintendo Wiki.

## Structure
- `extensions` - Custom MediaWiki extensions used by the wiki. Some of these could be replaced by MediaWiki templates, but are written as extensions for easier deploying
- `pages` - MediaWiki page source files. Page names are based on file path. For example `pages/NEX/Protocols/TicketGranting.wiki` is the source for the page `http://example.com/wiki/NEX/Protocols/TicketGranting`
- `media` - Media (images, videos, etc.) to be synced to the wiki. Currently not synced
- `webhook` - Webhook for syncing changes made via GitHub to the MediaWiki instance
- `htaccess` - The `.htaccess` file to get copied to the Docker container. Used to enable short URLs

## Contributing
Contributions cannot be made on the wiki itself. All contributions must be done via a pull request on this repository. This is done to centralize our contributions for easier management, as well as to take full advantage of the tools provided by GitHub for reviews.

## Running
It is recommended that you run this instance using Docker. The official MediaWiki image is used. Rename `compose.example.yaml` to `compose.yaml`, set your configurations, and run `docker compose up` to start the services. By default the MediaWiki instance will be accessible at `http://localhost:8080`

Use `database` as the host name when setting up the database connection, to use the MariaDB instance provided by Docker.

Once the `LocalSettings.php` file has been created, copy it to the same directory as the `compose.yaml` and uncomment the line `# - ./LocalSettings.php:/var/www/html/LocalSettings.php`. Add the following lines to the END of the `LocalSettings.php` file:

```php
// Enable short URLs (`/wiki/Page_Name` instead of `index.php?title=Page_Name`).
// Requires the provided .htaccess file also be used
$wgScriptPath = "";
$wgArticlePath = "/wiki/$1";
$wgUsePathInfo = true;

// Enable custom extensions
wfLoadExtension('Tabs');
wfLoadExtension('Breadcrumbs');

// Disable account creation, to enforce GitHub usage
$wgGroupPermissions['*']['createaccount'] = false;
```

Finally, navigate to the `webhook` directory and run `composer install` to ensure all the local dependancies are vendored. See [here for how to install `composer`](https://getcomposer.org/download/).

Save `LocalSettings.php` and restart the services.

## Webhook
By default we recommend disabling account creation so that all changes can be managed via GitHub. In order to do so, a webhook must be created to listen for changes to the repository. The source for this webhook can be found in the `webhook` directory and is available at `http://example.com/webhook/webhook.php`. For the rest of this section it is assumed that the MediaWiki instance is available at `http://localhost:8080`.

It is recommended that you create a new account on the MediaWiki instance, as edits will appear as credited to the account the bot is made under. The webhook will utilize a MediaWiki bot, which is tied to the account which created it. Navigate to `http://localhost:8080/wiki/Special:CreateAccount` while logged into an admin account. Create the new accounts username (such as `GitHubSync`) and password. Once created, navigate to `http://localhost:8080/wiki/Special:UserRights` and search for the new account. Check the `bot` and `administrator` boxes (these groups are needed for bot actions such as high volume API requests and deleting pages/managing protected pages) and click `Save user groups`. Now log into the newly created account.

Navigate to `http://localhost:8080/wiki/Special:BotPasswords`. Give the bot a name (such as `GitHubSync`). Check the following boxes:

- `High-volume (bot) access`
- `Edit existing pages`
- `Edit protected pages`
- `Create, edit, and move pages`
- `Upload new files`
- `Upload, replace, and move files`
- `Delete pages, revisions, and log entries`

Optionally, create an IP whitelist to secure bot actions. This can be set to only allow actions from the bot within your server. Leave `Allowed pages for editing` blank, as the bot will need arbitrary page access. The username for the bot will be `CREATOR_NAME@BOT_NAME`. For example, if the user and bot are both named `GitHubSync` the username will be `GitHubSync@GitHubSync`. Note the password created, as it will NOT be displayed again.

Navigate to `https://github.com/owner_name/repository_name/settings/hooks/new` and create a new webhook. Set `Payload URL` to the publicly accessible location of `webhook.php` (such as `http://example.com/webhook/webhook.php`, not `http://localhost:8080/webhook/webhook.php`). For local development/testing, see GitHub's guide ["Testing webhook code locally"](https://docs.github.com/en/webhooks/testing-and-troubleshooting-webhooks/testing-webhooks#testing-webhook-code-locally) for information on how to proxy webhook requests to a local server. Set `Content type` to `application/json` and configure a webhook secret (this can be anything, so long as it is secure). Enable or disable SSL verification and select `Just the push event`.

Then configure the following envrionment variables in the `composer.yaml` file:

| Name                    | Description                                                                                                                            |
| ----------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| `GITHUB_WEBHOOK_SECRET` | The webhook secret key set when creating the webhook on GitHub.                                                                        |
| `GITHUB_TOKEN`          | Optional. GitHub personal access token, for when working with a private repository.                                                    |
| `GITHUB_ORG_NAME`       | The name of the owner of the repository. Can be an organization or user.                                                               |
| `GITHUB_REPO_NAME`      | The name of the repository with the wiki page source files.                                                                            |
| `GITHUB_TARGET_REF`     | The git ref the webhook will target. Events sent for refs other than this are ignored. This is also used to determine the branch name. |
| `WIKI_API_URL`          | The URL for your MediaWiki API (`http://localhost:8080/api.php`)                                                                       |
| `WIKI_API_BOT_USERNAME` | The MediaWiki bot username (`GitHubSync@GitHubSync`)                                                                                   |
| `WIKI_API_BOT_PASSWORD` | The MediaWiki bot password                                                                                                             |