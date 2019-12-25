<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        //create 5 users with for loop
        for($i = 0; $i < 5; $i++)
        {
            $user = new User();
            $user->setName('name - ' . $i);
            $manager->persist($user);
            
        }
        $manager->flush();
    }
}
