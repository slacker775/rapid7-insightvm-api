<?php

namespace Rapid7\InsightVM\Api\Model;

class HostName
{
    /**
     * The host name (local or FQDN).
     *
     * @var string
     */
    protected $name;
    /**
     * The source used to detect the host name. `user` indicates the host name source is user-supplied (e.g. in a site target definition).
     *
     * @var string
     */
    protected $source;
    /**
     * The host name (local or FQDN).
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The host name (local or FQDN).
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The source used to detect the host name. `user` indicates the host name source is user-supplied (e.g. in a site target definition).
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * The source used to detect the host name. `user` indicates the host name source is user-supplied (e.g. in a site target definition).
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
}