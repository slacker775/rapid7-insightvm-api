<?php

namespace Rapid7\InsightVM\Api\Model;

class AssetTag
{
    /**
     * The color to use when rendering the tag in a user interface.
     *
     * @var string
     */
    protected $color;
    /**
     * The date and time the tag was created.
     *
     * @var string
     */
    protected $created;
    /**
     * The identifier of the tag.
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
     * The name (label) of the tab.
     *
     * @var string
     */
    protected $name;
    /**
     * The amount to adjust risk of an asset tagged with this tag. 
     *
     * @var AssetTagRiskModifier
     */
    protected $riskModifier;
    /**
     * 
     *
     * @var SearchCriteria
     */
    protected $searchCriteria;
    /**
     * The source of the tag.
     *
     * @var string
     */
    protected $source;
    /**
     * The source(s) by which a tag is applied to an asset.
     *
     * @var TagAssetSource[]
     */
    protected $sources;
    /**
     * The type of the tag.
     *
     * @var string
     */
    protected $type;
    /**
     * The color to use when rendering the tag in a user interface.
     *
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }
    /**
     * The color to use when rendering the tag in a user interface.
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color) : self
    {
        $this->color = $color;
        return $this;
    }
    /**
     * The date and time the tag was created.
     *
     * @return string
     */
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * The date and time the tag was created.
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * The identifier of the tag.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the tag.
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
     * The name (label) of the tab.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name (label) of the tab.
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
     * The amount to adjust risk of an asset tagged with this tag. 
     *
     * @return AssetTagRiskModifier
     */
    public function getRiskModifier() : AssetTagRiskModifier
    {
        return $this->riskModifier;
    }
    /**
     * The amount to adjust risk of an asset tagged with this tag. 
     *
     * @param AssetTagRiskModifier $riskModifier
     *
     * @return self
     */
    public function setRiskModifier(AssetTagRiskModifier $riskModifier) : self
    {
        $this->riskModifier = $riskModifier;
        return $this;
    }
    /**
     * 
     *
     * @return SearchCriteria
     */
    public function getSearchCriteria() : SearchCriteria
    {
        return $this->searchCriteria;
    }
    /**
     * 
     *
     * @param SearchCriteria $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(SearchCriteria $searchCriteria) : self
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
    /**
     * The source of the tag.
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * The source of the tag.
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
    /**
     * The source(s) by which a tag is applied to an asset.
     *
     * @return TagAssetSource[]
     */
    public function getSources() : array
    {
        return $this->sources;
    }
    /**
     * The source(s) by which a tag is applied to an asset.
     *
     * @param TagAssetSource[] $sources
     *
     * @return self
     */
    public function setSources(array $sources) : self
    {
        $this->sources = $sources;
        return $this;
    }
    /**
     * The type of the tag.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the tag.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}