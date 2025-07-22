---
layout: post
toc: true
title: Matchmake Extension (109)
---

## Extended Protocols

The following games have additional methods in the matchmake extension protocol:
* [Mario Kart 8](/docs/nex/protocols/matchmake-extension/mario-kart-8)
* [Mario Kart 8 Deluxe](/docs/nex/protocols/matchmake-extension/mario-kart-8-deluxe)
* [Mario Strikers: Battle League](/docs/nex/protocols/matchmake-extension/mario-strikers-battle-league)
* [Monster Hunter XX (3DS)](/docs/nex/protocols/matchmake-extension/monster-hunter-xx)
* [Nintendo Switch Sports](/docs/nex/protocols/matchmake-extension/switch-sports)
* [Pokemon X / Y](/docs/nex/protocols/matchmake-extension/pokemon-x-y)
* [Real Escape Game](/docs/nex/protocols/matchmake-extension/real-escape-game)
* [Super Mario Bros. 35](/docs/nex/protocols/matchmake-extension/super-mario-bros-35)
* [Super Smash Bros. 4](/docs/nex/protocols/matchmake-extension/super-smash-bros-4)
* [Super Smash Bros. Ultimate](/docs/nex/protocols/matchmake-extension/super-smash-bros-ultimate)
* [Xenoblade Chronicles X](/docs/nex/protocols/matchmake-extension/xenoblade-chronicles-x)

This remainder of this page describes the methods that are not specific to any game.

## Methods

| Method ID | Method Name                                                                                                            |
|-----------|------------------------------------------------------------------------------------------------------------------------|
| 1         | [CloseParticipation](#1-closeparticipation)                                                                            |
| 2         | [OpenParticipation](#2-openparticipation)                                                                              |
| 3         | [AutoMatchmake_Postpone](#3-automatchmake_postpone)                                                                    |
| 4         | [BrowseMatchmakeSession](#4-browsematchmakesession)                                                                    |
| 5         | [BrowseMatchmakeSessionWithHostUrls](#5-browsematchmakesessionwithhosturls)                                            |
| 6         | [CreateMatchmakeSession](#6-creatematchmakesession)                                                                    |
| 7         | [JoinMatchmakeSession](#7-joinmatchmakesession)                                                                        |
| 8         | [ModifyCurrentGameAttribute](#8-modifycurrentgameattribute)                                                            |
| 9         | [UpdateNotificationData](#9-updatenotificationdata)                                                                    |
| 10        | [GetFriendNotificationData](#10-getfriendnotificationdata)                                                             |
| 11        | [UpdateApplicationBuffer](#11-updateapplicationbuffer)                                                                 |
| 12        | [UpdateMatchmakeSessionAttribute](#12-updatematchmakesessionattribute)                                                 |
| 13        | [GetlstFriendNotificationData](#13-getlstfriendnotificationdata)                                                       |
| 14        | [UpdateMatchmakeSession](#14-updatematchmakesession)                                                                   |
| 15        | [AutoMatchmakeWithSearchCriteria_Postpone](#15-automatchmakewithsearchcriteria_postpone)                               |
| 16        | [GetPlayingSession](#16-getplayingsession)                                                                             |
| 17        | [CreateCommunity](#17-createcommunity)                                                                                 |
| 18        | [UpdateCommunity](#18-updatecommunity)                                                                                 |
| 19        | [JoinCommunity](#19-joincommunity)                                                                                     |
| 20        | [FindCommunityByGatheringId](#20-findcommunitybygatheringid)                                                           |
| 21        | [FindOfficialCommunity](#21-findofficialcommunity)                                                                     |
| 22        | [FindCommunityByParticipant](#22-findcommunitybyparticipant)                                                           |
| 23        | [UpdatePrivacySetting](#23-updateprivacysetting)                                                                       |
| 24        | [GetMyBlackList](#24-getmyblacklist)                                                                                   |
| 25        | [AddToBlackList](#25-addtoblacklist)                                                                                   |
| 26        | [RemoveFromBlackList](#26-removefromblacklist)                                                                         |
| 27        | [ClearMyBlackList](#27-clearmyblacklist)                                                                               |
| 28        | [ReportViolation](#28-reportviolation)                                                                                 |
| 29        | [IsViolationUser](#29-isviolationuser)                                                                                 |
| 30        | [JoinMatchmakeSessionEx](#30-joinmatchmakesessionex)                                                                   |
| 31        | [GetSimplePlayingSession](#31-getsimpleplayingsession)                                                                 |
| 32        | [GetSimpleCommunity](#32-getsimplecommunity)                                                                           |
| 33        | [AutoMatchmakeWithGatheringId_Postpone](#33-automatchmakewithgatheringid_postpone)                                     |
| 34        | [UpdateProgressScore](#34-updateprogressscore)                                                                         |
| 35        | [DebugNotifyEvent](#35-debugnotifyevent)                                                                               |
| 36        | [GenerateMatchmakeSessionSystemPassword](#36-generatematchmakesessionsystempassword)                                   |
| 37        | [ClearMatchmakeSessionSystemPassword](#37-clearmatchmakesessionsystempassword)                                         |
| 38        | [CreateMatchmakeSessionWithParam](#38-creatematchmakesessionwithparam)                                                 |
| 39        | [JoinMatchmakeSessionWithParam](#39-joinmatchmakesessionwithparam)                                                     |
| 40        | [AutoMatchmakeWithParam_Postpone](#40-automatchmakewithparam_postpone)                                                 |
| 41        | [FindMatchmakeSessionByGatheringIdDetail](#41-findmatchmakesessionbygatheringiddetail)                                 |
| 42        | [BrowseMatchmakeSessionNoHolder](#42-browsematchmakesessionnoholder)                                                   |
| 43        | [BrowseMatchmakeSessionWithHostUrlsNoHolder](#43-browsematchmakesessionwithhosturlsnoholder)                           |
| 44        | [UpdateMatchmakeSessionPart](#44-updatematchmakesessionpart)                                                           |
| 45        | [RequestMatchmaking](#45-requestmatchmaking)                                                                           |
| 46        | [WithdrawMatchmaking](#46-withdrawmatchmaking)                                                                         |
| 47        | [WithdrawMatchmakingAll](#47-withdrawmatchmakingall)                                                                   |
| 48        | [FindMatchmakeSessionByGatheringId](#48-findmatchmakesessionbygatheringid)                                             |
| 49        | [FindMatchmakeSessionBySingleGatheringId](#49-findmatchmakesessionbysinglegatheringid)                                 |
| 50        | [FindMatchmakeSessionByOwner](#50-findmatchmakesessionbyowner)                                                         |
| 51        | [FindMatchmakeSessionByParticipant](#51-findmatchmakesessionbyparticipant)                                             |
| 52        | [BrowseMatchmakeSessionNoHolderNoResultRange](#52-browsematchmakesessionnoholdernoresultrange)                         |
| 53        | [BrowseMatchmakeSessionWithHostUrlsNoHolderNoResultRange](#53-browsematchmakesessionwithhosturlsnoholdernoresultrange) |
| 54        | FindCommunityByOwner                                                                                                   |

### (1) CloseParticipation
#### Request

| Type   | Name |
|--------|------|
| Uint32 | gid  |

#### Response
This method does not return anything.

### (2) OpenParticipation
#### Request

| Type   | Name |
|--------|------|
| Uint32 | gid  |

#### Response
This method does not return anything.

### (3) AutoMatchmake_Postpone
#### Request

| Type                      | Name         |
|---------------------------|--------------|
| [Data]&lt;[Gathering]&gt; | anyGathering |
| [String]                  | strMessage   |

#### Response

| Type                      | Name            |
|---------------------------|-----------------|
| [Data]&lt;[Gathering]&gt; | joinedGathering |

### (4) BrowseMatchmakeSession
#### Request

| Type                             | Name           |
|----------------------------------|----------------|
| [MatchmakeSessionSearchCriteria] | searchCriteria |
| [ResultRange]                    | resultRange    |

#### Response

| Type                                    | Name         |
|-----------------------------------------|--------------|
| [List]&lt;[Data]&lt;[Gathering]&gt;&gt; | lstGathering |

### (5) BrowseMatchmakeSessionWithHostUrls
#### Request

| Type                             | Name           |
|----------------------------------|----------------|
| [MatchmakeSessionSearchCriteria] | searchCriteria |
| [ResultRange]                    | resultRange    |

#### Response

| Type                                    | Name             |
|-----------------------------------------|------------------|
| [List]&lt;[Data]&lt;[Gathering]&gt;&gt; | lstGathering     |
| [List]&lt;[GatheringURLs]&gt;           | lstGatheringUrls |

### (6) CreateMatchmakeSession
#### Request

| Type                      | Name               | Only present in      |
|---------------------------|--------------------|----------------------|
| [Data]&lt;[Gathering]&gt; | anyGathering       |                      |
| [String]                  | strMessage         |                      |
| Uint16                    | participationCount | NEX v3.4.0 and later |

#### Response

| Type     | Name       | Only present in      |
|----------|------------|----------------------|
| Uint32   | gid        |                      |
| [Buffer] | sessionKey | NEX v3.0.0 and later |

### (7) JoinMatchmakeSession
#### Request

| Type     | Name       |
|----------|------------|
| Uint32   | gid        |
| [String] | strMessage |

#### Response

| Type     | Name       | Only present in      |
|----------|------------|----------------------|
| [Buffer] | sessionKey | NEX v3.0.0 and later |

### (8) ModifyCurrentGameAttribute
#### Request

| Type   | Name        |
|--------|-------------|
| Uint32 | gid         |
| Uint32 | attribIndex |
| Uint32 | newValue    |

#### Response
This method does not return anything.

### (9) UpdateNotificationData
#### Request
**Up to NEX 3:**

| Type     | Name     |
|----------|----------|
| Uint32   | uiType   |
| Uint32   | uiParam1 |
| Uint32   | uiParam2 |
| [String] | strParam |

**NEX 4:**

| Type     | Name     |
|----------|----------|
| Uint32   | uiType   |
| Uint64   | uiParam1 |
| Uint64   | uiParam2 |
| [String] | strParam |

#### Response
This method does not return anything.

### (10) GetFriendNotificationData
#### Request

| Type   | Name   |
|--------|--------|
| Sint32 | uiType |

#### Response

| Type                              | Name     |
|-----------------------------------|----------|
| [List]&lt;[NotificationEvent]&gt; | dataList |

### (11) UpdateApplicationBuffer
#### Request

| Type     | Name              |
|----------|-------------------|
| Uint32   | gid               |
| [Buffer] | applicationBuffer |

#### Response
This method does not return anything.

### (12) UpdateMatchmakeSessionAttribute
#### Request

| Type                 | Name    |
|----------------------|---------|
| Uint32               | gid     |
| [List]&lt;Uint32&gt; | attribs |

#### Response
This method does not return anything.

### (13) GetlstFriendNotificationData
#### Request

| Type                 | Name     |
|----------------------|----------|
| [List]&lt;Uint32&gt; | lstTypes |

#### Response

| Type                              | Name     |
|-----------------------------------|----------|
| [List]&lt;[NotificationEvent]&gt; | dataList |

### (14) UpdateMatchmakeSession
#### Request

| Type                      | Name         |
|---------------------------|--------------|
| [Data]&lt;[Gathering]&gt; | anyGathering |

#### Response
This method does not return anything.

### (15) AutoMatchmakeWithSearchCriteria_Postpone
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

### (16) GetPlayingSession
#### Request

| Type                | Name   |
|---------------------|--------|
| [List]&lt;[PID]&gt; | lstPid |

#### Response

| Type                           | Name              |
|--------------------------------|-------------------|
| [List]&lt;[PlayingSession]&gt; | lstPlayingSession |

### (17) CreateCommunity
#### Request

| Type                  | Name       |
|-----------------------|------------|
| [PersistentGathering] | community  |
| [String]              | strMessage |

#### Response

| Type   | Name |
|--------|------|
| Uint32 | gid  |

### (18) UpdateCommunity
#### Request

| Type                  | Name      |
|-----------------------|-----------|
| [PersistentGathering] | community |

#### Response
This method does not return anything.

### (19) JoinCommunity
#### Request

| Type     | Name        |
|----------|-------------|
| Uint32   | gid         |
| [String] | strMessage  |
| [String] | strPassword |

#### Response
This method does not return anything.

### (20) FindCommunityByGatheringId
#### Request

| Type                 | Name   |
|----------------------|--------|
| [List]&lt;Uint32&gt; | lstGid |

#### Response

| Type                                | Name         |
|-------------------------------------|--------------|
| [List]&lt;[PersistentGathering]&gt; | lstCommunity |

### (21) FindOfficialCommunity
#### Request

| Type          | Name            |
|---------------|-----------------|
| Bool          | isAvailableOnly |
| [ResultRange] | resultRange     |

#### Response

| Type                                | Name         |
|-------------------------------------|--------------|
| [List]&lt;[PersistentGathering]&gt; | lstCommunity |

### (22) FindCommunityByParticipant
#### Request

| Type          | Name        |
|---------------|-------------|
| [PID]         | pid         |
| [ResultRange] | resultRange |

#### Response

| Type                                | Name         |
|-------------------------------------|--------------|
| [List]&lt;[PersistentGathering]&gt; | lstCommunity |

### (23) UpdatePrivacySetting
#### Request

| Type | Name                   |
|------|------------------------|
| Bool | onlineStatus           |
| Bool | participationCommunity |

#### Response
This method does not return anything.

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
#### Request
This method does not take any parameters.

#### Response
This method does not return anything.

### (28) ReportViolation
#### Request

| Type     | Name          |
|----------|---------------|
| [PID]    | pid           |
| [String] | userName      |
| Uint32   | violationCode |

#### Response
This method does not return anything.

### (29) IsViolationUser
#### Request
This method does not take any parameters.

#### Response

| Type   | Name  |
|--------|-------|
| Bool   | flag  |
| Uint32 | score |

### (30) JoinMatchmakeSessionEx
#### Request

| Type     | Name                | Only present in      |
|----------|---------------------|----------------------|
| Uint32   | gid                 |                      |
| [String] | strMessage          |                      |
| Bool     | dontCareMyBlackList |                      |
| Uint16   | participationCount  | NEX v3.4.0 and later |

#### Response

| Type     | Name       |
|----------|------------|
| [Buffer] | sessionKey |

### (31) GetSimplePlayingSession
#### Request

| Type                | Name             |
|---------------------|------------------|
| [List]&lt;[PID]&gt; | lstPrincipalId   |
| Bool                | includeLoginUser |

#### Response

| Type                                 | Name                    |
|--------------------------------------|-------------------------|
| [List]&lt;[SimplePlayingSession]&gt; | lstSimplePlayingSession |

### (32) GetSimpleCommunity
#### Request

| Type                 | Name            |
|----------------------|-----------------|
| [List]&lt;Uint32&gt; | gatheringIdList |

#### Response

| Type                            | Name                   |
|---------------------------------|------------------------|
| [List]&lt;[SimpleCommunity]&gt; | lstSimpleCommunityList |

### (33) AutoMatchmakeWithGatheringId_Postpone
#### Request

| Type                      | Name         |
|---------------------------|--------------|
| [List]&lt;Uint32&gt;      | lstGid       |
| [Data]&lt;[Gathering]&gt; | anyGathering |
| [String]                  | strMessage   |

#### Response

| Type                      | Name            |
|---------------------------|-----------------|
| [Data]&lt;[Gathering]&gt; | joinedGathering |

### (34) UpdateProgressScore
#### Request

| Type   | Name          |
|--------|---------------|
| Uint32 | gid           |
| Uint8  | progressScore |

#### Response
This method does not return anything.

### (35) DebugNotifyEvent
#### Request

| Type     | Name        |
|----------|-------------|
| [PID]    | pid         |
| Uint32   | mainType    |
| Uint32   | subType     |
| Uint64   | param1      |
| Uint64   | param2      |
| [String] | stringParam |

#### Response
This method does not return anything.

### (36) GenerateMatchmakeSessionSystemPassword
#### Request

| Type   | Name |
|--------|------|
| Uint32 | gid  |

#### Response

| Type     | Name     |
|----------|----------|
| [String] | password |

### (37) ClearMatchmakeSessionSystemPassword
#### Request

| Type   | Name |
|--------|------|
| Uint32 | gid  |

#### Response
This method does not return anything.

### (38) CreateMatchmakeSessionWithParam
#### Request

| Type                          | Name                        |
|-------------------------------|-----------------------------|
| [CreateMatchmakeSessionParam] | createMatchmakeSessionParam |

#### Response

| Type               | Name                   |
|--------------------|------------------------|
| [MatchmakeSession] | joinedMatchmakeSession |

### (39) JoinMatchmakeSessionWithParam
#### Request

| Type                        | Name                      |
|-----------------------------|---------------------------|
| [JoinMatchmakeSessionParam] | joinMatchmakeSessionParam |

#### Response

| Type               | Name                   |
|--------------------|------------------------|
| [MatchmakeSession] | joinedMatchmakeSession |

### (40) AutoMatchmakeWithParam_Postpone
#### Request

| Type                 | Name               |
|----------------------|--------------------|
| [AutoMatchmakeParam] | autoMatchmakeParam |

#### Response

| Type               | Name                   |
|--------------------|------------------------|
| [MatchmakeSession] | joinedMatchmakeSession |

### (41) FindMatchmakeSessionByGatheringIdDetail
#### Request

| Type   | Name |
|--------|------|
| Uint32 | gid  |

#### Response

| Type               | Name             |
|--------------------|------------------|
| [MatchmakeSession] | matchmakeSession |

### (42) BrowseMatchmakeSessionNoHolder
#### Request

| Type                             | Name           |
|----------------------------------|----------------|
| [MatchmakeSessionSearchCriteria] | searchCriteria |
| [ResultRange]                    | resultRange    |

#### Response

| Type                             | Name                |
|----------------------------------|---------------------|
| [List]&lt;[MatchmakeSession]&gt; | lstMatchmakeSession |

### (43) BrowseMatchmakeSessionWithHostUrlsNoHolder
#### Request

| Type                             | Name           |
|----------------------------------|----------------|
| [MatchmakeSessionSearchCriteria] | searchCriteria |
| [ResultRange]                    | resultRange    |

#### Response

| Type                             | Name                |
|----------------------------------|---------------------|
| [List]&lt;[MatchmakeSession]&gt; | lstMatchmakeSession |
| [List]&lt;[GatheringURLs]&gt;    | lstGatheringUrls    |

### (44) UpdateMatchmakeSessionPart
#### Request

| Type                          | Name                        |
|-------------------------------|-----------------------------|
| [UpdateMatchmakeSessionParam] | updateMatchmakeSessionParam |

#### Response
This method does not return anything.

### (45) RequestMatchmaking
#### Request

| Type                 | Name               |
|----------------------|--------------------|
| [AutoMatchmakeParam] | autoMatchmakeParam |

#### Response

| Type   | Name      |
|--------|-----------|
| Uint64 | requestId |

### (46) WithdrawMatchmaking
#### Request

| Type   | Name      |
|--------|-----------|
| Uint64 | requestId |

#### Response
This method does not return anything.

### (47) WithdrawMatchmakingAll
#### Request
This method does not take any parameters.

#### Response
This method does not return anything.

### (48) FindMatchmakeSessionByGatheringId
#### Request

| Type                 | Name   |
|----------------------|--------|
| [List]&lt;Uint32&gt; | lstGid |

#### Response

| Type                             | Name                |
|----------------------------------|---------------------|
| [List]&lt;[MatchmakeSession]&gt; | lstMatchmakeSession |

### (49) FindMatchmakeSessionBySingleGatheringId
#### Request

| Type   | Name |
|--------|------|
| Uint32 | gid  |

#### Response

| Type               | Name             |
|--------------------|------------------|
| [MatchmakeSession] | matchmakeSession |

### (50) FindMatchmakeSessionByOwner
#### Request

| Type          | Name        |
|---------------|-------------|
| [PID]         | id          |
| [ResultRange] | resultRange |

#### Response

| Type                             | Name                |
|----------------------------------|---------------------|
| [List]&lt;[MatchmakeSession]&gt; | lstMatchmakeSession |

### (51) FindMatchmakeSessionByParticipant
#### Request

| Type                                     | Name  |
|------------------------------------------|-------|
| [FindMatchmakeSessionByParticipantParam] | param |

#### Response

| Type                                                    | Name       |
|---------------------------------------------------------|------------|
| [List]&lt;[FindMatchmakeSessionByParticipantResult]&gt; | lstSession |

### (52) BrowseMatchmakeSessionNoHolderNoResultRange
#### Request

| Type                             | Name           |
|----------------------------------|----------------|
| [MatchmakeSessionSearchCriteria] | searchCriteria |

#### Response

| Type                             | Name                |
|----------------------------------|---------------------|
| [List]&lt;[MatchmakeSession]&gt; | lstMatchmakeSession |

### (53) BrowseMatchmakeSessionWithHostUrlsNoHolderNoResultRange
#### Request

| Type                             | Name           |
|----------------------------------|----------------|
| [MatchmakeSessionSearchCriteria] | searchCriteria |

#### Response

| Type                             | Name                |
|----------------------------------|---------------------|
| [List]&lt;[MatchmakeSession]&gt; | lstMatchmakeSession |
| [List]&lt;[GatheringURLs]&gt;    | lstGatheringUrls    |

[String]: /docs/nex/types#string
[Data]: /docs/nex/types#anydataholder
[List]: /docs/nex/types#list
[Buffer]: /docs/nex/types#buffer
[PID]: /docs/nex/types#pid

[Gathering]: /docs/nex/protocols/match-making/types#gathering-structure
[MatchmakeSessionSearchCriteria]: /docs/nex/protocols/match-making/types#matchmakesessionsearchcriteria-structure
[ResultRange]: /docs/nex/types#resultrange-structure
[GatheringURLs]: /docs/nex/protocols/match-making/types#gatheringurls-structure
[NotificationEvent]: Notification-Protocol#notificationevent-structure
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
