<?php

namespace Rapid7\InsightVM\Api\Model;

class PageOfSite
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * 
     *
     * @var PageInfo
     */
    protected $page;
    /**
     * The page of resources returned.
     *
     * @var Site[]
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
     * 
     *
     * @return PageInfo
     */
    public function getPage() : PageInfo
    {
        return $this->page;
    }
    /**
     * 
     *
     * @param PageInfo $page
     *
     * @return self
     */
    public function setPage(PageInfo $page) : self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * The page of resources returned.
     *
     * @return Site[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
    /**
     * The page of resources returned.
     *
     * @param Site[] $resources
     *
     * @return self
     */
    public function setResources(array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
}