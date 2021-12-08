<?php

namespace Rapid7\InsightVM\Api\Model;

class Privileges
{
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * 
     *
     * @var string[]
     */
    protected $resources;
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
    /**
     * 
     *
     * @return string[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
    /**
     * 
     *
     * @param string[] $resources
     *
     * @return self
     */
    public function setResources(array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
}