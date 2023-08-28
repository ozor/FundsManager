<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user
            ->setEmail('user@fundsmanager.local')
            ->setPassword(12345)
            ->setRoles(['ROLE_USER'])
        ;

        $manager->persist($user);
        $manager->flush();
    }
}
