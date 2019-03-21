<?php
/**
 * Created by PhpStorm.
 * User: Faldy
 * Date: 10/03/2019
 * Time: 15:23
 */

namespace App\DataSource;


use App\Model\PrayerTime;
use App\Traits\WithGoutte;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Symfony\Component\DomCrawler\Crawler;

class MuslimProDataSource implements PrayerTimeDataSource
{
    use WithGoutte;

    const BASE_URL = 'https://www.muslimpro.com';
    const LANG = 'id';

    // Just fill with default values because it doesn't matter what we're inputting into this
    const COUNTRY_CODE = 'ID';
    const COUNTRY_NAME = 'Indonesia';
    const CITY_NAME = 'Jakarta';

    /** @var double */
    private $latitude;
    /** @var double */
    private $longitude;
    /** @var Carbon */
    private $date;

    /**
     * MuslimProDataSource constructor.
     * @param float $latitude
     * @param float $longitude
     * @param null|int $month
     * @param null|int $year
     */
    public function __construct(float $latitude, float $longitude, $month = null, $year = null)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;

        $this->date = Carbon::now()->setSecond(0);
        if ($month !== null && $year === null) {
            $this->date = $this->date->setMonth($month);
        } else if ($month !== null && $year !== null) {
            $this->date = $this->date->setMonth($month)->setYear($year);
        }

        $this->setUpGoutte();
    }

    public function getPrayerTimes(): Collection
    {
        $prayerTimes = collect();
        $crawler = $this->goutteClient->request('GET', $this->getPrayerTimesRequestUrl());

        $dayNumber = 1;
        $convention = $crawler->filter('.currentconvention')->first()->text();

        $crawler->filter('.prayer-times > tr')->each(function (Crawler $tableRow) use (&$dayNumber, &$prayerTimes, $convention) {
            if ($tableRow->children()->first()->text() !== "") {
                $carbonDay = $this->date->copy()->setDay($dayNumber);

                $fajrExploded = explode(':', $tableRow->children()->eq(1)->text());
                $sunriseExploded = explode(':', $tableRow->children()->eq(2)->text());
                $dhuhrExploded = explode(':', $tableRow->children()->eq(3)->text());
                $asrExploded = explode(':', $tableRow->children()->eq(4)->text());
                $maghribExploded = explode(':', $tableRow->children()->eq(5)->text());
                $ishaaExploded = explode(':', $tableRow->children()->eq(6)->text());

                $fajr = $carbonDay->copy()->setHour($fajrExploded[0])->setMinute($fajrExploded[1]);
                $sunrise = $carbonDay->copy()->setHour($sunriseExploded[0])->setMinute($sunriseExploded[1]);
                $dhuhr = $carbonDay->copy()->setHour($dhuhrExploded[0])->setMinute($dhuhrExploded[1]);
                $asr = $carbonDay->copy()->setHour($asrExploded[0])->setMinute($asrExploded[1]);
                $maghrib = $carbonDay->copy()->setHour($maghribExploded[0])->setMinute($maghribExploded[1]);
                $ishaa = $carbonDay->copy()->setHour($ishaaExploded[0])->setMinute($ishaaExploded[1]);

                $prayerTimes->prepend(new PrayerTime(
                    $fajr,
                    $sunrise,
                    $dhuhr,
                    $asr,
                    $maghrib,
                    $ishaa,
                    $convention
                ), $dayNumber);

                $dayNumber++;
            }
        });

        return $prayerTimes;
    }

    private function getPrayerTimesRequestUrl() : string
    {
        return self::BASE_URL."/".self::LANG."/search?country_code=".self::COUNTRY_CODE."&country_name=".self::COUNTRY_NAME."&city_name=".self::CITY_NAME."&coordinates={$this->latitude},{$this->longitude}&date={$this->date->format('Y-m')}";
    }
}