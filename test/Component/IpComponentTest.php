<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Component\IpComponent;

class IpComponentTest extends \PHPUnit_Framework_TestCase
{

    public function testIsCorrectDefinition()
    {
        $browserDevice = new IpComponent('some value');
        $this->assertEquals('some value', $browserDevice->getValue());
        $this->assertEquals('ip', $browserDevice->getKey());
    }

}
