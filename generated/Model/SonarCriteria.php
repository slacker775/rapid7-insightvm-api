<?php

namespace Rapid7\InsightVM\Api\Model;

class SonarCriteria
{
    /**
     * The filters in the Sonar query.
     *
     * @var SonarCriterion[]
     */
    protected $filters;
    /**
     * The filters in the Sonar query.
     *
     * @return SonarCriterion[]
     */
    public function getFilters() : array
    {
        return $this->filters;
    }
    /**
     * The filters in the Sonar query.
     *
     * @param SonarCriterion[] $filters
     *
     * @return self
     */
    public function setFilters(array $filters) : self
    {
        $this->filters = $filters;
        return $this;
    }
}