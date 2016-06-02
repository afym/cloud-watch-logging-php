<?php

namespace Cloud\Tools\Amazon\Logging\Helper;

use Cloud\Tools\Amazon\Logging\Helper\OsElement;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Helper
 * @version 1.0.0
 */
class OsDetector
{

    /**
     * @var int os flag
     */
    const OS_UNKNOWN = 1;

    /**
     * @var int os flag
     */
    const OS_WINDOWS = 2;

    /**
     * @var int os flag
     */
    const OS_LINUX = 3;

    /**
     * @var int os flag
     */
    const OS_OSX = 4;

    /**
     * @return OsElement
     */
    public static function getOsElement()
    {
        $osElement = new OsElement();
        $osElement->setOsId(self::OS_LINUX);
        $osElement->setTemporalPath('/tmp');

        switch (true) {
            case stristr(PHP_OS, 'DAR'):
                $osElement->setOsId(self::OS_OSX);
                $osElement->setTemporalPath('/tmp');
            case stristr(PHP_OS, 'WIN'):
                $osElement->setOsId(self::OS_WIN);
                $osElement->setTemporalPath('C:\Temp');
        }

        return $osElement;
    }

}
