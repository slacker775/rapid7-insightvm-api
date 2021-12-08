<?php

namespace Rapid7\InsightVM\Api\Model;

class EnginePool
{
    /**
     * The identifiers of the scan engines in the engine pool.
     *
     * @var int[]
     */
    protected $engines;
    /**
     * The identifier of the scan engine.
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The name of the scan engine.
     *
     * @var string
     */
    protected $name;
    /**
     * The identifiers of the scan engines in the engine pool.
     *
     * @return int[]
     */
    public function getEngines() : array
    {
        return $this->engines;
    }
    /**
     * The identifiers of the scan engines in the engine pool.
     *
     * @param int[] $engines
     *
     * @return self
     */
    public function setEngines(array $engines) : self
    {
        $this->engines = $engines;
        return $this;
    }
    /**
     * The identifier of the scan engine.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the scan engine.
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
     * The name of the scan engine.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the scan engine.
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
}