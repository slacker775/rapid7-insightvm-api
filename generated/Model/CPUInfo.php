<?php

namespace Rapid7\InsightVM\Api\Model;

class CPUInfo
{
    /**
     * The clock speed of the host, in MHz.
     *
     * @var int
     */
    protected $clockSpeed;
    /**
     * The number of CPUs.
     *
     * @var int
     */
    protected $count;
    /**
     * The clock speed of the host, in MHz.
     *
     * @return int
     */
    public function getClockSpeed() : int
    {
        return $this->clockSpeed;
    }
    /**
     * The clock speed of the host, in MHz.
     *
     * @param int $clockSpeed
     *
     * @return self
     */
    public function setClockSpeed(int $clockSpeed) : self
    {
        $this->clockSpeed = $clockSpeed;
        return $this;
    }
    /**
     * The number of CPUs.
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * The number of CPUs.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->count = $count;
        return $this;
    }
}