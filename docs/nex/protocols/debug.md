---
layout: post
toc: true
title: Debug (116)
---

This protocol seems to log your RMC requests.

## Methods

| Method ID | Method Name                                     |
| --------- | ----------------------------------------------- |
| 1         | [EnableApiRecorder](#1-enableapirecorder)       |
| 2         | [DisableApiRecorder](#2-disableapirecorder)     |
| 3         | [IsApiRecorderEnabled](#3-isapirecorderenabled) |
| 4         | [GetApiCalls](#4-getapicalls)                   |
| 5         | SetExcludeJoinedMatchmakeSession                |
| 6         | GetExcludeJoinedMatchmakeSession                |
| 7         | GetApiCallSummary                               |

### (1) EnableApiRecorder
This method does not take any parameters and does not return anything.

### (2) DisableApiRecorder
This method does not take any parameters and does not return anything.

### (3) IsApiRecorderEnabled
#### Request
This method does not take any parameters.

#### Response

| Type | Description                         |
| ---- | ----------------------------------- |
| Bool | True if the api recorder is enabled |

### (4) GetApiCalls
This method returns `RendezVous::InvalidConfiguration` if the api recorder is disabled.

#### Request

| Type                | Description |
| ------------------- | ----------- |
| [List]&lt;[PID]&gt; | Pids        |
| [DateTime]          | Unknown     |
| [DateTime]          | Unknown     |

#### Response

| Type                                        | Description |
| ------------------------------------------- | ----------- |
| [List]&lt;[ApiCall](#apicall-structure)&gt; | Api calls   |

## Types
### ApiCall ([Structure])

| Type       | Description |
| ---------- | ----------- |
| [String]   | Method name |
| [DateTime] | Call time   |
| [PID]      | User id     |

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
