<?php

namespace App\DataFixtures;

use App\Entity\Habitat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HabitatFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $file = file_get_contents(__DIR__.'/data/Habitat.json');
        $habitatArray = json_decode($file, true);
        foreach ($habitatArray as $hab) {
            $habitat = new Habitat();
            $habitat->setLibHabitat($hab['libHabitat']);
            $manager->persist($habitat);
        }
        $manager->flush();
    }
}
