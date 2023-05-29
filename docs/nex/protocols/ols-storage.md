---
layout: post
toc: true
title: OLS Storage
---

## Methods

| Method ID | Method Name                                              |
| --------- | -------------------------------------------------------- |
| 1         | [LoadVersion](#1-loadversion)                            |
| 2         | [SaveLocale](#2-savelocale)                              |
| 3         | [SaveProfile](#3-saveprofile)                            |
| 4         | [LoadIDCard](#4-loadidcard)                              |
| 5         | [QueryFriendProfiles](#5-queryfriendprofiles)            |
| 6         | [QueryUbisoftProfiles](#6-queryubisoftprofiles)          |
| 7         | [CreateMessage](#7-createmessage)                        |
| 8         | [QueryMessage](#8-querymessage)                          |
| 9         | [QueryLeaderboard](#9-queryleaderboard)                  |
| 10        | [QuerySmartSelection](#10-querysmartselection)           |
| 11        | [SaveScore](#11-savescore)                               |
| 12        | [SaveGhost](#12-saveghost)                               |
| 13        | [QueryCompetitionsInfos](#13-querycompetitionsinfos)     |
| 14        | [QueryCompetitionsHistory](#14-querycompetitionshistory) |
| 15        | [QueryCompetitionOfTheDay](#15-querycompetitionoftheday) |
| 16        | [QueryCompetition](#16-querycompetition)                 |

### (1) LoadVersion

#### Request
This method does not take any parameters

#### Response

| Type     | Name        |
| -------- | ----------- |
| Sint32   | version     |
| [String] | sandboxName |

### (2) SaveLocale

#### Request

| Type     | Name       |
| -------- | ---------- |
| [String] | localeCode |

#### Response
This method does not return anything

### (3) SaveProfile

#### Request

| Type   | Name              |
| ------ | ----------------- |
| Uint32 | update_bitfield   |
| Sint8  | level             |
| Sint32 | currency          |
| Uint32 | costume           |
| Uint16 | bronze_medals     |
| Uint16 | silver_medals     |
| Uint16 | gold_medals       |
| Uint16 | diamond_medals    |
| Uint32 | run_distance      |
| Uint16 | teensies_freed    |
| Uint32 | jumps             |
| Uint16 | unlocked_pets     |
| Uint64 | pets              |
| Uint16 | unlocked_costumes |

#### Response

| Type   | Name                 |
| ------ | -------------------- |
| Uint16 | competition_medals_0 |
| Uint16 | competition_medals_1 |
| Uint16 | competition_medals_2 |
| Uint16 | competition_medals_3 |

### (4) LoadIDCard

#### Request

| Type  | Name |
| ----- | ---- |
| [PID] | pid  |

#### Response

| Type                                        | Name    |
| ------------------------------------------- | ------- |
| [OLSRichProfile](#olsrichprofile-structure) | profile |

### (5) QueryFriendProfiles

#### Request

| Type                                                | Name    |
| --------------------------------------------------- | ------- |
| [List]&#x3C;[OLSFriend](#olsfriend-structure)&#x3E; | friends |

#### Response

| Type                                                  | Name     |
| ----------------------------------------------------- | -------- |
| [List]&#x3C;[OLSProfile](#olsprofile-structure)&#x3E; | profiles |

### (6) QueryUbisoftProfiles

#### Request
This method does not take any parameters

#### Response

| Type                                                  | Name     |
| ----------------------------------------------------- | -------- |
| [List]&#x3C;[OLSProfile](#olsprofile-structure)&#x3E; | profiles |

### (7) CreateMessage

#### Request

| Type                                                      | Name         |
| --------------------------------------------------------- | ------------ |
| Uint32                                                    | message_type |
| [List]&#x3C;Sint32&#x3E;                                  | receivers    |
| [List]&#x3C;[OLSAttribute](#olsattribute-structure)&#x3E; | attributes   |

#### Response
This method does not return anything

### (8) QueryMessage

#### Request
This method does not take any parameters

#### Response

| Type                                                  | Name     |
| ----------------------------------------------------- | -------- |
| [List]&#x3C;[OLSMessage](#olsmessage-structure)&#x3E; | messages |

### (9) QueryLeaderboard

#### Request

| Type   | Name           |
| ------ | -------------- |
| Uint32 | id_leaderboard |

#### Response

| Type                                                | Name         |
| --------------------------------------------------- | ------------ |
| [List]&#x3C;[OLSLdbRow](#olsldbrow-structure)&#x3E; | result       |
| [List]&#x3C;Float&#x3E;                             | graduations  |
| [List]&#x3C;Uint32&#x3E;                            | envelope     |
| Uint32                                              | unit         |
| Uint32                                              | my_country   |
| Uint32                                              | participants |
| Bool                                                | cacheable    |

### (10) QuerySmartSelection

#### Request

| Type   | Name           |
| ------ | -------------- |
| Uint32 | id_leaderboard |

#### Response

| Type                                                            | Name   |
| --------------------------------------------------------------- | ------ |
| [List]&#x3C;[OLSSelectionRow](#olsselectionrow-structure)&#x3E; | ghosts |
| [List]&#x3C;[OLSTomb](#olstomb-structure)&#x3E;                 | tombs  |

### (11) SaveScore

#### Request

| Type   | Name                 |
| ------ | -------------------- |
| Uint32 | id_leaderboard       |
| Bool   | is_objective_reached |
| Float  | score                |
| Float  | tomb_x               |
| Float  | tomb_y               |
| Float  | tomb_z               |
| Uint32 | id_costume           |

#### Response

| Type     | Name            |
| -------- | --------------- |
| Bool     | save_score      |
| Bool     | retry           |
| Uint32   | medal           |
| [String] | message_medal   |
| [String] | message_friends |

### (12) SaveGhost

#### Request

| Type   | Name           |
| ------ | -------------- |
| Uint64 | id_ghost       |
| Uint32 | id_competition |
| Uint32 | id_costume     |
| Float  | score          |

#### Response
This method does not return anything

### (13) QueryCompetitionsInfos

#### Request
This method does not take any parameters

#### Response

| Type                                                                    | Name  |
| ----------------------------------------------------------------------- | ----- |
| [List]&#x3C;[OLSCompetitionInfos](#olscompetitioninfos-structure)&#x3E; | infos |

### (14) QueryCompetitionsHistory

#### Request

| Type   | Name                |
| ------ | ------------------- |
| Uint32 | begin               |
| Uint32 | amount              |
| Uint32 | id_competition_meta |

#### Response

| Type                                                                      | Name    |
| ------------------------------------------------------------------------- | ------- |
| [List]&#x3C;[OLSCompetitionResult](#olscompetitionresult-structure)&#x3E; | history |
| Uint32                                                                    | total   |

### (15) QueryCompetitionOfTheDay

#### Request

| Type   | Name                |
| ------ | ------------------- |
| Uint32 | id_competition_meta |

#### Response

| Type                                        | Name            |
| ------------------------------------------- | --------------- |
| [OLSCompetition](#olscompetition-structure) | competition     |
| Uint32                                      | remaningSeconds |
| [OLSCompetition](#olscompetition-structure) | tomorrow        |

### (16) QueryCompetition

#### Request

| Type   | Name           |
| ------ | -------------- |
| Uint32 | id_competition |

#### Response

| Type                                        | Name        |
| ------------------------------------------- | ----------- |
| [OLSCompetition](#olscompetition-structure) | competition |

## Types

### OLSProfile ([Structure])

| Type     | Name       |
| -------- | ---------- |
| Sint32   | PID        |
| [String] | PlatformID |
| [String] | Name       |
| Uint32   | costume    |
| Uint32   | country    |
| Sint8    | level      |

### OLSRichProfile ([Structure])

| Type | Name |
| --- | --- |
| Sint32   | PID                  |
| [String] | Name                 |
| [String] | PlatformID           |
| Sint16   | Country              |
| Uint32   | StatusIcon           |
| Uint32   | lastCostume          |
| Uint16   | totalChallengePlayed |
| Bool     | dailyPlayed          |
| Bool     | weeklyPlayed         |
| Bool     | dailyExpertPlayed    |
| Bool     | weeklyExpertPlayed   |
| Uint16   | DiamondMedals        |
| Uint16   | GoldMedals           |
| Uint16   | SilverMedals         |
| Uint16   | BronzeMedals         |
| Uint32   | GlobalMedalsRank     |
| Uint32   | GlobalMedalsMaxRank  |
| Float    | distanceRun          |
| Uint32   | rank_distanceRun     |
| Float    | lums                 |
| Uint32   | rank_lums            |
| Float    | pets                 |
| Uint32   | rank_pets            |
| Float    | teensies             |
| Uint32   | rank_teensies        |
| Float    | jumps                |
| Uint32   | rank_jumps           |
| Float    | costumes             |
| Uint32   | rank_costumes        |
| Float    | stat_daily           |
| Uint32   | rank_daily           |
| Sint8    | unit_daily           |
| Float    | stat_weekly          |
| Uint32   | rank_weekly          |
| Sint8    | unit_weekly          |
| Float    | stat_daily_expert    |
| Uint32   | rank_daily_expert    |
| Sint8    | unit_daily_expert    |
| Float    | stat_weekly_expert   |
| Uint32   | rank_weekly_expert   |
| Sint8    | unit_weekly_expert   |

### OLSAttribute ([Structure])

| Type   | Name            |
| ------ | --------------- |
| Sint8  | attribute_type  |
| Uint32 | attribute_value |

### OLSMessage ([Structure])

| Type                                                      | Name               |
| --------------------------------------------------------- | ------------------ |
| Sint8                                                     | message_type       |
| Bool                                                      | message_prompt     |
| Bool                                                      | message_drc        |
| Bool                                                      | message_bloomberg  |
| [DateTime]                                                | message_date       |
| Uint32                                                    | message_duration   |
| [String]                                                  | message_title      |
| [String]                                                  | message_body       |
| [List]&#x3C;[String]&#x3E;                                | message_buttons    |
| [List]&#x3C;[OLSAttribute](#olsattribute-structure)&#x3E; | message_attributes |

### OLSCompetitionResult ([Structure])

| Type       | Name           |
| ---------- | -------------- |
| Uint32     | id_leaderboard |
| [String]   | name           |
| [DateTime] | begin          |
| [DateTime] | end            |
| Uint32     | level          |
| Uint32     | mode           |
| Uint32     | rank           |
| Uint32     | max_rank       |

### OLSCompetition ([Structure])

| Type                                                    | Name             |
| ------------------------------------------------------- | ---------------- |
| [OLSCompetitionResult](#olscompetitionresult-structure) | result           |
| [String]                                                | message          |
| Uint32                                                  | seed             |
| Float                                                   | objective        |
| Float                                                   | score_validation |
| Uint32                                                  | id_bricks        |
| Float                                                   | score            |

### OLSSelectionRow ([Structure])

| Type     | Name       |
| -------- | ---------- |
| Uint32   | ID         |
| [String] | name       |
| Uint64   | id_ghost   |
| Uint32   | id_costume |
| Uint32   | country    |
| Uint32   | level      |
| Float    | score      |

### OLSCompetitionInfos ([Structure])

| Type                                                            | Name              |
| --------------------------------------------------------------- | ----------------- |
| Uint32                                                          | id_competition    |
| Uint32                                                          | participants      |
| [List]&#x3C;Uint32&#x3E;                                        | friends           |
| Uint32                                                          | level_id          |
| Uint32                                                          | mode              |
| Uint32                                                          | my_rank           |
| Uint32                                                          | remaining_seconds |
| [List]&#x3C;[OLSSelectionRow](#olsselectionrow-structure)&#x3E; | competitors       |
| Uint32                                                          | unit              |

### OLSLdbRow ([Structure])

| Type     | Name       |
| -------- | ---------- |
| Uint32   | ID         |
| [String] | name       |
| Float    | value      |
| Uint32   | costume    |
| Uint32   | statusIcon |
| Uint32   | country    |

### OLSTomb ([Structure])

| Type     | Name       |
| -------- | ---------- |
| Sint32   | pid        |
| [String] | name       |
| Uint32   | id_costume |
| Float    | x          |
| Float    | y          |
| Float    | z          |

### OLSFriend ([Structure])

| Type   | Name         |
| ------ | ------------ |
| Sint32 | pid          |
| Uint32 | relationship |

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
[PID]: /docs/nex/types#pid
