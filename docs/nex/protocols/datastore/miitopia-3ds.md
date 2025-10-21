---
layout: post
toc: true
title: Miitopia (115)
---

This page describes the methods that are only seen in the 3DS version of Miitopia and Miitopia: Casting Call.

## Methods

| Method ID | Method Name                |
| --------- | -------------------------- |
| 47        | [SearchMii](#47-searchmii) |

### (47) SearchMii

#### Request

| Type                                                | Name  |
| --------------------------------------------------- | ----- |
| [MiiTubeSearchParam](#miitubesearchparam-structure) | param |

#### Response

| Type                                                  | Name          |
| ----------------------------------------------------- | ------------- |
| [MiiTubeSearchResult](#miitubesearchresult-structure) | pSearchResult |

## Types
### MiiTubeSearchParam ([Structure])

| Type     | Name         |
| -------- | ------------ |
| [String] | name         |
| Uint32   | page         |
| Uint8    | category     |
| Uint8    | gender       |
| Uint8    | country      |
| Uint8    | searchType   |
| Uint8    | resultOption |

### MiiTubeMiiInfo ([Structure])

| Type                | Name        |
| ------------------- | ----------- |
| [DataStoreMetaInfo] | metaInfo    |
| Uint8               | category    |
| Uint8               | rankingType |

### MiiTubeSearchResult ([Structure])

| Type                                                      | Name    |
| --------------------------------------------------------- | ------- |
| [List]&lt;[MiiTubeMiiInfo](#miitubemiiinfo-structure)&gt; | result  |
| Uint32                                                    | count   |
| Uint32                                                    | page    |
| Bool                                                      | hasNext |

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

[DataStoreMetaInfo]: /docs/nex/protocols/datastore#datastoremetainfo-structure
