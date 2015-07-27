<?php

namespace QEngine\Mvc;

use Zend\Mvc\Application as ZendApplication;

class Application extends ZendApplication
{
    const ENV_DEVELOPMENT = 'development';
    const ENV_PRODUCTION  = 'production';
}
