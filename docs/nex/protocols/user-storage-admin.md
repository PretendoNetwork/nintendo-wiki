---
layout: post
toc: true
title: User Storage Admin
---

## Methods

| Method ID | Method Name                                                                 |
| --------- | --------------------------------------------------------------------------- |
| 1         | [GetContentsToModerate](#1-getcontentstomoderate)                           |
| 2         | [FlagContentAsVerified](#2-flagcontentasverified)                           |
| 3         | [BanContent](#3-bancontent)                                                 |
| 4         | [BanUser](#4-banuser)                                                       |
| 5         | [BanUserFromContentType](#5-banuserfromcontenttype)                         |
| 6         | [UnbanUser](#6-unbanuser)                                                   |
| 7         | [UnbanUserFromContentType](#7-unbanuserfromcontenttype)                     |
| 8         | [GetContentsToModerateWithThreshold](#8-getcontentstomoderatewiththreshold) |
| 9         | [UpdateMetaData](#9-updatemetadata)                                         |

### (1) GetContentsToModerate
#### Request

| Type   | Name   |
| ------ | ------ |
| Uint32 | typeID |
| Uint32 | offset |
| Uint32 | size   |

#### Response

| Type                                                            | Name         |
| --------------------------------------------------------------- | ------------ |
| [List]&lt;[UserContent](user-storage#usercontent-structure)&gt; | contents     |
| Uint32                                                          | totalResults |

### (2) FlagContentAsVerified
#### Request

| Type                                                    | Name       |
| ------------------------------------------------------- | ---------- |
| [UserContentKey](user-storage#usercontentkey-structure) | contentKey |

#### Response
This method does not return anything.

### (3) BanContent
#### Request

| Type                                                    | Name       |
| ------------------------------------------------------- | ---------- |
| [UserContentKey](user-storage#usercontentkey-structure) | contentKey |

#### Response
This method does not return anything.

### (4) BanUser
#### Request

| Type       | Name        |
| ---------- | ----------- |
| Uint32     | pid         |
| [String]   | reason      |
| Bool       | banContents |
| [DateTime] | expireDate  |

#### Response
This method does not return anything.

### (5) BanUserFromContentType
#### Request

| Type       | Name        |
| ---------- | ----------- |
| Uint32     | typeID      |
| Uint32     | pid         |
| [String]   | reason      |
| Bool       | banContents |
| [DateTime] | expireDate  |

#### Response
This method does not return anything.

### (6) UnbanUser
#### Request

| Type   | Name |
| ------ | ---- |
| Uint32 | pid  |

#### Response
This method does not return anything.

### (7) UnbanUserFromContentType
#### Request

| Type   | Name   |
| ------ | ------ |
| Uint32 | typeID |
| Uint32 | pid    |

#### Response
This method does not return anything.

### (8) GetContentsToModerateWithThreshold
#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | typeID    |
| Uint32 | threshold |
| Uint32 | offset    |
| Uint32 | size      |

#### Response

| Type                                                            | Name         |
| --------------------------------------------------------------- | ------------ |
| [List]&lt;[UserContent](user-storage#usercontent-structure)&gt; | contents     |
| Uint32                                                          | totalResults |

### (9) UpdateMetaData
#### Request

| Type                                                                    | Name       |
| ----------------------------------------------------------------------- | ---------- |
| [UserContentKey](user-storage#usercontentkey-structure)                 | contentKey |
| [List]&lt;[ContentProperty](user-storage#contentproperty-structure)&gt; | properties |

#### Response
This method does not return anything.

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
