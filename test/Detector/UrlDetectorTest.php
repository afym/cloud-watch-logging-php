<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Detector\UrlDetector;

class UrlDetectorTest extends \PHPUnit_Framework_TestCase
{

    private function serverMockRequestUri()
    {
        $_SERVER['REQUEST_URI'] = '/foo/var/index/url';
    }

    public function testNoUrlDetected()
    {
        $urlDetector = new UrlDetector();
        $this->assertEquals($urlDetector->getValue(), 'No URL detected');
    }

    public function testUrlDetected()
    {
        $this->serverMockRequestUri();
        $urlDetector = new UrlDetector();
        $this->assertEquals($urlDetector->getValue(), '/foo/var/index/url');
    }

}
