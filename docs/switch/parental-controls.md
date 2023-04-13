---
layout: post
toc: true
title: Parental Controls
---

The API is provided at: https://api-lp1.pctl.srv.nintendo.net

| URL                                                                       |
|---------------------------------------------------------------------------|
| `/moon/v1/devices/<id>`                                                   |
| `/moon/v1/devices/<id>/activate`                                          |
| `/moon/v1/devices/<id>/events`                                            |
| `/moon/v1/devices/<id>/owners`                                            |
| `/moon/v1/devices/<id>/owners/<id>`                                       |
| `/moon/v1/devices/<id>/parental_control_setting`                          |
| `/moon/v1/devices/<id>/parental_control_setting/whitelisted_applications` |
| `/moon/v1/devices/<id>/players/<id>`                                      |

The movies are provided at: https://parentalcontrols-movie-lp1.cdn.nintendo.net

| URL                        |
|----------------------------|
| `/default/switchpc_en.mp4` |

## Errors

| Error                                                              |
|--------------------------------------------------------------------|
| `https://moon.nintendo.com/errors/v1/400/firmware_update_required` |
| `https://moon.nintendo.com/errors/v1/400/invalid_params`           |
| `https://moon.nintendo.com/errors/v1/401/invalid_token`            |
| `https://moon.nintendo.com/errors/v1/403/forbidden`                |
| `https://moon.nintendo.com/errors/v1/403/insufficient_scope`       |
| `https://moon.nintendo.com/errors/v1/404/resource_is_not_found`    |
| `https://moon.nintendo.com/errors/v1/404/resource_not_available`   |
| `https://moon.nintendo.com/errors/v1/405/method_not_allowed`       |
| `https://moon.nintendo.com/errors/v1/406/not_acceptable_language`  |
| `https://moon.nintendo.com/errors/v1/409/over_the_time_limit`      |
| `https://moon.nintendo.com/errors/v1/409/resource_already_exists`  |
| `https://moon.nintendo.com/errors/v1/424/failed_dependency`        |
| `https://moon.nintendo.com/errors/v1/500/internal_server_error`    |
| `https://moon.nintendo.com/errors/v1/531/under_maintenance`        |
| `https://moon.nintendo.com/errors/v1/532/service_terminated`       |