<?php

namespace Rapid7\InsightVM\Api\Exception;

class GetReportServiceUnavailableException extends ServiceUnavailableException
{
    private $serviceUnavailableError;
    public function __construct(\Rapid7\InsightVM\Api\Model\ServiceUnavailableError $serviceUnavailableError)
    {
        parent::__construct('Service Unavailable', 503);
        $this->serviceUnavailableError = $serviceUnavailableError;
    }
    public function getServiceUnavailableError()
    {
        return $this->serviceUnavailableError;
    }
}