---
layout: post
toc: true
title: Super Smash Bros. 4 (109)
---

This page describes the methods that are only seen in Super Smash Bros. 4. Everything described in the Notes column for each table are guesses and may not be accurate.

## Methods

Methods 36 - 48 and 51 belong to the TournamentProtocol. The others belong to the CrossProtocol.

| Method ID | Method Name                                                                                                |
|-----------|------------------------------------------------------------------------------------------------------------|
| 36        | [GetTournament](#36-gettournament)                                                                         |
| 37        | GetTournamentReplayId                                                                                      |
| 38        | [GetTournamentResult](#38-gettournamentresult)                                                             |
| 39        | [SetTournamentReplayId](#39-settournamentreplayid)                                                         |
| 40        | [GetTournamentProfiles](#40-gettournamentprofiles)                                                         |
| 41        | [JoinOrCreateMatchmakeSession](#41-joinorcreatematchmakesession)                                           |
| 42        | [RegisterTournamentPlayerInfo](#42-registertournamentplayerinfo)                                           |
| 43        | RegisterTournamentBot                                                                                      |
| 44        | ReportTournamentBotRoundResult                                                                             |
| 45        | ReplaceTournamentLeafNode                                                                                  |
| 46        | [StartTournament](#46-starttournament)                                                                     |
| 47        | [AutoTournamentMatchmake](#47-autotournamentmatchmake)                                                     |
| 48        | [SimpleFindByID](#48-simplefindbyid)                                                                       |
| 49        | [GetTournamentCompetitions](#49-gettournamentcompetitions)                                                 |
| 50        | [GetTournamentCompetition](#50-gettournamentcompetition)                                                   |
| 51        | [GetTournamentReplayIds](#51-gettournamentreplayids)                                                       |
| 52        | [RegisterCommunityCompetition](#52-registercommunitycompetition)                                           |
| 53        | [UnregisterCommunityCompetition](#53-unregistercommunitycompetition)                                       |
| 54        | [UnregisterCommunityCompetitionById](#54-unregistercommunitycompetitionbyid)                               |
| 55        | [GetCommunityCompetitions](#55-getcommunitycompetitions)                                                   |
| 56        | GetCommunityCompetitionById                                                                                |
| 57        | [FindCommunityCompetitionsByParticipant](#57-findcommunitycompetitionsbyparticipant)                       |
| 58        | [FindCommunityCompetitionsByGatheringId](#58-findcommunitycompetitionsbygatheringid)                       |
| 59        | [SelectCommunityCompetitionByOwner](#59-selectcommunitycompetitionbyowner)                                 |
| 60        | [JoinCommunityCompetition](#60-joincommunitycompetition)                                                   |
| 61        | [JoinCommunityCompetitionByGatheringId](#61-joincommunitycompetitionbygatheringid)                         |
| 62        | [EndCommunityCompetitionParticipation](#62-endcommunitycompetitionparticipation)                           |
| 63        | [EndCommunityCompetitionParticipationByGatheringId](#63-endcommunitycompetitionparticipationbygatheringid) |
| 64        | [SearchCommunityCompetition](#64-searchcommunitycompetition)                                               |
| 65        | [PostCommunityCompetitionMatchResult](#65-postcommunitycompetitionmatchresult)                             |
| 66        | [GetCommunityCompetitionRanking](#66-getcommunitycompetitionranking)                                       |
| 67        | DEBUG_RegisterCommunityCompetition                                                                         |
| 68        | DEBUG_UnregisterCommunityCompetition                                                                       |
| 69        | DEBUG_JoinCommunityCompetition                                                                             |
| 70        | DEBUG_EndCommunityCompetitionParticipation                                                                 |
| 71        | DEBUG_PostCommunityCompetitionMatchResult                                                                  |

### (36) GetTournament
#### Request

| Type   | Description | Notes         |
|--------|-------------|---------------|
| Uint32 | Unknown     | Tournament ID |

#### Response

| Type         | Description |
|--------------|-------------|
| [Tournament] | Tournament  |

### (38) GetTournamentResult
#### Request

| Type   | Description | Notes         |
|--------|-------------|---------------|
| Uint32 | Unknown     | Tournament ID |

#### Response

| Type                | Description |
|---------------------|-------------|
| Uint8               | Unknown (1) |
| Uint8               | Unknown (2) |
| [List]&lt;Uint8&gt; | Unknown (3) |

### (39) SetTournamentReplayId
#### Request

| Type   | Description | Notes         |
|--------|-------------|---------------|
| Uint32 | Unknown (1) | Tournament ID |
| Uint8  | Unknown (2) | Slot ID       |
| Uint64 | Unknown (3) | Replay ID     |

#### Response
This method does not return anything.

### (40) GetTournamentProfiles
#### Request

| Type   | Description | Notes         |
|--------|-------------|---------------|
| Uint32 | Unknown     | Tournament ID |

#### Response

| Type                                  | Description |
|---------------------------------------|-------------|
| [List]&lt;[TournamentProfileInfo]&gt; | Profiles    |

### (41) JoinOrCreateMatchmakeSession
#### Request

| Type                      | Description  |
|---------------------------|--------------|
| Uint32                    | Unknown (1)  |
| Uint32                    | Unknown (2)  |
| [Data]&lt;[Gathering]&gt; | anyGathering |
| [String]                  | strMessage   |

#### Response

| Type                      | Description     |
|---------------------------|-----------------|
| [Data]&lt;[Gathering]&gt; | joinedGathering |

### (42) RegisterTournamentPlayerInfo
#### Request

| Type                                | Description |
|-------------------------------------|-------------|
| [RegisterTournamentPlayerInfoParam] | Param       |

#### Response
This method does not return anything.

### (46) StartTournament
#### Request

| Type                   | Description |
|------------------------|-------------|
| [StartTournamentParam] | Param       |

#### Response
This method does not return anything.

### (47) AutoTournamentMatchmake
#### Request

| Type                      | Description  |
|---------------------------|--------------|
| Uint32                    | Unknown (1)  |
| Uint32                    | Unknown (2)  |
| [Data]&lt;[Gathering]&gt; | anyGathering |
| [String]                  | strMessage   |

#### Response

| Type                      | Description     |
|---------------------------|-----------------|
| [Data]&lt;[Gathering]&gt; | joinedGathering |

### (48) SimpleFindByID
#### Request

| Type                 | Description |
|----------------------|-------------|
| [List]&lt;Uint32&gt; | Unknown (1) |
| [List]&lt;Uint32&gt; | Unknown (2) |

#### Response

| Type                 | Description |
|----------------------|-------------|
| [List]&lt;Uint32&gt; | Unknown     |

### (49) GetTournamentCompetitions
#### Request

| Type  | Description |
|-------|-------------|
| Uint8 | Unknown (1) |
| Uint8 | Unknown (2) |

#### Response

| Type                                  | Description  |
|---------------------------------------|--------------|
| [List]&lt;[TournamentCompetition]&gt; | Competitions |

### (50) GetTournamentCompetition
#### Request

| Type   | Description | Notes         |
|--------|-------------|---------------|
| Uint32 | Unknown (1) | Tournament ID |
| Uint8  | Unknown (2) |               |

#### Response

| Type                    | Description |
|-------------------------|-------------|
| [TournamentCompetition] | Competition |

### (51) GetTournamentReplayIds
#### Request

| Type   | Description | Notes         |
|--------|-------------|---------------|
| Uint32 | Unknown     | Tournament ID |

#### Response

| Type                 | Description |
|----------------------|-------------|
| [List]&lt;Uint64&gt; | Replay IDs  |

### (52) RegisterCommunityCompetition
#### Request

| Type                   | Description |
|------------------------|-------------|
| [CommunityCompetition] | Competition |

#### Response

| Type   | Description | Notes                                    |
|--------|-------------|------------------------------------------|
| Uint32 | Unknown (1) | CommunityCompetition ID? / Gathering ID? |
| Uint32 | Unknown (2) | Tournament ID?                           |

### (53) UnregisterCommunityCompetition
#### Request

| Type  | Description |
|-------|-------------|
| Uint8 | Unknown     |

#### Response
This method does not return anything.

### (54) UnregisterCommunityCompetitionById
#### Request

| Type   | Description | Notes                    |
|--------|-------------|--------------------------|
| Uint32 | Unknown     | CommunityCompetition ID? |

#### Response
This method does not return anything.

### (55) GetCommunityCompetitions
#### Request

| Type   | Description | Notes                    |
|--------|-------------|--------------------------|
| Uint32 | Unknown (1) | CommunityCompetition ID? |
| Bool   | Unknown (2) |                          |

#### Response

| Type                                 | Description  |
|--------------------------------------|--------------|
| [List]&lt;[CommunityCompetition]&gt; | Competitions |

### (57) FindCommunityCompetitionsByParticipant
#### Request

| Type  | Description |
|-------|-------------|
| [PID] | Participant |
| Bool  | Unknown     |

#### Response

| Type                                 | Description  |
|--------------------------------------|--------------|
| [List]&lt;[CommunityCompetition]&gt; | Competitions |

### (58) FindCommunityCompetitionsByGatheringId
#### Request

| Type                 | Description   |
|----------------------|---------------|
| [List]&lt;Uint32&gt; | Gathering IDs |
| Bool                 | Unknown       |

#### Response

| Type                                 | Description  |
|--------------------------------------|--------------|
| [List]&lt;[CommunityCompetition]&gt; | Competitions |

### (59) SelectCommunityCompetitionByOwner
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | Owner PIDs  |
| Bool                | Unknown     |

#### Response

| Type                                 | Description  |
|--------------------------------------|--------------|
| [List]&lt;[CommunityCompetition]&gt; | Competitions |

### (60) JoinCommunityCompetition
#### Request

| Type     | Description | Notes                    |
|----------|-------------|--------------------------|
| Uint32   | Unknown (1) | CommunityCompetition ID? |
| Bool     | Unknown (2) |                          |
| Bool     | Unknown (3) |                          |
| [String] | Unknown (4) |                          |
| [String] | Unknown (5) |                          |

#### Response
This method does not return anything.

### (61) JoinCommunityCompetitionByGatheringId
#### Request

| Type     | Description  |
|----------|--------------|
| Uint32   | Gathering ID |
| Bool     | Unknown (1)  |
| Bool     | Unknown (2)  |
| [String] | Unknown (3)  |
| [String] | Unknown (4)  |

#### Response
This method does not return anything.

### (62) EndCommunityCompetitionParticipation
#### Request

| Type     | Description | Notes                    |
|----------|-------------|--------------------------|
| Uint32   | Unknown (1) | CommunityCompetition ID? |
| Bool     | Unknown (2) |                          |
| Bool     | Unknown (3) |                          |
| [String] | Unknown (4) |                          |

#### Response
This method does not return anything.

### (63) EndCommunityCompetitionParticipationByGatheringId
#### Request

| Type     | Description  |
|----------|--------------|
| Uint32   | Gathering ID |
| Bool     | Unknown (1)  |
| Bool     | Unknown (2)  |
| [String] | Unknown (3)  |

#### Response
This method does not return anything.

### (64) SearchCommunityCompetition
#### Request

| Type                              | Description |
|-----------------------------------|-------------|
| [SearchCommunityCompetitionParam] | Param       |

#### Response

| Type                                 | Description  |
|--------------------------------------|--------------|
| [List]&lt;[CommunityCompetition]&gt; | Competitions |

### (65) PostCommunityCompetitionMatchResult
#### Request

| Type                              | Description  |
|-----------------------------------|--------------|
| [CommunityCompetitionMatchResult] | Match result |

#### Response

| Type | Description |
|------|-------------|
| Bool | Unknown (1) |
| Bool | Unknown (2) |

### (66) GetCommunityCompetitionRanking
#### Request

| Type   | Description | Notes                    |
|--------|-------------|--------------------------|
| Uint32 | Unknown     | CommunityCompetition ID? |

#### Response

| Type                                         | Description |
|----------------------------------------------|-------------|
| [List]&lt;[CommunityCompetitionRankData]&gt; | Rankings    |

## Types
### CommunityCompetition ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [PersistentGathering]
{: .prompt-info }

| Type       | Description  |
|------------|--------------|
| Uint32     | Unknown (1)  |
| Uint8      | Unknown (2)  |
| Uint8      | Unknown (3)  |
| Uint16     | Unknown (4)  |
| Uint8      | Unknown (5)  |
| Uint8      | Unknown (6)  |
| Uint8      | Unknown (7)  |
| [DateTime] | Unknown (8)  |
| Uint32     | Unknown (9)  |
| Uint32     | Unknown (10) |
| [DateTime] | Unknown (11) |
| [qBuffer]  | Unknown (12) |

### CommunityCompetitionMatchResult ([Structure])

| Type   | Description |
|--------|-------------|
| Uint32 | Unknown (1) |
| Bool   | Unknown (2) |
| Uint32 | Unknown (3) |
| Uint8  | Unknown (4) |
| Uint32 | Unknown (5) |

### CommunityCompetitionRankData ([Structure])

| Type       | Description |
|------------|-------------|
| Uint32     | Unknown (1) |
| Uint32     | Unknown (2) |
| Uint32     | Unknown (3) |
| Uint32     | Unknown (4) |
| [DateTime] | Unknown (5) |
| Uint32     | Unknown (6) |
| [qBuffer]  | Unknown (7) |

### RegisterTournamentPlayerInfoParam ([Structure])

| Type   | Description |
|--------|-------------|
| Uint32 | Unknown (1) |
| Uint16 | Unknown (2) |
| Uint8  | Unknown (3) |
| Uint8  | Unknown (4) |

### SearchCommunityCompetitionParam ([Structure])

| Type   | Description |
|--------|-------------|
| Uint8  | Unknown (1) |
| Uint8  | Unknown (2) |
| Uint8  | Unknown (3) |

### StartTournamentParam ([Structure])

| Type                       | Description |
|----------------------------|-------------|
| Uint32                     | Unknown (1) |
| Uint8                      | Unknown (2) |
| Uint8                      | Unknown (3) |
| Uint32                     | Unknown (4) |
| Uint8                      | Unknown (5) |
| [Map]&lt;Uint32, Uint8&gt; | Unknown (6) |

### Tournament ([Structure])

| Type                 | Description  |
|----------------------|--------------|
| Uint8                | Unknown (1)  |
| Uint32               | Unknown (2)  |
| Uint8                | Unknown (3)  |
| Uint8                | Unknown (4)  |
| Uint8                | Unknown (5)  |
| [List]&lt;Uint8&gt;  | Unknown (6)  |
| Uint8                | Unknown (7)  |
| [List]&lt;Uint32&gt; | Unknown (8)  |
| [List]&lt;Uint16&gt; | Unknown (9)  |
| [List]&lt;Uint8&gt;  | Unknown (10) |
| [List]&lt;Uint8&gt;  | Unknown (11) |
| Uint64               | Unknown (12) |
| Uint8                | Unknown (13) |
| [List]&lt;Uint8&gt;  | Unknown (14) |

### TournamentCompetition ([Structure])

| Type       | Description  |
|------------|--------------|
| Uint32     | Unknown (1)  |
| Uint8      | Unknown (2)  |
| Uint8      | Unknown (3)  |
| [String]   | Unknown (4)  |
| Uint8      | Unknown (5)  |
| [DateTime] | Unknown (6)  |
| [DateTime] | Unknown (7)  |
| Uint32     | Unknown (8)  |
| Uint32     | Unknown (9)  |
| Uint8      | Unknown (10) |
| Uint8      | Unknown (11) |
| Uint16     | Unknown (12) |
| Uint16     | Unknown (13) |
| Uint8      | Unknown (14) |
| Uint8      | Unknown (15) |
| Uint16     | Unknown (16) |
| Uint8      | Unknown (17) |

### TournamentProfileInfo ([Structure])

| Type      | Description |
|-----------|-------------|
| Uint32    | Unknown (1) |
| [qBuffer] | Unknown (2) |

[String]: /docs/nex/types#string
[StationURL]: /docs/nex/types#stationurl
[List]: /docs/nex/types#list
[PID]: /docs/nex/types#pid
[Structure]: /docs/nex/types#structure
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[DateTime]: /docs/nex/types#datetime
[Map]: /docs/nex/types#map
[Variant]: /docs/nex/types#variant
[ResultRange]: /docs/nex/types#resultrange-structure
[Data]: /docs/nex/types#anydataholder

[Gathering]: /docs/nex/protocols/match-making/types#gathering-structure
[PersistentGathering]: /docs/nex/protocols/match-making/types#persistentgathering-structure

[CommunityCompetition]: #communitycompetition-structure
[CommunityCompetitionMatchResult]: #communitycompetitionmatchresult-structure
[CommunityCompetitionRankData]: #communitycompetitionrankdata-structure
[RegisterTournamentPlayerInfoParam]: #registertournamentplayerinfoparam-structure
[SearchCommunityCompetitionParam]: #searchcommunitycompetitionparam-structure
[StartTournamentParam]: #starttournamentparam-structure
[Tournament]: #tournament-structure
[TournamentCompetition]: #tournamentcompetition-structure
[TournamentProfileInfo]: #tournamentprofileinfo-structure
