<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateDiscoveryPerformancePacketsRate
{
    /**
     * Whether defeat rate limit (defeat-rst-ratelimit) is enforced on the minimum packet setting, which can improve scan speed. If it is disabled, the minimum packet rate setting may be ignored when a target limits its rate of RST (reset) responses to a port scan. This can increase scan accuracy by preventing the scan from missing ports. Defaults to `true`.
     *
     * @var bool
     */
    protected $defeatRateLimit;
    /**
     * The minimum number of packets to send each second during discovery attempts. Defaults to `0`.
     *
     * @var int
     */
    protected $maximum;
    /**
     * The minimum number of packets to send each second during discovery attempts. Defaults to `0`.
     *
     * @var int
     */
    protected $minimum;
    /**
     * Whether defeat rate limit (defeat-rst-ratelimit) is enforced on the minimum packet setting, which can improve scan speed. If it is disabled, the minimum packet rate setting may be ignored when a target limits its rate of RST (reset) responses to a port scan. This can increase scan accuracy by preventing the scan from missing ports. Defaults to `true`.
     *
     * @return bool
     */
    public function getDefeatRateLimit() : bool
    {
        return $this->defeatRateLimit;
    }
    /**
     * Whether defeat rate limit (defeat-rst-ratelimit) is enforced on the minimum packet setting, which can improve scan speed. If it is disabled, the minimum packet rate setting may be ignored when a target limits its rate of RST (reset) responses to a port scan. This can increase scan accuracy by preventing the scan from missing ports. Defaults to `true`.
     *
     * @param bool $defeatRateLimit
     *
     * @return self
     */
    public function setDefeatRateLimit(bool $defeatRateLimit) : self
    {
        $this->defeatRateLimit = $defeatRateLimit;
        return $this;
    }
    /**
     * The minimum number of packets to send each second during discovery attempts. Defaults to `0`.
     *
     * @return int
     */
    public function getMaximum() : int
    {
        return $this->maximum;
    }
    /**
     * The minimum number of packets to send each second during discovery attempts. Defaults to `0`.
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
     * The minimum number of packets to send each second during discovery attempts. Defaults to `0`.
     *
     * @return int
     */
    public function getMinimum() : int
    {
        return $this->minimum;
    }
    /**
     * The minimum number of packets to send each second during discovery attempts. Defaults to `0`.
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