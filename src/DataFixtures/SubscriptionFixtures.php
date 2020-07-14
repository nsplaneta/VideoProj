<?php

namespace App\DataFixtures;

use App\Entity\Subscription;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SubscriptionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->getSubscriptionData() as [$user_id, $plan, $valid_to, $payment_status, $free_plane_used])
        {
            $subscription = new Subscription();
            $user = $manager->getRepository(Users::class)->find($user_id);
            $user->setSubscription($subscription);
            $subscription->setPlan($plan);
            $subscription->setValidTo($valid_to);
            $subscription->setPaymentStatus($payment_status);
            $subscription->setFreePlanUsed($free_plane_used);
            $manager->persist($subscription);
        }

        $manager->flush();
    }

    private function getSubscriptionData(): array
    {
        return [

            [1, Subscription::getPlanDataNameByIndex(2), (new \Datetime())->modify('+100 year'), 'paid',false], // super admin
            [3, Subscription::getPlanDataNameByIndex(0), (new \Datetime())->modify('+1 month'), 'paid',true],
            [4, Subscription::getPlanDataNameByIndex(1), (new \Datetime())->modify('+1 minute'), 'paid',false],
            [2, Subscription::getPlanDataNameByIndex(2), (new \Datetime())->modify('+1 year'), 'paid',false] // super admin

        ];
    }

}
