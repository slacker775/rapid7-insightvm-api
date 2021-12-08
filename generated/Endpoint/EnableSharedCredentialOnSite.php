<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class EnableSharedCredentialOnSite extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $credentialId;
    /**
     * Enable or disable the shared credential for the site's scans.
     *
     * @param int $id The identifier of the site.
     * @param int $credentialId The identifier of the shared credential.
     * @param null|bool $requestBody 
     */
    public function __construct(int $id, int $credentialId, ?bool $requestBody = null)
    {
        $this->id = $id;
        $this->credentialId = $credentialId;
        $this->body = $requestBody;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{credentialId}'), array($this->id, $this->credentialId), '/api/3/sites/{id}/shared_credentials/{credentialId}/enabled');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_bool($this->body)) {
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
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\Links', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteBadRequestException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\BadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}