---
layout: post
toc: true
title: Privileges (25)
---

## Methods

| Method ID | Method Name                                                               |
| --------- | ------------------------------------------------------------------------- |
| 1         | [GetPrivileges](#1-getprivileges)                                         |
| 2         | [ActivateKey](#2-activatekey)                                             |
| 3         | [ActivateKeyWithExpectedPrivileges](#3-activatekeywithexpectedprivileges) |
| 4         | [GetPrivilegeRemainDuration](#4-getprivilegeremainduration)               |
| 5         | [GetExpiredPrivileges](#5-getexpiredprivileges)                           |
| 6         | [GetPrivilegesEx](#6-getprivilegesex)                                     |

### (1) GetPrivileges
#### Request

| Type     | Name       |
| -------- | ---------- |
| [String] | localeCode |

#### Response

| Type                             | Name       |
| -------------------------------- | ---------- |
| [Map]&lt;Uint32, [Privilege]&gt; | privileges |

### (2) ActivateKey
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | uniqueKey    |
| [String] | languageCode |

#### Response

| Type             | Name      |
| ---------------- | --------- |
| [PrivilegeGroup] | privilege |

### (3) ActivateKeyWithExpectedPrivileges
#### Request

| Type                 | Name                 |
| -------------------- | -------------------- |
| [String]             | uniqueKey            |
| [String]             | languageCode         |
| [List]&lt;Uint32&gt; | expectedPrivilegeIDs |

#### Response

| Type             | Name      |
| ---------------- | --------- |
| [PrivilegeGroup] | privilege |

### (4) GetPrivilegeRemainDuration
#### Request

| Type   | Name        |
| ------ | ----------- |
| Uint32 | privilegeID |

#### Response

| Type   | Name    |
| ------ | ------- |
| Sint32 | seconds |

### (5) GetExpiredPrivileges
#### Request
This method does not take any parameters.

#### Response

| Type                        | Name              |
| --------------------------- | ----------------- |
| [List]&lt;[PrivilegeEx]&gt; | expiredPrivileges |

### (6) GetPrivilegesEx
#### Request

| Type     | Name       |
| -------- | ---------- |
| [String] | localeCode |

#### Response

| Type                        | Name         |
| --------------------------- | ------------ |
| [List]&lt;[PrivilegeEx]&gt; | privilegesEx |

## Types
### Privilege ([Structure])

| Type     | Name          |
| -------- | ------------- |
| Uint32   | m_ID          |
| [String] | m_description |

### PrivilegeEx ([Structure])

| Type     | Name          |
| -------- | ------------- |
| Uint32   | m_ID          |
| [String] | m_description |
| Sint32   | m_duration    |

### PrivilegeGroup ([Structure])

| Type                      | Name          |
| ------------------------- | ------------- |
| [String]                  | m_description |
| [List]&lt;[Privilege]&gt; | m_privileges  |

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

[Privilege]: #privilege-structure
[PrivilegeGroup]: #privilegegroup-structure
[PrivilegeEx]: #privilegeex-structure
