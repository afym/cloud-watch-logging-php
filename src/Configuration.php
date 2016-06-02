<?php

namespace Cloud\Tools\Amazon\Logging;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @version 1.0.0
 */
class Configuration
{

    /**
     * @var boolean flag to enable the local enviroment
     */
    private $isLocalEnviroment = false;

    /**
     * @var string aws secret key
     */
    private $secretKey;

    /**
     * @var string aws access key
     */
    private $accessKey;

    /**
     * @var string aws region
     */
    private $region;

    /**
     * @var string Cloud watch log name
     */
    private $logName;

    /**
     * @var string Cloud wathc stream name
     */
    private $streamName;

    /**
     * @param array $configuration
     */
    public function __construct($configuration = array())
    {
        if (is_array($configuration) && count($configuration) > 0) {
            if (isset($configuration['is_local_enviroment'])) {
                $this->isLocalEnviroment = $configuration['is_local_enviroment'];
            }

            if (isset($configuration['aws_secret_key'])) {
                $this->secretKey = $configuration['aws_secret_key'];
            }

            if (isset($configuration['aws_access_key'])) {
                $this->accessKey = $configuration['aws_access_key'];
            }

            if (isset($configuration['aws_region'])) {
                $this->region = $configuration['aws_region'];
            }

            if (isset($configuration['log_name'])) {
                $this->logName = $configuration['log_name'];
            }

            if (isset($configuration['stream_name'])) {
                $this->streamName = $configuration['stream_name'];
            }
        }
    }

    public function getIsLocalEnviroment()
    {
        return $this->isLocalEnviroment;
    }

    public function getSecretKey()
    {
        return $this->secretKey;
    }

    public function getAccessKey()
    {
        return $this->accessKey;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getLogName()
    {
        return $this->logName;
    }

    public function getStreamName()
    {
        return $this->streamName;
    }

    public function setIsLocalEnviroment($isLocalEnviroment)
    {
        $this->isLocalEnviroment = $isLocalEnviroment;
    }

    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function setLogName($logName)
    {
        $this->logName = $logName;
    }

    public function setStreamName($streamName)
    {
        $this->streamName = $streamName;
    }

}
