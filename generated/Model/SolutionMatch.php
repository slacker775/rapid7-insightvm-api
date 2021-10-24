<?php

namespace Rapid7\InsightVM\Api\Model;

class SolutionMatch
{
    /**
     * The identifier of the vulnerability check used to match the solution, if type is `check`.
     *
     * @var string
     */
    protected $check;
    /**
     * The confidence of the matching process for the solution.
     *
     * @var string
     */
    protected $confidence;
    /**
     * 
     *
     * @var Fingerprint
     */
    protected $fingerprint;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The identifier of the matched solution.
     *
     * @var string
     */
    protected $solution;
    /**
     * The means by which a solution was matched.
     *
     * @var string
     */
    protected $type;
    /**
     * The identifier of the vulnerability check used to match the solution, if type is `check`.
     *
     * @return string
     */
    public function getCheck() : string
    {
        return $this->check;
    }
    /**
     * The identifier of the vulnerability check used to match the solution, if type is `check`.
     *
     * @param string $check
     *
     * @return self
     */
    public function setCheck(string $check) : self
    {
        $this->check = $check;
        return $this;
    }
    /**
     * The confidence of the matching process for the solution.
     *
     * @return string
     */
    public function getConfidence() : string
    {
        return $this->confidence;
    }
    /**
     * The confidence of the matching process for the solution.
     *
     * @param string $confidence
     *
     * @return self
     */
    public function setConfidence(string $confidence) : self
    {
        $this->confidence = $confidence;
        return $this;
    }
    /**
     * 
     *
     * @return Fingerprint
     */
    public function getFingerprint() : Fingerprint
    {
        return $this->fingerprint;
    }
    /**
     * 
     *
     * @param Fingerprint $fingerprint
     *
     * @return self
     */
    public function setFingerprint(Fingerprint $fingerprint) : self
    {
        $this->fingerprint = $fingerprint;
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
     * The identifier of the matched solution.
     *
     * @return string
     */
    public function getSolution() : string
    {
        return $this->solution;
    }
    /**
     * The identifier of the matched solution.
     *
     * @param string $solution
     *
     * @return self
     */
    public function setSolution(string $solution) : self
    {
        $this->solution = $solution;
        return $this;
    }
    /**
     * The means by which a solution was matched.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The means by which a solution was matched.
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