---
layout: post
toc: true
title: NASC
---

This is the authentication server of the 3DS. A single endpoint (`ac`) is used for all requests. Other requests are redirected to http://www.nintendo.com.

## General

Main server: https://nasc.nintendowifi.net/ac

Other servers:
* https://nasc.test.nintendowifi.net/ac
* https://nasc.dev.nintendowifi.net/ac

The common client certificate (`ctr-common-1`) is required to access these servers. If it is not provided, the server rejects the TLS handshake.

## Headers

| Header         | Description                                      |
|----------------|--------------------------------------------------|
| Host           | `nasc.nintendowifi.net`                          |
| X-GameId       | The current game id (`%08X`)                     |
| User-Agent     | `CTR FPD/%04X` (see [FPD version](#fpd-version)) |
| Content-Type   | `application/x-www-form-urlencoded`              |
| Content-Type   | `application/x-www-form-urlencoded`              |
| Content-Length | Content length                                   |

Note that the Content-Type header is included twice.

## FPD Version

| System version | FPD version |
|----------------|-------------|
| 11.15.0        | 15          |
| 11.16.0        | 16          |

## Actions
All form values are encoded with a custom base64 character set, where `+/=` are replaced by `.-*` respectively. This applies to both the request and the response.

The type of request is specified by the `action` parameter. Other parameters depend on the type of action. The action name is case insensitive.

* [LOGIN](#login)
* SVCLOC
* nzchk
* parse
* message

### LOGIN
This action provides the location of the game server and a token.

| Param        | Description                                                                               |
|--------------|-------------------------------------------------------------------------------------------|
| `gameid`     | Game server id (`%08X`). This is the same as the `X-GameId` header.                       |
| `sdkver`     | Major and minor SDK version (`%03d%03d`). Always `000000`.                                |
| `titleid`    | Title id (`%016X`)                                                                        |
| `gamecd`     | Product code, e.g. `AMKP` for Mario Kart 7                                                |
| `gamever`    | Title version (`%04X`)                                                                    |
| `mediatype`  | 0=System, 1=Digital, 2=Cartridge                                                          |
| `romid`      | Rom id, only present if the media type is 2                                               |
| `makercd`    | Product maker code (company code)                                                         |
| `unitcd`     | Always 2                                                                                  |
| `macadr`     | MAC address of the 3DS                                                                    |
| `bssid`      | BSSID of active wifi network                                                              |
| `apinfo`     | Not sure, looks like `01:0000000000`                                                      |
| `fcdcert`    | See [LocalFriendCodeSeed_B](https://www.3dbrew.org/wiki/Nandrw/sys/LocalFriendCodeSeed_B) |
| `devname`    | Device name (UTF-16-LE)                                                                   |
| `servertype` | Environment (`L1` for production)                                                         |
| `fpdver`     | [FPD version](#fpd-version) (`%04X`). This is also included in the user agent.            |
| `devtime`    | Current device time (`%y%m%d%H%M%S`)                                                      |
| `lang`       | Language code (`%02X`)                                                                    |
| `region`     | Region code (`%02X`)                                                                      |
| `csnum`      | Serial number                                                                             |

Then, either:

| Param     | Description                                                                                                   |
|-----------|---------------------------------------------------------------------------------------------------------------|
| `uidhmac` | PID HMAC, received during [account creation](/docs/nex/protocols/account-management#27-nintendocreateaccount) |
| `userid`  | PID, received during [account creation](/docs/nex/protocols/account-management#27-nintendocreateaccount)      |

or:

| Param    | Description              |
|----------|--------------------------|
| `passwd` | Password for new account |

Finally, the following parameters are always present:

| Param      | Description                               |
|------------|-------------------------------------------|
| `action`   | `LOGIN`                                   |
| `ingamesn` | Nickname provided by game (usually empty) |

On success, the server sends the following response:

| Field      | Description                          |
|------------|--------------------------------------|
| `locator`  | Host and port of game server         |
| `retry`    | Always 0                             |
| `returncd` | Always `001` (success)               |
| `token`    | Token for logging in on game server  |
| `datetime` | Current server time (`%Y%m%d%H%M%S`) |

## Errors
On error, the server sends the following response:

| Field      | Description                          |
|------------|--------------------------------------|
| `retry`    | 0 or 1                               |
| `returncd` | Error code (see below)               |
| `datetime` | Current server time (`%Y%m%d%H%M%S`) |

Sometimes, `returncd` is set to `null` instead of an error code.

### Known Errors

| Code  | Description                               |
|-------|-------------------------------------------|
| `001` | Success                                   |
| `102` | Device is banned                          |
| `107` | Product code is invalid                   |
| `109` | Missing or malformed parameter in request |
| `110` | Game server is no longer available        |
| `111` | Game server is under maintenance          |
| `119` | FPD version is invalid                    |
| `120` | Ttile version is invalid                  |
| `121` | Device certificate is invalid             |
| `122` | PID HMAC is invalid                       |
| `123` | Rom id is banned                          |
| `125` | Game id is invalid                        |

## Examples
LOGIN request:

```
POST /ac HTTP/1.1
Host: nasc.nintendowifi.net
X-GameId: 00030600
User-Agent: CTR FPD/000F
Content-Type: application/x-www-form-urlencoded
Content-Type: application/x-www-form-urlencoded
Content-Length: 876

gameid=MDAwMzA2MDA%2A&sdkver=MDAwMDAw&titleid=MDAwNDAwMDAwMDAzMDcwMA%2A%2A&gamecd=QU1LUA%2A%2A&gamever=MDAwMQ%2A%2A&mediatype=Mg%2A%2A&romid=KJJ3Tnsrdw0qZH0UZQX-VDg%2A&makercd=MDE%2A&unitcd=Mg%2A%2A&macadr=MDQxZDY3ZWQ4YmYw&bssid=NmM4ODUwYzJiYTdh&apinfo=MDE6MDAwMDAwMDAwMA%2A%2A&fcdcert=eGKuWyeaY08jt6Z8T9VzJKRtVk3k212--NVn1UmjsSMKDLzyEC0PvOIM6qVpKNQq3qcVvtlX542KrzTZ5UdxqZiCkaAMEZ0r8y5ygU8F-NBmFo30JFMHWz-JvQWzbNMBXYncbSayAbREdf9CjGOFp1sUGEpu-OCkbOPHyqgCloGo9iIWVIMzNzapjhuNsZSv3bPMkcXyf8KvLwAk-831y4JfPlu4DZKrCR3KNYt.jzZ-MGZFXSiElFSlCinlCnmpJR7UWvYHJOjxAAu0W9ShlbymJOPuTQJB-PzpVouSrQ3lcq7lQexJQ7l1znK1IoVssn0.XDCzDAPtCG9piIam6wAAAAAAAAAAIPX9AQAAAAA%2A&devname=aABlAGwAbABvAHcAbwByAGwAZAA%2A&servertype=TDE%2A&fpdver=MDAwRg%2A%2A&devtime=MTgwNjIzMjEwMTQ1&lang=MDM%2A&region=MDI%2A&csnum=Q0VGMTEwNTQ2OTI%2A&uidhmac=ZThhMmE5MWU%2A&userid=MTAwMDg5NDY0&action=TE9HSU4%2A&ingamesn=
```

LOGIN response:

```
HTTP/1.1 200 OK
NODE: pd42wfiap02
Content-Type: text/plain;charset=ISO-8859-1
Content-Length: 248
Date: Tue, 18 Jan 2022 10:50:37 GMT
Server: Nintendo Wii (http)
Connection: keep-alive

locator=MzUuMTYzLjIuODk6NDA0NjA*&retry=MA**&returncd=MDAx&token=CJyBSE-auxaKzdxCnvLJoRicRYB0OnFLoA1wk7Kc34yHTItFZRx.44-DvizdksgEZf-BRyqNeHtUkjqzR3b69XftWqNdg7mZDg-P2rz0jqTTkujbTXwEXsDuqnYx30K2DrcY97F7m52HXBiJCCKnmQ**&datetime=MjAyMjAxMTgxMDUwMzc*
```

Example error response:

```
HTTP/1.1 200 OK
NODE: pd42wfiap01
Content-Type: text/plain;charset=ISO-8859-1
Content-Length: 56
Date: Wed, 19 Jan 2022 09:21:41 GMT
Server: Nintendo Wii (http)

retry=MA**&returncd=MDA5&datetime=MjAyMjAxMTkwOTIxNDE*
```

Redirect to http://www.nintendo.com

```
HTTP/1.0 302 Moved Temporarily
Location: http://www.nintendo.com
Server: BigIP
Connection: Keep-Alive
Content-Length: 0
```
