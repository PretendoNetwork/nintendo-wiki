---
layout: post
toc: true
title: Xenoblade Chronicles X (109)
---

This page describes the methods that are only seen in Xenoblade Chronicles X

## Methods

| Method ID | Method Name                                                                                          |
|-----------|------------------------------------------------------------------------------------------------------|
| 36        | [JoinCommunityReturnJoinId](#36-joincommunityreturnjoinid)                                           |
| 37        | [SearchPersistentGathering](#37-searchpersistentgathering)                                           |
| 38        | [GetMatchmakeExtensionSetting](#38-getmatchmakeextensionsetting)                                     |
| 39        | [CustomAutoMatchmake_Postpone](#39-customautomatchmake_postpone)                                     |
| 40        | [CustomAutoMatchmakeWithSearchCriteria_Postpone](#40-customautomatchmakewithsearchcriteria_postpone) |
| 41        | [CustomJoinMatchmakeSessionEx](#41-customjoinmatchmakesessionex)                                     |

### (36) JoinCommunityReturnJoinId
#### Request

| Type     | Description |
|----------|-------------|
| Uint32   | unknown     |
| [String] | unknown     |
| [String] | unknown     |

#### Response

| Type   | Description |
|--------|-------------|
| Uint32 | ID          |

### (37) SearchPersistentGathering
#### Request

| Type                                                                              | Description  |
|-----------------------------------------------------------------------------------|--------------|
| [PersistentGatheringSearchCriteria](#persistentgatheringsearchcriteria-structure) | Search param |
| [ResultRange]                                                                     | Result range |

#### Response

| Type                                                                                                      | Description |
|-----------------------------------------------------------------------------------------------------------|-------------|
| [List]&lt;[PersistentGathering](/docs/nex/protocols/match-making/types#persistentgathering-structure)&gt; | Gatherings  |

### (38) GetMatchmakeExtensionSetting
#### Request

| Type     | Description  |
|----------|--------------|
| [String] | Setting name |

#### Response

| Type     | Description   |
|----------|---------------|
| [String] | Setting value |

### (39) CustomAutoMatchmake_Postpone
#### Request

| Type                      | Description  |
|---------------------------|--------------|
| [Data]&lt;[Gathering]&gt; | anyGathering |
| [String]                  | strMessage   |

#### Response

| Type                      | Description     |
|---------------------------|-----------------|
| [Data]&lt;[Gathering]&gt; | joinedGathering |
| Uint32                    | Unknown         |

### (40) CustomAutoMatchmakeWithSearchCriteria_Postpone
#### Request

| Type                                           | Description       |
|------------------------------------------------|-------------------|
| [List]&lt;[MatchmakeSessionSearchCriteria]&gt; | lstSearchCriteria |
| [Data]&lt;[Gathering]&gt;                      | anyGathering      |
| [String]                                       | strMessage        |

#### Response

| Type                      | Description     |
|---------------------------|-----------------|
| [Data]&lt;[Gathering]&gt; | joinedGathering |
| Uint32                    | Unknown         |

### (41) CustomJoinMatchmakeSessionEx
#### Request

| Type     | Description        |
|----------|--------------------|
| Uint32   | gid                |
| [String] | strMessage         |
| Uint16   | participationCount |
| Uint32   | Unknown            |

#### Response

| Type     | Description |
|----------|-------------|
| [Buffer] | sessionKey  |
| Uint32   | Unknown     |

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
