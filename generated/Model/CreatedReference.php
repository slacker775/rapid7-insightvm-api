<?php

namespace Rapid7\InsightVM\Api\Model;

class CreatedReference
{
    /**
     * The identifier of the resource created.
     *
     * @var CreatedReferenceId
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The identifier of the resource created.
     *
     * @return CreatedReferenceId
     */
    public function getId() : CreatedReferenceId
    {
        return $this->id;
    }
    /**
     * The identifier of the resource created.
     *
     * @param CreatedReferenceId $id
     *
     * @return self
     */
    public function setId(CreatedReferenceId $id) : self
    {
        $this->id = $id;
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