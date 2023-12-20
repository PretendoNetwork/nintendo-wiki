---
layout: post
toc: true
title: Happy Home Designer (115)
---

This page describes the methods that are only seen in Animal Crossing: Happy Home Designer.

## Methods

| Method ID | Method Name                                              |
| --------- | -------------------------------------------------------- |
| 45        | [GetObjectInfos](#45-getobjectinfos)                     |
| 46        | [GetMetaByOwnerId](#46-getmetabyownerid)                 |
| 47        | [GetMetaByUniqueId](#47-getmetabyuniqueid)               |
| 48        | [SearchHouseNew](#48-searchhousenew)                     |
| 49        | [SearchHousePopular](#49-searchhousepopular)             |
| 50        | [SearchHouseResident](#50-searchhouseresident)           |
| 51        | [SearchHouseContest](#51-searchhousecontest)             |
| 52        | [SearchHouseContestRandom](#52-searchhousecontestrandom) |
| 53        | [AddToBufferQueue](#53-addtobufferqueue)                 |
| 54        | [GetBufferQueue](#54-getbufferqueue)                     |
| 55        | [GetBufferQueues](#55-getbufferqueues)                   |
| 56        | [ClearBufferQueues](#56-clearbufferqueues)               |
| 57        | [GetContestEntryCount](#57-getcontestentrycount)         |

### (45) GetObjectInfos
#### Request

| Type                 | Name    |
| -------------------- | ------- |
| [List]&lt;Uint64&gt; | dataIds |

#### Response

| Type                                                                                    | Name   |
| --------------------------------------------------------------------------------------- | ------ |
| [List]&lt;[DataStoreFileServerObjectInfo](#datastorefileserverobjectinfo-structure)&gt; | pInfos |

### (46) GetMetaByOwnerId
#### Request

| Type                                                                        | Name  |
| --------------------------------------------------------------------------- | ----- |
| [DataStoreGetMetaByOwnerIdParam](#datastoregetmetabyowneridparam-structure) | param |

#### Response

| Type                              | Name      |
| --------------------------------- | --------- |
| [List]&lt;[DataStoreMetaInfo]&gt; | pMetaInfo |
| Bool                              | pHasNext  |

### (47) GetMetaByUniqueId
#### Request

| Type                                                                          | Name  |
| ----------------------------------------------------------------------------- | ----- |
| [DataStoreGetMetaByUniqueIdParam](#datastoregetmetabyuniqueidparam-structure) | param |

#### Response

| Type                              | Name      |
| --------------------------------- | --------- |
| [List]&lt;[DataStoreMetaInfo]&gt; | pMetaInfo |
| Bool                              | pHasNext  |

### (48) SearchHouseNew
#### Request

| Type                                                              | Name  |
| ----------------------------------------------------------------- | ----- |
| [DataStoreSearchHouseParam](#datastoresearchhouseparam-structure) | param |

#### Response

| Type                                  | Name      |
| ------------------------------------- | --------- |
| [List]&#x3C;[DataStoreMetaInfo]&#x3E; | pMetaInfo |
| Bool                                  | pHasNext  |

### (49) SearchHousePopular
#### Request

| Type                                                              | Name  |
| ----------------------------------------------------------------- | ----- |
| [DataStoreSearchHouseParam](#datastoresearchhouseparam-structure) | param |

#### Response

| Type                                  | Name      |
| ------------------------------------- | --------- |
| [List]&#x3C;[DataStoreMetaInfo]&#x3E; | pMetaInfo |
| Bool                                  | pHasNext  |

### (50) SearchHouseResident
#### Request

| Type                                                              | Name  |
| ----------------------------------------------------------------- | ----- |
| [DataStoreSearchHouseParam](#datastoresearchhouseparam-structure) | param |

#### Response

| Type                                  | Name      |
| ------------------------------------- | --------- |
| [List]&#x3C;[DataStoreMetaInfo]&#x3E; | pMetaInfo |
| Bool                                  | pHasNext  |

### (51) SearchHouseContest
#### Request

| Type                                                              | Name  |
| ----------------------------------------------------------------- | ----- |
| [DataStoreSearchHouseParam](#datastoresearchhouseparam-structure) | param |

#### Response

| Type                                  | Name      |
| ------------------------------------- | --------- |
| [List]&#x3C;[DataStoreMetaInfo]&#x3E; | pMetaInfo |
| Bool                                  | pHasNext  |

### (52) SearchHouseContestRandom
#### Request

| Type                                                              | Name  |
| ----------------------------------------------------------------- | ----- |
| [DataStoreSearchHouseParam](#datastoresearchhouseparam-structure) | param |

#### Response

| Type                                  | Name      |
| ------------------------------------- | --------- |
| [List]&#x3C;[DataStoreMetaInfo]&#x3E; | pMetaInfo |
| Bool                                  | pHasNext  |

### (53) AddToBufferQueue
#### Request

| Type                                            | Name   |
| ----------------------------------------------- | ------ |
| [BufferQueueParam](#bufferqueueparam-structure) | param  |
| [qBuffer]                                       | buffer |

#### Response
This method does not return anything.

### (54) GetBufferQueue
#### Request

| Type                                            | Name  |
| ----------------------------------------------- | ----- |
| [BufferQueueParam](#bufferqueueparam-structure) | param |

#### Response

| Type                    | Name         |
| ----------------------- | ------------ |
| [List]&lt;[qBuffer]&gt; | pBufferQueue |

### (55) GetBufferQueues
#### Request

| Type                                                          | Name   |
| ------------------------------------------------------------- | ------ |
| [List]&lt;[BufferQueueParam](#bufferqueueparam-structure)&gt; | params |

#### Response

| Type                                  | Name            |
| ------------------------------------- | --------------- |
| [List]&lt;[List]&lt;[qBuffer]&gt;&gt; | pBufferQueueLst |
| [List]&lt;[Result]&gt;                | pResults        |

### (56) ClearBufferQueues
#### Request

| Type                                                          | Name   |
| ------------------------------------------------------------- | ------ |
| [List]&lt;[BufferQueueParam](#bufferqueueparam-structure)&gt; | params |

#### Response

| Type                   | Name     |
| ---------------------- | -------- |
| [List]&lt;[Result]&gt; | pResults |

### (57) GetContestEntryCount

#### Request
This method does not take any parameters

#### Response

| Type   | Name     |
| ------ | -------- |
| Uint32 | pEntries |

## Types
### DataStoreFileServerObjectInfo ([Structure])

| Type                  | Name    |
| --------------------- | ------- |
| Uint64                | dataId  |
| [DataStoreReqGetInfo] | getInfo |

### DataStoreGetMetaByOwnerIdParam ([Structure])

| Type                                                 | Name         |
| ---------------------------------------------------- | ------------ |
| [List]&lt;Uint32&gt;                                 | ownerIds     |
| [List]&lt;Uint16&gt;                                 | dataTypes    |
| Uint8                                                | resultOption |
| [ResultRange](/docs/nex/types#resultrange-structure) | resultRange  |

### DataStoreGetMetaByUniqueIdParam ([Structure])

| Type                                                 | Name         |
| ---------------------------------------------------- | ------------ |
| [List]&lt;Uint64&gt;                                 | uniqueIds    |
| [List]&lt;Uint16&gt;                                 | dataTypes    |
| Uint8                                                | resultOption |
| [ResultRange] | resultRange  |

### DataStoreSearchHouseParam ([Structure])

| Type | Name |
| --- | --- |
| Uint16 | dataType |
| [Buffer] | resultOrderColumns |
| [ResultRange] | resultRange |
| Uint8 | resultOption |
| Uint8 | region |
| Uint8 | country |

### BufferQueueParam ([Structure])

| Type   | Name   |
| ------ | ------ |
| Uint64 | dataId |
| Uint32 | slot   |

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
[ResultRange]: /docs/nex/types#resultrange-structure

[DataStoreReqGetInfo]: /docs/nex/protocols/datastore#datastorereqgetinfo-structure
[DataStoreMetaInfo]: /docs/nex/protocols/datastore#datastoremetainfo-structure
