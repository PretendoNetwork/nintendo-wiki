---
layout: post
toc: true
title: Splatoon 2 (110)
---

This page describes the methods that are only seen in Splatoon 2.

## Methods

| Method ID | Method Name                                |
| --------- | ------------------------------------------ |
| 9         | [AcquireTagId](#9-acquiretagid)            |
| 10        | [UpdateCurrentUser](#10-updatecurrentuser) |

### (9) AcquireTagId
#### Request

| Type                                        | Name         |
| ------------------------------------------- | ------------ |
| [List](/docs/nex/types#list)&lt;Uint64&gt; | nexUniqueIds |

#### Response

| Type   | Name   |
| ------ | ------ |
| Uint64 | pTagId |

### (10) UpdateCurrentUser
#### Request

| Type                                                        | Name  |
| ----------------------------------------------------------- | ----- |
| [UpdateCurrentUserParam](#updatecurrentuserparam-structure) | param |

#### Response
This method does not return anything.

## Types
### UpdateCurrentUserParam ([Structure](/docs/nex/types#structure))

| Type                                                               | Name   |
| ------------------------------------------------------------------ | ------ |
| [UniqueIdInfo](/docs/nex/protocols/Utility#uniqueidinfo-structure) | info   |
| Uint8                                                              | region |
