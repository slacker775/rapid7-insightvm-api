<?php

namespace Rapid7\InsightVM\Api\Model;

class AuthenticationSource
{
    /**
     * Whether the authentication source is external (true) or internal (false).
     *
     * @var bool
     */
    protected $external;
    /**
     * The identifier of the authentication source.
     *
     * @var int
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The name of the authentication source.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of the authentication source.
     *
     * @var string
     */
    protected $type;
    /**
     * Whether the authentication source is external (true) or internal (false).
     *
     * @return bool
     */
    public function getExternal() : bool
    {
        return $this->external;
    }
    /**
     * Whether the authentication source is external (true) or internal (false).
     *
     * @param bool $external
     *
     * @return self
     */
    public function setExternal(bool $external) : self
    {
        $this->external = $external;
        return $this;
    }
    /**
     * The identifier of the authentication source.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the authentication source.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
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
     * The name of the authentication source.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the authentication source.
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
     * The type of the authentication source.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the authentication source.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}