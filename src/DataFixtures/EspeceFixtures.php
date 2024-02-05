<?php

namespace App\DataFixtures;

use App\Entity\Espece;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EspeceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $file = file_get_contents(__DIR__.'/data/Espece.json');
        $especeArray = json_decode($file, true);
        foreach ($especeArray as $espece) {
            $esp = new Espece();
            $esp->setLibEspece($espece['libEspece']);
            $manager->persist($esp);
        }
        $manager->flush();
    }
}
