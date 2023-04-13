---
layout: post
toc: true
title: Web Notifications Storage
---

## Methods

| Method ID | Method Name                               |
| --------- | ----------------------------------------- |
| 1         | [RegisterUser](#1-registeruser)           |
| 2         | [PollNotifications](#2-pollnotifications) |
| 3         | [UnregisterUser](#3-unregisteruser)       |

### (1) RegisterUser
#### Request
This method does not take any parameters.

#### Response
This method does not return anything.

### (2) PollNotifications
#### Request
This method does not take any parameters.

#### Response

| Type     | Name              |
| -------- | ----------------- |
| [String] | listNotifications |
| Sint32   | nbNotifications   |

### (3) UnregisterUser
#### Request
This method does not take any parameters.

#### Response
This method does not return anything.

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
