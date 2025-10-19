---
layout: post
toc: true
title: Mario Kart 8 (109)
---

This page describes the methods that are only seen in Mario Kart 8.

## Methods

Methods 36 - 39 and 41 belong to the SimpleSearchProtocol instead of the MatchmakeExtensionProtocol.

| Method ID | Method Name                                                                    |
| --------- | ------------------------------------------------------------------------------ |
| 36        | [CreateSimpleSearchObject](#36-createsimplesearchobject)                       |
| 37        | [UpdateSimpleSearchObject](#37-updatesimplesearchobject)                       |
| 38        | [DeleteSimpleSearchObject](#38-deletesimplesearchobject)                       |
| 39        | [SearchSimpleSearchObject](#39-searchsimplesearchobject)                       |
| 40        | JoinMatchmakeSessionWithExtraParticipants                                      |
| 41        | [SearchSimpleSearchObjectByObjectIds](#41-searchsimplesearchobjectbyobjectids) |

### (36) CreateSimpleSearchObject
#### Request

| Type                 | Description |
| -------------------- | ----------- |
| [SimpleSearchObject] | Object      |

#### Response

| Type   | Description |
| ------ | ----------- |
| Uint32 | Object id   |

### (37) UpdateSimpleSearchObject
#### Request

| Type                 | Description |
| -------------------- | ----------- |
| Uint32               | Object id   |
| [SimpleSearchObject] | New object  |

#### Response
This method does not return anything.

### (38) DeleteSimpleSearchObject
#### Request

| Type   | Description |
| ------ | ----------- |
| Uint32 | Object id   |

#### Response
This method does not return anything.

### (39) SearchSimpleSearchObject
#### Request

| Type                | Description |
| ------------------- | ----------- |
| [SimpleSearchParam] | Param       |

#### Response

| Type                               | Description |
| ---------------------------------- | ----------- |
| [List]&lt;[SimpleSearchObject]&gt; | Objects     |

### (41) SearchSimpleSearchObjectByObjectIds
#### Request

| Type                 | Description |
| -------------------- | ----------- |
| [List]&lt;Uint32&gt; | Object ids  |

#### Response

| Type                               | Description |
| ---------------------------------- | ----------- |
| [List]&lt;[SimpleSearchObject]&gt; | Objects     |

## Types
### SimpleSearchObject ([Structure])

| Type                            | Description             |
| ------------------------------- | ----------------------- |
| Uint32                          | Object ID               |
| [PID]                           | Owner PID               |
| [List]&lt;Uint32&gt;            | Attributes              |
| [qBuffer]                       | Metadata                |
| Uint32                          | Community ID (Miiverse) |
| [String]                        | Community Code          |
| [SimpleSearchDateTimeAttribute] | Datetime attribute      |

### SimpleSearchDateTimeAttribute ([Structure])

| Type       | Description |
| ---------- | ----------- |
| Uint32     | Unknown     |
| Uint32     | Unknown     |
| Uint32     | Unknown     |
| Uint32     | Unknown     |
| [DateTime] | Start time  |
| [DateTime] | End time    |

### SimpleSearchParam ([Structure])

| Type                                  | Description  |
| ------------------------------------- | ------------ |
| Uint32                                | Object id    |
| [PID]                                 | Owner        |
| [List]&lt;[SimpleSearchCondition]&gt; | Conditions   |
| [String]                              | Code         |
| [ResultRange]                         | Result range |
| [DateTime]                            | Datetime     |

### SimpleSearchCondition ([Structure])

| Type   | Description         |
| ------ | ------------------- |
| Uint32 | Value               |
| Uint32 | Comparison operator |

#### Comparison operators

| Value | Description |
| ----- | ----------- |
| 0     | Any         |
| 1     | ==          |
| 2     | >           |
| 3     | <           |
| 4     | >=          |
| 5     | <=          |

[String]: /docs/nex/types#string
[Data]: /docs/nex/types#anydataholder
[List]: /docs/nex/types#list
[DateTime]: /docs/nex/types#datetime
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[PID]: /docs/nex/types#pid
[Structure]: /docs/nex/types#structure
[ResultRange]: /docs/nex/types#resultrange-structure

[SimpleSearchObject]: #simplesearchobject-structure
[SimpleSearchDateTimeAttribute]: #simplesearchdatetimeattribute-structure
[SimpleSearchParam]: #simplesearchparam-structure
[SimpleSearchCondition]: #simplesearchcondition-structure
