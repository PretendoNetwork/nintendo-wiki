---
layout: post
toc: true
title: RPC
---

The following RPC methods seem to the same in all games that use libeagle.

The server keeps track of 32 global counters.

## Methods

| RPC | Name                                               |
| --- | -------------------------------------------------- |
| 16  | [NotifyServerCounter](#16-notifyservercounter)     |
| 17  | [SetServerCounter](#17-setservercounter)           |
| 18  | [GetServerCounter](#18-getservercounter)           |
| 19  | [IncreaseServerCounter](#19-increaseservercounter) |
| 20  | ?                                                  |
| 21  | ?                                                  |
| 22  | ?                                                  |
| 23  | ?                                                  |
| 24  | ?                                                  |
| 25  | ?                                                  |

### (16) NotifyServerCounter

| Bits | Description   |
| ---- | ------------- |
| 8    | Counter index |
| 64   | Value         |
| 16   | Node id       |

### (17) SetServerCounter

| Bits | Description   |
| ---- | ------------- |
| 8    | Counter index |
| 64   | Value         |
| 1    | Unknown       |

### (18) GetServerCounter

| Bits | Description   |
| ---- | ------------- |
| 8    | Counter index |

### (19) IncreaseServerCounter

| Bits | Description   |
| ---- | ------------- |
| 8    | Counter index |
| 64   | Value         |
| 1    | Unknown       |
