---
layout: post
toc: true
title: Super Mario Bros. 35
---

## Methods

| RPC | Name                             |
| --- | -------------------------------- |
| 26  | [JoinMatch](#26-joinmatch)       |
| 27  | [AcceptMatch](#27-acceptmatch)   |
| 28  | [StartMatch](#28-startmatch)     |
| 29  | [?](#29-unknown)                 |
| 30  | [AddPlayer](#30-addplayer)       |
| 31  | [InputKey](#31-inputkey)         |
| 32  | [ChangeTarget](#32-changetarget) |
| 33  | [Attack](#33-attack)             |
| 34  | [PopEnemy](#34-popenemy)         |
| 35  | [UseRoulette](#35-useroulette)   |
| 36  | [UseItem](#36-useitem)           |
| 37  | [HurryUp](#37-hurryup)           |
| 38  | [Dead](#38-dead)                 |
| 39  | [Feat](#39-feat)                 |
| 40  | [ChangeWatch](#40-changewatch)   |

### (26) JoinMatch

| Bits   | Description     |
| ------ | --------------- |
| 7      | Player id       |
| 8      | Requested level |
| 32     | Number of coins |
| 1      | Is Luigi        |
| 64     | Principal id    |
| 8 x 33 | Player name     |
| 16     | Coin level      |
| 16     | Unknown         |
| 2      | Item            |
| 1      | Unknown         |

### (27) AcceptMatch

| Bits | Description     |
| ---- | --------------- |
| 7    | Player id       |
| 8    | Requested level |
| 32   | Number of coins |
| 1    | Is Luigi        |

### (28) StartMatch

| Bits   | Description      |
| ------ | ---------------- |
| 32     | Unknown          |
| 8 x 35 | Requested levels |
| 1 x 35 | Unknown          |

### (29) Unknown

| Bits | Description |
| ---- | ----------- |
| 8    | Size        |
|      | Payload     |

### (30) AddPlayer

| Bits   | Description  |
| ------ | ------------ |
| 7      | Player id    |
| 16     | Node id      |
| 64     | Principal id |
| 8 x 33 | Player name  |
| 16     | Coin level   |
| 16     | Unknown      |
| 2      | Item         |
| 1      | Unknown      |

### (31) InputKey

| Bits   | Description |
| ------ | ----------- |
| 7      | Player id   |
| 5      | Unknown     |
| 6 x 30 | Unknown     |

### (32) ChangeTarget

| Bits | Description |
| ---- | ----------- |
| 7    | Player id   |
| 8    | Unknown     |
| 35   | Unknown     |
| 5    | Unknown     |

### (33) Attack

| Bits | Description |
| ---- | ----------- |
| 7    | Player id   |
| 35   | Unknown     |
| 32   | Unknown     |
| 5    | Unknown     |

### (34) PopEnemy

| Bits | Description |
| ---- | ----------- |
| 7    | Player id   |
| 7    | Unknown     |
| 32   | Unknown     |
| 5    | Unknown     |

### (35) UseRoulette

| Bits | Description |
| ---- | ----------- |
| 7    | Player id   |
| 8    | Unknown     |
| 5    | Unknown     |

### (36) UseItem

| Bits | Description |
| ---- | ----------- |
| 7    | Player id   |
| 8    | Unknown     |
| 5    | Unknown     |

### (37) HurryUp

| Bits | Description |
| ---- | ----------- |
| 7    | Player id   |
| 5    | Unknown     |

### (38) Dead

| Bits | Description |
| ---- | ----------- |
| 7    | Player id   |
| 7    | Unknown     |
| 32   | Unknown     |
| 16   | Unknown     |
| 5    | Unknown     |

### (39) Feat

| Bits | Description |
| ---- | ----------- |
| 7    | Player id   |
| 32   | Unknown     |
| 16   | Unknown     |
| 5    | Unknown     |

### (40) ChangeWatch

| Bits | Description |
| ---- | ----------- |
| 7    | Player id   |
| 7    | Unknown     |
