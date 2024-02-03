<?php

namespace App\DataFixtures;

use App\Entity\AssoHabitatFamilleAnimal;
use App\Factory\AssoHabitatFamilleAnimalFactory;
use App\Factory\FamilleAnimalFactory;
use App\Factory\HabitatFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AssoHabitatFamilleAnimalFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $association = AssoHabitatFamilleAnimalFactory::createMany(25, function () {
            return [
                'habitat' => HabitatFactory::random(),
                'familleAnimal' => FamilleAnimalFactory::random(),
            ];
        });
        foreach ($association as $asso) {
            if ($asso instanceof AssoHabitatFamilleAnimal) {
                $manager->persist($asso);
            }
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return[
            HabitatFixtures::class,
            FamilleAnimalFactory::class
        ];
    }
}
