# prayer-times-api-lumen
Muslim pro prayer times API scrapper written in Laravel Lumen. This API is built for educational purposes only.

## Requirements
* PHP >= 7.1.3

## Installation
1. Run `composer install`.
2. Copy `.env.example` to `.env`
3. Profit??

## Endpoints
### Get monthly prayer times
```
GET /prayer-times
Query Params:
- latitude (required)
- longitude (required)
- month (optional)
- year (optional)
```
```
Example: /prayer-times?latitude=-6.3111&longitude=107.12&month=12&year=2019
Response:
{
  "data": {
    "prayerTimes": [
      {
        "date": "2019-12-31",
        "prayers": {
          "fajr": "04:17:00",
          "sunrise": "05:38:00",
          "dhuhr": "11:58:00",
          "asr": "15:24:00",
          "maghrib": "18:12:00",
          "ishaa": "19:28:00"
        }
      },
      {
        "date": "2019-12-30",
        "prayers": {
          "fajr": "04:17:00",
          "sunrise": "05:37:00",
          "dhuhr": "11:57:00",
          "asr": "15:24:00",
          "maghrib": "18:12:00",
          "ishaa": "19:27:00"
        }
      },
      {
        "date": "2019-12-29",
        "prayers": {
          "fajr": "04:16:00",
          "sunrise": "05:37:00",
          "dhuhr": "11:57:00",
          "asr": "15:23:00",
          "maghrib": "18:11:00",
          "ishaa": "19:27:00"
        }
      },
      {
        "date": "2019-12-28",
        "prayers": {
          "fajr": "04:15:00",
          "sunrise": "05:36:00",
          "dhuhr": "11:56:00",
          "asr": "15:23:00",
          "maghrib": "18:11:00",
          "ishaa": "19:26:00"
        }
      },
      {
        "date": "2019-12-27",
        "prayers": {
          "fajr": "04:15:00",
          "sunrise": "05:36:00",
          "dhuhr": "11:56:00",
          "asr": "15:22:00",
          "maghrib": "18:10:00",
          "ishaa": "19:26:00"
        }
      },
      {
        "date": "2019-12-26",
        "prayers": {
          "fajr": "04:14:00",
          "sunrise": "05:35:00",
          "dhuhr": "11:55:00",
          "asr": "15:22:00",
          "maghrib": "18:10:00",
          "ishaa": "19:25:00"
        }
      },
      {
        "date": "2019-12-25",
        "prayers": {
          "fajr": "04:14:00",
          "sunrise": "05:35:00",
          "dhuhr": "11:55:00",
          "asr": "15:21:00",
          "maghrib": "18:09:00",
          "ishaa": "19:25:00"
        }
      },
      {
        "date": "2019-12-24",
        "prayers": {
          "fajr": "04:13:00",
          "sunrise": "05:34:00",
          "dhuhr": "11:54:00",
          "asr": "15:21:00",
          "maghrib": "18:09:00",
          "ishaa": "19:25:00"
        }
      },
      {
        "date": "2019-12-23",
        "prayers": {
          "fajr": "04:13:00",
          "sunrise": "05:34:00",
          "dhuhr": "11:54:00",
          "asr": "15:20:00",
          "maghrib": "18:08:00",
          "ishaa": "19:24:00"
        }
      },
      {
        "date": "2019-12-22",
        "prayers": {
          "fajr": "04:12:00",
          "sunrise": "05:33:00",
          "dhuhr": "11:53:00",
          "asr": "15:20:00",
          "maghrib": "18:08:00",
          "ishaa": "19:24:00"
        }
      },
      {
        "date": "2019-12-21",
        "prayers": {
          "fajr": "04:12:00",
          "sunrise": "05:33:00",
          "dhuhr": "11:53:00",
          "asr": "15:19:00",
          "maghrib": "18:07:00",
          "ishaa": "19:23:00"
        }
      },
      {
        "date": "2019-12-20",
        "prayers": {
          "fajr": "04:11:00",
          "sunrise": "05:32:00",
          "dhuhr": "11:52:00",
          "asr": "15:19:00",
          "maghrib": "18:07:00",
          "ishaa": "19:23:00"
        }
      },
      {
        "date": "2019-12-19",
        "prayers": {
          "fajr": "04:11:00",
          "sunrise": "05:32:00",
          "dhuhr": "11:52:00",
          "asr": "15:18:00",
          "maghrib": "18:06:00",
          "ishaa": "19:22:00"
        }
      },
      {
        "date": "2019-12-18",
        "prayers": {
          "fajr": "04:10:00",
          "sunrise": "05:31:00",
          "dhuhr": "11:51:00",
          "asr": "15:18:00",
          "maghrib": "18:06:00",
          "ishaa": "19:22:00"
        }
      },
      {
        "date": "2019-12-17",
        "prayers": {
          "fajr": "04:10:00",
          "sunrise": "05:31:00",
          "dhuhr": "11:51:00",
          "asr": "15:17:00",
          "maghrib": "18:05:00",
          "ishaa": "19:21:00"
        }
      },
      {
        "date": "2019-12-16",
        "prayers": {
          "fajr": "04:10:00",
          "sunrise": "05:30:00",
          "dhuhr": "11:51:00",
          "asr": "15:17:00",
          "maghrib": "18:05:00",
          "ishaa": "19:20:00"
        }
      },
      {
        "date": "2019-12-15",
        "prayers": {
          "fajr": "04:09:00",
          "sunrise": "05:30:00",
          "dhuhr": "11:50:00",
          "asr": "15:16:00",
          "maghrib": "18:04:00",
          "ishaa": "19:20:00"
        }
      },
      {
        "date": "2019-12-14",
        "prayers": {
          "fajr": "04:09:00",
          "sunrise": "05:29:00",
          "dhuhr": "11:50:00",
          "asr": "15:16:00",
          "maghrib": "18:04:00",
          "ishaa": "19:19:00"
        }
      },
      {
        "date": "2019-12-13",
        "prayers": {
          "fajr": "04:08:00",
          "sunrise": "05:29:00",
          "dhuhr": "11:49:00",
          "asr": "15:15:00",
          "maghrib": "18:03:00",
          "ishaa": "19:19:00"
        }
      },
      {
        "date": "2019-12-12",
        "prayers": {
          "fajr": "04:08:00",
          "sunrise": "05:28:00",
          "dhuhr": "11:49:00",
          "asr": "15:15:00",
          "maghrib": "18:03:00",
          "ishaa": "19:18:00"
        }
      },
      {
        "date": "2019-12-11",
        "prayers": {
          "fajr": "04:08:00",
          "sunrise": "05:28:00",
          "dhuhr": "11:48:00",
          "asr": "15:14:00",
          "maghrib": "18:02:00",
          "ishaa": "19:18:00"
        }
      },
      {
        "date": "2019-12-10",
        "prayers": {
          "fajr": "04:07:00",
          "sunrise": "05:28:00",
          "dhuhr": "11:48:00",
          "asr": "15:13:00",
          "maghrib": "18:02:00",
          "ishaa": "19:17:00"
        }
      },
      {
        "date": "2019-12-09",
        "prayers": {
          "fajr": "04:07:00",
          "sunrise": "05:27:00",
          "dhuhr": "11:47:00",
          "asr": "15:13:00",
          "maghrib": "18:01:00",
          "ishaa": "19:17:00"
        }
      },
      {
        "date": "2019-12-08",
        "prayers": {
          "fajr": "04:07:00",
          "sunrise": "05:27:00",
          "dhuhr": "11:47:00",
          "asr": "15:12:00",
          "maghrib": "18:01:00",
          "ishaa": "19:16:00"
        }
      },
      {
        "date": "2019-12-07",
        "prayers": {
          "fajr": "04:06:00",
          "sunrise": "05:26:00",
          "dhuhr": "11:46:00",
          "asr": "15:12:00",
          "maghrib": "18:00:00",
          "ishaa": "19:15:00"
        }
      },
      {
        "date": "2019-12-06",
        "prayers": {
          "fajr": "04:06:00",
          "sunrise": "05:26:00",
          "dhuhr": "11:46:00",
          "asr": "15:11:00",
          "maghrib": "18:00:00",
          "ishaa": "19:15:00"
        }
      },
      {
        "date": "2019-12-05",
        "prayers": {
          "fajr": "04:06:00",
          "sunrise": "05:26:00",
          "dhuhr": "11:46:00",
          "asr": "15:11:00",
          "maghrib": "17:59:00",
          "ishaa": "19:14:00"
        }
      },
      {
        "date": "2019-12-04",
        "prayers": {
          "fajr": "04:06:00",
          "sunrise": "05:25:00",
          "dhuhr": "11:45:00",
          "asr": "15:10:00",
          "maghrib": "17:59:00",
          "ishaa": "19:14:00"
        }
      },
      {
        "date": "2019-12-03",
        "prayers": {
          "fajr": "04:05:00",
          "sunrise": "05:25:00",
          "dhuhr": "11:45:00",
          "asr": "15:10:00",
          "maghrib": "17:58:00",
          "ishaa": "19:13:00"
        }
      },
      {
        "date": "2019-12-02",
        "prayers": {
          "fajr": "04:05:00",
          "sunrise": "05:25:00",
          "dhuhr": "11:44:00",
          "asr": "15:09:00",
          "maghrib": "17:58:00",
          "ishaa": "19:13:00"
        }
      },
      {
        "date": "2019-12-01",
        "prayers": {
          "fajr": "04:05:00",
          "sunrise": "05:24:00",
          "dhuhr": "11:44:00",
          "asr": "15:09:00",
          "maghrib": "17:57:00",
          "ishaa": "19:12:00"
        }
      }
    ],
    "convention": "KEMENAG Bekasi"
  }
}
```
