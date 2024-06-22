---
layout: post
toc: true
title: Match Making Types
---

Since the match making methods are split across several protocols, this page documents all match making related structures in one place.

## Flags

| Flag | Description                                                                                                                              |
| ---- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| 0x10 | Controls what happens when the owner leaves the gathering. If set, the server chooses a new owner. If not set, the gathering is deleted. |

Many games also use flag 0x200, but its purpose is unknown.

## Gathering ([Structure])

| Type     | Name                    |
| -------- | ----------------------- |
| Uint32   | m_idMyself              |
| [PID]    | m_pidOwner              |
| [PID]    | m_pidHost               |
| Uint16   | m_uiMinParticipants     |
| Uint16   | m_uiMaxParticipants     |
| Uint32   | m_uiParticipationPolicy |
| Uint32   | m_uiPolicyArgument      |
| Uint32   | [m_uiFlags](#flags)     |
| Uint32   | m_uiState               |
| [String] | m_strDescription        |

## PersistentGathering ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Gathering](#gathering-structure)
{: .prompt-info }

| Type                 | Name                     |
| -------------------- | ------------------------ |
| Uint32               | m_CommunityType          |
| [String]             | m_Password               |
| [List]&lt;Uint32&gt; | m_Attribs                |
| [Buffer]             | m_ApplicationBuffer      |
| [DateTime]           | m_ParticipationStartDate |
| [DateTime]           | m_ParticipationEndDate   |
| Uint32               | m_MatchmakeSessionCount  |
| Uint32               | m_ParticipationCount     |

## MatchmakeSession ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [Gathering](#gathering-structure)
{: .prompt-info }

In NEX version 2.x, the matchmake session looks as follows:

| Type                 | Name                  |
| -------------------- | --------------------- |
| Uint32               | m_GameMode            |
| [List]&lt;Uint32&gt; | m_Attribs             |
| Bool                 | m_OpenParticipation   |
| Uint32               | m_MatchmakeSystemType |
| [Buffer]             | m_ApplicationBuffer   |
| Uint32               | m_ParticipationCount  |

In NEX version 3.0, the session key was added:

| Type     | Name         |
| -------- | ------------ |
| [Buffer] | m_SessionKey |

In NEX version 3.4, a progress score field was added. Note that this field was inserted before the session key field:

| Type                 | Name                  |
| -------------------- | --------------------- |
| Uint32               | m_GameMode            |
| [List]&lt;Uint32&gt; | m_Attribs             |
| Bool                 | m_OpenParticipation   |
| Uint32               | m_MatchmakeSystemType |
| [Buffer]             | m_ApplicationBuffer   |
| Uint32               | m_ParticipationCount  |
| Uint8                | m_ProgressScore       |
| [Buffer]             | m_SessionKey          |

In NEX version 3.5, one more field was added:

| Type                 | Name                  |
| -------------------- | --------------------- |
| Uint32               | m_Option0             |

In NEX version 3.6, the revision number was increased to 1 and two more fields were added:

| Type                                        | Name             |
| ------------------------------------------- | ---------------- |
| [MatchmakeParam](#matchmakeparam-structure) | m_MatchmakeParam |
| [DateTime]                                  | m_StartedTime    |

In NEX version 3.7, the revision number was increased to 2 and one more field was added:

| Type     | Name           |
| -------- | -------------- |
| [String] | m_UserPassword |

In NEX version 3.8, the revision number was increased to 3 and three more fields were added:

| Type   | Name                    |
| ------ | ----------------------- |
| Uint32 | m_ReferGid              |
| Bool   | m_UserPasswordEnabled   |
| Bool   | m_SystemPasswordEnabled |

In NEX version 4.0, the revision number was set back to 0 and one more field was added:

| Type     | Name       |
| -------- | ---------- |
| [String] | m_Codeword |

## MatchmakeSessionSearchCriteria ([Structure])
Up to NEX version 1.x, this structure looks as follows:

| Type                   | Name                  |
| ---------------------- | --------------------- |
| [List]&lt;[String]&gt; | m_Attribs             |
| [String]               | m_GameMode            |
| [String]               | m_MatchmakeSystemType |
| Bool                   | m_VacantOnly          |
| Bool                   | m_ExcludeLocked       |
| Bool                   | m_ExcludeNonHostPid   |

In NEX version 2.0, the minimum and maximum participants fields were added. Note that these fields were inserted before the matchmaking system type field:

| Type                   | Name                  |
| ---------------------- | --------------------- |
| [List]&lt;[String]&gt; | m_Attribs             |
| [String]               | m_GameMode            |
| [String]               | m_MinParticipants     |
| [String]               | m_MaxParticipants     |
| [String]               | m_MatchmakeSystemType |
| Bool                   | m_VacantOnly          |
| Bool                   | m_ExcludeLocked       |
| Bool                   | m_ExcludeNonHostPid   |

In NEX version 3.0, one more field was added:

| Type   | Name              |
| ------ | ----------------- |
| Uint32 | m_SelectionMethod |

In NEX version 3.4, one more field was added:

| Type   | Name                 |
| ------ | -------------------- |
| Uint16 | m_VacantParticipants |

In NEX version 3.6, the revision number was increased to 1 and one more field was added:

| Type                                        | Name             |
| ------------------------------------------- | ---------------- |
| [MatchmakeParam](#matchmakeparam-structure) | m_MatchmakeParam |

In NEX version 3.7, the revision number was increased to 2 and two more fields were added:

| Type | Name                       |
| ---- | -------------------------- |
| Bool | m_ExcludeUserPasswordSet   |
| Bool | m_ExcludeSystemPasswordSet |

In NEX version 3.8, the revision number was increased to 3 and one more field was added:

| Type   | Name       |
| ------ | ---------- |
| Uint32 | m_ReferGid |

In NEX version 4.0, the revision number was set back to 0 and two more fields were added:

| Type          | Name          |
| ------------- | ------------- |
| [String]      | m_Codeword    |
| [ResultRange] | m_ResultRange |

## CreateMatchmakeSessionParam ([Structure])

| Type                | Name                         |
| ------------------- | ---------------------------- |
| [MatchmakeSession]  | sourceMatchmakeSession       |
| [List]&lt;[PID]&gt; | additionalParticipants       |
| Uint32              | gidForParticipationCheck     |
| Uint32              | createMatchmakeSessionOption |
| [String]            | joinMessage                  |
| Uint16              | participationCount           |

## JoinMatchmakeSessionParam ([Structure])

| Type                                                          | Name                         |
| ------------------------------------------------------------- | ---------------------------- |
| Uint32                                                        | gid                          |
| [List]&lt;[PID]&gt;                                           | additionalParticipants       |
| Uint32                                                        | gidForParticipationCheck     |
| Uint32                                                        | joinMatchmakeSessionOption   |
| Uint8                                                         | joinMatchmakeSessionBehavior |
| [String]                                                      | strUserPassword              |
| [String]                                                      | strSystemPassword            |
| [String]                                                      | joinMessage                  |
| Uint16                                                        | participationCount           |
| Uint16                                                        | extraParticipants            |
| [MatchmakeBlockListParam](#matchmakeblocklistparam-structure) | blockListParam               |

## UpdateMatchmakeSessionParam ([Structure])

| Type                                        | Name                |
| ------------------------------------------- | ------------------- |
| Uint32                                      | gid                 |
| Uint32                                      | modificationFlag    |
| [List]&lt;Uint32&gt;                        | attributes          |
| Bool                                        | openParticipation   |
| [Buffer]                                    | applicationBuffer   |
| Uint8                                       | progressScore       |
| [MatchmakeParam](#matchmakeparam-structure) | matchmakeParam      |
| [DateTime]                                  | startedTime         |
| [String]                                    | userPassword        |
| Uint32                                      | gameMode            |
| [String]                                    | description         |
| Uint16                                      | minParticipants     |
| Uint16                                      | maxParticipants     |
| Uint32                                      | matchmakeSystemType |
| Uint32                                      | participationPolicy |
| Uint32                                      | policyArgument      |
| [String]                                    | codeword            |

## MatchmakeBlockListParam ([Structure])

| Type   | Name       |
| ------ | ---------- |
| Uint32 | optionFlag |

## MatchmakeParam ([Structure])

| Type                             | Name     |
| -------------------------------- | -------- |
| [Map]&lt;[String], [Variant]&gt; | m_Params |

## AutoMatchmakeParam ([Structure])

| Type                                                                                      | Name                     |
| ----------------------------------------------------------------------------------------- | ------------------------ |
| [MatchmakeSession]                                                                        | sourceMatchmakeSession   |
| [List]&lt;[PID]&gt;                                                                       | additionalParticipants   |
| Uint32                                                                                    | gidForParticipationCheck |
| Uint32                                                                                    | autoMatchmakeOption      |
| [String]                                                                                  | joinMessage              |
| Uint16                                                                                    | participationCount       |
| [List]&lt;[MatchmakeSessionSearchCriteria](#matchmakesessionsearchcriteria-structure)&gt; | lstSearchCriteria        |
| [List]&lt;Uint32&gt;                                                                      | targetGids               |

*4.0 and later:*

| Type                                                          | Name           |
| ------------------------------------------------------------- | -------------- |
| [MatchmakeBlockListParam](#matchmakeblocklistparam-structure) | blockListParam |

## FindMatchmakeSessionByParticipantParam ([Structure])

| Type                                                          | Name              |
| ------------------------------------------------------------- | ----------------- |
| [List]&lt;[PID]&gt;                                           | m_principalIdList |
| Uint32                                                        | m_resultOptions   |
| [MatchmakeBlockListParam](#matchmakeblocklistparam-structure) | m_blockListParam  |

## FindMatchmakeSessionByParticipantResult ([Structure])

| Type                                            | Name          |
| ----------------------------------------------- | ------------- |
| [PID]                                           | m_principalId |
| [MatchmakeSession](#matchmakesession-structure) | m_session     |

## GatheringURLs ([Structure])

| Type                       | Name             |
| -------------------------- | ---------------- |
| Uint32                     | m_gid            |
| [List]&lt;[StationURL]&gt; | m_lstStationURLs |

## GatheringStats ([Structure])

| Type                | Name             |
| ------------------- | ---------------- |
| [PID]               | m_pidParticipant |
| Uint32              | m_uiFlags        |
| [List]&lt;Float&gt; | m_lstValues      |

## Invitation ([Structure])

| Type     | Name          |
| -------- | ------------- |
| Uint32   | m_idGathering |
| Uint32   | m_idGuest     |
| [String] | m_strMessage  |

## ParticipantDetails ([Structure])

| Type     | Name             |
| -------- | ---------------- |
| [PID]    | m_idParticipant  |
| [String] | m_strName        |
| [String] | m_strMessage     |
| Uint16   | m_uiParticipants |

## DeletionEntry ([Structure])

| Type   | Name          |
| ------ | ------------- |
| Uint32 | m_idGathering |
| [PID]  | m_pid         |
| Uint32 | m_uiReason    |

## PlayingSession ([Structure])

| Type                      | Name          |
| ------------------------- | ------------- |
| [PID]                     | m_PrincipalId |
| [Data]&lt;[Gathering]&gt; | m_Gathering   |

## SimplePlayingSession ([Structure])

| Type   | Name          |
| ------ | ------------- |
| [PID]  | m_PrincipalID |
| Uint32 | m_GatheringID |
| Uint32 | m_GameMode    |
| Uint32 | m_Attribute_0 |

## SimpleCommunity ([Structure])

| Type   | Name                    |
| ------ | ----------------------- |
| Uint32 | m_GatheringID           |
| Uint32 | m_MatchmakeSessionCount |

[String]: /docs/nex/types#string
[StationURL]: /docs/nex/types#stationurl
[List]: /docs/nex/types#list
[PID]: /docs/nex/types#pid
[Structure]: /docs/nex/types#structure
[Buffer]: /docs/nex/types#buffer
[DateTime]: /docs/nex/types#datetime
[Map]: /docs/nex/types#map
[Variant]: /docs/nex/types#variant
[ResultRange]: /docs/nex/types#resultrange-structure
[Data]: /docs/nex/types#anydataholder

[MatchmakeSession]: #matchmakesession-structure
[Gathering]: #gathering-structure
