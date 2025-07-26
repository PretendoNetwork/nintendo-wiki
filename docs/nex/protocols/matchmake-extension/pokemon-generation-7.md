---
layout: post
toc: true
title: Pokemon Generation 7 (109)
---

This page describes the methods that are only seen in Pokemon Sun / Moon and Ultra Sun / Ultra Moon.

## Methods

| Method ID | Method Name                                                                |
|-----------|----------------------------------------------------------------------------|
| 48        | [ClearMyPreviouslyMatchedUserCache](#48-clearmypreviouslymatchedusercache) |
| 49        | [GetAttractionStatus](#49-getattractionstatus)                             |
| 50        | [GetAttractionStatusWithGroupId](#50-getattractionstatuswithgroupid)       |
| 51        | [SimpleMatchmake](#51-simplematchmake)                                     |
| 52        | [EntrySimpleMatchmake](#52-entrysimplematchmake)                           |
| 53        | [CancelSimpleMatchmakeEntry](#53-cancelsimplematchmakeentry)               |

### (48) ClearMyPreviouslyMatchedUserCache
This method does not take any parameters and does not return anything.

### (49) GetAttractionStatus

#### Request
This method does not take any parameters.

#### Response

| Type                                            | Name             |
|-------------------------------------------------|------------------|
| [AttractionStatus](#attractionstatus-structure) | attractionStatus |
| Uint16                                          | refreshInterval  |

### (50) GetAttractionStatusWithGroupId
#### Request

| Type   | Name    |
|--------|---------|
| Uint32 | groupId |

#### Response

| Type                                            | Name             |
|-------------------------------------------------|------------------|
| [AttractionStatus](#attractionstatus-structure) | attractionStatus |
| Uint16                                          | refreshInterval  |

### (51) SimpleMatchmake
#### Request

| Type   | Name    |
|--------|---------|
| Uint32 | groupId |

#### Response

| Type                                                          | Name  |
|---------------------------------------------------------------|-------|
| Bool                                                          | found |
| [SimpleMatchmakeHostInfo](#simplematchmakehostinfo-structure) | info  |

### (52) EntrySimpleMatchmake
#### Request

| Type     | Name       |
|----------|------------|
| Uint32   | groupId    |
| [Buffer] | sessionKey |

#### Response
This method does not return anything.

### (53) CancelSimpleMatchmakeEntry
#### Request

| Type   | Name    |
|--------|---------|
| Uint32 | groupId |

#### Response

| Type | Name    |
|------|---------|
| Bool | succeed |

### AttractionStatus ([Structure])

| Type                     | Name                    |
|--------------------------|-------------------------|
| Uint16                   | messageInterval         |
| Uint8                    | operationFlag           |
| Uint16                   | activePlayerInviteParam |
| Uint16                   | activePlayerJoinParam   |
| [List]&#x3C;Uint32&#x3E; | extraParams             |

### SimpleMatchmakeHostInfo ([Structure])

| Type                           | Name        |
|--------------------------------|-------------|
| Uint32                         | pid         |
| [Buffer]                       | sessionKey  |
| [List]&#x3C;[StationURL]&#x3E; | stationUrls |

[Buffer]: /docs/nex/types#buffer
[List]: /docs/nex/types#list
[StationURL]: /docs/nex/types#stationurl
[Structure]: /docs/nex/types#structure
