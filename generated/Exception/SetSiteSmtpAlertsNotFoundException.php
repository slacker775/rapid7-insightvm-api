<?php

namespace Rapid7\InsightVM\Api\Exception;

class SetSiteSmtpAlertsNotFoundException extends NotFoundException
{
    private $notFoundError;
    public function __construct(\Rapid7\InsightVM\Api\Model\NotFoundError $notFoundError)
    {
        parent::__construct('Not Found', 404);
        $this->notFoundError = $notFoundError;
    }
    public function getNotFoundError()
    {
        return $this->notFoundError;
    }
}