<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportInstance
{
    /**
     * The date the report finished generation.
     *
     * @var string
     */
    protected $generated;
    /**
     * The identifier of the report instance.
     *
     * @var int
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * 
     *
     * @var ReportSize
     */
    protected $size;
    /**
     * The status of the report generation process.
     *
     * @var string
     */
    protected $status;
    /**
     * The URI of the report accessible through the web console. Refer to the `Download` relation hyperlink for a download URI.
     *
     * @var string
     */
    protected $uri;
    /**
     * The date the report finished generation.
     *
     * @return string
     */
    public function getGenerated() : string
    {
        return $this->generated;
    }
    /**
     * The date the report finished generation.
     *
     * @param string $generated
     *
     * @return self
     */
    public function setGenerated(string $generated) : self
    {
        $this->generated = $generated;
        return $this;
    }
    /**
     * The identifier of the report instance.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the report instance.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
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
     * 
     *
     * @return ReportSize
     */
    public function getSize() : ReportSize
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param ReportSize $size
     *
     * @return self
     */
    public function setSize(ReportSize $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * The status of the report generation process.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the report generation process.
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
    /**
     * The URI of the report accessible through the web console. Refer to the `Download` relation hyperlink for a download URI.
     *
     * @return string
     */
    public function getUri() : string
    {
        return $this->uri;
    }
    /**
     * The URI of the report accessible through the web console. Refer to the `Download` relation hyperlink for a download URI.
     *
     * @param string $uri
     *
     * @return self
     */
    public function setUri(string $uri) : self
    {
        $this->uri = $uri;
        return $this;
    }
}