---
layout: post
toc: true
title: TrackingExtensionProtocol
---

# Methods

| Method ID | Method Name                                             |
| --------- | ------------------------------------------------------- |
| 1         | [GetTrackingUserGroup](#1-gettrackingusergroup)         |
| 2         | [GetTrackingUserGroupTags](#2-gettrackingusergrouptags) |

# (1) GetTrackingUserGroup

## Request
| Type   | Name |
| ------ | ---- |
| Uint32 | pid  |

## Response
| Type   | Name      |
| ------ | --------- |
| Uint32 | usergroup |

# (2) GetTrackingUserGroupTags

## Request
| Type   | Name      |
| ------ | --------- |
| Uint32 | usergroup |

## Response
| Type                       | Name | Description |
| -------------------------- | ---- | ----------- |
| [List]&#x3C;[String]&#x3E; | tags |             |

[String]: /docs/nex/types#string
[List]: /docs/nex/types#list
