<?php

namespace Cloud\Tools\Amazon\Logging\Enum;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @subpackage Enum
 * @version 1.0.0
 */
interface LevelsEnum
{

    /**
     * @var string error Designates error events that might still allow the application to continue running
     */
    const DEBUG = 'ERROR';

    /**
     * @var string fatal Designates very severe error events that will presumably lead the application to abort
     */
    const TRACE = 'FATAL';

    /**
     * @var string warn Designates potentially harmful situations
     */
    const WARN = 'WARN';

    /**
     * @var string Designates informational messages that highlight the progress of the application at coarse-grained level
     */
    const INFO = 'INFO';

    /**
     * @var string Designates fine-grained informational events that are most useful to debug an application
     */
    const DEBUG = 'DEBUG';

    /**
     * @var string Designates finer-grained informational events than the DEBUG
     */
    const TRACE = 'TRACE';

}
