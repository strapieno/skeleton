<?php

namespace Application;

use Application\Model\User\UserEntity;
use Matryoshka\Model\ModelManager;
use Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria;
use Strapieno\Auth\Model\Entity\ClientEntity;
use Strapieno\User\Model\Entity\UserInterface;
use Strapieno\User\Model\UserModelService;
use Strapieno\Utils\Listener\CorsListener;
use Zend\Math\Rand;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Session\Container;
use Zend\Console\Console;
use Zend\Session\SaveHandler\MongoDBOptions;
use Zend\Stdlib\ArrayUtils;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;
use Zend\Stdlib\Hydrator\HydratorPluginManager;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {
        /** @var $user UserInterface */

        $ffff = $e->getApplication()->getServiceManager();
        $events = $e->getApplication()->getEventManager();
        $events->attachAggregate(new CorsListener());
    }

    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/',
                ],
            ],
        ];
    }
}
