---
layout: post
toc: true
title: Matchmaker Service
---

Full name: `nn.npln.matchmaking.v1.Matchmaker`

* [Source code](https://github.com/kinnay/NPLN-Protocols/blob/master/latest/proto/matchmaking/v1/matchmaker.proto)

## Overview
The matchmaker service is responsible for matchmaking.

Matchmaking is started by creating a matchmaking ticket. Progress updates can be received by tracking the matchmaking ticket.

## Methods
* CreateMatchmakingTicket
* TrackMatchmakingTicket
* CancelMatchmakingTicket
* CreateAcceptance
