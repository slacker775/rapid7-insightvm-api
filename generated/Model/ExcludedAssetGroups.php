<?php

namespace Rapid7\InsightVM\Api\Model;

class ExcludedAssetGroups
{
    /**
     * List of asset group identifiers. Each element is an integer.
     *
     * @var int[]
     */
    protected $assetGroupIDs;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * List of asset group identifiers. Each element is an integer.
     *
     * @return int[]
     */
    public function getAssetGroupIDs() : array
    {
        return $this->assetGroupIDs;
    }
    /**
     * List of asset group identifiers. Each element is an integer.
     *
     * @param int[] $assetGroupIDs
     *
     * @return self
     */
    public function setAssetGroupIDs(array $assetGroupIDs) : self
    {
        $this->assetGroupIDs = $assetGroupIDs;
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