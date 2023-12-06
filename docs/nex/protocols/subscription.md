---
layout: post
toc: true
title: Subscription (117)
---

## Methods

| Method ID | Method Name                                                                                          |
|-----------|------------------------------------------------------------------------------------------------------|
| 1         | [CreateMySubscriptionData](#1-createmysubscriptiondata)                                              |
| 2         | [UpdateMySubscriptionData](#2-updatemysubscriptiondata)                                              |
| 3         | [ClearMySubscriptionData](#3-clearmysubscriptiondata)                                                |
| 4         | [AddTarget](#4-addtarget)                                                                            |
| 5         | [DeleteTarget](#5-deletetarget)                                                                      |
| 6         | [ClearTarget](#6-cleartarget)                                                                        |
| 7         | [GetFriendSubscriptionData](#7-getfriendsubscriptiondata)                                            |
| 8         | [GetTargetSubscriptionData](#8-gettargetsubscriptiondata)                                            |
| 9         | [GetActivePlayerSubscriptionData](#9-getactiveplayersubscriptiondata)                                |
| 10        | [GetSubscriptionData](#10-getsubscriptiondata)                                                       |
| 11        | [ReplaceTargetAndGetSubscriptionData](#11-replacetargetandgetsubscriptiondata)                       |
| 12        | [SetPrivacyLevel](#12-setprivacylevel)                                                               |
| 13        | [GetPrivacyLevel](#13-getprivacylevel)                                                               |
| 14        | [GetSubscriptionUserFriendList](#14-getsubscriptionuserfriendlist)                                   |
| 15        | [GetPrivacyLevels](#15-getprivacylevels)                                                             |
| 16        | [CreateMySubscriptionDataWithNotificationParams](#16-createmysubscriptiondatawithnotificationparams) |
| 17        | [UpdateMySubscriptionDataWithNotificationParams](#17-updatemysubscriptiondatawithnotificationparams) |
| 18        | [ClearMySubscriptionDataWithNotificationParams](#18-clearmysubscriptiondatawithnotificationparams)   |

### (1) CreateMySubscriptionData
#### Request

| Type                                            | Description |
|-------------------------------------------------|-------------|
| Uint32                                          | Unknown     |
| [SubscriptionData](#subscriptiondata-nulldata) | Param       |

#### Response
This method does not return anything.

### (2) PostContent
#### Request

| Type                                            | Description |
|-------------------------------------------------|-------------|
| [SubscriptionData](#subscriptiondata-nulldata) | Param       |

#### Response
This method does not return anything.

### (3) ClearMySubscriptionData
This method does not take any parameters and does not return anything.

### (4) AddTarget
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | Targets     |

#### Response
This method does not return anything.

### (5) DeleteTarget
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | Targets     |

#### Response
This method does not return anything.

### (6) ClearTarget
This method does not take any parameters and does not return anything.

### (7) GetFriendSubscriptionData
#### Request
This method does not take any parameters.

#### Response

| Type                                                          | Description  |
|---------------------------------------------------------------|--------------|
| [List]&lt;[SubscriptionData](#subscriptiondata-nulldata)&gt; | Friends data |

### (8) GetTargetSubscriptionData
#### Request
This method does not take any parameters.

#### Response

| Type                                                          | Description  |
|---------------------------------------------------------------|--------------|
| [List]&lt;[SubscriptionData](#subscriptiondata-nulldata)&gt; | Targets data |

### (9) GetActivePlayerSubscriptionData
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unknown     |
| Uint32 | Unknown     |
| Uint32 | Unknown     |

#### Response

| Type                                                                                         | Description |
|----------------------------------------------------------------------------------------------|-------------|
| [List]&lt;[ActivePlayerSubscriptionData](#activeplayersubscriptiondata-subscriptiondata)&gt; | Unknown     |

### (10) GetSubscriptionData
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | PIDs        |

#### Response

| Type                                                          | Description   |
|---------------------------------------------------------------|---------------|
| [List]&lt;[SubscriptionData](#subscriptiondata-nulldata)&gt; | Data for PIDs |

### (11) ReplaceTargetAndGetSubscriptionData
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | New targets |

#### Response

| Type                                                          | Description   |
|---------------------------------------------------------------|---------------|
| [List]&lt;[SubscriptionData](#subscriptiondata-nulldata)&gt; | Data for PIDs |

### (12) SetPrivacyLevel
#### Request

| Type   | Description   |
|--------|---------------|
| Uint32 | Privacy level |

#### Response
This method does not return anything.

### (13) GetPrivacyLevel
#### Request
This method does not take any parameters.

#### Response

| Type   | Description   |
|--------|---------------|
| Uint32 | Privacy level |

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

| Type                                            | Description |
|-------------------------------------------------|-------------|
| Uint32                                          | Unknown     |
| [SubscriptionData](#subscriptiondata-nulldata) | Param       |
| Uint32                                          | Unknown     |
| Uint32                                          | Unknown     |
| [String]                                        | Unknown     |

#### Response
This method does not return anything.

### (17) UpdateMySubscriptionDataWithNotificationParams
#### Request

| Type                                            | Description |
|-------------------------------------------------|-------------|
| [SubscriptionData](#subscriptiondata-nulldata) | Param       |
| Uint32                                          | Unknown     |
| Uint32                                          | Unknown     |
| [String]                                        | Unknown     |

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

## Types
### SubscriptionData ([NullData])

| Type      | Description |
|-----------|-------------|
| Uint32    | Unknown     |
| [qBuffer] | Unknown     |

### ActivePlayerSubscriptionData ([SubscriptionData](#subscriptiondata-nulldata))

| Type   | Description |
|--------|-------------|
| Uint8  | Unknown     |
| Uint32 | Unknown     |

[String]: /docs/nex/types#string
[PID]: /docs/nex/types#pid
[NullData]: /docs/nex/types#data-structure
[List]: /docs/nex/types#list
[qBuffer]: /docs/nex/types#qbuffer
