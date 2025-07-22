---
layout: post
toc: true
title: Notification Events (14)
---

## Methods

| Method ID | Method Name                                             |
|-----------|---------------------------------------------------------|
| 1         | [ProcessNotificationEvent](#1-processnotificationevent) |

### (1) ProcessNotificationEvent
#### Request

| Type                                              | Name   | Description  |
|---------------------------------------------------|--------|--------------|
| [NotificationEvent](#notificationevent-structure) | oEvent | Event object |

#### Response
No RMC response is sent.

## Types
### NotificationEvent ([Structure])
Most notification types are predefined. However, some games also implement their own notification types (see [libeagle](/docs/switch/eagle) for example).

**Up to NEX 3:**

| Type     | Name        |
|----------|-------------|
| [PID]    | m_pidSource |
| Uint32   | m_uiType    |
| Uint32   | m_uiParam1  |
| Uint32   | m_uiParam2  |
| [String] | m_strParam  |

In NEX version 3.4, a new field was added:

| Type   | Name       |
|--------|------------|
| Uint32 | m_uiParam3 |

**NEX 4:**

The following fields are always present (revision 0 and 1):

| Type     | Name        |
|----------|-------------|
| [PID]    | m_pidSource |
| Uint32   | m_uiType    |
| Uint64   | m_uiParam1  |
| Uint64   | m_uiParam2  |
| [String] | m_strParam  |
| Uint64   | m_uiParam3  |

The following field is only present in revision 1:

| Type                             | Name       |
|----------------------------------|------------|
| [Map]&lt;[String], [Variant]&gt; | m_mapParam |

## Notification Types
Notification types are a combined value made up of a category and a subtype. The final type sent in notifications is calculated using `(category * 1000) + subtype`. Not all categories seem to have subtypes, as such they seem to only have one function

* Type 3001 - 3008 are sent to the owner of the gathering.
* Type 4000 and 109000 are sent to all participants of the gathering.
* Type 2000 is sent to all participants of the gathering who are not the owner.
* Type 116000 is sent to all participants of the round.

## Notification Categories

| Category  | Description                                   | Notes                                                           |
|-----------|-----------------------------------------------|-----------------------------------------------------------------|
| 2         | Session launched                              | Quazal notification triggered with `MatchMaking::LaunchSession` |
| 3         | Participation                                 |                                                                 |
| 4         | Ownership changed                             | Does not seem to have subtypes                                  |
| 101 - 108 | Reserved                                      | Notifications within these categories are game-specific         |
| 109       | Gathering unregistered                        | Does not seem to have subtypes                                  |
| 110       | Host changed                                  | Does not seem to have subtypes                                  |
| 111       | Game notification logout                      | Does not seem to have subtypes                                  |
| 112       | Subscription event                            |                                                                 |
| 113       | Game server maintenance                       | Does not seem to have subtypes                                  |
| 114       | Maintenance announcement                      | Does not seem to have subtypes                                  |
| 115       | Service item request completed                | Does not seem to have subtypes                                  |
| 116       | Matchmake referee round started               | Does not seem to have subtypes                                  |
| 117       | Matchmake referee first round report received | Does not seem to have subtypes                                  |
| 118       | Matchmake referee round summarized            | Does not seem to have subtypes                                  |
| 119       | Matchmake system configuration notification   | Does not seem to have subtypes                                  |
| 120       | System password changed                       | Does not seem to have subtypes                                  |
| 121       | System password cleared                       | Does not seem to have subtypes                                  |
| 122       | Added to gathering                            | Does not seem to have subtypes                                  |
| 128       | User status updated                           | Does not seem to have subtypes                                  |

## Notification Subtypes

| Category | Subtype | Description              |
|----------|---------|--------------------------|
| 3        | 1       | New participant          |
| 3        | 2       | Participation cancelled  |
| 3        | 7       | Participant disconnected |
| 3        | 8       | Participation ended      |
| 112      | 0       | Unknown                  |
| 112      | 1       | Unknown                  |
| 112      | 2       | Unknown                  |


### Notification type 3001:

| Field       | Description            |
|-------------|------------------------|
| m_pidSource | Principal id           |
| m_uiParam1  | Gathering id           |
| m_uiParam2  | Principal id           |
| m_strParam  | Message                |
| m_uiParam3  | Number of participants |

### Notification type 3002, 3007 and 3008:

| Field       | Description  |
|-------------|--------------|
| m_pidSource | Principal id |
| m_uiParam1  | Gathering id |
| m_uiParam2  | Principal id |
| m_strParam  | Message      |

### Notification type 4000:

| Field       | Description    |
|-------------|----------------|
| m_pidSource | Previous owner |
| m_uiParam1  | Gathering id   |
| m_uiParam2  | New owner      |
| m_strParam  | Unknown        |

### Notification type 109000:

| Field       | Description  |
|-------------|--------------|
| m_pidSource | Principal id |
| m_uiParam1  | Gathering id |

### Notification type 115000:

| Field       | Description                     |
|-------------|---------------------------------|
| m_pidSource | Principal that made the request |
| m_uiParam1  | Request id                      |
| m_uiParam2  | Unknown                         |

### Notification type 116000:

| Field       | Description                      |
|-------------|----------------------------------|
| m_pidSource | Principal that started the round |
| m_uiParam1  | Round id                         |

### Notification type 122000:

| Field       | Description      |
|-------------|------------------|
| m_pidSource | Host pid         |
| m_uiParam1  | New gathering id |
| m_uiParam2  | Client pid       |

[PID]: /docs/nex/types#pid
[String]: /docs/nex/types#string
[Structure]: /docs/nex/types#structure
[Map]: /docs/nex/types#map
[Variant]: /docs/nex/types#variant
