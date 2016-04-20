<?php

namespace Application;

use Strapieno\Auth\Api\Authorization\AuthorizationListenerAggregate;
use Strapieno\Utils\Listener\CorsListener;
use Zend\EventManager\EventManagerInterface;
use Zend\InputFilter\InputFilterPluginManager;
use Zend\Mvc\MvcEvent;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {
        $events = $e->getApplication()->getEventManager();
        // TODO make cors config
        $events->attachAggregate(new CorsListener());
        $this->loadEvent($events);
    }

    protected function loadEvent(EventManagerInterface $eventManager)
    {
        $eventManager->attachAggregate(new AuthorizationListenerAggregate());
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
