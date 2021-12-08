<?php

namespace Rapid7\InsightVM\Api\Model;

class AssetCreatedOrUpdatedReference
{
    /**
     * 
     *
     * @var ReferenceWithAssetIDLink
     */
    protected $body;
    /**
     * 
     *
     * @var string
     */
    protected $statusCode;
    /**
     * 
     *
     * @return ReferenceWithAssetIDLink
     */
    public function getBody() : ReferenceWithAssetIDLink
    {
        return $this->body;
    }
    /**
     * 
     *
     * @param ReferenceWithAssetIDLink $body
     *
     * @return self
     */
    public function setBody(ReferenceWithAssetIDLink $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusCode() : string
    {
        return $this->statusCode;
    }
    /**
     * 
     *
     * @param string $statusCode
     *
     * @return self
     */
    public function setStatusCode(string $statusCode) : self
    {
        $this->statusCode = $statusCode;
        return $this;
    }
}