<?php

namespace Cloud\Tools\Amazon\Logging\Detector;

use Cloud\Tools\Amazon\Logging\BaseDetector;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Detector
 * @version 1.0.0
 */
class IpDetector extends BaseDetector
{

    public function __construct()
    {
        $this->getIpValue();
    }

    private function getIpValue()
    {
        $this->value = '0.0.0.0';

        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $this->value = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $this->value = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $this->value = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $this->value = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $this->value = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $this->value = $_SERVER['REMOTE_ADDR'];
        }
    }

}
