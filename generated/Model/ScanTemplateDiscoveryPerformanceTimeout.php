<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateDiscoveryPerformanceTimeout
{
    /**
     * The initial timeout to wait between retry attempts. The value is specified as a ISO8601 duration and can range from `PT0.5S` (500ms) to `P30S` (30s). Defaults to `PT0.5S`.
     *
     * @var string
     */
    protected $initial;
    /**
     * The maximum time to wait between retries. The value is specified as a ISO8601 duration and can range from `PT0.5S` (500ms) to `P30S` (30s). Defaults to `PT3S`.
     *
     * @var string
     */
    protected $maximum;
    /**
     * The minimum time to wait between retries. The value is specified as a ISO8601 duration and can range from `PT0.5S` (500ms) to `P30S` (30s). Defaults to `PT0.5S`.
     *
     * @var string
     */
    protected $minimum;
    /**
     * The initial timeout to wait between retry attempts. The value is specified as a ISO8601 duration and can range from `PT0.5S` (500ms) to `P30S` (30s). Defaults to `PT0.5S`.
     *
     * @return string
     */
    public function getInitial() : string
    {
        return $this->initial;
    }
    /**
     * The initial timeout to wait between retry attempts. The value is specified as a ISO8601 duration and can range from `PT0.5S` (500ms) to `P30S` (30s). Defaults to `PT0.5S`.
     *
     * @param string $initial
     *
     * @return self
     */
    public function setInitial(string $initial) : self
    {
        $this->initial = $initial;
        return $this;
    }
    /**
     * The maximum time to wait between retries. The value is specified as a ISO8601 duration and can range from `PT0.5S` (500ms) to `P30S` (30s). Defaults to `PT3S`.
     *
     * @return string
     */
    public function getMaximum() : string
    {
        return $this->maximum;
    }
    /**
     * The maximum time to wait between retries. The value is specified as a ISO8601 duration and can range from `PT0.5S` (500ms) to `P30S` (30s). Defaults to `PT3S`.
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
     * The minimum time to wait between retries. The value is specified as a ISO8601 duration and can range from `PT0.5S` (500ms) to `P30S` (30s). Defaults to `PT0.5S`.
     *
     * @return string
     */
    public function getMinimum() : string
    {
        return $this->minimum;
    }
    /**
     * The minimum time to wait between retries. The value is specified as a ISO8601 duration and can range from `PT0.5S` (500ms) to `P30S` (30s). Defaults to `PT0.5S`.
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