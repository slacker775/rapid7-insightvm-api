<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class RemoveAssetFromAssetGroup extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $assetId;
    /**
     * Removes an asset from an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param int $assetId The identifier of the asset.
     */
    public function __construct(int $id, int $assetId)
    {
        $this->id = $id;
        $this->assetId = $assetId;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{assetId}'), array($this->id, $this->assetId), '/api/3/asset_groups/{id}/assets/{assetId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\Links', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}