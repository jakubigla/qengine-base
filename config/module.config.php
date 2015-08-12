<?php

namespace QEngine;

use QEngine\Mvc\Application;
use QEngine\Mvc\Service\ApplicationFactory;
use QEngine\View\Helper\RequestIdFactory as RequestIdHelperFactory;

return [
    'qengine' => [],
    'service_manager' => [
        'factories' => [
            Application::APPLICATION => ApplicationFactory::class,
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'requestId' => RequestIdHelperFactory::class,
        ],
    ],
];
