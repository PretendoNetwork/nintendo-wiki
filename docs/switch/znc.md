---
layout: post
toc: true
title: ZNC
---

URL: https://api-lp1.znc.srv.nintendo.net

This server provides services related to the Nintendo Switch Online smartphone app.

The Nintendo Switch uses the following methods for voice chat:

| Method | URL                          |
|--------|------------------------------|
| POST   | `/v1/NX/getToken`            |
| POST   | `/v1/NX/activateRoom`        |
| POST   | `/v1/NX/deactivateRoom`      |
| POST   | `/v1/NX/ping`                |
| POST   | `/v1/NX/setVoiceChatChannel` |
| POST   | `/v1/NX/setRoomStatus`       |