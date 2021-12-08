<?php

namespace Rapid7\InsightVM\Api\Model;

class UserAccount
{
    /**
     * The full name of the user account.
     *
     * @var string
     */
    protected $fullName;
    /**
     * The identifier of the user account.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the user account.
     *
     * @var string
     */
    protected $name;
    /**
     * The full name of the user account.
     *
     * @return string
     */
    public function getFullName() : string
    {
        return $this->fullName;
    }
    /**
     * The full name of the user account.
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName) : self
    {
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * The identifier of the user account.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the user account.
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
     * The name of the user account.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the user account.
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