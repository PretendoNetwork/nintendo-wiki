---
layout: post
toc: true
title: NAT Traversal
---

Up to Pia version 5.10, the protocol port was used to determine the message type.

| Protocol Port | Description                     |
|---------------|---------------------------------|
| 1             | [Probe request](#probe-request) |
| 2             | [Probe reply](#probe-reply)     |
| 3             | [Dummy packet](#dummy-packet)   |

In Pia version 5.11 and later, all packets are sent through port 0 and always contain the [NatProbeData](#natprobedata) structure.

The following version numbers are advertised during the [connection request](/docs/pia/protocols/station):

| Pia version | Version |
|-------------|---------|
| 5.19 - 5.43 | 0       |

## Probe request

| Offset | Size | Description                   |
|--------|------|-------------------------------|
| 0x0    | 16   | [NatProbeData](#natprobedata) |

## Probe reply

| Offset | Size | Description                   |
|--------|------|-------------------------------|
| 0x0    | 16   | [NatProbeData](#natprobedata) |

## Dummy packet

| Offset | Size | Description |
|--------|------|-------------|
| 0x0    | 5    | "Dummy"     |

## NatProbeData

| Offset | Size | Description                                                             |
|--------|------|-------------------------------------------------------------------------|
| 0x0    | 4    | [Service variable id](/docs/pia/terminology#service-variable-id)        |
| 0x4    | 1    | Probe type (0=request 1=reply, 255=dummy)                               |
| 0x5    | 3    | Padding                                                                 |
| 0x8    | 8    | System time (OSGetSystemTime on Wii U, nn::os::GetSystemTick on Switch) |

*5.11 - 5.43:*

| Offset | Size | Description                                      |
|--------|------|--------------------------------------------------|
| 0x10   | 4    | [Variable id](/docs/pia/terminology#variable-id) |