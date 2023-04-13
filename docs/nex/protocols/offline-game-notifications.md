---
layout: post
toc: true
title: Offline Game Notifications (71)
---

## Methods

| Method ID | Method Name                                                             |
|-----------|-------------------------------------------------------------------------|
| 1         | [PollNotifications](#1-pollnotifications)                               |
| 2         | [PollSpecificOfflineNotifications](#2-pollspecificofflinenotifications) |
| 3         | [PollAnyOfflineNotifications](#3-pollanyofflinenotifications)           |

### (1) PollNotifications
#### Request
This method does not take any parameters.

#### Response

| Type                                                                                             | Name              |
|--------------------------------------------------------------------------------------------------|-------------------|
| [List]&lt;[NotificationEvent](/docs/nex/protocols/notifications#notificationevent-structure)&gt; | listNotifications |
| Uint32                                                                                           | nbRemainingNotifs |

### (2) PollSpecificOfflineNotifications
#### Request

| Type                 | Name      |
|----------------------|-----------|
| [List]&lt;Uint32&gt; | majortype |

#### Response

| Type                              | Name                  |
|-----------------------------------|-----------------------|
| [List]&lt;[TimedNotification]&gt; | listTimedNotification |
| Uint32                            | ret                   |

### (3) PollAnyOfflineNotifications
#### Request
This method does not take any parameters.

#### Response

| Type                              | Name                  |
|-----------------------------------|-----------------------|
| [List]&lt;[TimedNotification]&gt; | listTimedNotification |
| Uint32                            | nbRemainingNotifs     |

## Types
### TimedNotification ([Structure])

| Type                                                                               | Name         |
|------------------------------------------------------------------------------------|--------------|
| [DateTime]                                                                         | timestamp    |
| [NotificationEvent](/docs/nex/protocols/notifications#notificationevent-structure) | Notification |

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

[TimedNotification]: #timednotification-structure
