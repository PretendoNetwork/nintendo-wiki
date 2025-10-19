---
layout: post
toc: true
title: Friends Wii U (102)
---

Official name: `NintendoFriendPresenceV2Protocol`

## Methods

| Method ID | Method Name                                                      |
| --------- | ---------------------------------------------------------------- |
| 1         | [UpdateAndGetAllInformation](#1-updateandgetallinformation)      |
| 2         | [AddFriend](#2-addfriend)                                        |
| 3         | [AddFriendByName](#3-addfriendbyname)                            |
| 4         | [RemoveFriend](#4-removefriend)                                  |
| 5         | [AddFriendRequest](#5-addfriendrequest)                          |
| 6         | [CancelFriendRequest](#6-cancelfriendrequest)                    |
| 7         | [AcceptFriendRequest](#7-acceptfriendrequest)                    |
| 8         | [DeleteFriendRequest](#8-deletefriendrequest)                    |
| 9         | [DenyFriendRequest](#9-denyfriendrequest)                        |
| 10        | [MarkFriendRequestsAsReceived](#10-markfriendrequestsasreceived) |
| 11        | [AddBlackList](#11-addblacklist)                                 |
| 12        | [RemoveBlackList](#12-removeblacklist)                           |
| 13        | [UpdatePresence](#13-updatepresence)                             |
| 14        | [UpdateMii](#14-updatemii)                                       |
| 15        | [UpdateComment](#15-updatecomment)                               |
| 16        | [UpdatePreference](#16-updatepreference)                         |
| 17        | [GetBasicInfo](#17-getbasicinfo)                                 |
| 18        | [DeletePersistentNotification](#18-deletepersistentnotification) |
| 19        | [CheckSettingStatus](#19-checksettingstatus)                     |
| 20        | [GetRequestBlockSettings](#20-getrequestblocksettings)           |

### (1) UpdateAndGetAllInformation
#### Request

| Type                 | Description       |
| -------------------- | ----------------- |
| [NNAInfo]            | NNA Info          |
| [NintendoPresenceV2] | Nintendo presence |
| [DateTime]           | Birthday          |

#### Response

| Type                                   | Description              |
| -------------------------------------- | ------------------------ |
| [PrincipalPreference]                  | Principal preference     |
| [Comment]                              | Status message           |
| [List]&lt;[FriendInfo]&gt;             | Friend list              |
| [List]&lt;[FriendRequest]&gt;          | Sent friend requests     |
| [List]&lt;[FriendRequest]&gt;          | Received friend requests |
| [List]&lt;[BlacklistedPrincipal]&gt;   | Blacklist                |
| Bool                                   | Unknown                  |
| [List]&lt;[PersistentNotification]&gt; | Notifications            |
| Bool                                   | Unknown                  |

### (2) AddFriend
#### Request

| Type  | Description |
| ----- | ----------- |
| [PID] | Pid         |

#### Response

| Type            | Description    |
| --------------- | -------------- |
| [FriendRequest] | Friend request |
| [FriendInfo]    | Friend info    |

### (3) AddFriendByName
#### Request

| Type     | Description |
| -------- | ----------- |
| [String] | Name        |

#### Response

| Type            | Description    |
| --------------- | -------------- |
| [FriendRequest] | Friend request |
| [FriendInfo]    | Friend info    |

### (4) RemoveFriend
#### Request

| Type  | Description |
| ----- | ----------- |
| [PID] | Pid         |

#### Response
This method does not return anything.

### (5) AddFriendRequest
#### Request

| Type       | Description |
| ---------- | ----------- |
| [PID]      | Pid         |
| Uint8      | Unknown     |
| [String]   | Message     |
| Uint8      | Unknown     |
| [String]   | Unknown     |
| [GameKey]  | Game key    |
| [DateTime] | Unknown     |

#### Response

| Type            | Description    |
| --------------- | -------------- |
| [FriendRequest] | Friend request |
| [FriendInfo]    | Friend info    |

### (6) CancelFriendRequest
#### Request

| Type   | Description |
| ------ | ----------- |
| Uint64 | Id          |

#### Response
This method does not return anthing.

### (7) AcceptFriendRequest
#### Request

| Type   | Description |
| ------ | ----------- |
| Uint64 | Id          |

#### Response

| Type         | Description |
| ------------ | ----------- |
| [FriendInfo] | Friend info |

### (8) DeleteFriendRequest
#### Request

| Type   | Description |
| ------ | ----------- |
| Uint64 | Id          |

#### Response
This method does not return anything.

### (9) DenyFriendRequest
#### Request

| Type   | Description |
| ------ | ----------- |
| Uint64 | Id          |

#### Response

| Type                   | Description           |
| ---------------------- | --------------------- |
| [BlacklistedPrincipal] | Blacklisted principal |

### (10) MarkFriendRequestsAsReceived
#### Request

| Type                 | Description     |
| -------------------- | --------------- |
| [List]&lt;Uint64&gt; | Friend requests |

#### Response
This method does not return anything.

### (11) AddBlackList
#### Request

| Type                   | Description           |
| ---------------------- | --------------------- |
| [BlacklistedPrincipal] | Blacklisted principal |

#### Response

| Type                   | Description           |
| ---------------------- | --------------------- |
| [BlacklistedPrincipal] | Blacklisted principal |

### (12) RemoveBlackList
#### Request

| Type  | Description |
| ----- | ----------- |
| [PID] | Pid         |

#### Response
This method does not return anything.

### (13) UpdatePresence
#### Request

| Type                 | Description       |
| -------------------- | ----------------- |
| [NintendoPresenceV2] | Nintendo presence |

#### Response
This method does not return anything.

### (14) UpdateMii
#### Request

| Type    | Description |
| ------- | ----------- |
| [MiiV2] | Mii         |

#### Response

| Type       | Description |
| ---------- | ----------- |
| [DateTime] | Unknown     |

### (15) UpdateComment
#### Request

| Type      | Description    |
| --------- | -------------- |
| [Comment] | Status message |

#### Response

| Type       | Description |
| ---------- | ----------- |
| [DateTime] | Update time |

### (16) UpdatePreference
#### Request

| Type                  | Description          |
| --------------------- | -------------------- |
| [PrincipalPreference] | Principal preference |

#### Response
This method does not return anything.

### (17) GetBasicInfo
#### Request

| Type                | Description |
| ------------------- | ----------- |
| [List]&lt;[PID]&gt; | Pids        |

#### Response

| Type                               | Description |
| ---------------------------------- | ----------- |
| [List]&lt;[PrincipalBasicInfo]&gt; | Infos       |

### (18) DeletePersistentNotification
#### Request

| Type                                   | Description   |
| -------------------------------------- | ------------- |
| [List]&lt;[PersistentNotification]&gt; | Notifications |

#### Response
This method does not return anything.

### (19) CheckSettingStatus
#### Request
This method does not take any parameters.

#### Response

| Type  | Description |
| ----- | ----------- |
| Uint8 | Unknown     |

### (20) GetRequestBlockSettings
#### Request

| Type                 | Description |
| -------------------- | ----------- |
| [List]&lt;Uint32&gt; | Unknown     |

#### Response

| Type                                         | Description |
| -------------------------------------------- | ----------- |
| [List]&lt;[PrincipalRequestBlockSetting]&gt; | Settings    |

## Types
### BlacklistedPrincipal ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type                 | Description          |
| -------------------- | -------------------- |
| [PrincipalBasicInfo] | Principal basic info |
| [GameKey]            | Game key             |
| [DateTime]           | Blacklisted since    |

### Comment ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type       | Description     |
| ---------- | --------------- |
| Uint8      | Unknown         |
| [String]   | Status message  |
| [DateTime] | Last changed on |

### FriendInfo ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type                 | Description       |
| -------------------- | ----------------- |
| [NNAInfo]            | NNA Info          |
| [NintendoPresenceV2] | Nintendo presence |
| [Comment]            | Status message    |
| [DateTime]           | Became friend     |
| [DateTime]           | Last online       |
| Uint64               | Unknown           |

### FriendRequest ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type                   | Description          |
| ---------------------- | -------------------- |
| [PrincipalBasicInfo]   | Principal basic info |
| [FriendRequestMessage] | Message              |
| [DateTime]             | Sent on              |

### FriendRequestMessage ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type       | Description       |
| ---------- | ----------------- |
| Uint64     | Friend request id |
| Uint8      | Is received       |
| Uint8      | Unknown           |
| [String]   | Message           |
| Uint8      | Unknown           |
| [String]   | Unknown           |
| [GameKey]  | Game key          |
| [DateTime] | Unknown           |
| [DateTime] | Expires on        |

### GameKey ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type   | Description   |
| ------ | ------------- |
| Uint64 | Title id      |
| Uint16 | Title version |

### MiiV2 ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type       | Description             |
| ---------- | ----------------------- |
| [String]   | Name                    |
| Uint8      | Unknown                 |
| Uint8      | Unknown                 |
| [Buffer]   | Mii data (FFLStoreData) |
| [DateTime] | Unknown                 |

### NintendoPresenceV2 ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type      | Description                     |
| --------- | ------------------------------- |
| Uint32    | [Changed flags](#changed-flags) |
| Bool      | Is online                       |
| [GameKey] | Game key                        |
| Uint8     | Unknown (1)                     |
| [String]  | Message                         |
| Uint32    | Unknown (2)                     |
| Uint8     | Unknown (3)                     |
| Uint32    | Game server id                  |
| Uint32    | Unknown (4)                     |
| [PID]     | Pid                             |
| Uint32    | Gathering id                    |
| [Buffer]  | Application data                |
| Uint8     | Unknown (5)                     |
| Uint8     | Unknown (6)                     |
| Uint8     | Unknown (7)                     |

### NNAInfo ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type                 | Description          |
| -------------------- | -------------------- |
| [PrincipalBasicInfo] | Principal basic info |
| Uint8                | Unknown              |
| Uint8                | Unknown              |

### PersistentNotification ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type     | Description |
| -------- | ----------- |
| Uint64   | Unknown     |
| Uint32   | Unknown     |
| Uint32   | Unknown     |
| Uint32   | Unknown     |
| [String] | Unknown     |

### PersistentNotificationList ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type                                   | Description   |
| -------------------------------------- | ------------- |
| [List]&lt;[PersistentNotification]&gt; | Notifications |

### PrincipalBasicInfo ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type     | Description |
| -------- | ----------- |
| [PID]    | Pid         |
| [String] | NNID        |
| [MiiV2]  | Mii         |
| Uint8    | Unknown     |

### PrincipalPreference ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type | Description                  |
| ---- | ---------------------------- |
| Bool | Show online presence         |
| Bool | Show currently playing title |
| Bool | Block friend requests        |

### PrincipalRequestBlockSetting ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type  | Description |
| ----- | ----------- |
| [PID] | Pid         |
| Bool  | Blocked     |

## Changed Flags
Specifies which fields changed their value recently.

| Value | Field            |
| ----- | ---------------- |
| 0x4   | Unknown (1)      |
| 0x8   | Unknown (2)      |
| 0x10  | Game server id   |
| 0x20  | Unknown (4)      |
| 0x40  | Pid              |
| 0x80  | Gathering id     |
| 0x100 | Application data |

[BlacklistedPrincipal]: #blacklistedprincipal-structure
[Comment]: #comment-structure
[FriendInfo]: #friendinfo-structure
[FriendRequest]: #friendrequest-structure
[FriendRequestMessage]: #friendrequestmessage-structure
[GameKey]: #gamekey-structure
[MiiV2]: #miiv2-structure
[NintendoPresenceV2]: #nintendopresencev2-structure
[NNAInfo]: #nnainfo-structure
[PersistentNotification]: #persistentnotification-structure
[PrincipalBasicInfo]: #principalbasicinfo-structure
[PrincipalPreference]: #principalpreference-structure
[PrincipalRequestBlockSetting]: #principalrequestblocksetting-structure

[DateTime]: /docs/nex/types#datetime
[List]: /docs/nex/types#list
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[PID]: /docs/nex/types#pid
[Data]: /docs/nex/types#data-structure
[Structure]: /docs/nex/types#structure
