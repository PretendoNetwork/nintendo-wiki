---
layout: post
toc: true
title: Eagle (122)
---

This page describes the methods that are only seen in Super Mario Bros. 35 and PAC-MAN 99.

## Methods

| Method ID | Method Name                                          |
| --------- | ---------------------------------------------------- |
| 11        | [GetEstimateMyScoreRank](#11-getestimatemyscorerank) |

### (11) GetEstimateMyScoreRank
#### Request

| Type                               | Name  |
| ---------------------------------- | ----- |
| [Ranking2EstimateMyScoreRankInput] | input |

#### Response

| Type                              | Name   |
| --------------------------------- | ------ |
| [Ranking2EstimateScoreRankOutput] | output |

## Types
### Ranking2EstimateMyScoreRankInput ([Structure])

| Type   | Name               |
| ------ | ------------------ |
| Uint32 | category           |
| Uint8  | numSeasonsToGoBack |

[Result]: /docs/nex/types#result
[String]: /docs/nex/types#string
[Buffer]: /docs/nex/types#buffer
[qBuffer]: /docs/nex/types#qbuffer
[List]: /docs/nex/types#list
[Map]: /docs/nex/types#map
[DateTime]: /docs/nex/types#date-time
[Structure]: /docs/nex/types#structure
[Data]: /docs/nex/types#any-data-holder
[PID]: /docs/nex/types#pid

[Ranking2EstimateMyScoreRankInput]: #ranking2estimatemyscorerankinput-structure
[Ranking2EstimateScoreRankOutput]: /docs/nex/protocols/ranking-2#ranking2estimatescorerankoutput-structure
