---
layout: post
toc: true
title: Tracking 3 (36)
---

## Methods

| Method ID | Method Name                                             |
| --------- | ------------------------------------------------------- |
| 1         | [SendTag](#1-sendtag)                                   |
| 2         | [SendTagAndUpdateUserInfo](#2-sendtagandupdateuserinfo) |
| 3         | [SendUserInfo](#3-senduserinfo)                         |
| 4         | [GetConfiguration](#4-getconfiguration)                 |
| 5         | [SendTags](#5-sendtags)                                 |

### (1) SendTag
#### Request

| Type     | Name       |
| -------- | ---------- |
| Uint32   | trackingID |
| [String] | tag        |
| [String] | attributes |
| Uint32   | deltaTime  |

#### Response
This method does not return anything.

### (2) SendTagAndUpdateUserInfo
#### Request

| Type     | Name       |
| -------- | ---------- |
| Uint32   | trackingID |
| [String] | tag        |
| [String] | attributes |
| Uint32   | deltaTime  |
| [String] | userID     |

#### Response
This method does not return anything.

### (3) SendUserInfo
#### Request

| Type                  | Name      |
|-----------------------|-----------|
| [TrackingInformation] | userInfo  |
| Uint32                | deltaTime |

#### Response

| Type                  | Name       |
| --------------------- | ---------- |
| [TrackingInformation] | userInfo   |
| Uint32                | trackingID |

### (4) GetConfiguration
#### Request
This method does not take any parameters.

#### Response

| Type                   | Name |
| ---------------------- | ---- |
| [List]&lt;[String]&gt; | tags |

### (5) SendTags
#### Request

| Type                        | Name    |
| --------------------------- | ------- |
| [List]&lt;[TrackingTag]&gt; | tagData |

#### Response
This method does not return anything.

## Types
### TrackingInformation ([Structure])

| Type     | Name       |
| -------- | ---------- |
| Uint32   | ipn        |
| [String] | userID     |
| [String] | machineID  |
| [String] | visitorID  |
| [String] | utsVersion |

### TrackingTag ([Structure])

| Type     | Name       |
| -------- | ---------- |
| Uint32   | trackingID |
| [String] | tag        |
| [String] | attributes |
| Uint32   | deltaTime  |
| [String] | newUserId  |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#date-time
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#any-data-holder
[Variant]: /docs/nex/types#variant

[TrackingInformation]: #trackinginformation-structure
[TrackingTag]: #trackingtag-structure
