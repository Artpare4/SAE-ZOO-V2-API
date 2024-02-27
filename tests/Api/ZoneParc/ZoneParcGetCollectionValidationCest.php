<?php

namespace App\Tests\Api\ZoneParc;

use App\Entity\ZoneParc;
use App\Factory\ZoneParcFactory;
use App\Tests\Support\ApiTester;

class ZoneParcGetCollectionValidationCest
{
    protected static function expectedProperties()
    {
        return [
            'id' => 'integer',
            'libZone' => 'string',
        ];
    }

    public function getListZoneParc(ApiTester $apiTester)
    {
        ZoneParcFactory::createMany(4);
        $apiTester->sendGet('/api/zone_parcs');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsACollection(ZoneParc::class, '/api/zone_parcs', [
            'hydra:member' => 'array',
            'hydra:totalItems' => 'integer',
        ]);
        $apiTester->seeResponseContainsJson(['hydra:totalItems' => 4]);
        $apiTester->seeResponseMatchesJsonType(self::expectedProperties(), '$["hydra:member"][0]');
    }
}
