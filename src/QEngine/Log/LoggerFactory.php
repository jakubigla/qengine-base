<?php

namespace QEngine\Log;

use QEngine\ModuleOptions;
use QEngine\Mvc\Application;
use Zend\Log\ProcessorPluginManager;
use Zend\ServiceManager\Config;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Log\Processor;

/**
 * Class LoggerFactory
 *
 * @package QEngine\Log
 * @author Jakub Igla <jakub.igla@valtech.co.uk>
 */
class LoggerFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return Logger
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var ModuleOptions $options */
        /** @var Application   $application */
        $options                 = $serviceLocator->get(ModuleOptions::class);
        $loggerOptions           = $options->getLogger();

        $processorManagerOptions = new Config($loggerOptions['processor_plugin_manager']);
        $processorManager        = new ProcessorPluginManager($processorManagerOptions);

        $processorManager->setServiceLocator($serviceLocator);
        $loggerOptions['processor_plugin_manager'] = $processorManager;

        $logger = new Logger($loggerOptions);

        return $logger;
    }
}
