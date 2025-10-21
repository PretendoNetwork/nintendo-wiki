---
layout: post
toc: true
title: SkillRatingProtocol (48)
---

## Methods

| Method ID | Method Name                                       |
| --------- | ------------------------------------------------- |
| 1         | [GetSkillRatings](#1-getskillratings)             |
| 2         | [UpdateSkillRating](#2-updateskillrating)         |
| 3         | [CalculateMatchQuality](#3-calculatematchquality) |

### (1) GetSkillRatings
#### Request

| Type                 | Name         |
| -------------------- | ------------ |
| Uint32               | skillBoardID |
| [List]&lt;Uint32&gt; | playerPIDs   |

#### Response

| Type                                                            | Name               |
| --------------------------------------------------------------- | ------------------ |
| [List]&lt;[PlayerSkillRating](#playerskillrating-structure)&gt; | playerSkillRatings |
| [SkillRating](#skillrating-structure)                           | averageSkillRating |

### (2) UpdateSkillRating
#### Request

| Type                                                        | Name             |
| ----------------------------------------------------------- | ---------------- |
| Uint32                                                      | skillBoardID     |
| [List]&lt;[SkillRatingTeam](#skillratingteam-structure)&gt; | skillRatingTeams |
| Uint32                                                      | matchID          |

#### Response

| Type                                                            | Name               |
| --------------------------------------------------------------- | ------------------ |
| [List]&lt;[PlayerSkillRating](#playerskillrating-structure)&gt; | playerSkillRatings |

### (3) CalculateMatchQuality
#### Request

| Type                                                | Name                |
| --------------------------------------------------- | ------------------- |
| Uint32                                              | skillBoardID        |
| [SkillRating](#skillrating-structure)               | userSkillRating     |
| [List]&lt;[SkillRating](#skillrating-structure)&gt; | sessionSkillRatings |

#### Response

| Type                 | Name           |
| -------------------- | -------------- |
| [List]&lt;Double&gt; | matchQualities |

## Types

### SkillRating ([Structure])
| Type   | Name                    |
| ------ | ----------------------- |
| Double | m_mean                  |
| Double | m_standardDeviation     |
| Uint32 | m_normalizedSkillRating |

### PlayerSkillRating ([Structure])
| Type                                  | Name          |
| ------------------------------------- | ------------- |
| [PID]                                 | m_playerPID   |
| [SkillRating](#skillrating-structure) | m_skillRating |
| Uint32                                | m_matchCount  |

### SkillRatingTeamParticipant ([Structure])
| Type   | Name                      |
| ------ | ------------------------- |
| [PID]  | m_playerPID               |
| Uint32 | m_partialPlayPercentage   |
| Uint32 | m_partialUpdatePercentage |

### SkillRatingTeam ([Structure])
| Type                                                                              | Name           |
| --------------------------------------------------------------------------------- | -------------- |
| [List]&lt;[SkillRatingTeamParticipant](#skillratingteamparticipant-structure)&gt; | m_participants |
| Uint32                                                                            | m_rank         |

[List]: /docs/nex/types#list
[Structure]: /docs/nex/types#structure
[PID]: /docs/nex/types#pid
