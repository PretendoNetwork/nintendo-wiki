---
layout: post
toc: true
title: Wii U Error Codes
---

An error code contains a module id and a module-specific code, separated by a dash. For example: `106-0502`.

This page lists the technical reason behind the errors that may occur. The messages that are shown to the user can be found on a separate page: [Wii U Error Messages](/docs/wiiu/error-messages).


The following module ids are known:

| Module | Code | Description                              |
|--------|------|------------------------------------------|
| 101    | FP   | [Friends](#fp-error-codes)               |
| 102    | ACT  | [Accounts](#act-error-codes)             |
| 103    | AC   | Internet connection                      |
| 104    | BOSS | Spotpass                                 |
| 105    | NIM  | Title installation                       |
| 106    | NEX  | [Game servers](#nex-error-codes)         |
| 107    |      | [eShop (api)](#eshop-errors-api)         |
| 109    | NEI  | eShop (REST)                             |
| 111    |      | [eShop (website)](#eshop-errors-website) |
| 112    |      | Internet browser                         |
| 115    | OLV  | Miiverse                                 |
| 117    | NWF  | Nintendo web framework                   |
| 118    | PIA  | Peer to peer                             |
| 123    |      | E-commerce applet                        |
| 124    | EC   | E-commerce                               |
| 150    | FS   | Filesystem                               |
| 151    | KPAD | Controller                               |
| 152    | WPAD | Wiimote                                  |
| 153    |      | USB HID                                  |
| 154    |      | USB microphone                           |
| 155    | SAVE | Save files                               |
| 156    | UDS  | Local wireless                           |
| 157    | ACP  | Title launch                             |
| 158    |      | System settings                          |
| 159    |      | Security                                 |
| 160    |      | System error                             |
| 162    | MCP  | Title management                         |
| 165    | VPAD | Gamepad                                  |
| 166    | TEMP | Temporary storage                        |
| 168    | NFP  | Amiibo                                   |
| 199    | CMN  | General                                  |

## FP Error Codes

| Error code | Name                                             |
|------------|--------------------------------------------------|
| 101-0000   | SUCCESS                                          |
| 101-0001   | SESSION_CLOSED                                   |
| 101-0010   | PROGRAMMING_ERROR                                |
| 101-0011   | NOT_INITIALIZED                                  |
| 101-0012   | ALREADY_INITIALIZED                              |
| 101-0013   | INVALID_ARGUMENT                                 |
| 101-0014   | BUSY                                             |
| 101-0015   | NETWORK_CLOCK_INVALID                            |
| 101-0016   | NOT_PERMITTED                                    |
| 101-0100   | CORE_UNDEFINED                                   |
| 101-0101   | CORE_RESERVED_01                                 |
| 101-0102   | CORE_UNKNOWN                                     |
| 101-0103   | CORE_NOT_IMPLEMENTED                             |
| 101-0104   | CORE_INVALID_POINTER                             |
| 101-0105   | CORE_OPERATION_ABORTED                           |
| 101-0106   | CORE_EXCEPTION                                   |
| 101-0107   | CORE_ACCESS_DENIED                               |
| 101-0108   | CORE_INVALID_HANDLE                              |
| 101-0109   | CORE_INVALID_INDEX                               |
| 101-0110   | CORE_OUT_OF_MEMORY                               |
| 101-0111   | CORE_INVALID_ARGUMENT                            |
| 101-0112   | CORE_TIMEOUT                                     |
| 101-0113   | CORE_INITIALIZATION_FAILURE                      |
| 101-0114   | CORE_CALL_INITIATION_FAILURE                     |
| 101-0115   | CORE_REGISTRATION_ERROR                          |
| 101-0116   | CORE_BUFFER_OVERFLOW                             |
| 101-0117   | CORE_INVALID_LOCK_STATE                          |
| 101-0200   | DDL_UNDEFINED                                    |
| 101-0201   | DDL_INVALID_SIGNATURE                            |
| 101-0202   | DDL_INCORRECT_VERSION                            |
| 101-0300   | RENDEZVOUS_UNDEFINED                             |
| 101-0301   | RENDEZVOUS_CONNECTION_FAILURE                    |
| 101-0302   | RENDEZVOUS_NOT_AUTHENTICATED                     |
| 101-0303   | RENDEZVOUS_INVALID_USERNAME                      |
| 101-0304   | RENDEZVOUS_INVALID_PASSWORD                      |
| 101-0305   | RENDEZVOUS_USERNAME_ALREADY_EXISTS               |
| 101-0306   | RENDEZVOUS_ACCOUNT_DISABLED                      |
| 101-0307   | RENDEZVOUS_ACCOUNT_EXPIRED                       |
| 101-0308   | RENDEZVOUS_CONCURRENT_LOGIN_DENIED               |
| 101-0309   | RENDEZVOUS_ENCRYPTION_FAILURE                    |
| 101-0310   | RENDEZVOUS_INVALID_PID                           |
| 101-0311   | RENDEZVOUS_MAX_CONNECTIONS_REACHED               |
| 101-0312   | RENDEZVOUS_INVALID_GID                           |
| 101-0313   | RENDEZVOUS_INVALID_THREAD_ID                     |
| 101-0314   | RENDEZVOUS_INVALID_OPERATION_IN_LIVE_ENVIRONMENT |
| 101-0315   | RENDEZVOUS_DUPLICATE_ENTRY                       |
| 101-0316   | RENDEZVOUS_CONTROL_SCRIPT_FAILURE                |
| 101-0317   | RENDEZVOUS_CLASS_NOT_FOUND                       |
| 101-0318   | RENDEZVOUS_RESERVED_18                           |
| 101-0319   | RENDEZVOUS_RESERVED_19                           |
| 101-0320   | RENDEZVOUS_DDL_MISMATCH                          |
| 101-0321   | RENDEZVOUS_RESERVED_21                           |
| 101-0322   | RENDEZVOUS_RESERVED_22                           |
| 101-0400   | PYTHON_CORE_UNDEFINED                            |
| 101-0401   | PYTHON_CORE_EXCEPTION                            |
| 101-0402   | PYTHON_CORE_TYPE_ERROR                           |
| 101-0403   | PYTHON_CORE_INDEX_ERROR                          |
| 101-0404   | PYTHON_CORE_INVALID_REFERENCE                    |
| 101-0405   | PYTHON_CORE_CALL_FAILURE                         |
| 101-0406   | PYTHON_CORE_MEMORY_ERROR                         |
| 101-0407   | PYTHON_CORE_KEY_ERROR                            |
| 101-0408   | PYTHON_CORE_OPERATION_ERROR                      |
| 101-0409   | PYTHON_CORE_CONVERSION_ERROR                     |
| 101-0410   | PYTHON_CORE_VALIDATION_ERROR                     |
| 101-0500   | TRANSPORT_UNDEFINED                              |
| 101-0501   | TRANSPORT_UNKNOWN                                |
| 101-0502   | TRANSPORT_CONNECTION_FAILURE                     |
| 101-0503   | TRANSPORT_INVALID_URL                            |
| 101-0504   | TRANSPORT_INVALID_KEY                            |
| 101-0505   | TRANSPORT_INVALID_URL_TYPE                       |
| 101-0506   | TRANSPORT_DUPLICATE_ENDPOINT                     |
| 101-0507   | TRANSPORT_IO_ERROR                               |
| 101-0508   | TRANSPORT_TIMEOUT                                |
| 101-0509   | TRANSPORT_CONNECTION_RESET                       |
| 101-0510   | TRANSPORT_INCORRECT_REMOTE_AUTHENTICATION        |
| 101-0511   | TRANSPORT_SERVER_REQUEST_ERROR                   |
| 101-0512   | TRANSPORT_DECOMPRESSION_FAILURE                  |
| 101-0513   | TRANSPORT_CONGESTED_END_POINT                    |
| 101-0514   | TRANSPORT_RESERVED_14                            |
| 101-0515   | TRANSPORT_RESERVED_15                            |
| 101-0516   | TRANSPORT_RESERVED_16                            |
| 101-0517   | TRANSPORT_RESERVED_17                            |
| 101-0518   | TRANSPORT_SOCKET_SEND_WARNING                    |
| 101-0519   | TRANSPORT_UNSUPPORTED_NAT                        |
| 101-0520   | TRANSPORT_DNS_ERROR                              |
| 101-0521   | TRANSPORT_PROXY_ERROR                            |
| 101-0522   | TRANSPORT_DATA_REMAINING                         |
| 101-0523   | TRANSPORT_NO_BUFFER                              |
| 101-0524   | TRANSPORT_NOT_FOUND                              |
| 101-0600   | DO_CORE_UNDEFINED                                |
| 101-0601   | DO_CORE_RESERVED_01                              |
| 101-0602   | DO_CORE_RESERVED_02                              |
| 101-0603   | DO_CORE_RESERVED_03                              |
| 101-0604   | DO_CORE_RESERVED_04                              |
| 101-0605   | DO_CORE_RESERVED_05                              |
| 101-0606   | DO_CORE_RESERVED_06                              |
| 101-0607   | DO_CORE_RESERVED_07                              |
| 101-0608   | DO_CORE_RESERVED_08                              |
| 101-0609   | DO_CORE_RESERVED_09                              |
| 101-0610   | DO_CORE_RESERVED_10                              |
| 101-0611   | DO_CORE_RESERVED_11                              |
| 101-0612   | DO_CORE_RESERVED_12                              |
| 101-0613   | DO_CORE_RESERVED_13                              |
| 101-0614   | DO_CORE_RESERVED_14                              |
| 101-0615   | DO_CORE_RESERVED_15                              |
| 101-0616   | DO_CORE_RESERVED_16                              |
| 101-0617   | DO_CORE_RESERVED_17                              |
| 101-0618   | DO_CORE_RESERVED_18                              |
| 101-0619   | DO_CORE_RESERVED_19                              |
| 101-0700   | FPD_UNDEFINED                                    |
| 101-0701   | FPD_RESERVED_01                                  |
| 101-0702   | FPD_NOT_INITIALIZED                              |
| 101-0703   | FPD_ALREADY_INITIALIZED                          |
| 101-0704   | FPD_NOT_CONNECTED                                |
| 101-0705   | FPD_CONNECTED                                    |
| 101-0706   | FPD_INITIALIZATION_FAILURE                       |
| 101-0707   | FPD_OUT_OF_MEMORY                                |
| 101-0708   | FPD_RMC_FAILED                                   |
| 101-0709   | FPD_INVALID_ARGUMENT                             |
| 101-0710   | FPD_RESERVED_10                                  |
| 101-0711   | FPD_INVALID_PRINCIPAL_ID                         |
| 101-0712   | FPD_RESERVED_12                                  |
| 101-0713   | FPD_RESERVED_13                                  |
| 101-0714   | FPD_RESERVED_14                                  |
| 101-0715   | FPD_RESERVED_15                                  |
| 101-0716   | FPD_RESERVED_16                                  |
| 101-0717   | FPD_RESERVED_17                                  |
| 101-0718   | FPD_RESERVED_18                                  |
| 101-0719   | FPD_RESERVED_19                                  |
| 101-0720   | FPD_FILE_IO_ERROR                                |
| 101-0721   | FPD_P2P_INTERNET_PROHIBITED                      |
| 101-0722   | FPD_UNKNOWN                                      |
| 101-0723   | FPD_INVALID_STATE                                |
| 101-0724   | FPD_RESERVED_24                                  |
| 101-0725   | FPD_ADD_FRIEND_PROHIBITED                        |
| 101-0726   | FPD_RESERVED_26                                  |
| 101-0727   | FPD_INVALID_ACCOUNT                              |
| 101-0728   | FPD_BLACKLISTED_BY_ME                            |
| 101-0729   | FPD_RESERVED_29                                  |
| 101-0730   | FPD_FRIEND_ALREADY_ADDED                         |
| 101-0731   | FPD_MY_FRIEND_LIST_LIMIT_EXCEED                  |
| 101-0732   | FPD_REQUEST_LIMIT_EXCEED                         |
| 101-0733   | FPD_INVALID_MESSAGE_ID                           |
| 101-0734   | FPD_MESSAGE_IS_NOT_MINE                          |
| 101-0735   | FPD_MESSAGE_IS_NOT_FOR_ME                        |
| 101-0736   | FPD_FRIEND_REQUEST_BLOCKED                       |
| 101-0737   | FPD_NOT_IN_MY_FRIEND_LIST                        |
| 101-0738   | FPD_FRIEND_LISTED_BY_ME                          |
| 101-0739   | FPD_NOT_IN_MY_BLACKLIST                          |
| 101-0740   | FPD_INCOMPATIBLE_ACCOUNT                         |
| 101-0741   | FPD_BLOCK_SETTING_CHANGE_NOT_ALLOWED             |
| 101-0742   | FPD_SIZE_LIMIT_EXCEEDED                          |
| 101-0743   | FPD_OPERATION_NOT_ALLOWED                        |
| 101-0744   | FPD_NOT_NETWORK_ACCOUNT                          |
| 101-0745   | FPD_NOTIFICATION_NOT_FOUND                       |
| 101-0746   | FPD_PREFERENCE_NOT_INITIALIZED                   |
| 101-0747   | FPD_FRIEND_REQUEST_NOT_ALLOWED                   |
| 101-0800   | AUTHENTICATION_UNDEFINED                         |
| 101-0801   | AUTHENTICATION_ACCOUNT_LIBRARY_ERROR             |
| 101-0802   | AUTHENTICATION_TOKEN_PARSE_ERROR                 |
| 101-0803   | AUTHENTICATION_RESERVED_03                       |
| 101-0804   | AUTHENTICATION_RESERVED_04                       |
| 101-0805   | AUTHENTICATION_RESERVED_05                       |
| 101-0806   | AUTHENTICATION_TOKEN_EXPIRED                     |
| 101-0807   | AUTHENTICATION_VALIDATION_FAILED                 |
| 101-0808   | AUTHENTICATION_INVALID_PARAM                     |
| 101-0809   | AUTHENTICATION_PRINCIPAL_ID_UNMATCHED            |
| 101-0810   | AUTHENTICATION_RESERVED_10                       |
| 101-0811   | AUTHENTICATION_UNDER_MAINTENANCE                 |
| 101-0812   | AUTHENTICATION_UNSUPPORTED_VERSION               |
| 101-0813   | AUTHENTICATION_UNKNOWN                           |

## ACT Error Codes

| Error code | Name                                              |
|------------|---------------------------------------------------|
| 102-0000   | MY_SUCCESS                                        |
| 102-0001   | MAIL_ADDRESS_NOT_CONFIRMED                        |
| 102-0500   | LIBRARY_ERROR                                     |
| 102-0501   | NOT_INITIALIZED                                   |
| 102-0502   | ALREADY_INITIALIZED                               |
| 102-0511   | BUSY                                              |
| 102-0591   | NOT_IMPLEMENTED                                   |
| 102-0592   | DEPRECATED                                        |
| 102-0593   | DEVELOPMENT_ONLY                                  |
| 102-0600   | INVALID_ARGUMENT                                  |
| 102-0601   | INVALID_POINTER                                   |
| 102-0602   | OUT_OF_RANGE                                      |
| 102-0603   | INVALID_SIZE                                      |
| 102-0604   | INVALID_FORMAT                                    |
| 102-0605   | INVALID_HANDLE                                    |
| 102-0606   | INVALID_VALUE                                     |
| 102-0700   | INTERNAL_ERROR                                    |
| 102-0701   | END_OF_STREAM                                     |
| 102-0710   | FILE_ERROR                                        |
| 102-0711   | FILE_NOT_FOUND                                    |
| 102-0712   | FILE_VERSION_MISMATCH                             |
| 102-0713   | FILE_IO_ERROR                                     |
| 102-0714   | FILE_TYPE_MISMATCH                                |
| 102-0730   | OUT_OF_RESOURCE                                   |
| 102-0731   | SHORT_OF_BUFFER                                   |
| 102-0740   | OUT_OF_MEMORY                                     |
| 102-0741   | OUT_OF_GLOBAL_HEAP                                |
| 102-0742   | OUT_OF_CROSS_PROCESS_HEAP                         |
| 102-0743   | OUT_OF_PROCESS_LOCAL_HEAP                         |
| 102-0744   | OUT_OF_MXML_HEAP                                  |
| 102-0800   | UC_ERROR                                          |
| 102-0801   | UC_OPEN_ERROR                                     |
| 102-0802   | UC_READ_SYS_CONFIG_ERROR                          |
| 102-0810   | MCP_ERROR                                         |
| 102-0811   | MCP_OPEN_ERROR                                    |
| 102-0812   | MCP_GET_INFO_ERROR                                |
| 102-0820   | ISO_ERROR                                         |
| 102-0821   | ISO_INIT_FAILURE                                  |
| 102-0822   | ISO_GET_COUNTRY_CODE_FAILURE                      |
| 102-0823   | ISO_GET_LANGUAGE_CODE_FAILURE                     |
| 102-0850   | MXML_ERROR                                        |
| 102-0900   | IOS_ERROR                                         |
| 102-0901   | IOS_OPEN_ERROR                                    |
| 102-1000   | ACCOUNT_MANAGEMENT_ERROR                          |
| 102-1001   | ACCOUNT_NOT_FOUND                                 |
| 102-1002   | SLOTS_FULL                                        |
| 102-1011   | ACCOUNT_NOT_LOADED                                |
| 102-1012   | ACCOUNT_ALREADY_LOADED                            |
| 102-1013   | ACCOUNT_LOCKED                                    |
| 102-1021   | NOT_NETWORK_ACCOUNT                               |
| 102-1022   | NOT_LOCAL_ACCOUNT                                 |
| 102-1023   | ACCOUNT_NOT_COMMITTED                             |
| 102-1101   | NETWORK_CLOCK_INVALID                             |
| 102-2000   | AUTHENTICATION_ERROR                              |
| 102-2100   | HTTP_ERROR                                        |
| 102-2101   | HTTP_UNSUPPORTED_PROTOCOL                         |
| 102-2102   | HTTP_FAILED_INIT                                  |
| 102-2103   | HTTP_URL_MALFORMAT                                |
| 102-2104   | HTTP_NOT_BUILT_IN                                 |
| 102-2105   | HTTP_COULDNT_RESOLVE_PROXY                        |
| 102-2106   | HTTP_COULDNT_RESOLVE_HOST                         |
| 102-2107   | HTTP_COULDNT_CONNECT                              |
| 102-2108   | HTTP_FTP_WEIRD_SERVER_REPLY                       |
| 102-2109   | HTTP_REMOTE_ACCESS_DENIED                         |
| 102-2110   | HTTP_OBSOLETE10                                   |
| 102-2111   | HTTP_FTP_WEIRD_PASS_REPLY                         |
| 102-2112   | HTTP_OBSOLETE12                                   |
| 102-2113   | HTTP_FTP_WEIRD_PASV_REPLY                         |
| 102-2114   | HTTP_FTP_WEIRD_227_FORMAT                         |
| 102-2115   | HTTP_FTP_CANT_GET_HOST                            |
| 102-2116   | HTTP_OBSOLETE16                                   |
| 102-2117   | HTTP_FTP_COULDNT_SET_TYPE                         |
| 102-2118   | HTTP_PARTIAL_FILE                                 |
| 102-2119   | HTTP_FTP_COULDNT_RETR_FILE                        |
| 102-2120   | HTTP_OBSOLETE20                                   |
| 102-2121   | HTTP_QUOTE_ERROR                                  |
| 102-2122   | HTTP_HTTP_RETURNED_ERROR                          |
| 102-2123   | HTTP_WRITE_ERROR                                  |
| 102-2124   | HTTP_OBSOLETE24                                   |
| 102-2125   | HTTP_UPLOAD_FAILED                                |
| 102-2126   | HTTP_READ_ERROR                                   |
| 102-2127   | HTTP_OUT_OF_MEMORY                                |
| 102-2128   | HTTP_OPERATION_TIMEDOUT                           |
| 102-2129   | HTTP_OBSOLETE29                                   |
| 102-2130   | HTTP_FTP_PORT_FAILED                              |
| 102-2131   | HTTP_FTP_COULDNT_USE_REST                         |
| 102-2132   | HTTP_OBSOLETE32                                   |
| 102-2133   | HTTP_RANGE_ERROR                                  |
| 102-2134   | HTTP_HTTP_POST_ERROR                              |
| 102-2135   | HTTP_SSL_CONNECT_ERROR                            |
| 102-2136   | HTTP_BAD_DOWNLOAD_RESUME                          |
| 102-2137   | HTTP_FILE_COULDNT_READ_FILE                       |
| 102-2138   | HTTP_LDAP_CANNOT_BIND                             |
| 102-2139   | HTTP_LDAP_SEARCH_FAILED                           |
| 102-2140   | HTTP_OBSOLETE40                                   |
| 102-2141   | HTTP_FUNCTION_NOT_FOUND                           |
| 102-2142   | HTTP_ABORTED_BY_CALLBACK                          |
| 102-2143   | HTTP_BAD_FUNCTION_ARGUMENT                        |
| 102-2144   | HTTP_OBSOLETE44                                   |
| 102-2145   | HTTP_INTERFACE_FAILED                             |
| 102-2146   | HTTP_OBSOLETE46                                   |
| 102-2147   | HTTP_TOO_MANY_REDIRECTS                           |
| 102-2148   | HTTP_UNKNOWN_OPTION                               |
| 102-2149   | HTTP_TELNET_OPTION_SYNTAX                         |
| 102-2150   | HTTP_OBSOLETE50                                   |
| 102-2151   | HTTP_PEER_FAILED_VERIFICATION                     |
| 102-2152   | HTTP_GOT_NOTHING                                  |
| 102-2153   | HTTP_SSL_ENGINE_NOTFOUND                          |
| 102-2154   | HTTP_SSL_ENGINE_SETFAILED                         |
| 102-2155   | HTTP_SEND_ERROR                                   |
| 102-2156   | HTTP_RECV_ERROR                                   |
| 102-2157   | HTTP_OBSOLETE57                                   |
| 102-2158   | HTTP_SSL_CERTPROBLEM                              |
| 102-2159   | HTTP_SSL_CIPHER                                   |
| 102-2160   | HTTP_SSL_CACERT                                   |
| 102-2161   | HTTP_BAD_CONTENT_ENCODING                         |
| 102-2162   | HTTP_LDAP_INVALID_URL                             |
| 102-2163   | HTTP_FILESIZE_EXCEEDED                            |
| 102-2164   | HTTP_USE_SSL_FAILED                               |
| 102-2165   | HTTP_SEND_FAIL_REWIND                             |
| 102-2166   | HTTP_SSL_ENGINE_INITFAILED                        |
| 102-2167   | HTTP_LOGIN_DENIED                                 |
| 102-2168   | HTTP_TFTP_NOTFOUND                                |
| 102-2169   | HTTP_TFTP_PERM                                    |
| 102-2170   | HTTP_REMOTE_DISK_FULL                             |
| 102-2171   | HTTP_TFTP_ILLEGAL                                 |
| 102-2172   | HTTP_TFTP_UNKNOWNID                               |
| 102-2173   | HTTP_REMOTE_FILE_EXISTS                           |
| 102-2174   | HTTP_TFTP_NOSUCHUSER                              |
| 102-2175   | HTTP_CONV_FAILED                                  |
| 102-2176   | HTTP_CONV_REQD                                    |
| 102-2177   | HTTP_SSL_CACERT_BADFILE                           |
| 102-2178   | HTTP_REMOTE_FILE_NOT_FOUND                        |
| 102-2179   | HTTP_SSH                                          |
| 102-2180   | HTTP_SSL_SHUTDOWN_FAILED                          |
| 102-2181   | HTTP_AGAIN                                        |
| 102-2182   | HTTP_SSL_CRL_BADFILE                              |
| 102-2183   | HTTP_SSL_ISSUER_ERROR                             |
| 102-2184   | HTTP_FTP_PRET_FAILED                              |
| 102-2185   | HTTP_RTSP_CSEQ_ERROR                              |
| 102-2186   | HTTP_RTSP_SESSION_ERROR                           |
| 102-2187   | HTTP_FTP_BAD_FILE_LIST                            |
| 102-2188   | HTTP_CHUNK_FAILED                                 |
| 102-2189   | HTTP_NSSL_NO_CTX                                  |
| 102-2210   | SO_ERROR                                          |
| 102-2211   | SO_SELECT_ERROR                                   |
| 102-2400   | REQUEST_ERROR                                     |
| 102-2401   | BAD_FORMAT_PARAMETER                              |
| 102-2402   | BAD_FORMAT_REQUEST                                |
| 102-2403   | REQUEST_PARAMETER_MISSING                         |
| 102-2404   | WRONG_HTTP_METHOD                                 |
| 102-2420   | RESPONSE_ERROR                                    |
| 102-2421   | BAD_FORMAT_RESPONSE                               |
| 102-2422   | RESPONSE_ITEM_MISSING                             |
| 102-2423   | RESPONSE_TOO_LARGE                                |
| 102-2441   | NOT_MODIFIED                                      |
| 102-2450   | INVALID_COMMON_PARAMETER                          |
| 102-2451   | INVALID_PLATFORM_ID                               |
| 102-2452   | UNAUTHORIZED_DEVICE                               |
| 102-2453   | INVALID_SERIAL_ID                                 |
| 102-2454   | INVALID_MAC_ADDRESS                               |
| 102-2455   | INVALID_REGION                                    |
| 102-2456   | INVALID_COUNTRY                                   |
| 102-2457   | INVALID_LANGUAGE                                  |
| 102-2458   | UNAUTHORIZED_CLIENT                               |
| 102-2459   | DEVICE_ID_EMPTY                                   |
| 102-2460   | SERIAL_ID_EMPTY                                   |
| 102-2461   | PLATFORM_ID_EMPTY                                 |
| 102-2471   | INVALID_UNIQUE_ID                                 |
| 102-2472   | INVALID_CLIENT_ID                                 |
| 102-2473   | INVALID_CLIENT_KEY                                |
| 102-2481   | INVALID_NEX_CLIENT_ID                             |
| 102-2482   | INVALID_GAME_SERVER_ID                            |
| 102-2483   | GAME_SERVER_ID_ENVIRONMENT_NOT_FOUND              |
| 102-2484   | GAME_SERVER_ID_UNIQUE_ID_NOT_LINKED               |
| 102-2485   | CLIENT_ID_UNIQUE_ID_NOT_LINKED                    |
| 102-2501   | DEVICE_MISMATCH                                   |
| 102-2502   | COUNTRY_MISMATCH                                  |
| 102-2503   | EULA_NOT_ACCEPTED                                 |
| 102-2510   | UPDATE_REQUIRED                                   |
| 102-2511   | SYSTEM_UPDATE_REQUIRED                            |
| 102-2512   | APPLICATION_UPDATE_REQUIRED                       |
| 102-2520   | UNAUTHORIZED_REQUEST                              |
| 102-2522   | REQUEST_FORBIDDEN                                 |
| 102-2530   | RESOURCE_NOT_FOUND                                |
| 102-2531   | PID_NOT_FOUND                                     |
| 102-2532   | NEX_ACCOUNT_NOT_FOUND                             |
| 102-2533   | GENERATE_TOKEN_FAILURE                            |
| 102-2534   | REQUEST_NOT_FOUND                                 |
| 102-2535   | MASTER_PIN_NOT_FOUND                              |
| 102-2536   | MAIL_TEXT_NOT_FOUND                               |
| 102-2537   | SEND_MAIL_FAILURE                                 |
| 102-2538   | APPROVAL_ID_NOT_FOUND                             |
| 102-2540   | INVALID_EULA_PARAMETER                            |
| 102-2541   | INVALID_EULA_COUNTRY                              |
| 102-2542   | INVALID_EULA_COUNTRY_AND_VERSION                  |
| 102-2543   | EULA_NOT_FOUND                                    |
| 102-2570   | PHRASE_NOT_ACCEPTABLE                             |
| 102-2571   | ACCOUNT_ID_ALREADY_EXISTS                         |
| 102-2572   | ACCOUNT_ID_NOT_ACCEPTABLE                         |
| 102-2573   | ACCOUNT_PASSWORD_NOT_ACCEPTABLE                   |
| 102-2574   | MII_NAME_NOT_ACCEPTABLE                           |
| 102-2575   | MAIL_ADDRESS_NOT_ACCEPTABLE                       |
| 102-2576   | ACCOUNT_ID_FORMAT_INVALID                         |
| 102-2577   | ACCOUNT_ID_PASSWORD_SAME                          |
| 102-2578   | ACCOUNT_ID_CHAR_NOT_ACCEPTABLE                    |
| 102-2579   | ACCOUNT_ID_SUCCESSIVE_SYMBOL                      |
| 102-2580   | ACCOUNT_ID_SYMBOL_POSITION_NOT_ACCEPTABLE         |
| 102-2581   | ACCOUNT_ID_TOO_MANY_DIGIT                         |
| 102-2582   | ACCOUNT_PASSWORD_CHAR_NOT_ACCEPTABLE              |
| 102-2583   | ACCOUNT_PASSWORD_TOO_FEW_CHAR_TYPES               |
| 102-2584   | ACCOUNT_PASSWORD_SUCCESSIVE_SAME_CHAR             |
| 102-2585   | MAIL_ADDRESS_DOMAIN_NAME_NOT_ACCEPTABLE           |
| 102-2586   | MAIL_ADDRESS_DOMAIN_NAME_NOT_RESOLVED             |
| 102-2591   | REACHED_ASSOCIATION_LIMIT                         |
| 102-2592   | REACHED_REGISTRATION_LIMIT                        |
| 102-2593   | COPPA_NOT_ACCEPTED                                |
| 102-2594   | PARENTAL_CONTROLS_REQUIRED                        |
| 102-2595   | MII_NOT_REGISTERED                                |
| 102-2596   | DEVICE_EULA_COUNTRY_MISMATCH                      |
| 102-2597   | PENDING_MIGRATION                                 |
| 102-2610   | WRONG_USER_INPUT                                  |
| 102-2611   | WRONG_ACCOUNT_PASSWORD                            |
| 102-2612   | WRONG_MAIL_ADDRESS                                |
| 102-2613   | WRONG_ACCOUNT_PASSWORD_OR_MAIL_ADDRESS            |
| 102-2614   | WRONG_CONFIRMATION_CODE                           |
| 102-2615   | WRONG_BIRTH_DATE_OR_MAIL_ADDRESS                  |
| 102-2616   | WRONG_ACCOUNT_MAIL                                |
| 102-2631   | ACCOUNT_ALREADY_DELETED                           |
| 102-2632   | ACCOUNT_ID_CHANGED                                |
| 102-2633   | AUTHENTICATION_LOCKED                             |
| 102-2634   | DEVICE_INACTIVE                                   |
| 102-2635   | COPPA_AGREEMENT_CANCELED                          |
| 102-2636   | DOMAIN_ACCOUNT_ALREADY_EXISTS                     |
| 102-2641   | ACCOUNT_TOKEN_EXPIRED                             |
| 102-2642   | INVALID_ACCOUNT_TOKEN                             |
| 102-2643   | AUTHENTICATION_REQUIRED                           |
| 102-2651   | CONFIRMATION_CODE_EXPIRED                         |
| 102-2661   | MAIL_ADDRESS_NOT_VALIDATED                        |
| 102-2662   | EXCESSIVE_MAIL_SEND_REQUEST                       |
| 102-2670   | CREDIT_CARD_ERROR                                 |
| 102-2671   | CREDIT_CARD_GENERAL_FAILURE                       |
| 102-2672   | CREDIT_CARD_DECLINED                              |
| 102-2673   | CREDIT_CARD_BLACKLISTED                           |
| 102-2674   | INVALID_CREDIT_CARD_NUMBER                        |
| 102-2675   | INVALID_CREDIT_CARD_DATE                          |
| 102-2676   | INVALID_CREDIT_CARD_PIN                           |
| 102-2677   | INVALID_POSTAL_CODE                               |
| 102-2678   | INVALID_LOCATION                                  |
| 102-2679   | CREDIT_CARD_DATE_EXPIRED                          |
| 102-2680   | CREDIT_CARD_NUMBER_WRONG                          |
| 102-2681   | CREDIT_CARD_PIN_WRONG                             |
| 102-2800   | BANNED                                            |
| 102-2801   | BANNED_ACCOUNT                                    |
| 102-2802   | BANNED_ACCOUNT_ALL                                |
| 102-2803   | BANNED_ACCOUNT_IN_APPLICATION                     |
| 102-2804   | BANNED_ACCOUNT_IN_NEX_SERVICE                     |
| 102-2805   | BANNED_ACCOUNT_IN_INDEPENDENT_SERVICE             |
| 102-2811   | BANNED_DEVICE                                     |
| 102-2812   | BANNED_DEVICE_ALL                                 |
| 102-2813   | BANNED_DEVICE_IN_APPLICATION                      |
| 102-2814   | BANNED_DEVICE_IN_NEX_SERVICE                      |
| 102-2815   | BANNED_DEVICE_IN_INDEPENDENT_SERVICE              |
| 102-2821   | BANNED_ACCOUNT_TEMPORARILY                        |
| 102-2822   | BANNED_ACCOUNT_ALL_TEMPORARILY                    |
| 102-2823   | BANNED_ACCOUNT_IN_APPLICATION_TEMPORARILY         |
| 102-2824   | BANNED_ACCOUNT_IN_NEX_SERVICE_TEMPORARILY         |
| 102-2825   | BANNED_ACCOUNT_IN_INDEPENDENT_SERVICE_TEMPORARILY |
| 102-2831   | BANNED_DEVICE_TEMPORARILY                         |
| 102-2832   | BANNED_DEVICE_ALL_TEMPORARILY                     |
| 102-2833   | BANNED_DEVICE_IN_APPLICATION_TEMPORARILY          |
| 102-2834   | BANNED_DEVICE_IN_NEX_SERVICE_TEMPORARILY          |
| 102-2835   | BANNED_DEVICE_IN_INDEPENDENT_SERVICE_TEMPORARILY  |
| 102-2880   | SERVICE_NOT_PROVIDED                              |
| 102-2881   | UNDER_MAINTENANCE                                 |
| 102-2882   | SERVICE_CLOSED                                    |
| 102-2883   | NINTENDO_NETWORK_CLOSED                           |
| 102-2884   | NOT_PROVIDED_COUNTRY                              |
| 102-2900   | RESTRICTION_ERROR                                 |
| 102-2901   | RESTRICTED_BY_AGE                                 |
| 102-2910   | RESTRICTED_BY_PARENTAL_CONTROLS                   |
| 102-2911   | ON_GAME_INTERNET_COMMUNICATION_RESTRICTED         |
| 102-2931   | INTERNAL_SERVER_ERROR                             |
| 102-2932   | UNKNOWN_SERVER_ERROR                              |
| 102-2998   | UNAUTHENTICATED_AFTER_SALVAGE                     |
| 102-2999   | AUTHENTICATION_FAILURE_UNKNOWN                    |

## NEX Error Codes

| Error code | Name                                                 |
|------------|------------------------------------------------------|
| 106-0102   | Core::Unknown                                        |
| 106-0103   | Core::NotImplemented                                 |
| 106-0104   | Core::InvalidPointer                                 |
| 106-0105   | Core::OperationAborted                               |
| 106-0106   | Core::Exception                                      |
| 106-0107   | Core::AccessDenied                                   |
| 106-0108   | Core::InvalidHandle                                  |
| 106-0109   | Core::InvalidIndex                                   |
| 106-0110   | Core::OutOfMemory                                    |
| 106-0111   | Core::InvalidArgument                                |
| 106-0112   | Core::Timeout                                        |
| 106-0113   | Core::InitializationFailure                          |
| 106-0114   | Core::CallInitiationFailure                          |
| 106-0115   | Core::RegistrationError                              |
| 106-0116   | Core::BufferOverflow                                 |
| 106-0117   | Core::InvalidLockState                               |
| 106-0118   | Core::InvalidSequence                                |
| 106-0119   | Core::SystemError                                    |
| 106-0120   | Core::Cancelled                                      |
| 106-0301   | RendezVous::ConnectionFailure                        |
| 106-0302   | RendezVous::NotAuthenticated                         |
| 106-0303   | RendezVous::InvalidUsername                          |
| 106-0304   | RendezVous::InvalidPassword                          |
| 106-0305   | RendezVous::UsernameAlreadyExists                    |
| 106-0306   | RendezVous::AccountDisabled                          |
| 106-0307   | RendezVous::AccountExpired                           |
| 106-0308   | RendezVous::ConcurrentLoginDenied                    |
| 106-0309   | RendezVous::EncryptionFailure                        |
| 106-0310   | RendezVous::InvalidPID                               |
| 106-0311   | RendezVous::MaxConnectionsReached                    |
| 106-0312   | RendezVous::InvalidGID                               |
| 106-0313   | RendezVous::InvalidControlScriptID                   |
| 106-0314   | RendezVous::InvalidOperationInLiveEnvironment        |
| 106-0315   | RendezVous::DuplicateEntry                           |
| 106-0316   | RendezVous::ControlScriptFailure                     |
| 106-0317   | RendezVous::ClassNotFound                            |
| 106-0318   | RendezVous::SessionVoid                              |
| 106-0320   | RendezVous::DDLMismatch                              |
| 106-0321   | RendezVous::InvalidConfiguration                     |
| 106-0322   | RendezVous::SessionFull                              |
| 106-0323   | RendezVous::InvalidGatheringPassword                 |
| 106-0324   | RendezVous::WithoutParticipationPeriod               |
| 106-0325   | RendezVous::PersistentGatheringCreationMax           |
| 106-0326   | RendezVous::PersistentGatheringParticipationMax      |
| 106-0327   | RendezVous::DeniedByParticipants                     |
| 106-0328   | RendezVous::ParticipantInBlackList                   |
| 106-0329   | RendezVous::GameServerMaintenance                    |
| 106-0330   | RendezVous::OperationPostpone                        |
| 106-0331   | RendezVous::OutOfRatingRange                         |
| 106-0332   | RendezVous::ConnectionDisconnected                   |
| 106-0333   | RendezVous::InvalidOperation                         |
| 106-0334   | RendezVous::NotParticipatedGathering                 |
| 106-0335   | RendezVous::MatchmakeSessionUserPasswordUnmatch      |
| 106-0336   | RendezVous::MatchmakeSessionSystemPasswordUnmatch    |
| 106-0337   | RendezVous::UserIsOffline                            |
| 106-0338   | RendezVous::AlreadyParticipatedGathering             |
| 106-0339   | RendezVous::PermissionDenied                         |
| 106-0340   | RendezVous::NotFriend                                |
| 106-0341   | RendezVous::SessionClosed                            |
| 106-0342   | RendezVous::DatabaseTemporarilyUnavailable           |
| 106-0343   | RendezVous::InvalidUniqueId                          |
| 106-0344   | RendezVous::MatchmakingWithdrawn                     |
| 106-0345   | RendezVous::LimitExceeded                            |
| 106-0346   | RendezVous::AccountTemporarilyDisabled               |
| 106-0347   | RendezVous::PartiallyServiceClosed                   |
| 106-0348   | RendezVous::ConnectionDisconnectedForConcurrentLogin |
| 106-0401   | PythonCore::Exception                                |
| 106-0402   | PythonCore::TypeError                                |
| 106-0403   | PythonCore::IndexError                               |
| 106-0404   | PythonCore::InvalidReference                         |
| 106-0405   | PythonCore::CallFailure                              |
| 106-0406   | PythonCore::MemoryError                              |
| 106-0407   | PythonCore::KeyError                                 |
| 106-0408   | PythonCore::OperationError                           |
| 106-0409   | PythonCore::ConversionError                          |
| 106-0410   | PythonCore::ValidationError                          |
| 106-0501   | Transport::Unknown                                   |
| 106-0502   | Transport::ConnectionFailure                         |
| 106-0503   | Transport::InvalidUrl                                |
| 106-0504   | Transport::InvalidKey                                |
| 106-0505   | Transport::InvalidURLType                            |
| 106-0506   | Transport::DuplicateEndpoint                         |
| 106-0507   | Transport::IOError                                   |
| 106-0508   | Transport::Timeout                                   |
| 106-0509   | Transport::ConnectionReset                           |
| 106-0510   | Transport::IncorrectRemoteAuthentication             |
| 106-0511   | Transport::ServerRequestError                        |
| 106-0512   | Transport::DecompressionFailure                      |
| 106-0513   | Transport::ReliableSendBufferFullFatal               |
| 106-0514   | Transport::UPnPCannotInit                            |
| 106-0515   | Transport::UPnPCannotAddMapping                      |
| 106-0516   | Transport::NatPMPCannotInit                          |
| 106-0517   | Transport::NatPMPCannotAddMapping                    |
| 106-0519   | Transport::UnsupportedNAT                            |
| 106-0520   | Transport::DnsError                                  |
| 106-0521   | Transport::ProxyError                                |
| 106-0522   | Transport::DataRemaining                             |
| 106-0523   | Transport::NoBuffer                                  |
| 106-0524   | Transport::NotFound                                  |
| 106-0525   | Transport::TemporaryServerError                      |
| 106-0526   | Transport::PermanentServerError                      |
| 106-0527   | Transport::ServiceUnavailable                        |
| 106-0528   | Transport::ReliableSendBufferFull                    |
| 106-0529   | Transport::InvalidStation                            |
| 106-0530   | Transport::InvalidSubStreamID                        |
| 106-0531   | Transport::PacketBufferFull                          |
| 106-0532   | Transport::NatTraversalError                         |
| 106-0533   | Transport::NatCheckError                             |
| 106-0602   | DOCore::StationNotReached                            |
| 106-0603   | DOCore::TargetStationDisconnect                      |
| 106-0604   | DOCore::LocalStationLeaving                          |
| 106-0605   | DOCore::ObjectNotFound                               |
| 106-0606   | DOCore::InvalidRole                                  |
| 106-0607   | DOCore::CallTimeout                                  |
| 106-0608   | DOCore::RMCDispatchFailed                            |
| 106-0609   | DOCore::MigrationInProgress                          |
| 106-0610   | DOCore::NoAuthority                                  |
| 106-0611   | DOCore::NoTargetStationSpecified                     |
| 106-0612   | DOCore::JoinFailed                                   |
| 106-0613   | DOCore::JoinDenied                                   |
| 106-0614   | DOCore::ConnectivityTestFailed                       |
| 106-0615   | DOCore::Unknown                                      |
| 106-0616   | DOCore::UnfreedReferences                            |
| 106-0617   | DOCore::JobTerminationFailed                         |
| 106-0618   | DOCore::InvalidState                                 |
| 106-0619   | DOCore::FaultRecoveryFatal                           |
| 106-0620   | DOCore::FaultRecoveryJobProcessFailed                |
| 106-0621   | DOCore::StationInconsitency                          |
| 106-0622   | DOCore::AbnormalMasterState                          |
| 106-0623   | DOCore::VersionMismatch                              |
| 106-0702   | FPD::NotInitialized                                  |
| 106-0703   | FPD::AlreadyInitialized                              |
| 106-0704   | FPD::NotConnected                                    |
| 106-0705   | FPD::Connected                                       |
| 106-0706   | FPD::InitializationFailure                           |
| 106-0707   | FPD::OutOfMemory                                     |
| 106-0708   | FPD::RmcFailed                                       |
| 106-0709   | FPD::InvalidArgument                                 |
| 106-0710   | FPD::InvalidLocalAccountID                           |
| 106-0711   | FPD::InvalidPrincipalID                              |
| 106-0712   | FPD::InvalidLocalFriendCode                          |
| 106-0713   | FPD::LocalAccountNotExists                           |
| 106-0714   | FPD::LocalAccountNotLoaded                           |
| 106-0715   | FPD::LocalAccountAlreadyLoaded                       |
| 106-0716   | FPD::FriendAlreadyExists                             |
| 106-0717   | FPD::FriendNotExists                                 |
| 106-0718   | FPD::FriendNumMax                                    |
| 106-0719   | FPD::NotFriend                                       |
| 106-0720   | FPD::FileIO                                          |
| 106-0721   | FPD::P2PInternetProhibited                           |
| 106-0722   | FPD::Unknown                                         |
| 106-0801   | Authentication::NASAuthenticateError                 |
| 106-0802   | Authentication::TokenParseError                      |
| 106-0803   | Authentication::HttpConnectionError                  |
| 106-0804   | Authentication::HttpDNSError                         |
| 106-0805   | Authentication::HttpGetProxySetting                  |
| 106-0806   | Authentication::TokenExpired                         |
| 106-0807   | Authentication::ValidationFailed                     |
| 106-0808   | Authentication::InvalidParam                         |
| 106-0809   | Authentication::PrincipalIdUnmatched                 |
| 106-0810   | Authentication::MoveCountUnmatch                     |
| 106-0811   | Authentication::UnderMaintenance                     |
| 106-0812   | Authentication::UnsupportedVersion                   |
| 106-0813   | Authentication::ServerVersionIsOld                   |
| 106-0814   | Authentication::Unknown                              |
| 106-0815   | Authentication::ClientVersionIsOld                   |
| 106-0816   | Authentication::AccountLibraryError                  |
| 106-0817   | Authentication::ServiceNoLongerAvailable             |
| 106-0818   | Authentication::UnknownApplication                   |
| 106-0819   | Authentication::ApplicationVersionIsOld              |
| 106-0820   | Authentication::OutOfService                         |
| 106-0821   | Authentication::NetworkServiceLicenseRequired        |
| 106-0822   | Authentication::NetworkServiceLicenseSystemError     |
| 106-0823   | Authentication::NetworkServiceLicenseError3          |
| 106-0824   | Authentication::NetworkServiceLicenseError4          |
| 106-1101   | Ranking::NotInitialized                              |
| 106-1102   | Ranking::InvalidArgument                             |
| 106-1103   | Ranking::RegistrationError                           |
| 106-1105   | Ranking::NotFound                                    |
| 106-1106   | Ranking::InvalidScore                                |
| 106-1107   | Ranking::InvalidDataSize                             |
| 106-1109   | Ranking::PermissionDenied                            |
| 106-1110   | Ranking::Unknown                                     |
| 106-1111   | Ranking::NotImplemented                              |
| 106-1201   | DataStore::Unknown                                   |
| 106-1202   | DataStore::InvalidArgument                           |
| 106-1203   | DataStore::PermissionDenied                          |
| 106-1204   | DataStore::NotFound                                  |
| 106-1205   | DataStore::AlreadyLocked                             |
| 106-1206   | DataStore::UnderReviewing                            |
| 106-1207   | DataStore::Expired                                   |
| 106-1208   | DataStore::InvalidCheckToken                         |
| 106-1209   | DataStore::SystemFileError                           |
| 106-1210   | DataStore::OverCapacity                              |
| 106-1211   | DataStore::OperationNotAllowed                       |
| 106-1212   | DataStore::InvalidPassword                           |
| 106-1213   | DataStore::ValueNotEqual                             |
| 106-1500   | ServiceItem::Unknown                                 |
| 106-1501   | ServiceItem::InvalidArgument                         |
| 106-1502   | ServiceItem::EShopUnknownHttpError                   |
| 106-1503   | ServiceItem::EShopResponseParseError                 |
| 106-1504   | ServiceItem::NotOwned                                |
| 106-1505   | ServiceItem::InvalidLimitationType                   |
| 106-1506   | ServiceItem::ConsumptionRightShortage                |
| 106-1801   | MatchmakeReferee::Unknown                            |
| 106-1802   | MatchmakeReferee::InvalidArgument                    |
| 106-1803   | MatchmakeReferee::AlreadyExists                      |
| 106-1804   | MatchmakeReferee::NotParticipatedGathering           |
| 106-1805   | MatchmakeReferee::NotParticipatedRound               |
| 106-1806   | MatchmakeReferee::StatsNotFound                      |
| 106-1807   | MatchmakeReferee::RoundNotFound                      |
| 106-1808   | MatchmakeReferee::RoundArbitrated                    |
| 106-1901   | Subscriber::Unknown                                  |
| 106-1902   | Subscriber::InvalidArgument                          |
| 106-1903   | Subscriber::OverLimit                                |
| 106-1904   | Subscriber::PermissionDenied                         |
| 106-2001   | Ranking2::Unknown                                    |
| 106-2002   | Ranking2::InvalidArgument                            |
| 106-2003   | Ranking2::InvalidScore                               |

## NEX Error Descriptions

| Error&nbsp;code | Description                                                                                                                                                                                         |
|-----------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 106-0102        | The reason for the error is unknown.                                                                                                                                                                |
| 106-0103        | The operation is currently not implemented.                                                                                                                                                         |
| 106-0104        | The operation specifies or accesses an invalid pointer.                                                                                                                                             |
| 106-0105        | The operation was aborted.                                                                                                                                                                          |
| 106-0106        | The operation raised an exception.                                                                                                                                                                  |
| 106-0107        | An attempt was made to access data in an incorrect manner. This may be due to inadequate permission or the data, file, etc. not existing.                                                           |
| 106-0108        | The operation specifies or accesses an invalid DOHandle.                                                                                                                                            |
| 106-0109        | The operation specifies or accesses an invalid index.                                                                                                                                               |
| 106-0110        | The system could not allocate or access enough memory or disk space to perform the specified operation.                                                                                             |
| 106-0111        | Invalid argument were passed with the operation. The argument(s) may be out of range or invalid.                                                                                                    |
| 106-0112        | The operation did not complete within the specified timeout for that operation.                                                                                                                     |
| 106-0113        | Initialization of the component failed.                                                                                                                                                             |
| 106-0114        | The call failed to initialize.                                                                                                                                                                      |
| 106-0115        | An error occurred during registration.                                                                                                                                                              |
| 106-0116        | The buffer is too large to be sent.                                                                                                                                                                 |
| 106-0301        | Connection was unable to be established, either with the Rendez-Vous back end or a Peer.                                                                                                            |
| 106-0302        | The Principal could not be authenticated by the Authentication Service.                                                                                                                             |
| 106-0303        | The Principal tried to log in with an invalid user name, i.e. the user name does not exist in the database.                                                                                         |
| 106-0304        | The Principal either tried to log in with an invalid password for the provided user name or tried to join a Gathering with an invalid password.                                                     |
| 106-0305        | The provided user name already exists in the database. All usernames must be unique.                                                                                                                |
| 106-0306        | The Principal's account still exists in the database but the account has been disabled.                                                                                                             |
| 106-0307        | The Principal's account still exists in the database but the account has expired.                                                                                                                   |
| 106-0308        | The Principal does not have the Capabilities to perform concurrent log ins, i.e. at any given time only one log-in may be maintained.                                                               |
| 106-0309        | Data encryption failed.                                                                                                                                                                             |
| 106-0310        | The operation specifies or accesses an invalid PrincipalID.                                                                                                                                         |
| 106-0311        | Maximum connnection number is reached                                                                                                                                                               |
| 106-0501        | The reason for the error is unknown.                                                                                                                                                                |
| 106-0502        | Network connection was unable to be established.                                                                                                                                                    |
| 106-0503        | The URL contained in the StationURL is invalid. The syntax may be incorrect.                                                                                                                        |
| 106-0504        | The key used to authenticate a given station is invalid. The secure transport layer uses secret-key based cryptography to ensure the integrity and confidentiality of data sent across the network. |
| 106-0505        | The specified transport type is invalid.                                                                                                                                                            |
| 106-0506        | The Station is already connected via another EndPoint.                                                                                                                                              |
| 106-0507        | The data coudl not be sent across the network. This could be due to an invalid message, packet, or buffer.                                                                                          |
| 106-0508        | The operation did not complete within the specified timeout for that operation.                                                                                                                     |
| 106-0509        | The network connection was reset.                                                                                                                                                                   |
| 106-0510        | The destination Station did not authenticate itself properly.                                                                                                                                       |
| 106-0511        | 3rd-party server or device answered with an error code according to protocol used e.g. HTTP error code                                                                                              |

## EShop Errors (API)

| Error code | Name          |
|------------|---------------|
| 107-3190   | WISHLIST_FULL |

## EShop Errors (Website)

| Error code | Name              |
|------------|-------------------|
| 111-9000   | CLOSE_APPLICATION |
| 111-9001   | RETRIABLE         |
| 111-9002   | UNDER_MAINTENANCE |
| 111-9003   | SERVICE_FINISHED  |
| 111-9100   | INVALID_TEMPLATE  |
