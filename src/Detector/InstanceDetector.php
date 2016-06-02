<?php

namespace Cloud\Tools\Amazon\Logging\Detector;

use Cloud\Tools\Amazon\Logging\BaseDetector;
use Cloud\Tools\Amazon\Logging\Helper\OsDetector;
use Cloud\Tools\Amazon\Logging\Helper\HttpGet;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Detector
 * @version 1.0.0
 */
class InstanceDetector extends BaseDetector
{

    /**
     * @var bool
     */
    private $isLocal;

    /**
     * @var string
     */
    private $instanceId;

    /**
     * @var string
     */
    private $awsUrl = 'http://instance-data/latest/meta-data/instance-id';

    /**
     * @var string
     */
    private $fileName = 'cloud-watch-log-tools.tmp';

    public function __construct($configuration = array())
    {
        $this->configuration = $configuration;
        $this->loadConfiguration();
        $this->getInstanceId();
    }

    private function getInstanceId()
    {
        if ($this->isCachedIdInstance()) {
            $this->value = $this->getCachedInstance();
        }

        $this->saveTmpAmazonId();

        $this->value = $this->instanceId;
    }

    private function detectAmazonInstanceId()
    {
        $this->instanceId = 'i-local';

        if (!$this->isLocal) {
            $this->instanceId = HttpGet::getReponse($this->awsUrl);
        }
    }

    private function saveTmpAmazonId()
    {
        $this->detectAmazonInstanceId();
        file_put_contents($this->getTmpFile(), $this->instanceId);
    }

    private function getTmpFile()
    {
        $path = OsDetector::getOsElement();
        return "{$path->getTemporalPath()}/{$this->fileName}";
    }

    private function isCachedIdInstance()
    {
        return is_file($this->getTmpFile());
    }

    private function getCachedInstance()
    {
        return file_get_contents($this->getTmpFile());
    }

    private function loadConfiguration()
    {
        if (is_array($this->configuration) && count($this->configuration) > 0) {
            if (isset($this->configuration['local'])) {
                $this->isLocal = $this->configuration['local'];
            }

            if (isset($this->configuration['aws_url'])) {
                $this->awsUrl = $this->configuration['aws_url'];
            }
        }
    }

}
