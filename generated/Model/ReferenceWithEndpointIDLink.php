<?php

namespace Rapid7\InsightVM\Api\Model;

class ReferenceWithEndpointIDLink
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The port of the service.
     *
     * @var int
     */
    protected $port;
    /**
     * The protocol of the service.
     *
     * @var string
     */
    protected $protocol;
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
}