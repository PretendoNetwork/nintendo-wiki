---
layout: post
toc: true
title: Eagle (120)
---

Games that use [libeagle](/docs/switch/eagle) use a customized matchmake referee protocol. This page describes the customized protocol.

## Methods

| Method ID | Method Name                                               |
| --------- | --------------------------------------------------------- |
| 1         | [StartRound](#1-startround)                               |
| 2         | [GetStartRoundParam](#2-getstartroundparam)               |
| 3         | [EndRound](#3-endround)                                   |
| 4         | [EndRoundWithPartialReport](#4-endroundwithpartialreport) |
| 5         | [EndRoundWithoutReport](#5-endroundwithoutreport)         |
| 6         | [GetRoundParticipants](#6-getroundparticipants)           |
| 7         | [GetNotSummarizedRound](#7-getnotsummarizedround)         |
| 8         | [GetRound](#8-getround)                                   |
| 9         | [GetStatsPrimary](#9-getstatsprimary)                     |
| 10        | [GetStatsPrimaries](#10-getstatsprimaries)                |
| 11        | [GetStatsAll](#11-getstatsall)                            |
| 12        | [CreateStats](#12-createstats)                            |
| 13        | [GetOrCreateStats](#13-getorcreatestats)                  |
| 14        | [ResetStats](#14-resetstats)                              |
| 15        | GetEventPoint                                             |
| 16        | ResetEventPoint                                           |

### (1) StartRound
#### Request

| Type                              | Name  |
| --------------------------------- | ----- |
| [MatchmakeRefereeStartRoundParam] | param |

#### Response

| Type   | Name    |
| ------ | ------- |
| Uint64 | roundId |

### (2) GetStartRoundParam
#### Request

| Type   | Name    |
| ------ | ------- |
| Uint64 | roundId |

#### Response

| Type                              | Name  |
| --------------------------------- | ----- |
| [MatchmakeRefereeStartRoundParam] | param |

### (3) EndRound
#### Request

| Type                            | Name          |
| ------------------------------- | ------------- |
| [MatchmakeRefereeEndRoundParam] | endRoundParam |

#### Response
This method does not return anything.

### (4) EndRoundWithPartialReport
#### Request

| Type                            | Description     |
| ------------------------------- | --------------- |
| [MatchmakeRefereeEndRoundParam] | End round param |

#### Response
This method does not return anything.

### (5) EndRoundWithoutReport
#### Request

| Type   | Name    |
| ------ | ------- |
| Uint64 | roundId |

#### Response
This method does not return anything.

### (6) GetRoundParticipants
#### Request

| Type   | Name    |
| ------ | ------- |
| Uint64 | roundId |

#### Response

| Type                 | Name |
| -------------------- | ---- |
| [List]&lt;Uint64&gt; | pids |

### (7) GetNotSummarizedRound
#### Request
This method does not take any parameters.

#### Response

| Type                                  | Name   |
| ------------------------------------- | ------ |
| [List]&lt;[MatchmakeRefereeRound]&gt; | rounds |

### (8) GetRound
#### Request

| Type   | Name    |
| ------ | ------- |
| Uint64 | roundId |

#### Response

| Type                    | Name  |
| ----------------------- | ----- |
| [MatchmakeRefereeRound] | round |

### (9) GetStatsPrimary
#### Request

| Type                          | Name   |
| ----------------------------- | ------ |
| [MatchmakeRefereeStatsTarget] | target |

#### Response

| Type                    | Name  |
| ----------------------- | ----- |
| [MatchmakeRefereeStats] | stats |

### (10) GetStatsPrimaries
#### Request

| Type                                        | Name    |
| ------------------------------------------- | ------- |
| [List]&lt;[MatchmakeRefereeStatsTarget]&gt; | targets |

#### Response

| Type                                  | Name    |
| ------------------------------------- | ------- |
| [List]&lt;[MatchmakeRefereeStats]&gt; | stats   |
| [List]&lt;[Result]&gt;                | results |

### (11) GetStatsAll
#### Request

| Type                          | Name   |
| ----------------------------- | ------ |
| [MatchmakeRefereeStatsTarget] | target |

#### Response

| Type                                  | Name  |
| ------------------------------------- | ----- |
| [List]&lt;[MatchmakeRefereeStats]&gt; | stats |

### (12) CreateStats
#### Request

| Type                             | Name  |
| -------------------------------- | ----- |
| [MatchmakeRefereeStatsInitParam] | param |

#### Response
This method does not return anything.

### (13) GetOrCreateStats
#### Request

| Type                             | Name  |
| -------------------------------- | ----- |
| [MatchmakeRefereeStatsInitParam] | param |

#### Response

| Type                    | Name  |
| ----------------------- | ----- |
| [MatchmakeRefereeStats] | stats |

### (14) ResetStats
#### Request
This method does not take any parameters.

#### Response
This method does not return anything.

## Types
### MatchmakeRefereeEndRoundParam ([Structure])

| Type                                                | Name                 |
| --------------------------------------------------- | -------------------- |
| Uint64                                              | roundId              |
| [List]&lt;[MatchmakeRefereePersonalRoundResult]&gt; | personalRoundResults |

### MatchmakeRefereeRound ([Structure])

| Type                                                | Name                           |
| --------------------------------------------------- | ------------------------------ |
| Uint64                                              | roundId                        |
| Uint32                                              | gid                            |
| Uint32                                              | state                          |
| Uint32                                              | personalDataCategory           |
| [List]&lt;[MatchmakeRefereePersonalRoundResult]&gt; | normalizedPersonalRoundResults |

### MatchmakeRefereeStats ([Structure])

| Type   | Name                |
| ------ | ------------------- |
| Uint64 | uniqueId            |
| Uint32 | category            |
| [PID]  | pid                 |
| Uint32 | recentDisconnection |
| Uint32 | recentViolation     |
| Uint32 | recentMismatch      |
| Uint32 | recentWin           |
| Uint32 | recentLoss          |
| Uint32 | recentDraw          |
| Uint32 | totalDisconnect     |
| Uint32 | totalViolation      |
| Uint32 | totalMismatch       |
| Uint32 | totalWin            |
| Uint32 | totalLoss           |
| Uint32 | totalDraw           |
| Uint32 | ratingValue         |

### MatchmakeRefereeStartRoundParam ([Structure])

| Type                | Name                 |
| ------------------- | -------------------- |
| Uint32              | personalDataCategory |
| Uint32              | gid                  |
| [List]&lt;[PID]&gt; | pids                 |
| Uint8               | reportSummaryMode    |
| Uint32              | eventId              |

### MatchmakeRefereeStatsTarget ([Structure])

| Type   | Name     |
| ------ | -------- |
| [PID]  | pid      |
| Uint32 | category |

### MatchmakeRefereeStatsInitParam ([Structure])

| Type   | Name               |
| ------ | ------------------ |
| Uint32 | category           |
| Uint32 | initialRatingValue |

### MatchmakeRefereePersonalRoundResult ([Structure])

| Type      | Name                    |
| --------- | ----------------------- |
| [PID]     | pid                     |
| Uint32    | personalRoundResultFlag |
| Uint32    | roundWinLoss            |
| Sint32    | ratingValueChange       |
| [qBuffer] | buffer                  |
| Uint8     | reportSummaryMode       |
| Uint32    | eventId                 |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[PID]: /docs/nex/types#pid
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[StationURL]: /docs/nex/types#stationurl
[Variant]: /docs/nex/types#variant

[MatchmakeRefereeStartRoundParam]: #matchmakerefereestartroundparam-structure
[MatchmakeRefereeEndRoundParam]: #matchmakerefereeendroundparam-structure
[MatchmakeRefereeRound]: #matchmakerefereeround-structure
[MatchmakeRefereeStatsTarget]: #matchmakerefereestatstarget-structure
[MatchmakeRefereeStats]: #matchmakerefereestats-structure
[MatchmakeRefereeStatsInitParam]: #matchmakerefereestatsinitparam-structure
[MatchmakeRefereePersonalRoundResult]: #matchmakerefereepersonalroundresult-structure
