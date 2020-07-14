<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadCategories($manager);
        $this->loadSubcategories($manager, 'Action');
        $this->loadSubcategories($manager, 'Scary');
        $this->loadSubcategories($manager, 'Fantasy');
        $this->loadSubcategories($manager, 'Historical');
    }

    private function loadCategories($manager){

        foreach ($this->getCategoriesData() as $name) {
            $categories = new Categories();
            $categories->setName($name);
            $manager->persist($categories);
            $manager->flush();
        }
    }

    private function loadSubcategories($manager, $category){

        $methodName = "get{$category}Data";
        foreach ($this->$methodName() as $name) {
            $parent = $manager->getRepository(Categories::class)->findOneBy(['name' => $category]);
            $categories = new Categories();
            $categories->setName($name);
            $categories->setParent($parent);
            $manager->persist($categories);
            $manager->flush();
        }
    }

    private function getCategoriesData(){

        return ['Action', 'Scary', 'Fantasy', 'Historical'];
    }

    private function getActionData(){

        return ['Adventure', 'Hollywood'];
    }

    private function getScaryData(){

        return ['Thriller', 'Horror'];
    }

    private function getFantasyData(){

        return ['Space', 'Future', 'Relaxing'];
    }

    private function getHistoricalData(){

        return ['Medieval', 'Modern', '90\'s'];
    }
}
