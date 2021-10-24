<?php

namespace Rapid7\InsightVM\Api\Model;

class SearchCriteria
{
    /**
     * Filters used to match assets. See <a href="#section/Responses/SearchCriteria">Search Criteria</a> for more information on the structure and format.
     *
     * @var SwaggerSearchCriteriaFilter[]
     */
    protected $filters;
    /**
     * Operator to determine how to match filters. `all` requires that all filters match for an asset to be included. `any` requires only one filter to match for an asset to be included.
     *
     * @var string
     */
    protected $match;
    /**
     * Filters used to match assets. See <a href="#section/Responses/SearchCriteria">Search Criteria</a> for more information on the structure and format.
     *
     * @return SwaggerSearchCriteriaFilter[]
     */
    public function getFilters() : array
    {
        return $this->filters;
    }
    /**
     * Filters used to match assets. See <a href="#section/Responses/SearchCriteria">Search Criteria</a> for more information on the structure and format.
     *
     * @param SwaggerSearchCriteriaFilter[] $filters
     *
     * @return self
     */
    public function setFilters(array $filters) : self
    {
        $this->filters = $filters;
        return $this;
    }
    /**
     * Operator to determine how to match filters. `all` requires that all filters match for an asset to be included. `any` requires only one filter to match for an asset to be included.
     *
     * @return string
     */
    public function getMatch() : string
    {
        return $this->match;
    }
    /**
     * Operator to determine how to match filters. `all` requires that all filters match for an asset to be included. `any` requires only one filter to match for an asset to be included.
     *
     * @param string $match
     *
     * @return self
     */
    public function setMatch(string $match) : self
    {
        $this->match = $match;
        return $this;
    }
}