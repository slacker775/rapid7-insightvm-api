<?php

namespace Rapid7\InsightVM\Api\Model;

class Database
{
    /**
     * The description of the database instance.
     *
     * @var string
     */
    protected $description;
    /**
     * The identifier of the database.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the database instance.
     *
     * @var string
     */
    protected $name;
    /**
     * The description of the database instance.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the database instance.
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
     * The identifier of the database.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the database.
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
     * The name of the database instance.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the database instance.
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