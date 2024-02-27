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
        ];
    }

    public function getZoneParcDetail(ApiTester $apiTester)
    {
        ZoneParcFactory::createOne();

        $apiTester->sendGet('/api/zone_parcs/1');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsAnItem(self::expectedProperties());
    }

    public function getImageZoneParc(ApiTester $apiTester)
    {
        $data = [
            'imgZone' => 'public/image/zone_parc/zone_illustration.jpg',
        ];
        $zone = ZoneParcFactory::createOne($data)->object();
        $apiTester->sendGet('/api/zone_parcs/1/image');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeHttpHeader('Content-Type', 'image/jpeg');
        $apiTester->seeResponseContains(file_get_contents($zone->getImgZone(), true));
    }
}
