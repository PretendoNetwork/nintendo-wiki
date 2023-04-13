---
layout: post
toc: true
title: Super Smash Bros. 4 (115)
---

This page describes the methods that are only seen in Super Smash Bros. 4. The protocol has been renamed from `DataStoreProtocol` to `CrossProtocol`.

## Methods

| Method ID | Method Name                                              |
| --------- | -------------------------------------------------------- |
| 45        | [PostProfile](#45-postprofile)                           |
| 46        | [GetProfiles](#46-getprofiles)                           |
| 47        | [SendPlayReport](#47-sendplayreport)                     |
| 48        | [GetWorldPlayReport](#48-getworldplayreport)             |
| 49        | [GetReplayMeta](#49-getreplaymeta)                       |
| 50        | [PrepareGetReplay](#50-preparegetreplay)                 |
| 51        | [PreparePostReplay](#51-preparepostreplay)               |
| 52        | [CompletePostReplay](#52-completepostreplay)             |
| 53        | [CheckPostReplay](#53-checkpostreplay)                   |
| 54        | [GetNextReplay](#54-getnextreplay)                       |
| 55        | [PreparePostSharedData](#55-preparepostshareddata)       |
| 56        | [CompletePostSharedData](#56-completepostshareddata)     |
| 57        | [SearchSharedData](#57-searchshareddata)                 |
| 58        | [GetApplicationConfig](#58-getapplicationconfig)         |
| 59        | [SearchReplay](#59-searchreplay)                         |
| 60        | [PostFightingPowerScore](#60-postfightingpowerscore)     |
| 61        | [GetFightingPowerChart](#61-getfightingpowerchart)       |
| 62        | [GetFightingPowerChartAll](#62-getfightingpowerchartall) |
| 63        | [ReportSharedData](#63-reportshareddata)                 |
| 64        | GetSharedDataMeta                                        |

### (45) PostProfile
#### Request

| Type                        | Name  |
| --------------------------- | ----- |
| [DataStorePostProfileParam] | param |

#### Response
This method does not return anything.

### (46) GetProfiles
#### Request

| Type                 | Name    |
| -------------------- | ------- |
| [List]&lt;Uint32&gt; | pidList |

#### Response

| Type                                 | Name         |
| ------------------------------------ | ------------ |
| [List]&lt;[DataStoreProfileInfo]&gt; | pProfileList |

### (47) SendPlayReport
#### Request

| Type                 | Name       |
| -------------------- | ---------- |
| [List]&lt;Sint32&gt; | playReport |

#### Response
This method does not return anything.

### (48) GetWorldPlayReport
#### Request
This method does not take any parameters.

#### Response

| Type                 | Name        |
| -------------------- | ----------- |
| [List]&lt;Sint64&gt; | pPlayReport |

### (49) GetReplayMeta
#### Request

| Type                          | Name  |
| ----------------------------- | ----- |
| [DataStoreGetReplayMetaParam] | param |

#### Response

| Type                      | Name      |
| ------------------------- | --------- |
| [DataStoreReplayMetaInfo] | pMetaInfo |

### (50) PrepareGetReplay
#### Request

| Type                             | Name  |
| -------------------------------- | ----- |
| [DataStorePrepareGetReplayParam] | param |

#### Response

| Type                  | Name        |
| --------------------- | ----------- |
| [DataStoreReqGetInfo] | pReqGetInfo |

### (51) PreparePostReplay
#### Request

| Type                              | Name  |
| --------------------------------- | ----- |
| [DataStorePreparePostReplayParam] | param |

#### Response

| Type                        | Name         |
| --------------------------- | ------------ |
| [DataStorePreparePostParam] | pPostParam   |
| [DataStoreReqPostInfo]      | pReqPostInfo |

### (52) CompletePostReplay
#### Request

| Type                               | Name  |
| ---------------------------------- | ----- |
| [DataStoreCompletePostReplayParam] | param |

#### Response
This method does not return anything.

### (53) CheckPostReplay
#### Request

| Type                              | Name  |
| --------------------------------- | ----- |
| [DataStorePreparePostReplayParam] | param |

#### Response

| Type | Name        |
| ---- | ----------- |
| Bool | pIsRequired |
| Bool | pIsRare     |

### (54) GetNextReplay
#### Request
This method does not take any parameters.

#### Response

| Type                      | Name      |
| ------------------------- | --------- |
| [DataStoreReplayMetaInfo] | pMetaInfo |

### (55) PreparePostSharedData
#### Request

| Type                                  | Name  |
| ------------------------------------- | ----- |
| [DataStorePreparePostSharedDataParam] | param |

#### Response

| Type                        | Name         |
| --------------------------- | ------------ |
| [DataStorePreparePostParam] | pPostParam   |
| [DataStoreReqPostInfo]      | pReqPostInfo |

### (56) CompletePostSharedData
#### Request

| Type                                   | Name  |
| -------------------------------------- | ----- |
| [DataStoreCompletePostSharedDataParam] | param |

#### Response
This method does not return anything.

### (57) SearchSharedData
#### Request

| Type                             | Name  |
| -------------------------------- | ----- |
| [DataStoreSearchSharedDataParam] | param |

#### Response

| Type                                    | Name                |
| --------------------------------------- | ------------------- |
| [List]&lt;[DataStoreSharedDataInfo]&gt; | pSharedDataInfoList |

### (58) GetApplicationConfig
#### Request

| Type   | Name          |
| ------ | ------------- |
| Uint32 | applicationId |

#### Response

| Type                   | Name   |
| ---------------------- | ------ |
| [List]&lt;[String]&gt; | config |

### (59) SearchReplay
#### Request

| Type                         | Name  |
| ---------------------------- | ----- |
| [DataStoreSearchReplayParam] | param |

#### Response

| Type                                           | Name            |
| ---------------------------------------------- | --------------- |
| [List]&lt;[DataStorePrepareGetReplayParam]&gt; | pGetReplayParam |

### (60) PostFightingPowerScore
#### Request

| Type                                                 | Name   |
| ---------------------------------------------------- | ------ |
| [List]&lt;[DataStorePostFightingPowerScoreParam]&gt; | params |

#### Response
This method does not return anything.

### (61) GetFightingPowerChart
#### Request

| Type  | Name |
| ----- | ---- |
| Uint8 | mode |

#### Response

| Type                                        | Name     |
| ------------------------------------------- | -------- |
| Uint32                                      | pUserNum |
| [List]&lt;[DataStoreFightingPowerScore]&gt; | pChart   |

### (62) GetFightingPowerChartAll
#### Request
This method does not take any parameters.

#### Response

| Type                                        | Name   |
| ------------------------------------------- | ------ |
| [List]&lt;[DataStoreFightingPowerChart]&gt; | pChart |

### (63) ReportSharedData
#### Request

| Type   | Name   |
| ------ | ------ |
| Uint64 | dataId |

#### Response
This method does not return anything.

## Types
### DataStorePostProfileParam ([Structure])

| Type      | Name    |
| --------- | ------- |
| [qBuffer] | profile |

### DataStoreProfileInfo ([Structure])

| Type      | Name    |
| --------- | ------- |
| Uint32    | pid     |
| [qBuffer] | profile |

### DataStoreReplayMetaInfo ([Structure])

| Type                                  | Name       |
| ------------------------------------- | ---------- |
| Uint64                                | replayId   |
| Uint32                                | size       |
| Uint8                                 | mode       |
| Uint8                                 | style      |
| Uint8                                 | rule       |
| Uint8                                 | stage      |
| Uint8                                 | replayType |
| [List]&lt;[DataStoreReplayPlayer]&gt; | players    |
| [List]&lt;Uint32&gt;                  | winners    |

### DataStoreGetReplayMetaParam ([Structure])

| Type   | Name     |
| ------ | -------- |
| Uint64 | replayId |
| Uint8  | metaType |

### DataStorePrepareGetReplayParam ([Structure])

| Type                   | Name      |
| ---------------------- | --------- |
| Uint64                 | replayId  |
| [List]&lt;[String]&gt; | extraData |

### DataStorePreparePostReplayParam ([Structure])

| Type                                  | Name          |
| ------------------------------------- | ------------- |
| Uint32                                | size          |
| Uint8                                 | mode          |
| Uint8                                 | style         |
| Uint8                                 | rule          |
| Uint8                                 | stage         |
| Uint8                                 | replayType    |
| Uint64                                | competitionId |
| Sint32                                | score         |
| [List]&lt;[DataStoreReplayPlayer]&gt; | players       |
| [List]&lt;Uint32&gt;                  | winners       |
| Uint16                                | keyVersion    |
| [List]&lt;[String]&gt;                | extraData     |

### DataStoreCompletePostReplayParam ([Structure])

| Type                              | Name          |
| --------------------------------- | ------------- |
| Uint64                            | replayId      |
| [DataStoreCompletePostParam]      | completeParam |
| [DataStorePreparePostReplayParam] | prepareParam  |

### DataStorePreparePostSharedDataParam ([Structure])

| Type                   | Name       |
| ---------------------- | ---------- |
| Uint8                  | dataType   |
| Uint8                  | region     |
| Uint8                  | attribute1 |
| Uint8                  | attribute2 |
| [Buffer]               | fighter    |
| Uint32                 | size       |
| [String]               | comment    |
| [qBuffer]              | metaBinary |
| [List]&lt;[String]&gt; | extraData  |

### DataStoreCompletePostSharedDataParam ([Structure])

| Type                                  | Name          |
| ------------------------------------- | ------------- |
| Uint64                                | dataId        |
| [DataStoreCompletePostParam]          | completeParam |
| [DataStorePreparePostSharedDataParam] | prepareParam  |

### DataStoreSearchSharedDataParam ([Structure])

| Type                                                 | Name        |
| ---------------------------------------------------- | ----------- |
| Uint8                                                | dataType    |
| Uint32                                               | owner       |
| Uint8                                                | region      |
| Uint8                                                | attribute1  |
| Uint8                                                | attribute2  |
| Uint8                                                | fighter     |
| [ResultRange](/docs/nex/types#resultrange-structure) | resultRange |

### DataStoreSharedDataInfo ([Structure])

| Type                            | Name        |
| ------------------------------- | ----------- |
| Uint64                          | dataId      |
| Uint32                          | ownerId     |
| Uint8                           | dataType    |
| [String]                        | comment     |
| [qBuffer]                       | metaBinary  |
| [qBuffer]                       | profile     |
| Sint64                          | rating      |
| [DateTime]                      | createdTime |
| [DataStoreFileServerObjectInfo] | info        |

### DataStoreSearchReplayParam ([Structure])

| Type                                                 | Name        |
| ---------------------------------------------------- | ----------- |
| Uint8                                                | mode        |
| Uint8                                                | style       |
| Uint8                                                | fighter     |
| [ResultRange](/docs/nex/types#resultrange-structure) | resultRange |

### DataStorePostFightingPowerScoreParam ([Structure])

| Type   | Name             |
| ------ | ---------------- |
| Uint8  | mode             |
| Uint32 | score            |
| Bool   | isWorldHighScore |

### DataStoreFightingPowerScore ([Structure])

| Type   | Name  |
| ------ | ----- |
| Uint32 | score |
| Uint32 | rank  |

### DataStoreFightingPowerChart ([Structure])

| Type                                        | Name    |
| ------------------------------------------- | ------- |
| Uint32                                      | userNum |
| [List]&lt;[DataStoreFightingPowerScore]&gt; | chart   |

### DataStoreReplayPlayer ([Structure])

| Type   | Name        |
| ------ | ----------- |
| Uint8  | fighter     |
| Uint8  | health      |
| Uint16 | winningRate |
| Uint8  | color       |
| Uint8  | color2      |
| Uint32 | principalId |
| Uint32 | country     |
| Uint8  | region      |
| Uint8  | number      |

### DataStoreFileServerObjectInfo ([Structure])

| Type                  | Name    |
| --------------------- | ------- |
| Uint64                | dataId  |
| [DataStoreReqGetInfo] | getInfo |

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

[DataStorePostProfileParam]: #datastorepostprofileparam-structure
[DataStoreProfileInfo]: #datastoreprofileinfo-structure
[DataStoreGetReplayMetaParam]: #datastoregetreplaymetaparam-structure
[DataStoreReplayMetaInfo]: #datastorereplaymetainfo-structure
[DataStorePrepareGetReplayParam]: #datastorepreparegetreplayparam-structure
[DataStorePreparePostReplayParam]: #datastorepreparepostreplayparam-structure
[DataStoreCompletePostReplayParam]: #datastorecompletepostreplayparam-structure
[DataStorePreparePostSharedDataParam]: #datastorepreparepostshareddataparam-structure
[DataStoreCompletePostSharedDataParam]: #datastorecompletepostshareddataparam-structure
[DataStoreSearchSharedDataParam]: #datastoresearchshareddataparam-structure
[DataStoreSharedDataInfo]: #datastoreshareddatainfo-structure
[DataStoreSearchReplayParam]: #datastoresearchreplayparam-structure
[DataStorePostFightingPowerScoreParam]: #datastorepostfightingpowerscoreparam-structure
[DataStoreFightingPowerScore]: #datastorefightingpowerscore-structure
[DataStoreFightingPowerChart]: #datastorefightingpowerchart-structure
[DataStoreReplayPlayer]: #datastorereplayplayer-structure
[DataStoreFileServerObjectInfo]: #datastorefileserverobjectinfo-structure

[DataStoreReqGetInfo]: /docs/nex/protocols/datastore#datastorereqgetinfo-structure
[DataStoreReqPostInfo]: /docs/nex/protocols/datastore#datastorereqpostinfo-structure
[DataStorePreparePostParam]: /docs/nex/protocols/datastore#datastorepreparepostparam-structure
[DataStoreCompletePostParam]: /docs/nex/protocols/datastore#datastorecompletepostparam-structure
