<?php

namespace Rapid7\InsightVM\Api\Model;

class ResourcesAssetTag
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The resources returned.
     *
     * @var AssetTag[]
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
     * The resources returned.
     *
     * @return AssetTag[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
    /**
     * The resources returned.
     *
     * @param AssetTag[] $resources
     *
     * @return self
     */
    public function setResources(array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
}