---
layout: post
toc: true
title: NewsProtocolAdmin (32)
---

## Methods

| Method ID | Method Name                                                        |
| --------- | ------------------------------------------------------------------ |
| 1         | [CreateChannel](#1-createchannel)                                  |
| 2         | [DeleteChannel](#2-deletechannel)                                  |
| 3         | [DeleteChannels](#3-deletechannels)                                |
| 4         | [GetChannels](#4-getchannels)                                      |
| 5         | [GetChannelsByTypes](#5-getchannelsbytypes)                        |
| 6         | [GetChannelsByIDs](#6-getchannelsbyids)                            |
| 7         | [UpdateChannel](#7-updatechannel)                                  |
| 8         | [GetNewsFeedLinks](#8-getnewsfeedlinks)                            |
| 9         | [GetNumberOfNewsFeedLinks](#9-getnumberofnewsfeedlinks)            |
| 10        | [LinkNewsFeed](#10-linknewsfeed)                                   |
| 11        | [UnlinkNewsFeeds](#11-unlinknewsfeeds)                             |
| 12        | [DeleteNewsMessages](#12-deletenewsmessages)                       |
| 13        | [DeleteNewsMessagesByRecipient](#13-deletenewsmessagesbyrecipient) |
| 14        | [GetNewsHeaders](#14-getnewsheaders)                               |
| 15        | [GetNewsMessages](#15-getnewsmessages)                             |
| 16        | [GetNumberOfNews](#16-getnumberofnews)                             |
| 17        | [PublishNews](#17-publishnews)                                     |
| 18        | [UpdateNewsFeedLink](#18-updatenewsfeedlink)                       |
| 19        | [SingleNewsFeedParsingJob](#19-singlenewsfeedparsingjob)           |
| 20        | [MultipleNewsFeedParsingJob](#20-multiplenewsfeedparsingjob)       |
| 21        | [NewsMessageCleaningJob](#21-newsmessagecleaningjob)               |
| 22        | [NewsChannelCleaningJob](#22-newschannelcleaningjob)               |
| 23        | [CreateRSSFeed](#23-createrssfeed)                                 |
| 24        | [GetDateTimeDelta](#24-getdatetimedelta)                           |
| 25        | [AddDateTime](#25-adddatetime)                                     |
| 26        | [GetLocalDateTime](#26-getlocaldatetime)                           |
| 27        | [GetSystemDateTime](#27-getsystemdatetime)                         |

### (1) CreateChannel
#### Request

| Type                                  | Name    |
| ------------------------------------- | ------- |
| [NewsChannel](#newschannel-structure) | channel |

#### Response

| Type   | Name          |
| ------ | ------------- |
| uint32 | newsChannelID |

### (2) DeleteChannel
#### Request

| Type   | Name          |
| ------ | ------------- |
| uint32 | newsChannelID |

#### Response
This method does not return anything.

### (3) DeleteChannels
#### Request

| Type                 | Name           |
| -------------------- | -------------- |
| [List]&lt;uint32&gt; | newsChannelIDs |

#### Response
This method does not return anything.

### (4) GetChannels
#### Request

| Type        | Name        |
| ----------- | ----------- |
| ResultRange | resultRange |

#### Response

| Type                                                | Name     |
| --------------------------------------------------- | -------- |
| [List]&lt;[NewsChannel](#newschannel-structure)&gt; | channels |

### (5) GetChannelsByTypes
#### Request

| Type                 | Name             |
| -------------------- | ---------------- |
| [List]&lt;string&gt; | newsChannelTypes |
| ResultRange          | resultRange      |

#### Response

| Type                                                | Name     |
| --------------------------------------------------- | -------- |
| [List]&lt;[NewsChannel](#newschannel-structure)&gt; | channels |

### (6) GetChannelsByIDs
#### Request

| Type                 | Name           |
| -------------------- | -------------- |
| [List]&lt;uint32&gt; | newsChannelIDs |

#### Response

| Type                                                | Name     |
| --------------------------------------------------- | -------- |
| [List]&lt;[NewsChannel](#newschannel-structure)&gt; | channels |

### (7) UpdateChannel
#### Request

| Type                                  | Name    |
| ------------------------------------- | ------- |
| [NewsChannel](#newschannel-structure) | channel |

#### Response
This method does not return anything.

### (8) GetNewsFeedLinks
#### Request

| Type                 | Name           |
| -------------------- | -------------- |
| [List]&lt;uint32&gt; | newsChannelIDs |

#### Response

| Type                                                  | Name          |
| ----------------------------------------------------- | ------------- |
| [List]&lt;[NewsFeedLink](#newsfeedlink-structure)&gt; | newsFeedLinks |

### (9) GetNumberOfNewsFeedLinks
#### Request

| Type                 | Name           |
| -------------------- | -------------- |
| [List]&lt;uint32&gt; | newsChannelIDs |

#### Response

| Type   | Name                  |
| ------ | --------------------- |
| uint32 | numberOfNewsFeedLinks |

### (10) LinkNewsFeed
#### Request

| Type                                    | Name         |
| --------------------------------------- | ------------ |
| [NewsFeedLink](#newsfeedlink-structure) | newsFeedLink |

#### Response

| Type   | Name           |
| ------ | -------------- |
| uint32 | newsFeedLinkID |

### (11) UnlinkNewsFeeds
#### Request

| Type                 | Name            |
| -------------------- | --------------- |
| [List]&lt;uint32&gt; | newsFeedLinkIDs |

#### Response
This method does not return anything.

### (12) DeleteNewsMessages
#### Request

| Type                 | Name           |
| -------------------- | -------------- |
| [List]&lt;uint32&gt; | newsMessageIDs |

#### Response
This method does not return anything.

### (13) DeleteNewsMessagesByRecipient
#### Request

| Type                                      | Name      |
| ----------------------------------------- | --------- |
| [NewsRecipient](#newsrecipient-structure) | recipient |

#### Response
This method does not return anything.

### (14) GetNewsHeaders
#### Request

| Type                                      | Name      |
| ----------------------------------------- | --------- |
| [NewsRecipient](#newsrecipient-structure) | recipient |
| [ResultRange]                             | range     |

#### Response

| Type                     | Name        |
| ------------------------ | ----------- |
| [List]&lt;NewsHeader&gt; | newsHeaders |

### (15) GetNewsMessages
#### Request

| Type                 | Name           |
| -------------------- | -------------- |
| [List]&lt;uint32&gt; | newsMessageIDs |

#### Response

| Type                      | Name         |
| ------------------------- | ------------ |
| [List]&lt;NewsMessage&gt; | newsMessages |

### (16) GetNumberOfNews
#### Request

| Type                                      | Name      |
| ----------------------------------------- | --------- |
| [NewsRecipient](#newsrecipient-structure) | recipient |

#### Response

| Type   | Name         |
| ------ | ------------ |
| uint32 | numberOfNews |

### (17) PublishNews
#### Request

| Type                                  | Name        |
| ------------------------------------- | ----------- |
| [NewsMessage](#newsmessage-structure) | newsMessage |

#### Response

| Type                                  | Name                |
| ------------------------------------- | ------------------- |
| [NewsMessage](#newsmessage-structure) | modifiedNewsMessage |

### (18) UpdateNewsFeedLink
#### Request

| Type         | Name         |
| ------------ | ------------ |
| NewsFeedLink | newsFeedLink |

#### Response
This method does not return anything.

### (19) SingleNewsFeedParsingJob
#### Request
This method does not take any parameters.
#### Response
This method does not return anything.

### (20) MultipleNewsFeedParsingJob
#### Request
This method does not take any parameters.
#### Response
This method does not return anything.

### (21) NewsMessageCleaningJob
#### Request
This method does not take any parameters.
#### Response
This method does not return anything.

### (22) NewsChannelCleaningJob
#### Request
This method does not take any parameters.
#### Response
This method does not return anything.

### (23) CreateRSSFeed
#### Request

| Type     | Name           |
| -------- | -------------- |
| [String] | name           |
| uint32   | feedTemplateID |

#### Response
This method does not return anything.

### (24) GetDateTimeDelta
#### Request

| Type       | Name |
| ---------- | ---- |
| [DateTime] | dt1  |
| [DateTime] | dt2  |

#### Response

| Type  | Name  |
| ----- | ----- |
| int64 | delta |

### (25) AddDateTime
#### Request

| Type       | Name    |
| ---------- | ------- |
| [DateTime] | dt1     |
| int32      | years   |
| int32      | months  |
| int32      | days    |
| int32      | hours   |
| int32      | minutes |
| int32      | seconds |

#### Response

| Type       | Name |
| ---------- | ---- |
| [DateTime] | dt2  |

### (26) GetLocalDateTime
#### Request
This method does not take any parameters.
#### Response

| Type       | Name |
| ---------- | ---- |
| [DateTime] | dt   |

### (27) GetSystemDateTime
#### Request
This method does not take any parameters.
#### Response

| Type       | Name |
| ---------- | ---- |
| [DateTime] | dt   |

## Types

## NewsChannel ([Structure])
| Type       | Name             |
| ---------- | ---------------- |
| uint32     | m_ID             |
| uint32     | m_ownerPID       |
| [String]   | m_name           |
| [String]   | m_description    |
| [DateTime] | m_creationTime   |
| [DateTime] | m_expirationTime |
| [String]   | m_type           |
| [String]   | m_locale         |
| bool       | m_subscribable   |

## NewsHeader ([Structure])
| Type       | Name              |
| ---------- | ----------------- |
| uint32     | m_ID              |
| uint32     | m_recipientID     |
| uint32     | m_recipientType   |
| uint32     | m_publisherPID    |
| [String]   | m_publisherName   |
| [DateTime] | m_publicationTime |
| [DateTime] | m_displayTime     |
| [DateTime] | m_expirationTime  |
| [String]   | m_title           |
| [String]   | m_link            |

### NewsMessage ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [NewsHeader](#newsheader-structure)
{: .prompt-info }

| Type     | Name   |
| -------- | ------ |
| [String] | m_body |

### NewsRecipient ([Structure])
| Type   | Name            |
| ------ | --------------- |
| uint32 | m_recipientID   |
| uint32 | m_recipientType |

### NewsFeedLink ([Structure])
| Type       | Name                             |
| ---------- | -------------------------------- |
| uint32     | m_ID                             |
| uint32     | m_newsChannelID                  |
| [String]   | m_URL                            |
| [String]   | m_description                    |
| [DateTime] | m_feedUpdatedParseTime           |
| [DateTime] | m_lastUpdatedTime                |
| [DateTime] | m_nextRefreshTime                |
| uint32     | m_refreshElapsedTimeMilliseconds |
| uint32     | m_refreshPeriodSeconds           |
| bool       | m_refreshEnabled                 |
| uint32     | m_refreshMethod                  |
| [DateTime] | m_newestMessageTime              |
| uint32     | m_messageAdded                   |

[String]: /docs/nex/types#string
[List]: /docs/nex/types#list
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[ResultRange]: /docs/nex/types#resultrange-structure
