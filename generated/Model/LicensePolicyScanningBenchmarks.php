<?php

namespace Rapid7\InsightVM\Api\Model;

class LicensePolicyScanningBenchmarks
{
    /**
     * Whether policy scanning for CIS benchmarks is allowed.
     *
     * @var bool
     */
    protected $cis;
    /**
     * Whether custom benchmarks can be used during scanning.
     *
     * @var bool
     */
    protected $custom;
    /**
     * Whether policy scanning for DISA benchmarks is allowed.
     *
     * @var bool
     */
    protected $disa;
    /**
     * Whether policy scanning for FDCC benchmarks is allowed.
     *
     * @var bool
     */
    protected $fdcc;
    /**
     * Whether policy scanning for USGCB benchmarks is allowed.
     *
     * @var bool
     */
    protected $usgcb;
    /**
     * Whether policy scanning for CIS benchmarks is allowed.
     *
     * @return bool
     */
    public function getCis() : bool
    {
        return $this->cis;
    }
    /**
     * Whether policy scanning for CIS benchmarks is allowed.
     *
     * @param bool $cis
     *
     * @return self
     */
    public function setCis(bool $cis) : self
    {
        $this->cis = $cis;
        return $this;
    }
    /**
     * Whether custom benchmarks can be used during scanning.
     *
     * @return bool
     */
    public function getCustom() : bool
    {
        return $this->custom;
    }
    /**
     * Whether custom benchmarks can be used during scanning.
     *
     * @param bool $custom
     *
     * @return self
     */
    public function setCustom(bool $custom) : self
    {
        $this->custom = $custom;
        return $this;
    }
    /**
     * Whether policy scanning for DISA benchmarks is allowed.
     *
     * @return bool
     */
    public function getDisa() : bool
    {
        return $this->disa;
    }
    /**
     * Whether policy scanning for DISA benchmarks is allowed.
     *
     * @param bool $disa
     *
     * @return self
     */
    public function setDisa(bool $disa) : self
    {
        $this->disa = $disa;
        return $this;
    }
    /**
     * Whether policy scanning for FDCC benchmarks is allowed.
     *
     * @return bool
     */
    public function getFdcc() : bool
    {
        return $this->fdcc;
    }
    /**
     * Whether policy scanning for FDCC benchmarks is allowed.
     *
     * @param bool $fdcc
     *
     * @return self
     */
    public function setFdcc(bool $fdcc) : self
    {
        $this->fdcc = $fdcc;
        return $this;
    }
    /**
     * Whether policy scanning for USGCB benchmarks is allowed.
     *
     * @return bool
     */
    public function getUsgcb() : bool
    {
        return $this->usgcb;
    }
    /**
     * Whether policy scanning for USGCB benchmarks is allowed.
     *
     * @param bool $usgcb
     *
     * @return self
     */
    public function setUsgcb(bool $usgcb) : self
    {
        $this->usgcb = $usgcb;
        return $this;
    }
}