<?php

namespace Rapid7\InsightVM\Api\Model;

class PolicyRuleAssessmentResource
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The total number of policy rules.
     *
     * @var int
     */
    protected $total;
    /**
     * The total number of policy rules that are not compliant against all assets.
     *
     * @var int
     */
    protected $totalFailed;
    /**
     * The total number of policy rules that are not applicable against all assets.
     *
     * @var int
     */
    protected $totalNotApplicable;
    /**
     * The total number of policy rules that are compliant against all assets.
     *
     * @var int
     */
    protected $totalPassed;
    /**
     * The total number of policy rules that have a role of `"unscored"`.
     *
     * @var int
     */
    protected $unscored;
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
     * The total number of policy rules.
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * The total number of policy rules.
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
     * The total number of policy rules that are not compliant against all assets.
     *
     * @return int
     */
    public function getTotalFailed() : int
    {
        return $this->totalFailed;
    }
    /**
     * The total number of policy rules that are not compliant against all assets.
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
     * The total number of policy rules that are not applicable against all assets.
     *
     * @return int
     */
    public function getTotalNotApplicable() : int
    {
        return $this->totalNotApplicable;
    }
    /**
     * The total number of policy rules that are not applicable against all assets.
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
     * The total number of policy rules that are compliant against all assets.
     *
     * @return int
     */
    public function getTotalPassed() : int
    {
        return $this->totalPassed;
    }
    /**
     * The total number of policy rules that are compliant against all assets.
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
    /**
     * The total number of policy rules that have a role of `"unscored"`.
     *
     * @return int
     */
    public function getUnscored() : int
    {
        return $this->unscored;
    }
    /**
     * The total number of policy rules that have a role of `"unscored"`.
     *
     * @param int $unscored
     *
     * @return self
     */
    public function setUnscored(int $unscored) : self
    {
        $this->unscored = $unscored;
        return $this;
    }
}