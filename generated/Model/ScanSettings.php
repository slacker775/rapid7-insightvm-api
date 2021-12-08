<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanSettings
{
    /**
     * The connection timeout when establishing connections to remote scan engines, in ISO 8601 format. For example: `"PT15S"`.
     *
     * @var string
     */
    protected $connectionTimeout;
    /**
     * Whether incremental scan results is enabled.
     *
     * @var bool
     */
    protected $incremental;
    /**
     * The maximum number of scan threads to use in any scan. -1 means this is set by the scan template.
     *
     * @var int
     */
    protected $maximumThreads;
    /**
     * The read timeout when establishing connections to remote scan engines, in ISO 8601 format. For example: `"PT15M"`.
     *
     * @var string
     */
    protected $readTimeout;
    /**
     * The idle timeout when checking the status of running scans, in ISO 8601 format. For example: `"PT3M"`.
     *
     * @var string
     */
    protected $statusIdleTimeout;
    /**
     * The number of threads to use when checking the status of running scans.
     *
     * @var int
     */
    protected $statusThreads;
    /**
     * The connection timeout when establishing connections to remote scan engines, in ISO 8601 format. For example: `"PT15S"`.
     *
     * @return string
     */
    public function getConnectionTimeout() : string
    {
        return $this->connectionTimeout;
    }
    /**
     * The connection timeout when establishing connections to remote scan engines, in ISO 8601 format. For example: `"PT15S"`.
     *
     * @param string $connectionTimeout
     *
     * @return self
     */
    public function setConnectionTimeout(string $connectionTimeout) : self
    {
        $this->connectionTimeout = $connectionTimeout;
        return $this;
    }
    /**
     * Whether incremental scan results is enabled.
     *
     * @return bool
     */
    public function getIncremental() : bool
    {
        return $this->incremental;
    }
    /**
     * Whether incremental scan results is enabled.
     *
     * @param bool $incremental
     *
     * @return self
     */
    public function setIncremental(bool $incremental) : self
    {
        $this->incremental = $incremental;
        return $this;
    }
    /**
     * The maximum number of scan threads to use in any scan. -1 means this is set by the scan template.
     *
     * @return int
     */
    public function getMaximumThreads() : int
    {
        return $this->maximumThreads;
    }
    /**
     * The maximum number of scan threads to use in any scan. -1 means this is set by the scan template.
     *
     * @param int $maximumThreads
     *
     * @return self
     */
    public function setMaximumThreads(int $maximumThreads) : self
    {
        $this->maximumThreads = $maximumThreads;
        return $this;
    }
    /**
     * The read timeout when establishing connections to remote scan engines, in ISO 8601 format. For example: `"PT15M"`.
     *
     * @return string
     */
    public function getReadTimeout() : string
    {
        return $this->readTimeout;
    }
    /**
     * The read timeout when establishing connections to remote scan engines, in ISO 8601 format. For example: `"PT15M"`.
     *
     * @param string $readTimeout
     *
     * @return self
     */
    public function setReadTimeout(string $readTimeout) : self
    {
        $this->readTimeout = $readTimeout;
        return $this;
    }
    /**
     * The idle timeout when checking the status of running scans, in ISO 8601 format. For example: `"PT3M"`.
     *
     * @return string
     */
    public function getStatusIdleTimeout() : string
    {
        return $this->statusIdleTimeout;
    }
    /**
     * The idle timeout when checking the status of running scans, in ISO 8601 format. For example: `"PT3M"`.
     *
     * @param string $statusIdleTimeout
     *
     * @return self
     */
    public function setStatusIdleTimeout(string $statusIdleTimeout) : self
    {
        $this->statusIdleTimeout = $statusIdleTimeout;
        return $this;
    }
    /**
     * The number of threads to use when checking the status of running scans.
     *
     * @return int
     */
    public function getStatusThreads() : int
    {
        return $this->statusThreads;
    }
    /**
     * The number of threads to use when checking the status of running scans.
     *
     * @param int $statusThreads
     *
     * @return self
     */
    public function setStatusThreads(int $statusThreads) : self
    {
        $this->statusThreads = $statusThreads;
        return $this;
    }
}