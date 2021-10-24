<?php

namespace Rapid7\InsightVM\Api\Model;

class UniqueId
{
    /**
     * The unique identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * The source of the unique identifier.
     *
     * @var string
     */
    protected $source;
    /**
     * The unique identifier.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique identifier.
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
     * The source of the unique identifier.
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * The source of the unique identifier.
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
}