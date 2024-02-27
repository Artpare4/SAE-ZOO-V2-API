<?php

namespace App\Tests\Api\FamilleAnimal;

use App\Factory\EspeceFactory;
use App\Factory\FamilleAnimalFactory;
use App\Factory\ZoneParcFactory;
use App\Tests\Support\ApiTester;

class FamilleAnimalGetDataValisationCest
{
    protected function expectedProperties(): array
    {
        return [
            'id' => 'integer',
            'nomFamilleAnimal' => 'string',
            'nomScientifique' => 'string',
            'dangerExtinction' => 'integer',
            'description' => 'string',
            'typeAlimentation' => 'string',
            'zoneParc' => 'array',
            'animals' => 'array',
            'espece' => 'array',
            'assoHabitatFamilleAnimals' => 'array',
            'imgFamille' => 'string',
        ];
    }

    public function getFamilleAnimalDetail(ApiTester $apiTester)
    {
        $zone = ZoneParcFactory::createOne()->object();
        $espece = EspeceFactory::createOne()->object();
        $data = [
            'zoneParc' => $zone,
            'espece' => $espece,
        ];
        FamilleAnimalFactory::createOne($data);

        $apiTester->sendGet('/api/famille_animals/1');

        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseIsAnItem(self::expectedProperties());
    }

    public function getImageFamilleAnimal(ApiTester $apiTester)
    {
        $data = [
            'imgFamille' => 'public/image/famille_animal/cerf.jpg',
        ];
        $img = FamilleAnimalFactory::createOne($data)->object();
        $apiTester->sendGet('/api/famille_animals/1/image');
        $apiTester->seeResponseCodeIsSuccessful();
        $apiTester->seeHttpHeader('Content-Type', 'image/jpeg');
        $apiTester->seeResponseContains(file_get_contents($img->getImgFamille(), true));
    }
}
