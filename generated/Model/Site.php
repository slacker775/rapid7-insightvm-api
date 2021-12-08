<?php

namespace Rapid7\InsightVM\Api\Model;

class Site
{
    /**
     * The number of assets that belong to the site.
     *
     * @var int
     */
    protected $assets;
    /**
     * The type of discovery connection configured for the site. This property only applies to dynamic sites.
     *
     * @var string
     */
    protected $connectionType;
    /**
     * The site description.
     *
     * @var string
     */
    protected $description;
    /**
     * The identifier of the site.
     *
     * @var int
     */
    protected $id;
    /**
     * The site importance.
     *
     * @var string
     */
    protected $importance;
    /**
     * The date and time of the site's last scan.
     *
     * @var string
     */
    protected $lastScanTime;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The site name.
     *
     * @var string
     */
    protected $name;
    /**
     * The risk score (with criticality adjustments) of the site.
     *
     * @var float
     */
    protected $riskScore;
    /**
     * The identifier of the scan engine configured in the site.
     *
     * @var int
     */
    protected $scanEngine;
    /**
     * The identifier of the scan template configured in the site.
     *
     * @var string
     */
    protected $scanTemplate;
    /**
     * The type of the site.
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var Vulnerabilities
     */
    protected $vulnerabilities;
    /**
     * The number of assets that belong to the site.
     *
     * @return int
     */
    public function getAssets() : int
    {
        return $this->assets;
    }
    /**
     * The number of assets that belong to the site.
     *
     * @param int $assets
     *
     * @return self
     */
    public function setAssets(int $assets) : self
    {
        $this->assets = $assets;
        return $this;
    }
    /**
     * The type of discovery connection configured for the site. This property only applies to dynamic sites.
     *
     * @return string
     */
    public function getConnectionType() : string
    {
        return $this->connectionType;
    }
    /**
     * The type of discovery connection configured for the site. This property only applies to dynamic sites.
     *
     * @param string $connectionType
     *
     * @return self
     */
    public function setConnectionType(string $connectionType) : self
    {
        $this->connectionType = $connectionType;
        return $this;
    }
    /**
     * The site description.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The site description.
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
     * The identifier of the site.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the site.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The site importance.
     *
     * @return string
     */
    public function getImportance() : string
    {
        return $this->importance;
    }
    /**
     * The site importance.
     *
     * @param string $importance
     *
     * @return self
     */
    public function setImportance(string $importance) : self
    {
        $this->importance = $importance;
        return $this;
    }
    /**
     * The date and time of the site's last scan.
     *
     * @return string
     */
    public function getLastScanTime() : string
    {
        return $this->lastScanTime;
    }
    /**
     * The date and time of the site's last scan.
     *
     * @param string $lastScanTime
     *
     * @return self
     */
    public function setLastScanTime(string $lastScanTime) : self
    {
        $this->lastScanTime = $lastScanTime;
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
     * The site name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The site name.
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
     * The risk score (with criticality adjustments) of the site.
     *
     * @return float
     */
    public function getRiskScore() : float
    {
        return $this->riskScore;
    }
    /**
     * The risk score (with criticality adjustments) of the site.
     *
     * @param float $riskScore
     *
     * @return self
     */
    public function setRiskScore(float $riskScore) : self
    {
        $this->riskScore = $riskScore;
        return $this;
    }
    /**
     * The identifier of the scan engine configured in the site.
     *
     * @return int
     */
    public function getScanEngine() : int
    {
        return $this->scanEngine;
    }
    /**
     * The identifier of the scan engine configured in the site.
     *
     * @param int $scanEngine
     *
     * @return self
     */
    public function setScanEngine(int $scanEngine) : self
    {
        $this->scanEngine = $scanEngine;
        return $this;
    }
    /**
     * The identifier of the scan template configured in the site.
     *
     * @return string
     */
    public function getScanTemplate() : string
    {
        return $this->scanTemplate;
    }
    /**
     * The identifier of the scan template configured in the site.
     *
     * @param string $scanTemplate
     *
     * @return self
     */
    public function setScanTemplate(string $scanTemplate) : self
    {
        $this->scanTemplate = $scanTemplate;
        return $this;
    }
    /**
     * The type of the site.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the site.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return Vulnerabilities
     */
    public function getVulnerabilities() : Vulnerabilities
    {
        return $this->vulnerabilities;
    }
    /**
     * 
     *
     * @param Vulnerabilities $vulnerabilities
     *
     * @return self
     */
    public function setVulnerabilities(Vulnerabilities $vulnerabilities) : self
    {
        $this->vulnerabilities = $vulnerabilities;
        return $this;
    }
}