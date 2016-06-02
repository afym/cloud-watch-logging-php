<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Configuration;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{

    public function testConfigurationInstanceSetGet()
    {
        $configuration = new Configuration();
        $configuration->setAccessKey('access');
        $configuration->setSecretKey('secret');
        $configuration->setRegion('east-1');
        $configuration->setLogName('log');
        $configuration->setStreamName('app_stream');

        $this->assertEquals('access', $configuration->getAccessKey());
        $this->assertEquals('secret', $configuration->getSecretKey());
        $this->assertEquals('east-1', $configuration->getRegion());
        $this->assertEquals('log', $configuration->getLogName());
        $this->assertEquals('app_stream', $configuration->getStreamName());
    }

}
