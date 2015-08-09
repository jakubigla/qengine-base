<?php

namespace QEngine\View\Helper;

use QEngine\Mvc\Application;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\HelperPluginManager;

/**
 * Class RequestIdFactory
 *
 * @package QEngine\View\Helper
 * @author Jakub Igla <jakub.igla@valtech.co.uk>
 */
class RequestIdFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        if (! $serviceLocator instanceof HelperPluginManager) {
            throw new \BadMethodCallException('This factory is only meant to be used with HelperPluginManager');
        }

        /** @var Application $application */
        $parentLocator = $serviceLocator->getServiceLocator();
        $application   = $parentLocator->get('Application');

        $helper        = new RequestId($application->getRequestId());

        return $helper;
    }
}
