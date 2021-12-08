<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class GetPolicies extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    /**
     * Retrieves a paged resource of policies.
     *
     * @param array $queryParameters {
     *     @var string $filter Filters the retrieved policies with those whose titles that match the parameter.
     *     @var bool $scannedOnly Flag indicating the policies retrieved should only include those with Pass or Fail compliance results. The list of scanned policies is based on the user's list of accessible assets.
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/api/3/policies';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('filter', 'scannedOnly', 'page', 'size', 'sort'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 0, 'size' => 10));
        $optionsResolver->setAllowedTypes('filter', array('string'));
        $optionsResolver->setAllowedTypes('scannedOnly', array('bool'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('size', array('int'));
        $optionsResolver->setAllowedTypes('sort', array('array'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicy
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\PageOfPolicy', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPoliciesUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPoliciesNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPoliciesInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetPoliciesServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}