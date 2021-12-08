<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class UpdateSiteSmtpAlert extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $alertId;
    /**
     * Updates the specified SMTP alert.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param null|\Rapid7\InsightVM\Api\Model\SmtpAlert $requestBody 
     */
    public function __construct(int $id, int $alertId, ?\Rapid7\InsightVM\Api\Model\SmtpAlert $requestBody = null)
    {
        $this->id = $id;
        $this->alertId = $alertId;
        $this->body = $requestBody;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{alertId}'), array($this->id, $this->alertId), '/api/3/sites/{id}/alerts/smtp/{alertId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Rapid7\InsightVM\Api\Model\SmtpAlert) {
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
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\Links', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertBadRequestException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\BadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}