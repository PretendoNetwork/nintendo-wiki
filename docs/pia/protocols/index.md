---
layout: post
toc: true
title: PIA Protocols
---

This page lists all protocols that are part of the [Pia protocol](/docs/pia/protocol).

All games that use Pia version 5.6 or newer use the new protocol ids. Older games use the old protocol ids.

Also, the clone protocol used to be single protocol, but was split into several protocols around Pia version 5.14. Before the split, the id of the clone protocol was 0x74. After the split, the id of the main clone protocol became 0x73, and 0x74 was assigned to the atomic clone protocol.

| Old    | New         | Protocol                                                        |
|--------|-------------|-----------------------------------------------------------------|
| 0x0080 |             | Relay Protocol                                                  |
| 0x00C0 | 0x08        | Keep Alive Protocol                                             |
| 0x0100 | 0x14        | [Station Protocol](/docs/pia/protocols/station)                 |
| 0x0200 | 0x18        | [Mesh Protocol](/docs/pia/protocols/mesh)                       |
| 0x0210 | 0x1C        | [Sync Clock Protocol](/docs/pia/protocols/sync-clock)           |
| 0x0300 | 0x24        | [Local Protocol](/docs/pia/protocols/local)                     |
|        | 0x28        | Direct Protocol                                                 |
|        | 0x2C        | Net Protocol                                                    |
|        | 0x30        | Turn Protocol                                                   |
| 0x0400 | 0x34        | [NAT Traversal Protocol](/docs/pia/protocols/nat-traversal)     |
| 0x0410 |             | Gateway Protocol                                                |
| 0x4400 | 0x44        | [LAN Protocol](/docs/pia/lan)                                   |
| 0x0500 | 0x54        | Bandwidth Checker Protocol                                      |
| 0x0600 | 0x58        | [RTT Protocol](/docs/pia/protocols/rtt)                         |
| 0x1800 |             | Sync Protocol (old)                                             |
| 0x1810 | 0x65        | [Sync Protocol](/docs/pia/protocols/sync)                       |
| 0x2000 | 0x68        | [Unreliable Protocol](/docs/pia/protocols/unreliable)           |
| 0x2100 | 0x6C        | Round Robin Unreliable Protocol                                 |
| 0x2400 | 0x73 / 0x74 | [Clone Protocol](/docs/pia/protocols/clone)                     |
|        | 0x74        | Clone Protocol (atomic)                                         |
|        | 0x75        | Clone Protocol (event)                                          |
|        | 0x76        | Clone Protocol (broadcast event)                                |
|        | 0x77        | Clone Protocol (clock)                                          |
| 0x2800 | 0x78 / 0x7B | Voice Protocol                                                  |
| 0x3000 | 0x7C        | [Reliable Protocol](/docs/pia/protocols/reliable)               |
|        | 0x80        | Broadcast Reliable Protocol                                     |
|        | 0x81        | Stream Broadcast Reliable Protocol                              |
| 0x7000 | 0x84        | Reliable Broadcast Protocol                                     |
| 0x7200 | 0x94        | [Session Protocol](/docs/pia/protocols/session)                 |
|        | 0x98        | Lobby Protocol                                                  |
|        | 0xA0        | NAT Traversal Result Protocol                                   |
| 0x8000 | 0xA4        | [Monitoring Data Protocol](/docs/pia/protocols/monitoring-data) |
| 0x8200 | 0xA8        | Relay Service Protocol                                          |
|        | 0xAC        | WAN NAT Protocol                                                |
|        | 0xB0        | Reckoning 1D                                                    |
|        | 0xB4        | Reckoning 3D                                                    |
