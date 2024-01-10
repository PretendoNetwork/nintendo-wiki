---
layout: post
toc: true
title: Real Escape Game (115)
---

This page describes the methods that are only seen in Real Escape Game × Nintendo 3DS: Escape from the Plan of Mega Destruction.

## Methods

| Method ID | Method Name                                            |
|-----------|--------------------------------------------------------|
| 45        | [GetApplicationConfig](#45-getapplicationconfig)       |
| 46        | [SetApplicationConfig](#46-setapplicationconfig)       |
| 47        | [DeleteApplicationConfig](#47-deleteapplicationconfig) |
| 48        | [EntryShopRequest](#48-entryshoprequest)               |
| 49        | [GetShopRequestInfo](#49-getshoprequestinfo)           |
| 50        | [CancelShopRequest](#50-cancelshoprequest)             |
| 51        | [EntryCount](#51-entrycount)                           |
| 52        | [GetCount](#52-getcount)                               |
| 53        | [EntryRanking](#53-entryranking)                       |
| 54        | [GetRanking](#54-getranking)                           |
| 55        | [CancelRanking](#55-cancelranking)                     |
| 56        | [GetRankingAnswerCount](#56-getrankinganswercount)     |
| 57        | [InvalidateCounts](#57-invalidatecounts)               |
| 58        | [InvalidateAllCounts](#58-invalidateallcounts)         |
| 59        | [DeleteRankings](#59-deleterankings)                   |
| 60        | [DeleteAllRankings](#60-deleteallrankings)             |

### (45) GetApplicationConfig
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |

#### Response

| Type                     | Name   |
|--------------------------|--------|
| [List]&#x3C;Uint32&#x3E; | config |

### (46) SetApplicationConfig
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |
| Uint32 | key           |
| Uint32 | value         |

#### Response
This method does not return anything.

### (47) DeleteApplicationConfig
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |
| Uint32 | key           |

#### Response

This method does not return anything.

### (48) EntryShopRequest
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |

#### Response

| Type   | Name    |
|--------|---------|
| Uint32 | entryId |

### (49) GetShopRequestInfo
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |

#### Response

| Type                                          | Name  |
|-----------------------------------------------|-------|
| [ShopRequestInfo](#shoprequestinfo-structure) | pInfo |

### (50) CancelShopRequest
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |

#### Response
This method does not return anything.

### (51) EntryCount
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |
| Uint8  | sign          |

#### Response
This method does not return anything.

### (52) GetCount
#### Request

| Type                     | Name              |
|--------------------------|-------------------|
| [List]&#x3C;Uint32&#x3E; | applicationIdList |

#### Response

| Type                                                    | Name    |
|---------------------------------------------------------|---------|
| [List]&#x3C;[CountResult](#countresult-structure)&#x3E; | pResult |
| [List]&#x3C;Uint32&#x3E;                                | config  |

### (53) EntryRanking
#### Request

| Type                                                          | Name          |
|---------------------------------------------------------------|---------------|
| Uint32                                                        | applicationId |
| [CustomRankingEntryParam](#customrankingentryparam-structure) | param         |

#### Response
This method does not return anything.

### (54) GetRanking
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |
| Uint32 | count         |

#### Response

| Type                                                                | Name    |
|---------------------------------------------------------------------|---------|
| [List]&#x3C;[CustomRankingData](#customrankingdata-structure)&#x3E; | pResult |

### (55) CancelRanking
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |

#### Response
This method does not return anything.

### (56) GetRankingAnswerCount
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |
| Uint32 | count         |

#### Response

| Type                             | Name         |
|----------------------------------|--------------|
| [Map]&#x3C;[String],Uint32&#x3E; | pAnswerCount |

### (57) InvalidateCounts
#### Request

| Type                     | Name              |
|--------------------------|-------------------|
| [List]&#x3C;Uint32&#x3E; | applicationIdList |

#### Response
This method does not return anything.

### (58) InvalidateAllCounts
#### Request
This method does not take any parameters.

#### Response
This method does not return anything.

### (59) DeleteRankings
#### Request

| Type                     | Name              |
|--------------------------|-------------------|
| [List]&#x3C;Uint32&#x3E; | applicationIdList |

#### Response
This method does not return anything.

### (60) DeleteAllRankings
#### Request
This method does not take any parameters.

#### Response
This method does not return anything.

## Types
### ShopRequestInfo ([Structure])

| Type   | Name      |
|--------|-----------|
| Uint32 | currentId |
| Uint32 | lastId    |
| Uint32 | total     |

### CountResult ([Structure])

| Type   | Name          |
|--------|---------------|
| Uint32 | applicationId |
| Uint32 | count         |

### CustomRankingData ([Structure])

| Type      | Name      |
|-----------|-----------|
| Uint32    | score     |
| [qBuffer] | buffer    |
| Uint32    | hintCount |

### CustomRankingEntryParam ([Structure])

| Type                                              | Name              |
|---------------------------------------------------|-------------------|
| [CustomRankingData](#customrankingdata-structure) | customRankingData |
| [String]                                          | answer            |

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
