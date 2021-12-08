<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportConfigScopeResource
{
    /**
     * ${report.config.asset.groups.description}
     *
     * @var int[]
     */
    protected $assetGroups;
    /**
     * ${report.config.assets.description}
     *
     * @var int[]
     */
    protected $assets;
    /**
     * ${report.config.scans.description}
     *
     * @var int
     */
    protected $scan;
    /**
     * ${report.config.sites.description}
     *
     * @var int[]
     */
    protected $sites;
    /**
     * ${report.config.tags.description}
     *
     * @var int[]
     */
    protected $tags;
    /**
     * ${report.config.asset.groups.description}
     *
     * @return int[]
     */
    public function getAssetGroups() : array
    {
        return $this->assetGroups;
    }
    /**
     * ${report.config.asset.groups.description}
     *
     * @param int[] $assetGroups
     *
     * @return self
     */
    public function setAssetGroups(array $assetGroups) : self
    {
        $this->assetGroups = $assetGroups;
        return $this;
    }
    /**
     * ${report.config.assets.description}
     *
     * @return int[]
     */
    public function getAssets() : array
    {
        return $this->assets;
    }
    /**
     * ${report.config.assets.description}
     *
     * @param int[] $assets
     *
     * @return self
     */
    public function setAssets(array $assets) : self
    {
        $this->assets = $assets;
        return $this;
    }
    /**
     * ${report.config.scans.description}
     *
     * @return int
     */
    public function getScan() : int
    {
        return $this->scan;
    }
    /**
     * ${report.config.scans.description}
     *
     * @param int $scan
     *
     * @return self
     */
    public function setScan(int $scan) : self
    {
        $this->scan = $scan;
        return $this;
    }
    /**
     * ${report.config.sites.description}
     *
     * @return int[]
     */
    public function getSites() : array
    {
        return $this->sites;
    }
    /**
     * ${report.config.sites.description}
     *
     * @param int[] $sites
     *
     * @return self
     */
    public function setSites(array $sites) : self
    {
        $this->sites = $sites;
        return $this;
    }
    /**
     * ${report.config.tags.description}
     *
     * @return int[]
     */
    public function getTags() : array
    {
        return $this->tags;
    }
    /**
     * ${report.config.tags.description}
     *
     * @param int[] $tags
     *
     * @return self
     */
    public function setTags(array $tags) : self
    {
        $this->tags = $tags;
        return $this;
    }
}