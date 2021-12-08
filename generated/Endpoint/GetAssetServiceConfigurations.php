<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class GetAssetServiceConfigurations extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $protocol;
    protected $port;
    /**
     * Returns the configuration (properties) of a port and protocol on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     */
    public function __construct(int $id, string $protocol, int $port)
    {
        $this->id = $id;
        $this->protocol = $protocol;
        $this->port = $port;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{protocol}', '{port}'), array($this->id, $this->protocol, $this->port), '/api/3/assets/{id}/services/{protocol}/{port}/configurations');
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
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesConfiguration
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ResourcesConfiguration', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}