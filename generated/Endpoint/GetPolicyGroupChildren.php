<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class GetPolicyGroupChildren extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $policyId;
    protected $groupId;
    /**
     * Retrieves a paged resource of either policy rules, or groups, that are defined directly underneath the specified policy group.
     *
     * @param int $policyId The identifier of the policy
     * @param int $groupId The identifier of the policy group.
     */
    public function __construct(int $policyId, int $groupId)
    {
        $this->policyId = $policyId;
        $this->groupId = $groupId;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{policyId}', '{groupId}'), array($this->policyId, $this->groupId), '/api/3/policies/{policyId}/groups/{groupId}/children');
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
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\PageOfPolicyItem', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}