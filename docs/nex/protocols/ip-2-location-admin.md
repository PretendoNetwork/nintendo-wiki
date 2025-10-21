---
layout: post
toc: true
title: IP2LocationProtocolAdmin (46)
---

## Methods

| Method ID | Method Name                               |
| --------- | ----------------------------------------- |
| 1         | [GetLocationFromIP](#1-getlocationfromip) |

### (1) GetLocationFromIP
#### Request
| Type     | Name |
| -------- | ---- |
| [String] | ip   |

#### Response
| Type                                | Name     |
| ----------------------------------- | -------- |
| [IPLocation](#iplocation-structure) | location |

## Types

### IPLocation ([Structure])
| Type     | Name             |
| -------- | ---------------- |
| Uint32   | m_ipStart        |
| [String] | m_countryCode    |
| [String] | m_countryName    |
| [String] | m_regionCode     |
| [String] | m_regionName     |
| [String] | m_cityName       |
| float    | m_latitude       |
| float    | m_longitude      |
| Uint32   | m_countryGeoCode |
| Uint32   | m_regionGeoCode  |
| Uint32   | m_cityGeoCode    |

[String]: /docs/nex/types#string
[Structure]: /docs/nex/types#structure
