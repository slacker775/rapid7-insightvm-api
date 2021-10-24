<?php

namespace Rapid7\InsightVM\Api\Model;

class WebPage
{
    /**
     * The type of link used to traverse or detect the page.
     *
     * @var string
     */
    protected $linkType;
    /**
     * The path to the page (URI).
     *
     * @var string
     */
    protected $path;
    /**
     * The HTTP response code observed with retrieving the page.
     *
     * @var int
     */
    protected $response;
    /**
     * The type of link used to traverse or detect the page.
     *
     * @return string
     */
    public function getLinkType() : string
    {
        return $this->linkType;
    }
    /**
     * The type of link used to traverse or detect the page.
     *
     * @param string $linkType
     *
     * @return self
     */
    public function setLinkType(string $linkType) : self
    {
        $this->linkType = $linkType;
        return $this;
    }
    /**
     * The path to the page (URI).
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The path to the page (URI).
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * The HTTP response code observed with retrieving the page.
     *
     * @return int
     */
    public function getResponse() : int
    {
        return $this->response;
    }
    /**
     * The HTTP response code observed with retrieving the page.
     *
     * @param int $response
     *
     * @return self
     */
    public function setResponse(int $response) : self
    {
        $this->response = $response;
        return $this;
    }
}