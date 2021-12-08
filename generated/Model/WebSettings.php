<?php

namespace Rapid7\InsightVM\Api\Model;

class WebSettings
{
    /**
     * The maximum number of request handling threads.
     *
     * @var int
     */
    protected $maxThreads;
    /**
     * The minimum number of request handling threads.
     *
     * @var int
     */
    protected $minThreads;
    /**
     * The port the web server is accepting requests.
     *
     * @var int
     */
    protected $port;
    /**
     * Session timeout duration, in ISO 8601 format. For example: `"PT10M"`.
     *
     * @var string
     */
    protected $sessionTimeout;
    /**
     * The maximum number of request handling threads.
     *
     * @return int
     */
    public function getMaxThreads() : int
    {
        return $this->maxThreads;
    }
    /**
     * The maximum number of request handling threads.
     *
     * @param int $maxThreads
     *
     * @return self
     */
    public function setMaxThreads(int $maxThreads) : self
    {
        $this->maxThreads = $maxThreads;
        return $this;
    }
    /**
     * The minimum number of request handling threads.
     *
     * @return int
     */
    public function getMinThreads() : int
    {
        return $this->minThreads;
    }
    /**
     * The minimum number of request handling threads.
     *
     * @param int $minThreads
     *
     * @return self
     */
    public function setMinThreads(int $minThreads) : self
    {
        $this->minThreads = $minThreads;
        return $this;
    }
    /**
     * The port the web server is accepting requests.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The port the web server is accepting requests.
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
     * Session timeout duration, in ISO 8601 format. For example: `"PT10M"`.
     *
     * @return string
     */
    public function getSessionTimeout() : string
    {
        return $this->sessionTimeout;
    }
    /**
     * Session timeout duration, in ISO 8601 format. For example: `"PT10M"`.
     *
     * @param string $sessionTimeout
     *
     * @return self
     */
    public function setSessionTimeout(string $sessionTimeout) : self
    {
        $this->sessionTimeout = $sessionTimeout;
        return $this;
    }
}