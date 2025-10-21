---
layout: post
toc: true
title: ChallengeHelperProtocol
---

## Methods

| Method ID | Method Name                                                 |
| --------- | ----------------------------------------------------------- |
| 1         | [GenerateMyFriendChallenges](#1-generatemyfriendchallenges) |
| 2         | [GenerateFriendChallenges](#2-generatefriendchallenges)     |
| 3         | [GetOnlineChallenges](#3-getonlinechallenges)               |

### (1) GenerateMyFriendChallenges
#### Request

| Type                     | Name       |
| ------------------------ | ---------- |
| [List]&#x3C;Uint32&#x3E; | friendPIDs |

#### Response
| Type                                                            | Name   |
| --------------------------------------------------------------- | ------ |
| [List]&#x3C;[FriendChallenge](#friendchallenge-structure)&#x3E; | result |

### (2) GenerateFriendChallenges
#### Request

| Type                     | Name       |
| ------------------------ | ---------- |
| Uint32                   | targetPID  |
| [List]&#x3C;Uint32&#x3E; | friendPIDs |

#### Response
| Type                                                            | Name   |
| --------------------------------------------------------------- | ------ |
| [List]&#x3C;[FriendChallenge](#friendchallenge-structure)&#x3E; | result |

### (3) GetOnlineChallenges
#### Request
This method does not take any parameters

#### Response
| Type                                                            | Name             |
| --------------------------------------------------------------- | ---------------- |
| [List]&#x3C;[OnlineChallenge](#onlinechallenge-structure)&#x3E; | onlineChallenges |

## Types

### FriendChallenge ([Structure])
| Type   | Name              |
| ------ | ----------------- |
| Uint32 | m_ChallengeType   |
| Uint32 | m_MapID           |
| Uint32 | m_FriendToBeatPID |
| Uint32 | m_ValueOnHand     |
| Uint32 | m_ValueToBeat     |

### OnlineChallenge ([Structure])
| Type       | Name          |
| ---------- | ------------- |
| Uint32     | m_ChallengeID |
| [String]   | m_StaticData  |
| [DateTime] | m_StartTime   |
| [DateTime] | m_EndTime     |
| Bool       | m_isComplete  |

[Structure]: /docs/nex/types#structure
[List]: /docs/nex/types#list
[String]: /docs/nex/types#string
[DateTime]: /docs/nex/types#datetime
