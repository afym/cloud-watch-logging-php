<?php

namespace Cloud\Tools\Amazon\Logging\Helper;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Helper
 * @version 1.0.0
 */
class OsElement
{

    /**
     * @var int
     */
    private $osId;

    /**
     * @var string
     */
    private $temporalPath;

    public function getOsId()
    {
        return $this->osId;
    }

    public function getTemporalPath()
    {
        return $this->temporalPath;
    }

    public function setOsId($osId)
    {
        $this->osId = $osId;
    }

    public function setTemporalPath($temporalPath)
    {
        $this->temporalPath = $temporalPath;
    }

}
