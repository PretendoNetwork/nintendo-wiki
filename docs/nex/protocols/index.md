---
layout: post
toc: true
title: NEX Protocols
---

As explained on the [Game Server Overview](/docs/nex) page, NEX is based on Quazal Rendez-Vous. Many protocols come from the original Quazal Rendez-Vous library, but Nintendo also implemented some new protocols.

See also: [RMC Protocol](/docs/rmc)

## Common Protocols

| ID | Protocol                                                         |
|----|------------------------------------------------------------------|
| 1  | [Remote log device](/docs/nex/protocols/remote-log-device)       |
| 3  | [NAT traversal](/docs/nex/protocols/nat-traversal)               |
| 10 | [Ticket granting](/docs/nex/protocols/authentication)            |
| 11 | [Secure connection](/docs/nex/protocols/secure-connection)       |
| 14 | [Notification events](/docs/nex/protocols/notifications)         |
| 18 | [Health](/docs/nex/protocols/health)                             |
| 19 | [Monitoring](/docs/nex/protocols/monitoring)                     |
| 20 | [Friends](/docs/nex/protocols/friends)                           |
| 21 | [Match making](/docs/nex/protocols/match-making)                 |
| 23 | [Messaging](/docs/nex/protocols/messaging)                       |
| 24 | [Persistent store](/docs/nex/protocols/persistent-store)         |
| 25 | [Account management](/docs/nex/protocols/account-management)     |
| 27 | [Message delivery](/docs/nex/protocols/message-delivery)         |
| 50 | [Match making (extension)](/docs/nex/protocols/match-making-ext) |

## Nintendo Only

| ID  | Protocol                                                                                        |
|-----|-------------------------------------------------------------------------------------------------|
| 100 | [Nintendo notification events](/docs/nex/protocols/nintendo-notifications)                      |
| 101 | [Friends (3DS)](/docs/nex/protocols/friends-3ds)                                                |
| 102 | [Friends (Wii U)](/docs/nex/protocols/friends-wiiu)                                             |
| 109 | [Matchmake extension](/docs/nex/protocols/matchmake-extension)                                  |
| 110 | [Utility](/docs/nex/protocols/utility) / [Storage manager](/docs/nex/protocols/storage-manager) |
| 112 | [Ranking](/docs/nex/protocols/ranking)                                                          |
| 115 | [Data store](/docs/nex/protocols/datastore)                                                     |
| 116 | [Debug](/docs/nex/protocols/debug)                                                              |
| 117 | [Subscription](/docs/nex/protocols/subscription)                                                |
| 118 | [Rating](/docs/nex/protocols/rating)                                                            |
| 119 | [Service item](/docs/nex/protocols/service-item)                                                |
| 120 | [Matchmake referee](/docs/nex/protocols/matchmake-referee)                                      |
| 121 | [Subscriber](/docs/nex/protocols/subscriber)                                                    |
| 122 | [Ranking 2](/docs/nex/protocols/ranking-2)                                                      |
| 123 | [AA user](/docs/nex/protocols/aa-user)                                                          |
| 124 | [Screening](/docs/nex/protocols/screening)                                                      |

## Game-Specific

| ID  | Game                       | Protocol                                       |
|-----|----------------------------|------------------------------------------------|
| 200 | Pokemon Bank               | [Shop](/docs/nex/protocols/shop)               |
| 200 | Rayman Legends             | [OLS storage](/docs/nex/protocols/ols-storage) |
| 201 | Super Smash Bros. Ultimate | [Tournament](/docs/nex/protocols/tournament)   |

## Not provided by NEX
Ubisoft games always use the original Quazal Rendez-Vous library instead of NEX. The following protocols are not implemented by NEX, but may seen in Ubisoft games:

| ID | Protocol                                                                     |
|----|------------------------------------------------------------------------------|
| 12 | Back end management                                                          |
| 16 | [Simple authentication](/docs/nex/protocols/simple-authentication)           |
| 17 | Siege                                                                        |
| 26 | Competition                                                                  |
| 28 | Client settings                                                              |
| 29 | [Ubi account management](/docs/nex/protocols/ubi-account-management)         |
| 30 | Geo localization                                                             |
| 31 | [News](/docs/nex/protocols/news)                                             |
| 35 | [Privileges](/docs/nex/protocols/privileges)                                 |
| 36 | [Tracking 3](/docs/nex/protocols/tracking-3)                                 |
| 39 | [Localization](/docs/nex/protocols/localization)                             |
| 42 | [Game session](/docs/nex/protocols/game-session)                             |
| 44 | Sub account management                                                       |
| 45 | IP to location                                                               |
| 46 | IP to location admin                                                         |
| 47 | Ubi friends                                                                  |
| 48 | Skill rating                                                                 |
| 49 | [Uplay win](/docs/nex/protocols/uplay-win)                                   |
| 51 | [Title storage](/docs/nex/protocols/title-storage)                           |
| 53 | [User storage](/docs/nex/protocols/user-storage)                             |
| 55 | [Player stats](/docs/nex/protocols/player-stats)                             |
| 60 | Spark                                                                        |
| 71 | [Offline game notifications](/docs/nex/protocols/offline-game-notifications) |
| 72 | [User account management](/docs/nex/protocols/user-account-management)       |
| 84 | Siege admin                                                                  |
| ?  | [Web notifications storage](/docs/nex/protocols/web-notifications-storage)   |
| ?  | [Title storage admin](/docs/nex/protocols/title-storage-admin)               |
| ?  | [User storage admin](/docs/nex/protocols/user-storage-admin)                 |

## Internal protocols
These protocols seem to be used internally by the servers. Likely for their inter-server communications. Many of these can only be observed through the [Debug](/docs/nex/protocols/debug) protocol. However some games implement subsets of these protocols

| ID | Protocol                                                                        |
|----|---------------------------------------------------------------------------------|
| ?  | [Dummy](/docs/nex/protocols/dummy)                                              |
| ?  | [SecureConnectionInternal](/docs/nex/protocols/secure-connection-internal)      |
| ?  | [NATTraversalReportInternal](/docs/nex/protocols/nat-traversal-report-internal) |
