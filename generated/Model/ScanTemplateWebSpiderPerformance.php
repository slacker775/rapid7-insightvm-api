<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateWebSpiderPerformance
{
    /**
     * The names of HTTP Daemons (HTTPd) to skip when spidering. For example, `"CUPS"`.
     *
     * @var string[]
     */
    protected $httpDaemonsToSkip;
    /**
     * The directory depth limit for web spidering. Limiting directory depth can save significant time, especially with large sites. A value of `0` signifies unlimited directory traversal. Defaults to `6`.
     *
     * @var int
     */
    protected $maximumDirectoryLevels;
    /**
     * The maximum number of unique host names that the spider may resolve. This function adds substantial time to the spidering process, especially with large Web sites, because of frequent cross-link checking involved. Defaults to `100`.
     *
     * @var int
     */
    protected $maximumForeignHosts;
    /**
     * The maximum depth of links to traverse when spidering. Defaults to `6`.
     *
     * @var int
     */
    protected $maximumLinkDepth;
    /**
     * The maximum the number of pages that are spidered. This is a time-saving measure for large sites. Defaults to `3000`.
     *
     * @var int
     */
    protected $maximumPages;
    /**
     * The maximum the number of times to retry a request after a failure. A value of `0` means no retry attempts are made. Defaults to `2`.
     *
     * @var int
     */
    protected $maximumRetries;
    /**
     * The maximum length of time to web spider. This limit prevents scans from taking longer than the allotted scan schedule. A value of `PT0S` means no limit is applied. The acceptable range is `PT1M` to `PT16666.6667H`.
     *
     * @var string
     */
    protected $maximumTime;
    /**
     * The duration to wait for a response from a target web server. The value is specified as a ISO8601 duration and can range from `PT0S` (0ms) to `P1H` (1 hour). Defaults to `PT2M`.
     *
     * @var string
     */
    protected $responseTimeout;
    /**
     * The number of threads to use per web server being spidered. Defaults to `3`.
     *
     * @var int
     */
    protected $threadsPerServer;
    /**
     * The names of HTTP Daemons (HTTPd) to skip when spidering. For example, `"CUPS"`.
     *
     * @return string[]
     */
    public function getHttpDaemonsToSkip() : array
    {
        return $this->httpDaemonsToSkip;
    }
    /**
     * The names of HTTP Daemons (HTTPd) to skip when spidering. For example, `"CUPS"`.
     *
     * @param string[] $httpDaemonsToSkip
     *
     * @return self
     */
    public function setHttpDaemonsToSkip(array $httpDaemonsToSkip) : self
    {
        $this->httpDaemonsToSkip = $httpDaemonsToSkip;
        return $this;
    }
    /**
     * The directory depth limit for web spidering. Limiting directory depth can save significant time, especially with large sites. A value of `0` signifies unlimited directory traversal. Defaults to `6`.
     *
     * @return int
     */
    public function getMaximumDirectoryLevels() : int
    {
        return $this->maximumDirectoryLevels;
    }
    /**
     * The directory depth limit for web spidering. Limiting directory depth can save significant time, especially with large sites. A value of `0` signifies unlimited directory traversal. Defaults to `6`.
     *
     * @param int $maximumDirectoryLevels
     *
     * @return self
     */
    public function setMaximumDirectoryLevels(int $maximumDirectoryLevels) : self
    {
        $this->maximumDirectoryLevels = $maximumDirectoryLevels;
        return $this;
    }
    /**
     * The maximum number of unique host names that the spider may resolve. This function adds substantial time to the spidering process, especially with large Web sites, because of frequent cross-link checking involved. Defaults to `100`.
     *
     * @return int
     */
    public function getMaximumForeignHosts() : int
    {
        return $this->maximumForeignHosts;
    }
    /**
     * The maximum number of unique host names that the spider may resolve. This function adds substantial time to the spidering process, especially with large Web sites, because of frequent cross-link checking involved. Defaults to `100`.
     *
     * @param int $maximumForeignHosts
     *
     * @return self
     */
    public function setMaximumForeignHosts(int $maximumForeignHosts) : self
    {
        $this->maximumForeignHosts = $maximumForeignHosts;
        return $this;
    }
    /**
     * The maximum depth of links to traverse when spidering. Defaults to `6`.
     *
     * @return int
     */
    public function getMaximumLinkDepth() : int
    {
        return $this->maximumLinkDepth;
    }
    /**
     * The maximum depth of links to traverse when spidering. Defaults to `6`.
     *
     * @param int $maximumLinkDepth
     *
     * @return self
     */
    public function setMaximumLinkDepth(int $maximumLinkDepth) : self
    {
        $this->maximumLinkDepth = $maximumLinkDepth;
        return $this;
    }
    /**
     * The maximum the number of pages that are spidered. This is a time-saving measure for large sites. Defaults to `3000`.
     *
     * @return int
     */
    public function getMaximumPages() : int
    {
        return $this->maximumPages;
    }
    /**
     * The maximum the number of pages that are spidered. This is a time-saving measure for large sites. Defaults to `3000`.
     *
     * @param int $maximumPages
     *
     * @return self
     */
    public function setMaximumPages(int $maximumPages) : self
    {
        $this->maximumPages = $maximumPages;
        return $this;
    }
    /**
     * The maximum the number of times to retry a request after a failure. A value of `0` means no retry attempts are made. Defaults to `2`.
     *
     * @return int
     */
    public function getMaximumRetries() : int
    {
        return $this->maximumRetries;
    }
    /**
     * The maximum the number of times to retry a request after a failure. A value of `0` means no retry attempts are made. Defaults to `2`.
     *
     * @param int $maximumRetries
     *
     * @return self
     */
    public function setMaximumRetries(int $maximumRetries) : self
    {
        $this->maximumRetries = $maximumRetries;
        return $this;
    }
    /**
     * The maximum length of time to web spider. This limit prevents scans from taking longer than the allotted scan schedule. A value of `PT0S` means no limit is applied. The acceptable range is `PT1M` to `PT16666.6667H`.
     *
     * @return string
     */
    public function getMaximumTime() : string
    {
        return $this->maximumTime;
    }
    /**
     * The maximum length of time to web spider. This limit prevents scans from taking longer than the allotted scan schedule. A value of `PT0S` means no limit is applied. The acceptable range is `PT1M` to `PT16666.6667H`.
     *
     * @param string $maximumTime
     *
     * @return self
     */
    public function setMaximumTime(string $maximumTime) : self
    {
        $this->maximumTime = $maximumTime;
        return $this;
    }
    /**
     * The duration to wait for a response from a target web server. The value is specified as a ISO8601 duration and can range from `PT0S` (0ms) to `P1H` (1 hour). Defaults to `PT2M`.
     *
     * @return string
     */
    public function getResponseTimeout() : string
    {
        return $this->responseTimeout;
    }
    /**
     * The duration to wait for a response from a target web server. The value is specified as a ISO8601 duration and can range from `PT0S` (0ms) to `P1H` (1 hour). Defaults to `PT2M`.
     *
     * @param string $responseTimeout
     *
     * @return self
     */
    public function setResponseTimeout(string $responseTimeout) : self
    {
        $this->responseTimeout = $responseTimeout;
        return $this;
    }
    /**
     * The number of threads to use per web server being spidered. Defaults to `3`.
     *
     * @return int
     */
    public function getThreadsPerServer() : int
    {
        return $this->threadsPerServer;
    }
    /**
     * The number of threads to use per web server being spidered. Defaults to `3`.
     *
     * @param int $threadsPerServer
     *
     * @return self
     */
    public function setThreadsPerServer(int $threadsPerServer) : self
    {
        $this->threadsPerServer = $threadsPerServer;
        return $this;
    }
}