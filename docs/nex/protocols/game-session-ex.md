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
| Type                                                                                | Name          |
| ----------------------------------------------------------------------------------- | ------------- |
| [List]&#x3C;[GameSessionSearchResultEx](#gamesessionsearchresultex-structure)&#x3E; | searchResults |

## Types

### GameSessionSearchResultEx ([Structure])
> This structure [inherits](/docs/nex/types#structure-inheritance) from [GameSessionSearchResult]
{: .prompt-info }

| Type                                     | Name           |
| ---------------------------------------- | -------------- |
| [List]&#x3C;GameSessionParticipant&#x3E; | m_participants |

[Structure]: /docs/nex/types#structure
[List]: /docs/nex/types#list
[GameSessionSearchResult]: /docs/nex/protocols/game-session#gamesessionsearchresult-structure
