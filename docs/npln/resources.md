---
layout: post
toc: true
title: NPLN Resources
---

NPLN identifies resources by name. A resource name is a path-like string that uniquely identifies a resource, even across tenants. This page lists currently known resource names.

The server always sends the full resource name, but the client may use `current` to refer to the currently active resource (e.g. `tenants/current`).

* `accounts/<id>`
* `tenants/<id>`
* `tenants/<id>/categories/<id>`
* `tenants/<id>/categories/<id>/seasons/<id>`
* `tenants/<id>/content/<id>`
* `tenants/<id>/documents/<path>`
* `tenants/<id>/festResults/<id>`
* `tenants/<id>/festSchedules/<id>`
* `tenants/<id>/fests/<id>`
* `tenants/<id>/fests/<id>/decryptionKey`
* `tenants/<id>/gameSessionCreationTickets/<id>`
* `tenants/<id>/gameSessionSearchConfigs/<id>`
* `tenants/<id>/gameSessions/<id>`
* `tenants/<id>/gameSessions/<id>/userSessions/<id>`
* `tenants/<id>/iceServerSets/<name>`
* `tenants/<id>/latencyMeasurementServers/<name>`
* `tenants/<id>/matchmakingConfigs/<name>`
* `tenants/<id>/matchmakingTickets/<id>`
* `tenants/<id>/saveEventTypes/<name>`
* `tenants/<id>/saveRecords/<id>`
* `tenants/<id>/seasonSchedules/<id>`
* `tenants/<id>/targets/<name>`
* `tenants/<id>/targets/<name>/coopSchedules/<id>`
* `tenants/<id>/targets/<name>/vsParams/<id>`
* `tenants/<id>/targets/<name>/vsSchedules/<id>`
* `tenants/<id>/userExternalIds/<id>`
* `tenants/<id>/users/<id>`
* `tenants/<id>/users/<id>/friendUsers/<id>`
* `tenants/<id>/users/<id>/presence`
* `tenants/<id>/users/<id>/tradeBoxes/<id>`
* `tenants/<id>/users/<id>/violations/<type>`
