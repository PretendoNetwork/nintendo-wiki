---
layout: post
toc: true
title: Storage Manager (110)
---

This protocol is the predecessor of the [Utility](/docs/nex/protocols/utility) protocol. It was replaced on NEX 3.0.0.

## Methods

| Method ID | Method Name                                 |
| --------- | ------------------------------------------- |
| 4         | [AcquireCardId](#4-acquirecardid)           |
| 5         | [ActivateWithCardId](#5-activatewithcardid) |

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
| Uint8  | Unknown     |
| Uint64 | Card ID     |

#### Response

| Type   | Description |
|--------|-------------|
| Uint32 | Unique ID   |
| Bool   | First time  |
