<?php

namespace Rapid7\InsightVM\Api\Model;

class CreateAuthenticationSource
{
    /**
     * The type of the authentication source to use to authenticate the user. Defaults to `normal`.
     *
     * @var string
     */
    protected $type;
    /**
     * The type of the authentication source to use to authenticate the user. Defaults to `normal`.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the authentication source to use to authenticate the user. Defaults to `normal`.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}