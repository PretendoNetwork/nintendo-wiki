---
layout: post
toc: true
title: Ranking - Legacy (112)
---

This protocol is the old version of the [Ranking](/docs/nex/protocols/ranking) protocol. It was rewritten on NEX 3.0.0.

All methods include a `Sint16` on the response, possibly being used as a result code but this isn't certain. A method will always give the same value on this field, but this value may be different between methods.

Scores are stored as a `List<Uint32>` for assigning multiple scores to a [RankingData]. All scores must contain 2 elements, even if the game doesn't use the second value.

In NEX 1, the category is represented as a `List<Uint16>`, but the server will only accept having a single value on the list.

The common data is used in games to display user information on the ranking. Its value is game-specific on NEX 2, but on NEX 1 this must be an always-allocated 0x14-byte buffer which stores the player's name in UTF-16. If a user doesn't have common data or it has been deleted, any methods that query it will give an empty buffer, still allocated on NEX 1.

In some cases, when using a unique ID that doesn't exist on a method that requires it, the server will give error `0x00670004`.

## Extended Protocols

The following games have additional methods in the legacy ranking protocol:
* [Mario Kart 7](/docs/nex/protocols/ranking/mario-kart-7)

## Methods

| Method ID (NEX 1) | Method ID (NEX 2) | Method Name                                        |
|-------------------|-------------------|----------------------------------------------------|
| 1                 | 1                 | [UploadScore](#1-uploadscore)                      |
|                   | 2                 | [UploadScores](#2-uploadscores)                    |
| 2                 | 3                 | [DeleteScore](#3-deletescore)                      |
| 3                 | 4                 | [DeleteAllScore](#4-deleteallscore)                |
| 4                 | 5                 | [UploadCommonData](#5-uploadcommondata)            |
| 5                 | 6                 | [DeleteCommonData](#6-deletecommondata)            |
| 6                 | 7                 | [UnknownMethod0x7](#7-unknownmethod0x7)            |
| 7                 | 8                 | [UnknownMethod0x8](#8-unknownmethod0x8)            |
|                   | 9                 | [UnknownMethod0x9](#9-unknownmethod0x9)            |
| 8                 | 10                | [GetTopScore](#10-gettopscore)                     |
| 9                 | 11                | [GetCommonData](#11-getcommondata)                 |
| 10                | 12                | [UnknownMethod0xC](#12-unknownmethod0xc)           |
| 11                | 13                | [UnknownMethod0xD](#13-unknownmethod0xd)           |
| 12                | 14                | [GetScore](#14-getscore)                           |
| 13                | 15                | [GetSelfScore](#15-getselfscore)                   |
| 14                | 16                | [GetTotal](#16-gettotal)                           |
|                   | 17                | [UploadScoreWithLimit](#17-uploadscorewithlimit)   |
|                   | 18                | [UploadScoresWithLimit](#18-uploadscoreswithlimit) |
|                   | 19                | [UnknownMethod0x13](#19-unknownmethod0x13)         |

### (1) UploadScore
#### Request

| Type                                           | Description |
|------------------------------------------------|-------------|
| Uint32                                         | Unique ID   |
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category    |
| [List]&lt;Uint32&gt;                           | Scores      |
| Uint8                                          | Unknown (1) |
| Uint32                                         | Unknown (2) |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (50) |

### (2) UploadScores
#### Request

| Type                         | Description |
|------------------------------|-------------|
| Uint32                       | Unique ID   |
| [List]&lt;[RankingScore]&gt; | Scores      |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (50) |

### (3) DeleteScore
#### Request

| Type                                           | Description |
|------------------------------------------------|-------------|
| Uint32                                         | Unique ID   |
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category    |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (50) |

### (4) DeleteAllScore
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |

#### Response

| Type   | Description       |
|--------|-------------------|
| Sint16 | Result code (100) |

### (5) UploadCommonData
#### Request

| Type     | Description |
|----------|-------------|
| Uint32   | Unique ID   |
| [Buffer] | Common data |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (50) |

### (6) DeleteCommonData
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (50) |

### (7) UnknownMethod0x7

This method requires ownership of the unique ID, and having scores in the given category. In NEX 1, the server will return `Ranking::RegistrationError` if the user doesn't have scores in the given category. In NEX 2, `Ranking::NotFound` is returned instead.

#### Request

| Type                                           | Description |
|------------------------------------------------|-------------|
| Uint32                                         | Unique ID   |
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category    |
| Uint8                                          | Unknown     |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (50) |

### (8) UnknownMethod0x8

This method requires ownership of the unique ID.

#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |
| Uint8  | Unknown     |

#### Response

| Type   | Description       |
|--------|-------------------|
| Sint16 | Result code (100) |

### (9) UnknownMethod0x9
#### Request

| Type                 | Description |
|----------------------|-------------|
| Uint32               | Unknown (1) |
| Uint32               | Unknown (2) |
| [List]&lt;Uint32&gt; | Unknown (3) |
| [List]&lt;Uint8&gt;  | Unknown (4) |

#### Response

The response format of this method is unknown.

### (10) GetTopScore
#### Request

| Type                                           | Description |
|------------------------------------------------|-------------|
| Uint32                                         | Unique ID   |
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category    |

#### Response

| Type                 | Description      |
|----------------------|------------------|
| Sint16               | Result code (20) |
| [List]&lt;Uint32&gt; | Scores           |

### (11) GetCommonData
#### Request

| Type     | Description |
|----------|-------------|
| Uint32   | Unique ID   |

#### Response

| Type     | Description      |
|----------|------------------|
| Sint16   | Result code (20) |
| [Buffer] | Common data      |

### (12) UnknownMethod0xC
#### Request

| Type                                           | Description |
|------------------------------------------------|-------------|
| Uint32                                         | Unique ID   |
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category    |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (20) |
| Uint8  | Unknown          |

### (13) UnknownMethod0xD
#### Request

| Type                                           | Description         |
|------------------------------------------------|---------------------|
| Uint32                                         | Unique ID           |
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category            |
| [RankingOrderParam]                            | Ranking order param |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (20) |
| Uint32 | Unknown          |

### (14) GetScore
#### Request

| Type                                           | Description         |
|------------------------------------------------|---------------------|
| Uint8                                          | [Ranking mode]      |
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category            |
| [RankingOrderParam]                            | Ranking order param |
| Uint32                                         | Offset              |
| Uint8                                          | Length              |

#### Response

| Type                        | Description      |
|-----------------------------|------------------|
| Sint16                      | Result code (30) |
| [List]&lt;[RankingData]&gt; | Rank data list   |

### (15) GetSelfScore

This method works in a similar way as `GetScore`, but it sets the ranking mode to 1 (global rankings around own entry).

#### Request

| Type                                           | Description         |
|------------------------------------------------|---------------------|
| Uint32                                         | Unique ID           |
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category            |
| [RankingOrderParam]                            | Ranking order param |
| Uint8                                          | Length              |

#### Response

| Type                        | Description      |
|-----------------------------|------------------|
| Sint16                      | Result code (30) |
| [List]&lt;[RankingData]&gt; | Rank data list   |

### (16) GetTotal
#### Request

| Type                                           | Description |
|------------------------------------------------|-------------|
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category    |
| Uint8                                          | Unknown (1) |
| Uint8                                          | Unknown (2) |
| Uint8                                          | Unknown (3) |
| Uint32                                         | Unknown (4) |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (30) |
| Uint32 | Total count      |

### (17) UploadScoreWithLimit

It is unknown how the limit affects the score.

#### Request

| Type                 | Description |
|----------------------|-------------|
| Uint32               | Unique ID   |
| Uint32               | Category    |
| [List]&lt;Uint32&gt; | Scores      |
| Uint8                | Unknown (1) |
| Uint32               | Unknown (2) |
| Uint16               | Limit       |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (50) |

### (18) UploadScoresWithLimit
#### Request

| Type                                  | Description |
|---------------------------------------|-------------|
| Uint32                                | Unique ID   |
| [List]&lt;[RankingScoreWithLimit]&gt; | Scores      |

#### Response

| Type   | Description      |
|--------|------------------|
| Sint16 | Result code (50) |

### (19) UnknownMethod0x13
#### Request

| Type                 | Description |
|----------------------|-------------|
| Uint32               | Unknown (1) |
| Uint32               | Unknown (2) |
| [List]&lt;Uint32&gt; | Unknown (3) |
| [List]&lt;Uint8&gt;  | Unknown (4) |
| Bool                 | Unknown (5) |
| Uint16               | Unknown (6) |

#### Response

| Type   | Description     |
|--------|-----------------|
| Sint16 | Result code (?) |

## Types
### RankingData ([Structure])

| Type                                           | Description |
|------------------------------------------------|-------------|
| Uint32                                         | Unique ID   |
| [PID]                                          | PID         |
| Uint32                                         | Order       |
| [List]&lt;Uint16&gt; (NEX 1) or Uint32 (NEX 2) | Category    |
| [List]&lt;Uint32&gt;                           | Scores      |
| Uint8                                          | Unknown (1) |
| Uint32                                         | Unknown (2) |
| [Buffer]                                       | Common data |

### RankingOrderParam ([Structure])

| Type   | Description                       |
|--------|-----------------------------------|
| Uint8  | Score index to order by           |
| Uint8  | 0: Lowest score, 1: Highest score |
| Uint8  | [Rank calculation]                |
| Uint8  | Unknown (1)                       |
| Uint8  | Unknown (2)                       |
| Uint8  | Unknown (3)                       |
| Uint32 | Unknown (4)                       |

### RankingScore ([Structure])

| Type                 | Description |
|----------------------|-------------|
| Uint32               | Category    |
| [List]&lt;Uint32&gt; | Scores      |
| Uint8                | Unknown (1) |
| Uint32               | Unknown (2) |

### RankingScoreWithLimit ([Structure])

| Type                 | Description |
|----------------------|-------------|
| Uint32               | Category    |
| [List]&lt;Uint32&gt; | Scores      |
| Uint8                | Unknown (1) |
| Uint32               | Unknown (2) |
| Uint16               | Limit       |

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
[RankingOrderParam]: #rankingorderparam-structure
[RankingScore]: #rankingscore-structure
[RankingScoreWithLimit]: #rankingscorewithlimit-structure
[Ranking mode]: /docs/nex/protocols/ranking#ranking-mode
[Rank calculation]: /docs/nex/protocols/ranking#rank-calculation
