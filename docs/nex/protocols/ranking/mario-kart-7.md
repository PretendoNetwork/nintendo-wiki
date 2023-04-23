---
layout: post
toc: true
title: Mario Kart 7 (112)
---

This page describes the methods that are only seen in Mario Kart 7.

## Methods

| Method ID | Method Name                                                 |
| --------- | ----------------------------------------------------------- |
| 5         | [UploadCommunityRankingData](#5-uploadcommunityrankingdata) |
| 20        | [UploadCommunityScore](#20-uploadcommunityscore)            |
| 22        | [GetCommunityRanking](#22-getcommunityranking)              |
| 25        | [GetCommunityInfo](#25-getcommunityinfo)                    |

### (5) UploadCommunityRankingData
#### Request

| Type     | Description  |
|----------|--------------|
| Uint32   | Unknown ID   |
| [Buffer] | Ranking data |

#### Response

| Type   | Description |
|--------|-------------|
| Uint16 | Unknown     |

### (20) UploadCommunityScore
#### Request

| Type   | Description  |
|--------|--------------|
| Uint32 | Unknown ID   |
| Uint32 | Gathering ID |
| Uint32 | Score        |
| Uint8  | Unknown (1)  |
| Uint32 | Unknown (2)  |
| Uint16 | Unknown (3)  |

#### Response

| Type   | Description |
|--------|-------------|
| Uint16 | Unknown     |

### (22) GetCommunityRanking
#### Request

| Type   | Description  |
|--------|--------------|
| Uint32 | Unknown ID   |
| Uint32 | Gathering ID |
| Uint8  | Unknown (1)  |
| Uint8  | Unknown (2)  |
| Uint8  | Unknown (3)  |
| Uint32 | Unknown (4)  |
| Uint8  | Length       |

#### Response

| Type                              | Description    |
|-----------------------------------|----------------|
| Uint16                            | Unknown        |
| Uint32                            | My score       |
| [List]&lt;[CommunityRankData]&gt; | Rank data list |

### (25) GetCommunityInfo
#### Request

| Type   | Description  |
|--------|--------------|
| Uint32 | Gathering ID |

#### Response

| Type   | Description  |
|--------|--------------|
| Uint16 | Unknown      |
| Uint32 | Player count |

## Types
### CommunityRankData ([Structure])

| Type     | Description  |
|----------|--------------|
| Uint32   | Unknown ID   |
| [PID]    | PID          |
| Uint32   | Order        |
| Uint32   | Gathering ID |
| Uint32   | Unknown (1)  |
| Uint32   | Score        |
| Uint64   | Unknown (2)  |
| Uint8    | Unknown (3)  |
| [Buffer] | Ranking data |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[ResultRange]: /docs/nex/types#resultrange-structure
[PID]: /docs/nex/types#pid

[CommunityRankData]: #communityrankdata-structure
