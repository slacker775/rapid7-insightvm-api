<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class DeleteSiteSmtpAlert extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $alertId;
    /**
     * Deletes the specified SMTP alert from the site.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     */
    public function __construct(int $id, int $alertId)
    {
        $this->id = $id;
        $this->alertId = $alertId;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{alertId}'), array($this->id, $this->alertId), '/api/3/sites/{id}/alerts/smtp/{alertId}');
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
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\Links', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}