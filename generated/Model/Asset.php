<?php

namespace Rapid7\InsightVM\Api\Model;

class Asset
{
    /**
     * All addresses discovered on the asset.
     *
     * @var Address[]
     */
    protected $addresses;
    /**
     * Whether the asset has been assessed for policies at least once.
     *
     * @var bool
     */
    protected $assessedForPolicies;
    /**
     * Whether the asset has been assessed for vulnerabilities at least once.
     *
     * @var bool
     */
    protected $assessedForVulnerabilities;
    /**
     * Configuration key-values pairs enumerated on the asset.
     *
     * @var Configuration[]
     */
    protected $configurations;
    /**
     * The databases enumerated on the asset.
     *
     * @var Database[]
     */
    protected $databases;
    /**
     * The files discovered with searching on the asset.
     *
     * @var File[]
     */
    protected $files;
    /**
     * The history of changes to the asset over time.
     *
     * @var AssetHistory[]
     */
    protected $history;
    /**
     * The primary host name (local or FQDN) of the asset.
     *
     * @var string
     */
    protected $hostName;
    /**
     * All host names or aliases discovered on the asset.
     *
     * @var HostName[]
     */
    protected $hostNames;
    /**
     * The identifier of the asset.
     *
     * @var int
     */
    protected $id;
    /**
     * Unique identifiers found on the asset, such as hardware or operating system identifiers.
     *
     * @var UniqueId[]
     */
    protected $ids;
    /**
     * The primary IPv4 or IPv6 address of the asset.
     *
     * @var string
     */
    protected $ip;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The primary Media Access Control (MAC) address of the asset. The format is six groups of two hexadecimal digits separated by colons.
     *
     * @var string
     */
    protected $mac;
    /**
     * The full description of the operating system of the asset.
     *
     * @var string
     */
    protected $os;
    /**
     * 
     *
     * @var OperatingSystem
     */
    protected $osFingerprint;
    /**
     * The base risk score of the asset.
     *
     * @var float
     */
    protected $rawRiskScore;
    /**
     * The risk score (with criticality adjustments) of the asset.
     *
     * @var float
     */
    protected $riskScore;
    /**
     * The services discovered on the asset.
     *
     * @var Service[]
     */
    protected $services;
    /**
     * The software discovered on the asset.
     *
     * @var Software[]
     */
    protected $software;
    /**
     * The type of asset.
     *
     * @var string
     */
    protected $type;
    /**
     * The group accounts enumerated on the asset.
     *
     * @var GroupAccount[]
     */
    protected $userGroups;
    /**
     * The user accounts enumerated on the asset.
     *
     * @var UserAccount[]
     */
    protected $users;
    /**
     * 
     *
     * @var AssetVulnerabilities
     */
    protected $vulnerabilities;
    /**
     * All addresses discovered on the asset.
     *
     * @return Address[]
     */
    public function getAddresses() : array
    {
        return $this->addresses;
    }
    /**
     * All addresses discovered on the asset.
     *
     * @param Address[] $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses) : self
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Whether the asset has been assessed for policies at least once.
     *
     * @return bool
     */
    public function getAssessedForPolicies() : bool
    {
        return $this->assessedForPolicies;
    }
    /**
     * Whether the asset has been assessed for policies at least once.
     *
     * @param bool $assessedForPolicies
     *
     * @return self
     */
    public function setAssessedForPolicies(bool $assessedForPolicies) : self
    {
        $this->assessedForPolicies = $assessedForPolicies;
        return $this;
    }
    /**
     * Whether the asset has been assessed for vulnerabilities at least once.
     *
     * @return bool
     */
    public function getAssessedForVulnerabilities() : bool
    {
        return $this->assessedForVulnerabilities;
    }
    /**
     * Whether the asset has been assessed for vulnerabilities at least once.
     *
     * @param bool $assessedForVulnerabilities
     *
     * @return self
     */
    public function setAssessedForVulnerabilities(bool $assessedForVulnerabilities) : self
    {
        $this->assessedForVulnerabilities = $assessedForVulnerabilities;
        return $this;
    }
    /**
     * Configuration key-values pairs enumerated on the asset.
     *
     * @return Configuration[]
     */
    public function getConfigurations() : array
    {
        return $this->configurations;
    }
    /**
     * Configuration key-values pairs enumerated on the asset.
     *
     * @param Configuration[] $configurations
     *
     * @return self
     */
    public function setConfigurations(array $configurations) : self
    {
        $this->configurations = $configurations;
        return $this;
    }
    /**
     * The databases enumerated on the asset.
     *
     * @return Database[]
     */
    public function getDatabases() : array
    {
        return $this->databases;
    }
    /**
     * The databases enumerated on the asset.
     *
     * @param Database[] $databases
     *
     * @return self
     */
    public function setDatabases(array $databases) : self
    {
        $this->databases = $databases;
        return $this;
    }
    /**
     * The files discovered with searching on the asset.
     *
     * @return File[]
     */
    public function getFiles() : array
    {
        return $this->files;
    }
    /**
     * The files discovered with searching on the asset.
     *
     * @param File[] $files
     *
     * @return self
     */
    public function setFiles(array $files) : self
    {
        $this->files = $files;
        return $this;
    }
    /**
     * The history of changes to the asset over time.
     *
     * @return AssetHistory[]
     */
    public function getHistory() : array
    {
        return $this->history;
    }
    /**
     * The history of changes to the asset over time.
     *
     * @param AssetHistory[] $history
     *
     * @return self
     */
    public function setHistory(array $history) : self
    {
        $this->history = $history;
        return $this;
    }
    /**
     * The primary host name (local or FQDN) of the asset.
     *
     * @return string
     */
    public function getHostName() : string
    {
        return $this->hostName;
    }
    /**
     * The primary host name (local or FQDN) of the asset.
     *
     * @param string $hostName
     *
     * @return self
     */
    public function setHostName(string $hostName) : self
    {
        $this->hostName = $hostName;
        return $this;
    }
    /**
     * All host names or aliases discovered on the asset.
     *
     * @return HostName[]
     */
    public function getHostNames() : array
    {
        return $this->hostNames;
    }
    /**
     * All host names or aliases discovered on the asset.
     *
     * @param HostName[] $hostNames
     *
     * @return self
     */
    public function setHostNames(array $hostNames) : self
    {
        $this->hostNames = $hostNames;
        return $this;
    }
    /**
     * The identifier of the asset.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the asset.
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
     * Unique identifiers found on the asset, such as hardware or operating system identifiers.
     *
     * @return UniqueId[]
     */
    public function getIds() : array
    {
        return $this->ids;
    }
    /**
     * Unique identifiers found on the asset, such as hardware or operating system identifiers.
     *
     * @param UniqueId[] $ids
     *
     * @return self
     */
    public function setIds(array $ids) : self
    {
        $this->ids = $ids;
        return $this;
    }
    /**
     * The primary IPv4 or IPv6 address of the asset.
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * The primary IPv4 or IPv6 address of the asset.
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip) : self
    {
        $this->ip = $ip;
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
     * The primary Media Access Control (MAC) address of the asset. The format is six groups of two hexadecimal digits separated by colons.
     *
     * @return string
     */
    public function getMac() : string
    {
        return $this->mac;
    }
    /**
     * The primary Media Access Control (MAC) address of the asset. The format is six groups of two hexadecimal digits separated by colons.
     *
     * @param string $mac
     *
     * @return self
     */
    public function setMac(string $mac) : self
    {
        $this->mac = $mac;
        return $this;
    }
    /**
     * The full description of the operating system of the asset.
     *
     * @return string
     */
    public function getOs() : string
    {
        return $this->os;
    }
    /**
     * The full description of the operating system of the asset.
     *
     * @param string $os
     *
     * @return self
     */
    public function setOs(string $os) : self
    {
        $this->os = $os;
        return $this;
    }
    /**
     * 
     *
     * @return OperatingSystem
     */
    public function getOsFingerprint() : OperatingSystem
    {
        return $this->osFingerprint;
    }
    /**
     * 
     *
     * @param OperatingSystem $osFingerprint
     *
     * @return self
     */
    public function setOsFingerprint(OperatingSystem $osFingerprint) : self
    {
        $this->osFingerprint = $osFingerprint;
        return $this;
    }
    /**
     * The base risk score of the asset.
     *
     * @return float
     */
    public function getRawRiskScore() : float
    {
        return $this->rawRiskScore;
    }
    /**
     * The base risk score of the asset.
     *
     * @param float $rawRiskScore
     *
     * @return self
     */
    public function setRawRiskScore(float $rawRiskScore) : self
    {
        $this->rawRiskScore = $rawRiskScore;
        return $this;
    }
    /**
     * The risk score (with criticality adjustments) of the asset.
     *
     * @return float
     */
    public function getRiskScore() : float
    {
        return $this->riskScore;
    }
    /**
     * The risk score (with criticality adjustments) of the asset.
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
     * The services discovered on the asset.
     *
     * @return Service[]
     */
    public function getServices() : array
    {
        return $this->services;
    }
    /**
     * The services discovered on the asset.
     *
     * @param Service[] $services
     *
     * @return self
     */
    public function setServices(array $services) : self
    {
        $this->services = $services;
        return $this;
    }
    /**
     * The software discovered on the asset.
     *
     * @return Software[]
     */
    public function getSoftware() : array
    {
        return $this->software;
    }
    /**
     * The software discovered on the asset.
     *
     * @param Software[] $software
     *
     * @return self
     */
    public function setSoftware(array $software) : self
    {
        $this->software = $software;
        return $this;
    }
    /**
     * The type of asset.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of asset.
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
     * The group accounts enumerated on the asset.
     *
     * @return GroupAccount[]
     */
    public function getUserGroups() : array
    {
        return $this->userGroups;
    }
    /**
     * The group accounts enumerated on the asset.
     *
     * @param GroupAccount[] $userGroups
     *
     * @return self
     */
    public function setUserGroups(array $userGroups) : self
    {
        $this->userGroups = $userGroups;
        return $this;
    }
    /**
     * The user accounts enumerated on the asset.
     *
     * @return UserAccount[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * The user accounts enumerated on the asset.
     *
     * @param UserAccount[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->users = $users;
        return $this;
    }
    /**
     * 
     *
     * @return AssetVulnerabilities
     */
    public function getVulnerabilities() : AssetVulnerabilities
    {
        return $this->vulnerabilities;
    }
    /**
     * 
     *
     * @param AssetVulnerabilities $vulnerabilities
     *
     * @return self
     */
    public function setVulnerabilities(AssetVulnerabilities $vulnerabilities) : self
    {
        $this->vulnerabilities = $vulnerabilities;
        return $this;
    }
}