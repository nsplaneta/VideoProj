<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {

        foreach ($this->getUserData() as [$name, $last_name, $email, $password, $roles]) {

            $user = new Users();
            $user ->setName($name);
            $user->setLastName($last_name);
            $user->setEmail($email);
            $user -> setPassword($password);
            $user->setRoles($roles);
            $manager->persist($user);
        }

        $manager->flush();
    }

    private function getUserData()
    {
        return [
            ['Mike','Red','mike.red@local.lc','$2y$13$u9bFSmA7mc/8I6Id/yyPbOpBEhdSwGPH7ggQZDTPID9nJQNP1b61C', ['ROLE_ADMIN']],
            ['Nico','Plan','nico.plan@local.lc','$2y$13$rPAEKu856ZU5bqRUHIATzOPTDhmuNrgAZXITNQKyVw10A9gWB8ykq', ['ROLE_ADMIN']],
            ['Tom','Gerthor','tom.gert@local.lc','$2y$13$vSjsQ8LjWGpBfBFv9A6noOjy2e8osJ0VOxMRbacugw0Vzu1q5X8FG',['ROLE_USER']],
            ['Bjorn','Thunfel','bjorn.thun@local.lc','$2y$13$g9SFQbUMFb3X0Jx4C1pTO.6D.GT.XmT.5uWOpcJRVSKDOlOOGeCK2', ['ROLE_USER']],
        ];
    }
}