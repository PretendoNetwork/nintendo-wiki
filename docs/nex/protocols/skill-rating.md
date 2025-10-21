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
| Type                     | Name         |
| ------------------------ | ------------ |
| Uint32                   | skillBoardID |
| [List]&#x3C;Uint32&#x3E; | playerPIDs   |

#### Response
| Type                                                                | Name               |
| ------------------------------------------------------------------- | ------------------ |
| [List]&#x3C;[PlayerSkillRating](#playerskillrating-structure)&#x3E; | playerSkillRatings |
| [SkillRating](#skillrating-structure)                               | averageSkillRating |

### (2) UpdateSkillRating
#### Request
| Type                                                            | Name             |
| --------------------------------------------------------------- | ---------------- |
| Uint32                                                          | skillBoardID     |
| [List]&#x3C;[SkillRatingTeam](#skillratingteam-structure)&#x3E; | skillRatingTeams |
| Uint32                                                          | matchID          |

#### Response
| Type                                                                | Name               |
| ------------------------------------------------------------------- | ------------------ |
| [List]&#x3C;[PlayerSkillRating](#playerskillrating-structure)&#x3E; | playerSkillRatings |

### (3) CalculateMatchQuality
#### Request
| Type                                                    | Name                |
| ------------------------------------------------------- | ------------------- |
| Uint32                                                  | skillBoardID        |
| [SkillRating](#skillrating-structure)                   | userSkillRating     |
| [List]&#x3C;[SkillRating](#skillrating-structure)&#x3E; | sessionSkillRatings |

#### Response
| Type                     | Name           |
| ------------------------ | -------------- |
| [List]&#x3C;double&#x3E; | matchQualities |

## Types

### SkillRating ([Structure])
| Type   | Name                    |
| ------ | ----------------------- |
| double | m_mean                  |
| double | m_standardDeviation     |
| Uint32 | m_normalizedSkillRating |

### PlayerSkillRating ([Structure])
| Type                                  | Name          |
| ------------------------------------- | ------------- |
| Uint32                                | m_playerPID   |
| [SkillRating](#skillrating-structure) | m_skillRating |
| Uint32                                | m_matchCount  |

### SkillRatingTeamParticipant ([Structure])
| Type   | Name                      |
| ------ | ------------------------- |
| Uint32 | m_playerPID               |
| Uint32 | m_partialPlayPercentage   |
| Uint32 | m_partialUpdatePercentage |

### SkillRatingTeam ([Structure])
| Type                                                                                  | Name           |
| ------------------------------------------------------------------------------------- | -------------- |
| [List]&#x3C;[SkillRatingTeamParticipant](#skillratingteamparticipant-structure)&#x3E; | m_participants |
| Uint32                                                                                | m_rank         |

[List]: /docs/nex/types#list
[Structure]: /docs/nex/types#structure
