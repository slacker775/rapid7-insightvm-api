<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportEmailSmtp
{
    /**
     * Whether to use global SMTP settings. If enabled, `sender` and `relay` may not be specified.
     *
     * @var bool
     */
    protected $global;
    /**
     * SMTP relay host or IP address.
     *
     * @var string
     */
    protected $relay;
    /**
     * SMTP sender address.
     *
     * @var string
     */
    protected $sender;
    /**
     * Whether to use global SMTP settings. If enabled, `sender` and `relay` may not be specified.
     *
     * @return bool
     */
    public function getGlobal() : bool
    {
        return $this->global;
    }
    /**
     * Whether to use global SMTP settings. If enabled, `sender` and `relay` may not be specified.
     *
     * @param bool $global
     *
     * @return self
     */
    public function setGlobal(bool $global) : self
    {
        $this->global = $global;
        return $this;
    }
    /**
     * SMTP relay host or IP address.
     *
     * @return string
     */
    public function getRelay() : string
    {
        return $this->relay;
    }
    /**
     * SMTP relay host or IP address.
     *
     * @param string $relay
     *
     * @return self
     */
    public function setRelay(string $relay) : self
    {
        $this->relay = $relay;
        return $this;
    }
    /**
     * SMTP sender address.
     *
     * @return string
     */
    public function getSender() : string
    {
        return $this->sender;
    }
    /**
     * SMTP sender address.
     *
     * @param string $sender
     *
     * @return self
     */
    public function setSender(string $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
}