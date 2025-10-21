---
layout: post
toc: true
title: UbiNewsProtocol (33)
---

## Methods

| Method ID | Method Name                           |
| --------- | ------------------------------------- |
| 1         | [GetChannel](#1-getchannel)           |
| 2         | [GetNewsHeaders](#2-getnewsheaders)   |
| 3         | [GetNewsMessages](#3-getnewsmessages) |

### (1) GetChannel
#### Request
This method does not take any parameters.
#### Response

| Type                                  | Name        |
| ------------------------------------- | ----------- |
| [NewsChannel](#newschannel-structure) | newsChannel |

### (2) GetNewsHeaders
#### Request

| Type          | Name  |
| ------------- | ----- |
| [ResultRange] | range |

#### Response

| Type                                              | Name        |
| ------------------------------------------------- | ----------- |
| [List]&lt;[NewsHeader](#newsheader-structure)&gt; | newsHeaders |

### (3) GetNewsMessages
#### Request

| Type          | Name  |
| ------------- | ----- |
| [ResultRange] | range |

#### Response

| Type                                                | Name         |
| --------------------------------------------------- | ------------ |
| [List]&lt;[NewsMessage](#newsmessage-structure)&gt; | newsMessages |

## Types

### NewsChannel ([Structure])
| Type       | Name             |
| ---------- | ---------------- |
| uint32     | m_ID             |
| [PID]      | m_ownerPID       |
| [String]   | m_name           |
| [String]   | m_description    |
| [DateTime] | m_creationTime   |
| [DateTime] | m_expirationTime |
| [String]   | m_type           |
| [String]   | m_locale         |
| bool       | m_subscribable   |

### NewsHeader ([Structure])
| Type       | Name              |
| ---------- | ----------------- |
| uint32     | m_ID              |
| [PID]      | m_recipientID     |
| uint32     | m_recipientType   |
| [PID]      | m_publisherPID    |
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

[Structure]: /docs/nex/types#structure
[List]: /docs/nex/types#list
[String]: /docs/nex/types#string
[PID]: /docs/nex/types#pid
[DateTime]: /docs/nex/types#datetime
[ResultRange]: /docs/nex/types#resultrange-structure
