<?php

namespace Rapid7\InsightVM\Api\Model;

class SiteUpdateResource
{
    /**
     * The site's description.
     *
     * @var string
     */
    protected $description;
    /**
     * The identifier of a scan engine.
     *
     * @var int
     */
    protected $engineId;
    /**
     * The site importance.
     *
     * @var string
     */
    protected $importance;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The site name. Name must be unique.
     *
     * @var string
     */
    protected $name;
    /**
     * The identifier of a scan template.
     *
     * @var string
     */
    protected $scanTemplateId;
    /**
     * The site's description.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The site's description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * The identifier of a scan engine.
     *
     * @return int
     */
    public function getEngineId() : int
    {
        return $this->engineId;
    }
    /**
     * The identifier of a scan engine.
     *
     * @param int $engineId
     *
     * @return self
     */
    public function setEngineId(int $engineId) : self
    {
        $this->engineId = $engineId;
        return $this;
    }
    /**
     * The site importance.
     *
     * @return string
     */
    public function getImportance() : string
    {
        return $this->importance;
    }
    /**
     * The site importance.
     *
     * @param string $importance
     *
     * @return self
     */
    public function setImportance(string $importance) : self
    {
        $this->importance = $importance;
        return $this;
    }
    /**
     * 
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * 
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
     * The site name. Name must be unique.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The site name. Name must be unique.
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
     * The identifier of a scan template.
     *
     * @return string
     */
    public function getScanTemplateId() : string
    {
        return $this->scanTemplateId;
    }
    /**
     * The identifier of a scan template.
     *
     * @param string $scanTemplateId
     *
     * @return self
     */
    public function setScanTemplateId(string $scanTemplateId) : self
    {
        $this->scanTemplateId = $scanTemplateId;
        return $this;
    }
}