---
layout: post
toc: true
title: Super Smash Bros. Ultimate (110)
---

This page describes the methods that are only seen in SSBU.

## Methods

| Method ID | Method Name                        |
| --------- | ---------------------------------- |
| 9         | [Unknown](#9-unknown)              |
| 10        | [Unknown](#10-unknown)             |
| 11        | [GetGameEvents](#11-getgameevents) |

### (9) Unknown
#### Request

| Type                                    | Description |
| --------------------------------------- | ----------- |
| [MethodParam9](#methodparam9-structure) | Param       |

#### Response

| Type                                      | Description |
| ----------------------------------------- | ----------- |
| [UnknownStruct](#unknownstruct-structure) | Unknown     |

### (10) Unknown
#### Request

| Type                                      | Description |
| ----------------------------------------- | ----------- |
| [MethodParam10](#methodparam10-structure) | Param       |

#### Response

| Type                                        | Description |
| ------------------------------------------- | ----------- |
| [UnknownStruct2](#unknownstruct2-structure) | Param       |

### (11) GetGameEvents
#### Request

| Type                                                | Description |
| --------------------------------------------------- | ----------- |
| [GetGameEventsParam](#getgameeventsparam-structure) | Param       |

#### Response

| Type                                            | Description |
| ----------------------------------------------- | ----------- |
| [List]&lt;[GameEvent](#gameevent-structure)&gt; | Game events |

## Types
### GameEvent ([Structure])

| Type                                                        | Description |
| ----------------------------------------------------------- | ----------- |
| Uint32                                                      | Unknown     |
| Uint32                                                      | Unknown     |
| Uint16                                                      | Unknown     |
| [String]                                                    | Unknown     |
| [String]                                                    | Unknown     |
| [DateTime]                                                  | Unknown     |
| [DateTime]                                                  | Unknown     |
| [DateTime]                                                  | Unknown     |
| [DateTime]                                                  | Unknown     |
| [Map]&lt;[String], [Variant]&gt;                            | Unknown     |
| [Map]&lt;[String], [List]&lt;[Variant]&gt;&gt;              | Unknown     |
| [List]&lt;[GameEventPeriod](#gameeventperiod-structure)&gt; | Periods     |

### GameEventPeriod ([Structure])

| Type                                           | Description |
| ---------------------------------------------- | ----------- |
| Uint32                                         | Unknown     |
| Uint32                                         | Unknown     |
| [DateTime]                                     | Unknown     |
| [DateTime]                                     | Unknown     |
| [Map]&lt;[String], [Variant]&gt;               | Unknown     |
| [Map]&lt;[String], [List]&lt;[Variant]&gt;&gt; | Unknown     |
| Uint32                                         | Unknown     |

### GetGameEventsParam ([Structure])

| Type     | Description |
| -------- | ----------- |
| Uint32   | Unknown     |
| [String] | Unknown     |

### MethodParam9 ([Structure])

| Type     | Description |
| -------- | ----------- |
| Uint32   | Unknown     |
| Uint32   | Unknown     |
| [String] | Unknown     |

### MethodParam10 ([Structure])

| Type                                      | Description |
| ----------------------------------------- | ----------- |
| [UnknownStruct](#unknownstruct-structure) | Unknown     |
| Int32                                     | Unknown     |

### UnknownStruct ([Structure])

| Type   | Description |
| ------ | ----------- |
| Uint32 | Unknown     |
| Uint32 | Unknown     |
| Uint32 | Unknown     |

### UnknownStruct2 ([Structure])

| Type   | Description |
| ------ | ----------- |
| Bool   | Unknown     |
| Uint32 | Unknown     |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[Variant]: /docs/nex/types#variant
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[PID]: /docs/nex/types#pid
