<?php

namespace Rapid7\InsightVM\Api\Model;

class JVMInfo
{
    /**
     * The name of the Java Virtual Machine.
     *
     * @var string
     */
    protected $name;
    /**
     * The date and time the Java Virtual Machine last started.
     *
     * @var string
     */
    protected $startTime;
    /**
     * Total up-time of the Java Virtual Machine, in ISO 8601 format. For example: `"PT1H4M24.214S"`.
     *
     * @var string
     */
    protected $uptime;
    /**
     * The vendor of the Java Virtual Machine.
     *
     * @var string
     */
    protected $vendor;
    /**
     * The version of the Java Virtual Machine.
     *
     * @var string
     */
    protected $version;
    /**
     * The name of the Java Virtual Machine.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the Java Virtual Machine.
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
     * The date and time the Java Virtual Machine last started.
     *
     * @return string
     */
    public function getStartTime() : string
    {
        return $this->startTime;
    }
    /**
     * The date and time the Java Virtual Machine last started.
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Total up-time of the Java Virtual Machine, in ISO 8601 format. For example: `"PT1H4M24.214S"`.
     *
     * @return string
     */
    public function getUptime() : string
    {
        return $this->uptime;
    }
    /**
     * Total up-time of the Java Virtual Machine, in ISO 8601 format. For example: `"PT1H4M24.214S"`.
     *
     * @param string $uptime
     *
     * @return self
     */
    public function setUptime(string $uptime) : self
    {
        $this->uptime = $uptime;
        return $this;
    }
    /**
     * The vendor of the Java Virtual Machine.
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * The vendor of the Java Virtual Machine.
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(string $vendor) : self
    {
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * The version of the Java Virtual Machine.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the Java Virtual Machine.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
}