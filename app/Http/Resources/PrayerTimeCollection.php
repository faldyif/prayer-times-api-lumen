<?php
/**
 * Created by PhpStorm.
 * User: Faldy
 * Date: 21/03/2019
 * Time: 23:19
 */

namespace App\Http\Resources;


use App\Model\PrayerTime;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PrayerTimeCollection extends ResourceCollection
{
    public $collects = PrayerTime::class;

    public function toArray($request)
    {
        return [
            'data' => [
                'prayerTimes' => PrayerTimeResource::collection($this->collection),
                'convention' => $this->collection->first() ? $this->collection->first()->getConvention() : null
            ]
        ];
    }
}