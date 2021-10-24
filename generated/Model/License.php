<?php

namespace Rapid7\InsightVM\Api\Model;

class License
{
    /**
     * The edition of the product.
     *
     * @var string
     */
    protected $edition;
    /**
     * Whether the license is a time-restricted evaluation.
     *
     * @var bool
     */
    protected $evaluation;
    /**
     * The date and time the license expires.
     *
     * @var \DateTime
     */
    protected $expires;
    /**
     * 
     *
     * @var Features
     */
    protected $features;
    /**
     * 
     *
     * @var LicenseLimits
     */
    protected $limits;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * Whether the license is perpetual.
     *
     * @var bool
     */
    protected $perpetual;
    /**
     * The status of the license.
     *
     * @var string
     */
    protected $status;
    /**
     * The edition of the product.
     *
     * @return string
     */
    public function getEdition() : string
    {
        return $this->edition;
    }
    /**
     * The edition of the product.
     *
     * @param string $edition
     *
     * @return self
     */
    public function setEdition(string $edition) : self
    {
        $this->edition = $edition;
        return $this;
    }
    /**
     * Whether the license is a time-restricted evaluation.
     *
     * @return bool
     */
    public function getEvaluation() : bool
    {
        return $this->evaluation;
    }
    /**
     * Whether the license is a time-restricted evaluation.
     *
     * @param bool $evaluation
     *
     * @return self
     */
    public function setEvaluation(bool $evaluation) : self
    {
        $this->evaluation = $evaluation;
        return $this;
    }
    /**
     * The date and time the license expires.
     *
     * @return \DateTime
     */
    public function getExpires() : \DateTime
    {
        return $this->expires;
    }
    /**
     * The date and time the license expires.
     *
     * @param \DateTime $expires
     *
     * @return self
     */
    public function setExpires(\DateTime $expires) : self
    {
        $this->expires = $expires;
        return $this;
    }
    /**
     * 
     *
     * @return Features
     */
    public function getFeatures() : Features
    {
        return $this->features;
    }
    /**
     * 
     *
     * @param Features $features
     *
     * @return self
     */
    public function setFeatures(Features $features) : self
    {
        $this->features = $features;
        return $this;
    }
    /**
     * 
     *
     * @return LicenseLimits
     */
    public function getLimits() : LicenseLimits
    {
        return $this->limits;
    }
    /**
     * 
     *
     * @param LicenseLimits $limits
     *
     * @return self
     */
    public function setLimits(LicenseLimits $limits) : self
    {
        $this->limits = $limits;
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
     * Whether the license is perpetual.
     *
     * @return bool
     */
    public function getPerpetual() : bool
    {
        return $this->perpetual;
    }
    /**
     * Whether the license is perpetual.
     *
     * @param bool $perpetual
     *
     * @return self
     */
    public function setPerpetual(bool $perpetual) : self
    {
        $this->perpetual = $perpetual;
        return $this;
    }
    /**
     * The status of the license.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the license.
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