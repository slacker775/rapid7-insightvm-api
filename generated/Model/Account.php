<?php

namespace Rapid7\InsightVM\Api\Model;

class Account
{
    /**
     * 
     *
     * @var string
     */
    protected $service;
    /**
     * 
     *
     * @return string
     */
    public function getService() : string
    {
        return $this->service;
    }
    /**
     * 
     *
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service) : self
    {
        $this->service = $service;
        return $this;
    }
}