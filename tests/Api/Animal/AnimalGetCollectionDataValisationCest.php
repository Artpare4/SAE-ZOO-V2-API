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
            'events' => 'array',
        ];
    }

    protected static function expectedPropertiesForDeadAnimal(): array
    {
        return [
            'id' => 'integer',
            'nomAnimal' => 'string',
            'dateNaissance' => 'string:date',
            'dateMort' => 'string:date',
            'taille' => 'integer|float',
            'poids' => 'integer|float',
            'familleAnimal' => 'array|string',
            'caracteristique' => 'string',
            'events' => 'array',
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

    public function getDeadAnimalDetails(ApiTester $apiTester)
    {
        $famille = FamilleAnimalFactory::createOne()->object();

        $data = [
            'dateNaissance' => new \DateTime('2010-10-04 18:39:16'),
            'dateMort' => new \DateTime('2023-12-12 20:43:56'),
            'familleAnimal' => $famille,
            'taille' => 1,
            'poids' => 1.0,
        ];
        AnimalFactory::createOne($data);

        $apiTester->sendGet('/api/animals/1');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsAnItem(self::expectedPropertiesForDeadAnimal());
    }

    public function getImageAnimal(ApiTester $apiTester)
    {
        $data = [
            'imgAnimal' => 'public/image/animaux/animal-placeholder.png',
        ];
        $animal = AnimalFactory::createOne($data)->object();
        $apiTester->sendGet('/api/animals/1/image');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeHttpHeader('Content-Type', 'image/png');
        $apiTester->seeResponseContains(file_get_contents($animal->getImgAnimal(), true));
    }
}
