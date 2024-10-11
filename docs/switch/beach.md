---
layout: post
toc: true
title: Beach
---

The beach server only accepts requests with a valid device certificate and requires a [device token](/docs/switch/dauth).

* [Methods](#methods)
* [Errors](#errors)

## Methods

| Path |
| --- |
| `/v1/devices/<id>/notification_token/register` |
| `/v1/devices/hac/unlink` |
| `/v1/my/devices` |
| `/v1/my/devices/hac/link` |
| `/v1/my/devices/hac/unlink_all` |
| `/v1/my/membership/free_trial_availability` |
| `/v1/rom_cards` |
| `/v1/rom_cards/register` |

## Errors

On error, the server sends the following response:

| Field | Description |
|-------|-------------|
| error | See below   |

The error is encoded like this:

| Field   | Description                       |
|---------|-----------------------------------|
| code    | Error code (string with 4 digits) |
| message | Error message                     |

### Known Errors

| Code | Message               |
|------|-----------------------|
| 1001 | api not found         |
| 1009 | internal server error |
