<?php

namespace Cloud\Tools\Amazon\Logging\Detector;

use Cloud\Tools\Amazon\Logging\BaseDetector;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Detector
 * @version 1.0.0
 */
class MethodDetector extends BaseDetector
{

    public function __construct()
    {
        $this->getMethodValue();
    }

    private function getMethodValue()
    {
        $this->value = 'No method detected';

        if (isset($_SERVER['REQUEST_METHOD'])) {
            $this->value = $_SERVER['REQUEST_METHOD'];
        }
    }

}
