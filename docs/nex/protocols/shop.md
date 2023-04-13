---
layout: post
toc: true
title: Shop (200)
---

This protocol is only seen in Pokemon Bank.

## Methods

| Method ID | Method Name                                                 |
| --------- | ----------------------------------------------------------- |
| 1         | [GetItems](#1-getitems)                                     |
| 2         | [GetChallengeBlob](#2-getchallengeblob)                     |
| 3         | [GetRivToken](#3-getrivtoken)                               |
| 4         | [GetRivTokenByItemId](#4-getrivtokenbyitemid)               |
| 5         | [GetItemRights](#5-getitemrights)                           |
| 6         | [VerifyAndRegisterTicket](#6-verifyandregisterticket)       |
| 7         | [DebugSetExpireTime](#7-debugsetexpiretime)                 |
| 8         | [PrincipalIDToSupportNumber](#8-principalidtosupportnumber) |
| 9         | [SupportNumberToPrincipalID](#9-supportnumbertoprincipalid) |
| 10        | [GetGameServerTime](#10-getgameservertime)                  |

### (1) GetItems
#### Request
This method does not take any parameters.

#### Response

| Type                     | Name   |
| ------------------------ | ------ |
| [List]&lt;[ShopItem]&gt; | pItems |

### (2) GetChallengeBlob
#### Request
This method does not take any parameters.

#### Response

| Type     | Name           |
| -------- | -------------- |
| [Buffer] | pChallengeBlob |

### (3) GetRivToken
#### Request

| Type      | Name       |
| --------- | ---------- |
| [String]  | itemCode   |
| [qBuffer] | refereneId |

#### Response

| Type     | Name      |
| -------- | --------- |
| [String] | pRivToken |

### (4) GetRivTokenByItemId
#### Request

| Type   | Name   |
| ------ | ------ |
| Uint32 | itemId |

#### Response

| Type     | Name      |
| -------- | --------- |
| [String] | pRivToken |

### (5) GetItemRights
#### Request

| Type      | Name           |
| --------- | -------------- |
| [qBuffer] | ticketEnvelope |

#### Response

| Type                           | Name        |
| ------------------------------ | ----------- |
| [List]&lt;[ShopItemRights]&gt; | pItemRights |

### (6) VerifyAndRegisterTicket
#### Request

| Type       | Name           |
| ---------- | -------------- |
| [qBuffer]  | ticketEnvelope |
| [DateTime] | purchasedTime  |

#### Response

| Type       | Name       |
| ---------- | ---------- |
| [DateTime] | expireTime |

### (7) DebugSetExpireTime
#### Request

| Type       | Name       |
| ---------- | ---------- |
| [DateTime] | expireTime |

#### Response
This method does not return anything.

### (8) PrincipalIDToSupportNumber
#### Request

| Type   | Name |
| ------ | ---- |
| Uint32 | pid  |

#### Response

| Type     | Name          |
| -------- | ------------- |
| [String] | supportNumber |

### (9) SupportNumberToPrincipalID
#### Request

| Type     | Name          |
| -------- | ------------- |
| [String] | supportNumber |

#### Response

| Type   | Name |
| ------ | ---- |
| Uint32 | pid  |

### (10) GetGameServerTime
#### Request
This method does not take any parameters.

#### Response

| Type       | Name        |
| ---------- | ----------- |
| [DateTime] | pServerTime |

## Types
### ShopItem ([Structure])

| Type      | Name        |
| --------- | ----------- |
| Uint32    | itemId      |
| [qBuffer] | referenceId |
| [String]  | serviceName |
| [String]  | itemCode    |

### ShopItemRights ([Structure])

| Type      | Name        |
| --------- | ----------- |
| [qBuffer] | referenceId |
| Sint8     | itemType    |
| Uint32    | attribute   |

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

[ShopItem]: #shopitem-structure
[ShopItemRights]: #shopitemrights-structure
