<?php

namespace Rapid7\InsightVM\Api\Model;

class Solution
{
    /**
     * 
     *
     * @var AdditionalInformation
     */
    protected $additionalInformation;
    /**
     * The systems or software the solution applies to.
     *
     * @var string
     */
    protected $appliesTo;
    /**
     * The estimated duration to apply the solution, in ISO 8601 format. For example: `"PT5M"`.
     *
     * @var string
     */
    protected $estimate;
    /**
     * The identifier of the solution.
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
     * 
     *
     * @var Steps
     */
    protected $steps;
    /**
     * 
     *
     * @var Summary
     */
    protected $summary;
    /**
     * The type of the solution. One of: `"Configuration"`, `"Rollup patch"`, `"Patch"`
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return AdditionalInformation
     */
    public function getAdditionalInformation() : AdditionalInformation
    {
        return $this->additionalInformation;
    }
    /**
     * 
     *
     * @param AdditionalInformation $additionalInformation
     *
     * @return self
     */
    public function setAdditionalInformation(AdditionalInformation $additionalInformation) : self
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }
    /**
     * The systems or software the solution applies to.
     *
     * @return string
     */
    public function getAppliesTo() : string
    {
        return $this->appliesTo;
    }
    /**
     * The systems or software the solution applies to.
     *
     * @param string $appliesTo
     *
     * @return self
     */
    public function setAppliesTo(string $appliesTo) : self
    {
        $this->appliesTo = $appliesTo;
        return $this;
    }
    /**
     * The estimated duration to apply the solution, in ISO 8601 format. For example: `"PT5M"`.
     *
     * @return string
     */
    public function getEstimate() : string
    {
        return $this->estimate;
    }
    /**
     * The estimated duration to apply the solution, in ISO 8601 format. For example: `"PT5M"`.
     *
     * @param string $estimate
     *
     * @return self
     */
    public function setEstimate(string $estimate) : self
    {
        $this->estimate = $estimate;
        return $this;
    }
    /**
     * The identifier of the solution.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The identifier of the solution.
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
     * 
     *
     * @return Steps
     */
    public function getSteps() : Steps
    {
        return $this->steps;
    }
    /**
     * 
     *
     * @param Steps $steps
     *
     * @return self
     */
    public function setSteps(Steps $steps) : self
    {
        $this->steps = $steps;
        return $this;
    }
    /**
     * 
     *
     * @return Summary
     */
    public function getSummary() : Summary
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param Summary $summary
     *
     * @return self
     */
    public function setSummary(Summary $summary) : self
    {
        $this->summary = $summary;
        return $this;
    }
    /**
     * The type of the solution. One of: `"Configuration"`, `"Rollup patch"`, `"Patch"`
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the solution. One of: `"Configuration"`, `"Rollup patch"`, `"Patch"`
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