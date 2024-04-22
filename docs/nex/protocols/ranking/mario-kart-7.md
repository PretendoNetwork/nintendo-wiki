---
layout: post
toc: true
title: Mario Kart 7 (112)
---

This page describes the methods that are only seen in Mario Kart 7.

## Methods

| Method ID         | Method Name                                                |
|-------------------|------------------------------------------------------------|
| 20                | [UploadSpecificPeriodScore](#20-uploadspecificperiodscore) |
| 21                | ?                                                          |
| 22                | [GetSpecificPeriodDataList](#22-getspecificperioddatalist) |
| 23                | [UnknownMethod0x17](#23-unknownmethod0x17)                 |
| 24                | ?                                                          |
| 25                | [GetSpecificPeriodTotal](#25-getspecificperiodtotal)       |

### (20) UploadSpecificPeriodScore

It is unknown how the period affects the score.

#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |
| Uint32 | Category    |
| Uint32 | Score       |
| Uint8  | Unknown (1) |
| Uint32 | Unknown (2) |
| Uint16 | Period      |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (50) |

### (22) GetSpecificPeriodDataList
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |
| Uint32 | Category    |
| Uint8  | Unknown (1) |
| Uint8  | Unknown (2) |
| Uint8  | Unknown (3) |
| Uint32 | Offset      |
| Uint8  | Length      |

#### Response

| Type                        | Description      |
|-----------------------------|------------------|
| Sint16                      | Result code (30) |
| Uint32                      | My score         |
| [List]&lt;[RankingData]&gt; | Rank data list   |

### (23) UnknownMethod0x17

The number of entries returned matches with the number given as input. The entries may be related with `RankingData`, due to the similarities in layout. This method sometimes returns `Ranking::NotFound`.

#### Request

| Type   | Description       |
|--------|-------------------|
| Uint32 | Number of entries |

#### Response

| Type                                 | Description |
|--------------------------------------|-------------|
| [List]&lt;[UnknownStructure0x17]&gt; | Entries     |

### (25) GetSpecificPeriodTotal
#### Request

| Type   | Description  |
|--------|--------------|
| Uint32 | Category     |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (30) |
| Uint32 | Total count      |

## Types

### UnknownStructure0x17 ([Structure])

| Type                 | Description |
|----------------------|-------------|
| Uint32               | ID          |
| Uint32               | Unknown (1) |
| [List]&lt;Uint32&gt; | Unknown (2) |
| Uint8                | Unknown (3) |
| Uint32               | Unknown (4) |

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

[RankingData]: /docs/nex/protocols/ranking/legacy#rankingdata-structure
[UnknownStructure0x17]: #unknownstructure0x17-structure
