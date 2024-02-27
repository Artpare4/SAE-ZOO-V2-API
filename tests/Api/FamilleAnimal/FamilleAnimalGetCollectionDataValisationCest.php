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

    public function getFilteredListFamilleAnimal(ApiTester $apiTester)
    {
        FamilleAnimalFactory::createSequence([
            [
                'nomFamilleAnimal' => 'Famille1',
            ],
            [
                'nomFamilleAnimal' => 'Kiwi',
            ],
            [
                'nomFamilleAnimal' => 'AnimalFamilleTest3',
            ],
            [
                'nomFamilleAnimal' => 'FamiAni4',
            ],

        ]);
        $apiTester->sendGet('/api/famille_animals?page=1&nomFamilleAnimal=Famille');

        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseContainsJson(['hydra:totalItems' => 2]);
        $apiTester->seeResponseMatchesJsonType(self::expectedProperties(), '$["hydra:member"][0]');
        $apiTester->seeResponseMatchesJsonType(self::expectedProperties(), '$["hydra:member"][1]');

    }
}
