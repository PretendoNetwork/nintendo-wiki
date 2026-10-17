# Tabs

Adds tabbed content to MediaWiki

## Installation
Copy the `Tabs` folder to the MediaWiki `extensions` folder. Then add `wfLoadExtension('Tabs');` to `LocalSettings.php`.

## Usage
```
<tabs items="Original,NEX 3.0+" storagekey="AuthenticationInfo">
	<tab name="Original">
		{| class="wikitable"
		! Type !! Name !! Description
		|-
		| String || m_authToken || Token, as received from the account server
		|-
		| Uint32 || m_ngsVersion || NEX major version
		|}
	</tab>

	<tab name="NEX 3.0+">
		{| class="wikitable"
		! Type !! Name !! Description
		|-
		| String || m_authToken || Token, as received from the account server
		|-
		| Uint32 || m_ngsVersion || NEX major version
		|-
		| Uint8 || m_authTokenType || 0: NASC, 1: NNAS, 2: Switch
		|-
		| Uint32 || m_serverVersion || See above
		|}
	</tab>
</tabs>
```

- `items` - The tab names. Maps to a `tab` elements `name` attribute.
- `storagekey` - The key stored in the browsers local storage to remember the last selection.