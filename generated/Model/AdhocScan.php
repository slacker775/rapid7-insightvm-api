<?php

namespace Rapid7\InsightVM\Api\Model;

class AdhocScan
{
    /**
     * The identifier of the scan engine.
     *
     * @var int
     */
    protected $engineId;
    /**
     * The hosts that should be included as a part of the scan. This should be a mixture of IP Addresses and Hostnames as a String array.
     *
     * @var string[]
     */
    protected $hosts;
    /**
     * The user-driven scan name for the scan.
     *
     * @var string
     */
    protected $name;
    /**
     * The identifier of the scan template
     *
     * @var string
     */
    protected $templateId;
    /**
     * The identifier of the scan engine.
     *
     * @return int
     */
    public function getEngineId() : int
    {
        return $this->engineId;
    }
    /**
     * The identifier of the scan engine.
     *
     * @param int $engineId
     *
     * @return self
     */
    public function setEngineId(int $engineId) : self
    {
        $this->engineId = $engineId;
        return $this;
    }
    /**
     * The hosts that should be included as a part of the scan. This should be a mixture of IP Addresses and Hostnames as a String array.
     *
     * @return string[]
     */
    public function getHosts() : array
    {
        return $this->hosts;
    }
    /**
     * The hosts that should be included as a part of the scan. This should be a mixture of IP Addresses and Hostnames as a String array.
     *
     * @param string[] $hosts
     *
     * @return self
     */
    public function setHosts(array $hosts) : self
    {
        $this->hosts = $hosts;
        return $this;
    }
    /**
     * The user-driven scan name for the scan.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The user-driven scan name for the scan.
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
     * The identifier of the scan template
     *
     * @return string
     */
    public function getTemplateId() : string
    {
        return $this->templateId;
    }
    /**
     * The identifier of the scan template
     *
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId(string $templateId) : self
    {
        $this->templateId = $templateId;
        return $this;
    }
}