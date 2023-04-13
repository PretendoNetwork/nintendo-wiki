---
layout: post
toc: true
title: Pokemon X / Y (115)
---

This page describes the methods that are only seen in Pokemon X and Y.

## Methods

| Method ID | Method Name                                      |
| --------- | ------------------------------------------------ |
| 40        | [PrepareUploadPokemon](#40-prepareuploadpokemon) |
| 41        | [UploadPokemon](#41-uploadpokemon)               |
| 42        | [SearchPokemon](#42-searchpokemon)               |
| 43        | [PrepareTradePokemon](#43-preparetradepokemon)   |
| 44        | [TradePokemon](#44-tradepokemon)                 |
| 45        | [DownloadOtherPokemon](#45-downloadotherpokemon) |
| 46        | [DownloadMyPokemon](#46-downloadmypokemon)       |
| 47        | [DeletePokemon](#47-deletepokemon)               |

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

| Type                                                 | Name              |
| ---------------------------------------------------- | ----------------- |
| [GlobalTradeStationRecordKey]                        | prepareUploadKey  |
| [List]&lt;Uint32&gt;                                 | conditions        |
| Uint8                                                | resultOrderColumn |
| Uint8                                                | resultOrder       |
| [DateTime]                                           | uploadedAfter     |
| [DateTime]                                           | uploadedBefore    |
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
[GlobalTradeStationData]: #globaltradestationdata-structure
[GlobalTradeStationTradeKey]: #globaltradestationtradekey-structure
[GlobalTradeStationDownloadPokemonResult]: #globaltradestationdownloadpokemonresult-structure
