<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportConfigDatabaseResource
{
    /**
     * 
     *
     * @var ReportConfigDatabaseCredentialsResource
     */
    protected $credentials;
    /**
     * The database server host to export to.
     *
     * @var string
     */
    protected $host;
    /**
     * The name of the database to export to.
     *
     * @var string
     */
    protected $name;
    /**
     * The database server port to export to.
     *
     * @var int
     */
    protected $port;
    /**
     * The type of the database server.
     *
     * @var string
     */
    protected $vendor;
    /**
     * 
     *
     * @return ReportConfigDatabaseCredentialsResource
     */
    public function getCredentials() : ReportConfigDatabaseCredentialsResource
    {
        return $this->credentials;
    }
    /**
     * 
     *
     * @param ReportConfigDatabaseCredentialsResource $credentials
     *
     * @return self
     */
    public function setCredentials(ReportConfigDatabaseCredentialsResource $credentials) : self
    {
        $this->credentials = $credentials;
        return $this;
    }
    /**
     * The database server host to export to.
     *
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }
    /**
     * The database server host to export to.
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
     * The name of the database to export to.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the database to export to.
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
     * The database server port to export to.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The database server port to export to.
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
     * The type of the database server.
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * The type of the database server.
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