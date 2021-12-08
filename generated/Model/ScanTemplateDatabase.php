<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateDatabase
{
    /**
     * Database name for DB2 database instance.
     *
     * @var string
     */
    protected $db2;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * Database name (SID) for an Oracle database instance.
     *
     * @var string[]
     */
    protected $oracle;
    /**
     * Database name for PostgesSQL database instance.
     *
     * @var string
     */
    protected $postgres;
    /**
     * Database name for DB2 database instance.
     *
     * @return string
     */
    public function getDb2() : string
    {
        return $this->db2;
    }
    /**
     * Database name for DB2 database instance.
     *
     * @param string $db2
     *
     * @return self
     */
    public function setDb2(string $db2) : self
    {
        $this->db2 = $db2;
        return $this;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @param Link[] $links
     *
     * @return self
     */
    public function setLinks(array $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * Database name (SID) for an Oracle database instance.
     *
     * @return string[]
     */
    public function getOracle() : array
    {
        return $this->oracle;
    }
    /**
     * Database name (SID) for an Oracle database instance.
     *
     * @param string[] $oracle
     *
     * @return self
     */
    public function setOracle(array $oracle) : self
    {
        $this->oracle = $oracle;
        return $this;
    }
    /**
     * Database name for PostgesSQL database instance.
     *
     * @return string
     */
    public function getPostgres() : string
    {
        return $this->postgres;
    }
    /**
     * Database name for PostgesSQL database instance.
     *
     * @param string $postgres
     *
     * @return self
     */
    public function setPostgres(string $postgres) : self
    {
        $this->postgres = $postgres;
        return $this;
    }
}