---
layout: post
toc: true
title: Clone
---

The message type is encoded as `0xAB`, where `A` indicates the structure. `B` is usually one, unless different messages use the same structure.

| ID | Type                                                  |
|----|-------------------------------------------------------|
| 1  | Clock request message                                 |
| 2  | Clock reply message                                   |
| 3  | Participate message                                   |
| 4  | Exit ack message                                      |
| 8  | [Clone command message](#clone-command-message)       |
| 9  | Clock clone command message                           |
| 10 | Clock and count clone command message                 |
| 11 | Clock and participant clone command message           |
| 12 | Clock and count and participant clone command message |

## Message Header

| Offset | Size | Description        |
|--------|------|--------------------|
| 0x0    | 1    | Version number (3) |
| 0x1    | 1    | Message type       |
| 0x2    | 2    | Unknown            |

## Clone Command Message

| Offset | Size | Description                       |
|--------|------|-----------------------------------|
| 0x0    | 4    | [Message header](#message-header) |
| 0x4    | 1    | Unknown                           |
| 0x5    | 1    | Unknown                           |
| 0x6    | 2    | Unknown                           |
| 0x6    | 2    | Unknown                           |
| 0x8    | 4    | Unknown                           |
| 0xC    | 4    | Unknown                           |
| 0x10   | 2    | Unknown                           |
| 0x12   |      | Payload                           |