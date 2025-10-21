---
layout: post
toc: true
title: GameSessionAdminProtocol (43)
---

## Methods

| Method ID | Method Name                                             |
| --------- | ------------------------------------------------------- |
| 1         | [GetTableStatuses](#1-gettablestatuses)                 |
| 2         | [ForceCustomTableSync](#2-forcecustomtablesync)         |
| 3         | [CleanupOnBootSessions](#3-cleanuponbootsessions)       |
| 4         | [CleanupOnBootURLs](#4-cleanuponbooturls)               |
| 5         | [GetURLs](#5-geturls)                                   |
| 6         | [UpdateURLsDID](#6-updateurlsdid)                       |
| 7         | [SetThrottlingProbability](#7-setthrottlingprobability) |
| 8         | [SetThrottlingDelay](#8-setthrottlingdelay)             |
| 9         | [GetSession](#9-getsession)                             |

### (1) GetTableStatuses
#### Request
This method does not take any parameters.
#### Response

| Type                                                                      | Name                     |
| ------------------------------------------------------------------------- | ------------------------ |
| [List]&lt;[GameSessionTableStatus](#gamesessiontablestatus-structure)&gt; | gameSessionTableStatuses |

### (2) ForceCustomTableSync
#### Request

| Type                                                                      | Name                    |
| ------------------------------------------------------------------------- | ----------------------- |
| [List]&lt;[GameSessionTableDetail](#gamesessiontabledetail-structure)&gt; | gameSessionTableDetails |

#### Response
This method does not return anything.

### (3) CleanupOnBootSessions
#### Request
This method does not take any parameters.
#### Response

| Type   | Name             |
| ------ | ---------------- |
| Uint32 | nbOfAffectedRows |

### (4) CleanupOnBootURLs
#### Request
This method does not take any parameters.
#### Response

| Type   | Name             |
| ------ | ---------------- |
| Uint32 | nbOfAffectedRows |

### (5) GetURLs
#### Request

| Type  | Name |
| ----- | ---- |
| [PID] | pid  |

#### Response

| Type                       | Name |
| -------------------------- | ---- |
| [List]&lt;[StationURL]&gt; | urls |

### (6) UpdateURLsDID
#### Request

| Type   | Name |
| ------ | ---- |
| [PID]  | pid  |
| Uint32 | did  |

#### Response
This method does not return anything.

### (7) SetThrottlingProbability
#### Request

| Type   | Name                 |
| ------ | -------------------- |
| Uint32 | typeID               |
| Uint32 | throttlingPercentage |

#### Response
This method does not return anything.

### (8) SetThrottlingDelay
#### Request

| Type   | Name                   |
| ------ | ---------------------- |
| Uint32 | typeID                 |
| Uint32 | throttlingDelaySeconds |

#### Response
This method does not return anything.

### (9) GetSession
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response

| Type                      | Name         |
| ------------------------- | ------------ |
| [GameSessionSearchResult] | searchResult |

## Types

### GameSessionTableStatus ([Structure])
| Type       | Name           |
| ---------- | -------------- |
| [String]   | m_tableName    |
| [String]   | m_engine       |
| [DateTime] | m_creationTime |

### GameSessionTableDetail ([Structure])
| Type     | Name               |
| -------- | ------------------ |
| [String] | m_tableName        |
| [String] | m_generatorVersion |
| [String] | m_xmlHash          |

[GameSessionKey]: /docs/nex/protocols/game-session#gamesessionkey-structure
[GameSessionSearchResult]: /docs/nex/protocols/game-session#gamesessionsearchresult-structure

[Structure]: /docs/nex/types#structure
[List]: /docs/nex/types#list
[String]: /docs/nex/types#string
[DateTime]: /docs/nex/types#datetime
[PID]: /docs/nex/types#pid
[StationURL]: /docs/nex/types#stationurl
