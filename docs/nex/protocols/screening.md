---
layout: post
toc: true
title: Screening (124)
---

## Methods

| Method ID | Method Name                                         |
| --------- | --------------------------------------------------- |
| 1         | [ReportDataStoreContent](#1-reportdatastorecontent) |
| 2         | ReportUser                                          |

### (1) ReportDataStoreContent
Creates a report for a given piece of DataStore content (UGC).

#### Request

| Type                                                                        | Name            |
| --------------------------------------------------------------------------- | --------------- |
| [ScreeningDataStoreContentParam](#screeningdatastorecontentparam-structure) | pContentParam   |
| [ScreeningUgcViolationParam](#screeningugcviolationparam-structure)         | pViolationParam |

#### Response
This method does not return anything.

## Types
### ScreeningDataStoreContentParam ([Structure])

| Type     | Name          |
| -------- | ------------- |
| Uint64   | dataId        |
| Uint64   | contentDataId |
| [String] | ugcType       |
| [String] | language      |
| [String] | searchKey     |

### ScreeningUgcViolationParam ([Structure])

| Type                                                                  | Name             |
| --------------------------------------------------------------------- | ---------------- |
| [ReportCategory](#reportcategory-uint32)                              | category         |
| [String]                                                              | reason           |
| [List]&lt;[ScreeningContextInfo](#screeningcontextinfo-structure)&gt; | context          |
| Uint64                                                                | screenshotDataId |

### ScreeningContextInfo ([Structure])

| Type     | Name  |
| -------- | ----- |
| [String] | key   |
| [String] | value |

## Constants
### ReportCategory (Uint32)
Enum representing the kind of content being reported.

| Name                                | Value | Description                                                         |
| ----------------------------------- | ----- | ------------------------------------------------------------------- |
| `REPORT_CATEGORY_INVALID`           | 0     | Invalid category.                                                   |
| `REPORT_CATEGORY_MIN`               | 1     | The minimum value a category can be.                                |
| `REPORT_CATEGORY_PERSONAL`          | 1     | The reported content contained personal information.                |
| `REPORT_CATEGORY_CRIMINAL`          | 2     | The reported content contained criminal material.                   |
| `REPORT_CATEGORY_IMMORAL`           | 3     | The reported content contained "immoral" (?) material.              |
| `REPORT_CATEGORY_HARASSMENT`        | 4     | The reported content contained harassment material.                 |
| `REPORT_CATEGORY_COMMERCIAL`        | 5     | The reported content contained commercial (advertising?) material.  |
| `REPORT_CATEGORY_SEXUALLY_EXPLICIT` | 6     | The reported content contained sexually explicit material.          |
| `REPORT_CATEGORY_OTHER`             | 7     | The reported content didn't fit into the other existing categories. |
| `REPORT_CATEGORY_MAX`               | 7     | The maximum value a category can be.                                |

[String]: /docs/nex/types#string
[List]: /docs/nex/types#list
[Structure]: /docs/nex/types#structure
