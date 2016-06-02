<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Detector\ExceptionDetector;

class ExceptionDetectorTest extends \PHPUnit_Framework_TestCase
{

    private function serverExceptiontMock()
    {
        try {
            throw new \Exception("Some fake error on my code");
        } catch (\Exception $e) {
            $configuration = array(
                'exception' => $e,
            );
            return new ExceptionDetector($configuration);
        }
    }

    public function testNoUrlDetected()
    {
        $detector = $this->serverExceptiontMock();
        $this->assertNotEquals($detector->getValue(), '');
        $this->assertContains('[', $detector->getValue());
        $this->assertContains(']', $detector->getValue());
    }

}
