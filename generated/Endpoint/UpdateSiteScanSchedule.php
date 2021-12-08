<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class UpdateSiteScanSchedule extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $scheduleId;
    /**
     * Updates the specified scan schedule.
     *
     * @param int $id The identifier of the site.
     * @param int $scheduleId The identifier of the scan schedule.
     * @param null|\Rapid7\InsightVM\Api\Model\ScanSchedule $requestBody 
     */
    public function __construct(int $id, int $scheduleId, ?\Rapid7\InsightVM\Api\Model\ScanSchedule $requestBody = null)
    {
        $this->id = $id;
        $this->scheduleId = $scheduleId;
        $this->body = $requestBody;
    }
    use \Rapid7\InsightVM\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{scheduleId}'), array($this->id, $this->scheduleId), '/api/3/sites/{id}/scan_schedules/{scheduleId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Rapid7\InsightVM\Api\Model\ScanSchedule) {
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
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\Links', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleBadRequestException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\BadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}