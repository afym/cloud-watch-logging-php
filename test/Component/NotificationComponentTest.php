<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Component\NotificationComponent;

class NotificationComponentTest extends \PHPUnit_Framework_TestCase
{

    public function testIsCorrectDefinition()
    {
        $browserDevice = new NotificationComponent('some value');
        $this->assertEquals('some value', $browserDevice->getValue());
        $this->assertEquals('notification', $browserDevice->getKey());
    }

}
