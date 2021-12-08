<?php

namespace Rapid7\InsightVM\Api\Model;

class AuthenticationSettings
{
    /**
     * The maximum number of failed login attempts for an account becomes locked.
     *
     * @var int
     */
    protected $loginLockThreshold;
    /**
     * The maximum number of failed login attempts for an account becomes locked.
     *
     * @return int
     */
    public function getLoginLockThreshold() : int
    {
        return $this->loginLockThreshold;
    }
    /**
     * The maximum number of failed login attempts for an account becomes locked.
     *
     * @param int $loginLockThreshold
     *
     * @return self
     */
    public function setLoginLockThreshold(int $loginLockThreshold) : self
    {
        $this->loginLockThreshold = $loginLockThreshold;
        return $this;
    }
}