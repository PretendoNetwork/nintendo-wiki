---
layout: post
toc: true
title: Ticket Granting (10)
---

This is the only protocol that's available on the authentication server. Other protocols are only available on the secure server.

If a server is in maintenance, the `%retval%` result fields are set to `Authentication::UnderMaintenance` and the other fields of the response are left with empty values.

On NEX 2 and NEX 4 onwards, the extra data field is enforced and must be valid. If the `Login` method is used or the data isn't valid, the `%retval%` result fields are set to `Authentication::ValidationFailed` and the other fields of the response are left with empty values. NEX 1 and NEX 3 don't enforce the extra data.

## Methods

| Method ID | Name (Up to NEX 3)                      | Name (NEX 4+)                                                             |
|-----------|-----------------------------------------|---------------------------------------------------------------------------|
| 1         | [Login](#1-login)                       | [ValidateAndRequestTicket](#1-login)                                      |
| 2         | [LoginEx](#2-loginex)                   | [ValidateAndRequestTicketWithCustomData](#2-loginex)                      |
| 3         | [RequestTicket](#3-requestticket)       | [RequestTicket](#3-requestticket)                                         |
| 4         | [GetPID](#4-getpid)                     | [GetPID](#4-getpid)                                                       |
| 5         | [GetName](#5-getname)                   | [GetName](#5-getname)                                                     |
| 6         | [LoginWithContext](#6-loginwithcontext) | [ValidateAndRequestTicketWithParam](#6-validateandrequestticketwithparam) |

### (1) Login
Usernames are not case sensitive.

If the username does not exist, the `%retval%` field is set to `RendezVous::InvalidUsername` and the other fields are left with empty values.

#### Request

| Type     | Name        | Description |
|----------|-------------|-------------|
| [String] | strUserName | Username    |

#### Response

| Type               | Name            | Description                                                                                                                                                                                                 |
|--------------------|-----------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| [Result]           | %retval%        | Result code                                                                                                                                                                                                 |
| [PID]              | pidPrincipal    | User pid                                                                                                                                                                                                    |
| [Buffer]           | pbufResponse    | [Kerberos ticket](/docs/nex/kerberos#kerberos-ticket)                                                                                                                                                       |
| [RVConnectionData] | pConnectionData | Connection info for secure server.<br><br>NEX 4 allows the secure server to be at the same address as the authentication server. In that case, the secure server station url points to 0.0.0.1 with port 1. |
| [String]           | strReturnMsg    | Server build name                                                                                                                                                                                           |

Examples of server build names:

| Server  | Build name                                                        |
|---------|-------------------------------------------------------------------|
| Friends | branch:origin/feature/45925_FixAutoReconnect build:3_10_11_2006_0 |
| DKC:TF  | branch:origin/release/ngs/3.4.x.3 build:3_4_13_3_0                |
| MK8     | branch:origin/project/wup-amk build:3_5_17_2011_0                 |

### (2) LoginEx
Usernames are not case sensitive.

If the username does not exist, the `%retval%` field is set to `RendezVous::InvalidUsername` and the other fields are left with empty values.

#### Request

| Type                                                             | Name        | Description         |
|------------------------------------------------------------------|-------------|---------------------|
| [String]                                                         | strUserName | Username            |
| [Any]&lt;[AuthenticationInfo](#authenticationinfo-structure)&gt; | oExtraData  | Authentication info |

The server version is in the build name of the server. If the build name is `3_x_y_z_0` then `z` is the server version. Click [here](https://kinnay.github.io/view.html?page=nexwiiu) for a list of server build names.

#### Response

| Type               | Name            | Description                                                                                                                                                                                                 |
|--------------------|-----------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| [Result]           | %retval%        | Result code                                                                                                                                                                                                 |
| [PID]              | pidPrincipal    | User pid                                                                                                                                                                                                    |
| [Buffer]           | pbufResponse    | [Kerberos ticket](/docs/nex/kerberos#kerberos-ticket)                                                                                                                                                       |
| [RVConnectionData] | pConnectionData | Connection info for secure server.<br><br>NEX 4 allows the secure server to be at the same address as the authentication server. In that case, the secure server station url points to 0.0.0.1 with port 1. |
| [String]           | strReturnMsg    | Server build name                                                                                                                                                                                           |
| [String]           | pSourceKey      | **Only present on NEX 4+.** If this is a non-empty hex string, key derivation is skipped and this string is used as the key to decrypt the ticket instead.                                                  |

### (3) RequestTicket
If the source or target pid is invalid, the `%retval%` field is set to `Core::AccessDenied` and the ticket is empty.

#### Request

| Type  | Name         | Description                                                                                            |
|-------|--------------|--------------------------------------------------------------------------------------------------------|
| Uint8 | platformType | **Only present on games with crossplay between Switch and 3DS/Wii U.** [Platform type](#platform-type) |
| [PID] | idSource     | User pid                                                                                               |
| [PID] | idTarget     | Secure server pid                                                                                      |

#### Response

| Type     | Name        | Description                                                                                                                                                |
|----------|-------------|------------------------------------------------------------------------------------------------------------------------------------------------------------|
| [Result] | %retval%    | Result code                                                                                                                                                |
| [Buffer] | bufResponse | [Kerberos ticket](/docs/nex/kerberos#kerberos-ticket)                                                                                                      |
| [String] | pSourceKey  | **Only present on NEX 4+.** If this is a non-empty hex string, key derivation is skipped and this string is used as the key to decrypt the ticket instead. |

### (4) GetPID
This is the reverse of the [GetName](#5-getname) method. It looks up the pid that belongs to a given username. On all normal accounts the username is the same as the user pid. Each game server also provides a bunch of [special users](/docs/nex/kerberos#special-accounts).

Usernames are not case sensitive.

Returns 0 if the username does not exist.

#### Request

| Type     | Name        | Description |
|----------|-------------|-------------|
| [String] | strUserName | Username    |

#### Response

| Type  | Name     | Description |
|-------|----------|-------------|
| [PID] | %retval% | PID         |

### (5) GetName
This is the reverse of the [GetPID](#4-getpid) method. It returns the name associated with the given user pid. Returns an empty string if the pid does not exist.

#### Request

| Type  | Name | Description |
|-------|------|-------------|
| [PID] | id   | PID         |

#### Response

| Type     | Name     | Description |
|----------|----------|-------------|
| [String] | %retval% | Username    |

### (6) LoginWithContext
#### Request

| Type  | Name      | Description |
|-------|-----------|-------------|
| [Any] | loginData | Login data  |

#### Response

| Type               | Name            | Description                                           |
|--------------------|-----------------|-------------------------------------------------------|
| [Result]           | %retval%        | Result code                                           |
| [PID]              | pidPrincipal    | User pid                                              |
| [Buffer]           | pbufResponse    | [Kerberos ticket](/docs/nex/kerberos#kerberos-ticket) |
| [RVConnectionData] | pConnectionData | Connection info for secure server                     |

### (6) ValidateAndRequestTicketWithParam
#### Request

| Type                                                                      | Name  |
|---------------------------------------------------------------------------|-------|
| [ValidateAndRequestTicketParam](#validateandrequestticketparam-structure) | param |

This struct does not have any fields.

#### Response

| Type                                                                       | Name   |
|----------------------------------------------------------------------------|--------|
| [ValidateAndRequestTicketResult](#validateandrequestticketparam-structure) | result |

## Types

### AuthenticationInfo ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

| Type     | Name            | Description                                |
|----------|-----------------|--------------------------------------------|
| [String] | m_authToken     | Token, as received from the account server |
| Uint32   | m_ngsVersion    | NEX major version                          |

In NEX version 3.0, the auth token type and the server version were added:

| Type     | Name            | Description                 |
|----------|-----------------|-----------------------------|
| Uint8    | m_authTokenType | 0: NASC, 1: NNAS, 2: Switch |
| Uint32   | m_serverVersion | See above                   |

### ValidateAndRequestTicketParam ([Structure])

| Type     | Name                       | Description                                                                                                                                                  |
|----------|----------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Uint32   | platformType               | [Platform type](#platform-type)                                                                                                                              |
| [String] | userName                   | Username (your pid)                                                                                                                                          |
| [Any]    | extraData                  | [NullData](#nulldata-structure) or [AuthenticationInfo](#authenticationinfo-structure)                                                                       |
| Bool     | ignoreApiVersionCheck      |                                                                                                                                                              |
| Uint32   | apiVersionGeneral          | NEX version (e.g. 40601)                                                                                                                                     |
| Uint32   | apiVersionCustom           | Client version                                                                                                                                               |
| Uint8    | platformTypeForPlatformPid | **Only present on games with crossplay between Switch and 3DS/Wii U.** Designates the [platform type](#platform-type) for the `platformPid` on the response. |

### ValidateAndRequestTicketResult ([Structure])

| Type         | Name           | Description                                                                                                                                                                                                                                      |
|--------------|----------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| [PID]        | sourcePid      | User id                                                                                                                                                                                                                                          |
| [Buffer]     | bufResponse    | [Kerberos ticket](/docs/nex/kerberos#kerberos-tickets)                                                                                                                                                                                           |
| [StationURL] | serviceNodeUrl | Secure server location                                                                                                                                                                                                                           |
| [DateTime]   | currentUtcTime | Server time                                                                                                                                                                                                                                      |
| [String]     | returnMsg      | Server build name                                                                                                                                                                                                                                |
| [String]     | sourceKey      | Kerberos key. If present, key derivation is skipped and this key is used to decrypt the ticket instead.                                                                                                                                          |
| [PID]        | platformPid    | **Only present on games with crossplay between Switch and 3DS/Wii U.** User id of the matching [platform](#platform-type).<br><br>For example, a 3DS user will have its original PID here, while the `sourcePid` will be a different 64-bit PID. |

### NullData ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Data]
{: .prompt-info }

### Platform type

| Value | Description |
|-------|-------------|
| 1     | 3DS         |
| 2     | Wii U       |
| 3     | Switch      |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[Structure]: /docs/nex/types#structure
[StationURL]: /docs/nex/types#stationurl
[List]: /docs/nex/types#list
[PID]: /docs/nex/types#pid
[DateTime]: /docs/nex/types#datetime
[Data]: /docs/nex/types#data-structure
[Any]: /docs/nex/types#anydataholder
[RVConnectionData]: /docs/nex/types#rvconnectiondata-structure
