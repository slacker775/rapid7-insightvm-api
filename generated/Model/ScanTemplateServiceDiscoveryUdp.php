<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateServiceDiscoveryUdp
{
    /**
     * Additional UDP ports to scan. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @var ScanTemplateServiceDiscoveryUdpAdditionalPortsItem[]
     */
    protected $additionalPorts;
    /**
     * UDP ports to exclude from scanning. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @var ScanTemplateServiceDiscoveryUdpExcludedPortsItem[]
     */
    protected $excludedPorts;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The UDP ports to scan. Defaults to `well-known`.
     *
     * @var string
     */
    protected $ports;
    /**
     * Additional UDP ports to scan. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @return ScanTemplateServiceDiscoveryUdpAdditionalPortsItem[]
     */
    public function getAdditionalPorts() : array
    {
        return $this->additionalPorts;
    }
    /**
     * Additional UDP ports to scan. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @param ScanTemplateServiceDiscoveryUdpAdditionalPortsItem[] $additionalPorts
     *
     * @return self
     */
    public function setAdditionalPorts(array $additionalPorts) : self
    {
        $this->additionalPorts = $additionalPorts;
        return $this;
    }
    /**
     * UDP ports to exclude from scanning. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @return ScanTemplateServiceDiscoveryUdpExcludedPortsItem[]
     */
    public function getExcludedPorts() : array
    {
        return $this->excludedPorts;
    }
    /**
     * UDP ports to exclude from scanning. Individual ports can be specified as numbers or a string, but port ranges must be strings (e.g. `"7892-7898"`). Defaults to empty.
     *
     * @param ScanTemplateServiceDiscoveryUdpExcludedPortsItem[] $excludedPorts
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
     * The UDP ports to scan. Defaults to `well-known`.
     *
     * @return string
     */
    public function getPorts() : string
    {
        return $this->ports;
    }
    /**
     * The UDP ports to scan. Defaults to `well-known`.
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