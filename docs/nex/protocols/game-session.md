---
layout: post
toc: true
title: Game Session (42)
---

## Methods

| Method ID | Method Name                                                          |
| --------- | -------------------------------------------------------------------- |
| 1         | [CreateSession](#1-createsession)                                    |
| 2         | [UpdateSession](#2-updatesession)                                    |
| 3         | [DeleteSession](#3-deletesession)                                    |
| 4         | [MigrateSession](#4-migratesession)                                  |
| 5         | [LeaveSession](#5-leavesession)                                      |
| 6         | [GetSession](#6-getsession)                                          |
| 7         | [SearchSessions](#7-searchsessions)                                  |
| 8         | [AddParticipants](#8-addparticipants)                                |
| 9         | [RemoveParticipants](#9-removeparticipants)                          |
| 10        | [GetParticipantCount](#10-getparticipantcount)                       |
| 11        | [GetParticipants](#11-getparticipants)                               |
| 12        | [SendInvitation](#12-sendinvitation)                                 |
| 13        | [GetInvitationReceivedCount](#13-getinvitationreceivedcount)         |
| 14        | [GetInvitationsReceived](#14-getinvitationsreceived)                 |
| 15        | [GetInvitationSentCount](#15-getinvitationsentcount)                 |
| 16        | [GetInvitationsSent](#16-getinvitationssent)                         |
| 17        | [AcceptInvitation](#17-acceptinvitation)                             |
| 18        | [DeclineInvitation](#18-declineinvitation)                           |
| 19        | [CancelInvitation](#19-cancelinvitation)                             |
| 20        | [SendTextMessage](#20-sendtextmessage)                               |
| 21        | [RegisterURLs](#21-registerurls)                                     |
| 22        | [JoinSession](#22-joinsession)                                       |
| 23        | [AbandonSession](#23-abandonsession)                                 |
| 24        | [SearchSessionsWithParticipants](#24-searchsessionswithparticipants) |
| 25        | [GetSessions](#25-getsessions)                                       |
| 26        | [GetParticipantsURLs](#26-getparticipantsurls)                       |
| 27        | [MigrateSessionHost](#27-migratesessionhost)                         |
| 28        | [SplitSession](#28-splitsession)                                     |
| 29        | [SearchSocialSessions](#29-searchsocialsessions)                     |
| 30        | [ReportUnsuccessfulJoinSessions](#30-reportunsuccessfuljoinsessions) |

### (1) CreateSession
#### Request

| Type          | Name        |
| ------------- | ----------- |
| [GameSession] | gameSession |

#### Response

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

### (2) UpdateSession
#### Request

| Type                | Name              |
| ------------------- | ----------------- |
| [GameSessionUpdate] | gameSessionUpdate |

#### Response
This method does not return anything.

### (3) DeleteSession
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response
This method does not return anything.

### (4) MigrateSession
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response

| Type             | Name                   |
| ---------------- | ---------------------- |
| [GameSessionKey] | gameSessionKeyMigrated |

### (5) LeaveSession
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response
This method does not return anything.

### (6) GetSession
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response

| Type                      | Name         |
| ------------------------- | ------------ |
| [GameSessionSearchResult] | searchResult |

### (7) SearchSessions
#### Request

| Type               | Name             |
| ------------------ | ---------------- |
| [GameSessionQuery] | gameSessionQuery |

#### Response

| Type                                    | Name          |
| --------------------------------------- | ------------- |
| [List]&lt;[GameSessionSearchResult]&gt; | searchResults |

### (8) AddParticipants
#### Request

| Type                 | Name                  |
| -------------------- | --------------------- |
| [GameSessionKey]     | gameSessionKey        |
| [List]&lt;Uint32&gt; | publicParticipantIDs  |
| [List]&lt;Uint32&gt; | privateParticipantIDs |

#### Response
This method does not return anything.

### (9) RemoveParticipants
#### Request

| Type                 | Name           |
| -------------------- | -------------- |
| [GameSessionKey]     | gameSessionKey |
| [List]&lt;Uint32&gt; | participantIDs |

#### Response
This method does not return anything.

### (10) GetParticipantCount
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response

| Type   | Name  |
| ------ | ----- |
| Uint32 | count |

### (11) GetParticipants
#### Request

| Type                                                 | Name           |
| ---------------------------------------------------- | -------------- |
| [GameSessionKey]                                     | gameSessionKey |
| [ResultRange](/docs/nex/types#resultrange-structure) | resultRange    |

#### Response

| Type                                   | Name         |
| -------------------------------------- | ------------ |
| [List]&lt;[GameSessionParticipant]&gt; | participants |

### (12) SendInvitation
#### Request

| Type                    | Name       |
| ----------------------- | ---------- |
| [GameSessionInvitation] | invitation |

#### Response
This method does not return anything.

### (13) GetInvitationReceivedCount
#### Request

| Type   | Name              |
| ------ | ----------------- |
| Uint32 | gameSessionTypeID |

#### Response

| Type   | Name  |
| ------ | ----- |
| Uint32 | count |

### (14) GetInvitationsReceived
#### Request

| Type                                                 | Name              |
| ---------------------------------------------------- | ----------------- |
| Uint32                                               | gameSessionTypeID |
| [ResultRange](/docs/nex/types#resultrange-structure) | resultRange       |

#### Response

| Type                                          | Name        |
| --------------------------------------------- | ----------- |
| [List]&lt;[GameSessionInvitationReceived]&gt; | invitations |

### (15) GetInvitationSentCount
#### Request

| Type   | Name              |
| ------ | ----------------- |
| Uint32 | gameSessionTypeID |

#### Response

| Type   | Name  |
| ------ | ----- |
| Uint32 | count |

### (16) GetInvitationsSent
#### Request

| Type                                                 | Name              |
| ---------------------------------------------------- | ----------------- |
| Uint32                                               | gameSessionTypeID |
| [ResultRange](/docs/nex/types#resultrange-structure) | resultRange       |

#### Response

| Type                                      | Name        |
| ----------------------------------------- | ----------- |
| [List]&lt;[GameSessionInvitationSent]&gt; | invitations |

### (17) AcceptInvitation
#### Request

| Type                            | Name                  |
| ------------------------------- | --------------------- |
| [GameSessionInvitationReceived] | gameSessionInvitation |

#### Response
This method does not return anything.

### (18) DeclineInvitation
#### Request

| Type                            | Name                  |
| ------------------------------- | --------------------- |
| [GameSessionInvitationReceived] | gameSessionInvitation |

#### Response
This method does not return anything.

### (19) CancelInvitation
#### Request

| Type                        | Name                  |
| --------------------------- | --------------------- |
| [GameSessionInvitationSent] | gameSessionInvitation |

#### Response
This method does not return anything.

### (20) SendTextMessage
#### Request

| Type                 | Name               |
| -------------------- | ------------------ |
| [GameSessionMessage] | gameSessionMessage |

#### Response
This method does not return anything.

### (21) RegisterURLs
#### Request

| Type                       | Name        |
| -------------------------- | ----------- |
| [List]&lt;[StationURL]&gt; | stationURLs |

#### Response
This method does not return anything.

### (22) JoinSession
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response
This method does not return anything.

### (23) AbandonSession
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response
This method does not return anything.

### (24) SearchSessionsWithParticipants
#### Request

| Type                 | Name              |
| -------------------- | ----------------- |
| Uint32               | gameSessionTypeID |
| [List]&lt;Uint32&gt; | participantIDs    |

#### Response

| Type                                                    | Name          |
| ------------------------------------------------------- | ------------- |
| [List]&lt;[GameSessionSearchWithParticipantsResult]&gt; | searchResults |

### (25) GetSessions
#### Request

| Type                           | Name            |
| ------------------------------ | --------------- |
| [List]&lt;[GameSessionKey]&gt; | gameSessionKeys |

#### Response

| Type                                    | Name          |
| --------------------------------------- | ------------- |
| [List]&lt;[GameSessionSearchResult]&gt; | searchResults |

### (26) GetParticipantsURLs
#### Request

| Type                 | Name           |
| -------------------- | -------------- |
| [GameSessionKey]     | gameSessionKey |
| [List]&lt;Uint32&gt; | participantIDs |

#### Response

| Type                                   | Name         |
| -------------------------------------- | ------------ |
| [List]&lt;[GameSessionParticipant]&gt; | participants |

### (27) MigrateSessionHost
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response
This method does not return anything.

### (28) SplitSession
#### Request

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | gameSessionKey |

#### Response

| Type             | Name                   |
| ---------------- | ---------------------- |
| [GameSessionKey] | gameSessionKeyMigrated |

### (29) SearchSocialSessions
#### Request

| Type                     | Name                   |
| ------------------------ | ---------------------- |
| [GameSessionSocialQuery] | gameSessionSocialQuery |

#### Response

| Type                                                    | Name          |
| ------------------------------------------------------- | ------------- |
| [List]&lt;[GameSessionSearchWithParticipantsResult]&gt; | searchResults |

### (30) ReportUnsuccessfulJoinSessions
#### Request

| Type                                               | Name                     |
| -------------------------------------------------- | ------------------------ |
| [List]&lt;[GameSessionUnsuccessfulJoinSession]&gt; | unsuccessfulJoinSessions |

#### Response
This method does not return anything.

## Types
### GameSessionKey ([Structure])

| Type   | Name        |
| ------ | ----------- |
| Uint32 | m_typeID    |
| Uint32 | m_sessionID |

### GameSession ([Structure])

| Type                     | Name         |
| ------------------------ | ------------ |
| Uint32                   | m_typeID     |
| [List]&lt;[Property]&gt; | m_attributes |

### GameSessionSearchResult ([Structure])

| Type                       | Name         |
| -------------------------- | ------------ |
| [GameSessionKey]           | m_sessionKey |
| Uint32                     | m_hostPID    |
| [List]&lt;[StationURL]&gt; | m_hostURLs   |
| [List]&lt;[Property]&gt;   | m_attributes |

### GameSessionUpdate ([Structure])

| Type                     | Name         |
| ------------------------ | ------------ |
| [GameSessionKey]         | m_sessionKey |
| [List]&lt;[Property]&gt; | m_attributes |

### GameSessionParticipant ([Structure])

| Type                       | Name          |
| -------------------------- | ------------- |
| Uint32                     | m_PID         |
| [String]                   | m_name        |
| [List]&lt;[StationURL]&gt; | m_stationURLs |

### GameSessionInvitation ([Structure])

| Type                 | Name            |
| -------------------- | --------------- |
| [GameSessionKey]     | m_sessionKey    |
| [List]&lt;Uint32&gt; | m_recipientPIDs |
| [String]             | m_message       |

### GameSessionInvitationSent ([Structure])

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | m_sessionKey   |
| Uint32           | m_recipientPID |
| [String]         | m_message      |
| [DateTime]       | m_creationTime |

### GameSessionInvitationReceived ([Structure])

| Type             | Name           |
| ---------------- | -------------- |
| [GameSessionKey] | m_sessionKey   |
| Uint32           | m_senderPID    |
| [String]         | m_message      |
| [DateTime]       | m_creationTime |

### GameSessionQuery ([Structure])

| Type                     | Name         |
| ------------------------ | ------------ |
| Uint32                   | m_typeID     |
| Uint32                   | m_queryID    |
| [List]&lt;[Property]&gt; | m_parameters |

### GameSessionSocialQuery ([Structure])

| Type                     | Name             |
| ------------------------ | ---------------- |
| Uint32                   | m_typeID         |
| Uint32                   | m_queryID        |
| [List]&lt;[Property]&gt; | m_parameters     |
| [List]&lt;Uint32&gt;     | m_participantIDs |

### GameSessionMessage ([Structure])

| Type             | Name         |
| ---------------- | ------------ |
| [GameSessionKey] | m_sessionKey |
| [String]         | m_message    |

### GameSessionSearchWithParticipantsResult ([Structure])

| Type                 | Name             |
| -------------------- | ---------------- |
| [List]&lt;Uint32&gt; | m_participantIDs |

### GameSessionUnsuccessfulJoinSession ([Structure])

| Type             | Name            |
| ---------------- | --------------- |
| [GameSessionKey] | m_sessionKey    |
| Uint32           | m_errorCategory |
| Sint32           | m_errorCode     |

### Property ([Structure])

| Type   | Description |
| ------ | ----------- |
| Uint32 | ID          |
| Uint32 | Value       |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#datetime
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#anydataholder
[StationURL]: /docs/nex/types#stationurl
[Variant]: /docs/nex/types#variant

[Property]: #property-structure
[GameSession]: #gamesession-structure
[GameSessionKey]: #gamesessionkey-structure
[GameSessionUpdate]: #gamesessionupdate-structure
[GameSessionSearchResult]: #gamesessionsearchresult-structure
[GameSessionQuery]: #gamesessionquery-structure
[GameSessionParticipant]: #gamesessionparticipant-structure
[GameSessionInvitation]: #gamesessioninvitation-structure
[GameSessionInvitationReceived]: #gamesessioninvitationreceived-structure
[GameSessionInvitationSent]: #gamesessioninvitationsent-structure
[GameSessionMessage]: #gamesessionmessage-structure
[GameSessionSearchWithParticipantsResult]: #gamesessionsearchwithparticipantsresult-structure
[GameSessionSocialQuery]: #gamesessionsocialquery-structure
[GameSessionUnsuccessfulJoinSession]: #gamesessionunsuccessfuljoinsession-structure
