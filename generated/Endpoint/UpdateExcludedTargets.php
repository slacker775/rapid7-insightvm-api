<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class UpdateExcludedTargets extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates the excluded targets in a static site.
     *
     * @param int $id The identifier of the site.
     * @param null|array[] $requestBody 
     */
    public function __construct(int $id, ?array $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/api/3/sites/{id}/excluded_targets');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and is_array($this->body[0])) {
            return array(array('Content-Type' => array('application/json')), json_encode($this->body));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\Links', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsBadRequestException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\BadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}