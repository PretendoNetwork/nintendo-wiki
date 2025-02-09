---
layout: post
toc: true
title: NEX common types
---

## String

| Type   | Description                        |
|--------|------------------------------------|
| Uint16 | Length (including null terminator) |
| Chars  | Null terminated UTF-8 string       |

## Buffer

| Type   | Description |
|--------|-------------|
| Uint32 | Length      |
| Bytes  | Data        |

## qBuffer

| Type   | Description |
|--------|-------------|
| Uint16 | Length      |
| Bytes  | Data        |

## List

| Type   | Description       |
|--------|-------------------|
| Uint32 | Number of entries |
|        | Entries           |

## Map
A map is a [list](#list) of (key, value) pairs.

## PID
Every user is given a unique id called principal id.

| Platform    | Type   |
|-------------|--------|
| 3DS / Wii U | Uint32 |
| Switch      | Uint64 |

## Result

| Type   | Description |
|--------|-------------|
| Uint32 | Result code |

If the most significant bit is set an error occurred. Otherwise, the result indicates success. A list of error codes can be found in [nintendo/nex/errors.py](https://github.com/Kinnay/NintendoClients/blob/master/nintendo/nex/errors.py).

## DateTime

| Type   | Description |
|--------|-------------|
| Uint64 | Value       |

This is not a normal time stamp. Instead, it consists of a bunch of bit fields:

| Bits    | Description |
|---------|-------------|
| 63 - 26 | Year        |
| 25 - 22 | Month       |
| 21 - 17 | Day         |
| 16 - 12 | Hour        |
| 11 - 6  | Minute      |
| 5 - 0   | Second      |

## StationURL

| Type     | Description |
|----------|-------------|
| [String] | Station URL |

A station url contains the address and port of a server or client, along with a few parameters. The order of the fields is arbitrary. Here's an example station url: `prudps:/stream=10;sid=1;CID=1;type=2;address=34.210.222.104;port=60101;PID=2`

| Field             | Description                                         |
|-------------------|-----------------------------------------------------|
| &lt;scheme&gt;    | udp, prudp or prudps                                |
| address           | Address                                             |
| port              | Port                                                |
| stream            | Stream type (see [here](/docs/prudp#virtual-ports)) |
| sid               | Stream id ([PRUDP port](/docs/prudp#virtual-ports)) |
| CID               | Connection id                                       |
| PID               | Principal id                                        |
| type              | [NAT type flags](#nat-type-flags)                   |
| RVCID             | Rendez-vous connection id                           |
| natm              | [NAT mapping](#nat-mapping)                         |
| natf              | [NAT filtering](#nat-filtering)                     |
| upnp              | UPnP support (0 or 1)                               |
| pmp               | PMP support (0 or 1)                                |
| probeinit         | Probe request initiation                            |
| PRID              | Probe request id                                    |
| fastproberesponse | Fast probe response                                 |
| NodeID            | Node id                                             |

The following fields were added on Nintendo Switch:

| Field | Description                             |
|-------|-----------------------------------------|
| Uri   | Uri                                     |
| R     | Use relay server (0 or 1)               |
| Rsa   | Relay server address                    |
| Rsp   | Relay server port                       |
| Ra    | Relay address                           |
| Rp    | Relay port                              |
| Tpt   | Transport protocol type                 |
| Pl    | Platform type                           |
| Ntrpa | NAT traversal requester private address |
| Ntrpp | NAT traversal requester private port    |

### NAT Type Flags

| Flag | Description   |
|------|---------------|
| 1    | Is behind NAT |
| 2    | Is public     |

### NAT Mapping

| Value | Description                  |
|-------|------------------------------|
| 0     | Unknown                      |
| 1     | Endpoint independent mapping |
| 2     | Endpoint dependent mapping   |

### NAT Filtering

| Value | Description                |
|-------|----------------------------|
| 0     | Unknown                    |
| 1     | Port independent filtering |
| 2     | Port dependent filtering   |

## Variant
A variant consists of an uint8 indicating the type followed by its value.

| Type id | Type       |
|---------|------------|
| 0       | None       |
| 1       | Sint64     |
| 2       | Double     |
| 3       | Bool       |
| 4       | [String]   |
| 5       | [DateTime] |
| 6       | Uint64     |

## Structure
When using the ["verbose" RMC variation](/docs/rmc) the structure version information is stored in the [ClassVersionContainer](/docs/rmc#classversioncontainer). When using the ["packed" RMC variation](/docs/rmc), and the client is using NEX v3.5.0 or above, the structures version information is encoded as a header before the structures contents. Before NEX v3.5.0, the structures contents are encoded directly into the stream without a version header

### Structure header

| Type   | Description    |
|--------|----------------|
| Uint8  | Version        |
| Uint32 | Content length |
|        | Content        |

Nintendo often seems to be changing a structure without updating its version number though.

### Structure Inheritance

A structure may inherit another structure. The child is stored right after the parent, and gets its own version header.

Example: If there are 2 structures, `StructureA` and `StructureB`, with `StructureB` inheriting from `StructureA`, the data would be stored as follows:

* `StructureA` Structure Header (if any)
* `StructureA` Structure data  (if any)
* `StructureB` Structure Header (if any)
* `StructureB` Structure data  (if any)

## Data ([Structure])
This struct does not have any fields.

## AnyDataHolder
This class can hold any object derived from a given base class (usually [nn::nex::Data](#data-structure)). Some meta data is sent along with it, so the other side can properly identify and decode the object.

| Type     | Description                                     |
|----------|-------------------------------------------------|
| [String] | Type name                                       |
| Uint32   | Length of data, including the next length field |
| Uint32   | Length of data                                  |
|          | Object data                                     |

## RVConnectionData ([Structure])
Nintendo does not use any special protocols.

| Type                       | Name                  | Description                        |
|----------------------------|-----------------------|------------------------------------|
| [StationURL](#station-url) | m_urlRegularProtocols | Server address (regular protocols) |
| [List](#list)&lt;byte&gt;  | m_lstSpecialProtocols | Special protocols                  |
| [StationURL](#station-url) | m_urlSpecialProtocols | Server address (special protocols) |

Revision 1:

| Type                   | Name             | Description |
|------------------------|------------------|-------------|
| [DateTime](#date-time) | m_currentUTCTime | Time        |

Examples:

| Game    | Secure server                                                                  |
|---------|--------------------------------------------------------------------------------|
| Friends | `prudps:/stream=10;type=2;PID=2;port=60091;address=35.162.205.114;sid=1;CID=1` |
| DKC:TF  | `prudps:/port=43221;CID=1;address=34.208.166.202;PID=2;stream=10;type=2;sid=1` |
| MK8     | `prudps:/sid=1;port=59201;address=52.10.188.163;PID=2;stream=10;type=2;CID=1`  |

## ResultRange ([Structure])
Some methods query a large set of objects. These methods normally take a ResultRange parameter that limits the number of objects that are returned.

| Type   | Name       | Description |
|--------|------------|-------------|
| Uint32 | m_uiOffset | Offset      |
| Uint32 | m_uiSize   | Length      |

## qUUID
A `qUUID` is a set of 16 bytes making up a UUID. These are usually UUIDv4 variant 8, but this is not required. The data is split into 7 little endian fields, the first 4 being the first 4 sections of the UUID with the 5th section being made of the remaining 3 fields. To convert to a UUID string, swap the endianness of each field back to big endian

| Type      | Description      |
|-----------|------------------|
| Bytes (4) | Section 1        |
| Bytes (2) | Section 2        |
| Bytes (2) | Section 3        |
| Bytes (2) | Section 4        |
| Bytes (2) | Section 5 part 1 |
| Bytes (2) | Section 5 part 2 |
| Bytes (2) | Section 5 part 3 |

Example:

```python
uuid = bytes.fromhex("ae5e3e66297d8c4aa98420499ad98c3e")

section1 = uuid[0:4][::-1].hex()
section2 = uuid[4:6][::-1].hex()
section3 = uuid[6:8][::-1].hex()
section4 = uuid[8:10][::-1].hex()
section5_1 = uuid[10:12][::-1].hex()
section5_2 = uuid[12:14][::-1].hex()
section5_3 = uuid[14:16][::-1].hex()

expected = "663e5eae-7d29-4a8c-84a9-4920d99a3e8c"

"""
Prints:

663e5eae-7d29-4a8c-84a9-4920d99a3e8c
663e5eae-7d29-4a8c-84a9-4920d99a3e8c
"""

print(expected)
print("%s-%s-%s-%s-%s%s%s" % (section1, section2, section3, section4, section5_1, section5_2, section5_3))
```

[String]: #string
[Structure]: #structure
[DateTime]: #date-time
