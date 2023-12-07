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

| Method ID | Method Name                         |
|-----------|-------------------------------------|
| 1         | [DeliverMessage](#1-delivermessage) |

### (1) DeliverMessage
#### Request

| Type   | Name         |
|--------|--------------|
| [Data] | oUserMessage |

#### Response
No RMC response is sent.

[Data]: /docs/nex/types#anydataholder
