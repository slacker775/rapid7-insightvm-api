<?php

namespace Rapid7\InsightVM\Api\Endpoint;

class UpdateTagSearchCriteria extends \Rapid7\InsightVM\Api\Runtime\Client\BaseEndpoint implements \Rapid7\InsightVM\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Updates the search criteria associated with the tag.
    
    The following table outlines the search criteria fields and the available operators:
    | Field | Operators |
    | ---------- | ---------------- |
    | asset name | is,is not,starts with,ends with,contains,does not contain,is empty,is not empty,is like,not like |
    | asset risk score | is,is not,in range,greater than,less than |
    | container image | is,is not,starts with,ends with,contains,does not contain,is like,not like |
    | container status | is,is not |
    | containers | are |
    | CVE IDs | is,is not,contains,does not contain |
    | CVSS Access Complexity | is,is not |
    | CVSS Authentication Required | is,is not |
    | CVSS Access Vector | is,is not |
    | CVSS Availability Impact | is,is not |
    | CVSS Confidentiality Impact | is,is not |
    | CVSS Integrity Impact | is,is not |
    | CVSS Access Complexity | is,is not |
    | host type | in,not in |
    | asset IP Address | is,is not,in range,not in range,is like,not like |
    | asset IP Address Type | in,not in |
    | asset last scan date | is on or before,is on or after,is between,is earlier than,is within the last |
    | mobile device last sync time | is within the last,is earlier than |
    | open ports | is,is not,in range |
    | asset operating system | contains,does not contain,is empty,is not empty |
    | asset alternate address type | in |
    | asset PCI compliance | is |
    | asset service name | contains,does not contain |
    | asset site ID | in,not in |
    | asset software | contains,does not contain|
    | asset Criticality tag | is,is not,is greater than,is less than,is applied,is not applied |
    | asset Custom tag | is,is not,starts with, ends with,contains,does not contain,is applied,is not applied |
    | asset Location tag | is,is not,starts with,ends with,contains,does not contain,is applied,is not applied |
    | asset Owner tag | is,is not,starts with,ends with,contains,does not contain,is applied,is not applied |
    | asset vulnerability validated status | are |
    | asset VAsset cluster | is,is not,contains,does not contain,starts with |
    | asset VAsset datacenter | is,is not |
    | asset VAsset host name | is,is not,contains,does not contain,starts with |
    | asset VAsset power state | in,not in |
    | asset VAsset resource pool path | contains,does not contain |
    | asset vulnerability assessed | is on or before,is on or after,is between,is earlier than,is within the last |
    | asset vulnerability category | is,is not,starts with,ends with,contains,does not contain|
    | asset vulnerability CVSS score | is,is not,in range,is greater than,is less than |
    | asset vulnerability exposures | includes,does not include |
    | asset vulnerability title | contains,does not contain,is,is not,starts with,ends with |
    
    The following table outlines the operators and the values associated with them:
    | Operator | Values |
    | -------- | ------ |
    | are | A single string property named "value" |
    | is between | A number property named "lower" and a number property named "upper" |
    | contains | A single string property named "value" |
    | does not contain | A single string property named "value" |
    | is earlier than | A single number property named "value" |
    | ends with | A single string property named "value" |
    | is greater than | A single number property named "value" |
    | in | An array property named "values" |
    | not in | An array property named "values" |
    | in range | A number property named "lower" and a number property named "upper" |
    | includes | An array property named "values" |
    | is | A single string property named "value" |
    | is not | A single string property named "value" |
    | is applied | No value |
    | is not applied | No value |
    | is empty | No value |
    | is not empty | No value |
    | less than | A single number property named "value" |
    | like | A single string property named "value" |
    | not contains | A single string property named "value" |
    | not in range | A number property named "lower" and a number property named "upper" |
    | not like | A single string property named "value" |
    | is on or after | A single string property named "value", which is the date in ISO8601 format (yyyy-MM-dd) |
    | is on or before | A single string property named "value", which is the date in ISO8601 format (yyyy-MM-dd) |
    | starts with | A single string property named "value" |
    | is within the last | A single number property named "value" |
    
    The following fields have enumerated values:
    | Field | Acceptable Values |
    | ----- | ----------------- |
    | containers | 0=present, 1=not present |
    | asset vulnerability validated status | 0=present, 1=not present |
    | asset PCI compliance | 0=fail, 1=pass |
    | asset alternate address type | 0=IPv4, 1=IPv6 |
    | asset IP Address Type | 0=IPv4, 1=IPv6 |
    | host type | 0=Unknown, 1=Guest, 2=Hypervisor, 3=Physical, 4=Mobile |
    | CVSS Access Complexity | L=Low, M=Medium, H=High |
    | CVSS Integrity Impact | N=None, P=Partial, C=Complete |
    | CVSS Confidentiality Impact | N=None, P=Partial, C=Complete |
    | CVSS Availability Impact | N=None, P=Partial, C=Complete |
    | CVSS Access Vector | L=Local, A=Adjacent, N=Network |
    | CVSS Authentication Required | N=None, S=Single, M=Multiple |
    | CVSS Access Complexity | L=Low, M=Medium, H=High |
    | container status | created, running, paused, restarting, exited, dead, unknown |
    
    *
    * @param int $id The identifier of the tag.
    * @param null|\Rapid7\InsightVM\Api\Model\SearchCriteria $requestBody 
    */
    public function __construct(int $id, ?\Rapid7\InsightVM\Api\Model\SearchCriteria $requestBody = null)
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
        return str_replace(array('{id}'), array($this->id), '/api/3/tags/{id}/search_criteria');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Rapid7\InsightVM\Api\Model\SearchCriteria) {
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
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\Links', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaBadRequestException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\BadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaUnauthorizedException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\UnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaNotFoundException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\NotFoundError', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaInternalServerErrorException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\InternalServerError', 'json'));
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaServiceUnavailableException($serializer->deserialize($body, 'Rapid7\\InsightVM\\Api\\Model\\ServiceUnavailableError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Basic');
    }
}