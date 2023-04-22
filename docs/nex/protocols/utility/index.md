---
layout: post
toc: true
title: Utility (110)
---

## Extended protocols

The following games have additional methods in the utility protocol:
* [Mario Kart 7](/docs/nex/protocols/utility/mario-kart-7)
* [Mario Strikers: Battle League](/docs/nex/protocols/utility/mario-strikers-battle-league)
* [Splatoon 2](/docs/nex/protocols/utility/splatoon-2)
* [Super Smash Bros. Ultimate](/docs/nex/protocols/utility/super-smash-bros-ultimate)

This remainder of this page describes the methods that are not specific to any game.

## Methods

| Method ID | Method Name                                                                                 |
| --------- | ------------------------------------------------------------------------------------------- |
| 1         | [AcquireNexUniqueId](#1-acquirenexuniqueid)                                                 |
| 2         | [AcquireNexUniqueIdWithPassword](#2-acquirenexuniqueidwithpassword)                         |
| 3         | [AssociateNexUniqueIdWithMyPrincipalId](#3-associatenexuniqueidwithmyprincipalid)           |
| 4         | [AssociateNexUniqueIdsWithMyPrincipalId](#4-associatenexuniqueidswithmyprincipalid)         |
| 5         | [GetAssociatedNexUniqueIdWithMyPrincipalId](#5-getassociatednexuniqueidwithmyprincipalid)   |
| 6         | [GetAssociatedNexUniqueIdsWithMyPrincipalId](#6-getassociatednexuniqueidswithmyprincipalid) |
| 7         | [GetIntegerSettings](#7-getintegersettings)                                                 |
| 8         | [GetStringSettings](#8-getstringsettings)                                                   |

### (1) AcquireNexUniqueId
#### Request
This method does not take any parameters.

#### Response

| Type   | Name         |
| ------ | ------------ |
| Uint64 | pNexUniqueId |

### (2) AcquireNexUniqueIdWithPassword
#### Request
This method does not take any parameters.

#### Response

| Type           | Name             |
| -------------- | ---------------- |
| [UniqueIdInfo] | pNexUniqueIdInfo |

### (3) AssociateNexUniqueIdWithMyPrincipalId
#### Request

| Type           | Name         |
| -------------- | ------------ |
| [UniqueIdInfo] | uniqueIdInfo |

#### Response
This method does not return anything.

### (4) AssociateNexUniqueIdsWithMyPrincipalId
#### Request

| Type                         | Name         |
| ---------------------------- | ------------ |
| [List]&lt;[UniqueIdInfo]&gt; | uniqueIdInfo |

#### Response
This method does not return anything.

### (5) GetAssociatedNexUniqueIdWithMyPrincipalId
#### Request
This method does not take any parameters.

#### Response

| Type           | Name          |
| -------------- | ------------- |
| [UniqueIdInfo] | pUniqueIdInfo |

### (6) GetAssociatedNexUniqueIdsWithMyPrincipalId
#### Request
This method does not take any parameters.

#### Response

| Type                         | Name          |
| ---------------------------- | ------------- |
| [List]&lt;[UniqueIdInfo]&gt; | pUniqueIdInfo |

### (7) GetIntegerSettings
#### Request

| Type   | Name                |
| ------ | ------------------- |
| Uint32 | integerSettingIndex |

#### Response

| Type                        | Name            |
| --------------------------- | --------------- |
| [Map]&lt;Uint16, Sint32&gt; | integerSettings |

### (8) GetStringSettings
#### Request

| Type   | Name               |
| ------ | ------------------ |
| Uint32 | stringSettingIndex |

#### Response

| Type                          | Name           |
| ----------------------------- | -------------- |
| [Map]&lt;Uint16, [String]&gt; | stringSettings |

## Types
### UniqueIdInfo ([Structure])

| Type   | Name                |
| ------ | ------------------- |
| Uint64 | nexUniqueId         |
| Uint64 | nexUniqueIdPassword |

[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder

[UniqueIdInfo]: #uniqueidinfo-structure
