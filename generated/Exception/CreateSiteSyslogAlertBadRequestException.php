<?php

namespace Rapid7\InsightVM\Api\Exception;

class CreateSiteSyslogAlertBadRequestException extends BadRequestException
{
    private $badRequestError;
    public function __construct(\Rapid7\InsightVM\Api\Model\BadRequestError $badRequestError)
    {
        parent::__construct('Bad Request', 400);
        $this->badRequestError = $badRequestError;
    }
    public function getBadRequestError()
    {
        return $this->badRequestError;
    }
}