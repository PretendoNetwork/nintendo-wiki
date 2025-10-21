---
layout: post
toc: true
title: SparkProtocol (60)
---

## Methods

| Method ID | Method Name                                                |
| --------- | ---------------------------------------------------------- |
| 1         | ?                                                          |
| 2         | ?                                                          |
| 3         | ?                                                          |
| 4         | [CreateGame](#4-creategame)                                |
| 5         | [JoinGame](#5-joingame)                                    |
| 6         | GetFriendStats                                             |
| 7         | GetSelfStats                                               |
| 8         | GetParticipationStats                                      |
| 9         | GetStats                                                   |
| 10        | GetDetailedFriendInfoList                                  |
| 11        | GetPlayerStatus                                            |
| 12        | ReportStats                                                |
| 13        | GetSecretQuestion                                          |
| 14        | ValidateSecretAnswer                                       |
| 15        | [EndGame](#15-endgame)                                     |
| 16        | [CancelGame](#16-cancelgame)                               |
| 17        | [GetLeaderboardStats](#17-getleaderboardstats)             |
| 18        | SelectTheOwnerForPlayAgain                                 |
| 19        | CloseParticipation                                         |
| 20        | [BrowseMatchesWithHostUrls](#20-browsematcheswithhosturls) |
| 21        | [QuickMatchWithHostUrls](#21-quickmatchwithhosturls)       |
| 22        | GetDetailedInvitationsReceivedWithHostUrls                 |
| 23        | OpenParticipation                                          |
| 25        | ReportStatsWithGlobalLeaderboardList                       |

### (4) CreateGame
#### Request

| Type     | Name     |
| -------- | -------- |
| [String] | gameName |

#### Response
| Type    | Name     |
| ------- | -------- |
| boolean | %retval% |

### (5) JoinGame
#### Request

| Type     | Name     |
| -------- | -------- |
| [String] | gameName |

#### Response
Unknown response format

### (15) EndGame
#### Request
Unknown request format

#### Response
| Type    | Name     |
| ------- | -------- |
| boolean | %retval% |

### (16) CancelGame
#### Request
Unknown request format

#### Response
| Type    | Name     |
| ------- | -------- |
| boolean | %retval% |

### (17) GetLeaderboardStats
#### Request

| Type     | Name   |
| -------- | ------ |
| [String] | LbType |

#### Response
Unknown response format

### (20) BrowseMatchesWithHostUrls
#### Request

| Type     | Name     |
| -------- | -------- |
| [String] | hostUrls |

#### Response
Unknown response format

### (21) QuickMatchWithHostUrls
#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | matchType |

#### Response
Unknown response format

[String]: /docs/nex/types#string
