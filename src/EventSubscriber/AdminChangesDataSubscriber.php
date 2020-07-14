<?php

namespace App\EventSubscriber;

use App\Utils\Interfaces\CacheInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class AdminChangesDataSubscriber implements EventSubscriberInterface
{
    protected $routeNamesThatMustClearCache = [
        'categories.POST',
        'edit_cat.POST',
        'delete_cat.GET',
        'delete_video.GET',
        'update_video_category.POST',
        'upload_video.POST',
        'update_video_category.POST',
        'rate_video.GET',
        'undo_rate_video.GET'
    ];


    public function __construct( CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    public function onKernelResponse(ResponseEvent $event)
    {
        $request = $event->getRequest()->attributes->get('_route') . '.'. $event->getRequest()->getMethod();

        if( in_array($request,$this->routeNamesThatMustClearCache) )
        {
            $cache = $this->cache->cache;
            $cache->clear();;
        }

        return;

    }

    public static function getSubscribedEvents()
    {
        return [
            'kernel.response' => 'onKernelResponse',
        ];
    }
}
