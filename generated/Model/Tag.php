<?php

namespace Rapid7\InsightVM\Api\Model;

class Tag
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
     * @var \DateTime
     */
    protected $created;
    /**
     * The identifier of the tag.
     *
     * @var int
     */
    protected $id;
    /**
     * 
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
     * @var float
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
     * @return \DateTime
     */
    public function getCreated() : \DateTime
    {
        return $this->created;
    }
    /**
     * The date and time the tag was created.
     *
     * @param \DateTime $created
     *
     * @return self
     */
    public function setCreated(\DateTime $created) : self
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
     * @return float
     */
    public function getRiskModifier() : float
    {
        return $this->riskModifier;
    }
    /**
     * The amount to adjust risk of an asset tagged with this tag. 
     *
     * @param float $riskModifier
     *
     * @return self
     */
    public function setRiskModifier(float $riskModifier) : self
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