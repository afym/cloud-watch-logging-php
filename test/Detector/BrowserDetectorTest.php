<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Detector\BrowserDetector;

class BrowserDetectorTest extends \PHPUnit_Framework_TestCase
{

    private function serverMockMozillaNoBrowserRequest()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586)';
    }

    private function serverMockIERequest()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727)';
    }

    private function serverMockChromeRequest()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36';
    }

    private function serverMockSafariRequest()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/534.55.3 (KHTML, like Gecko) Version/5.1.3 Safari/534.53.10';
    }

    public function testNoUrlDetected()
    {
        $this->serverMockMozillaNoBrowserRequest();

        $browserDetector = new BrowserDetector();
        $this->assertEquals($browserDetector->getValue(), 'Unknown browser');
    }

    public function testInternetExplorer()
    {
        $this->serverMockIERequest();

        $browserDetector = new BrowserDetector();
        $this->assertEquals($browserDetector->getValue(), 'Internet Explorer');
    }

    public function testChrome()
    {
        $this->serverMockChromeRequest();

        $browserDetector = new BrowserDetector();
        $this->assertEquals($browserDetector->getValue(), 'Google Chrome');
    }

    public function testSafari()
    {
        $this->serverMockSafariRequest();

        $browserDetector = new BrowserDetector();
        $this->assertEquals($browserDetector->getValue(), 'Apple Safari');
    }

    public function testNoAgentDetected()
    {
        $browserDetector = new BrowserDetector();
        $this->assertEquals($browserDetector->getValue(), 'No browser');
    }

}
