<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class GetPolicyRuleRationale extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $policyId;
    protected $ruleId;
    /**
     * Retrieves the policy rule rationale for the specified policy.
     *
     * @param int $policyId The identifier of the policy
     * @param int $ruleId The identifier of the policy rule.
     */
    public function __construct(int $policyId, int $ruleId)
    {
        $this->policyId = $policyId;
        $this->ruleId = $ruleId;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{policyId}', '{ruleId}'), array($this->policyId, $this->ruleId), '/api/3/policies/{policyId}/rules/{ruleId}/rationale');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (401 === $status) {
        }
        if (404 === $status) {
        }
        if (500 === $status) {
        }
        if (503 === $status) {
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}