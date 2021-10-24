<?php

namespace Rapid7\InsightVM\Api\Model;

class AssetPolicyAssessment
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The total number of assets.
     *
     * @var int
     */
    protected $total;
    /**
     * The total number of assets that are not compliant.
     *
     * @var int
     */
    protected $totalFailed;
    /**
     * The total number of assets that are not applicable.
     *
     * @var int
     */
    protected $totalNotApplicable;
    /**
     * 
     *
     * @var int
     */
    protected $totalPassed;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @param Link[] $links
     *
     * @return self
     */
    public function setLinks(array $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * The total number of assets.
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * The total number of assets.
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
    /**
     * The total number of assets that are not compliant.
     *
     * @return int
     */
    public function getTotalFailed() : int
    {
        return $this->totalFailed;
    }
    /**
     * The total number of assets that are not compliant.
     *
     * @param int $totalFailed
     *
     * @return self
     */
    public function setTotalFailed(int $totalFailed) : self
    {
        $this->totalFailed = $totalFailed;
        return $this;
    }
    /**
     * The total number of assets that are not applicable.
     *
     * @return int
     */
    public function getTotalNotApplicable() : int
    {
        return $this->totalNotApplicable;
    }
    /**
     * The total number of assets that are not applicable.
     *
     * @param int $totalNotApplicable
     *
     * @return self
     */
    public function setTotalNotApplicable(int $totalNotApplicable) : self
    {
        $this->totalNotApplicable = $totalNotApplicable;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalPassed() : int
    {
        return $this->totalPassed;
    }
    /**
     * 
     *
     * @param int $totalPassed
     *
     * @return self
     */
    public function setTotalPassed(int $totalPassed) : self
    {
        $this->totalPassed = $totalPassed;
        return $this;
    }
}