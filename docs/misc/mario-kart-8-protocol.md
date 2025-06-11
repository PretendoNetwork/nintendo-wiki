---
layout: post
toc: true
title: Mario Kart 8 Protocol
---

Mario Kart 8 uses the [ENL framework](/docs/pia/enl).

| Record type | Description                                |
|-------------|--------------------------------------------|
| 0           | [Menu](#menu-record)                       |
| 1           | [Player info](#player-info-record)         |
| 2           | [All player info](#all-player-info-record) |
| 3           | Race                                       |
| 4           | Drive                                      |
| 6           | Item event                                 |
| 7           | Battle event                               |
| 9           | [Flags](#flags-record)                     |
| 10          | Chat                                       |

## Menu Record
This is record type 0.

| Offset | Size  | Description                      |
|--------|-------|----------------------------------|
| 0x0    | 12*12 | Player [votes](#vote)            |
| 0x90   | 12    | [Vote](#vote) chosen by roulette |
| 0x9C   | ---   | End of record                    |

## Player Info Record
This is record type 1.

| Offset | Size | Description                   |
|--------|------|-------------------------------|
| 0x0    | 8    | Unknown                       |
| 0x8    | 256  | [Player info](#sysplayerinfo) |
| 0x108  | 4    | Unknown                       |
| 0x10C  | ---  | End of record                 |

## All Player Info Record
This is record type 2.

| Offset | Size  | Description                                        |
|--------|-------|----------------------------------------------------|
| 0x0    | 8*12  | Unknown                                            |
| 0x60   | 4*4   | [Track options](/docs/misc/mario-kart-8-track-ids) |
| 0x70   | 4     | Unknown                                            |
| 0x74   | 4     | Unknown                                            |
| 0x78   | 12*12 | [Votes](#vote)                                     |
| 0x108  | 8*10  | Unknown                                            |
| 0x158  | 2     | Unknown                                            |
| 0x15A  | 2     | Unknown                                            |
| 0x15C  | 4     | Unknown                                            |
| 0x160  | ---   | End of record                                      |

## Flags Record
This is record type 9.

| Offset | Size | Description   |
|--------|------|---------------|
| 0x0    | 1    | Flags         |
| 0x1    | ---  | End of record |

## Vote

| Offset | Size | Description                          |
|--------|------|--------------------------------------|
| 0x0    | 8    | [Unique id](/docs/pia/enl#uniqueid)  |
| 0x8    | 1    | `0xFE`: course id<br>`0x01`: unknown |
| 0x9    | 3    | Padding                              |

## sys::PlayerInfo

| Offset | Size | Description                   |
|--------|------|-------------------------------|
| 0x0    | 212  | [Core](#sysplayerinfocore)    |
| 0xD4   | 2*21 | Null-terminated name (UTF-16) |
| 0xFE   | 2    | Padding                       |

## sys::PlayerInfo::Core

| Offset | Size | Description                        |
|--------|------|------------------------------------|
| 0x0    | 4    | Unknown                            |
| 0x4    | 4    | Unknown                            |
| 0x8    | 4    | Unknown                            |
| 0xC    | 4    | [Rate 1](#sysrate)                 |
| 0x10   | 4    | [Rate 2](#sysrate)                 |
| 0x14   | 96   | [Mii data](/docs/wiiu/mii-data)    |
| 0x74   | 16   | Unknown                            |
| 0x84   | 64   | [Open flag pack](#sysopenflagpack) |
| 0xC4   | 16   | Account UUID                       |

## sys::Rate

| Offset | Size | Description   |
|--------|------|---------------|
| 0x0    | 4    | Value (float) |

## sys::OpenFlagPack

| Offset | Size | Description |
|--------|------|-------------|
| 0x0    | 0x40 | Unknown     |
