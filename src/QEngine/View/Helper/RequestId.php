<?php

namespace QEngine\View\Helper;

use Zend\View\Helper\AbstractHelper;

/**
 * Class RequestId
 *
 * @package QEngine\View\Helper
 * @author Jakub Igla <jakub.igla@valtech.co.uk>
 */
class RequestId extends AbstractHelper
{
    /** @var string */
    private $requestId;

    public function __construct($requestId)
    {
        $this->requestId = $requestId;
    }

    public function __invoke()
    {
        return $this->requestId;
    }
}
