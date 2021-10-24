<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportConfigCategoryFilters
{
    /**
     * The vulnerability categories to exclude. Defaults to no categories.
     *
     * @var string[]
     */
    protected $excluded;
    /**
     * The vulnerability categories to include. Defaults to all categories.
     *
     * @var string[]
     */
    protected $included;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The vulnerability categories to exclude. Defaults to no categories.
     *
     * @return string[]
     */
    public function getExcluded() : array
    {
        return $this->excluded;
    }
    /**
     * The vulnerability categories to exclude. Defaults to no categories.
     *
     * @param string[] $excluded
     *
     * @return self
     */
    public function setExcluded(array $excluded) : self
    {
        $this->excluded = $excluded;
        return $this;
    }
    /**
     * The vulnerability categories to include. Defaults to all categories.
     *
     * @return string[]
     */
    public function getIncluded() : array
    {
        return $this->included;
    }
    /**
     * The vulnerability categories to include. Defaults to all categories.
     *
     * @param string[] $included
     *
     * @return self
     */
    public function setIncluded(array $included) : self
    {
        $this->included = $included;
        return $this;
    }
    /**
     * 
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * 
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
}