---
layout: post
toc: true
title: Xenoblade Chronicles X (112)
---

At some point NEX was updated and both `MigrateGatheringOwnership` and `UpdateSessionHost` to have additional parameters. These then became the new `MigrateGatheringOwnership` and `UpdateSessionHost`, and the old methods without the additional parameters became `MigrateGatheringOwnershipV1` and `UpdateSessionHostV1`. Xenoblade Chronicles X uses the old versions of these methods

## Methods

| Method ID | Method Name                                                     |
|-----------|-----------------------------------------------------------------|
| 36        | [MigrateGatheringOwnership](#36-migrategatheringownership) |
| 40        | [UpdateSessionHost](#40-updatesessionhost)                 |

### (36) MigrateGatheringOwnership
#### Request

| Type                | Name                    | Description              |
|---------------------|-------------------------|--------------------------|
| Uint32              | gid                     | Gathering id             |
| [List]&lt;[PID]&gt; | lstPotentialNewOwnersID | Potential new owner pids |

#### Response

| Type | Name     | Description |
|------|----------|-------------|
| Bool | %retval% | Result      |

### (40) UpdateSessionHost
#### Request

| Type   | Name | Description  |
|--------|------|--------------|
| Uint32 | gid  | Gathering id |

#### Response
This method does not return anything.

[List]: /docs/nex/types#list
[PID]: /docs/nex/types#pid
