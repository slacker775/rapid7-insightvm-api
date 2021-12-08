<?php

namespace Rapid7\InsightVM\Api\Model;

class RiskModifierSettings
{
    /**
     * ${settings.risk.modifier.high}
     *
     * @var float
     */
    protected $high;
    /**
     * ${settings.risk.modifier.low}
     *
     * @var float
     */
    protected $low;
    /**
     * ${settings.risk.modifier.medium}
     *
     * @var float
     */
    protected $medium;
    /**
     * ${settings.risk.modifier.veryHigh}
     *
     * @var float
     */
    protected $veryHigh;
    /**
     * ${settings.risk.modifier.veryLow}
     *
     * @var float
     */
    protected $veryLow;
    /**
     * ${settings.risk.modifier.high}
     *
     * @return float
     */
    public function getHigh() : float
    {
        return $this->high;
    }
    /**
     * ${settings.risk.modifier.high}
     *
     * @param float $high
     *
     * @return self
     */
    public function setHigh(float $high) : self
    {
        $this->high = $high;
        return $this;
    }
    /**
     * ${settings.risk.modifier.low}
     *
     * @return float
     */
    public function getLow() : float
    {
        return $this->low;
    }
    /**
     * ${settings.risk.modifier.low}
     *
     * @param float $low
     *
     * @return self
     */
    public function setLow(float $low) : self
    {
        $this->low = $low;
        return $this;
    }
    /**
     * ${settings.risk.modifier.medium}
     *
     * @return float
     */
    public function getMedium() : float
    {
        return $this->medium;
    }
    /**
     * ${settings.risk.modifier.medium}
     *
     * @param float $medium
     *
     * @return self
     */
    public function setMedium(float $medium) : self
    {
        $this->medium = $medium;
        return $this;
    }
    /**
     * ${settings.risk.modifier.veryHigh}
     *
     * @return float
     */
    public function getVeryHigh() : float
    {
        return $this->veryHigh;
    }
    /**
     * ${settings.risk.modifier.veryHigh}
     *
     * @param float $veryHigh
     *
     * @return self
     */
    public function setVeryHigh(float $veryHigh) : self
    {
        $this->veryHigh = $veryHigh;
        return $this;
    }
    /**
     * ${settings.risk.modifier.veryLow}
     *
     * @return float
     */
    public function getVeryLow() : float
    {
        return $this->veryLow;
    }
    /**
     * ${settings.risk.modifier.veryLow}
     *
     * @param float $veryLow
     *
     * @return self
     */
    public function setVeryLow(float $veryLow) : self
    {
        $this->veryLow = $veryLow;
        return $this;
    }
}