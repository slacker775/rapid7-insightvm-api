<?php

namespace Rapid7\InsightVM\Api\Model;

class StaticSite
{
    /**
     * 
     *
     * @var ExcludedAssetGroups
     */
    protected $excludedAssetGroups;
    /**
     * 
     *
     * @var ExcludedScanTargets
     */
    protected $excludedTargets;
    /**
     * 
     *
     * @var IncludedAssetGroups
     */
    protected $includedAssetGroups;
    /**
     * 
     *
     * @var IncludedScanTargets
     */
    protected $includedTargets;
    /**
     * 
     *
     * @return ExcludedAssetGroups
     */
    public function getExcludedAssetGroups() : ExcludedAssetGroups
    {
        return $this->excludedAssetGroups;
    }
    /**
     * 
     *
     * @param ExcludedAssetGroups $excludedAssetGroups
     *
     * @return self
     */
    public function setExcludedAssetGroups(ExcludedAssetGroups $excludedAssetGroups) : self
    {
        $this->excludedAssetGroups = $excludedAssetGroups;
        return $this;
    }
    /**
     * 
     *
     * @return ExcludedScanTargets
     */
    public function getExcludedTargets() : ExcludedScanTargets
    {
        return $this->excludedTargets;
    }
    /**
     * 
     *
     * @param ExcludedScanTargets $excludedTargets
     *
     * @return self
     */
    public function setExcludedTargets(ExcludedScanTargets $excludedTargets) : self
    {
        $this->excludedTargets = $excludedTargets;
        return $this;
    }
    /**
     * 
     *
     * @return IncludedAssetGroups
     */
    public function getIncludedAssetGroups() : IncludedAssetGroups
    {
        return $this->includedAssetGroups;
    }
    /**
     * 
     *
     * @param IncludedAssetGroups $includedAssetGroups
     *
     * @return self
     */
    public function setIncludedAssetGroups(IncludedAssetGroups $includedAssetGroups) : self
    {
        $this->includedAssetGroups = $includedAssetGroups;
        return $this;
    }
    /**
     * 
     *
     * @return IncludedScanTargets
     */
    public function getIncludedTargets() : IncludedScanTargets
    {
        return $this->includedTargets;
    }
    /**
     * 
     *
     * @param IncludedScanTargets $includedTargets
     *
     * @return self
     */
    public function setIncludedTargets(IncludedScanTargets $includedTargets) : self
    {
        $this->includedTargets = $includedTargets;
        return $this;
    }
}