<?php

namespace Rapid7\InsightVM\Api\Model;

class Features
{
    /**
     * Whether Adaptive Security features are available.
     *
     * @var bool
     */
    protected $adaptiveSecurity;
    /**
     * Whether the use of agents is allowed.
     *
     * @var bool
     */
    protected $agents;
    /**
     * Whether dynamic discovery sources may be used.
     *
     * @var bool
     */
    protected $dynamicDiscovery;
    /**
     * Whether early-access features are available prior to general availability.
     *
     * @var bool
     */
    protected $earlyAccess;
    /**
     * Whether scan engine pools may be used.
     *
     * @var bool
     */
    protected $enginePool;
    /**
     * Whether the usage of the Insight Platform is allowed.
     *
     * @var bool
     */
    protected $insightPlatform;
    /**
     * Whether mobile features are allowed.
     *
     * @var bool
     */
    protected $mobile;
    /**
     * Whether multitenancy is allowed.
     *
     * @var bool
     */
    protected $multitenancy;
    /**
     * Whether the editing of policies is allowed.
     *
     * @var bool
     */
    protected $policyEditor;
    /**
     * Whether the policy manager is allowed.
     *
     * @var bool
     */
    protected $policyManager;
    /**
     * Whether Remediation Analytics features are available.
     *
     * @var bool
     */
    protected $remediationAnalytics;
    /**
     * 
     *
     * @var LicenseReporting
     */
    protected $reporting;
    /**
     * 
     *
     * @var LicenseScanning
     */
    protected $scanning;
    /**
     * Whether Adaptive Security features are available.
     *
     * @return bool
     */
    public function getAdaptiveSecurity() : bool
    {
        return $this->adaptiveSecurity;
    }
    /**
     * Whether Adaptive Security features are available.
     *
     * @param bool $adaptiveSecurity
     *
     * @return self
     */
    public function setAdaptiveSecurity(bool $adaptiveSecurity) : self
    {
        $this->adaptiveSecurity = $adaptiveSecurity;
        return $this;
    }
    /**
     * Whether the use of agents is allowed.
     *
     * @return bool
     */
    public function getAgents() : bool
    {
        return $this->agents;
    }
    /**
     * Whether the use of agents is allowed.
     *
     * @param bool $agents
     *
     * @return self
     */
    public function setAgents(bool $agents) : self
    {
        $this->agents = $agents;
        return $this;
    }
    /**
     * Whether dynamic discovery sources may be used.
     *
     * @return bool
     */
    public function getDynamicDiscovery() : bool
    {
        return $this->dynamicDiscovery;
    }
    /**
     * Whether dynamic discovery sources may be used.
     *
     * @param bool $dynamicDiscovery
     *
     * @return self
     */
    public function setDynamicDiscovery(bool $dynamicDiscovery) : self
    {
        $this->dynamicDiscovery = $dynamicDiscovery;
        return $this;
    }
    /**
     * Whether early-access features are available prior to general availability.
     *
     * @return bool
     */
    public function getEarlyAccess() : bool
    {
        return $this->earlyAccess;
    }
    /**
     * Whether early-access features are available prior to general availability.
     *
     * @param bool $earlyAccess
     *
     * @return self
     */
    public function setEarlyAccess(bool $earlyAccess) : self
    {
        $this->earlyAccess = $earlyAccess;
        return $this;
    }
    /**
     * Whether scan engine pools may be used.
     *
     * @return bool
     */
    public function getEnginePool() : bool
    {
        return $this->enginePool;
    }
    /**
     * Whether scan engine pools may be used.
     *
     * @param bool $enginePool
     *
     * @return self
     */
    public function setEnginePool(bool $enginePool) : self
    {
        $this->enginePool = $enginePool;
        return $this;
    }
    /**
     * Whether the usage of the Insight Platform is allowed.
     *
     * @return bool
     */
    public function getInsightPlatform() : bool
    {
        return $this->insightPlatform;
    }
    /**
     * Whether the usage of the Insight Platform is allowed.
     *
     * @param bool $insightPlatform
     *
     * @return self
     */
    public function setInsightPlatform(bool $insightPlatform) : self
    {
        $this->insightPlatform = $insightPlatform;
        return $this;
    }
    /**
     * Whether mobile features are allowed.
     *
     * @return bool
     */
    public function getMobile() : bool
    {
        return $this->mobile;
    }
    /**
     * Whether mobile features are allowed.
     *
     * @param bool $mobile
     *
     * @return self
     */
    public function setMobile(bool $mobile) : self
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Whether multitenancy is allowed.
     *
     * @return bool
     */
    public function getMultitenancy() : bool
    {
        return $this->multitenancy;
    }
    /**
     * Whether multitenancy is allowed.
     *
     * @param bool $multitenancy
     *
     * @return self
     */
    public function setMultitenancy(bool $multitenancy) : self
    {
        $this->multitenancy = $multitenancy;
        return $this;
    }
    /**
     * Whether the editing of policies is allowed.
     *
     * @return bool
     */
    public function getPolicyEditor() : bool
    {
        return $this->policyEditor;
    }
    /**
     * Whether the editing of policies is allowed.
     *
     * @param bool $policyEditor
     *
     * @return self
     */
    public function setPolicyEditor(bool $policyEditor) : self
    {
        $this->policyEditor = $policyEditor;
        return $this;
    }
    /**
     * Whether the policy manager is allowed.
     *
     * @return bool
     */
    public function getPolicyManager() : bool
    {
        return $this->policyManager;
    }
    /**
     * Whether the policy manager is allowed.
     *
     * @param bool $policyManager
     *
     * @return self
     */
    public function setPolicyManager(bool $policyManager) : self
    {
        $this->policyManager = $policyManager;
        return $this;
    }
    /**
     * Whether Remediation Analytics features are available.
     *
     * @return bool
     */
    public function getRemediationAnalytics() : bool
    {
        return $this->remediationAnalytics;
    }
    /**
     * Whether Remediation Analytics features are available.
     *
     * @param bool $remediationAnalytics
     *
     * @return self
     */
    public function setRemediationAnalytics(bool $remediationAnalytics) : self
    {
        $this->remediationAnalytics = $remediationAnalytics;
        return $this;
    }
    /**
     * 
     *
     * @return LicenseReporting
     */
    public function getReporting() : LicenseReporting
    {
        return $this->reporting;
    }
    /**
     * 
     *
     * @param LicenseReporting $reporting
     *
     * @return self
     */
    public function setReporting(LicenseReporting $reporting) : self
    {
        $this->reporting = $reporting;
        return $this;
    }
    /**
     * 
     *
     * @return LicenseScanning
     */
    public function getScanning() : LicenseScanning
    {
        return $this->scanning;
    }
    /**
     * 
     *
     * @param LicenseScanning $scanning
     *
     * @return self
     */
    public function setScanning(LicenseScanning $scanning) : self
    {
        $this->scanning = $scanning;
        return $this;
    }
}