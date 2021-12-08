<?php

namespace Rapid7\InsightVM\Api\Model;

class EnvironmentProperties
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * Key-value pairs for system and environment properties that are currently defined.
     *
     * @var EnvironmentPropertiesProperties
     */
    protected $properties;
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
     * Key-value pairs for system and environment properties that are currently defined.
     *
     * @return EnvironmentPropertiesProperties
     */
    public function getProperties() : EnvironmentPropertiesProperties
    {
        return $this->properties;
    }
    /**
     * Key-value pairs for system and environment properties that are currently defined.
     *
     * @param EnvironmentPropertiesProperties $properties
     *
     * @return self
     */
    public function setProperties(EnvironmentPropertiesProperties $properties) : self
    {
        $this->properties = $properties;
        return $this;
    }
}