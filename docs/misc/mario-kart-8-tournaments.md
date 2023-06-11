---
layout: post
toc: true
title: Mario Kart 8 Tournaments
---

Mario Kart 8 implement tournaments using the [Matchmake Extension Protocol (MK8)](/docs/nex/protocols/matchmake-extension/mario-kart-8).

The [``SimpleSearchObject``](/docs/nex/protocols/matchmake-extension/mario-kart-8#simplesearchobject-structure) describes a tournament, the attributes and metadata describe the settings.

- **NOTE**: The following description matches the data observed in Mario Kart 8 for the WiiU.

## Attributes

A simple search object contains a list of 20 uint32 attributes, index 0 to 13 included are used, the others are reserved/unused.

### Attribute 0 - Public target

| Value | Description |
| --- | --- |
| 1 | Public |
| 2 | Private |

### Attribute 1 - Country ID / Region

### Attribute 2 - Race mode

| Value | Description |
| --- | --- |
| 0 | 200cc |
| 1 | 50cc |
| 2 | 100cc |
| 3 | 150cc |
| 4 | Mirror |
| 5 | Battle |

### Attribute 3 - Items

| Value | Description |
| --- | --- |
| 1 | All items |
| 2 | Shells only |
| 3 | Bananas only |
| 4 | Mushrooms only |
| 5 | Bob-ombs |
| 6 | No items |
| 7 | No items or coins |
| 8 | Frantic mode |

### Attribute 4 - Teams

| Value | Description |
| --- | --- |
| 1 | No teams |
| 2 | Team game |

### Attribute 5 - Vehicles

| Value | Description |
| --- | --- |
| 1 | All vehicles |
| 2 | Karts only |
| 3 | Bikes only |

### Attribute 6 - Control methods

| Value | Description |
| --- | --- |
| 1 | All methods |
| 2 | Motion controls |

### Attribute 7 - Region

| Value | Description |
| --- | --- |
| 1 | Global |
| 2 | Regional |

### Attribute 8 - Player rating

| Value | Description |
| --- | --- |
| 1 | 0 - 99999 |
| 2 | 0 - 1500 |
| 3 | 0 - 2500 |
| 4 | 0 - 5000 |
| 5 | 1500 - 2500 |
| 6 | 1500 - 5000 |
| 7 | 1500 - 99999 |
| 8 | 5000 - 99999 |
| 9 | 9000 - 99999 |

### Attribute 9 - Available courses

| Value | Description |
| --- | --- |
| 0 | Base |
| 1 | Base + DLC 1 |
| 2 | Base + DLC 2 |
| 3 | Base + DLC 1+2 |
| 4 | Only DLC 1+2 |

### Attribute 10 - Group switching

| Value | Description |
| --- | --- |
| 1 | Don't switch |
| 2 | Every 4th match |

### Attribute 11 - CPUs

| Value | Description |
| --- | --- |
| 1 | No CPU |
| 2 | Easy CPU |
| 3 | Normal CPU |
| 4 | Hard CPU |


### Attribute 12 - Official

| Value | Description |
| --- | --- |
| 1 | Not official |
| 2 | Official |

### Attribute 13 - Recommended

| Value | Description |
| --- | --- |
| 1 | Not recommended |
| 2 | Recommended |


## Metadata

It's encoded ``ChunkData``

## ChunkData format

It consists of the following 2 byte header:

| Type | Description |
| --- | --- |
| Uint16 | Magic (0x5a5a, 'ZZ') |

Then following the header, there's these structures:

| Type | Description |
| --- | --- |
| Uint8 | ID |
| Uint16 | Length |
| T | Content (of the above length, can be anything) |

- It goes until ID 255

Here's what each ID correspond to for MK8 tournaments:

| ID | Type | Description |
| --- | --- | --- |
| 0 | Uint8 | Revision |
| 1 | Uint32 | Version |
| 2 | UTF16 | Tournament name |
| 3 | Uint8 | Tournament icon index |
| 4 | UTF16 | Tournament description |
| 5 | Uint32 | [Repeat type] |
| 6 | Uint32 | Game set number |
| 7 | UTF16 | Team 1 name |
| 8 | UTF16 | Team 2 name |
| 9 | Uint32 | [Battle duration] |
| 11 | Uint32 | [Competition update datetime] |

### Repeat type

| Value | Description |
| --- | --- |
| 1 | Week |
| 2 | Day |
| 3 | Fixed time |

### Battle duration

| Value | Description |
| --- | --- |
| 0 | 1 min |
| 1 | 2 min |
| 2 | 3 min|
| 3 | 4 min |
| 3 | 5 min |

### Competition update datetime

It's calculated like this:

```c++
this->minute = 10 * (value % 10);
this->hour = value / 10 % 100;
this->day = value / 1000 % 100;
this->month = value / 100000 % 100;
this->year = value / 10000000 + 2000;
```


[Repeat type]: #repeat-type
[Battle duration]: #battle-duration
[Competition update datetime]: #competition-update-datetime