<?php

namespace App\Tests\Api\Billet;

use App\Entity\Billet;
use App\Factory\BilletFactory;
use App\Tests\Support\ApiTester;

class BilletGetCollectionDataValisationCest
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

    public function getListBillet(ApiTester $apiTester)
    {
        BilletFactory::createMany(4);

        $apiTester->sendGet('/api/billets');

        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsACollection(Billet::class, '/api/billets', [
            'hydra:member' => 'array',
            'hydra:totalItems' => 'integer',
        ]);
        $apiTester->seeResponseContainsJson(['hydra:totalItems' => 4]);
        $apiTester->seeResponseMatchesJsonType(self::expectedProperties(), '$["hydra:member"][0]');
    }
}
