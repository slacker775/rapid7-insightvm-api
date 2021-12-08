<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateDiscoveryPerformanceScanDelay
{
    /**
     * The minimum duration to wait between sending packets to each target host. The value is specified as a ISO8601 duration and can range from `PT0S` (0ms) to `P30S` (30s). Defaults to `PT0S`.
     *
     * @var string
     */
    protected $maximum;
    /**
     * The maximum duration to wait between sending packets to each target host. The value is specified as a ISO8601 duration and can range from `PT0S` (0ms) to `P30S` (30s). Defaults to `PT0S`.
     *
     * @var string
     */
    protected $minimum;
    /**
     * The minimum duration to wait between sending packets to each target host. The value is specified as a ISO8601 duration and can range from `PT0S` (0ms) to `P30S` (30s). Defaults to `PT0S`.
     *
     * @return string
     */
    public function getMaximum() : string
    {
        return $this->maximum;
    }
    /**
     * The minimum duration to wait between sending packets to each target host. The value is specified as a ISO8601 duration and can range from `PT0S` (0ms) to `P30S` (30s). Defaults to `PT0S`.
     *
     * @param string $maximum
     *
     * @return self
     */
    public function setMaximum(string $maximum) : self
    {
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * The maximum duration to wait between sending packets to each target host. The value is specified as a ISO8601 duration and can range from `PT0S` (0ms) to `P30S` (30s). Defaults to `PT0S`.
     *
     * @return string
     */
    public function getMinimum() : string
    {
        return $this->minimum;
    }
    /**
     * The maximum duration to wait between sending packets to each target host. The value is specified as a ISO8601 duration and can range from `PT0S` (0ms) to `P30S` (30s). Defaults to `PT0S`.
     *
     * @param string $minimum
     *
     * @return self
     */
    public function setMinimum(string $minimum) : self
    {
        $this->minimum = $minimum;
        return $this;
    }
}