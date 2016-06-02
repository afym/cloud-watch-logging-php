<?php

namespace Cloud\Tools\Amazon\Logging\Detector;

use Cloud\Tools\Amazon\Logging\BaseDetector;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Detector
 * @version 1.0.0
 */
class ExceptionDetector extends BaseDetector
{

    /**
     * @var \Exception
     */
    private $exception;

    public function __construct($configuration = array())
    {
        $this->configuration = $configuration;
        $this->loadConfiguration();
        $this->getExceptionValue();
    }

    private function getExceptionValue()
    {
        $this->value = '';
        $this->buildExceptionFormat();
    }

    private function loadConfiguration()
    {
        if (isset($this->configuration['exception'])) {
            $this->exception = $this->configuration['exception'];
        }
    }

    private function buildExceptionFormat()
    {
        if ($this->exception instanceof \Exception) {
            $this->value = "{$this->exception->getMessage()} [";
            $this->value .= "{$this->exception->getFile()}";
            $this->value .= "{$this->exception->getLine()}]";
        }
    }

}
