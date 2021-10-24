<?php

namespace Rapid7\InsightVM\Api\Model;

class PolicyAsset
{
    /**
     * The primary host name (local or FQDN) of the asset.
     *
     * @var string
     */
    protected $hostname;
    /**
     * The identifier of the asset.
     *
     * @var int
     */
    protected $id;
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
     * 
     *
     * @var OperatingSystem
     */
    protected $os;
    /**
     * The overall compliance status of the asset. 
     *
     * @var string
     */
    protected $status;
    /**
     * The primary host name (local or FQDN) of the asset.
     *
     * @return string
     */
    public function getHostname() : string
    {
        return $this->hostname;
    }
    /**
     * The primary host name (local or FQDN) of the asset.
     *
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname(string $hostname) : self
    {
        $this->hostname = $hostname;
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
     * 
     *
     * @return OperatingSystem
     */
    public function getOs() : OperatingSystem
    {
        return $this->os;
    }
    /**
     * 
     *
     * @param OperatingSystem $os
     *
     * @return self
     */
    public function setOs(OperatingSystem $os) : self
    {
        $this->os = $os;
        return $this;
    }
    /**
     * The overall compliance status of the asset. 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The overall compliance status of the asset. 
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
}