---
layout: post
toc: true
title: Uplay Win (49)
---

## Methods

| Method ID | Method Name                                                        |
| --------- | ------------------------------------------------------------------ |
| 1         | [GetActions](#1-getactions)                                        |
| 2         | [GetActionsCompleted](#2-getactionscompleted)                      |
| 3         | [GetActionsCount](#3-getactionscount)                              |
| 4         | [GetActionsCompletedCount](#4-getactionscompletedcount)            |
| 5         | [GetRewards](#5-getrewards)                                        |
| 6         | [GetRewardsPurchased](#6-getrewardspurchased)                      |
| 7         | [UplayWelcome](#7-uplaywelcome)                                    |
| 8         | [SetActionCompleted](#8-setactioncompleted)                        |
| 9         | [SetActionsCompleted](#9-setactionscompleted)                      |
| 10        | [GetUserToken](#10-getusertoken)                                   |
| 11        | [GetVirtualCurrencyUserBalance](#11-getvirtualcurrencyuserbalance) |
| 12        | [GetSectionsByKey](#12-getsectionsbykey)                           |

### (1) GetActions
#### Request

| Type     | Name           |
| -------- | -------------- |
| Sint32   | startRowIndex  |
| Sint32   | maximumRows    |
| [String] | sortExpression |
| [String] | cultureName    |
| [String] | platformCode   |
| [String] | gameCode       |

#### Response

| Type                        | Name       |
| --------------------------- | ---------- |
| [List]&lt;[UplayAction]&gt; | actionList |

### (2) GetActionsCompleted
#### Request

| Type     | Name           |
| -------- | -------------- |
| Sint32   | startRowIndex  |
| Sint32   | maximumRows    |
| [String] | sortExpression |
| [String] | cultureName    |
| [String] | platformCode   |
| [String] | gameCode       |

#### Response

| Type                        | Name       |
| --------------------------- | ---------- |
| [List]&lt;[UplayAction]&gt; | actionList |

### (3) GetActionsCount
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | platformCode |
| [String] | gameCode     |

#### Response

| Type   | Name         |
| ------ | ------------ |
| Sint32 | actionsCount |

### (4) GetActionsCompletedCount
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | platformCode |
| [String] | gameCode     |

#### Response

| Type   | Name         |
| ------ | ------------ |
| Sint32 | actionsCount |

### (5) GetRewards
#### Request

| Type     | Name           |
| -------- | -------------- |
| Sint32   | startRowIndex  |
| Sint32   | maximumRows    |
| [String] | sortExpression |
| [String] | cultureName    |
| [String] | platformCode   |
| [String] | gameCode       |

#### Response

| Type                        | Name       |
| --------------------------- | ---------- |
| [List]&lt;[UplayReward]&gt; | rewardList |

### (6) GetRewardsPurchased
#### Request

| Type     | Name           |
| -------- | -------------- |
| Sint32   | startRowIndex  |
| Sint32   | maximumRows    |
| [String] | sortExpression |
| [String] | cultureName    |
| [String] | platformCode   |
| [String] | gameCode       |

#### Response

| Type                        | Name       |
| --------------------------- | ---------- |
| [List]&lt;[UplayReward]&gt; | rewardList |

### (7) UplayWelcome
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | cultureName  |
| [String] | platformCode |
| [String] | gameCode     |

#### Response

| Type                        | Name       |
| --------------------------- | ---------- |
| [List]&lt;[UplayAction]&gt; | actionList |

### (8) SetActionCompleted
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | actionCode   |
| [String] | cultureName  |
| [String] | platformCode |
| [String] | gameCode     |

#### Response

| Type          | Name           |
| ------------- | -------------- |
| [UplayAction] | unlockedAction |

### (9) SetActionsCompleted
#### Request

| Type                   | Name           |
| ---------------------- | -------------- |
| [List]&lt;[String]&gt; | actionCodeList |
| [String]               | cultureName    |
| [String]               | platformCode   |
| [String]               | gameCode       |

#### Response

| Type                        | Name       |
| --------------------------- | ---------- |
| [List]&lt;[UplayAction]&gt; | actionList |

### (10) GetUserToken
#### Request
This method does not take any parameters.

#### Response

| Type     | Name  |
| -------- | ----- |
| [String] | token |

### (11) GetVirtualCurrencyUserBalance
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | platformCode |

#### Response

| Type   | Name                       |
| ------ | -------------------------- |
| Sint32 | virtualCurrencyUserBalance |

### (12) GetSectionsByKey
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | cultureName  |
| [String] | sectionKey   |
| [String] | platformCode |
| [String] | gameCode     |

#### Response

| Type                         | Name        |
| ---------------------------- | ----------- |
| [List]&lt;[UplaySection]&gt; | sectionList |

## Types
### UplayAction ([Structure])

| Type                                | Name          |
| ----------------------------------- | ------------- |
| [String]                            | m_code        |
| [String]                            | m_name        |
| [String]                            | m_description |
| Sint32                              | m_value       |
| [String]                            | m_gameCode    |
| [List]&lt;[UplayActionPlatform]&gt; | m_platforms   |

### UplayReward ([Structure])

| Type                                | Name             |
| ----------------------------------- | ---------------- |
| [String]                            | m_code           |
| [String]                            | m_name           |
| [String]                            | m_description    |
| Sint32                              | m_value          |
| [String]                            | m_rewardTypeName |
| [String]                            | m_gameCode       |
| [List]&lt;[UplayRewardPlatform]&gt; | m_platforms      |

### UplaySection ([Structure])

| Type                                | Name           |
| ----------------------------------- | -------------- |
| [String]                            | m_key          |
| [String]                            | m_name         |
| [String]                            | m_typeName     |
| [String]                            | m_menuTypeName |
| [List]&lt;[UplaySectionContent]&gt; | m_contentList  |
| [String]                            | m_gameCode     |
| [String]                            | m_platformCode |

### UplayActionPlatform ([Structure])

| Type     | Name           |
| -------- | -------------- |
| [String] | m_platformCode |
| Bool     | m_completed    |
| [String] | m_specificKey  |

### UplayRewardPlatform ([Structure])

| Type     | Name           |
| -------- | -------------- |
| [String] | m_platformCode |
| Bool     | m_purchased    |

### UplaySectionContent ([Structure])

| Type                           | Name            |
| ------------------------------ | --------------- |
| [String]                       | m_key           |
| [String]                       | m_name          |
| Sint16                         | m_order         |
| [String]                       | m_typeName      |
| [UplaySectionContentLocalized] | m_localizedInfo |

### UplaySectionContentLocalized ([Structure])

| Type     | Name       |
| -------- | ---------- |
| [String] | m_key      |
| [String] | m_culture  |
| [String] | m_text     |
| [String] | m_url      |
| Sint32   | m_duration |
| [String] | m_size     |
| [String] | m_width    |
| [String] | m_height   |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[StationURL]: /docs/nex/types#stationurl
[Variant]: /docs/nex/types#variant

[UplayAction]: #uplayaction-structure
[UplayReward]: #uplayreward-structure
[UplaySection]: #uplaysection-structure
[UplayActionPlatform]: #uplayactionplatform-structure
[UplayRewardPlatform]: #uplayrewardplatform-structure
[UplaySectionContent]: #uplaysectioncontent-structure
[UplaySectionContentLocalized]: #uplaysectioncontentlocalized-structure
