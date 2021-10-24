<?php

namespace Rapid7\InsightVM\Api\Model;

class Info
{
    /**
     * 
     *
     * @var CPUInfo
     */
    protected $cpu;
    /**
     * 
     *
     * @var DiskInfo
     */
    protected $disk;
    /**
     * The distinguished name of the console.
     *
     * @var string
     */
    protected $distinguishedName;
    /**
     * The fully-qualified domain name of the local host the service is running on.
     *
     * @var string
     */
    protected $fqdn;
    /**
     * The name of the local host the service is running on.
     *
     * @var string
     */
    protected $host;
    /**
     * The IP address of the local host the service is running on.
     *
     * @var string
     */
    protected $ip;
    /**
     * 
     *
     * @var JVMInfo
     */
    protected $jvm;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * 
     *
     * @var MemoryInfo
     */
    protected $memory;
    /**
     * The operating system of the host the service is running on.
     *
     * @var string
     */
    protected $operatingSystem;
    /**
     * The serial number of the console.
     *
     * @var string
     */
    protected $serial;
    /**
     * Whether the service is running a super-user.
     *
     * @var bool
     */
    protected $superuser;
    /**
     * The user running the service.
     *
     * @var string
     */
    protected $user;
    /**
     * 
     *
     * @var VersionInfo
     */
    protected $version;
    /**
     * 
     *
     * @return CPUInfo
     */
    public function getCpu() : CPUInfo
    {
        return $this->cpu;
    }
    /**
     * 
     *
     * @param CPUInfo $cpu
     *
     * @return self
     */
    public function setCpu(CPUInfo $cpu) : self
    {
        $this->cpu = $cpu;
        return $this;
    }
    /**
     * 
     *
     * @return DiskInfo
     */
    public function getDisk() : DiskInfo
    {
        return $this->disk;
    }
    /**
     * 
     *
     * @param DiskInfo $disk
     *
     * @return self
     */
    public function setDisk(DiskInfo $disk) : self
    {
        $this->disk = $disk;
        return $this;
    }
    /**
     * The distinguished name of the console.
     *
     * @return string
     */
    public function getDistinguishedName() : string
    {
        return $this->distinguishedName;
    }
    /**
     * The distinguished name of the console.
     *
     * @param string $distinguishedName
     *
     * @return self
     */
    public function setDistinguishedName(string $distinguishedName) : self
    {
        $this->distinguishedName = $distinguishedName;
        return $this;
    }
    /**
     * The fully-qualified domain name of the local host the service is running on.
     *
     * @return string
     */
    public function getFqdn() : string
    {
        return $this->fqdn;
    }
    /**
     * The fully-qualified domain name of the local host the service is running on.
     *
     * @param string $fqdn
     *
     * @return self
     */
    public function setFqdn(string $fqdn) : self
    {
        $this->fqdn = $fqdn;
        return $this;
    }
    /**
     * The name of the local host the service is running on.
     *
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }
    /**
     * The name of the local host the service is running on.
     *
     * @param string $host
     *
     * @return self
     */
    public function setHost(string $host) : self
    {
        $this->host = $host;
        return $this;
    }
    /**
     * The IP address of the local host the service is running on.
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * The IP address of the local host the service is running on.
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
     * 
     *
     * @return JVMInfo
     */
    public function getJvm() : JVMInfo
    {
        return $this->jvm;
    }
    /**
     * 
     *
     * @param JVMInfo $jvm
     *
     * @return self
     */
    public function setJvm(JVMInfo $jvm) : self
    {
        $this->jvm = $jvm;
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
     * @return MemoryInfo
     */
    public function getMemory() : MemoryInfo
    {
        return $this->memory;
    }
    /**
     * 
     *
     * @param MemoryInfo $memory
     *
     * @return self
     */
    public function setMemory(MemoryInfo $memory) : self
    {
        $this->memory = $memory;
        return $this;
    }
    /**
     * The operating system of the host the service is running on.
     *
     * @return string
     */
    public function getOperatingSystem() : string
    {
        return $this->operatingSystem;
    }
    /**
     * The operating system of the host the service is running on.
     *
     * @param string $operatingSystem
     *
     * @return self
     */
    public function setOperatingSystem(string $operatingSystem) : self
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }
    /**
     * The serial number of the console.
     *
     * @return string
     */
    public function getSerial() : string
    {
        return $this->serial;
    }
    /**
     * The serial number of the console.
     *
     * @param string $serial
     *
     * @return self
     */
    public function setSerial(string $serial) : self
    {
        $this->serial = $serial;
        return $this;
    }
    /**
     * Whether the service is running a super-user.
     *
     * @return bool
     */
    public function getSuperuser() : bool
    {
        return $this->superuser;
    }
    /**
     * Whether the service is running a super-user.
     *
     * @param bool $superuser
     *
     * @return self
     */
    public function setSuperuser(bool $superuser) : self
    {
        $this->superuser = $superuser;
        return $this;
    }
    /**
     * The user running the service.
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * The user running the service.
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return VersionInfo
     */
    public function getVersion() : VersionInfo
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param VersionInfo $version
     *
     * @return self
     */
    public function setVersion(VersionInfo $version) : self
    {
        $this->version = $version;
        return $this;
    }
}