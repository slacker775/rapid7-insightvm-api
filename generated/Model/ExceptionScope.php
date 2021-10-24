<?php

namespace Rapid7\InsightVM\Api\Model;

class ExceptionScope
{
    /**
     * The identifier of the vulnerability to which the exception applies.
     *
     * @var int
     */
    protected $id;
    /**
     * If the scope type is `"Instance"`, an optional key to discriminate the instance the exception applies to.
     *
     * @var string
     */
    protected $key;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * If the scope type is `"Instance"` and the vulnerability is detected on a service, the port on which the exception applies.
     *
     * @var int
     */
    protected $port;
    /**
     * The type of the exception scope. One of: `"Global"`, `"Site"`, `"Asset"`, `"Asset Group"`, `"Instance"`
     *
     * @var string
     */
    protected $type;
    /**
     * The identifier of the vulnerability to which the exception applies.
     *
     * @var string
     */
    protected $vulnerability;
    /**
     * The identifier of the vulnerability to which the exception applies.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the vulnerability to which the exception applies.
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
     * If the scope type is `"Instance"`, an optional key to discriminate the instance the exception applies to.
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * If the scope type is `"Instance"`, an optional key to discriminate the instance the exception applies to.
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
     * If the scope type is `"Instance"` and the vulnerability is detected on a service, the port on which the exception applies.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * If the scope type is `"Instance"` and the vulnerability is detected on a service, the port on which the exception applies.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->port = $port;
        return $this;
    }
    /**
     * The type of the exception scope. One of: `"Global"`, `"Site"`, `"Asset"`, `"Asset Group"`, `"Instance"`
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the exception scope. One of: `"Global"`, `"Site"`, `"Asset"`, `"Asset Group"`, `"Instance"`
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
    /**
     * The identifier of the vulnerability to which the exception applies.
     *
     * @return string
     */
    public function getVulnerability() : string
    {
        return $this->vulnerability;
    }
    /**
     * The identifier of the vulnerability to which the exception applies.
     *
     * @param string $vulnerability
     *
     * @return self
     */
    public function setVulnerability(string $vulnerability) : self
    {
        $this->vulnerability = $vulnerability;
        return $this;
    }
}