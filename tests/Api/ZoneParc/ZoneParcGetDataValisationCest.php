<?php

namespace App\Tests\Api\ZoneParc;

use App\Factory\ZoneParcFactory;
use App\Tests\Support\ApiTester;

class ZoneParcGetDataValisationCest
{
    protected static function expectedProperties(): array
    {
        return [
            'id' => 'integer',
            'libZone' => 'string',
            'familleAnimals' => 'array',
            'events' => 'array',
            'imgZone' => 'string',
        ];
    }

    public function getZoneParcDetail(ApiTester $apiTester)
    {
        $data = [
            'libZone' => 'Zone1',
            'imgZone' => 'ImageZoneParc',
        ];
        ZoneParcFactory::createOne($data);

        $apiTester->sendGet('/api/zone_parcs/1');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsAnItem(self::expectedProperties(), $data);
    }
}
