---
layout: post
toc: true
title: DDL Parse Trees
---

You may be surprised to see the real names of parameter and structure members on many of the wiki pages. NEX has automatically generated the code that encodes/decodes method parameters and structures from a data definition language (DDL), and many games contain the parse tree of the DDL declarations in their data segment. It's encoded in big-endian byte order (regardless of the platform) and looks as follows:

| Type        | Description               |
|-------------|---------------------------|
| Uint32      | Magic number (0xCD652312) |
| Uint8       | Unknown (always 0)        |
| Uint32      | Major version             |
| Uint32      | Minor version             |
| Uint32      | Micro version             |
| Uint32      | Build version             |
| [NameSpace] | Root namespace            |

## NameSpace

| Type                    | Description            |
|-------------------------|------------------------|
| Uint32                  | Number of elements (N) |
| [Element](#element) (N) | Namespace elements     |

## Element

| Type  | Description |
|-------|-------------|
| Uint8 | Type id     |
|       | Body        |

| ID | Type                    |
|----|-------------------------|
| 1  | [NameSpaceItem]         |
| 2  | [Declaration]           |
| 3  | [DOClassDeclaration]    |
| 4  | [DatasetDeclaration]    |
| 5  | [TypeDeclaration]       |
| 6  | [Variable]              |
| 8  | [RMC]                   |
| 9  | [Action]                |
| 10 | [AdapterDeclaration]    |
| 11 | [PropertyDeclaration]   |
| 12 | [ProtocolDeclaration]   |
| 13 | [Parameter]             |
| 14 | [ReturnValue]           |
| 15 | [ClassDeclaration]      |
| 16 | [TemplateDeclaration]   |
| 17 | [SimpleTypeDeclaration] |
| 18 | [TemplateInstance]      |
| 19 | [DDLUnitDeclaration]    |
| 20 | [DupSpaceDeclaration]   |

## String

| Type      | Description                      |
|-----------|----------------------------------|
| Uint32    | Length (N)                       |
| Bytes (N) | String (without null terminator) |

## DeclarationUse

| Type     | Description                                |
|----------|--------------------------------------------|
| Uint8    | Declaration type (see [element](#element)) |
| [String] | Full type name                             |

Only if declaration type is [TemplateInstance]:

| Type                 | Description              |
|----------------------|--------------------------|
| [String]             | Base type name           |
| Uint8                | Number of arguments (N)  |
| [DeclarationUse] (N) | Argument declaration use |

## ParseTreeItem

| Type     | Description |
|----------|-------------|
| [String] | Name        |

## NameSpaceItem
The second parse tree item is always the same as the first parse tree item. I don't know why it's stored twice.

| Type            | Description     |
|-----------------|-----------------|
| [ParseTreeItem] | Parse tree item |
| [ParseTreeItem] | Parse tree item |

## Declaration

| Type            | Description    |
|-----------------|----------------|
| [NameSpaceItem] | Namespace item |
| [String]        | DDL unit name  |
| [Namespace]     | Properties     |

## DOClassDeclaration

| Type          | Description       |
|---------------|-------------------|
| [Declaration] | Declaration       |
| [String]      | Parent class name |
| Uint32        | Class id          |
| [Namespace]   | Namespace         |

## DatasetDeclaration

| Type          | Description |
|---------------|-------------|
| [Declaration] | Declaration |
| [Namespace]   | Variables   |

## TypeDeclaration

| Type          | Description |
|---------------|-------------|
| [Declaration] | Declaration |

## MethodDeclaration

| Type          | Description |
|---------------|-------------|
| [Declaration] | Declaration |
| [NameSpace]   | Parameters  |

## Variable

| Type             | Description     |
|------------------|-----------------|
| [NameSpaceItem]  | Namespace item  |
| [DeclarationUse] | Declaration use |
| Uint32           | Array size      |

## RMC

| Type                | Description        |
|---------------------|--------------------|
| [MethodDeclaration] | Method declaration |
| [NameSpace]         | Parameters         |

## Action

| Type                | Description        |
|---------------------|--------------------|
| [MethodDeclaration] | Method declaration |
| [NameSpace]         | Parameters         |

## AdapterDeclaration

| Type          | Description |
|---------------|-------------|
| [Declaration] | Declaration |

## PropertyDeclaration

| Type          | Description         |
|---------------|---------------------|
| [Declaration] | Declaration         |
| Uint32        | Category mask       |
| Uint32        | Allowed target mask |

## ProtocolDeclaration

| Type          | Description |
|---------------|-------------|
| [Declaration] | Declaration |
| [NameSpace]   | Methods     |

## Parameter

| Type             | Description              |
|------------------|--------------------------|
| [Variable]       | Variable                 |
| [DeclarationUse] | Declaration use          |
| Uint32           | Array size               |
| Uint8            | Type (1=input, 2=output) |

## ReturnValue

| Type             | Description     |
|------------------|-----------------|
| [Variable]       | Variable        |
| [DeclarationUse] | Declaration use |
| Uint32           | Array size      |

## ClassDeclaration

| Type              | Description       |
|-------------------|-------------------|
| [TypeDeclaration] | Type declaration  |
| [String]          | Parent class name |
| [NameSpace]       | Class members     |

## TemplateDeclaration

| Type              | Description                  |
|-------------------|------------------------------|
| [TypeDeclaration] | Type declaration             |
| Uint32            | Number of template arguments |

## SimpleTypeDeclaration

| Type              | Description      |
|-------------------|------------------|
| [TypeDeclaration] | Type declaration |

## TemplateInstance

| Type              | Description                      |
|-------------------|----------------------------------|
| [TypeDeclaration] | Type declaration                 |
| [String]          | Base type name                   |
| Uint32            | Number of template arguments (N) |
| [String] (N)      | Template arguments               |

## DDLUnitDeclaration

| Type          | Description |
|---------------|-------------|
| [Declaration] | Declaration |
| [String]      | Unit name   |
| [String]      | Unit dir    |

## DupSpaceDeclaration

| Type          | Description |
|---------------|-------------|
| [Declaration] | Declaration |

[Action]: #action
[AdapterDeclaration]: #adapterdeclaration
[ClassDeclaration]: #classdeclaration
[DatasetDeclaration]: #datasetdeclaration
[DDLUnitDeclaration]: #ddlunitdeclaration
[Declaration]: #declaration
[DeclarationUse]: #declarationuse
[DOClassDeclaration]: #doclassdeclaration
[DupSpaceDeclaration]: #dupspacedeclaration
[MethodDeclaration]: #methoddeclaration
[NameSpace]: #namespace
[NameSpaceItem]: #namespaceitem
[NameSpaceRef]: #namespaceref
[Parameter]: #parameter
[ParseTreeItem]: #parsetreeitem
[PropertyDeclaration]: #propertydeclaration
[ProtocolDeclaration]: #protocoldeclaration
[ReturnValue]: #returnvalue
[RMC]: #rmc
[SimpleTypeDeclaration]: #simpletypedeclaration
[String]: #string
[TemplateDeclaration]: #templatedeclaration
[TemplateInstance]: #templateinstance
[TypeDeclaration]: #typedeclaration
[Variable]: #variable
