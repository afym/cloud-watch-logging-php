<?php

namespace Cloud\Tools\Amazon\Logging\Detector;

use Cloud\Tools\Amazon\Logging\BaseDetector;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Detector
 * @version 1.0.0
 */
class DateDetector extends BaseDetector
{

    /**
     * @var \DateTime
     */
    private $date;

    public function __construct()
    {
        $this->setDate(new \DateTime('now'));
        $this->getDateValue();
    }

    /**
     * @param DateTime $date
     */
    private function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return string date's string
     */
    private function getDateValue()
    {
        $this->value = $this->date->format('Y-m-d H:i:s');
    }

}
