---
layout: post
toc: true
title: Switch Tokens
---

Many Switch servers use JWTs (json web tokens) for authentication. JWTs are a simple and standardized way to pass information between servers without storing it in a database. A JWT consists of three parts separated by dots, and each part is encoded with base64url.

JWTs are described formally in [RFC 7515](https://tools.ietf.org/html/rfc7515), [RFC 7518](https://tools.ietf.org/html/rfc7518) and [RFC 7519](https://tools.ietf.org/html/rfc7519).

Details on specific kinds of token:
* [Device auth tokens](#dauth-tokens)
* [Application auth tokens](#aauth-tokens)
* [BaaS access tokens](#baas-access-tokens)
* [BaaS user tokens](#baas-user-tokens)
* [ID tokens](#id-tokens)
* [Contents authorization token for aauth](#contents-authorization-token-for-aauth)
* [NPLN access tokens](#npln-access-tokens)

### Header
The first part contains metadata about the JWT, such as the signature algorithm that is used.

| Field | Description                                                                                                                                                      |
|-------|------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `alg` | **Algorithm:** Usually `RS256`, but the NPLN server uses `ES256`.                                                                                                |
| `jku` | **JWK Set URL:** The URL of a server that provides a [JWK set](#jwk-set). This server provides the public keys that are used to verify the signature of the JWT. |
| `kid` | **Key ID:** Selects a key from the JWK set provided by the `jku` server. This is a uuid v4 on Nintendo's servers.                                                |
| `typ` | **Type:** Always `JWT`.                                                                                                                                          |

Example:

```json
{
  "jku": "https://dcert-lp1.ndas.srv.nintendo.net/keys",
  "kid": "2567fb65-eacb-48ba-9eb0-ed815a9f1a06",
  "typ": "JWT",
  "alg": "RS256"
}
```

### Payload
The second part contains the information that's stored in the JWT, such as the user id. The content of the payload depends on the type of token, but the following fields are usually present:

| Field | Description                                                                          |
|-------|--------------------------------------------------------------------------------------|
| `sub` | **Subject:** An id that identifies what the JWT is about, such as a user id.         |
| `aud` | **Audience:** An id that specifies the intended recipient of the JWT (server-side).  |
| `exp` | **Expiration Time:** A timestamp that specifies the expiration date of the JWT.      |
| `iat` | **Issued At:** A timestamp that specifies the time at which the token was generated. |
| `iss` | **Issuer:** The server that generated the JWT.                                       |
| `jti` | **JWT ID:** A unique id per generated JWT.                                           |

### Signature
The third part contains the signature. This prevents the JWT from being modified by anyone. Nintendo uses the RS256 algorithm on most servers, but the NPLN server uses ES256 instead.

The signature is calculated over both the [header](#header) and the [payload](#payload) in base64-encoded form with a dot in between. Only the server can generate the signature, because only the server knows the private keys. Anyone can verify the signature though, because anyone can download the public keys from the server that hosts the JWK set.

### JWK Set
The JWK set contains a set of public keys that can be used to verify the [signature](#signature) of the JWT. It's hosted by the server that's specified in the `jku` field in the [header](#header).

Each JWK contains the following fields:

| Field | Description                                                                                              |
|-------|----------------------------------------------------------------------------------------------------------|
| `kty` | **Key Type:** Always `RSA`.                                                                              |
| `e`   | **Exponent:** The public exponent of the RSA key (base64url).                                            |
| `n`   | **Modulus:** The public modulus of the RSA key (base64url).                                              |
| `alg` | **Algorithm:** Always `RS256`.                                                                           |
| `use` | **Public Key Use:** Always `sig`.                                                                        |
| `kid` | **Key ID:** A unique id that identifies the key. This id is also specified in the [JWT header](#header). |

The baas server also returns the following fields:

| Field   | Description               |
|---------|---------------------------|
| `usage` | `developer` or `internal` |
| `x5c`   | X.509 Certificate Chain   |

JWKs are described formally in [RFC 7517](https://tools.ietf.org/html/rfc7517) and [RFC 7518](https://tools.ietf.org/html/rfc7518).

Most JWKs are regenerated every 24 hours. The only exception is the JWK for BaaS [access](#baas-access-tokens) and [user](#baas-user-tokens) tokens, which never changes. To ensure that all valid tokens can be verified, even after a new JWK is generated, the JWK set contains the two previous JWKs as well.

### Example
```
eyJqa3UiOiJodHRwczovL2RjZXJ0LWxwMS5uZGFzLnNydi5uaW50ZW5kby5uZXQva2V5cyIsImtpZCI6IjM2NzllMT
g4LTI5ZWUtNDE4Zi04ZDkwLWI3MjRjYzg1MzQ0MSIsInR5cCI6IkpXVCIsImFsZyI6IlJTMjU2In0.eyJzdWIiOiI2
ODMzN2FjYTI4ODE1Y2JiIiwiaXNzIjoiZGF1dGgtbHAxLm5kYXMuc3J2Lm5pbnRlbmRvLm5ldCIsImF1ZCI6IjhmOD
Q5YjVkMzQ3NzhkOGUiLCJleHAiOjE2MzI3NjMzMDEsImlhdCI6MTYzMjY3NjkwMSwianRpIjoiZTU5YTBiMGUtOTRl
MS00NGFhLWI1ZGItMGZjMGNmNTAyYWRhIiwibmludGVuZG8iOnsic24iOiJYQVcxMDAxMjM0NTY3OCIsInBjIjoiSE
FDIiwiZHQiOiJOWCBQcm9kIDEiLCJpc3QiOmZhbHNlfX0.Mdl42B_tWnQQZkpp0qkvEwpkAFGos1YQ8OBKDr_rJCQl
NVZLrP6_sd53U8kvwI6TWbnuxFtNxcVJh21kbbY23WsjwQN9Ph2pbjEmneov5b5SfAjWSvfEqt_ViKFQVLv_MZZXQp
BYZSQmJ3sA-BbOjeEO6JI5XI3_KR0uj9IxSH_LNSiEwMMNLkP0PcC3gO5cSKcmnb1NPW2BMMdlKOSIbxDSWE4sEuYt
2Pl_u2F6hVMVeoC-4z43lIv2tv7aF9Pwv-D7MR-mOxQaxYVHw2Ux4FL0zPZOJMU6qPgfzACeItd6H_A4OBMKSQwBl4
DEbSwdle5tph-ur01K91FhXhI6BA
```

## DAuth Tokens

| Field | Value                                        |
|-------|----------------------------------------------|
| `alg` | `RS256`                                      |
| `jku` | https://dcert-lp1.ndas.srv.nintendo.net/keys |
| `kid` | Key id                                       |
| `typ` | `JWT`                                        |

Payload fields:

| Field      | Description                               |
|------------|-------------------------------------------|
| `sub`      | Device id                                 |
| `aud`      | Client id                                 |
| `exp`      | Expires at                                |
| `iat`      | Issued at                                 |
| `iss`      | `dauth-lp1.ndas.srv.nintendo.net`         |
| `jti`      | JWT id                                    |
| `nintendo` | [Device information](#device-information) |

### Device Information

| Field | Description              |
|-------|--------------------------|
| `sn`  | Serial number            |
| `pc`  | Product code: `HAC`      |
| `dt`  | Device type: `NX Prod 1` |
| `ist` | IsT (bool)               |

### Example
```json
{
    "sub": "68337aca28815cbb",
    "aud": "8f849b5d34778d8e",
    "exp": 1632763301,
    "iat": 1632676901,
    "iss": "dauth-lp1.ndas.srv.nintendo.net",
    "jti": "e59a0b0e-94e1-44aa-b5db-0fc0cf502ada",
    "nintendo": {
        "sn": "XAW10012345678",
        "pc": "HAC",
        "dt": "NX Prod 1",
        "ist": false
    }
}
```

## AAuth Tokens

| Field | Value                                        |
|-------|----------------------------------------------|
| `alg` | `RS256`                                      |
| `jku` | https://acert-lp1.ndas.srv.nintendo.net/keys |
| `kid` | Key id                                       |
| `typ` | `JWT`                                        |

Payload fields:

| Field      | Description                                         |
|------------|-----------------------------------------------------|
| `sub`      | Title id (`%016x`)                                  |
| `exp`      | Expires at                                          |
| `iat`      | Issued at                                           |
| `iss`      | `aauth-lp1.ndas.srv.nintendo.net`                   |
| `jti`      | JWT id                                              |
| `nintendo` | [Application information](#application-information) |

### Application Information

| Field | Description                                         |
|-------|-----------------------------------------------------|
| `ai`  | Application id (`%016x`)                            |
| `av`  | Application version (`%04x`)                        |
| `at`  | Application time (current timestamp)                |
| `edi` | Unique id (32 hex digits)                           |
| `opp` | Online play policy: `MEMBERSHIP_REQUIRED` or `FREE` |

Only present if online play policy is `MEMBERSHIP_REQUIRED`:

| Field | Description                               |
|-------|-------------------------------------------|
| `ph`  | Policy handler: `SYSTEM` or `GAME_SERVER` |

Only present for system titles:

| Field | Description               |
|-------|---------------------------|
| `di`  | Device id                 |
| `sn`  | Serial number             |
| `pc`  | Product code (`HAC`)      |
| `dt`  | Device type (`NX Prod 1`) |
| `ist` | IsT (bool)                |

### Example
```json
{
    "sub": "0100abf008968000",
    "exp": 1632763301,
    "iat": 1632676901,
    "iss": "aauth-lp1.ndas.srv.nintendo.net",
    "jti": "82df667b-0da1-4381-87e4-1ae403c8b568",
    "nintendo": {
        "ai": "0100abf008968000",
        "av": "0007",
        "at": 1632676901,
        "edi": "b46bda4e1dd5e7ce002430a68b2c6d4e",
        "opp": "MEMBERSHIP_REQUIRED",
        "ph": "GAME_SERVER"
    }
}
```

## BaaS Access Tokens

| Field | Value                                                                                  |
|-------|----------------------------------------------------------------------------------------|
| `alg` | `RS256`                                                                                |
| `jku` | https://e0d67c509fb203858ebcb2fe3f88c2aa.baas.nintendo.com/1.0.0/internal_certificates |
| `kid` | `3083c1b2-5d68-434b-be32-11f915570500`                                                 |

Payload fields:

| Field      | Description                                                |
|------------|------------------------------------------------------------|
| `sub`      | `ed9e2f05d286f7b8`                                         |
| `aud`      | `ed9e2f05d286f7b8`                                         |
| `exp`      | Expires at                                                 |
| `iat`      | Issued at                                                  |
| `iss`      | https://e0d67c509fb203858ebcb2fe3f88c2aa.baas.nintendo.com |
| `jti`      | JWT id                                                     |
| `typ`      | Always `token`                                             |
| `bs:grt`   | Grant type (always 1)                                      |
| `bs:sts`   | Status (always `[385]`)                                    |
| `nintendo` | [Device information](#device-information-0)                |

### Device Information

| Field | Description              |
|-------|--------------------------|
| `dt`  | Device type: `NX Prod 1` |
| `pc`  | Product code: `HAC`      |
| `di`  | Device id                |
| `sn`  | Serial number            |
| `ist` | IsT (bool)               |

### Example
```json
{
    "sub": "ed9e2f05d286f7b8",
    "aud": "ed9e2f05d286f7b8",
    "exp": 1632687701,
    "iat": 1632676901,
    "iss": "https://e0d67c509fb203858ebcb2fe3f88c2aa.baas.nintendo.com",
    "jti": "878d0735-571a-4b94-82a6-2bf183114db1",
    "typ": "token",
    "bs:grt": 1,
    "bs:sts": [385],
    "nintendo": {
        "dt": "NX Prod 1",
        "pc": "HAC",
        "di": "68337aca28815cbb",
        "sn": "XAW10012345678",
        "ist": false
    }
}
```

## BaaS User Tokens

| Field | Value                                                                                  |
|-------|----------------------------------------------------------------------------------------|
| `alg` | `RS256`                                                                                |
| `jku` | https://e0d67c509fb203858ebcb2fe3f88c2aa.baas.nintendo.com/1.0.0/internal_certificates |
| `kid` | `3083c1b2-5d68-434b-be32-11f915570500`                                                 |

Payload fields:

| Field    | Description                                                             |
|----------|-------------------------------------------------------------------------|
| `sub`    | User id (`%016x`)                                                       |
| `aud`    | `ed9e2f05d286f7b8`                                                      |
| `exp`    | Expires at                                                              |
| `iat`    | Issued at                                                               |
| `iss`    | https://e0d67c509fb203858ebcb2fe3f88c2aa.baas.nintendo.com              |
| `jti`    | JWT id                                                                  |
| `typ`    | Always `token`                                                          |
| `bs:grt` | Grant type (always 2)                                                   |
| `bs:did` | Device account id                                                       |
| `bs:sts` | Status (always `[10414578180576298,272640,1,0,0,19316357715722240,16]`) |

Example:

```json
{
    "sub": "b4922963e6b8deb2",
    "aud": "ed9e2f05d286f7b8",
    "exp": 1644766994,
    "iat": 1644756194,
    "iss": "https://e0d67c509fb203858ebcb2fe3f88c2aa.baas.nintendo.com",
    "jti": "aedb91a6-1cf9-4a0e-bfbd-1ccdd191b4e3",
    "typ": "token",
    "bs:grt": 2,
    "bs:did": "2ded458f5e0beee2",
    "bs:sts": [10414578180576298, 272640, 1, 0, 0, 19316357715722240, 16]
}
```

## ID Tokens

| Field | Value                                                                         |
|-------|-------------------------------------------------------------------------------|
| `alg` | `RS256`                                                                       |
| `jku` | https://e0d67c509fb203858ebcb2fe3f88c2aa.baas.nintendo.com/1.0.0/certificates |
| `kid` | Key id                                                                        |

Payload fields:

| Field      | Description                                                                                        |
|------------|----------------------------------------------------------------------------------------------------|
| `sub`      | User id (`%016x`)                                                                                  |
| `aud`      | Always `ed9e2f05d286f7b8`                                                                          |
| `exp`      | Expires at                                                                                         |
| `iat`      | Issued at                                                                                          |
| `iss`      | https://e0d67c509fb203858ebcb2fe3f88c2aa.baas.nintendo.com                                         |
| `jti`      | JWT id                                                                                             |
| `typ`      | Always `id_token`                                                                                  |
| `bs:did`   | Device account id (`%016x`)                                                                        |
| `nintendo` | [Application information](#application-information-1) (only present if an aauth token is provided) |

### Application Information

| Field | Description                          |
|-------|--------------------------------------|
| `ai`  | Application id (`%016x`)             |
| `av`  | Application version (`%04x`)         |
| `at`  | Application time (current timestamp) |
| `edi` | Unique id (copied from aauth token)  |

Only present if the policy handler is `GAME_SERVER`:

| Field | Description                                  |
|-------|----------------------------------------------|
| `ph`  | `GAME_SERVER`                                |
| `opp` | `MEMBERSHIP_REQUIRED`                        |
| `hm`  | Bool, whether the user has an NSO membership |

### Example
```json
{
    "sub": "b4922963e6b8deb2",
    "aud": "ed9e2f05d286f7b8",
    "exp": 1644766994,
    "iat": 1644756194,
    "iss": "https://e0d67c509fb203858ebcb2fe3f88c2aa.baas.nintendo.com",
    "jti": "164eea2b-508c-47d0-9d48-9eca1cac0f56",
    "typ": "id_token",
    "bs:did": "2ded458f5e0beee2",
    "nintendo": {
        "ai": "0100abf008968000",
        "av": "0007",
        "at": 1644756194,
        "edi": "84e16d390427028b3788ef082d342ce0"
    }
}
```

## Contents Authorization Token for AAuth

| Field | Value                                                                                                               |
|-------|---------------------------------------------------------------------------------------------------------------------|
| `alg` | `RS256`                                                                                                             |
| `jku` | [`https:\/\/pubkey.lp1.dragons.nintendo.net\/cata\/v1\/jwks`](https://pubkey.lp1.dragons.nintendo.net/cata/v1/jwks) |
| `kid` | Key id                                                                                                              |
| `typ` | `JWT`                                                                                                               |

Payload fields:

| Field       | Description                                 |
|-------------|---------------------------------------------|
| `aud`       | Title id (`%016x`)                          |
| `exp`       | Expires at                                  |
| `iat`       | Issued at                                   |
| `iss`       | `lp1.dragons.nintendo.net`                  |
| `jti`       | JWT id                                      |
| `device_id` | Device id (`%016x`)                         |
| `content`   | [Content information](#content-information) |

### Content Information

| Field             | Description                   |
|-------------------|-------------------------------|
| `title_id`        | Title id (`%016x`)            |
| `na_id`           | Nintendo account id (`%016x`) |
| `ticket_id`       | Ticket id (integer)           |
| `is_owned_rights` | Boolean                       |

### Example
```json
{
    "aud": "010040600c5ce000",
    "exp": 1667334879,
    "iat": 1667248479,
    "iss": "lp1.dragons.nintendo.net",
    "jti": "4df2e656-8e96-409a-8a7e-bd1dd1bbc572"
    "device_id": "62659661e3fdfe11",
    "content": {
        "title_id": "010040600c5ce000",
        "na_id": "72b0f0bdb31753d5",
        "ticket_id": 72212894349604939,
        "is_owned_rights": true
    }
}
```

## NPLN Access Tokens

| Field | Value                     |
|-------|---------------------------|
| `alg` | `ES256`                   |
| `jku` | `jwkSets/nplnAccessToken` |
| `kid` | Key id                    |

Payload fields:

| Field  | Description                           |
|--------|---------------------------------------|
| `sub`  | NPLN user id                          |
| `exp`  | Expires at                            |
| `iat`  | Issued at                             |
| `iss`  | `default iss`                         |
| `npln` | [NPLN information](#npln-information) |

### NPLN Information

| Field           | Description                                            |
|-----------------|--------------------------------------------------------|
| `tid`           | Tenant id                                              |
| `aid`           | NPLN account id                                        |
| `app_id`        | Title id (`%016x`)                                     |
| `ext_id`        | External id (`%016x`)                                  |
| `ext_id_type`   | Always 1 (meaning `nsa_id_token`)                      |
| `authorization` | Authorization information (#authorization-information) |

### Authorization Information

| Field            | Description              |
|------------------|--------------------------|
| `allow`          | List of allowed services |
| `deny`           | List of denied services  |
| `nso_restricted` | Boolean                  |

### Example
```json
{
    "sub":"u-qrz62qwckcdi64n2woom",
    "exp": 1669741833,
    "iat": 1669713033,
    "iss": "default iss",
    "npln": {
        "tid":"t-50e39f8f-lp1",
        "aid": "a-atqget1l7bndtkkkoq0m",
        "app_id": "01008f6008c5e000",
        "ext_id": "b4922963e6b8deb2",
        "ext_id_type": 1,
        "authorization": {
            "allow": ["nn.npln.auth.**", "**"],
            "deny": [],
            "nso_restricted": false
        },
    }
}
```
