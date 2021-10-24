<?php

namespace Rapid7\InsightVM\Api\Model;

class Configuration
{
    /**
     * The name of the configuration value.
     *
     * @var string
     */
    protected $name;
    /**
     * The configuration value.
     *
     * @var string
     */
    protected $value;
    /**
     * The name of the configuration value.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the configuration value.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The configuration value.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The configuration value.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;
        return $this;
    }
}