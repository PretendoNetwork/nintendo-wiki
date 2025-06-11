---
layout: post
toc: true
title: NSO Rewards
---

This server receives telemetry events for NSO rewards: https://fw-api.lp1.nso.nintendo.net/v1/events.

An ID token from the Nintendo Account server is required to access this server.

The server implements one endpoint: `POST /v1/events`.

An example request looks as follows:

```http
POST /v1/events HTTP/1.1
Host: fw-api.lp1.nso.nintendo.net
User-Agent: libcurl (nnHttp; 789f928b-138e-4b2f-afeb-1acae821d897; SDK 19.3.0.0; Add-on 19.3.0.0)
Accept: */*
Authorization: Bearer <id token>
Content-Type: application/json
Content-Length: 100

{"type_name":"online_play","version":1,"occurred_at":1729163738,"application_id":"0100c2500fc20000"}
```

This request tells the server that the user is playing Splatoon 3 online.

The server reply contains a message that tells the client whether the request succeeded:

```http
HTTP/1.1 200 OK
Content-Type: application/json
Content-Length: 16
Date: Thu, 17 Oct 2024 11:15:43 GMT
X-Amzn-Trace-Id: Root=1-0607c58f-07cc9d490fc2ce6c6d5edfa6;Parent=0b2913dc40a3ffab;Sampled=0;Lineage=1:c6099c9f:0
x-amzn-RequestId: 936c76d6-3a4c-4971-8b94-e0ada5772b06
x-amz-apigw-id: B0r2puzWXIdEH6g=
X-Cache: Miss from cloudfront
Via: 1.1 b08a052ba4ac33f99d5ccbe8a256c84c.cloudfront.net (CloudFront)
X-Amz-Cf-Pop: AMS58-P6
X-Amz-Cf-Id: Ms4ns7Czq_AFmTphykMIfYZYTXRORJK_lqXj1updlpD6C8SzWvNp0A==
Connection: keep-alive

{"message":"OK"}
```

The following fields are transmitted in the request body:

| Field          | Description                                                          |
|----------------|----------------------------------------------------------------------|
| type_name      | Event type (`application_event`, `savedata_upload` or `online_play`) |
| version        | Version number (always 1)                                            |
| occurred_at    | Timestamp                                                            |
| application_id | Title id                                                             |
| event_data     | Additional data for application events (optional, string)            |
