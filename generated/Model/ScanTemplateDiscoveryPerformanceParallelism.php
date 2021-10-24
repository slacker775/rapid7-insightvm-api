<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateDiscoveryPerformanceParallelism
{
    /**
     * The maximum number of discovery connection requests send in parallel. Defaults to `0`.
     *
     * @var int
     */
    protected $maximum;
    /**
     * The minimum number of discovery connection requests send in parallel. Defaults to `0`.
     *
     * @var int
     */
    protected $minimum;
    /**
     * The maximum number of discovery connection requests send in parallel. Defaults to `0`.
     *
     * @return int
     */
    public function getMaximum() : int
    {
        return $this->maximum;
    }
    /**
     * The maximum number of discovery connection requests send in parallel. Defaults to `0`.
     *
     * @param int $maximum
     *
     * @return self
     */
    public function setMaximum(int $maximum) : self
    {
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * The minimum number of discovery connection requests send in parallel. Defaults to `0`.
     *
     * @return int
     */
    public function getMinimum() : int
    {
        return $this->minimum;
    }
    /**
     * The minimum number of discovery connection requests send in parallel. Defaults to `0`.
     *
     * @param int $minimum
     *
     * @return self
     */
    public function setMinimum(int $minimum) : self
    {
        $this->minimum = $minimum;
        return $this;
    }
}