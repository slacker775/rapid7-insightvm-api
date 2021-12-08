<?php

namespace Rapid7\InsightVM\Api\Model;

class Link
{
    /**
     * A hypertext reference, which is either a URI (see <a target="_blank" href="https://tools.ietf.org/html/rfc3986">RFC 3986</a>) or URI template (see <a target="_blank" href="https://tools.ietf.org/html/rfc6570">RFC 6570</a>). 
     *
     * @var string
     */
    protected $href;
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