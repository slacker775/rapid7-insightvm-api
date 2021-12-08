<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class GetAssetServiceWebApplication extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $protocol;
    protected $port;
    protected $webApplicationId;
    /**
     * Returns a web application running on a port and protocol on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     * @param int $webApplicationId The identifier of the web application.
     */
    public function __construct(int $id, string $protocol, int $port, int $webApplicationId)
    {
        $this->id = $id;
        $this->protocol = $protocol;
        $this->port = $port;
        $this->webApplicationId = $webApplicationId;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{protocol}', '{port}', '{webApplicationId}'), array($this->id, $this->protocol, $this->port, $this->webApplicationId), '/api/3/assets/{id}/services/{protocol}/{port}/web_applications/{webApplicationId}');
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
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\WebApplication
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\WebApplication', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}