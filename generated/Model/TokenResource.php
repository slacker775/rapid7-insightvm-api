<?php

namespace Rapid7\InsightVM\Api\Model;

class TokenResource
{
    /**
     * The two-factor authentication token seed (key).
     *
     * @var string
     */
    protected $key;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The two-factor authentication token seed (key).
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * The two-factor authentication token seed (key).
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
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
}