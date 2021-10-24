<?php

namespace Rapid7\InsightVM\Api\Model;

class UpdateId
{
    /**
     * Product update identifier.
     *
     * @var string
     */
    protected $productId;
    /**
     * Version update identifier.
     *
     * @var string
     */
    protected $versionId;
    /**
     * Product update identifier.
     *
     * @return string
     */
    public function getProductId() : string
    {
        return $this->productId;
    }
    /**
     * Product update identifier.
     *
     * @param string $productId
     *
     * @return self
     */
    public function setProductId(string $productId) : self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * Version update identifier.
     *
     * @return string
     */
    public function getVersionId() : string
    {
        return $this->versionId;
    }
    /**
     * Version update identifier.
     *
     * @param string $versionId
     *
     * @return self
     */
    public function setVersionId(string $versionId) : self
    {
        $this->versionId = $versionId;
        return $this;
    }
}