<?php

namespace Rapid7\InsightVM\Api\Model;

class DiscoveryAsset
{
    /**
     * The IP address of a discovered asset.
     *
     * @var string
     */
    protected $address;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The host name of a discovered asset.
     *
     * @var string
     */
    protected $name;
    /**
     * The IP address of a discovered asset.
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * The IP address of a discovered asset.
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
     * The host name of a discovered asset.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The host name of a discovered asset.
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
}