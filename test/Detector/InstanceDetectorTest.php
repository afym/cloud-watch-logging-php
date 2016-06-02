<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Detector\InstanceDetector;
use Cloud\Tools\Amazon\Logging\Helper\OsDetector;

class InstanceDetectorTest extends \PHPUnit_Framework_TestCase
{

    private function instanceMockDataLocal()
    {
        $configuration = array(
            'local' => true,
            'aws_url' => 'no url',
        );

        return new InstanceDetector($configuration);
    }

    private function instanceMockUrlLocal()
    {
        $configuration = array(
            'local' => false,
            'aws_url' => 'http://api.openweathermap.org/data/2.5/forecast?id=524901&appid=b1b15e88fa797225412429c1c50c122a',
        );

        $os = OsDetector::getOsElement();
        $fileName = "{$os->getTemporalPath()}/cloud-watch-log-tools.tmp";
        unlink($fileName);

        return new InstanceDetector($configuration);
    }

    public function testLocalSaveInstance()
    {
        $instance = $this->instanceMockDataLocal();
        $this->assertEquals('i-local', $instance->getValue());
    }

    public function testUrlSaveInstance()
    {
        $instance = $this->instanceMockUrlLocal();
        $this->assertNotEquals('i-local', $instance->getValue());
    }

}
