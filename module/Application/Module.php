<?php

namespace Application;

use Strapieno\Auth\Api\Authorization\AuthorizationListenerAggregate;
use Strapieno\Utils\Listener\CorsListener;
use Zend\EventManager\EventManagerInterface;
use Zend\InputFilter\InputFilterPluginManager;
use Zend\Mvc\MvcEvent;
use Zend\Stdlib\ArrayUtils;

class Module
{
    public function getConfig()
    {
        $config = include __DIR__ . '/config/module.config.php';

        $dir = __DIR__ . '/config/api';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if (strpos($file, 'config') !== false) {
                        $config = ArrayUtils::merge($config, include $dir . '/' . $file);
                    }
                }
                closedir($dh);
            }
        }
        return $config;
    }

    public function onBootstrap(MvcEvent $e)
    {
        $events = $e->getApplication()->getEventManager();
        // TODO make cors config
        $events->attachAggregate(new CorsListener());
        $this->loadEvent($events);
    }

    protected function loadApiConfig()
    {
        $dir = __DIR__ . '/config/api';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if (strpos($file, 'config') !== false) {
                        var_dump($file);
                    }
                }
                closedir($dh);
            }
        }
        var_dump('load');
        die();
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
