---
layout: post
toc: true
title: PRUDP Protocol
---

PRUDP is a transport layer protocol on top of UDP whose aim is to reliably and securely send UDP packets. There are two versions of this protocol ([V0](#v0-format) and [V1](#v1-format)), but these are pretty similar. The primary difference lies in the encoding of the packets. All values are encoded in little endian byte order.

On the Nintendo Switch, NEX uses a WebSocket connection instead of UDP and the '[Lite](#lite-format)'-encoding is used.

* [V0 Format](#v0-format)
* [V1 Format](#v1-format)
* [Lite Format](#lite-format)
* [Protocol Description](#protocol-description)

## V0 Format
This format is only used by the friends server and some 3DS games.

| Offset | Size   | Description                           |
|--------|--------|---------------------------------------|
| 0x0    | 1      | [Source](#virtual-ports)              |
| 0x1    | 1      | [Destination](#virtual-ports)         |
| 0x2    | 2      | [Type and flags](#type-and-flags)     |
| 0x4    | 1      | [Session id](#session-id)             |
| 0x5    | 4      | [Packet signature](#packet-signature) |
| 0x9    | 2      | [Sequence id](#sequence-id)           |
| 0xB    |        | Packet-specific data                  |
|        |        | Payload                               |
|        | 1 or 4 | [Checksum](#checksum)                 |

Packet-specific data:

| Only present if        | Size | Description                                   |
|------------------------|------|-----------------------------------------------|
| Type is SYN or CONNECT | 4    | [Connection signature](#connection-signature) |
| Type is DATA           | 1    | [Fragment id](#fragment-id)                   |
| Flags & FLAG_HAS_SIZE  | 2    | Payload size                                  |

### Packet signature
**Friends server:**
* In DATA packets with an empty payload the packet signature is always set to 0x12345678.
* In all other DATA packets the signature is the first 4 bytes of the HMAC-MD5 of the encrypted payload, with the key being the MD5 hash of the [access key](#sandbox-access-key).
* In all other packets the signature is the connection signature received during connection establishment.

**Games:**

In DATA and DISCONNECT packets the packet signature is the first 4 bytes of the HMAC-MD5 of the following data, with the key being the MD5 hash of the [access key](#sandbox-access-key):

| Size        | Description                                                                           |
|-------------|---------------------------------------------------------------------------------------|
| 0, 16 or 32 | [Session key](#secure-server-connection) (or nothing in an authentication connection) |
| 2           | [Sequence id](#sequence-id)                                                           |
| 1           | [Fragment id](#fragment-id)                                                           |
|             | Encrypted payload                                                                     |

In all other packets the signature is the connection signature that has been received while the connection was made.

**Quazal Rendez-Vous:**

In all Rendez-Vous packets the signature is the connection signature that has been received while the connection was made.

### Checksum
The checksum is calculated over the whole packet (both header and encrypted payload). A checksum can be either 1 byte or 4 bytes long. By default checksums are 1 byte long, but games have the option to enable the 4 byte checksum instead. All NEX titles use 1 byte checksums, though Rendez-Vous titles may be seen with either. The following algorithms are used, where `ACCESS_KEY` is the server [access key](#sandbox-access-key) bytes:

#### 1 Byte
```python
ACCESS_KEY = "12345678".encode() # Example dummy key

def calc_checksum(data):
  """
  Split the data into a list of little endian uint32's
  If there is not enough data for a uint32, discard it
  EX: b"abcdefghijk" (0x6162636465666768696A6B)
  becomes (1684234849, 1751606885), aka (0x64636261, 0x68676665)
  """
  words = struct.unpack_from("<%iI" %(len(data) // 4), data)
  temp = sum(words) & 0xFFFFFFFF # Add the values and truncate to a uint32
  main = struct.pack("I", temp) # Pack the sum of the main data back into bytes
  remaining = data[len(data) & ~3:] # The data left over from the above

  checksum = sum(ACCESS_KEY) # Checksum base
  checksum += sum(remaining) # Add the remaining data first
  checksum += sum(main) # Add the main data last
  return checksum & 0xFF # Truncate to a uint8
```

#### 4 Byte
```python
ACCESS_KEY = "12345678".encode() # Example dummy key

def calc_checksum(checksum, data):
  data += b"\0" * (4 - len(data) % 4) # Pad data to nearest multiple of 4

  """
  Split the data into a list of little endian uint32's
  EX: b"abcdefgh" (0x6162636465666768)
  becomes (1684234849, 1751606885), aka (0x64636261, 0x68676665)
  """
  words = struct.unpack("<%iI" %(len(data) // 4), data)
  checksum = sum(ACCESS_KEY) & 0xFF # Checksum base, truncated to uint8
  checksum += sum(words) # Add the packet data sum

  return checksum & 0xFFFFFFFF # Truncate to a uint32
```

## V1 Format
This format is used by all Wii U games and apps except for friends services, and some 3DS games.

| Size | Description                                   |
|------|-----------------------------------------------|
| 2    | Magic number: 0xEA 0xD0                       |
| 12   | Packet header                                 |
| 16   | [Packet signature](#packet-signature-1)       |
|      | [Packet-specific data](#packet-specific-data) |
|      | Payload                                       |

### Packet header

| Offset | Size | Description                       |
|--------|------|-----------------------------------|
| 0x0    | 1    | PRUDP version (always 1)          |
| 0x1    | 1    | Length of packet-specific data    |
| 0x2    | 2    | Payload size                      |
| 0x4    | 1    | [Source](#virtual-ports)          |
| 0x5    | 1    | [Destination](#virtual-ports)     |
| 0x6    | 2    | [Type and flags](#type-and-flags) |
| 0x8    | 1    | [Session id](#session-id)         |
| 0x9    | 1    | [Substream id](#substreams)       |
| 0xA    | 2    | [Sequence id](#sequence-id)       |

### Packet signature
The packet signature is the HMAC-MD5 of the following data, with the key being the MD5 hash of the [access key](#sandbox-access-key):

| Size        | Description                                                                                             |
|-------------|---------------------------------------------------------------------------------------------------------|
| 8           | Bytes 0x4 - 0xC of the packet header                                                                    |
| 0, 16 or 32 | The [session key](#secure-server-connection) (not present in a connection to the authentication server) |
| 4           | Sum of all [access key](#sandbox-access-key) bytes (little endian)                                      |
| 0 or 16     | Connection signature, or nothing if it hasn't been received yet                                         |
|             | Packet-specific data                                                                                    |
|             | Encrypted payload                                                                                       |

### Packet-specific data
See [optional data](#optional-data).

| Option id | Only present if        |
|-----------|------------------------|
| 0         | Type is SYN or CONNECT |
| 1         | Type is SYN or CONNECT |
| 2         | Type is DATA           |
| 3         | Type is CONNECT        |
| 4         | Type is SYN or CONNECT |

## Lite Format
This format is used by Nintendo Switch games.

| Offset | Size | Description                                                |
|--------|------|------------------------------------------------------------|
| 0x0    | 1    | Magic number: 0x80                                         |
| 0x1    | 1    | Length of packet-specific data                             |
| 0x2    | 2    | Payload size                                               |
| 0x4    | 1    | 0xXY (X = source stream type, Y = destination stream type) |
| 0x5    | 1    | [Source port](#virtual-ports)                              |
| 0x6    | 1    | [Destination port](#virtual-ports)                         |
| 0x7    | 1    | [Fragment id](#fragment-id)                                |
| 0x8    | 2    | [Type and flags](#type-and-flags)                          |
| 0xA    | 2    | [Sequence id](#sequence-id)                                |
| 0xC    |      | Packet-specific data                                       |
|        |      | Payload                                                    |

Packet-specific data (see [optional data](#optional-data)):

| Option id | Only present if                          |
|-----------|------------------------------------------|
| 0         | Type is SYN or CONNECT                   |
| 1         | Type is SYN and Flags & FLAG_ACK         |
| 0x80      | Type is CONNECT and not Flags & FLAG_ACK |

## Protocol Description
This section explains the concepts used by PRUDP and provides a more detailed description of the fields.

### Basic operation
When a client connects to a server, it sends a SYN packet. As soon as this packet is acknowledged by the server, it sends a CONNECT packet. When this packet has been acknowledged too, a connection has been made and the client and server can start sending DATA packets. If the client wants to close the connection, it sends a DISCONNECT packet. This packet is acknowledged three times by the server, presumably to ensure the client receives the ACK.

The following techniques are used to achieve reliability:
* A packet that has FLAG_NEED_ACK set must be acknowledged by the receiver. If the sender doesn't receive an acknowledgement after a certain amount of time it will resend the packet.
* A [sequence id](#sequence-id) is sent along with a packet, so the receiver can reorder packets if necessary.
* To keep the connection alive, both client and server may send PING packets to each other after a certain amount of time has passed.

### Encryption
**V0 and V1**: All payloads are encrypted using RC4, with separate streams for client-to-server packets and server-to-client packets. The connection to the authentication server is encrypted using a default key that's always the same: `CD&ML`. The connection to the secure server is encrypted using the session key from the [Kerberos ticket](/docs/nex/kerberos). On Quazal Rendez-Vous, the streams are reset for each payload.

**Lite**: Since the underlying connection is SSL-encrypted anyway, no encryption is used by PRUDP.

#### Substreams and unreliable packets

It would be a bad idea to encrypt all reliable substreams with the same key, because that would make it easy to break the encryption. PRUDP encrypts the first reliable substream with the session key. A new key is generated for all other reliable substreams by modifying the key of the previous substream with the following algorithm:

```python
def modify_key(key):
  # Only the first half of the key is modified
  add = len(key) // 2 + 1
  for i in range(len(key) // 2):
    key[i] = (key[i] + add - i) & 0xFF
```

Unreliable packets also have another issue: it's not possible to use a single RC4 stream to encrypt them, because the decryption would fail if the packets arrive in the wrong order. To solve this, a unique RC4 stream is used for each unreliable data packet. The key is generated as follows:

```python
def make_unreliable_key(packet, session_key):
  # Generate a new key from the session key
  part1 = combine_keys(session_key, bytes.fromhex("18d8233437e4e3fe"))
  part2 = combine_keys(session_key, bytes.fromhex("233e600123cdab80"))
  base_key = part1 + part2

  # Modify the key such that no two packets use the same key
  key = list(base_key)
  key[0] = (key[0] + packet.sequence_id) & 0xFF
  key[1] = (key[1] + (packet.sequence_id >> 8)) & 0xFF
  key[31] = (key[31] + packet.session_id) & 0xFF
  return bytes(key)

def combine_keys(key1, key2):
  return hashlib.md5(key1 + key2).digest()
```

### Sandbox access key
Every game server has a unique sandbox access key. This is used to calculate the [packet signature](#packet-signature) and [packet checksum](#checksum). All NEX titles use access keys which are 8 lowercase hex characters, with the sole exception of the Friends server whose access key is `ridfebb9`. This limitation is only imposed by NEX, however. Rendez-Vous clients do not limit themselves to 8 lowercase hex characters, and may also use uppercase and non-hex characters. It seems that the access key may also be allowed to be up to 128 characters long, though no games are currently known to use anything larger than 8.

The only way to find the access key of a server is by checking the client. In most cases this involves disassembling the game, however some games have been known to store their access keys in external files. For NEX titles, tools such as [this](https://github.com/PretendoNetwork/access-key-extractor) exist to automate the extraction of these keys. A key may often times also be brute forced, as many valid keys exist for all servers due to their small size.

A partial list of game servers and their access keys can be found [here](/docs/game-servers).

### Secure server connection
As explained on the [Game Server Overview](/docs/nex) page, every game server consists of an authentication server and a secure server. If a client wants to connect to the secure server it must first request a [ticket](/docs/nex/kerberos) from the authentication server. The ticket contains the session key that's used in the secure server connection, among other information.

The payload of the CONNECT packet should be empty while connecting to the authentication server. While connecting to the secure server, the CONNECT packet should have the following payload:

#### Connection request

| Type     | Description                                           |
|----------|-------------------------------------------------------|
| [Buffer] | Kerberos ticket data                                  |
| [Buffer] | [Kerberos-encrypted](/docs/nex/kerberos) request data |

Request data (encrypted with session key):

| Type   | Description          |
|--------|----------------------|
| [PID]  | User pid             |
| Uint32 | Connection id        |
| Uint32 | Response check value |

#### Connection response
The CONNECT acknowledgement packet contains a [Buffer] with the following data:

| Type   | Description              |
|--------|--------------------------|
| Uint32 | Response check value + 1 |

### Virtual ports
When multiple PRUDP connections are made to the same address, NEX doesn't create a new socket for each connection. Instead, it uses a single socket to create multiple PRUDP connections. To distinguish between connections, each packet contains a source and destination "virtual port". A "virtual port" is made of 2 parts, a stream type and stream ID. The client and server stream types will always match, though their IDs may not. How these are encoded depends on the protocol version. Each stream may be configured differently. Aspects of the connection such as retransmission rates, the encryption and compression algorithms, etc, are all controlled by these streams.

**V0 and V1**: The virtual port uses a single byte. The four most significant bits contain the stream type. The four least significant bits contain the stream ID. The client stream ID is the highest unused stream ID &le; `0xF`.

**Lite**: The source and destination stream IDs are now encoded using 2 separate bytes. The stream type is encoded in a 3rd byte. The four most significant bits contain the source type. The four least significant bits contain the destination type. The client stream ID is the highest unused stream ID &le; `0x1F`.

**Server stream ID (3DS/Wii U)**: The authentication and secure server each have their own UDP server. The server stream ID is always 1.

**Server stream ID (Switch)**: A single websocket server handles both authentication and secure connections. The authentication server has server stream ID 1, the secure server has server stream ID 2.

| Stream type | Name             | Details                                                              |
|-------------|------------------|----------------------------------------------------------------------|
| 1           | DO               | Unknown purpose                                                      |
| 2           | RV               | Unknown purpose                                                      |
| 3           | OldRVSec         | Original "secure" stream type. Used by NEX 1 and QRV clients         |
| 4           | SBMGMT           | Unknown purpose                                                      |
| 5           | NAT              | Unknown purpose                                                      |
| 6           | SessionDiscovery | Unknown purpose                                                      |
| 7           | NATEcho          | Unknown purpose                                                      |
| 8           | Routing          | Unknown purpose. Not seen in non-NEX titles                          |
| 9           | Game             | Unknown purpose. Not seen in non-NEX titles                          |
| 10          | RVSecure         | New "secure" stream type. Used by NEX 2+. Not seen in non-NEX titles |
| 11          | Relay            | Unknown purpose. Not seen in non-NEX titles                          |

### Type and flags
This field takes up two bytes in the packet header and is encoded like this: `(flags << 4) | type`.

Even though PRUDP also supports unreliable data packets, these are never used by NEX. SYN, PING and acknowledgement packets are always sent without FLAG_RELIABLE.

DISCONNECT packets may be reliable (graceful disconnect) or unreliable (forced disconnect).

| Value | Type       |
|-------|------------|
| 0     | SYN        |
| 1     | CONNECT    |
| 2     | DATA       |
| 3     | DISCONNECT |
| 4     | PING       |
| 5     | USER       |

| Mask  | Description                                                                                                                             |
|-------|-----------------------------------------------------------------------------------------------------------------------------------------|
| 0x001 | FLAG_ACK: This is an acknowledgement packet                                                                                             |
| 0x002 | FLAG_RELIABLE: This packet uses reliability features such as packet reordering.                                                         |
| 0x004 | FLAG_NEED_ACK: This packet must be acknowledged                                                                                         |
| 0x008 | FLAG_HAS_SIZE: This packet includes its payload size                                                                                    |
| 0x200 | FLAG_MULTI_ACK: This packet acknowledges multiples packets at once. The payload contains information on which packets are acknowledged. |

<details><summary>The original Quazal Rendez-Vous library encodes this field differently.</summary>

* This field only takes up one byte in the header: `(flags << 3) | type`. Note that only 5 bits are left for the flags, but PRUDP V0 does not support aggregate acknowledgement anyway.
</details>

### Aggregate acknowledgement
To acknowledge multiple packets at once, send an unencrypted unreliable DATA packet with FLAG_MULTI_ACK.

[V0](#v0-format) does not support aggregate acknowledgement. Whether [V1](#v1-format) supports aggregate acknowledgement and which version is used depends on its [supported functions](#supported-functions). The [Lite](#lite-format) format always uses the new version.

#### Old version
All packets up to the sequence id of the aggregate ack packet are acknowledged. In addition, the payload may specify additional sequence ids to be acknowledged.

| Offset | Size | Description   |
|--------|------|---------------|
| 0x0    | 2    | Sequence id 1 |
| 0x2    | 2    | Sequence id 2 |
| ...    | ...  | ...           |

#### New version
The sequence id of the aggregate ack packet is always 0.

| Offset | Size | Description                                              |
|--------|------|----------------------------------------------------------|
| 0x0    | 1    | [Substream id](#substreams)                              |
| 0x1    | 1    | Number of additional sequence ids                        |
| 0x2    | 2    | Sequence id. All packets up to this id are acknowledged. |
| 0x4    | 2    | Additional sequence id 1                                 |
| 0x6    | 2    | Additional sequence id 2                                 |
| ...    | ...  | ...                                                      |

### Session id
This is a random value generated at the start of each session. The server's session id does not have to be the same as the client's session id.

### Sequence id
This is an incrementing value used to ensure that packets arrive in correct order. The sequence id of client-to-server packets is independent from the sequence id of server-to-client packets.

In acknowledgement packets, the sequence id is set to the id of the packet that is acknowledged.

Every [reliable substream](#substreams) has its own stream of sequence ids. Unreliable ping and data packets both have their own stream of sequence ids as well.

Normally, the sequence id starts at 1. However, the initial sequence id of unreliable data packets is a random value generated during the connection handshake (see [option 3](#optional-data)).

### Fragment id
Big data packets are split into smaller ones. The last fragment always has fragment id 0. Other fragments have an incrementing fragment id starting at 1.

For example, if a packet is split into four fragments, they will have the following fragment ids:

| Fragment | Fragment id |
|----------|-------------|
| First    | 1           |
| Second   | 2           |
| Third    | 3           |
| Fourth   | 0           |

#### Fragment size
The fragment size depends on the implementation. It is generally set to the MTU minus the packet overhead.

In old NEX versions, which only support PRUDP v0, the MTU is hardcoded to 1000 and the maximum payload size seems to be 962 bytes.

Later, the MTU was increased to 1364, and the maximum payload size is seems to be 1300 bytes, unless PRUDP v0 is used, in which case it's 1264 bytes.

### Connection signature
If present, the connection signature is the first part of a HMAC-MD5 based on the perceived ip and port of the other end point. Neither server nor client can verify this signature.

The server sends its connection signature in its response to the client's SYN packet. The client sends its connection signature in the CONNECT packet. Other SYN/CONNECT packets have this field set to 0.

### Lite signature
Unlike the connection signature, this signature is actually verified by the server. It's the HMAC-MD5 of the following data, with the key being the MD5 hash of the [access key](#sandbox-access-key).

| Offset | Size | Description                               |
|--------|------|-------------------------------------------|
| 0x0    | 16   | MD5 of [access key](#sandbox-access-key)  |
| 0x10   | 16   | Connection signature received from server |

### Supported Functions
The least significant byte of this field describes the minor version of the protocol. The other bytes seem to be unused. When the server receives a SYN packet from the client it chooses the highest version number supported by both the server and the client and sends that version number back to the client in the SYN/ACK packet. The following table lists the changes that have been made between minor versions:

| Minor Version | Description                                                                                      |
|---------------|--------------------------------------------------------------------------------------------------|
| 0             | Base version, no aggregate ack                                                                   |
| 1             | Aggregate ack (old version) is now supported                                                     |
| 2             | Aggregate ack (new version) is now supported and the new signature method is used                |
| 3             | The new RVDDL version is used: [structures](/docs/nex/types#structure) now have a version header |
| 4             | Unknown difference                                                                               |
| 5             | Unknown difference                                                                               |
| 6             | Unknown difference                                                                               |

### Optional data
Starting with PRUDP V1, packet-specific data is encoded like this:

| Offset | Size | Description |
|--------|------|-------------|
| 0x0    | 1    | Option id   |
| 0x1    | 1    | Value size  |
| 0x2    |      | Value       |

| Option id | Size | Description                                                     |
|-----------|------|-----------------------------------------------------------------|
| 0         | 4    | [Supported functions](#supported-functions)                     |
| 1         | 16   | [Connection signature](#connection-signature)                   |
| 2         | 1    | [Fragment id](#fragment-id)                                     |
| 3         | 2    | Initial [sequence id](#sequence-id) for unreliable data packets |
| 4         | 1    | Maximum [substream id](#substreams)                             |
| 0x80      | 16   | [Lite signature](#lite-signature)                               |

### Compression
<details><summary>NEX has disabled compression, so you won't see any compressed packets in Nintendo games.</summary><br>

If compression is enabled, packets are compressed with zlib before they are encrypted. The compression ratio is prepended to the compressed payload as an additional byte. This is used to determine how much space is needed to decompress the payload. The compression ratio is the size of the uncompressed payload divided by the size of the compressed payload, rounded upwards. If the compression ratio is 0 the payload is not compressed.
</details>

### Substreams
[V1](#v1-format) allows the connection to be divided into multiple reliable substreams. The maximum number of substreams is decided during the connection handshake (with [option 4](#optional-data)). Every substream has its own [RC4 streams](#encryption) and its own incrementing [sequence ids](#sequence-id). Substreams only cover reliable packets. Unreliable packets do not belong to a substream.

NEX never uses more than one substream, so the substream id is always 0

[Buffer]: NEX-Common-Types#buffer
[PID]: NEX-Common-Types#pid
