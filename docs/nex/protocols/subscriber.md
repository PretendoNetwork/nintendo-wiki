---
layout: post
toc: true
title: Subscriber (121)
---

## Methods

| Method ID | Method Name                                        |
| --------- | -------------------------------------------------- |
| 1         | [Hello](#1-hello)                                  |
| 2         | [PostContent](#2-postcontent)                      |
| 3         | [GetContent](#3-getcontent)                        |
| 4         | Follow                                             |
| 5         | UnfollowAllAndFollow                               |
| 6         | Unfollow                                           |
| 7         | GetFollowing                                       |
| 8         | GetFollower                                        |
| 9         | GetNumFollowers                                    |
| 10        | GetTimeline                                        |
| 11        | [DeleteContent](#11-deletecontent)                 |
| 12        | [GetContentMulti](#12-getcontentmulti)             |
| 13        | [UpdateUserStatus](#13-updateuserstatus)           |
| 14        | [GetFriendUserStatuses](#14-getfrienduserstatuses) |
| 15        | [GetUserStatuses](#15-getuserstatuses)             |

### (1) Hello
#### Request

| Type     | Description |
| -------- | ----------- |
| [String] | Unknown     |

#### Response
This method does not return anything.

### (2) PostContent
#### Request

| Type                                                                | Name  |
| ------------------------------------------------------------------- | ----- |
| [SubscriberPostContentParam](#subscriberpostcontentparam-structure) | param |

#### Response

| Type   | Name      |
| ------ | --------- |
| Uint64 | contentId |

### (3) GetContent
#### Request

| Type                                                              | Name  |
| ----------------------------------------------------------------- | ----- |
| [SubscriberGetContentParam](#subscribergetcontentparam-structure) | param |

#### Response

| Type                                                            | Name     |
| --------------------------------------------------------------- | -------- |
| [List]&lt;[SubscriberContent](#subscribercontent-structure)&gt; | contents |

### (11) DeleteContent
#### Request

| Type                   | Name      |
| ---------------------- | --------- |
| [List]&lt;[String]&gt; | topics    |
| Uint64                 | contentId |

#### Response
This method does not return anything.

### (12) GetContentMulti
#### Request

| Type                                                                            | Name  |
| ------------------------------------------------------------------------------- | ----- |
| [List]&lt;[SubscriberGetContentParam](#subscribergetcontentparam-structure)&gt; | param |

#### Response

| Type                                                                          | Name     |
| ----------------------------------------------------------------------------- | -------- |
| [List]&lt;[List]&lt;[SubscriberContent](#subscribercontent-structure)&gt;&gt; | contents |

### (13) UpdateUserStatus
#### Request

| Type                                                                            | Description |
| ------------------------------------------------------------------------------- | ----------- |
| [List]&lt;[SubscriberUserStatusParam](#subscriberuserstatusparam-structure)&gt; | Param       |
| [List]&lt;Uint8&gt;                                                             | Unknown     |

#### Response
This method does not return anything.

### (14) GetFriendUserStatuses
#### Request

| Type                | Name | Description                                |
| ------------------- | ---- | ------------------------------------------ |
| [List]&lt;Uint8&gt; | keys | Up to 8 different integers between 0 and 7 |

#### Response

| Type                                                                          | Name  |
| ----------------------------------------------------------------------------- | ----- |
| [List]&lt;[SubscriberUserStatusInfo](#subscriberuserstatusinfo-structure)&gt; | infos |

### (15) GetUserStatuses
#### Request

| Type                | Name  | Description                                |
| ------------------- | ----- | ------------------------------------------ |
| [List]&lt;[PID]&gt; | users | User ids                                   |
| [List]&lt;Uint8&gt; | keys  | Up to 8 different integers between 0 and 7 |

#### Response

| Type                                                                          | Name  |
| ----------------------------------------------------------------------------- | ----- |
| [List]&lt;[SubscriberUserStatusInfo](#subscriberuserstatusinfo-structure)&gt; | infos |

## Types
### SubscriberContent ([Structure])

| Type                   | Name      |
| ---------------------- | --------- |
| Uint64                 | contentId |
| [String]               | message   |
| [qBuffer]              | binary    |
| [PID]                  | pid       |
| [List]&lt;[String]&gt; | topics    |
| [DateTime]             | postTime  |

### SubscriberGetContentParam ([Structure])

| Type     | Name             |
| -------- | ---------------- |
| [String] | topic            |
| Uint32   | size             |
| Uint32   | offset           |
| Uint64   | minimumContentId |

### SubscriberPostContentParam ([Structure])

| Type                   | Name    |
| ---------------------- | ------- |
| [List]&lt;[String]&gt; | topic   |
| [String]               | message |
| [qBuffer]              | binary  |

### SubscriberUserStatusParam ([Structure])

| Type      | Description |
| --------- | ----------- |
| [qBuffer] | Unknown     |

### SubscriberUserStatusInfo ([Structure])

| Type                    | Name   |
| ----------------------- | ------ |
| [PID]                   | pid    |
| [List]&lt;[qBuffer]&gt; | values |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[PID]: /docs/nex/types#pid
[DateTime]: /docs/nex/types#datetime
[Data]: /docs/nex/types#anydataholder
[List]: /docs/nex/types#list
[ResultRange]: /docs/nex/types#resultrange-structure
[Structure]: /docs/nex/types#structure
[qBuffer]: /docs/nex/types#qbuffer
[Buffer]: /docs/nex/types#buffer
