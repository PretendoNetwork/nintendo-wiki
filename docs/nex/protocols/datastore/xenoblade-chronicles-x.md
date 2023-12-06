---
layout: post
toc: true
title: Xenoblade Chronicles X (115)
---

This page describes the methods that are only seen in Xenoblade Chronicles X. Parts of the protocol has been renamed from `DataStoreProtocol` to `SocialDataStoreProtocol`.

## Methods

| Method ID | Method Name                                                      |
|-----------|------------------------------------------------------------------|
| 43        | [SearchRentalObject](#43-searchrentalobject)                     |
| 44        | [UploadRentalObject](#44-uploadrentalobject)                     |
| 45        | [GetRentalObject](#45-getrentalobject)                           |
| 46        | [DisableRentalObject](#46-disablerentalobject)                   |
| 47        | [BorrowRentalObject](#47-borrowrentalobject)                     |
| 48        | [GetBorrowingRentalObject](#48-getborrowingrentalobject)         |
| 49        | [ReturnBorrowingRentalObject](#49-returnborrowingrentalobject)   |
| 50        | [GetPeriodicRating](#50-getperiodicrating)                       |
| 51        | [RatePeriodicObject](#51-rateperiodicobject)                     |
| 52        | [SearchRentalObjectByDataId](#52-searchrentalobjectbydataid)     |
| 53        | [SearchScheduledObject](#53-searchscheduledobject)               |
| 54        | [PostScheduledObject](#54-postscheduledobject)                   |
| 55        | [RequestPost_Lazy](#55-requestpost_lazy)                         |
| 56        | [GetPeriodicRatingWithOffset](#56-getperiodicratingwithoffset)   |
| 57        | [RatePeriodicObjectWithOffset](#57-rateperiodicobjectwithoffset) |
| 58        | [DebugUploadRentalObject](#58-debuguploadrentalobject)           |
| 59        | [IsOliveCommunityExists](#59-isolivecommunityexists)             |
| 60        | [ReplaceMetaBinaryWithDataId](#60-replacemetabinarywithdataid)   |
| 61        | [DebugChangeMeta](#61-debugchangemeta)                           |

### (43) SearchRentalObject
#### Request

| Type                                                          | Name  |
|---------------------------------------------------------------|-------|
| [RentalObjectSearchParam](#rentalobjectsearchparam-structure) | param |

#### Response

| Type                                                            | Name    |
|-----------------------------------------------------------------|---------|
| [RentalObjectSearchResult](#rentalobjectsearchresult-structure) | results |

### (44) UploadRentalObject
#### Request

| Type                                                          | Name  |
|---------------------------------------------------------------|-------|
| [RentalObjectUploadParam](#rentalobjectuploadparam-structure) | param |

#### Response

| Type   | Name    |
|--------|---------|
| Uint64 | Data ID |

### (45) GetRentalObject
#### Request
This method does not take any parameters.

#### Response

| Type                                            | Name          |
|-------------------------------------------------|---------------|
| [RentalObjectInfo](#rentalobjectinfo-structure) | Rental object |

### (46) DisableRentalObject
This method does not take any parameters and does not return anything.

### (47) BorrowRentalObject
#### Request

| Type   | Name    |
|--------|---------|
| Uint64 | Data ID |

#### Response
This method does not return anything.

### (48) GetBorrowingRentalObject
#### Request
This method does not take any parameters.

#### Response

| Type                                                          | Name    |
|---------------------------------------------------------------|---------|
| [List]&lt;[RentalObjectInfo](#rentalobjectinfo-structure)&gt; | Unknown |
| [List]&lt;Uint64&gt;                                          | Unknown |

### (49) ReturnBorrowingRentalObject
#### Request

| Type   | Name    |
|--------|---------|
| Uint64 | Data ID |

#### Response
This method does not return anything.

### (50) GetPeriodicRating
#### Request

| Type   | Name    |
|--------|---------|
| Sint8  | Unknown |
| Sint32 | Unknown |

#### Response

| Type                               | Name    |
|------------------------------------|---------|
| [List]&lt;[List]&lt;Uint64&gt;&gt; | Unknown |
| [List]&lt;Uint64&gt;               | Unknown |

### (51) RatePeriodicObject
#### Request

| Type   | Name    |
|--------|---------|
| Sint8  | Unknown |
| Sint8  | Unknown |
| Sint32 | Unknown |

#### Response

| Type   | Name    |
|--------|---------|
| Uint64 | Unknown |
| Uint64 | Unknown |

### (52) SearchRentalObjectByDataId
#### Request

| Type                                                          | Name    |
|---------------------------------------------------------------|---------|
| Uint64                                                        | Data ID |
| [RentalObjectSearchParam](#rentalobjectsearchparam-structure) | param   |

#### Response

| Type                                                            | Name    |
|-----------------------------------------------------------------|---------|
| [RentalObjectSearchResult](#rentalobjectsearchresult-structure) | results |

### (53) SearchScheduledObject
#### Request

| Type                   | Name  |
|------------------------|-------|
| [DataStoreSearchParam] | param |

#### Response

| Type                              | Name    |
|-----------------------------------|---------|
| [List]&lt;[DataStoreMetaInfo]&gt; | Objects |

### (54) PostScheduledObject
#### Request

| Type                        | Name           |
|-----------------------------|----------------|
| [DataStorePreparePostParam] | param          |
| [DateTime]                  | Scheduled time |

#### Response

| Type   | Name    |
|--------|---------|
| Uint64 | Data ID |

### (55) RequestPost_Lazy
#### Request

| Type                                            | Name           |
|-------------------------------------------------|----------------|
| [RequestPostParam](#requestpostparam-structure) | param          |
| [DateTime]                                      | Scheduled time |

#### Response

| Type     | Name    |
|----------|---------|
| [String] | Unknown |

### (56) GetPeriodicRatingWithOffset
#### Request

| Type   | Name    |
|--------|---------|
| Uint32 | Unknown |
| Sint32 | Unknown |
| Sint32 | Unknown |

#### Response

| Type                               | Name    |
|------------------------------------|---------|
| [List]&lt;[List]&lt;Uint64&gt;&gt; | Unknown |
| [List]&lt;Uint64&gt;               | Unknown |

### (57) RatePeriodicObjectWithOffset
#### Request

| Type   | Name    |
|--------|---------|
| Uint32 | Unknown |
| Sint32 | Unknown |
| Sint8  | Unknown |
| Sint32 | Unknown |

#### Response

| Type   | Name    |
|--------|---------|
| Uint64 | Unknown |
| Uint64 | Unknown |

### (58) DebugUploadRentalObject
#### Request

| Type                                                          | Name    |
|---------------------------------------------------------------|---------|
| [RentalObjectUploadParam](#rentalobjectuploadparam-structure) | param   |
| Uint32                                                        | Unknown |

#### Response

| Type   | Name    |
|--------|---------|
| Uint64 | Data ID |

### (59) IsOliveCommunityExists
#### Request

| Type                 | Name                   |
|----------------------|------------------------|
| [List]&lt;Uint32&gt; | Miiverse community IDs |
| Uint32               | Unknown                |

#### Response

| Type               | Name    |
|--------------------|---------|
| [List]&lt;Bool&gt; | Results |

### (60) ReplaceMetaBinaryWithDataId
#### Request

| Type                        | Name    |
|-----------------------------|---------|
| Uint64                      | Data ID |
| [DataStorePreparePostParam] | param   |

#### Response
This method does not return anything.

### (61) DebugChangeMeta
#### Request

| Type                                                                      | Name  |
|---------------------------------------------------------------------------|-------|
| [DebugDataStoreChangeMetaParam](#debugdatastorechangemetaparam-structure) | param |

#### Response
This method does not return anything.


## Types
### RentalObjectInfo ([Structure])

| Type                 | Name    |
|----------------------|---------|
| Uint64               | Data ID |
| Uint32               | Unknown |
| Uint32               | Unknown |
| [String]             | Unknown |
| Uint16               | Unknown |
| [qBuffer]            | Unknown |
| [DateTime]           | Unknown |
| [DateTime]           | Unknown |
| Uint16               | Unknown |
| Uint8                | Unknown |
| Uint32               | Unknown |
| Uint64               | Unknown |
| Uint32               | Unknown |
| [DateTime]           | Unknown |
| [DateTime]           | Unknown |
| [List]&lt;Uint32&gt; | Unknown |

### RentalObjectSearchCondition ([Structure])

| Type   | Name    |
|--------|---------|
| Uint32 | Unknown |
| Uint32 | Unknown |
| Uint32 | Unknown |
| Uint32 | Unknown |

### RentalObjectSearchParam ([Structure])

| Type                                                                                | Name         |
|-------------------------------------------------------------------------------------|--------------|
| [List]&lt;[RentalObjectSearchCondition](#rentalobjectsearchcondition-structure)&gt; | Conditions   |
| [List]&lt;Uint32&gt;                                                                | Unknown      |
| Uint8                                                                               | Unknown      |
| [ResultRange]                                                                       | Result range |

### RentalObjectSearchResult ([Structure])

| Type                                                          | Name    |
|---------------------------------------------------------------|---------|
| Uint32                                                        | Unknown |
| [List]&lt;[RentalObjectInfo](#rentalobjectinfo-structure)&gt; | Results |
| Uint8                                                         | Unknown |

### RentalObjectUploadParam ([Structure])

| Type                 | Name    |
|----------------------|---------|
| [String]             | Unknown |
| [qBuffer]            | Unknown |
| [List]&lt;Uint32&gt; | Unknown |

### RequestPostParam ([Structure])

| Type                   | Name    |
|------------------------|---------|
| Uint32                 | Unknown |
| Sint32                 | Unknown |
| [qBuffer]              | Unknown |
| [String]               | Unknown |
| Uint32                 | Unknown |
| Uint32                 | Unknown |
| Uint8                  | Unknown |
| Uint8                  | Unknown |
| [qBuffer]              | Unknown |
| [qBuffer]              | Unknown |
| [List]&lt;[String]&gt; | Unknown |
| [String]               | Unknown |

### DebugDataStoreChangeMetaParam ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [DataStoreChangeMetaParam]
{: .prompt-info }

| Type       | Name    |
|------------|---------|
| Uint32     | Unknown |
| [DateTime] | Unknown |
| [DateTime] | Unknown |
| [DateTime] | Unknown |
| [DateTime] | Unknown |
| Uint32     | Unknown |

[Structure]: /docs/nex/types#structure
[String]: /docs/nex/types#string
[List]: /docs/nex/types#list
[qBuffer]: /docs/nex/types#qbuffer
[DateTime]: /docs/nex/types#datetime
[ResultRange]: /docs/nex/types#resultrange-structure

[DataStoreSearchParam]: /docs/nex/protocols/datastore/types#datastoresearchparam-structure
[DataStoreMetaInfo]: /docs/nex/protocols/datastore/types#datastoremetainfo-structure
[DataStorePreparePostParam]: /docs/nex/protocols/datastore/types#datastorepreparepostparam-structure
[DataStoreChangeMetaParam]: /docs/nex/protocols/datastore/types#datastorechangemetaparam-structure
