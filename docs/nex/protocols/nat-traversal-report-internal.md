---
layout: post
toc: true
title: NATTraversalReportInternal (?)
---

This is an internal protocol used for inter-server communications.

## Methods

| Method ID | Method Name                                                         |
|-----------|---------------------------------------------------------------------|
| 1         | [ReportNATTraversalResult](#1-reportnattraversalresult)             |
| 2         | [ReportNATProperties](#2-reportnatproperties)                       |
| 3         | [ReportNATTraversalResultDetail](#3-reportnattraversalresultdetail) |

### (1) ReportNATTraversalResult
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unknown     |
| Uint32 | Unknown     |

#### Response
This method does not return anything.

### (2) ReportNATProperties
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unknown     |
| Uint32 | Unknown     |
| Uint32 | Unknown     |

#### Response
This method does not return anything.

### (3) ReportNATTraversalResultDetail
#### Request

| Type   | Description |
|--------|-------------|
| Uint32 | Unknown     |
| Sint32 | Unknown     |
| Uint32 | Unknown     |

#### Response
This method does not return anything.
