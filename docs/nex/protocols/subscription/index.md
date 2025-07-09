---
layout: post
toc: true
title: Subscription (117)
---

## Extended Protocols

The following games have additional methods in the subscription protocol:
* [Pokemon (Generation 7)](/docs/nex/protocols/subscription/pokemon-generation-7)
* [Xenoblade Chronicles X](/docs/nex/protocols/subscription/xenoblade-chronicles-x)

This remainder of this page describes the methods that are not specific to any game.

## Methods

| Method ID | Method Name                                                                    |
|-----------|--------------------------------------------------------------------------------|
| 1         | [CreateMySubscriptionData](#1-createmysubscriptiondata)                        |
| 2         | [UpdateMySubscriptionData](#2-updatemysubscriptiondata)                        |
| 3         | [ClearMySubscriptionData](#3-clearmysubscriptiondata)                          |
| 4         | [AddTarget](#4-addtarget)                                                      |
| 5         | [DeleteTarget](#5-deletetarget)                                                |
| 6         | [ClearTarget](#6-cleartarget)                                                  |
| 7         | [GetFriendSubscriptionData](#7-getfriendsubscriptiondata)                      |
| 8         | [GetTargetSubscriptionData](#8-gettargetsubscriptiondata)                      |
| 9         | [GetActivePlayerSubscriptionData](#9-getactiveplayersubscriptiondata)          |
| 10        | [GetSubscriptionData](#10-getsubscriptiondata)                                 |
| 11        | [ReplaceTargetAndGetSubscriptionData](#11-replacetargetandgetsubscriptiondata) |
| 12        | [SetPrivacyLevel](#12-setprivacylevel)                                         |
| 13        | [GetPrivacyLevel](#13-getprivacylevel)                                         |

### (1) CreateMySubscriptionData
#### Request

| Type                                            | Description |
|-------------------------------------------------|-------------|
| Uint32                                          | Unknown     |
| [SubscriptionData](#subscriptiondata-structure) | Param       |
| Bool                                            | Unknown     |

#### Response
This method does not return anything.

### (2) UpdateMySubscriptionData
#### Request

| Type                                            | Description |
|-------------------------------------------------|-------------|
| [SubscriptionData](#subscriptiondata-structure) | Param       |

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
| [List]&lt;[SubscriptionData](#subscriptiondata-structure)&gt; | Friends data |

### (8) GetTargetSubscriptionData
#### Request
This method does not take any parameters.

#### Response

| Type                                                          | Description  |
|---------------------------------------------------------------|--------------|
| [List]&lt;[SubscriptionData](#subscriptiondata-structure)&gt; | Targets data |

### (9) GetActivePlayerSubscriptionData
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unknown     |
| Uint32 | Unknown     |
| Uint32 | Unknown     |

#### Response

| Type                                                                                  | Description |
|---------------------------------------------------------------------------------------|-------------|
| [List]&lt;[ActivePlayerSubscriptionData](#activeplayersubscriptiondata-structure)&gt; | Unknown     |

### (10) GetSubscriptionData
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | PIDs        |

#### Response

| Type                                                          | Description   |
|---------------------------------------------------------------|---------------|
| [List]&lt;[SubscriptionData](#subscriptiondata-structure)&gt; | Data for PIDs |

### (11) ReplaceTargetAndGetSubscriptionData
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | New targets |

#### Response

| Type                                                          | Description   |
|---------------------------------------------------------------|---------------|
| [List]&lt;[SubscriptionData](#subscriptiondata-structure)&gt; | Data for PIDs |

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

## Types
### SubscriptionData ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type      | Description  |
|-----------|--------------|
| [PID]     | Principal ID |
| [qBuffer] | Unknown      |

### ActivePlayerSubscriptionData ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [SubscriptionData](#subscriptiondata-structure)
{: .prompt-info }

| Type   | Description |
|--------|-------------|
| Bool   | Unknown     |

[Structure]: /docs/nex/types#structure
[String]: /docs/nex/types#string
[PID]: /docs/nex/types#pid
[Data]: /docs/nex/types#data-structure
[List]: /docs/nex/types#list
[qBuffer]: /docs/nex/types#qbuffer
