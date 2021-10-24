<?php

namespace Rapid7\InsightVM\Api\Model;

class AssessmentResult
{
    /**
     * The identifier of the vulnerability check.
     *
     * @var string
     */
    protected $checkId;
    /**
     * If the result is vulnerable with exceptions applied, the identifier(s) of the exceptions actively applied to the result.
     *
     * @var int[]
     */
    protected $exceptions;
    /**
     * An additional discriminating key used to uniquely identify between multiple instances of results on the same finding.
     *
     * @var string
     */
    protected $key;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The port of the service the result was discovered on.
     *
     * @var int
     */
    protected $port;
    /**
     * The proof explaining why the result was found vulnerable. The proof may container embedded HTML formatting markup.
     *
     * @var string
     */
    protected $proof;
    /**
     * The protocol of the service the result was discovered on.
     *
     * @var string
     */
    protected $protocol;
    /**
     * The status of the vulnerability check result.
     *
     * @var string
     */
    protected $status;
    /**
     * The identifier of the vulnerability check.
     *
     * @return string
     */
    public function getCheckId() : string
    {
        return $this->checkId;
    }
    /**
     * The identifier of the vulnerability check.
     *
     * @param string $checkId
     *
     * @return self
     */
    public function setCheckId(string $checkId) : self
    {
        $this->checkId = $checkId;
        return $this;
    }
    /**
     * If the result is vulnerable with exceptions applied, the identifier(s) of the exceptions actively applied to the result.
     *
     * @return int[]
     */
    public function getExceptions() : array
    {
        return $this->exceptions;
    }
    /**
     * If the result is vulnerable with exceptions applied, the identifier(s) of the exceptions actively applied to the result.
     *
     * @param int[] $exceptions
     *
     * @return self
     */
    public function setExceptions(array $exceptions) : self
    {
        $this->exceptions = $exceptions;
        return $this;
    }
    /**
     * An additional discriminating key used to uniquely identify between multiple instances of results on the same finding.
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * An additional discriminating key used to uniquely identify between multiple instances of results on the same finding.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
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
     * The port of the service the result was discovered on.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The port of the service the result was discovered on.
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
     * The proof explaining why the result was found vulnerable. The proof may container embedded HTML formatting markup.
     *
     * @return string
     */
    public function getProof() : string
    {
        return $this->proof;
    }
    /**
     * The proof explaining why the result was found vulnerable. The proof may container embedded HTML formatting markup.
     *
     * @param string $proof
     *
     * @return self
     */
    public function setProof(string $proof) : self
    {
        $this->proof = $proof;
        return $this;
    }
    /**
     * The protocol of the service the result was discovered on.
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * The protocol of the service the result was discovered on.
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
     * The status of the vulnerability check result.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the vulnerability check result.
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