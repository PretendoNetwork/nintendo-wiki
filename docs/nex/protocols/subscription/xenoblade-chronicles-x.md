---
layout: post
toc: true
title: Xenoblade Chronicles X (117)
---

This page describes the methods that are only seen in Xenoblade Chronicles X.

## Methods

| Method ID | Method Name                                                                                          |
|-----------|------------------------------------------------------------------------------------------------------|
| 14        | [GetSubscriptionUserFriendList](#14-getsubscriptionuserfriendlist)                                   |
| 15        | [GetPrivacyLevels](#15-getprivacylevels)                                                             |
| 16        | [CreateMySubscriptionDataWithNotificationParams](#16-createmysubscriptiondatawithnotificationparams) |
| 17        | [UpdateMySubscriptionDataWithNotificationParams](#17-updatemysubscriptiondatawithnotificationparams) |
| 18        | [ClearMySubscriptionDataWithNotificationParams](#18-clearmysubscriptiondatawithnotificationparams)   |

### (14) GetSubscriptionUserFriendList
#### Request
This method does not take any parameters.

#### Response

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | Friend PIDs |

### (15) GetPrivacyLevels
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | PIDs        |

#### Response

| Type                 | Description    |
|----------------------|----------------|
| [List]&lt;Uint32&gt; | Privacy levels |

### (16) CreateMySubscriptionDataWithNotificationParams
#### Request

| Type               | Description |
|--------------------|-------------|
| Uint32             | Unknown     |
| [SubscriptionData] | Param       |
| Uint32             | Unknown     |
| Uint32             | Unknown     |
| [String]           | Unknown     |

#### Response
This method does not return anything.

### (17) UpdateMySubscriptionDataWithNotificationParams
#### Request

| Type               | Description |
|--------------------|-------------|
| [SubscriptionData] | Param       |
| Uint32             | Unknown     |
| Uint32             | Unknown     |
| [String]           | Unknown     |

#### Response
This method does not return anything.

### (18) ClearMySubscriptionDataWithNotificationParams
#### Request

| Type     | Description |
|----------|-------------|
| Uint32   | Unknown     |
| Uint32   | Unknown     |
| [String] | Unknown     |

#### Response
This method does not return anything.

[Structure]: /docs/nex/types#structure
[String]: /docs/nex/types#string
[PID]: /docs/nex/types#pid
[Data]: /docs/nex/types#data-structure
[List]: /docs/nex/types#list
[qBuffer]: /docs/nex/types#qbuffer
[SubscriptionData]: /docs/nex/protocols/subscription#subscriptiondata-structure
