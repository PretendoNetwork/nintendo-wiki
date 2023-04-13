---
layout: post
toc: true
title: Mario Kart 8 Deluxe (112)
---

This page describes the methods that are only seen in Mario Kart 8 Deluxe.

## Methods

| Method ID | Method Name                                                        |
| --------- | ------------------------------------------------------------------ |
| 16        | [GetCompetitionRankingScore](#16-getcompetitionrankingscore)       |
| 17        | [UploadCompetitionRankingScore](#17-uploadcompetitionrankingscore) |
| 18        | [GetCompetitionInfo](#18-getcompetitioninfo)                       |
| 19        | UploadScorePack                                                    |
| 20        | GetScorePack                                                       |
| 21        | ExecuteDeleteScoreJob                                              |
| 22        | [GetCommonDataByPIDList](#22-getcommondatabypidlist)               |

### (16) GetCompetitionRankingScore
#### Request

| Type                              | Description |
| --------------------------------- | ----------- |
| [CompetitionRankingGetScoreParam] | Param       |

#### Response

| Type                                        | Description |
| ------------------------------------------- | ----------- |
| [List]&lt;[CompetitionRankingScoreInfo]&gt; | Score info  |

### (17) UploadCompetitionRankingScore
#### Request

| Type                                 | Description |
| ------------------------------------ | ----------- |
| [CompetitionRankingUploadScoreParam] | Param       |

#### Response

| Type | Description |
| ---- | ----------- |
| Bool | Result      |

### (18) GetCompetitionInfo
#### Request

| Type                             | Description |
| -------------------------------- | ----------- |
| [CompetitionRankingInfoGetParam] | Param       |

#### Request

| Type                                   | Description      |
| -------------------------------------- | ---------------- |
| [List]&lt;[CompetitionRankingInfo]&gt; | Competition info |

### (22) GetCommonDataByPIDList
#### Request

| Type                | Description |
| ------------------- | ----------- |
| [List]&lt;[PID]&gt; | Pids        |

#### Response

| Type             | Description |
| ---------------- | ----------- |
| [CommonDataList] | Common data |

## Types
### CommonDataList ([Structure])

| Type                    | Description |
| ----------------------- | ----------- |
| [List]&lt;[qBuffer]&gt; | Common data |

### CompetitionRankingGetScoreParam ([Structure])

| Type          | Description  |
| ------------- | ------------ |
| Uint32        | Unknown      |
| [ResultRange] | Result range |

### CompetitionRankingInfo ([Structure])

| Type                 | Description |
| -------------------- | ----------- |
| Uint32               | Unknown     |
| Uint32               | Unknown     |
| [List]&lt;Uint32&gt; | Unknown     |

### CompetitionRankingInfoGetParam ([Structure])

| Type          | Description  |
| ------------- | ------------ |
| Uint8         | Unknown      |
| [ResultRange] | Result range |

### CompetitionRankingScoreData ([Structure])

| Type       | Description |
| ---------- | ----------- |
| Uint32     | Unknown     |
| [PID]      | User id     |
| Uint32     | Unknown     |
| [DateTime] | Datetime    |
| Uint8      | Unknown     |
| [qBuffer]  | Metadata    |

### CompetitionRankingScoreInfo ([Structure])

| Type                                        | Description |
| ------------------------------------------- | ----------- |
| Uint32                                      | Unknown     |
| [List]&lt;[CompetitionRankingScoreData]&gt; | Score data  |
| Uint32                                      | Unknown     |
| [List]&lt;Uint32&gt;                        | Unknown     |

### CompetitionRankingUploadScoreParam ([Structure])

| Type      | Description |
| --------- | ----------- |
| Uint32    | Unknown     |
| Uint32    | Unknown     |
| Uint32    | Unknown     |
| Uint32    | Unknown     |
| Uint8     | Unknown     |
| Uint32    | Unknown     |
| Bool      | Unknown     |
| [qBuffer] | Metadata    |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[PID]: /docs/nex/types#pid
[ResultRange]: /docs/nex/types#resultrange-structure

[CommonDataList]: #commondatalist-structure
[CompetitionRankingInfo]: #competitionrankinginfo-structure
[CompetitionRankingInfoGetParam]: #competitionrankinginfogetparam-structure
[CompetitionRankingScoreData]: #competitionrankingscoredata-structure
[CompetitionRankingScoreInfo]: #competitionrankingscoreinfo-structure
[CompetitionRankingGetScoreParam]: #competitionrankinggetscoreparam-structure
[CompetitionRankingUploadScoreParam]: #competitionrankinguploadscoreparam-structure
