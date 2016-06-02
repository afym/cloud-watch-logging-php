<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Component\HttpUrlComponent;

class HttpUrlComponentTest extends \PHPUnit_Framework_TestCase
{

    public function testIsCorrectDefinition()
    {
        $browserDevice = new HttpUrlComponent('some value');
        $this->assertEquals('some value', $browserDevice->getValue());
        $this->assertEquals('http_url', $browserDevice->getKey());
    }

}
