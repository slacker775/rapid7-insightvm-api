<?php

namespace Rapid7\InsightVM\Api\Model;

class LicenseLimits
{
    /**
     * The maximum number of assets that can be assessed.
     *
     * @var int
     */
    protected $assets;
    /**
     * The maximum number of assets that may be scanned with the hosted scan engine.
     *
     * @var int
     */
    protected $assetsWithHostedEngine;
    /**
     * The maximum number of scan engines that may be used.
     *
     * @var int
     */
    protected $scanEngines;
    /**
     * The maximum number of users allowed.
     *
     * @var int
     */
    protected $users;
    /**
     * The maximum number of assets that can be assessed.
     *
     * @return int
     */
    public function getAssets() : int
    {
        return $this->assets;
    }
    /**
     * The maximum number of assets that can be assessed.
     *
     * @param int $assets
     *
     * @return self
     */
    public function setAssets(int $assets) : self
    {
        $this->assets = $assets;
        return $this;
    }
    /**
     * The maximum number of assets that may be scanned with the hosted scan engine.
     *
     * @return int
     */
    public function getAssetsWithHostedEngine() : int
    {
        return $this->assetsWithHostedEngine;
    }
    /**
     * The maximum number of assets that may be scanned with the hosted scan engine.
     *
     * @param int $assetsWithHostedEngine
     *
     * @return self
     */
    public function setAssetsWithHostedEngine(int $assetsWithHostedEngine) : self
    {
        $this->assetsWithHostedEngine = $assetsWithHostedEngine;
        return $this;
    }
    /**
     * The maximum number of scan engines that may be used.
     *
     * @return int
     */
    public function getScanEngines() : int
    {
        return $this->scanEngines;
    }
    /**
     * The maximum number of scan engines that may be used.
     *
     * @param int $scanEngines
     *
     * @return self
     */
    public function setScanEngines(int $scanEngines) : self
    {
        $this->scanEngines = $scanEngines;
        return $this;
    }
    /**
     * The maximum number of users allowed.
     *
     * @return int
     */
    public function getUsers() : int
    {
        return $this->users;
    }
    /**
     * The maximum number of users allowed.
     *
     * @param int $users
     *
     * @return self
     */
    public function setUsers(int $users) : self
    {
        $this->users = $users;
        return $this;
    }
}