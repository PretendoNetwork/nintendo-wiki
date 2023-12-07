---
layout: post
toc: true
title: Xenoblade Chronicles X (112)
---

This page describes the methods that are only seen in Xenoblade Chronicles X.

## Methods

| Method ID | Method Name                                                     |
|-----------|-----------------------------------------------------------------|
| 14        | [UploadScores_Lazy](14-uploadscores_lazy)                       |
| 15        | [GetMultiCategoryRanking_Lazy](15-getmulticategoryranking_lazy) |
| 16        | [DebugUpdateRanking_Lazy](16-debugupdateranking_lazy)           |

### (14) UploadScores_Lazy
#### Request

| Type                                                                                     | Description |
|------------------------------------------------------------------------------------------|-------------|
| [List]&lt;[RankingScoreData](/docs/nex/protocols/ranking#rankingscoredata-structure)&gt; | Scores      |
| Uint64                                                                                   | Unknown     |

#### Response

| Type                   | Description |
|------------------------|-------------|
| [List]&lt;[Result]&gt; | Results     |

### (15) GetMultiCategoryRanking_Lazy
#### Request

| Type                                                                         | Description |
|------------------------------------------------------------------------------|-------------|
| Uint8                                                                        | Unknown     |
| [List]&lt;Uint32&gt;                                                         | Categories  |
| [RankingOrderParam](/docs/nex/protocols/ranking#rankingorderparam-structure) | Order param |
| Uint64                                                                       | Unknown     |
| Uint32                                                                       | Unknown     |

#### Response

| Type                                                                               | Description |
|------------------------------------------------------------------------------------|-------------|
| [List]&lt;[RankingResult](/docs/nex/protocols/ranking#rankingresult-structure)&gt; | pResults    |

### (16) DebugUpdateRanking_Lazy
This method does not take any parameters and does not return anything.

[Result]: /docs/nex/types#result
[List]: /docs/nex/types#list
