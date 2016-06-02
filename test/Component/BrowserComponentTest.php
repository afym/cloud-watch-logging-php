<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Component\BrowserComponent;

class BrowserComponentTest extends \PHPUnit_Framework_TestCase
{

    public function testIsCorrectDefinition()
    {
        $browserDevice = new BrowserComponent('some value');
        $this->assertEquals('some value', $browserDevice->getValue());
        $this->assertEquals('browser', $browserDevice->getKey());
    }

}
