<?php

namespace Rapid7\InsightVM\Api\Model;

class LicensePolicyScanning
{
    /**
     * 
     *
     * @var LicensePolicyScanningBenchmarks
     */
    protected $benchmarks;
    /**
     * Whether policy scanning is allowed.
     *
     * @var bool
     */
    protected $scanning;
    /**
     * 
     *
     * @return LicensePolicyScanningBenchmarks
     */
    public function getBenchmarks() : LicensePolicyScanningBenchmarks
    {
        return $this->benchmarks;
    }
    /**
     * 
     *
     * @param LicensePolicyScanningBenchmarks $benchmarks
     *
     * @return self
     */
    public function setBenchmarks(LicensePolicyScanningBenchmarks $benchmarks) : self
    {
        $this->benchmarks = $benchmarks;
        return $this;
    }
    /**
     * Whether policy scanning is allowed.
     *
     * @return bool
     */
    public function getScanning() : bool
    {
        return $this->scanning;
    }
    /**
     * Whether policy scanning is allowed.
     *
     * @param bool $scanning
     *
     * @return self
     */
    public function setScanning(bool $scanning) : self
    {
        $this->scanning = $scanning;
        return $this;
    }
}