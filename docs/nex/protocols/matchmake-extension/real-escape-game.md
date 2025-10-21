---
layout: post
toc: true
title: Real Escape Game (109)
---

This page describes the methods that are only seen in Real Escape Game × Nintendo 3DS: Escape from the Plan of Mega Destruction.

## Methods

| Method ID | Method Name                                                                                |
| --------- | ------------------------------------------------------------------------------------------ |
| 45        | [GetCustomMatchmakeConfig](#45-getcustommatchmakeconfig)                                   |
| 46        | [GetNumberOfMatchmakeSessions](#46-getnumberofmatchmakesessions)                           |
| 47        | [GetNumberOfMatchmakeSessionsWithGameModes](#47-getnumberofmatchmakesessionswithgamemodes) |

### (45) GetCustomMatchmakeConfig
#### Request
This method does not take any parameters.

#### Response

| Type                 | Description |
| -------------------- | ----------- |
| [List]&lt;Uint32&gt; | Config      |

### (46) GetNumberOfMatchmakeSessions
#### Request
This method does not take any parameters.

#### Response

| Type   | Description   |
| ------ | ------------- |
| Uint32 | Session count |

### (47) GetNumberOfMatchmakeSessionsWithGameModes
#### Request


| Type                 | Description |
| -------------------- | ----------- |
| [List]&lt;Uint32&gt; | Game modes  |

#### Response

| Type                 | Description    |
| -------------------- | -------------- |
| [List]&lt;Uint32&gt; | Session counts |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[StationURL]: /docs/nex/types#stationurl
[Variant]: /docs/nex/types#variant
