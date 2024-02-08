<?php

namespace App\DataFixtures;

use App\Entity\AssoEventZoneParc;
use App\Factory\AssoEventZoneParcFactory;
use App\Factory\EventFactory;
use App\Factory\ZoneParcFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AssoEventZoneParcFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $assos = AssoEventZoneParcFactory::createMany(20, function () {
            return [
                'event' => EventFactory::random(),
                'zoneParc' => ZoneParcFactory::random(), ];
        });
        foreach ($assos as $asso) {
            if ($asso instanceof AssoEventZoneParc) {
                $manager->persist($asso);
            }
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            EventFixtures::class,
            ZoneParcFixtures::class,
        ];
    }
}
