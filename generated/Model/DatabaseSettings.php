<?php

namespace Rapid7\InsightVM\Api\Model;

class DatabaseSettings
{
    /**
     * 
     *
     * @var DatabaseConnectionSettings
     */
    protected $connection;
    /**
     * The database host.
     *
     * @var string
     */
    protected $host;
    /**
     * The maximum number of parallel tasks when executing maintenance tasks.
     *
     * @var int
     */
    protected $maintenanceThreadPoolSize;
    /**
     * The database port.
     *
     * @var int
     */
    protected $port;
    /**
     * The database connection URL.
     *
     * @var string
     */
    protected $url;
    /**
     * The database user.
     *
     * @var string
     */
    protected $user;
    /**
     * The database vendor.
     *
     * @var string
     */
    protected $vendor;
    /**
     * 
     *
     * @return DatabaseConnectionSettings
     */
    public function getConnection() : DatabaseConnectionSettings
    {
        return $this->connection;
    }
    /**
     * 
     *
     * @param DatabaseConnectionSettings $connection
     *
     * @return self
     */
    public function setConnection(DatabaseConnectionSettings $connection) : self
    {
        $this->connection = $connection;
        return $this;
    }
    /**
     * The database host.
     *
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }
    /**
     * The database host.
     *
     * @param string $host
     *
     * @return self
     */
    public function setHost(string $host) : self
    {
        $this->host = $host;
        return $this;
    }
    /**
     * The maximum number of parallel tasks when executing maintenance tasks.
     *
     * @return int
     */
    public function getMaintenanceThreadPoolSize() : int
    {
        return $this->maintenanceThreadPoolSize;
    }
    /**
     * The maximum number of parallel tasks when executing maintenance tasks.
     *
     * @param int $maintenanceThreadPoolSize
     *
     * @return self
     */
    public function setMaintenanceThreadPoolSize(int $maintenanceThreadPoolSize) : self
    {
        $this->maintenanceThreadPoolSize = $maintenanceThreadPoolSize;
        return $this;
    }
    /**
     * The database port.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The database port.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->port = $port;
        return $this;
    }
    /**
     * The database connection URL.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The database connection URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * The database user.
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * The database user.
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * The database vendor.
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * The database vendor.
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(string $vendor) : self
    {
        $this->vendor = $vendor;
        return $this;
    }
}