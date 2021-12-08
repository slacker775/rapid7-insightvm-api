<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanScope
{
    /**
     * 
     *
     * @var StaticSite
     */
    protected $assets;
    /**
     * 
     *
     * @var DynamicSite
     */
    protected $connection;
    /**
     * 
     *
     * @return StaticSite
     */
    public function getAssets() : StaticSite
    {
        return $this->assets;
    }
    /**
     * 
     *
     * @param StaticSite $assets
     *
     * @return self
     */
    public function setAssets(StaticSite $assets) : self
    {
        $this->assets = $assets;
        return $this;
    }
    /**
     * 
     *
     * @return DynamicSite
     */
    public function getConnection() : DynamicSite
    {
        return $this->connection;
    }
    /**
     * 
     *
     * @param DynamicSite $connection
     *
     * @return self
     */
    public function setConnection(DynamicSite $connection) : self
    {
        $this->connection = $connection;
        return $this;
    }
}