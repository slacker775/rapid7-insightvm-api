<?php

namespace Rapid7\InsightVM\Api\Model;

class PageInfo
{
    /**
     * The index (zero-based) of the current page returned.
     *
     * @var int
     */
    protected $number;
    /**
     * The maximum size of the page returned.
     *
     * @var int
     */
    protected $size;
    /**
     * The total number of pages available.
     *
     * @var int
     */
    protected $totalPages;
    /**
     * The total number of resources available across all pages.
     *
     * @var int
     */
    protected $totalResources;
    /**
     * The index (zero-based) of the current page returned.
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * The index (zero-based) of the current page returned.
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * The maximum size of the page returned.
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * The maximum size of the page returned.
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * The total number of pages available.
     *
     * @return int
     */
    public function getTotalPages() : int
    {
        return $this->totalPages;
    }
    /**
     * The total number of pages available.
     *
     * @param int $totalPages
     *
     * @return self
     */
    public function setTotalPages(int $totalPages) : self
    {
        $this->totalPages = $totalPages;
        return $this;
    }
    /**
     * The total number of resources available across all pages.
     *
     * @return int
     */
    public function getTotalResources() : int
    {
        return $this->totalResources;
    }
    /**
     * The total number of resources available across all pages.
     *
     * @param int $totalResources
     *
     * @return self
     */
    public function setTotalResources(int $totalResources) : self
    {
        $this->totalResources = $totalResources;
        return $this;
    }
}