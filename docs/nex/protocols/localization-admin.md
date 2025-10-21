---
layout: post
toc: true
title: LocalizationAdminProtocol (40)
---

## Methods

| Method ID | Method Name                                                            |
| --------- | ---------------------------------------------------------------------- |
| 1         | [CreateLocalization](#1-createlocalization)                            |
| 2         | [UpdateLocalization](#2-updatelocalization)                            |
| 3         | [DeleteLocalization](#3-deletelocalization)                            |
| 4         | [GetNumberOfLocalizationContext](#4-getnumberoflocalizationcontext)    |
| 5         | [GetLocalizationContexts](#5-getlocalizationcontexts)                  |
| 6         | [GetTranslatedStrings](#6-gettranslatedstrings)                        |
| 7         | [GetTranslatedString](#7-gettranslatedstring)                          |
| 8         | [LoadLocalizationFile](#8-loadlocalizationfile)                        |
| 9         | [GetLocalizationFileContent](#9-getlocalizationfilecontent)            |
| 10        | [DeleteAllLocalizationsInContext](#10-deletealllocalizationsincontext) |
| 11        | [DeleteLocaleCodeForPID](#11-deletelocalecodeforpid)                   |

# (1) CreateLocalization

## Request

| Type                                                          | Name                |
| ------------------------------------------------------------- | ------------------- |
| [String]                                                      | localizationContext |
| [String]                                                      | localizationName    |
| [List]&lt;[TranslatedString](#translatedstring-structure)&gt; | translatedStrings   |

## Response

| Type   | Name              |
| ------ | ----------------- |
| uint32 | localizedStringID |

# (2) UpdateLocalization

## Request

| Type                                                          | Name              |
| ------------------------------------------------------------- | ----------------- |
| uint32                                                        | localizedStringID |
| [List]&lt;[TranslatedString](#translatedstring-structure)&gt; | translatedStrings |

## Response
This method does not return anything.

# (3) DeleteLocalization

## Request

| Type   | Name              |
| ------ | ----------------- |
| uint32 | localizedStringID |

## Response
This method does not return anything.

# (4) GetNumberOfLocalizationContext

## Request
This method does not take any parameters.

## Response

| Type   | Name                        |
| ------ | --------------------------- |
| uint32 | numberOfLocalizationContext |

# (5) GetLocalizationContexts

## Request

| Type          | Name  |
| ------------- | ----- |
| [ResultRange] | range |

## Response

| Type                   | Name                 |
| ---------------------- | -------------------- |
| [List]&lt;[String]&gt; | localizationContexts |

# (6) GetTranslatedStrings

## Request

| Type   | Name              |
| ------ | ----------------- |
| uint32 | localizedStringID |

## Response

| Type                                                          | Name              |
| ------------------------------------------------------------- | ----------------- |
| [List]&lt;[TranslatedString](#translatedstring-structure)&gt; | translatedStrings |

# (7) GetTranslatedString

## Request

| Type                                                  | Name                |
| ----------------------------------------------------- | ------------------- |
| [LocalizationArgList](#localizationarglist-structure) | localizationArgList |
| [String]                                              | localeCode          |

## Response

| Type                                            | Name             |
| ----------------------------------------------- | ---------------- |
| [TranslatedString](#translatedstring-structure) | translatedString |

# (8) LoadLocalizationFile

## Request

| Type     | Name                    |
| -------- | ----------------------- |
| [String] | localizationFileContent |
| bool     | onDuplicateKeyUpdate    |

## Response
This method does not return anything.

# (9) GetLocalizationFileContent

## Request

| Type                   | Name                 |
| ---------------------- | -------------------- |
| [List]&lt;[String]&gt; | localizationContexts |
| char                   | delimiter            |

## Response

| Type     | Name                    |
| -------- | ----------------------- |
| [String] | localizationFileContent |

# (10) DeleteAllLocalizationsInContext

## Request

| Type     | Name                |
| -------- | ------------------- |
| [String] | localizationContext |

## Response
This method does not return anything.

# (11) DeleteLocaleCodeForPID

## Request

| Type  | Name |
| ----- | ---- |
| [PID] | pid  |

## Response
This method does not return anything.

# Types

## TranslatedString ([Structure])

| Type     | Name          |
| -------- | ------------- |
| [String] | m_localeCode  |
| [String] | m_translation |

## LocalizedString ([Structure])

| Type                                                          | Name                  |
| ------------------------------------------------------------- | --------------------- |
| [String]                                                      | m_localizationContext |
| [String]                                                      | m_localizedStringName |
| [List]&lt;[TranslatedString](#translatedstring-structure)&gt; | m_translatedStrings   |

## LocalizationArg ([Structure])

| Type     | Name    |
| -------- | ------- |
| [String] | m_key   |
| [String] | m_value |

## LocalizationArgList ([Structure])

| Type                                             | Name                  |
| ------------------------------------------------ | --------------------- |
| [String]                                         | m_localizationContext |
| [String]                                         | m_localizedStringName |
| [List]&lt;[LocalizationArg](LocalizationArg)&gt; | m_arguments           |

[String]: /docs/nex/types#string
[List]: /docs/nex/types#list
[PID]: /docs/nex/types#pid
[ResultRange]: /docs/nex/types#resultrange-structure
[Structure]: /docs/nex/types#structure
