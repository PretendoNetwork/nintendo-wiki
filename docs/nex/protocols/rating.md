---
layout: post
toc: true
title: Rating (118)
---

## Methods

| Method ID | Method Name                             |
|-----------|-----------------------------------------|
| 1         | [UnknownMethod0x1](#1-unknownmethod0x1) |
| 2         | [UnknownMethod0x2](#2-unknownmethod0x2) |
| 3         | [UnknownMethod0x3](#3-unknownmethod0x3) |
| 4         | [UnknownMethod0x4](#4-unknownmethod0x4) |
| 5         | [UnknownMethod0x5](#5-unknownmethod0x5) |
| 6         | ?                                       |
| 7         | [UnknownMethod0x7](#7-unknownmethod0x7) |
| 8         | [UnknownMethod0x8](#8-unknownmethod0x8) |
| 9         | ?                                       |

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

### (3) UnknownMethod0x3
#### Request

| Type                                                | Description   |
|-----------------------------------------------------|---------------|
| [RatingSessionToken](#ratingsessiontoken-structure) | Session token |
| [List]&lt;[RatingStats](#ratingstats-structure)&gt; | Stats         |

#### Response
This method does not return anything.

### (4) UnknownMethod0x4
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unknown (1) |
| Uint64 | Unknown (2) |
| Uint32 | Unknown (3) |

#### Response

| Type                                        | Description |
|---------------------------------------------|-------------|
| [RatingRankData](#ratingrankdata-structure) | Rank data   |

### (5) UnknownMethod0x5
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unknown (1) |
| Uint64 | Unknown (2) |

#### Response
This method does not return anything.

### (7) UnknownMethod0x7
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;Uint8&gt; | Unknown (1) |
| Uint64              | Unknown (2) |

#### Response
This method does not return anything.

### (8) UnknownMethod0x8
#### Request

| Type                | Description |
|---------------------|-------------|
| Uint64              | Unknown     |

#### Response

| Type                | Description |
|---------------------|-------------|
| [List]&lt;Uint8&gt; | Unknown     |

## Types
### RatingSessionToken ([Structure])

| Type      | Description |
|-----------|-------------|
| Uint64    | Unknown (1) |
| [qBuffer] | Unknown (2) |

### RatingStats ([Structure])

| Type                 | Description |
|----------------------|-------------|
| Uint32               | Unknown (1) |
| Uint64               | Unknown (2) |
| Uint32               | Unknown (3) |
| Uint32               | Unknown (4) |
| [qBuffer]            | Unknown (5) |
| [List]&lt;Uint32&gt; | Unknown (6) |

### RatingRankData ([Structure])

| Type                | Description  |
|---------------------|--------------|
| Uint32              | Unknown (1)  |
| Uint64              | Unknown (2)  |
| Uint32              | Unknown (3)  |
| Uint32              | Unknown (4)  |
| Uint32              | Unknown (5)  |
| Uint32              | Unknown (6)  |
| Uint32              | Unknown (7)  |
| Uint32              | Unknown (8)  |
| [List]&lt;Uint8&gt; | Unknown (9)  |
| [DateTime]          | Unknown (10) |

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
