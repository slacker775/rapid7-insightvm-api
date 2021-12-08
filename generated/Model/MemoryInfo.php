<?php

namespace Rapid7\InsightVM\Api\Model;

class MemoryInfo
{
    /**
     * 
     *
     * @var MemoryFree
     */
    protected $free;
    /**
     * 
     *
     * @var MemoryTotal
     */
    protected $total;
    /**
     * 
     *
     * @return MemoryFree
     */
    public function getFree() : MemoryFree
    {
        return $this->free;
    }
    /**
     * 
     *
     * @param MemoryFree $free
     *
     * @return self
     */
    public function setFree(MemoryFree $free) : self
    {
        $this->free = $free;
        return $this;
    }
    /**
     * 
     *
     * @return MemoryTotal
     */
    public function getTotal() : MemoryTotal
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param MemoryTotal $total
     *
     * @return self
     */
    public function setTotal(MemoryTotal $total) : self
    {
        $this->total = $total;
        return $this;
    }
}