<?php

namespace App\DataFixtures;

use App\Entity\CardTemplate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0; $i <= 50; $i++) {
            $cardTemplate = new CardTemplate();
            $cardTemplate->setName($faker->word());
            $cardTemplate->setDescription($faker->text($maxNbChars = 200));
            $cardTemplate->setActive($faker->boolean());
            $cardTemplate->setPremium($faker->boolean());
            $cardTemplate->setPreview('https://source.unsplash.com/random/200x200');

            $manager->persist($cardTemplate);
        }

        $manager->flush();
    }
}
