<?php

namespace Rapid7\InsightVM\Api\Model;

class SonarCriterion
{
    /**
     * If the field is `scan-date-within-the-last`, the number of days to search against.
     *
     * @var int
     */
    protected $days;
    /**
     * If the field is `ip-address-range`, the lower limit of the search.
     *
     * @var string
     */
    protected $lower;
    /**
     * If the field is `domain-contains`, the domain to search against.
     *
     * @var string
     */
    protected $searchDomain;
    /**
     * The type of query to perform.
     *
     * @var string
     */
    protected $type;
    /**
     * If the field is `ip-address-range`, the upper limit of the search.
     *
     * @var string
     */
    protected $upper;
    /**
     * If the field is `scan-date-within-the-last`, the number of days to search against.
     *
     * @return int
     */
    public function getDays() : int
    {
        return $this->days;
    }
    /**
     * If the field is `scan-date-within-the-last`, the number of days to search against.
     *
     * @param int $days
     *
     * @return self
     */
    public function setDays(int $days) : self
    {
        $this->days = $days;
        return $this;
    }
    /**
     * If the field is `ip-address-range`, the lower limit of the search.
     *
     * @return string
     */
    public function getLower() : string
    {
        return $this->lower;
    }
    /**
     * If the field is `ip-address-range`, the lower limit of the search.
     *
     * @param string $lower
     *
     * @return self
     */
    public function setLower(string $lower) : self
    {
        $this->lower = $lower;
        return $this;
    }
    /**
     * If the field is `domain-contains`, the domain to search against.
     *
     * @return string
     */
    public function getSearchDomain() : string
    {
        return $this->searchDomain;
    }
    /**
     * If the field is `domain-contains`, the domain to search against.
     *
     * @param string $searchDomain
     *
     * @return self
     */
    public function setSearchDomain(string $searchDomain) : self
    {
        $this->searchDomain = $searchDomain;
        return $this;
    }
    /**
     * The type of query to perform.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of query to perform.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * If the field is `ip-address-range`, the upper limit of the search.
     *
     * @return string
     */
    public function getUpper() : string
    {
        return $this->upper;
    }
    /**
     * If the field is `ip-address-range`, the upper limit of the search.
     *
     * @param string $upper
     *
     * @return self
     */
    public function setUpper(string $upper) : self
    {
        $this->upper = $upper;
        return $this;
    }
}