<?php

namespace Rapid7\InsightVM\Api\Model;

class Service
{
    /**
     * Configuration key-values pairs enumerated on the service.
     *
     * @var Configuration[]
     */
    protected $configurations;
    /**
     * The databases enumerated on the service.
     *
     * @var Database[]
     */
    protected $databases;
    /**
     * The family of the service.
     *
     * @var string
     */
    protected $family;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The name of the service.
     *
     * @var string
     */
    protected $name;
    /**
     * The port of the service.
     *
     * @var int
     */
    protected $port;
    /**
     * The product running the service.
     *
     * @var string
     */
    protected $product;
    /**
     * The protocol of the service.
     *
     * @var string
     */
    protected $protocol;
    /**
     * The group accounts enumerated on the service.
     *
     * @var GroupAccount[]
     */
    protected $userGroups;
    /**
     * The user accounts enumerated on the service.
     *
     * @var UserAccount[]
     */
    protected $users;
    /**
     * The vendor of the service.
     *
     * @var string
     */
    protected $vendor;
    /**
     * The version of the service.
     *
     * @var string
     */
    protected $version;
    /**
     * The web applications found on the service.
     *
     * @var WebApplication[]
     */
    protected $webApplications;
    /**
     * Configuration key-values pairs enumerated on the service.
     *
     * @return Configuration[]
     */
    public function getConfigurations() : array
    {
        return $this->configurations;
    }
    /**
     * Configuration key-values pairs enumerated on the service.
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
     * The databases enumerated on the service.
     *
     * @return Database[]
     */
    public function getDatabases() : array
    {
        return $this->databases;
    }
    /**
     * The databases enumerated on the service.
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
     * The family of the service.
     *
     * @return string
     */
    public function getFamily() : string
    {
        return $this->family;
    }
    /**
     * The family of the service.
     *
     * @param string $family
     *
     * @return self
     */
    public function setFamily(string $family) : self
    {
        $this->family = $family;
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
     * The name of the service.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the service.
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
     * The port of the service.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The port of the service.
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
     * The product running the service.
     *
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }
    /**
     * The product running the service.
     *
     * @param string $product
     *
     * @return self
     */
    public function setProduct(string $product) : self
    {
        $this->product = $product;
        return $this;
    }
    /**
     * The protocol of the service.
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * The protocol of the service.
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol) : self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * The group accounts enumerated on the service.
     *
     * @return GroupAccount[]
     */
    public function getUserGroups() : array
    {
        return $this->userGroups;
    }
    /**
     * The group accounts enumerated on the service.
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
     * The user accounts enumerated on the service.
     *
     * @return UserAccount[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * The user accounts enumerated on the service.
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
     * The vendor of the service.
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * The vendor of the service.
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(string $vendor) : self
    {
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * The version of the service.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the service.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * The web applications found on the service.
     *
     * @return WebApplication[]
     */
    public function getWebApplications() : array
    {
        return $this->webApplications;
    }
    /**
     * The web applications found on the service.
     *
     * @param WebApplication[] $webApplications
     *
     * @return self
     */
    public function setWebApplications(array $webApplications) : self
    {
        $this->webApplications = $webApplications;
        return $this;
    }
}