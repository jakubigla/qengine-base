<?php

namespace QEngine\Mvc;

use Zend\Mvc\Application as ZendApplication;

/**
 * Class Application
 *
 * @package QEngine\Mvc
 * @author Jakub Igla <jakub.igla@valtech.co.uk>
 */
class Application extends ZendApplication
{
    const ENV_DEVELOPMENT = 'development';
    const ENV_PRODUCTION  = 'production';

    const APPLICATION           = 'Application';
    const LOG_PROCESSOR_MANAGER = 'LogProcessorManager';
    const LOG_WRITER_MANAGER    = 'LogWriterManager';
    const LOGGER                = 'Logger';

    /** @var string */
    private $requestId;

    /**
     * Get request id
     *
     * @todo is this a right place for this?
     *
     * @return string
     */
    public function getRequestId()
    {
        if (empty($this->requestId)) {
            $this->requestId = uniqid();
        }
        return $this->requestId;
    }
}
