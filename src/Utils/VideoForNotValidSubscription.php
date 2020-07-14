<?php


namespace App\Utils;


use App\Entity\Users;
use App\Entity\Videos;
use Symfony\Component\Security\Core\Security;

class VideoForNotValidSubscription
{

    public $isSubscriptionValid = false;

    public function __construct(Security $security)
    {
        $user = $security->getUser();
        if($user && $user->getSubscription() != null)
        {
            $payment_status = $user->getSubscription()->getPaymentStatus();
            $valid = new \DateTime() < $user->getSubscription()->getValidTo();

            if($payment_status != null && $valid)
            {
                $this->isSubscriptionValid = true;
            }
        }
    }
    public function check()
    {
        if ($this->isSubscriptionValid){

            return null;
        }
        else {
            static  $video = Videos::videoForNotLoggedInOrNoMember;
            return $video;
        }

    }
}