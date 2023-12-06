---
layout: post
toc: true
title: Xenoblade Chronicles X (109)
---

This page describes the methods that are only seen in Xenoblade Chronicles X. The `BlackList` methods seem identical to the `BlockList` methods, just renamed.

## Methods

| Method ID | Method Name                                                                                          |
|-----------|------------------------------------------------------------------------------------------------------|
| 24        | [GetMyBlackList](#24-getmyblacklist)                                                                 |
| 25        | [AddToBlackList](#25-addtoblacklist)                                                                 |
| 26        | [RemoveFromBlackList](#26-removefromblacklist)                                                       |
| 27        | [ClearMyBlackList](#27-clearmyblacklist)                                                             |
| 36        | [JoinCommunityReturnJoinId](#36-joincommunityreturnjoinid)                                           |
| 37        | [SearchPersistentGathering](#37-searchpersistentgathering)                                           |
| 38        | [GetMatchmakeExtensionSetting](#38-getmatchmakeextensionsetting)                                     |
| 39        | [CustomAutoMatchmake_Postpone](#39-customautomatchmake_postpone)                                     |
| 40        | [CustomAutoMatchmakeWithSearchCriteria_Postpone](#40-customautomatchmakewithsearchcriteria_postpone) |
| 41        | [CustomJoinMatchmakeSessionEx](#41-customjoinmatchmakesessionex)                                     |

### (24) GetMyBlackList
#### Request
This method does not take any parameters.

#### Response

| Type                | Name           |
|---------------------|----------------|
| [List]&lt;[PID]&gt; | lstPrincipalId |

### (25) AddToBlackList
#### Request

| Type                | Name           |
|---------------------|----------------|
| [List]&lt;[PID]&gt; | lstPrincipalId |

#### Response
This method does not return anything.

### (26) RemoveFromBlackList
#### Request

| Type                | Name           |
|---------------------|----------------|
| [List]&lt;[PID]&gt; | lstPrincipalId |

#### Response
This method does not return anything.

### (27) ClearMyBlackList
This method does not take any parameters and does not return anything.

### (36) JoinCommunityReturnJoinId
#### Request

| Type     | Name    |
|----------|---------|
| Uint32   | unknown |
| [String] | unknown |
| [String] | unknown |

#### Response

| Type   | Name |
|--------|------|
| Uint32 | ID   |

### (37) SearchPersistentGathering
#### Request

| Type                                                                              | Name         |
|-----------------------------------------------------------------------------------|--------------|
| [PersistentGatheringSearchCriteria](#persistentgatheringsearchcriteria-structure) | Search param |
| [ResultRange]                                                                     | Result range |

#### Response

| Type                                                                                                      | Name       |
|-----------------------------------------------------------------------------------------------------------|------------|
| [List]&lt;[PersistentGathering](/docs/nex/protocols/match-making/types#persistentgathering-structure)&gt; | Gatherings |

### (38) GetMatchmakeExtensionSetting
#### Request

| Type     | Name         |
|----------|--------------|
| [String] | Setting name |

#### Response

| Type     | Name          |
|----------|---------------|
| [String] | Setting value |

### (39) CustomAutoMatchmake_Postpone
#### Request

| Type                      | Name         |
|---------------------------|--------------|
| [Data]&lt;[Gathering]&gt; | anyGathering |
| [String]                  | strMessage   |

#### Response

| Type                      | Name            |
|---------------------------|-----------------|
| [Data]&lt;[Gathering]&gt; | joinedGathering |
| Uint32                    | Unknown         |

### (40) CustomAutoMatchmakeWithSearchCriteria_Postpone
#### Request

| Type                                           | Name              |
|------------------------------------------------|-------------------|
| [List]&lt;[MatchmakeSessionSearchCriteria]&gt; | lstSearchCriteria |
| [Data]&lt;[Gathering]&gt;                      | anyGathering      |
| [String]                                       | strMessage        |

#### Response

| Type                      | Name            |
|---------------------------|-----------------|
| [Data]&lt;[Gathering]&gt; | joinedGathering |
| Uint32                    | Unknown         |

### (41) CustomJoinMatchmakeSessionEx
#### Request

| Type     | Name               |
|----------|--------------------|
| Uint32   | gid                |
| [String] | strMessage         |
| Uint16   | participationCount |
| Uint32   | Unknown            |

#### Response

| Type     | Name       |
|----------|------------|
| [Buffer] | sessionKey |
| Uint32   | Unknown    |

## Types
### PersistentGatheringSearchCriteria ([Structure])

| Type                   | Description |
|------------------------|-------------|
| [List]&lt;[String]&gt; | Unknown     |
| [String]               | Unknown     |

[Structure]: /docs/nex/types#structure
[PID]: /docs/nex/types#pid
[Buffer]: /docs/nex/types#buffer
[String]: /docs/nex/types#string
[List]: /docs/nex/types#list
[ResultRange]: /docs/nex/types#resultrange-structure
[Data]: /docs/nex/types#anydataholder
[Gathering]: /docs/nex/protocols/match-making/types#gathering-structure
[MatchmakeSessionSearchCriteria]: /docs/nex/protocols/match-making/types#matchmakesessionsearchcriteria-structure
