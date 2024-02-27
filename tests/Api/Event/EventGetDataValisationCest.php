<?php

namespace App\Tests\Api\Event;

use App\Factory\EventFactory;
use App\Tests\Support\ApiTester;

class EventGetDataValisationCest
{
    protected static function expectedProperties(): array
    {
        return [
            'id' => 'integer',
            'nomEvent' => 'string',
            'nbPlaces' => 'integer',
            'description' => 'string',
            'datesEvent' => 'array',
            'reservation' => 'array',
            'zonesParc' => 'array',
            'animaux' => 'array',
        ];
    }
    public function getEventDetail(ApiTester $apiTester)
    {
        EventFactory::createOne();
        $apiTester->sendGet('/api/events/1');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsAnItem(self::expectedProperties());
    }
}
