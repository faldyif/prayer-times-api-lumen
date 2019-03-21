<?php

use App\DataSource\MuslimProDataSource;

class MuslimProTest extends TestCase
{
    const TEST_PARAMS = [
        'country_code' => '',
        'country_name' => '',
        'city_name' => '',
        'latitude' => -6.277897299999999,
        'longitude' => 107.00079870000002,
    ];

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetPrayerTime()
    {
        $dataSource = new MuslimProDataSource(
            self::TEST_PARAMS['latitude'],
            self::TEST_PARAMS['longitude']
        );

        $prayerTimesArray = $dataSource->getPrayerTimes();

        $this->assertGreaterThanOrEqual(28, count($prayerTimesArray));
        $this->assertLessThanOrEqual(31, count($prayerTimesArray));
    }
}
