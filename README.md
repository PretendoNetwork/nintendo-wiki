# Nintendo Wiki

WikiMedia source for Nintendo Wiki.

## Structure
- `extensions` - Custom MediaWiki extensions used by the wiki. Some of these could be replaced by MediaWiki templates, but are written as extensions for easier deploying
- `pages` - MediaWiki page source files. Page names are based on file path. For example `pages/NEX/Protocols/TicketGranting.wiki` is the source for the page `http://example.com/wiki/NEX/Protocols/TicketGranting`
- `media` - Media (images, videos, etc.) to be synced to the wiki. Currently not synced
- `webhook.php` - Webhook for syncing changes made via GitHub to the MediaWiki instance

## Contributing
Contributions cannot be made on the wiki itself. All contributions must be done via a pull request on this repository. This is done to centralize our contributions for easier management, as well as to take full advantage of the tools provided by GitHub for reviews.