<?php

namespace Rapid7\InsightVM\Api\Exception;

class GetSolutionsInternalServerErrorException extends InternalServerErrorException
{
    private $internalServerError;
    public function __construct(\Rapid7\InsightVM\Api\Model\InternalServerError $internalServerError)
    {
        parent::__construct('Internal Server Error', 500);
        $this->internalServerError = $internalServerError;
    }
    public function getInternalServerError()
    {
        return $this->internalServerError;
    }
}