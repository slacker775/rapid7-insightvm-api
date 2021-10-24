<?php

namespace Rapid7\InsightVM\Api\Model;

class DiscoverySearchCriteria
{
    /**
     * The type of discovery connection configured for the site. This property only applies to dynamic sites.
     *
     * @var string
     */
    protected $connectionType;
    /**
     * Filters used to match assets from a discovery connection. See <a href="#section/Responses/DiscoverySearchCriteria">Discovery Connection Search Criteria</a> for more information on the structure and format.
     *
     * @var SwaggerDiscoverySearchCriteriaFilter[]
     */
    protected $filters;
    /**
     * Operator to determine how to match filters. `all` requires that all filters match for an asset to be included. `any` requires only one filter to match for an asset to be included.
     *
     * @var string
     */
    protected $match;
    /**
     * The type of discovery connection configured for the site. This property only applies to dynamic sites.
     *
     * @return string
     */
    public function getConnectionType() : string
    {
        return $this->connectionType;
    }
    /**
     * The type of discovery connection configured for the site. This property only applies to dynamic sites.
     *
     * @param string $connectionType
     *
     * @return self
     */
    public function setConnectionType(string $connectionType) : self
    {
        $this->connectionType = $connectionType;
        return $this;
    }
    /**
     * Filters used to match assets from a discovery connection. See <a href="#section/Responses/DiscoverySearchCriteria">Discovery Connection Search Criteria</a> for more information on the structure and format.
     *
     * @return SwaggerDiscoverySearchCriteriaFilter[]
     */
    public function getFilters() : array
    {
        return $this->filters;
    }
    /**
     * Filters used to match assets from a discovery connection. See <a href="#section/Responses/DiscoverySearchCriteria">Discovery Connection Search Criteria</a> for more information on the structure and format.
     *
     * @param SwaggerDiscoverySearchCriteriaFilter[] $filters
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