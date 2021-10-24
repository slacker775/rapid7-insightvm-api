<?php

namespace Rapid7\InsightVM\Api\Model;

class ExcludedScanTargets
{
    /**
     * List of addresses. Each address is a string that can represent either a hostname, ipv4 address, ipv4 address range, ipv6 address, or CIDR notation.
     *
     * @var string[]
     */
    protected $addresses;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * List of addresses. Each address is a string that can represent either a hostname, ipv4 address, ipv4 address range, ipv6 address, or CIDR notation.
     *
     * @return string[]
     */
    public function getAddresses() : array
    {
        return $this->addresses;
    }
    /**
     * List of addresses. Each address is a string that can represent either a hostname, ipv4 address, ipv4 address range, ipv6 address, or CIDR notation.
     *
     * @param string[] $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses) : self
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * 
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * 
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
}