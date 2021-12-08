<?php

namespace Rapid7\InsightVM\Api\Model;

class SmtpSettings
{
    /**
     * The host to send to.
     *
     * @var string
     */
    protected $host;
    /**
     * The port to send to.
     *
     * @var int
     */
    protected $port;
    /**
     * The sender to send from.
     *
     * @var string
     */
    protected $sender;
    /**
     * The host to send to.
     *
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }
    /**
     * The host to send to.
     *
     * @param string $host
     *
     * @return self
     */
    public function setHost(string $host) : self
    {
        $this->host = $host;
        return $this;
    }
    /**
     * The port to send to.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The port to send to.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->port = $port;
        return $this;
    }
    /**
     * The sender to send from.
     *
     * @return string
     */
    public function getSender() : string
    {
        return $this->sender;
    }
    /**
     * The sender to send from.
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