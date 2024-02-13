---
layout: post
toc: true
title: Region IDs
---

# Nintendo region values
Since the Wii, Nintendo has tracked what region a client is from/in using a Region ID. Region IDs are uint32s made of 2 parts. The first byte is the country ID, with the remaining 3 bytes being the ID of a specific region in the country. Below is a table of all region values as they appear on the Wii U, though they should be accurate for the Wii and 3DS as well.

# Japan
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x01` | JP | 日本 | Japan | Japon | Japan | Giappone | Japón | 日本 | 일본 | Japan | Japão | Япония | 日本 | Japan | Japan | Japan | Japan |

## Japan Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x01000000` | 35.683593344, 139.762953297 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Tokyo | `0x01020000` | 35.683593344, 139.762953297 | 東京都 | Tokyo | Tokyo | Tokio | Tokyo | Tokio | 东京都 | 도쿄 도 | Tokio | Tóquio | Токио | 東京都 | Tokyo | Tokyo | Tokyo | Tokyo |
| Hokkaido | `0x01030000` | 43.055419432, 141.328509312 | 北海道 | Hokkaido | Hokkaido | Hokkaido | Hokkaido | Hokaido | 北海道 | 홋카이도 | Hokkaido | Hokkaido | Хоккайдо | 北海道 | Hokkaido | Hokkaido | Hokkaido | Hokkaido |
| Aomori | `0x01040000` | 40.81420852, 140.768205054 | 青森県 | Aomori | Aomori | Aomori | Aomori | Aomori | 青森县 | 아오모리 현 | Aomori | Aomori | Аомори | 青森縣 | Aomori | Aomori | Aomori | Aomori |
| Iwate | `0x01050000` | 39.693603064, 141.163713942 | 岩手県 | Iwate | Iwate | Iwate | Iwate | Iwate | 岩手县 | 이와테 현 | Iwate | Iwate | Иватэ | 岩手縣 | Iwate | Iwate | Iwate | Iwate |
| Miyagi | `0x01060000` | 38.254394096, 140.90004135 | 宮城県 | Miyagi | Miyagi | Miyagi | Miyagi | Miyagi | 宫城县 | 미야기 현 | Miyagi | Miyagi | Мияги | 宮城縣 | Miyagi | Miyagi | Miyagi | Miyagi |
| Akita | `0x01070000` | 39.710082556, 140.098037216 | 秋田県 | Akita | Akita | Akita | Akita | Akita | 秋田县 | 아키타 현 | Akita | Akita | Акита | 秋田縣 | Akita | Akita | Akita | Akita |
| Yamagata | `0x01080000` | 38.248900932, 140.345230271 | 山形県 | Yamagata | Yamagata | Yamagata | Yamagata | Yamagata | 山形县 | 야마가타 현 | Yamagata | Yamagata | Ямагата | 山形縣 | Yamagata | Yamagata | Yamagata | Yamagata |
| Fukushima | `0x01090000` | 37.754516172, 140.471573388 | 福島県 | Fukushima | Fukushima | Fukushima | Fukushima | Fukushima | 福岛县 | 후쿠시마 현 | Fukushima | Fukushima | Фукусима | 福島縣 | Fukushima | Fukushima | Fukushima | Fukushima |
| Ibaraki | `0x010A0000` | 36.375732008, 140.471573388 | 茨城県 | Ibaraki | Ibaraki | Ibaraki | Ibaraki | Ibaraki | 茨城县 | 이바라키 현 | Ibaraki | Ibaraki | Ибараки | 茨城縣 | Ibaraki | Ibaraki | Ibaraki | Ibaraki |
| Tochigi | `0x010B0000` | 36.546020092, 139.867323698 | 栃木県 | Tochigi | Tochigi | Tochigi | Tochigi | Tochigi | 枥木县 | 도치기 현 | Tochigi | Tochigi | Тотиги | 枋木縣 | Tochigi | Tochigi | Tochigi | Tochigi |
| Gunma | `0x010C0000` | 36.397704664, 139.065319564 | 群馬県 | Gunma | Gunma | Gunma | Gunma | Gunma | 群马县 | 군마 현 | Gunma | Gunma | Гумма | 群馬縣 | Gunma | Gunma | Gunma | Gunma |
| Saitama | `0x010D0000` | 35.87036092, 139.587171569 | 埼玉県 | Saitama | Saitama | Saitama | Saitama | Saitama | 琦玉县 | 사이타마 현 | Saitama | Saitama | Сайтама | 埼玉縣 | Saitama | Saitama | Saitama | Saitama |
| Chiba | `0x010E0000` | 35.59570272, 140.103530395 | 千葉県 | Chiba | Chiba | Chiba | Chiba | Chiba | 千叶县 | 지바 현 | Chiba | Chiba | Тиба | 千葉縣 | Chiba | Chiba | Chiba | Chiba |
| Kanagawa | `0x010F0000` | 35.436400964, 139.653089717 | 神奈川県 | Kanagawa | Kanagawa | Kanagawa | Kanagawa | Kanagawa | 神奈川县 | 가나가와 현 | Kanagawa | Kanagawa | Канагава | 神奈川縣 | Kanagawa | Kanagawa | Kanagawa | Kanagawa |
| Toyama | `0x01100000` | 36.705321848, 137.203131883 | 富山県 | Toyama | Toyama | Toyama | Toyama | Toyama | 富山县 | 도야마 현 | Toyama | Toyama | Тояма | 富山縣 | Toyama | Toyama | Toyama | Toyama |
| Ishikawa | `0x01110000` | 36.584472240000004, 136.637334446 | 石川県 | Ishikawa | Ishikawa | Ishikawa | Ishikawa | Ishikawa | 石川县 | 이시카와 현 | Ishikawa | Ishikawa | Исикава | 石川縣 | Ishikawa | Ishikawa | Ishikawa | Ishikawa |
| Fukui | `0x01120000` | 36.051635332000004, 136.225346021 | 福井県 | Fukui | Fukui | Fukui | Fukui | Fukui | 福井县 | 후쿠이 현 | Fukui | Fukui | Фукуи | 福井縣 | Fukui | Fukui | Fukui | Fukui |
| Yamanashi | `0x01130000` | 35.661620688, 138.554453917 | 山梨県 | Yamanashi | Yamanashi | Yamanashi | Yamanashi | Yamanashi | 山梨县 | 야마나시 현 | Yamanashi | Yamanashi | Яманаси | 山梨縣 | Yamanashi | Yamanashi | Yamanashi | Yamanashi |
| Nagano | `0x01140000` | 36.655883372, 138.19190410299998 | 長野県 | Nagano | Nagano | Nagano | Nagano | Nagano | 长野县 | 나가노 현 | Nagano | Nagano | Нагано | 長野縣 | Nagano | Nagano | Nagano | Nagano |
| Niigata | `0x01150000` | 37.908324764, 139.048840027 | 新潟県 | Niigata | Niigata | Niigata | Niigata | Niigata | 新泻县 | 니가타 현 | Niigata | Niigata | Ниигата | 新潟縣 | Niigata | Niigata | Niigata | Niigata |
| Gifu | `0x01160000` | 35.392455652, 136.763677563 | 岐阜県 | Gifu | Gifu | Gifu | Gifu | Gifu | 歧阜县 | 기후 현 | Gifu | Gifu | Гифу | 岐阜縣 | Gifu | Gifu | Gifu | Gifu |
| Shizuoka | `0x01170000` | 34.969482024, 138.406138084 | 静岡県 | Shizuoka | Shizuoka | Shizuoka | Shizuoka | Shizuoka | 静冈县 | 시즈오카 현 | Shizuoka | Shizuoka | Сидзуока | 靜岡縣 | Shizuoka | Shizuoka | Shizuoka | Shizuoka |
| Aichi | `0x01180000` | 35.161742764, 136.966925186 | 愛知県 | Aichi | Aichi | Aichi | Aichi | Aichi | 爱知县 | 아이치 현 | Aichi | Aichi | Айти | 愛知縣 | Aichi | Aichi | Aichi | Aichi |
| Mie | `0x01190000` | 34.727782808, 136.521977687 | 三重県 | Mie | Mie | Mie | Mie | Mie | 三重县 | 미에 현 | Mie | Mie | Миэ | 三重縣 | Mie | Mie | Mie | Mie |
| Shiga | `0x011A0000` | 34.985961516, 135.912234818 | 滋賀県 | Shiga | Shiga | Shiga | Shiga | Shiga | 滋贺县 | 시가 현 | Shiga | Shiga | Сига | 滋賀縣 | Shiga | Shiga | Shiga | Shiga |
| Kyoto | `0x011B0000` | 35.007934172, 135.73095991099999 | 京都府 | Kyoto | Kyoto | Kyoto | Kyoto | Kioto | 京都府 | 교토 부 | Kyoto | Quioto | Киото | 京都府 | Kyoto | Kyoto | Kyoto | Kyoto |
| Osaka | `0x011C0000` | 34.672851168, 135.522219109 | 大阪府 | Osaka | Osaka | Osaka | Osaka | Osaka | 大阪府 | 오사카 부 | Osaka | Osaca | Осака | 大阪府 | Osaka | Osaka | Osaka | Osaka |
| Hyogo | `0x011D0000` | 34.68933066, 135.214601085 | 兵庫県 | Hyogo | Hyogo | Hyogo | Hyogo | Hiogo | 兵库县 | 효고 현 | Hyogo | Hyogo | Хёго | 兵庫縣 | Hyogo | Hyogo | Hyogo | Hyogo |
| Nara | `0x011E0000` | 34.68933066, 135.829837133 | 奈良県 | Nara | Nara | Nara | Nara | Nara | 奈良县 | 나라 현 | Nara | Nara | Нара | 奈良縣 | Nara | Nara | Nara | Nara |
| Wakayama | `0x011F0000` | 34.222411720000004, 135.165162474 | 和歌山県 | Wakayama | Wakayama | Wakayama | Wakayama | Wakayama | 和歌山县 | 와카야마 현 | Wakayama | Wakayama | Вакаяма | 和歌山縣 | Wakayama | Wakayama | Wakayama | Wakayama |
| Tottori | `0x01200000` | 35.480346276, 134.236815223 | 鳥取県 | Tottori | Tottori | Tottori | Tottori | Totori | 鸟取县 | 돗토리 현 | Tottori | Tottori | Тоттори | 鳥取縣 | Tottori | Tottori | Tottori | Tottori |
| Shimane | `0x01210000` | 35.452880456, 133.066768096 | 島根県 | Shimane | Shimane | Shimane | Shimane | Shimane | 岛根县 | 시마네 현 | Shimane | Shimane | Симанэ | 島根縣 | Shimane | Shimane | Shimane | Shimane |
| Okayama | `0x01220000` | 34.656371676, 133.918210841 | 岡山県 | Okayama | Okayama | Okayama | Okayama | Okayama | 冈山县 | 오카야마 현 | Okayama | Okayama | Окаяма | 岡山縣 | Okayama | Okayama | Okayama | Okayama |
| Hiroshima | `0x01230000` | 34.392699804, 132.462518406 | 広島県 | Hiroshima | Hiroshima | Hiroshima | Hiroshima | Hiroshima | 广岛县 | 히로시마 현 | Hiroshima | Hiroshima | Хиросима | 廣島縣 | Hiroshima | Hiroshima | Hiroshima | Hiroshima |
| Yamaguchi | `0x01240000` | 34.156493752, 131.457266649 | 山口県 | Yamaguchi | Yamaguchi | Yamaguchi | Yamaguchi | Yamaguchi | 山口县 | 야마구치 현 | Yamaguchi | Yamaguchi | Ямагути | 山口縣 | Yamaguchi | Yamaguchi | Yamaguchi | Yamaguchi |
| Tokushima | `0x01250000` | 34.063109964, 134.571899142 | 徳島県 | Tokushima | Tokushima | Tokushima | Tokushima | Tokushima | 德岛县 | 도쿠시마 현 | Tokushima | Tokushima | Токусима | 德島縣 | Tokushima | Tokushima | Tokushima | Tokushima |
| Kagawa | `0x01260000` | 34.310302344, 134.055540316 | 香川県 | Kagawa | Kagawa | Kagawa | Kagawa | Kagawa | 香川县 | 가가와 현 | Kagawa | Kagawa | Кагава | 香川縣 | Kagawa | Kagawa | Kagawa | Kagawa |
| Ehime | `0x01270000` | 33.83789024, 132.775629609 | 愛媛県 | Ehime | Ehime | Ehime | Ehime | Ehime | 爱媛县 | 에히메 현 | Ehime | Ehime | Эхимэ | 愛媛縣 | Ehime | Ehime | Ehime | Ehime |
| Kochi | `0x01280000` | 33.56323204, 133.550167848 | 高知県 | Kochi | Kochi | Kochi | Kochi | Kochi | 高知县 | 고치 현 | Kochi | Kochi | Коти | 高知縣 | Kochi | Kochi | Kochi | Kochi |
| Fukuoka | `0x01290000` | 33.579711532, 130.375110386 | 福岡県 | Fukuoka | Fukuoka | Fukuoka | Fukuoka | Fukuoka | 福冈县 | 후쿠오카 현 | Fukuoka | Fukuoka | Фукуока | 福岡縣 | Fukuoka | Fukuoka | Fukuoka | Fukuoka |
| Saga | `0x012A0000` | 33.239135364, 130.303699059 | 佐賀県 | Saga | Saga | Saga | Saga | Saga | 佐贺县 | 사가 현 | Saga | Saga | Сага | 佐賀縣 | Saga | Saga | Saga | Saga |
| Nagasaki | `0x012B0000` | 32.728271112, 129.869737918 | 長崎県 | Nagasaki | Nagasaki | Nagasaki | Nagasaki | Nagasaki | 长崎县 | 나가사키 현 | Nagasaki | Nagasáqui | Нагасаки | 長崎縣 | Nagasaki | Nagasaki | Nagasaki | Nagasaki |
| Kumamoto | `0x012C0000` | 32.805175408, 130.710194305 | 熊本県 | Kumamoto | Kumamoto | Kumamoto | Kumamoto | Kumamoto | 熊本县 | 구마모토 현 | Kumamoto | Kumamoto | Кумамото | 熊本縣 | Kumamoto | Kumamoto | Kumamoto | Kumamoto |
| Oita | `0x012D0000` | 33.228149036, 131.61656883999999 | 大分県 | Oita | Oita | Oita | Oita | Oita | 大分县 | 오이타 현 | Oita | Oita | Оита | 大分縣 | Oita | Oita | Oita | Oita |
| Miyazaki | `0x012E0000` | 31.931762332, 131.413321217 | 宮崎県 | Miyazaki | Miyazaki | Miyazaki | Miyazaki | Miyazaki | 宫崎县 | 미야자키 현 | Miyazaki | Miyazaki | Миядзаки | 宮崎縣 | Miyazaki | Miyazaki | Miyazaki | Miyazaki |
| Kagoshima | `0x012F0000` | 31.547240852, 130.550892114 | 鹿児島県 | Kagoshima | Kagoshima | Kagoshima | Kagoshima | Kagoshima | 鹿儿岛县 | 가고시마 현 | Kagoshima | Kagoshima | Кагосима | 鹿兒島縣 | Kagoshima | Kagoshima | Kagoshima | Kagoshima |
| Okinawa | `0x01300000` | 26.20239228, 127.683452676 | 沖縄県 | Okinawa | Okinawa | Okinawa | Okinawa | Okinawa | 冲绳县 | 오키나와 현 | Okinawa | Okinawa | Окинава | 沖繩縣 | Okinawa | Okinawa | Okinawa | Okinawa |

# Anguilla
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x08` | AI | アンギラ | Anguilla | Anguilla | Anguilla | Anguilla | Anguila | 安圭拉 | 앵귈라 | Anguilla | Anguilha | Ангилья | Anguilla | Anguilla | Anguilla | Anguilla | Anguilla |

## Anguilla Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x08000000` | 18.215331824, -63.044725911 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Anguilla | `0x08010000` | 18.215331824, -63.044725911 | アンギラ | Anguilla | Anguilla | Anguilla | Anguilla | Anguila | 安圭拉 | 앵귈라 | Anguilla | Anguilha | Ангилья | Anguilla | Anguilla | Anguilla | Anguilla | Anguilla |

# Antigua and Barbuda
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x09` | AG | アンティグア・バーブーダ | Antigua and Barbuda | Antigua-et-Barbuda | Antigua und Barbuda | Antigua e Barbuda | Antigua y Barbuda | 安提瓜和巴布达 | 앤티가 바부다 | Antigua en Barbuda | Antígua e Barbuda | Антигуа и Барбуда | Antigua and Barbuda | Antigua and Barbuda | Antigua and Barbuda | Antigua and Barbuda | Antigua and Barbuda |

## Antigua and Barbuda Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x09000000` | 17.111205860000002, -61.847212889000005 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Saint John | `0x09020000` | 17.111205860000002, -61.847212889000005 | セント・ジョン | Saint John | Saint-Jean | Saint John's | Saint John | Saint John | 圣约翰区 | 세인트존 | Saint John | Saint John | Сент-Джон | Saint John | Saint John | Saint John | Saint John | Saint John |
| Barbuda | `0x09030000` | 17.63305644, -61.830733351999996 | バーブーダ島 | Barbuda | Barbuda | Barbuda | Barbuda | Barbuda | 巴布达岛 | 바부다 | Barbuda | Barbuda | Барбуда | Barbuda | Barbuda | Barbuda | Barbuda | Barbuda |
| Saint George | `0x09040000` | 17.133178516, -61.797774278000006 | セント・ジョージ | Saint George | Saint-Georges | Saint George | Saint George | Saint George | 圣乔治区 | 세인트조지 | Saint George | Saint George | Сент-Джордж | Saint George | Saint George | Saint George | Saint George | Saint George |
| Saint Mary | `0x09050000` | 17.0288084, -61.880171962999995 | セント・メアリー | Saint Mary | Sainte-Marie | Saint Mary | Saint Mary | Saint Mary | 圣玛丽区 | 세인트메리 | Saint Mary | Saint Mary | Сент-Мэри | Saint Mary | Saint Mary | Saint Mary | Saint Mary | Saint Mary |
| Saint Paul | `0x09060000` | 17.0288084, -61.781294740999996 | セント・ポール | Saint Paul | Saint-Paul | Saint Paul | Saint Paul | Saint Paul | 圣保罗区 | 세인트폴 | Saint Paul | Saint Paul | Сент-Пол | Saint Paul | Saint Paul | Saint Paul | Saint Paul | Saint Paul |
| Saint Peter | `0x09070000` | 17.078246876, -61.764815204 | セント・ピーター | Saint Peter | Saint-Pierre | Saint Peter | Saint Peter | Saint Peter | 圣彼得区 | 세인트피터 | Saint Peter | Saint Peter | Сент-Петер | Saint Peter | Saint Peter | Saint Peter | Saint Peter | Saint Peter |
| Saint Philip | `0x09080000` | 17.045287892, -61.69889705600001 | セント・フィリップ | Saint Philip | Saint-Philippe | Saint Philip | Saint Philip | Saint Philip | 圣菲利普区 | 세인트필립 | Saint Philip | Saint Philip | Сент-Филип | Saint Philip | Saint Philip | Saint Philip | Saint Philip | Saint Philip |

# Argentina
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x0A` | AR | アルゼンチン | Argentina | Argentine | Argentinien | Argentina | Argentina | 阿根廷 | 아르헨티나 | Argentinië | Argentina | Аргентина | Argentina | Argentina | Argentina | Argentina | Argentina |

## Argentina Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x0A000000` | -34.584961568, -58.67215542700001 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Distrito Federal | `0x0A020000` | -34.584961568, -58.67215542700001 | 特別区 | Distrito Federal | District Fédéral | Autonome Stadt Buenos Aires | Capitale Federale | Ciudad de Buenos Aires | 联邦首都区 | 아르헨티나 연방구 | Federaal District | Distrito Federal | Федеральный округ | Distrito Federal | Distrito Federal | Distrito Federal | Distrito Federal | Distrito Federal |
| Buenos Aires | `0x0A030000` | -34.9310309, -57.947055799 | ブエノスアイレス州 | Buenos Aires | Buenos Aires | Buenos Aires | Buenos Aires | Provincia de Buenos Aires | 布宜诺斯艾利斯省 | 부에노스아이레스 주 | Buenos Aires | Buenos Aires | Буэнос-Айрес | Buenos Aires | Buenos Aires | Buenos Aires | Buenos Aires | Buenos Aires |
| Catamarca | `0x0A040000` | -28.465576872, -65.780329053 | カタマルカ州 | Catamarca | Catamarca | Catamarca | Catamarca | Catamarca | 卡塔马卡省 | 카타마르카 주 | Catamarca | Catamarca | Катамарка | Catamarca | Catamarca | Catamarca | Catamarca | Catamarca |
| Chaco | `0x0A050000` | -27.449341532, -58.979773451 | チャコ州 | Chaco | Chaco | Chaco | Chaco | Chaco | 查科省 | 차코 주 | Chaco | Chaco | Чако | Chaco | Chaco | Chaco | Chaco | Chaco |
| Chubut | `0x0A060000` | -43.297119672, -65.099174857 | チュブト州 | Chubut | Chubut | Chubut | Chubut | Chubut | 丘布特省 | 추부트 주 | Chubut | Chubut | Чубут | Chubut | Chubut | Chubut | Chubut | Chubut |
| Córdoba | `0x0A070000` | -31.398926447999997, -64.181813964 | コルドバ州 | Córdoba | Córdoba | Córdoba | Córdoba | Córdoba | 科尔多瓦省 | 코르도바 주 | Córdoba | Córdova | Кордова | Córdoba | Córdoba | Córdoba | Córdoba | Córdoba |
| Corrientes | `0x0A080000` | -27.465821024, -58.831457618 | コリエンテス州 | Corrientes | Corrientes | Corrientes | Corrientes | Corrientes | 科连特斯省 | 코리엔테스 주 | Corrientes | Corrientes | Корриентес | Corrientes | Corrientes | Corrientes | Corrientes | Corrientes |
| Entre Ríos | `0x0A090000` | -31.728516288, -60.528849929 | エントレ・リオス州 | Entre Ríos | Entre Ríos | Entre Ríos | Entre Ríos | Entre Ríos | 恩特雷里奥斯省 | 엔트레리오스 주 | Entre Ríos | Entre Ríos | Энтре-Риос | Entre Ríos | Entre Ríos | Entre Ríos | Entre Ríos | Entre Ríos |
| Formosa | `0x0A0A0000` | -26.180420648000002, -58.177769317 | フォルモサ州 | Formosa | Formosa | Formosa | Formosa | Formosa | 福尔摩沙省 | 포르모사 주 | Formosa | Formosa | Формоса | Formosa | Formosa | Formosa | Formosa | Formosa |
| Jujuy | `0x0A0B0000` | -24.180908951999996, -65.296929301 | フフイ州 | Jujuy | Jujuy | Jujuy | Jujuy | Jujuy | 胡胡伊省 | 후후이 주 | Jujuy | Jujuy | Жужуй | Jujuy | Jujuy | Jujuy | Jujuy | Jujuy |
| La Pampa | `0x0A0C0000` | -36.611939084, -64.280691186 | ラ・パンパ州 | La Pampa | La Pampa | La Pampa | La Pampa | La Pampa | 拉潘帕省 | 라팜파 주 | La Pampa | La Pampa | Ла-Пампа | La Pampa | La Pampa | La Pampa | La Pampa | La Pampa |
| La Rioja | `0x0A0D0000` | -29.432373736000002, -66.846005779 | ラ・リオハ州 | La Rioja | La Rioja | La Rioja | La Rioja | La Rioja | 拉里奥哈省 | 라리오하 주 | La Rioja | La Rioja | Ла-Риоха | La Rioja | La Rioja | La Rioja | La Rioja | La Rioja |
| Mendoza | `0x0A0E0000` | -32.882080728, -68.812563861 | メンドーサ州 | Mendoza | Mendoza | Mendoza | Mendoza | Mendoza | 门多萨省 | 멘도사 주 | Mendoza | Mendoza | Мендоса | Mendoza | Mendoza | Mendoza | Mendoza | Mendoza |
| Misiones | `0x0A0F0000` | -27.377930399999997, -55.88162049500001 | ミシオネス州 | Misiones | Misiones | Misiones | Misiones | Misiones | 米西奥内斯省 | 미시오네스 주 | Misiones | Misiones | Мисьонес | Misiones | Misiones | Misiones | Misiones | Misiones |
| Neuquén | `0x0A100000` | -38.946533784, -68.065491517 | ネウケン州 | Neuquén | Neuquén | Neuquén | Neuquén | Neuquén | 内乌肯省 | 네우켄 주 | Neuquén | Neuquén | Неукен | Neuquén | Neuquén | Neuquén | Neuquén | Neuquén |
| Río Negro | `0x0A110000` | -40.797730052, -62.9952873 | リオネグロ州 | Río Negro | Río Negro | Río Negro | Río Negro | Río Negro | 里奥内格罗省 | 리오네그로 주 | Río Negro | Río Negro | Рио-Негро | Río Negro | Río Negro | Río Negro | Río Negro | Río Negro |
| Salta | `0x0A120000` | -24.779663827999997, -65.41228606 | サルタ州 | Salta | Salta | Salta | Salta | Salta | 萨尔塔省 | 살타 주 | Salta | Salta | Сальта | Salta | Salta | Salta | Salta | Salta |
| San Juan | `0x0A130000` | -31.536255548, -68.532411732 | サン・フアン州 | San Juan | San Juan | San Juan | San Juan | San Juan | 圣胡安省 | 산후안 주 | San Juan | San Juan | Сан-Хуан | San Juan | San Juan | San Juan | San Juan | San Juan |
| San Luis | `0x0A140000` | -33.299561192, -66.34612649 | サン・ルイス州 | San Luis | San Luis | San Luis | San Luis | San Luis | 圣路易斯省 | 산루이스 주 | San Luis | San Luís | Сан-Луис | San Luis | San Luis | San Luis | San Luis | San Luis |
| Santa Cruz | `0x0A150000` | -51.63024946, -69.213565928 | サンタ・クルス州 | Santa Cruz | Santa Cruz | Santa Cruz | Santa Cruz | Santa Cruz | 圣克鲁斯省 | 산타크루스 주 | Santa Cruz | Santa Cruz | Санта-Крус | Santa Cruz | Santa Cruz | Santa Cruz | Santa Cruz | Santa Cruz |
| Santa Fe | `0x0A160000` | -31.629639335999997, -60.699138477999995 | サンタ・フェ州 | Santa Fe | Santa Fe | Santa Fe | Santa Fe | Santa Fe | 圣菲省 | 산타페 주 | Santa Fe | Santa Fé | Санта-Фе | Santa Fe | Santa Fe | Santa Fe | Santa Fe | Santa Fe |
| Santiago del Estero | `0x0A170000` | -27.778931372000002, -64.264211649 | サンティアゴ・デル・エステロ州 | Santiago del Estero | Santiago del Estero | Santiago del Estero | Santiago del Estero | Santiago del Estero | 圣地亚哥-德尔埃斯特罗省 | 산티아고델에스테로 주 | Santiago del Estero | Santiago del Estero | Сантьяго-дель-Эстеро | Santiago del Estero | Santiago del Estero | Santiago del Estero | Santiago del Estero | Santiago del Estero |
| Tierra del Fuego, Antártida e Islas del Atlántico Sur | `0x0A180000` | -54.799805088, -68.296205035 | ティエラ・デル・フエゴ州 | Tierra del Fuego, Antártida e Islas del Atlántico Sur | Terre de Feu, Antarctique et Îles de l’Atlantique Sud | Feuerland | Terra del Fuoco | Tierra del Fuego | 火地岛省 | 티에라델푸에고 주 | Vuurland | Terra do Fogo, Antártida e Ilhas do Atlântico Sul | Огненная Земля | Tierra del Fuego, Antártida e Islas del Atlántico Sur | Tierra del Fuego, Antártida e Islas del Atlántico Sur | Tierra del Fuego, Antártida e Islas del Atlántico Sur | Tierra del Fuego, Antártida e Islas del Atlántico Sur | Tierra del Fuego, Antártida e Islas del Atlántico Sur |
| Tucumán | `0x0A190000` | -26.812134508, -65.214531616 | トゥクマン州 | Tucumán | Tucumán | Tucumán | Tucumán | Tucumán | 图库曼省 | 투쿠만 주 | Tucumán | Tucumán | Тукуман | Tucumán | Tucumán | Tucumán | Tucumán | Tucumán |

# Aruba
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x0B` | AW | アルバ | Aruba | Aruba | Aruba | Aruba | Aruba | 阿鲁巴 | 아루바 | Aruba | Aruba | Аруба | Aruba | Aruba | Aruba | Aruba | Aruba |

## Aruba Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x0B000000` | 12.513427592, -70.032049599 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Aruba | `0x0B010000` | 12.513427592, -70.032049599 | アルバ | Aruba | Aruba | Aruba | Aruba | Aruba | 阿鲁巴 | 아루바 | Aruba | Aruba | Аруба | Aruba | Aruba | Aruba | Aruba | Aruba |

# Bahamas
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x0C` | BS | バハマ | Bahamas | Bahamas | Bahamas | Bahamas | Bahamas | 巴哈马 | 바하마 | Bahama's | Bahamas | Багамские острова | Bahamas | Bahamas | Bahamas | Bahamas | Bahamas |

## Bahamas Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x0C000000` | 25.081786824, -77.34896402700001 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Bahamas | `0x0C010000` | 25.081786824, -77.34896402700001 | バハマ | Bahamas | Bahamas | Bahamas | Bahamas | Bahamas | 巴哈马 | 바하마 | Bahama's | Bahamas | Багамские острова | Bahamas | Bahamas | Bahamas | Bahamas | Bahamas |

# Barbados
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x0D` | BB | バルバドス | Barbados | Barbade | Barbados | Barbados | Barbados | 巴巴多斯 | 바베이도스 | Barbados | Barbados | Барбадос | Barbados | Barbados | Barbados | Barbados | Barbados |

## Barbados Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x0D000000` | 13.095702976, -59.611489035999995 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Barbados | `0x0D010000` | 13.095702976, -59.611489035999995 | バルバドス | Barbados | Barbade | Barbados | Barbados | Barbados | 巴巴多斯 | 바베이도스 | Barbados | Barbados | Барбадос | Barbados | Barbados | Barbados | Barbados | Barbados |

# Belize
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x0E` | BZ | ベリーズ | Belize | Belize | Belize | Belize | Belice | 伯利兹 | 벨리즈 | Belize | Belize | Белиз | Belize | Belize | Belize | Belize | Belize |

## Belize Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x0E000000` | 17.24853496, -88.763789989 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Cayo | `0x0E020000` | 17.24853496, -88.763789989 | カヨー州 | Cayo | Cayo | Cayo | Cayo | Cayo | 卡约区 | 카요 주 | Cayo | Cayo | Кайо | Cayo | Cayo | Cayo | Cayo | Cayo |
| Belize | `0x0E030000` | 17.479247848, -88.18151301500001 | ベリーズ州 | Belize | Belize | Belize | Belize | Belice | 伯利兹城 | 벨리즈 주 | Belize | Belize | Белиз | Belize | Belize | Belize | Belize | Belize |
| Corozal | `0x0E040000` | 18.380126744000002, -88.379267459 | コロサル州 | Corozal | Corozal | Corozal | Corozal | Corozal | 科罗萨尔区 | 코로살 주 | Corozal | Corozal | Корозал | Corozal | Corozal | Corozal | Corozal | Corozal |
| Orange Walk | `0x0E050000` | 18.061523232, -88.549556008 | オレンジウォーク州 | Orange Walk | Orange Walk | Orange Walk | Orange Walk | Orange Walk | 橘园区 | 오렌지워크 주 | Orange Walk | Orange Walk | Ориндж Уолк | Orange Walk | Orange Walk | Orange Walk | Orange Walk | Orange Walk |
| Stann Creek | `0x0E060000` | 16.962890432000002, -88.214472089 | スタンクリーク州 | Stann Creek | Stann Creek | Stann Creek | Stann Creek | Stann Creek | 斯坦港区 | 스탠크리크 주 | Stann Creek | Stann Creek | Стэн Крик | Stann Creek | Stann Creek | Stann Creek | Stann Creek | Stann Creek |
| Toledo | `0x0E070000` | 16.09497052, -88.79674906300001 | トレド州 | Toledo | Toledo | Toledo | Toledo | Toledo | 托莱多区 | 톨레도 주 | Toledo | Toledo | Толедо | Toledo | Toledo | Toledo | Toledo | Toledo |

# Bolivia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x0F` | BO | ボリビア | Bolivia | Bolivie | Bolivien | Bolivia | Bolivia | 玻利维亚 | 볼리비아 | Bolivia | Bolívia | Боливия | Bolivia | Bolivia | Bolivia | Bolivia | Bolivia |

## Bolivia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x0F000000` | -16.495972515999995, -68.147889202 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| La Paz | `0x0F020000` | -16.495972515999995, -68.147889202 | ラパス県 | La Paz | La Paz | La Paz | La Paz | La Paz | 拉巴斯省 | 라파스 주 | La Paz | La Paz | Ла-Пас | La Paz | La Paz | La Paz | La Paz | La Paz |
| Chuquisaca | `0x0F030000` | -19.039307448000002, -65.258477048 | チュキサカ県 | Chuquisaca | Chuquisaca | Chuquisaca | Chuquisaca | Chuquisaca | 丘基萨卡省 | 추키사카 주 | Chuquisaca | Chuquisaca | Чукисака | Chuquisaca | Chuquisaca | Chuquisaca | Chuquisaca | Chuquisaca |
| Cochabamba | `0x0F040000` | -17.38037192, -66.148372046 | コチャバンバ県 | Cochabamba | Cochabamba | Cochabamba | Cochabamba | Cochabamba | 科恰班巴省 | 코차밤바 주 | Cochabamba | Cochabamba | Кочабамба | Cochabamba | Cochabamba | Cochabamba | Cochabamba | Cochabamba |
| El Beni | `0x0F050000` | -14.831543823999993, -64.895927234 | ベニ県 | El Beni | Beni | Beni | Beni | El Beni | 贝尼省 | 엘베니 주 | Beni | El Beni | Бени | El Beni | El Beni | El Beni | El Beni | El Beni |
| Oruro | `0x0F060000` | -17.979126796000003, -67.148130624 | オルロ県 | Oruro | Oruro | Oruro | Oruro | Oruro | 奥鲁罗省 | 오루로 주 | Oruro | Oruro | Оруро | Oruro | Oruro | Oruro | Oruro | Oruro |
| Pando | `0x0F070000` | -11.030274336000005, -68.730166176 | パンド県 | Pando | Pando | Pando | Pando | Pando | 潘多省 | 판도 주 | Pando | Pando | Пандо | Pando | Pando | Pando | Pando | Pando |
| Potosí | `0x0F080000` | -19.583130683999997, -65.747369979 | ポトシ県 | Potosí | Potosí | Potosí | Potosí | Potosí | 波托西省 | 포토시 주 | Potosí | Potosí | Потоси | Potosí | Potosí | Potosí | Potosí | Potosí |
| Santa Cruz | `0x0F090000` | -17.797852383999995, -63.16557584900001 | サンタ・クルス県 | Santa Cruz | Santa Cruz | Santa Cruz | Santa Cruz | Santa Cruz | 圣克鲁斯省 | 산타크루스 주 | Santa Cruz | Santa Cruz | Санта-Крус | Santa Cruz | Santa Cruz | Santa Cruz | Santa Cruz | Santa Cruz |
| Tarija | `0x0F0A0000` | -21.511231248, -64.747611401 | タリハ県 | Tarija | Tarija | Tarija | Tarija | Tarija | 塔里哈省 | 타리하 주 | Tarija | Tarija | Тариха | Tarija | Tarija | Tarija | Tarija | Tarija |

# Brazil
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x10` | BR | ブラジル | Brazil | Brésil | Brasilien | Brasile | Brasil | 巴西 | 브라질 | Brazilië | Brasil | Бразилия | Brazil | Brazil | Brazil | Brazil | Brazil |

## Brazil Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x10000000` | -15.781861195999994, -47.911017766000015 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Distrito Federal | `0x10020000` | -15.781861195999994, -47.911017766000015 | ディストリト・フェデラル州 | Distrito Federal | District Fédéral | Distrito Federal | Distretto Federale | Distrito Federal | 联邦区 | 브라질 연방구 | Federaal District | Distrito Federal | Федеральный округ | Distrito Federal | Distrito Federal | Distrito Federal | Distrito Federal | Distrito Federal |
| Acre | `0x10030000` | -9.964600520000005, -67.79632574600001 | アクレ州 | Acre | Acre | Acre | Acre | Acre | 阿克里州 | 아크리 주 | Acre | Acre | Акри | Acre | Acre | Acre | Acre | Acre |
| Alagoas | `0x10040000` | -9.662476499999997, -35.71616038600001 | アラゴアス州 | Alagoas | Alagoas | Alagoas | Alagoas | Alagoas | 阿拉戈斯州 | 알라고아스 주 | Alagoas | Alagoas | Алагоас | Alagoas | Alagoas | Alagoas | Alagoas | Alagoas |
| Amapá | `0x10050000` | 0.032958984, -51.047622974999996 | アマパー州 | Amapá | Amapá | Amapá | Amapá | Amapá | 阿马帕州 | 아마파 주 | Amapá | Amapá | Амапа | Amapá | Amapá | Amapá | Amapá | Amapá |
| Amazonas | `0x10060000` | -3.109131848000004, -60.023477461 | アマゾナス州 | Amazonas | Amazonas | Amazonas | Amazonas | Amazonas | 亚马孙州 | 아마조나스 주 | Amazonas | Amazonas | Амазонас | Amazonas | Amazonas | Amazonas | Amazonas | Amazonas |
| Bahia | `0x10070000` | -12.980347555999998, -38.51218849700001 | バイア州 | Bahia | Bahia | Bahia | Bahia | Bahía | 巴伊亚州 | 바이아 주 | Bahia | Bahia | Баия | Bahia | Bahia | Bahia | Bahia | Bahia |
| Ceará | `0x10080000` | -3.768311527999998, -38.57261346600001 | セアラ州 | Ceará | Ceará | Ceará | Ceará | Ceará | 塞阿拉州 | 세아라 주 | Ceará | Ceará | Сеара | Ceará | Ceará | Ceará | Ceará | Ceará |
| Espírito Santo | `0x10090000` | -20.313721496, -40.346910283 | エスピリト・サント州 | Espírito Santo | Espírito Santo | Espírito Santo | Espírito Santo | Espírito Santo | 圣埃斯皮里图州 | 이스피리투산투 주 | Espírito Santo | Espírito Santo | Эспириту-Санту | Espírito Santo | Espírito Santo | Espírito Santo | Espírito Santo | Espírito Santo |
| Mato Grosso do Sul | `0x100A0000` | -20.445557432, -54.612696146000005 | マット・グロッソ・ド・スル州 | Mato Grosso do Sul | Mato Grosso do Sul | Mato Grosso do Sul | Mato Grosso do Sul | Mato Grosso do Sul | 南马托格罗索州 | 마투그로수두술 주 | Mato Grosso do Sul | Mato Grosso do Sul | Мату-Гросу-ду-Сул | Mato Grosso do Sul | Mato Grosso do Sul | Mato Grosso do Sul | Mato Grosso do Sul | Mato Grosso do Sul |
| Maranhão | `0x100B0000` | -2.5158701360000038, -44.26354691 | マラニョン州 | Maranhão | Maranhão | Maranhão | Maranhão | Maranhão | 马拉尼昂州 | 마라냥 주 | Maranhão | Maranhão | Мараньян | Maranhão | Maranhão | Maranhão | Maranhão | Maranhão |
| Mato Grosso | `0x100C0000` | -15.578614127999998, -56.079374939000004 | マット・グロッソ州 | Mato Grosso | Mato Grosso | Mato Grosso | Mato Grosso | Mato Grosso | 马托格罗索州 | 마투그로수 주 | Mato Grosso | Mato Grosso | Мату-Гросу | Mato Grosso | Mato Grosso | Mato Grosso | Mato Grosso | Mato Grosso |
| Minas Gerais | `0x100D0000` | -19.912720523999994, -43.928462991 | ミナス・ジェライス州 | Minas Gerais | Minas Gerais | Minas Gerais | Minas Gerais | Minas Gerais | 米纳斯吉拉斯州 | 미나스 제라이스 주 | Minas Gerais | Minas Gerais | Минас-Жерайс | Minas Gerais | Minas Gerais | Minas Gerais | Minas Gerais | Minas Gerais |
| Pará | `0x100E0000` | -1.4447031560000028, -48.482308382000014 | パラー州 | Pará | Pará | Pará | Pará | Pará | 帕拉州 | 파라 주 | Pará | Pará | Пара | Pará | Pará | Pará | Pará | Pará |
| Paraíba | `0x100F0000` | -7.113648404000003, -34.864717641 | パライーバ州 | Paraíba | Paraíba | Paraíba | Paraíba | Paraíba | 帕拉伊巴州 | 파라이바 주 | Paraíba | Paraíba | Параиба | Paraíba | Paraíba | Paraíba | Paraíba | Paraíba |
| Paraná | `0x10100000` | -25.411377688, -49.245860263 | パラナ州 | Paraná | Paraná | Paraná | Paraná | Paraná | 巴拉那州 | 파라나 주 | Paraná | Paraná | Парана | Paraná | Paraná | Paraná | Paraná | Paraná |
| Piauí | `0x10110000` | -5.081177724, -42.81334765400001 | ピアウイー州 | Piauí | Piauí | Piauí | Piauí | Piauí | 皮奥伊州 | 피아우이 주 | Piauí | Piauí | Пиауи | Piauí | Piauí | Piauí | Piauí | Piauí |
| Rio de Janeiro | `0x10120000` | -22.895508575999997, -43.230829258 | リオ・デ・ジャネイロ州 | Rio de Janeiro | État de Rio de Janeiro | Rio de Janeiro | Rio de Janeiro | Río de Janeiro | 里约热内卢州 | 리우데자네이루 주 | Rio de Janeiro | Rio de Janeiro | Рио-де-Жанейро | Rio de Janeiro | Rio de Janeiro | Rio de Janeiro | Rio de Janeiro | Rio de Janeiro |
| Rio Grande do Norte | `0x10130000` | -5.7788095519999985, -35.210787917999994 | リオ・グランデ・ド・ノルテ州 | Rio Grande do Norte | Rio Grande do Norte | Rio Grande do Norte | Rio Grande do Norte | Rio Grande do Norte | 北里奥格兰德州 | 히우그란지두노르치 주 | Rio Grande do Norte | Rio Grande do Norte | Риу-Гранди-ду-Норти | Rio Grande do Norte | Rio Grande do Norte | Rio Grande do Norte | Rio Grande do Norte | Rio Grande do Norte |
| Rio Grande do Sul | `0x10140000` | -30.031128611999996, -51.195938807999994 | リオ・グランデ・ド・スル州 | Rio Grande do Sul | Rio Grande do Sul | Rio Grande do Sul | Rio Grande do Sul | Rio Grande do Sul | 南里奥格兰德州 | 히우그란지두술 주 | Rio Grande do Sul | Rio Grande do Sul | Риу-Гранди-ду-Сул | Rio Grande do Sul | Rio Grande do Sul | Rio Grande do Sul | Rio Grande do Sul | Rio Grande do Sul |
| Rondônia | `0x10150000` | -8.761597604000002, -63.896168656 | ロンドニア州 | Rondônia | Rondônia | Rondônia | Rondônia | Rondônia | 朗多尼亚州 | 혼도니아 주 | Rondônia | Rondônia | Рондония | Rondônia | Rondônia | Rondônia | Rondônia | Rondônia |
| Roraima | `0x10160000` | 2.812499968, -60.666179404000005 | ロライマ州 | Roraima | Roraima | Roraima | Roraima | Roraima | 罗赖马州 | 호라이마 주 | Roraima | Roraima | Рорайма | Roraima | Roraima | Roraima | Roraima | Roraima |
| Santa Catarina | `0x10170000` | -27.581177468, -48.564706067 | サンタ・カタリーナ州 | Santa Catarina | Santa Catarina | Santa Catarina | Santa Catarina | Santa Catarina | 圣卡塔琳娜州 | 산타카타리나 주 | Santa Catarina | Santa Catarina | Санта-Катарина | Santa Catarina | Santa Catarina | Santa Catarina | Santa Catarina | Santa Catarina |
| São Paulo | `0x10180000` | -23.532715600000003, -46.614627522000006 | サン・パウロ州 | São Paulo | État de São Paulo | São Paulo | San Paolo | São Paulo | 圣保罗州 | 상파울루 주 | São Paulo | São Paulo | Сан-Паулу | São Paulo | São Paulo | São Paulo | São Paulo | São Paulo |
| Sergipe | `0x10190000` | -10.914917892000005, -37.06198924099999 | セルジッペ州 | Sergipe | Sergipe | Sergipe | Sergipe | Sergipe | 塞尔希培州 | 세르지피 주 | Sergipe | Sergipe | Сержипи | Sergipe | Sergipe | Sergipe | Sergipe | Sergipe |
| Goiás | `0x101A0000` | -16.6662606, -49.26233980000001 | ゴイアス州 | Goiás | Goiás | Goiás | Goiás | Goiás | 戈亚斯州 | 고이아스 주 | Goiás | Goiás | Гояс | Goiás | Goiás | Goiás | Goiás | Goiás |
| Pernambuco | `0x101B0000` | -8.047486284000001, -34.89767671499999 | ペルナンブコ州 | Pernambuco | Pernambouc | Pernambuco | Pernambuco | Pernambuco | 伯南布哥州 | 페르남부쿠 주 | Pernambuco | Pernambuco | Пернамбуку | Pernambuco | Pernambuco | Pernambuco | Pernambuco | Pernambuco |
| Tocantins | `0x101C0000` | -10.217286063999993, -48.27356757999999 | トカンティンス州 | Tocantins | Tocantins | Tocantins | Tocantins | Tocantins | 托坎廷斯州 | 토칸칭스 주 | Tocantins | Tocantins | Токантинс | Tocantins | Tocantins | Tocantins | Tocantins | Tocantins |

# British Virgin Islands
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x11` | VG | 英領ヴァージン諸島 | British Virgin Islands | Îles Vierges britanniques | Britische Jungferninseln | Isole Vergini Britanniche | Islas Vírgenes Británicas | 英属维尔京群岛 | 영국령 버진아일랜드 | Britse Maagdeneilanden | Ilhas Virgens Britânicas | Британские Виргинские острова | British Virgin Islands | British Virgin Islands | British Virgin Islands | British Virgin Islands | British Virgin Islands |

## British Virgin Islands Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x11000000` | 18.413085728, -64.615775105 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| British Virgin Islands | `0x11010000` | 18.413085728, -64.615775105 | 英領ヴァージン諸島 | British Virgin Islands | Îles Vierges britanniques | Britische Jungferninseln | Isole Vergini Britanniche | Islas Vírgenes Británicas | 英属维尔京群岛 | 영국령 버진아일랜드 | Britse Maagdeneilanden | Ilhas Virgens Britânicas | Британские Виргинские острова | British Virgin Islands | British Virgin Islands | British Virgin Islands | British Virgin Islands | British Virgin Islands |

# Canada
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x12` | CA | カナダ | Canada | Canada | Kanada | Canada | Canadá | 加拿大 | 캐나다 | Canada | Canadá | Канада | Canada | Canada | Canada | Canada | Canada |

## Canada Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x12000000` | 45.263671360000004, -75.744955759 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Ontario | `0x12020000` | 45.263671360000004, -75.744955759 | オンタリオ州 | Ontario | Ontario | Ontario | Ontario | Ontario | 安大略省 | 온타리오 주 | Ontario | Ontário | Онтарио | Ontario | Ontario | Ontario | Ontario | Ontario |
| Alberta | `0x12030000` | 53.547362672, -113.466615952 | アルバータ州 | Alberta | Alberta | Alberta | Alberta | Alberta | 艾伯塔省 | 앨버타 주 | Alberta | Alberta | Альберта | Alberta | Alberta | Alberta | Alberta | Alberta |
| British Columbia | `0x12040000` | 48.427733824, -123.36532451 | ブリティッシュ・コロンビア州 | British Columbia | Colombie-Britannique | Britisch-Kolumbien | Columbia Britannica | Columbia Británica | 不列颠哥伦比亚省 | 브리티시컬럼비아 주 | Brits-Columbia | Colúmbia Britânica | Британская Колумбия | British Columbia | British Columbia | British Columbia | British Columbia | British Columbia |
| Manitoba | `0x12050000` | 49.883422284, -97.146381143 | マニトバ州 | Manitoba | Manitoba | Manitoba | Manitoba | Manitoba | 马尼托巴省 | 매니토바 주 | Manitoba | Manitoba | Манитоба | Manitoba | Manitoba | Manitoba | Manitoba | Manitoba |
| New Brunswick | `0x12060000` | 45.944823696, -66.664730872 | ニュー・ブランズウィック州 | New Brunswick | Nouveau-Brunswick | Neubraunschweig | Nuovo Brunswick | Nuevo Brunswick | 新不伦瑞克省 | 뉴브런즈윅 주 | Nieuw-Brunswijk | Nova Brunswick | Нью-Брансуик | New Brunswick | New Brunswick | New Brunswick | New Brunswick | New Brunswick |
| Newfoundland and Labrador | `0x12070000` | 47.565307076, -52.728535749 | ニューファンドランド・ラブラドール州 | Newfoundland and Labrador | Terre-Neuve et Labrador | Neufundland und Labrador | Terranova e Labrador | Terranova y Labrador | 纽芬兰与拉布拉多省 | 뉴펀들랜드래브라도 주 | Newfoundland en Labrador | Terranova e Labrador | Ньюфаундленд и Лабрадор | Newfoundland and Labrador | Newfoundland and Labrador | Newfoundland and Labrador | Newfoundland and Labrador | Newfoundland and Labrador |
| Nova Scotia | `0x12080000` | 44.895629372, -63.49516658900001 | ノバ・スコシア州 | Nova Scotia | Nouvelle-Écosse | Neuschottland | Nuova Scozia | Nueva Escocia | 新斯科舍省 | 노바스코샤 주 | Nova Scotia | Nova Escócia | Новая Шотландия | Nova Scotia | Nova Scotia | Nova Scotia | Nova Scotia | Nova Scotia |
| Prince Edward Island | `0x12090000` | 46.235961388, -63.132616775 | プリンス・エドワード・アイランド州 | Prince Edward Island | Île-du-Prince-Édouard | Prinz-Edward-Insel | Isola del Principe Edoardo | Isla del Príncipe Eduardo | 爱德华王子岛省 | 프린스에드워드아일랜드 주 | Prins Edwardeiland | Ilha do Príncipe Eduardo | Остров Принца Эдуарда | Prince Edward Island | Prince Edward Island | Prince Edward Island | Prince Edward Island | Prince Edward Island |
| Quebec | `0x120A0000` | 46.80175728, -71.207589905 | ケベック州 | Quebec | Québec | Québec | Québec | Quebec | 魁北克省 | 퀘벡 주 | Québec | Quebeque | Квебек | Quebec | Quebec | Quebec | Quebec | Quebec |
| Saskatchewan | `0x120B0000` | 50.449218176, -104.617104583 | サスカチュワン州 | Saskatchewan | Saskatchewan | Saskatchewan | Saskatchewan | Saskatchewan | 萨斯喀彻温省 | 서스캐처원 주 | Saskatchewan | Saskatchewan | Саскачеван | Saskatchewan | Saskatchewan | Saskatchewan | Saskatchewan | Saskatchewan |
| Yukon | `0x120C0000` | 60.715941692, -135.049316243 | ユーコン準州 | Yukon | Territoire du Yukon | Yukon | Yukon | Yukón | 育空地区 | 유콘 준주 | Yukon | Yukon | Юкон | Yukon | Yukon | Yukon | Yukon | Yukon |
| Northwest Territories | `0x120D0000` | 62.451781516, -114.351017771 | ノースウェスト準州 | Northwest Territories | Territoires du Nord-Ouest | Nordwest-Territorien | Territori del Nord-Ovest | Territorios del Noroeste | 西北地区 | 노스웨스트 준주 | Northwest Territories | Territórios do Noroeste | Северо-Западные территории | Northwest Territories | Northwest Territories | Northwest Territories | Northwest Territories | Northwest Territories |
| Nunavut | `0x120E0000` | 63.748168220000004, -68.510439016 | ヌナブト準州 | Nunavut | Territoire du Nunavut | Nunavut | Nunavut | Nunavut | 努纳维特地区 | 누나부트 준주 | Nunavut | Nunavut | Нунавут | Nunavut | Nunavut | Nunavut | Nunavut | Nunavut |

# Cayman Islands
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x13` | KY | ケイマン諸島 | Cayman Islands | Îles Caïmans | Kaimaninseln | Isole Cayman | Islas Caimán | 开曼群岛 | 케이맨 제도 | Kaaimaneilanden | Ilhas Caimão | Каймановы острова | Cayman Islands | Cayman Islands | Cayman Islands | Cayman Islands | Cayman Islands |

## Cayman Islands Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x13000000` | 19.297485132, -81.380957413 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Cayman Islands | `0x13010000` | 19.297485132, -81.380957413 | ケイマン諸島 | Cayman Islands | Îles Caïmans | Kaimaninseln | Isole Cayman | Islas Caimán | 开曼群岛 | 케이맨 제도 | Kaaimaneilanden | Ilhas Caimão | Каймановы острова | Cayman Islands | Cayman Islands | Cayman Islands | Cayman Islands | Cayman Islands |

# Chile
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x14` | CL | チリ | Chile | Chili | Chile | Cile | Chile | 智利 | 칠레 | Chili | Chile | Чили | Chile | Chile | Chile | Chile | Chile |

## Chile Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x14000000` | -33.44787662, -70.663765184 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Región Metropolitana | `0x14020000` | -33.44787662, -70.663765184 | レジョン・メトロポリタナ州 | Región Metropolitana | Région Métropolitaine de Santiago | Región Metropolitana | Regione Metropolitana di Santiago | Región Metropolitana | 圣地亚哥首都区 | 산티아고 수도주 | Región Metropolitana | Região Metropolitana | Столичный округ | Región Metropolitana | Región Metropolitana | Región Metropolitana | Región Metropolitana | Región Metropolitana |
| Valparaíso | `0x14030000` | -33.046875648, -71.597605614 | バルパライソ州 | Valparaíso | Valparaiso | Valparaíso (Region V) | Valparaíso | Valparaíso | 瓦尔帕莱索大区 | 발파라이소 주 | Valparaíso | Valparaíso | Вальпараисо | Valparaíso | Valparaíso | Valparaíso | Valparaíso | Valparaíso |
| Aisén del General Carlos Ibáñez del Campo | `0x14040000` | -45.565796404, -72.064525829 | アイセン・デル・Ｇ・カルロス・イバニェス・デル・カンポ州 | Aisén del General Carlos Ibáñez del Campo | Aisén del General Carlos Ibáñez del Campo | Aisén (Region XI) | Aisén del General Carlos Ibáñez del Campo | Aisén del General Carlos Ibáñez del Campo | 伊瓦涅斯将军的艾森大区 | 아이센 주 | Aysén del General Carlos Ibáñez del Campo | Aisén del General Carlos Ibáñez del Campo | Айсен | Aisén del General Carlos Ibáñez del Campo | Aisén del General Carlos Ibáñez del Campo | Aisén del General Carlos Ibáñez del Campo | Aisén del General Carlos Ibáñez del Campo | Aisén del General Carlos Ibáñez del Campo |
| Antofagasta | `0x14050000` | -23.648072044000003, -70.394599413 | アントファガスタ州 | Antofagasta | Antofagasta | Antofagasta (Region II) | Antofagasta | Antofagasta | 安托法加斯塔大区 | 안토파가스타 주 | Antofagasta | Antofagasta | Антофагаста | Antofagasta | Antofagasta | Antofagasta | Antofagasta | Antofagasta |
| Araucanía | `0x14060000` | -38.732300388, -72.597364192 | アラウカニア州 | Araucanía | Araucanie | Araukanien (Region IX) | Araucanía | Araucanía | 阿劳卡尼亚大区 | 아라우카니아 주 | Araucanía | Araucanía | Араукания | Araucanía | Araucanía | Araucanía | Araucanía | Araucanía |
| Atacama | `0x14070000` | -27.361450908000002, -70.328681265 | アタカマ州 | Atacama | Atacama | Atacama (Region III) | Atacama | Atacama | 阿塔卡马大区 | 아타카마 주 | Atacama | Atacama | Атакама | Atacama | Atacama | Atacama | Atacama | Atacama |
| Bío-Bío | `0x14080000` | -36.831665644, -73.04780487000001 | ビオビオ州 | Bío-Bío | Biobío | Bío-Bío (Region VIII) | Biobío | Bío-Bío | 比奥比奥大区 | 비오비오 주 | Bío-Bío | Bio-Bio | Био-Био | Bío-Bío | Bío-Bío | Bío-Bío | Bío-Bío | Bío-Bío |
| Coquimbo | `0x14090000` | -29.948731152, -71.339426201 | コキンボ州 | Coquimbo | Coquimbo | Coquimbo (Region IV) | Coquimbo | Coquimbo | 科金博大区 | 코킴보 주 | Coquimbo | Coquimbo | Кокимбо | Coquimbo | Coquimbo | Coquimbo | Coquimbo | Coquimbo |
| Libertador General Bernardo O'Higgins | `0x140A0000` | -34.16198794, -70.746162869 | L・ベルナルド・オヒギンス州 | Libertador General Bernardo O'Higgins | Libertador General Bernardo O'Higgins | Libertador General Bernardo O'Higgins (Region VI) | Libertador General Bernardo O'Higgins | Libertador General Bernardo O'Higgins | 奥伊金斯将军解放者大区 | 오이긴스 주 | Libertador General Bernardo O'Higgins | Libertador General Bernardo O'Higgins | О’Хиггинс | Libertador General Bernardo O'Higgins | Libertador General Bernardo O'Higgins | Libertador General Bernardo O'Higgins | Libertador General Bernardo O'Higgins | Libertador General Bernardo O'Higgins |
| Los Lagos | `0x140B0000` | -41.46789606, -72.932448111 | ロス・ラゴス州 | Los Lagos | Los Lagos | Los Lagos (Region X) | Los Lagos | Los Lagos | 湖大区 | 로스라고스 주 | Los Lagos | Los Lagos | Лос-Лагос | Los Lagos | Los Lagos | Los Lagos | Los Lagos | Los Lagos |
| Magallanes y Antártica Chilena | `0x140C0000` | -53.146362724, -70.910958239 | マガリャネス州 | Magallanes y Antártica Chilena | Magellan et Antarctique Chilienne | Magallanes (Region XII) und Chilenische Antarktis | Magellane e Antartide Cilena | Magallanes y Antártica Chilena | 麦哲伦-智利南极大区 | 마가야네스 주 | Magallanes y de la Antártica Chilena | Magalhães e Antártica Chilena | Магальянес и Чилийская Антарктика | Magallanes y Antártica Chilena | Magallanes y Antártica Chilena | Magallanes y Antártica Chilena | Magallanes y Antártica Chilena | Magallanes y Antártica Chilena |
| Maule | `0x140D0000` | -35.430908824, -71.663523762 | マウレ州 | Maule | Maule | Maule (Region VII) | Maule | Maule | 马乌莱大区 | 마울레 주 | Maule | Maule | Мауле | Maule | Maule | Maule | Maule | Maule |
| Tarapacá | `0x140E0000` | -20.214844544, -70.163885895 | タラパカ州 | Tarapacá | Tarapacá | Tarapacá (Region I) | Tarapacá | Tarapacá | 塔拉帕卡大区 | 타라파카 주 | Tarapacá | Tarapacá | Тарапака | Tarapacá | Tarapacá | Tarapacá | Tarapacá | Tarapacá |

# Colombia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x15` | CO | コロンビア | Colombia | Colombie | Kolumbien | Colombia | Colombia | 哥伦比亚 | 콜롬비아 | Colombia | Colômbia | Колумбия | Colombia | Colombia | Colombia | Colombia | Colombia |

## Colombia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x15000000` | 4.246215772, -74.179399744 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Distrito Capital | `0x15020000` | 4.246215772, -74.179399744 | ディストリト・キャピタル | Distrito Capital | District Capital de Santa Fe de Bogotá | Bogotá D.C. | Distretto Capitale | Distrito Capital | 波哥大首都区 | 콜롬비아 수도주 | Hoofdstedelijk District | Distrito Capital | Столичный округ | Distrito Capital | Distrito Capital | Distrito Capital | Distrito Capital | Distrito Capital |
| Cundinamarca | `0x15030000` | 4.597778268, -74.080522522 | クンディナマルカ県 | Cundinamarca | Cundinamarca | Cundinamarca | Cundinamarca | Cundinamarca | 昆迪纳马卡省 | 쿤디나마르카 주 | Cundinamarca | Cundinamarca | Кундинамарка | Cundinamarca | Cundinamarca | Cundinamarca | Cundinamarca | Cundinamarca |
| Amazonas | `0x15040000` | -4.213257811999995, -69.938665556 | アマソナス県 | Amazonas | Amazone | Amazonas | Amazonas | Amazonas | 亚马孙省 | 아마소나스 주 | Amazonas | Amazonas | Амазонас | Amazonas | Amazonas | Amazonas | Amazonas | Amazonas |
| Antioquia | `0x15050000` | 6.28967278, -75.530721778 | アンティオキア県 | Antioquia | Antioquia | Antioquia | Antioquia | Antioquia | 安提奥基亚省 | 안티오키아 주 | Antioquia | Antioquia | Антиокия | Antioquia | Antioquia | Antioquia | Antioquia | Antioquia |
| Arauca | `0x15060000` | 7.08618156, -70.757149227 | アラウカ県 | Arauca | Arauca | Arauca | Arauca | Arauca | 阿劳卡省 | 아라우카 주 | Arauca | Arauca | Араука | Arauca | Arauca | Arauca | Arauca | Arauca |
| Atlántico | `0x15070000` | 10.95886218, -74.794635792 | アトランティコ県 | Atlántico | Atlantique | Atlántico | Atlántico | Atlántico | 大西洋省 | 아틀란티코 주 | Atlántico | Atlántico | Атлантико | Atlántico | Atlántico | Atlántico | Atlántico | Atlántico |
| Bolívar | `0x15080000` | 10.398559452, -75.508749062 | ボリーバル県 | Bolívar | Bolívar | Bolívar | Bolívar | Bolívar | 玻利瓦尔省 | 볼리바르 주 | Bolívar | Bolívar | Боливар | Bolívar | Bolívar | Bolívar | Bolívar | Bolívar |
| Boyacá | `0x15090000` | 5.531616148, -73.366409252 | ボヤカ県 | Boyacá | Boyacá | Boyacá | Boyacá | Boyacá | 博亚卡省 | 보야카 주 | Boyacá | Boyacá | Бояка | Boyacá | Boyacá | Boyacá | Boyacá | Boyacá |
| Caldas | `0x150A0000` | 5.064697208, -75.51973542 | カルダス県 | Caldas | Caldas | Caldas | Caldas | Caldas | 卡尔达斯省 | 칼다스 주 | Caldas | Caldas | Калдас | Caldas | Caldas | Caldas | Caldas | Caldas |
| Caquetá | `0x150B0000` | 1.614990216, -75.613119463 | カケタ県 | Caquetá | Caquetá | Caquetá | Caquetá | Caquetá | 卡克塔省 | 카케타 주 | Caquetá | Caquetá | Какьета | Caquetá | Caquetá | Caquetá | Caquetá | Caquetá |
| Cauca | `0x150C0000` | 2.482910128, -76.579918967 | カウカ県 | Cauca | Cauca | Cauca | Cauca | Cauca | 考卡省 | 카우카 주 | Cauca | Cauca | Каука | Cauca | Cauca | Cauca | Cauca | Cauca |
| Cesar | `0x150D0000` | 10.475463748, -73.245559314 | セサル県 | Cesar | Cesar | Cesar | Cesar | Cesar | 塞萨尔省 | 세사르 주 | Cesar | Cesar | Сесар | Cesar | Cesar | Cesar | Cesar | Cesar |
| Chocó | `0x150E0000` | 5.690917904, -76.656823473 | チョコ県 | Chocó | Chocó | Chocó | Chocó | Chocó | 乔科省 | 초코 주 | Chocó | Chocó | Чоко | Chocó | Chocó | Chocó | Chocó | Chocó |
| Córdoba | `0x150F0000` | 8.756103416, -75.887778413 | コルドバ県 | Córdoba | Córdoba | Córdoba | Córdoba | Córdoba | 科尔多瓦省 | 코르도바 주 | Córdoba | Cordova | Кордоба | Córdoba | Córdoba | Córdoba | Córdoba | Córdoba |
| Guaviare | `0x15100000` | 2.565307588, -72.641309624 | グアビアレ県 | Guaviare | Guaviare | Guaviare | Guaviare | Guaviare | 瓜维亚雷省 | 과비아레 주 | Guaviare | Guaviare | Гуавиаре | Guaviare | Guaviare | Guaviare | Guaviare | Guaviare |
| Guainía | `0x15110000` | 3.861694292, -67.922668863 | グアイニア県 | Guainía | Guainía | Guainía | Guainía | Guainía | 瓜伊尼亚省 | 과이니아 주 | Guainía | Guainía | Гуаинья | Guainía | Guainía | Guainía | Guainía | Guainía |
| Huila | `0x15120000` | 2.927856412, -75.327474155 | ウィラ県 | Huila | Huila | Huila | Huila | Huila | 乌伊拉省 | 우일라 주 | Huila | Huila | Уила | Huila | Huila | Huila | Huila | Huila |
| La Guajira | `0x15130000` | 11.541137564, -72.90498221600001 | グアヒーラ県 | La Guajira | La Guajira | La Guajira | La Guajira | La Guajira | 瓜希拉省 | 라과히라 주 | Guajira | La Guajira | Гуахира | La Guajira | La Guajira | La Guajira | La Guajira | La Guajira |
| Magdalena | `0x15140000` | 11.244506708, -74.20137246 | マグダレーナ県 | Magdalena | Magdalena | Magdalena | Magdalena | Magdalena | 马格达雷那省 | 마그달레나 주 | Magdalena | Magdalena | Магдалена | Magdalena | Magdalena | Magdalena | Magdalena | Magdalena |
| Meta | `0x15150000` | 4.152831984, -73.630081844 | メタ県 | Meta | Meta | Meta | Meta | Meta | 梅塔省 | 메타 주 | Meta | Meta | Мета | Meta | Meta | Meta | Meta | Meta |
| Nariño | `0x15160000` | 1.20849608, -77.2775527 | ナリーニョ県 | Nariño | Nariño | Nariño | Nariño | Nariño | 纳里尼奥省 | 나리뇨 주 | Nariño | Nariño | Нариньо | Nariño | Nariño | Nariño | Nariño | Nariño |
| Norte de Santander | `0x15170000` | 7.88269034, -72.503980149 | ノルテ・デ・サンタンデル県 | Norte de Santander | Norte de Santander | Norte de Santander | Norte de Santander | Norte de Santander | 北桑坦德省 | 노르테데산탄데르 주 | Norte de Santander | Norte de Santander | Норте-де-Сантандер | Norte de Santander | Norte de Santander | Norte de Santander | Norte de Santander | Norte de Santander |
| Putumayo | `0x15180000` | 1.148071276, -76.645837115 | プトゥマイオ県 | Putumayo | Putumayo | Putumayo | Putumayo | Putumayo | 普图马约省 | 푸투마요 주 | Putumayo | Putumayo | Путумайо | Putumayo | Putumayo | Putumayo | Putumayo | Putumayo |
| Quindío | `0x15190000` | 4.5318603, -75.679037611 | キンディオ県 | Quindío | Quindío | Quindío | Quindío | Quindío | 金迪奥省 | 킨디오 주 | Quindío | Quindío | Киндио | Quindío | Quindío | Quindío | Quindío | Quindío |
| Risaralda | `0x151A0000` | 4.812011664, -75.69551714800001 | リサラルダ県 | Risaralda | Risaralda | Risaralda | Risaralda | Risaralda | 利萨拉尔达省 | 리사랄다 주 | Risaralda | Risaralda | Рисаральда | Risaralda | Risaralda | Risaralda | Risaralda | Risaralda |
| Archipiélago de San Andrés, Providencia y Santa Catalina | `0x151B0000` | 12.57934556, -81.699561795 | サン・アンドレス・イ・プロビデンシア県 | Archipiélago de San Andrés, Providencia y Santa Catalina | Îles de San Andrés, Providencia et Santa Cataline | San Andrés und Providencia | San Andrés e Providencia | Archipiélago de San Andrés, Providencia y Santa Catalina | 圣安德烈斯-普罗维登西亚省 | 산안드레스 이 프로비덴시아 주 | San Andrés en Providencia | Arquipélago de San Andrés, Providencia y Santa Catalina | Сан-Андрес-и-Провиденция | Archipiélago de San Andrés, Providencia y Santa Catalina | Archipiélago de San Andrés, Providencia y Santa Catalina | Archipiélago de San Andrés, Providencia y Santa Catalina | Archipiélago de San Andrés, Providencia y Santa Catalina | Archipiélago de San Andrés, Providencia y Santa Catalina |
| Santander | `0x151C0000` | 7.124633708, -73.124709376 | サンタンデル県 | Santander | Santander | Santander | Santander | Santander | 桑坦德省 | 산탄데르 주 | Santander | Santander | Сантандер | Santander | Santander | Santander | Santander | Santander |
| Sucre | `0x151D0000` | 9.299926652, -75.393392303 | スクレ県 | Sucre | Sucre | Sucre | Sucre | Sucre | 苏克雷省 | 수크레 주 | Sucre | Sucre | Сукре | Sucre | Sucre | Sucre | Sucre | Sucre |
| Tolima | `0x151E0000` | 4.438476512, -75.228596933 | トリマ県 | Tolima | Tolima | Tolima | Tolima | Tolima | 托利马省 | 톨리마 주 | Tolima | Tolima | Толима | Tolima | Tolima | Tolima | Tolima | Tolima |
| Valle del Cauca | `0x151F0000` | 3.4332275, -76.519493998 | バジェ・デル・カウカ県 | Valle del Cauca | Valle del Cauca | Valle del Cauca | Valle del Cauca | Valle del Cauca | 考卡山谷省 | 바예델카우카 주 | Valle del Cauca | Valle del Cauca | Валье-дель-Каука | Valle del Cauca | Valle del Cauca | Valle del Cauca | Valle del Cauca | Valle del Cauca |
| Vaupés | `0x15200000` | 1.197509752, -70.169379074 | バウペス県 | Vaupés | Vaupés | Vaupés | Vaupés | Vaupés | 沃佩斯省 | 바우페스 주 | Vaupés | Vaupés | Ваупес | Vaupés | Vaupés | Vaupés | Vaupés | Vaupés |
| Vichada | `0x15210000` | 6.185302664, -67.472228185 | ビチャダ県 | Vichada | Vichada | Vichada | Vichada | Vichada | 维查达省 | 비차다 주 | Vichada | Vichada | Вичада | Vichada | Vichada | Vichada | Vichada | Vichada |
| Casanare | `0x15220000` | 5.339355408, -72.38862339 | カサナレ県 | Casanare | Casanare | Casanare | Casanare | Casanare | 卡萨纳雷省 | 카사나레 주 | Casanare | Casanare | Касанаре | Casanare | Casanare | Casanare | Casanare | Casanare |

# Costa Rica
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x16` | CR | コスタリカ | Costa Rica | Costa Rica | Costa Rica | Costa Rica | Costa Rica | 哥斯达黎加 | 코스타리카 | Costa Rica | Costa Rica | Коста-Рика | Costa Rica | Costa Rica | Costa Rica | Costa Rica | Costa Rica |

## Costa Rica Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x16000000` | 9.931640512, -84.078108302 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| San José | `0x16020000` | 9.931640512, -84.078108302 | サン・ホセ州 | San José | San José | San José | San José | San José | 圣何塞省 | 산호세 주 | San José | San José | Сан-Хосе | San José | San José | San José | San José | San José |
| Alajuela | `0x16030000` | 10.014037972, -84.215437777 | アラフエラ州 | Alajuela | Alajuela | Alajuela | Alajuela | Alajuela | 阿拉胡埃拉省 | 알라후엘라 주 | Alajuela | Alajuela | Алахуэла | Alajuela | Alajuela | Alajuela | Alajuela | Alajuela |
| Cartago | `0x16040000` | 9.865722544, -83.913312932 | カルタゴ州 | Cartago | Cartago | Cartago | Cartago | Cartago | 卡塔戈省 | 카르타고 주 | Cartago | Cartago | Картаго | Cartago | Cartago | Cartago | Cartago | Cartago |
| Guanacaste | `0x16050000` | 10.62927234, -85.429430336 | グアナカステ州 | Guanacaste | Guanacaste | Guanacaste | Guanacaste | Guanacaste | 瓜纳卡斯特省 | 과나카스테 주 | Guanacaste | Guanacaste | Гуанакасте | Guanacaste | Guanacaste | Guanacaste | Guanacaste | Guanacaste |
| Heredia | `0x16060000` | 9.99755848, -84.111067376 | エレディア州 | Heredia | Heredia | Heredia | Heredia | Heredia | 埃雷迪亚省 | 에레디아 주 | Heredia | Heredia | Эредия | Heredia | Heredia | Heredia | Heredia | Heredia |
| Limón | `0x16070000` | 9.99755848, -83.028911113 | リモン州 | Limón | Limón | Limón | Limón | Limón | 利蒙省 | 리몬 주 | Limón | Limón | Лимон | Limón | Limón | Limón | Limón | Limón |
| Puntarenas | `0x16080000` | 9.964599496, -84.830673825 | プンタレナス州 | Puntarenas | Puntarenas | Puntarenas | Puntarenas | Puntarenas | 蓬塔雷纳斯省 | 푼타레나스 주 | Puntarenas | Puntarenas | Пунтаренас | Puntarenas | Puntarenas | Puntarenas | Puntarenas | Puntarenas |

# Dominica
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x17` | DM | ドミニカ国 | Dominica | Dominique | Dominica | Dominica | Dominica | 多米尼克 | 도미니카 연방 | Dominica | Dominica | Доминика | Dominica | Dominica | Dominica | Dominica | Dominica |

## Dominica Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x17000000` | 15.29846174, -61.396772211 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Dominica | `0x17010000` | 15.29846174, -61.396772211 | ドミニカ国 | Dominica | Dominique | Dominica | Dominica | Dominica | 多米尼克 | 도미니카 연방 | Dominica | Dominica | Доминика | Dominica | Dominica | Dominica | Dominica | Dominica |

# Dominican Republic
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x18` | DO | ドミニカ共和国 | Dominican Republic | République dominicaine | Dominikanische Republik | Repubblica Dominicana | República Dominicana | 多米尼加共和国 | 도미니카 공화국 | Dominicaanse Republiek | República Dominicana | Доминиканская Республика | Dominican Republic | Dominican Republic | Dominican Republic | Dominican Republic | Dominican Republic |

## Dominican Republic Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x18000000` | 18.462524204, -69.894720124 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Distrito Nacional | `0x18020000` | 18.462524204, -69.894720124 | ディストリト・ナショナル首都圏 | Distrito Nacional | District National | Distrito Nacional | Distretto Nazionale | Distrito Nacional | 国家区 | 도미니카 행정구 | Distrito Nacional | Distrito Nacional | Национальный округ | Distrito Nacional | Distrito Nacional | Distrito Nacional | Distrito Nacional | Distrito Nacional |
| Azua | `0x18030000` | 18.446044712, -70.72968333200001 | アスア | Azua | Azua | Azua | Azua | Azua | 阿苏阿省 | 아수아 | Azua | Azua | Азуа | Azua | Azua | Azua | Azua | Azua |
| Baoruco | `0x18040000` | 18.462524204, -71.416330707 | バオルコ | Baoruco | Baoruco | Baoruco | Baoruco | Baoruco | 巴奥鲁科省 | 바오루코 | Baoruco | Baoruco | Баоруко | Baoruco | Baoruco | Baoruco | Baoruco | Baoruco |
| Barahona | `0x18050000` | 18.198852332, -71.097726325 | バラオナ | Barahona | Barahona | Barahona | Barahona | Barahona | 巴拉奥纳省 | 바라오나 | Barahona | Barahona | Барахона | Barahona | Barahona | Barahona | Barahona | Barahona |
| Dajabón | `0x18060000` | 19.544677512, -71.696482836 | ダハボン | Dajabón | Dajabón | Dajabón | Dajabón | Dajabón | 达哈朋省 | 다하본 | Dajabón | Dajabón | Даджабон | Dajabón | Dajabón | Dajabón | Dajabón | Dajabón |
| Duarte | `0x18070000` | 19.297485132, -70.24628358 | ドゥアルテ | Duarte | Duarte | Duarte | Duarte | Duarte | 杜华德省 | 두아르테 | Duarte | Duarte | Дуарте | Duarte | Duarte | Duarte | Duarte | Duarte |
| Espaillat | `0x18080000` | 19.396362084, -70.515449351 | エスパイジャト | Espaillat | Espaillat | Espaillat | Espaillat | Espaillat | 艾斯派亚省 | 에스파이야트 | Espaillat | Espaillat | Эспаиллат | Espaillat | Espaillat | Espaillat | Espaillat | Espaillat |
| Independencia | `0x18090000` | 18.489990024, -71.850291848 | インデペンデンシア | Independencia | Independencia | Independencia | Independencia | Independencia | 独立省 | 인데펜덴시아 | Independencia | Independencia | Индепенденсия | Independencia | Independencia | Independencia | Independencia | Independencia |
| La Altagracia | `0x180A0000` | 18.698730256, -68.664248028 | ラ・アルタグラシア | La Altagracia | La Altagracia | La Altagracia | La Altagracia | La Altagracia | 圣母省 | 라알타그라시아 | La Altagracia | La Altagracia | Ла-Альтаграсия | La Altagracia | La Altagracia | La Altagracia | La Altagracia | La Altagracia |
| Elías Piña | `0x180B0000` | 18.874511504, -71.701976015 | エリアス・ピーニャ | Elías Piña | Elías Piña | Elías Piña | Elías Piña | Elías Piña | 埃利亚斯皮亚省 | 엘리아스피냐 | Elías Piña | Elías Piña | Эльяс-Пина | Elías Piña | Elías Piña | Elías Piña | Elías Piña | Elías Piña |
| La Romana | `0x180C0000` | 18.413085728, -68.960879694 | ラ・ロマーナ | La Romana | La Romana | La Romana | La Romana | La Romana | 罗马纳省 | 라로마나 | La Romana | La Romana | Ла-Романа | La Romana | La Romana | La Romana | La Romana | La Romana |
| María Trinidad Sánchez | `0x180D0000` | 19.379882592, -69.828801976 | マリア・トリニダー・サンチェス | María Trinidad Sánchez | María Trinidad Sánchez | María Trinidad Sánchez | María Trinidad Sánchez | María Trinidad Sánchez | 玛丽亚-桑其斯省 | 마리아 트리니다드산체스 | María Trinidad Sánchez | María Trinidad Sánchez | Мария-Тринидад-Санчес | María Trinidad Sánchez | María Trinidad Sánchez | María Trinidad Sánchez | María Trinidad Sánchez | María Trinidad Sánchez |
| Monte Cristi | `0x180E0000` | 19.66552712, -71.663523762 | モンテ・クリスティ | Monte Cristi | Monte Cristi | Monte Cristi | Monte Cristi | Monte Cristi | 基度山省 | 몬테크리스티 | Monte Cristi | Monte Cristi | Монте-Кристи | Monte Cristi | Monte Cristi | Monte Cristi | Monte Cristi | Monte Cristi |
| Pedernales | `0x180F0000` | 18.028564248, -71.745921447 | ペデルナレス | Pedernales | Pedernales | Pedernales | Pedernales | Pedernales | 佩德纳莱斯省 | 페데르날레스 | Pedernales | Pedernales | Педерналес | Pedernales | Pedernales | Pedernales | Pedernales | Pedernales |
| Peravia | `0x18100000` | 18.281249792, -70.328681265 | ペラビア | Peravia | Peravia | Peravia | Peravia | Peravia | 佩拉维亚省 | 페라비아 | Peravia | Peravia | Перавия | Peravia | Peravia | Peravia | Peravia | Peravia |
| Puerto Plata | `0x18110000` | 19.797363056000002, -70.68024472100001 | プエルト・プラタ | Puerto Plata | Puerto Plata | Puerto Plata | Puerto Plata | Puerto Plata | 银港省 | 푸에르토 플라타 | Puerto Plata | Puerto Plata | Пуэрто-Плата | Puerto Plata | Puerto Plata | Puerto Plata | Puerto Plata | Puerto Plata |
| Salcedo | `0x18120000` | 19.396362084, -70.345160802 | サルセド | Salcedo | Salcedo | Hermanas Mirabal | Salcedo | Salcedo | 萨尔塞多省 | 살세도 | Salcedo | Salcedo | Салкедо | Salcedo | Salcedo | Salcedo | Salcedo | Salcedo |
| Samaná | `0x18130000` | 19.215087672, -69.31244315000001 | セマナ | Samaná | Samaná | Samaná | Samaná | Samaná | 山美纳省 | 사마나 | Samaná | Samaná | Самана | Samaná | Samaná | Samaná | Samaná | Samaná |
| Sánchez Ramírez | `0x18140000` | 19.044799588, -70.147406358 | サンチェス・ラミレス | Sánchez Ramírez | Sánchez Ramírez | Sánchez Ramírez | Sánchez Ramírez | Sánchez Ramírez | 桑切斯-拉米斯省 | 산체스라미레스 | Sánchez Ramírez | Sánchez Ramírez | Санчес-Рамирес | Sánchez Ramírez | Sánchez Ramírez | Sánchez Ramírez | Sánchez Ramírez | Sánchez Ramírez |
| San Juan | `0x18150000` | 18.797607208, -71.229562621 | サン・フアン | San Juan | San Juan | San Juan | San Juan | San Juan | 圣胡安省 | 산후안 | San Juan | San Juan | Сан-Хуан | San Juan | San Juan | San Juan | San Juan | San Juan |
| San Pedro de Macorís | `0x18160000` | 18.446044712, -69.295963613 | サン・ペドロ・デ・マコリス | San Pedro de Macorís | San Pedro de Macorís | San Pedro de Macorís | San Pedro de Macorís | San Pedro de Macorís | 圣彼德省 | 산페드로데마코리스 | San Pedro de Macorís | San Pedro de Macorís | Сан-Педро-де-Маркорис | San Pedro de Macorís | San Pedro de Macorís | San Pedro de Macorís | San Pedro de Macorís | San Pedro de Macorís |
| Santiago | `0x18170000` | 19.44580056, -70.696724258 | サンティアゴ | Santiago | Santiago | Santiago | Santiago | Santiago | 圣地亚哥省 | 산티아고 | Santiago | Santiago | Сантьяго | Santiago | Santiago | Santiago | Santiago | Santiago |
| Santiago Rodríguez | `0x18180000` | 19.462280052, -71.328439843 | サンティアゴ・ロドリゲス | Santiago Rodríguez | Santiago Rodríguez | Santiago Rodríguez | Santiago Rodríguez | Santiago Rodríguez | 圣地亚哥-罗里盖兹省 | 산티아고로드리게스 | Santiago Rodríguez | Santiago Rodríguez | Сантьяго-Родригес | Santiago Rodríguez | Santiago Rodríguez | Santiago Rodríguez | Santiago Rodríguez | Santiago Rodríguez |
| Valverde | `0x18190000` | 19.566650168, -71.081246788 | バルベルデ | Valverde | Valverde | Valverde | Valverde | Valverde | 巴韦德省 | 발베르데 | Valverde | Valverde | Вальверде | Valverde | Valverde | Valverde | Valverde | Valverde |
| El Seíbo | `0x181A0000` | 18.764648224000002, -69.032291021 | エル・セイボ | El Seíbo | El Seibo | El Seíbo | El Seíbo | El Seíbo | 赛堡省 | 엘세이보 | El Seibo | El Seíbo | Эль-Сейбо | El Seíbo | El Seíbo | El Seíbo | El Seíbo | El Seíbo |
| Hato Mayor | `0x181B0000` | 18.764648224000002, -69.246525002 | アト・マジョール | Hato Mayor | Hato Mayor | Hato Mayor | Hato Mayor | Hato Mayor | 阿托马约省 | 아토마요르 | Hato Mayor | Hato Mayor | Хато-Майор | Hato Mayor | Hato Mayor | Hato Mayor | Hato Mayor | Hato Mayor |
| La Vega | `0x181C0000` | 19.215087672, -70.515449351 | ラ・ベガ | La Vega | La Vega | La Vega | La Vega | La Vega | 拉维加省 | 라베가 | La Vega | La Vega | Ла-Вега | La Vega | La Vega | La Vega | La Vega | La Vega |
| Monseñor Nouel | `0x181D0000` | 18.929443144, -70.41107895 | モンセニョール・ノウエル | Monseñor Nouel | Monseñor Nouel | Monseñor Nouel | Monseñor Nouel | Monseñor Nouel | 主教-瑙黎省 | 몬세뇨르노우엘 | Monseñor Nouel | Monseñor Nouel | Монсенор-Нуэль | Monseñor Nouel | Monseñor Nouel | Monseñor Nouel | Monseñor Nouel | Monseñor Nouel |
| Monte Plata | `0x181E0000` | 18.797607208, -69.779363365 | モンテ・プラタ | Monte Plata | Monte Plata | Monte Plata | Monte Plata | Monte Plata | 银山省 | 몬테플라타 | Monte Plata | Monte Plata | Монте-Плата | Monte Plata | Monte Plata | Monte Plata | Monte Plata | Monte Plata |
| San Cristóbal | `0x181F0000` | 18.413085728, -70.097967747 | サン・クリストバル | San Cristóbal | San Cristóbal | San Cristóbal | San Cristóbal | San Cristóbal | 圣克里斯多堡省 | 산크리스토발 | San Cristóbal | São Cristóvão | Сан-Кристобаль | San Cristóbal | San Cristóbal | San Cristóbal | San Cristóbal | San Cristóbal |

# Ecuador
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x19` | EC | エクアドル | Ecuador | Équateur | Ecuador | Ecuador | Ecuador | 厄瓜多尔 | 에콰도르 | Ecuador | Equador | Эквадор | Ecuador | Ecuador | Ecuador | Ecuador | Ecuador |

## Ecuador Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x19000000` | -0.21423441999999682, -78.497038438 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Pichincha | `0x19020000` | -0.21423441999999682, -78.497038438 | ピチンチャ | Pichincha | Pichincha | Pichincha | Pichincha | Pichincha | 皮钦查省 | 피친차 | Pichincha | Pichincha | Пичинча | Pichincha | Pichincha | Pichincha | Pichincha | Pichincha |
| Galápagos | `0x19030000` | -0.8953867559999935, -89.59875319700001 | ガラパゴス | Galápagos | Galápagos | Galapagosinseln | Galápagos | Galápagos | 加拉帕戈斯省 | 갈라파고스 | Galápagos | Galápagos | Галапагос | Galápagos | Galápagos | Galápagos | Galápagos | Galápagos |
| Azuay | `0x19040000` | -2.8784189600000047, -78.98043819 | アスアイ | Azuay | Azuay | Azuay | Azuay | Azuay | 阿苏艾省 | 아수아이 | Azuay | Azuay | Асуай | Azuay | Azuay | Azuay | Azuay | Azuay |
| Bolívar | `0x19050000` | -1.5985117479999928, -78.996917727 | ボリーバル | Bolívar | Bolívar | Bolívar | Bolívar | Bolívar | 玻利瓦尔省 | 볼리바르 | Bolívar | Bolívar | Боливар | Bolívar | Bolívar | Bolívar | Bolívar | Bolívar |
| Cañar | `0x19060000` | -2.730103532000001, -78.832122357 | カニャル | Cañar | Cañar | Cañar | Cañar | Cañar | 卡尼亚尔省 | 카냐르 | Cañar | Cañar | Каньяр | Cañar | Cañar | Cañar | Cañar | Cañar |
| Carchi | `0x19070000` | 0.79650878, -77.72799337800001 | カルチ | Carchi | Carchi | Carchi | Carchi | Carchi | 卡尔奇省 | 카르치 | Carchi | Carchi | Карчи | Carchi | Carchi | Carchi | Carchi | Carchi |
| Chimborazo | `0x19080000` | -1.6644297160000008, -78.62887473400001 | チンボラソ | Chimborazo | Chimborazo | Chimborazo | Chimborazo | Chimborazo | 钦博拉索省 | 침보라소 | Chimborazo | Chimborazo | Чимборасо | Chimborazo | Chimborazo | Chimborazo | Chimborazo | Chimborazo |
| Cotopaxi | `0x19090000` | -0.9283457399999975, -78.612395197 | コトパクシ | Cotopaxi | Cotopaxi | Cotopaxi | Cotopaxi | Cotopaxi | 科托帕希省 | 코토팍시 | Cotopaxi | Cotopaxi | Котопакси | Cotopaxi | Cotopaxi | Cotopaxi | Cotopaxi | Cotopaxi |
| El Oro | `0x190A0000` | -3.262940439999994, -79.963717231 | エル・オロ | El Oro | El Oro | El Oro | El Oro | El Oro | 埃尔奥罗省 | 엘오로 | El Oro | El Oro | Эль-Оро | El Oro | El Oro | El Oro | El Oro | El Oro |
| Esmeraldas | `0x190B0000` | 0.983276356, -79.69455146 | エスメラルダス | Esmeraldas | Esmeraldas | Esmeraldas | Esmeraldas | Esmeraldas | 埃斯梅拉尔达斯省 | 에스메랄다스 | Esmeraldas | Esmeraldas | Эсмеральдас | Esmeraldas | Esmeraldas | Esmeraldas | Esmeraldas | Esmeraldas |
| Guayas | `0x190C0000` | -2.164307640000004, -79.897799083 | グアヤス | Guayas | Guayas | Guayas | Guayas | Guayas | 瓜亚斯省 | 과야스 | Guayas | Guayas | Гуаяс | Guayas | Guayas | Guayas | Guayas | Guayas |
| Imbabura | `0x190D0000` | 0.346069332, -78.112515908 | インバブラ | Imbabura | Imbabura | Imbabura | Imbabura | Imbabura | 因巴布拉省 | 임바부라 | Imbabura | Imbabura | Имбабура | Imbabura | Imbabura | Imbabura | Imbabura | Imbabura |
| Loja | `0x190E0000` | -3.9990244159999975, -79.211151708 | ロハ | Loja | Loja | Loja | Loja | Loja | 洛哈省 | 로하 | Loja | Loja | Лоха | Loja | Loja | Loja | Loja | Loja |
| Los Ríos | `0x190F0000` | -1.8127451440000044, -79.513276553 | ロス・リオス | Los Ríos | Los Ríos | Los Ríos | Los Ríos | Los Ríos | 洛斯里奥斯省 | 로스 리오스 | Los Ríos | Los Ríos | Лос-Риос | Los Ríos | Los Ríos | Los Ríos | Los Ríos | Los Ríos |
| Manabí | `0x19100000` | -1.0491953479999978, -80.447116983 | マナビ | Manabí | Manabí | Manabí | Manabí | Manabí | 马纳比省 | 마나비 | Manabí | Manabí | Манаби | Manabí | Manabí | Manabí | Manabí | Manabí |
| Morona-Santiago | `0x19110000` | -2.3126230679999935, -78.112515908 | モロナ・サンティアゴ | Morona-Santiago | Morona-Santiago | Morona Santiago | Morona Santiago | Morona-Santiago | 莫罗纳-圣地亚哥省 | 모로나 산티아고 | Morona-Santiago | Morona-Santiago | Морона-Сантьяго | Morona-Santiago | Morona-Santiago | Morona-Santiago | Morona-Santiago | Morona-Santiago |
| Pastaza | `0x19120000` | -1.4611826480000047, -77.980679612 | パスタサ | Pastaza | Pastaza | Pastaza | Pastaza | Pastaza | 帕斯塔萨省 | 파스타사 | Pastaza | Pastaza | Пастаса | Pastaza | Pastaza | Pastaza | Pastaza | Pastaza |
| Tungurahua | `0x19130000` | -1.2469492519999932, -78.612395197 | トゥングラワ | Tungurahua | Tungurahua | Tungurahua | Tungurahua | Tungurahua | 通古拉瓦省 | 퉁그라우아 | Tungurahua | Tungurahua | Тункурагуа | Tungurahua | Tungurahua | Tungurahua | Tungurahua | Tungurahua |
| Zamora-Chinchipe | `0x19140000` | -4.064942384000005, -78.952972295 | サモラ・チンチペ | Zamora-Chinchipe | Zamora-Chinchipe | Zamora Chinchipe | Zamora Chinchipe | Zamora-Chinchipe | 萨莫拉-钦奇佩省 | 사모라 친치페 | Zamora-Chinchipe | Zamora-Chinchipe | Самора-Чинчипе | Zamora-Chinchipe | Zamora-Chinchipe | Zamora-Chinchipe | Zamora-Chinchipe | Zamora-Chinchipe |
| Sucumbios | `0x19150000` | 0.08239746, -76.882043812 | スクンビオス | Sucumbios | Sucumbíos | Sucumbíos | Sucumbíos | Sucumbíos | 苏昆毕奥斯省 | 스쿰비오스 | Sucumbíos | Sucumbíos | Сукумбиос | Sucumbios | Sucumbios | Sucumbios | Sucumbios | Sucumbios |
| Napo | `0x19160000` | -0.9832773800000041, -77.815884242 | ナポ | Napo | Napo | Napo | Napo | Napo | 纳波省 | 나포 | Napo | Napo | Напо | Napo | Napo | Napo | Napo | Napo |
| Orellana | `0x19170000` | -0.7965098039999958, -76.365684986 | オレリャナ | Orellana | Orellana | Orellana | Orellana | Orellana | 奥雷利亚纳省 | 오렐라나 | Orellana | Orellana | Орельяна | Orellana | Orellana | Orellana | Orellana | Orellana |
| Santa Elena | `0x19180000` | -2.224732443999997, -80.853612229 | サンタ・エレーナ | Santa Elena | Santa Elena | Santa Elena | Santa Elena | Santa Elena | 圣埃伦娜省 | 산타엘레나 | Santa Elena | Santa Elena | Санта Элена | Santa Elena | Santa Elena | Santa Elena | Santa Elena | Santa Elena |
| Santo Domingo de los Tsáchilas | `0x19190000` | -0.24719340400000078, -79.14523356 | サント・ドミンゴ・デ・ロス・ツァチラス | Santo Domingo de los Tsáchilas | Santo Domingo de los Tsáchilas | Santo Domingo de los Tsáchilas | Santo Domingo de los Tsáchilas | Santo Domingo de los Tsáchilas | 圣多明各-德洛斯查奇拉斯省 | 산토도밍고델로스트사칠라스 | Santo Domingo de los Tsáchilas | Santo Domingo de los Tsáchilas | Санто Доминго де лос Тсачилас | Santo Domingo de los Tsáchilas | Santo Domingo de los Tsáchilas | Santo Domingo de los Tsáchilas | Santo Domingo de los Tsáchilas | Santo Domingo de los Tsáchilas |

# El Salvador
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x1A` | SV | エルサルバドル | El Salvador | Salvador | El Salvador | El Salvador | El Salvador | 萨尔瓦多 | 엘살바도르 | El Salvador | El Salvador | Сальвадор | El Salvador | El Salvador | El Salvador | El Salvador | El Salvador |

## El Salvador Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x1A000000` | 13.70544418, -89.19775113 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| San Salvador | `0x1A020000` | 13.70544418, -89.19775113 | サン・サルバドル県 | San Salvador | San Salvador | San Salvador | San Salvador | San Salvador | 圣萨尔瓦多省 | 산살바도르 주 | San Salvador | San Salvador | Сан-Сальвадор | San Salvador | San Salvador | San Salvador | San Salvador | San Salvador |
| Ahuachapán | `0x1A030000` | 13.919677576, -89.840453073 | アワチャパン県 | Ahuachapán | Ahuachapán | Ahuachapán | Ahuachapán | Ahuachapán | 阿瓦查潘省 | 아우아차판 주 | Ahuachapán | Ahuachapán | Ауачапан | Ahuachapán | Ahuachapán | Ahuachapán | Ahuachapán | Ahuachapán |
| Cabañas | `0x1A040000` | 13.864745936, -88.631953693 | カバニャス県 | Cabañas | Cabañas | Cabañas | Cabañas | Cabañas | 卡瓦尼亚斯省 | 카바냐스 주 | Cabañas | Cabañas | Кабанас | Cabañas | Cabañas | Cabañas | Cabañas | Cabañas |
| Chalatenango | `0x1A050000` | 14.029540856, -88.928585359 | チャラテナンゴ県 | Chalatenango | Chalatenango | Chalatenango | Chalatenango | Chalatenango | 查拉特南戈省 | 찰라테낭고 주 | Chalatenango | Chalatenango | Чалатенанго | Chalatenango | Chalatenango | Chal얆徇᥄�슃�榩 | Chalatenango | Chalatenango |
| Cuscatlán | `0x1A060000` | 13.716430508, -88.928585359 | クスカトラン県 | Cuscatlán | Cuscatlán | Cuscatlán | Cuscatlán | Cuscatlán | 库斯卡特兰省 | 쿠스카틀란 주 | Cuscatlán | Cuscatlán | Кускатлан | Cuscatlán | Cuscatlán | Cuscatlán | Cuscatlán | Cuscatlán |
| La Libertad | `0x1A070000` | 13.672485196, -89.274655636 | ラ・リベルター県 | La Libertad | La Libertad | La Libertad | La Libertad | La Libertad | 拉利伯塔德省 | 라리베르타드 주 | La Libertad | La Libertad | Ла-Либертад | La Libertad | La Libertad | La Libertad | La Libertad | La Libertad |
| La Paz | `0x1A080000` | 13.496703948, -88.862667211 | ラパス県 | La Paz | La Paz | La Paz | La Paz | La Paz | 拉巴斯省 | 라파스 주 | La Paz | La Paz | Ла-Пас | La Paz | La Paz | La Paz | La Paz | La Paz |
| La Unión | `0x1A090000` | 13.331909028, -87.840935917 | ラ・ウニオン県 | La Unión | La Unión | La Unión | La Unión | La Unión | 拉乌尼翁省 | 라우니온 주 | La Unión | La Unión | Ла-Унион | La Unión | La Unión | La Unión | La Unión | La Unión |
| Morazán | `0x1A0A0000` | 13.699951016, -88.09911533 | モラサン県 | Morazán | Morazán | Morazán | Morazán | Morazán | 莫拉桑省 | 모라산 주 | Morazán | Morazán | Морасан | Morazán | Morazán | Morazán | Morazán | Morazán |
| San Miguel | `0x1A0B0000` | 13.480224456, -88.18151301500001 | サン・ミゲル県 | San Miguel | San Miguel | San Miguel | San Miguel | San Miguel | 圣米格尔省 | 산미겔 주 | San Miguel | San Miguel | Сан-Мигель | San Miguel | San Miguel | San Miguel | San Miguel | San Miguel |
| Santa Ana | `0x1A0C0000` | 13.991088708, -89.554807765 | サンタ・アナ県 | Santa Ana | Santa Ana | Santa Ana | Santa Ana | Santa Ana | 圣安娜省 | 산타아나 주 | Santa Ana | Santa Ana | Санта-Ана | Santa Ana | Santa Ana | Santa Ana | Santa Ana | Santa Ana |
| San Vicente | `0x1A0D0000` | 13.628539884, -88.79674906300001 | サンビセンテ県 | San Vicente | San Vicente | San Vicente | San Vicente | San Vicente | 圣维森特省 | 산비센테 주 | San Vicente | San Vicente | Сан-Висенте | San Vicente | San Vicente | San Vicente | San Vicente | San Vicente |
| Sonsonate | `0x1A0E0000` | 13.716430508, -89.719603135 | ソンソナテ県 | Sonsonate | Sonsonate | Sonsonate | Sonsonate | Sonsonate | 松索纳特省 | 손소나테 주 | Sonsonate | Sonsonate | Сонсонате | Sonsonate | Sonsonate | Sonsonate | Sonsonate | Sonsonate |
| Usulután | `0x1A0F0000` | 13.34838852, -88.445185607 | ウスルタン県 | Usulután | Usulután | Usulután | Usulután | Usulután | 乌苏卢坦省 | 우술루탄 주 | Usulután | Usulután | Усулутан | Usulután | Usulután | Usulután | Usulután | Usulután |

# French Guiana
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x1B` | GF | フランス領ギアナ | French Guiana | Guyane | Französisch-Guyana | Guyana Francese | Guayana Francesa | 法属圭亚那 | 프랑스령 기아나 | Frans-Guyana | Guiana Francesa | Французская Гвиана | French Guiana | French Guiana | French Guiana | French Guiana | French Guiana |

## French Guiana Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x1B000000` | 4.932861272, -52.327533681999995 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| French Guiana | `0x1B010000` | 4.932861272, -52.327533681999995 | フランス領ギアナ | French Guiana | Guyane | Französisch-Guyana | Guyana Francese | Guayana Francesa | 法属圭亚那 | 프랑스령 기아나 | Frans-Guyana | Guiana Francesa | Французская Гвиана | French Guiana | French Guiana | French Guiana | French Guiana | French Guiana |

# Grenada
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x1C` | GD | グレナダ | Grenada | Grenade | Grenada | Grenada | Granada | 格林纳达 | 그레나다 | Grenada | Granada | Гренада | Grenada | Grenada | Grenada | Grenada | Grenada |

## Grenada Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x1C000000` | 12.046508652, -61.748335667000006 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Grenada | `0x1C010000` | 12.046508652, -61.748335667000006 | グレナダ | Grenada | Grenade | Grenada | Grenada | Granada | 格林纳达 | 그레나다 | Grenada | Granada | Гренада | Grenada | Grenada | Grenada | Grenada | Grenada |

# Guadeloupe
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x1D` | GP | グアドループ | Guadeloupe | Guadeloupe | Guadeloupe | Guadalupa | Guadalupe | 瓜德罗普 | 과들루프 | Guadeloupe | Guadalupe | Гваделупа | Guadeloupe | Guadeloupe | Guadeloupe | Guadeloupe | Guadeloupe |

## Guadeloupe Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x1D000000` | 15.996093568000001, -61.715376593 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Guadeloupe | `0x1D010000` | 15.996093568000001, -61.715376593 | グアドループ | Guadeloupe | Guadeloupe | Guadeloupe | Guadalupa | Guadalupe | 瓜德罗普 | 과들루프 | Guadeloupe | Guadalupe | Гваделупа | Guadeloupe | Guadeloupe | Guadeloupe | Guadeloupe | Guadeloupe |

# Guatemala
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x1E` | GT | グアテマラ | Guatemala | Guatemala | Guatemala | Guatemala | Guatemala | 危地马拉 | 과테말라 | Guatemala | Guatemala | Гватемала | Guatemala | Guatemala | Guatemala | Guatemala | Guatemala |

## Guatemala Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x1E000000` | 14.617309404, -90.521607269 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Guatemala | `0x1E020000` | 14.617309404, -90.521607269 | グアテマラ県 | Guatemala | Guatemala | Guatemala | Guatemala | Guatemala | 危地马拉省 | 과테말라 주 | Guatemala | Guatemala | Гватемала | Guatemala | Guatemala | Guatemala | Guatemala | Guatemala |
| Alta Verapaz | `0x1E030000` | 15.479736152000001, -90.362305078 | アルタ・べラパス県 | Alta Verapaz | Alta Verapaz | Alta Verapaz | Alta Verapaz | Alta Verapaz | 上韦拉帕斯省 | 알타베라파스 주 | Alta Verapaz | Alta Verapaz | Альта-Верапас | Alta Verapaz | Alta Verapaz | Alta Verapaz | Alta Verapaz | Alta Verapaz |
| Baja Verapaz | `0x1E040000` | 15.095214672000001, -90.263427856 | バハ・べラパス県 | Baja Verapaz | Baja Verapaz | Baja Verapaz | Baja Verapaz | Baja Verapaz | 下韦拉帕斯省 | 바하베라파스 주 | Baja Verapaz | Baja Verapaz | Баха-Верапас | Baja Verapaz | Baja Verapaz | Baja Verapaz | Baja Verapaz | Baja Verapaz |
| Chimaltenango | `0x1E050000` | 14.66674788, -90.812745756 | チマルテナンゴ県 | Chimaltenango | Chimaltenango | Chimaltenango | Chimaltenango | Chimaltenango | 奇马尔特南戈省 | 치말테낭고 주 | Chimaltenango | Chimaltenango | Чимальтенанго | Chimaltenango | Chimaltenango | Chimaltenango | Chimaltenango | Chimaltenango |
| Chiquimula | `0x1E060000` | 14.798583816, -89.549314586 | チキムラ県 | Chiquimula | Chiquimula | Chiquimula | Chiquimula | Chiquimula | 奇基穆拉省 | 치키물라 주 | Chiquimula | Chiquimula | Чикимула | Chiquimula | Chiquimula | Chiquimula | Chiquimula | Chiquimula |
| El Progreso | `0x1E070000` | 14.853515456, -90.060180233 | エル・プログレソ県 | El Progreso | El Progreso | El Progreso | El Progreso | El Progreso | 埃尔普罗格雷索省 | 엘프로그레소 주 | El Progreso | El Progreso | Эль-Прогресо | El Progreso | El Progreso | El Progreso | El Progreso | El Progreso |
| Escuintla | `0x1E080000` | 14.304199056, -90.779786682 | エスクィントラ県 | Escuintla | Escuintla | Escuintla | Escuintla | Escuintla | 埃斯昆特拉省 | 에스쿠인틀라 주 | Escuintla | Escuintla | Эскуинтла | Escuintla | Escuintla | Escuintla | Escuintla | Escuintla |
| Huehuetenango | `0x1E090000` | 15.314941232, -91.466434057 | ウェウェテナンゴ県 | Huehuetenango | Huehuetenango | Huehuetenango | Huehuetenango | Huehuetenango | 韦韦特南戈省 | 우에우에테낭고 주 | Huehuetenango | Huehuetenango | Уэуэтенанго | Huehuetenango | Huehuetenango | Huehuetenango | Huehuetenango | Huehuetenango |
| Izabal | `0x1E0A0000` | 15.715942204000001, -88.598994619 | イザバル県 | Izabal | Izabal | Izabal | Izabal | Izabal | 伊萨瓦尔省 | 이사발 주 | Izabal | Izabal | Исабаль | Izabal | Izabal | Izabal | Izabal | Izabal |
| Jalapa | `0x1E0B0000` | 14.628295732, -89.97778254800001 | ハラパ県 | Jalapa | Jalapa | Jalapa | Jalapa | Jalapa | 哈拉帕省 | 할라파 주 | Jalapa | Jalapa | Халапа | Jalapa | Jalapa | Jalapa | Jalapa | Jalapa |
| Jutiapa | `0x1E0C0000` | 14.2822264, -89.895384863 | フティアパ県 | Jutiapa | Jutiapa | Jutiapa | Jutiapa | Jutiapa | 胡蒂亚帕省 | 후티아파 주 | Jutiapa | Jutiapa | Хутьяпа | Jutiapa | Jutiapa | Jutiapa | Jutiapa | Jutiapa |
| Petén | `0x1E0D0000` | 16.929931448, -89.878905326 | エル・ペテン県 | Petén | El Petén | El Petén | Petén | Petén | 佩滕省 | 페텐 주 | Petén | Petén | Петен | Petén | Petén | Petén | Petén | Petén |
| Quetzaltenango | `0x1E0E0000` | 14.8315428, -91.515872668 | ケツァルテナンゴ県 | Quetzaltenango | Quetzaltenango | Quetzaltenango | Quetzaltenango | Quetzaltenango | 克萨尔特南戈省 | 케트살테낭고 주 | Quetzaltenango | Quetzaltenango | Кецальтенанго | Quetzaltenango | Quetzaltenango | Quetzaltenango | Quetzaltenango | Quetzaltenango |
| Quiché | `0x1E0F0000` | 15.029296704, -91.147829675 | エル・キチェ県 | Quiché | El Quiché | El Quiché | Quiché | Quiché | 基切省 | 키체 주 | Quiché | Quiché | Киче | Quiché | Quiché | Quiché | Quiché | Quiché |
| Retalhuleu | `0x1E100000` | 14.52941878, -91.68066803800001 | レタルーレウ県 | Retalhuleu | Retalhuleu | Retalhuleu | Retalhuleu | Retalhuleu | 雷塔卢莱乌省 | 레탈룰레우 주 | Retalhuleu | Retalhuleu | Реталулеу | Retalhuleu | Retalhuleu | Retalhuleu | Retalhuleu | Retalhuleu |
| Sacatepéquez | `0x1E110000` | 14.5568846, -90.730348071 | サカテペケス県 | Sacatepéquez | Sacatepéquez | Sacatepéquez | Sacatepéquez | Sacatepéquez | 萨卡特佩克斯省 | 사카테페케스 주 | Sacatepéquez | Sacatepéquez | Сакатепекес | Sacatepéquez | Sacatepéquez | Sacatepéquez | Sacatepéquez | Sacatepéquez |
| San Marcos | `0x1E120000` | 14.963378736, -91.796024797 | サン・マルコス県 | San Marcos | San Marcos | San Marcos | San Marcos | San Marcos | 圣马科斯省 | 산마르코스 주 | San Marcos | San Marcos | Сан-Маркос | San Marcos | San Marcos | San Marcos | San Marcos | San Marcos |
| Santa Rosa | `0x1E130000` | 14.271240072, -90.29638693 | サンタ・ローサ県 | Santa Rosa | Santa Rosa | Santa Rosa | Santa Rosa | Santa Rosa | 圣罗莎省 | 산타로사 주 | Santa Rosa | Santa Rosa | Санта-Роса | Santa Rosa | Santa Rosa | Santa Rosa | Santa Rosa | Santa Rosa |
| Sololá | `0x1E140000` | 14.765624832, -91.180788749 | ソロラ県 | Sololá | Sololá | Sololá | Sololá | Sololá | 索洛拉省 | 솔롤라 주 | Sololá | Sololá | Солола | Sololá | Sololá | Sololá | Sololá | Sololá |
| Suchitepéquez | `0x1E150000` | 14.52941878, -91.499393131 | スチテペケス県 | Suchitepéquez | Suchitepéquez | Suchitepéquez | Suchitepéquez | Suchitepéquez | 苏奇特佩克斯省 | 수치테페케스 주 | Suchitepéquez | Suchitepéquez | Сучитепекес | Suchitepéquez | Suchitepéquez | Suchitepéquez | Suchitepéquez | Suchitepéquez |
| Totonicapán | `0x1E160000` | 14.91394026, -91.362063656 | トトニカパン県 | Totonicapán | Totonicapán | Totonicapán | Totonicapán | Totonicapán | 托托尼卡潘省 | 토토니카판 주 | Totonicapán | Totonicapán | Тотоникапан | Totonicapán | Totonicapán | Totonicapán | Totonicapán | Totonicapán |
| Zacapa | `0x1E170000` | 14.963378736, -89.532835049 | サカパ県 | Zacapa | Zacapa | Zacapa | Zacapa | Zacapa | 萨卡帕省 | 사카파 주 | Zacapa | Zacapa | Сакапа | Zacapa | Zacapa | Zacapa | Zacapa | Zacapa |

# Guyana
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x1F` | GY | ガイアナ | Guyana | République coopérative de Guyana | Guyana | Guyana | Guyana | 圭亚那 | 가이아나 | Guyana | Guiana | Гайана | Guyana | Guyana | Guyana | Guyana | Guyana |

## Guyana Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x1F000000` | 6.795043868, -58.161289780000004 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Demerara-Mahaica | `0x1F020000` | 6.795043868, -58.161289780000004 | デメララ・マハイカ州 | Demerara-Mahaica | Demerara-Mahaica | Demerara-Mahaica | Demerara-Mahaica | Demerara-Mahaica | 德梅拉拉-马海卡区 | 데메라라-마하이카 주 | Demerara-Mahaica | Demerara-Mahaica | Демерара-Махаиса | Demerara-Mahaica | Demerara-Mahaica | Demerara-Mahaica | Demerara-Mahaica | Demerara-Mahaica |
| Barima-Waini | `0x1F030000` | 8.195800688, -59.781777585 | バリマ・ワイニ州 | Barima-Waini | Barima-Waini | Barima-Waini | Barima-Waini | Barima-Waini | 巴里马-瓦伊尼区 | 바리마-와이니 주 | Barima-Waini | Barima-Waini | Барима-Ваини | Barima-Waini | Barima-Waini | Barima-Waini | Barima-Waini | Barima-Waini |
| Cuyuni-Mazaruni | `0x1F040000` | 6.39953606, -58.611730458 | クユニ・マザルニ州 | Cuyuni-Mazaruni | Cuyuni-Mazaruni | Cuyuni-Mazaruni | Cuyuni-Mazaruni | Cuyuni-Mazaruni | 库尤尼-马扎鲁尼区 | 쿠유니-마자루니 주 | Cuyuni-Mazaruni | Cuyuni-Mazaruni | Кайуни-Мазаруни | Cuyuni-Mazaruni | Cuyuni-Mazaruni | Cuyuni-Mazaruni | Cuyuni-Mazaruni | Cuyuni-Mazaruni |
| East Berbice-Corentyne | `0x1F050000` | 6.245727468, -57.513094658 | 東ベルビセ・コレンティネ州 | East Berbice-Corentyne | Berbice Oriental-Courantyne  | East Berbice-Corentyne | Berbice Orientale-Corentyne | Berbice Oriental-Corentyne | 东伯比斯-科兰太因区 | 동부 버비스-코런타인 주 | East Berbice-Corentyne | Berbice Oriental-Corentyne | Восточный Бербайс-Корентин | East Berbice-Corentyne | East Berbice-Corentyne | East Berbice-Corentyne | East Berbice-Corentyne | East Berbice-Corentyne |
| Essequibo Islands-West Demerara | `0x1F060000` | 6.866455, -58.413976014 | エセキボ諸島・西デメララ州 | Essequibo Islands-West Demerara | Îles Essequibo-Demerara Occidental | Essequibo Islands-West Demerara | Isole Essequibo-Demerara Occidentale | Islas Essequibo-Demerara Occidental | 埃塞奎博群岛-西德梅拉拉区 | 에세퀴보 섬-서부 데메라라 주 | Essequibo Islands-West Demerara | Ilhas Essequibo-Demerara Ocidental | Эссекуибо-Айлендс-Западный Демерара | Essequibo Islands-West Demerara | Essequibo Islands-West Demerara | Essequibo Islands-West Demerara | Essequibo Islands-West Demerara | Essequibo Islands-West Demerara |
| Mahaica-Berbice | `0x1F070000` | 6.39953606, -57.595492343000004 | マハイカ・ベルビセ州 | Mahaica-Berbice | Mahaica-Berbice | Mahaica-Berbice | Mahaica-Berbice | Mahaica-Berbice | 马海卡-伯比斯区 | 마하이카-버비스 주 | Mahaica-Berbice | Mahaica-Berbice | Махаиса-Бербайс | Mahaica-Berbice | Mahaica-Berbice | Mahaica-Berbice | Mahaica-Berbice | Mahaica-Berbice |
| Pomeroon-Supenaam | `0x1F080000` | 7.261962808, -58.496373699 | ポメローン・スペナーム州 | Pomeroon-Supenaam | Pomeroon-Supenaam | Pomeroon-Supenaam | Pomeroon-Supenaam | Pomeroon-Supenaam | 波默伦-苏佩纳姆区 | 포메룬-수페남 주 | Pomeroon-Supenaam | Pomeroon-Supenaam | Померун-Супенаам | Pomeroon-Supenaam | Pomeroon-Supenaam | Pomeroon-Supenaam | Pomeroon-Supenaam | Pomeroon-Supenaam |
| Potaro-Siparuni | `0x1F090000` | 5.262451112, -59.14456882100001 | ポタロ・シパルニ州 | Potaro-Siparuni | Potaro-Siparuni | Potaro-Siparuni | Potaro-Siparuni | Potaro-Siparuni | 波塔罗-锡帕鲁尼区 | 포타로-시파루니 주 | Potaro-Siparuni | Potaro-Siparuni | Потаро-Сипаруни | Potaro-Siparuni | Potaro-Siparuni | Potaro-Siparuni | Potaro-Siparuni | Potaro-Siparuni |
| Upper Demerara-Berbice | `0x1F0A0000` | 5.998535088, -58.298619255000006 | アッパー・デメララ・ベルビセ州 | Upper Demerara-Berbice | Haut-Demerara et Berbice | Upper Demerara-Berbice | Alto Demerara-Berbice | Alto Demerara-Berbice | 上德梅拉拉-伯比斯区 | 북부 데메라라-버비스 주 | Upper Demerara-Berbice | Alto Demerara-Berbice | Верхний Демерара-Бербайс | Upper Demerara-Berbice | Upper Demerara-Berbice | Upper Demerara-Berbice | Upper Demerara-Berbice | Upper Demerara-Berbice |
| Upper Takutu-Upper Essequibo | `0x1F0B0000` | 3.37829586, -59.798257121999995 | アッパー・タクトゥ・アッパー・エセキボ州 | Upper Takutu-Upper Essequibo | Haut-Takutu et Haut-Essequibo | Upper Takutu-Upper Essequibo | Alto Takutu-Alto Essequibo | Alto Takutu-Alto Essequibo | 上塔库图-上埃塞奎博区 | 북부 타쿠투-북부 에세퀴보 주 | Upper Takutu-Upper Essequibo | Alto Takutu-Alto Essequibo | Верхний Такуту-Верхний Эссекуибо | Upper Takutu-Upper Essequibo | Upper Takutu-Upper Essequibo | Upper Takutu-Upper Essequibo | Upper Takutu-Upper Essequibo | Upper Takutu-Upper Essequibo |

# Haiti
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x20` | HT | ハイチ | Haiti | Haïti | Haiti | Haiti | Haití | 海地 | 아이티 | Haïti | Haiti | Гаити | Haiti | Haiti | Haiti | Haiti | Haiti |

## Haiti Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x20000000` | 18.533935336, -72.3336916 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Ouest | `0x20020000` | 18.533935336, -72.3336916 | 西県 | Ouest | Ouest | Ouest | Ovest | Oeste | 西部省 | 서부 | Ouest | Oeste | Западный департамент | Ouest | Ouest | Ouest | Ouest | Ouest |
| Nord-Ouest | `0x20030000` | 19.945678484000002, -72.82807771 | 北西県 | Nord-Ouest | Nord-Ouest | Nord-Ouest | Nord-Ovest | Noroeste | 西北省 | 북서부 | Nord-Ouest | Noroeste | Северо-Западный департамент | Nord-Ouest | Nord-Ouest | Nord-Ouest | Nord-Ouest | Nord-Ouest |
| Artibonite | `0x20040000` | 19.44580056, -72.679761877 | アルティボニット県 | Artibonite | Artibonite | Artibonite | Artibonite | Artibonito | 阿蒂博尼特省 | 아르티보니트 | Artibonite | Artibonite | Артибонит | Artibonite | Artibonite | Artibonite | Artibonite | Artibonite |
| Centre | `0x20050000` | 19.149169704, -72.015087218 | 中央県 | Centre | Centre | Centre | Centro | Centro | 中部省 | 중앙부 | Centre | Centro | Центральный департамент | Centre | Centre | Centre | Centre | Centre |
| Grand'Anse | `0x20060000` | 18.64929178, -74.113481596 | 湾岸県 | Grand'Anse | Grande-Anse | Grand'Anse | Grande Anse | Grand'Anse | 大湾省 | 그랑당스 | Grand'Anse | Grand'Anse | Гранд-Анс | Grand'Anse | Grand'Anse | Grand'Anse | Grand'Anse | Grand'Anse |
| Nord | `0x20070000` | 19.753417744, -72.201855304 | 北県 | Nord | Nord | Nord | Nord | Norte | 北部省 | 북부 | Nord | Norte | Северный департамент | Nord | Nord | Nord | Nord | Nord |
| Nord-Est | `0x20080000` | 19.66552712, -71.83930549 | 北東県 | Nord-Est | Nord-Est | Nord-Est | Nord-Est | Noreste | 东北省 | 북동부 | Nord-Est | Nordeste | Северо-Восточный департамент | Nord-Est | Nord-Est | Nord-Est | Nord-Est | Nord-Est |
| Sud | `0x20090000` | 18.198852332, -73.745438603 | 南県 | Sud | Sud | Sud | Sud | Sur | 南部省 | 남부 | Sud | Sul | Южный департамент | Sud | Sud | Sud | Sud | Sud |
| Sud-Est | `0x200A0000` | 18.231811316, -72.531446044 | 南東県 | Sud-Est | Sud-Est | Sud-Est | Sud-Est | Sureste | 东南省 | 남동부 | Sud-Est | Sudeste | Юго-Восточный департамент | Sud-Est | Sud-Est | Sud-Est | Sud-Est | Sud-Est |
| Nippes | `0x200B0000` | 18.440551548, -73.086257123 | ニップ県 | Nippes | Nippes | Nippes | Nippes | Nippes | 尼普斯省 | 니프 | Nippes | Nippes | Нип | Nippes | Nippes | Nippes | Nippes | Nippes |

# Honduras
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x21` | HN | ホンジュラス | Honduras | Honduras | Honduras | Honduras | Honduras | 洪都拉斯 | 온두라스 | Honduras | Honduras | Гондурас | Honduras | Honduras | Honduras | Honduras | Honduras |

## Honduras Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x21000000` | 14.095458824, -87.214713511 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Fr얆徇᥄�슃�榩�ﰕ�䮍輝n | `0x21020000` | 14.095458824, -87.214713511 | フランシスコ・モラサン | Fr얆徇᥄�슃�榩�ﰕ�䮍輝n | Francisco Morazán | Francisco Morazán | Francisco Morazán | Francisco Morazán | 弗朗西斯科-莫拉桑省 | 프란시스코모라산 | Francisco Morazán | Francisco Morazán | Франсиско Морасан | Francisco Morazán | Francisco Morazán | Francisco Morazán | Francisco Morazán | Francisco Morazán |
| Atlántida | `0x21030000` | 15.781860172, -86.797231907 | アトランティダ | Atlántida | Atlántida | Atlántida | Atlántida | Atlántida | 阿特兰蒂达省 | 아틀란티다 | Atlántida | Atlántida | Атлантида | Atlántida | Atlántida | Atlántida | Atlántida | Atlántida |
| Choluteca | `0x21040000` | 13.315429536, -87.214713511 | チョルテカ | Choluteca | Choluteca | Choluteca | Choluteca | Choluteca | 乔卢特卡省 | 촐루테카 | Choluteca | Choluteca | Чолутека | Choluteca | Choluteca | Choluteca | Choluteca | Choluteca |
| Colón | `0x21050000` | 15.913696108, -85.995227773 | コロン | Colón | Colón | Colón | Colón | Colón | 科隆省 | 콜론 | Colón | Colón | Колон | Colón | Colón | Colón | Colón | Colón |
| Comayagua | `0x21060000` | 14.44702132, -87.632195115 | コマヤグア | Comayagua | Comayagua | Comayagua | Comayagua | Comayagua | 科马亚瓜省 | 코마야과 | Comayagua | Comayagua | Камаягуа | Comayagua | Comayagua | Comayagua | Comayagua | Comayagua |
| Copán | `0x21070000` | 14.765624832, -88.780269526 | コパン | Copán | Copán | Copán | Copán | Copán | 科潘省 | 코판 | Copán | Copán | Копан | Copán | Copán | Copán | Copán | Copán |
| Cortés | `0x21080000` | 15.496215644, -88.027704003 | コルテス | Cortés | Cortés | Cortés | Cortés | Cortés | 科尔特斯省 | 코르테스 | Cortés | Cortês | Кортес | Cortés | Cortés | Cortés | Cortés | Cortés |
| El Paraíso | `0x21090000` | 13.930663904, -86.846670518 | エル・パライソ | El Paraíso | El Paraíso | El Paraíso | El Paraíso | El Paraíso | 埃尔帕拉伊索省 | 엘파라이소 | El Paraíso | El Paraíso | Эль-Параисо | El Paraíso | El Paraíso | El Paraíso | El Paraíso | El Paraíso |
| Gracias a Dios | `0x210A0000` | 15.265502756, -83.764997099 | グラシアス・ア・ディオス | Gracias a Dios | Gracias a Dios | Gracias a Dios | Gracias a Dios | Gracias a Dios | 格拉西亚斯-阿迪奥斯省 | 그라시아스아디오스 | Gracias a Dios | Gracias a Dios | Грасьяс-а-Дьос | Gracias a Dios | Gracias a Dios | Gracias a Dios | Gracias a Dios | Gracias a Dios |
| Intibucá | `0x210B0000` | 14.298705892000001, -88.18151301500001 | インティブカ | Intibucá | Intibucá | Intibucá | Intibucá | Intibucá | 因蒂布卡省 | 인티부카 | Intibucá | Intibucá | Интибука | Intibucá | Intibucá | Intibucá | Intibucá | Intibucá |
| Islas de la Bahía | `0x210C0000` | 16.298217588, -86.544545673 | イスラス・デ・ラ・バイア | Islas de la Bahía | Islas de la Bahía | Islas de la Bahía | Islas de la Bahía | Islas de la Bahía | 海湾群岛省 | 이슬라스데라바이아 | Baai Eilanden | Islas de la Bahía | Ислас-де-ла-Баия | Islas de la Bahía | Islas de la Bahía | Islas de la Bahía | Islas de la Bahía | Islas de la Bahía |
| La Paz | `0x210D0000` | 14.315185384, -87.681633726 | ラ・パス | La Paz | La Paz | La Paz | La Paz | La Paz | 拉巴斯省 | 라파스 | La Paz | La Paz | Ла-Пас | La Paz | La Paz | La Paz | La Paz | La Paz |
| Lempira | `0x210E0000` | 14.578857256000001, -88.582515082 | レンピラ | Lempira | Lempira | Lempira | Lempira | Lempira | 伦皮拉省 | 렘피라 | Lempira | Lempira | Лемпира | Lempira | Lempira | Lempira | Lempira | Lempira |
| Ocotepeque | `0x210F0000` | 14.430541828, -89.181271593 | オコテペケ | Ocotepeque | Ocotepeque | Ocotepeque | Ocotepeque | Ocotepeque | 奥科特佩克省 | 오코테페케 | Ocotepeque | Ocotepeque | Окатепеке | Ocotepeque | Ocotepeque | Ocotepeque | Ocotepeque | Ocotepeque |
| Olancho | `0x21100000` | 14.644775224, -86.198475396 | オランチョ | Olancho | Olancho | Olancho | Olancho | Olancho | 奥兰乔省 | 올란초 | Olancho | Olancho | Оланхо | Olancho | Olancho | Olancho | Olancho | Olancho |
| Santa Bárbara | `0x21110000` | 14.91394026, -88.230951626 | サンタ・バルバラ | Santa Bárbara | Santa Bárbara | Santa Bárbara | Santa Bárbara | Santa Bárbara | 圣巴巴拉省 | 산타바르바라 | Santa Bárbara | Santa Bárbara | Санта-Барбара | Santa Bárbara | Santa Bárbara | Santa Bárbara | Santa Bárbara | Santa Bárbara |
| Valle | `0x21120000` | 13.535156096, -87.483879282 | バジェ | Valle | Valle | Valle | Valle | Valle | 山谷省 | 바예 | Valle | Valle | Валле | Valle | Valle | Valle | Valle | Valle |
| Yoro | `0x21130000` | 15.128173656, -87.132315826 | ヨロ | Yoro | Yoro | Yoro | Yoro | Yoro | 约罗省 | 요로 | Yoro | Yoro | Йоро | Yoro | Yoro | Yoro | Yoro | Yoro |

# Jamaica
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x22` | JM | ジャマイカ | Jamaica | Jamaïque | Jamaika | Giamaica | Jamaica | 牙买加 | 자메이카 | Jamaica | Jamaica | Ямайка | Jamaica | Jamaica | Jamaica | Jamaica | Jamaica |

## Jamaica Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x22000000` | 17.995605264, -76.799646127 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Saint Thomas | `0x22020000` | 17.995605264, -76.799646127 | セント・トーマス | Saint Thomas | Saint-Thomas | Saint Thomas | Saint Thomas | Saint Thomas | 圣托马斯区 | 세인트토머스 | Saint Thomas | Saint Thomas | Сент-Томас | Saint Thomas | Saint Thomas | Saint Thomas | Saint Thomas | Saint Thomas |
| Clarendon | `0x22030000` | 17.96264628, -77.228114089 | クラレンドン | Clarendon | Clarendon | Clarendon | Clarendon | Clarendon | 克拉伦登区 | 클래런던 | Clarendon | Clarendon | Клэрендон | Clarendon | Clarendon | Clarendon | Clarendon | Clarendon |
| Hanover | `0x22040000` | 18.446044712, -78.161954519 | ハノーバー | Hanover | Hanover | Hanover | Hanover | Hanover | 汉诺威区 | 해노버 | Hanover | Hanover | Хановер | Hanover | Hanover | Hanover | Hanover | Hanover |
| Manchester | `0x22050000` | 18.028564248, -77.49727986 | マンチェスター | Manchester | Manchester | Manchester | Manchester | Manchester | 曼彻斯特区 | 맨체스터 | Manchester | Manchester | Манчестер | Manchester | Manchester | Manchester | Manchester | Manchester |
| Portland | `0x22060000` | 18.18237284, -76.464562208 | ポートランド | Portland | Portland | Portland | Portland | Portland | 波特兰区 | 포틀랜드 | Portland | Portland | Портлэнд | Portland | Portland | Portland | Portland | Portland |
| Saint Andrew | `0x22070000` | 17.995605264, -76.799646127 | セント・アンドリュー | Saint Andrew | Saint Andrew | Saint Andrew | Saint Andrew | Saint Andrew | 圣安德鲁区 | 세인트앤드루 | Saint Andrew | Saint Andrew | Сент-Эндрю | Saint Andrew | Saint Andrew | Saint Andrew | Saint Andrew | Saint Andrew |
| Saint Ann | `0x22080000` | 18.42956522, -77.195155015 | セント・アン | Saint Ann | Saint Ann | Saint Ann | Saint Ann | Saint Ann | 圣安娜区 | 세인트앤 | Saint Ann | Saint Ann | Сент-Энн | Saint Ann | Saint Ann | Saint Ann | Saint Ann | Saint Ann |
| Saint Catherine | `0x22090000` | 17.979125772, -76.94796196 | セント・キャサリン | Saint Catherine | Saint Catherine | Saint Catherine | Saint Catherine | Saint Catherine | 圣凯瑟琳区 | 세인트캐서린 | Saint Catherine | Saint Catherine | Сент-Кэтрин | Saint Catherine | Saint Catherine | Saint Catherine | Saint Catherine | Saint Catherine |
| Saint Elizabeth | `0x220A0000` | 18.012084756, -77.848843316 | セント・エリザベス | Saint Elizabeth | Saint Elizabeth | Saint Elizabeth | Saint Elizabeth | Saint Elizabeth | 圣伊丽莎白区 | 세인트엘리자베스 | Saint Elizabeth | Saint Elizabeth | Сент-Элизабет | Saint Elizabeth | Saint Elizabeth | Saint Elizabeth | Saint Elizabeth | Saint Elizabeth |
| Saint James | `0x220B0000` | 18.462524204, -77.914761464 | セント・ジェームズ | Saint James | Saint James | Saint James | Saint James | Saint James | 圣詹姆斯区 | 세인트제임스 | Saint James | Saint James | Сент-Джэймс | Saint James | Saint James | Saint James | Saint James | Saint James |
| Saint Mary | `0x220C0000` | 18.363647252, -76.898523349 | セント・メアリー | Saint Mary | Saint Mary | Saint Mary | Saint Mary | Saint Mary | 圣玛丽区 | 세인트메리 | Saint Mary | Saint Mary | Сент-Мэри | Saint Mary | Saint Mary | Saint Mary | Saint Mary | Saint Mary |
| Trelawny | `0x220D0000` | 18.495483188, -77.645595693 | トレローニー | Trelawny | Trelawny | Trelawny | Trelawny | Trelawny | 特里洛尼区 | 트렐로니 | Trelawny | Trelawny | Трилони | Trelawny | Trelawny | Trelawny | Trelawny | Trelawny |
| Westmoreland | `0x220E0000` | 18.215331824, -78.128995445 | ウェストモアランド | Westmoreland | Westmoreland | Westmoreland얆徇᥄� | Westmoreland | Westmoreland | 西摩兰区 | 웨스트모얼랜드 | Westmoreland | Westmoreland | Уэстморлэнд | Westmoreland | Westmoreland | Westmoreland | Westmoreland | Westmoreland |
| Kingston | `0x220F0000` | 17.946166788, -76.777673411 | キングストン | Kingston | Kingston | Kingston | Kingston | Kingston | 金斯敦区 | 킹스턴 | Kingston | Kingston | Кингстон | Kingston | Kingston | Kingston | Kingston | Kingston |

# Martinique
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x23` | MQ | マルティニーク | Martinique | Martinique | Martinique | Martinica | Martinica | 马提尼克 | 마르티니크 | Martinique | Martinica | Мартиника | Martinique | Martinique | Martinique | Martinique | Martinique |

## Martinique Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x23000000` | 14.595336748, -61.078167828999995 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Martinique | `0x23010000` | 14.595336748, -61.078167828999995 | マルティニーク | Martinique | Martinique | Martinique | Martinica | Martinica | 马提尼克 | 마르티니크 | Martinique | Martinica | Мартиника | Martinique | Martinique | Martinique | Martinique | Martinique |

# Mexico
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x24` | MX | メキシコ | Mexico | Mexique | Mexiko | Messico | México | 墨西哥 | 멕시코 | Mexico | México | Мексика | Mexico | Mexico | Mexico | Mexico | Mexico |

## Mexico Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x24000000` | 19.429321068, -99.134911941 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Distrito Federal | `0x24020000` | 19.429321068, -99.134911941 | ディストリト・フェデラル連邦区 | Distrito Federal | District Fédéral | México D.F. | Distretto Federale | Distrito Federal | 联邦区 | 멕시코 연방구 | Federaal District | Distrito Federal | Федеральный округ | Distrito Federal | Distrito Federal | Distrito Federal | Distrito Federal | Distrito Federal |
| Aguascalientes | `0x24030000` | 21.879272212, -102.298983045 | アグアスカリエンテス州 | Aguascalientes | Aguascalientes | Aguascalientes | Aguascalientes | Aguascalientes | 阿瓜斯卡连特斯州 | 아과스칼리엔테스 주 | Aguascalientes | Aguascalientes | Агуаскальентес | Aguascalientes | Aguascalientes | Aguascalientes | Aguascalientes | Aguascalientes |
| Baja California | `0x24040000` | 32.651366816, -115.466133108 | バハ・カリフォルニア州 | Baja California | Basse-Californie | Niederkalifornien | Bassa California | Baja California | 下加里福尼亚州 | 바하칼리포르니아 주 | Neder-Californië | Baixa Califórnia | Нижняя Калифорния | Baja California | Baja California | Baja California | Baja California | Baja California |
| Baja California Sur | `0x24050000` | 24.164428436, -110.297051669 | バハ・カリフォルニア・スル州 | Baja California Sur | Basse-Californie du Sud | Süd-Niederkalifornien | Bassa California del Sud | Baja California Sur | 南下加里福尼亚州 | 바하칼리포르니아수르 주 | Zuid-Neder-Californië | Baixa Califórnia do Sul | Южная Нижняя Калифорния | Baja California Sur | Baja California Sur | Baja California Sur | Baja California Sur | Baja California Sur |
| Campeche | `0x24060000` | 19.846801532, -90.532593627 | カンペチェ州 | Campeche | Campeche | Campeche | Campeche | Campeche | 坎佩切州 | 캄페체 주 | Campeche | Campeche | Кампече | Campeche | Campeche | Campeche | Campeche | Campeche |
| Chiapas | `0x24070000` | 16.748657036, -93.114387757 | チアパス州 | Chiapas | Chiapas | Chiapas | Chiapas | Chiapas | 恰帕斯州 | 치아파스 주 | Chiapas | Chiapas | Чьяпас | Chiapas | Chiapas | Chiapas | Chiapas | Chiapas |
| Chihuahua | `0x24080000` | 28.630370768, -106.078290197 | チワワ州 | Chihuahua | Chihuahua | Chihuahua | Chihuahua | Chihuahua | 奇瓦瓦州 | 치와와 주 | Chihuahua | Chihuahua | Чиуауа | Chihuahua | Chihuahua | Chihuahua | Chihuahua | Chihuahua |
| Coahuila de Zaragoza | `0x24090000` | 25.411376664, -100.99709962200001 | コアウイラ州 | Coahuila de Zaragoza | Coahuila | Coahuila de Zaragoza | Coahuila | Coahuila | 科阿韦拉州 | 코아우일라 주 | Coahuila de Zaragoza | Coahuila de Zaragoza | Коауила | Coahuila de Zaragoza | Coahuila de Zaragoza | Coahuila de Zaragoza | Coahuila de Zaragoza | Coahuila de Zaragoza |
| Colima | `0x240A0000` | 19.231567164, -103.716223227 | コリマ州 | Colima | Colima | Colima | Colima | Colima | 科利马州 | 콜리마 주 | Colima | Colima | Колима | Colima | Colima | Colima | Colima | Colima |
| Durango | `0x240B0000` | 24.0325925, -104.661050015 | ドゥランゴ州 | Durango | Durango | Durango | Durango | Durango | 杜兰戈州 | 두랑고 주 | Durango | Durango | Дуранго | Durango | Durango | Durango | Durango | Durango |
| Guanajuato | `0x240C0000` | 21.0113523, -101.249785856 | グアナフアト州 | Guanajuato | Guanajuato | Guanajuato | Guanajuato | Guanajuato | 瓜纳华托州 | 과나후아토 주 | Guanajuato | Guanajuato | Гуанахуато | Guanajuato | Guanajuato | Guanajuato | Guanajuato | Guanajuato |
| Guerrero | `0x240D0000` | 17.545165816, -99.497461755 | ゲレロ州 | Guerrero | Guerrero | Guerrero | Guerrero | Guerrero | 格雷罗州 | 게레로 주 | Guerrero | Guerrero | Герреро | Guerrero | Guerrero | Guerrero | Guerrero | Guerrero |
| Hidalgo | `0x240E0000` | 20.115966568, -98.728416695 | イダルゴ州 | Hidalgo | Hidalgo | Hidalgo | Hidalgo | Hidalgo | 伊达尔戈州 | 이달고 주 | Hidalgo | Hidalgo | Идальго | Hidalgo | Hidalgo | Hidalgo | Hidalgo | Hidalgo |
| Jalisco | `0x240F0000` | 20.665282968, -103.331700697 | ハリスコ州 | Jalisco | Jalisco | Jalisco | Jalisco | Jalisco | 哈利斯科州 | 할리스코 주 | Jalisco | Jalisco | Халиско | Jalisco | Jalisco | Jalisco | Jalisco | Jalisco |
| México | `0x24100000` | 19.286498804, -99.662257125 | メヒコ州 | México | Mexico | México | Messico | México | 墨西哥州 | 메히코 주 | Mexico | México | Мехико | México | México | México | México | México |
| Michoacán de Ocampo | `0x24110000` | 19.698486104, -101.112456381 | ミチョアカン州 | Michoacán de Ocampo | Michoacán | Michoacán | Michoacán de Ocampo | Michoacán | 米却肯州 | 미초아칸 주 | Michoacán de Ocampo | Michoacán de Ocampo | Мичоакан | Michoacán de Ocampo | Michoacán de Ocampo | Michoacán de Ocampo | Michoacán de Ocampo | Michoacán de Ocampo |
| Morelos | `0x24120000` | 18.912963652, -99.244775521 | モレロス州 | Morelos | Morelos | Morelos | Morelos | Morelos | 莫雷洛斯州 | 모렐로스 주 | Morelos | Morelos | Морелос | Morelos | Morelos | Morelos | Morelos | Morelos |
| Nayarit | `0x24130000` | 21.494750732, -104.897256712 | ナヤリット州 | Nayarit | Nayarit | Nayarit | Nayarit | Nayarit | 纳亚里特州 | 나야리트 주 | Nayarit | Nayarit | Наярит | Nayarit | Nayarit | Nayarit | Nayarit | Nayarit |
| Nuevo León | `0x24140000` | 25.664062208, -100.315945426 | ヌエボ・レオン州 | Nuevo León | Nuevo León | Nuevo León | Nuevo León | Nuevo León | 新莱昂州 | 누에보레온 주 | Nieuw-León | Nuevo León | Нуэво-Леон | Nuevo León | Nuevo León | Nuevo León | Nuevo León | Nuevo León |
| Oaxaca | `0x24150000` | 17.045287892, -96.712420002 | オアハカ州 | Oaxaca | Oaxaca | Oaxaca | Oaxaca | Oaxaca | 瓦哈卡州 | 오악사카 주 | Oaxaca | Oaxaca | Оахака | Oaxaca | Oaxaca | Oaxaca | Oaxaca | Oaxaca |
| Puebla | `0x24160000` | 19.044799588, -98.195578332 | プエブラ州 | Puebla | Puebla | Puebla | Puebla | Puebla | 普埃布拉州 | 푸에블라 주 | Puebla | Puebla | Пуэбла | Puebla | Puebla | Puebla | Puebla | Puebla |
| Querétaro de Arteaga | `0x24170000` | 20.599365, -100.38186357400001 | ケレタロ州 | Querétaro de Arteaga | Querétaro | Querétaro | Querétaro de Arteaga | Querétaro | 克雷塔罗州 | 케레타로 주 | Querétaro de Arteaga | Querétaro de Arteaga | Керетаро | Querétaro de Arteaga | Querétaro de Arteaga | Querétaro de Arteaga | Querétaro de Arteaga | Querétaro de Arteaga |
| Quintana Roo | `0x24180000` | 18.495483188, -88.296869774 | キンタナ・ロー州 | Quintana Roo | Quintana Roo | Quintana Roo | Quintana Roo | Quintana Roo | 金塔纳罗奥州 | 킨타나로오 주 | Quintana Roo | Quintana Roo | Кинтана-Роо | Quintana Roo | Quintana Roo | Quintana Roo | Quintana Roo | Quintana Roo |
| San Luis Potosí | `0x24190000` | 22.148437248, -100.980620085 | サン・ルイス・ポトシ州 | San Luis Potosí | San Luis Potosí | San Luis Potosí | San Luis Potosí | San Luis Potosí | 圣路易斯波托西州 | 산루이스포토시 주 | San Luis Potosí | San Luis Potosí | Сан-Луис-Потоси | San Luis Potosí | San Luis Potosí | San Luis Potosí | San Luis Potosí | San Luis Potosí |
| Sinaloa | `0x241A0000` | 24.796142296, -107.385666799 | シナロア州 | Sinaloa | Sinaloa | Sinaloa | Sinaloa | Sinaloa | 锡那罗亚州 | 시날로아 주 | Sinaloa | Sinaloa | Синалоа | Sinaloa | Sinaloa | Sinaloa | Sinaloa | Sinaloa |
| Sonora | `0x241B0000` | 29.064330724, -110.961726328 | ソノラ州 | Sonora | Sonora | Sonora | Sonora | Sonora | 索诺拉州 | 소노라 주 | Sonora | Sonora | Сонора | Sonora | Sonora | Sonora | Sonora | Sonora |
| Tabasco | `0x241C0000` | 17.979125772, -92.91114013400001 | タバスコ州 | Tabasco | Tabasco | Tabasco | Tabasco | Tabasco | 塔巴斯科州 | 타바스코 주 | Tabasco | Tabasco | Табаско | Tabasco | Tabasco | Tabasco | Tabasco | Tabasco |
| Tamaulipas | `0x241D0000` | 23.73046848, -99.129418762 | タマウリパス州 | Tamaulipas | Tamaulipas | Tamaulipas | Tamaulipas | Tamaulipas | 塔毛利帕斯州 | 타마울리파스 주 | Tamaulipas | Tamaulipas | Тамаулипас | Tamaulipas | Tamaulipas | Tamaulipas | Tamaulipas | Tamaulipas |
| Tlaxcala | `0x241E0000` | 19.30847146, -98.239523764 | トラスカラ州 | Tlaxcala | Tlaxcala | Tlaxcala | Tlaxcala | Tlaxcala | 特拉斯卡拉州 | 틀락스칼라 주 | Tlaxcala | Tlaxcala | Тласкала | Tlaxcala | Tlaxcala | Tlaxcala | Tlaxcala | Tlaxcala |
| Veracruz-Llave | `0x241F0000` | 19.52819802, -96.915667625 | ベラクルス州 | Veracruz-Llave | Veracruz | Veracruz | Veracruz | Veracruz | 韦拉克鲁斯州 | 베라크루스 주 | Veracruz | Veracruz-Llave | Веракрус | Veracruz-Llave | Veracruz-Llave | Veracruz-Llave | Veracruz-Llave | Veracruz-Llave |
| Yucatán | `0x24200000` | 20.961913824, -89.615232734 | ユカタン州 | Yucatán | Yucatán | Yukatan | Yucatán | Yucatán | 尤卡坦州 | 유카탄 주 | Yucatán | Yucatán | Юкатан | Yucatán | Yucatán | Yucatán | Yucatán | Yucatán |
| Zacatecas | `0x24210000` | 22.780151108000002, -102.579135174 | サカテカス州 | Zacatecas | Zacatecas | Zacatecas | Zacatecas | Zacatecas | 萨卡特卡斯州 | 사카테카스 주 | Zacatecas | Zacatecas | Сакатекас | Zacatecas | Zacatecas | Zacatecas | Zacatecas | Zacatecas |

# Montserrat
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x25` | MS | モントセラト | Montserrat | Montserrat | Montserrat | Montserrat | Montserrat | 蒙特塞拉特 | 몬트세랫 | Montserrat | Montserrat | Монтсеррат | Montserrat | Montserrat | Montserrat | Montserrat | Montserrat |

## Montserrat Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x25000000` | 16.69921856, -62.21525588200001 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Montserrat | `0x25010000` | 16.69921856, -62.21525588200001 | モントセラト | Montserrat | Montserrat | Montserrat | Montserrat | Montserrat | 蒙特塞拉特 | 몬트세랫 | Montserrat | Montserrat | Монтсеррат | Montserrat | Montserrat | Montserrat | Montserrat | Montserrat |

# Netherlands Antilles
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x26` | AN | オランダ領アンティル | Netherlands Antilles | Antilles néerlandaises | Niederländische Antillen | Antille Olandesi | Antillas Neerlandesas | 荷属安的列斯 | 네덜란드령 앤틸리스 | Nederlandse Antillen | Antilhas Holandesas | Нидерландские Антильские острова | Netherlands Antilles | Netherlands Antilles | Netherlands Antilles | Netherlands Antilles | Netherlands Antilles |

## Netherlands Antilles Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x26000000` | 12.095947128, -68.911441083 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Netherlands Antilles | `0x26010000` | 12.095947128, -68.911441083 | オランダ領アンティル | Netherlands Antilles | Antilles néerlandaises | Niederländische Antillen | Antille Olandesi | Antillas Neerlandesas | 荷属安的列斯 | 네덜란드령 앤틸리스 | Nederlandse Antillen | Antilhas Holandesas | Нидерландские Антильские острова | Netherlands Antilles | Netherlands Antilles | Netherlands Antilles | Netherlands Antilles | Netherlands Antilles |

# Nicaragua
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x27` | NI | ニカラグア | Nicaragua | Nicaragua | Nicaragua | Nicaragua | Nicaragua | 尼加拉瓜 | 니카라과 | Nicaragua | Nicarágua | Никарагуа | Nicaragua | Nicaragua | Nicaragua | Nicaragua | Nicaragua |

## Nicaragua Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x27000000` | 12.145385604, -86.264393544 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Managua | `0x27020000` | 12.145385604, -86.264393544 | マナグア | Managua | Managua | Managua | Managua | Managua | 马那瓜省 | 마나과 | Managua | Managua | Манагуа | Managua | Managua | Managua | Managua | Managua |
| Boaco | `0x27030000` | 12.463989116, -85.665637033 | ボアコ | Boaco | Boaco | Boaco | Boaco | Boaco | 博阿科省 | 보아코 | Boaco | Boaco | Боако | Boaco | Boaco | Boaco | Boaco | Boaco |
| Carazo | `0x27040000` | 11.848754748, -86.198475396 | カラソ | Carazo | Carazo | Carazo | Carazo | Carazo | 卡拉索省 | 카라소 | Carazo | Carazo | Карасо | Carazo | Carazo | Carazo | Carazo | Carazo |
| Chinandega | `0x27050000` | 12.612304544, -87.148795363 | チナンデガ | Chinandega | Chinandega | Chinandega | Chinandega | Chinandega | 奇南德加省 | 치난데가 | Chinandega | Chinandega | Чинандега | Chinandega | Chinandega | Chinandega | Chinandega | Chinandega |
| Chontales | `0x27060000` | 12.079467636, -85.396471262 | チョンタレス | Chontales | Chontales | Chontales | Chontales | Chontales | 琼塔莱斯省 | 촌탈레스 | Chontales | Chontales | Чонталес | Chontales | Chontales | Chontales | Chontales | Chontales |
| Estelí | `0x27070000` | 13.079223484, -86.346791229 | エステリ | Estelí | Estelí | Estelí | Estelí | Estelí | 埃斯特利省 | 에스텔리 | Estelí | Estelí | Эстели | Estelí | Estelí | Estelí | Estelí | Estelí |
| Granada | `0x27080000` | 11.931152208, -85.945789162 | グラナダ | Granada | Granada | Granada | Granada | Granada | 格拉纳达省 | 그라나다 | Granada | Granada | Гранада | Granada | Granada | Granada | Granada | Granada |
| Jinotega | `0x27090000` | 13.095702976, -85.995227773 | ヒノテガ | Jinotega | Jinotega | Jinotega | Jinotega | Jinotega | 希诺特加省 | 히노테가 | Jinotega | Jinotega | Хинотега | Jinotega | Jinotega | Jinotega | Jinotega | Jinotega |
| León | `0x270A0000` | 12.431030132, -86.874136413 | レオン | León | León | León | León | León | 莱昂省 | 레온 | León | León | Леон | León | León | León | León | León |
| Madriz | `0x270B0000` | 13.480224456, -86.582997926 | マドリス | Madriz | Madriz | Madriz | Madriz | Madriz | 马德里斯省 | 마드리스 | Madriz | Madriz | Мадрис | Madriz | Madriz | Madriz | Madriz | Madriz |
| Masaya | `0x270C0000` | 11.964111192, -86.09959817400001 | マサヤ | Masaya | Masaya | Masaya | Masaya | Masaya | 马萨亚省 | 마사야 | Masaya | Masaya | Масая | Masaya | Masaya | Masaya | Masaya | Masaya |
| Matagalpa | `0x270D0000` | 12.914428564, -85.912830088 | マタガルパ | Matagalpa | Matagalpa | Matagalpa | Matagalpa | Matagalpa | 马塔加尔帕省 | 마타갈파 | Matagalpa | Matagalpa | Матагальпа | Matagalpa | Matagalpa | Matagalpa | Matagalpa | Matagalpa |
| Nueva Segovia | `0x270E0000` | 13.628539884, -86.47862752500001 | ヌエバ・セゴビア | Nueva Segovia | Nueva Segovia | Nueva Segovia | Nueva Segovia | Nueva Segovia | 新塞哥维亚省 | 누에바세고비아 | Nueva Segovia | Nueva Segovia | Нуэва-Сеговия | Nueva Segovia | Nueva Segovia | Nueva Segovia | Nueva Segovia | Nueva Segovia |
| Río San Juan | `0x270F0000` | 11.112670772, -84.781235214 | リオ・サン・フアン | Río San Juan | Río San Juan | Río San Juan | Río San Juan | Río San Juan | 圣胡安河省 | 리오산후안 | Río San Juan | Río San Juan | Сан-Хуан | Río San Juan | Río San Juan | Río San Juan | Río San Juan | Río San Juan |
| Rivas | `0x27100000` | 11.431274284, -85.830432403 | リバス | Rivas | Rivas | Rivas | Rivas | Rivas | 里瓦斯省 | 리바스 | Rivas | Rivas | Ривас | Rivas | Rivas | Rivas | Rivas | Rivas |
| Atlántico Norte | `0x27110000` | 14.029540856, -83.380474569 | 北アトランティコ自治地域 | Atlántico Norte | Región Autónoma del Atlántico Norte | Región Autónoma del Atlántico Norte | Atlantico Settentrionale | Atlántico Norte | 北大西洋自治区 | 북아틀란티코 자치구 | Atlántico Norte | Atlântico Norte | Атлантический Северный автономный регион | Atlántico Norte | Atlántico Norte | Atlántico Norte | Atlántico Norte | Atlántico Norte |
| Atlántico Sur | `0x27120000` | 11.997070176, -83.748517562 | 南アトランティコ自治地域 | Atlántico Sur | Región Autónoma del Atlántico Sur | Región Autónoma del Atlántico Sur | Atlantico Meridionale | Atlántico Sur | 南大西洋自治区 | 남아틀란티코 자치구 | Atlántico Sur | Atlântico Sul | Атлантический Южный автономный регион | Atlántico Sur | Atlántico Sur | Atlántico Sur | Atlántico Sur | Atlántico Sur |

# Panama
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x28` | PA | パナマ | Panama | Panama | Panama | Panamá | Panamá | 巴拿马 | 파나마 | Panama | Panamá | Панама | Panama | Panama | Panama | Panama | Panama |

## Panama Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x28000000` | 8.964843648, -79.52975609 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Panamá | `0x28020000` | 8.964843648, -79.52975609 | パナマ | Panamá | Panama | Panama | Panamá | Panamá | 巴拿马省 | 파나마 | Panama | Panamá | Панама | Panamá | Panamá | Panamá | Panamá | Panamá |
| Bocas del Toro | `0x28030000` | 9.332885636, -82.248879695 | ボカズ・デル・トーロ | Bocas del Toro | Bocas del Toro | Bocas del Toro | Bocas del Toro | Bocas del Toro | 博卡斯-德尔托罗省 | 보카스델토로 | Bocas del Toro | Bocas del Toro | Бокас-дель-Торо | Bocas del Toro | Bocas del Toro | Bocas del Toro | Bocas del Toro | Bocas del Toro |
| Chiriquí | `0x28040000` | 8.43200674, -82.430154602 | チリキ | Chiriquí | Chiriquí | Chiriquí | Chiriquí | Chiriquí | 奇里基省 | 치리키 | Chiriquí | Chiriquí | Чирики | Chiriquí | Chiriquí | Chiriquí | Chiriquí | Chiriquí |
| Coclé | `0x28050000` | 8.5144042, -80.364719298 | コクレ | Coclé | Coclé | Coclé | Coclé | Coclé | 科克莱省 | 코클레 | Coclé | Coclé | Кокле | Coclé | Coclé | Coclé | Coclé | Coclé |
| Colón | `0x28060000` | 9.354858292, -79.897799083 | コロン | Colón | Colón | Colón | Colón | Colón | 科隆省 | 콜론 | Colón | Colón | Колон | Colón | Colón | Colón | Colón | Colón |
| Darién | `0x28070000` | 8.399047756, -78.139981803 | ダリエン | Darién | Darién | Darién | Darién | Darién | 达连省 | 다리엔 | Darién | Darién | Дарьен | Darién | Darién | Darién | Darién | Darién |
| Herrera | `0x28080000` | 7.9650878, -80.430637446 | エレーラ | Herrera | Herrera | Herrera | Herrera | Herrera | 埃雷拉省 | 에레라 | Herrera | Herrera | Эррера | Herrera | Herrera | Herrera | Herrera | Herrera |
| Los Santos | `0x28090000` | 7.7618407320000005, -80.28232161300001 | ロス・サントス | Los Santos | Los Santos | Los Santos | Los Santos | Los Santos | 洛斯桑托斯省 | 로스 산토스 | Los Santos | Los Santos | Лос-Сантос | Los Santos | Los Santos | Los Santos | Los Santos | Los Santos |
| Kuna Yala | `0x280A0000` | 9.563598524, -78.952972295 | サンブラス諸島 | Kuna Yala | Kuna Yala | Kuna Yala | Kuna Yala | Kuna Yala | 圣布拉斯特区 | 산블라스 제도 | San Blas-eilanden | Kuna Yala | Куна-Яла | Kuna Yala | Kuna Yala | Kuna Yala | Kuna Yala | Kuna Yala |
| Veraguas | `0x280B0000` | 8.096923736, -80.979955346 | ベラグアス | Veraguas | Veraguas | Veraguas | Veraguas | Veraguas | 贝拉瓜斯省 | 베라과스 | Veraguas | Veraguas | Верагуас | Veraguas | Veraguas | Veraguas | Veraguas | Veraguas |

# Paraguay
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x29` | PY | パラグアイ | Paraguay | Paraguay | Paraguay | Paraguay | Paraguay | 巴拉圭 | 파라과이 | Paraguay | Paraguai | Парагвай | Paraguay | Paraguay | Paraguay | Paraguay | Paraguay |

## Paraguay Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x29000000` | -25.263062259999998, -57.661410491 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Central | `0x29020000` | -25.263062259999998, -57.661410491 | セントラル県 | Central | Central | Central | Central | Central | 中央省 | 센트랄 주 | Central | Central | Сентраль | Central | Central | Central | Central | Central |
| Alto Paraná | `0x29030000` | -25.499268311999998, -54.832423305999995 | アルト・パラナ県 | Alto Paraná | Alto Paraná | Alto Paraná | Alto Paraná | Alto Paraná | 上巴拉那省 | 알토파라나 주 | Alto Paraná | Alto Paraná | Альто-Парана | Alto Paraná | Alto Paraná | Alto Paraná | Alto Paraná | Alto Paraná |
| Amambay | `0x29040000` | -22.999878691999996, -55.996977254 | アマンバイ県 | Amambay | Amambay | Amambay | Amambay | Amambay | 阿曼拜省 | 아맘바이 주 | Amambay | Amambay | Амамбай | Amambay | Amambay | Amambay | Amambay | Amambay |
| Caaguazú | `0x29050000` | -25.411377688, -56.44741793200001 | カアグアスー県 | Caaguazú | Caaguazú | Caaguazú | Caaguazú | Caaguazú | 卡瓜苏省 | 카아과수 주 | Caaguazú | Caaguazú | Каагуасу | Caaguazú | Caaguazú | Caaguazú | Caaguazú | Caaguazú |
| Caazapá | `0x29060000` | -26.163941156, -55.996977254 | カアサパ県 | Caazapá | Caazapá | Caazapá | Caazapá | Caazapá | 卡萨帕省 | 카아사파 주 | Caazapá | Caazapá | Каасапа | Caazapá | Caazapá | Caazapá | Caazapá | Caazapá |
| Concepción | `0x29070000` | -23.406372828000002, -57.430696972999996 | コンセプシオン県 | Concepción | Concepción | Concepción | Concepción | Concepción | 康塞普西翁省 | 콘셉시온 주 | Concepción | Concepção | Консепсьон | Concepción | Concepción | Concepción | Concepción | Concepción |
| Cordillera | `0x29080000` | -25.378418703999998, -57.145051665 | コルディリェラ県 | Cordillera | Cordillera | Cordillera | Cordillera | Cordillera | 科迪勒拉省 | 코르디예라 주 | Cordillera | Cordillera | Кордильера | Cordillera | Cordillera | Cordillera | Cordillera | Cordillera |
| Guairá | `0x29090000` | -25.746460692, -56.430938395 | グアイラー県 | Guairá | Guairá | Guairá | Guairá | Guairá | 瓜伊拉省 | 과이라 주 | Guairá | Guairá | Гуайра | Guairá | Guairá | Guairá | Guairá | Guairá |
| Itapúa | `0x290A0000` | -27.328491923999998, -55.898100032 | イタプア県 | Itapúa | Itapúa | Itapúa | Itapúa | Itapúa | 伊塔普阿省 | 이타푸아 주 | Itapúa | Itapúa | Итапуа | Itapúa | Itapúa | Itapúa | Itapúa | Itapúa |
| Misiones | `0x290B0000` | -26.998902084, -56.996735832 | ミシオネス県 | Misiones | Misiones | Misiones | Misiones | Misiones | 米西奥内斯省 | 미시오네스 주 | Misiones | Misiones | Мисьонес | Misiones | Misiones | Misiones | Misiones | Misiones |
| Ñeembucú | `0x290C0000` | -26.998902084, -57.99649441 | ニェエンブク県 | Ñeembucú | Ñeembucú | Ñeembucú | Ñeembucú | Ñeembucú | 涅恩布库省 | 네엠부쿠 주 | Ñeembucú | Ñeembucú | Ньеэмбуку | Ñeembucú | Ñeembucú | Ñeembucú | Ñeembucú | Ñeembucú |
| Paraguarí | `0x290D0000` | -25.631104248, -57.145051665 | パラグアリ県 | Paraguarí | Paraguarí | Paraguarí | Paraguarí | Paraguarí | 巴拉瓜里省 | 파라과리 주 | Paraguarí | Paraguarí | Парагуари | Paraguarí | Paraguarí | Paraguarí | Paraguarí | Paraguarí |
| Presidente Hayes | `0x290E0000` | -23.499756616, -58.831457618 | プレジデンテ・アエス県 | Presidente Hayes | Presidente Hayes | Presidente Hayes | Presidente Hayes | Presidente Hayes | 阿耶斯总统省 | 프레시덴테아예스 주 | Presidente Hayes | Presidente Hayes | Пресиденте-Аес | Presidente Hayes | Presidente Hayes | Presidente Hayes | Presidente Hayes | Presidente Hayes |
| San Pedro | `0x290F0000` | -24.098511492, -57.079133517 | サン・ペドロ県 | San Pedro | San Pedro | San Pedro | San Pedro | San Pedro | 圣佩德罗省 | 산페드로 주 | San Pedro | San Pedro | Сан-Педро | San Pedro | San Pedro | San Pedro | San Pedro | San Pedro |
| Canindeyú | `0x29100000` | -24.049073015999994, -54.349023554 | カニンデジュ県 | Canindeyú | Canindeyú | Canindeyú | Canindeyú | Canindeyú | 卡宁迪尤省 | 카넨디유 주 | Canindeyú | Canindeyú | Канендию | Canindeyú | Canindeyú | Canindeyú | Canindeyú | Canindeyú |
| Asunción | `0x29110000` | -25.263062259999998, -57.661410491 | アスンシオン市 | Asunción | Asunción | Asunción D.C. | Asunción | Asunción | 亚松森首都特别区 | 아순시온 | Asunción | Assunção | Асунсьон | Asunción | Asunción | Asunción | Asunción | Asunción |
| Alto Paraguay | `0x29120000` | -21.03332598, -57.897617188 | アルト・パラグアイ県 | Alto Paraguay | Alto Paraguay | Alto Paraguay | Alto Paraguay | Alto Paraguay | 上巴拉圭省 | 알토파라과이 주 | Alto Paraguay | Alto Paraguai | Альто-Парагвай | Alto Paraguay | Alto Paraguay | Alto Paraguay | Alto Paraguay | Alto Paraguay |
| Boquerón | `0x29130000` | -22.346192176000002, -60.02897064 | ボケロン県 | Boquerón | Boquerón | Boquerón | Boquerón | Boquerón | 博克龙省 | 보케론 주 | Boquerón | Boquerón | Бокерон | Boquerón | Boquerón | Boquerón | Boquerón | Boquerón |

# Peru
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x2A` | PE | ペルー | Peru | Pérou | Peru | Perù | Perú | 秘鲁 | 페루 | Peru | Peru | Перу | Peru | Peru | Peru | Peru | Peru |

## Peru Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x2A000000` | -12.046509676, -77.046839182 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Lima | `0x2A020000` | -12.046509676, -77.046839182 | リマ | Lima | Province de Lima | Lima Metropolitana | Lima | Lima | 利马省 | 리마 | Lima | Lima | Лима | Lima | Lima | Lima | Lima | Lima |
| Amazonas | `0x2A030000` | -6.212769507999994, -77.848843316 | アマソナス | Amazonas | Amazone | Amazonas | Amazonas | Amazonas | 亚马孙省 | 아마소나스 | Amazonas | Amazonas | Амасонас | Amazonas | Amazonas | Amazonas | Amazonas | Amazonas |
| Ancash | `0x2A040000` | -9.530640563999995, -77.530238934 | アンカッシュ | Ancash | Ancash | Ancash | Ancash | Ancash | 安卡什省 | 앙카시 | Ancash | Ancash | Анкаш | Ancash | Ancash | Ancash | Ancash | Ancash |
| Apurímac | `0x2A050000` | -13.628540908000005, -72.877516321 | アプリマック | Apurímac | Apurímac | Apurímac | Apurímac | Apurímac | 阿普里马克省 | 아푸리막 | Apurímac | Apurímac | Апуримак | Apurímac | Apurímac | Apurímac | Apurímac | Apurímac |
| Arequipa | `0x2A060000` | -16.397095563999997, -71.53168746600001 | アレキパ | Arequipa | Arequipa | Arequipa | Arequipa | Arequipa | 阿雷基帕省 | 아레키파 | Arequipa | Arequipa | Арекипа | Arequipa | Arequipa | Arequipa | Arequipa | Arequipa |
| Ayacucho | `0x2A070000` | -13.156128804000005, -74.223345176 | アヤクーチョ | Ayacucho | Ayacucho | Ayacucho | Ayacucho | Ayacucho | 阿亚库乔省 | 아야쿠초 | Ayacucho | Ayacucho | Аякучо | Ayacucho | Ayacucho | Ayacucho | Ayacucho | Ayacucho |
| Cajamarca | `0x2A080000` | -7.1630868799999945, -78.513517975 | カハマルカ | Cajamarca | Cajamarca | Cajamarca | Cajamarca | Cajamarca | 卡哈马卡省 | 카하마르카 | Cajamarca | Cajamarca | Кахамарка | Cajamarca | Cajamarca | Cajamarca | Cajamarca | Cajamarca |
| Callao | `0x2A090000` | -12.062989168000001, -77.145716404 | カヤオ | Callao | Callao | Callao | Callao | Callao | 卡亚俄区 | 카야오 | Callao | Callao | Кальяо | Callao | Callao | Callao | Callao | Callao |
| Cuzco | `0x2A0A0000` | -13.513184464000005, -71.976634965 | クスコ | Cuzco | Cuzco | Cusco | Cusco | Cuzco | 库斯科省 | 쿠스코 | Cuzco | Cuzco | Куско | Cuzco | Cuzco | Cuzco | Cuzco | Cuzco |
| Huancavelica | `0x2A0B0000` | -12.76611416, -74.981403878 | ワンカベリカ | Huancavelica | Huancavelica | Huancavelica | Huancavelica | Huancavelica | 万卡韦利卡省 | 우앙카벨리카 | Huancavelica | Huancavelica | Уанкавелика | Huancavelica | Huancavelica | Huancavelica | Huancavelica | Huancavelica |
| Huánuco | `0x2A0C0000` | -9.915162043999999, -76.228355511 | ワヌコ | Huánuco | Huánuco | Huánuco | Huánuco | Huánuco | 瓦努科省 | 우아누코 | Huánuco | Huánuco | Уануко | Huánuco | Huánuco | Huánuco | Huánuco | Huánuco |
| Ica | `0x2A0D0000` | -14.067994028000001, -75.722983043 | イカ | Ica | Ica | Ica | Ica | Ica | 伊卡省 | 이카 | Ica | Ica | Ика | Ica | Ica | Ica | Ica | Ica |
| Junín | `0x2A0E0000` | -12.062989168000001, -75.228596933 | フニン | Junín | Junín | Junín | Junín | Junín | 胡宁省 | 후닌 | Junín | Junín | Хунин | Junín | Junín | Junín | Junín | Junín |
| La Libertad | `0x2A0F0000` | -8.107911087999994, -79.024383622 | ラ・リベルター | La Libertad | La Libertad | La Libertad | La Libertad | La Libertad | 拉利伯塔德省 | 라리베르타드 | La Libertad | La Libertad | Ла-Либертад | La Libertad | La Libertad | La Libertad | La Libertad | La Libertad |
| Lambayeque | `0x2A100000` | -6.773072236000004, -79.837374114 | ランバイェケ | Lambayeque | Lambayeque | Lambayeque | Lambayeque | Lambayeque | 兰巴耶克省 | 람바예케 | Lambayeque | Lambayeque | Ламбайеке | Lambayeque | Lambayeque | Lambayeque | Lambayeque | Lambayeque |
| Loreto | `0x2A110000` | -3.7463388719999955, -73.245559314 | ロレト | Loreto | Loreto | Loreto | Loreto | Loreto | 洛雷托省 | 로레토 | Loreto | Loreto | Лорето | Loreto | Loreto | Loreto | Loreto | Loreto |
| Madre de Dios | `0x2A120000` | -12.595826075999994, -69.180606854 | マドレ・デ・ディオス | Madre de Dios | Madre de Dios | Madre de Dios | Madre de Dios | Madre de Dios | 马德雷德迪奥斯省 | 마드레데디오스 | Madre de Dios | Madre de Dios | Мадре-де-Диос | Madre de Dios | Madre de Dios | Madre de Dios | Madre de Dios | Madre de Dios |
| Moquegua | `0x2A130000` | -17.193604343999993, -70.932930955 | モケグア | Moquegua | Moquegua | Moquegua | Moquegua | Moquegua | 莫克瓜省 | 모케과 | Moquegua | Moquegua | Мокегуа | Moquegua | Moquegua | Moquegua | Moquegua | Moquegua |
| Pasco | `0x2A140000` | -10.678711840000005, -76.26131458500001 | パスコ | Pasco | Pasco | Pasco | Pasco | Pasco | 帕斯科省 | 파스코 | Pasco | Pasco | Паско | Pasco | Pasco | Pasco | Pasco | Pasco |
| Piura | `0x2A150000` | -5.1965341679999995, -80.62839189 | ピウラ | Piura | Piura | Piura | Piura | Piura | 皮乌拉省 | 피우라 | Piura | Piura | Пиура | Piura | Piura | Piura | Piura | Piura |
| Puno | `0x2A160000` | -15.831299672, -70.032049599 | プーノ | Puno | Puno | Puno | Puno | Puno | 普诺省 | 푸노 | Puno | Puno | Пуно | Puno | Puno | Puno | Puno | Puno |
| San Martín | `0x2A170000` | -6.047974588000002, -76.964441497 | サン・マルティン | San Martín | San Martín | San Martín | San Martín | San Martín | 圣马丁省 | 산마르틴 | San Martín | San Martín | Сан-Мартин | San Martín | San Martín | San Martín | San Martín | San Martín |
| Tacna | `0x2A180000` | -18.001099452000005, -70.24628358 | タクナ | Tacna | Tacna | Tacna | Tacna | Tacna | 塔克纳省 | 타크나 | Tacna | Tacna | Такна | Tacna | Tacna | Tacna | Tacna | Tacna |
| Tumbes | `0x2A190000` | -3.565064460000002, -80.436130625 | トゥンベス | Tumbes | Tumbes | Tumbes | Tumbes | Tumbes | 通贝斯省 | 툼베스 | Tumbes | Tumbes | Тумбес | Tumbes | Tumbes | Tumbes | Tumbes | Tumbes |
| Ucayali | `0x2A1A0000` | -8.377076123999998, -74.536456379 | ウカヤリ | Ucayali | Ucayali | Ucayali | Ucayali | Ucayali | 乌卡亚利省 | 우카얄리 | Ucayali | Ucayali | Укаяли | Ucayali | Ucayali | Ucayali | Ucayali | Ucayali |

# St. Kitts and Nevis
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x2B` | KN | セントキッツ・ネイビス | St. Kitts and Nevis | Saint-Christophe-et-Niévès | St. Kitts und Nevis | Saint Kitts e Nevis | San Cristóbal y Nieves | 圣基茨和尼维斯 | 세인트키츠네비스 | Saint Kitts en Nevis | São Cristóvão e Nevis | Сент-Китс и Невис | St. Kitts and Nevis | St. Kitts and Nevis | St. Kitts and Nevis | St. Kitts and Nevis | St. Kitts and Nevis |

## St. Kitts and Nevis Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x2B000000` | 17.297973436, -62.715135171 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Saint George Basseterre | `0x2B020000` | 17.297973436, -62.715135171 | セント・ジョージ・バセテール | Saint George Basseterre | Saint George Basseterre | Saint George Basseterre | Saint George Basseterre | Saint George Basseterre | 圣乔治巴斯特尔区 | 세인트조지바스테르 | Saint George Basseterre | Saint George Basseterre | Сент-Джордж-Бастер | Saint George Basseterre | Saint George Basseterre | Saint George Basseterre | Saint George Basseterre | Saint George Basseterre |
| Christ Church Nichola Town | `0x2B030000` | 17.363891404, -62.748094245000004 | クライスト・チャーチ・ニコラタウン | Christ Church Nichola Town | Christ Church Nichola Town | Christ Church Nichola Town | Christ Church Nichola Town | Christ Church Nichola Town | 克赖斯特彻奇尼古拉镇区 | 크라이스트처치니콜라타운 | Christ Church Nichola Town | Christ Church Nichola Town | Крайст-Чёрч-Никола-Таун | Christ Church Nichola Town | Christ Church Nichola Town | Christ Church Nichola Town | Christ Church Nichola Town | Christ Church Nichola Town |
| Saint Anne Sandy Point | `0x2B040000` | 17.347411912000002, -62.83049193000001 | セント・アン・サンディ・ポイント | Saint Anne Sandy Point | Saint Anne Sandy Point | Saint Anne Sandy Point | Saint Anne Sandy Point | Saint Anne Sandy Point | 圣安妮桑迪波因特区 | 세인트앤샌디포인트 | Saint Anne Sandy Point | Saint Anne Sandy Point | Сент-Энн-Сэнди-Пойнт | Saint Anne Sandy Point | Saint Anne Sandy Point | Saint Anne Sandy Point | Saint Anne Sandy Point | Saint Anne Sandy Point |
| Saint George Gingerland | `0x2B050000` | 17.133178516, -62.544846621999994 | セント・ジョージ・ジンジャーランド | Saint George Gingerland | Saint George Gingerland | Saint George Gingerland | Saint George Gingerland | Saint George Gingerland | 圣乔治金杰兰区 | 세인트조지진저랜드 | Saint George Gingerland | Saint George Gingerland | Сент-Джордж-Джинджерланд | Saint George Gingerland | Saint George Gingerland | Saint George Gingerland | Saint George Gingerland | Saint George Gingerland |
| Saint James Windward | `0x2B060000` | 17.199096484000002, -62.577805696 | セント・ジェームズ・ウィンドワード | Saint James Windward | Saint James Windward | Saint James Windward | Saint James Windward | Saint James Windward | 圣詹姆斯温德沃德区 | 세인트제임스윈드워드 | Saint James Windward | Saint James Windward | Сент-Джеймс-Уиндуорд | Saint James Windward | Saint James Windward | Saint James Windward | Saint James Windward | Saint James Windward |
| Saint John Capesterre | `0x2B070000` | 17.396850388, -62.781053318999994 | セント・ジョン・カピステール | Saint John Capesterre | Saint John Capesterre | Saint John Capisterre | Saint John Capisterre | Saint John Capesterre | 圣约翰卡皮斯特尔区 | 세인트존카페스테르 | Saint John Capesterre | Saint John Capesterre | Сент-Джон-Капистер | Saint John Capesterre | Saint John Capesterre | Saint John Capesterre | Saint John Capesterre | Saint John Capesterre |
| Saint John Figtree | `0x2B080000` | 17.111205860000002, -62.59428523300001 | セント・ジョン・フィッグトリー | Saint John Figtree | Saint John Figtree | Saint John Figtree | Saint John Figtree | Saint John Figtree | 圣约翰菲格特里区 | 세인트존피그트리 | Saint John Figtree | Saint John Figtree | Сент-Джон-Фигтри | Saint John Figtree | Saint John Figtree | Saint John Figtree | Saint John Figtree | Saint John Figtree |
| Saint Mary Cayon | `0x2B090000` | 17.347411912000002, -62.731614707999995 | セント・メリー・ケーヨン | Saint Mary Cayon | Saint Mary Cayon | Saint Mary Cayon | Saint Mary Cayon | Saint Mary Cayon | 圣玛丽卡永区 | 세인트메리케이언 | Saint Mary Cayon | Saint Mary Cayon | Сент-Мери-Кайон | Saint Mary Cayon | Saint Mary Cayon | Saint Mary Cayon | Saint Mary Cayon | Saint Mary Cayon |
| Saint Paul Capesterre | `0x2B0A0000` | 17.396850388, -62.814012393 | セント・ポール・カピステール | Saint Paul Capesterre | Saint Paul Capesterre | Saint Paul Capisterre | Saint Paul Capisterre | Saint Paul Capesterre | 圣保罗卡皮斯特尔区 | 세인트폴카페스테르 | Saint Paul Capesterre | Saint Paul Capesterre | Сент-Пол-Капистер | Saint Paul Capesterre | Saint Paul Capesterre | Saint Paul Capesterre | Saint Paul Capesterre | Saint Paul Capesterre |
| Saint Paul Charlestown | `0x2B0B0000` | 17.133178516, -62.616257949 | セント・ポール・チャールズタウン | Saint Paul Charlestown | Saint Paul Charlestown | Saint Paul Charlestown | Saint Paul Charlestown | Saint Paul Charlestown | 圣保罗查尔斯敦区 | 세인트폴찰스타운 | Saint Paul Charlestown | Saint Paul Charlestown | Сент-Пол-Чарлстаун | Saint Paul Charlestown | Saint Paul Charlestown | Saint Paul Charlestown | Saint Paul Charlestown | Saint Paul Charlestown |
| Saint Peter Basseterre | `0x2B0C0000` | 17.314452928, -62.715135171 | セント・ピーター・バセテール | Saint Peter Basseterre | Saint Peter Basseterre | Saint Peter Basseterre | Saint Peter Basseterre | Saint Peter Basseterre | 圣彼得巴斯特尔区 | 세인트피터바스테르 | Saint Peter Basseterre | Saint Peter Basseterre | Сент-Питер-Бастер | Saint Peter Basseterre | Saint Peter Basseterre | Saint Peter Basseterre | Saint Peter Basseterre | Saint Peter Basseterre |
| Saint Thomas Lowland | `0x2B0D0000` | 17.1661375, -62.616257949 | セント・トーマス・ロウランド | Saint Thomas Lowland | Saint Thomas Lowland | Saint Thomas Lowland | Saint Thomas Lowland | Saint Thomas Lowland | 圣托马斯洛兰区 | 세인트토머스롤랜드 | Saint Thomas Lowland | Saint Thomas Lowland | Сент-Томас-Лоуленд | Saint Thomas Lowland | Saint Thomas Lowland | Saint Thomas Lowland | Saint Thomas Lowland | Saint Thomas Lowland |
| Saint Thomas Middle Island | `0x2B0E0000` | 17.314452928, -62.814012393 | セント・トーマス・ミドルアイランド | Saint Thomas Middle Island | Saint Thomas Middle Island | Saint Thomas Middle Island | Saint Thomas Middle Island | Saint Thomas Middle Island | 圣托马斯米德尔艾兰区 | 세인트토머스미들아일랜드 | Saint Thomas Middle Island | Saint Thomas Middle Island | Сент-Томас-Мидл-Айленд | Saint Thomas Middle Island | Saint Thomas Middle Island | Saint Thomas Middle Island | Saint Thomas Middle Island | Saint Thomas Middle Island |
| Trinity Palmetto Point | `0x2B0F0000` | 17.281493944, -62.764573782 | トリニティ・パルメット・ポイント | Trinity Palmetto Point | Trinity Palmetto Point | Trinity Palmetto Point | Trinity Palmetto Point | Trinity Palmetto Point | 特里尼蒂帕尔梅托波因特区 | 트리니티팰머토포인트 | Trinity Palmetto Point | Trinity Palmetto Point | Тринити-Палметто-Пойнт | Trinity Palmetto Point | Trinity Palmetto Point | Trinity Palmetto Point | Trinity Palmetto Point | Trinity Palmetto Point |

# St. Lucia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x2C` | LC | セントルシア | St. Lucia | Sainte-Lucie | St. Lucia | Santa Lucia | Santa Lucía | 圣卢西亚 | 세인트루시아 | Saint Lucia | Santa Lúcia | Сент-Люсия | St. Lucia | St. Lucia | St. Lucia | St. Lucia | St. Lucia |

## St. Lucia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x2C000000` | 13.996581872, -60.995770144000005 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| St. Lucia | `0x2C010000` | 13.996581872, -60.995770144000005 | セントルシア | St. Lucia | Sainte-Lucie | St. Lucia | Santa Lucia | Santa Lucía | 圣卢西亚 | 세인트루시아 | Saint Lucia | Santa Lúcia | Сент-Люсия | St. Lucia | St. Lucia | St. Lucia | St. Lucia | St. Lucia |

# St. Vincent and the Grenadines
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x2D` | VC | セントビンセント・グレナディーン | St. Vincent and the Grenadines | Saint-Vincent-et-les-Grenadines | St. Vincent und die Grenadinen | Saint Vincent e Grenadine | San Vicente y las Granadinas | 圣文森特和格林纳丁斯 | 세인트빈센트 그레나딘 | Saint Vincent en de Grenadines | S. Vicente e as Granadinas | Сент-Винсент и Гренадины | St. Vincent and the Grenadines | St. Vincent and the Grenadines | St. Vincent and the Grenadines | St. Vincent and the Grenadines | St. Vincent and the Grenadines |

## St. Vincent and the Grenadines Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x2D000000` | 13.12866196, -61.215497303999996 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| St. Vincent and the Grenadines | `0x2D010000` | 13.12866196, -61.215497303999996 | セントビンセント・グレナディーン | St. Vincent and the Grenadines | Saint-Vincent-et-les-Grenadines | St. Vincent und die Grenadinen | Saint Vincent e Grenadine | San Vicente y las Granadinas | 圣文森特和格林纳丁斯 | 세인트빈센트 그레나딘 | Saint Vincent en de Grenadines | S. Vicente e as Granadinas | Сент-Винсент и Гренадины | St. Vincent and the Grenadines | St. Vincent and the Grenadines | St. Vincent and the Grenadines | St. Vincent and the Grenadines | St. Vincent and the Grenadines |

# Suriname
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x2E` | SR | スリナム | Suriname | Suriname | Suriname | Suriname | Surinam | 苏里南 | 수리남 | Suriname | Suriname | Суринам | Suriname | Suriname | Suriname | Suriname | Suriname |

## Suriname Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x2E000000` | 5.828247004, -55.162014045999996 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Paramaribo | `0x2E020000` | 5.828247004, -55.162014045999996 | パラマリボ | Paramaribo | Paramaribo | Paramaribo | Paramaribo | Paramaribo | 帕拉马里博市 | 파라마리보 | Paramaribo | Paramaribo | Парамарибо | Paramaribo | Paramaribo | Paramaribo | Paramaribo | Paramaribo |
| Brokopondo | `0x2E030000` | 5.064697208, -54.964259602 | ブロコポンド | Brokopondo | Brokopondo | Brokopondo | Brokopondo | Brokopondo | 布罗科蓬多区 | 브로코폰도 | Brokopondo | Brokopondo | Брокопондо | Brokopondo | Brokopondo | Brokopondo | Brokopondo | Brokopondo |
| Commewijne | `0x2E040000` | 5.883178644, -55.07961636100001 | コメウィネ | Commewijne | Commewijne | Commewijne | Commewijne | Commewijne | 科默韦讷区 | 코메베이너 | Commewijne | Commewijne | Коммевийн | Commewijne | Commewijne | Commewijne | Commewijne | Commewijne |
| Coronie | `0x2E050000` | 5.883178644, -56.315581636000005 | コロニー | Coronie | Coronie | Coronie | Coronie | Coronie | 科罗尼区 | 코로니 | Coronie | Coronie | Корони | Coronie | Coronie | Coronie | Coronie | Coronie |
| Marowijne | `0x2E060000` | 5.498657164, -54.046898709000004 | マロウィネ | Marowijne | Marowijne | Marowijne | Marowijne | Marowijne | 马罗韦讷区 | 마로베이너 | Marowijne | Marowijne | Маровийн | Marowijne | Marowijne | Marowijne | Marowijne | Marowijne |
| Nickerie | `0x2E070000` | 5.949096612, -56.980256295000004 | ニッケリー | Nickerie | Nickerie | Nickerie | Nickerie | Nickerie | 尼克里区 | 니케리 | Nickerie | Nickerie | Никкери | Nickerie | Nickerie | Nickerie | Nickerie | Nickerie |
| Para | `0x2E080000` | 5.581054624, -55.178493583000005 | パラ | Para | Para | Para | Para | Para | 帕拉区 | 파라 | Para | Para | Пара | Para | Para | Para | Para | Para |
| Saramacca | `0x2E090000` | 5.79528802, -55.464138891000005 | サラマッカ | Saramacca | Saramacca | Saramacca | Saramacca | Saramacca | 萨拉马卡区 | 사라마카 | Saramacca | Saramacca | Сарамакка | Saramacca | Saramacca | Saramacca | Saramacca | Saramacca |
| Sipaliwini | `0x2E0A0000` | 5.196533144, -57.161531202000006 | シパリウィニ | Sipaliwini | Sipaliwini | Sipaliwini | Sipaliwini | Sipaliwini | 西帕里维尼区 | 시팔리비니 | Sipaliwini | Sipaliwini | Сипалуини | Sipaliwini | Sipaliwini | Sipaliwini | Sipaliwini | Sipaliwini |
| Wanica | `0x2E0B0000` | 5.696411068, -55.227932194000005 | ワニカ | Wanica | Wanica | Wanica | Wanica | Wanica | 瓦尼卡区 | 바니카 | Wanica | Wanica | Ваника | Wanica | Wanica | Wanica | Wanica | Wanica |

# Trinidad and Tobago
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x2F` | TT | トリニダード・トバゴ | Trinidad and Tobago | Trinité-et-Tobago | Trinidad und Tobago | Trinidad e Tobago | Trinidad y Tobago | 特立尼达和多巴哥 | 트리니다드토바고 | Trinidad en Tobago | Trinidade e Tobago | Тринидад и Тобаго | Trinidad and Tobago | Trinidad and Tobago | Trinidad and Tobago | Trinidad and Tobago | Trinidad and Tobago |

## Trinidad and Tobago Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x2F000000` | 10.645751832, -61.512128970000006 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Port-of-Spain | `0x2F020000` | 10.645751832, -61.512128970000006 | ポート・オブ・スペイン | Port-of-Spain | Port d'Espagne | Port-of-Spain | Port of Spain | Puerto España | 西班牙港市 | 포트오브스페인 | Port of Spain | Porto de Espanha | Порт-оф-Спейн | Port-of-Spain | Port-of-Spain | Port-of-Spain | Port-of-Spain | Port-of-Spain |
| Arima | `0x2F030000` | 10.62927234, -61.281415452000005 | アリマ | Arima | Arima | Arima | Arima | Arima | 阿里马市 | 아리마 | Arima | Arima | Арима | Arima | Arima | Arima | Arima | Arima |
| Caroni | `0x2F040000` | 10.513915896, -61.41325174800001 | カロニ州 | Caroni | Caroni | Caroni | Caroni | Caroni | 卡罗尼郡 | 카로니 주 | Caroni | Caroni | Карони | Caroni | Caroni | Caroni | Caroni | Caroni |
| Mayaro | `0x2F050000` | 10.211791876, -60.995770144000005 | マジャロ州 | Mayaro | Mayaro | Mayaro | Mayaro | Mayaro | 马亚罗郡 | 마야로 주 | Mayaro | Mayaro | Майяро | Mayaro | Mayaro | Mayaro | Mayaro | Mayaro |
| Nariva | `0x2F060000` | 10.2996825, -61.182538230000006 | ナリバ州 | Nariva | Nariva | Nariva | Nariva | Nariva | 纳里瓦郡 | 나리바 주 | Nariva | Nariva | Нарива | Nariva | Nariva | Nariva | Nariva | Nariva |
| Saint Andrew | `0x2F070000` | 10.579833864, -61.111126903 | セント・アンドリュー州 | Saint Andrew | Saint Andrew | Saint Andrew | Saint Andrew | Saint Andrew | 圣安德鲁郡 | 세인트앤드루 주 | Saint Andrew | Saint Andrew | Сейнт Эндрю | Saint Andrew | Saint Andrew | Saint Andrew | Saint Andrew | Saint Andrew |
| Saint David | `0x2F080000` | 10.799560424000001, -61.012249681 | セント・デビッド州 | Saint David | Saint David | Saint David | Saint David | Saint David | 圣戴维郡 | 세인트데이비드 주 | Saint David | Saint David | Сейнт Дэвид | Saint David | Saint David | Saint David | Saint David | Saint David |
| Saint George | `0x2F090000` | 10.62927234, -61.380292674 | セント・ジョージ州 | Saint George | Saint George | Saint George | Saint George | Saint George | 圣乔治郡 | 세인트조지 주 | Saint George | Saint George | Сейнт Джордж | Saint George | Saint George | Saint George | Saint George | Saint George |
| Saint Patrick | `0x2F0A0000` | 10.178832892, -61.682417519 | セント・パトリック州 | Saint Patrick | Saint Patrick | Saint Patrick | Saint Patrick | Saint Patrick | 圣帕特里克郡 | 세인트패트릭 주 | Saint Patrick | Saint Patrick | Сейнт Патрик | Saint Patrick | Saint Patrick | Saint Patrick | Saint Patrick | Saint Patrick |
| San Fernando | `0x2F0B0000` | 10.283203008, -61.46269035900001 | サン・フェルナンド | San Fernando | San Fernando | San Fernando | San Fernando | San Fernando | 圣费尔南多市 | 산페르난도 | San Fernando | San Fernando | Сан-Фернандо | San Fernando | San Fernando | San Fernando | San Fernando | San Fernando |
| Tobago | `0x2F0C0000` | 11.17858874, -60.732097552 | トバゴ島 | Tobago | Tobago | Tobago | Tobago | Tobago | 多巴哥岛 | 토바고 섬 | Tobago | Tobago | Тобаго | Tobago | Tobago | Tobago | Tobago | Tobago |
| Victoria | `0x2F0D0000` | 10.261230352, -61.380292674 | ビクトリア州 | Victoria | Victoria | Victoria | Victoria | Victoria | 维多利亚郡 | 빅토리아 주 | Victoria | Vitória | Виктория | Victoria | Victoria | Victoria | Victoria | Victoria |
| Point Fortin | `0x2F0E0000` | 10.167846564, -61.67692434 | ポイントフォーティン | Point Fortin | Point Fortin | Point Fortin | Point Fortin | Point Fortin | 福廷岬市 | 포인트포르틴 | Point Fortin | Ponto Fortin | Пойнт Фортин | Point Fortin | Point Fortin | Point Fortin | Point Fortin | Point Fortin |

# Turks and Caicos Islands
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x30` | TC | タークス・カイコス諸島 | Turks and Caicos Islands | Îles Turques-et-Caïques | Turks- und Caicosinseln | Isole Turks e Caicos | Islas Turcas y Caicos | 特克斯和凯科斯群岛 | 터크스 케이커스 제도 | Turks- en Caicoseilanden | Ilhas Turcas e Caicos | Тёркс и Кайкос | Turks and Caicos Islands | Turks and Caicos Islands | Turks and Caicos Islands | Turks and Caicos Islands | Turks and Caicos Islands |

## Turks and Caicos Islands Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x30000000` | 21.461791748, -71.130685399 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Turks and Caicos Islands | `0x30010000` | 21.461791748, -71.130685399 | タークス・カイコス諸島 | Turks and Caicos Islands | Îles Turques-et-Caïques | Turks- und Caicosinseln | Isole Turks e Caicos | Islas Turcas y Caicos | 特克斯和凯科斯群岛 | 터크스 케이커스 제도 | Turks- en Caicoseilanden | Ilhas Turcas e Caicos | Тёркс и Кайкос | Turks and Caicos Islands | Turks and Caicos Islands | Turks and Caicos Islands | Turks and Caicos Islands | Turks and Caicos Islands |

# United States
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x31` | US | アメリカ | United States | États-Unis d’Amérique | Vereinigte Staaten | Stati Uniti d'America | Estados Unidos de América | 美国 | 미국 | Verenigde Staten | Estados Unidos | Соединённые Штаты Америки | United States | United States | United States | United States | United States |

## United States Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x31000000` | 38.89160112, -77.035852824 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| District of Columbia | `0x31020000` | 38.89160112, -77.035852824 | コロンビア特別区 | District of Columbia | Washington (District de Columbia) | District of Columbia | Distretto di Columbia | Distrito de Columbia | 哥伦比亚特区 | 컬럼비아 특별구 | District of Columbia | Distrito de Colúmbia | Округ Колумбия | District of Columbia | District of Columbia | District of Columbia | District of Columbia | District of Columbia |
| Alaska | `0x31030000` | 58.298949532, -134.417600658 | アラスカ州 | Alaska | Alaska | Alaska | Alaska | Alaska | 阿拉斯加州 | 알래스카 주 | Alaska | Alasca | Аляска | Alaska | Alaska | Alaska | Alaska | Alaska |
| Alabama | `0x31040000` | 32.365722288, -86.297352618 | アラバマ州 | Alabama | Alabama | Alabama | Alabama | Alabama | 亚拉巴马州 | 앨라배마 주 | Alabama | Alabama | Алабама | Alabama | Alabama | Alabama | Alabama | Alabama |
| Arkansas | `0x31050000` | 34.7442623, -92.284917728 | アーカンソー州 | Arkansas | Arkansas | Arkansas | Arkansas | Arkansas | 阿肯色州 | 아칸소 주 | Arkansas | Arkansas | Арканзас | Arkansas | Arkansas | Arkansas | Arkansas | Arkansas |
| Arizona | `0x31060000` | 33.447875596, -112.071348486 | アリゾナ州 | Arizona | Arizona | Arizona | Arizona | Arizona | 亚利桑那州 | 애리조나 주 | Arizona | Arizona | Аризона | Arizona | Arizona | Arizona | Arizona | Arizona |
| California | `0x31070000` | 38.578490772, -121.492150471 | カリフォルニア州 | California | Californie | Kalifornien | California | California | 加利福尼亚州 | 캘리포니아 주 | Californië | Califórnia | Калифорния | California | California | California | California | California |
| Colorado | `0x31080000` | 39.737548376, -104.979654397 | コロラド州 | Colorado | Colorado | Colorado | Colorado | Colorado | 科罗拉多州 | 콜로라도 주 | Colorado | Colorado | Колорадо | Colorado | Colorado | Colorado | Colorado | Colorado |
| Connecticut | `0x31090000` | 41.759032728, -72.685255056 | コネティカット州 | Connecticut | Connecticut | Connecticut | Connecticut | Connecticut | 康涅狄格州 | 코네티컷 주 | Connecticut | Connecticut | Коннектикут | Connecticut | Connecticut | Connecticut | Connecticut | Connecticut |
| Delaware | `0x310A0000` | 39.155272992, -75.51973542 | デラウェア州 | Delaware | Delaware | Delaware | Delaware | Delaware | 特拉华州 | 델라웨어 주 | Delaware | Delaware | Делавэр | Delaware | Delaware | Delaware | Delaware | Delaware |
| Florida | `0x310B0000` | 30.437621724, -84.275862746 | フロリダ州 | Florida | Floride | Florida | Florida | Florida | 佛罗里达州 | 플로리다 주 | Florida | Flórida | Флорида | Florida | Florida | Florida | Florida | Florida |
| Georgia | `0x310C0000` | 33.744506452, -84.385726326 | ジョージア州 | Georgia | Géorgie | Georgia | Georgia | Georgia | 佐治亚州 | 조지아 주 | Georgia | Geórgia | Джорджия | Georgia | Georgia | Georgia | Georgia | Georgia |
| Hawaii | `0x310D0000` | 21.302489992, -157.856995451 | ハワイ州 | Hawaii | Hawaï | Hawaii | Hawaii | Hawái | 夏威夷州 | 하와이 주 | Hawaï | Havaí | Гавайи | Hawaii | Hawaii | Hawaii | Hawaii | Hawaii |
| Iowa | `0x310E0000` | 41.599730972, -93.603280688 | アイオワ州 | Iowa | Iowa | Iowa | Iowa | Iowa | 艾奥瓦州 | 아이오와 주 | Iowa | Iowa | Айова | Iowa | Iowa | Iowa | Iowa | Iowa |
| Idaho | `0x310F0000` | 43.610228996000004, -116.202219094 | アイダホ州 | Idaho | Idaho | Idaho | Idaho | Idaho | 爱达荷州 | 아이다호 주 | Idaho | Idaho | Айдахо | Idaho | Idaho | Idaho | Idaho | Idaho |
| Illinois | `0x31100000` | 39.79797318, -89.642698629 | イリノイ州 | Illinois | Illinois | Illinois | Illinois | Illinois | 伊利诺伊州 | 일리노이 주 | Illinois | Illinois | Иллинойс | Illinois | Illinois | Illinois | Illinois | Illinois |
| Indiana | `0x31110000` | 39.765014196, -86.154529964 | インディアナ州 | Indiana | Indiana | Indiana | Indiana | Indiana | 印第安纳州 | 인디애나 주 | Indiana | Indiana | Индиана | Indiana | Indiana | Indiana | Indiana | Indiana |
| Kansas | `0x31120000` | 39.045409712, -95.674209171 | カンザス州 | Kansas | Kansas | Kansas | Kansas | Kansas | 堪萨斯州 | 캔자스 주 | Kansas | Kansas | Канзас | Kansas | Kansas | Kansas | Kansas | Kansas |
| Kentucky | `0x31130000` | 38.199462456, -84.86912607800001 | ケンタッキー州 | Kentucky | Kentucky | Kentucky | Kentucky | Kentucky | 肯塔基州 | 켄터키 주 | Kentucky | Kentucky | Кентукки | Kentucky | Kentucky | Kentucky | Kentucky | Kentucky |
| Louisiana | `0x31140000` | 30.448608052, -91.153322854 | ルイジアナ州 | Louisiana | Louisiane | Louisiana | Luisiana | Luisiana | 路易斯安那州 | 루이지애나 주 | Louisiana | Luisiana | Луизиана | Louisiana | Louisiana | Louisiana | Louisiana | Louisiana |
| Massachusetts | `0x31150000` | 42.357787604, -71.05927407200001 | マサチューセッツ州 | Massachusetts | Massachusetts | Massachusetts | Massachusetts | Massachusetts | 马萨诸塞州 | 매사추세츠 주 | Massachusetts | Massachusetts | Массачусетс | Massachusetts | Massachusetts | Massachusetts | Massachusetts | Massachusetts |
| Maryland | `0x31160000` | 38.97399858, -76.492028103 | メリーランド州 | Maryland | Maryland | Maryland | Maryland | Maryland | 马里兰州 | 메릴랜드 주 | Maryland | Maryland | Мэриленд | Maryland | Maryland | Maryland | Maryland | Maryland |
| Maine | `0x31170000` | 44.307860824, -69.779363365 | メーン州 | Maine | Maine | Maine | Maine | Maine | 缅因州 | 메인 주 | Maine | Maine | Мэн | Maine | Maine | Maine | Maine | Maine |
| Michigan | `0x31180000` | 42.731322756, -84.550521696 | ミシガン州 | Michigan | Michigan | Michigan | Michigan | Míchigan | 密歇根州 | 미시간 주 | Michigan | Michigan | Мичиган | Michigan | Michigan | Michigan | Michigan | Michigan |
| Minnesota | `0x31190000` | 44.939574684, -93.092415041 | ミネソタ州 | Minnesota | Minnesota | Minnesota | Minnesota | Minnesota | 明尼苏达州 | 미네소타 주 | Minnesota | Minnesota | Миннесота | Minnesota | Minnesota | Minnesota | Minnesota | Minnesota |
| Missouri | `0x311A0000` | 38.572997608, -92.169560969 | ミズーリ州 | Missouri | Missouri | Missouri | Missouri | Misuri | 密苏里州 | 미주리 주 | Missouri | Missouri | Миссури | Missouri | Missouri | Missouri | Missouri | Missouri |
| Mississippi | `0x311B0000` | 32.294311156, -90.181030171 | ミシシッピ州 | Mississippi | Mississippi | Mississippi | Mississippi | Misisipi | 密西西比州 | 미시시피 주 | Mississippi | Mississippi | Миссисипи | Mississippi | Mississippi | Mississippi | Mississippi | Mississippi |
| Montana | `0x311C0000` | 46.587523884, -112.032896233 | モンタナ州 | Montana | Montana | Montana | Montana | Montana | 蒙大拿州 | 몬태나 주 | Montana | Montana | Монтана | Montana | Montana | Montana | Montana | Montana |
| North Carolina | `0x311D0000` | 35.771483968, -78.634367913 | ノースカロライナ州 | North Carolina | Caroline du Nord | North Carolina | Carolina del Nord | Carolina del Norte | 北卡罗来纳州 | 노스캐롤라이나 주 | North Carolina | Carolina do Norte | Северная Каролина | North Carolina | North Carolina | North Carolina | North Carolina | North Carolina |
| North Dakota | `0x311E0000` | 46.807250444, -100.782865641 | ノースダコタ州 | North Dakota | Dakota du Nord | North Dakota | Dakota del Nord | Dakota del Norte | 北达科他州 | 노스다코타 주 | North Dakota | Dakota do Norte | Северная Дакота | North Dakota | North Dakota | North Dakota | North Dakota | North Dakota |
| Nebraska | `0x311F0000` | 40.797729028, -96.662981391 | ネブラスカ州 | Nebraska | Nebraska | Nebraska | Nebraska | Nebraska | 内布拉斯加州 | 네브래스카 주 | Nebraska | Nebrasca | Небраска | Nebraska | Nebraska | Nebraska | Nebraska | Nebraska |
| New Hampshire | `0x31200000` | 43.20373486, -71.537180645 | ニューハンプシャー州 | New Hampshire | New Hampshire | New Hampshire | New Hampshire | Nuevo Hampshire | 新罕布什尔州 | 뉴햄프셔 주 | New Hampshire | Nova Hampshire | Нью-Гэмпшир | New Hampshire | New Hampshire | New Hampshire | New Hampshire | New Hampshire |
| New Jersey | `0x31210000` | 40.215453644, -74.739704002 | ニュージャージー州 | New Jersey | New Jersey | New Jersey | New Jersey | Nueva Jersey | 新泽西州 | 뉴저지 주 | New Jersey | Nova Jérsei | Нью-Джерси | New Jersey | New Jersey | New Jersey | New Jersey | New Jersey |
| New Mexico | `0x31220000` | 35.683593344, -105.935467543 | ニューメキシコ州 | New Mexico | Nouveau-Mexique | New Mexico | Nuovo Messico | Nuevo México | 新墨西哥州 | 뉴멕시코 주 | New Mexico | Novo México | Нью-Мексико | New Mexico | New Mexico | New Mexico | New Mexico | New Mexico |
| Nevada | `0x31230000` | 39.160766156, -119.761799086 | ネバダ州 | Nevada | Nevada | Nevada | Nevada | Nevada | 内华达州 | 네바다 주 | Nevada | Nevada | Невада | Nevada | Nevada | Nevada | Nevada | Nevada |
| New York | `0x31240000` | 42.648925296, -73.750931782 | ニューヨーク州 | New York | New York | New York | New York | Nueva York | 纽约州 | 뉴욕 주 | New York | Nova Iorque | Нью-Йорк | New York | New York | New York | New York | New York |
| Ohio | `0x31250000` | 39.957274936, -82.995952039 | オハイオ州 | Ohio | Ohio | Ohio | Ohio | Ohio | 俄亥俄州 | 오하이오 주 | Ohio | Ohio | Огайо | Ohio | Ohio | Ohio | Ohio | Ohio |
| Oklahoma | `0x31260000` | 35.463866784, -97.514424136 | オクラホマ州 | Oklahoma | Oklahoma | Oklahoma | Oklahoma | Oklahoma | 俄克拉何马州 | 오클라호마 주 | Oklahoma | Oklahoma | Оклахома | Oklahoma | Oklahoma | Oklahoma | Oklahoma | Oklahoma |
| Oregon | `0x31270000` | 44.939574684, -123.030240591 | オレゴン州 | Oregon | Oregon | Oregon | Oregon | Oregón | 俄勒冈州 | 오리건 주 | Oregon | Oregon | Орегон | Oregon | Oregon | Oregon | Oregon | Oregon |
| Pennsylvania | `0x31280000` | 40.270385284, -76.882043812 | ペンシルベニア州 | Pennsylvania | Pennsylvanie | Pennsylvania | Pennsylvania | Pensilvania | 宾夕法尼亚州 | 펜실베이니아 주 | Pennsylvania | Pensilvânia | Пенсильвания | Pennsylvania | Pennsylvania | Pennsylvania | Pennsylvania | Pennsylvania |
| Rhode Island | `0x31290000` | 41.819457532, -71.410837528 | ロードアイランド州 | Rhode Island | Rhode Island | Rhode Island | Rhode Island | Rhode Island | 罗得岛州 | 로드아일랜드 주 | Rhode Island | Rhode Island | Род-Айленд | Rhode Island | Rhode Island | Rhode Island | Rhode Island | Rhode Island |
| South Carolina | `0x312A0000` | 33.997191996, -81.029393957 | サウスカロライナ州 | South Carolina | Caroline du Sud | South Carolina | Carolina del Sud | Carolina del Sur | 南卡罗来纳州 | 사우스캐롤라이나 주 | South Carolina | Carolina do Sul | Южная Каролина | South Carolina | South Carolina | South Carolina | South Carolina | South Carolina |
| South Dakota | `0x312B0000` | 44.368285628, -100.3489045 | サウスダコタ州 | South Dakota | Dakota du Sud | South Dakota | Dakota del Sud | Dakota del Sur | 南达科他州 | 사우스다코타 주 | South Dakota | Dakota do Sul | Южная Дакота | South Dakota | South Dakota | South Dakota | South Dakota | South Dakota |
| Tennessee | `0x312C0000` | 36.161498612, -86.78075237 | テネシー州 | Tennessee | Tennessee | Tennessee | Tennessee | Tennessee | 田纳西州 | 테네시 주 | Tennessee | Tennessee | Теннесси | Tennessee | Tennessee | Tennessee | Tennessee | Tennessee |
| Texas | `0x312D0000` | 30.261840476, -97.739644475 | テキサス州 | Texas | Texas | Texas | Texas | Texas | 得克萨斯州 | 텍사스 주 | Texas | Texas | Техас | Texas | Texas | Texas | Texas | Texas |
| Utah | `0x312E0000` | 40.75927688, -111.890073579 | ユタ州 | Utah | Utah | Utah | Utah | Utah | 犹他州 | 유타 주 | Utah | Utah | Юта | Utah | Utah | Utah | Utah | Utah |
| Virginia | `0x312F0000` | 37.551269104, -77.458827607 | バージニア州 | Virginia | Virginie | Virginia | Virginia | Virginia | 弗吉尼亚州 | 버지니아 주 | Virginia | Virgínia | Виргиния | Virginia | Virginia | Virginia | Virginia | Virginia |
| Vermont | `0x31300000` | 44.258422348, -72.57539147600001 | バーモント州 | Vermont | Vermont | Vermont | Vermont | Vermont | 佛蒙特州 | 버몬트 주 | Vermont | Vermont | Вермонт | Vermont | Vermont | Vermont | Vermont | Vermont |
| Washington | `0x31310000` | 47.037963332, -122.898404295 | ワシントン州 | Washington | Washington | Washington | Stato di Washington | Washington | 华盛顿州 | 워싱턴 주 | Washington | Washington | Вашингтон (штат) | Washington | Washington | Washington | Washington | Washington |
| Wisconsin | `0x31320000` | 43.071898924, -89.395505574 | ウィスコンシン州 | Wisconsin | Wisconsin | Wisconsin | Wisconsin | Wisconsin | 威斯康星州 | 위스콘신 주 | Wisconsin | Wisconsin | Висконсин | Wisconsin | Wisconsin | Wisconsin | Wisconsin | Wisconsin |
| West Virginia | `0x31330000` | 38.347777884, -81.628150468 | ウェストバージニア州 | West Virginia | Virginie Occidentale | West Virginia | Virginia Occidentale | Virginia Occidental | 西弗吉尼亚州 | 웨스트버지니아 주 | West Virginia | Virgínia Ocidental | Западная Виргиния | West Virginia | West Virginia | West Virginia | West Virginia | West Virginia |
| Wyoming | `0x31340000` | 41.138305196, -104.814859027 | ワイオミング州 | Wyoming | Wyoming | Wyoming | Wyoming | Wyoming | 怀俄明州 | 와이오밍 주 | Wyoming | Wyoming | Вайоминг | Wyoming | Wyoming | Wyoming | Wyoming | Wyoming |
| Puerto Rico | `0x31350000` | 18.468017368, -66.104426614 | プエルトリコ | Puerto Rico | Porto Rico | Puerto Rico | Porto Rico | Puerto Rico | 波多黎各 | 푸에르토리코 | Puerto Rico | Porto Rico | Пуэрто-Рико | Puerto Rico | Puerto Rico | Puerto Rico | Puerto Rico | Puerto Rico |

# Uruguay
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x32` | UY | ウルグアイ | Uruguay | Uruguay | Uruguay | Uruguay | Uruguay | 乌拉圭 | 우루과이 | Uruguay | Uruguai | Уругвай | Uruguay | Uruguay | Uruguay | Uruguay | Uruguay |

## Uruguay Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x32000000` | -34.854126604, -56.16726580300001 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Montevideo | `0x32020000` | -34.854126604, -56.16726580300001 | モンテビデオ | Montevideo | Montevideo | Montevideo | Montevideo | Montevideo | 蒙得维的亚省 | 몬테비데오 | Montevideo | Montevideu | Монтевидео | Montevideo | Montevideo | Montevideo | Montevideo | Montevideo |
| Artigas | `0x32030000` | -30.399170599999998, -56.463897469 | アルティガス | Artigas | Artigas | Artigas | Artigas | Artigas | 阿蒂加斯省 | 아르티가스 | Artigas | Artigas | Артигас | Artigas | Artigas | Artigas | Artigas | Artigas |
| Canelones | `0x32040000` | -34.519043599999996, -56.277129383 | カネロネス | Canelones | Canelones | Canelones | Canelones | Canelones | 卡内洛内斯省 | 카넬로네스 | Canelones | Canelones | Канелонес | Canelones | Canelones | Canelones | Canelones | Canelones |
| Cerro Largo | `0x32050000` | -32.365723312, -54.17873500500001 | セロ・ラルゴ | Cerro Largo | Cerro Largo | Cerro Largo | Cerro Largo | Cerro Largo | 塞罗拉尔戈省 | 세로라르고 | Cerro Largo | Cerro Largo | Серро-Ларго | Cerro Largo | Cerro Largo | Cerro Largo | Cerro Largo | Cerro Largo |
| Colonia | `0x32060000` | -34.46411196, -57.848178577 | コロニア | Colonia | Colonia | Colonia | Colonia | Colonia | 科洛尼亚省 | 콜로니아 | Colonia | Colônia | Колония | Colonia | Colonia | Colonia | Colonia | Colonia |
| Durazno | `0x32070000` | -33.409424472, -56.49685654300001 | ドゥラスノ | Durazno | Durazno | Durazno | Durazno | Durazno | 杜拉斯诺省 | 두라스노 | Durazno | Durazno | Дурасно | Durazno | Durazno | Durazno | Durazno | Durazno |
| Flores | `0x32080000` | -33.535767244, -56.886872252 | フロレス | Flores | Flores | Flores | Flores | Flores | 弗洛雷斯省 | 플로레스 | Flores | Flores | Флорес | Flores | Flores | Flores | Flores | Flores |
| Florida | `0x32090000` | -34.090576808, -56.21121123500001 | フロリダ | Florida | Florida | Florida | Florida | Florida | 佛罗里达省 | 플로리다 | Florida | Florida | Флорида | Florida | Florida | Florida | Florida | Florida |
| Lavalleja | `0x320A0000` | -34.365235008, -55.222439015000006 | ラバジェハ | Lavalleja | Lavalleja | Lavalleja | Lavalleja | Lavalleja | 拉瓦耶哈省 | 라바예하 | Lavalleja | Lavalleja | Лавальеха | Lavalleja | Lavalleja | Lavalleja | Lavalleja | Lavalleja |
| Maldonado | `0x320B0000` | -34.898071916, -54.947780065 | マルドナド | Maldonado | Maldonado | Maldonado | Maldonado | Maldonado | 马尔多纳多省 | 말도나도 | Maldonado | Maldonado | Мальдонадо | Maldonado | Maldonado | Maldonado | Maldonado | Maldonado |
| Paysandú | `0x320C0000` | -32.316284836, -58.073398916 | パイサンドゥ | Paysandú | Paysandú | Paysandú | Paysandú | Paysandú | 派桑杜省 | 파이산두 | Paysandú | Paysandú | Пайсанду | Paysandú | Paysandú | Paysandú | Paysandú | Paysandú |
| Río Negro | `0x320D0000` | -33.129273108, -58.29312607600001 | リオ・ネグロ | Río Negro | Río Negro | Río Negro | Río Negro | Río Negro | 内格罗河省 | 리오네그로 | Río Negro | Río Negro | Рио-Негро | Río Negro | Río Negro | Río Negro | Río Negro | Río Negro |
| Rivera | `0x320E0000` | -30.899048524, -55.513577502000004 | リベラ | Rivera | Rivera | Rivera | Rivera | Rivera | 里韦拉省 | 리베라 | Rivera | Rivera | Ривера | Rivera | Rivera | Rivera | Rivera | Rivera |
| Rocha | `0x320F0000` | -34.480591452, -54.332544017000004 | ロチャ | Rocha | Rocha | Rocha | Rocha | Rocha | 罗恰省 | 로차 | Rocha | Rocha | Роча | Rocha | Rocha | Rocha | Rocha | Rocha |
| Salto | `0x32100000` | -31.382446956000003, -57.96353533600001 | サルト | Salto | Salto | Salto | Salto | Salto | 萨尔托省 | 살토 | Salto | Salto | Сальто | Salto | Salto | Salto | Salto | Salto |
| San José | `0x32110000` | -34.332276024, -56.711090524 | サン・ホセ | San José | San José | San José | San José | San José | 圣何塞省 | 산호세 | San José | San José | Сан-Хосе | San José | San José | San José | San José | San José |
| Soriano | `0x32120000` | -33.25561588, -58.018467126000004 | ソリアノ | Soriano | Soriano | Soriano | Soriano | Soriano | 索里亚诺省 | 소리아노 | Soriano | Soriano | Сорьяно | Soriano | Soriano | Soriano | Soriano | Soriano |
| Tacuarembó | `0x32130000` | -31.728516288, -55.980497717000006 | タクアレンボ | Tacuarembó | Tacuarembó | Tacuarembó | Tacuarembó | Tacuarembó | 塔夸伦博省 | 타쿠아렘보 | Tacuarembó | Tacuarembó | Такуарембо | Tacuarembó | Tacuarembó | Tacuarembó | Tacuarembó | Tacuarembó |
| Treinta y Tres | `0x32140000` | -33.22815006, -54.381982628 | トレインタ・イ・トレス | Treinta y Tres | Treinta y Tres | Treinta y Tres | Treinta y Tres | Treinta y Tres | 三十三人省 | 트레인타이트레스 | Treinta y Tres | Treinta y Tres | Трейнта-и-Трес | Treinta y Tres | Treinta y Tres | Treinta y Tres | Treinta y Tres | Treinta y Tres |

# US Virgin Islands
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x33` | VI | 米領バージン諸島 | US Virgin Islands | Îles Vierges américaines | Amerikanische Jungferninseln | Isole Vergini Statunitensi | Islas Vírgenes de los EE. UU. | 美属维尔京群岛 | 미국령 버진아일랜드 | Amerikaanse Maagdeneilanden | Ilhas Virgens Americanas | Американские Виргинские острова | US Virgin Islands | US Virgin Islands | US Virgin Islands | US Virgin Islands | US Virgin Islands |

## US Virgin Islands Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x33000000` | 18.341674596, -64.928886308 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| US Virgin Islands | `0x33010000` | 18.341674596, -64.928886308 | 米領バージン諸島 | US Virgin Islands | Îles Vierges américaines | Amerikanische Jungferninseln | Isole Vergini Statunitensi | Islas Vírgenes de los EE. UU. | 美属维尔京群岛 | 미국령 버진아일랜드 | Amerikaanse Maagdeneilanden | Ilhas Virgens Americanas | Американские Виргинские острова | US Virgin Islands | US Virgin Islands | US Virgin Islands | US Virgin Islands | US Virgin Islands |

# Venezuela
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x34` | VE | ベネズエラ | Venezuela | Venezuela | Venezuela | Venezuela | Venezuela | 委内瑞拉 | 베네수엘라 | Venezuela | Venezuela | Венесуэла | Venezuela | Venezuela | Venezuela | Venezuela | Venezuela |

## Venezuela Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x34000000` | 10.497436404, -66.911923927 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Distrito Federal | `0x34020000` | 10.497436404, -66.911923927 | ディストリト首都地区 | Distrito Federal | District Fédéral | Caracas D.F. | Distretto Capitale | Distrito Capital | 首都区 | 베네수엘라 연방구 | Hoofdstedelijk District | Distrito Federal | Федеральный округ | Distrito Federal | Distrito Federal | Distrito Federal | Distrito Federal | Distrito Federal |
| Amazonas | `0x34030000` | 5.663452084, -67.620544018 | アマソナス | Amazonas | Amazone | Amazonas | Amazonas | Amazonas | 亚马孙边疆区 | 아마소나스 | Amazonas | Amazonas | Амасонас | Amazonas | Amazonas | Amazonas | Amazonas | Amazonas |
| Anzoátegui | `0x34040000` | 10.129394416, -64.69817279 | アンソアテギ | Anzoátegui | Anzoátegui | Anzoátegui | Anzoátegui | Anzoátegui | 安索阿特吉州 | 안소아테기 | Anzoátegui | Anzoátegui | Ансоатеги | Anzoátegui | Anzoátegui | Anzoátegui | Anzoátegui | Anzoátegui |
| Apure | `0x34050000` | 7.893676668, -67.46673500600001 | アプレ | Apure | Apure | Apure | Apure | Apure | 阿普雷州 | 아푸레 | Apure | Apure | Апуре | Apure | Apure | Apure | Apure | Apure |
| Aragua | `0x34060000` | 10.24475086, -67.593078123 | アラグア | Aragua | Aragua | Aragua | Aragua | Aragua | 阿拉瓜州 | 아라과 | Aragua | Aragua | Арагуа | Aragua | Aragua | Aragua | Aragua | Aragua |
| Barinas | `0x34070000` | 8.62426748, -70.202338148 | バリナス | Barinas | Barinas | Barinas | Barinas | Barinas | 巴里纳斯州 | 바리나스 | Barinas | Barinas | Баринас | Barinas | Barinas | Barinas | Barinas | Barinas |
| Bolívar | `0x34080000` | 8.118896392, -63.54460520000001 | ボリーバル | Bolívar | Bolívar | Bolívar | Bolívar | Bolívar | 玻利瓦尔州 | 볼리바르 | Bolívar | Bolívar | Боливар | Bolívar | Bolívar | Bolívar | Bolívar | Bolívar |
| Carabobo | `0x34090000` | 10.178832892, -67.999573369 | カラボボ | Carabobo | Carabobo | Carabobo | Carabobo | Carabobo | 卡拉沃沃州 | 카라보보 | Carabobo | Carabobo | Карабобо | Carabobo | Carabobo | Carabobo | Carabobo | Carabobo |
| Cojedes | `0x340A0000` | 9.662475476000001, -68.59832988 | コヘデス | Cojedes | Cojedes | Cojedes | Cojedes | Cojedes | 科赫德斯州 | 코헤데스 | Cojedes | Cojedes | Кохедес | Cojedes | Cojedes | Cojedes | Cojedes | Cojedes |
| Delta Amacuro | `0x340B0000` | 9.0637206, -62.044967333 | デルタ・アマクロ | Delta Amacuro | Delta Amacuro | Delta Amacuro | Delta Amacuro | Delta Amacuro | 阿马库罗三角洲边疆区 | 델타아마쿠로 | Delta Amacuro | Delta Amacuro | Дельта-Амакуро | Delta Amacuro | Delta Amacuro | Delta Amacuro | Delta Amacuro | Delta Amacuro |
| Falcón | `0x340C0000` | 11.403808464, -69.664006606 | ファルコン | Falcón | Falcón | Falcón | Falcón | Falcón | 法尔孔州 | 팔콘 | Falcón | Falcón | Фалькон | Falcón | Falcón | Falcón | Falcón | Falcón |
| Guárico | `0x340D0000` | 9.909667856, -67.356871426 | グアリコ | Guárico | Guárico | Guárico | Guárico | Guárico | 瓜里科州 | 과리코 | Guárico | Guárico | Гуарико | Guárico | Guárico | Guárico | Guárico | Guárico |
| Lara | `0x340E0000` | 10.068969612, -69.317936329 | ララ | Lara | Lara | Lara | Lara | Lara | 拉腊州 | 라라 | Lara | Lara | Лара | Lara | Lara | Lara | Lara | Lara |
| Mérida | `0x340F0000` | 8.59680166, -71.141671757 | メリダ | Mérida | Mérida | Mérida | Mérida | Mérida | 梅里达州 | 메리다 | Mérida | Mérida | Мерида | Mérida | Mérida | Mérida | Mérida | Mérida |
| Miranda | `0x34100000` | 10.338134648, -67.038267044 | ミランダ | Miranda | Miranda | Miranda | Miranda | Miranda | 米兰达州 | 미란다 | Miranda | Miranda | Миранда | Miranda | Miranda | Miranda | Miranda | Miranda |
| Monagas | `0x34110000` | 9.744872936, -63.171069028000005 | モナガス | Monagas | Monagas | Monagas | Monagas | Monagas | 莫纳加斯州 | 모나가스 | Monagas | Monagas | Монагас | Monagas | Monagas | Monagas | Monagas | Monagas |
| Nueva Esparta | `0x34120000` | 11.030273312, -63.857716403 | ヌエバエスパルタ | Nueva Esparta | Nueva Esparta | Nueva Esparta | Nueva Esparta | Nueva Esparta | 新埃斯帕塔州 | 누에바에스파르타 | Nueva Esparta | Nova Esparta | Нуэва-Эспарта | Nueva Esparta | Nueva Esparta | Nueva Esparta | Nueva Esparta | Nueva Esparta |
| Portuguesa | `0x34130000` | 9.047241108, -69.746404291 | ポルトゥゲサ | Portuguesa | Portuguesa | Portuguesa | Portuguesa | Portuguesa | 波图格萨州 | 포르투게사 | Portuguesa | Portuguesa | Португеса | Portuguesa | Portuguesa | Portuguesa | Portuguesa | Portuguesa |
| Sucre | `0x34140000` | 10.46447742, -64.165334427 | スクレ | Sucre | Sucre | Sucre | Sucre | Sucre | 苏克雷州 | 수크레 | Sucre | Sucre | Сукре | Sucre | Sucre | Sucre | Sucre | Sucre |
| Táchira | `0x34150000` | 7.7618407320000005, -72.22382802 | タチラ | Táchira | Táchira | Táchira | Táchira | Táchira | 塔奇拉州 | 타치라 | Táchira | Táchira | Тачира | Táchira | Táchira | Táchira | Táchira | Táchira |
| Trujillo | `0x34160000` | 9.36584462, -70.427558487 | トルヒーヨ | Trujillo | Trujillo | Trujillo | Trujillo | Trujillo | 特鲁希略州 | 트루히요 | Trujillo | Trujillo | Трухильо | Trujillo | Trujillo | Trujillo | Trujillo | Trujillo |
| Yaracuy | `0x34170000` | 10.338134648, -68.735659355 | ヤラクイ | Yaracuy | Yaracuy | Yaracuy | Yaracuy | Yaracuy | 亚拉奎州 | 야라쿠이 | Yaracuy | Yaracuy | Яракуй | Yaracuy | Yaracuy | Yaracuy | Yaracuy | Yaracuy |
| Zulia | `0x34180000` | 10.62927234, -71.636057867 | スリア | Zulia | Zulia | Zulia | Zulia | Zulia | 苏利亚州 | 술리아 | Zulia | Zulia | Сулия | Zulia | Zulia | Zulia | Zulia | Zulia |
| Dependencias Federales | `0x34190000` | 11.997070176, -65.994563034 | 連邦保護領 | Dependencias Federales | Dépendances Fédérales | Dependencias Federales | Dipendenze Federali | Dependencias Federales | 联邦属地 | 베네수엘라 연방자치령 | Federale gebieden | Dependências Federais | Федеральное владение | Dependencias Federales | Dependencias Federales | Dependencias Federales | Dependencias Federales | Dependencias Federales |
| Vargas | `0x341A0000` | 10.596313356, -66.928403464 | バルガス | Vargas | Vargas | Vargas | Vargas | Vargas | 巴尔加斯州 | 바르가스 | Vargas | Vargas | Варгас | Vargas | Vargas | Vargas | Vargas | Vargas |

# Albania
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x40` | AL | アルバニア | Albania | Albanie | Albanien | Albania | Albania | 阿尔巴尼亚 | 알바니아 | Albanië | Albânia | Албания | Albania | Albania | Albania | Albania | Albania |

## Albania Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x40000000` | 41.325072772, 19.824883011 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Tirana | `0x40020000` | 41.325072772, 19.824883011 | ティラナ州 | Tirana | Tirana | Tirana | Tirana | Tirana | 地拉那州 | 티라나 주 | Tirana | Tirana | Тирана | Tirana | Tirana | Tirana | Tirana | Tirana |
| Berat | `0x40030000` | 40.70434524, 19.967705665 | ベラト州 | Berat | Berat | Berat | Berat | Berat | 培拉特州 | 베라트 주 | Berat | Berat | Берат | Berat | Berat | Berat | Berat | Berat |
| Dibër | `0x40040000` | 41.682128432, 20.440119059 | ディブラ州 | Dibër | Dibër | Dibra | Dibër | Dibër | 迪勃拉州 | 디브라 주 | Dibër | Dibër | Дибра | Dibër | Dibër | Dibër | Dibër | Dibër |
| Durrës | `0x40050000` | 41.319579608, 19.451346839 | デュラス州 | Durrës | Durrës | Durrës | Durazzo | Durrës | 都拉斯州 | 두러스 주 | Durrës | Durrës | Дуррес | Durrës | Durrës | Durrës | Durrës | Durrës |
| Elbasan | `0x40060000` | 41.044921408, 19.99517156 | エルバサン州 | Elbasan | Elbasan | Elbasan | Elbasan | Elbasan | 爱尔巴桑州 | 엘바산 주 | Elbasan | Elbasan | Эльбасан | Elbasan | Elbasan | Elbasan | Elbasan | Elbasan |
| Fier | `0x40070000` | 40.720824732, 19.566703598 | フィエル州 | Fier | Fier | Fier | Fier | Fier | 费里州 | 피에르 주 | Fier | Fier | Фиери | Fier | Fier | Fier | Fier | Fier |
| Gjirokastër | `0x40080000` | 40.07263138, 20.143487393 | ギロカストラ州 | Gjirokastër | Gjirokastër | Gjirokastra | Argirocastro | Gjirokastra | 吉诺卡斯特州 | 지로카스터르 주 | Gjirokastër | Gjirokastra | Гирокастра | Gjirokastër | Gjirokastër | Gjirokastër | Gjirokastër | Gjirokastër |
| Korçë | `0x40090000` | 40.616454616, 20.786189336 | コルチャ州 | Korçë | Korçë | Korça | Coriza | Korçë | 科尔察州 | 코르처 주 | Korçë | Korçë | Корча | Korçë | Korçë | Korçë | Korçë | Korçë |
| Kukës | `0x400A0000` | 42.07763624, 20.429132701 | クケス州 | Kukës | Kukës | Kukës | Kukës | Kukës | 库克斯州 | 쿠커스 주 | Kukës | Kukës | Кукес | Kukës | Kukës | Kukës | Kukës | Kukës |
| Lezhë | `0x400B0000` | 41.781005384000004, 19.649101283 | レジャ州 | Lezhë | Lezhë | Lezha | Alessio | Lezhë | 莱什州 | 레저 주 | Lezhë | Lezhë | Лежа | Lezhë | Lezhë | Lezhë | Lezhë | Lezhë |
| Shkodër | `0x400C0000` | 42.072143076, 19.522758166 | シュコドラ州 | Shkodër | Shkodër | Shkodra | Scutari | Shkodër | 斯库台州 | 슈코더르 주 | Shkodër | Shkodër | Шкодер | Shkodër | Shkodër | Shkodër | Shkodër | Shkodër |
| Vlorë | `0x400D0000` | 40.468139188, 19.484305913 | ヴロラ州 | Vlorë | Vlorë | Vlora | Valona | Vlorë | 发罗拉州 | 블로러 주 | Vlorë | Vlorë | Влёра | Vlorë | Vlorë | Vlorë | Vlorë | Vlorë |

# Australia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x41` | AU | オーストラリア | Australia | Australie | Australien | Australia | Australia | 澳大利亚 | 오스트레일리아 | Australië | Austrália | Австралия | Australia | Australia | Australia | Australia | Australia |

## Australia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x41000000` | -33.88732974, 151.238204228 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Australian Capital Territory | `0x41020000` | -35.348511364, 149.040932628 | オーストラリア首都特別地域 | Australian Capital Territory | Territoire de la capitale australienne | Australisches Hauptstadtterritorium | Territorio della Capitale Australiana | Territorio de la Capital Australiana | 澳大利亚首都直辖区 | 오스트레일리아캐피털테리토리 | Australisch Hoofdstedelijk Territorium | Território da Capital Australiana | Австралийская столичная территория | Australian Capital Territory | Australian Capital Territory | Australian Capital Territory | Australian Capital Territory | Australian Capital Territory |
| New South Wales | `0x41030000` | -33.88732974, 151.238204228 | ニューサウスウェールズ州 | New South Wales | Nouvelle-Galles du Sud | Neusüdwales | Nuovo Galles del Sud | Nueva Gales del Sur | 新南威尔士州 | 뉴사우스웨일스 주 | Nieuw-Zuid-Wales | Nova Gales do Sul | Новый Южный Уэльс | New South Wales | New South Wales | New South Wales | New South Wales | New South Wales |
| Northern Territory | `0x41040000` | -12.431031156000003, 130.842030601 | ノーザンテリトリー | Northern Territory | Territoire du Nord | Nördliches Territorium | Territorio del Nord | Territorio del Norte | 北部地区 | 노던테리토리 주 | Noordelijk Territorium | Território do Norte | Северная территория | Northern Territory | Northern Territory | Northern Territory | Northern Territory | Northern Territory |
| Queensland | `0x41050000` | -27.449341532, 153.023487403 | クィーンズランド州 | Queensland | Queensland | Queensland | Queensland | Queensland | 昆士兰州 | 퀸즐랜드 주 | Queensland | Queensland | Квинсленд | Queensland | Queensland | Queensland | Queensland | Queensland |
| South Australia | `0x41060000` | -34.914551408, 138.609385707 | 南オーストラリア州 | South Australia | Australie-Méridionale | Südaustralien | Australia Meridionale | Australia Meridional | 南澳大利亚州 | 사우스오스트레일리아 주 | Zuid-Australië | Austrália Meridional | Южная Австралия | South Australia | South Australia | South Australia | South Australia | South Australia |
| Tasmania | `0x41070000` | -42.846680223999996, 147.288608527 | タスマニア州 | Tasmania | Tasmanie | Tasmanien | Tasmania | Tasmania | 塔斯马尼亚州 | 태즈메이니아 주 | Tasmanië | Tasmânia | Тасмания | Tasmania | Tasmania | Tasmania | Tasmania | Tasmania |
| Victoria | `0x41080000` | -37.809448836, 144.96499381 | ヴィクトリア州 | Victoria | Victoria | Victoria | Victoria | Victoria | 维多利亚州 | 빅토리아 주 | Victoria | Victoria | Виктория | Victoria | Victoria | Victoria | Victoria | Victoria |
| Western Australia | `0x41090000` | -31.931763355999998, 115.862131468 | 西オーストラリア州 | Western Australia | Australie-Occidentale | Westaustralien | Australia Occidentale | Australia Occidental | 西澳大利亚州 | 웨스턴오스트레일리아 주 | West-Australië | Austrália Ocidental | Западная Австралия | Western Australia | Western Australia | Western Australia | Western Australia | Western Australia |

# Austria
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x42` | AT | オーストリア | Austria | Autriche | Österreich | Austria | Austria | 奥地利 | 오스트리아 | Oostenrijk | Áustria | Австрия | Austria | Austria | Austria | Austria | Austria |

## Austria Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x42000000` | 48.2025141, 16.36967342 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Vienna | `0x42020000` | 48.2025141, 16.36967342 | ウィーン | Vienna | Vienne | Wien | Vienna | Viena | 维也纳州 | 빈 | Wenen | Viena | Вена | Vienna | Vienna | Vienna | Vienna | Vienna |
| Burgenland | `0x42030000` | 47.84545844, 16.512496074 | ブルゲンラント州 | Burgenland | Burgenland | Burgenland | Burgenland | Burgenland | 布尔根兰州 | 부르겐란트 주 | Burgenland | Burgenland | Бургенланд | Burgenland | Burgenland | Burgenland | Burgenland | Burgenland |
| Carinthia | `0x42040000` | 46.614989704, 14.298744937 | ケルンテン州 | Carinthia | Carinthie | Kärnten | Carinzia | Carintia | 克恩顿州 | 케른텐 주 | Karinthië | Caríntia | Каринтия | Carinthia | Carinthia | Carinthia | Carinthia | Carinthia |
| Lower Austria | `0x42050000` | 48.197020936, 15.617107897 | ニーダー・エスターライヒ州 | Lower Austria | Basse-Autriche | Niederösterreich | Bassa Austria | Baja Austria | 下奥地利州 | 니더외스터라이히 주 | Neder-Oostenrijk | Baixa Áustria | Нижняя Австрия | Lower Austria | Lower Austria | Lower Austria | Lower Austria | Lower Austria |
| Upper Austria | `0x42060000` | 48.295897888, 14.287758579 | オーバー・エスターライヒ州 | Upper Austria | Haute-Autriche | Oberösterreich | Alta Austria | Alta Austria | 上奥地利州 | 오버외스터라이히 주 | Opper-Oostenrijk | Alta Áustria | Верхняя Австрия | Upper Austria | Upper Austria | Upper Austria | Upper Austria | Upper Austria |
| Salzburg | `0x42070000` | 47.796019964, 13.029820588 | ザルツブルク州 | Salzburg | Salzbourg | Salzburg | Salisburghese | Salzburgo | 萨尔茨堡州 | 잘츠부르크 주 | Salzburg | Salzburgo | Зальцбург | Salzburg | Salzburg | Salzburg | Salzburg | Salzburg |
| Styria | `0x42080000` | 47.065429152, 15.43583299 | シュタイアーマルク州 | Styria | Styrie | Steiermark | Stiria | Estiria | 施蒂利亚州 | 슈타이어마르크 주 | Stiermarken | Estíria | Штирия | Styria | Styria | Styria | Styria | Styria |
| Tyrol | `0x42090000` | 47.263183056, 11.381866888 | ティロル州 | Tyrol | Tyrol | Tirol | Tirolo | Tirol | 蒂罗尔州 | 티롤 주 | Tirol | Tirol | Тироль | Tyrol | Tyrol | Tyrol | Tyrol | Tyrol |
| Vorarlberg | `0x420A0000` | 47.499389108, 9.744899546 | フォアアールベルク州 | Vorarlberg | Vorarlberg | Vorarlberg | Vorarlberg | Vorarlberg | 福拉尔贝格州 | 포어아를베르크 주 | Vorarlberg | Vorarlberg | Форарльберг | Vorarlberg | Vorarlberg | Vorarlberg | Vorarlberg | Vorarlberg |

# Belgium
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x43` | BE | ベルギー | Belgium | Belgique | Belgien | Belgio | Bélgica | 比利时 | 벨기에 | België | Bélgica | Бельгия | Belgium | Belgium | Belgium | Belgium | Belgium |

## Belgium Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x43000000` | 50.83923282, 4.367077305 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Brussels Region | `0x43020000` | 50.83923282, 4.367077305 | ブリュッセル首都地域圏 | Brussels Region | Région de Bruxelles-Capitale | Region Brüssel-Hauptstadt | Regione di Bruxelles | Región de Bruselas-Capital | 布鲁塞尔首都大区 | 브뤼셀 지역 | Brussels Hoofdstedelijk Gewest | Região de Bruxelas - Capital | Брюссельский столичный округ | Brussels Region | Brussels Region | Brussels Region | Brussels Region | Brussels Region |
| Flanders | `0x43030000` | 50.83923282, 4.367077305 | フランデレン地域圏 | Flanders | Région flamande | Flandern | Fiandre | Región de Flandes | 佛兰德大区 | 플랑드르 지역 | Vlaanderen | Flandres | Фламандский регион | Flanders | Flanders | Flanders | Flanders | Flanders |
| Wallonia | `0x43040000` | 50.465697668, 4.861463415 | ワロン地域圏 | Wallonia | Région wallonne | Wallonien | Vallonia | Región de Valonia | 瓦隆大区 | 왈롱 지역 | Wallonië | Valónia | Валлонский регион | Wallonia | Wallonia | Wallonia | Wallonia | Wallonia |

# Bosnia and Herzegovina
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x44` | BA | ボスニア・ヘルツェゴビナ | Bosnia and Herzegovina | Bosnie-Herzégovine | Bosnien-Herzegowina | Bosnia-Erzegovina | Bosnia-Herzegovina | 波斯尼亚和黑塞哥维那 | 보스니아헤르체고비나 | Bosnië en Herzegovina | Bósnia-Herzegovina | Босния и Герцеговина | Bosnia and Herzegovina | Bosnia and Herzegovina | Bosnia and Herzegovina | Bosnia and Herzegovina | Bosnia and Herzegovina |

## Bosnia and Herzegovina Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x44000000` | 43.851928212, 18.407642829 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Federation of Bosnia and Herzegovina | `0x44020000` | 43.851928212, 18.407642829 | ボスニア・ヘルツェゴビナ連邦 | Federation of Bosnia and Herzegovina | Fédération de Bosnie-Herzégovine | Föderation Bosnien und Herzegowina | Federazione di Bosnia-Erzegovina | Federación de Bosnia-Herzegovina | 波黑联邦 | 보스니아헤르체고비나 연방 | Moslim-Kroatische Federatie | Federação da Bósnia-Herzegovina | Федерация Боснии и Герцеговины | Federation of Bosnia and Herzegovina | Federation of Bosnia and Herzegovina | Federation of Bosnia and Herzegovina | Federation of Bosnia and Herzegovina | Federation of Bosnia and Herzegovina |
| Republika Srpska | `0x44030000` | 44.7692866, 17.19365027 | セルビア人共和国 | Republika Srpska | République serbe de Bosnie | Serbische Republik | Repubblica Serba di Bosnia-Erzegovina | República Srpska | 塞族共和国 | 스릅스카 공화국 | Servische Republiek | República Sérvia | Республика Сербская | Republika Srpska | Republika Srpska | Republika Srpska | Republika Srpska | Republika Srpska |
| Brčko District | `0x44040000` | 44.868163552, 18.803151717 | ブルチュコ | Brčko District | Brčko (district) | Brčko-Distrikt | Distretto di Brčko | Distrito de Brčko | 布尔奇科特区 | 브르치코 | Brčko | Distrito de Brčko | Округ Брчко | Brčko District | Brčko District | Brčko District | Brčko District | Brčko District |

# Botswana
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x45` | BW | ボツワナ | Botswana | Botswana | Botsuana | Botswana | Botsuana | 博茨瓦纳 | 보츠와나 | Botswana | Botsuana | Ботсвана | Botswana | Botswana | Botswana | Botswana | Botswana |

## Botswana Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x45000000` | -24.647827891999995, 25.900338985 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Botswana | `0x45010000` | -24.647827891999995, 25.900338985 | ボツワナ | Botswana | Botswana | Botsuana | Botswana | Botsuana | 博茨瓦纳 | 보츠와나 | Botswana | Botsuana | Ботсвана | Botswana | Botswana | Botswana | Botswana | Botswana |

# Bulgaria
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x46` | BG | ブルガリア | Bulgaria | Bulgarie | Bulgarien | Bulgaria | Bulgaria | 保加利亚 | 불가리아 | Bulgarije | Bulgária | Болгария | Bulgaria | Bulgaria | Bulgaria | Bulgaria | Bulgaria |

## Bulgaria Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x46000000` | 42.703856936, 23.302065318 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Sofia City | `0x46020000` | 42.703856936, 23.302065318 | ソフィア市 | Sofia City | Sofia (ville) | Sofia (Stadt) | Sofia | Ciudad de Sofía | 索非亚市 | 소피아 | Sofia (stad) | Sófia (cidade) | София | Sofia City | Sofia City | Sofia City | Sofia City | Sofia City |
| Sofia Province | `0x46030000` | 42.703856936, 23.302065318 | ソフィア州 | Sofia Province | Sofia (oblast) | Sofia (Region) | Regione di Sofia | Provincia de Sofía | 索非亚州 | 소피아 주 | Sofia (oblast) | Província de Sófia | Софийская область | Sofia Province | Sofia Province | Sofia Province | Sofia Province | Sofia Province |
| Blagoevgrad | `0x46040000` | 42.017211436000004, 23.098817695 | ブラゴエブグラト州 | Blagoevgrad | Blagoevgrad | Blagoewgrad | Blagoevgrad | Blagoevgrad | 布拉格耶夫格勒州 | 블라고예브그라드 주 | Blagoëvgrad | Blagoevgrad | Благоевград | Blagoevgrad | Blagoevgrad | Blagoevgrad | Blagoevgrad | Blagoevgrad |
| Pleven | `0x46050000` | 43.417968256, 24.620428278 | プレベン州 | Pleven | Pleven | Plewen | Pleven | Pleven | 普列文州 | 플레벤 주 | Pleven | Pleven | Плевен | Pleven | Pleven | Pleven | Pleven | Pleven |
| Vidin | `0x46060000` | 43.989257312, 22.873597356 | ビディン州 | Vidin | Vidin | Widin | Vidin | Vidin | 维丁州 | 비딘 주 | Vidin | Vidin | Видин | Vidin | Vidin | Vidin | Vidin | Vidin |
| Varna | `0x46070000` | 43.20373486, 27.899856141 | バルナ州 | Varna | Varna | Warna | Varna | Varna | 瓦尔纳州 | 바르나 주 | Varna | Varna | Варна | Varna | Varna | Varna | Varna | Varna |
| Burgas | `0x46080000` | 42.522582524, 27.454908642 | ブルガス州 | Burgas | Bourgas | Burgas | Burgas | Burgas | 布尔加斯州 | 부르가스 주 | Boergas | Burgas | Бургас | Burgas | Burgas | Burgas | Burgas | Burgas |
| Dobrich | `0x46090000` | 43.571776848, 27.833937993 | ドブリチ州 | Dobrich | Dobritch | Dobritsch | Dobrich | Dobrich | 多布里奇州 | 도브리치 주 | Dobritsj | Dobric | Добрич | Dobrich | Dobrich | Dobrich | Dobrich | Dobrich |
| Gabrovo | `0x460A0000` | 42.890624512, 25.307075653 | ガブロボ州 | Gabrovo | Gabrovo | Gabrowo | Gabrovo | Gabrovo | 加布罗沃州 | 가브로보 주 | Gabrovo | Gabrovo | Габрово | Gabrovo | Gabrovo | Gabrovo | Gabrovo | Gabrovo |
| Haskovo | `0x460B0000` | 41.934813976, 25.554268708 | ハスコボ州 | Haskovo | Khaskovo | Chaskowo | Haskovo | Haskovo | 哈斯科沃州 | 하스코보 주 | Chaskovo | Haskovo | Хасково | Haskovo | Haskovo | Haskovo | Haskovo | Haskovo |
| Yambol | `0x460C0000` | 42.484130376, 26.515575033 | ヤンボル州 | Yambol | Yambol | Jambol | Jambol | Yambol | 扬博尔州 | 얌볼 주 | Jambol | Yambol | Ямбол | Yambol | Yambol | Yambol | Yambol | Yambol |
| Kardzhali | `0x460D0000` | 41.63818312, 25.378486979999998 | クルジャリ州 | Kardzhali | Kardjali | Kardschali | Kardzhali | Kardzhali | 克尔贾利州 | 쿠르잘리 주 | Kardzjali | Kardzhali | Кырджали | Kardzhali | Kardzhali | Kardzhali | Kardzhali | Kardzhali |
| Kyustendil | `0x460E0000` | 42.286376472, 22.68682927 | キュステンディル州 | Kyustendil | Kyoustendil | Kjustendil | Kjustendil | Kyustendil | 丘斯滕迪尔州 | 큐스텐딜 주 | Kjoestendil | Kyustendil | Кюстендил | Kyustendil | Kyustendil | Kyustendil | Kyustendil | Kyustendil |
| Lovech | `0x460F0000` | 43.132323728, 24.713812321 | ロベチ州 | Lovech | Lovetch | Lowetsch | Lovech | Lovech | 洛维奇州 | 로베치 주 | Lovetsj | Lovech | Ловеч | Lovech | Lovech | Lovech | Lovech | Lovech |
| Montana | `0x46100000` | 43.412475092, 23.23614717 | モンタナ州 | Montana | Montana | Montana | Montana | Montana | 蒙塔纳州 | 몬타나 주 | Montana | Montana | Монтана | Montana | Montana | Montana | Montana | Montana |
| Pazardzhik | `0x46110000` | 42.18749952, 24.33478297 | パザルジク州 | Pazardzhik | Pazardjik | Pasardschik | Pazardzhik | Pazardzhik | 帕扎尔吉克州 | 파자르지크 주 | Pazardzjik | Pazardzhik | Пазарджик | Pazardzhik | Pazardzhik | Pazardzhik | Pazardzhik | Pazardzhik |
| Pernik | `0x46120000` | 42.583007328, 23.005433652 | ペルニク州 | Pernik | Pernik | Pernik | Pernik | Pernik | 佩尔尼克州 | 페르니크 주 | Pernik | Pernik | Перник | Pernik | Pernik | Pernik | Pernik | Pernik |
| Plovdiv | `0x46130000` | 42.13256788, 24.757757753 | プロブディフ州 | Plovdiv | Plovdiv | Plowdiw | Plovdiv | Plovdiv | 普罗夫迪夫州 | 플로브디브 주 | Plovdiv | Plovdiv | Пловдив | Plovdiv | Plovdiv | Plovdiv | Plovdiv | Plovdiv |
| Razgrad | `0x46140000` | 43.5333247, 26.53205457 | ラズグラド州 | Razgrad | Razgrad | Rasgrad | Razgrad | Razgrad | 拉兹格勒州 | 라즈그라드 주 | Razgrad | Razgrad | Разград | Razgrad | Razgrad | Razgrad | Razgrad | Razgrad |
| Ruse | `0x46150000` | 43.846435048000004, 25.966257133 | ルセ州 | Ruse | Roussé | Russe | Ruse | Ruse | 鲁塞州 | 루세 주 | Roese | Ruse | Русе | Ruse | Ruse | Ruse | Ruse | Ruse |
| Silistra | `0x46160000` | 44.082641100000004, 27.251661019 | シリストラ州 | Silistra | Silistra | Silistra | Silistra | Silistra | 锡利斯特拉州 | 실리스트라 주 | Silistra | Silistra | Силистра | Silistra | Silistra | Silistra | Silistra | Silistra |
| Sliven | `0x46170000` | 42.687377444, 26.328806947 | スリベン州 | Sliven | Sliven | Sliwen | Sliven | Sliven | 斯利文州 | 슬리벤 주 | Sliven | Sliven | Сливен | Sliven | Sliven | Sliven | Sliven | Sliven |
| Smolyan | `0x46180000` | 41.58325148, 24.697332784 | スモリャン州 | Smolyan | Smolyan | Smoljan | Smoljan | Smolyan | 斯莫梁州 | 스몰랸 주 | Smoljan | Smolyan | Смолян | Smolyan | Smolyan | Smolyan | Smolyan | Smolyan |
| Stara Zagora | `0x46190000` | 42.423705572, 25.636666393 | スタラ・ザゴラ州 | Stara Zagora | Stara Zagora | Stara Sagora | Stara Zagora | Stara Zagora | 旧扎戈拉州 | 스타라자고라 주 | Stara Zagora | Stara Zagora | Стара-Загора | Stara Zagora | Stara Zagora | Stara Zagora | Stara Zagora | Stara Zagora |
| Shumen | `0x461A0000` | 43.269652828, 26.922070279 | シュメン州 | Shumen | Choumen | Schumen | Shumen | Shumen | 舒门州 | 슈멘 주 | Sjoemen | Shumen | Шумен | Shumen | Shumen | Shumen | Shumen | Shumen |
| Targovishte | `0x461B0000` | 43.247680172, 26.570506823 | トゥルゴビシュテ州 | Targovishte | Targovichte | Targowischte | Targovishte | Targovishte | 特尔戈维什特州 | 투르고비슈테 주 | Targovisjte | Targovishte | Тырговиште | Targovishte | Targovishte | Targovishte | Targovishte | Targovishte |
| Veliko Tarnovo | `0x461C0000` | 43.082885252, 25.631173214 | ベリコ・トゥルノボ州 | Veliko Tarnovo | Veliko Tarnovo | Weliko Tarnowo | Veliko Tarnovo | Veliko Tarnovo | 大特尔诺沃州 | 벨리코투르노보 주 | Veliko Tarnovo | Veliko Tarnovo | Велико-Тырново | Veliko Tarnovo | Veliko Tarnovo | Veliko Tarnovo | Veliko Tarnovo | Veliko Tarnovo |
| Vratsa | `0x461D0000` | 43.20373486, 23.549258373 | ブラツァ州 | Vratsa | Vratsa | Wraza | Vratsa | Vratsa | 弗拉察州 | 브라차 주 | Vratsa | Vratsa | Враца | Vratsa | Vratsa | Vratsa | Vratsa | Vratsa |

# Croatia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x47` | HR | クロアチア | Croatia | Croatie | Kroatien | Croazia | Croacia | 克罗地亚 | 크로아티아 | Kroatië | Croácia | Хорватия | Croatia | Croatia | Croatia | Croatia | Croatia |

## Croatia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x47000000` | 45.81298776, 15.979657711 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Zagreb | `0x47060000` | 45.81298776, 15.979657711 | ザグレブ直轄市 | Zagreb | Zagreb (ville) | Zagreb (Stadt) | Zagabria | Ciudad de Zagreb | 萨格勒布市 | 자그레브 | Zagreb (stad) | Zagreb (cidade) | Загреб | Zagreb | Zagreb | Zagreb | Zagreb | Zagreb |
| Bjelovar-Bilogora County | `0x47070000` | 45.89538522, 16.831100456 | ビェロヴァル＝ビロゴラ郡 | Bjelovar-Bilogora County | Bjelovar-Bilogora | Bjelovar-Bilogora | Regione di Bjelovar e della Bilogora | Condado de Bjelovar-Bilogora | 别洛瓦尔-比洛戈拉县 | 벨로바르-빌로고라 군 | Bjelovar-Bilogora | Bjelovar-Bilogora (condado) | Беловарско-Билогорская жупания | Bjelovar-Bilogora County | Bjelovar-Bilogora County | Bjelovar-Bilogora County | Bjelovar-Bilogora County | Bjelovar-Bilogora County |
| Brod-Posavina County | `0x47080000` | 45.164794408, 18.012133941 | ブロド＝ポサヴィナ郡 | Brod-Posavina County | Brod-Posavina | Brod-Posavina | Regione di Brod e della Posavina | Condado de Brod-Posavina | 布罗德-波萨维纳县 | 브로드-포사비나 군 | Brod-Posavina | Brod-Posavina (condado) | Бродско-Посавская жупания | Brod-Posavina County | Brod-Posavina County | Brod-Posavina County | Brod-Posavina County | Brod-Posavina County |
| Dubrovnik-Neretva County | `0x47090000` | 42.637938968, 18.105517984 | ドゥブロヴニク＝ネレトヴァ郡 | Dubrovnik-Neretva County | Dubrovnik-Neretva | Dubrovnik-Neretva | Regione Raguseo-Narentana | Condado de Dubrovnik-Neretva | 杜布罗夫斯克-内雷特瓦县 | 두브로브니크-네레트바 군 | Dubrovnik-Neretva | Dubrovnik-Neretva (condado) | Дубровницко-Неретванская жупания | Dubrovnik-Neretva County | Dubrovnik-Neretva County | Dubrovnik-Neretva County | Dubrovnik-Neretva County | Dubrovnik-Neretva County |
| Istria County | `0x470A0000` | 45.230712376, 13.930701943999999 | イストラ郡 | Istria County | Istrie | Istrien | Regione Istriana | Condado de Istria | 伊斯特拉县 | 이스트라 군 | Istrië | Istria (condado) | Истрийская жупания | Istria County | Istria County | Istria County | Istria County | Istria County |
| Karlovac County | `0x470B0000` | 45.477904756, 15.54569657 | カルロヴァツ郡 | Karlovac County | Karlovac | Karlovac | Regione di Karlovac | Condado de Karlovac | 卡尔洛瓦茨县 | 카를로바츠 군 | Karlovac | Karlovac (condado) | Карловацкая жупания | Karlovac County | Karlovac County | Karlovac County | Karlovac County | Karlovac County |
| Koprivnica-Križevci County | `0x470C0000` | 46.148070764, 16.814620919 | コプリヴニツァ＝クリジェヴツィ郡 | Koprivnica-Križevci County | Koprivnica-Križevci | Koprivnica-Križevci | Regione di Koprivnica e Križevci | Condado de Koprivnica-Križevci | 科普里夫尼察-克里热夫齐县 | 코프리브니차-크리제브치 군 | Koprivnica-Križevci | Koprivnica-Križevci (condado) | Копривницко-Крижевацкая жупания | Koprivnica-Križevci County | Koprivnica-Križevci County | Koprivnica-Križevci County | Koprivnica-Križevci County | Koprivnica-Križevci County |
| Krapina-Zagorje County | `0x470D0000` | 46.164550256, 15.880780489 | クラピナ＝ザゴリエ郡 | Krapina-Zagorje County | Krapina-Zagorje | Krapina-Zagorje | Regione di Krapina e dello Zagorje | Condado de Krapina-Zagorje | 克拉皮纳-扎戈列县 | 크라피나-자고례 군 | Krapina-Zagorje | Krapina-Zagorje (condado) | Крапинско-Загорская жупания | Krapina-Zagorje County | Krapina-Zagorje County | Krapina-Zagorje County | Krapina-Zagorje County | Krapina-Zagorje County |
| Lika-Senj County | `0x470E0000` | 44.538573712, 15.369914842 | リカ＝セニ郡 | Lika-Senj County | Lika-Senj | Lika-Senj | Regione della Lika e di Segna | Condado de Lika-Senj | 利卡-塞尼县 | 리카-센 군 | Lika-Senj | Lika-Senj (condado) | Лицко-Сеньская жупания | Lika-Senj County | Lika-Senj County | Lika-Senj County | Lika-Senj County | Lika-Senj County |
| Međimurje County | `0x470F0000` | 46.384276816, 16.430098389 | メジムリェ郡 | Međimurje County | Međimurje | Medimurje | Regione del Medjimurje | Condado de Medimurje | 梅吉穆列县 | 메지무례 군 | Medimurje | Medimurje (condado) | Меджимурская жупания | Međimurje County | Međimurje County | Međimurje County | Međimurje County | Međimurje County |
| Osijek-Baranja County | `0x47100000` | 45.554809052, 18.6768086 | オシエク＝バラニャ郡 | Osijek-Baranja County | Osijek-Baranja | Osijek-Baranja | Regione di Osijek e della Baranja | Condado de Osijek-Baranja | 奥西耶克-巴拉尼亚县 | 오시예크-바라냐 군 | Osijek-Baranja | Osijek-Baranja (condado) | Осиецко-Бараньская жупания | Osijek-Baranja County | Osijek-Baranja County | Osijek-Baranja County | Osijek-Baranja County | Osijek-Baranja County |
| Požega-Slavonia County | `0x47110000` | 45.335082492, 17.68803638 | ポジェガ＝スラヴォニア郡 | Požega-Slavonia County | Požega-Slavonie | Požega-Slawonien | Regione di Požega e della Slavonia | Condado de Požega-Eslavonia | 波热加-斯拉沃尼亚县 | 포제가-슬라보니아 군 | Požega-Slavonië | Pozega-Slavonia (condado) | Пожежско-Славонская жупания | Požega-Slavonia County | Požega-Slavonia County | Požega-Slavonia County | Požega-Slavonia County | Požega-Slavonia County |
| Primorje-Gorski Kotar County | `0x47120000` | 45.313109836, 14.414101696 | プリモリェ＝ゴルスキ・コタル郡 | Primorje-Gorski Kotar County | Primorje-Gorski Kotar | Primorje-Gorski kotar | Regione Litoraneo-Montana | Condado de Primorje-Gorski Kotar | 滨海和山区县 | 프리모례-고르스키코타르 군 | Primorje-Gorski Kotar | Primorje-Gorski Kotar (condado) | Приморско-Горанская жупания | Primorje-Gorski Kotar County | Primorje-Gorski Kotar County | Primorje-Gorski Kotar County | Primorje-Gorski Kotar County | Primorje-Gorski Kotar County |
| Sisak-Moslavina County | `0x47130000` | 45.461425264, 16.380659778 | シサク＝モスラヴィナ郡 | Sisak-Moslavina County | Sisak-Moslavina | Sisak-Moslavina | Regione di Sisak e della Moslavina | Condado de Sisak-Moslavina | 锡萨克-莫斯拉维纳县 | 시사크-모슬라비나 군 | Sisak-Moslavina | Sisak-Moslavina (condado) | Сисацко-Мославинская жупания | Sisak-Moslavina County | Sisak-Moslavina County | ᑻ۱埣ἴk-Moslavina County | Sisak-Moslavina County | Sisak-Moslavina County |
| Split-Dalmatia County | `0x47140000` | 43.494872552, 16.430098389 | スプリト＝ダルマチア郡 | Split-Dalmatia County | Split-Dalmatie | Split-Dalmatien | Regione Spalatino-Dalmata | Condado de Split-Dalmacia | 斯普利特-达尔马提亚县 | 스플리트-달마티아 군 | Split-Dalmatië | Split-Dalmácia (condado) | Сплитско-Далматинская жупания | Split-Dalmatia County | Split-Dalmatia County | Split-Dalmatia County | Split-Dalmatia County | Split-Dalmatia County |
| Šibenik-Knin County | `0x47150000` | 43.731078604, 15.886273668 | シベニク＝クニン郡 | Šibenik-Knin County | Šibenik-Knin | Šibenik-Knin | Regione di Sebenico e Tenin | Condado de Šibenik-Knin | 希贝尼克-克宁县 | 시베니크-크닌 군 | Šibenik-Knin | Šibenik-Knin (condado) | Шибенско-Книнская жупания | Šibenik-Knin County | Šibenik-Knin County | Šibenik-Knin County | Šibenik-Knin County | Šibenik-Knin County |
| Varaždin County | `0x47160000` | 46.296386192, 16.331221167 | ヴァラジュディン郡 | Varaždin County | Varaždin | Varaždin | Regione di Varasdino | Condado de Varaždin | 瓦拉日丁县 | 바라주딘 군 | Varaždin | Varaždin (condado) | Вараждинская жупания | Varaždin County | Varaždin County | Varaždin County | Varaždin County | Varaždin County |
| Virovitica-Podravina County | `0x47170000` | 45.829467252, 17.380418356 | ヴィロヴィティツァ＝ポドラヴィナ郡 | Virovitica-Podravina County | Virovitica-Podravina | Virovitica-Podravina | Regione di Virovitica e della Podravina | Condado de Virovitica-Podravina | 维罗维蒂察-波德拉维纳县 | 비로비티차-포드라비나 군 | Virovitica-Podravina | Virovitica-Podravina (condado) | Вировитицко-Подравская жупания | Virovitica-Podravina County | Virovitica-Podravina County | Virovitica-Podravina County | Virovitica-Podravina County | Virovitica-Podravina County |
| Vukovar-Syrmia County | `0x47180000` | 45.34606882, 18.995412982 | ヴコヴァル＝スリイェム郡 | Vukovar-Syrmia County | Vukovar-Syrmie | Vukovar-Srijem | Regione di Vukovar e della Sirmia | Condado de Vukovar-Srijem | 武科瓦尔-斯里耶姆县 | 부코바르-시르미아 군 | Vukovar-Srijem | Vukovar-Srijem (condado) | Вуковарско-Сремская жупания | Vukovar-Syrmia County | Vukovar-Syrmia County | Vukovar-Syrmia County | Vukovar-Syrmia County | Vukovar-Syrmia County |
| Zadar County | `0x47190000` | 44.11010692, 15.227092188 | ザダル郡 | Zadar County | Zadar | Zadar | Regione Zaratina | Condado de Zadar | 扎达尔县 | 자다르 군 | Zadar | Zadar (condado) | Задарская жупания | Zadar County | Zadar County | Zadar County | Zadar County | Zadar County |
| Zagreb County | `0x471A0000` | 45.81298776, 15.979657711 | ザグレブ郡 | Zagreb County | Zagreb (comitat) | Zagreb | Regione Zagabrese | Condado de Zagreb | 萨格勒布县 | 자그레브 군 | Zagreb (provincie) | Zagrebe (condado) | Загребская жупания | Zagreb County | Zagreb County | Zagreb County | Zagreb County | Zagreb County |

# Cyprus
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x48` | CY | キプロス | Cyprus | Chypre | Zypern | Cipro | Chipre | 塞浦路斯 | 키프로스 | Cyprus | Chipre | Кипр | Cyprus | Cyprus | Cyprus | Cyprus | Cyprus |

## Cyprus Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x48000000` | 35.161742764, 33.371062425 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Cyprus | `0x48010000` | 35.161742764, 33.371062425 | キプロス | Cyprus | Chypre | Zypern | Cipro | Chipre | 塞浦路斯 | 키프로스 | Cyprus | Chipre | Кипр | Cyprus | Cyprus | Cyprus | Cyprus | Cyprus |

# Czech Republic
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x49` | CZ | チェコ | Czech Republic | République tchèque | Tschechische Republik | Repubblica Ceca | República Checa | 捷克共和国 | 체코 | Tsjechië | República Checa | Чешская Республика | Czech Republic | Czech Republic | Czech Republic | Czech Republic | Czech Republic |

## Czech Republic Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x49000000` | 50.07018986, 14.430581233 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Prague | `0x49020000` | 50.07018986, 14.430581233 | プラハ | Prague | Prague | Prag | Praga | Praga | 布拉格市 | 프라하 | Praag | Praga | Прага | Prague | Prague | Prague | Prague | Prague |
| Central Bohemian Region | `0x49030000` | 50.07018986, 14.430581233 | 中部ボヘミア地方 | Central Bohemian Region | Bohême centrale | Mittelböhmische Region | Boemia Centrale | Región de Bohemia Central | 中捷克州 | 스트르제도체스키 지방 | Midden-Bohemen | Boémia Central (região) | Среднечешский край | Central Bohemian Region | Central Bohemian Region | Central Bohemian Region | Central Bohemian Region | Central Bohemian Region |
| South Bohemian Region | `0x49040000` | 48.97155706, 14.469033486 | 南ボヘミア地方 | South Bohemian Region | Bohême du Sud | Südböhmische Region | Boemia Meridionale | Región de Bohemia Meridional | 南捷克州 | 이호체스키 지방 | Zuid-Bohemen | Boémia do Sul (região) | Южночешский край | South Bohemian Region | South Bohemian Region | South Bohemian Region | South Bohemian Region | South Bohemian Region |
| Plzeň Region | `0x49050000` | 49.735106856, 13.370397686 | プルゼニ地方 | Plzeň Region | Région de Pilsen | Region Pilsen | Regione di Plseň | Región de Pilsen | 比尔森州 | 플젠 지방 | Pilsen | Plzen (região) | Пльзенский край | Plzeň Region | Plzeň Region | Plzeň Region | Plzeň Region | Plzeň Region |
| Karlovy Vary Region | `0x49060000` | 50.223998452000004, 12.870518397 | カールスバート地方 | Karlovy Vary Region | Région de Karlovy Vary | Region Karlsbad | Regione di Karlovy Vary | Región de Karlovy Vary | 卡罗维发利州 | 카를로비바리 지방 | Karlsbad | Karlovy Vary (região) | Карловарский край | Karlovy Vary Region | Karlovy Vary Region | Karlovy Vary Region | Karlovy Vary Region | Karlovy Vary Region |
| Ústí nad Labem Region | `0x49070000` | 50.668944736, 14.084510955999999 | ウースチー・ナド・ラベム地方 | Ústí nad Labem Region | Région d'Ústí nad Labem | Region Ústí | Regione di Ústí nad Labem | Región de Ústí nad Labem | 拉贝河畔乌斯季州 | 우스티나트라벰 지방 | Ústí nad Labem | Ústí nad Labem (região) | Устецкий край | Ústí nad Labem Region | Ústí nad Labem Region | Ústí nad Labem Region | Ústí nad Labem Region | Ústí nad Labem Region |
| Liberec Region | `0x49080000` | 50.756835360000004, 15.040324102 | リベレツ地方 | Liberec Region | Région de Liberec | Region Liberec | Regione di Liberec | Región de Liberec | 利贝雷克州 | 리베레츠 지방 | Liberec | Liberec (região) | Либерецкий край | Liberec Region | Liberec Region | Liberec Region | Liberec Region | Liberec Region |
| Hradec Králové Region | `0x49090000` | 50.202025796, 15.803875983 | フラデツ・クラロベ地方 | Hradec Králové Region | Région de Hradec Králové | Region Hradec Králové | Regione di Hradec Králové | Región de Hradec Králové | 赫拉德茨-克拉洛韦州 | 흐라데츠크랄로베 지방 | Hradec Králové | Hradec Králové (região) | Краловеградецкий край | Hradec Králové Region | Hradec Králové Region | Hradec Králové Region | Hradec Králové Region | Hradec Králové Region |
| Pardubice Region | `0x490A0000` | 50.020751384, 15.76542373 | パルドゥビツェ地方 | Pardubice Region | Région de Pardubice | Region Pardubice | Regione di Pardubice | Región de Pardubice | 帕尔杜比采州 | 파르두비체 지방 | Pardubice | Pardubice (região) | Пардубицкий край | Pardubice Region | Pardubice Region | Pardubice Region | Pardubice Region | Pardubice Region |
| Olomouc Region | `0x490B0000` | 49.586791428, 17.254075239 | オロモウツ地方 | Olomouc Region | Région d'Olomouc | Region Olmütz | Regione di Olomouc | Región de Olomouc | 奥洛穆茨州 | 올로모우츠 지방 | Olomouc | Olomouc (região) | Оломоуцкий край | Olomouc Region | Olomouc Region | Olomouc Region | Olomouc Region | Olomouc Region |
| Moravian-Silesian Region | `0x490C0000` | 49.817504316, 18.253833817 | モラビア・シレジア地方 | Moravian-Silesian Region | Moravie-Silésie | Region Mährisch-Schlesien | Regione di Moravia-Slesia | Región de Moravia-Silesia | 摩拉维亚-西里西亚州 | 모라비아실레지아 지방 | Moravië-Silezië | Morávia-Silésia (região) | Моравскосилезский край | Moravian-Silesian Region | Moravian-Silesian Region | Moravian-Silesian Region | Moravian-Silesian Region | Moravian-Silesian Region |
| South Moravian Region | `0x490D0000` | 49.196776784, 16.605880116999998 | 南モラビア地方 | South Moravian Region | Moravie du Sud | Südmährische Region | Moravia Meridionale | Región de Moravia Meridional | 南摩拉维亚州 | 이호모라프스키 지방 | Zuid-Moravië | Morávia do Sul (região) | Южноморавский край | South Moravian Region | South Moravian Region | South Moravian Region | South Moravian Region | South Moravian Region |
| Zlín Region | `0x490E0000` | 49.21874944, 17.649584127 | ズリン地方 | Zlín Region | Région de Zlín | Region Zlin | Regione di Zlín | Región de Zlín | 兹林州 | 즐린 지방 | Zlín | Zlín (região) | Злинский край | Zlín Region | Zlín Region | Zlín Region | Zlín Region | Zlín Region |
| Vysočina Region | `0x490F0000` | 49.389037524, 15.584148823 | ヴィソチナ地方 | Vysočina Region | Vysočina | Region Vysočina | Regione di Vysočina | Región de Vysočina | 维索基纳州 | 비소치나 지방 | Vysočina | Vysočina (região) | Край Высочина | Vysočina Region | Vysočina Region | Vysočina Region | Vysočina Region | Vysočina Region |

# Denmark (Kingdom of)
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x4A` | DK | デンマーク | Denmark (Kingdom of) | Danemark (Royaume) | Dänemark (Königreich) | Danimarca (Regno di) | Dinamarca (Reino) | 丹麦 | 덴마크 | Denemarken (koninkrijk) | Dinamarca (Reino) | Дания (Королевство) | Denmark (Kingdom of) | Denmark (Kingdom of) | Denmark (Kingdom of) | Denmark (Kingdom of) | Denmark (Kingdom of) |

## Denmark (Kingdom of) Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x4A000000` | 55.931395848, 12.315707318 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Greenland | `0x4A120000` | 64.182128176, -51.71779081299999 | グリーンランド | Greenland | Groenland | Grönland | Groenlandia | Groenlandia | 格陵兰 | 그린란드 | Groenland | Gronelândia | Гренландия | Greenland | Greenland | Greenland | Greenland | Greenland |
| Capital Region of Denmark | `0x4A130000` | 55.931395848, 12.315707318 | デンマーク首都地域 | Capital Region of Denmark | Hovedstaden | Hauptstadtregion | Hovedstaden | Hovedstaden | 首都大区 | 덴마크 수도권 지역 | Hovedstaden | Hovedstaden | Столичная область | Capital Region of Denmark | Capital Region of Denmark | Capital Region of Denmark | Capital Region of Denmark | Capital Region of Denmark |
| Central Denmark Region | `0x4A140000` | 56.447753264, 9.398829269 | 中央ユラン地域 | Central Denmark Region | Jutland-Central | Mitteljütland | Jutland Centrale | Jutlandia Central | 中日德兰大区 | 중부 덴마크 지역 | Midden-Jutland | Jutlândia Central | Центральная Ютландия | Central Denmark Region | Central Denmark Region | Central Denmark Region | Central Denmark Region | Central Denmark Region |
| North Denmark Region | `0x4A150000` | 57.04650814, 9.915188095 | 北ユラン地域 | North Denmark Region | Jutland-du-Nord | Nordjütland | Jutland Settentrionale | Jutlandia Septentrional | 北日德兰大区 | 북부 덴마크 지역 | Noord-Jutland | Jutlândia do Norte | Северная Ютландия | North Denmark Region | North Denmark Region | North Denmark Region | North Denmark Region | North Denmark Region |
| Region Zealand | `0x4A160000` | 55.431517924, 11.563141795 | シェラン地域 | Region Zealand | Zélande-du-Nord | Seeland | Sjælland | Selandia | 西兰大区 | 셸란 지역 | Seeland | Zelândia | Зеландия | Region Zealand | Region Zealand | Region Zealand | Region Zealand | Region Zealand |
| Region of Southern Denmark | `0x4A170000` | 55.711669288, 9.530665565 | 南デンマーク地域 | Region of Southern Denmark | Danemark-du-Sud | Süddänemark | Syddanmark | Dinamarca Meridional | 南丹麦大区 | 남부 덴마크 지역 | Zuid-Denemarken | Dinamarca do Sul | Южная Дания | Region of Southern Denmark | Region of Southern Denmark | Region of Southern Denmark | Region of Southern Denmark | 씒⭤ꥠ軷on of Southern Denmark |
| Faroe Islands | `0x4A180000` | 62.006835232, -6.761613877000002 | フェロー諸島 | Faroe Islands | Îles Féroé | Färöer | Isole Fær Øer | Islas Feroe | 法罗群岛 | 페로 제도 | Faeröer | Ilhas Faroé | Фарерские острова | Faroe Islands | Faroe Islands | Faroe Islands | Faroe Islands | Faroe Islands |

# Estonia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x4B` | EE | エストニア | Estonia | Estonie | Estland | Estonia | Estonia | 爱沙尼亚 | 에스토니아 | Estland | Estónia | Эстония | Estonia | Estonia | Estonia | Estonia | Estonia |

## Estonia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x4B000000` | 59.430541316, 24.730291858 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Estonia | `0x4B010000` | 59.430541316, 24.730291858 | エストニア | Estonia | Estonie | Estland | Estonia | Estonia | 爱沙尼亚 | 에스토니아 | Estland | Estónia | Эстония | Estonia | Estonia | Estonia | Estonia | Estonia |

# Finland
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x4C` | FI | フィンランド | Finland | Finlande | Finnland | Finlandia | Finlandia | 芬兰 | 핀란드 | Finland | Finlândia | Финляндия | Finland | Finland | Finland | Finland | Finland |

## Finland Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x4C000000` | 60.166625292, 24.933539481 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Uusimaa / Nyland | `0x4C080000` | 60.166625292, 24.933539481 | ウーシマー県 | Uusimaa / Nyland | Uusimaa | Uusimaa | Uusimaa | Uusimaa | 新地区 | 우시마 주 | Uusimaa | Uusimaa | Уусимаа | Uusimaa / Nyland | Uusimaa / Nyland | Uusimaa / Nyland | Uusimaa / Nyland | Uusimaa / Nyland |
| Lappi / Lapland | `0x4C090000` | 66.49475022, 25.730050436 | ラッピ州 | Lappi / Lapland | Laponie | Lappland | Lapponia | Laponia finlandesa | 拉普兰省 | 라피 주 | Lapland | Lapónia | Лапландия | Lappi / Lapland | Lappi / Lapland | Lappi / Lapland | Lappi / Lapland | Lappi / Lapland |
| Pohjois-Pohjanmaa / Norra Österbotten | `0x4C0A0000` | 65.01159594, 25.466377844 | 北ポフヤンマー県 | Pohjois-Pohjanmaa / Norra Österbotten | Ostrobotnie du Nord | Nordösterbotten | Ostrobotnia Settentrionale | Ostrobothnia del Norte | 北博滕区 | 북오스트로보트니아 주 | Noord-Österbotten | Ostrobótnia do Norte | Северная Остроботния | Pohjois-Pohjanmaa / Norra Österbotten | Pohjois-Pohjanmaa / Norra Österbotten | Pohjois-Pohjanmaa / Norra Österbotten | Pohjois-Pohjanmaa / Norra Österbotten | Pohjois-Pohjanmaa / Norra Österbotten |
| Kainuu / Kajanaland | `0x4C0B0000` | 64.220580324, 27.729567592 | カイヌー県 | Kainuu / Kajanaland | Kainuu | Kainuu | Kainuu | Kainuu | 凯努区 | 카이누 주 | Kainuu | Kainuu | Кайнуу | Kainuu / Kajanaland | Kainuu / Kajanaland | Kainuu / Kajanaland | Kainuu / Kajanaland | Kainuu / Kajanaland |
| Pohjois-Karjala / Norra Karelen | `0x4C0C0000` | 62.59460378, 29.745564285 | 北カレリア県 | Pohjois-Karjala / Norra Karelen | Carélie du Nord | Nordkarelien | Carelia Settentrionale | Karelia del Norte | 北卡累利阿区 | 북카렐리아 주 | Noord-Karelië | Carélia do Norte | Северная Карелия | Pohjois-Karjala / Norra Karelen | Pohjois-Karjala / Norra Karelen | Pohjois-Karjala / Norra Karelen | Pohjois-Karjala / Norra Karelen | Pohjois-Karjala / Norra Karelen |
| Pohjois-Savo / Norra Savolax | `0x4C0D0000` | 62.891234636, 27.674635802 | 北サヴォ県 | Pohjois-Savo / Norra Savolax | Savonie du Nord | Nordsavo | Savo Settentrionale | Savonia del Norte | 北萨沃区 | 북사보 주 | Noord-Savo | Savónia do Norte | Северное Саво | Pohjois-Savo / Norra Savolax | Pohjois-Savo / Norra Savolax | Pohjois-Savo / Norra Savolax | Pohjois-Savo / Norra Savolax | Pohjois-Savo / Norra Savolax |
| Etelä-Savo / Södra Savolax | `0x4C0E0000` | 61.682738556000004, 27.262647377 | 南サヴォ県 | Etelä-Savo / Södra Savolax | Savonie du Sud | Südsavo | Savo Meridionale | Savonia del Sur | 南萨沃区 | 남사보 주 | Zuid-Savo | Savónia do Sul | Южное Саво | Etelä-Savo / Södra Savolax | Etelä-Savo / Södra Savolax | Etelä-Savo / Södra Savolax | Etelä-Savo / Södra Savolax | Etelä-Savo / Södra Savolax |
| Etelä-Pohjanmaa / Södra Österbotten | `0x4C0F0000` | 62.78686452, 22.840638282 | 南ポフヤンマー県 | Etelä-Pohjanmaa / Södra Österbotten | Ostrobotnie du Sud | Südösterbotten | Ostrobotnia Meridionale | Ostrobothnia del Sur | 南博滕区 | 남오스트로보트니아 주 | Zuid-Österbotten | Ostrobótnia do Sul | Южная Остроботния | Etelä-Pohjanmaa / Södra Österbotten | Etelä-Pohjanmaa / Södra Österbotten | Etelä-Pohjanmaa / Södra Österbotten | Etelä-Pohjanmaa / Södra Österbotten | Etelä-Pohjanmaa / Södra Österbotten |
| Pohjanmaa / Österbotten | `0x4C100000` | 63.08898854, 21.308041341 | ポフヤンマー県 | Pohjanmaa / Österbotten | Ostrobotnie | Österbotten | Ostrobotnia | Ostrobothnia | 博滕区 | 오스트로보트니아 주 | Österbotten | Ostrobótnia | Остроботния | Pohjanmaa / Österbotten | Pohjanmaa / Österbotten | Pohjanmaa / Österbotten | Pohjanmaa / Österbotten | Pohjanmaa / Österbotten |
| Pirkanmaa / Birkaland | `0x4C110000` | 61.49597098, 23.763492354 | ピルカンマー県 | Pirkanmaa / Birkaland | Pirkanmaa | Pirkanmaa | Pirkanmaa | Pirkanmaa | 皮尔卡区 | 피르칸마 주 | Pirkanmaa | Pirkanmaa | Пирканмаа | Pirkanmaa / Birkaland | Pirkanmaa / Birkaland | Pirkanmaa / Birkaland | Pirkanmaa / Birkaland | Pirkanmaa / Birkaland |
| Satakunta / Satakunda | `0x4C120000` | 61.479491488, 21.796934272 | サタクンタ県 | Satakunta / Satakunda | Satakunta | Satakunta | Satakunta | Satakunta | 萨塔昆塔区 | 사타쿤타 주 | Satakunta | Satakunta | Сатакунта | Satakunta / Satakunda | Satakunta / Satakunda | Satakunta / Satakunda | Satakunta / Satakunda | Satakunta / Satakunda |
| Keski-Pohjanmaa / Mellersta Österbotten | `0x4C130000` | 63.836058844, 23.131776769 | 中部ポフヤンマー県 | Keski-Pohjanmaa / Mellersta Österbotten | Ostrobotnie-Centrale | Mittelösterbotten | Ostrobotnia Centrale | Ostrobothnia Central | 中博滕区 | 중앙오스트로보트니아 주 | Centraal-Österbotten | Ostrobótnia Central | Центральная Остроботния | Keski-Pohjanmaa / Mellersta Österbotten | Keski-Pohjanmaa / Mellersta Österbotten | Keski-Pohjanmaa / Mellersta Österbotten | Keski-Pohjanmaa / Mellersta Österbotten | Keski-Pohjanmaa / Mellersta Österbotten |
| Keski-Suomi / Mellersta Finland | `0x4C140000` | 62.23754812, 25.741036794 | 中央スオミ県 | Keski-Suomi / Mellersta Finland | Finlande-Centrale | Mittelfinnland | Finlandia Centrale | Finlandia Central | 中芬兰区 | 케스키수오미 주 | Centraal-Finland | Finlândia Central | Центральная Финляндия | Keski-Suomi / Mellersta Finland | Keski-Suomi / Mellersta Finland | Keski-Suomi / Mellersta Finland | Keski-Suomi / Mellersta Finland | Keski-Suomi / Mellersta Finland |
| Varsinais-Suomi / Egentliga Finland | `0x4C150000` | 60.446776656, 22.263854487 | ヴァルシナイス=スオミ県 | Varsinais-Suomi / Egentliga Finland | Finlande propre | Varsinais-Suomi | Finlandia Sud-Occidentale | Finlandia Propia | 西南芬兰区 | 바르시나이스수오미 주 | Varsinais-Suomi | Finlândia Própria | Собственно Финляндия | Varsinais-Suomi / Egentliga Finland | Varsinais-Suomi / Egentliga Finland | Varsinais-Suomi / Egentliga Finland | Varsinais-Suomi / Egentliga Finland | Varsinais-Suomi / Egentliga Finland |
| Etelä-Karjala / Södra Karelen | `0x4C160000` | 61.062011024, 28.18000827 | 南カレリア県 | Etelä-Karjala / Södra Karelen | Carélie du Sud | Südkarelien | Carelia Meridionale | Karelia del Sur | 南卡累利阿区 | 남카렐리아 주 | Zuid-Karelië | Carélia do Sul | Южная Карелия | Etelä-Karjala / Södra Karelen | Etelä-Karjala / Södra Karelen | Etelä-Karjala / Södra Karelen | Etelä-Karjala / Södra Karelen | Etelä-Karjala / Södra Karelen |
| Päijät-Häme / Päijänne Tavastland | `0x4C170000` | 60.979613564, 25.647652751 | パイヤト=ハメ県 | Päijät-Häme / Päijänne Tavastland | Päijät-Häme | Päijät-Häme | Päijät-Häme | Päijänne Tavastia | 派亚特海梅区 | 파이얏하메 주 | Päijät-Häme | Päijänne Tavastia | Пяйят-Хяме | Päijät-Häme / Päijänne Tavastland | Päijät-Häme / Päijänne Tavastland | Päijät-Häme / Päijänne Tavastland | Päijät-Häme / Päijänne Tavastland | Päijät-Häme / Päijänne Tavastland |
| Kanta-Häme / Egentliga Tavastland | `0x4C180000` | 60.996093056, 24.466619266 | カンタ=ハメ県 | Kanta-Häme / Egentliga Tavastland | Kanta-Häme | Kanta-Häme | Kanta-Häme | Tavastia Propia | 坎塔海梅区 | 칸타하메 주 | Kanta-Häme | Tavastia Própria | Канта-Хяме | Kanta-Häme / Egentliga Tavastland | Kanta-Häme / Egentliga Tavastland | Kanta-Häme / Egentliga Tavastland | Kanta-Häme / Egentliga Tavastland | Kanta-Häme / Egentliga Tavastland |
| Kymenlaakso / Kymmenedalen | `0x4C1A0000` | 60.86425712, 26.702343119 | キュメンラークソ県 | Kymenlaakso / Kymmenedalen | Vallée de la Kymi | Kymenlaakso | Kymenlaakso | Kymenlaakso | 屈米区 | 퀴멘락소 주 | Kymenlaakso | Kymenlaakso | Кюменлааксо | Kymenlaakso / Kymmenedalen | Kymenlaakso / Kymmenedalen | Kymenlaakso / Kymmenedalen | Kymenlaakso / Kymmenedalen | Kymenlaakso / Kymmenedalen |
| Ahvenanmaa / Åland | `0x4C1B0000` | 60.089720996, 19.934746591 | アハベナンマー州 | Ahvenanmaa / Åland | Åland | Åland | Isole Åland | Islas de Åland | 奥兰岛自治区 | 아베난마 주 | Åland | Ilhas de Åland | Аландские острова | Ahvenanmaa / Åland | Ahvenanmaa / Åland | Ahvenanmaa / Åland | Ahvenanmaa / Åland | Ahvenanmaa / Åland |

# France
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x4D` | FR | フランス | France | France | Frankreich | Francia | Francia | 法国 | 프랑스 | Frankrijk | França | Франция | France | France | France | France | France |

## France Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x4D000000` | 48.850707452, 2.345587433 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Île-de-France | `0x4D020000` | 48.850707452, 2.345587433 | イール・ド・フランス | Île-de-France | Île-de-France | Île-de-France | Île-de-France | Isla de Francia | 法兰西岛大区 | 일드프랑스 | Île-de-France | Ilha de França | Иль-де-Франс | Île-de-France | Île-de-France | Île-de-France | Île-de-France | Île-de-France |
| Alsace | `0x4D030000` | 48.581542416, 7.7398892109999995 | アルザス | Alsace | Alsace | Elsass | Alsazia | Alsacia | 阿尔萨斯大区 | 알자스 | Elzas | Alsácia | Эльзас | Alsace | Alsace | Alsace | Alsace | Alsace |
| Aquitaine | `0x4D040000` | 44.835204568, -0.5817875019999974 | アキテーヌ | Aquitaine | Aquitaine | Aquitanien | Aquitania | Aquitania | 阿基坦大区 | 아키텐 | Aquitanië | Aquitânia | Аквитания | Aquitaine | Aquitaine | Aquitaine | Aquitaine | Aquitaine |
| Auvergne | `0x4D050000` | 45.774535612, 3.081673419 | オーベルニュ | Auvergne | Auvergne | Auvergne | Alvernia | Auvernia | 奥弗涅大区 | 오베르뉴 | Auvergne | Auvérnia | Овернь | Auvergne | Auvergne | Auvergne | Auvergne | Auvergne |
| Lower Normandy | `0x4D060000` | 49.180297292, -0.356567162999994 | バス・ノルマンディ | Lower Normandy | Basse-Normandie | Basse-Normandie | Bassa Normandia | Baja Normandía | 下诺曼底大区 | 바스노르망디 | Laag-Normandië | Baixa Normandia | Нижняя Нормандия | Lower Normandy | Lower Normandy | Lower Normandy | Lower Normandy | Lower Normandy |
| Burgundy | `0x4D070000` | 47.318114696, 5.037245143 | ブルゴーニュ | Burgundy | Bourgogne | Burgund | Borgogna | Borgoña | 勃艮第大区 | 부르고뉴 | Bourgondië | Borgonha | Бургундия | Burgundy | Burgundy | Burgundy | Burgundy | Burgundy |
| Brittany | `0x4D080000` | 48.109130312, -1.6804233020000083 | ブルターニュ | Brittany | Bretagne | Bretagne | Bretagna | Bretaña | 布列塔尼大区 | 브르타뉴 | Bretagne | Bretanha | Бретань | Brittany | Brittany | Brittany | Brittany | Brittany |
| Centre | `0x4D090000` | 47.90039008, 1.900639934 | サントル | Centre | Centre | Centre | Centro | Centro | 中央大区 | 상트르 | Centre | Centro | Центр | Centre | Centre | Centre | Centre | Centre |
| Champagne-Ardenne | `0x4D0A0000` | 48.960570732, 4.361584126 | シャンパーニュ・アルデンヌ | Champagne-Ardenne | Champagne-Ardenne | Champagne-Ardenne | Champagne-Ardenne | Champaña-Ardenas | 香槟-阿登大区 | 샹파뉴아르덴 | Champagne-Ardennen | Champanha-Ardenas | Шампань-Арденны | Champagne-Ardenne | Champagne-Ardenne | Champagne-Ardenne | Champagne-Ardenne | Champagne-Ardenne |
| Corsica | `0x4D0B0000` | 41.918334484, 8.73415461 | コルシカ | Corsica | Corse | Korsika | Corsica | Córcega | 科西嘉大区 | 코르스 | Corsica | Córsega | Корсика | Corsica | Corsica | Corsica | Corsica | Corsica |
| Franche-Comté | `0x4D0C0000` | 47.235717236, 6.015031005 | フランシュ・コンテ | Franche-Comté | Franche-Comté | Franche-Comté | Franca Contea | Franco Condado | 弗朗什孔泰大区 | 프랑슈콩테 | Franche-Comté | Franco Condado | Франш-Конте | Franche-Comté | Franche-Comté | Franche-Comté | Franche-Comté | Franche-Comté |
| Upper Normandy | `0x4D0D0000` | 49.438476, 1.0986358 | オート・ノルマンディ | Upper Normandy | Haute-Normandie | Haute-Normandie | Alta Normandia | Alta Normandía | 上诺曼底大区 | 오트노르망디 | Hoog-Normandië | Alta Normandia | Верхняя Нормандия | Upper Normandy | Upper Normandy | Upper Normandy | Upper Normandy | Upper Normandy |
| Languedoc-Roussillon | `0x4D0E0000` | 43.604735832, 3.872691195 | ラングドック・ルシヨン | Languedoc-Roussillon | Languedoc-Roussillon | Languedoc-Roussillon | Linguadoca-Rossiglione | Languedoc-Rosellón | 朗格多克-鲁西永大区 | 랑그도크루시용 | Languedoc-Roussillon | Languedoque-Rossilhão | Лангедок-Руссильон | Languedoc-Roussillon | Languedoc-Roussillon | Languedoc-Roussillon | Languedoc-Roussillon | Languedoc-Roussillon |
| Limousin | `0x4D0F0000` | 45.829467252, 1.252444812 | リムーザン | Limousin | Limousin | Limousin | Limosino | Lemosín | 利穆赞大区 | 리무쟁 | Limousin | Limusino | Лимузен | Limousin | Limousin | Limousin | Limousin | Limousin |
| Lorraine | `0x4D100000` | 49.114379324, 6.168840017 | ロレーヌ | Lorraine | Lorraine | Lothringen | Lorena | Lorena | 洛林大区 | 로렌 | Lotharingen | Lorena | Лотарингия | Lorraine | Lorraine | Lorraine | Lorraine | Lorraine |
| Midi-Pyrénées | `0x4D110000` | 43.599242668, 1.433719719 | ミディ・ピレネー | Midi-Pyrénées | Midi-Pyrénées | Midi-Pyrénées | Mezzogiorno-Pirenei | Mediodía-Pirineos | 南部-比利牛斯大区 | 미디피레네 | Zuid-Frankrijk-Pyreneeën | Médio Pirenéus | Юг-Пиренеи | Midi-Pyrénées | Midi-Pyrénées | Midi-Pyrénées | Midi-Pyrénées | Midi-Pyrénées |
| Nord-Pas-de-Calais | `0x4D120000` | 50.630492588, 3.059700703 | ノール・パ・ド・カレー | Nord-Pas-de-Calais | Nord-Pas de Calais | Nord-Pas-de-Calais | Nord-Passo di Calais | Norte-Paso de Calais | 北部-加来海峡大区 | 노르파드칼레 | Noord-Nauw van Calais | Norte Pas de Calais | Нор-Па-де-Кале | Nord-Pas-de-Calais | Nord-Pas-de-Calais | Nord-Pas-de-Calais | Nord-Pas-de-Calais | Nord-Pas-de-Calais |
| Pays de la Loire | `0x4D130000` | 47.213744580000004, -1.548587005999991 | ペイ・ド・ラ・ロワール | Pays de la Loire | Pays de la Loire | Pays de la Loire | Paesi della Loira | Países del Loira | 卢瓦尔河地区 | 페이드라루아르 | Landen van de Loire | País do Loire | Земли Луары | Pays de la Loire | Pays de la Loire | Pays de la Loire | Pays de la Loire | Pays de la Loire |
| Picardy | `0x4D140000` | 49.883422284, 2.290655643 | ピカルディー | Picardy | Picardie | Picardie | Piccardia | Picardía | 皮卡第大区 | 피카르디 | Picardië | Picardia | Пикардия | Picardy | Picardy | Picardy | Picardy | Picardy |
| Poitou-Charentes | `0x4D150000` | 46.58203072, 0.335083919 | ポワトゥー・シャラント | Poitou-Charentes | Poitou-Charentes | Poitou-Charentes | Poitou-Charentes | Poitou-Charentes | 普瓦图-夏朗德大区 | 푸아투샤랑트 | Poitou-Charentes | Poitou-Charentes | Пуату-Шаранта | Poitou-Charentes | Poitou-Charentes | Poitou-Charentes | Poitou-Charentes | Poitou-Charentes |
| Provence-Alpes-Côte d'Azur | `0x4D160000` | 43.291625484, 5.372329062 | プロヴァンス・アルプ・コート・ダジュール | Provence-Alpes-Côte d'Azur | Provence-Alpes-Côte d'Azur | Provence-Alpes-Côte d'Azur | Provenza-Alpi-Costa Azzurra | Provenza-Alpes-Costa Azul | 普罗旺斯-阿尔卑斯-蓝色海岸大区 | 프로방스알프코트다쥐르 | Provence-Alpen-Côte d'Azur | Provença-Alpes-Costa Azul | Прованс-Альпы-Лазурный Берег | Provence-Alpes-Côte d'Azur | Provence-Alpes-Côte d'Azur | Provence-Alpes-Côte d'Azur | Provence-Alpes-Côte d'Azur | Provence-Alpes-Côte d'Azur |
| Rhône-Alpes | `0x4D170000` | 45.752562956, 4.828504341 | ローヌ・アルプ | Rhône-Alpes | Rhône-Alpes | Rhône-Alpes | Rodano-Alpi | Ródano-Alpes | 罗讷-阿尔卑斯大区 | 론알프 | Rhône-Alpen | Ródano-Alpes | Рона-Альпы | Rhône-Alpes | Rhône-Alpes | Rhône-Alpes | Rhône-Alpes | Rhône-Alpes |
| Guadeloupe | `0x4D180000` | 15.996093568000001, -61.715376593 | グアドループ | Guadeloupe | Guadeloupe | Guadeloupe | Guadalupa | Guadalupe | 瓜德罗普省 | 과들루프 | Guadeloupe | Guadalupe | Гваделупа | Guadeloupe | Guadeloupe | Guadeloupe | Guadeloupe | Guadeloupe |
| Martinique | `0x4D190000` | 14.600829912, -61.072674649999996 | マルチニーク | Martinique | Martinique | Martinique | Martinica | Martinica | 马提尼克省 | 마르티니크 | Martinique | Martinica | Мартиника | Martinique | Martinique | Martinique | Martinique | Martinique |
| French Guiana | `0x4D1A0000` | 4.932861272, -52.327533681999995 | フランス領ギアナ | French Guiana | Guyane | Französisch-Guayana | Guyana Francese | Guayana Francesa | 法属圭亚那省 | 프랑스령 기아나 | Frans-Guyana | Guiana Francesa | Французская Гвиана | French Guiana | French Guiana | French Guiana | French Guiana | French Guiana |
| Réunion | `0x4D1B0000` | -20.874024223999996, 55.448148826 | レユニオン | Réunion | Réunion | Réunion | Riunione | Reunión | 留尼汪省 | 레위니옹 | Réunion | Reunião | Реюньон | Réunion | Réunion | Réunion | Réunion | Réunion |
| Mayotte | `0x4D1C0000` | -12.777100488000002, 45.225342707 | マヨット島 | Mayotte | Mayotte | Mayotte | Mayotte | Mayotte | 马约特省 | 마요트 | Mayotte | Maiote | Майотта | Mayotte | Mayotte | Mayotte | Mayotte | Mayotte |

# Germany
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x4E` | DE | ドイツ | Germany | Allemagne | Deutschland | Germania | Alemania | 德国 | 독일 | Duitsland | Alemanha | Германия | Germany | Germany | Germany | Germany | Germany |

## Germany Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x4E000000` | 52.520141004, 13.40335676 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Berlin | `0x4E020000` | 52.520141004, 13.40335676 | ベルリン | Berlin | Berlin | Berlin | Berlino | Berlín | 柏林市 | 베를린 | Berlijn | Berlim | Берлин | Berlin | Berlin | Berlin | Berlin | Berlin |
| Hesse | `0x4E030000` | 50.07018986, 8.234275321 | ヘッセン州 | Hesse | Hesse | Hessen | Assia | Hesse | 黑森州 | 헤센 주 | Hessen | Hesse | Гессен | Hesse | Hesse | Hesse | Hesse | Hesse |
| Baden-Württemberg | `0x4E040000` | 48.768309992, 9.17360893 | バーデン・ビュルテンベルク州 | Baden-Württemberg | Bade-Wurtemberg | Baden-Württemberg | Baden-Württemberg | Baden-Wurtemberg | 巴登-符腾堡州 | 바덴뷔르템베르크 주 | Baden-Württemberg | Baden-Württemberg | Баден-Вюртемберг | Baden-Württemberg | Baden-Württemberg | Baden-Württemberg | Baden-Württemberg | Baden-Württemberg |
| Bavaria | `0x4E050000` | 48.131102968, 11.552155437 | バイエルン州 | Bavaria | Bavière | Bayern | Baviera | Baviera | 巴伐利亚州 | 바이에른 주 | Beieren | Baviera | Бавария | Bavaria | Bavaria | Bavaria | Bavaria | Bavaria |
| Brandenburg | `0x4E060000` | 52.388305068, 13.035313767 | ブランデンブルク州 | Brandenburg | Brandebourg | Brandenburg | Brandeburgo | Brandeburgo | 勃兰登堡州 | 브란덴부르크 주 | Brandenburg | Brandeburgo | Бранденбург | Brandenburg | Brandenburg | Brandenburg | Brandenburg | Brandenburg |
| Bremen | `0x4E070000` | 53.06396424, 8.805565937 | ブレーメン | Bremen | Brême | Bremen | Brema | Bremen | 不来梅市 | 브레멘 주 | Bremen | Bremen | Бремен | Bremen | Bremen | Bremen | Bremen | Bremen |
| Hamburg | `0x4E080000` | 53.547362672, 9.986599422 | ハンブルク | Hamburg | Hambourg | Hamburg | Amburgo | Hamburgo | 汉堡市 | 함부르크 주 | Hamburg | Hamburgo | Гамбург | Hamburg | Hamburg | Hamburg | Hamburg | Hamburg |
| Mecklenburg-Vorpommern | `0x4E090000` | 53.61328064, 11.414825962 | メクレンブルク・フォアポンメルン州 | Mecklenburg-Vorpommern | Mecklembourg-Poméranie antérieure | Mecklenburg-Vorpommern | Meclemburgo-Pomerania Anteriore | Mecklemburgo-Pomerania Occidental | 梅克伦堡-前波莫瑞州 | 메클렌부르크포어포메른 주 | Mecklenburg-Voor-Pommeren | Mecklemburgo-Pomerânia Ocidental | Мекленбург-Передняя Померания | Mecklenburg-Vorpommern | Mecklenburg-Vorpommern | Mecklenburg-Vorpommern | Mecklenburg-Vorpommern | Mecklenburg-Vorpommern |
| Lower Saxony | `0x4E0A0000` | 52.366332412, 9.733913188 | ニーダーザクセン州 | Lower Saxony | Basse-Saxe | Niedersachsen | Bassa Sassonia | Baja Sajonia | 下萨克森州 | 니더작센 주 | Nedersaksen | Baixa Saxónia | Нижняя Саксония | Lower Saxony | Lower Saxony | Lower Saxony | Lower Saxony | Lower Saxony |
| North Rhine-Westphalia | `0x4E0B0000` | 51.240233792, 6.773089707 | ノルトライン・ウェストファーレン州 | North Rhine-Westphalia | Rhénanie-du-Nord-Westphalie | Nordrhein-Westfalen | Renania Settentrionale-Vestfalia | Renania del Norte-Westfalia | 北莱茵-威斯特法伦州 | 노르트라인베스트팔렌 주 | Noord-Rijnland-Westfalen | Renânia do Norte-Vestefália | Северный Рейн-Вестфалия | North Rhine-Westphalia | North Rhine-Westphalia | North Rhine-Westphalia | North Rhine-Westphalia | North Rhine-Westphalia |
| Rhineland-Palatinate | `0x4E0C0000` | 49.998778728, 8.256248037 | ラインラント・ファルツ州 | Rhineland-Palatinate | Rhénanie-Palatinat | Rh쳐歮覀㞂ʮ∎d-Pfalz | Renania-Palatinato | Renania-Palatinado | 莱茵兰-普法尔茨州 | 라인란트팔츠 주 | Rijnland-Palts | Renânia-Palatinado | Рейнланд-Пфальц | Rhineland-Palatinate | Rhineland-Palatinate | Rhineland-Palatinate | Rhineland-Palatinate | Rhineland-Palatinate |
| Saarland | `0x4E0D0000` | 49.229735768, 6.998310046 | ザールラント州 | Saarland | Sarre | Saarland | Saarland | Sarre | 萨尔州 | 자를란트 주 | Saarland | Sarre | Саар | Saarland | Saarland | Saarland | Saarland | Saarland |
| Saxony | `0x4E0E0000` | 51.03149356, 13.7329475 | ザクセン州 | Saxony | Saxe | Sachsen | Sassonia | Sajonia | 萨克森州 | 작센 주 | Saksen | Saxónia | Саксония | Saxony | Saxony | Saxony | Saxony | Saxony |
| Saxony-Anhalt | `0x4E0F0000` | 52.124633196, 11.612580406 | ザクセン・アンハルト州 | Saxony-Anhalt | Saxe-Anhalt | Sachsen-Anhalt | Sassonia-Anhalt | Sajonia-Anhalt | 萨克森-安哈特州 | 작센안할트 주 | Saksen-Anhalt | Saxónia-Anhalt | Саксония-Анхальт | Saxony-Anhalt | Saxony-Anhalt | Saxony-Anhalt | Saxony-Anhalt | Saxony-Anhalt |
| Schleswig-Holstein | `0x4E100000` | 54.316405632, 10.118435718 | シュレスビヒ・ホルシュタイン州 | Schleswig-Holstein | Schleswig-Holstein | Schleswig-Holstein | Schleswig-Holstein | Schleswig-Holstein | 石勒苏益格-荷尔斯泰因州 | 슐레스비히홀슈타인 주 | Sleeswijk-Holstein | Schleswig-Holstein | Шлезвиг-Гольштейн | Schleswig-Holstein | Schleswig-Holstein | Schleswig-Holstein | Schleswig-Holstein | Schleswig-Holstein |
| Thuringia | `0x4E110000` | 50.971068756, 11.019317074 | テューリンゲン州 | Thuringia | Thuringe | Thüringen | Turingia | Turingia | 图林根州 | 튀링겐 주 | Thüringen | Turíngia | Тюрингия | Thuringia | Thuringia | Thuringia | Thuringia | Thuringia |

# Greece
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x4F` | GR | ギリシャ | Greece | Grèce | Griechenland | Grecia | Grecia | 希腊 | 그리스 | Griekenland | Grécia | Греция | Greece | Greece | Greece | Greece | Greece |

## Greece Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x4F000000` | 37.974242732, 23.719546922 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Attica | `0x4F020000` | 37.974242732, 23.719546922 | アッティカ | Attica | Attique | Attika | Attica | Ática | 阿提卡大区 | 아티카 | Attika | Ática | Аттика | Attica | Attica | Attica | Attica | Attica |
| Central Greece | `0x4F030000` | 38.89160112, 22.428649857 | 中央ギリシャ | Central Greece | Grèce-Centrale | Mittelgriechenland | Grecia Centrale | Grecia Central | 中希腊大区 | 중부 그리스 | Centraal-Griekenland | Grécia Central | Центральная Греция | Central Greece | Central Greece | Central Greece | Central Greece | Central Greece |
| Central Macedonia | `0x4F040000` | 40.616454616, 22.966981398999998 | 中央マケドニア | Central Macedonia | Macédoine-Centrale | Zentralmakedonien | Macedonia Centrale | Macedonia Central | 中马其顿大区 | 중부 마케도니아 | Centraal-Macedonië | Macedónia Central | Центральная Македония | Central Macedonia | Central Macedonia | Central Macedonia | Central Macedonia | Central Macedonia |
| Crete | `0x4F050000` | 35.332030848, 25.131293925 | クレタ | Crete | Crète | Kreta | Creta | Creta | 克里特大区 | 크레타 | Kreta | Creta | Крит | Crete | Crete | Crete | Crete | Crete |
| East Macedonia and Thrace | `0x4F060000` | 41.121825704, 25.416939233 | 東マケドニア・トラキア | East Macedonia and Thrace | Macédoine-Orientale-et-Thrace | Ostmakedonien und Thrakien | Macedonia Orientale e Tracia | Macedonia Oriental y Tracia | 东马其顿和色雷斯大区 | 동부 마케도니아트라키아 | Oost-Macedonië en Thracië | Macedónia Oriental e Trácia | Восточная Македония и Фракия | East Macedonia and Thrace | East Macedonia and Thrace | East Macedonia and Thrace | East Macedonia and Thrace | East Macedonia and Thrace |
| Epirus | `0x4F070000` | 39.649657752, 20.846614305 | イピロス | Epirus | Épire | Epirus | Epiro | Epiro | 伊庇鲁斯大区 | 에피루스 | Epirus | Epiro | Эпир | Epirus | Epirus | Epirus | Epirus | Epirus |
| Ionian Islands | `0x4F080000` | 39.616698768, 19.912773875 | イオニア | Ionian Islands | Îles Ioniennes | Ionische Inseln | Isole Ionie | Islas Jónicas | 爱奥尼亚群岛大区 | 이오니아 제도 | Ionische Eilanden | Ilhas Jónicas | Ионические острова | Ionian Islands | Ionian Islands | Ionian Islands | Ionian Islands | Ionian Islands |
| North Aegean | `0x4F090000` | 39.100341352, 26.548534107 | 北エーゲ | North Aegean | Égée-Septentrionale | Nördliche Ägäis | Egeo Settentrionale | Egeo Septentrional | 北爱琴海大区 | 북부 에게 | Noord-Egeïsche Eilanden | Egeu Setentrional | Северные Эгейские острова | North Aegean | North Aegean | North Aegean | North Aegean | North Aegean |
| Peloponnese | `0x4F0A0000` | 37.501830628, 22.362731709 | ペロポネソス | Peloponnese | Péloponnèse | Peloponnes | Peloponneso | Peloponeso | 伯罗奔尼撒大区 | 펠로폰네소스 | Peloponnesos | Peloponeso | Пелопоннес | Peloponnese | Peloponnese | Peloponnese | Peloponnese | Peloponnese |
| South Aegean | `0x4F0B0000` | 36.436156812, 28.218460523 | 南エーゲ | South Aegean | Égée-Méridionale | Südliche Ägäis | Egeo Meridionale | Egeo Meridional | 南爱琴海大区 | 남부 에게 | Zuid-Egeïsche Eilanden | Egeu Meridional | Южные Эгейские острова | South Aegean | South Aegean | South Aegean | South Aegean | South Aegean |
| Thessaly | `0x4F0C0000` | 39.63317826, 22.417663499 | テッサリーア | Thessaly | Thessalie | Thessalien | Tessaglia | Tesalia | 色萨利大区 | 테살리아 | Thessalië | Tessália | Фессалия | Thessaly | Thessaly | Thessaly | Thessaly | Thessaly |
| West Greece | `0x4F0D0000` | 38.23242144, 21.736509303 | 西ギリシャ | West Greece | Grèce-Occidentale | Westgriechenland | Grecia Occidentale | Grecia Occidental | 西希腊大区 | 서부 그리스 | West-Griekenland | Grécia Ocidental | Западная Греция | West Greece | West Greece | West Greece | West Greece | West Greece |
| West Macedonia | `0x4F0E0000` | 40.308837432, 21.796934272 | 西マケドニア | West Macedonia | Macédoine-Occidentale | Westmakedonien | Macedonia Occidentale | Macedonia Occidental | 西马其顿大区 | 서부 마케도니아 | West-Macedonië | Macedónia Ocidental | Западная Македония | West Macedonia | West Macedonia | West Macedonia | West Macedonia | West Macedonia |

# Hungary
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x50` | HU | ハンガリー | Hungary | Hongrie | Ungarn | Ungheria | Hungría | 匈牙利 | 헝가리 | Hongarije | Hungria | Венгрия | Hungary | Hungary | Hungary | Hungary | Hungary |

## Hungary Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x50000000` | 47.48840278, 19.077810667 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Budapest | `0x50020000` | 47.48840278, 19.077810667 | ブダペスト | Budapest | Budapest | Budapest | Budapest | Budapest | 布达佩斯市 | 부다페스트 | Boedapest | Budapeste | Будапешт | Budapest | Budapest | Budapest | Budapest | Budapest |
| Bács-Kiskun County | `0x50030000` | 46.900634232, 19.687553536 | バーチ・キシュクン州 | Bács-Kiskun County | Bács-Kiskun | Bács-Kiskun | Bács-Kiskun | Bács-Kiskun | 巴奇-基什孔州 | 바치키슈쿤 주 | Bács-Kiskun | Bács-Kiskun (condado) | Бач-Кишкун | Bács-Kiskun County | Bács-Kiskun County | Bács-Kiskun County | Bács-Kiskun County | Bács-Kiskun County |
| Baranya County | `0x50040000` | 46.071166468, 18.215381564 | バラニャ州 | Baranya County | Baranya | Baranya | Baranya | Baranya | 巴兰尼亚州 | 버러녀 주 | Baranya | Baranya (condado) | Баранья | Baranya County | Baranya County | Baranya County | Baranya County | Baranya County |
| Békés County | `0x50050000` | 46.669921344, 21.099300539 | ベーケーシュ州 | Békés County | Békés | Békés | Békés | Békés | 贝凯什州 | 베케시 주 | Békés | Békés (condado) | Бекеш | Békés County | Békés County | Békés County | Békés County | Békés County |
| Borsod-Abaúj-Zemplén County | `0x50060000` | 48.098143984000004, 20.786189336 | ボルショド・アバウーイ・ゼンプレーン州 | Borsod-Abaúj-Zemplén County | Borsod-Abaúj-Zemplén | Borsod-Abaúj-Zemplén | Borsod-Abaúj-Zemplén | Borsod-Abaúj-Zemplén | 包尔绍德-奥包乌伊-曾普伦州 | 보르쇼드어버우이젬플렌 주 | Borsod-Abaúj-Zemplén | Borsod-Abaúj-Zemplén (condado) | Боршод-Абауй-Земплен | Borsod-Abaúj-Zemplén County | Borsod-Abaúj-Zemplén County | Borsod-Abaúj-Zemplén County | Borsod-Abaúj-Zemplén County | Borsod-Abaúj-Zemplén County |
| Csongrád County | `0x50070000` | 46.25244088, 20.154473751 | チョングラード州 | Csongrád County | Csongrád | Csongrád | Csongrád | Csongrád | 琼格拉德州 | 촌그라드 주 | Csongrád | Csongrád (condado) | Чонград | Csongrád County | Csongrád County | Csongrád County | Csongrád County | Csongrád County |
| Fejér County | `0x50080000` | 47.197265088, 18.40214965 | フェイェール州 | Fejér County | Fejér | Fejér | Fejér | Fejér | 费耶尔州 | 페예르 주 | Fejér | Fejér (condado) | Фейер | Fejér County | Fejér County | Fejér County | Fejér County | Fejér County |
| Győr-Moson-Sopron County | `0x50090000` | 47.675170356, 17.63310459 | ジェール・モション・ショプロン州 | Győr-Moson-Sopron County | Győr-Moson-Sopron | Győr-Moson-Sopron | Győr-Moson-Sopron | Győr-Moson-Sopron | 杰尔-莫松-肖普朗州 | 죄르모숀쇼프론 주 | Győr-Moson-Sopron | Gyor-Moson-Sopron (condado) | Дьёр-Мошон-Шопрон | Győr-Moson-Sopron County | Győr-Moson-Sopron County | Győr-Moson-Sopron County | Győr-Moson-Sopron County | Győr-Moson-Sopron County |
| Hajdú-Bihar County | `0x500A0000` | 47.532348092, 21.621152544 | ハイドゥー・ヒバル州 | Hajdú-Bihar County | Hajdú-Bihar | Hajdú-Bihar | Hajdú-Bihar | Hajdú-Bihar | 豪伊杜-比豪尔州 | 허이두 비허르 주 | Hajdú-Bihar | Hajdú-Bihar (condado) | Хайду-Бихар | Hajdú-Bihar County | Hajdú-Bihar County | Hajdú-Bihar County | Hajdú-Bihar County | Hajdú-Bihar County |
| Heves County | `0x500B0000` | 47.894896916, 20.37969409 | ヘヴェシュ州 | Heves County | Heves | Heves | Heves | Heves | 赫维什州 | 헤베시 주 | Heves | Heves (condado) | Хевеш | Heves County | Heves County | Heves County | Heves County | Heves County |
| Jász-Nagykun-Szolnok County | `0x500C0000` | 47.169799268, 20.181939646 | ヤース・ナチクン・ソルノク州 | Jász-Nagykun-Szolnok County | Jász-Nagykun-Szolnok | Jász-Nagykun-Szolnok | Jász-Nagykun-Szolnok | Jász-Nagyk쳐歮覀㞂ʮ∎辝硂旱✑櫙᰺͖ﻩ | 加兹-纳杰孔-索尔诺克州 | 야스너지쿤솔노크 주 | Jász-Nagykun-Szolnok | Jász-Nagykun-Szolnok (condado) | Яс-Надькун-Сольнок | Jász-Nagykun-Szolnok County | Jász-Nagykun-Szolnok County | Jász-Nagykun-Szolnok County | Jász-Nagykun-Szolnok County | Jász-Nagykun-Szolnok County |
| Komárom-Esztergom County | `0x500D0000` | 47.548827584, 18.435108724 | コマーロム・エステルゴム州 | Komárom-Esztergom County | Komárom-Esztergom | Komárom-Esztergom | Komárom-Esztergom | Komárom-Esztergom | 科马罗姆-埃斯泰尔戈姆州 | 코마롬에스테르곰 주 | Komárom-Esztergom | Komárom-Esztergom (condado) | Комаром-Эстергом | Komárom-Esztergom County | Komárom-Esztergom County | Komárom-Esztergom County | Komárom-Esztergom County | Komárom-Esztergom County |
| Nógrád County | `0x500E0000` | 48.103637148, 19.813896653 | ノーグラード州 | Nógrád County | Nógrád | Nógrád | Nógrád | Nógrád | 诺格拉德州 | 노그라드 주 | Nógrád | Nógrád (condado) | Ноград | Nógrád County | Nógrád County | Nógrád County | Nógrád County | Nógrád County |
| Pest County | `0x500F0000` | 47.48840278, 19.077810667 | ペシュト州 | Pest County | Pest | Pest | Pest | Pest | 佩斯州 | 페슈트 주 | Pest | Pest (condado) | Пешт | Pest County | Pest County | Pest County | Pest County | Pest County |
| Somogy County | `0x50100000` | 46.351317832, 17.786913602 | ショモジ州 | Somogy County | Somogy | Somogy | Somogy | Somogy | 绍莫吉州 | 쇼모지 주 | Somogy | Somogy (condado) | Шомодь | Somogy County | Somogy County | Somogy County | Somogy County | Somogy County |
| Szabolcs-Szatmár-Bereg County | `0x50110000` | 47.95532172, 21.720029766 | サボルチ・サトマール・ベレグ州 | Szabolcs-Szatmár-Bereg County | Szabolcs-Szatmár-Bereg | Szabolcs-Szatmár-Bereg | Szabolcs-Szatmár-Bereg | Szabolcs-Szatmár-Bereg | 索博尔奇-索特马尔-贝拉格州 | 서볼츠서트마르베레그 주 | Szabolcs-Szatmár-Bereg | Szabolcs-Szatmár-Bereg (condado) | Сабольч-Сатмар-Берег | Szabolcs-Szatmár-Bereg County | Szabolcs-Szatmár-Bereg County | Szabolcs-Szatmár-Bereg County | Szabolcs-Szatmár-Bereg County | Szabolcs-Szatmár-Bereg County |
| Tolna County | `0x50120000` | 46.345824668, 18.704274495 | トルナ州 | Tolna County | Tolna | Tolna | Tolna | Tolna | 托尔瑙州 | 톨너 주 | Tolna | Tolna (condado) | Тольна | Tolna County | Tolna County | Tolna County | Tolna County | Tolna County |
| Vas County | `0x50130000` | 47.230224072, 16.622359654 | ヴァシュ州 | Vas County | Vas | Vas | Vas | Vas | 沃什州 | 버시 주 | Vas | Vas (condado) | Ваш | Vas County | Vas County | Vas County | Vas County | Vas County |
| Veszprém County | `0x50140000` | 47.098388136, 17.913256719 | ベスプレーム州 | Veszprém County | Veszprém | Veszprém | Veszprém | Veszprém | 维斯普雷姆州 | 베스프렘 주 | Veszprém | Veszprém (condado) | Веспрем | Veszprém County | Veszprém County | Veszprém County | Veszprém County | Veszprém County |
| Zala County | `0x50150000` | 46.840209428, 16.836593635 | ザラ州 | Zala County | Zala | Zala | Zala | Zala | 佐洛州 | 절러 주 | Zala | Zala (condado) | Зала | Zala County | Zala County | Zala County | Zala County | Zala County |

# Iceland
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x51` | IS | アイスランド | Iceland | Islande | Island | Islanda | Islandia | 冰岛 | 아이슬란드 | IJsland | Islândia | Исландия | Iceland | Iceland | Iceland | Iceland | Iceland |

## Iceland Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x51000000` | 64.1326897, -21.889828843000004 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Iceland | `0x51010000` | 64.1326897, -21.889828843000004 | アイスランド | Iceland | Islande | Island | Islanda | Islandia | 冰岛 | 아이슬란드 | IJsland | Islândia | Исландия | Iceland | Iceland | Iceland | Iceland | Iceland |

# Ireland
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x52` | IE | アイルランド | Ireland | Irlande | Irland | Irlanda | Irlanda | 爱尔兰 | 아일랜드 | Ierland | Irlanda | Ирландия | Ireland | Ireland | Ireland | Ireland | Ireland |

## Ireland Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x52000000` | 53.33862244, -6.256241409000012 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Dublin | `0x52020000` | 53.33862244, -6.256241409000012 | ダブリン州 | Dublin | Dublin | Dublin | Dublino | Dublín | 都柏林地区 | 더블린 | Dublin | Dublin | Дублин | Dublin | Dublin | Dublin | Dublin | Dublin |
| County Carlow | `0x520A0000` | 52.827758188, -6.926409247000009 | カーロウ州 | County Carlow | Carlow | Carlow | Carlow | Carlow | 卡洛郡 | 칼로우 주 | Carlow | Carlow (condado) | Карлоу | County Carlow | County Carlow | County Carlow | County Carlow | County Carlow |
| County Cavan | `0x520B0000` | 53.986815792, -7.354877208999994 | キャバン州 | County Cavan | Cavan | Cavan | Cavan | Cavan | 卡文郡 | 캐번 주 | Cavan | Cavan (condado) | Каван | County Cavan | County Cavan | County Cavan | County Cavan | County Cavan |
| County Clare | `0x520C0000` | 52.84423768, -8.975365014000005 | クレア州 | County Clare | Clare | Clare | Clare | Clare | 克莱尔郡 | 클레어 주 | Clare | Clare (condado) | Клэр | County Clare | County Clare | County Clare | County Clare | County Clare |
| County Cork | `0x520D0000` | 51.893920308, -8.464499367000002 | コーク州 | County Cork | Cork | Cork | Cork | Cork | 科克郡 | 코크 주 | Cork | Cork (condado) | Корк | County Cork | County Cork | County Cork | County Cork | County Cork |
| County Donegal | `0x520E0000` | 54.832763048, -7.475727147000015 | ドニゴール州 | County Donegal | Donegal | Donegal | Donegal | Donegal | 多内加尔郡 | 도니골 주 | Donegal | Donegal (condado) | Донегол | County Donegal | County Donegal | County Donegal | County Donegal | County Donegal |
| County Galway | `0x520F0000` | 53.272704472, -9.041283162000013 | ゴールウェイ州 | County Galway | Galway | Galway | Galway | Galway | 戈尔韦郡 | 골웨이 주 | Galway | Galway (condado) | Голуэй | County Galway | County Galway | County Galway | County Galway | County Galway |
| County Kerry | `0x52100000` | 52.26745546, -9.694971463000002 | ケリー州 | County Kerry | Kerry | Kerry | Kerry | Kerry | 凯里郡 | 케리 주 | Kerry | Kerry (condado) | Керри | County Kerry | County Kerry | County Kerry | County Kerry | County Kerry |
| County Kildare | `0x52110000` | 53.212279668, -6.662736655000003 | キルデア州 | County Kildare | Kildare | Kildare | Kildare | Kildare | 基尔代尔郡 | 킬데어 주 | Kildare | Kildare (condado) | Килдэр | County Kildare | County Kildare | County Kildare | County Kildare | County Kildare |
| County Kilkenny | `0x52120000` | 52.646483776000004, -7.2505068080000115 | キルケニー州 | County Kilkenny | Kilkenny | Kilkenny | Kilkenny | Kilkenny | 基尔肯尼郡 | 킬케니 주 | Kilkenny | Kilkenny (condado) | Килкенни | County Kilkenny | County Kilkenny | County Kilkenny | County Kilkenny | County Kilkenny |
| County Laois | `0x52130000` | 53.025512092, -7.299945419000011 | リーシュ州 | County Laois | Laois | Laois | Laois | Laois | 莱伊什郡 | 리시 주 | Laois | Laois (condado) | Лиишь | County Laois | County Laois | County Laois | County Laois | County Laois |
| County Leitrim | `0x52140000` | 53.94287048, -8.085470015999988 | リートリム州 | County Leitrim | Leitrim | Leitrim | Leitrim | Leitrim | 利特里姆郡 | 리트림 주 | Leitrim | Leitrim (condado) | Литрим | County Leitrim | County Leitrim | County Leitrim | County Leitrim | County Leitrim |
| County Limerick | `0x52150000` | 52.662963268, -8.618308379000013 | リムリック州 | County Limerick | Limerick | Limerick | Limerick | Limerick | 利默里克郡 | 리머릭 주 | Limerick | Limerick (condado) | Лимерик | County Limerick | County Limerick | County Limerick | County Limerick | County Limerick |
| County Longford | `0x52160000` | 53.72314392, -7.794331529000004 | ロングフォード州 | County Longford | Longford | Longford | Longford | Longford | 朗福德郡 | 롱퍼드 주 | Longford | Longford (condado) | Лонгфорд | County Longford | County Longford | County Longford | County Longford | County Longford |
| County Louth | `0x52170000` | 54.008788448, -6.399064062999997 | ラウス州 | County Louth | Louth | Louth | Louth | Louth | 劳斯郡 | 라우스 주 | Louth | Louth (condado) | Лаут | County Louth | County Louth | County Louth | County Louth | County Louth |
| County Mayo | `0x52180000` | 53.86047302, -9.293969395999994 | メイヨー州 | County Mayo | Mayo | Mayo | Mayo | Mayo | 梅奥郡 | 메이오 주 | Mayo | Mayo (condado) | Мейо | County Mayo | County Mayo | County Mayo | County Mayo | County Mayo |
| County Meath | `0x52190000` | 53.651732788, -6.679216192000013 | ミース州 | County Meath | Meath | Meath | Meath | Meath | 米斯郡 | 미스 주 | Meath | Meath (condado) | Мит | County Meath | County Meath | County Meath | County Meath | County Meath |
| County Monaghan | `0x521A0000` | 54.2449945, -6.964861500000012 | モナハン州 | County Monaghan | Monaghan | Monaghan | Monaghan | Monaghan | 莫纳亨郡 | 모너핸 주 | Monaghan | Monaghan (condado) | Монахан | County Monaghan | County Monaghan | County Monaghan | County Monaghan | County Monaghan |
| County Offaly | `0x521B0000` | 53.261718144, -7.497699863000008 | オファリー州 | County Offaly | Offaly | Offaly | Offaly | Offaly | 奥法利郡 | 오펄리 주 | Offaly | Offaly (condado) | Оффали | County Offaly | County Offaly | County Offaly | County Offaly | County Offaly |
| County Roscommon | `0x521C0000` | 53.629760132, -8.178854059000003 | ロスコモン州 | County Roscommon | Roscommon | Roscommon | Roscommon | Roscommon | 罗斯康芒郡 | 로스코먼 주 | Roscommon | Roscommon (condado) | Роскоммон | County Roscommon | County Roscommon | County Roscommon | County Roscommon | County Roscommon |
| County Sligo | `0x521D0000` | 54.261473992, -8.480978904000011 | スライゴ州 | County Sligo | Sligo | Sligo | Sligo | Sligo | 斯莱戈郡 | 슬라이고 주 | Sligo | Sligo (condado) | Слайго | County Sligo | County Sligo | County Sligo | County Sligo | County Sligo |
| County Tipperary | `0x521E0000` | 52.662963268, -7.832783782000007 | ティペラリー州 | County Tipperary | Tipperary | Tipperary | Tipperary | Tipperary | 蒂珀雷里郡 | 티퍼레리 주 | Tipperary | Tipperary (condado) | Типперэри | County Tipperary | County Tipperary | County Tipperary | County Tipperary | County Tipperary |
| County Waterford | `0x521F0000` | 52.080687884, -7.63502933800001 | ウォーターフォード州 | County Waterford | Waterford | Waterford | Waterford | Waterford | 沃特福德郡 | 워터퍼드 주 | Waterford | Waterford (condado) | Уотерфорд | County Waterford | County Waterford | County Waterford | County Waterford | County Waterford |
| County Westmeath | `0x52200000` | 53.519896852, -7.332904493000001 | ウェストミース州 | County Westmeath | Westmeath | Westmeath | Westmeath | Westmeath | 西米斯郡 | 웨스트미스 주 | Westmeath | Westmeath (condado) | Уэстмит | County Westmeath | County Westmeath | County Westmeath | County Westmeath | County Westmeath |
| County Wexford | `0x52210000` | 52.333373428, -6.453995853000009 | ウェックスフォード州 | County Wexford | Wexford | Wexford | Wexford | Wexford | 韦克斯福德郡 | 웩스퍼드 주 | Wexford | Wexford (condado) | Уэксфорд | County Wexford | County Wexford | County Wexford | County Wexford | County Wexford |
| County Wicklow | `0x52220000` | 52.976073616, -6.036514248999993 | ウィックロー州 | County Wicklow | Wicklow | Wicklow | Wicklow | Wicklow | 威克洛郡 | 위클로 주 | Wicklow | Wicklow (condado) | Уиклоу | County Wicklow | County Wicklow | County Wicklow | County Wicklow | County Wicklow |

# Italy
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x53` | IT | イタリア | Italy | Italie | Italien | Italia | Italia | 意大利 | 이탈리아 | Italië | Itália | Италия | Italy | Italy | Italy | Italy | Italy |

## Italy Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x53000000` | 41.890868664, 12.485995867 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Lazio | `0x53020000` | 41.890868664, 12.485995867 | ラツィオ州 | Lazio | Latium | Latium | Lazio | Lacio | 拉齐奥大区 | 라치오 주 | Lazio | Lácio | Лацио | Lazio | Lazio | Lazio | Lazio | Lazio |
| Aosta Valley | `0x53030000` | 45.7305903, 7.311421249 | バッレ・ダオスタ州 | Aosta Valley | Vallée d'Aoste | Aostatal | Valle d'Aosta | Valle de Aosta | 瓦莱-达奥斯塔大区 | 발레다오스타 주 | Valle d'Aosta | Vale de Aosta | Валле-д’Аоста | Aosta Valley | Aosta Valley | Aosta Valley | Aosta Valley | Aosta Valley |
| Piedmont | `0x53040000` | 45.07141062, 7.673971063 | ピエモンテ州 | Piedmont | Piémont | Piemont | Piemonte | Piamonte | 皮埃蒙特大区 | 피에몬테 주 | Piëmont | Piemonte | Пьемонт | Piedmont | Piedmont | Piedmont | Piedmont | Piedmont |
| Liguria | `0x53050000` | 44.401244612, 8.931909054 | リグリア州 | Liguria | Ligurie | Ligurien | Liguria | Liguria | 利古里亚大区 | 리구리아 주 | Ligurië | Ligúria | Лигурия | Liguria | Liguria | Liguria | Liguria | Liguria |
| Lombardy | `0x53060000` | 45.466918428, 9.184595288 | ロンバルディア州 | Lombardy | Lombardie | Lombardei | Lombardia | Lombardía | 伦巴第大区 | 롬바르디아 주 | Lombardije | Lombardia | Ломбардия | Lombardy | Lombardy | Lombardy | Lombardy | Lombardy |
| Trentino-Alto Adige | `0x53070000` | 46.065673304, 11.118194296 | トレンティノ・アルト・アディジェ州 | Trentino-Alto Adige | Trentin-Haut-Adige | Trentino-Südtirol | Trentino-Alto Adige | Trentino-Alto Adigio | 特伦蒂诺-上阿迪杰大区 | 트렌티노알토아디제 주 | Trentino-Zuid-Tirol | Trentino-Alto Ádige | Трентино-Альто-Адидже | Trentino-Alto Adige | Trentino-Alto Adige | Trentino-Alto Adige | Trentino-Alto Adige | Trentino-Alto Adige |
| Veneto | `0x53080000` | 45.42846628, 12.332186855 | ベネト州 | Veneto | Vénétie | Venetien | Veneto | Véneto | 威尼托大区 | 베네토 주 | Veneto | Veneto | Венето | Veneto | Veneto | Veneto | Veneto | Veneto |
| Friuli Venezia Giulia | `0x53090000` | 45.637206512, 13.765906574 | フリウリ・ベネチア・ジュリア州 | Friuli Venezia Giulia | Frioul-Vénétie julienne | Friaul-Julisch Venetien | Friuli-Venezia Giulia | Friuli-Venecia Julia | 弗留利-威尼斯朱利亚大区 | 프리울리베네치아줄리아 주 | Friuli-Venezia Giulia | Friul-Venécia Juliana | Фриули-Венеция-Джулия | Friuli Venezia Giulia | Friuli Venezia Giulia | Friuli Venezia Giulia | Friuli Venezia Giulia | Friuli Venezia Giulia |
| Emilia-Romagna | `0x530A0000` | 44.500121564, 11.332428277 | エミリア・ロマーニャ州 | Emilia-Romagna | Émilie-Romagne | Emilia-Romagna | Emilia-Romagna | Emilia-Romaña | 艾米利亚-罗马涅大区 | 에밀리아로마냐 주 | Emilia-Romagna | Emília-Romana | Эмилия-Романья | Emilia-Romagna | Emilia-Romagna | Emilia-Romagna | Emilia-Romagna | Emilia-Romagna |
| Tuscany | `0x530B0000` | 43.775023916, 11.250030592 | トスカナ州 | Tuscany | Toscane | Toskana | Toscana | Toscana | 托斯卡纳大区 | 토스카나 주 | Toscane | Toscânia | Тоскана | Tuscany | Tuscany | Tuscany | Tuscany | Tuscany |
| Umbria | `0x530C0000` | 43.110351072, 12.381625466 | ウンブリア州 | Umbria | Ombrie | Umbrien | Umbria | Umbría | 翁布里亚大区 | 움브리아 주 | Umbrië | Úmbria | Умбрия | Umbria | Umbria | Umbria | Umbria | Umbria |
| Marche | `0x530D0000` | 43.61572216, 13.507727161 | マルケ州 | Marche | Marches | Marken | Marche | Las Marcas | 马尔凯大区 | 마르케 주 | Marche | Marche | Марке | Marche | Marche | Marche | Marche | Marche |
| Abruzzo | `0x530E0000` | 42.346801276, 13.386877222999999 | アブルッツィ州 | Abruzzo | Abruzzes | Abruzzen | Abruzzo | Abruzos | 阿布鲁佐大区 | 아브루초 주 | Abruzzen | Abruzo | Абруццо | Abruzzo | Abruzzo | Abruzzo | Abruzzo | Abruzzo |
| Molise | `0x530F0000` | 41.55578566, 14.655801572 | モリーゼ州 | Molise | Molise | Molise | Molise | Molise | 莫利塞大区 | 몰리세 주 | Molise | Molise | Молизе | Molise | Molise | Molise | Molise | Molise |
| Campania | `0x53100000` | 40.836181176000004, 14.249306326 | カンパニア州 | Campania | Campanie | Kampanien | Campania | Campania | 坎帕尼亚大区 | 캄파니아 주 | Campanië | Campânia | Кампания | Campania | Campania | Campania | Campania | Campania |
| Apulia | `0x53110000` | 41.11633254, 16.858566351 | プーリア州 | Apulia | Pouilles | Apulien | Puglia | Apulia | 普利亚大区 | 풀리아 주 | Apulië | Apúlia | Апулия | Apulia | Apulia | Apulia | Apulia | Apulia |
| Basilicata | `0x53120000` | 40.632934108, 15.787396446 | バジリカータ州 | Basilicata | Basilicate | Basilikata | Basilicata | Basilicata | 巴西利卡塔大区 | 바실리카타 주 | Basilicata | Basilicata | Базиликата | Basilicata | Basilicata | Basilicata | Basilicata | Basilicata |
| Calabria | `0x53130000` | 38.897094284, 16.58940058 | カラブリア州 | Calabria | Calabre | Kalabrien | Calabria | Calabria | 卡拉布里亚大区 | 칼라브리아 주 | Calabrië | Calábria | Калабрия | Calabria | Calabria | Calabria | Calabria | Calabria |
| Sicily | `0x53140000` | 38.117064996, 13.353918149 | シチリア州 | Sicily | Sicile | Sizilien | Sicilia | Sicilia | 西西里大区 | 시칠리아 주 | Sicilië | Sicília | Сицилия | Sicily | Sicily | Sicily | Sicily | Sicily |
| Sardinia | `0x53150000` | 39.215697796, 9.102197603 | サルデーニャ州 | Sardinia | Sardaigne | Sardinien | Sardegna | Cerdeña | 撒丁大区 | 사르데냐 주 | Sardinië | Sardenha | Сардиния | Sardinia | Sardinia | Sardinia | Sardinia | Sardinia |

# Latvia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x54` | LV | ラトビア | Latvia | Lettonie | Lettland | Lettonia | Letonia | 拉脱维亚 | 라트비아 | Letland | Letónia | Латвия | Latvia | Latvia | Latvia | Latvia | Latvia |

## Latvia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x54000000` | 56.947631188, 24.082096736 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Latvia | `0x54010000` | 56.947631188, 24.082096736 | ラトビア | Latvia | Lettonie | Lettland | Lettonia | Letonia | 拉脱维亚 | 라트비아 | Letland | Letónia | Латвия | Latvia | Latvia | Latvia | Latvia | Latvia |

# Lesotho
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x55` | LS | レソト | Lesotho | Lesotho | Lesotho | Lesotho | Lesoto | 莱索托 | 레소토 | Lesotho | Lesoto | Лесото | Lesotho | Lesotho | Lesotho | Lesotho | Lesotho |

## Lesotho Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x55000000` | -29.317017292000003, 27.465895 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Maseru | `0x55020000` | -29.317017292000003, 27.465895 | マセル県 | Maseru | Maseru | Maseru | Maseru | Maseru | 马塞卢区 | 마세루 주 | Maseru | Maseru | Масеру | Maseru | Maseru | Maseru | Maseru | Maseru |
| Berea | `0x55030000` | -29.146729207999996, 27.74055395 | べレア県 | Berea | Berea | Berea | Berea | Berea | 伯里亚区 | 베레아 주 | Berea | Berea | Береа | Berea | Berea | Berea | Berea | Berea |
| Butha-Buthe | `0x55040000` | -28.767700892, 28.256912776 | ブータ・ブーテ県 | Butha-Buthe | Butha-Buthe | Butha-Buthe | Butha-Buthe | Butha-Buthe | 布塔布泰区 | 부타부테 주 | Butha-Buthe | Butha-Buthe | Бута-Буте | Butha-Buthe | Butha-Buthe | Butha-Buthe | Butha-Buthe | Butha-Buthe |
| Leribe | `0x55050000` | -28.877564172, 28.053665153 | レリベ県 | Leribe | Leribe | Leribe | Leribe | Leribe | 莱里贝区 | 레리베 주 | Leribe | Leribe | Лерибе | Leribe | Leribe | Leribe | Leribe | Leribe |
| Mafeteng | `0x55060000` | -29.816895216, 27.235181481999998 | マフェテング県 | Mafeteng | Mafeteng | Mafeteng | Mafeteng | Mafeteng | 马费滕区 | 마페텡 주 | Mafeteng | Mafeteng | Мафетенг | Mafeteng | Mafeteng | Mafeteng | Mafeteng | Mafeteng |
| Mohale's Hoek | `0x55070000` | -30.151978219999997, 27.465895 | モハーレスフーク県 | Mohale's Hoek | Mohale's Hoek | Mohale's Hoek | Mohale's Hoek | Mohale's Hoek | 莫哈莱斯胡克区 | 모할레스후크 주 | Mohale's Hoek | Mohale's Hoek | Мохалес-Хук | Mohale's Hoek | Mohale's Hoek | Mohale's Hoek | Mohale's Hoek | Mohale's Hoek |
| Mokhotlong | `0x55080000` | -29.284058308, 29.064410089 | モコトロング県 | Mokhotlong | Mokhotlong | Mokhotlong | Mokhotlong | Mokhotlong | 莫霍特隆区 | 모코틀롱 주 | Mokhotlong | Mokhotlong | Мокхотлонг | Mokhotlong | Mokhotlong | Mokhotlong | Mokhotlong | Mokhotlong |
| Qacha's Nek | `0x55090000` | -30.1245124, 28.701860275 | クァクハスネック県 | Qacha's Nek | Qacha's Nek | Qacha's Nek | Qacha's Nek | Qacha's Nek | 加查斯内克区 | 카차스넥 주 | Qacha's Nek | Qacha's Nek | Цгачас-Нек | Qacha's Nek | Qacha's Nek | Qacha's Nek | Qacha's Nek | Qacha's Nek |
| Quthing | `0x550A0000` | -30.404663764, 27.707594875999998 | クティング県 | Quthing | Quthing | Quthing | Quthing | Quthing | 古廷区 | 쿠팅 주 | Quthing | Quthing | Цгутинг | Quthing | Quthing | Quthing | Quthing | Quthing |
| Thaba-Tseka | `0x550B0000` | -29.514771195999998, 28.602983053 | ターバ・ツェーカ県 | Thaba-Tseka | Thaba-Tseka | Thaba-Tseka | Thaba-Tseka | Thaba-Tseka | 塔巴采卡区 | 타바체카 주 | Thaba-Tseka | Thaba-Tseka | Таба-Цека | Thaba-Tseka | Thaba-Tseka | Thaba-Tseka | Thaba-Tseka | Thaba-Tseka |

# Liechtenstein
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x56` | LI | リヒテンシュタイン | Liechtenstein | Liechtenstein | Liechtenstein | Liechtenstein | Liechtenstein | 列支敦士登 | 리히텐슈타인 | Liechtenstein | Liechtenstein | Лихтенштейн | Liechtenstein | Liechtenstein | Liechtenstein | Liechtenstein | Liechtenstein |

## Liechtenstein Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x56000000` | 47.136840284, 9.519679207 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Liechtenstein | `0x56010000` | 47.136840284, 9.519679207 | リヒテンシュタイン | Liechtenstein | Liechtenstein | Liechtenstein | Liechtenstein | Liechtenstein | 列支敦士登 | 리히텐슈타인 | Liechtenstein | Liechtenstein | Лихтенштейн | Liechtenstein | Liechtenstein | Liechtenstein | Liechtenstein | Liechtenstein |

# Lithuania
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x57` | LT | リトアニア | Lithuania | Lituanie | Litauen | Lituania | Lituania | 立陶宛 | 리투아니아 | Litouwen | Lituânia | Литва | Lithuania | Lithuania | Lithuania | Lithuania | Lithuania |

## Lithuania Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x57000000` | 54.678954456, 25.279609758 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Vilnius | `0x57020000` | 54.678954456, 25.279609758 | ヴィリニュス州 | Vilnius | Vilnius | Vilnius | Vilnius | Condado de Vilna | 维尔纽斯县 | 빌뉴스 주 | Vilnius | Vilna | Вильнюс | Vilnius | Vilnius | Vilnius | Vilnius | Vilnius |
| Alytus | `0x57030000` | 54.3823236, 24.049137662 | アリートゥス州 | Alytus | Alytus | Alytus | Alytus | Condado de Alytus | 阿利图斯县 | 알리투스 주 | Alytus | Alytus | Алитус | Alytus | Alytus | Alytus | Alytus | Alytus |
| Kaunas | `0x57040000` | 54.887694688, 23.917301366 | カウナス州 | Kaunas | Kaunas | Kaunas | Kaunas | Condado de Kaunas | 考纳斯县 | 카우나스 주 | Kaunas | Kaunas | Каунас | Kaunas | Kaunas | Kaunas | Kaunas | Kaunas |
| Klaipėda | `0x57050000` | 55.711669288, 21.132259613 | クライペダ州 | Klaipėda | Klaipėda | Klaipėda | Klaipėda | Condado de Klaipėda | 克莱佩达县 | 클라이페다 주 | Klaipėda | Klaipėda | Клайпеда | Klaipėda | Klaipėda | Klaipėda | Klaipėda | Klaipėda |
| Marijampolė | `0x57060000` | 54.54711852, 23.351503929 | マリヤンポレ州 | Marijampolė | Marijampolė | Marijampolė | Marijampolė | Condado de Marijampolė | 马里扬泊列县 | 마리얌폴레 주 | Marijampolė | Marijampolė | Мариямполе | Marijampolė | Marijampolė | Marijampolė | Marijampolė | Marijampolė |
| Panevėžys | `0x57070000` | 55.72814878, 24.367742044 | パネベジス州 | Panevėžys | Panevėžys | Panevėžys | Panevėžys | Condado de Panevėžys | 帕涅韦日斯县 | 파네베지스 주 | Panevėžys | Panevėžys | Паневежис | Panevėžys | Panevėžys | Panevėžys | Panevėžys | Panevėžys |
| Šiauliai | `0x57080000` | 55.931395848, 23.307558497 | シャウレイ州 | Šiauliai | Šiauliai | Šiauliai | Šiauliai | Condado de Šiauliai | 希奥利艾县 | 샤울랴이 주 | Šiauliai | Šiauliai | Шяуляй | Šiauliai | Šiauliai | Šiauliai | Šiauliai | Šiauliai |
| Taurage | `0x57090000` | 55.244750348000004, 22.285827203 | タウラゲ州 | Taurage | Tauragė | Tauragė | Tauragė | Condado de Tauragė | 陶拉格县 | 타우라게 주 | Tauragė | Tauragė | Таураге | Taurage | Taurage | Taurage | Taurage | Taurage |
| Telšiai | `0x570A0000` | 55.980834324, 22.24737495 | テルシェイ州 | Telšiai | Telšiai | Telšiai | Telšiai | Condado de Telšiai | 特尔希艾县 | 텔샤이 주 | Telšiai | Telšiai | Тельшяй | Telšiai | Telšiai | Telšiai | Telšiai | Telšiai |
| Utena | `0x570B0000` | 55.491942728, 25.603707318999998 | ウテナ州 | Utena | Utena | Utena | Utena | Condado de Utena | 乌田纳县 | 우테나 주 | Utena | Utena | Утена | Utena | Utena | Utena | Utena | Utena |

# Luxembourg
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x58` | LU | ルクセンブルク | Luxembourg | Luxembourg | Luxemburg | Lussemburgo | Luxemburgo | 卢森堡 | 룩셈부르크 | Luxemburg | Luxemburgo | Люксембург | Luxembourg | Luxembourg | Luxembourg | Luxembourg | Luxembourg |

## Luxembourg Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x58000000` | 49.608764084, 6.124894585 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Luxembourg | `0x58010000` | 49.608764084, 6.124894585 | ルクセンブルク | Luxembourg | Luxembourg | Luxemburg | Lussemburgo | Luxemburgo | 卢森堡 | 룩셈부르크 | Luxemburg | Luxemburgo | Люксембург | Luxembourg | Luxembourg | Luxembourg | Luxembourg | Luxembourg |

# Macedonia (Republic of)
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x59` | MK | マケドニア | Macedonia (Republic of) | Macédoine (République) | Mazedonien (Republik) | Macedonia (Repubblica di) | Macedonia (República) | 马其顿 | 마케도니아 공화국 | Macedonië | Macedónia (República) | Македония (Республика) | Macedonia (Republic of) | Macedonia (Republic of) | Macedonia (Republic of) | Macedonia (Republic of) | Macedonia (Republic of) |

## Macedonia (Republic of) Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x59000000` | 41.99523878, 21.428891279 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Macedonia (Republic of) | `0x59010000` | 41.99523878, 21.428891279 | マケドニア | Macedonia (Republic of) | Macédoine (République) | Mazedonien (Republik) | Macedonia (Repubblica di) | Macedonia (República) | 马其顿 | 마케도니아 공화국 | Macedonië | Macedónia (República) | Македония (Республика) | Macedonia (Republic of) | Macedonia (Republic of) | Macedonia (Republic of) | Macedonia (Republic of) | Macedonia (Republic of) |

# Malta
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x5A` | MT | マルタ | Malta | Malte | Malta | Malta | Malta | 马耳他 | 몰타 | Malta | Malta | Мальта | Malta | Malta | Malta | Malta | Malta |

## Malta Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x5A000000` | 35.89782674, 14.512978918 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Malta | `0x5A010000` | 35.89782674, 14.512978918 | マルタ | Malta | Malte | Malta | Malta | Malta | 马耳他 | 몰타 | Malta | Malta | Мальта | Malta | Malta | Malta | Malta | Malta |

# Montenegro
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x5B` | ME | モンテネグロ | Montenegro | Monténégro | Montenegro | Montenegro | Montenegro | 黑山 | 몬테네그로 | Montenegro | Montenegro | Черногория | Montenegro | Montenegro | Montenegro | Montenegro | Montenegro |

## Montenegro Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x5B000000` | 42.4346919, 19.264578753 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Montenegro | `0x5B010000` | 42.4346919, 19.264578753 | モンテネグロ | Montenegro | Monténégro | Montenegro | Montenegro | Montenegro | 黑山 | 몬테네그로 | Montenegro | Montenegro | Черногория | Montenegro | Montenegro | Montenegro | Montenegro | Montenegro |

# Mozambique
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x5C` | MZ | モザンビーク | Mozambique | Mozambique | Mosambik | Mozambico | Mozambique | 莫桑比克 | 모잠비크 | Mozambique | Moçambique | Мозамбик | Mozambique | Mozambique | Mozambique | Mozambique | Mozambique |

## Mozambique Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x5C000000` | -25.966187251999997, 32.563565112 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Mozambique | `0x5C010000` | -25.966187251999997, 32.563565112 | モザンビーク | Mozambique | Mozambique | Mosambik | Mozambico | Mozambique | 莫桑比克 | 모잠비크 | Mozambique | Moçambique | Мозамбик | Mozambique | Mozambique | Mozambique | Mozambique | Mozambique |

# Namibia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x5D` | NA | ナミビア | Namibia | Namibie | Namibia | Namibia | Namibia | 纳米比亚 | 나미비아 | Namibië | Namíbia | Намибия | Namibia | Namibia | Namibia | Namibia | Namibia |

## Namibia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x5D000000` | -22.549439244, 17.078293511 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Namibia | `0x5D010000` | -22.549439244, 17.078293511 | ナミビア | Namibia | Namibie | Namibia | Namibia | Namibia | 纳米比亚 | 나미비아 | Namibië | Namíbia | Намибия | Namibia | Namibia | Namibia | Namibia | Namibia |

# Netherlands
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x5E` | NL | オランダ | Netherlands | Pays-Bas | Niederlande | Paesi Bassi | Países Bajos | 荷兰 | 네덜란드 | Nederland | Países Baixos | Нидерланды | Netherlands | Netherlands | Netherlands | Netherlands | Netherlands |

## Netherlands Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x5E000000` | 52.366332412, 4.883436131 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| North Holland | `0x5E020000` | 52.366332412, 4.883436131 | ノールト・ホラント州 | North Holland | Hollande-Septentrionale | Nordholland | Olanda Settentrionale | Holanda Septentrional | 北荷兰省 | 노르트홀란트 주 | Noord-Holland | Holanda Setentrional | Северная Голландия | North Holland | North Holland | North Holland | North Holland | North Holland |
| Drenthe | `0x5E030000` | 52.987059944, 6.553362547 | ドレンテ州 | Drenthe | Drenthe | Drenthe | Drenthe | Drente | 德伦特省 | 드렌터 주 | Drenthe | Drente | Дренте | Drenthe | Drenthe | Drenthe | Drenthe | Drenthe |
| Flevoland | `0x5E040000` | 52.503661512, 5.465713105 | フレボラント州 | Flevoland | Flevoland | Flevoland | Flevoland | Flevoland | 弗莱福兰省 | 플레볼란트 주 | Flevoland | Flevoland | Флеволанд | Flevoland | Flevoland | Flevoland | Flevoland | Flevoland |
| Friesland | `0x5E050000` | 53.190307012, 5.784317487 | フリースラント州 | Friesland | Frise | Friesland | Frisia | Frisia | 弗里斯兰省 | 프리슬란트 주 | Friesland | Frísia | Фрисландия | Friesland | Friesland | Friesland | Friesland | Friesland |
| Gelderland | `0x5E060000` | 51.981810932, 5.905167425 | ヘルデンラント州 | Gelderland | Gueldre | Gelderland | Gheldria | Güeldres | 海尔德兰省 | 헬데를란트 주 | Gelderland | Gueldres | Гелдерланд | Gelderland | Gelderland | Gelderland | Gelderland | Gelderland |
| Groningen | `0x5E070000` | 53.217772832, 6.569842084 | フローニンゲン州 | Groningen | Groningue | Groningen | Groninga | Groninga | 格罗宁根省 | 흐로닝언 주 | Groningen | Groninga | Гронинген | Groningen | Groningen | Groningen | Groningen | Groningen |
| Limburg | `0x5E080000` | 50.850219148, 5.674453907 | リンビュルフ州 | Limburg | Limbourg | Limburg | Limburgo | Limburgo | 林堡省 | 림뷔르흐 주 | Limburg | Limburgo | Лимбург | Limburg | Limburg | Limburg | Limburg | Limburg |
| North Brabant | `0x5E090000` | 51.69067324, 5.311904093 | ノールト・ブラバント州 | North Brabant | Brabant-Septentrional | Nordbrabant | Brabante Settentrionale | Brabante Septentrional | 北布拉班特省 | 노르트브라반트 주 | Noord-Brabant | Brabante Setentrional | Северный Брабант | North Brabant | North Brabant | North Brabant | North Brabant | North Brabant |
| Overijssel | `0x5E0A0000` | 52.509154676, 6.086442332 | オーベルアイセル州 | Overijssel | Overijssel | Overijssel | Overijssel | Overijssel | 上艾瑟尔省 | 오버레이설 주 | Overijssel | Overijssel | Оверэйсел | Overijssel | Overijssel | Overijssel | Overijssel | Overijssel |
| South Holland | `0x5E0B0000` | 52.080687884, 4.312145515 | ゾイト・ホラント州 | South Holland | Hollande-Méridionale | Südholland | Olanda Meridionale | Holanda Meridional | 南荷兰省 | 자위트홀란트 주 | Zuid-Holland | Holanda Meridional | Южная Голландия | South Holland | South Holland | South Holland | South Holland | South Holland |
| Utrecht | `0x5E0C0000` | 52.086181048, 5.10865647 | ユトレヒト州 | Utrecht | Utrecht | Utrecht | Utrecht | Utrecht | 乌得勒支省 | 위트레흐트 주 | Utrecht | Utrecht | Утрехт | Utrecht | Utrecht | Utrecht | Utrecht | Utrecht |
| Zeeland | `0x5E0D0000` | 51.4984125, 3.609018603 | ゼーラント州 | Zeeland | Zélande | Zeeland | Zelanda | Zelanda | 泽兰省 | 제일란트 주 | Zeeland | Zelândia | Зеландия | Zeeland | Zeeland | Zeeland | Zeeland | Zeeland |

# New Zealand
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x5F` | NZ | ニュージーランド | New Zealand | Nouvelle-Zélande | Neuseeland | Nuova Zelanda | Nueva Zelanda | 新西兰 | 뉴질랜드 | Nieuw-Zeeland | Nova Zelândia | Новая Зеландия | New Zealand | New Zealand | New Zealand | New Zealand | New Zealand |

## New Zealand Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x5F000000` | -36.892090448, 174.759996706 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Wellington | `0x5F020000` | -41.314087468, 174.781969422 | ウェリントン | Wellington | Wellington | Wellington | Wellington | Región de Wellington | 惠灵顿大区 | 웰링턴 | Wellington | Wellington | Веллингтон | Wellington | Wellington | Wellington | Wellington | Wellington |
| Auckland | `0x5F030000` | -36.892090448, 174.759996706 | オークランド | Auckland | Auckland | Auckland | Auckland | Región de Auckland | 奥克兰大区 | 오클랜드 | Auckland | Auckland | Окленд | Auckland | Auckland | Auckland | Auckland | Auckland |
| Bay of Plenty | `0x5F040000` | -37.6776129, 176.16625052999999 | ベイ・オブ・プレンティ | Bay of Plenty | Bay of Plenty | Bay of Plenty | Bay of Plenty | Bahía de Plenty | 普伦蒂湾大区 | 베이오브플렌티 | Bay of Plenty | Bay of Plenty | Бей-оф-Пленти | Bay of Plenty | Bay of Plenty | Bay of Plenty | Bay of Plenty | Bay of Plenty |
| Canterbury | `0x5F050000` | -43.52783256, 172.639629612 | カンタベリー | Canterbury | Canterbury | Canterbury | Canterbury | Canterbury | 坎特伯雷大区 | 캔터베리 | Canterbury | Canterbury | Кентербери | Canterbury | Canterbury | Canterbury | Canterbury | Canterbury |
| Otago | `0x5F060000` | -45.878906752, 170.469823907 | ダニーデン | Otago | Otago | Otago | Otago | Otago | 奥塔戈大区 | 오타고 | Otago | Otago | Отаго | Otago | Otago | Otago | Otago | Otago |
| Hawke's Bay | `0x5F070000` | -39.495850184, 176.885856979 | ホークスベイ | Hawke's Bay | Hawke's Bay | Hawke's Bay | Hawke's Bay | Bahía de Hawke | 霍克湾大区 | 호크스베이 | Hawke's Bay | Hawke's Bay | Хокс-Бей | Hawke's Bay | Hawke's Bay | Hawke's Bay | Hawke's Bay | Hawke's Bay |
| Manawatu-Wanganui | `0x5F080000` | -40.358276932, 175.61693263 | マナワツ・ワンガヌイ | Manawatu-Wanganui | Manawatu-Wanganui | Manawatu-Wanganui | Manawatu-Wanganui | Manawatu-Wanganui | 玛纳瓦图-旺格努伊大区 | 마너와투-왕거누이 | Manawatu-Wanganui | Manawatu-Wanganui | Манавату-Уангануи | Manawatu-Wanganui | Manawatu-Wanganui | Manawatu-Wanganui | Manawatu-Wanganui | Manawatu-Wanganui |
| Nelson | `0x5F090000` | -41.292114812, 173.243879302 | ネルソン・マールボロ | Nelson | Nelson | Nelson | Nelson | Región de Nelson | 纳尔逊区 | 넬슨-말버러 | Nelson | Nelson | Нельсон | Nelson | Nelson | Nelson | Nelson | Nelson |
| Northland | `0x5F0A0000` | -35.716553352, 174.315049207 | ノースランド | Northland | Northland | Northland | Northland | Northland | 北地大区 | 노스랜드 | Northland | Northland | Нортленд | Northland | Northland | Northland | Northland | Northland |
| Southland | `0x5F0C0000` | -46.41174366, 168.371429529 | サウスランド | Southland | Southland | Southland | Southland | Southland | 南地大区 | 사우스랜드 | Southland | Southland | Саутленд | Southland | Southland | Southland | Southland | Southland |
| Taranaki | `0x5F0D0000` | -39.067383391999996, 174.073349331 | タラナキ | Taranaki | Taranaki | Taranaki | Taranaki | Taranaki | 塔拉纳基大区 | 타라나키 | Taranaki | Taranaki | Таранаки | Taranaki | Taranaki | Taranaki | Taranaki | Taranaki |
| Waikato | `0x5F0E0000` | -37.776489852, 175.265369174 | ワイカト | Waikato | Waikato | Waikato | Waikato | Waikato | 怀卡托大区 | 와이카토 | Waikato | Waikato | Уаикато | Waikato | Waikato | Waikato | Waikato | Waikato |
| Gisborne | `0x5F0F0000` | -38.66638242, 178.017451853 | ギズボーン | Gisborne | Gisborne | Gisborne | Gisborne | Gisborne | 吉斯伯恩大区 | 기즈번 | Gisborne | Gisborne | Гисборн | Gisborne | Gisborne | Gisborne | Gisborne | Gisborne |
| West Coast | `0x5F100000` | -42.445679252, 171.211403072 | ウェストコースト | West Coast | West Coast | West Coast | West Coast | Costa Oeste | 西岸大区 | 웨스트코스트 | West Coast | Costa Oeste | Уэст-Кост | West Coast | West Coast | West Coast | West Coast | West Coast |
| Marlborough | `0x5F110000` | -41.511841372, 173.957992572 | マールボロ | Marlborough | Marlborough | Marlborough | Marlborough | Marlborough | 马尔伯勒大区 | 말버러 | Marlborough | Marlborough | Мальборо | Marlborough | Marlborough | Marlborough | Marlborough | Marlborough |
| Tasman | `0x5F120000` | -41.341553288, 173.183454333 | タスマン | Tasman | Tasman | Tasman | Tasman | Tasman | 塔斯曼大区 | 태즈먼 | Tasman | Tasman | Тасман | Tasman | Tasman | Tasman | Tasman | Tasman |

# Norway
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x60` | NO | ノルウェー | Norway | Norvège | Norwegen | Norvegia | Noruega | 挪威 | 노르웨이 | Noorwegen | Noruega | Норвегия | Norway | Norway | Norway | Norway | Norway |

## Norway Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x60000000` | 59.935912404, 10.706205871 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Oslo | `0x60070000` | 59.935912404, 10.706205871 | オスロ | Oslo | Oslo | Oslo | Oslo | Oslo | 奥斯陆 | 오슬로 | Oslo | Oslo | Осло | Oslo | Oslo | Oslo | Oslo | Oslo |
| Akershus | `0x60080000` | 59.935912404, 10.706205871 | アーケシュフース県 | Akershus | Akershus | Akershus | Akershus | Akershus | 阿克什胡斯郡 | 아케르스후스 주 | Akershus | Akershus | Акерсхус | Akershus | Akershus | Akershus | Akershus | Akershus |
| Aust-Agder | `0x60090000` | 58.480223944, 8.778100042 | アウスト・アグデル県 | Aust-Agder | Aust-Agder | Aust-Agder | Aust-Agder | Aust-Agder | 东阿格德尔郡 | 에우스트아그데르 주 | Aust-Agder | Aust-Agder | Эуст-Агдер | Aust-Agder | Aust-Agder | Aust-Agder | Aust-Agder | Aust-Agder |
| Buskerud | `0x600A0000` | 59.732665336000004, 10.200833403 | ブスケルー県 | Buskerud | Buskerud | Buskerud | Buskerud | Buskerud | 布斯克吕郡 | 부스케루 주 | Buskerud | Buskerud | Бускеруд | Buskerud | Buskerud | Buskerud | Buskerud | Buskerud |
| Finnmark | `0x600B0000` | 70.076293148, 29.745564285 | フィンマルク県 | Finnmark | Finnmark | Finnmark | Finnmark | Finnmark | 芬马克郡 | 핀마르크 주 | Finnmark | Finnmark | Финнмарк | Finnmark | Finnmark | Finnmark | Finnmark | Finnmark |
| Hedmark | `0x600C0000` | 60.798339152, 11.052276148 | ヘードマルク県 | Hedmark | Hedmark | Hedmark | Hedmark | Hedmark | 海德马克郡 | 헤드마르크 주 | Hedmark | Hedmark | Хедмарк | Hedmark | Hedmark | Hedmark | Hedmark | Hedmark |
| Hordaland | `0x600D0000` | 60.386351852, 5.32838363 | ホルダラン県 | Hordaland | Hordaland | Hordaland | Hordaland | Hordaland | 霍达兰郡 | 호르달란 주 | Hordaland | Hordaland | Хордаланн | Hordaland | Hordaland | Hordaland | Hordaland | Hordaland |
| Møre og Romsdal | `0x600E0000` | 62.753905536, 7.234516743 | ムーレ・オ・ロムスダール県 | Møre og Romsdal | Møre og Romsdal | Møre og Romsdal | Møre og Romsdal | Møre og Romsdal | 默勒-鲁姆斯达尔郡 | 뫼레오그롬스달 주 | Møre og Romsdal | Møre og Romsdal | Мёре-ог-Румсдал | Møre og Romsdal | Møre og Romsdal | Møre og Romsdal | Møre og Romsdal | Møre og Romsdal |
| Nordland | `0x600F0000` | 67.274779508, 14.403115338 | ヌールラン県 | Nordland | Nordland | Nordland | Nordland | Nordland | 诺尔兰郡 | 노를란 주 | Nordland | Nordland | Нурланн | Nordland | Nordland | Nordland | Nordland | Nordland |
| Nord-Trøndelag | `0x60100000` | 64.055785404, 11.716950807 | ヌール・トロンデラーグ県 | Nord-Trøndelag | Nord-Trøndelag | Nord-Trøndelag | Nord-Trøndelag | Nord-Trøndelag | 北特伦德拉格郡 | 노르트뢰넬라그 주 | Nord-Trøndelag | Nord-Trøndelag | Нур-Трёнделаг | Nord-Trøndelag | Nord-Trøndelag | Nord-Trøndelag | Nord-Trøndelag | Nord-Trøndelag |
| Oppland | `0x60110000` | 61.127928992, 10.431546921 | オップラン県 | Oppland | Oppland | Oppland | Oppland | Oppland | 奥普兰郡 | 오플란 주 | Oppland | Oppland | Оппланн | Oppland | Oppland | Oppland | Oppland | Oppland |
| Rogaland | `0x60120000` | 58.958129212, 5.718399339 | ローガラン県 | Rogaland | Rogaland | Rogaland | Rogaland | Rogaland | 罗加兰郡 | 로갈란 주 | Rogaland | Rogaland | Ругаланн | Rogaland | Rogaland | Rogaland | Rogaland | Rogaland |
| Sogn og Fjordane | `0x60130000` | 61.226805944, 6.789569244 | ソグン・オ・フィヨーラネ県 | Sogn og Fjordane | Sogn og Fjordane | Sogn og Fjordane | Sogn og Fjordane | Sogn og Fjordane | 松恩-菲尤拉讷郡 | 송노피오라네 주 | Sogn og Fjordane | Sogn og Fjordane | Согн-ог-Фьюране | Sogn og Fjordane | Sogn og Fjordane | Sogn og Fjordane | Sogn og Fjordane | Sogn og Fjordane |
| Sør-Trøndelag | `0x60140000` | 63.429564708, 10.393094668 | ソール・トロンデラーグ県 | Sør-Trøndelag | Sør-Trøndelag | Sør-Trøndelag | Sør-Trøndelag | Sør-Trøndelag | 南特伦德拉格郡 | 쇠르트뢰넬라그 주 | Sør-Trøndelag | Sør-Trøndelag | Сёр-Трёнделаг | Sør-Trøndelag | Sør-Trøndelag | Sør-Trøndelag | Sør-Trøndelag | Sør-Trøndelag |
| Telemark | `0x60150000` | 59.205321592, 9.552638281 | テレマルク県 | Telemark | Telemark | Telemark | Telemark | Telemark | 泰勒马克郡 | 텔레마르크 주 | Telemark | Telemark | Телемарк | Telemark | Telemark | Telemark | Telemark | Telemark |
| Troms | `0x60160000` | 69.68078534, 18.940481192 | トロムス県 | Troms | Troms | Troms | Troms | Troms | 特罗姆斯郡 | 트롬스 주 | Troms | Troms | Тромс | Troms | Troms | Troms | Troms | Troms |
| Vest-Agder | `0x60170000` | 58.167113596, 8.003561803 | ヴェスト・アグデル県 | Vest-Agder | Vest-Agder | Vest-Agder | Vest-Agder | Vest-Agder | 西阿格德尔郡 | 베스트아그데르 주 | Vest-Agder | Vest-Agder | Вест-Агдер | Vest-Agder | Vest-Agder | Vest-Agder | Vest-Agder | Vest-Agder |
| Vestfold | `0x60180000` | 59.293212216, 10.420560563 | ヴェストフォル県 | Vestfold | Vestfold | Vestfold | Vestfold | Vestfold | 西福尔郡 | 베스트폴 주 | Vestfold | Vestfold | Вестфолл | Vestfold | Vestfold | Vestfold | Vestfold | Vestfold |
| Østfold | `0x60190000` | 59.287719052, 11.101714759 | エストフォル県 | Østfold | Østfold | Østfold | Østfold | Østfold | 东福尔郡 | 외스트폴 주 | Østfold | Østfold | Эстфолл | Østfold | Østfold | Østfold | Østfold | Østfold |
| Svalbard | `0x601A0000` | 78.211669032, 15.54569657 | スヴァールバル諸島 | Svalbard | Svalbard | Svalbard | Isole Svalbard | Svalbard | 斯瓦尔巴群岛 | 스발바르 제도 | Spitsbergen | Svalbard | Шпицберген | Svalbard | Svalbard | Svalbard | Svalbard | Svalbard |

# Poland
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x61` | PL | ポーランド | Poland | Pologne | Polen | Polonia | Polonia | 波兰 | 폴란드 | Polen | Polónia | Польша | Poland | Poland | Poland | Poland | Poland |

## Poland Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x61000000` | 52.23998964, 21.005916496 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Masovia | `0x61020000` | 52.23998964, 21.005916496 | マゾフシェ | Masovia | Mazovie | Masowien | Masovia | Mazovia | 马佐夫舍省 | 마조프셰 | Mazovië | Masóvia | Мазовецкое воеводство | Masovia | Masovia | Masovia | Masovia | Masovia |
| Lower Silesia | `0x61030000` | 51.11389102, 17.0288549 | ドルヌィ・シロンスク | Lower Silesia | Basse-Silésie | Niederschlesien | Bassa Slesia | Baja Silesia | 下西里西亚省 | 하슐레지엔 | Neder-Silezië | Baixa Silésia | Нижнесилезское воеводство | Lower Silesia | Lower Silesia | Lower Silesia | Lower Silesia | Lower Silesia |
| Kuyavian-Pomeranian Voivodeship | `0x61040000` | 53.113402716, 18.028613478 | クヤヴィ・ポモージェ | Kuyavian-Pomeranian Voivodeship | Cujavie-Poméranie | Kujawien-Pommern | Cuiavia-Pomerania | Cuyavia y Pomerania | 库亚瓦滨海省 | 쿠야비아포메라니아 | Kujavië-Pommeren | Cujávia-Pomerânia | Куявско-Поморское воеводство | Kuyavian-Pomeranian Voivodeship | Kuyavian-Pomeranian Voivodeship | Kuyavian-Pomeranian Voivodeship | Kuyavian-Pomeranian Voivodeship | Kuyavian-Pomeranian Voivodeship |
| Lodz | `0x61050000` | 51.7730707, 19.467826376 | ウッジ | Lodz | Łódź | Lodsch | Łódź | Lodz | 罗兹省 | 우치 | Łódź | Lodz | Лодзинское воеводство | Lodz | Lodz | Lodz | Lodz | Lodz |
| Lublin | `0x61060000` | 51.234740628, 22.571472511 | ルブリン | Lublin | Lublin | Lublin | Lublino | Lublin | 卢布林省 | 루블린 | Lublin | Lublin | Люблинское воеводство | Lublin | Lublin | Lublin | Lublin | Lublin |
| Lubusz | `0x61070000` | 52.7343744, 15.232585367 | ルブシュ | Lubusz | Lubusz | Lebus | Lebus | Lubus | 鲁布斯卡省 | 루부쉬 | Lubusz | Lubusz | Любушское воеводство | Lubusz | Lubusz | Lubusz | Lubusz | Lubusz |
| Lesser Poland | `0x61080000` | 50.053710368, 19.940239769999998 | マウォポルスカ | Lesser Poland | Petite-Pologne | Kleinpolen | Piccola Polonia | Pequeña Polonia | 小波兰省 | 소폴란드 | Klein-Polen | Pequena Polónia | Малопольское воеводство | Lesser Poland | Lesser Poland | Lesser Poland | Lesser Poland | Lesser Poland |
| Opole | `0x61090000` | 50.663451572, 17.918749898 | オポーレ | Opole | Opole | Oppeln | Opole | Opole | 奥波莱省 | 오폴레 | Opole | Opole | Опольское воеводство | Opole | Opole | Opole | Opole | Opole |
| Subcarpathia | `0x610A0000` | 50.037230876, 22.005675074 | ポトカルパチェ | Subcarpathia | Basses-Carpates | Karpatenvorland | Precarpazia | Subcarpacia | 喀尔巴阡山省 | 카르파티아 | Subkarpaten | Subcarpácia | Подкарпатское воеводство | Subcarpathia | Subcarpathia | Subcarpathia | Subcarpathia | Subcarpathia |
| Podlachia | `0x610B0000` | 53.135375372, 23.153749485 | ポドラシェ | Podlachia | Podlachie | Podlachien | Podlachia | Podlaquia | 波德拉斯省 | 포들라셰 | Podlachië | Podláquia | Подляское воеводство | Podlachia | Podlachia | Podlachia | Podlachia | Podlachia |
| Pomerania | `0x610C0000` | 54.35485778, 18.632863168 | ポモージェ | Pomerania | Poméranie | Pommern | Pomerania | Pomerania | 滨海省 | 포메라니아 | Pommeren | Pomerânia | Поморское воеводство | Pomerania | Pomerania | Pomerania | Pomerania | Pomerania |
| Silesia | `0x610D0000` | 50.267943764, 19.011892519 | シュレジエン | Silesia | Silésie | Schlesien | Slesia | Silesia | 西里西亚省 | 슐레지엔 | Silezië | Silésia | Силезское воеводство | Silesia | Silesia | Silesia | Silesia | Silesia |
| Świętokrzyskie | `0x610E0000` | 50.86669864, 20.621393966 | シフィェンティクシシュ | Świętokrzyskie | Sainte-Croix | Heiligkreuz | Santacroce | Santa Cruz | 圣十字省 | 시비엥토크시스키에 | Święty Krzyż | Santa Cruz | Свентокшиское воеводство | Świętokrzyskie | Świętokrzyskie | Świętokrzyskie | Świętokrzyskie | Świętokrzyskie |
| Warmian-Masurian Voivodeship | `0x610F0000` | 53.772582396, 20.484064490999998 | ヴァルミア・マスールィ | Warmian-Masurian Voivodeship | Warmie-Mazurie | Ermland-Masuren | Varmia-Masuria | Varmia y Masuria | 瓦尔米亚马祖尔省 | 바르미아 마수리아 | Ermland-Mazurië | Vármia-Masúria | Варминско-Мазурское воеводство | Warmian-Masurian Voivodeship | Warmian-Masurian Voivodeship | Warmian-Masurian Voivodeship | Warmian-Masurian Voivodeship | Warmian-Masurian Voivodeship |
| Greater Poland | `0x61100000` | 52.388305068, 16.880539067 | ヴィェルコポルスカ | Greater Poland | Grande-Pologne | Großpolen | Grande Polonia | Gran Polonia | 大波兰省 | 대폴란드 | Groot-Polen | Grande Polónia | Великопольское воеводство | Greater Poland | Greater Poland | Greater Poland | Greater Poland | Greater Poland |
| Western Pomerania | `0x61110000` | 53.426513064, 14.551431170999999 | 西ポモージェ | Western Pomerania | Poméranie occidentale | Westpommern | Pomerania Occidentale | Pomerania Occidental | 西滨海省 | 서포메라니아 | West-Pommeren | Pomerânia Ocidental | Западно-Поморское воеводство | Western Pomerania | Western Pomerania | Western Pomerania | Western Pomerania | Western Pomerania |

# Portugal
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x62` | PT | ポルトガル | Portugal | Portugal | Portugal | Portogallo | Portugal | 葡萄牙 | 포르투갈 | Portugal | Portugal | Португалия | Portugal | Portugal | Portugal | Portugal | Portugal |

## Portugal Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x62000000` | 38.721313036, -9.140160384000012 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Lisbon | `0x62020000` | 38.721313036, -9.140160384000012 | リスボン県 | Lisbon | Lisbonne | Lissabon | Lisbona | Distrito de Lisboa | 里斯本区 | 리스보아 주 | Lissabon | Lisboa | Лиссабон | Lisbon | Lisbon | Lisbon | Lisbon | Lisbon |
| Madeira | `0x62070000` | 32.640380488, -16.90751549000001 | マディラ自治州 | Madeira | Madère | Madeira | Madera | Madeira | 马德拉自治区 | 마데이라 주 | Madeira | Madeira | Мадейра | Madeira | Madeira | Madeira | Madeira | Madeira |
| Azores | `0x62080000` | 37.73803668, -25.663642815999992 | アソレス自治州 | Azores | Açores | Azoren | Azzorre | Azores | 亚速尔自治区 | 아소르스 주 | Azoren | Açores | Азорские острова | Azores | Azores | Azores | Azores | Azores |
| Aveiro | `0x62090000` | 40.638427272, -8.651267453000003 | アヴェイロ県 | Aveiro | Aveiro | Aveiro | Aveiro | Distrito de Aveiro | 阿威罗区 | 아베이루 주 | Aveiro | Aveiro | Авейру | Aveiro | Aveiro | Aveiro | Aveiro | Aveiro |
| Beja | `0x620A0000` | 38.01269488, -7.860249677000013 | ベージャ県 | Beja | Beja | Beja | Beja | Distrito de Beja | 贝雅区 | 베자 주 | Beja | Beja | Бежа | Beja | Beja | Beja | Beja | Beja |
| Braga | `0x620B0000` | 41.550292496, -8.420553935000015 | ブラガ県 | Braga | Braga | Braga | Braga | Distrito de Braga | 布拉加区 | 브라가 주 | Braga | Braga | Брага | Braga | Braga | Braga | Braga | Braga |
| Bragança | `0x620C0000` | 41.80297804, -6.7561206979999895 | ブラガンサ県 | Bragança | Bragança | Bragança | Bragança | Distrito de Braganza | 布拉甘萨区 | 브라간사 주 | Bragança | Bragança | Браганса | Bragança | Bragança | Bragança | Bragança | Bragança |
| Castelo Branco | `0x620D0000` | 39.819945836, -7.4867135050000115 | カステロ・ブランコ県 | Castelo Branco | Castelo Branco | Castelo Branco | Castelo Branco | Distrito de Castelo Branco | 布朗库堡区 | 카스텔루브랑쿠 주 | Castelo Branco | Castelo Branco | Каштелу-Бранку | Castelo Branco | Castelo Branco | Castelo Branco | Castelo Branco | Castelo Branco |
| Coimbra | `0x620E0000` | 40.20996048, -8.426047114 | コインブラ県 | Coimbra | Coimbra | Coimbra | Coimbra | Distrito de Coímbra | 科英布拉区 | 코임브라 주 | Coimbra | Coimbra | Коимбра | Coimbra | Coimbra | Coimbra | Coimbra | Coimbra |
| Évora | `0x620F0000` | 38.567504444, -7.904195109 | エヴォラ県 | Évora | Évora | Évora | Évora | Distrito de Évora | 埃武拉区 | 에보라 주 | Évora | Évora | Эвора | Évora | Évora | Évora | Évora | Évora |
| Faro | `0x62100000` | 37.012939032, -7.931661004000006 | ファーロ県 | Faro | Faro | Faro | Faro | Distrito de Faro | 法鲁区 | 파로 주 | Faro | Faro | Фару | Faro | Faro | Faro | Faro | Faro |
| Guarda | `0x62110000` | 40.534057156, -7.266986344999992 | グアルダ県 | Guarda | Guarda | Guarda | Guarda | Distrito de Guarda | 瓜达区 | 구아르다 주 | Guarda | Guarda | Гуарда | Guarda | Guarda | Guarda | Guarda | Guarda |
| Leiria | `0x62120000` | 39.74304154, -8.805076465000013 | レイリア県 | Leiria | Leiria | Leiria | Leiria | Distrito de Leiria | 莱里亚区 | 레이리아 주 | Leiria | Leiria | Лейрия | Leiria | Leiria | Leiria | Leiria | Leiria |
| Portalegre | `0x62130000` | 39.287108928, -7.431781715 | ポルタレグレ県 | Portalegre | Portalegre | Portalegre | Portalegre | Distrito de Portalegre | 波塔莱格里区 | 포르탈레그르 주 | Portalegre | Portalegre | Порталегре | Portalegre | Portalegre | Portalegre | Portalegre | Portalegre |
| Porto | `0x62140000` | 41.149291524, -8.607322021000016 | ポルト県 | Porto | Porto | Porto | Porto | Distrito de Oporto | 波尔图区 | 포르투 주 | Porto | Porto | Порту | Porto | Porto | Porto | Porto | Porto |
| Santarém | `0x62150000` | 39.232177288, -8.684226526999993 | サンタレン県 | Santarém | Santarém | Santarém | Santarém | Distrito de Santarém | 圣塔伦区 | 산타렝 주 | Santarém | Santarém | Сантарен | Santarém | Santarém | Santarém | Santarém | Santarém |
| Setúbal | `0x62160000` | 38.523559132, -8.887474150000003 | セトゥーバル県 | Setúbal | Setúbal | Setúbal | Setúbal | Distrito de Setúbal | 塞图巴尔区 | 세투발 주 | Setúbal | Setúbal | Сетубал | Setúbal | Setúbal | Setúbal | Setúbal | Setúbal |
| Viana do Castelo | `0x62170000` | 41.69311476, -8.827049181000007 | ヴィアナ・ド・カステロ県 | Viana do Castelo | Viana do Castelo | Viana do Castelo | Viana do Castelo | Distrito de Viana do Castelo | 维亚纳堡区 | 비아나두카스텔루 주 | Viana do Castelo | Viana do Castelo | Виана-ду-Каштелу | Viana do Castelo | Viana do Castelo | Viana do Castelo | Viana do Castelo | Viana do Castelo |
| Vila Real | `0x62180000` | 41.292113788, -7.744892918000005 | ヴィラ・レアル県 | Vila Real | Vila Real | Vila Real | Vila Real | Distrito de Vila Real | 雷阿尔城区 | 빌라헤알 주 | Vila Real | Vila Real | Вила-Реал | Vila Real | Vila Real | Vila Real | Vila Real | Vila Real |
| Viseu | `0x62190000` | 40.654906764, -7.909688288000012 | ヴィゼウ県 | Viseu | Viseu | Viseu | Viseu | Distrito de Viseu | 维塞乌区 | 비제우 주 | Viseu | Viseu | Визеу | Viseu | Viseu | Viseu | Viseu | Viseu |

# Romania
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x63` | RO | ルーマニア | Romania | Roumanie | Rumänien | Romania | Rumanía | 罗马尼亚 | 루마니아 | Roemenië | Roménia | Румыния | Romania | Romania | Romania | Romania | Romania |

## Romania Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x63000000` | 44.428710432, 26.081613892 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Bucharest | `0x63020000` | 44.428710432, 26.081613892 | ブカレスト州 | Bucharest | Bucarest | Bukarest | Bucarest | Bucarest | 布加勒斯特市 | 부쿠레슈티 주 | Boekarest | Bucareste | Бухарест | Bucharest | Bucharest | Bucharest | Bucharest | Bucharest |
| Alba | `0x63030000` | 46.065673304, 23.56573791 | アルバ州 | Alba | Alba | Alba | Alba | Alba | 阿尔巴县 | 알바 주 | Alba | Alba | Алба | Alba | Alba | Alba | Alba | Alba |
| Arad | `0x63040000` | 46.181029748, 21.31353452 | アラド州 | Arad | Arad | Arad | Arad | Arad | 阿拉德县 | 아라드 주 | Arad | Arad | Арад | Arad | Arad | Arad | Arad | Arad |
| Arges | `0x63050000` | 44.846190896, 24.878607691 | アルジェシュ州 | Arges | Argeş | Argeş | Argeş | Argeş | 阿尔杰什县 | 아르제슈 주 | Argeş | Arges | Арджеш | Arges | Arges | Arges | Arges | Arges |
| Bacau | `0x63060000` | 46.565551228, 26.9165771 | バカウ州 | Bacau | Bacău | Bacău | Bacău | Bacău | 巴克乌县 | 바커우 주 | Bacău | Bacău | Бакэу | Bacau | Bacau | Bacau | Bacau | Bacau |
| Bihor | `0x63070000` | 47.065429152, 21.912291031 | ビホル州 | Bihor | Bihor | Bihor | Bihor | Bihor | 比霍尔县 | 비호르 주 | Bihor | Bihor | Бихор | Bihor | Bihor | Bihor | Bihor | Bihor |
| Bistrita-Nasaud | `0x63080000` | 47.13134712, 24.49957834 | ビストリツァ・ナサウド州 | Bistrita-Nasaud | Bistrita-Năsăud | Bistrita-Năsăud | Bistrita-Năsăud | Bistrita-Năsăud | 比斯特里察-讷瑟乌德县 | 비스트리차너서우드 주 | Bistrita-Năsăud | Bistrita-Năsăud | Бистрица-Нэсэуд | Bistrita-Nasaud | Bistrita-Nasaud | Bistrita-Nasaud | Bistrita-Nasaud | Bistrita-Nasaud |
| Botosani | `0x63090000` | 47.746581488, 26.663890866 | ボトシャニ州 | Botosani | Botoşani | Botoşani | Botoşani | Botoşani | 博托沙尼县 | 보토샤니 주 | Botoşani | Botoşani | Ботошани | Botosani | Botosani | Botosani | Botosani | Botosani |
| Braila | `0x630A0000` | 45.280150852, 27.965774289 | ブライラ州 | Braila | Brăila | Brăila | Brăila | Brăila | 布勒伊拉县 | 브러일라 주 | Brăila | Brăila | Брэила | Braila | Braila | Braila | Braila | Braila |
| Brasov | `0x630B0000` | 45.64819284, 25.614693676999998 | ブラショヴ州 | Brasov | Braşov | Braşov | Braşov | Braşov | 布拉索夫县 | 브라쇼브 주 | Braşov | Braşov | Брашов | Brasov | Brasov | Brasov | Brasov | Brasov |
| Buzau | `0x630C0000` | 45.148314916, 26.812206699 | ブザウ州 | Buzau | Buzău | Buzău | Buzău | Buzău | 布泽乌县 | 부저우 주 | Buzău | Buzău | Бузэу | Buzau | Buzau | Buzau | Buzau | Buzau |
| Calarasi | `0x630D0000` | 44.197997544, 27.328565525 | カララシ州 | Calarasi | Călăraşi | Călăraşi | Călăraşi | Călăraşi | 克勒拉希县 | 컬러라시 주 | Călăraşi | Călăraşi | Кэлэраши | Calarasi | Calarasi | Calarasi | Calarasi | Calarasi |
| Caras-Severin | `0x630E0000` | 45.296630344, 21.879331957 | カラシュ・セヴェリン州 | Caras-Severin | Caraş-Severin | Caraş-Severin | Caraş-Severin | Caraş-Severin | 卡拉什-塞维林县 | 카라슈세베린 주 | Caraş-Severin | Caraş-Severin | Караш-Северин | Caras-Severin | Caras-Severin | Caras-Severin | Caras-Severin | Caras-Severin |
| Cluj | `0x630F0000` | 46.779784624, 23.582217447 | クルージュ州 | Cluj | Cluj | Cluj | Cluj | Cluj | 克卢日县 | 클루지 주 | Cluj | Cluj | Клуж | Cluj | Cluj | Cluj | Cluj | Cluj |
| Constanta | `0x63100000` | 44.181518052, 28.630448947999998 | コンスタンツァ州 | Constanta | Constanta | Constanta | Costanza | Constanza | 康斯坦察县 | 콘스탄차 주 | Constanta | Constanta | Констанца | Constanta | Constanta | Constanta | Constanta | Constanta |
| Covasna | `0x63110000` | 45.862426236, 25.795968584 | コヴァスナ州 | Covasna | Covasna | Covasna | Covasna | Covasna | 科瓦斯纳县 | 코바스나 주 | Covasna | Covasna | Ковасна | Covasna | Covasna | Covasna | Covasna | Covasna |
| Dâmbovita | `0x63120000` | 44.93408152, 25.455391486 | ドゥンボビツァ州 | Dâmbovita | Dâmbovita | Dâmbovita | Dâmbovita | Dâmbovita | 登博维察县 | 듬보비차 주 | Dâmbovita | Dâmbovita | Дымбовица | Dâmbovita | Dâmbovita | Dâmbovita | Dâmbovita | Dâmbovita |
| Dolj | `0x63130000` | 44.313353988, 23.812930965 | ドルジュ州 | Dolj | Dolj | Dolj | Dolj | Dolj | 多尔日县 | 돌지 주 | Dolj | Dolj | Долж | Dolj | Dolj | Dolj | Dolj | Dolj |
| Galati | `0x63140000` | 45.42846628, 28.031692437 | ガラツィ州 | Galati | Galati | Galati | Galati | Galati | 加拉茨县 | 갈라치 주 | Galati | Galati | Галац | Galati | Galati | Galati | Galati | Galati |
| Giurgiu | `0x63150000` | 43.895873524, 25.966257133 | ジュルジュ州 | Giurgiu | Giurgiu | Giurgiu | Giurgiu | Giurgiu | 久尔久县 | 지우르지우 주 | Giurgiu | Giurgiu | Джурджу | Giurgiu | Giurgiu | Giurgiu | Giurgiu | Giurgiu |
| Gorj | `0x63160000` | 45.049437964, 23.263613065 | ゴルジュ州 | Gorj | Gorj | Gorj | Gorj | Gorj | 戈尔日县 | 고르지 주 | Gorj | Gorj | Горж | Gorj | Gorj | Gorj | Gorj | Gorj |
| Harghita | `0x63170000` | 46.36230416, 25.795968584 | ハルギタ州 | Harghita | Harghita | Harghita | Harghita | Harghita | 哈尔吉塔县 | 하르기타 주 | Harghita | Harghita | Харгита | Harghita | Harghita | Harghita | Harghita | Harghita |
| Hunedoara | `0x63180000` | 45.878905728, 22.901063251 | フネドアラ州 | Hunedoara | Hunedoara | Hunedoara | Hunedoara | Hunedoara | 胡内多阿拉县 | 후네도아라 주 | Hunedoara | Hunedoara | Хунедоара | Hunedoara | Hunedoara | Hunedoara | Hunedoara | Hunedoara |
| Ialomita | `0x63190000` | 44.566039532, 27.378004136 | ヤロミツァ州 | Ialomita | Ialomita | Ialomita | Ialomita | Ialomita | 雅洛米察县 | 이알로미차 주 | Ialomita | Ialomita | Яломица | Ialomita | Ialomita | Ialomita | Ialomita | Ialomita |
| Iasi | `0x631A0000` | 47.164306104, 27.564772222 | ヤシ州 | Iasi | Iaşi | Iaşi | Iaşi | Iaşi | 雅西县 | 이아시 주 | Iaşi | Iasi | Яссы | Iasi | Iasi | Iasi | Iasi | Iasi |
| Ilfov | `0x631B0000` | 44.566039532, 25.949777596 | イルホヴ州 | Ilfov | Ilfov | Ilfov | Ilfov | Ilfov | 伊尔福夫县 | 일포브 주 | Ilfov | Ilfov | Илфов | Ilfov | Ilfov | Ilfov | Ilfov | Ilfov |
| Maramures | `0x631C0000` | 47.647704536, 23.582217447 | マラムレシュ州 | Maramures | Maramureş | Maramureş | Maramureş | Maramureş | 马拉穆列什县 | 마라무레슈 주 | Maramureş | Maramures | Марамуреш | Maramures | Maramures | Maramures | Maramures | Maramures |
| Mehedinti | `0x631D0000` | 44.6319575, 22.648377017 | メヘディンツィ州 | Mehedinti | Mehedinti | Mehedinti | Mehedinti | Mehedinti | 梅赫丁茨县 | 메헤딘치 주 | Mehedinti | Mehedinti | Мехединци | Mehedinti | Mehedinti | Mehedinti | Mehedinti | Mehedinti |
| Mures | `0x631E0000` | 46.538085408, 24.549016951 | ムレシュ州 | Mures | Mureş | Mureş | Mureş | Mureş | 穆列什县 | 무레슈 주 | Mureş | Mures | Муреш | Mures | Mures | Mures | Mures | Mures |
| Neamt | `0x631F0000` | 46.928100052, 26.361766021 | ネアムツ州 | Neamt | Neamt | Neamt | Neamt | Neamt | 尼亚姆茨县 | 네암츠 주 | Neamt | Neamt | Нямц | Neamt | Neamt | Neamt | Neamt | Neamt |
| Olt | `0x63200000` | 44.428710432, 24.345769328 | オルト州 | Olt | Olt | Olt | Olt | Olt | 奥尔特县 | 올트 주 | Olt | Olt | Олт | Olt | Olt | Olt | Olt | Olt |
| Prahova | `0x63210000` | 44.928588356, 26.015695744 | プラホヴァ州 | Prahova | Prahova | Prahova | Prahova | Prahova | 普拉霍瓦县 | 프라호바 주 | Prahova | Prahova | Прахова | Prahova | Prahova | Prahova | Prahova | Prahova |
| Salaj | `0x63220000` | 47.180785596, 23.054872263 | サラージュ州 | Salaj | Sălaj | Sălaj | Sălaj | Sălaj | 瑟拉日县 | 설라지 주 | Sălaj | Salaj | Сэлаж | Salaj | Salaj | Salaj | Salaj | Salaj |
| Satu Mare | `0x63230000` | 47.785033636, 22.879090535 | サトゥ・マーレ州 | Satu Mare | Satu Mare | Satu Mare | Satu Mare | Satu Mare | 萨图-马雷县 | 사투마레 주 | Satu Mare | Satu Mare | Сату-Маре | Satu Mare | Satu Mare | Satu Mare | Satu Mare | Satu Mare |
| Sibiu | `0x63240000` | 45.780028776, 24.148014884 | シビウ州 | Sibiu | Sibiu | Sibiu | Sibiu | Sibiu | 锡比乌县 | 시비우 주 | Sibiu | Sibiu | Сибиу | Sibiu | Sibiu | Sibiu | Sibiu | Sibiu |
| Suceava | `0x63250000` | 47.647704536, 26.246409262 | スチャヴァ州 | Suceava | Suceava | Suceava | Suceava | Suceava | 苏恰瓦县 | 수체아바 주 | Suceava | Suceava | Сучава | Suceava | Suceava | Suceava | Suceava | Suceava |
| Teleorman | `0x63260000` | 43.961791492, 25.329048369 | テレオルマン州 | Teleorman | Teleorman | Teleorman | Teleorman | Teleorman | 特列奥尔曼县 | 텔레오르만 주 | Teleorman | Teleorman | Телеорман | Teleorman | Teleorman | Teleorman | Teleorman | Teleorman |
| Timis | `0x63270000` | 45.752562956, 21.220150477 | ティミシュ州 | Timis | Timiş | Timiş | Timiş | Timiş | 蒂米什县 | 티미슈 주 | Timiş | Timis | Тимиш | Timis | Timis | Timis | Timis | Timis |
| Tulcea | `0x63280000` | 45.164794408, 28.795244317999998 | トゥルチャ州 | Tulcea | Tulcea | Tulcea | Tulcea | Tulcea | 图尔恰县 | 툴체아 주 | Tulcea | Tulcea | Тулча | Tulcea | Tulcea | Tulcea | Tulcea | Tulcea |
| Vâlcea | `0x63290000` | 45.104369604, 24.373235223 | ヴルチャ州 | Vâlcea | Vâlcea | Vâlcea | Vâlcea | Vâlcea | 沃尔恰县 | 블체아 주 | Vâlcea | Vâlcea | Вылча | Vâlcea | Vâlcea | Vâlcea | Vâlcea | Vâlcea |
| Vaslui | `0x632A0000` | 46.63696236, 27.718581234 | ヴァスルイ州 | Vaslui | Vaslui | Vaslui | Vaslui | Vaslui | 瓦斯卢伊县 | 바슬루이 주 | Vaslui | Vaslui | Васлуй | Vaslui | Vaslui | Vaslui | Vaslui | Vaslui |
| Vrancea | `0x632B0000` | 45.697631316, 27.180249692 | フランチェア州 | Vrancea | Vrancea | Vrancea | Vrancea | Vrancea | 弗朗恰县 | 브란체아 주 | Vrancea | Vrancea | Вранча | Vrancea | Vrancea | Vrancea | Vrancea | Vrancea |

# Russia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x64` | RU | ロシア | Russia | Russie | Russland | Russia | Rusia | 俄罗斯 | 러시아 | Rusland | Rússia | Россия | Russia | Russia | Russia | Russia | Russia |

## Russia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x64000000` | 55.766600928, 37.611796613 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Moscow City | `0x64090000` | 55.766600928, 37.611796613 | モスクワ市 | Moscow City | Moscou (ville) | Moskau (Stadt) | Mosca | Ciudad de Moscú | 莫斯科市 | 모스크바 | Moskou (stad) | Moscovo (cidade) | Москва | Moscow City | Moscow City | Moscow City | Moscow City | Moscow City |
| Adygey | `0x640A0000` | 44.598998516, 40.078233984 | アディゲ共和国 | Adygey | Adyguée | Republik Adygeja | Repubblica di Adighezia | República de Adigueya | 阿迪格共和国 | 아디게야 공화국 | Adygië | Adiguésia (república) | Республика Адыгея | Adygey | Adygey | Adygey | Adygey | Adygey |
| Gorno-Altay | `0x640B0000` | 51.948851948, 85.962758171 | アルタイ共和国 | Gorno-Altay | Altaï (république) | Republik Altai | Repubblica dell'Altaj | República de Altái | 阿尔泰共和国 | 고르노알타이 공화국 | Altaj (republiek) | Altai (república) | Республика Алтай | Gorno-Altay | Gorno-Altay | Gorno-Altay | Gorno-Altay | Gorno-Altay |
| Altay | `0x640C0000` | 53.349608768, 83.749007034 | アルタイ地方 | Altay | Altaï (kraï) | Region Altai | Territorio dell'Altaj | Territorio de Altái | 阿尔泰边疆区 | 알타이 지방 | Altaj (kraj) | Altai (território) | Алтайский край | Altay | Altay | Altay | Altay | Altay |
| Amur | `0x640D0000` | 50.361327552, 127.513164127 | アムール州 | Amur | Amour | Oblast Amur | Regione dell'Amur | Región de Amur | 阿穆尔州 | 아무르 주 | Amoer | Amur (região) | Амурская область | Amur | Amur | Amur | Amur | Amur |
| Arkhangel'sk | `0x640E0000` | 64.528197508, 40.528674662 | アルハンゲリスク州 | Arkhangel'sk | Arkhangelsk | Oblast Archangelsk | Regione di Arcangelo | Región de Arjánguelsk | 阿尔汉格尔斯克州 | 아르한겔스크 주 | Archangelsk | Arkhangelsk (região) | Архангельская область | Arkhangel'sk | Arkhangel'sk | Arkhangel'sk | Arkhangel'sk | Arkhangel'sk |
| Astrakhan' | `0x640F0000` | 46.345824668, 48.048836713 | アストラハン州 | Astrakhan' | Astrakhan | Oblast Astrachan | Regione di Astrachan' | Región de Astracán | 阿斯特拉罕州 | 아스트라한 주 | Astrachan | Astracã (região) | Астраханская область | Astrakhan' | Astrakhan' | Astrakhan' | Astrakhan' | Astrakhan' |
| Bashkortostan | `0x64100000` | 54.744872424, 55.964507652 | バシコルトスタン共和国 | Bashkortostan | Bachkirie | Republik Baschkortostan | Repubblica del Baškortostan | República de Baskortostán | 巴什科尔托斯坦共和国 | 바시키르 공화국 | Basjkirostan | Basquíria (república) | Республика Башкортостан | Bashkortostan | Bashkortostan | Bashkortostan | Bashkortostan | Bashkortostan |
| Belgorod | `0x64110000` | 50.597533604, 36.595558498 | ベルゴロド州 | Belgorod | Belgorod | Oblast Belgorod | Regione di Belgorod | Región de Bélgorod | 别尔哥罗德州 | 벨고로트 주 | Belgorod | Belgorod (região) | Белгородская область | Belgorod | Belgorod | Belgorod | Belgorod | Belgorod |
| Bryansk | `0x64120000` | 53.245238652, 34.365327824 | ブリャンスク州 | Bryansk | Briansk | Oblast Brjansk | Regione di Brjansk | Región de Briansk | 布良斯克州 | 브랸스크 주 | Brjansk | Briansk (região) | Брянская область | Bryansk | Bryansk | Bryansk | Bryansk | Bryansk |
| Buryat | `0x64130000` | 51.82800234, 107.594897073 | ブリヤート共和国 | Buryat | Bouriatie | Republik Burjatien | Repubblica di Buriazia | República de Buriatia | 布里亚特共和国 | 부랴트 공화국 | Boerjatië | Buriácia (república) | Республика Бурятия | Buryat | Buryat | Buryat | Buryat | Buryat |
| Chechnya | `0x64140000` | 43.31359814, 45.681276564 | チェチェン共和国 | Chechnya | Tchétchénie | Republik Tschetschenien | Repubblica Cecena | República de Chechenia | 车臣共和国 | 체첸 공화국 | Tsjetsjenië | Chechénia (república) | Чеченская республика | Chechnya | Chechnya | Chechnya | Chechnya | Chechnya |
| Chelyabinsk | `0x64150000` | 55.162352888, 61.397261682999996 | チェリャビンスク州 | Chelyabinsk | Tcheliabinsk | Oblast Tscheljabinsk | Regione di Čeljabinsk | Región de Cheliábinsk | 车里雅宾斯克州 | 첼랴빈스크 주 | Tsjeljabinsk | Chelyabinsk (região) | Челябинская область | Chelyabinsk | Chelyabinsk | Chelyabinsk | Chelyabinsk | Chelyabinsk |
| Chukot | `0x64160000` | 64.731444576, 177.512079385 | チュクチ自治管区 | Chukot | Tchoukotka | Autonomer Kreis der Tschuktschen | Circondario Autonomo di Čukotka | Distrito autónomo de Chukotka | 楚科奇自治区 | 축치 자치구 | Tsjoekotka | Chukotka (distrito) | Чукотский автономный округ | Chukot | Chukot | Chukot | Chukot | Chukot |
| Chuvash | `0x64170000` | 56.129149752000004, 47.230353042 | チュヴァシ共和国 | Chuvash | Tchouvachie | Republik Tschuwaschien | Repubblica Ciuvascia | República de Chuvasia | 楚瓦什共和国 | 추바시 공화국 | Tsjoevasjië | Chuváchia (república) | Чувашская республика | Chuvash | Chuvash | Chuvash | Chuvash | Chuvash |
| Dagestan | `0x64180000` | 42.962035644000004, 47.499518813 | ダゲスタン共和国 | Dagestan | Daguestan | Republik Dagestan | Repubblica del Dagestan | República de Daguestán | 达吉斯坦共和国 | 다게스탄 공화국 | Dagestan | Daguestão (república) | Республика Дагестан | Dagestan | Dagestan | Dagestan | Dagestan | Dagestan |
| Ingushetia | `0x64190000` | 43.165282712, 44.813354282 | イングーシ共和国 | Ingushetia | Ingouchie | Republik Inguschetien | Repubblica di Inguscezia | República de Ingusetia | 印古什共和国 | 인구시 공화국 | Ingoesjetië | Ingúchia (república) | Республика Ингушетия | Ingushetia | Ingushetia | Ingushetia | Ingushetia | Ingushetia |
| Irkutsk | `0x641A0000` | 52.278441788, 104.298989673 | イルクーツク州 | Irkutsk | Irkoutsk | Oblast Irkutsk | Regione di Irkutsk | Región de Irkutsk | 伊尔库茨克州 | 이르쿠츠크 주 | Irkoetsk | Irkutsk (região) | Иркутская область | Irkutsk | Irkutsk | Irkutsk | Irkutsk | Irkutsk |
| Ivanovo | `0x641B0000` | 56.9915765, 40.97911534 | イヴァノヴォ州 | Ivanovo | Ivanovo | Oblast Iwanowo | Regione di Ivanovo | Región de Ivánovo | 伊万诺沃州 | 이바노보 주 | Ivanovo | Ivanovo (região) | Ивановская область | Ivanovo | Ivanovo | Ivanovo | Ivanovo | Ivanovo |
| Kabardin-Balkar | `0x641C0000` | 43.47839306, 43.615841259999996 | カバルダ・バルカル共和国 | Kabardin-Balkar | Kabardino-Balkarie | Republik Kabardino-Balkarien | Repubblica di Cabardino-Balcaria | República de Kabardino-Balkaria | 卡巴尔达-巴尔卡尔共和国 | 카바르디노발카르 공화국 | Kabardië-Balkarië | Cabárdia-Balcária (república) | Кабардино-Балкарская республика | Kabardin-Balkar | Kabardin-Balkar | Kabardin-Balkar | Kabardin-Balkar | Kabardin-Balkar |
| Kaliningrad | `0x641D0000` | 54.711913440000004, 20.511530386 | カリーニングラード州 | Kaliningrad | Kaliningrad | Oblast Kaliningrad | Regione di Kaliningrad | Región de Kaliningrado | 加里宁格勒州 | 칼리닌그라드 주 | Kaliningrad | Kaliningrado (região) | Калининградская область | Kaliningrad | Kaliningrad | Kaliningrad | Kaliningrad | Kaliningrad |
| Kalmyk | `0x641E0000` | 46.312865684, 44.264036382 | カルムイク共和国 | Kalmyk | Kalmoukie | Republik Kalmückien | Repubblica di Calmucchia | República de Kalmukia | 卡尔梅克共和国 | 칼미크 공화국 | Kalmukkië | Calmúquia (república) | Республика Калмыкия | Kalmyk | Kalmyk | Kalmyk | Kalmyk | Kalmyk |
| Kaluga | `0x641F0000` | 54.54711852, 36.282447295 | カルーガ州 | Kaluga | Kalouga | Oblast Kaluga | Regione di Kaluga | Región de Kaluga | 卡卢加州 | 칼루가 주 | Kaloega | Kaluga (região) | Калужская область | Kaluga | Kaluga | Kaluga | Kaluga | Kaluga |
| Kamchatka | `0x64200000` | 53.014525764, 158.648502699 | カムチャツカ地方 | Kamchatka | Kamtchatka | Region Kamtschatka | Territorio della Kamčatka | Territorio de Kamchatka | 勘察加边疆区 | 캄차카 지방 | Kamtsjatka | Kamchatka (território) | Камчатский край | Kamchatka | Kamchatka | Kamchatka | Kamchatka | Kamchatka |
| Karachay-Cherkess | `0x64210000` | 44.214477036, 42.044792066 | カラチャイ・チェルケス共和国 | Karachay-Cherkess | Karatchaïévo-Tcherkessie | Republik Karatschai-Tscherkessien | Repubblica Karačajevo-Čerkessia | República de Karacháyevo-Cherkesia | 卡拉恰耶夫-切尔克斯共和国 | 카라차예보체르케스카야 공화국 | Karatsjaj-Tsjerkessië | Karachay-Cherkess (república) | Карачаево-Черкесская республика | Karachay-Cherkess | Karachay-Cherkess | Karachay-Cherkess | Karachay-Cherkess | Karachay-Cherkess |
| Karelia | `0x64220000` | 61.781615508, 34.33236875 | カレリア共和国 | Karelia | Carélie | Republik Karelien | 씒⭤ꥠ軷bblica di Carelia | República de Carelia | 卡累利阿共和国 | 카렐리야 공화국 | Karelië | Carélia (república) | Республика Карелия | Karelia | Karelia | Karelia | Karelia | Karelia |
| Kemerovo | `0x64230000` | 55.360106792, 86.089101288 | ケメロヴォ州 | Kemerovo | Kemerovo | Oblast Kemerowo | Regione di Kemerovo | Región de Kémerovo | 克麦罗沃州 | 케메로보 주 | Kemerovo | Kemerovo (região) | Кемеровская область | Kemerovo | Kemerovo | Kemerovo | Kemerovo | Kemerovo |
| Khabarovsk | `0x64240000` | 48.482665464, 135.066285252 | ハバロフスク地方 | Khabarovsk | Khabarovsk | Region Chabarowsk | Territorio di Chabarovsk | Territorio de Jabárovsk | 哈巴罗夫斯克边疆区 | 하바롭스크 지방 | Chabarovsk | Khabarovsk (território) | Хабаровский край | Khabarovsk | Khabarovsk | Khabarovsk | Khabarovsk | Khabarovsk |
| Khakassia | `0x64250000` | 53.712157592, 91.411991739 | ハカス共和国 | Khakassia | Khakassie | Republik Chakassien | Repubblica di Khakassia | República de Jakasia | 哈卡斯共和国 | 하카스 공화국 | Chakassië | Cacássia (república) | Республика Хакасия | Khakassia | Khakassia | Khakassia | Khakassia | Khakassia |
| Khanty-Mansiy | `0x64260000` | 60.996093056, 68.999821419 | ハンティ・マンシ自治管区 | Khanty-Mansiy | Khantys-Mansis | Autonomer Kreis der Chanten und Mansen | Circondario Autonomo di Chantia-Mansia | Distrito autónomo de Janti-Mansi | 汉特-曼西自治区 | 한티만시 자치구 | Chanto-Mansië | Khanty-Mansiy | Ханты-Мансийский автономный округ | Khanty-Mansiy | Khanty-Mansiy | Khanty-Mansiy | Khanty-Mansiy | Khanty-Mansiy |
| Kirov | `0x64270000` | 58.595580388, 49.647351802 | キーロフ州 | Kirov | Kirov | Oblast Kirow | Regione di Kirov | Región de Kírov | 基洛夫州 | 키로프 주 | Kírov | Kirov (região) | Кировская область | Kirov | Kirov | Kirov | Kirov | Kirov |
| Komi | `0x64280000` | 61.666259064, 50.81190575 | コミ共和国 | Komi | Komis | Republik Komi | Repubblica di Komi | República de Komi | 科米共和国 | 코미 공화국 | Komi | Komi (república) | Республика Коми | Komi | Komi | Komi | Komi | Komi |
| Kostroma | `0x64290000` | 57.766112624, 40.929676729 | コストロマ州 | Kostroma | Kostroma | Oblast Kostroma | Regione di Kostroma | Región de Kostromá | 科斯特罗马州 | 코스트로마 주 | Kostroma | Kostroma (região) | Костромская область | Kostroma | Kostroma | Kostroma | Kostroma | Kostroma |
| Krasnodar | `0x642A0000` | 45.032958472, 38.963118647 | クラスノダール地方 | Krasnodar | Krasnodar | Region Krasnodar | Territorio di Krasnodar | Territorio de Krasnodar | 克拉斯诺达尔边疆区 | 크라스노다르 지방 | Krasnodar | Krasnodar (território) | Краснодарский край | Krasnodar | Krasnodar | Krasnodar | Krasnodar | Krasnodar |
| Krasnoyarsk | `0x642B0000` | 55.997313816, 92.884163711 | クラスノヤルスク地方 | Krasnoyarsk | Krasnoïarsk | Region Krasnojarsk | Territorio di Krasnojarsk | Territorio de Krasnoyarsk | 克拉斯诺亚尔斯克边疆区 | 크라스노야르스크 지방 | Krasnojarsk | Krasnoyarsk (território) | Красноярский край | Krasnoyarsk | Krasnoyarsk | Krasnoyarsk | Krasnoyarsk | Krasnoyarsk |
| Kurgan | `0x642C0000` | 55.464476908, 65.346857384 | クルガン州 | Kurgan | Kourgan | Oblast Kurgan | Regione di Kurgan | Región de Kurgán | 库尔干州 | 쿠르간 주 | Koergan | Kurgan (região) | Курганская область | Kurgan | Kurgan | Kurgan | Kurgan | Kurgan |
| Kursk | `0x642D0000` | 51.712645896, 36.178076894 | クルスク州 | Kursk | Koursk | Oblast Kursk | Regione di Kursk | Región de Kursk | 库尔斯克州 | 쿠르스크 주 | Koersk | Kursk (região) | Курская область | Kursk | Kursk | Kursk | Kursk | Kursk |
| Leningrad | `0x642E0000` | 59.946898732, 30.311361722 | レニングラード州 | Leningrad | Léningrad | Oblast Leningrad | Regione di Leningrado | Región de Leningrado | 列宁格勒州 | 레닌그라드 주 | Leningrad | Leninegrado (região) | Ленинградская область | Leningrad | Leningrad | Leningrad | Leningrad | Leningrad |
| Lipetsk | `0x642F0000` | 52.613524792, 39.594834232 | リペツク州 | Lipetsk | Lipetsk | Oblast Lipezk | Regione di Lipeck | Región de Lípetsk | 利佩茨克州 | 리페츠크 주 | Lipetsk | Lipetsk (região) | Липецкая область | Lipetsk | Lipetsk | Lipetsk | Lipetsk | Lipetsk |
| Magadan | `0x64300000` | 59.562377252, 150.798749908 | マガダン州 | Magadan | Magadan | Oblast Magadan | Regione di Magadan | Región de Magadán | 马加丹州 | 마가단 주 | Magadan | Magadão (região) | Магаданская область | Magadan | Magadan | Magadan | Magadan | Magadan |
| Mariy-El | `0x64310000` | 56.629027676, 47.862068627 | マリ・エル共和国 | Mariy-El | Maris | Republik Mari El | Repubblica di Mari-El | República de Mari-El | 马里-埃尔共和国 | 마리옐 공화국 | Mari El | Mari El (república) | Республика Марий Эл | Mariy-El | Mariy-El | Mariy-El | Mariy-El | Mariy-El |
| Mordovia | `0x64320000` | 54.179076532, 45.181397275 | モルドヴィア共和国 | Mordovia | Mordovie | Republik Mordwinien | Repubblica di Mordovia | República de Mordovia | 莫尔多瓦社会主义共和国 | 모르도바 공화국 | Mordovië | Mordóvia (república) | Республика Мордовия | Mordovia | Mordovia | Mordovia | Mordovia | Mordovia |
| Moscow | `0x64330000` | 55.766600928, 37.611796613 | モスクワ州 | Moscow | Moscou (oblast) | Oblast Moskau | Regione di Mosca | Región de Moscú | 莫斯科州 | 모스크바 주 | Moskou (oblast) | Moscovo (região) | Московская область | Moscow | Moscow | Moscow | Moscow | Moscow |
| Murmansk | `0x64340000` | 68.961180856, 33.079923938 | ムルマンスク州 | Murmansk | Mourmansk | Oblast Murmansk | Regione di Murmansk | Región de Múrmansk | 摩尔曼斯克州 | 무르만스크 주 | Moermansk | Murmansk (região) | Мурманская область | Murmansk | Murmansk | Murmansk | Murmansk | Murmansk |
| Nenets | `0x64350000` | 67.631835168, 53.047629603 | ネネツ自治管区 | Nenets | Nénétsie | Autonomer Kreis der Nenzen | Circondario Autonomo di Nenec | Distrito autónomo de Nenetsia | 涅涅茨自治区 | 네네츠 자치구 | Nenetsië | Nenetsia (distrito) | Ненецкий автономный округ | Nenets | Nenets | Nenets | Nenets | Nenets |
| Nizhegorod | `0x64360000` | 56.33239682, 43.994870610999996 | ニジニ・ノヴゴロド州 | Nizhegorod | Nijni Novgorod | Oblast Nischni Nowgorod | Regione di Nižnij Novgorod | Región de Nizhni Nóvgorod | 下诺夫哥罗德州 | 니제고로드 주 | Nizjni Novgorod | Nizhegorod (região) | Нижегородская область | Nizhegorod | Nizhegorod | Nizhegorod | Nizhegorod | Nizhegorod |
| Novgorod | `0x64370000` | 58.546141912, 31.278161225999998 | ノヴゴロド州 | Novgorod | Novgorod | Oblast Nowgorod | Regione di Novgorod | Región de Nóvgorod | 诺夫哥罗德州 | 노브고로드 주 | Novgorod | Novgorod (região) | Новгородская область | Novgorod | Novgorod | Novgorod | Novgorod | Novgorod |
| Novosibirsk | `0x64380000` | 55.01403746, 82.930523363 | ノヴォシビルスク州 | Novosibirsk | Novossibirsk | Oblast Nowosibirsk | Regione di Novosibirsk | Región de Novosibirsk | 新西伯利亚州 | 노보시비르스크 주 | Novosibirsk | Novosibirsk (região) | Новосибирская область | Novosibirsk | Novosibirsk | Novosibirsk | Novosibirsk | Novosibirsk |
| Omsk | `0x64390000` | 54.981078476, 73.361405545 | オムスク州 | Omsk | Omsk | Oblast Omsk | Regione di Omsk | Región de Omsk | 鄂木斯克州 | 옴스크 주 | Omsk | Omsk (região) | Омская область | Omsk | Omsk | Omsk | Omsk | Omsk |
| Orenburg | `0x643A0000` | 51.778563864, 55.09658537 | オレンブルク州 | Orenburg | Orenbourg | Oblast Orenburg | Regione di Orenburg | Región de Oremburgo | 奥伦堡州 | 오렌부르크 주 | Orenburg | Oremburgo (região) | Оренбургская область | Orenburg | Orenburg | Orenburg | Orenburg | Orenburg |
| Orel | `0x643B0000` | 52.965087288, 36.062720135 | オリョール州 | Orel | Orel | Oblast Orjol | Regione di Orël | Región de Oriol | 奥廖尔州 | 오룔 주 | Orjol | Orel (região) | Орловская область | Orel | Orel | Orel | Orel | Orel |
| Penza | `0x643C0000` | 53.195800176, 45.016601905 | ペンザ州 | Penza | Penza | Oblast Pensa | Regione di Penza | Región de Penza | 奔萨州 | 펜자 주 | Penza | Penza (região) | Пензенская область | Penza | Penza | Penza | Penza | Penza |
| Perm' | `0x643D0000` | 57.996825512, 56.316071108 | ペルミ地方 | Perm' | Perm | Region Perm | Territorio di Perm' | Territorio de Perm | 彼尔姆边疆区 | 페름 지방 | Perm | Perm (território) | Пермский край | Perm' | Perm' | Perm' | Perm' | Perm' |
| Primor'ye | `0x643E0000` | 43.132323728, 131.896720969 | 沿海地方 | Primor'ye | Primorie | Region Primorje | Territorio del Litorale | Territorio de Primorie | 滨海边疆区 | 프리모르스키 지방 | Primorski | Primorie (território) | Приморский край | Primor'ye | Primor'ye | Primor'ye | Primor'ye | Primor'ye |
| Pskov | `0x643F0000` | 57.8155511, 28.328324103 | プスコフ州 | Pskov | Pskov | Oblast Pskow | Regione di Pskov | Región de Pskov | 普斯科夫州 | 프스코프 부 | Pskov | Pskov (região) | Псковская область | Pskov | Pskov | Pskov | Pskov | Pskov |
| Rostov | `0x64400000` | 47.230224072, 39.699204633 | ロストフ州 | Rostov | Rostov | Oblast Rostow | Regione di Rostov | Región de Rostov | 罗斯托夫州 | 로스토프 주 | Rostov | Rostov (região) | Ростовская область | Rostov | Rostov | Rostov | Rostov | Rostov |
| Ryazan' | `0x64410000` | 54.596556996, 39.699204633 | リャザン州 | Ryazan' | Riazan | Oblast Rjasan | Regione di Rjazan' | Región de Riazán | 梁赞州 | 랴잔 주 | Rjazan | Riazan (região) | Рязанская область | Ryazan' | Ryazan' | Ryazan' | Ryazan' | Ryazan' |
| Sakha | `0x64420000` | 62.028807888, 129.732408443 | サハ共和国 | Sakha | Sakha (Iakoutie) | Republik Sacha (Jakutien) | Repubblica di Sacha (Jacuzia) | República de Sajá (Yakutia) | 萨哈共和国 | 사하 공화국 | Jakoetië | Iacútia (república) | Республика Саха (Якутия) | Sakha | Sakha | Sakha | Sakha | Sakha |
| Sakhalin | `0x64430000` | 50.218505288, 142.998435728 | サハリン州 | Sakhalin | Sakhaline | Oblast Sachalin | Regione di Sachalin | Región de Sajalín | 萨哈林州 | 사할린 주 | Sachalin | Sacalina (região) | Сахалинская область | Sakhalin | Sakhalin | Sakhalin | Sakhalin | Sakhalin |
| Samara | `0x64440000` | 53.22875916, 50.163710628 | サマラ州 | Samara | Samara | Oblast Samara | Regione di Samara | Región de Samara | 萨马拉州 | 사마라 주 | Samara | Samara (região) | Самарская область | Samara | Samara | Samara | Samara | Samara |
| St. Petersburg | `0x64450000` | 59.946898732, 30.311361722 | サンクトペテルブルク市 | St. Petersburg | Saint-Pétersbourg | Sankt Petersburg | San Pietroburgo | San Petersburgo | 圣彼得堡市 | 상트페테르부르크 주 | Sint-Petersburg | São Petersburgo | Санкт-Петербург | St. Petersburg | St. Petersburg | St. Petersburg | St. Petersburg | St. Petersburg |
| Saratov | `0x64460000` | 51.531371484, 46.016360483 | サラトフ州 | Saratov | Saratov | Oblast Saratow | Regione di Saratov | Región de Sarátov | 萨拉托夫州 | 사라토프 주 | Saratov | Saratov (região) | Саратовская область | Saratov | Saratov | Saratov | Saratov | Saratov |
| North Ossetia | `0x64470000` | 43.01147412, 44.648558912 | 北オセチア共和国 | North Ossetia | Ossétie-du-Nord-Alanie | Republik Nordossetien-Alanien | Repubblica dell'Ossezia Settentrionale-Alania | República de Osetia del Norte-Alania | 北奥塞梯-阿兰社会主义共和国 | 북오세티야 공화국 | Noord-Ossetië | Ossétia-Alânia do Norte (república) | Республика Северная Осетия-Алания | North Ossetia | North Ossetia | North Ossetia | North Ossetia | North Ossetia |
| Smolensk | `0x64480000` | 54.783324572, 32.047206286 | スモレンスク州 | Smolensk | Smolensk | Oblast Smolensk | Regione di Smolensk | Región de Smolensk | 斯摩棱斯克州 | 스몰렌스크 주 | Smolensk | Smolensk (região) | Смоленская область | Smolensk | Smolensk | Smolensk | Smolensk | Smolensk |
| Stavropol' | `0x64490000` | 45.049437964, 41.978873918 | スタヴロポリ地方 | Stavropol' | Stavropol | Region Stawropol | Territorio di Stavropol' | Territorio de Stávropol | 斯塔夫罗波尔边疆区 | 스타브로폴 지방 | Stavropol | Stavropol (território) | Ставропольский край | Stavropol' | Stavropol' | Stavropol' | Stavropol' | Stavropol' |
| Sverdlovsk | `0x644A0000` | 56.832274744, 60.578778012 | スヴェルドロフスク州 | Sverdlovsk | Sverdlovsk | Oblast Swerdlowsk | Regione di Sverdlovsk | Región de Sverdlovsk | 斯维尔德洛夫斯克州 | 스베르들롭스크 주 | Sverdlovsk | Sverdlovsk (região) | Свердловская область | Sverdlovsk | Sverdlovsk | Sverdlovsk | Sverdlovsk | Sverdlovsk |
| Tambov | `0x644B0000` | 52.712401744, 41.429556018 | タンボフ州 | Tambov | Tambov | Oblast Tambow | Regione di Tambov | Región de Tambov | 坦波夫州 | 탐보프 주 | Tambov | Tambov (região) | Тамбовская область | Tambov | Tambov | Tambov | Tambov | Tambov |
| Tatarstan | `0x644C0000` | 55.78308042, 49.16395205 | タタールスタン共和国 | Tatarstan | Tatarstan | Republik Tatarstan | Repubblica del Tatarstan | República de Tartaristán | 鞑靼斯坦共和国 | 타타르 공화국 | Tatarije | Tartária (república) | Республика Татарстан | Tatarstan | Tatarstan | Tatarstan | Tatarstan | Tatarstan |
| Tomsk | `0x644D0000` | 56.49719174, 84.96299959299999 | トムスク州 | Tomsk | Tomsk | Oblast Tomsk | Regione di Tomsk | Región de Tomsk | 托木斯克州 | 톰스크 주 | Tomsk | Tomsk (região) | Томская область | Tomsk | Tomsk | Tomsk | Tomsk | Tomsk |
| Tula | `0x644E0000` | 54.195556024, 37.611796613 | トゥーラ州 | Tula | Toula | Oblast Tula | Regione di Tula | Región de Tula | 图拉州 | 툴라 주 | Toela | Tula (região) | Тульская область | Tula | Tula | Tula | Tula | Tula |
| Tver' | `0x644F0000` | 56.8542474, 35.914404302 | トヴェリ州 | Tver' | Tver | Oblast Twer | Regione di Tver | Región de Tver | 特维尔州 | 트베리 주 | Tver | Tver (região) | Тверская область | Tver' | Tver' | Tver' | Tver' | Tver' |
| Tyumen' | `0x64500000` | 57.145385092, 65.528132291 | チュメニ州 | Tyumen' | Tioumen | Oblast Tjumen | Regione di Tjumen' | Región de Tiumén | 秋明州 | 튜멘 주 | Tjoemen | Tiumen (região) | Тюменская область | Tyumen' | Tyumen' | Tyumen' | Tyumen' | Tyumen' |
| Tuva | `0x64510000` | 51.712645896, 94.449719726 | トゥヴァ共和国 | Tuva | Touva | Republik Tuwa | Repubblica di Tuva | República de Tuvá | 特瓦共和国 | 투바 공화국 | Toeva | Tuva (república) | Республика Тыва | Tuva | Tuva | Tuva | Tuva | Tuva |
| Udmurt | `0x64520000` | 56.832274744, 53.179465899 | ウドムルト共和国 | Udmurt | Oudmourtie | Republik Udmurtien | Repubblica Udmurta | República de Udmurtia | 乌德穆尔特共和国 | 우드무르트 공화국 | Oedmoertië | Udmúrtia (república) | Удмуртская республика | Udmurt | Udmurt | Udmurt | Udmurt | Udmurt |
| Ul'yanovsk | `0x64530000` | 54.316405632, 48.361947916 | ウリヤノフスク州 | Ul'yanovsk | Oulianovsk | Oblast Uljanowsk | Regione di Ul'janovsk | Región de Uliánovsk | 乌里扬诺夫斯克州 | 울리야놉스크 주 | Oeljanovsk | Ulianovsk (região) | Ульяновская область | Ul'yanovsk | Ul'yanovsk | Ul'yanovsk | Ul'yanovsk | Ul'yanovsk |
| Vladimir | `0x64540000` | 56.145629244, 40.413317903 | ヴラジーミル州 | Vladimir | Vladimir | Oblast Wladimir | Regione di Vladimir | Región de Vladímir | 弗拉基米尔州 | 블라디미르 주 | Vladimir | Vladimir (região) | Владимирская область | Vladimir | Vladimir | Vladimir | Vladimir | Vladimir |
| Volgograd | `0x64550000` | 48.69689886, 44.516722616 | ヴォルゴグラード州 | Volgograd | Volgograd | Oblast Wolgograd | Regione di Volgograd | Región de Volgogrado | 伏尔加格勒州 | 볼고그라드 주 | Wolgograd | Volgogrado (região) | Волгоградская область | Volgograd | Volgograd | Volgograd | Volgograd | Volgograd |
| Vologda | `0x64560000` | 59.21630792, 39.896959077 | ヴォログダ州 | Vologda | Vologda | Oblast Wologda | Regione di Vologda | Región de Vólogda | 沃洛格达州 | 볼로그다 주 | Vologda | Vologda (região) | Вологодская область | Vologda | Vologda | Vologda | Vologda | Vologda |
| Voronezh | `0x64570000` | 51.668700584, 39.210311702 | ヴォロネジ州 | Voronezh | Voronej | Oblast Woronesch | Regione di Voronež | Región de Vorónezh | 沃罗涅什州 | 보로네시 주 | Voronezj | Voronezh (região) | Воронежская область | Voronezh | Voronezh | Voronezh | Voronezh | Voronezh |
| Yamal-Nenets | `0x64580000` | 66.533202368, 66.599302196 | ヤマロ・ネネツ自治管区 | Yamal-Nenets | Iamalie | Autonomer Kreis der Jamal-Nenzen | Circondario Autonomo Jamalo-Nenec | Distrito autónomo de Yamalo-Nénets | 亚马尔-涅涅茨自治区 | 야말로네네츠 자치구 | Jamalië | Yamal-Nenets | Ямало-Ненецкий автономный округ | Yamal-Nenets | Yamal-Nenets | Yamal-Nenets | Yamal-Nenets | Yamal-Nenets |
| Yaroslavl' | `0x64590000` | 57.612304032, 39.847520466 | ヤロスラヴリ州 | Yaroslavl' | Iaroslavl | Oblast Jaroslawl | Regione di Jaroslavl' | Región de Yaroslavl | 雅罗斯拉夫尔州 | 야로슬라블 주 | Jaroslavl | Yaroslavl (região) | Ярославская область | Yaroslavl' | Yaroslavl' | Yaroslavl' | Yaroslavl' | Yaroslavl' |
| Yevrey | `0x645A0000` | 48.77929632, 132.929438621 | ユダヤ自治州 | Yevrey | Oblast autonome juif | Jüdisches Autonomes Gebiet | Regione Autonoma Ebraica | Región Autónoma Hebrea | 犹太自治州 | 유태인 자치주 | Joodse Autonome Oblast | Região Autónoma Judaica | Еврейская автономная область | Yevrey | Yevrey | Yevrey | Yevrey | Yevrey |
| Zabaykal'ye | `0x645B0000` | 52.0477289, 113.500064498 | ザバイカリエ地方 | Zabaykal'ye | Transbaïkalie | Region Transbaikalien | Territorio della Transbajkalia | Territorio de Zabaikalie | 外贝加尔边疆区 | 자바이칼 지방 | Transbaikal | Transbaikalia (território) | Забайкальский край | Zabaykal'ye | Zabaykal'ye | Zabaykal'ye | Zabaykal'ye | Zabaykal'ye |

# Serbia and Kosovo
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x65` | RS | セルビア・コソヴォ | Serbia and Kosovo | Serbie et Kosovo | Serbien und Kosovo | Serbia e Kosovo | Serbia y Kosovo | 塞尔维亚及科索沃 | 세르비아 코소보 | Servië en Kosovo | Sérvia e Kosovo | Сербия и Косово | Serbia and Kosovo | Serbia and Kosovo | Serbia and Kosovo | Serbia and Kosovo | Serbia and Kosovo |

## Serbia and Kosovo Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x65000000` | 44.829711404, 20.484064490999998 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Serbia and Kosovo | `0x65010000` | 44.829711404, 20.484064490999998 | セルビア・コソヴォ | Serbia and Kosovo | Serbie et Kosovo | Serbien und Kosovo | Serbia e Kosovo | Serbia y Kosovo | 塞尔维亚及科索沃 | 세르비아 코소보 | Servië en Kosovo | Sérvia e Kosovo | Сербия и Косово | Serbia and Kosovo | Serbia and Kosovo | Serbia and Kosovo | Serbia and Kosovo | Serbia and Kosovo |

# Slovakia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x66` | SK | スロバキア | Slovakia | Slovaquie | Slowakei | Slovacchia | Eslovaquia | 斯洛伐克 | 슬로바키아 | Slowakije | Eslováquia | Словакия | Slovakia | Slovakia | Slovakia | Slovakia | Slovakia |

## Slovakia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x66000000` | 48.14758246, 17.122238943 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Bratislava | `0x66020000` | 48.14758246, 17.122238943 | ブラティスラバ | Bratislava | Bratislava | Bratislava | Bratislava | Bratislava | 布拉迪斯拉发州 | 브라티슬라바 | Bratislava | Bratislava | Братиславский край | Bratislava | Bratislava | Bratislava | Bratislava | Bratislava |
| Banská Bystrica | `0x66030000` | 48.72436468, 19.143728815 | バンスカ・ビストリツァ | Banská Bystrica | Banská Bystrica | Banská Bystrica | Banská Bystrica | Banská Bystrica | 班斯卡-比斯特里察州 | 반스카비스트리차 | Banská Bystrica | Banská Bystrica | Банскобистрицкий край | Banská Bystrica | Banská Bystrica | Banská Bystrica | Banská Bystrica | Banská Bystrica |
| Košice | `0x66040000` | 48.718871516, 21.253109551 | コシツェ | Košice | Košice | Košice | Košice | Košice | 科希策州 | 코시체 | Košice | Košice | Кошицкий край | Košice | Košice | Košice | Košice | Košice |
| Nitra | `0x66050000` | 48.301391052, 18.07255891 | 二トラ | Nitra | Nitra | Nitra | Nitra | Nitra | 尼特拉州 | 니트라 | Nitra | Nitra | Нитранский край | Nitra | Nitra | Nitra | Nitra | Nitra |
| Prešov | `0x66060000` | 48.966063896, 21.253109551 | プレショフ | Prešov | Prešov | Prešov | Prešov | Prešov | 普雷绍夫州 | 프레쇼프 | Prešov | Prešov | Прешовский край | Prešov | Prešov | Prešov | Prešov | Prešov |
| Trencín | `0x66070000` | 48.8891596, 18.050586194 | トレンチーン | Trencín | Trenčín | Trenčín | Trenčín | Trenčín | 特伦钦州 | 트렌친 | Trenčín | Trencin | Тренчинский край | Trencín | Trencín | Trencín | Trencín | Trencín |
| Trnava | `0x66080000` | 48.372802184, 17.572679621 | トルナバ | Trnava | Trnava | Trnava | Trnava | Trnava | 特尔纳瓦州 | 트르나바 | Trnava | Trnava | Трнавский край | Trnava | Trnava | Trnava | Trnava | Trnava |
| Žilina | `0x66090000` | 49.21874944, 18.726247211 | ジリナ | Žilina | Žilina | Žilina | Žilina | Žilina | 日利纳州 | 질리나 | Žilina | Zilina | Жилинский край | Žilina | Žilina | Žilina | Žilina | Žilina |

# Slovenia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x67` | SI | スロベニア | Slovenia | Slovénie | Slowenien | Slovenia | Eslovenia | 斯洛文尼亚 | 슬로베니아 | Slovenië | Eslovénia | Словения | Slovenia | Slovenia | Slovenia | Slovenia | Slovenia |

## Slovenia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x67000000` | 46.049193812, 14.50199256 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Slovenia | `0x67010000` | 46.049193812, 14.50199256 | スロベニア | Slovenia | Slovénie | Slowenien | Slovenia | Eslovenia | 斯洛文尼亚 | 슬로베니아 | Slovenië | Eslovénia | Словения | Slovenia | Slovenia | Slovenia | Slovenia | Slovenia |

# South Africa
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x68` | ZA | 南アフリカ | South Africa | Afrique du Sud | Südafrika | Sudafrica | Sudáfrica | 南非 | 남아프리카 공화국 | Zuid-Afrika | África do Sul | ЮАР | South Africa | South Africa | South Africa | South Africa | South Africa |

## South Africa Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x68000000` | -26.141968499999997, 28.048171974 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Gauteng | `0x68020000` | -26.141968499999997, 28.048171974 | ハウテン州 | Gauteng | Gauteng | Gauteng | Gauteng | Gauteng | 豪登省 | 하우텡 주 | Gauteng | Gauteng | Гаутенг  | Gauteng | Gauteng | Gauteng | Gauteng | Gauteng |
| Western Cape | `0x68030000` | -33.920288724, 18.424122366 | ウェスタン・ケープ州 | Western Cape | Cap-Occidental | Westkap | Capo Occidentale | Cabo Occidental | 西开普省 | 웨스턴케이프 주 | West-Kaap | Cabo Ocidental | Западно-Капская провинция | Western Cape | Western Cape | Western Cape | Western Cape | Western Cape |
| Northern Cape | `0x68040000` | -28.740235071999997, 24.77423729 | ノーザン・ケープ州 | Northern Cape | Cap-du-Nord | Nordkap | Capo Settentrionale | Cabo Septentrional | 北开普省 | 노던케이프 주 | Noord-Kaap | Cabo do Norte | Северо-Капская провинция | Northern Cape | Northern Cape | Northern Cape | Northern Cape | Northern Cape |
| Eastern Cape | `0x68050000` | -32.8710944, 27.383497315 | イースタン・ケープ州 | Eastern Cape | Cap-Oriental | Ostkap | Capo Orientale | Cabo Oriental | 东开普省 | 이스턴케이프 주 | Oost-Kaap | Cabo Oriental | Восточно-Капская провинция | Eastern Cape | Eastern Cape | Eastern Cape | Eastern Cape | Eastern Cape |
| KwaZulu-Natal | `0x68060000` | -29.597168656, 30.382773049 | クワズールー・ナタール州 | KwaZulu-Natal | KwaZulu-Natal | KwaZulu-Natal | KwaZulu-Natal | KwaZulu-Natal | 夸祖鲁-纳塔尔省 | 콰줄루나탈 주 | KwaZoeloe-Natal | KwaZulu-Natal | Квазулу-Натал | KwaZulu-Natal | KwaZulu-Natal | KwaZulu-Natal | KwaZulu-Natal | KwaZulu-Natal |
| Free State | `0x68070000` | -29.113770224, 26.218943367 | フリー・ステート州 | Free State | État-Libre | Freistaat | Stato Libero | Estado Libre | 自由邦省 | 프리스테이트 주 | Vrijstaat | Estado Livre | Фри-Стейт | Free State | Free State | Free State | Free State | Free State |
| North West | `0x68080000` | -25.850830807999998, 25.647652751 | ノース・ウェスト州 | North West | Nord-Ouest | Nordwest | Provincia del Nordovest | Noroeste | 西北省 | 노스웨스트 주 | Noordwest | Noroeste | Северо-Западная провинция | North West | North West | North West | North West | North West |
| Mpumalanga | `0x68090000` | -25.460816163999993, 30.98152956 | ムプマランガ州 | Mpumalanga | Mpumalanga | Mpumalanga | Mpumalanga | Mpumalanga | 普马兰加省 | 음푸말랑가 주 | Mpumalanga | Mpumalanga | Мпумаланга | Mpumalanga | Mpumalanga | Mpumalanga | Mpumalanga | Mpumalanga |
| Limpopo | `0x680A0000` | -23.889771260000003, 29.437946261 | リンポポ州 | Limpopo | Limpopo | Limpopo | Limpopo | Limpopo | 林波波省 | 림포푸 주 | Limpopo | Limpopo | Лимпопо | Limpopo | Limpopo | Limpopo | Limpopo | Limpopo |

# Spain
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x69` | ES | スペイン | Spain | Espagne | Spanien | Spagna | España | 西班牙 | 스페인 | Spanje | Espanha | Испания | Spain | Spain | Spain | Spain | Spain |

## Spain Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x69000000` | 40.413207548, -3.7019131739999978 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Madrid | `0x69020000` | 40.413207548, -3.7019131739999978 | マドリード州 | Madrid | Madrid | Madrid | Madrid | Madrid | 马德里自治区 | 마드리드 주 | Madrid | Madrid | Мадрид | Madrid | Madrid | Madrid | Madrid | Madrid |
| Andalusia | `0x69030000` | 37.38098102, -5.99806199599999 | アンダルシーア州 | Andalusia | Andalousie | Andalusien | Andalusia | Andalucía | 安达卢西亚自治区 | 안달루시아 주 | Andalusië | Andaluzia | Андалусия | Andalusia | Andalusia | Andalusia | Andalusia | Andalusia |
| Aragon | `0x69040000` | 41.649169448, -0.8674328099999968 | アラゴン州 | Aragon | Aragon | Aragonien | Aragona | Aragón | 阿拉贡自治区 | 아라곤 주 | Aragón | Aragão | Арагон | Aragon | Aragon | Aragon | Aragon | Aragon |
| Principality of Asturias | `0x69050000` | 43.363036616, -5.833266626000011 | アストゥーリアス州 | Principality of Asturias | Asturies | Asturien | Principato delle Asturie | Asturias | 阿斯图利亚斯自治区 | 아스투리아스 주 | Asturië | Astúrias | Астурия | Principality of Asturias | Principality of Asturias | Principality of Asturias | Principality of Asturias | Principality of Asturias |
| Balearic Islands | `0x69060000` | 39.567260292, 2.63672592 | バレアーレス諸島 | Balearic Islands | Îles Baléares | Balearische Inseln | Baleari | Illes Balears | 巴利阿里自治区 | 발레아레스 제도 | Balearen | Ilhas Baleares | Балеарские острова | Balearic Islands | Balearic Islands | Balearic Islands | Balearic Islands | Balearic Islands |
| Canary Islands | `0x69070000` | 28.119506516, -15.429850339000012 | カナリア諸島 | Canary Islands | Îles Canaries | Kanarische Inseln | Canarie | Canarias | 加那利自治区 | 카나리아 제도 | Canarische Eilanden | Canárias | Канарские острова | Canary Islands | Canary Islands | Canary Islands | Canary Islands | Canary Islands |
| Cantabria | `0x69080000` | 43.461913568, -3.8007903959999965 | カンタブリア州 | Cantabria | Cantabrie | Kantabrien | Cantabria | Cantabria | 坎塔布利亚自治区 | 칸타브리아 주 | Cantabrië | Cantábria | Кантабрия | Cantabria | Cantabria | Cantabria | Cantabria | Cantabria |
| Castile-La Mancha | `0x69090000` | 39.85290482, -4.020517556000016 | カスティーリャ・ラ・マンチャ | Castile-La Mancha | Castille-La Manche | Kastilien-La Mancha | Castiglia-La Mancha | Castilla-La Mancha | 卡斯蒂利亚-拉曼恰自治区 | 카스티야라만차 | Castilië-La Mancha | Castela-La Mancha | Кастилия-Ла-Манча | Castile-La Mancha | Castile-La Mancha | Castile-La Mancha | Castile-La Mancha | Castile-La Mancha |
| Castilla y León | `0x690A0000` | 41.63818312, -4.718151288999991 | カスティーリャ・レオン | Castilla y León | Castille-et-León | Kastilien-León | Castiglia e León | Castilla y León | 卡斯蒂利亚-莱昂自治区 | 카스티야이레온 | Castilië en León | Castela e Leão | Кастилия и Леон | Castilla y León | Castilla y León | Castilla y León | Castilla y León | Castilla y León |
| Catalonia | `0x690B0000` | 41.380004412, 2.169805705 | カタルーニャ | Catalonia | Catalogne | Katalonien | Catalogna | Cataluña | 加泰罗尼亚自治区 | 카탈루냐 | Catalonië | Catalunha | Каталония | Catalonia | Catalonia | Catalonia | Catalonia | Catalonia |
| Valencia | `0x690C0000` | 39.46838334, -0.3620603420000066 | バレンシア州 | Valencia | Valence | Valencia | Comunità Valenciana | Comunitat Valenciana | 巴伦西亚自治区 | 발렌시아 주 | Valencia | Valência | Валенсия | Valencia | Valencia | Valencia | Valencia | Valencia |
| Extremadura | `0x690D0000` | 38.913573776, -6.338639094000001 | エストレマドゥーラ | Extremadura | Estrémadure | Extremadura | Estremadura | Extremadura | 埃斯特雷马杜拉自治区 | 에스트레마두라 | Extremadura | Estremadura | Эстремадура | Extremadura | Extremadura | Extremadura | Extremadura | Extremadura |
| Galicia | `0x690E0000` | 42.87414502, -8.541403873000007 | ガリーシア | Galicia | Galice | Galicien | Galizia | Galicia | 加利西亚自治区 | 갈리시아 | Galicië | Galiza | Галисия | Galicia | Galicia | Galicia | Galicia | Galicia |
| Murcia | `0x690F0000` | 37.979735896, -1.1201190440000062 | ムルシア州 | Murcia | Murcie | Murcia | Murcia | Murcia | 穆尔西亚自治区 | 무르시아 주 | Murcia | Múrcia | Мурсия | Murcia | Murcia | Murcia | Murcia | Murcia |
| Navarre | `0x69100000` | 42.813720216, -1.6474642279999898 | ナバーラ州 | Navarre | Navarre | Navarra | Navarra | Navarra | 纳瓦拉自治区 | 나바라 주 | Navarra | Navarra | Наварра | Navarre | Navarre | Navarre | Navarre | Navarre |
| Basque Country | `0x69110000` | 42.8466792, -2.6691955219999954 | バスク | Basque Country | Pays basque | Baskenland | Paesi Baschi | País Vasco | 巴斯克自治区 | 바스크 | Baskenland | País Basco | Страна Басков | Basque Country | Basque Country | Basque Country | Basque Country | Basque Country |
| La Rioja | `0x69120000` | 42.46215772, -2.4494683620000046 | ラ・リオハ州 | La Rioja | La Rioja | La Rioja | La Rioja | La Rioja | 拉里奥哈自治区 | 라리오하 | La Rioja | La Rioja | Риоха | La Rioja | La Rioja | La Rioja | La Rioja | La Rioja |
| Ceuta | `0x69130000` | 35.881347248, -5.3114146210000115 | セウタ | Ceuta | Ceuta | Ceuta | Ceuta | Ceuta | 休达 | 세우타 | Ceuta | Ceuta | Сеута | Ceuta | Ceuta | Ceuta | Ceuta | Ceuta |
| Melilla | `0x69140000` | 35.299071864, -2.9493476510000107 | メリラ | Melilla | Melilla | Melilla | Melilla | Melilla | 梅利利亚 | 멜리야 | Melilla | Melilla | Мелилья | Melilla | Melilla | Melilla | Melilla | Melilla |

# Swaziland
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x6A` | SZ | スワジランド | Swaziland | Swaziland | Swasiland | Swaziland | Suazilandia | 斯威士兰 | 스와질란드 | Swaziland | Suazilândia | Свазиленд | Swaziland | Swaziland | Swaziland | Swaziland | Swaziland |

## Swaziland Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x6A000000` | -26.317749747999997, 31.135338572 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Hhohho | `0x6A020000` | -26.317749747999997, 31.135338572 | ホホ | Hhohho | Hhohho | Hhohho | Hhohho | Hhohho | 霍霍区 | 호호 | Hhohho | Hhohho | Хохо | Hhohho | Hhohho | Hhohho | Hhohho | Hhohho |
| Lubombo | `0x6A030000` | -26.449585684, 31.948329064 | ルボンボ | Lubombo | Lubombo | Lubombo | Lubombo | Lubombo | 卢邦博区 | 로밤바 | Lubombo | Lubombo | Лубомбо | Lubombo | Lubombo | Lubombo | Lubombo | Lubombo |
| Manzini | `0x6A040000` | -26.488037831999996, 31.382531627 | マンジニ | Manzini | Manzini | Manzini | Manzini | Manzini | 曼齐尼区 | 만지니 | Manzini | Manzini | Манзини | Manzini | Manzini | Manzini | Manzini | Manzini |
| Shiselweni | `0x6A050000` | -27.1032722, 31.20125672 | シセルウェニ | Shiselweni | Shiselweni | Shiselweni | Shiselweni | Shiselweni | 希塞卢韦尼区 | 시셀웨니 | Shiselweni | Shiselweni | Шиселвени | Shiselweni | Shiselweni | Shiselweni | Shiselweni | Shiselweni |

# Sweden
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x6B` | SE | スウェーデン | Sweden | Suède | Schweden | Svezia | Suecia | 瑞典 | 스웨덴 | Zweden | Suécia | Швеция | Sweden | Sweden | Sweden | Sweden | Sweden |

## Sweden Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x6B000000` | 59.282225888, 18.07255891 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Stockholm County | `0x6B020000` | 59.282225888, 18.07255891 | ストックホルム州 | Stockholm County | Stockholm | Stockholms län | Stoccolma | Estocolmo | 斯德哥尔摩省 | 스톡홀름 주 | Stockholms län | Estocolmo | Лен Стокгольм | Stockholm County | Stockholm County | Stockholm County | Stockholm County | Stockholm County |
| Skåne County | `0x6B030000` | 55.596312844, 12.996861513999999 | スコーネ州 | Skåne County | Skåne | Skåne län | Scania | Escania | 斯科耐省 | 스코네 주 | Skåne län | Escânia | Лен Сконе | Skåne County | Skåne County | Skåne County | Skåne County | Skåne County |
| Västra Götaland County | `0x6B040000` | 57.70568782, 11.969637041 | ヴェストラ・イェータランド州 | Västra Götaland County | Västra Götaland | Västra Götalands län | Västra Götaland | Västra Götaland | 西约特兰省 | 베스트라예탈란드 주 | Västra Götalands län | Västra Götaland | Лен Вестра-Гёталанд | Västra Götaland County | Västra Götaland County | Västra Götaland County | Västra Götaland County | Västra Götaland County |
| Östergötland County | `0x6B050000` | 58.397826484, 15.633587434 | エステルイェトランド州 | Östergötland County | Östergötland | Östergötlands län | Östergötland | Östergötland | 东约特兰省 | 외스테르예틀란드 주 | Östergötlands län | Östergötland | Лен Эстергётланд | Östergötland County | Östergötland County | Östergötland County | Östergötland County | Östergötland County |
| Södermanland County | `0x6B060000` | 58.754882144, 17.012375363 | セーデルマンランド州 | Södermanland County | Södermanland | Södermanlands län | Södermanland | Södermanland | 南曼兰省 | 쇠데르만란드 주 | Södermanlands län | Södermanland | Лен Сёдерманланд | Södermanland County | Södermanland County | Södermanland County | Södermanland County | Södermanland County |
| Värmland County | `0x6B070000` | 59.386596004, 13.502233982 | ベルムランド州 | Värmland County | Värmland | Värmlands län | Värmland | Värmland | 韦姆兰省 | 베름란드 주 | Värmlands län | Värmland | Лен Вермланд | Värmland County | Värmland County | Värmland County | Värmland County | Värmland County |
| Uppsala County | `0x6B080000` | 59.853514944, 17.63310459 | ウプサラ州 | Uppsala County | Uppsala | Uppsala län | Uppsala | Uppsala | 乌普萨拉省 | 웁살라 주 | Uppsala län | Uppsala | Лен Уппсала | Uppsala County | Uppsala County | Uppsala County | Uppsala County | Uppsala County |
| Gävleborg County | `0x6B090000` | 60.67199638, 17.182663912 | イェーブレボリ州 | Gävleborg County | Gävleborg | Gävleborgs län | Gävleborg | Gävleborg | 耶夫勒堡省 | 예블레보리 주 | Gävleborgs län | Gävleborg | Лен Евлеборг | Gävleborg County | Gävleborg County | Gävleborg County | Gävleborg County | Gävleborg County |
| Västerbotten County | `0x6B0A0000` | 63.819579352, 20.247857794 | ベステルボッテン州 | Västerbotten County | Västerbotten | Västerbottens län | Västerbotten | Västerbotten | 西博滕省 | 베스테르보텐 주 | Västerbottens län | Västerbotten | Лен Вестерботтен | Västerbotten County | Västerbotten County | Västerbotten County | Västerbotten County | Västerbotten County |
| Norrbotten County | `0x6B0B0000` | 65.577391832, 22.214415876 | ノルボッテン州 | Norrbotten County | Norrbotten | Norrbottens län | Norrbotten | Norrbotten | 北博滕省 | 노르보텐 주 | Norrbottens län | Norrbotten | Лен Норрботтен | Norrbotten County | Norrbotten County | Norrbotten County | Norrbotten County | Norrbotten County |
| Gotland Island | `0x6B0C0000` | 57.634276688, 18.286792891 | ゴトランド州 | Gotland Island | Gotland | Gotlands Iän | Gotland | Gotland | 哥得兰省 | 고틀란드 주 | Gotlands län | Gotland | Готланд | Gotland Island | Gotland Island | Gotland Island | Gotland Island | Gotland Island |
| Jämtland County | `0x6B0D0000` | 63.165892836, 14.650308393 | イェムトランド州 | Jämtland County | Jämtland | Jämtlands län | Jämtland | Jämtland | 耶姆特兰省 | 옘틀란드 주 | Jämtlands län | Jämtland | Лен Емтланд | Jämtland County | Jämtland County | Jämtland County | Jämtland County | Jämtland County |
| Dalarna County | `0x6B0E0000` | 60.611571576, 15.644573792 | ダーラナ州 | Dalarna County | Dalarna | Dalarnas län | Dalarna | Dalarna | 达拉纳省 | 달라르나 주 | Dalarnas län | Dalecarlia | Лен Даларна | Dalarna County | Dalarna County | Dalarna County | Dalarna County | Dalarna County |
| Blekinge County | `0x6B0F0000` | 56.1676019, 15.584148823 | ブレーキンゲ州 | Blekinge County | Blekinge | Blekinge län | Blekinge | Blekinge | 布莱金厄省 | 블레킹에 주 | Blekinge län | Blekinge | Лен Блекинге | Blekinge County | Blekinge County | Blekinge County | Blekinge County | Blekinge County |
| Örebro County | `0x6B100000` | 59.27123956, 15.221599009 | エレブルー州 | Örebro County | Örebro | Örebro län | Örebro | Örebro | 厄勒布鲁省 | 외레브로 주 | Örebro län | Örebro | Лен Эребру | Örebro County | Örebro County | Örebro County | Örebro County | Örebro County |
| Västernorrland County | `0x6B110000` | 62.627562764000004, 17.929736255999998 | ベステルノルランド州 | Västernorrland County | Västernorrland | Västernorrlands län | Västernorrland | Västernorrland | 西诺尔兰省 | 베스테르노를란드 주 | Västernorrlands län | Västernorrland | Лен Вестерноррланд | Västernorrland County | Västernorrland County | Västernorrland County | Västernorrland County | Västernorrland County |
| Jönköping County | `0x6B120000` | 57.771605788, 14.166908641 | イェンチェピング州 | Jönköping County | Jönköping | Jönköpings län | Jönköping | Jönköping | 延雪平省 | 옌셰핑 주 | Jönköpings län | Jönköping | Лен Йёнчёпинг | Jönköping County | Jönköping County | Jönköping County | Jönköping County | Jönköping County |
| Kronoberg County | `0x6B130000` | 56.88171322, 14.815103763 | クロノベリ州 | Kronoberg County | Kronoberg | Kronobergs län | Kronoberg | Kronoberg | 克鲁努贝里省 | 크로노베리 주 | Kronobergs län | Kronoberg | Лен Крунуберг | Kronoberg County | Kronoberg County | Kronoberg County | Kronoberg County | Kronoberg County |
| Kalmar County | `0x6B140000` | 56.661986660000004, 16.364180241 | カルマル州 | Kalmar County | Kalmar | Kalmar län | Kalmar | Kalmar | 卡尔马省 | 칼마르 주 | Kalmar län | Kalmar | Лен Кальмар | Kalmar County | Kalmar County | Kalmar County | Kalmar County | Kalmar County |
| Västmanland County | `0x6B150000` | 59.611815728, 16.550948327 | ベストマンランド州 | Västmanland County | Västmanland | Västmanlands län | Västmanland | Västmanland | 西曼兰省 | 베스트만란드 주 | Västmanlands län | Västmanland | Лен Вестманланд | Västmanland County | Västmanland County | Västmanland County | Västmanland County | Västmanland County |
| Halland County | `0x6B160000` | 56.656493496, 12.859532039 | ハランド州 | Halland County | Halland | Hallands län | Halland | Halland | 哈兰省 | 할란드 주 | Hallands län | Halland | Лен Халланд | Halland County | Halland County | Halland County | Halland County | Halland County |

# Switzerland
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x6C` | CH | スイス | Switzerland | Suisse | Schweiz | Svizzera | Suiza | 瑞士 | 스위스 | Zwitserland | Suíça | Швейцария | Switzerland | Switzerland | Switzerland | Switzerland | Switzerland |

## Switzerland Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x6C000000` | 46.950072708, 7.41579165 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Bern | `0x6C020000` | 46.950072708, 7.41579165 | ベルン州 | Bern | Berne | Bern | Berna | Berna | 伯尔尼州 | 베른 주 | Bern | Berna | Берн | Bern | Bern | Bern | Bern | Bern |
| Aargau | `0x6C040000` | 47.389525828000004, 8.042014056 | アールガウ州 | Aargau | Argovie | Aargau | Argovia | Argovia | 阿尔高州 | 아르가우 주 | Aargau | Argóvia | Ааргау | Aargau | Aargau | Aargau | Aargau | Aargau |
| Basel-City | `0x6C050000` | 47.537841256, 7.5860801989999995 | バーゼル＝シュタット準州 | Basel-City | Bâle-Ville | Basel-Stadt | Basilea Città | Ciudad de Basilea | 巴塞尔州 | 바젤 | Bazel-Stad | Basileia | Базель | Basel-City | Basel-City | Basel-City | Basel-City | Basel-City |
| Fribourg | `0x6C060000` | 46.80175728, 7.1576122369999995 | フリブール州 | Fribourg | Fribourg | Freiburg | Friburgo | Friburgo | 弗里堡州 | 프리부르 주 | Fribourg | Friburgo | Фрибур | Fribourg | Fribourg | Fribourg | Fribourg | Fribourg |
| Geneva | `0x6C070000` | 46.19750924, 6.168840017 | ジュネーヴ州 | Geneva | Genève | Genf | Ginevra | Ginebra | 日内瓦州 | 제네바 주 | Genève | Genebra | Женева | Geneva | Geneva | Geneva | Geneva | Geneva |
| Glarus | `0x6C080000` | 47.032470168, 9.069238529 | グラールス州 | Glarus | Glaris | Glarus | Glarona | Glaris | 格拉鲁斯州 | 글라루스 주 | Glarus | Glaris | Гларус | Glarus | Glarus | Glarus | Glarus | Glarus |
| Graubünden | `0x6C090000` | 46.85668892, 9.536158744 | グラウビュンデン州 | Graubünden | Grisons | Graubünden | Grigioni | Grisones | 格劳宾登州 | 그라우뷘덴 주 | Graubünden | Grisons | Граубюнден | Graubünden | Graubünden | Graubünden | Graubünden | Graubünden |
| Jura | `0x6C0A0000` | 47.362060008, 7.344380323 | ジュラ州 | Jura | Jura | Jura | Giura | Jura | 汝拉州 | 쥐라 주 | Jura | Jura | Юра | Jura | Jura | Jura | Jura | Jura |
| Luzern | `0x6C0B0000` | 47.04894966, 8.305686648 | ルツェルン州 | Luzern | Lucerne | Luzern | Lucerna | Lucerna | 卢塞恩州 | 루체른 주 | Luzern | Lucerna | Люцерн | Luzern | Luzern | Luzern | Luzern | Luzern |
| Neuchâtel | `0x6C0C0000` | 46.950072708, 6.932391898 | ヌシャテル州 | Neuchâtel | Neuchâtel | Neuenburg | Neuchâtel | Neuchâtel | 纳沙泰尔州 | 뇌샤텔 주 | Neuchâtel | Neuchâtel | Нёвшатель | Neuchâtel | Neuchâtel | Neuchâtel | Neuchâtel | Neuchâtel |
| Obwalden | `0x6C0D0000` | 46.88415474, 8.234275321 | オプバルデン準州 | Obwalden | Obwald | Obwalden | Obvaldo | Obwalden | 上瓦尔登半州 | 옵발덴 주 | Obwalden | Obwald | Обвальден | Obwalden | Obwalden | Obwalden | Obwalden | Obwalden |
| St. Gallen | `0x6C0E0000` | 47.422484812, 9.371363374 | ザンクト・ガレン州 | St. Gallen | Saint-Gall | Sankt Gallen | San Gallo | Sankt Gallen | 圣加仑州 | 장크트갈렌 주 | Sankt Gallen | Saint-Gall | Санкт-Галлен | St. Gallen | St. Gallen | St. Gallen | St. Gallen | St. Gallen |
| Schaffhausen | `0x6C0F0000` | 47.697143012, 8.629784209 | シャフハウゼン州 | Schaffhausen | Schaffhouse | Schaffhausen | Sciaffusa | Schaffhausen | 沙夫豪森州 | 샤프하우젠 주 | Schaffhausen | Schaffhausen | Шаффхаузен | Schaffhausen | Schaffhausen | Schaffhausen | Schaffhausen | Schaffhausen |
| Schwyz | `0x6C100000` | 47.04894966, 8.613304672 | シュビーツ州 | Schwyz | Schwytz | Schwyz | Svitto | Schwyz | 施维茨州 | 슈비츠 주 | Schwyz | Schwyz | Швиц | Schwyz | Schwyz | Schwyz | Schwyz | Schwyz |
| Solothurn | `0x6C110000` | 47.208251416, 7.536641588 | ゾーロトゥルン州 | Solothurn | Soleure | Solothurn | Soletta | Soleura | 索洛图恩州 | 졸로투른 주 | Solothurn | Soleura | Золотурн | Solothurn | Solothurn | Solothurn | Solothurn | Solothurn |
| Thurgau | `0x6C120000` | 47.554320748, 8.887963622 | トゥールガウ州 | Thurgau | Thurgovie | Thurgau | Turgovia | Turgovia | 图尔高州 | 투르가우 주 | Thurgau | Turgóvia | Тургау | Thurgau | Thurgau | Thurgau | Thurgau | Thurgau |
| Ticino | `0x6C130000` | 46.192016076, 9.019799918 | ティチーノ州 | Ticino | Tessin | Tessin | Ticino | Tesino | 提契诺州 | 티치노 주 | Ticino | Tessino | Тичино | Ticino | Ticino | Ticino | Ticino | Ticino |
| Uri | `0x6C140000` | 46.862182084, 8.635277388 | ウーリ州 | Uri | Uri | Uri | Uri | Uri | 乌里州 | 우리 주 | Uri | Uri | Ури | Uri | Uri | Uri | Uri | Uri |
| Valais | `0x6C150000` | 46.235961388, 7.355366681 | バレー州 | Valais | Valais | Wallis | Vallese | Valais | 瓦莱州 | 발레 주 | Wallis | Valais | Вале | Valais | Valais | Valais | Valais | Valais |
| Vaud | `0x6C160000` | 46.521605916, 6.624773874 | ボー州 | Vaud | Vaud | Waadt | Vaud | Vaud | 沃州 | 보 주 | Vaud | Vaud | Во | Vaud | Vaud | Vaud | Vaud | Vaud |
| Zug | `0x6C170000` | 47.175292432, 8.503441092 | ツーク州 | Zug | Zoug | Zug | Zugo | Zug | 楚格州 | 추크 주 | Zug | Zug | Цуг | Zug | Zug | Zug | Zug | Zug |
| Zurich | `0x6C180000` | 47.389525828000004, 8.536400166 | チューリヒ州 | Zurich | Zurich | Zürich | Zurigo | Zúrich | 苏黎世州 | 취리히 주 | Zürich | Zurique | Цюрих | Zurich | Zurich | Zurich | Zurich | Zurich |
| Appenzell Outer Rhodes | `0x6C190000` | 47.3785395, 9.261499794 | アッペンツェル・アウサーローデン準州 | Appenzell Outer Rhodes | Appenzell Rhodes-Extérieures | Appenzell Ausserrhoden | Appenzello Esterno | Appenzell Rodas Exteriores | 外阿彭策尔半州 | 아펜첼아우서로덴 주 | Appenzell Ausserrhoden | Appenzell Rodas Exteriores | Аппенцелль-Ауссерроден | Appenzell Outer Rhodes | Appenzell Outer Rhodes | Appenzell Outer Rhodes | Appenzell Outer Rhodes | Appenzell Outer Rhodes |
| Appenzell Inner Rhodes | `0x6C1A0000` | 47.329101024, 9.415308806 | アッペンツェル・インナーローデン準州 | Appenzell Inner Rhodes | Appenzell Rhodes-Intérieures | Appenzell Innerrhoden | Appenzello Interno | Appenzell Rodas Interiores | 内阿彭策尔半州 | 아펜첼이너로덴 주 | Appenzell Innerrhoden | Appenzell Rodas Interiores | Аппенцелль-Иннерроден | Appenzell Inner Rhodes | Appenzell Inner Rhodes | Appenzell Inner Rhodes | Appenzell Inner Rhodes | Appenzell Inner Rhodes |
| Basel-Landschaft | `0x6C1B0000` | 47.466430124, 7.728902853 | バーゼル＝ラント準州 | Basel-Landschaft | Bâle-Campagne | Basel-Landschaft | Basilea Campagna | Basilea-Campiña | 巴塞尔乡村半州 | 바젤란트 주 | Basel-Landschaft | Basileia (cidade) | Базель-Ланд | Basel-Landschaft | Basel-Landschaft | Basel-Landschaft | Basel-Landschaft | Basel-Landschaft |
| Nidwalden | `0x6C1C0000` | 46.944579544, 8.34963208 | ニトバルデン準州 | Nidwalden | Nidwald | Nidwalden | Nidvaldo | Nidwalden | 下瓦尔登半州 | 니트발덴 주 | Nidwalden | Nidwald | Нидвальден | Nidwalden | Nidwalden | Nidwalden | Nidwalden | Nidwalden |

# Turkey
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x6D` | TR | トルコ | Turkey | Turquie | Türkei | Turchia | Turquía | 土耳其 | 터키 | Turkije | Turquia | Турция | Turkey | Turkey | Turkey | Turkey | Turkey |

## Turkey Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x6D000000` | 39.924315952, 32.84921042 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Ankara | `0x6D020000` | 39.924315952, 32.84921042 | アンカラ県 | Ankara | Ankara | Ankara | Ankara | Ankara | 安卡拉省 | 앙카라 주 | Ankara | Ancara | Анкара | Ankara | Ankara | Ankara | Ankara | Ankara |
| İstanbul | `0x6D030000` | 41.011962424000004, 28.971026046 | イスタンブル県 | İstanbul | İstanbul | İstanbul | Istanbul | Estambul | 伊斯坦布尔省 | 이스탄불 주 | Istanboel | Istambul | Стамбул | İstanbul | İstanbul | İstanbul | İstanbul | İstanbul |
| İzmir | `0x6D040000` | 38.419189016, 27.125317902 | イズミル県 | İzmir | İzmir | İzmir | Smirne | İzmir | 伊兹密尔省 | 이즈미르 주 | İzmir | İzmir | Измир | İzmir | İzmir | İzmir | İzmir | İzmir |
| Bursa | `0x6D050000` | 40.18249466, 29.064410089 | ブルサ県 | Bursa | Bursa | Bursa | Bursa | Bursa | 布尔萨省 | 부르사 주 | Bursa | Bursa | Бурса | Bursa | Bursa | Bursa | Bursa | Bursa |
| Adana | `0x6D060000` | 36.996459540000004, 35.32114097 | アダナ県 | Adana | Adana | Adana | Adana | Adana | 阿达纳省 | 아다나 주 | Adana | Adana | Адана | Adana | Adana | Adana | Adana | Adana |
| Gaziantep | `0x6D070000` | 37.062377508, 37.381083095 | ガジアンテプ県 | Gaziantep | Gaziantep | Gaziantep | Gaziantep | Gaziantep | 加济安泰普省 | 가지안테프 주 | Gaziantep | Gaziantep | Газиантеп | Gaziantep | Gaziantep | Gaziantep | Gaziantep | Gaziantep |
| Konya | `0x6D080000` | 37.864379452, 32.481167427 | コニヤ県 | Konya | Konya | Konya | Konya | Konya | 科尼亚省 | 코니아 주 | Konya | Konya | Конья | Konya | Konya | Konya | Konya | Konya |
| Antalya | `0x6D090000` | 36.897582588, 30.679404715 | アンタリヤ県 | Antalya | Antalya | Antalya | Adalia | Antalya | 安塔利亚省 | 안탈리아 주 | Antalya | Antalya | Анталья | Antalya | Antalya | Antalya | Antalya | Antalya |
| Diyarbakır | `0x6D0A0000` | 37.979735896, 40.21007028 | ディヤルバクル県 | Diyarbakır | Diyarbakır | Diyarbakır | Diyarbakır | Diyarbakır | 迪亚巴克尔省 | 디야르바키르 주 | Diyarbakır | Diyarbakır | Диярбакыр | Diyarbakır | Diyarbakır | Diyarbakır | Diyarbakır | Diyarbakır |
| Mersin | `0x6D0B0000` | 36.798705636, 34.629000416 | メルシン県 | Mersin | Mersin | Mersin | Mersin | Mersin | 梅尔辛省 | 메르신 주 | Mersin | Mersin | Мерсин | Mersin | Mersin | Mersin | Mersin | Mersin |
| Kayseri | `0x6D0C0000` | 38.732299364, 35.480443161 | カイセリ県 | Kayseri | Kayseri | Kayseri | Kayseri | Kayseri | 开塞利省 | 카이세리 주 | Kayseri | Kayseri | Кайсери | Kayseri | Kayseri | Kayseri | Kayseri | Kayseri |
| Şanlıurfa | `0x6D0E0000` | 37.144774968, 38.798323277 | シャンルウルファ県 | Şanlıurfa | Şanlıurfa | Şanlıurfa | Şanlıurfa | Şanlıurfa | 尚利乌尔法省 | 샨리우르파 주 | Şanlıurfa | Şanlıurfa | Шанлыурфа | Şanlıurfa | Şanlıurfa | Şanlıurfa | Şanlıurfa | Şanlıurfa |
| Malatya | `0x6D0F0000` | 38.347777884, 38.309430346 | マラティヤ県 | Malatya | Malatya | Malatya | Malatya | Malatya | 马拉蒂亚省 | 말라티아 주 | Malatya | Malatya | Малатья | Malatya | Malatya | Malatya | Malatya | Malatya |
| Erzurum | `0x6D100000` | 39.896850132, 41.264760648 | エルズルム県 | Erzurum | Erzurum | Erzurum | Erzurum | Erzurum | 埃尔祖鲁姆省 | 에르주룸 주 | Erzurum | Erzurum | Эрзурум | Erzurum | Erzurum | Erzurum | Erzurum | Erzurum |
| Samsun | `0x6D110000` | 41.286620624, 36.331885906 | サムスン県 | Samsun | Samsun | Samsun | Samsun | Samsun | 萨姆松省 | 삼순 주 | Samsun | Samsun | Самсун | Samsun | Samsun | Samsun | Samsun | Samsun |
| Van | `0x6D120000` | 38.490600148, 43.379634562999996 | ワン県 | Van | Van | Van | Van | Van | 凡省 | 반 주 | Van | Van | Ван | Van | Van | Van | Van | Van |
| Kahramanmaraş | `0x6D130000` | 37.578734924, 36.930642417 | カフラマンマラシュ県 | Kahramanmaraş | Kahramanmaraş | Kahramanmaraş | Kahramanmaraş | Kahramanmaraş | 卡赫拉曼马拉什省 | 카라만마라슈 주 | Kahramanmaraş | Kahramanmaraş | Кахраманмараш | Kahramanmaraş | Kahramanmaraş | Kahramanmaraş | Kahramanmaraş | Kahramanmaraş |
| Denizli | `0x6D140000` | 37.765502500000004, 29.080889626 | デニズリ県 | Denizli | Denizli | Denizli | Denizli | Denizli | 代尼兹利省 | 데니즐리 주 | Denizli | Denizli | Денизли | Denizli | Denizli | Denizli | Denizli | Denizli |
| Batman | `0x6D150000` | 37.880858944, 41.116444815 | バトマン県 | Batman | Batman | Batman | Batman | Batman | 巴特曼省 | 바트만 주 | Batman | Batman | Батман | Batman | Batman | Batman | Batman | Batman |
| Elazığ | `0x6D160000` | 38.682860888, 39.215804881 | エラズー県 | Elazığ | Elazığ | Elazığ | Elâzığ | Elazığ | 埃拉泽省 | 엘라지 주 | Elazığ | Elazığ | Элязыг | Elazığ | Elazığ | Elazığ | Elazığ | Elazığ |
| Sakarya | `0x6D170000` | 40.781249536, 30.399252586 | サカリヤ県 | Sakarya | Sakarya | Sakarya | Sakarya | Sakarya | 萨卡里亚省 | 사카리아 주 | Sakarya | Sakarya | Сакарья | Sakarya | Sakarya | Sakarya | Sakarya | Sakarya |
| Kocaeli | `0x6D180000` | 40.764770044, 29.915852834 | コジャエリ県 | Kocaeli | Kocaeli | Kocaeli | Kocaeli | Kocaeli | 科贾埃利省 | 코자엘리 주 | Kocaeli | Kocaeli | Коджаэли | Kocaeli | Kocaeli | Kocaeli | Kocaeli | Kocaeli |
| Sivas | `0x6D190000` | 39.748534704, 37.013040102 | シワス県 | Sivas | Sivas | Sivas | Sivas | Sivas | 锡瓦斯省 | 시바스 주 | Sivas | Sivas | Сивас | Sivas | Sivas | Sivas | Sivas | Sivas |
| Manisa | `0x6D1A0000` | 38.611449756, 27.421949568 | マニサ県 | Manisa | Manisa | Manisa | Manisa | Manisa | 马尼萨省 | 마니사 주 | Manisa | Manisa | Маниса | Manisa | Manisa | Manisa | Manisa | Manisa |
| Trabzon | `0x6D1B0000` | 40.995482932, 39.732163707 | トラブゾン県 | Trabzon | Trabzon | Trabzon | Trebisonda | Trabzon | 特拉布宗省 | 트라브존 주 | Trabzon | Trabzon | Трабзон | Trabzon | Trabzon | Trabzon | Trabzon | Trabzon |
| Balıkesir | `0x6D1C0000` | 39.644164588, 27.877883425 | バルケシル県 | Balıkesir | Balıkesir | Balıkesir | Balıkesir | Balıkesir | 巴勒克埃西尔省 | 발리케시르 주 | Balıkesir | Balıkesir | Балыкесир | Balıkesir | Balıkesir | Balıkesir | Balıkesir | Balıkesir |
| Adıyaman | `0x6D1D0000` | 37.760009336, 38.270978093 | アディヤマン県 | Adıyaman | Adıyaman | Adıyaman | Adıyaman | Adıyaman | 阿德亚曼省 | 아디야만 주 | Adıyaman | Adıyaman | Адыяман | Adıyaman | Adıyaman | Adıyaman | Adıyaman | Adıyaman |
| Tekirdağ | `0x6D1E0000` | 40.97900344, 27.515333611 | テキルダー県 | Tekirdağ | Tekirdağ | Tekirdağ | Tekirdağ | Tekirdağ | 泰基尔达省 | 테키르다 주 | Tekirdağ | Tekirdağ | Текирдаг | Tekirdağ | Tekirdağ | Tekirdağ | Tekirdağ | Tekirdağ |
| Kırıkkale | `0x6D1F0000` | 39.847411656, 33.497405542 | クルッカレ県 | Kırıkkale | Kırıkkale | Kırıkkale | Kırıkkale | Kırıkkale | 克勒克卡莱省 | 키리칼레 주 | Kırıkkale | Kırıkkale | Кырыккале | Kırıkkale | Kırıkkale | Kırıkkale | Kırıkkale | Kırıkkale |
| Osmaniye | `0x6D200000` | 37.078857, 36.249488221 | オスマニエ県 | Osmaniye | Osmaniye | Osmaniye | Osmaniye | Osmaniye | 奥斯曼尼菲省 | 오스마니예 주 | Osmaniye | Osmaniye | Османие | Osmaniye | Osmaniye | Osmaniye | Osmaniye | Osmaniye |
| Kütahya | `0x6D210000` | 39.4134517, 29.981770982 | キュターヤ県 | Kütahya | Kütahya | Kütahya | Kütahya | Kütahya | 屈塔希亚省 | 퀴타히아 주 | Kütahya | Kütahya | Кютахья | Kütahya | Kütahya | Kütahya | Kütahya | Kütahya |
| Çorum | `0x6D220000` | 40.550536648, 34.953097977 | チョルム県 | Çorum | Çorum | Çorum | Çorum | Çorum | 乔鲁姆省 | 초룸 주 | Çorum | Çorum | Чорум | Çorum | Çorum | Çorum | Çorum | Çorum |
| Isparta | `0x6D230000` | 37.765502500000004, 30.547568419 | イスパルタ県 | Isparta | Isparta | Isparta | Isparta | Isparta | 伊斯帕尔塔省 | 이스파르타 주 | Isparta | Isparta | Ыспарта | Isparta | Isparta | Isparta | Isparta | Isparta |
| Aydın | `0x6D240000` | 37.842406796, 27.844924351 | アイドゥン県 | Aydın | Aydın | Aydın | Aydın | Aydın | 艾登省 | 아이딘 주 | Aydın | Aydın | Айдын | Aydın | Aydın | Aydın | Aydın | Aydın |
| Hatay | `0x6D250000` | 36.19995076, 36.14511782 | ハタイ県 | Hatay | Hatay | Hatay | Hatay | Hatay | 哈塔伊省 | 하타이 주 | Hatay | Hatay | Хатай | Hatay | Hatay | Hatay | Hatay | Hatay |
| Mardin | `0x6D260000` | 37.315063052, 40.737415464 | マルディン県 | Mardin | Mardin | Mardin | Mardin | Mardin | 马尔丁省 | 마르딘 주 | Mardin | Mardin | Мардин | Mardin | Mardin | Mardin | Mardin | Mardin |
| Aksaray | `0x6D270000` | 38.36975054, 34.024750726 | アクサライ県 | Aksaray | Aksaray | Aksaray | Aksaray | Aksaray | 阿克萨赖省 | 악사라이 주 | Aksaray | Aksaray | Аксарай | Aksaray | Aksaray | Aksaray | Aksaray | Aksaray |
| Afyonkarahisar | `0x6D280000` | 38.75427202, 30.536582061 | アフィヨンカラヒサール県 | Afyonkarahisar | Afyonkarahisar | Afyonkarahisar | Afyonkarahisar | Afyonkarahisar | 阿菲永卡拉希萨尔省 | 아피온카라히사르 주 | Afyonkarahisar | Afyonkarahisar | Афьонкарахисар | Afyonkarahisar | Afyonkarahisar | Afyonkarahisar | Afyonkarahisar | Afyonkarahisar |
| Tokat | `0x6D290000` | 40.314330596, 36.546119886999996 | トカト県 | Tokat | Tokat | Tokat | Tokat | Tokat | 托卡特省 | 토카트 주 | Tokat | Tokat | Токат | Tokat | Tokat | Tokat | Tokat | Tokat |
| Edirne | `0x6D2A0000` | 41.66564894, 26.565013644 | エディルネ県 | Edirne | Edirne | Edirne | Edirne | Edirne | 埃迪尔内省 | 에디르네 주 | Edirne | Edirne | Эдирне | Edirne | Edirne | Edirne | Edirne | Edirne |
| Karaman | `0x6D2B0000` | 37.177733952, 33.211760233999996 | カラマン県 | Karaman | Karaman | Karaman | Karaman | Karaman | 卡拉曼省 | 카라만 주 | Karaman | Karaman | Караман | Karaman | Karaman | Karaman | Karaman | Karaman |
| Ordu | `0x6D2C0000` | 40.97900344, 37.880962384 | オルドゥ県 | Ordu | Ordu | Ordu | Ordu | Ordu | 奥尔杜省 | 오르두 주 | Ordu | Ordu | Орду | Ordu | Ordu | Ordu | Ordu | Ordu |
| Siirt | `0x6D2D0000` | 37.93029742, 41.945914844 | シイルト県 | Siirt | Siirt | Siirt | Siirt | Siirt | 锡尔特省 | 시이르트 주 | Siirt | Siirt | Сиирт | Siirt | Siirt | Siirt | Siirt | Siirt |
| Erzincan | `0x6D2E0000` | 39.748534704, 39.49595701 | エルジンジャン県 | Erzincan | Erzincan | Erzincan | Erzincan | Erzincan | 埃尔津詹省 | 에르진잔 주 | Erzincan | Erzincan | Эрзинджан | Erzincan | Erzincan | Erzincan | Erzincan | Erzincan |
| Çankırı | `0x6D2F0000` | 40.599975124000004, 33.612762301 | チャンクル県 | Çankırı | Çankırı | Çankırı | Çankırı | Çankırı | 昌克勒省 | 창키리 주 | Çankırı | Çankırı | Чанкыры | Çankırı | Çankırı | Çankırı | Çankırı | Çankırı |
| Zonguldak | `0x6D300000` | 41.44592238, 31.778040515 | ゾングルダク県 | Zonguldak | Zonguldak | Zonguldak | Zonguldak | Zonguldak | 宗古尔达克省 | 종굴다크 주 | Zonguldak | Zonguldak | Зонгулдак | Zonguldak | Zonguldak | Zonguldak | Zonguldak | Zonguldak |
| Yozgat | `0x6D310000` | 39.819945836, 34.799288965 | ヨズガト県 | Yozgat | Yozgat | Yozgat | Yozgat | Yozgat | 约兹加特省 | 요즈가트 주 | Yozgat | Yozgat | Йозгат | Yozgat | Yozgat | Yozgat | Yozgat | Yozgat |
| Uşak | `0x6D320000` | 38.682860888, 29.399494008 | ウシャク県 | Uşak | Uşak | Uşak | Uşak | Uşak | 乌萨克省 | 우샤크 주 | Uşak | Uşak | Ушак | Uşak | Uşak | Uşak | Uşak | Uşak |
| Ağrı | `0x6D330000` | 39.721068884, 43.055537002 | アール県 | Ağrı | Ağrı | Ağrı | Ağrı | Ağrı | 阿勒省 | 아리 주 | Ağrı | Ağrı | Агры | Ağrı | Ağrı | Ağrı | Ağrı | Ağrı |
| Amasya | `0x6D340000` | 40.6494136, 35.832006617 | アマシヤ県 | Amasya | Amasya | Amasya | Amasya | Amasya | 阿马西亚省 | 아마시아 주 | Amasya | Amasya | Амасья | Amasya | Amasya | Amasya | Amasya | Amasya |
| Ardahan | `0x6D350000` | 41.11633254, 42.698480367 | アルダハン県 | Ardahan | Ardahan | Ardahan | Ardahan | Ardahan | 阿尔达罕省 | 아르다한 주 | Ardahan | Ardahan | Ардахан | Ardahan | Ardahan | Ardahan | Ardahan | Ardahan |
| Artvin | `0x6D360000` | 41.182250508, 41.814078548 | アルトウィン県 | Artvin | Artvin | Artvin | Artvin | Artvin | 阿尔特温省 | 아르트빈 주 | Artvin | Artvin | Артвин | Artvin | Artvin | Artvin | Artvin | Artvin |
| Bartın | `0x6D370000` | 41.632689956, 32.332851594 | バルトゥン県 | Bartın | Bartın | Bartın | Bartın | Bartın | 巴尔腾省 | 바르틴 주 | Bartın | Bartın | Бартын | Bartın | Bartın | Bartın | Bartın | Bartın |
| Bayburt | `0x6D380000` | 40.248412628, 40.215563459 | バイブルト県 | Bayburt | Bayburt | Bayburt | Bayburt | Bayburt | 巴伊布尔特省 | 바이부르트 주 | Bayburt | Bayburt | Байбурт | Bayburt | Bayburt | Bayburt | Bayburt | Bayburt |
| Bilecik | `0x6D390000` | 40.138549348, 29.976277803 | ビレジク県 | Bilecik | Bilecik | Bilecik | Bilecik | Bilecik | 比莱吉克省 | 빌레지크 주 | Bilecik | Bilecik | Биледжик | Bilecik | Bilecik | Bilecik | Bilecik | Bilecik |
| Bingöl | `0x6D3A0000` | 38.880614792, 40.495715588 | ビンギョル県 | Bingöl | Bingöl | Bingöl | Bingöl | Bingöl | 宾格尔省 | 빙괼 주 | Bingöl | Bingöl | Бингёль | Bingöl | Bingöl | Bingöl | Bingöl | Bingöl |
| Bitlis | `0x6D3B0000` | 38.39721636, 42.116203393 | ビトリス県 | Bitlis | Bitlis | Bitlis | Bitlis | Bitlis | 比特利斯省 | 비틀리스 주 | Bitlis | Bitlis | Битлис | Bitlis | Bitlis | Bitlis | Bitlis | Bitlis |
| Bolu | `0x6D3C0000` | 40.73181106, 31.596765608 | ボル県 | Bolu | Bolu | Bolu | Bolu | Bolu | 博卢省 | 볼루 주 | Bolu | Bolu | Болу | Bolu | Bolu | Bolu | Bolu | Bolu |
| Burdur | `0x6D3D0000` | 37.716064024, 30.289389006 | ブルドゥル県 | Burdur | Burdur | Burdur | Burdur | Burdur | 布尔杜尔省 | 부르두르 주 | Burdur | Burdur | Бурдур | Burdur | Burdur | Burdur | Burdur | Burdur |
| Çanakkale | `0x6D3E0000` | 40.149535676, 26.394725095 | チャナッカレ県 | Çanakkale | Çanakkale | Çanakkale | Çanakkale | Çanakkale | 恰纳卡莱省 | 차나칼레 주 | Çanakkale | Çanakkale | Чанаккале | Çanakkale | Çanakkale | Çanakkale | Çanakkale | Çanakkale |
| Düzce | `0x6D3F0000` | 40.830688012, 31.14632493 | デュズジェ県 | Düzce | Düzce | Düzce | Düzce | Düzce | 迪兹杰省 | 뒤즈제 주 | Düzce | Düzce | Дюздже | Düzce | Düzce | Düzce | Düzce | Düzce |
| Eskişehir | `0x6D400000` | 39.776000524, 30.520102524 | エスキシェヒル県 | Eskişehir | Eskişehir | Eskişehir | Eskişehir | Eskişehir | 埃斯基谢希尔省 | 에스키셰히르 주 | Eskişehir | Eskişehir | Эскишехир | Eskişehir | Eskişehir | Eskişehir | Eskişehir | Eskişehir |
| Giresun | `0x6D410000` | 40.89660598, 38.413800746999996 | ギレスン県 | Giresun | Giresun | Giresun | Giresun | Giresun | 吉雷松省 | 기레순 주 | Giresun | Giresun | Гиресун | Giresun | Giresun | Giresun | Giresun | Giresun |
| Gümüşhane | `0x6D420000` | 40.45715286, 39.479477473 | ギュミュシュハーネ県 | Gümüşhane | Gümüşhane | Gümüşhane | Gümüşhane | Gümüşhane | 居米什哈内省 | 귀뮈샤네 주 | Gümüşhane | Gümüşhane | Гюмюшхане | Gümüşhane | Gümüşhane | Gümüşhane | Gümüşhane | Gümüşhane |
| Hakkari | `0x6D430000` | 37.578734924, 43.731198019 | ハッキャリ県 | Hakkari | Hakkari | Hakkâri | Hakkâri | Hakkari | 哈卡里省 | 하카리 주 | Hakkâri | Hakkari | Хаккяри | Hakkari | Hakkari | Hakkari | Hakkari | Hakkari |
| Iğdır | `0x6D440000` | 39.913329624, 44.033322864 | ウードゥル県 | Iğdır | Iğdır | Iğdır | Iğdır | Iğdır | 伊迪尔省 | 이디르 주 | Iğdır | Iğdır | Ыгдыр | Iğdır | Iğdır | Iğdır | Iğdır | Iğdır |
| Karabük | `0x6D450000` | 41.19873, 32.62948326 | カラビュック県 | Karabük | Karabük | Karabük | Karabük | Karabük | 卡拉比克省 | 카라뷔크 주 | Karabük | Karabük | Карабюк | Karabük | Karabük | Karabük | Karabük | Karabük |
| Kars | `0x6D460000` | 40.616454616, 43.099482434 | カルス県 | Kars | Kars | Kars | Kars | Kars | 卡尔斯省 | 카르스 주 | Kars | Kars | Карс | Kars | Kars | Kars | Kars | Kars |
| Kastamonu | `0x6D470000` | 41.369018084, 33.766571313 | カスタモヌ県 | Kastamonu | Kastamonu | Kastamonu | Kastamonu | Kastamonu | 卡斯塔莫努省 | 카스타모누 주 | Kastamonu | Kastamonu | Кастамону | Kastamonu | Kastamonu | Kastamonu | Kastamonu | Kastamonu |
| Kilis | `0x6D480000` | 36.710815012, 37.111917324 | キリス県 | Kilis | Kilis | Kilis | Kilis | Kilis | 基利斯省 | 킬리스 주 | Kilis | Kilis | Килис | Kilis | Kilis | Kilis | Kilis | Kilis |
| Kırklareli | `0x6D490000` | 41.731566908, 27.213208766 | クルクラーレリ県 | Kırklareli | Kırklareli | Kırklareli | Kırklareli | Kırklareli | 柯克拉雷利省 | 키르클라렐리 주 | Kırklareli | Kırklareli | Кыркларели | Kırklareli | Kırklareli | Kırklareli | Kırklareli | Kırklareli |
| Kırşehir | `0x6D4A0000` | 39.149779828, 34.162080201 | クルシェヒル県 | Kırşehir | Kırşehir | Kırşehir | Kırşehir | Kırşehir | 克尔谢希尔省 | 키르셰히르 주 | Kırşehir | Kırşehir | Кыршехир | Kırşehir | Kırşehir | Kırşehir | Kırşehir | Kırşehir |
| Muğla | `0x6D4B0000` | 37.210692936, 28.361283177 | ムーラ県 | Muğla | Muğla | Muğla | Muğla | Muğla | 穆拉省 | 물라 주 | Muğla | Muğla | Мугла | Muğla | Muğla | Muğla | Muğla | Muğla |
| Muş | `0x6D4C0000` | 38.748778856, 41.495474166 | ムシュ県 | Muş | Muş | Muş | Muş | Muş | 穆什省 | 무슈 주 | Muş | Muş | Муш | Muş | Muş | Muş | Muş | Muş |
| Nevşehir | `0x6D4D0000` | 38.622436084, 34.711398101 | ネヴシェヒル県 | Nevşehir | Nevşehir | Nevşehir | Nevşehir | Nevşehir | 内夫谢希尔省 | 네브셰히르 주 | Nevşehir | Nevşehir | Невшехир | Nevşehir | Nevşehir | Nevşehir | Nevşehir | Nevşehir |
| Niğde | `0x6D4E0000` | 37.963256404, 34.678439027 | ニーデ県 | Niğde | Niğde | Niğde | Niğde | Niğde | 尼代省 | 니데 주 | Niğde | Niğde | Нигде | Niğde | Niğde | Niğde | Niğde | Niğde |
| Rize | `0x6D4F0000` | 41.011962424000004, 40.512195125 | リゼ県 | Rize | Rize | Rize | Rize | Rize | 里泽省 | 리제 주 | Rize | Rize | Ризе | Rize | Rize | Rize | Rize | Rize |
| Sinop | `0x6D500000` | 42.028197764, 35.145359242 | シノプ県 | Sinop | Sinop | Sinop | Sinope | Sinop | 锡诺普省 | 시노프 주 | Sinop | Sinop | Синоп | Sinop | Sinop | Sinop | Sinop | Sinop |
| Şırnak | `0x6D510000` | 37.512816956, 42.456780490999996 | シュルナク県 | Şırnak | Şırnak | Şırnak | Şırnak | Şırnak | 锡尔纳克省 | 시르나크 주 | Şırnak | Şırnak | Ширнак | Şırnak | Şırnak | Şırnak | Şırnak | Şırnak |
| Tunceli | `0x6D520000` | 39.11132768, 39.545395621 | トゥンジェリ県 | Tunceli | Tunceli | Tunceli | Tunceli | Tunceli | 通杰利省 | 툰젤리 주 | Tunceli | Tunceli | Тунджели | Tunceli | Tunceli | Tunceli | Tunceli | Tunceli |
| Yalova | `0x6D530000` | 40.6494136, 29.262164533 | ヤロワ県 | Yalova | Yalova | Yalova | Yalova | Yalova | 亚罗法省 | 얄로바 주 | Yalova | Yalova | Ялова | Yalova | Yalova | Yalova | Yalova | Yalova |

# United Kingdom
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x6E` | GB | イギリス | United Kingdom | Royaume-Uni | Vereinigtes Königreich | Regno Unito | Reino Unido | 英国 | 영국 | Verenigd Koninkrijk | Reino Unido | Великобритания | United Kingdom | United Kingdom | United Kingdom | United Kingdom | United Kingdom |

## United Kingdom Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x6E000000` | 51.503905664, -0.11486728700000981 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| London | `0x6E030000` | 51.503905664, -0.11486728700000981 | ロンドン | London | Londres | London | Londra | Londres | 伦敦 | 런던 | Londen | Londres | Лондон | London | London | London | London | London |
| Scotland | `0x6E050000` | 55.953368504000004, -3.2020338849999916 | スコットランド | Scotland | Écosse | Schottland | Scozia | Escocia | 苏格兰 | 스코틀랜드 | Schotland | Escócia | Шотландия | Scotland | Scotland | Scotland | Scotland | Scotland |
| Wales | `0x6E060000` | 51.476439844, -3.174567990000014 | ウェールズ | Wales | Pays de Galles | Wales | Galles | Gales | 威尔士 | 웨일즈 | Wales | País de Gales | Уэльс | Wales | Wales | Wales | Wales | Wales |
| Northern Ireland | `0x6E070000` | 54.585570668, -5.904677953000004 | 北アイルランド | Northern Ireland | Irlande du Nord | Nordirland | Irlanda del Nord | Irlanda del Norte | 北爱尔兰 | 북아일랜드 | Noord-Ierland | Irlanda do Norte | Северная Ирландия | Northern Ireland | Northern Ireland | Northern Ireland | Northern Ireland | Northern Ireland |
| South West | `0x6E080000` | 51.448974024, -2.5813046579999934 | 南西部地方 | South West | Sud-Ouest | South West | Sud Ovest | Suroeste | 西南英格兰 | 사우스웨스트 | South West | Sudoeste | Юго-Западный регион | South West | South West | South West | South West | South West |
| West Midlands | `0x6E090000` | 52.481688856, -1.8891641040000025 | ウェスト・ミッドランド地方 | West Midlands | Midlands de l'Ouest | West Midlands | Midlands Occidentali | Midlands Occidentales | 西米德兰兹 | 웨스트미들랜즈 | West Midlands | Midlands Ocidentais | Западный Мидленд | West Midlands | West Midlands | West Midlands | West Midlands | West Midlands |
| North West | `0x6E0A0000` | 53.464965212, -2.229741202000014 | 北西部地方 | North West | Nord-Ouest | North West | Nord Ovest | Noroeste | 西北英格兰 | 노스웨스트 | North West | Noroeste | Северо-Западный регион | North West | North West | North West | North West | North West |
| North East | `0x6E0B0000` | 54.970092148, -1.6090119750000156 | 北東部地方 | North East | Nord-Est | North East | Nord Est | Noreste | 东北英格兰 | 노스이스트 | North East | Nordeste | Северо-Восточный регион | North East | North East | North East | North East | North East |
| Yorkshire and the Humber | `0x6E0C0000` | 53.794555052, -1.548587005999991 | ヨークシャー・アンド・ザ・ハンバー地方 | Yorkshire and the Humber | Yorkshire et Humber | Yorkshire and the Humber | Yorkshire e Humber | Yorkshire y Humber | 约克郡-亨伯 | 요크셔-험버 | Yorkshire and the Humber | Yorkshire e Humber | Йоркшир и Хамбер | Yorkshire and the Humber | Yorkshire and the Humber | Yorkshire and the Humber | Yorkshire and the Humber | Yorkshire and the Humber |
| East Midlands | `0x6E0D0000` | 52.630004284, -1.1365985810000154 | イースト・ミッドランド地方 | East Midlands | Midlands de l'Est | East Midlands | Midlands Orientali | Midlands Orientales | 东米德兰兹 | 이스트미들랜즈 | East Midlands | Midlands Orientais | Восточный Мидленд | East Midlands | East Midlands | East Midlands | East Midlands | East Midlands |
| East of England | `0x6E0E0000` | 52.62451112, 1.296390244 | イングランド東部地方 | East of England | Est | East of England | Est dell'Inghilterra | Este de Inglaterra | 东英格兰 | 이스트오브잉글랜드 | East of England | Este de Inglaterra | Восточный регион | East of England | East of England | East of England | East of England | East of England |
| South East | `0x6E0F0000` | 50.83923282, -0.1258536450000065 | 南東部地方 | South East | Sud-Est | South East | Sud Est | 씒⭤ꥠ軷됎矙ᑻ۱埣ἴឦ | 东南英格兰 | 사우스이스트 | South East | Sudeste | Юго-Восточный регион | South East | South East | South East | South East | South East |

# Zambia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x6F` | ZM | ザンビア | Zambia | Zambie | Sambia | Zambia | Zambia | 赞比亚 | 잠비아 | Zambia | Zâmbia | Замбия | Zambia | Zambia | Zambia | Zambia | Zambia |

## Zambia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x6F000000` | -15.413819207999992, 28.278885492 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Zambia | `0x6F010000` | -15.413819207999992, 28.278885492 | ザンビア | Zambia | Zambie | Sambia | Zambia | Zambia | 赞比亚 | 잠비아 | Zambia | Zâmbia | Замбия | Zambia | Zambia | Zambia | Zambia | Zambia |

# Zimbabwe
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x70` | ZW | ジンバブエ | Zimbabwe | Zimbabwe | Simbabwe | Zimbabwe | Zimbabue | 津巴布韦 | 짐바브웨 | Zimbabwe | Zimbabué | Зимбабве | Zimbabwe | Zimbabwe | Zimbabwe | Zimbabwe | Zimbabwe |

## Zimbabwe Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x70000000` | -17.819825039999998, 31.047447708 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Zimbabwe | `0x70010000` | -17.819825039999998, 31.047447708 | ジンバブエ | Zimbabwe | Zimbabwe | Simbabwe | Zimbabwe | Zimbabue | 津巴布韦 | 짐바브웨 | Zimbabwe | Zimbabué | Зимбабве | Zimbabwe | Zimbabwe | Zimbabwe | Zimbabwe | Zimbabwe |

# Azerbaijan
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x71` | AZ | アゼルバイジャン | Azerbaijan | Azerbaïdjan | Aserbaidschan | Azerbaigian | Azerbaiyán | 阿塞拜疆 | 아제르바이잔 | Azerbeidzjan | Azerbaijão | Азербайджан | Azerbaijan | Azerbaijan | Azerbaijan | Azerbaijan | Azerbaijan |

## Azerbaijan Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x71000000` | 40.3747554, 49.889051678 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Azerbaijan | `0x71010000` | 40.3747554, 49.889051678 | アゼルバイジャン | Azerbaijan | Azerbaïdjan | Aserbaidschan | Azerbaigian | Azerbaiyán | 阿塞拜疆 | 아제르바이잔 | Azerbeidzjan | Azerbaijão | Азербайджан | Azerbaijan | Azerbaijan | Azerbaijan | Azerbaijan | Azerbaijan |

# Mauritania
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x72` | MR | モーリタニア | Mauritania | Mauritanie | Mauretanien | Mauritania | Mauritania | 毛里塔尼亚 | 모리타니 | Mauritanië | Mauritânia | Мавритания | Mauritania | Mauritania | Mauritania | Mauritania | Mauritania |

## Mauritania Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x72000000` | 18.09997538, -15.946209164999999 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Mauritania | `0x72010000` | 18.09997538, -15.946209164999999 | モーリタニア | Mauritania | Mauritanie | Mauretanien | Mauritania | Mauritania | 毛里塔尼亚 | 모리타니 | Mauritanië | Mauritânia | Мавритания | Mauritania | Mauritania | Mauritania | Mauritania | Mauritania |

# Mali
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x73` | ML | マリ | Mali | Mali | Mali | Mali | Malí | 马里 | 말리 | Mali | Mali | Мали | Mali | Mali | Mali | Mali | Mali |

## Mali Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x73000000` | 12.645263528, -7.997579152000014 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Mali | `0x73010000` | 12.645263528, -7.997579152000014 | マリ | Mali | Mali | Mali | Mali | Malí | 马里 | 말리 | Mali | Mali | Мали | Mali | Mali | Mali | Mali | Mali |

# Niger
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x74` | NE | ニジェール | Niger | Niger | Niger | Niger | Níger | 尼日尔 | 니제르 | Niger | Níger | Нигер | Niger | Niger | Niger | Niger | Niger |

## Niger Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x74000000` | 13.518676604, 2.103887557 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Niger | `0x74010000` | 13.518676604, 2.103887557 | ニジェール | Niger | Niger | Niger | Niger | Níger | 尼日尔 | 니제르 | Niger | Níger | Нигер | Niger | Niger | Niger | Niger | Niger |

# Chad
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x75` | TD | チャド | Chad | Tchad | Tschad | Ciad | Chad | 乍得 | 차드 | Tsjaad | Chade | Чад | Chad | Chad | Chad | Chad | Chad |

## Chad Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x75000000` | 12.106933456, 15.034830923 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Chad | `0x75010000` | 12.106933456, 15.034830923 | チャド | Chad | Tchad | Tschad | Ciad | Chad | 乍得 | 차드 | Tsjaad | Chade | Чад | Chad | Chad | Chad | Chad | Chad |

# Sudan
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x76` | SD | スーダン | Sudan | Soudan | Sudan | Sudan | Sudán | 苏丹 | 수단 | Soedan | Sudão | Судан | Sudan | Sudan | Sudan | Sudan | Sudan |

## Sudan Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x76000000` | 15.62805158, 32.530606038 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Sudan | `0x76010000` | 15.62805158, 32.530606038 | スーダン | Sudan | Soudan | Sudan | Sudan | Sudán | 苏丹 | 수단 | Soedan | Sudão | Судан | Sudan | Sudan | Sudan | Sudan | Sudan |

# Eritrea
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x77` | ER | エリトリア | Eritrea | Érythrée | Eritrea | Eritrea | Eritrea | 厄立特里亚 | 에리트레아 | Eritrea | Eritreia | Эритрея | Eritrea | Eritrea | Eritrea | Eritrea | Eritrea |

## Eritrea Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x77000000` | 15.331420724, 38.930159573 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Eritrea | `0x77010000` | 15.331420724, 38.930159573 | エリトリア | Eritrea | Érythrée | Eritrea | Eritrea | Eritrea | 厄立特里亚 | 에리트레아 | Eritrea | Eritreia | Эритрея | Eritrea | Eritrea | Eritrea | Eritrea | Eritrea |

# Djibouti
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x78` | DJ | ジブチ | Djibouti | Djibouti | Dschibuti | Gibuti | Yibuti | 吉布提 | 지부티 | Djibouti | Djibouti | Джибути | Djibouti | Djibouti | Djibouti | Djibouti | Djibouti |

## Djibouti Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x78000000` | 11.585082876, 43.143427865999996 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Djibouti | `0x78010000` | 11.585082876, 43.143427865999996 | ジブチ | Djibouti | Djibouti | Dschibuti | Gibuti | Yibuti | 吉布提 | 지부티 | Djibouti | Djibouti | Джибути | Djibouti | Djibouti | Djibouti | Djibouti | Djibouti |

# Somalia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x79` | SO | ソマリア | Somalia | Somalie | Somalia | Somalia | Somalia | 索马里 | 소말리아 | Somalië | Somália | Сомали | Somalia | Somalia | Somalia | Somalia | Somalia |

## Somalia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x79000000` | 2.03247068, 45.346192645 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Somalia | `0x79010000` | 2.03247068, 45.346192645 | ソマリア | Somalia | Somalie | Somalia | Somalia | Somalia | 索马里 | 소말리아 | Somalië | Somália | Сомали | Somalia | Somalia | Somalia | Somalia | Somalia |

# Andorra
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x7A` | AD | アンドラ | Andorra | Andorre | Andorra | Andorra | Andorra | 安道尔 | 안도라 | Andorra | Andorra | Андорра | Andorra | Andorra | Andorra | Andorra | Andorra |

## Andorra Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x7A000000` | 42.495116704, 1.499637867 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Andorra | `0x7A010000` | 42.495116704, 1.499637867 | アンドラ | Andorra | Andorre | Andorra | Andorra | Andorra | 安道尔 | 안도라 | Andorra | Andorra | Андорра | Andorra | Andorra | Andorra | Andorra | Andorra |

# Gibraltar
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x7B` | GI | ジブラルタル | Gibraltar | Gibraltar | Gibraltar | Gibilterra | Gibraltar | 直布罗陀 | 지브롤터 | Gibraltar | Gibraltar | Гибралтар | Gibraltar | Gibraltar | Gibraltar | Gibraltar | Gibraltar |

## Gibraltar Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x7B000000` | 36.128539628, -5.344373695000002 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Gibraltar | `0x7B010000` | 36.128539628, -5.344373695000002 | ジブラルタル | Gibraltar | Gibraltar | Gibraltar | Gibilterra | Gibraltar | 直布罗陀 | 지브롤터 | Gibraltar | Gibraltar | Гибралтар | Gibraltar | Gibraltar | Gibraltar | Gibraltar | Gibraltar |

# Guernsey
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x7C` | GG | ガーンジー島 | Guernsey | Guernesey | Guernsey | Guernsey | Guernsey | 根西 | 건지 섬 | Guernsey | Guernsey | Гернси | Guernsey | Guernsey | Guernsey | Guernsey | Guernsey |

## Guernsey Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x7C000000` | 49.449462328, -2.5483455840000033 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Guernsey | `0x7C010000` | 49.449462328, -2.5483455840000033 | ガーンジー島 | Guernsey | Guernesey | Guernsey | Guernsey | Guernsey | 根西 | 건지 섬 | Guernsey | Guernsey | Гернси | Guernsey | Guernsey | Guernsey | Guernsey | Guernsey |

# Isle of Man
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x7D` | IM | マン島 | Isle of Man | Île de Man | Isle of Man | Isola di Man | Isla de Man | 马恩岛 | 맨 섬 | Man | Ilha de Man | Мэн (остров) | Isle of Man | Isle of Man | Isle of Man | Isle of Man | Isle of Man |

## Isle of Man Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x7D000000` | 54.16259704, -4.481944591999991 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Isle of Man | `0x7D010000` | 54.16259704, -4.481944591999991 | マン島 | Isle of Man | Île de Man | Isle of Man | Isola di Man | Isla de Man | 马恩岛 | 맨 섬 | Man | Ilha de Man | Мэн (остров) | Isle of Man | Isle of Man | Isle of Man | Isle of Man | Isle of Man |

# Jersey
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x7E` | JE | ジャージー島 | Jersey | Jersey | Jersey | Jersey | Jersey | 泽西 | 저지 섬 | Jersey | Jérsia | Джерси | Jersey | Jersey | Jersey | Jersey | Jersey |

## Jersey Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x7E000000` | 49.185790456, -2.1088912639999933 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Jersey | `0x7E010000` | 49.185790456, -2.1088912639999933 | ジャージー島 | Jersey | Jersey | Jersey | Jersey | Jersey | 泽西 | 저지 섬 | Jersey | Jérsia | Джерси | Jersey | Jersey | Jersey | Jersey | Jersey |

# Monaco
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x7F` | MC | モナコ | Monaco | Monaco | Monaco | Monaco (Principato di) | Mónaco | 摩纳哥 | 모나코 | Monaco | Mónaco | Монако | Monaco | Monaco | Monaco | Monaco | Monaco |

## Monaco Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x7F000000` | 43.714599112, 7.41579165 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Monaco | `0x7F010000` | 43.714599112, 7.41579165 | モナコ | Monaco | Monaco | Monaco | Monaco (Principato di) | Mónaco | 摩纳哥 | 모나코 | Monaco | Mónaco | Монако | Monaco | Monaco | Monaco | Monaco | Monaco |

# Taiwan
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x80` | TW | 台湾 | Taiwan | Taïwan | Taiwan | Taiwan | Taiwán | 中国 台湾 | 타이완 | Taiwan | Taiwan | Тайвань | 臺灣 | Taiwan | Taiwan | Taiwan | Taiwan |

## Taiwan Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x80000000` | 25.032348348, 121.503626301 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Taipei City | `0x80020000` | 25.032348348, 121.503626301 | 台北市 | Taipei City | Taipei | Taipeh | Taipei | Taipéi | - | 타이베이 | Taipei | Taipei | Тайбэй | 臺北市 | Taipei City | Taipei City | Taipei City | Taipei City |
| Kaohsiung City | `0x80030000` | 22.598876696, 120.278647384 | 高雄市 | Kaohsiung City | Kaohsiung | Kaohsiung | Kaohsiung | Condado de Kaohsiung | - | 가오슝 | Kaohsiung | Condado de Kaohsiung | Гаосюн | 高雄市 | Kaohsiung City | Kaohsiung City | Kaohsiung City | Kaohsiung City |
| Keelung City | `0x80040000` | 25.120238972, 121.734339819 | 基隆市 | Keelung City | Keelung | Keelung | Keelung | Keelung | - | 지룽 | Chilung | Keelung | Килунг | 基隆市 | Keelung City | Keelung City | Keelung City | Keelung City |
| Hsinchu City | `0x80050000` | 24.724731164, 120.954308401 | 新竹市 | Hsinchu City | Hsinchu | Hsinchu | Hsinchu | Hsinchu | - | 신주 | Hsinchu | Hsinchu | Синьчжу | 新竹市 | Hsinchu City | Hsinchu City | Hsinchu City | Hsinchu City |
| Taichung City | `0x80060000` | 24.131469452, 120.646690377 | 台中市 | Taichung City | Taichung | Taichung | Taichung | Taichung | - | 타이중 | Taichung | Taichung | Тайчжун | 臺中市 | Taichung City | Taichung City | Taichung City | Taichung City |
| Chiayi City | `0x80070000` | 23.461303444, 120.448935933 | 嘉義市 | Chiayi City | Chiayi | Chiayi | Chiayi | Chiayi | - | 자이 | Chiayi | Chiayi | Цзяи | 嘉義市 | Chiayi City | Chiayi City | Chiayi City | Chiayi City |
| Tainan City | `0x80080000` | 22.98889134, 120.19075652 | 台南市 | Tainan City | Tainan | Tainan | Tainan | Tainan | - | 타이난 | Tainan | Tainan | Тайнань | 臺南市 | Tainan City | Tainan City | Tainan City | Tainan City |
| New Taipei City | `0x80090000` | 24.977416708, 121.448694511 | 新北市 | New Taipei City | Nouveau Taipei | Xinbei | New Taipei | Nuevo Taipéi | - | 신베이 | Nieuw Taipei | Nova Taipei | Новый Тайбэй | 新北市 | New Taipei City | New Taipei City | New Taipei City | New Taipei City |
| Taoyuan City | `0x800A0000` | 24.971923544, 121.28939232 | 桃園市 | Taoyuan City | Taoyuan | Taoyuan | Taoyuan | Ciudad de Taoyuan | - | 타오위안 | Taoyuan | Cidade de Taoyuan | Таоюань | 桃園市 | Taoyuan City | Taoyuan City | Taoyuan City | Taoyuan City |
| HsinChu County | `0x800B0000` | 24.82910128, 120.99825383299999 | 新竹県 | HsinChu County | Hsinchu (comté de) | Kreis Hsinchu | Contea di HsinChu | Condado de Hsinchu | - | 신주 현 | HsinChu | Condado de Hsinchu | Синьчжу (уезд) | 新竹縣 | HsinChu County | HsinChu County | HsinChu County | HsinChu County |
| Miaoli County | `0x800C0000` | 24.532470424, 120.79500621 | 苗栗県 | Miaoli County | Miaoli (comté de) | Kreis Miaoli | Contea di Miaoli | Distrito de Miaoli | - | 먀오리 현 | Miaoli | Distrito de Miaoli | Мяоли (уезд) | 苗栗縣 | Miaoli County | Miaoli County | Miaoli County | Miaoli County |
| Taichung County | `0x800D0000` | 24.219360076, 120.701622167 | 台中県 | Taichung County | Taichung (comté de) | Kreis Taichung | Contea di Taichung | Condado de Taichung | - | 타이중 현 | Taichung | Condado de Taichung | Тайчжун (уезд) | Taichung County | Taichung County | Taichung County | Taichung County | Taichung County |
| Changhua County | `0x800E0000` | 24.065551484, 120.531333618 | 彰化県 | Changhua County | Changhua (comté de) | Kreis Changhua | Contea di Changhua | Condado de Changhua | - | 장화 현 | Changhua | Condado de Changhua | Чжанхуа (уезд) | 彰化縣 | Changhua County | Changhua County | Changhua County | Changhua County |
| Nantou County | `0x800F0000` | 23.8952634, 120.696128988 | 南投県 | Nantou County | Nantou (comté de) | Kreis Nantou | Contea di Nantou | Condado de Nantou | - | 난터우 현 | Nantou | Condado de Nantou | Наньтоу (уезд) | 南投縣 | Nantou County | Nantou County | Nantou County | Nantou County |
| Yunlin County | `0x80100000` | 23.686523168, 120.52584043899999 | 雲林県 | Yunlin County | Yunlin (comté de) | Kreis Yunlin | Contea di Yunlin | Condado de Yunlin | - | 윈린 현 | Yunlin | Condado de Yunlin | Юньлинь (уезд) | 雲林縣 | Yunlin County | Yunlin County | Yunlin County | Yunlin County |
| Chiayi County | `0x80110000` | 23.461303444, 120.448935933 | 嘉義県 | Chiayi County | Chiayi (comté de) | Kreis Chiayi | Contea di Chiayi | Condado de Chiayi | - | 자이 현 | Chiayi | Condado de Chiayi | Цзяи (уезд) | 嘉義縣 | Chiayi County | Chiayi County | Chiayi County | Chiayi County |
| Tainan County | `0x80120000` | 23.049316144, 120.333579174 | 台南県 | Tainan County | Tainan (comté de) | Kreis Tainan | Contea di Tainan | Condado de Tainan | - | 타이난 현 | Tainan | Condado de Tainan | Тайнань (уезд) | Tainan County | Tainan County | Tainan County | Tainan County | Tainan County |
| Kaohsiung County | `0x80130000` | 22.620849352, 120.350058711 | 高雄県 | Kaohsiung County | Kaohsiung (comté de) | Kreis Kaohsiung | Contea di Kaohsiung | Distrito de Kaohsiung | - | 가오슝 현 | Kaohsiung | Distrito de Kaohsiung | Гаосюн (уезд) | Kaohsiung County | Kaohsiung County | Kaohsiung County | Kaohsiung County | Kaohsiung County |
| Pingtung County | `0x80140000` | 22.664794664, 120.498374544 | 屏東県 | Pingtung County | Pingtung (comté de) | Kreis Pingtung | Contea di Pingtung | Condado de Pingtung | - | 핑둥 현 | Pingtung | Condado de Pingtung | Пиндун (уезд) | 屏東縣 | Pingtung County | Pingtung County | Pingtung County | Pingtung County |
| Yilan County | `0x80150000` | 24.763183312, 121.745326177 | 宜蘭県 | Yilan County | Ilan (comté de) | Kreis Yilan | Contea di Yilan | Condado de Yilan | - | 이란 현 | Yilan | Condado de Yilan | Илань (уезд) | 宜蘭縣 | Yilan County | Yilan County | Yilan County | Yilan County |
| Hualien County | `0x80160000` | 23.983154024, 121.629969418 | 花蓮県 | Hualien County | Hualien (comté de) | Kreis Hualien | Contea di Hualien | Condado de Hualien | - | 화롄 현 | Hualien | Condado de Hualien | Хуалянь (уезд) | 花蓮縣 | Hualien County | Hualien County | Hualien County | Hualien County |
| Taitung County | `0x80170000` | 22.752685288, 121.14107648699999 | 台東県 | Taitung County | Taitung (comté de) | Kreis Taitung | Contea di Taitung | Condado de Taitung | - | 타이둥 현 | Taitung | Condado de Taitung | Тайдун (уезд) | 臺東縣 | Taitung County | Taitung County | Taitung County | Taitung County |
| Penghu County | `0x80180000` | 23.56567356, 119.58101365099999 | 澎湖県 | Penghu County | Penghu (comté de) | Kreis Penghu | Contea di Penghu | Islas Pescadores | - | 펑후 현 | Penghu | Ilhas Pescadores | Пэнху (уезд) | 澎湖縣 | Penghu County | Penghu County | Penghu County | Penghu County |
| Kinmen County | `0x80190000` | 24.428100308, 118.328568839 | 金門県 | Kinmen County | Kinmen (comté de) | Kreis Kinmen | Contea di Kinmen | Condado de Kinmen | - | 진먼 현 | Kinmen | Condado de Kinmen | Цзиньмэн (уезд) | 金門縣 | Kinmen County | Kinmen County | Kinmen County | Kinmen County |
| Lienchiang County | `0x801A0000` | 26.14746064, 119.927083928 | 連江県 | Lienchiang County | Lienchiang (comté de) | Kreis Lienchiang | Contea di Lienchiang | Condado de Lienchiang | - | 롄장 현 | Lienchiang | Condado de Lienchiang | Ляньцзян (уезд) | 連江縣 | Lienchiang County | Lienchiang County | Lienchiang County | Lienchiang County |

# South Korea
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x88` | KR | 韓国 | South Korea | Corée du Sud | Südkorea | Corea del Sud | Corea del Sur | 韩国 | 대한민국 | Zuid-Korea | Coreia do Sul | Южная Корея | 韓國 | South Korea | South Korea | South Korea | South Korea |

## South Korea Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x88000000` | 37.496337464, 126.996805301 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Seoul-teukbyeolsi | `0x88020000` | 37.496337464, 126.996805301 | ソウル特別市 | Seoul-teukbyeolsi | Séoul | Seoul | Seoul | Seúl | 首尔特别市 | 서울특별시 | Seoul | Seul | Сеул | 首爾特別市 | Seoul-teukbyeolsi | Seoul-teukbyeolsi | Seoul-teukbyeolsi | Seoul-teukbyeolsi |
| Busan-gwangyeoksi | `0x88030000` | 35.079345304, 129.029281531 | プサン広域市 | Busan-gwangyeoksi | Pusan | Busan | Busan | Busán | 釜山广域市 | 부산광역시 | Busan | Busan | Пусан | 釜山廣域市 | Busan-gwangyeoksi | Busan-gwangyeoksi | Busan-gwangyeoksi | Busan-gwangyeoksi |
| Daegu-gwangyeoksi | `0x88040000` | 35.848388264, 128.578840853 | テグ広域市 | Daegu-gwangyeoksi | Daegu | Daegu | Daegu | Daegu | 大邱广域市 | 대구광역시 | Daegu | Daegu | Тэгу | 大邱廣域市 | Daegu-gwangyeoksi | Daegu-gwangyeoksi | Daegu-gwangyeoksi | Daegu-gwangyeoksi |
| Incheon-gwangyeoksi | `0x88050000` | 37.496337464, 126.62876230799999 | インチョン広域市 | Incheon-gwangyeoksi | Incheon | Incheon | Incheon | Incheon | 仁川广域市 | 인천광역시 | Incheon | Incheon | Инчхон | 仁川廣域市 | Incheon-gwangyeoksi | Incheon-gwangyeoksi | Incheon-gwangyeoksi | Incheon-gwangyeoksi |
| Gwangju-gwangyeoksi | `0x88060000` | 35.112304288, 126.86496900499999 | クァンジュ広域市 | Gwangju-gwangyeoksi | Gwangju | Gwangju | Gwangju | Gwangju | 光州广域市 | 광주광역시 | Gwangju | Gwangju | Кванджу | 光州廣域市 | Gwangju-gwangyeoksi | Gwangju-gwangyeoksi | Gwangju-gwangyeoksi | Gwangju-gwangyeoksi |
| Daejeon-gwangyeoksi | `0x88070000` | 36.348266188000004, 127.43076644199999 | テジョン広域市 | Daejeon-gwangyeoksi | Daejeon | Daejeon | Daejeon | Daejeon | 大田广域市 | 대전광역시 | Daejeon | Daejeon | Тэджон | 大田廣域市 | Daejeon-gwangyeoksi | Daejeon-gwangyeoksi | Daejeon-gwangyeoksi | Daejeon-gwangyeoksi |
| Ulsan-gwangyeoksi | `0x88080000` | 35.51330526, 129.36436545 | ウルサン広域市 | Ulsan-gwangyeoksi | Ulsan | Ulsan | Ulsan | Ulsan | 蔚山广域市 | 울산광역시 | Ulsan | Ulsan | Ульсан | 蔚山廣域市 | Ulsan-gwangyeoksi | Ulsan-gwangyeoksi | Ulsan-gwangyeoksi | Ulsan-gwangyeoksi |
| Gyeonggi-do | `0x88090000` | 37.496337464, 126.996805301 | キョンギ道 | Gyeonggi-do | Gyeonggi | Gyeonggi-do | Gyeonggi | Gyeonggi | 京畿道 | 경기도 | Gyeonggi-do | Gyeonggi | Кёнгидо | 京畿道 | Gyeonggi-do | Gyeonggi-do | Gyeonggi-do | Gyeonggi-do |
| Gangwon-do | `0x880A0000` | 37.93029742, 127.765850361 | カンウォン道 | Gangwon-do | Gangwon | Gangwon-do | Gangwon | Gangwon | 江原道 | 강원도 | Gangwon-do | Gangwon | Канвондо | 江原道 | Gangwon-do | Gangwon-do | Gangwon-do | Gangwon-do |
| Chungcheongbuk-do | `0x880B0000` | 36.963500556, 127.88120712 | チュンチョンブク道 | Chungcheongbuk-do | Chungcheong du Nord | Chungcheongbuk-do | Chungcheong Settentrionale | Chungcheong del Norte | 忠清北道 | 충청북도 | Noord-Chungcheong | Chungcheong do Norte | Чхунчхон-Пукто | 忠清北道 | Chungcheongbuk-do | Chungcheongbuk-do | Chungcheongbuk-do | Chungcheongbuk-do |
| Chungcheongnam-do | `0x880C0000` | 36.348266188000004, 127.43076644199999 | チュンチョンナム道 | Chungcheongnam-do | Chungcheong du Sud | Chungcheongnam-do | Chungcheong Meridionale | Chungcheong del Sur | 忠清南道 | 충청남도 | Zuid-Chungcheong | Chungcheong do Sul | Чхунчхон-Намдо | 忠清南道 | Chungcheongnam-do | Chungcheongnam-do | Chungcheongnam-do | Chungcheongnam-do |
| Jeollabuk-do | `0x880D0000` | 35.848388264, 127.079202986 | チョルラブク道 | Jeollabuk-do | Jeolla du Nord | Jeollabuk-do | Jeolla Settentrionale | Jeolla del Norte | 全罗北道 | 전라북도 | Noord-Jeolla | Jeolla do Norte | Чолла-Пукто | 全羅北道 | Jeollabuk-do | Jeollabuk-do | Jeollabuk-do | Jeollabuk-do |
| Jeollanam-do | `0x880E0000` | 35.112304288, 126.86496900499999 | チョルラナム道 | Jeollanam-do | Jeolla du Sud | Jeollanam-do | Jeolla Meridionale | Jeolla del Sur | 全罗南道 | 전라남도 | Zuid-Jeolla | Jeolla do Sul | Чолла-Намдо | 全羅南道 | Jeollanam-do | Jeollanam-do | Jeollanam-do | Jeollanam-do |
| Gyeongsangbuk-do | `0x880F0000` | 35.848388264, 128.578840853 | キョンサンブク道 | Gyeongsangbuk-do | Gyeongsang du Nord | Gyeongsangbuk-do | Gyeongsang Settentrionale | Gyeongsang del Norte | 庆尚北道 | 경상북도 | Noord-Gyeongsang | Gyeongsang do Norte | Кёнсан-Пукто | 慶尚北道 | Gyeongsangbuk-do | Gyeongsangbuk-do | Gyeongsangbuk-do | Gyeongsangbuk-do |
| Gyeongsangnam-do | `0x88100000` | 35.299071864, 128.65025218 | キョンサンナム道 | Gyeongsangnam-do | Gyeongsang du Sud | Gyeongsangnam-do | Gyeongsang Meridionale | Gyeongsang del Sur | 庆尚南道 | 경상남도 | Zuid-Gyeongsang | Gyeongsang do Sul | Кёнсан-Намдо | 慶尚南道 | Gyeongsangnam-do | Gyeongsangnam-do | Gyeongsangnam-do | Gyeongsangnam-do |
| Jeju-teukbyeoljachido | `0x88110000` | 33.513793564, 126.529885086 | チェジュ特別自治道 | Jeju-teukbyeoljachido | Jeju | Jeju-do | Jeju | Jeju | 济州特别自治道 | 제주특별자치도 | Jeju-do | Jeju | Чеджудо | 濟州特別自治道 | Jeju-teukbyeoljachido | Jeju-teukbyeoljachido | Jeju-teukbyeoljachido | Jeju-teukbyeoljachido |

# Hong Kong
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x90` | HK | ホンコン | Hong Kong | Hong Kong | Hongkong | Hong Kong | Hong Kong | 中国 香港 | 홍콩 | Hongkong | Hong Kong | Гонконг | 香港 | Hong Kong | Hong Kong | Hong Kong | Hong Kong |

## Hong Kong Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x90000000` | 22.461547596, 114.296575453 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Hong Kong | `0x90010000` | 22.461547596, 114.296575453 | ホンコン | Hong Kong | Hong Kong | Hongkong | Hong Kong | Hong Kong | 中国 香港 | 홍콩 | Hongkong | Hong Kong | Гонконг | 香港 | Hong Kong | Hong Kong | Hong Kong | Hong Kong |

# Macao
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x91` | MO | マカオ | Macao | Macao | Macau | Macao | Macao | 中国 澳门 | 마카오 | Macau | Macau | Макао | 澳門 | Macao | Macao | Macao | Macao |

## Macao Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x91000000` | 22.214355216, 113.59894172 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Macao | `0x91010000` | 22.214355216, 113.59894172 | マカオ | Macao | Macao | Macau | Macao | Macao | 中国 澳门 | 마카오 | Macau | Macau | Макао | 澳門 | Macao | Macao | Macao | Macao |

# Singapore
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x99` | SG | シンガポール | Singapore | Singapour | Singapur | Singapore | Singapur | 新加坡 | 싱가포르 | Singapore | Singapura | Сингапур | Singapore | Singapore | Singapore | Singapore | Singapore |

## Singapore Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x99000000` | 1.2908935400000001, 103.854042174 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Singapore | `0x99010000` | 1.2908935400000001, 103.854042174 | シンガポール | Singapore | Singapour | Singapur | Singapore | Singapur | 新加坡 | 싱가포르 | Singapore | Singapura | Сингапур | Singapore | Singapore | Singapore | Singapore | Singapore |

# Malaysia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0x9C` | MY | マレーシア | Malaysia | Malaisie | Malaysia | Malesia | Malasia | 马来西亚 | 말레이시아 | Maleisië | Malásia | Малайзия | Malaysia | Malaysia | Malaysia | Malaysia | Malaysia |

## Malaysia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0x9C000000` | 3.164062464, 101.695222827 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Kuala Lumpur | `0x9C020000` | 3.164062464, 101.695222827 | クアラ・ルンプール | Kuala Lumpur | Kuala Lumpur | Kuala Lumpur | Kuala Lumpur | Kuala Lumpur | 吉隆坡联邦直辖区 | 쿠알라룸푸르 | Kuala Lumpur | Kuala Lumpur | Куала-Лумпур | Kuala Lumpur | Kuala Lumpur | Kuala Lumpur | Kuala Lumpur | Kuala Lumpur |
| Johor | `0x9C030000` | 1.461181624, 103.749671773 | ジョホール州 | Johor | Johor | Johor | Johor | Johor | 柔佛州 | 조호르 주 | Johor | Johor | Джохор | Johor | Johor | Johor | Johor | Johor |
| Kedah | `0x9C040000` | 6.113891532, 100.365873509 | ケダ州 | Kedah | Kedah | Kedah | Kedah | Kedah | 吉打州 | 케다 주 | Kedah | Kedah | Кедах | Kedah | Kedah | Kedah | Kedah | Kedah |
| Kelantan | `0x9C050000` | 6.1303710240000004, 102.250033906 | ケランタン州 | Kelantan | Kelantan | Kelantan | Kelantan | Kelantan | 吉兰丹州 | 켈란탄 주 | Kelantan | Kelantan | Келантан | Kelantan | Kelantan | Kelantan | Kelantan | Kelantan |
| Melaka | `0x9C060000` | 2.191772436, 102.244540727 | マラッカ州 | Melaka | Malacca | Malakka | Malacca | Melaka | 马六甲州 | 믈라카 주 | Malakka | Malacca | Малакка | Melaka | Melaka | Melaka | Melaka | Melaka |
| Negeri Sembilan | `0x9C070000` | 2.713623016, 101.931429524 | ヌグリ・センビラン州 | Negeri Sembilan | Negeri Sembilan | Negeri Sembilan | Negeri Sembilan | Negeri Sembilan | 森美兰州 | 느그리슴빌란 주 | Negeri Sembilan | Negeri Sembilan | Негери-Сембелан | Negeri Sembilan | Negeri Sembilan | Negeri Sembilan | Negeri Sembilan | Negeri Sembilan |
| Pahang | `0x9C080000` | 3.795776324, 103.332190169 | パハン州 | Pahang | Pahang | Pahang | Pahang | Pahang | 彭亨州 | 파항 주 | Pahang | Pahang | Паханг | Pahang | Pahang | Pahang | Pahang | Pahang |
| Perak | `0x9C090000` | 4.581298776, 101.079986779 | ペラ州 | Perak | Perak | Perak | Perak | Perak | 霹雳州 | 페라크 주 | Perak | Perak | Перак | Perak | Perak | Perak | Perak | Perak |
| Perlis | `0x9C0A0000` | 6.432495044, 100.19558496 | ペルリス州 | Perlis | Perlis | Perlis | Perlis | Perlis | 玻璃市州 | 페를리스 주 | Perlis | Perlis | Перлис | Perlis | Perlis | Perlis | Perlis | Perlis |
| Penang | `0x9C0B0000` | 5.416259704, 100.33291443499999 | ピナン州 | Penang | Penang | Penang | Penang | Penang | 槟榔屿州 | 피낭 주 | Penang | Penang | Пулау-Пинанг | Penang | Penang | Penang | Penang | Penang |
| Sarawak | `0x9C0C0000` | 1.549072248, 110.330500215 | サラワク州 | Sarawak | Sarawak | Sarawak | Sarawak | Sarawak | 沙捞越州 | 사라왁 주 | Sarawak | Sarawak | Саравак | Sarawak | Sarawak | Sarawak | Sarawak | Sarawak |
| Selangor | `0x9C0D0000` | 3.081665004, 101.530427457 | セランゴール州 | Selangor | Selangor | Selangor | Selangor | Selangor | 雪兰莪州 | 셀랑고르 주 | Selangor | Selangor | Селангор | Selangor | Selangor | Selangor | Selangor | Selangor |
| Terengganu | `0x9C0E0000` | 5.32836908, 103.128942546 | トレンガヌ州 | Terengganu | Terengganu | Terengganu | Terengganu | Terengganu | 丁加奴州 | 트렝가누 주 | Terengganu | Terengganu | Тренгану | Terengganu | Terengganu | Terengganu | Terengganu | Terengganu |
| Labuan | `0x9C0F0000` | 5.27343744, 115.241402241 | ラブアン | Labuan | Labuan | Labuan | Labuan | Labuan | 纳闽联邦直辖区 | 라부안 | Labuan | Labuan | Лабуан | Labuan | Labuan | Labuan | Labuan | Labuan |
| Sabah | `0x9C100000` | 5.982055596, 116.065379091 | サバ州 | Sabah | Sabah | Sabah | Sabah | Sabah | 沙巴州 | 사바 주 | Sabah | Sabah | Сабах | Sabah | Sabah | Sabah | Sabah | Sabah |
| Putrajaya | `0x9C110000` | 2.91137692, 101.662263753 | プトラジャヤ | Putrajaya | Putrajaya | Putrajaya | Putrajaya | Putrajaya | 布城联邦直辖区 | 푸트라자야 | Putrajaya | Putrajaya | Путраджая | Putrajaya | Putrajaya | Putrajaya | Putrajaya | Putrajaya |

# China
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0xA0` | CN | 中国 | China | Chine | China | Cina | China | 中国 | 중국 | China | China | Китай | 中國 | China | China | China | China |

## China Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0xA0000000` | 39.913329624, 116.433422084 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Beijing | `0xA0020000` | 39.913329624, 116.433422084 | 北京市 | Beijing | Pékin | Peking | Pechino | Pekín | 北京市 | 베이징 | Beijing | Pequim | Пекин | 北京市 | Beijing | Beijing | Beijing | Beijing |
| Chongqing | `0xA0030000` | 29.597167632, 106.364424977 | 重慶市 | Chongqing | Chongqing | Chongqing | Chongqing | Chongqing | 重庆市 | 충칭 | Tsjoengking | Chongqing | Чунцин | 重慶市 | Chongqing | Chongqing | Chongqing | Chongqing |
| Shanghai | `0xA0040000` | 31.245116832, 121.47066722699999 | 上海市 | Shanghai | Shanghai | Shanghai | Shanghai | Shanghái | 上海市 | 상하이 | Sjanghai | Xangai | Шанхай | 上海市 | Shanghai | Shanghai | Shanghai | Shanghai |
| Tianjin | `0xA0050000` | 39.149779828, 117.180494428 | 天津市 | Tianjin | Tianjin | Tianjin | Tientsin | Tianjin | 天津市 | 톈진 | Tianjin | Tianjin | Тяньцзинь | 天津市 | Tianjin | Tianjin | Tianjin | Tianjin |
| Anhui | `0xA0060000` | 31.931762332, 117.31233072399999 | 安徽省 | Anhui | Anhui | Anhui | Anhui | Anhui | 安徽省 | 안후이 성 | Anhui | Anhui | Аньхой | 安徽省 | Anhui | Anhui | Anhui | Anhui |
| Fujian | `0xA0070000` | 26.081542672, 119.29536834299999 | 福建省 | Fujian | Fujian | Fujian | Fujian | Fujian | 福建省 | 푸젠 성 | Fujian | Fujian | Фуцзянь | 福建省 | Fujian | Fujian | Fujian | Fujian |
| Gansu | `0xA0080000` | 36.029662676, 103.749671773 | 甘粛省 | Gansu | Gansu | Gansu | Gansu | Gansu | 甘肃省 | 간쑤 성 | Gansu | Gansu | Ганьсу | 甘肅省 | Gansu | Gansu | Gansu | Gansu |
| Guangdong | `0xA0090000` | 23.09875462, 113.099062431 | 広東省 | Guangdong | Guangdong | Guangdong | Guangdong | Cantón | 广东省 | 광둥 성 | Guangdong | Guangdong | Гуандун | 廣東省 | Guangdong | Guangdong | Guangdong | Guangdong |
| Guizhou | `0xA00A0000` | 26.564941104, 106.683029359 | 貴州省 | Guizhou | Guizhou | Guizhou | Guizhou | Guizhou | 贵州省 | 구이저우 성 | Guizhou | Guizhou | Гуйчжоу | 貴州省 | Guizhou | Guizhou | Guizhou | Guizhou |
| Hainan | `0xA00B0000` | 20.083007584, 110.330500215 | 海南省 | Hainan | Hainan | Hainan | Hainan | Hainan | 海南省 | 하이난 성 | Hainan | Hainan | Хайнань | 海南省 | Hainan | Hainan | Hainan | Hainan |
| Hebei | `0xA00C0000` | 38.045653864, 114.466864002 | 河北省 | Hebei | Hebei | Hebei | Hebei | Hebei | 河北省 | 허베이 성 | Hebei | Hebei | Хэбэй | 河北省 | Hebei | Hebei | Hebei | Hebei |
| Heilongjiang | `0xA00D0000` | 45.763549284, 126.700173635 | 黒龍江省 | Heilongjiang | Heilongjiang | Heilongjiang | Heilongjiang | Heilongjiang | 黑龙江省 | 헤이룽장 성 | Heilongjiang | Heilongjang | Хэйлунцзян | 黑龍江省 | Heilongjiang | Heilongjiang | Heilongjiang | Heilongjiang |
| Henan | `0xA00E0000` | 34.595946872, 113.631900794 | 河南省 | Henan | Henan | Henan | Henan | Henan | 河南省 | 허난 성 | Henan | Henan | Хэнань | 河南省 | Henan | Henan | Henan | Henan |
| Hubei | `0xA00F0000` | 30.580443988, 114.31305499 | 湖北省 | Hubei | Hubei | Hubei | Hubei | Hubei | 湖北省 | 후베이 성 | Hubei | Hubei | Хубэй | 湖北省 | Hubei | Hubei | Hubei | Hubei |
| Húnán | `0xA0100000` | 28.17993132, 112.978212493 | 湖南省 | Húnán | Hunan | Hunan | Hunan | Hunan | 湖南省 | 후난 성 | Hunan | Hunan | Хунань | 湖南省 | Húnán | Húnán | Húnán | Húnán |
| Jiangsu | `0xA0110000` | 32.030639284, 118.828448128 | 江蘇省 | Jiangsu | Jiangsu | Jiangsu | Jiangsu | Jiangsu | 江苏省 | 장쑤 성 | Jiangsu | Jiangsu | Цзянсу | 江蘇省 | Jiangsu | Jiangsu | Jiangsu | Jiangsu |
| Jiangxi | `0xA0120000` | 28.630370768, 115.933542795 | 江西省 | Jiangxi | Jiangxi | Jiangxi | Jiangxi | Jiangxi | 江西省 | 장시 성 | Jiangxi | Jiangxi | Цзянси | 江西省 | Jiangxi | Jiangxi | Jiangxi | Jiangxi |
| Jilin | `0xA0130000` | 43.895873524, 125.282933453 | 吉林省 | Jilin | Jilin | Jilin | Jilin | Jilin | 吉林省 | 지린 성 | Jilin | Jilin | Гирин | 吉林省 | Jilin | Jilin | Jilin | Jilin |
| Liaoning | `0xA0140000` | 41.797484876, 123.382293519 | 遼寧省 | Liaoning | Liaoning | Liaoning | Liaoning | Liaoning | 辽宁省 | 랴오닝 성 | Liaoning | Liaoning | Ляонин | 遼寧省 | Liaoning | Liaoning | Liaoning | Liaoning |
| Qinghai | `0xA0150000` | 36.595458568, 101.914949987 | 青海省 | Qinghai | Qinghai | Qinghai | Qinghai | Qinghai | 青海省 | 칭하이 성 | Qinghai | Qinghai | Цинхай | 青海省 | Qinghai | Qinghai | Qinghai | Qinghai |
| Shanxi | `0xA0160000` | 34.266357032, 108.896780496 | 陝西省 | Shanxi | Shaanxi | Shaanxi | Shaanxi | Shaanxi | 陕西省 | 산시 성 | Shaanxi | Shaanxi | Шэньси | 陝西省 | Shanxi | Shanxi | Shanxi | Shanxi |
| Shandong | `0xA0170000` | 36.716308176, 117.015699058 | 山東省 | Shandong | Shandong | Shandong | Shandong | Shandong | 山东省 | 산둥 성 | Shandong | Shandong | Шаньдун | 山東省 | Shandong | Shandong | Shandong | Shandong |
| Shanxi | `0xA0180000` | 37.831420468, 112.50030592 | 山西省 | Shanxi | Shanxi | Shanxi | Shanxi | Shanxi | 山西省 | 산시 성 | Shanxi | Shanxi | Шаньси | 山西省 | Shanxi | Shanxi | Shanxi | Shanxi |
| Sichuan | `0xA0190000` | 30.629882464, 104.112221587 | 四川省 | Sichuan | Sichuan | Sichuan | Sichuan | Sichuan | 四川省 | 쓰촨 성 | Sichuan | Sichuan | Сычуань | 四川省 | Sichuan | Sichuan | Sichuan | Sichuan |
| Yunnan | `0xA01A0000` | 25.065307332, 102.678501868 | 雲南省 | Yunnan | Yunnan | Yunnan | Yunnan | Yunnan | 云南省 | 윈난 성 | Yunnan | Yunnan | Юньнань | 雲南省 | Yunnan | Yunnan | Yunnan | Yunnan |
| Zhejiang | `0xA01B0000` | 30.29479946, 120.113852014 | 浙江省 | Zhejiang | Zhejiang | Zhejiang | Zhejiang | Zhejiang | 浙江省 | 저장 성 | Zhejiang | Zhejiang | Чжэцзян | 浙江省 | Zhejiang | Zhejiang | Zhejiang | Zhejiang |
| Taiwan | `0xA01C0000` | 25.032348348, 121.503626301 | 台湾省 | Taiwan | Taiwan | Taiwan | Taiwan | Taiwán | 台湾省 | 타이완 성 | Taiwan | Taiwan | Тайвань | 台灣省 | Taiwan | Taiwan | Taiwan | Taiwan |
| Guangxi-Zhuangzu | `0xA01D0000` | 22.829589584, 108.314503522 | 広西チワン族自治区 | Guangxi-Zhuangzu | Guangxi | Guangxi | Guangxi Zhuang | Guangxi | 广西壮族自治区 | 광시좡 족 자치구 | Guangxi | Guangxi | Гуанси-Чжуанский автономный район | 廣西壯族自治區 | Guangxi-Zhuangzu | Guangxi-Zhuangzu | Guangxi-Zhuangzu | Guangxi-Zhuangzu |
| Nei-Menggu | `0xA01E0000` | 40.81420852, 111.615904101 | 内モンゴル自治区 | Nei-Menggu | Mongolie Intérieure | Innere Mongolei | Mongolia Interna | Mongolia Interior | 内蒙古自治区 | 네이멍구 자치구 | Binnen-Mongolië | Mongólia interior | Автономный район Внутренняя Монголия | 內蒙古自治區 | Nei-Menggu | Nei-Menggu | Nei-Menggu | Nei-Menggu |
| Ningxia-huizu | `0xA01F0000` | 38.496093312, 106.314986366 | 寧夏回族自治区 | Ningxia-huizu | Ningxia | Ningxia | Ningxia Hui | Ningxia | 宁夏回族自治区 | 닝샤후이 족 자치구 | Ningxia | Ningxia | Нинся-Хуэйский автономный район | 寧夏回族自治區 | Ningxia-huizu | Ningxia-huizu | Ningxia-huizu | Ningxia-huizu |
| Xinjiang-Weiwu'er-zu | `0xA0200000` | 43.78051708, 87.583245976 | 新疆ウイグル自治区 | Xinjiang-Weiwu'er-zu | Xinjiang | Xinjiang | Xinjiang Uygur | Xinjiang | 新疆维吾尔自治区 | 신장웨이우얼 자치구 | Xinjiang | Xinjiang | Синьцзян-Уйгурский автономный район | 新疆維吾爾自治區 | Xinjiang-Weiwu'er-zu | Xinjiang-Weiwu'er-zu | Xinjiang-Weiwu'er-zu | Xinjiang-Weiwu'er-zu |
| Xizang | `0xA0210000` | 29.6630856, 91.164798684 | チベット自治区 | Xizang | Tibet | Tibet | Tibet | Tíbet | 西藏自治区 | 티베트 자치구 | Tibet | Tibete | Тибетский автономный район | 西藏自治區 | Xizang | Xizang | Xizang | Xizang |
| Macao | `0xA0220000` | 22.214355216, 113.59894172 | マカオ | Macao | Macao | Macau | Macao | Macao | 澳门特别行政区 | 마카오 | Macau | Macau | Макао | 澳門特別行政區 | Macao | Macao | Macao | Macao |
| Hong Kong | `0xA0230000` | 22.461547596, 114.296575453 | ホンコン | Hong Kong | Hong Kong | Hongkong | Hong Kong | Hong Kong | 香港特别行政区 | 홍콩 | Hongkong | Hong Kong | Гонконг | 香港特別行政區 | Hong Kong | Hong Kong | Hong Kong | Hong Kong |

# U.A.E.
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0xA8` | AE | アラブ首長国連邦 | U.A.E. | Émirats arabes unis | Vereinigte Arabische Emirate | Emirati Arabi Uniti | Emiratos Árabes Unidos | 阿拉伯联合酋长国 | 아랍에미리트 | Verenigde Arabische Emiraten | Emirados Árabes Unidos | Объединённые Арабские Эмираты | U.A.E. | U.A.E. | U.A.E. | U.A.E. | U.A.E. |

## U.A.E. Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0xA8000000` | 24.466552456, 54.365992563 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Abu Dhabi | `0xA8020000` | 24.466552456, 54.365992563 | アブダビ | Abu Dhabi | Abu Dhabi | Abu Dhabi | Abu Dhabi | Abu Dabi | 阿布扎比 | 아부다비 | Abu Dhabi | Abu Dabi | Абу-Даби | Abu Dhabi | Abu Dhabi | Abu Dhabi | Abu Dhabi | Abu Dhabi |
| Ajman | `0xA8030000` | 25.4058835, 55.442655647 | アジュマン | Ajman | Ajman | Adschman | Ajman | Ajmán | 阿治曼 | 아지만 | Ajman | Ajman | Аджман | Ajman | Ajman | Ajman | Ajman | Ajman |
| Ash Shariqah | `0xA8040000` | 24.999389364, 55.744780492 | シャルジャ | Ash Shariqah | Sharjah | Schardscha | Sharjah | Sarja | 沙迦 | 샤르자 | Sharjah | Sarja | Шарджа | Ash Shariqah | Ash Shariqah | Ash Shariqah | Ash Shariqah | Ash Shariqah |
| Ras al-Khaimah | `0xA8050000` | 25.664062208, 55.997466726 | ラアス・アル・カイマー | Ras al-Khaimah | Ras al-Khaïmah | Ras al-Chaima | Ras al-Khaimah | Ras el Jaima | 哈伊马角 | 라스알카이마 | Ras al-Khaimah | Ras el Jaima | Рас эль-Хайма | Ras al-Khaimah | Ras al-Khaimah | Ras al-Khaimah | Ras al-Khaimah | Ras al-Khaimah |
| Dubai | `0xA8060000` | 25.252074908, 55.277860277 | ドゥバイ | Dubai | Dubaï | Dubai | Dubai | Dubái | 迪拜 | 두바이 | Dubai | Dubai | Дубай | Dubai | Dubai | Dubai | Dubai | Dubai |
| Al Fujayrah | `0xA8070000` | 25.120238972, 56.332550645 | フジャイラー | Al Fujayrah | Fujaïrah | Fudschaira | Fujayrah | Fujaira | 富查伊拉 | 알푸자이라 | Fujairah | Fujaira | Фуджейра | Al Fujayrah | Al Fujayrah | Al Fujayrah | Al Fujayrah | Al Fujayrah |
| Umm al Qaywayn | `0xA8080000` | 25.499267288, 55.744780492 | ウム・アル・カイワイン | Umm al Qaywayn | Umm al-Qaiwain | Umm al-Qaiwain | Umm al-Qaiwain | Um el Kaiwain | 乌姆盖万 | 움알카이와인 | Umm al-Qaiwain | Um el Kaiwain | Умм эль-Кайвайн | Umm al Qaywayn | Umm al Qaywayn | Umm al Qaywayn | Umm al Qaywayn | Umm al Qaywayn |

# Saudi Arabia
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0xAE` | SA | サウジアラビア | Saudi Arabia | Arabie saoudite | Saudi-Arabien | Arabia Saudita | Arabia Saudí | 沙特阿拉伯 | 사우디아라비아 | Saoedi-Arabië | Arábia Saudita | Саудовская Аравия | Saudi Arabia | Saudi Arabia | Saudi Arabia | Saudi Arabia | Saudi Arabia |

## Saudi Arabia Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0xAE000000` | 24.63684054, 46.768926006 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Ar Riyad | `0xAE020000` | 24.63684054, 46.768926006 | リヤド州 | Ar Riyad | Riyad | Riad | Al-Riyad | Riad | 利雅得地区 | 리야드 주 | Ar Riyad | Riad | Эр-Рияд | Ar Riyad | Ar Riyad | Ar Riyad | Ar Riyad | Ar Riyad |
| Al Bahah | `0xAE030000` | 20.011596452, 41.462515092 | バーハ州 | Al Bahah | Al Bâhah | Baha | Al-Bahah | Al Bahah | 巴哈地区 | 알바하 주 | Al Bahah | Baha | Эль-Баха | Al Bahah | Al Bahah | Al Bahah | Al Bahah | Al Bahah |
| Al Madinah | `0xAE040000` | 24.082030976, 38.045757754 | メディナ州 | Al Madinah | Médine | Medina | Medina | Medina | 麦地那地区 | 메디나 주 | Medina | Medina | Эль-Мадина | Al Madinah | Al Madinah | Al Madinah | Al Madinah | Al Madinah |
| Ash Sharqiyah | `0xAE050000` | 26.42211884, 50.114272017 | 東部州 | Ash Sharqiyah | Province Est | Asch-Scharqiyya | Ash-Sharqiyah | Región Oriental | 东部地区 | 샤르키야 주 | Ash Sharqiyah | Ash Sharqiyah | Эш-Шаркийя | Ash Sharqiyah | Ash Sharqiyah | Ash Sharqiyah | Ash Sharqiyah | Ash Sharqiyah |
| Al Qasim | `0xAE060000` | 26.328735052, 43.967404716 | カスィーム州 | Al Qasim | Al Qasim | Qasim | Al-Qasim | Al Qasim | 卡西姆地区 | 카심 주 | Al Qasim | Qasim | Эль-Касим | Al Qasim | Al Qasim | Al Qasim | Al Qasim | Al Qasim |
| 'Asir | `0xAE070000` | 18.215331824, 42.500725923 | アシール州 | 'Asir | Assir | Asir | 'Asir | Asir | 阿西尔地区 | 아시르 주 | Asir | Assir | Асир | 'Asir | 'Asir | 'Asir | 'Asir | 'Asir |
| Ha'il | `0xAE080000` | 27.3284909, 41.599844567 | ハーイル州 | Ha'il | Haïl | Hail | Ha'il | Hail | 哈伊勒地区 | 하일 주 | Ha'il | Hail | Ха’иль | Ha'il | Ha'il | Ha'il | Ha'il | Ha'il |
| Makkah | `0xAE090000` | 21.4233396, 39.82554775 | メッカ州 | Makkah | La Mecque | Mekka | Mecca | La Meca | 麦加地区 | 메카 주 | Mekka | Mecca | Мекка | Makkah | Makkah | Makkah | Makkah | Makkah |
| Al Hudud ash Shamaliyah | `0xAE0A0000` | 30.98144496, 41.017567593 | 北部国境州 | Al Hudud ash Shamaliyah | Frontière Nord | Al-Hudud asch-schamaliyya | Al-Hudud ash-Shamaliyah | Frontera Norte | 北部边疆地区 | 북부 국경 주 | Al Hudud ash Shamaliyah | Fronteira Norte | Эль-Худуд эш-Шамалийя | Al Hudud ash Shamaliyah | Al Hudud ash Shamaliyah | Al Hudud ash Shamaliyah | Al Hudud ash Shamaliyah | Al Hudud ash Shamaliyah |
| Najran | `0xAE0B0000` | 17.501220504, 44.181638697 | ナジュラーン州 | Najran | Najran | Nadschran | Najran | Najran | 纳季兰地区 | 나지란 주 | Najran | Najran | Наджран | Najran | Najran | Najran | Najran | Najran |
| Jizan | `0xAE0C0000` | 16.885986136, 42.550164534 | ジーザーン州 | Jizan | Jizan | Dschaizan | Jizan | Jizan | 吉赞地区 | 지잔 주 | Jizan | Jizan | Джизан | Jizan | Jizan | Jizan | Jizan | Jizan |
| Tabuk | `0xAE0D0000` | 28.383178388, 36.579078961 | タブーク州 | Tabuk | Tabouk | Tabuk | Tabuk | Tabuk | 塔布克地区 | 타부크 주 | Tabuk | Tabuk | Табук | Tabuk | Tabuk | Tabuk | Tabuk | Tabuk |
| Al Jawf | `0xAE0E0000` | 29.805907864, 39.864000003 | ジャウフ州 | Al Jawf | Al Djôf | Dschauf | Al-Jawf | Al Jouf | 朱夫地区 | 자우프 주 | Al Jawf | Al Jouf | Эль-Джауф | Al Jawf | Al Jawf | Al Jawf | Al Jawf | Al Jawf |

# San Marino
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0xB8` | SM | サンマリノ | San Marino | Saint-Marin | San Marino | San Marino | San Marino | 圣马力诺 | 산마리노 | San Marino | São Marinho | Сан-Марино | San Marino | San Marino | San Marino | San Marino | San Marino |

## San Marino Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0xB8000000` | 43.928832508, 12.431064077 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| San Marino | `0xB8010000` | 43.928832508, 12.431064077 | サンマリノ | San Marino | Saint-Marin | San Marino | San Marino | San Marino | 圣马力诺 | 산마리노 | San Marino | São Marinho | Сан-Марино | San Marino | San Marino | San Marino | San Marino | San Marino |

# Vatican City
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0xB9` | VA | バチカン | Vatican City | Vatican | Vatikanstadt | Vaticano (Città del) | Vaticano | 梵蒂冈 | 바티칸 | Vaticaanstad | Vaticano (cidade) | Ватикан | Vatican City | Vatican City | Vatican City | Vatican City | Vatican City |

## Vatican City Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0xB9000000` | 41.896361828, 12.447543614 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Vatican City | `0xB9010000` | 41.896361828, 12.447543614 | バチカン | Vatican City | Vatican | Vatikanstadt | Vaticano (Città del) | Vaticano | 梵蒂冈 | 바티칸 | Vaticaanstad | Vaticano (cidade) | Ватикан | Vatican City | Vatican City | Vatican City | Vatican City | Vatican City |

# Bermuda
|  ID | ISO | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
|  -- | --- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| `0xBA` | BM | バーミューダ | Bermuda | Bermudes | Bermuda | Bermude | Bermudas | 百慕大 | 버뮤다 | Bermuda | Bermudas | Бермуды | Bermuda | Bermuda | Bermuda | Bermuda | Bermuda |

## Bermuda Regions
| Name | ID | Coordinates | Japanese | English | French | German | Italian | Spanish | Chinese (simplified) | Korean | Dutch | Portuguese | Russian | Chinese (traditional) | Unknown 1 | Unknown 2 | Unknown 3 | Unknown 4 |
| ---- | -- | ----------- | -------- | ------- | ------ | ------ | ------- | ------- | -------------------- | ------ | ----- | ---------- | ------- | --------------------- | --------- | --------- | --------- | --------- |
| Unspecified | `0xBA000000` | 32.332763304, -64.747611401 | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — | — |
| Bermuda | `0xBA010000` | 32.332763304, -64.747611401 | バーミューダ | Bermuda | Bermudes | Bermuda | Bermude | Bermudas | 百慕大 | 버뮤다 | Bermuda | Bermudas | Бермуды | Bermuda | Bermuda | Bermuda | Bermuda | Bermuda |