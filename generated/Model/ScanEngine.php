<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanEngine
{
    /**
     * The address the scan engine is hosted.
     *
     * @var string
     */
    protected $address;
    /**
     * The content version of the scan engine.
     *
     * @var string
     */
    protected $contentVersion;
    /**
     * A list of identifiers of engine pools this engine is included in.
     *
     * @var int[]
     */
    protected $enginePools;
    /**
     * The identifier of the scan engine.
     *
     * @var int
     */
    protected $id;
    /**
     * The date the engine was last refreshed. Date format is in ISO 8601.
     *
     * @var string
     */
    protected $lastRefreshedDate;
    /**
     * The date the engine was last updated. Date format is in ISO 8601.
     *
     * @var string
     */
    protected $lastUpdatedDate;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The name of the scan engine.
     *
     * @var string
     */
    protected $name;
    /**
     * The port used by the scan engine to communicate with the Security Console.
     *
     * @var int
     */
    protected $port;
    /**
     * The product version of the scan engine.
     *
     * @var string
     */
    protected $productVersion;
    /**
     * A list of identifiers of each site the scan engine is assigned to.
     *
     * @var int[]
     */
    protected $sites;
    /**
     * The address the scan engine is hosted.
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * The address the scan engine is hosted.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * The content version of the scan engine.
     *
     * @return string
     */
    public function getContentVersion() : string
    {
        return $this->contentVersion;
    }
    /**
     * The content version of the scan engine.
     *
     * @param string $contentVersion
     *
     * @return self
     */
    public function setContentVersion(string $contentVersion) : self
    {
        $this->contentVersion = $contentVersion;
        return $this;
    }
    /**
     * A list of identifiers of engine pools this engine is included in.
     *
     * @return int[]
     */
    public function getEnginePools() : array
    {
        return $this->enginePools;
    }
    /**
     * A list of identifiers of engine pools this engine is included in.
     *
     * @param int[] $enginePools
     *
     * @return self
     */
    public function setEnginePools(array $enginePools) : self
    {
        $this->enginePools = $enginePools;
        return $this;
    }
    /**
     * The identifier of the scan engine.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the scan engine.
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
     * The date the engine was last refreshed. Date format is in ISO 8601.
     *
     * @return string
     */
    public function getLastRefreshedDate() : string
    {
        return $this->lastRefreshedDate;
    }
    /**
     * The date the engine was last refreshed. Date format is in ISO 8601.
     *
     * @param string $lastRefreshedDate
     *
     * @return self
     */
    public function setLastRefreshedDate(string $lastRefreshedDate) : self
    {
        $this->lastRefreshedDate = $lastRefreshedDate;
        return $this;
    }
    /**
     * The date the engine was last updated. Date format is in ISO 8601.
     *
     * @return string
     */
    public function getLastUpdatedDate() : string
    {
        return $this->lastUpdatedDate;
    }
    /**
     * The date the engine was last updated. Date format is in ISO 8601.
     *
     * @param string $lastUpdatedDate
     *
     * @return self
     */
    public function setLastUpdatedDate(string $lastUpdatedDate) : self
    {
        $this->lastUpdatedDate = $lastUpdatedDate;
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
     * The name of the scan engine.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the scan engine.
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
     * The port used by the scan engine to communicate with the Security Console.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The port used by the scan engine to communicate with the Security Console.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->port = $port;
        return $this;
    }
    /**
     * The product version of the scan engine.
     *
     * @return string
     */
    public function getProductVersion() : string
    {
        return $this->productVersion;
    }
    /**
     * The product version of the scan engine.
     *
     * @param string $productVersion
     *
     * @return self
     */
    public function setProductVersion(string $productVersion) : self
    {
        $this->productVersion = $productVersion;
        return $this;
    }
    /**
     * A list of identifiers of each site the scan engine is assigned to.
     *
     * @return int[]
     */
    public function getSites() : array
    {
        return $this->sites;
    }
    /**
     * A list of identifiers of each site the scan engine is assigned to.
     *
     * @param int[] $sites
     *
     * @return self
     */
    public function setSites(array $sites) : self
    {
        $this->sites = $sites;
        return $this;
    }
}