<?php

namespace App\DataFixtures;

use App\Entity\Advert;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $userPasswordEncoderInterface)
    {
      $this->passwordEncoder = $userPasswordEncoderInterface;
    }
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i++) {
          $advert = new Advert();
    
          $advert->setTitle($faker->sentence(3, true))
            ->setDescription($faker->paragraph(5))
            ->setCity($faker->sentence(3, true))
            ->setCarYear($faker->numberBetween(0, 250))
            ->setNbKm($faker->numberBetween(0, 250))
            ->setNbDays($faker->numberBetween(0, 250))
            ->setPrice($faker->randomFloat(2, 5, 300));
    
          $manager->persist($advert);
        }
        $manager->flush();
    }
}
