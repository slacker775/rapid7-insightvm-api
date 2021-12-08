<?php

namespace Rapid7\InsightVM\Api\Model;

class Error
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The messages indicating the cause or reason for failure.
     *
     * @var string
     */
    protected $message;
    /**
     * The HTTP status code for the error (same as in the HTTP response).
     *
     * @var string
     */
    protected $status;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @param Link[] $links
     *
     * @return self
     */
    public function setLinks(array $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * The messages indicating the cause or reason for failure.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * The messages indicating the cause or reason for failure.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * The HTTP status code for the error (same as in the HTTP response).
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The HTTP status code for the error (same as in the HTTP response).
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
}