---
layout: post
toc: true
title: Mii Data (Switch)
---

Most data is stored in little endian byte order.

## `nn::mii::detail::CharInfoRaw`

| Offset | Size | Description                       |
|--------|------|-----------------------------------|
| 0x0    | 16   | Create ID (UUIDv4)                |
| 0x10   | 22   | Nickname (UTF-16-LE)              |
| 0x26   | 1    | [Font region](#font-region)       |
| 0x27   | 1    | [Favorite color](#favorite-color) |
| 0x28   | 1    | Gender                            |
| 0x29   | 1    | Height                            |
| 0x2A   | 1    | Build                             |
| 0x2B   | 1    | Mii type                          |
| 0x2C   | 1    | Region move                       |
| 0x2D   | 1    | Faceline type                     |
| 0x2E   | 1    | Faceline color                    |
| 0x2F   | 1    | Faceline wrinkle                  |
| 0x30   | 1    | Faceline make                     |
| 0x31   | 1    | Hair type                         |
| 0x32   | 1    | Hair color                        |
| 0x33   | 1    | Is hair flip                      |
| 0x34   | 1    | Eye type                          |
| 0x35   | 1    | Eye color                         |
| 0x36   | 1    | Eye scale                         |
| 0x37   | 1    | Eye aspect                        |
| 0x38   | 1    | Eye rotate                        |
| 0x39   | 1    | Eye X                             |
| 0x3A   | 1    | Eye Y                             |
| 0x3B   | 1    | Eyebrow type                      |
| 0x3C   | 1    | Eyebrow color                     |
| 0x3D   | 1    | Eyebrow scale                     |
| 0x3E   | 1    | Eyebrow aspect                    |
| 0x3F   | 1    | Eyebrow rotate                    |
| 0x40   | 1    | Eyebrow X                         |
| 0x41   | 1    | Eyebrow Y                         |
| 0x42   | 1    | Nose type                         |
| 0x43   | 1    | Nose scale                        |
| 0x44   | 1    | Nose Y                            |
| 0x45   | 1    | Mouth type                        |
| 0x46   | 1    | Mouth color                       |
| 0x47   | 1    | Mouth scale                       |
| 0x48   | 1    | Mouth aspect                      |
| 0x49   | 1    | Mouth Y                           |
| 0x4A   | 1    | Beard color                       |
| 0x4B   | 1    | Beard type                        |
| 0x4C   | 1    | Mustache type                     |
| 0x4D   | 1    | Mustache scale                    |
| 0x4E   | 1    | Mustache Y                        |
| 0x4F   | 1    | Glass type                        |
| 0x50   | 1    | Glass color                       |
| 0x51   | 1    | Glass scale                       |
| 0x52   | 1    | Glass Y                           |
| 0x53   | 1    | Has mole                          |
| 0x54   | 1    | Mole scale                        |
| 0x55   | 1    | Mole X                            |
| 0x56   | 1    | Mole Y                            |
| 0x57   | 1    | Padding (always 0)                |

### Font Region

| Value | Description |
|-------|-------------|
| 0     | Standard    |
| 1     | China       |
| 2     | Korea       |
| 3     | Taiwan      |

### Favorite Color

| Value | Description | RGB             | Color                                                               |
|-------|-------------|-----------------|---------------------------------------------------------------------|
| 0     | Red         | (210, 30, 20)   | ![](https://www.dropbox.com/s/860dasn9nzjfwq3/red.png?raw=1)        |
| 1     | Orange      | (255, 110, 25)  | ![](https://www.dropbox.com/s/1s3fbbgmhtepmqh/orange.png?raw=1)     |
| 2     | Yellow      | (255, 216, 32)  | ![](https://www.dropbox.com/s/arcskvtgjs3ltvy/yellow.png?raw=1)     |
| 3     | Light green | (120, 210, 32)  | ![](https://www.dropbox.com/s/ra7tinvdgkspu2o/lightgreen.png?raw=1) |
| 4     | Dark green  | (0, 120, 48)    | ![](https://www.dropbox.com/s/xuakk16bmz3qimp/darkgreen.png?raw=1)  |
| 5     | Dark blue   | (10, 72, 188)   | ![](https://www.dropbox.com/s/21kevqb9aelgoc9/darkblue.png?raw=1)   |
| 6     | Light blue  | (60, 170, 222)  | ![](https://www.dropbox.com/s/d7raj7nmakzviqh/lightblue.png?raw=1)  |
| 7     | Pink        | (245, 90, 125)  | ![](https://www.dropbox.com/s/rwtstvy6bsdqrsb/pink.png?raw=1)       |
| 8     | Purple      | (115, 40, 173)  | ![](https://www.dropbox.com/s/6cibn1csgy3ce5a/purple.png?raw=1)     |
| 9     | Brown       | (72, 56, 24)    | ![](https://www.dropbox.com/s/58j4q5co1rd7uw2/brown.png?raw=1)      |
| 10    | White       | (224, 224, 224) | ![](https://www.dropbox.com/s/fftizy76n9y77fh/white.png?raw=1)      |
| 11    | Black       | (24, 24, 20)    | ![](https://www.dropbox.com/s/h42gwymxybxo772/black.png?raw=1)      |
