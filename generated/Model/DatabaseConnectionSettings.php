<?php

namespace Rapid7\InsightVM\Api\Model;

class DatabaseConnectionSettings
{
    /**
     * The maximum number of administrative connections in the connection pool. -1 means unlimited.
     *
     * @var int
     */
    protected $maximumAdministrationPoolSize;
    /**
     * ${settings.database.connection.max}
     *
     * @var int
     */
    protected $maximumPoolSize;
    /**
     * The maximum number of prepared statements in the prepared statement pool. -1 means unlimited.
     *
     * @var int
     */
    protected $maximumPreparedStatementPoolSize;
    /**
     * The maximum number of administrative connections in the connection pool. -1 means unlimited.
     *
     * @return int
     */
    public function getMaximumAdministrationPoolSize() : int
    {
        return $this->maximumAdministrationPoolSize;
    }
    /**
     * The maximum number of administrative connections in the connection pool. -1 means unlimited.
     *
     * @param int $maximumAdministrationPoolSize
     *
     * @return self
     */
    public function setMaximumAdministrationPoolSize(int $maximumAdministrationPoolSize) : self
    {
        $this->maximumAdministrationPoolSize = $maximumAdministrationPoolSize;
        return $this;
    }
    /**
     * ${settings.database.connection.max}
     *
     * @return int
     */
    public function getMaximumPoolSize() : int
    {
        return $this->maximumPoolSize;
    }
    /**
     * ${settings.database.connection.max}
     *
     * @param int $maximumPoolSize
     *
     * @return self
     */
    public function setMaximumPoolSize(int $maximumPoolSize) : self
    {
        $this->maximumPoolSize = $maximumPoolSize;
        return $this;
    }
    /**
     * The maximum number of prepared statements in the prepared statement pool. -1 means unlimited.
     *
     * @return int
     */
    public function getMaximumPreparedStatementPoolSize() : int
    {
        return $this->maximumPreparedStatementPoolSize;
    }
    /**
     * The maximum number of prepared statements in the prepared statement pool. -1 means unlimited.
     *
     * @param int $maximumPreparedStatementPoolSize
     *
     * @return self
     */
    public function setMaximumPreparedStatementPoolSize(int $maximumPreparedStatementPoolSize) : self
    {
        $this->maximumPreparedStatementPoolSize = $maximumPreparedStatementPoolSize;
        return $this;
    }
}