---
layout: post
toc: true
title: Storage Manager (110)
---

This protocol is the predecessor of the [Utility](/docs/nex/protocols/utility) protocol. It was replaced on NEX 3.0.0.

Unique IDs are linked to either a user or a card ID. Each user or card ID has 5 zero-indexed slots for unique IDs, and they can't be assigned any more.

Card IDs were introduced in NEX 2, and a user can use as much card IDs as they like. Card IDs aren't user-specific, but if a user tries to use a card ID given to another user, they will get assigned 5 new slots for unique IDs on the card ID, without altering the slots of the original user.

## Methods

| Method ID | Method Name                                             |
|-----------|---------------------------------------------------------|
| 1         | [AcquireNexUniqueId](#1-acquirenexuniqueid)             |
| 2         | [NexUniqueIdToPrincipalId](#2-nexuniqueidtoprincipalid) |
| 3         | [UnknownMethod0x3](#3-unknownmethod0x3)                 |
| 4         | [AcquireCardId](#4-acquirecardid)                       |
| 5         | [ActivateWithCardId](#5-activatewithcardid)             |

### (1) AcquireNexUniqueId
#### Request

| Type   | Description |
|--------|-------------|
| Uint8  | Slot        |

#### Response

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |
| Bool   | First time  |

### (2) NexUniqueIdToPrincipalId
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |

#### Response

| Type  | Description  |
|-------|--------------|
| [PID] | Principal ID |

### (3) UnknownMethod0x3
#### Request

The request format of this method is unknown.

#### Response

| Type                 | Description |
|----------------------|-------------|
| [List]&lt;Uint32&gt; | Unknown     |

### (4) AcquireCardId
#### Request
This method does not take any parameters.

#### Response

| Type   | Description |
|--------|-------------|
| Uint64 | Card ID     |

### (5) ActivateWithCardId
#### Request

| Type   | Description |
|--------|-------------|
| Uint8  | Slot        |
| Uint64 | Card ID     |

#### Response

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |
| Bool   | First time  |

[PID]: /docs/nex/types#pid
[List]: /docs/nex/types#list
