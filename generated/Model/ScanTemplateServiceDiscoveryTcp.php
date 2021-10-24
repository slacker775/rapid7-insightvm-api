<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateServiceDiscoveryTcp
{
    /**
     * Additional TCP ports to scan. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @var ScanTemplateServiceDiscoveryTcpAdditionalPortsItem[]
     */
    protected $additionalPorts;
    /**
     * TCP ports to exclude from scanning. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @var ScanTemplateServiceDiscoveryTcpExcludedPortsItem[]
     */
    protected $excludedPorts;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The method of TCP discovery. Defaults to `SYN`.
     *
     * @var string
     */
    protected $method;
    /**
     * The TCP ports to scan. Defaults to `well-known`.
     *
     * @var string
     */
    protected $ports;
    /**
     * Additional TCP ports to scan. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @return ScanTemplateServiceDiscoveryTcpAdditionalPortsItem[]
     */
    public function getAdditionalPorts() : array
    {
        return $this->additionalPorts;
    }
    /**
     * Additional TCP ports to scan. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @param ScanTemplateServiceDiscoveryTcpAdditionalPortsItem[] $additionalPorts
     *
     * @return self
     */
    public function setAdditionalPorts(array $additionalPorts) : self
    {
        $this->additionalPorts = $additionalPorts;
        return $this;
    }
    /**
     * TCP ports to exclude from scanning. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @return ScanTemplateServiceDiscoveryTcpExcludedPortsItem[]
     */
    public function getExcludedPorts() : array
    {
        return $this->excludedPorts;
    }
    /**
     * TCP ports to exclude from scanning. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @param ScanTemplateServiceDiscoveryTcpExcludedPortsItem[] $excludedPorts
     *
     * @return self
     */
    public function setExcludedPorts(array $excludedPorts) : self
    {
        $this->excludedPorts = $excludedPorts;
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
     * The method of TCP discovery. Defaults to `SYN`.
     *
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }
    /**
     * The method of TCP discovery. Defaults to `SYN`.
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method) : self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * The TCP ports to scan. Defaults to `well-known`.
     *
     * @return string
     */
    public function getPorts() : string
    {
        return $this->ports;
    }
    /**
     * The TCP ports to scan. Defaults to `well-known`.
     *
     * @param string $ports
     *
     * @return self
     */
    public function setPorts(string $ports) : self
    {
        $this->ports = $ports;
        return $this;
    }
}