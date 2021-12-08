<?php

namespace Rapid7\InsightVM\Api\Model;

class Scan
{
    /**
     * The number of assets found in the scan.
     *
     * @var int
     */
    protected $assets;
    /**
     * The duration of the scan in ISO8601 format.
     *
     * @var string
     */
    protected $duration;
    /**
     * The end time of the scan in ISO8601 format.
     *
     * @var string
     */
    protected $endTime;
    /**
     * The identifier of the scan engine.
     *
     * @var int
     */
    protected $engineId;
    /**
     * The name of the scan engine.
     *
     * @var string
     */
    protected $engineName;
    /**
     * The identifier of the scan.
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
     * The reason for the scan status.
     *
     * @var string
     */
    protected $message;
    /**
     * The user-driven scan name for the scan.
     *
     * @var string
     */
    protected $scanName;
    /**
     * The scan type (automated, manual, scheduled). 
     *
     * @var string
     */
    protected $scanType;
    /**
     * The start time of the scan in ISO8601 format.
     *
     * @var string
     */
    protected $startTime;
    /**
     * The name of the user that started the scan.
     *
     * @var string
     */
    protected $startedBy;
    /**
     * The scan status.
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var Vulnerabilities
     */
    protected $vulnerabilities;
    /**
     * The number of assets found in the scan.
     *
     * @return int
     */
    public function getAssets() : int
    {
        return $this->assets;
    }
    /**
     * The number of assets found in the scan.
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
     * The duration of the scan in ISO8601 format.
     *
     * @return string
     */
    public function getDuration() : string
    {
        return $this->duration;
    }
    /**
     * The duration of the scan in ISO8601 format.
     *
     * @param string $duration
     *
     * @return self
     */
    public function setDuration(string $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * The end time of the scan in ISO8601 format.
     *
     * @return string
     */
    public function getEndTime() : string
    {
        return $this->endTime;
    }
    /**
     * The end time of the scan in ISO8601 format.
     *
     * @param string $endTime
     *
     * @return self
     */
    public function setEndTime(string $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
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
     * The name of the scan engine.
     *
     * @return string
     */
    public function getEngineName() : string
    {
        return $this->engineName;
    }
    /**
     * The name of the scan engine.
     *
     * @param string $engineName
     *
     * @return self
     */
    public function setEngineName(string $engineName) : self
    {
        $this->engineName = $engineName;
        return $this;
    }
    /**
     * The identifier of the scan.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the scan.
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
     * The reason for the scan status.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * The reason for the scan status.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * The user-driven scan name for the scan.
     *
     * @return string
     */
    public function getScanName() : string
    {
        return $this->scanName;
    }
    /**
     * The user-driven scan name for the scan.
     *
     * @param string $scanName
     *
     * @return self
     */
    public function setScanName(string $scanName) : self
    {
        $this->scanName = $scanName;
        return $this;
    }
    /**
     * The scan type (automated, manual, scheduled). 
     *
     * @return string
     */
    public function getScanType() : string
    {
        return $this->scanType;
    }
    /**
     * The scan type (automated, manual, scheduled). 
     *
     * @param string $scanType
     *
     * @return self
     */
    public function setScanType(string $scanType) : self
    {
        $this->scanType = $scanType;
        return $this;
    }
    /**
     * The start time of the scan in ISO8601 format.
     *
     * @return string
     */
    public function getStartTime() : string
    {
        return $this->startTime;
    }
    /**
     * The start time of the scan in ISO8601 format.
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
     * The name of the user that started the scan.
     *
     * @return string
     */
    public function getStartedBy() : string
    {
        return $this->startedBy;
    }
    /**
     * The name of the user that started the scan.
     *
     * @param string $startedBy
     *
     * @return self
     */
    public function setStartedBy(string $startedBy) : self
    {
        $this->startedBy = $startedBy;
        return $this;
    }
    /**
     * The scan status.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The scan status.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
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