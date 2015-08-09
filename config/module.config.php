<?php

namespace QEngine;

use QEngine\Log\Logger;
use QEngine\Log\LoggerFactory;
use QEngine\Log\Processor\RequestId;
use QEngine\Log\Processor\RequestIdFactory;
use QEngine\Mvc\Service\ApplicationFactory;
use QEngine\View\Helper\RequestIdFactory as RequestIdHelperFactory;
use Zend\Log\Writer;

return [
    'QEngine' => [
        'logger' => [
            'writers' => [
                Writer\Stream::class => [
                    'name'      => Writer\Stream::class,
                    'options'   => [
                        'stream' => '/var/log/application/general.log',
                        'filters' => [
                            'Priority' => [
                                'name'      => 'Priority',
                                'options'   => [
                                    'priority' => Logger::DEBUG,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'processor_plugin_manager' => [
                'factories' => [
                    RequestId::class => RequestIdFactory::class,
                ],
            ],
            'processors' => [
                ['name' => RequestId::class],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            'Application' => ApplicationFactory::class,
            Logger::class => LoggerFactory::class,
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'requestId' => RequestIdHelperFactory::class,
        ],
    ],
];
