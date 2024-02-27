<?php

namespace App\Tests\Api\Event;

use App\Entity\Event;
use App\Factory\EventFactory;
use App\Tests\Support\ApiTester;

class EventGetCollectionDataValisationCest
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

    public function getListEvent(ApiTester $apiTester)
    {
        EventFactory::createMany(4);
        $apiTester->sendGet('/api/events');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsACollection(Event::class, '/api/events', [
            'hydra:member' => 'array',
            'hydra:totalItems' => 'integer',
            'hydra:search' => 'array',
        ]);
        $apiTester->seeResponseContainsJson(['hydra:totalItems' => 4]);
        $apiTester->seeResponseMatchesJsonType(self::expectedProperties(), '$["hydra:member"][0]');
    }
}
