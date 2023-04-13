---
layout: post
toc: true
title: Persistent Store (24)
---

This protocol is implemented on Nintendo game servers, but never used by games.

## Methods

| Method ID | Method Name                                   |
| --------- | --------------------------------------------- |
| 1         | [FindByGroup](#1-findbygroup)                 |
| 2         | [InsertItem](#2-insertitem)                   |
| 3         | [RemoveItem](#3-removeitem)                   |
| 4         | [GetItem](#4-getitem)                         |
| 5         | [InsertCustomItem](#5-insertcustomitem)       |
| 6         | [GetCustomItem](#6-getcustomitem)             |
| 7         | [FindItemsBySQLQuery](#7-finditemsbysqlquery) |

### (1) FindByGroup
#### Request

| Type   | Name    |
| ------ | ------- |
| Uint32 | uiGroup |

#### Response

| Type                   | Name    |
| ---------------------- | ------- |
| [List]&lt;[String]&gt; | lstTags |

### (2) InsertItem
#### Request

| Type     | Name     |
| -------- | -------- |
| Uint32   | uiGroup  |
| [String] | strTag   |
| [Buffer] | bufData  |
| Bool     | bReplace |

#### Response

| Type | Name    |
| ---- | ------- |
| Bool | bResult |

### (3) RemoveItem
#### Request

| Type     | Name    |
| -------- | ------- |
| Uint32   | uiGroup |
| [String] | strTag  |

#### Response

| Type | Name    |
| ---- | ------- |
| Bool | bResult |

### (4) GetItem
#### Request

| Type     | Name    |
| -------- | ------- |
| Uint32   | uiGroup |
| [String] | strTag  |

#### Response

| Type     | Name    |
| -------- | ------- |
| [Buffer] | bufData |
| Bool     | bResult |

### (5) InsertCustomItem
#### Request

| Type     | Name     |
| -------- | -------- |
| Uint32   | uiGroup  |
| [String] | strTag   |
| [Data]   | hData    |
| Bool     | bReplace |

#### Response
This method does not return anything.

### (6) GetCustomItem
#### Request

| Type     | Name    |
| -------- | ------- |
| Uint32   | uiGroup |
| [String] | strTag  |

#### Response

| Type   | Name  |
| ------ | ----- |
| [Data] | hData |

### (7) FindItemsBySQLQuery
#### Request

| Type     | Name     |
| -------- | -------- |
| Uint32   | uiGroup  |
| [String] | strTag   |
| [String] | strQuery |

#### Response

| Type                 | Name    |
| -------------------- | ------- |
| [List]&lt;[Data]&gt; | lstData |

[Buffer]: /docs/nex/types#buffer
[Data]: /docs/nex/types#any-data-holder
[List]: /docs/nex/types#list
[String]: /docs/nex/types#string
