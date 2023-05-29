---
layout: post
toc: true
title: Title Storage (51)
---

## Methods

| Method ID | Method Name                                     |
| --------- | ----------------------------------------------- |
| 1         | [BrowseContents](#1-browsecontents)             |
| 2         | [BrowseContentsByType](#2-browsecontentsbytype) |
| 3         | [GetContentDetails](#3-getcontentdetails)       |
| 4         | [DownloadContent](#4-downloadcontent)           |

### (1) BrowseContents

#### Request

| Type   | Name                  |
| ------ | --------------------- |
| Uint32 | flags                 |
| Uint8  | flagsMaskType         |
| Uint32 | extendedFlags         |
| Uint8  | extendedFlagsMaskType |

#### Response

| Type                                                      | Name     |
| --------------------------------------------------------- | -------- |
| [List]&#x3C;[TitleContent](#titlecontent-structure)&#x3E; | contents |

### (2) BrowseContentsByType

#### Request

| Type     | Name                  |
| -------- | --------------------- |
| [String] | contentType           |
| Uint32   | flags                 |
| Uint8    | flagsMaskType         |
| Uint32   | extendedFlags         |
| Uint8    | extendedFlagsMaskType |

#### Response

| Type                     | Name     |
| ------------------------ | -------- |
| [List]&#x3C;[Data]&#x3E; | contents |

### (3) GetContentDetails

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | contentID |

#### Response

| Type   | Name    |
| ------ | ------- |
| [Data] | details |

### (4) DownloadContent

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | contentID |

#### Response

| Type     | Name  |
| -------- | ----- |
| [String] | proto |
| [String] | host  |
| [String] | path  |

## Types

### TitleContent ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type     | Name          |
| -------- | ------------- |
| Uint32   | id            |
| [String] | name          |
| [String] | description   |
| Sint64   | size          |
| [String] | contentType   |
| Uint32   | flags         |
| Uint32   | extendedFlags |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[StationURL]: /docs/nex/types#stationurl
[Variant]: /docs/nex/types#variant
[PID]: /docs/nex/types#pid
