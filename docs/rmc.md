---
layout: post
toc: true
title: RMC Protocol
---

# Overview

[PRUDP](/docs/prudp) packets may have optional payloads. These payloads may be anything, however typically `DATA` packets use RMC. RMC is a standardized protocol for calling methods on remote services. RMC has been known to come in at least 3 different variations. The variation used is already know to both the server and client. These variations are:

- "Packed" - Information about the service and method is tightly packed, such as using integers for protocol/method IDs
- "Packed" extended - The exact same as the previous "packed" variation, except an additional uint16 is added as the "true" protocol ID. In this case the uint8 "protocol ID" is `0x7F`
- "Verbose" - Rather than tightly packing data, this variation opts to encode information about the remote service and method in a more verbose way, using strings in place of integer IDs. This variation also changes how [Structures](/docs/nex/types#structure) are encoded

All NEX titles use one of the "packed" variations. Many Rendez-Vous titles also seem to use the "packed" variations. However, some Rendez-Vous titles use the "verbose" variation

# "Packed" variations

## Request Format

| Type   | Description                                                                                     |
|--------|-------------------------------------------------------------------------------------------------|
| Uint32 | Size, excluding this field                                                                      |
| Uint8  | [Protocol id](/docs/nex/protocols), ORed with 0x80                                              |
| Uint16 | Extended protocol id. **Only present if using the "extended" variation (protocol id is 0x7F).** |
| Uint32 | Call id, an incrementing number used to match a response to the right request                   |
| Uint32 | Method id                                                                                       |
| ...    | Method parameters                                                                               |

## Response Format

| Type   | Description                                                        |
|--------|--------------------------------------------------------------------|
| Uint32 | Size, excluding this field                                         |
| Uint8  | [Protocol id](/docs/nex/protocols)                                 |
| Uint16 | Extended protocol id. **Only present if the protocol id is 0x7F.** |
| Bool   | "Is success"                                                       |

**On success:**

| Type   | Description                 |
|--------|-----------------------------|
| Uint32 | Call id                     |
| Uint32 | Method id, ORed with 0x8000 |
| ...    | Response data               |

**On error:**

| Type   | Description                                                                                               |
|--------|-----------------------------------------------------------------------------------------------------------|
| Uint32 | Error code, see [errors.py](https://github.com/Kinnay/NintendoClients/blob/master/nintendo/nex/errors.py) |
| Uint32 | Call id                                                                                                   |

# "Verbose" variation

## Request Format

| Type                                            | Description                                                                       |
|-------------------------------------------------|-----------------------------------------------------------------------------------|
| Uint32                                          | Size, excluding this field                                                        |
| [String](/docs/nex/types#string)                | Protocol name                                                                     |
| Bool                                            | "Is request" (true)                                                               |
| Uint32                                          | Call id, an incrementing number used to match a response to the right request     |
| [String](/docs/nex/types#string)                | Method name, with the protocol name as a prefix                                   |
| [ClassVersionContainer](#classversioncontainer) | Information about the [Structures](/docs/nex/types#structure) used in the request |
| ...                                             | Method parameters                                                                 |

## Response Format

| Type                             | Description                |
|----------------------------------|----------------------------|
| Uint32                           | Size, excluding this field |
| [String](/docs/nex/types#string) | Protocol name              |
| Bool                             | "Is request" (false)       |
| Bool                             | "Is success"               |

**On success:**

| Type                             | Description                                     |
|----------------------------------|-------------------------------------------------|
| Uint32                           | Call id                                         |
| [String](/docs/nex/types#string) | Method name, with the protocol name as a prefix |
| ...                              | Response data                                   |

In all known cases, the method name string in responses ends with a `*`. Looking at the response handlers for some games, this seems to be related to a "return value pointer", though it is not entirely clear at this time

**On error:**

| Type   | Description                                                                                               |
|--------|-----------------------------------------------------------------------------------------------------------|
| Uint32 | Error code, see [errors.py](https://github.com/Kinnay/NintendoClients/blob/master/nintendo/nex/errors.py) |
| Uint32 | Call id                                                                                                   |

## ClassVersionContainer

The `ClassVersionContainer` is a [List](/docs/nex/types#list) of [ClassVersion](#classversion) types. Unlike in the "packed" variations, where structure version information is optionally stored as a header on the structure, a [ClassVersion](#classversion) defines this version only once before the rest of the message is parsed. Presumably this is done to not re-encode the same version information multiple times, though the cases where this is beneficial are few. Every *request* in the "verbose" variation begins with a `ClassVersionContainer`, even if it has 0 elements. Responses do not use a `ClassVersionContainer`, nor do they encode the structure header

## ClassVersion

| Type                             | Description       |
|----------------------------------|-------------------|
| [String](/docs/nex/types#string) | Structure name    |
| Uint16                           | Structure version |

# Remarks
The following services never send an RMC response, even if an error occurred:

* [Notification Protocol](/docs/nex/protocols/notifications)
* [Nintendo Notification Event Protocol](/docs/nex/protocols/nintendo-notifications)
* [Message Delivery Protocol](/docs/nex/protocols/message-delivery)

Other services always send an RMC response.
