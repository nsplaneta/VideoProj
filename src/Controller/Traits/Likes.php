<?php

namespace App\Controller\Traits;

use App\Entity\Users;

trait Likes {

    private function ratedVideo($video)
    {
        $user = $this->getDoctrine()->getRepository(Users::class)->find($this->getUser());
        $user->addRatedVideo($video);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
    }

    private function undoRatedVideo($video)
    {
        $user = $this->getDoctrine()->getRepository(Users::class)->find($this->getUser());
        $user->removeRatedVideo($video);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
    }
}