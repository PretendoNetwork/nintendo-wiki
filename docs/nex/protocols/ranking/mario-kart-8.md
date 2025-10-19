---
layout: post
toc: true
title: Mario Kart 8 (112)
---

This page describes the methods that are only seen in Mario Kart 8.

## Methods

| Method ID | Method Name                                                        |
| --------- | ------------------------------------------------------------------ |
| 14        | GetCompetitionRankingScore                                         |
| 15        | [UploadCompetitionRankingScore](#15-uploadcompetitionrankingscore) |
| 16        | [GetCompetitionInfo](#16-getcompetitioninfo)                       |

### (15) UploadCompetitionRankingScore
#### Request

| Type                                 | Description |
| ------------------------------------ | ----------- |
| [CompetitionRankingUploadScoreParam] | Param       |

#### Response

| Type | Description |
| ---- | ----------- |
| Bool | Result      |

### (16) GetCompetitionInfo
#### Request

| Type                             | Description |
| -------------------------------- | ----------- |
| [CompetitionRankingInfoGetParam] | Param       |

#### Response

| Type                                   | Description |
| -------------------------------------- | ----------- |
| [List]&lt;[CompetitionRankingInfo]&gt; | Info        |

## Types
### CompetitionRankingInfo ([Structure])

| Type                 | Description            |
|----------------------|------------------------|
| Uint32               | Id                     |
| Uint32               | Number of participants |
| [List]&lt;Uint32&gt; | Team scores            |

### CompetitionRankingInfoGetParam ([Structure])

| Type          | Description  |
| ------------- | ------------ |
| Uint8         | Rank order   |
| [ResultRange] | Result range |

### CompetitionRankingUploadScoreParam ([Structure])

| Type      | Description     |
|-----------|-----------------|
| Uint32    | Id              |
| Uint32    | Season id       |
| Uint32    | Unknown         |
| Uint32    | Score           |
| Uint8     | Team id         |
| Uint32    | Team score      |
| Bool      | Is first upload |
| [qBuffer] | Metadata        |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[ResultRange]: /docs/nex/types#resultrange-structure
[PID]: /docs/nex/types#pid

[CompetitionRankingInfo]: #competitionrankinginfo-structure
[CompetitionRankingInfoGetParam]: #competitionrankinginfogetparam-structure
[CompetitionRankingUploadScoreParam]: #competitionrankinguploadscoreparam-structure
