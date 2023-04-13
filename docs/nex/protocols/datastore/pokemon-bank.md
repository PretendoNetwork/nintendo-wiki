---
layout: post
toc: true
title: Pokemon Bank (115)
---

This page describes the methods that are only seen in Pokemon Bank.

## Methods

| Method ID | Method Name                                              |
| --------- | -------------------------------------------------------- |
| 40        | [PrepareUploadPokemon](#40-prepareuploadpokemon)         |
| 41        | [UploadPokemon](#41-uploadpokemon)                       |
| 42        | [SearchPokemon](#42-searchpokemon)                       |
| 43        | [PrepareTradePokemon](#43-preparetradepokemon)           |
| 44        | [TradePokemon](#44-tradepokemon)                         |
| 45        | [DownloadOtherPokemon](#45-downloadotherpokemon)         |
| 46        | [DownloadMyPokemon](#46-downloadmypokemon)               |
| 47        | [DeletePokemon](#47-deletepokemon)                       |
| 48        | [GetTransactionParam](#48-gettransactionparam)           |
| 49        | [PreparePostBankObject](#49-preparepostbankobject)       |
| 50        | [CompletePostBankObject](#50-completepostbankobject)     |
| 51        | [PrepareGetBankObject](#51-preparegetbankobject)         |
| 52        | [PrepareUpdateBankObject](#52-prepareupdatebankobject)   |
| 53        | [CompleteUpdateBankObject](#53-completeupdatebankobject) |
| 54        | [RollbackBankObject](#54-rollbackbankobject)             |
| 55        | [GetUnlockKey](#55-getunlockkey)                         |
| 56        | [RequestMigration](#56-requestmigration)                 |
| 57        | [GetMigrationStatus](#57-getmigrationstatus)             |

### (40) PrepareUploadPokemon
#### Request
This method does not take any parameters.

#### Response

| Type                          | Name       |
| ----------------------------- | ---------- |
| [GlobalTradeStationRecordKey] | pRecordKey |

### (41) UploadPokemon
#### Request

| Type                                   | Name  |
| -------------------------------------- | ----- |
| [GlobalTradeStationUploadPokemonParam] | param |

#### Response
This method does not return anything.

### (42) SearchPokemon
#### Request

| Type                                   | Name  |
| -------------------------------------- | ----- |
| [GlobalTradeStationSearchPokemonParam] | param |

#### Response

| Type                                    | Name    |
| --------------------------------------- | ------- |
| [GlobalTradeStationSearchPokemonResult] | pResult |

### (43) PrepareTradePokemon
#### Request

| Type                                         | Name  |
| -------------------------------------------- | ----- |
| [GlobalTradeStationPrepareTradePokemonParam] | param |

#### Response

| Type                                          | Name    |
| --------------------------------------------- | ------- |
| [GlobalTradeStationPrepareTradePokemonResult] | pResult |

### (44) TradePokemon
#### Request

| Type                                  | Name  |
| ------------------------------------- | ----- |
| [GlobalTradeStationTradePokemonParam] | param |

#### Response

| Type                                   | Name    |
| -------------------------------------- | ------- |
| [GlobalTradeStationTradePokemonResult] | pResult |

### (45) DownloadOtherPokemon
#### Request

| Type                                          | Name  |
| --------------------------------------------- | ----- |
| [GlobalTradeStationDownloadOtherPokemonParam] | param |

#### Response

| Type                                   | Name    |
| -------------------------------------- | ------- |
| [GlobalTradeStationTradePokemonResult] | pResult |

### (46) DownloadMyPokemon
#### Request

| Type                                       | Name  |
| ------------------------------------------ | ----- |
| [GlobalTradeStationDownloadMyPokemonParam] | param |

#### Response

| Type                                        | Name    |
| ------------------------------------------- | ------- |
| [GlobalTradeStationDownloadMyPokemonResult] | pResult |

### (47) DeletePokemon
#### Request

| Type                                   | Name  |
| -------------------------------------- | ----- |
| [GlobalTradeStationDeletePokemonParam] | param |

#### Response
This method does not return anything.

### (48) GetTransactionParam
#### Request

| Type   | Name   |
| ------ | ------ |
| Uint16 | slotId |

#### Response

| Type                   | Name              |
| ---------------------- | ----------------- |
| [BankTransactionParam] | pTransactionParam |
| Uint32                 | pStatus           |
| Uint16                 | pApplicationId    |

### (49) PreparePostBankObject
#### Request

| Type   | Name   |
| ------ | ------ |
| Uint16 | slotId |
| Uint32 | size   |

#### Response

| Type                   | Name         |
| ---------------------- | ------------ |
| [DataStoreReqPostInfo] | pReqPostInfo |

### (50) CompletePostBankObject
#### Request

| Type                         | Name  |
| ---------------------------- | ----- |
| [DataStoreCompletePostParam] | param |

#### Response
This method does not return anything.

### (51) PrepareGetBankObject
#### Request

| Type   | Name          |
| ------ | ------------- |
| Uint16 | slotId        |
| Uint16 | applicationId |

#### Response

| Type                   | Name              |
| ---------------------- | ----------------- |
| [BankTransactionParam] | pTransactionParam |
| [DataStoreReqGetInfo]  | pReqGetInfo       |

### (52) PrepareUpdateBankObject
#### Request

| Type                   | Name             |
| ---------------------- | ---------------- |
| [BankTransactionParam] | transactionParam |

#### Response

| Type                     | Name              |
| ------------------------ | ----------------- |
| [BankTransactionParam]   | pTransactionParam |
| [DataStoreReqUpdateInfo] | pReqUpdateInfo    |

### (53) CompleteUpdateBankObject
#### Request

| Type                   | Name             |
| ---------------------- | ---------------- |
| Uint16                 | slotId           |
| [BankTransactionParam] | transactionParam |
| Bool                   | isForce          |

#### Response
This method does not return anything.

### (54) RollbackBankObject
#### Request

| Type                   | Name             |
| ---------------------- | ---------------- |
| Uint16                 | slotId           |
| [BankTransactionParam] | transactionParam |
| Bool                   | isForce          |

#### Response
This method does not return anything.

### (55) GetUnlockKey
#### Request

| Type   | Name           |
| ------ | -------------- |
| Uint32 | challengeValue |

#### Response

| Type                 | Name           |
| -------------------- | -------------- |
| [List]&lt;Uint32&gt; | pUnlockKeyList |

### (56) RequestMigration
#### Request

| Type                 | Name            |
| -------------------- | --------------- |
| [String]             | oneTimePassword |
| [List]&lt;Uint32&gt; | boxes           |

#### Response

| Type   | Name       |
| ------ | ---------- |
| Uint32 | detailCode |

### (57) GetMigrationStatus
#### Request
This method does not take any parameters.

#### Response

| Type                | Name       |
| ------------------- | ---------- |
| [BankMigrationInfo] | pInfo      |
| Uint32              | detailCode |

## Types
### GlobalTradeStationRecordKey ([Structure])

| Type   | Name     |
| ------ | -------- |
| Uint64 | dataId   |
| Uint64 | password |

### GlobalTradeStationUploadPokemonParam ([Structure])

| Type                          | Name             |
| ----------------------------- | ---------------- |
| [GlobalTradeStationRecordKey] | prepareUploadKey |
| Uint16                        | period           |
| [qBuffer]                     | indexData        |
| [qBuffer]                     | pokemonData      |
| [qBuffer]                     | signature        |

### GlobalTradeStationSearchPokemonParam ([Structure])

| Type                                                  | Name              |
| ----------------------------------------------------- | ----------------- |
| [GlobalTradeStationRecordKey]                         | prepareUploadKey  |
| [List]&lt;Uint32&gt;                                  | conditions        |
| Uint8                                                 | resultOrderColumn |
| Uint8                                                 | resultOrder       |
| [DateTime]                                            | uploadedAfter     |
| [DateTime]                                            | uploadedBefore    |
| [ResultRange](/docs/nex/types#resultrange-structure) | resultRange       |

### GlobalTradeStationSearchPokemonResult ([Structure])

| Type                                   | Name           |
| -------------------------------------- | -------------- |
| Uint32                                 | totalCount     |
| [List]&lt;[GlobalTradeStationData]&gt; | result         |
| Uint8                                  | totalCountType |

### GlobalTradeStationTradePokemonParam ([Structure])

| Type                          | Name             |
| ----------------------------- | ---------------- |
| [GlobalTradeStationTradeKey]  | tradeKey         |
| [GlobalTradeStationRecordKey] | prepareTradeKey  |
| [GlobalTradeStationRecordKey] | prepareUploadKey |
| Uint16                        | period           |
| [qBuffer]                     | indexData        |
| [qBuffer]                     | pokemonData      |
| [qBuffer]                     | signature        |
| Bool                          | needData         |

### GlobalTradeStationDownloadOtherPokemonParam ([Structure])

| Type                          | Name             |
| ----------------------------- | ---------------- |
| [GlobalTradeStationRecordKey] | prepareUploadKey |

### GlobalTradeStationDownloadMyPokemonParam ([Structure])

| Type                          | Name             |
| ----------------------------- | ---------------- |
| [GlobalTradeStationRecordKey] | prepareUploadKey |

### GlobalTradeStationTradePokemonResult ([Structure])

| Type                                      | Name     |
| ----------------------------------------- | -------- |
| [GlobalTradeStationDownloadPokemonResult] | result   |
| Uint64                                    | myDataId |

### GlobalTradeStationDownloadMyPokemonResult ([Structure])

| Type                                      | Name     |
| ----------------------------------------- | -------- |
| [GlobalTradeStationDownloadPokemonResult] | result   |
| Bool                                      | isTraded |

### GlobalTradeStationPrepareTradePokemonParam ([Structure])

| Type                          | Name             |
| ----------------------------- | ---------------- |
| [GlobalTradeStationTradeKey]  | tradeKey         |
| [GlobalTradeStationRecordKey] | prepareUploadKey |

### GlobalTradeStationPrepareTradePokemonResult ([Structure])

| Type                                      | Name            |
| ----------------------------------------- | --------------- |
| [GlobalTradeStationDownloadPokemonResult] | result          |
| [GlobalTradeStationRecordKey]             | prepareTradeKey |

### GlobalTradeStationDeletePokemonParam ([Structure])

| Type                          | Name             |
| ----------------------------- | ---------------- |
| [GlobalTradeStationRecordKey] | prepareUploadKey |
| Uint8                         | deleteFlag       |

### BankTransactionParam ([Structure])

| Type   | Name                |
| ------ | ------------------- |
| Uint64 | dataId              |
| Uint32 | curVersion          |
| Uint32 | updateVersion       |
| Uint32 | size                |
| Uint64 | transactionPassword |

### BankMigrationInfo ([Structure])

| Type       | Name            |
| ---------- | --------------- |
| Uint32     | migrationStatus |
| [DateTime] | updatedTime     |

### GlobalTradeStationTradeKey ([Structure])

| Type   | Name    |
| ------ | ------- |
| Uint64 | dataId  |
| Uint32 | version |

### GlobalTradeStationData ([Structure])

| Type       | Name        |
| ---------- | ----------- |
| Uint64     | dataId      |
| Uint32     | ownerId     |
| [DateTime] | updatedTime |
| [qBuffer]  | indexData   |
| Uint32     | version     |

### GlobalTradeStationDownloadPokemonResult ([Structure])

| Type      | Name        |
| --------- | ----------- |
| Uint64    | dataId      |
| [qBuffer] | indexData   |
| [qBuffer] | pokemonData |

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

[DataStorePrepareGetParamV1]: /docs/nex/protocols/datastore#datastorepreparegetparamv1-structure
[DataStoreReqGetInfo]: /docs/nex/protocols/datastore#datastorereqgetinfo-structure
[DataStorePreparePostParamV1]: /docs/nex/protocols/datastore#datastorepreparepostparamv1-structure
[DataStoreReqPostInfoV1]: /docs/nex/protocols/datastore#datastorereqpostinfov1-structure
[DataStoreCompletePostParamV1]: /docs/nex/protocols/datastore#datastorecompletepostparamv1-structure
[DataStoreDeleteParam]: /docs/nex/protocols/datastore#datastoredeleteparam-structure
[DataStoreChangeMetaParamV1]: /docs/nex/protocols/datastore#datastorechangemetaparamv1-structure
[DataStoreGetMetaParam]: /docs/nex/protocols/datastore#datastoregetmetaparam-structure
[DataStoreMetaInfo]: /docs/nex/protocols/datastore#datastoremetainfo-structure
[DataStorePrepareUpdateParam]: /docs/nex/protocols/datastore#datastoreprepareupdateparam-structure
[DataStoreReqUpdateInfo]: /docs/nex/protocols/datastore#datastorerequpdateinfo-structure
[DataStoreCompleteUpdateParam]: /docs/nex/protocols/datastore#datastorecompleteupdateparam-structure
[DataStoreSearchParam]: /docs/nex/protocols/datastore#datastoresearchparam-structure
[DataStoreSearchResult]: /docs/nex/protocols/datastore#datastoresearchresult-structure
[DataStoreGetNotificationUrlParam]: /docs/nex/protocols/datastore#datastoregetnotificationurlparam-structure
[DataStoreReqGetNotificationUrlInfo]: /docs/nex/protocols/datastore#datastorereqgetnotificationurlinfo-structure
[DataStoreGetNewArrivedNotificationsParam]: /docs/nex/protocols/datastore#datastoregetnewarrivednotificationsparam-structure
[DataStoreNotificationV1]: /docs/nex/protocols/datastore#datastorenotificationv1-structure
[DataStoreRatingTarget]: /docs/nex/protocols/datastore#datastoreratingtarget-structure
[DataStoreRateObjectParam]: /docs/nex/protocols/datastore#datastorerateobjectparam-structure
[DataStoreRatingInfo]: /docs/nex/protocols/datastore#datastoreratinginfo-structure
[DataStoreRatingInfoWithSlot]: /docs/nex/protocols/datastore#datastoreratinginfowithslot-structure
[DataStoreGetSpecificMetaParamV1]: /docs/nex/protocols/datastore#datastoregetspecificmetaparamv1-structure
[DataStoreSpecificMetaInfoV1]: /docs/nex/protocols/datastore#datastorespecificmetainfov1-structure
[DataStorePreparePostParam]: /docs/nex/protocols/datastore#datastorepreparepostparam-structure
[DataStoreTouchObjectParam]: /docs/nex/protocols/datastore#datastoretouchobjectparam-structure
[DataStoreRatingLog]: /docs/nex/protocols/datastore#datastoreratinglog-structure
[DataStoreReqPostInfo]: /docs/nex/protocols/datastore#datastorereqpostinfo-structure
[DataStorePrepareGetParam]: /docs/nex/protocols/datastore#datastorepreparegetparam-structure
[DataStoreCompletePostParam]: /docs/nex/protocols/datastore#datastorecompletepostparam-structure
[DataStoreNotification]: /docs/nex/protocols/datastore#datastorenotification-structure
[DataStoreGetSpecificMetaParam]: /docs/nex/protocols/datastore#datastoregetspecificmetaparam-structure
[DataStoreSpecificMetaInfo]: /docs/nex/protocols/datastore#datastorespecificmetainfo-structure
[DataStorePersistenceInfo]: /docs/nex/protocols/datastore#datastorepersistenceinfo-structure
[DataStoreReqGetAdditionalMeta]: /docs/nex/protocols/datastore#datastorereqgetadditionalmeta-structure
[DataStorePasswordInfo]: /docs/nex/protocols/datastore#datastorepasswordinfo-structure
[DataStoreChangeMetaParam]: /docs/nex/protocols/datastore#datastorechangemetaparam-structure

[GlobalTradeStationRecordKey]: #globaltradestationrecordkey-structure
[GlobalTradeStationUploadPokemonParam]: #globaltradestationuploadpokemonparam-structure
[GlobalTradeStationSearchPokemonParam]: #globaltradestationsearchpokemonparam-structure
[GlobalTradeStationSearchPokemonResult]: #globaltradestationsearchpokemonresult-structure
[GlobalTradeStationPrepareTradePokemonParam]: #globaltradestationpreparetradepokemonparam-structure
[GlobalTradeStationPrepareTradePokemonResult]: #globaltradestationpreparetradepokemonresult-structure
[GlobalTradeStationTradePokemonParam]: #globaltradestationtradepokemonparam-structure
[GlobalTradeStationTradePokemonResult]: #globaltradestationtradepokemonresult-structure
[GlobalTradeStationDownloadOtherPokemonParam]: #globaltradestationdownloadotherpokemonparam-structure
[GlobalTradeStationDownloadMyPokemonParam]: #globaltradestationdownloadmypokemonparam-structure
[GlobalTradeStationDownloadMyPokemonResult]: #globaltradestationdownloadmypokemonresult-structure
[GlobalTradeStationDeletePokemonParam]: #globaltradestationdeletepokemonparam-structure
[BankTransactionParam]: #banktransactionparam-structure
[BankMigrationInfo]: #bankmigrationinfo-structure

[DataStorePersistenceTarget]: /docs/nex/protocols/datastore#datastorepersistencetarget-structure
[DataStoreKeyValue]: /docs/nex/protocols/datastore#datastorekeyvalue-structure
[DataStorePermission]: /docs/nex/protocols/datastore#datastorepermission-structure
[DataStoreRatingInitParamWithSlot]: /docs/nex/protocols/datastore#datastoreratinginitparamwithslot-structure
[DataStorePersistenceInitParam]: /docs/nex/protocols/datastore#datastorepersistenceinitparam-structure
[DataStoreChangeMetaCompareParam]: /docs/nex/protocols/datastore#datastorechangemetacompareparam-structure

[GlobalTradeStationData]: #globaltradestationdata-structure
[GlobalTradeStationTradeKey]: #globaltradestationtradekey-structure
[GlobalTradeStationDownloadPokemonResult]: #globaltradestationdownloadpokemonresult-structure
[DataStoreRatingInitParam]: #datastoreratinginitparam-structure
