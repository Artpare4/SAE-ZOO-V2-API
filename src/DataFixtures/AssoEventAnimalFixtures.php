<?php

namespace App\DataFixtures;

use App\Entity\AssoEventAnimal;
use App\Factory\AnimalFactory;
use App\Factory\AssoEventAnimalFactory;
use App\Factory\EventFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AssoEventAnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $assos = AssoEventAnimalFactory::createMany(20, function () {
            return [
                'event' => EventFactory::random(),
                'animal' => AnimalFactory::random(), ];
        });
        foreach ($assos as $asso) {
            if ($asso instanceof AssoEventAnimal) {
                $manager->persist($asso);
            }
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            EventFixtures::class,
            AnimalFixtures::class,
        ];
    }
}
