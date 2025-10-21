---
layout: post
toc: true
title: NEX Protocols
---

[NEX](/docs/nex) is based on [Rendez-Vous](http://web.archive.org/web/20180823162719/http://quazal.com/rendez-vous.htm), a multiplayer networking library developed by [Quazal](http://web.archive.org/web/20180823162719/http://quazal.com/). Communications between the game server and game client use a series of messages, called [RMC](/docs/rmc). Responsibilities (authentication, matchmaking, UGC, etc.) are organized into separate protocols, with each protocol having a series of methods representing specific actions a server/client can make.

Each protocol is assigned a unique protocol ID, with multiple ranges of protocol IDs for different use cases.

| Range | Name              | Description                                                                                                                                                                                                                                                                                                                                                                                    |
| ----- | ----------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1-99  | Core              | Protocols designed and provided by Quazal. These protocols perform critical operations all game servers could need. Developers can extend the functionality of these protocols by adding/modifying protocol methods, but the protocols themselves are never outright replaced by a given game for any custom purposes.                                                                         |
| 100+  | Developer         | Protocols unique to a specific game. A developer creating multiple games may share these protocols between games, such as Nintendo with NEX, but that is not guaranteed. As a rule of thumb, all protocols with IDs 100+ should be assumed to be game-specific.                                                                                                                                |
| 200+  | Nintendo reserved | Nintendo appears to have added their own range of "reserved" protocol IDs on top of the developer range. This range seems to allow developers to add game-specific protocols on top of the common protocols provided by NEX. Similar conventions may exist in other titles, but this is not guaranteed. As a rule of thumb, all protocols with IDs 100+ should be assumed to be game-specific. |


## Core protocols
Not all protocols are provided by Nintendo/NEX, but may be seen in Ubisoft games as they always use the original Quazal Rendez-Vous library.

| ID  | Protocol                                                                     | Provided by Nintendo |
| --- | ---------------------------------------------------------------------------- | -------------------- |
| 1   | [Remote log device](/docs/nex/protocols/remote-log-device)                   | Yes                  |
| 3   | [NAT traversal](/docs/nex/protocols/nat-traversal)                           | Yes                  |
| 10  | [Ticket granting](/docs/nex/protocols/authentication)                        | Yes                  |
| 11  | [Secure connection](/docs/nex/protocols/secure-connection)                   | Yes                  |
| 12  | Back end management                                                          | No                   |
| 14  | [Notification events](/docs/nex/protocols/notifications)                     | Yes                  |
| 16  | [Simple authentication](/docs/nex/protocols/simple-authentication)           | No                   |
| 17  | Siege                                                                        | No                   |
| 18  | [Health](/docs/nex/protocols/health)                                         | Yes                  |
| 19  | [Monitoring](/docs/nex/protocols/monitoring)                                 | Yes                  |
| 20  | [Friends](/docs/nex/protocols/friends)                                       | Yes                  |
| 21  | [Match making](/docs/nex/protocols/match-making)                             | Yes                  |
| 23  | [Messaging](/docs/nex/protocols/messaging)                                   | Yes                  |
| 24  | [Persistent store](/docs/nex/protocols/persistent-store)                     | Yes                  |
| 25  | [Account management](/docs/nex/protocols/account-management)                 | Yes                  |
| 26  | Competition                                                                  | No                   |
| 27  | [Message delivery](/docs/nex/protocols/message-delivery)                     | Yes                  |
| 28  | [Client settings](/docs/nex/protocols/client-settings)                       | No                   |
| 29  | [Ubi account management](/docs/nex/protocols/ubi-account-management)         | No                   |
| 30  | Geo localization                                                             | No                   |
| 31  | [News](/docs/nex/protocols/news)                                             | No                   |
| 32  | [News admin](/docs/nex/protocols/news-admin)                                 | No                   |
| 35  | [Privileges](/docs/nex/protocols/privileges)                                 | No                   |
| 36  | [Tracking 3](/docs/nex/protocols/tracking-3)                                 | No                   |
| 39  | [Localization](/docs/nex/protocols/localization)                             | No                   |
| 40  | [Localization admin](/docs/nex/protocols/localization-admin)                 | No                   |
| 42  | [Game session](/docs/nex/protocols/game-session)                             | No                   |
| 43  | [Game session admin](/docs/nex/protocols/game-session-admin)                 | No                   |
| 44  | Sub account management                                                       | No                   |
| 45  | [IP to location](/docs/nex/protocols/ip-2-location)                          | No                   |
| 46  | [IP to location admin](/docs/nex/protocols/ip-2-location-admin)              | No                   |
| 47  | Ubi friends                                                                  | No                   |
| 48  | [Skill rating](/docs/nex/protocols/skill-rating)                             | No                   |
| 49  | [Uplay win](/docs/nex/protocols/uplay-win)                                   | No                   |
| 50  | [Match making (extension)](/docs/nex/protocols/match-making-ext)             | Yes                  |
| 51  | [Title storage](/docs/nex/protocols/title-storage)                           | No                   |
| 53  | [User storage](/docs/nex/protocols/user-storage)                             | No                   |
| 55  | [Player stats](/docs/nex/protocols/player-stats)                             | No                   |
| 60  | Spark                                                                        | No                   |
| 71  | [Offline game notifications](/docs/nex/protocols/offline-game-notifications) | No                   |
| 72  | [User account management](/docs/nex/protocols/user-account-management)       | No                   |
| 84  | Siege admin                                                                  | No                   |

# Unknown protocols
These protocols do not have known protocol IDs, and as such we do not know whether they are game-specific or belong to the core protocols. Information about these protocols was obtained by scanning a games [DDL information](/docs/ddl).

| ID  | Protocol                                                                   | Provided by Nintendo | Notes                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| --- | -------------------------------------------------------------------------- | -------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| ?   | [Web notifications storage](/docs/nex/protocols/web-notifications-storage) | No                   |                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| ?   | [Title storage admin](/docs/nex/protocols/title-storage-admin)             | No                   |                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| ?   | [User storage admin](/docs/nex/protocols/user-storage-admin)               | No                   |                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| ?   | [Challenge Helper](/docs/nex/protocols/challenge-helper)                   | No                   | Possibly protocol ID 105 based on [here](https://github.com/unixoide/5th-echelon/blob/82253ffdd0c2ab3e765dbc9f601c81ac01bb33ab/dedicated_server/sc_bl_protocols/src/protocols/challenge_helper_service/challenge_helper_protocol.rs#L25) and [here](https://github.com/GitHubProUser67/MultiServer3/blob/dd6c751caeb428837e99e2c69b1b4e11ad301af3/Servers/QuazalServer/RDVServices/GameServices/PS3SparkServices/RMCProtocolId.cs#L33)                       |
| ?   | [GameSessionEx](/docs/nex/protocols/game-session-ex)                       | No                   | Possibly protocol ID 123 based on [here](https://github.com/unixoide/5th-echelon/blob/82253ffdd0c2ab3e765dbc9f601c81ac01bb33ab/dedicated_server/sc_bl_protocols/src/protocols/game_session_ex_service/game_session_ex_protocol.rs#L26)                                                                                                                                                                                                                       |
| ?   | [TrackingExtension](/docs/nex/protocols/tracking-extension)                | No                   | Possibly protocol ID 100 based on [here](https://github.com/kacper-serewis/5th-echelon/blob/455ec91354780d2fbc565461d1e50d09bf2b5e32/dedicated_server/sc_bl_protocols/src/protocols/trackingextension/tracking_extension_protocol.rs#L24). It also seems like there may be multiple versions of this protocol, such has [here](https://github.com/Phoenix-Assassins/acr-docs/blob/1c16f6ab1a7758db54fac212de04bc04651effe6/RMC/TrackingExtensionProtocol.md) |


## Nintendo protocols

| ID  | Protocol                                                                                        |
| --- | ----------------------------------------------------------------------------------------------- |
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
| --- | -------------------------- | ---------------------------------------------- |
| 200 | Pokemon Bank               | [Shop](/docs/nex/protocols/shop)               |
| 200 | Rayman Legends             | [OLS storage](/docs/nex/protocols/ols-storage) |
| 201 | Super Smash Bros. Ultimate | [Tournament](/docs/nex/protocols/tournament)   |

## Internal protocols
These protocols seem to be used internally by the servers. Likely for their inter-server communications. Many of these can only be observed through the [Debug](/docs/nex/protocols/debug) protocol. However some games implement subsets of these protocols.

| ID  | Protocol                                                                        |
| --- | ------------------------------------------------------------------------------- |
| ?   | [Dummy](/docs/nex/protocols/dummy)                                              |
| ?   | [SecureConnectionInternal](/docs/nex/protocols/secure-connection-internal)      |
| ?   | [NATTraversalReportInternal](/docs/nex/protocols/nat-traversal-report-internal) |
