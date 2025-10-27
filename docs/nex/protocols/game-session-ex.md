---
layout: post
toc: true
title: GameSessionExProtocol
---

## Methods

| Method ID | Method Name                         |
| --------- | ----------------------------------- |
| 1         | [SearchSessions](#1-searchsessions) |

### (1) SearchSessions
#### Request

| Type             | Name             |
| ---------------- | ---------------- |
| GameSessionQuery | gameSessionQuery |

#### Response

| Type                                                                            | Name          |
| ------------------------------------------------------------------------------- | ------------- |
| [List]&lt;[GameSessionSearchResultEx](#gamesessionsearchresultex-structure)&gt; | searchResults |

## Types

### GameSessionSearchResultEx ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [GameSessionSearchResult]
{: .prompt-info }

| Type                                 | Name           |
| ------------------------------------ | -------------- |
| [List]&lt;GameSessionParticipant&gt; | m_participants |

[Structure]: /docs/nex/types#structure
[List]: /docs/nex/types#list
[GameSessionSearchResult]: /docs/nex/protocols/game-session#gamesessionsearchresult-structure
