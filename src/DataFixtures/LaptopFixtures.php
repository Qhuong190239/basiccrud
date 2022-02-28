<?php

namespace App\DataFixtures;

use App\Entity\Laptop;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LaptopFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i<=30; $i++) {
            $laptop = new Laptop;
            $laptop->setName("Laptop $i");
            $laptop->setBrand("Dell");
            $laptop->setPrice(1000);
            $laptop->setColor("Sliver");
            $laptop->setYear(rand(2015, 2022));
            $manager->persist($laptop);
        }
        $manager->flush();
    }
}
