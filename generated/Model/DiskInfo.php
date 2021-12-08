<?php

namespace Rapid7\InsightVM\Api\Model;

class DiskInfo
{
    /**
     * 
     *
     * @var DiskFree
     */
    protected $free;
    /**
     * 
     *
     * @var InstallSize
     */
    protected $installation;
    /**
     * 
     *
     * @var DiskTotal
     */
    protected $total;
    /**
     * 
     *
     * @return DiskFree
     */
    public function getFree() : DiskFree
    {
        return $this->free;
    }
    /**
     * 
     *
     * @param DiskFree $free
     *
     * @return self
     */
    public function setFree(DiskFree $free) : self
    {
        $this->free = $free;
        return $this;
    }
    /**
     * 
     *
     * @return InstallSize
     */
    public function getInstallation() : InstallSize
    {
        return $this->installation;
    }
    /**
     * 
     *
     * @param InstallSize $installation
     *
     * @return self
     */
    public function setInstallation(InstallSize $installation) : self
    {
        $this->installation = $installation;
        return $this;
    }
    /**
     * 
     *
     * @return DiskTotal
     */
    public function getTotal() : DiskTotal
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param DiskTotal $total
     *
     * @return self
     */
    public function setTotal(DiskTotal $total) : self
    {
        $this->total = $total;
        return $this;
    }
}