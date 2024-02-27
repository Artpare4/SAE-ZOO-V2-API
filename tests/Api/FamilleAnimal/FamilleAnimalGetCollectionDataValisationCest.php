<?php

namespace App\Tests\Api\FamilleAnimal;

use App\Entity\FamilleAnimal;
use App\Factory\FamilleAnimalFactory;
use App\Tests\Support\ApiTester;

class FamilleAnimalGetCollectionDataValisationCest
{
    protected static function expectedProperties(): array
    {
        return [
            'id' => 'integer',
            'nomFamilleAnimal' => 'string',
            'nomScientifique' => 'string',
            'imgFamille' => 'string',
        ];
    }

    public function getListFamilleAnimal(ApiTester $apiTester)
    {
        FamilleAnimalFactory::createMany(4);
        $apiTester->sendGet('/api/famille_animals');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsACollection(FamilleAnimal::class, '/api/famille_animals', [
            'hydra:member' => 'array',
            'hydra:totalItems' => 'integer',
            'hydra:search' => 'array',
        ]);
        $apiTester->seeResponseContainsJson(['hydra:totalItems' => 4]);
        $apiTester->seeResponseMatchesJsonType(self::expectedProperties(), '$["hydra:member"][0]');
    }
}
