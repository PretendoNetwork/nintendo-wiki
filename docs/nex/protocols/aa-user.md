---
layout: post
toc: true
title: AA User (123)
---

## Methods

| Method ID | Method Name                                       |
| --------- | ------------------------------------------------- |
| 1         | [RegisterApplication](#1-registerapplication)     |
| 2         | [UnregisterApplication](#2-unregisterapplication) |
| 3         | [SetApplicationInfo](#3-setapplicationinfo)       |
| 4         | [GetApplicationInfo](#4-getapplicationinfo)       |

### (1) RegisterApplication
#### Request

| Type   | Description |
| ------ | ----------- |
| Uint64 | Title id    |

#### Response
This method does not return anything.

### (2) UnregisterApplication
#### Request

| Type   | Description |
| ------ | ----------- |
| Uint64 | Title id    |

#### Response
This method does not return anything.

### (3) SetApplicationInfo
#### Request

| Type                                              | Description      |
| ------------------------------------------------- | ---------------- |
| [List]&lt;[ApplicationInfo](#applicationinfo)&gt; | Application info |

#### Response
This method does not return anything.

### (4) GetApplicationInfo
#### Request
This method does not take any parameters.

#### Response

| Type                                                        | Description      |
| ----------------------------------------------------------- | ---------------- |
| [List]&lt;[ApplicationInfo](#applicationinfo-structure)&gt; | Application info |

## Types
### ApplicationInfo ([Structure])

| Type   | Description   |
| ------ | ------------- |
| Uint64 | Title id      |
| Uint16 | Title version |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[PID]: /docs/nex/types#pid
[ResultRange]: /docs/nex/types#resultrange-structure
