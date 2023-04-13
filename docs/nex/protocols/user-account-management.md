---
layout: post
toc: true
title: User Account Management (72)
---

## Methods

| Method ID | Method Name                                       |
| --------- | ------------------------------------------------- |
| 1         | [LookupSceNpIds](#1-lookupscenpids)               |
| 2         | [LookupPrincipalIDs](#2-lookupprincipalids)       |
| 3         | [LookupFirstPartyIds](#3-lookupfirstpartyids)     |
| 4         | [UserHasPlayed](#4-userhasplayed)                 |
| 5         | [IsUserPlaying](#5-isuserplaying)                 |
| 6         | [updateSonyAccountInfo](#6-updatesonyaccountinfo) |
| 7         | [LookupUsernames](#7-lookupusernames)             |

### (1) LookupSceNpIds
#### Request

| Type                 | Name |
| -------------------- | ---- |
| [List]&lt;Uint32&gt; | pids |

#### Response

| Type                           | Name  |
| ------------------------------ | ----- |
| [Map]&lt;Uint32, [qBuffer]&gt; | npids |

### (2) LookupPrincipalIDs
#### Request

| Type                   | Name          |
| ---------------------- | ------------- |
| [List]&lt;[String]&gt; | firstPartyIds |
| Uint32                 | platformId    |

#### Response

| Type                          | Name |
| ----------------------------- | ---- |
| [Map]&lt;[String], Uint32&gt; | pids |

### (3) LookupFirstPartyIds
#### Request

| Type                 | Name       |
| -------------------- | ---------- |
| [List]&lt;Uint32&gt; | pids       |
| Uint32               | platformId |

#### Response

| Type                          | Name          |
| ----------------------------- | ------------- |
| [Map]&lt;Uint32, [String]&gt; | firstPartyIds |

### (4) UserHasPlayed
#### Request

| Type                   | Name          |
| ---------------------- | ------------- |
| [List]&lt;[String]&gt; | FirstPartyIds |
| Uint32                 | platformId    |

#### Response

| Type                        | Name         |
| --------------------------- | ------------ |
| [Map]&lt;[String], Bool&gt; | UserPresence |

### (5) IsUserPlaying
#### Request

| Type                   | Name          |
| ---------------------- | ------------- |
| [List]&lt;[String]&gt; | firstPartyIds |
| Uint32                 | platformId    |

#### Response

| Type                        | Name         |
| --------------------------- | ------------ |
| [Map]&lt;[String], Bool&gt; | UserPresence |

### (6) updateSonyAccountInfo
#### Request

| Type      | Name       |
| --------- | ---------- |
| [qBuffer] | ticketData |
| Uint32    | ticketSize |

#### Response
This method does not return anything.

### (7) LookupUsernames
#### Request

| Type                 | Name       |
| -------------------- | ---------- |
| [List]&lt;Uint32&gt; | pids       |
| Uint32               | platformId |

#### Response

| Type                          | Name      |
| ----------------------------- | --------- |
| [Map]&lt;Uint32, [String]&gt; | UserNames |

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
