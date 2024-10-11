---
layout: post
toc: true
title: Service Status
---

This server can be used to check which game servers are available.

URL: https://Service-status-lp1.cdn.nintendo.net/service_status_hac.json

The JSON file contains the following data:

| Field        | Description          |
|--------------|----------------------|
| maintenances | List of maintenances |
| incidents    | List of incidents    |

A maintenance has the following fields:

| Field          | Description                       |
|----------------|-----------------------------------|
| maintenance_id | Maintenance id (integer)          |
| service        | Affected service                  |
| titles         | List of affected titles           |
| start_date     | Start date (e.g. 2023/12/20 8:00) |
| end_date       | End date (e.g. 2023/12/20 8:15)   |

An incident has the following fields:

| Field            | Description                                          |
|------------------|------------------------------------------------------|
| maintenance_id   | Incident id (integer)                                |
| service          | Affected service                                     |
| titles           | List of affected titles                              |
| occurrence_date  | Date of incidence occurrence (e.g. 2023/12/20 8:00)  |
| restoration_date | Date of incidence restoration (e.g. 2023/12/20 8:15) |

The affected service has the following fields:

| Field       | Description          |
|-------------|----------------------|
| service_id  | Service id (integer) |
| server_code | Server code (string) |

The affected titles have the following fields:

| Field          | Description       |
|----------------|-------------------|
| application_id | Title id (string) |
