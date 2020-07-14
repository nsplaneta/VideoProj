<?php
namespace App\EventSubscriber;

use App\Entity\Users;
use App\Entity\Videos;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Twig\Environment;
class VideoUploadSubscriber implements EventSubscriber
{

    public function __construct(\Swift_Mailer $mailer, Environment $render)
    {
        $this->render = $render;
        $this->mailer = $mailer;

    }
    // this method can only return the event names; you cannot define a
    // custom method name to execute when each event triggers
    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postRemove,
            Events::postUpdate,
        ];
    }

    // callback methods must be called exactly like the events they listen to;
    // they receive an argument of type LifecycleEventArgs, which gives you access
    // to both the entity object of the event and the entity manager itself
    public function postPersist(LifecycleEventArgs $args)
    {
        $this->logActivity('persist', $args);
    }

    public function postRemove(LifecycleEventArgs $args)
    {
        $this->logActivity('remove', $args);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->logActivity('update', $args);
    }

    private function logActivity(string $action, LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        // if this subscriber only applies to certain entity types,
        // add some code to check the entity type as early as possible
        if (!$entity instanceof Videos) {
            return;
        }
    if($action == 'persist'){
        $em = $args->getObjectManager();
        $users = $em->getRepository(Users::class)->findAll();


        foreach ($users as $user){


            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('nicolo.planeta@gmail.com')
                ->setTo('nico.planeta@gmail.com')
                ->setBody(
                    $this->render->render('emails/new_video.html.twig', [
                        'name' => $user->getName(),
                            'video'=>$entity
                        ]
                    ),
                    'text/html'
                )
            ;

            $this->mailer->send($message);
        }
    }
    }
}