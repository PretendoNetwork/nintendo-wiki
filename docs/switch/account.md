---
layout: post
toc: true
title: Nintendo Accounts
---

This server is responsible for Nintendo accounts. Nintendo accounts are created off-device, and are required to use Nintendo Switch online services, including the eShop. For more information on Nintendo accounts, check out [Nintendo's support page](https://en-americas-support.nintendo.com/app/answers/detail/a_id/16005/).

The API takes form-encoded requests and responds with json-encoding.

## Website
The website can be visited in a web browser at https://accounts.nintendo.com. Static assets, such as css and javascript files are hosted on https://cdn.accounts.nintendo.com.

On this website, one can either create a Nintendo account directly, or create a Nintendo account from a Facebook, Google, Twitter or Apple account. A Nintendo account contains basic profile information, such as nickname and birthday, but also many more advanced features such as two-factor authentication and [family groups](https://en-americas-support.nintendo.com/app/answers/detail/a_id/28815/).

## Headers

| Header         | Description                         |
| -------------- | ----------------------------------- |
| Host           | `accounts.nintendo.com`             |
| User-Agent     | [User agent](#user-agents)          |
| Accept         | `*/*`                               |
| Content-Length | Content length                      |
| Content-Type   | `application/x-www-form-urlencoded` |

## User Agents
For browser requests made during authorization:

| System Version  | User agent                                                                                                                                    |
| --------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| 13.1.0 - 13.2.1 | `Mozilla/5.0 (Nintendo Switch; LoginApplet; Nintendo Switch) AppleWebKit/606.4 (KHTML, like Gecko) NF/6.0.1.19.3 NintendoBrowser/5.1.0.21761` |
| 15.0.1          | `Mozilla/5.0 (Nintendo Switch; LoginApplet; Nintendo Switch) AppleWebKit/609.4 (KHTML, like Gecko) NF/6.0.2.21.5 NintendoBrowser/5.1.0.22497` |

For API requests made by the account sysmodule:

| System Version  | User agent                                                                                 |
| --------------- | ------------------------------------------------------------------------------------------ |
| 9.0.0 - 9.2.0   | `libcurl (nnAccount; 789f928b-138e-4b2f-afeb-1acae821d897; SDK 9.3.0.0; Add-on 9.3.0.0)`   |
| 10.0.0 - 10.2.0 | `libcurl (nnAccount; 789f928b-138e-4b2f-afeb-1acae821d897; SDK 10.4.0.0; Add-on 10.4.0.0)` |
| 11.0.0 - 11.0.1 | `libcurl (nnAccount; 789f928b-138e-4b2f-afeb-1acae821d897; SDK 11.4.0.0; Add-on 11.4.0.0)` |
| 12.0.0 - 12.1.0 | `libcurl (nnAccount; 789f928b-138e-4b2f-afeb-1acae821d897; SDK 12.3.0.0; Add-on 12.3.0.0)` |
| 13.0.0          | `libcurl (nnAccount; 789f928b-138e-4b2f-afeb-1acae821d897; SDK 13.3.0.0; Add-on 13.3.0.0)` |
| 13.1.0 - 13.2.1 | `libcurl (nnAccount; 789f928b-138e-4b2f-afeb-1acae821d897; SDK 13.4.0.0; Add-on 13.4.0.0)` |
| 14.0.0 - 14.1.2 | `libcurl (nnAccount; 789f928b-138e-4b2f-afeb-1acae821d897; SDK 14.3.0.0; Add-on 14.3.0.0)` |
| 15.0.0 - 15.0.1 | `libcurl (nnAccount; 789f928b-138e-4b2f-afeb-1acae821d897; SDK 15.3.0.0; Add-on 15.3.0.0)` |

## Methods
**accounts.nintendo.com:**

| Method | URL                                                                          |
| ------ | ---------------------------------------------------------------------------- |
| GET    | <code><a href="#get-connect100authorize">/connect/1.0.0/authorize</a></code> |
| POST   | <code><a href="#post-connect100apitoken">/connect/1.0.0/api/token</a></code> |
| GET    | `/api/1.0.0/users/<id>/qrcode_param`                                         |
| GET    | `/profile`                                                                   |

**api.accounts.nintendo.com:**

| Method | URL               |
| ------ | ----------------- |
| GET    | `/2.0.0/users/me` |

### GET /connect/1.0.0/authorize
This method accepts [OAuth 2](https://oauth.net/2/) authorization requests. The following parameters may be provided in addition to standard OAuth parameters:

| Param | Description                                                          |
| ----- | -------------------------------------------------------------------- |
| theme | `register`, `intro`, `email_authentication` or `simple_authenticate` |

The Switch always requests the scope `nx`.

### POST /connect/1.0.0/api/token
This method accepts [OAuth 2](https://oauth.net/2/) token requests. The following parameters may be provided in addition to standard OAuth parameters:

| Param                       | Description                  |
| --------------------------- | ---------------------------- |
| device_authentication_token | [Device token](/docs/switch/dauth) |

The Switch requests the scope `openid offline napps urn:oauth:init-sso user user.birthday user.email user.links user.links[].id user.loginId user.screenName user.terms`.

## Known Client IDs

| Client ID          | Name       | Redirect URI                |
| ------------------ | ---------- | --------------------------- |
| `6ffd70c434d303c8` | NxAccount  | nintendo://account.nx.sys   |
| `e56201e414c97a10` | NxShop     | nintendo://shop.nx.sys      |
| `57d3dbaa12cb06a9` | NxFriends  | nintendo://friends.nx.sys   |
| `48d6d1f020427ad7` | NxELicense | nintendo://e-license.nx.sys |
| `f4e5f2f3e022208b` | NxLHub     | nintendo://lhub.nx.sys      |

## Errors
On error, the server sends the following response:

| Field             | Description              |
| ----------------- | ------------------------ |
| error             | Error name               |
| error_description | Error description        |
| error_detail      | Error details (optional) |

### Known Errors
`/2.0.0/users/me` and `/api/1.0.0/users/<id>/qrcode_param`:

| Name               | Description |
| ------------------ | ----------- |
| invalid_token      | ?           |
| insufficient_scope | ?           |
| under_maintenance  | ?           |

`/connect/1.0.0/api/token`:

| Name                   | Detail                        | Description                             |
| ---------------------- | ----------------------------- | --------------------------------------- |
| invalid_request        |                               | The request does not satisfy the schema |
| invalid_client         |                               | Client authentication failed            |
| invalid_grant          |                               | ?                                       |
| invalid_grant          | user_deleted                  | ?                                       |
| invalid_grant          | user_banned                   | ?                                       |
| invalid_grant          | user_suspended                | ?                                       |
| invalid_grant          | user_withdrawn                | ?                                       |
| invalid_grant          | user_terms_agreement_required | ?                                       |
| invalid_scope          |                               | ?                                       |
| invalid_scope          | scope_token_unknown           | The requested scope is invalid          |
| invalid_scope          | scope_token_prohibited        | ?                                       |
| invalid_scope          | scope_token_not_authorized    | ?                                       |
| unauthorized_client    |                               | ?                                       |
| unsupported_grant_type |                               | ?                                       |
| server_error           |                               | ?                                       |
| under_maintenance      |                               | ?                                       |

Others:

| Name                 | Detail                            | Description                           |
| -------------------- | --------------------------------- | ------------------------------------- |
| unauthorized_client  |                                   | ?                                     |
| access_denied        |                                   | ?                                     |
| access_denied        | id_token_hint_invalid             | ?                                     |
| access_denied        | user_deleted                      | ?                                     |
| invalid_scope        |                                   | ?                                     |
| invalid_scope        | scope_token_unknown               | ?                                     |
| invalid_scope        | scope_token_prohibited            | The requested scope is not authorized |
| server_error         |                                   | ?                                     |
| login_required       |                                   | ?                                     |
| login_required       | user_not_logged_in                | ?                                     |
| login_required       | user_different_from_id_token_hint | ?                                     |
| consent_required     |                                   | ?                                     |
| interaction_required |                                   | ?                                     |
| interaction_required | user_banned                       | ?                                     |
| interaction_required | user_suspended                    | ?                                     |
| interaction_required | user_terms_agreement_required     | ?                                     |
| under_maintenance    |                                   | ?                                     |
