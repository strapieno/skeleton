<?php

namespace Application;

use Matryoshka\Model\ModelManager;
use Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria;
use Strapieno\Auth\Model\Entity\ClientEntity;
use Zend\Math\Rand;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Session\Container;
use Zend\Console\Console;
use Zend\Session\SaveHandler\MongoDBOptions;
use Zend\Stdlib\ArrayUtils;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {

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
