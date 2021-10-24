<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateDiscoveryPerformance
{
    /**
     * 
     *
     * @var ScanTemplateDiscoveryPerformancePacketsRate
     */
    protected $packetRate;
    /**
     * 
     *
     * @var ScanTemplateDiscoveryPerformanceParallelism
     */
    protected $parallelism;
    /**
     * The maximum number of attempts to contact target assets. If the limit is exceeded with no response, the given asset is not scanned. Defaults to `3`.
     *
     * @var int
     */
    protected $retryLimit;
    /**
     * 
     *
     * @var ScanTemplateDiscoveryPerformanceScanDelay
     */
    protected $scanDelay;
    /**
     * 
     *
     * @var ScanTemplateDiscoveryPerformanceTimeout
     */
    protected $timeout;
    /**
     * 
     *
     * @return ScanTemplateDiscoveryPerformancePacketsRate
     */
    public function getPacketRate() : ScanTemplateDiscoveryPerformancePacketsRate
    {
        return $this->packetRate;
    }
    /**
     * 
     *
     * @param ScanTemplateDiscoveryPerformancePacketsRate $packetRate
     *
     * @return self
     */
    public function setPacketRate(ScanTemplateDiscoveryPerformancePacketsRate $packetRate) : self
    {
        $this->packetRate = $packetRate;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateDiscoveryPerformanceParallelism
     */
    public function getParallelism() : ScanTemplateDiscoveryPerformanceParallelism
    {
        return $this->parallelism;
    }
    /**
     * 
     *
     * @param ScanTemplateDiscoveryPerformanceParallelism $parallelism
     *
     * @return self
     */
    public function setParallelism(ScanTemplateDiscoveryPerformanceParallelism $parallelism) : self
    {
        $this->parallelism = $parallelism;
        return $this;
    }
    /**
     * The maximum number of attempts to contact target assets. If the limit is exceeded with no response, the given asset is not scanned. Defaults to `3`.
     *
     * @return int
     */
    public function getRetryLimit() : int
    {
        return $this->retryLimit;
    }
    /**
     * The maximum number of attempts to contact target assets. If the limit is exceeded with no response, the given asset is not scanned. Defaults to `3`.
     *
     * @param int $retryLimit
     *
     * @return self
     */
    public function setRetryLimit(int $retryLimit) : self
    {
        $this->retryLimit = $retryLimit;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateDiscoveryPerformanceScanDelay
     */
    public function getScanDelay() : ScanTemplateDiscoveryPerformanceScanDelay
    {
        return $this->scanDelay;
    }
    /**
     * 
     *
     * @param ScanTemplateDiscoveryPerformanceScanDelay $scanDelay
     *
     * @return self
     */
    public function setScanDelay(ScanTemplateDiscoveryPerformanceScanDelay $scanDelay) : self
    {
        $this->scanDelay = $scanDelay;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateDiscoveryPerformanceTimeout
     */
    public function getTimeout() : ScanTemplateDiscoveryPerformanceTimeout
    {
        return $this->timeout;
    }
    /**
     * 
     *
     * @param ScanTemplateDiscoveryPerformanceTimeout $timeout
     *
     * @return self
     */
    public function setTimeout(ScanTemplateDiscoveryPerformanceTimeout $timeout) : self
    {
        $this->timeout = $timeout;
        return $this;
    }
}