---
layout: post
toc: true
title: Aqua (System Update Requirements)
---

The aqua server tells the client which system update is required to access the CDN. The aqua server only accepts requests with a valid device certificate.

* [Header](#headers)
* [Methods](#methods)

## Headers

| Header     | Description                     |
|------------|---------------------------------|
| Host       | `aqua.hac.lp1.d4c.nintendo.net` |
| User-Agent | [User agent](#user-agents)      |
| Accept     | `application/json`              |

### User Agents

The user agent looks as follows: `NintendoSDK Firmware/<firmware version>-<revision> (platform:NX; did:<device id>; eid:lp1)`. The firmware version and revision number are obtained from the [system version title](https://switchbrew.org/wiki/System_Version_Title).

Here is an example: `NintendoSDK Firmware/15.0.0-4.0 (platform:NX; did:6265ca40780b1c0d; eid:lp1)`

## Methods

| Method | Path                                                               |
|--------|--------------------------------------------------------------------|
| GET    | [`/required_system_update_meta`](#get-required_system_update_meta) |

## GET /required_system_update_meta

| Param     | Description |
|-----------|-------------|
| device_id | Device id   |

Response on success:

| Field                                    | Description                          |
|------------------------------------------|--------------------------------------|
| contents_delivery_required_title_id      | Required system update title id      |
| contents_delivery_required_title_version | Required system update title version |

Example:

```
GET /required_system_update_meta?device_id=6265ca40780b1c0d HTTP/1.1
Host: aqua.hac.lp1.d4c.nintendo.net
User-Agent: NintendoSDK Firmware/18.1.0-1.0 (platform:NX; did:6265ca40780b1c0d; eid:lp1)
Accept: application/json
```

```
HTTP/1.1 200 OK
ETag: "9e36d9e11ed4886dac58a0bc675371db:1678320778.059836"
Last-Modified: Thu, 09 Mar 2023 00:12:57 GMT
Server: AkamaiNetStorage
Date: Mon, 12 Aug 2024 12:41:36 GMT
Content-Length: 112
Content-Type: application/json
Connection: keep-alive

{"contents_delivery_required_title_id":"0100000000000816","contents_delivery_required_title_version":1073742904}
```
