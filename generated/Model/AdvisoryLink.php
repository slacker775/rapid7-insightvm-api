<?php

namespace Rapid7\InsightVM\Api\Model;

class AdvisoryLink
{
    /**
     * The hypertext reference for the vulnerability reference.
     *
     * @var string
     */
    protected $href;
    /**
     * The relation of the hypermedia link, `"Advisory"`.
     *
     * @var string
     */
    protected $rel;
    /**
     * The hypertext reference for the vulnerability reference.
     *
     * @return string
     */
    public function getHref() : string
    {
        return $this->href;
    }
    /**
     * The hypertext reference for the vulnerability reference.
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
     * The relation of the hypermedia link, `"Advisory"`.
     *
     * @return string
     */
    public function getRel() : string
    {
        return $this->rel;
    }
    /**
     * The relation of the hypermedia link, `"Advisory"`.
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