<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class GetPolicyGroupAssetResult extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $policyId;
    protected $groupId;
    protected $assetId;
    /**
     * Retrieves an asset resource with rule compliance status against all rules under the specified policy group.
     *
     * @param int $policyId The identifier of the policy
     * @param int $groupId The identifier of the policy group.
     * @param int $assetId The identifier of the asset.
     */
    public function __construct(int $policyId, int $groupId, int $assetId)
    {
        $this->policyId = $policyId;
        $this->groupId = $groupId;
        $this->assetId = $assetId;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{policyId}', '{groupId}', '{assetId}'), array($this->policyId, $this->groupId, $this->assetId), '/api/3/policies/{policyId}/groups/{groupId}/assets/{assetId}');
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
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PolicyAsset
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\PolicyAsset', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}