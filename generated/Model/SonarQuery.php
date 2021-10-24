<?php

namespace Rapid7\InsightVM\Api\Model;

class SonarQuery
{
    /**
     * 
     *
     * @var SonarCriteria
     */
    protected $criteria;
    /**
     * The identifier of the Sonar query.
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
     * The name of the Sonar query.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return SonarCriteria
     */
    public function getCriteria() : SonarCriteria
    {
        return $this->criteria;
    }
    /**
     * 
     *
     * @param SonarCriteria $criteria
     *
     * @return self
     */
    public function setCriteria(SonarCriteria $criteria) : self
    {
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * The identifier of the Sonar query.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the Sonar query.
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
     * The name of the Sonar query.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the Sonar query.
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
}