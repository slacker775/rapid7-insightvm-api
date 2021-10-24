<?php

namespace Rapid7\InsightVM\Api\Model;

class LicenseScanning
{
    /**
     * Whether discovery scanning may be used.
     *
     * @var bool
     */
    protected $discovery;
    /**
     * 
     *
     * @var LicensePolicyScanning
     */
    protected $policy;
    /**
     * Whether SCADA scanning may be used.
     *
     * @var bool
     */
    protected $scada;
    /**
     * Whether virtual scanning may be used.
     *
     * @var bool
     */
    protected $virtual;
    /**
     * Whether web scanning may be used.
     *
     * @var bool
     */
    protected $webApplication;
    /**
     * Whether discovery scanning may be used.
     *
     * @return bool
     */
    public function getDiscovery() : bool
    {
        return $this->discovery;
    }
    /**
     * Whether discovery scanning may be used.
     *
     * @param bool $discovery
     *
     * @return self
     */
    public function setDiscovery(bool $discovery) : self
    {
        $this->discovery = $discovery;
        return $this;
    }
    /**
     * 
     *
     * @return LicensePolicyScanning
     */
    public function getPolicy() : LicensePolicyScanning
    {
        return $this->policy;
    }
    /**
     * 
     *
     * @param LicensePolicyScanning $policy
     *
     * @return self
     */
    public function setPolicy(LicensePolicyScanning $policy) : self
    {
        $this->policy = $policy;
        return $this;
    }
    /**
     * Whether SCADA scanning may be used.
     *
     * @return bool
     */
    public function getScada() : bool
    {
        return $this->scada;
    }
    /**
     * Whether SCADA scanning may be used.
     *
     * @param bool $scada
     *
     * @return self
     */
    public function setScada(bool $scada) : self
    {
        $this->scada = $scada;
        return $this;
    }
    /**
     * Whether virtual scanning may be used.
     *
     * @return bool
     */
    public function getVirtual() : bool
    {
        return $this->virtual;
    }
    /**
     * Whether virtual scanning may be used.
     *
     * @param bool $virtual
     *
     * @return self
     */
    public function setVirtual(bool $virtual) : self
    {
        $this->virtual = $virtual;
        return $this;
    }
    /**
     * Whether web scanning may be used.
     *
     * @return bool
     */
    public function getWebApplication() : bool
    {
        return $this->webApplication;
    }
    /**
     * Whether web scanning may be used.
     *
     * @param bool $webApplication
     *
     * @return self
     */
    public function setWebApplication(bool $webApplication) : self
    {
        $this->webApplication = $webApplication;
        return $this;
    }
}