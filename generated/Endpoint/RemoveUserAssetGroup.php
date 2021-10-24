<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class RemoveUserAssetGroup extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $assetGroupId;
    /**
     * Grants the user access to the asset group. Individual asset group access cannot be granted to users with the `allAssetGroups` permission. <span class="authorization">Global Administrator</span>
     *
     * @param int $id The identifier of the user.
     * @param int $assetGroupId The identifier of the asset group.
     */
    public function __construct(int $id, int $assetGroupId)
    {
        $this->id = $id;
        $this->assetGroupId = $assetGroupId;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{assetGroupId}'), array($this->id, $this->assetGroupId), '/api/3/users/{id}/asset_groups/{assetGroupId}');
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
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\Links', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}