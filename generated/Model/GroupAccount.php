<?php

namespace Rapid7\InsightVM\Api\Model;

class GroupAccount
{
    /**
     * The identifier of the user group.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the user group.
     *
     * @var string
     */
    protected $name;
    /**
     * The identifier of the user group.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the user group.
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
     * The name of the user group.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the user group.
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