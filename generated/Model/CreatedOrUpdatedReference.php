<?php

namespace Rapid7\InsightVM\Api\Model;

class CreatedOrUpdatedReference
{
    /**
     * The identifier of the resource created or updated.
     *
     * @var CreatedOrUpdatedReferenceId
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The identifier of the resource created or updated.
     *
     * @return CreatedOrUpdatedReferenceId
     */
    public function getId() : CreatedOrUpdatedReferenceId
    {
        return $this->id;
    }
    /**
     * The identifier of the resource created or updated.
     *
     * @param CreatedOrUpdatedReferenceId $id
     *
     * @return self
     */
    public function setId(CreatedOrUpdatedReferenceId $id) : self
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