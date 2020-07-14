<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Videos;
use App\Entity\Categories;

class VideosFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->VideoData() as [$title, $path, $category_id, $user_id])
        {
            $duration = random_int(10,300);
            $category = $manager->getRepository(Categories::class)->find($category_id);
            $user = $manager->getRepository(Users::class)->find($user_id);
            $video = new Videos();
            $video->setTitle($title);
            $video->setPath('/uploads/videos/'.$path);
            $video->setCategory($category);
            $video->setDuration($duration);
            $video->setUser($user);
            $manager->persist($video);
        }

        $manager->flush();

        $this->loadRates($manager);
    }

    private function loadRates($manager)
    {
        foreach($this->ratesData() as [$video_id, $user_id])
        {
            $video = $manager->getRepository(Videos::class)->find($video_id);
            $user = $manager->getRepository(Users::class)->find($user_id);
            $video->addUsersRate($user);
            $manager->persist($video);
        }
        $manager->flush();
    }

    private function VideoData()
    {
        return [

            ['Funny bunny','2331254.mp4',1,2],
            ['Movies 2','1239677.mp4',2,1],
            ['Movies 3','6613109.mp4',2,1],
            ['Movies 4','264498.mp4',3,3],
            ['Movies 5','2999219.mp4',3,4]

        ];

    }

    private function ratesData()
    {
        return [

            [1,1],
            [1,2],
            [1,3],
            [1,4],

            [2,1],
            [2,2],

            [3,1],
            [3,2],
            [3,3],

            [4,1],
            [4,4]

        ];
    }
}

