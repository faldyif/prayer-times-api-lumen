<?php
/**
 * Created by PhpStorm.
 * User: Faldy
 * Date: 21/03/2019
 * Time: 23:19
 */

namespace App\Http\Resources;


use App\Model\PrayerTime;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class PrayerTimeResource
 * @package App\Http\Resources
 *
 * @property PrayerTime resource
 */
class PrayerTimeResource extends JsonResource
{


    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'date' => $this->resource->getFajr()->format('Y-m-d'),
            'prayers' => [
                'fajr' => $this->resource->getFajr()->toTimeString(),
                'sunrise' => $this->resource->getSunrise()->toTimeString(),
                'dhuhr' => $this->resource->getDhuhr()->toTimeString(),
                'asr' => $this->resource->getAsr()->toTimeString(),
                'maghrib' => $this->resource->getMaghrib()->toTimeString(),
                'ishaa' => $this->resource->getIshaa()->toTimeString(),
            ]
        ];
    }
}