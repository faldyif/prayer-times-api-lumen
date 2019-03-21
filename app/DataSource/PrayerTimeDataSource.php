<?php
/**
 * Created by PhpStorm.
 * User: Faldy
 * Date: 10/03/2019
 * Time: 15:06
 */

namespace App\DataSource;


use Illuminate\Support\Collection;

interface PrayerTimeDataSource
{
    public function getPrayerTimes() : Collection;
}