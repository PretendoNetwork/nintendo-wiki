---
layout: post
toc: true
title: Ranking - Legacy (112)
---

This protocol is the old version of the [Ranking](/docs/nex/protocols/ranking) protocol. It was rewritten on NEX 3.0.0.

## Methods

| Method ID | Method Name                                                |
| --------- | ---------------------------------------------------------- |
| 5         | [UploadCommonData](#5-uploadcommondata)                    |
| 14        | [UnknownMethod0xE](#14-unknownmethod0xe)                   |
| 15        | [UnknownMethod0xF](#15-unknownmethod0xf)                   |
| 16        | [GetTotal](#16-gettotal)                                   |
| 17        | [UploadScoreWithLimit](#17-uploadscorewithlimit)           |
| 20        | [UploadSpecificPeriodScore](#20-uploadspecificperiodscore) |
| 22        | [GetSpecificPeriodDataList](#22-getspecificperioddatalist) |
| 25        | [GetSpecificPeriodTotal](#25-getspecificperiodtotal)       |

### (5) UploadCommonData
#### Request

| Type     | Description |
|----------|-------------|
| Uint32   | Unique ID   |
| [Buffer] | Common data |

#### Response

| Type   | Description |
|--------|-------------|
| Uint16 | Unknown     |

### (14) UnknownMethod0xE
#### Request

| Type   | Description             |
|--------|-------------------------|
| Uint8  | [Ranking mode]          |
| Uint32 | Category                |
| Uint8  | Score index to order by |
| Uint8  | Unknown (1)             |
| Uint8  | Unknown (2)             |
| Uint8  | Unknown (3)             |
| Uint8  | Unknown (4)             |
| Uint8  | Unknown (5)             |
| Uint32 | Unknown (6)             |
| Uint32 | Offset                  |
| Uint8  | Length                  |

#### Response

| Type                        | Description    |
|-----------------------------|----------------|
| Uint16                      | Unknown        |
| [List]&lt;[RankingData]&gt; | Rank data list |

### (15) UnknownMethod0xF
#### Request

| Type   | Description            |
|--------|------------------------|
| Uint32 | Unique ID              |
| Uint32 | Category               |
| Uint8  | Score index to sort by |
| Uint8  | Unknown (1)            |
| Uint8  | Unknown (2)            |
| Uint8  | Unknown (3)            |
| Uint8  | Unknown (4)            |
| Uint8  | Unknown (5)            |
| Uint32 | Unknown (6)            |
| Uint8  | Length                 |

#### Response

| Type                        | Description    |
|-----------------------------|----------------|
| Uint16                      | Unknown        |
| [List]&lt;[RankingData]&gt; | Rank data list |

### (16) GetTotal
#### Request

| Type   | Description            |
|--------|------------------------|
| Uint32 | Category               |
| Uint8  | Unknown (1)            |
| Uint8  | Unknown (2)            |
| Uint8  | Unknown (3)            |
| Uint32 | Unknown (4)            |

#### Response

| Type   | Description |
|--------|-------------|
| Uint16 | Unknown     |
| Uint32 | Total count |

### (17) UploadScoreWithLimit
#### Request

| Type                 | Description |
|----------------------|-------------|
| Uint32               | Unique ID   |
| Uint32               | Category    |
| [List]&lt;Uint32&gt; | Scores      |
| Uint8                | Unknown (1) |
| Uint32               | Unknown (2) |
| Uint16               | Unknown (3) |

#### Response

| Type   | Description |
|--------|-------------|
| Uint16 | Unknown     |

### (20) UploadSpecificPeriodScore
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |
| Uint32 | Catrgory    |
| Uint32 | Score       |
| Uint8  | Unknown (1) |
| Uint32 | Unknown (2) |
| Uint16 | Unknown (3) |

#### Response

| Type   | Description |
|--------|-------------|
| Uint16 | Unknown     |

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

| Type                        | Description    |
|-----------------------------|----------------|
| Uint16                      | Unknown        |
| Uint32                      | My score       |
| [List]&lt;[RankingData]&gt; | Rank data list |

### (25) GetSpecificPeriodTotal
#### Request

| Type   | Description  |
|--------|--------------|
| Uint32 | Category     |

#### Response

| Type   | Description |
|--------|-------------|
| Uint16 | Unknown     |
| Uint32 | Total count |

## Types
### RankingData ([Structure])

| Type                 | Description |
|----------------------|-------------|
| Uint32               | Unique ID   |
| [PID]                | PID         |
| Uint32               | Order       |
| Uint32               | Category    |
| [List]&lt;Uint32&gt; | Scores      |
| Uint8                | Unknown (1) |
| Uint32               | Unknown (2) |
| [Buffer]             | Common data |

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

[RankingData]: #rankingdata-structure
[Ranking mode]: /docs/nex/protocols/ranking#ranking-mode
