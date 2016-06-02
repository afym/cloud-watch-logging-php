<?php

namespace Cloud\Tools\Amazon\Logging;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @version 1.0.0
 */
class BaseDetector
{

    /**
     * @var string Detector's value
     */
    protected $value;

    /**
     * @var array Detector's configuration
     */
    protected $configuration = array();

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value Component's value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}
