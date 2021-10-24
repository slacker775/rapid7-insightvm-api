<?php

namespace Rapid7\InsightVM\Api\Model;

class UserCreateRole
{
    /**
     * Whether to grant the user access to all asset groups. Defaults to `false`.
     *
     * @var bool
     */
    protected $allAssetGroups;
    /**
     * Whether to grant the user access to all sites. Defaults to `false`.
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
     * Whether the user is a superuser. Defaults to `false`.
     *
     * @var bool
     */
    protected $superuser;
    /**
     * Whether to grant the user access to all asset groups. Defaults to `false`.
     *
     * @return bool
     */
    public function getAllAssetGroups() : bool
    {
        return $this->allAssetGroups;
    }
    /**
     * Whether to grant the user access to all asset groups. Defaults to `false`.
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
     * Whether to grant the user access to all sites. Defaults to `false`.
     *
     * @return bool
     */
    public function getAllSites() : bool
    {
        return $this->allSites;
    }
    /**
     * Whether to grant the user access to all sites. Defaults to `false`.
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
     * Whether the user is a superuser. Defaults to `false`.
     *
     * @return bool
     */
    public function getSuperuser() : bool
    {
        return $this->superuser;
    }
    /**
     * Whether the user is a superuser. Defaults to `false`.
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