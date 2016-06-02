<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Detector\IpDetector;

class IpDetectorTest extends \PHPUnit_Framework_TestCase
{

    private function serverMockDataHttpClientIp()
    {
        $_SERVER['HTTP_CLIENT_IP'] = '1.0.1.5';
    }

    private function serverMockHttpXForwardedFor()
    {
        $_SERVER['HTTP_X_FORWARDED_FOR'] = '2.1.0.30';
    }

    private function serverMockHttpXForwarded()
    {
        $_SERVER['HTTP_X_FORWARDED'] = '50.1.0.0';
    }

    private function serverMockHttpForwarded()
    {
        $_SERVER['HTTP_FORWARDED'] = '11.1.0.0';
    }

    private function serverMockRemoteAddr()
    {
        $_SERVER['REMOTE_ADDR'] = '21.1.3.0';
    }

    public function testNoIpDetected()
    {
        $ipDetector = new IpDetector();
        $this->assertEquals($ipDetector->getValue(), '0.0.0.0');
    }

    public function testIsHttpClientIp()
    {
        $this->serverMockDataHttpClientIp();
        $ipDetector = new IpDetector();
        $this->assertEquals($ipDetector->getValue(), '1.0.1.5');
    }

    public function testIsHttpXForwardedFor()
    {
        $this->serverMockHttpXForwardedFor();
        $ipDetector = new IpDetector();
        $this->assertEquals($ipDetector->getValue(), '2.1.0.30');
    }

    public function testIsHttpForwardedFor()
    {
        $this->serverMockHttpXForwarded();
        $ipDetector = new IpDetector();
        $this->assertEquals($ipDetector->getValue(), '50.1.0.0');
    }

    public function testIsHttpForwarded()
    {
        $this->serverMockHttpForwarded();
        $ipDetector = new IpDetector();
        $this->assertEquals($ipDetector->getValue(), '11.1.0.0');
    }

    public function testIsRemoteAddr()
    {
        $this->serverMockRemoteAddr();
        $ipDetector = new IpDetector();
        $this->assertEquals($ipDetector->getValue(), '21.1.3.0');
    }

    public function testRealDetector()
    {
        $this->serverMockRemoteAddr();
        $this->serverMockHttpForwarded();
        $ipDetector = new IpDetector();
        $this->assertEquals($ipDetector->getValue(), '11.1.0.0');
    }

    public function testNoIp()
    {
        $ipDetector = new IpDetector();
        $this->assertEquals($ipDetector->getValue(), '0.0.0.0');
    }

}
