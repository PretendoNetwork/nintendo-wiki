---
layout: post
toc: true
title: Nintendo Notification Events (100)
---

This protocol is used by the 3DS / Wii U friend server for notifications about friends.

There is no known difference between the two methods, except that the server sends some events through method 1 and others through method 2. The client treats them exactly the same.

## Methods

| Method ID | Method Name                                                           |
| --------- | --------------------------------------------------------------------- |
| 1         | [ProcessNintendoNotificationEvent](#processnintendonotificationevent) |
| 2         | [ProcessNintendoNotificationEvent](#processnintendonotificationevent) |

## ProcessNintendoNotificationEvent
### Request

| Type                                                              | Description  |
| ----------------------------------------------------------------- | ------------ |
| [NintendoNotificationEvent](#nintendonotificationevent-structure) | Event object |

### Response
No RMC response is sent.

## Types
### NintendoNotificationEvent ([Structure])

| Type   | Name         | Description                                             |
| ------ | ------------ | ------------------------------------------------------- |
| Uint32 | m_uiType     | [Event type](#friend-events)                            |
| [PID]  | m_pidSender  | Pid of the user that triggered the notification event   |
| [Data] | m_dataholder | Information about the event (depends on the event type) |

### NintendoNotificationEventGeneral ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type     | Name        |
| -------- | ----------- |
| Uint32   | m_u32Param  |
| Uint64   | m_u64Param1 |
| Uint64   | m_u64Param2 |
| [String] | m_strParam  |

### NintendoNotificationEventProfile ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type  | Name       |
| ----- | ---------- |
| Uint8 | m_region   |
| Uint8 | m_country  |
| Uint8 | m_area     |
| Uint8 | m_language |
| Uint8 | m_platform |

## Friend Events

| Type | Method | Data Type                          | Description                                                                               |
| ---- | ------ | ---------------------------------- | ----------------------------------------------------------------------------------------- |
| 1    | 1      | [NintendoPresence]                 | (3DS) A friend updated their presence                                                     |
| 2    | 1      | [GameKey]                          | (3DS) A friend changed their favorite game                                                |
| 3    | 1      | [NintendoNotificationEventGeneral] | (3DS) A friend changed their comment                                                      |
| 5    | 1      | [NintendoNotificationEventGeneral] | (3DS) A friend changed or edited their mii                                                |
| 6    | 1      | [NintendoNotificationEventProfile] | (3DS) A friend updated their profile                                                      |
| 7    | 1      | [NintendoNotificationEventGeneral] | (3DS) You became friends                                                                  |
| 8    | 1      | [NintendoNotificationEventGeneral] | (3DS) A friend deleted your friend card                                                   |
| 9    | 1      | [NintendoNotificationEventGeneral] | (3DS) A friend sent you an invitation                                                     |
| 10   | 1      | [NintendoNotificationEventGeneral] | (3DS / Wii U) A friend went offline                                                       |
| 21   | 2      | [NNAInfo]                          | (Wii U) A friend changed or edited their mii                                              |
| 22   |        |                                    | (Wii U) Mii related                                                                       |
| 23   |        | [PrincipalPreference]              | (Wii U) A friend updated their preferences                                                |
| 24   | 2      | [NintendoPresenceV2]               | (Wii U) A friend started a game/app                                                       |
| 25   |        |                                    | (Wii U) Friend request related                                                            |
| 26   | 1      | [NintendoNotificationEventGeneral] | (Wii U) A friend removed you from their from friend list or canceled their friend request |
| 27   | 2      | [FriendRequest]                    | (Wii U) You received a friend request                                                     |
| 28   |        |                                    | (Wii U) Friend request related                                                            |
| 29   |        |                                    | (Wii U) Blacklist related                                                                 |
| 30   | 1      | [FriendInfo]                       | (Wii U) You became friends                                                                |
| 31   |        |                                    | (Wii U) Blacklist related                                                                 |
| 32   |        |                                    | (Wii U) Blacklist related                                                                 |
| 33   | 1      | [NintendoNotificationEventGeneral] | (Wii U) A friend changed their status message                                             |
| 34   |        |                                    |                                                                                           |
| 35   |        |                                    | (Wii U) Related to friend relationships                                                   |
| 36   |        | [PersistentNotificationList]       | (Wii U) This seems to delete persistent notifications                                     |

[Data]: /docs/nex/types#anydataholder
[PID]: /docs/nex/types#pid
[Structure]: /docs/nex/types#structure
[String]: /docs/nex/types#string
[NintendoPresence]: /docs/nex/protocols/friends-3ds#nintendopresence-structure
[GameKey]: /docs/nex/protocols/friends-3ds#gamekey-structure
[FriendRequest]: /docs/nex/protocols/friends-wiiu#friendrequest-structure
[NintendoPresenceV2]: /docs/nex/protocols/friends-wiiu#nintendopresencev2-structure
[FriendInfo]: /docs/nex/protocols/friends-wiiu#friendinfo-structure
[NNAInfo]: /docs/nex/protocols/friends-wiiu#nnainfo-structure
[MiiV2]: /docs/nex/protocols/friends-wiiu#miiv2-structure
[PrincipalPreference]: /docs/nex/protocols/friends-wiiu#principalpreference-structure
[PersistentNotificationList]: /docs/nex/protocols/friends-wiiu#persistentnotificationlist-structure
[NintendoNotificationEventGeneral]: #nintendonotificationeventgeneral-structure
[NintendoNotificationEventProfile]: #nintendonotificationeventprofile-structure
