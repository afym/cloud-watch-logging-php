<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Detector\MethodDetector;

class MethodDetectorTest extends \PHPUnit_Framework_TestCase
{

    private function serverMockRequestUri()
    {
        $_SERVER['REQUEST_METHOD'] = 'PUT';
    }

    public function testNoMethodDetected()
    {
        $methodDetector = new MethodDetector();
        $this->assertEquals($methodDetector->getValue(), 'No method detected');
    }

    public function testMethodDetected()
    {
        $this->serverMockRequestUri();
        $methodDetector = new MethodDetector();
        $this->assertEquals($methodDetector->getValue(), 'PUT');
    }

}
