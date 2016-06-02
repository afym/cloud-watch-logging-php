<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Component\BrowserComponent;
use Cloud\Tools\Amazon\Logging\Component\DateComponent;
use Cloud\Tools\Amazon\Logging\Component\HttpMethodComponent;
use Cloud\Tools\Amazon\Logging\Component\HttpUrlComponent;
use Cloud\Tools\Amazon\Logging\Component\InstanceComponent;
use Cloud\Tools\Amazon\Logging\Component\IpComponent;
use Cloud\Tools\Amazon\Logging\Component\NotificationComponent;

class ComponentInstancesTest extends \PHPUnit_Framework_TestCase
{

    public function testCorrectInstances()
    {
        $this->assertInstanceOf('Cloud\Tools\Amazon\Logging\BaseComponent', new BrowserComponent('test'));
        $this->assertInstanceOf('Cloud\Tools\Amazon\Logging\BaseComponent', new DateComponent('test'));
        $this->assertInstanceOf('Cloud\Tools\Amazon\Logging\BaseComponent', new HttpMethodComponent('test'));
        $this->assertInstanceOf('Cloud\Tools\Amazon\Logging\BaseComponent', new HttpUrlComponent('test'));
        $this->assertInstanceOf('Cloud\Tools\Amazon\Logging\BaseComponent', new InstanceComponent('test'));
        $this->assertInstanceOf('Cloud\Tools\Amazon\Logging\BaseComponent', new IpComponent('test'));
        $this->assertInstanceOf('Cloud\Tools\Amazon\Logging\BaseComponent', new NotificationComponent('test'));
    }

}
