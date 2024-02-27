<?php

namespace App\Tests\Api\Billet;

use App\Factory\BilletFactory;
use App\Tests\Support\ApiTester;

class BilletGetDataValisationCest
{
    protected static function expectedProperties(): array
    {
        return [
            'id' => 'integer',
            'nbJours' => 'integer',
            'tarifAdult' => 'integer|float',
            'tarifChild' => 'integer|float',
        ];
    }

    public function getBilletDetail(ApiTester $apiTester)
    {
        $data = [
            'nbJours' => 1,
            'tarifAdult' => 1,
            'tarifChild' => 2.3,
        ];
        BilletFactory::createOne($data);
        $apiTester->sendGet('/api/billets/1');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsAnItem(self::expectedProperties(), $data);
    }
}
