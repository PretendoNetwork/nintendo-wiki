---
layout: post
toc: true
title: Ubi Account Management (29)
---

## Methods

| Method ID | Method Name                                                                          |
| --------- | ------------------------------------------------------------------------------------ |
| 1         | [CreateAccount](#1-createaccount)                                                    |
| 2         | [UpdateAccount](#2-updateaccount)                                                    |
| 3         | [GetAccount](#3-getaccount)                                                          |
| 4         | [LinkAccount](#4-linkaccount)                                                        |
| 5         | [GetTOS](#5-gettos)                                                                  |
| 6         | [ValidateUsername](#6-validateusername)                                              |
| 7         | [ValidatePassword](#7-validatepassword)                                              |
| 8         | [ValidateEmail](#8-validateemail)                                                    |
| 9         | [GetCountryList](#9-getcountrylist)                                                  |
| 10        | [ForgetPassword](#10-forgetpassword)                                                 |
| 11        | [LookupPrincipalIds](#11-lookupprincipalids)                                         |
| 12        | [LookupUbiAccountIDsByPids](#12-lookupubiaccountidsbypids)                           |
| 13        | [LookupUbiAccountIDsByUsernames](#13-lookupubiaccountidsbyusernames)                 |
| 14        | [LookupUsernamesByUbiAccountIDs](#14-lookupusernamesbyubiaccountids)                 |
| 15        | [LookupUbiAccountIDsByUsernameSubString](#15-lookupubiaccountidsbyusernamesubstring) |
| 16        | [UserHasPlayed](#16-userhasplayed)                                                   |
| 17        | [IsUserPlaying](#17-isuserplaying)                                                   |
| 18        | [LookupUbiAccountIDsByUsernamesGlobal](#18-lookupubiaccountidsbyusernamesglobal)     |
| 19        | [LookupUbiAccountIDsByEmailsGlobal](#19-lookupubiaccountidsbyemailsglobal)           |
| 20        | [LookupUsernamesByUbiAccountIDsGlobal](#20-lookupusernamesbyubiaccountidsglobal)     |
| 21        | [GetTOSEx](#21-gettosex)                                                             |
| 22        | [HasAcceptedLatestTOS](#22-hasacceptedlatesttos)                                     |
| 23        | [AcceptLatestTOS](#23-acceptlatesttos)                                               |

### (1) CreateAccount
#### Request
This method does not take any parameters.

#### Response

| Type                                    | Name          |
| --------------------------------------- | ------------- |
| [UbiAccount]                            | ubiAccount    |
| [List]&lt;[ValidationFailureReason]&gt; | failedReasons |

### (2) UpdateAccount
#### Request
This method does not take any parameters.

#### Response

| Type                                    | Name          |
| --------------------------------------- | ------------- |
| [UbiAccount]                            | ubiAccount    |
| [List]&lt;[ValidationFailureReason]&gt; | failedReasons |

### (3) GetAccount
#### Request
This method does not take any parameters.

#### Response

| Type         | Name       |
| ------------ | ---------- |
| [UbiAccount] | ubiAccount |
| Bool         | exists     |

### (4) LinkAccount
#### Request

| Type     | Name               |
| -------- | ------------------ |
| [String] | ubiAccountUsername |
| [String] | ubiAccountPassword |

#### Response
This method does not return anything.

### (5) GetTOS
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | countryCode  |
| [String] | languageCode |
| Bool     | htmlVersion  |

#### Response

| Type  | Name |
| ----- | ---- |
| [TOS] | tos  |

### (6) ValidateUsername
#### Request

| Type     | Name     |
| -------- | -------- |
| [String] | username |

#### Response

| Type                 | Name               |
| -------------------- | ------------------ |
| [UsernameValidation] | usernameValidation |

### (7) ValidatePassword
#### Request

| Type     | Name     |
| -------- | -------- |
| [String] | password |
| [String] | username |

#### Response

| Type                                    | Name          |
| --------------------------------------- | ------------- |
| [List]&lt;[ValidationFailureReason]&gt; | failedReasons |

### (8) ValidateEmail
#### Request

| Type     | Name  |
| -------- | ----- |
| [String] | email |

#### Response

| Type                                    | Name          |
| --------------------------------------- | ------------- |
| [List]&lt;[ValidationFailureReason]&gt; | failedReasons |

### (9) GetCountryList
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | languageCode |

#### Response

| Type                    | Name      |
| ----------------------- | --------- |
| [List]&lt;[Country]&gt; | countries |

### (10) ForgetPassword
#### Request

| Type     | Name            |
| -------- | --------------- |
| [String] | usernameOrEmail |

#### Response
This method does not return anything.

### (11) LookupPrincipalIds
#### Request

| Type                   | Name          |
| ---------------------- | ------------- |
| [List]&lt;[String]&gt; | ubiAccountIds |

#### Response

| Type                          | Name |
| ----------------------------- | ---- |
| [Map]&lt;[String], Uint32&gt; | pids |

### (12) LookupUbiAccountIDsByPids
#### Request

| Type                 | Name |
| -------------------- | ---- |
| [List]&lt;Uint32&gt; | pids |

#### Response

| Type                          | Name          |
| ----------------------------- | ------------- |
| [Map]&lt;Uint32, [String]&gt; | ubiaccountIDs |

### (13) LookupUbiAccountIDsByUsernames
#### Request

| Type                   | Name      |
| ---------------------- | --------- |
| [List]&lt;[String]&gt; | Usernames |

#### Response

| Type                            | Name          |
| ------------------------------- | ------------- |
| [Map]&lt;[String], [String]&gt; | UbiAccountIDs |

### (14) LookupUsernamesByUbiAccountIDs
#### Request

| Type                   | Name          |
| ---------------------- | ------------- |
| [List]&lt;[String]&gt; | UbiAccountIds |

#### Response

| Type                            | Name      |
| ------------------------------- | --------- |
| [Map]&lt;[String], [String]&gt; | Usernames |

### (15) LookupUbiAccountIDsByUsernameSubString
#### Request

| Type     | Name              |
| -------- | ----------------- |
| [String] | UsernameSubString |

#### Response

| Type                            | Name          |
| ------------------------------- | ------------- |
| [Map]&lt;[String], [String]&gt; | UbiAccountIDs |

### (16) UserHasPlayed
#### Request

| Type                   | Name          |
| ---------------------- | ------------- |
| [List]&lt;[String]&gt; | UbiAccountIDs |

#### Response

| Type                        | Name         |
| --------------------------- | ------------ |
| [Map]&lt;[String], Bool&gt; | UserPresence |

### (17) IsUserPlaying
#### Request

| Type                   | Name          |
| ---------------------- | ------------- |
| [List]&lt;[String]&gt; | UbiAccountIDs |

#### Response

| Type                        | Name         |
| --------------------------- | ------------ |
| [Map]&lt;[String], Bool&gt; | UserPresence |

### (18) LookupUbiAccountIDsByUsernamesGlobal
#### Request

| Type                   | Name      |
| ---------------------- | --------- |
| [List]&lt;[String]&gt; | Usernames |

#### Response

| Type                            | Name          |
| ------------------------------- | ------------- |
| [Map]&lt;[String], [String]&gt; | UbiAccountIDs |

### (19) LookupUbiAccountIDsByEmailsGlobal
#### Request

| Type                   | Name   |
| ---------------------- | ------ |
| [List]&lt;[String]&gt; | Emails |

#### Response

| Type                            | Name          |
| ------------------------------- | ------------- |
| [Map]&lt;[String], [String]&gt; | UbiAccountIDs |

### (20) LookupUsernamesByUbiAccountIDsGlobal
#### Request

| Type                   | Name          |
| ---------------------- | ------------- |
| [List]&lt;[String]&gt; | UbiAccountIds |

#### Response

| Type                            | Name      |
| ------------------------------- | --------- |
| [Map]&lt;[String], [String]&gt; | Usernames |

### (21) GetTOSEx
#### Request

| Type     | Name         |
| -------- | ------------ |
| [String] | countryCode  |
| [String] | languageCode |
| Bool     | htmlVersion  |

#### Response

| Type    | Name  |
| ------- | ----- |
| [TOSEx] | tosex |

### (22) HasAcceptedLatestTOS
#### Request
This method does not take any parameters.

#### Response

| Type                                    | Name          |
| --------------------------------------- | ------------- |
| Bool                                    | hasAccepted   |
| [List]&lt;[ValidationFailureReason]&gt; | failedReasons |

### (23) AcceptLatestTOS
#### Request
This method does not take any parameters.

#### Response

| Type                                    | Name          |
| --------------------------------------- | ------------- |
| [List]&lt;[ValidationFailureReason]&gt; | failedReasons |

## Types
### UbiAccount ([Structure])

| Type                            | Name                |
| ------------------------------- | ------------------- |
| [String]                        | m_ubiAccountId      |
| [String]                        | m_username          |
| [String]                        | m_password          |
| [UbiAccountStatus]              | m_status            |
| [String]                        | m_email             |
| [DateTime]                      | m_dateOfBirth       |
| Uint32                          | m_gender            |
| [String]                        | m_countryCode       |
| Bool                            | m_optIn             |
| Bool                            | m_thirdPartyOptIn   |
| [String]                        | m_firstName         |
| [String]                        | m_lastName          |
| [String]                        | m_preferredLanguage |
| [List]&lt;[ExternalAccount]&gt; | m_externalAccounts  |

### TOS ([Structure])

| Type     | Name                  |
| -------- | --------------------- |
| [String] | m_localeCode          |
| [String] | m_content             |
| [String] | m_storingInfoQuestion |

### TOSEx ([Structure])

| Type                   | Name                  |
| ---------------------- | --------------------- |
| [String]               | m_localeCode          |
| [List]&lt;[String]&gt; | m_contents            |
| [String]               | m_storingInfoQuestion |

### ValidationFailureReason ([Structure])

| Type     | Name           |
| -------- | -------------- |
| Uint32   | m_validationId |
| [String] | m_description  |

### UsernameValidation ([Structure])

| Type                                    | Name          |
| --------------------------------------- | ------------- |
| [List]&lt;[String]&gt;                  | m_suggestions |
| [List]&lt;[ValidationFailureReason]&gt; | m_reasons     |

### Country ([Structure])

| Type     | Name   |
| -------- | ------ |
| [String] | m_code |
| [String] | m_name |

### ExternalAccount ([Structure])

| Type     | Name          |
| -------- | ------------- |
| Uint32   | m_accountType |
| [String] | m_id          |
| [String] | m_username    |

### UbiAccountStatus ([Structure])

| Type   | Name                          |
| ------ | ----------------------------- |
| Uint32 | m_basicStatus                 |
| Bool   | m_missingRequiredInformations |
| Bool   | m_recoveringPassword          |
| Bool   | m_pendingDeactivation         |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#date-time
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#any-data-holder
[Variant]: /docs/nex/types#variant

[UbiAccount]: #ubiaccount-structure
[ValidationFailureReason]: #validationfailurereason-structure
[TOS]: #tos-structure
[UsernameValidation]: #usernamevalidation-structure
[Country]: #country-structure
[TOSEx]: #tosex-structure
[UbiAccountStatus]: #ubiaccountstatus-structure
[ExternalAccount]: #externalaccount-structure
