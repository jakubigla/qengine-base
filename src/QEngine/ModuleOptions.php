<?php

namespace QEngine;

use Zend\Stdlib\AbstractOptions;

/**
 * Class ModuleOptions
 *
 * @package QEngine
 * @author Jakub Igla <jakub.igla@gmail.com>
 */
final class ModuleOptions extends AbstractOptions
{
    const ENV_LOG_PATH = 'LOG_PATH';

    /** @var array */
    private $logger;

    /**
     * @return array
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param array $logger
     *
     * @return $this
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
        return $this;
    }
}
