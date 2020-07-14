<?php

namespace ContainerNocGqfa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryTreeAdminListService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Utils\CategoryTreeAdminList' shared autowired service.
     *
     * @return \App\Utils\CategoryTreeAdminList
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Utils/AbstractClasses/CategoryTreeAbstract.php';
        include_once \dirname(__DIR__, 4).'/src/Utils/CategoryTreeAdminList.php';

        return $container->privates['App\\Utils\\CategoryTreeAdminList'] = new \App\Utils\CategoryTreeAdminList(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['router'] ?? $container->getRouterService()));
    }
}
