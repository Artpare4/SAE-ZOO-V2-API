<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Factory\AnimalFactory;
use App\Factory\FamilleAnimalFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $animals = AnimalFactory::createMany(25, function () {
            return [
                'familleAnimal' => FamilleAnimalFactory::random(),
            ];
        });
        foreach ($animals as $animal) {
            if ($animal instanceof Animal) {
                $manager->persist($animal);
            }
        }

        $manager->flush();
    }
    public function getDependencies()
    {
        return[
            FamilleAnimalFixtures::class
        ];
    }
}
