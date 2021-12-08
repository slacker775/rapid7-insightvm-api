<?php

namespace Rapid7\InsightVM\Api\Model;

class DynamicSite
{
    /**
     * The identifier of the discovery connection.
     *
     * @var int
     */
    protected $id;
    /**
     * The identifier of the discovery connection.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the discovery connection.
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
}