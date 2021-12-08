<?php

namespace Rapid7\InsightVM\Api\Model;

class ReferencesWithWebApplicationIDLink
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The identifiers of the associated resources.
     *
     * @var int[]
     */
    protected $resources;
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
     * The identifiers of the associated resources.
     *
     * @return int[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
    /**
     * The identifiers of the associated resources.
     *
     * @param int[] $resources
     *
     * @return self
     */
    public function setResources(array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
}