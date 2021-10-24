<?php

namespace Rapid7\InsightVM\Api\Exception;

class RemoveAssetGroupUserUnauthorizedException extends UnauthorizedException
{
    private $unauthorizedError;
    public function __construct(\Rapid7\InsightVM\Api\Model\UnauthorizedError $unauthorizedError)
    {
        parent::__construct('Unauthorized', 401);
        $this->unauthorizedError = $unauthorizedError;
    }
    public function getUnauthorizedError()
    {
        return $this->unauthorizedError;
    }
}