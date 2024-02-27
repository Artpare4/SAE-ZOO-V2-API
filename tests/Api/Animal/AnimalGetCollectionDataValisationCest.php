<?php

namespace App\Tests\Api\Animal;

use App\Factory\AnimalFactory;
use App\Factory\FamilleAnimalFactory;
use App\Tests\Support\ApiTester;

class AnimalGetCollectionDataValisationCest
{
    protected static function expectedPropertiesForLivingAnimal(): array
    {
        return [
            'id' => 'integer',
            'nomAnimal' => 'string',
            'dateNaissance' => 'string:date',
            'taille' => 'integer|float',
            'poids' => 'integer|float',
            'familleAnimal' => 'array|string',
            'caracteristique' => 'string',
            'events' => 'array|string',
            'imgAnimal' => 'string',
        ];
    }

    public function getLivingAnimalDetails(ApiTester $apiTester)
    {
        $famille = FamilleAnimalFactory::createOne()->object();
        $data = [
            'dateMort' => null,
            'familleAnimal' => $famille,
            'taille' => 1,
            'poids' => 1.0,
        ];
        AnimalFactory::createOne($data);

        $apiTester->sendGet('/api/animals/1');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsAnItem(self::expectedPropertiesForLivingAnimal());
    }
}
