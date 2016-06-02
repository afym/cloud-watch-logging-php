<?php

namespace Cloud\Tools\Amazon\Logging\Helper;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Helper
 * @version 1.0.0
 */
class HttpGet
{

    /**
     * @param string $url
     * @return string
     */
    public static function getReponse($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}
