---
layout: post
toc: true
title: Player Stats (55)
---

## Methods

| Method ID | Method Name                                                         |
| --------- | ------------------------------------------------------------------- |
| 1         | [WriteStats](#1-writestats)                                         |
| 2         | [ReadStatsByPlayers](#2-readstatsbyplayers)                         |
| 3         | [ReadLeaderboardsNearPlayer](#3-readleaderboardsnearplayer)         |
| 4         | [ReadLeaderboardsByRank](#4-readleaderboardsbyrank)                 |
| 5         | [ReadLeaderboardsByPlayers](#5-readleaderboardsbyplayers)           |
| 6         | [ReadStatboardHistory](#6-readstatboardhistory)                     |
| 7         | [ReadLeaderboardHistory](#7-readleaderboardhistory)                 |
| 8         | [ReadStatboardHistoryAggregated](#8-readstatboardhistoryaggregated) |
| 9         | [GetStatboardNextPurgeDate](#9-getstatboardnextpurgedate)           |
| 10        | [ReadLeaderboardsNearPlayer2](#10-readleaderboardsnearplayer2)      |
| 11        | [ReadLeaderboardsByRank2](#11-readleaderboardsbyrank2)              |
| 12        | [ReadLeaderboardsByPlayers2](#12-readleaderboardsbyplayers2)        |
| 13        | [ReadPopulationStats](#13-readpopulationstats)                      |

### (1) WriteStats
#### Request

| Type                             | Name              |
| -------------------------------- | ----------------- |
| [List]&lt;[PlayerStatUpdate]&gt; | playerStatUpdates |

#### Response
This method does not return anything.

### (2) ReadStatsByPlayers
#### Request

| Type                           | Name       |
| ------------------------------ | ---------- |
| [List]&lt;Uint32&gt;           | playerPIDs |
| [List]&lt;[StatboardQuery]&gt; | queries    |

#### Response

| Type                            | Name    |
| ------------------------------- | ------- |
| [List]&lt;[StatboardResult]&gt; | results |

### (3) ReadLeaderboardsNearPlayer
#### Request

| Type                             | Name      |
| -------------------------------- | --------- |
| Uint32                           | playerPID |
| Uint32                           | count     |
| [List]&lt;[LeaderboardQuery]&gt; | queries   |

#### Response

| Type                              | Name    |
| --------------------------------- | ------- |
| [List]&lt;[LeaderboardResult]&gt; | results |

### (4) ReadLeaderboardsByRank
#### Request

| Type                             | Name         |
| -------------------------------- | ------------ |
| Uint32                           | startingRank |
| Uint32                           | count        |
| [List]&lt;[LeaderboardQuery]&gt; | queries      |

#### Response

| Type                              | Name    |
| --------------------------------- | ------- |
| [List]&lt;[LeaderboardResult]&gt; | results |

### (5) ReadLeaderboardsByPlayers
#### Request

| Type                             | Name       |
| -------------------------------- | ---------- |
| [List]&lt;Uint32&gt;             | playerPIDs |
| [List]&lt;[LeaderboardQuery]&gt; | queries    |

#### Response

| Type                              | Name    |
| --------------------------------- | ------- |
| [List]&lt;[LeaderboardResult]&gt; | results |

### (6) ReadStatboardHistory
#### Request

| Type                                  | Name    |
| ------------------------------------- | ------- |
| [List]&lt;[StatboardHistoryQuery]&gt; | queries |

#### Response

| Type                            | Name    |
| ------------------------------- | ------- |
| [List]&lt;[StatboardResult]&gt; | results |

### (7) ReadLeaderboardHistory
#### Request

| Type                                    | Name    |
| --------------------------------------- | ------- |
| [List]&lt;[LeaderboardHistoryQuery]&gt; | queries |

#### Response

| Type                              | Name    |
| --------------------------------- | ------- |
| [List]&lt;[LeaderboardResult]&gt; | results |

### (8) ReadStatboardHistoryAggregated
#### Request

| Type                                            | Name    |
| ----------------------------------------------- | ------- |
| [List]&lt;[StatboardHistoryAggregatedQuery]&gt; | queries |

#### Response

| Type                            | Name    |
| ------------------------------- | ------- |
| [List]&lt;[StatboardResult]&gt; | results |

### (9) GetStatboardNextPurgeDate
#### Request

| Type   | Name           |
| ------ | -------------- |
| Uint32 | boardID        |
| Uint32 | resetFrequency |

#### Response

| Type       | Name      |
| ---------- | --------- |
| [DateTime] | purgeDate |

### (10) ReadLeaderboardsNearPlayer2
#### Request

| Type                              | Name      |
| --------------------------------- | --------- |
| Uint32                            | playerPID |
| Uint32                            | count     |
| [List]&lt;[LeaderboardQuery2]&gt; | queries   |

#### Response

| Type                              | Name    |
| --------------------------------- | ------- |
| [List]&lt;[LeaderboardResult]&gt; | results |

### (11) ReadLeaderboardsByRank2
#### Request

| Type                              | Name         |
| --------------------------------- | ------------ |
| Uint32                            | startingRank |
| Uint32                            | count        |
| [List]&lt;[LeaderboardQuery2]&gt; | queries      |

#### Response

| Type                              | Name    |
| --------------------------------- | ------- |
| [List]&lt;[LeaderboardResult]&gt; | results |

### (12) ReadLeaderboardsByPlayers2
#### Request

| Type                              | Name    |
| --------------------------------- | ------- |
| [List]&lt;[LeaderboardQuery2]&gt; | queries |

#### Response

| Type                              | Name    |
| --------------------------------- | ------- |
| [List]&lt;[LeaderboardResult]&gt; | results |

### (13) ReadPopulationStats
#### Request

| Type                                | Name    |
| ----------------------------------- | ------- |
| [List]&lt;[PopulationStatQuery]&gt; | queries |

#### Response

| Type                                 | Name    |
| ------------------------------------ | ------- |
| [List]&lt;[PopulationStatResult]&gt; | results |

## Types
### PlayerStatUpdate ([Structure])

| Type                            | Name         |
| ------------------------------- | ------------ |
| Uint32                          | m_boardID    |
| [List]&lt;Uint32&gt;            | m_contextIDs |
| [List]&lt;[PropertyVariant]&gt; | m_stats      |

### StatboardQuery ([Structure])

| Type                                   | Name             |
| -------------------------------------- | ---------------- |
| Uint32                                 | m_boardID        |
| [List]&lt;Uint32&gt;                   | m_contextIDs     |
| Uint32                                 | m_resetFrequency |
| [List]&lt;Uint32&gt;                   | m_statIDs        |
| [List]&lt;[PlayerStatSortCriteria]&gt; | m_sortCriterias  |

### LeaderboardQuery ([Structure])

| Type                 | Name             |
| -------------------- | ---------------- |
| Uint32               | m_boardID        |
| Uint32               | m_contextID      |
| Uint32               | m_resetFrequency |
| [List]&lt;Uint32&gt; | m_statIDs        |

### LeaderboardQuery2 ([Structure])

| Type                 | Name             |
| -------------------- | ---------------- |
| Uint32               | m_boardID        |
| Uint32               | m_contextID      |
| Uint32               | m_resetFrequency |
| [List]&lt;Uint32&gt; | m_statIDs        |
| [List]&lt;Uint32&gt; | m_estimatedPIDs  |

### StatboardResult ([Structure])

| Type                            | Name                |
| ------------------------------- | ------------------- |
| Uint32                          | m_boardID           |
| Uint32                          | m_contextID         |
| Uint32                          | m_resetFrequency    |
| [List]&lt;[PlayerStatSet]&gt;   | m_playerStatSets    |
| [List]&lt;[PropertyVariant]&gt; | m_defaultStatValues |

### LeaderboardResult ([Structure])

| Type                       | Name                          |
| -------------------------- | ----------------------------- |
| Uint32                     | m_boardID                     |
| Uint32                     | m_contextID                   |
| Uint32                     | m_resetFrequency              |
| Uint32                     | m_leaderboardTotalPlayerCount |
| [List]&lt;[PlayerRank]&gt; | m_playerRanks                 |

### StatboardHistoryQuery ([Structure])

| Type                                                  | Name            |
| ----------------------------------------------------- | --------------- |
| [List]&lt;Uint32&gt;                                  | m_playerPIDs    |
| Uint32                                                | m_boardID       |
| [List]&lt;Uint32&gt;                                  | m_contextIDs    |
| [List]&lt;Uint32&gt;                                  | m_statIDs       |
| [ResultRange](/docs/nex/types#resultrange-structure) | m_resultRange   |
| [List]&lt;[PropertyVariant]&gt;                       | m_playerStats   |
| [List]&lt;[DateRange]&gt;                             | m_dateRanges    |
| [List]&lt;[PlayerStatSortCriteria]&gt;                | m_sortCriterias |

### StatboardHistoryAggregatedQuery ([Structure])

| Type                                                  | Name            |
| ----------------------------------------------------- | --------------- |
| [List]&lt;Uint32&gt;                                  | m_playerPIDs    |
| Uint32                                                | m_boardID       |
| [List]&lt;Uint32&gt;                                  | m_contextIDs    |
| [List]&lt;Uint32&gt;                                  | m_statIDs       |
| [ResultRange](/docs/nex/types#resultrange-structure) | m_resultRange   |
| [List]&lt;[PropertyVariant]&gt;                       | m_playerStats   |
| [List]&lt;[DateRange]&gt;                             | m_dateRanges    |
| [List]&lt;[PlayerStatSortCriteria]&gt;                | m_sortCriterias |
| Uint32                                                | m_filterOption  |

### LeaderboardHistoryQuery ([Structure])

| Type                                                  | Name           |
| ----------------------------------------------------- | -------------- |
| [List]&lt;Uint32&gt;                                  | m_playerPIDs   |
| Uint32                                                | m_boardID      |
| Uint32                                                | m_contextID    |
| [ResultRange](/docs/nex/types#resultrange-structure) | m_resultRange  |
| [List]&lt;[DateRange]&gt;                             | m_dateRanges   |
| Uint32                                                | m_filterOption |

### PopulationStatQuery ([Structure])

| Type                 | Name        |
| -------------------- | ----------- |
| Uint32               | m_boardID   |
| Uint32               | m_contextID |
| [List]&lt;Uint32&gt; | m_statIDs   |

### PopulationStatResult ([Structure])

| Type   | Name                |
| ------ | ------------------- |
| Uint32 | m_boardID           |
| Uint32 | m_contextID         |
| Uint32 | m_statID            |
| Double | m_sum               |
| Double | m_average           |
| Double | m_standardDeviation |

### PlayerStatSortCriteria ([Structure])

| Type   | Name         |
| ------ | ------------ |
| Uint32 | m_sortStatID |
| Uint32 | m_sortOrder  |

### PlayerStatSet ([Structure])

| Type                            | Name            |
| ------------------------------- | --------------- |
| Uint32                          | m_playerPID     |
| [String]                        | m_playerName    |
| [DateTime]                      | m_submittedTime |
| [List]&lt;[PropertyVariant]&gt; | m_stats         |

### PlayerRank ([Structure])

| Type            | Name            |
| --------------- | --------------- |
| [PlayerStatSet] | m_playerStatSet |
| Uint32          | m_rankStatus    |
| Uint32          | m_rank          |
| [Variant]       | m_score         |

### DateRange ([Structure])

| Type       | Name               |
| ---------- | ------------------ |
| [DateTime] | m_startingDatetime |
| [DateTime] | m_endingDatetime   |

### PropertyVariant ([Structure])

| Type      | Description |
| --------- | ----------- |
| Uint32    | ID          |
| [Variant] | Value       |

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

[PropertyVariant]: #propertyvariant-structure
[PlayerStatUpdate]: #playerstatupdate-structure
[StatboardQuery]: #statboardquery-structure
[StatboardResult]: #statboardresult-structure
[LeaderboardQuery]: #leaderboardquery-structure
[LeaderboardResult]: #leaderboardresult-structure
[StatboardHistoryQuery]: #statboardhistoryquery-structure
[LeaderboardHistoryQuery]: #leaderboardhistoryquery-structure
[StatboardHistoryAggregatedQuery]: #statboardhistoryaggregatedquery-structure
[LeaderboardQuery2]: #leaderboardquery2-structure
[PopulationStatQuery]: #populationstatquery-structure
[PopulationStatResult]: #populationstatresult-structure
[PlayerStatSortCriteria]: #playerstatsortcriteria-structure
[PlayerStatSet]: #playerstatset-structure
[PlayerRank]: #playerrank-structure
[DateRange]: #daterange-structure
