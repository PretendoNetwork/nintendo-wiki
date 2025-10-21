---
layout: post
toc: true
title: Title Storage Admin
---

## Methods

| Method ID | Method Name                                                                     |
| --------- | ------------------------------------------------------------------------------- |
| 1         | [GetContentTypesDescription](#1-getcontenttypesdescription)                     |
| 2         | [GetContentTypeDescription](#2-getcontenttypedescription)                       |
| 3         | [BrowseContents](#3-browsecontents)                                             |
| 4         | [GetContentDetails](#4-getcontentdetails)                                       |
| 5         | [CreateContentAndGetUploadInformation](#5-createcontentandgetuploadinformation) |
| 6         | [RemoveContent](#6-removecontent)                                               |
| 7         | [UpdateContentMetaData](#7-updatecontentmetadata)                               |
| 8         | [ContentInsertionCompleted](#8-contentinsertioncompleted)                       |

### (1) GetContentTypesDescription

#### Request
This method does not take any parameters.

#### Response

| Type                                                                          | Name                |
| ----------------------------------------------------------------------------- | ------------------- |
| [List]&#x3C;[ContentTypeDescription](#contenttypedescription-structure)&#x3E; | contentDescriptions |

### (2) GetContentTypeDescription

#### Request

| Type     | Name        |
| -------- | ----------- |
| [String] | contentType |

#### Response

| Type                                                                                | Name            |
| ----------------------------------------------------------------------------------- | --------------- |
| [List]&#x3C;[ContentTypeExtensionField](#contenttypeextensionfield-structure)&#x3E; | extensionFields |

### (3) BrowseContents

#### Request
This method does not take any parameters.

#### Response

| Type                                                                | Name     |
| ------------------------------------------------------------------- | -------- |
| [List]&#x3C;[AdminTitleContent](#admintitlecontent-structure)&#x3E; | contents |

### (4) GetContentDetails

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | contentId |

#### Response

| Type   | Name    |
| ------ | ------- |
| [Data] | details |

### (5) CreateContentAndGetUploadInformation

#### Request

| Type       | Name          |
| ---------- | ------------- |
| [String]   | name          |
| [String]   | description   |
| [String]   | key           |
| [DateTime] | dateAvailable |
| [DateTime] | dateExpired   |
| Uint32     | flags         |
| Uint32     | extendedFlags |
| [String]   | contentType   |
| [Data]     | extension     |
| [String]   | mime          |

#### Response

| Type                               | Name           |
| ---------------------------------- | -------------- |
| Uint32                             | contentId      |
| [String]                           | uploadURL      |
| [String]                           | uploadMimeType |
| [Map]&#x3C;[String],[String]&#x3E; | uploadBody     |

### (6) RemoveContent

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | contentId |

#### Response

| Type | Name     |
| ---- | -------- |
| Bool | %retval% |

### (7) UpdateContentMetaData

#### Request

| Type       | Name          |
| ---------- | ------------- |
| Uint32     | contentId     |
| [String]   | name          |
| [String]   | description   |
| [DateTime] | dateAvailable |
| [DateTime] | dateExpired   |
| Uint32     | flags         |
| Uint32     | extendedFlags |
| [Data]     | extension     |

#### Response

| Type | Name     |
| ---- | -------- |
| Bool | %retval% |

### (8) ContentInsertionCompleted

#### Request

| Type   | Name        |
| ------ | ----------- |
| Uint32 | contentId   |
| Uint32 | contentSize |

#### Response

| Type | Name     |
| ---- | -------- |
| Bool | %retval% |

## Types

### ContentTypeExtensionField ([Structure])

| Type     | Name        |
| -------- | ----------- |
| [String] | m_FieldName |
| [String] | m_FieldType |

### ContentTypeDescription ([Structure])

| Type                                                                                | Name              |
| ----------------------------------------------------------------------------------- | ----------------- |
| [String]                                                                            | m_ContentType     |
| [List]&#x3C;[ContentTypeExtensionField](#contenttypeextensionfield-structure)&#x3E; | m_extensionFields |

### ContentDescription ([Structure])

| Type     | Name                 |
| -------- | -------------------- |
| [String] | m_ContentDisplayName |
| [String] | m_ContentDescription |

### AdminTitleContent ([Structure])

| Type                                                | Name                 |
| --------------------------------------------------- | -------------------- |
| Uint32                                              | m_id                 |
| [String]                                            | m_name               |
| [ContentDescription](#contentdescription-structure) | m_contentDescription |
| Uint32                                              | m_flags              |
| Uint32                                              | m_extendedFlags      |
| [DateTime]                                          | m_dateAvailable      |
| [DateTime]                                          | m_dateExpired        |
| [String]                                            | m_contentType        |
| [String]                                            | m_downloadURL        |

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
[PID]: /docs/nex/types#pid
