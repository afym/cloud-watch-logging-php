<?php

namespace Cloud\Tools\Amazon\Logging;

/**
 * @author afym
 * @package Cloud\Tools\Amazon\Logging
 * @version 1.0.0
 */
class BaseComponent
{

    /**
     * @var string Component's key
     */
    protected $key;

    /**
     * @var string Component's value
     */
    protected $value;

    /**
     * @param string $key
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return void
     */
    public function getKey()
    {
        return $this->key;
    }

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
