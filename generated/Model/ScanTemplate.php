<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplate
{
    /**
     * 
     *
     * @var ScanTemplateVulnerabilityChecks
     */
    protected $checks;
    /**
     * 
     *
     * @var ScanTemplateDatabase
     */
    protected $database;
    /**
     * A verbose description of the scan template..
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var ScanTemplateDiscovery
     */
    protected $discovery;
    /**
     * Whether only discovery is performed during a scan.
     *
     * @var bool
     */
    protected $discoveryOnly;
    /**
     * Whether Windows services are enabled during a scan. Windows services will be temporarily reconfigured when this option is selected. Original settings will be restored after the scan completes, unless it is interrupted.
     *
     * @var bool
     */
    protected $enableWindowsServices;
    /**
     * Whether enhanced logging is gathered during scanning. Collection of enhanced logs may greatly increase the disk space used by a scan.
     *
     * @var bool
     */
    protected $enhancedLogging;
    /**
     * The identifier of the scan template
     *
     * @var string
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The maximum number of assets scanned simultaneously per scan engine during a scan.
     *
     * @var int
     */
    protected $maxParallelAssets;
    /**
     * The maximum number of scan processes simultaneously allowed against each asset during a scan.
     *
     * @var int
     */
    protected $maxScanProcesses;
    /**
     * A concise name for the scan template.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var Policy
     */
    protected $policy;
    /**
     * Whether policy assessment is performed during a scan.
     *
     * @var bool
     */
    protected $policyEnabled;
    /**
     * 
     *
     * @var Telnet
     */
    protected $telnet;
    /**
     * Whether vulnerability assessment is performed during a scan.
     *
     * @var bool
     */
    protected $vulnerabilityEnabled;
    /**
     * 
     *
     * @var ScanTemplateWebSpider
     */
    protected $web;
    /**
     * Whether web spidering and assessment are performed during a scan.
     *
     * @var bool
     */
    protected $webEnabled;
    /**
     * 
     *
     * @return ScanTemplateVulnerabilityChecks
     */
    public function getChecks() : ScanTemplateVulnerabilityChecks
    {
        return $this->checks;
    }
    /**
     * 
     *
     * @param ScanTemplateVulnerabilityChecks $checks
     *
     * @return self
     */
    public function setChecks(ScanTemplateVulnerabilityChecks $checks) : self
    {
        $this->checks = $checks;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateDatabase
     */
    public function getDatabase() : ScanTemplateDatabase
    {
        return $this->database;
    }
    /**
     * 
     *
     * @param ScanTemplateDatabase $database
     *
     * @return self
     */
    public function setDatabase(ScanTemplateDatabase $database) : self
    {
        $this->database = $database;
        return $this;
    }
    /**
     * A verbose description of the scan template..
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A verbose description of the scan template..
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateDiscovery
     */
    public function getDiscovery() : ScanTemplateDiscovery
    {
        return $this->discovery;
    }
    /**
     * 
     *
     * @param ScanTemplateDiscovery $discovery
     *
     * @return self
     */
    public function setDiscovery(ScanTemplateDiscovery $discovery) : self
    {
        $this->discovery = $discovery;
        return $this;
    }
    /**
     * Whether only discovery is performed during a scan.
     *
     * @return bool
     */
    public function getDiscoveryOnly() : bool
    {
        return $this->discoveryOnly;
    }
    /**
     * Whether only discovery is performed during a scan.
     *
     * @param bool $discoveryOnly
     *
     * @return self
     */
    public function setDiscoveryOnly(bool $discoveryOnly) : self
    {
        $this->discoveryOnly = $discoveryOnly;
        return $this;
    }
    /**
     * Whether Windows services are enabled during a scan. Windows services will be temporarily reconfigured when this option is selected. Original settings will be restored after the scan completes, unless it is interrupted.
     *
     * @return bool
     */
    public function getEnableWindowsServices() : bool
    {
        return $this->enableWindowsServices;
    }
    /**
     * Whether Windows services are enabled during a scan. Windows services will be temporarily reconfigured when this option is selected. Original settings will be restored after the scan completes, unless it is interrupted.
     *
     * @param bool $enableWindowsServices
     *
     * @return self
     */
    public function setEnableWindowsServices(bool $enableWindowsServices) : self
    {
        $this->enableWindowsServices = $enableWindowsServices;
        return $this;
    }
    /**
     * Whether enhanced logging is gathered during scanning. Collection of enhanced logs may greatly increase the disk space used by a scan.
     *
     * @return bool
     */
    public function getEnhancedLogging() : bool
    {
        return $this->enhancedLogging;
    }
    /**
     * Whether enhanced logging is gathered during scanning. Collection of enhanced logs may greatly increase the disk space used by a scan.
     *
     * @param bool $enhancedLogging
     *
     * @return self
     */
    public function setEnhancedLogging(bool $enhancedLogging) : self
    {
        $this->enhancedLogging = $enhancedLogging;
        return $this;
    }
    /**
     * The identifier of the scan template
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The identifier of the scan template
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @param Link[] $links
     *
     * @return self
     */
    public function setLinks(array $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * The maximum number of assets scanned simultaneously per scan engine during a scan.
     *
     * @return int
     */
    public function getMaxParallelAssets() : int
    {
        return $this->maxParallelAssets;
    }
    /**
     * The maximum number of assets scanned simultaneously per scan engine during a scan.
     *
     * @param int $maxParallelAssets
     *
     * @return self
     */
    public function setMaxParallelAssets(int $maxParallelAssets) : self
    {
        $this->maxParallelAssets = $maxParallelAssets;
        return $this;
    }
    /**
     * The maximum number of scan processes simultaneously allowed against each asset during a scan.
     *
     * @return int
     */
    public function getMaxScanProcesses() : int
    {
        return $this->maxScanProcesses;
    }
    /**
     * The maximum number of scan processes simultaneously allowed against each asset during a scan.
     *
     * @param int $maxScanProcesses
     *
     * @return self
     */
    public function setMaxScanProcesses(int $maxScanProcesses) : self
    {
        $this->maxScanProcesses = $maxScanProcesses;
        return $this;
    }
    /**
     * A concise name for the scan template.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * A concise name for the scan template.
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
     * 
     *
     * @return Policy
     */
    public function getPolicy() : Policy
    {
        return $this->policy;
    }
    /**
     * 
     *
     * @param Policy $policy
     *
     * @return self
     */
    public function setPolicy(Policy $policy) : self
    {
        $this->policy = $policy;
        return $this;
    }
    /**
     * Whether policy assessment is performed during a scan.
     *
     * @return bool
     */
    public function getPolicyEnabled() : bool
    {
        return $this->policyEnabled;
    }
    /**
     * Whether policy assessment is performed during a scan.
     *
     * @param bool $policyEnabled
     *
     * @return self
     */
    public function setPolicyEnabled(bool $policyEnabled) : self
    {
        $this->policyEnabled = $policyEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return Telnet
     */
    public function getTelnet() : Telnet
    {
        return $this->telnet;
    }
    /**
     * 
     *
     * @param Telnet $telnet
     *
     * @return self
     */
    public function setTelnet(Telnet $telnet) : self
    {
        $this->telnet = $telnet;
        return $this;
    }
    /**
     * Whether vulnerability assessment is performed during a scan.
     *
     * @return bool
     */
    public function getVulnerabilityEnabled() : bool
    {
        return $this->vulnerabilityEnabled;
    }
    /**
     * Whether vulnerability assessment is performed during a scan.
     *
     * @param bool $vulnerabilityEnabled
     *
     * @return self
     */
    public function setVulnerabilityEnabled(bool $vulnerabilityEnabled) : self
    {
        $this->vulnerabilityEnabled = $vulnerabilityEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateWebSpider
     */
    public function getWeb() : ScanTemplateWebSpider
    {
        return $this->web;
    }
    /**
     * 
     *
     * @param ScanTemplateWebSpider $web
     *
     * @return self
     */
    public function setWeb(ScanTemplateWebSpider $web) : self
    {
        $this->web = $web;
        return $this;
    }
    /**
     * Whether web spidering and assessment are performed during a scan.
     *
     * @return bool
     */
    public function getWebEnabled() : bool
    {
        return $this->webEnabled;
    }
    /**
     * Whether web spidering and assessment are performed during a scan.
     *
     * @param bool $webEnabled
     *
     * @return self
     */
    public function setWebEnabled(bool $webEnabled) : self
    {
        $this->webEnabled = $webEnabled;
        return $this;
    }
}