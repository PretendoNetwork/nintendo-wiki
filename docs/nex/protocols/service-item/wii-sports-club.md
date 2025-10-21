---
layout: post
toc: true
title: Wii Sports Club (119)
---

## Methods

| Method ID | Method Name                                                    |
| --------- | -------------------------------------------------------------- |
| 1         | [Hello](#1-hello)                                              |
| 2         | [HttpGetRequest](#2-httpgetrequest)                            |
| 3         | [HttpGetResponse](#3-httpgetresponse)                          |
| 4         | [PurchaseServiceItemRequest](#4-purchaseserviceitemrequest)    |
| 5         | [PurchaseServiceItemResponse](#5-purchaseserviceitemresponse)  |
| 6         | [ListServiceItemRequest](#6-listserviceitemrequest)            |
| 7         | [ListServiceItemResponse](#7-listserviceitemresponse)          |
| 8         | [GetBalanceRequest](#8-getbalancerequest)                      |
| 9         | [GetBalanceResponse](#9-getbalanceresponse)                    |
| 10        | [GetPrepurchaseInfoRequest](#10-getprepurchaseinforequest)     |
| 11        | [GetPrepurchaseInfoResponse](#11-getprepurchaseinforesponse)   |
| 12        | [GetServiceItemRightRequest](#12-getserviceitemrightrequest)   |
| 13        | [GetServiceItemRightResponse](#13-getserviceitemrightresponse) |
| 14        | [GetPurchaseHistoryRequest](#14-getpurchasehistoryrequest)     |
| 15        | [GetPurchaseHistoryResponse](#15-getpurchasehistoryresponse)   |
| 16        | [GetNotice](#16-getnotice)                                     |
| 17        | [UpdateAndGetTicketInfo](#17-updateandgetticketinfo)           |
| 18        | [LoadUserInfo](#18-loaduserinfo)                               |
| 19        | [SaveUserInfo](#19-saveuserinfo)                               |
| 20        | [StartChallenge](#20-startchallenge)                           |
| 21        | [EndChallenge](#21-endchallenge)                               |
| 22        | [RequestTicketRestoration](#22-requestticketrestoration)       |

### (1) Hello

#### Request

| Type     | Name |
| -------- | ---- |
| [String] | name |

#### Response

| Type     | Name |
| -------- | ---- |
| [String] | str  |

### (2) HttpGetRequest

#### Request

| Type                                                          | Name |
| ------------------------------------------------------------- | ---- |
| [ServiceItemHttpGetParam](#serviceitemhttpgetparam-structure) | url  |

#### Response

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

### (3) HttpGetResponse

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

#### Response

| Type                                                                | Name     |
| ------------------------------------------------------------------- | -------- |
| [ServiceItemHttpGetResponse](#serviceitemhttpgetresponse-structure) | response |

### (4) PurchaseServiceItemRequest

#### Request

| Type                                                                                  | Name                     |
| ------------------------------------------------------------------------------------- | ------------------------ |
| [ServiceItemPurchaseServiceItemParam](#serviceitempurchaseserviceitemparam-structure) | purchaseServiceItemParam |

#### Response

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

### (5) PurchaseServiceItemResponse

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

#### Response

| Type                                                                                        | Name                        |
| ------------------------------------------------------------------------------------------- | --------------------------- |
| [ServiceItemPurchaseServiceItemResponse](#serviceitempurchaseserviceitemresponse-structure) | purchaseServiceItemResponse |

### (6) ListServiceItemRequest

#### Request

| Type                                                                          | Name                 |
| ----------------------------------------------------------------------------- | -------------------- |
| [ServiceItemListServiceItemParam](#serviceitemlistserviceitemparam-structure) | listServiceItemParam |

#### Response

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

### (7) ListServiceItemResponse

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

#### Response

| Type                                                                                | Name                    |
| ----------------------------------------------------------------------------------- | ----------------------- |
| [ServiceItemListServiceItemResponse](#serviceitemlistserviceitemresponse-structure) | listServiceItemResponse |

### (8) GetBalanceRequest

#### Request

| Type                                                                | Name            |
| ------------------------------------------------------------------- | --------------- |
| [ServiceItemGetBalanceParam](#serviceitemgetbalanceparam-structure) | getBalanceParam |

#### Response

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

### (9) GetBalanceResponse

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

#### Response

| Type                                                                      | Name               |
| ------------------------------------------------------------------------- | ------------------ |
| [ServiceItemGetBalanceResponse](#serviceitemgetbalanceresponse-structure) | getBalanceResponse |

### (10) GetPrepurchaseInfoRequest

#### Request

| Type                                                                                | Name                    |
| ----------------------------------------------------------------------------------- | ----------------------- |
| [ServiceItemGetPrepurchaseInfoParam](#serviceitemgetprepurchaseinfoparam-structure) | getPrepurchaseInfoParam |

#### Response

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

### (11) GetPrepurchaseInfoResponse

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

#### Response

| Type                                                                                      | Name                       |
| ----------------------------------------------------------------------------------------- | -------------------------- |
| [ServiceItemGetPrepurchaseInfoResponse](#serviceitemgetprepurchaseinforesponse-structure) | getPrepurchaseInfoResponse |

### (12) GetServiceItemRightRequest

#### Request

| Type                                                                                  | Name                     |
| ------------------------------------------------------------------------------------- | ------------------------ |
| [ServiceItemGetServiceItemRightParam](#serviceitemgetserviceitemrightparam-structure) | getServiceItemRightParam |

#### Response

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

### (13) GetServiceItemRightResponse

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

#### Response

| Type                                                                                        | Name                        |
| ------------------------------------------------------------------------------------------- | --------------------------- |
| [ServiceItemGetServiceItemRightResponse](#serviceitemgetserviceitemrightresponse-structure) | getServiceItemRightResponse |

### (14) GetPurchaseHistoryRequest

#### Request

| Type                                                                                | Name                    |
| ----------------------------------------------------------------------------------- | ----------------------- |
| [ServiceItemGetPurchaseHistoryParam](#serviceitemgetpurchasehistoryparam-structure) | getPurchaseHistoryParam |

#### Response

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

### (15) GetPurchaseHistoryResponse

#### Request

| Type   | Name      |
| ------ | --------- |
| Uint32 | requestId |

#### Response

| Type                                                                                      | Name                       |
| ----------------------------------------------------------------------------------------- | -------------------------- |
| [ServiceItemGetPurchaseHistoryResponse](#serviceitemgetpurchasehistoryresponse-structure) | getPurchaseHistoryResponse |

### (16) GetNotice

#### Request

| Type                                                              | Name           |
| ----------------------------------------------------------------- | -------------- |
| [ServiceItemGetNoticeParam](#serviceitemgetnoticeparam-structure) | getNoticeParam |

#### Response

| Type                                              | Name   |
| ------------------------------------------------- | ------ |
| [ServiceItemNotice](#serviceitemnotice-structure) | notice |

### (17) UpdateAndGetTicketInfo

#### Request

| Type | Name                   |
| ---- | ---------------------- |
| Bool | forceRetrieveFromEShop |

#### Response

| Type                                                                    | Name        |
| ----------------------------------------------------------------------- | ----------- |
| [List]&lt;[ServiceItemTicketInfo](#serviceitemticketinfo-structure)&gt; | ticketInfos |
| [List]&lt;[ServiceItemEvent](#serviceitemevent-structure)&gt;           | events      |

### (18) LoadUserInfo

#### Request
This method does not take any parameters.

#### Response

| Type                                                  | Name     |
| ----------------------------------------------------- | -------- |
| [ServiceItemUserInfo](#serviceitemuserinfo-structure) | userInfo |

### (19) SaveUserInfo

#### Request

| Type                                                  | Name     |
| ----------------------------------------------------- | -------- |
| [ServiceItemUserInfo](#serviceitemuserinfo-structure) | userInfo |

#### Response
This method does not return anything

### (20) StartChallenge

#### Request

| Type                                                                        | Name                |
| --------------------------------------------------------------------------- | ------------------- |
| [ServiceItemStartChallengeParam](#serviceitemstartchallengeparam-structure) | startChallengeParam |

#### Response
This method does not return anything

### (21) EndChallenge

#### Request

| Type                                                                    | Name              |
| ----------------------------------------------------------------------- | ----------------- |
| [ServiceItemEndChallengeParam](#serviceitemendchallengeparam-structure) | endChallengeParam |

#### Response
This method does not return anything

### (22) RequestTicketRestoration

#### Request

| Type                                                                                            | Name                          |
| ----------------------------------------------------------------------------------------------- | ----------------------------- |
| [ServiceItemRequestTicketRestorationParam](#serviceitemrequestticketrestorationparam-structure) | requestTicketRestorationParam |

#### Response
This method does not return anything

## Types

### ServiceItemHttpGetParam ([Structure])

| Type     | Name |
| -------- | ---- |
| [String] | url  |

### ServiceItemHttpGetResponse ([Structure])

| Type      | Name     |
| --------- | -------- |
| [qBuffer] | response |

### ServiceItemEShopResponse ([Structure])

| Type     | Name          |
| -------- | ------------- |
| Uint32   | httpStatus    |
| Uint32   | errorCode     |
| [String] | correlationId |

### ServiceItemAmount ([Structure])

| Type     | Name            |
| -------- | --------------- |
| [String] | formattedAmount |
| [String] | currency        |
| [String] | rawValue        |

### ServiceItemPurchaseServiceItemParam ([Structure])

| Type     | Name           |
| -------- | -------------- |
| [String] | itemCode       |
| [String] | priceId        |
| [String] | referenceId    |
| [String] | balance        |
| [String] | itemName       |
| [String] | ecServiceToken |
| [String] | language       |
| [String] | titleId        |

### ServiceItemPurchaceInfo ([Structure])

| Type                                              | Name             |
| ------------------------------------------------- | ---------------- |
| [String]                                          | transactionId    |
| [String]                                          | extTransactionId |
| [String]                                          | itemCode         |
| [ServiceItemAmount](#serviceitemamount-structure) | postBalance      |

### ServiceItemPurchaseServiceItemResponse ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [ServiceItemEShopResponse](#serviceitemeshopresponse-structure)
{: .prompt-info }

| Type                                                                        | Name                 |
| --------------------------------------------------------------------------- | -------------------- |
| [List]&lt;[ServiceItemPurchaceInfo](#serviceitempurchaceinfo-structure)&gt; | nullablePurchaceInfo |

### ServiceItemListServiceItemParam ([Structure])

| Type     | Name     |
| -------- | -------- |
| [String] | language |
| Uint32   | offset   |
| Uint32   | size     |
| [String] | titleId  |

### ServiceItemLimitation ([Structure])

| Type   | Name            |
| ------ | --------------- |
| Uint32 | limitationType  |
| Uint32 | limitationValue |

### ServiceItemAttribute ([Structure])

| Type     | Name  |
| -------- | ----- |
| [String] | name  |
| [String] | value |

### ServiceItemListItem ([Structure])

| Type                                                                  | Name                |
| --------------------------------------------------------------------- | ------------------- |
| [String]                                                              | itemCode            |
| [ServiceItemAmount](#serviceitemamount-structure)                     | regularPrice        |
| Bool                                                                  | taxExcluded         |
| Bool                                                                  | initialPurchaseOnly |
| [ServiceItemLimitation](#serviceitemlimitation-structure)             | limitation          |
| [List]&lt;[ServiceItemAttribute](#serviceitemattribute-structure)&gt; | attributes          |

### ServiceItemCatalog ([Structure])

| Type                                                                | Name      |
| ------------------------------------------------------------------- | --------- |
| Uint32                                                              | totalSize |
| Uint32                                                              | offset    |
| [List]&lt;[ServiceItemListItem](#serviceitemlistitem-structure)&gt; | listItems |

### ServiceItemListServiceItemResponse ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [ServiceItemEShopResponse](#serviceitemeshopresponse-structure)
{: .prompt-info }

| Type                                                              | Name            |
| ----------------------------------------------------------------- | --------------- |
| [List]&lt;[ServiceItemCatalog](#serviceitemcatalog-structure)&gt; | nullableCatalog |

### ServiceItemGetBalanceParam ([Structure])

| Type     | Name     |
| -------- | -------- |
| [String] | language |
| [String] | titleId  |

### ServiceItemGetBalanceResponse ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [ServiceItemEShopResponse](#serviceitemeshopresponse-structure)
{: .prompt-info }

| Type                                                            | Name            |
| --------------------------------------------------------------- | --------------- |
| [List]&lt;[ServiceItemAmount](#serviceitemamount-structure)&gt; | nullableBalance |

### ServiceItemGetPrepurchaseInfoParam ([Structure])

| Type     | Name     |
| -------- | -------- |
| [String] | itemCode |
| [String] | language |
| [String] | titleId  |

### ServiceItemPrepurchaseInfo ([Structure])

| Type                                              | Name           |
| ------------------------------------------------- | -------------- |
| [String]                                          | itemCode       |
| [String]                                          | priceId        |
| [ServiceItemAmount](#serviceitemamount-structure) | regularPrice   |
| Bool                                              | isTaxAvailable |
| [ServiceItemAmount](#serviceitemamount-structure) | taxAmount      |
| [ServiceItemAmount](#serviceitemamount-structure) | totalAmount    |
| [ServiceItemAmount](#serviceitemamount-structure) | currentBalance |
| [ServiceItemAmount](#serviceitemamount-structure) | postBalance    |

### ServiceItemGetPrepurchaseInfoResponse ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [ServiceItemEShopResponse](#serviceitemeshopresponse-structure)
{: .prompt-info }

| Type                                                                              | Name                    |
| --------------------------------------------------------------------------------- | ----------------------- |
| [List]&lt;[ServiceItemPrepurchaseInfo](#serviceitemprepurchaseinfo-structure)&gt; | nullablePrepurchaseInfo |

### ServiceItemGetServiceItemRightParam ([Structure])

| Type     | Name        |
| -------- | ----------- |
| [String] | referenceId |
| [String] | titleId     |

### ServiceItemAccountRight ([Structure])

| Type                                                      | Name       |
| --------------------------------------------------------- | ---------- |
| [PID]                                                     | pid        |
| [ServiceItemLimitation](#serviceitemlimitation-structure) | limitation |

### ServiceItemRightInfo ([Structure])

| Type                                                                        | Name          |
| --------------------------------------------------------------------------- | ------------- |
| [String]                                                                    | referenceId   |
| [List]&lt;[ServiceItemAccountRight](#serviceitemaccountright-structure)&gt; | accountRights |

### ServiceItemRightInfos ([Structure])

| Type                                                                  | Name       |
| --------------------------------------------------------------------- | ---------- |
| [List]&lt;[ServiceItemRightInfo](#serviceitemrightinfo-structure)&gt; | rightInfos |

### ServiceItemGetServiceItemRightResponse ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [ServiceItemEShopResponse](#serviceitemeshopresponse-structure)
{: .prompt-info }

| Type                                                                    | Name               |
| ----------------------------------------------------------------------- | ------------------ |
| [List]&lt;[ServiceItemRightInfos](#serviceitemrightinfos-structure)&gt; | nullableRightInfos |

### ServiceItemGetPurchaseHistoryParam ([Structure])

| Type     | Name     |
| -------- | -------- |
| [String] | language |
| Uint32   | offset   |
| Uint32   | size     |
| [String] | titleId  |

### ServiceItemTransaction ([Structure])

| Type                                                      | Name                   |
| --------------------------------------------------------- | ---------------------- |
| [String]                                                  | transactionId          |
| [String]                                                  | extTransactionId       |
| [DateTime]                                                | time                   |
| Uint32                                                    | transactionType        |
| [String]                                                  | transactionDescription |
| [ServiceItemAmount](#serviceitemamount-structure)         | transactionAmount      |
| [String]                                                  | itemCode               |
| [String]                                                  | referenceId            |
| [ServiceItemLimitation](#serviceitemlimitation-structure) | limitation             |

### ServiceItemPurchaseHistory ([Structure])

| Type                                                                      | Name         |
| ------------------------------------------------------------------------- | ------------ |
| Uint32                                                                    | totalSize    |
| Uint32                                                                    | offset       |
| [List]&lt;[ServiceItemTransaction](#serviceitemtransaction-structure)&gt; | transactions |

### ServiceItemGetPurchaseHistoryResponse ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [ServiceItemEShopResponse](#serviceitemeshopresponse-structure)
{: .prompt-info }

| Type                                                                              | Name                    |
| --------------------------------------------------------------------------------- | ----------------------- |
| [List]&lt;[ServiceItemPurchaseHistory](#serviceitempurchasehistory-structure)&gt; | nullablePurchaseHistory |

### ServiceItemGetNoticeParam ([Structure])

| Type   | Name       |
| ------ | ---------- |
| Uint32 | noticeType |

### ServiceItemNotice ([Structure])

| Type       | Name         |
| ---------- | ------------ |
| Uint64     | scheduleId   |
| Uint32     | scheduleType |
| Sint32     | paramInt     |
| [String]   | paramString  |
| [qBuffer]  | paramBinary  |
| [DateTime] | timeBegin    |
| [DateTime] | timeEnd      |

### ServiceItemEvent ([Structure])

| Type       | Name              |
| ---------- | ----------------- |
| Uint64     | eventId           |
| Sint32     | paramInt          |
| [String]   | paramString       |
| [qBuffer]  | paramBinary       |
| Uint32     | presentTicketType |
| Uint32     | presentTicketNum  |
| [DateTime] | timeBegin         |
| [DateTime] | timeEnd           |

### ServiceItemTicketInfo ([Structure])

| Type   | Name       |
| ------ | ---------- |
| Uint32 | ticketType |
| Uint32 | numTotal   |

### ServiceItemUserInfo ([Structure])

| Type      | Name                |
| --------- | ------------------- |
| Uint32    | numTotalEntryTicket |
| [qBuffer] | applicationBuffer   |

### ServiceItemStartChallengeParam ([Structure])

| Type   | Name                |
| ------ | ------------------- |
| Uint32 | challengeScheduleId |
| Uint32 | ticketType          |
| Uint32 | numTicket           |

### ServiceItemEndChallengeParam ([Structure])

| Type                                                  | Name                |
| ----------------------------------------------------- | ------------------- |
| Uint32                                                | challengeScheduleId |
| [ServiceItemUserInfo](#serviceitemuserinfo-structure) | userInfo            |

### ServiceItemRequestTicketRestorationParam ([Structure])

| Type   | Name       |
| ------ | ---------- |
| Uint32 | ticketType |
| Uint32 | numTicket  |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#date-time
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#any-data-holder
[PID]: /docs/nex/types#pid
