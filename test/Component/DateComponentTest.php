<?php

namespace Test\Component;

use Cloud\Tools\Amazon\Logging\Component\DateComponent;

class DateComponentTest extends \PHPUnit_Framework_TestCase
{

    public function testIsCorrectDefinition()
    {
        $dateComponent = new DateComponent('some value');
        $this->assertEquals('some value', $dateComponent->getValue());
        $this->assertEquals('date', $dateComponent->getKey());
    }

}
