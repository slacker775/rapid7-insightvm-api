<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class UpdateSharedCredential extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates the specified shared credential.
     *
     * @param int $id The identifier of the credential.
     * @param null|\Rapid7\InsightVM\Api\Model\SharedCredential $requestBody 
     */
    public function __construct(int $id, ?\Rapid7\InsightVM\Api\Model\SharedCredential $requestBody = null)
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
        return str_replace(array('{id}'), array($this->id), '/api/3/shared_credentials/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Rapid7\InsightVM\Api\Model\SharedCredential) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
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
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\Links', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialBadRequestException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\BadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}