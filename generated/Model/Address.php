<?php

namespace Rapid7\InsightVM\Api\Model;

class Address
{
    /**
     * The IPv4 or IPv6 address.
     *
     * @var string
     */
    protected $ip;
    /**
     * The Media Access Control (MAC) address. The format is six groups of two hexadecimal digits separated by colons.
     *
     * @var string
     */
    protected $mac;
    /**
     * The IPv4 or IPv6 address.
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * The IPv4 or IPv6 address.
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip) : self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * The Media Access Control (MAC) address. The format is six groups of two hexadecimal digits separated by colons.
     *
     * @return string
     */
    public function getMac() : string
    {
        return $this->mac;
    }
    /**
     * The Media Access Control (MAC) address. The format is six groups of two hexadecimal digits separated by colons.
     *
     * @param string $mac
     *
     * @return self
     */
    public function setMac(string $mac) : self
    {
        $this->mac = $mac;
        return $this;
    }
}