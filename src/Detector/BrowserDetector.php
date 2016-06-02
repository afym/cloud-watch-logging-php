<?php

namespace Cloud\Tools\Amazon\Logging\Detector;

use Cloud\Tools\Amazon\Logging\BaseDetector;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Detector
 * @version 1.0.0
 */
class BrowserDetector extends BaseDetector
{

    public function __construct()
    {
        $this->getBrowserValue();
    }

    private function getBrowserValue()
    {
        $this->value = 'No browser';

        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            $agent = $_SERVER['HTTP_USER_AGENT'];
            $this->value = 'Unknown browser';

            if (preg_match('/MSIE/i', $agent) && !preg_match('/Opera/i', $agent)) {
                $this->value = 'Internet Explorer';
            } else if (preg_match('/Firefox/i', $agent)) {
                $this->value = 'Mozilla Firefox';
            } else if (preg_match('/Chrome/i', $agent)) {
                $this->value = 'Google Chrome';
            } else if (preg_match('/Safari/i', $agent)) {
                $this->value = 'Apple Safari';
            } else if (preg_match('/Opera/i', $agent)) {
                $this->value = 'Opera';
            } else if (preg_match('/Netscape/i', $agent)) {
                $this->value = 'Netscape';
            }
        }
    }

}
