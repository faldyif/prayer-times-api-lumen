<?php

namespace App\Http\Controllers;

use App\DataSource\MuslimProDataSource;
use App\Http\Resources\PrayerTimeCollection;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PrayerTimeController extends Controller
{
    const TEST_PARAMS = [
        'country_code' => '',
        'country_name' => '',
        'city_name' => '',
        'latitude' => -6.277897299999999,
        'longitude' => 107.00079870000002,
    ];

    public function index(Request $request)
    {
        try {
            $this->validate($request, [
                'latitude' => 'required',
                'longitude' => 'required',
                'month' => 'nullable|integer',
                'year' => 'nullable|integer'
            ]);
        } catch (ValidationException $e) {
            return $e->getResponse();
        }

        $dataSource = new MuslimProDataSource(
            $request->get('latitude'),
            $request->get('longitude'),
            $request->get('month'),
            $request->get('year')
        );

//        $responseArray = [];
//        foreach ($dataSource->getPrayerTimes() as $day => $prayerTime) {
//            /** @var PrayerTime $prayerTime */
//            $responseArray[$day] = [
//                'fajr' => $prayerTime->getFajr()->toTimeString(),
//                'sunrise' => $prayerTime->getSunrise()->toTimeString(),
//                'dhuhr' => $prayerTime->getDhuhr()->toTimeString(),
//                'asr' => $prayerTime->getAsr()->toTimeString(),
//                'maghrib' => $prayerTime->getMaghrib()->toTimeString(),
//                'ishaa' => $prayerTime->getIshaa()->toTimeString(),
//            ];
//        }

        return response()->json(new PrayerTimeCollection($dataSource->getPrayerTimes()));
    }
}
