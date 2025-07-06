---
layout: post
toc: true
title: Rating (118)
---

## Methods

| Method ID | Method Name                               |
|-----------|-------------------------------------------|
| 1         | [UnknownMethod0x1](#1-unknownmethod0x1)   |
| 2         | [UnknownMethod0x2](#2-unknownmethod0x2)   |
| 3         | [ReportRatingStats](#3-reportratingstats) |
| 4         | [GetRanking](#4-getranking)               |
| 5         | [DeleteScore](#5-deletescore)             |
| 6         | ?                                         |
| 7         | [UploadCommonData](#7-uploadcommondata)   |
| 8         | [GetCommonData](#8-getcommondata)         |
| 9         | ?                                         |

### (1) UnknownMethod0x1
#### Request
This method does not take any parameters.

#### Response

| Type                                                | Description   |
|-----------------------------------------------------|---------------|
| [RatingSessionToken](#ratingsessiontoken-structure) | Session token |

### (2) UnknownMethod0x2
#### Request

| Type                                                | Description   |
|-----------------------------------------------------|---------------|
| [RatingSessionToken](#ratingsessiontoken-structure) | Session token |

#### Response
This method does not return anything.

### (3) ReportRatingStats
#### Request

| Type                                                | Description   | Notes                        |
|-----------------------------------------------------|---------------|------------------------------|
| [RatingSessionToken](#ratingsessiontoken-structure) | Session token |                              |
| [List]&lt;[RatingStats](#ratingstats-structure)&gt; | Stats         | There are always two entries |

#### Response
This method does not return anything.

### (4) GetRanking

This returns ranking data belonging to the caller, with no filters.

#### Request

| Type   | Name        |
|--------|-------------|
| Uint32 | category    |
| Uint64 | uniqueId    |
| [PID]  | principalId |

#### Response

| Type                                        | Description |
|---------------------------------------------|-------------|
| [RatingRankData](#ratingrankdata-structure) | Rank data   |

### (5) DeleteScore
#### Request

| Type   | Name     |
|--------|----------|
| Uint32 | category |
| Uint64 | uniqueId |

#### Response
This method does not return anything.

### (7) UploadCommonData
#### Request

| Type     | Name       |
|----------|------------|
| [Buffer] | commonData |
| Uint64   | uniqueId   |

#### Response
This method does not return anything.

### (8) GetCommonData
#### Request

| Type   | Name     |
|--------|----------|
| Uint64 | uniqueId |

#### Response

| Type     | Name       |
|----------|------------|
| [Buffer] | commonData |

## Types
### RatingSessionToken ([Structure])

| Type      | Description |
|-----------|-------------|
| Uint64    | Unknown (1) |
| [qBuffer] | Unknown (2) |

### RatingStats ([Structure])

| Type                | Description  |
|---------------------|--------------|
| [PID]               | Principal ID |
| Uint64              | Unique ID    |
| Uint32              | Flags        |
| Uint32              | Category     |
| [qBuffer]           | Report data  |
| [List]&lt;Float&gt; | Values       |

The information for this structure is populated by the following function:

```cpp
NetLib::P2P::NexRatingClient::SetReportStatusInfo(NetLib::P2P::NexRatingClient::REPORT_SLOT_ID, unsigned int, unsigned long long, unsigned int, nn::nex::RatingStatsFlags::RatingStatsFlags, NetLib::P2P::NexRatingClient::REPORT_RATE, void const*, unsigned int, BtlRecordResult2)
```

The values list contains two entries, the first one being related to the `REPORT_RATE` and the second one related to `BtlRecordResul2`. What these values mean is unknown.

### RatingRankData ([Structure])

| Type       | Description  |
|------------|--------------|
| [PID]      | Principal ID |
| Uint64     | Unique ID    |
| Uint32     | Order        |
| Uint32     | Category     |
| Uint32     | Score        |
| Uint32     | Unknown (1)  |
| Uint32     | Unknown (2)  |
| Uint32     | Unknown (3)  |
| [Buffer]   | Common data  |
| [DateTime] | Update time  |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[PID]: /docs/nex/types#pid
[DateTime]: /docs/nex/types#datetime
[Data]: /docs/nex/types#anydataholder
[List]: /docs/nex/types#list
[ResultRange]: /docs/nex/types#resultrange-structure
[Structure]: /docs/nex/types#structure
[qBuffer]: /docs/nex/types#qbuffer
[Buffer]: /docs/nex/types#buffer
