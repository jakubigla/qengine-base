<?php

namespace QEngine;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ModuleOptionsFactory
 *
 * @package QEngineModule
 * @author Jakub Igla <jakub.igla@gmail.com>
 */
class ModuleOptionsFactory implements FactoryInterface
{
    const OPTIONS_KEY = 'qengine';
    /**
     * Create service
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new ModuleOptions($serviceLocator->get('Config')[self::OPTIONS_KEY]);
    }
}
