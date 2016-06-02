<?php

namespace Cloud\Tools\Amazon\Logging\Detector;

use Cloud\Tools\Amazon\Logging\BaseDetector;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Detector
 * @version 1.0.0
 */
class UrlDetector extends BaseDetector
{

    public function __construct()
    {
        $this->getUrlValue();
    }

    private function getUrlValue()
    {
        $this->value = 'No URL detected';

        if (isset($_SERVER['REQUEST_URI'])) {
            $this->value = $_SERVER['REQUEST_URI'];
        }
    }

}
