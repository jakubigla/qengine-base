<?php

namespace QEngine\Mvc\Service;

use QEngine\Mvc\Application;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ApplicationFactory
 *
 * @package QEngine\Mvc\Service
 * @author Jakub Igla <jakub.igla@valtech.co.uk>
 */
class ApplicationFactory implements FactoryInterface
{
    /**
     * Create the Application service
     *
     * Creates a Zend\Mvc\Application service, passing it the configuration
     * service and the service manager instance.
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return Application
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new Application($serviceLocator->get('Config'), $serviceLocator);
    }
}
