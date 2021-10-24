<?php

namespace Rapid7\InsightVM\Api\Model;

class AssetGroup
{
    /**
     * The number of assets that belong to the asset group.
     *
     * @var int
     */
    protected $assets;
    /**
     * The description of the asset group.
     *
     * @var string
     */
    protected $description;
    /**
     * The identifier of the asset group.
     *
     * @var int
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The name of the asset group.
     *
     * @var string
     */
    protected $name;
    /**
     * The total risk score of all assets that belong to the asset group.
     *
     * @var float
     */
    protected $riskScore;
    /**
     * 
     *
     * @var SearchCriteria
     */
    protected $searchCriteria;
    /**
     * The type of the asset group.
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
     * The number of assets that belong to the asset group.
     *
     * @return int
     */
    public function getAssets() : int
    {
        return $this->assets;
    }
    /**
     * The number of assets that belong to the asset group.
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
     * The description of the asset group.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the asset group.
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
     * The identifier of the asset group.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the asset group.
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
     * The name of the asset group.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the asset group.
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
     * The total risk score of all assets that belong to the asset group.
     *
     * @return float
     */
    public function getRiskScore() : float
    {
        return $this->riskScore;
    }
    /**
     * The total risk score of all assets that belong to the asset group.
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
     * 
     *
     * @return SearchCriteria
     */
    public function getSearchCriteria() : SearchCriteria
    {
        return $this->searchCriteria;
    }
    /**
     * 
     *
     * @param SearchCriteria $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(SearchCriteria $searchCriteria) : self
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
    /**
     * The type of the asset group.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the asset group.
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