<?php

namespace Rapid7\InsightVM\Api\Model;

class Role
{
    /**
     * The description of the role.
     *
     * @var string
     */
    protected $description;
    /**
     * The identifier of the role.
     *
     * @var string
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The human readable name of the role.
     *
     * @var string
     */
    protected $name;
    /**
     * The privileges granted to the role.
     *
     * @var string[]
     */
    protected $privileges;
    /**
     * The description of the role.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the role.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * The identifier of the role.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The identifier of the role.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
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
    /**
     * The human readable name of the role.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The human readable name of the role.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The privileges granted to the role.
     *
     * @return string[]
     */
    public function getPrivileges() : array
    {
        return $this->privileges;
    }
    /**
     * The privileges granted to the role.
     *
     * @param string[] $privileges
     *
     * @return self
     */
    public function setPrivileges(array $privileges) : self
    {
        $this->privileges = $privileges;
        return $this;
    }
}