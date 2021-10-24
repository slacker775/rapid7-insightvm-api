<?php

namespace Rapid7\InsightVM\Api\Model;

class ReferencesWithReferenceWithEndpointIDLinkServiceLink
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var ServiceLink[]
     */
    protected $links;
    /**
     * The identifiers of the associated resources.
     *
     * @var ReferenceWithEndpointIDLink[]
     */
    protected $resources;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @return ServiceLink[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @param ServiceLink[] $links
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
     * @return ReferenceWithEndpointIDLink[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
    /**
     * The identifiers of the associated resources.
     *
     * @param ReferenceWithEndpointIDLink[] $resources
     *
     * @return self
     */
    public function setResources(array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
}