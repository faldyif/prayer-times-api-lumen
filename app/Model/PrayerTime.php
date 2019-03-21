<?php
/**
 * Created by PhpStorm.
 * User: Faldy
 * Date: 10/03/2019
 * Time: 15:07
 */

namespace App\Model;


use Carbon\Carbon;

class PrayerTime
{
    /** @var Carbon */
    public $fajr;
    /** @var Carbon */
    public $sunrise;
    /** @var Carbon */
    public $dhuhr;
    /** @var Carbon */
    public $asr;
    /** @var Carbon */
    public $maghrib;
    /** @var Carbon */
    public $ishaa;
    /** @var string */
    private $convention;

    /**
     * PrayerTime constructor.
     * @param Carbon $fajr
     * @param Carbon $sunrise
     * @param Carbon $dhuhr
     * @param Carbon $asr
     * @param Carbon $maghrib
     * @param Carbon $ishaa
     * @param string|null $convention
     */
    public function __construct(Carbon $fajr = null, Carbon $sunrise = null, Carbon $dhuhr = null, Carbon $asr = null, Carbon $maghrib = null, Carbon $ishaa = null, string $convention = null)
    {
        $this->fajr = $fajr;
        $this->sunrise = $sunrise;
        $this->dhuhr = $dhuhr;
        $this->asr = $asr;
        $this->maghrib = $maghrib;
        $this->ishaa = $ishaa;
        $this->convention = $convention;
    }

    /**
     * @return Carbon
     */
    public function getFajr(): Carbon
    {
        return $this->fajr;
    }

    /**
     * @param Carbon $fajr
     */
    public function setFajr(Carbon $fajr): void
    {
        $this->fajr = $fajr;
    }

    /**
     * @return Carbon
     */
    public function getSunrise(): Carbon
    {
        return $this->sunrise;
    }

    /**
     * @param Carbon $sunrise
     */
    public function setSunrise(Carbon $sunrise): void
    {
        $this->sunrise = $sunrise;
    }

    /**
     * @return Carbon
     */
    public function getDhuhr(): Carbon
    {
        return $this->dhuhr;
    }

    /**
     * @param Carbon $dhuhr
     */
    public function setDhuhr(Carbon $dhuhr): void
    {
        $this->dhuhr = $dhuhr;
    }

    /**
     * @return Carbon
     */
    public function getAsr(): Carbon
    {
        return $this->asr;
    }

    /**
     * @param Carbon $asr
     */
    public function setAsr(Carbon $asr): void
    {
        $this->asr = $asr;
    }

    /**
     * @return Carbon
     */
    public function getMaghrib(): Carbon
    {
        return $this->maghrib;
    }

    /**
     * @param Carbon $maghrib
     */
    public function setMaghrib(Carbon $maghrib): void
    {
        $this->maghrib = $maghrib;
    }

    /**
     * @return Carbon
     */
    public function getIshaa(): Carbon
    {
        return $this->ishaa;
    }

    /**
     * @param Carbon $ishaa
     */
    public function setIshaa(Carbon $ishaa): void
    {
        $this->ishaa = $ishaa;
    }

    /**
     * @return string
     */
    public function getConvention(): string
    {
        return $this->convention;
    }

    /**
     * @param string $convention
     */
    public function setConvention(string $convention): void
    {
        $this->convention = $convention;
    }

}