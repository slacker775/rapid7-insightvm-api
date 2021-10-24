<?php

namespace Rapid7\InsightVM\Api\Model;

class ServiceLink
{
    /**
     * A hypertext reference, which is either a URI (see <a target="_blank" href="https://tools.ietf.org/html/rfc3986">RFC 3986</a>) or URI template (see <a target="_blank" href="https://tools.ietf.org/html/rfc6570">RFC 6570</a>). 
     *
     * @var string
     */
    protected $href;
    /**
     * The port of the service.
     *
     * @var int
     */
    protected $port;
    /**
     * The protocol of the service.
     *
     * @var string
     */
    protected $protocol;
    /**
     * The link relation type. This value is one from the <a target="_blank" href="https://tools.ietf.org/html/rfc5988#section-6.2">Link Relation Type Registry</a> or is the type of resource being linked to.
     *
     * @var string
     */
    protected $rel;
    /**
     * A hypertext reference, which is either a URI (see <a target="_blank" href="https://tools.ietf.org/html/rfc3986">RFC 3986</a>) or URI template (see <a target="_blank" href="https://tools.ietf.org/html/rfc6570">RFC 6570</a>). 
     *
     * @return string
     */
    public function getHref() : string
    {
        return $this->href;
    }
    /**
     * A hypertext reference, which is either a URI (see <a target="_blank" href="https://tools.ietf.org/html/rfc3986">RFC 3986</a>) or URI template (see <a target="_blank" href="https://tools.ietf.org/html/rfc6570">RFC 6570</a>). 
     *
     * @param string $href
     *
     * @return self
     */
    public function setHref(string $href) : self
    {
        $this->href = $href;
        return $this;
    }
    /**
     * The port of the service.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The port of the service.
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
     * The protocol of the service.
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * The protocol of the service.
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol) : self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * The link relation type. This value is one from the <a target="_blank" href="https://tools.ietf.org/html/rfc5988#section-6.2">Link Relation Type Registry</a> or is the type of resource being linked to.
     *
     * @return string
     */
    public function getRel() : string
    {
        return $this->rel;
    }
    /**
     * The link relation type. This value is one from the <a target="_blank" href="https://tools.ietf.org/html/rfc5988#section-6.2">Link Relation Type Registry</a> or is the type of resource being linked to.
     *
     * @param string $rel
     *
     * @return self
     */
    public function setRel(string $rel) : self
    {
        $this->rel = $rel;
        return $this;
    }
}