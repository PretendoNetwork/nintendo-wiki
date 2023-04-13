---
layout: post
toc: true
title: Monster Hunter XX (109)
---

This page describes the methods that are only seen in Monster Hunter XX (3DS).

## Methods

| Method ID | Method Name                                            |
| --------- | ------------------------------------------------------ |
| 54        | [UpdateFriendUserProfile](#54-updatefrienduserprofile) |
| 55        | [GetFriendUserProfiles](#55-getfrienduserprofiles)     |
| 56        | [GetFriends](#56-getfriends)                           |
| 57        | [AddFriends](#57-addfriends)                           |
| 58        | [RemoveFriend](#58-removefriend)                       |
| 59        | [FindCommunityByOwner](#59-findcommunitybyowner)       |

### (54) UpdateFriendUserProfile
#### Request

| Type              | Name  |
| ----------------- | ----- |
| [FriendUserParam] | param |

#### Response
This method does not return anything.

### (55) GetFriendUserProfiles
#### Request

| Type                 | Name |
| -------------------- | ---- |
| [List]&lt;Uint64&gt; | pids |

#### Response

| Type                           | Name  |
| ------------------------------ | ----- |
| [List]&lt;[FriendUserInfo]&gt; | infos |

### (56) GetFriends
#### Request
This method does not take any parameters.

#### Response

| Type                           | Name  |
| ------------------------------ | ----- |
| [List]&lt;[FriendUserInfo]&gt; | infos |

### (57) AddFriends
#### Request

| Type                 | Name |
| -------------------- | ---- |
| [List]&lt;Uint64&gt; | pids |

#### Response
This method does not return anything.

### (58) RemoveFriend
#### Request

| Type   | Name |
| ------ | ---- |
| Uint64 | pid  |

#### Response
This method does not return anything.

### (59) FindCommunityByOwner
#### Request

| Type                                                 | Name        |
| ---------------------------------------------------- | ----------- |
| Uint64                                               | id          |
| [ResultRange](/docs/nex/types#resultrange-structure) | resultRange |

#### Response

| Type                                | Name         |
| ----------------------------------- | ------------ |
| [List]&lt;[PersistentGathering]&gt; | lstCommunity |

## Types
### FriendUserParam ([Structure])

| Type     | Name |
| -------- | ---- |
| [String] | name |

### FriendUserInfo ([Structure])

| Type     | Name     |
| -------- | -------- |
| Uint64   | pid      |
| [String] | name     |
| Uint32   | presence |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#date-time
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#any-data-holder
[Variant]: /docs/nex/types#variant

[MatchmakeSessionSearchCriteria]: /docs/nex/protocols/match-making/types#matchmakesessionsearchcriteria-structure
[PlayingSession]: /docs/nex/protocols/match-making/types#playingsession-structure
[PersistentGathering]: /docs/nex/protocols/match-making/types#persistentgathering-structure
[SimplePlayingSession]: /docs/nex/protocols/match-making/types#simpleplayingsession-structure
[SimpleCommunity]: /docs/nex/protocols/match-making/types#simplecommunity-structure
[CreateMatchmakeSessionParam]: /docs/nex/protocols/match-making/types#creatematchmakesessionparam-structure
[MatchmakeSession]: /docs/nex/protocols/match-making/types#matchmakesession-structure
[JoinMatchmakeSessionParam]: /docs/nex/protocols/match-making/types#joinmatchmakesessionparam-structure
[AutoMatchmakeParam]: /docs/nex/protocols/match-making/types#automatchmakeparam-structure
[UpdateMatchmakeSessionParam]: /docs/nex/protocols/match-making/types#updatematchmakesessionparam-structure
[FindMatchmakeSessionByParticipantParam]: /docs/nex/protocols/match-making/types#findmatchmakesessionbyparticipantparam-structure
[FindMatchmakeSessionByParticipantResult]: /docs/nex/protocols/match-making/types#findmatchmakesessionbyparticipantresult-structure
[FriendUserParam]: #frienduserparam-structure
[FriendUserInfo]: #frienduserinfo-structure
[MatchmakeParam]: /docs/nex/protocols/match-making/types#matchmakeparam-structure
[MatchmakeBlockListParam]: /docs/nex/protocols/match-making/types#matchmakeblocklistparam-structure
