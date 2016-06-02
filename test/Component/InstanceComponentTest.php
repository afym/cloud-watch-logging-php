<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Component\InstanceComponent;

class InstanceComponentTest extends \PHPUnit_Framework_TestCase
{

    public function testIsCorrectDefinition()
    {
        $browserDevice = new InstanceComponent('some value');
        $this->assertEquals('some value', $browserDevice->getValue());
        $this->assertEquals('instance', $browserDevice->getKey());
    }

}
