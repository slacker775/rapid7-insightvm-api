<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateDiscovery
{
    /**
     * 
     *
     * @var ScanTemplateAssetDiscovery
     */
    protected $asset;
    /**
     * 
     *
     * @var ScanTemplateDiscoveryPerformance
     */
    protected $perfomance;
    /**
     * 
     *
     * @var ScanTemplateServiceDiscovery
     */
    protected $service;
    /**
     * 
     *
     * @return ScanTemplateAssetDiscovery
     */
    public function getAsset() : ScanTemplateAssetDiscovery
    {
        return $this->asset;
    }
    /**
     * 
     *
     * @param ScanTemplateAssetDiscovery $asset
     *
     * @return self
     */
    public function setAsset(ScanTemplateAssetDiscovery $asset) : self
    {
        $this->asset = $asset;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateDiscoveryPerformance
     */
    public function getPerfomance() : ScanTemplateDiscoveryPerformance
    {
        return $this->perfomance;
    }
    /**
     * 
     *
     * @param ScanTemplateDiscoveryPerformance $perfomance
     *
     * @return self
     */
    public function setPerfomance(ScanTemplateDiscoveryPerformance $perfomance) : self
    {
        $this->perfomance = $perfomance;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateServiceDiscovery
     */
    public function getService() : ScanTemplateServiceDiscovery
    {
        return $this->service;
    }
    /**
     * 
     *
     * @param ScanTemplateServiceDiscovery $service
     *
     * @return self
     */
    public function setService(ScanTemplateServiceDiscovery $service) : self
    {
        $this->service = $service;
        return $this;
    }
}