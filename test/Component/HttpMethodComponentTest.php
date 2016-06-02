<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Component\HttpMethodComponent;

class HttpMethodComponentTest extends \PHPUnit_Framework_TestCase
{

    public function testIsCorrectDefinition()
    {
        $httpComponet = new HttpMethodComponent('some value');
        $this->assertEquals('some value', $httpComponet->getValue());
        $this->assertEquals('http_method', $httpComponet->getKey());
    }

}
