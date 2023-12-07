---
layout: post
toc: true
title: Message Delivery (27)
---

## Extended protocols

The following games have changed methods in the protocol:
* [Xenoblade Chronicles X](/docs/nex/protocols/message-delivery/xenoblade-chronicles-x)

This remainder of this page describes the methods that are not specific to any game.

For message types, see [Messaging Protocol](/docs/nex/protocols/messaging#types).

## Methods

| Method ID | Method Name                                               |
|-----------|-----------------------------------------------------------|
| 1         | [DeliverMessage](#1-delivermessage)                       |
| 2         | [DeliverMessageMultiTarget](#2-delivermessagemultitarget) |

### (1) DeliverMessage
#### Request

| Type   | Description  |
|--------|--------------|
| [Data] | oUserMessage |

#### Response
This method does not return anything.

### (2) DeliverMessageMultiTarget
#### Request

| Type                | Description |
|---------------------|-------------|
| [List]&lt;[PID]&gt; | Targets     |
| [Data]              | Message     |

#### Response
This method does not return anything.

[List]: /docs/nex/types#list
[PID]: /docs/nex/types#pid
[Data]: /docs/nex/types#anydataholder
