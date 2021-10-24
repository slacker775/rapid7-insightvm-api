<?php

namespace Rapid7\InsightVM\Api\Model;

class PolicySummaryResource
{
    /**
     * The total number of policies whose overall compliance has decreased between the last two scans of all assets. The list of scanned policies is based on the user's list of accessible assets.
     *
     * @var int
     */
    protected $decreasedCompliance;
    /**
     * The total number of policies whose overall compliance has increased between the last two scans of all assets. The list of scanned policies is based on the user's list of accessible assets.
     *
     * @var int
     */
    protected $increasedCompliance;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The total number of policies available in the Security Console.
     *
     * @var int
     */
    protected $numberOfPolicies;
    /**
     * The ratio of compliant rules to the total number of rules across all policies.
     *
     * @var float
     */
    protected $overallCompliance;
    /**
     * The total number of policies that were evaluated against assets and have applicable results. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @var int
     */
    protected $scannedPolicies;
    /**
     * The total number of policies whose overall compliance has decreased between the last two scans of all assets. The list of scanned policies is based on the user's list of accessible assets.
     *
     * @return int
     */
    public function getDecreasedCompliance() : int
    {
        return $this->decreasedCompliance;
    }
    /**
     * The total number of policies whose overall compliance has decreased between the last two scans of all assets. The list of scanned policies is based on the user's list of accessible assets.
     *
     * @param int $decreasedCompliance
     *
     * @return self
     */
    public function setDecreasedCompliance(int $decreasedCompliance) : self
    {
        $this->decreasedCompliance = $decreasedCompliance;
        return $this;
    }
    /**
     * The total number of policies whose overall compliance has increased between the last two scans of all assets. The list of scanned policies is based on the user's list of accessible assets.
     *
     * @return int
     */
    public function getIncreasedCompliance() : int
    {
        return $this->increasedCompliance;
    }
    /**
     * The total number of policies whose overall compliance has increased between the last two scans of all assets. The list of scanned policies is based on the user's list of accessible assets.
     *
     * @param int $increasedCompliance
     *
     * @return self
     */
    public function setIncreasedCompliance(int $increasedCompliance) : self
    {
        $this->increasedCompliance = $increasedCompliance;
        return $this;
    }
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
     * The total number of policies available in the Security Console.
     *
     * @return int
     */
    public function getNumberOfPolicies() : int
    {
        return $this->numberOfPolicies;
    }
    /**
     * The total number of policies available in the Security Console.
     *
     * @param int $numberOfPolicies
     *
     * @return self
     */
    public function setNumberOfPolicies(int $numberOfPolicies) : self
    {
        $this->numberOfPolicies = $numberOfPolicies;
        return $this;
    }
    /**
     * The ratio of compliant rules to the total number of rules across all policies.
     *
     * @return float
     */
    public function getOverallCompliance() : float
    {
        return $this->overallCompliance;
    }
    /**
     * The ratio of compliant rules to the total number of rules across all policies.
     *
     * @param float $overallCompliance
     *
     * @return self
     */
    public function setOverallCompliance(float $overallCompliance) : self
    {
        $this->overallCompliance = $overallCompliance;
        return $this;
    }
    /**
     * The total number of policies that were evaluated against assets and have applicable results. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @return int
     */
    public function getScannedPolicies() : int
    {
        return $this->scannedPolicies;
    }
    /**
     * The total number of policies that were evaluated against assets and have applicable results. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @param int $scannedPolicies
     *
     * @return self
     */
    public function setScannedPolicies(int $scannedPolicies) : self
    {
        $this->scannedPolicies = $scannedPolicies;
        return $this;
    }
}