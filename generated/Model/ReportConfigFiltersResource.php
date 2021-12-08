<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportConfigFiltersResource
{
    /**
     * 
     *
     * @var ReportConfigCategoryFilters
     */
    protected $categories;
    /**
     * The vulnerability severities to include. Defaults to `all`.
     *
     * @var string
     */
    protected $severity;
    /**
     * The vulnerability statuses to include. Defaults to [ `vulnerable`, `vulnerable-version`, `potentially-vulnerable` ].
     *
     * @var string[]
     */
    protected $statuses;
    /**
     * 
     *
     * @return ReportConfigCategoryFilters
     */
    public function getCategories() : ReportConfigCategoryFilters
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param ReportConfigCategoryFilters $categories
     *
     * @return self
     */
    public function setCategories(ReportConfigCategoryFilters $categories) : self
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * The vulnerability severities to include. Defaults to `all`.
     *
     * @return string
     */
    public function getSeverity() : string
    {
        return $this->severity;
    }
    /**
     * The vulnerability severities to include. Defaults to `all`.
     *
     * @param string $severity
     *
     * @return self
     */
    public function setSeverity(string $severity) : self
    {
        $this->severity = $severity;
        return $this;
    }
    /**
     * The vulnerability statuses to include. Defaults to [ `vulnerable`, `vulnerable-version`, `potentially-vulnerable` ].
     *
     * @return string[]
     */
    public function getStatuses() : array
    {
        return $this->statuses;
    }
    /**
     * The vulnerability statuses to include. Defaults to [ `vulnerable`, `vulnerable-version`, `potentially-vulnerable` ].
     *
     * @param string[] $statuses
     *
     * @return self
     */
    public function setStatuses(array $statuses) : self
    {
        $this->statuses = $statuses;
        return $this;
    }
}