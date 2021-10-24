<?php

namespace Rapid7\InsightVM\Api\Model;

class PolicyControl
{
    /**
     * The identifier of the CCE item.
     *
     * @var string
     */
    protected $cceItemId;
    /**
     * The platform of the CCE.
     *
     * @var string
     */
    protected $ccePlatform;
    /**
     * The name of the control mapping.
     *
     * @var string
     */
    protected $controlName;
    /**
     * The textual representation of the control identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The published date of the control mapping.
     *
     * @var int
     */
    protected $publishedDate;
    /**
     * The identifier of the CCE item.
     *
     * @return string
     */
    public function getCceItemId() : string
    {
        return $this->cceItemId;
    }
    /**
     * The identifier of the CCE item.
     *
     * @param string $cceItemId
     *
     * @return self
     */
    public function setCceItemId(string $cceItemId) : self
    {
        $this->cceItemId = $cceItemId;
        return $this;
    }
    /**
     * The platform of the CCE.
     *
     * @return string
     */
    public function getCcePlatform() : string
    {
        return $this->ccePlatform;
    }
    /**
     * The platform of the CCE.
     *
     * @param string $ccePlatform
     *
     * @return self
     */
    public function setCcePlatform(string $ccePlatform) : self
    {
        $this->ccePlatform = $ccePlatform;
        return $this;
    }
    /**
     * The name of the control mapping.
     *
     * @return string
     */
    public function getControlName() : string
    {
        return $this->controlName;
    }
    /**
     * The name of the control mapping.
     *
     * @param string $controlName
     *
     * @return self
     */
    public function setControlName(string $controlName) : self
    {
        $this->controlName = $controlName;
        return $this;
    }
    /**
     * The textual representation of the control identifier.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The textual representation of the control identifier.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
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
     * The published date of the control mapping.
     *
     * @return int
     */
    public function getPublishedDate() : int
    {
        return $this->publishedDate;
    }
    /**
     * The published date of the control mapping.
     *
     * @param int $publishedDate
     *
     * @return self
     */
    public function setPublishedDate(int $publishedDate) : self
    {
        $this->publishedDate = $publishedDate;
        return $this;
    }
}