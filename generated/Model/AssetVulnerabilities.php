<?php

namespace Rapid7\InsightVM\Api\Model;

class AssetVulnerabilities
{
    /**
     * The number of critical vulnerabilities.
     *
     * @var int
     */
    protected $critical;
    /**
     * The number of distinct exploits that can exploit any of the vulnerabilities on the asset.
     *
     * @var int
     */
    protected $exploits;
    /**
     * The number of distinct malware kits that vulnerabilities on the asset are susceptible to.
     *
     * @var int
     */
    protected $malwareKits;
    /**
     * The number of moderate vulnerabilities.
     *
     * @var int
     */
    protected $moderate;
    /**
     * The number of severe vulnerabilities.
     *
     * @var int
     */
    protected $severe;
    /**
     * The total number of vulnerabilities.
     *
     * @var int
     */
    protected $total;
    /**
     * The number of critical vulnerabilities.
     *
     * @return int
     */
    public function getCritical() : int
    {
        return $this->critical;
    }
    /**
     * The number of critical vulnerabilities.
     *
     * @param int $critical
     *
     * @return self
     */
    public function setCritical(int $critical) : self
    {
        $this->critical = $critical;
        return $this;
    }
    /**
     * The number of distinct exploits that can exploit any of the vulnerabilities on the asset.
     *
     * @return int
     */
    public function getExploits() : int
    {
        return $this->exploits;
    }
    /**
     * The number of distinct exploits that can exploit any of the vulnerabilities on the asset.
     *
     * @param int $exploits
     *
     * @return self
     */
    public function setExploits(int $exploits) : self
    {
        $this->exploits = $exploits;
        return $this;
    }
    /**
     * The number of distinct malware kits that vulnerabilities on the asset are susceptible to.
     *
     * @return int
     */
    public function getMalwareKits() : int
    {
        return $this->malwareKits;
    }
    /**
     * The number of distinct malware kits that vulnerabilities on the asset are susceptible to.
     *
     * @param int $malwareKits
     *
     * @return self
     */
    public function setMalwareKits(int $malwareKits) : self
    {
        $this->malwareKits = $malwareKits;
        return $this;
    }
    /**
     * The number of moderate vulnerabilities.
     *
     * @return int
     */
    public function getModerate() : int
    {
        return $this->moderate;
    }
    /**
     * The number of moderate vulnerabilities.
     *
     * @param int $moderate
     *
     * @return self
     */
    public function setModerate(int $moderate) : self
    {
        $this->moderate = $moderate;
        return $this;
    }
    /**
     * The number of severe vulnerabilities.
     *
     * @return int
     */
    public function getSevere() : int
    {
        return $this->severe;
    }
    /**
     * The number of severe vulnerabilities.
     *
     * @param int $severe
     *
     * @return self
     */
    public function setSevere(int $severe) : self
    {
        $this->severe = $severe;
        return $this;
    }
    /**
     * The total number of vulnerabilities.
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * The total number of vulnerabilities.
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->total = $total;
        return $this;
    }
}