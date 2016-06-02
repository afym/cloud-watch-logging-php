<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Detector\DateDetector;

class DateDetectorTest extends \PHPUnit_Framework_TestCase
{

    private function getDate()
    {
        $dateDetector = new DateDetector();
        return $dateDetector->getValue();
    }

    public function testDateFormat()
    {
        $this->assertContains('-', $this->getDate());
        $this->assertContains(':', $this->getDate());
    }

}
