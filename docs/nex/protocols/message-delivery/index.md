---
layout: post
toc: true
title: Message Delivery (27)
---

For message types, see [Messaging Protocol](/docs/nex/protocols/messaging#types).

## Methods

| Method ID | Method Name                                               |
|-----------|-----------------------------------------------------------|
| 1         | [DeliverMessage](#1-delivermessage)                       |
| 2         | [DeliverMessageMultiTarget](#2-delivermessagemultitarget) |

### (1) DeliverMessage
#### Request

| Type  | Name         |
|-------|--------------|
| [Any] | oUserMessage |

### (2) DeliverMessageMultiTarget
#### Request

| Type                | Name         |
|---------------------|--------------|
| [List]&lt;[PID]&gt; | lstTarget    |
| [Any]               | oUserMessage |

#### Response
This method does not return anything.

[Any]: /docs/nex/types#anydataholder
