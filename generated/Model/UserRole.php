<?php

namespace Rapid7\InsightVM\Api\Model;

class UserRole
{
    /**
     * Whether the user has access to all asset groups.
     *
     * @var bool
     */
    protected $allAssetGroups;
    /**
     * Whether the user has access to all sites.
     *
     * @var bool
     */
    protected $allSites;
    /**
     * The identifier of the role the user is assigned to.
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the role the user is assigned to.
     *
     * @var string
     */
    protected $name;
    /**
     * The privileges granted to the user by their role.
     *
     * @var string[]
     */
    protected $privileges;
    /**
     * Whether the user is a superuser.
     *
     * @var bool
     */
    protected $superuser;
    /**
     * Whether the user has access to all asset groups.
     *
     * @return bool
     */
    public function getAllAssetGroups() : bool
    {
        return $this->allAssetGroups;
    }
    /**
     * Whether the user has access to all asset groups.
     *
     * @param bool $allAssetGroups
     *
     * @return self
     */
    public function setAllAssetGroups(bool $allAssetGroups) : self
    {
        $this->allAssetGroups = $allAssetGroups;
        return $this;
    }
    /**
     * Whether the user has access to all sites.
     *
     * @return bool
     */
    public function getAllSites() : bool
    {
        return $this->allSites;
    }
    /**
     * Whether the user has access to all sites.
     *
     * @param bool $allSites
     *
     * @return self
     */
    public function setAllSites(bool $allSites) : self
    {
        $this->allSites = $allSites;
        return $this;
    }
    /**
     * The identifier of the role the user is assigned to.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The identifier of the role the user is assigned to.
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
     * The name of the role the user is assigned to.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the role the user is assigned to.
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
     * The privileges granted to the user by their role.
     *
     * @return string[]
     */
    public function getPrivileges() : array
    {
        return $this->privileges;
    }
    /**
     * The privileges granted to the user by their role.
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
    /**
     * Whether the user is a superuser.
     *
     * @return bool
     */
    public function getSuperuser() : bool
    {
        return $this->superuser;
    }
    /**
     * Whether the user is a superuser.
     *
     * @param bool $superuser
     *
     * @return self
     */
    public function setSuperuser(bool $superuser) : self
    {
        $this->superuser = $superuser;
        return $this;
    }
}