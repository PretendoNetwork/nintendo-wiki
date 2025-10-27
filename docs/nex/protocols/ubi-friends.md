---
layout: post
toc: true
title: UbiFriendsProtocol (47)
---

## Methods

| Method ID | Method Name                                     |
| --------- | ----------------------------------------------- |
| 1         | [RequestFriendship](#1-requestfriendship)       |
| 2         | [AcceptFriendship](#2-acceptfriendship)         |
| 3         | [ClearRelationship](#3-clearrelationship)       |
| 4         | [DeclineFriendship](#4-declinefriendship)       |
| 5         | [AddToBlacklist](#5-addtoblacklist)             |
| 6         | [RemoveFromBlacklist](#6-removefromblacklist)   |
| 7         | [GetRelationshipsList](#7-getrelationshipslist) |

### (1) RequestFriendship
#### Request

| Type                                  | Name |
| ------------------------------------- | ---- |
| [AccountInfo](#accountinfo-structure) | to   |

#### Response
This method does not return anything.

### (2) AcceptFriendship
#### Request

| Type                                  | Name |
| ------------------------------------- | ---- |
| [AccountInfo](#accountinfo-structure) | to   |

#### Response
This method does not return anything.

### (3) ClearRelationship
#### Request

| Type                                  | Name |
| ------------------------------------- | ---- |
| [AccountInfo](#accountinfo-structure) | to   |

#### Response
This method does not return anything.

### (4) DeclineFriendship
#### Request

| Type                                  | Name |
| ------------------------------------- | ---- |
| [AccountInfo](#accountinfo-structure) | to   |

#### Response
This method does not return anything.

### (5) AddToBlacklist
#### Request

| Type                                  | Name |
| ------------------------------------- | ---- |
| [AccountInfo](#accountinfo-structure) | to   |

#### Response
This method does not return anything.

### (6) RemoveFromBlacklist
#### Request

| Type                                  | Name |
| ------------------------------------- | ---- |
| [AccountInfo](#accountinfo-structure) | to   |

#### Response
This method does not return anything.

### (7) GetRelationshipsList
#### Request
This method does not take any parameters.

#### Response

| Type                                                          | Name              |
| ------------------------------------------------------------- | ----------------- |
| [List]&lt;[RelationshipInfo](#relationshipinfo-structure)&gt; | relationshipsList |

## Types

### AccountInfo ([Structure])

| Type     | Name           |
| -------- | -------------- |
| [PID]    | m_principalId  |
| [String] | m_ubiAccountId |

### RelationshipInfo ([Structure])

| Type                                  | Name           |
| ------------------------------------- | -------------- |
| [AccountInfo](#accountinfo-structure) | m_from         |
| [AccountInfo](#accountinfo-structure) | m_to           |
| byte                                  | m_relationship |
| bool                                  | m_onBlacklist  |
| [DateTime]                            | m_friendsDate  |

[PID]: /docs/nex/types#pid
[String]: /docs/nex/types#string
[List]: /docs/nex/types#list
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
