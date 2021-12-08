<?php

namespace Rapid7\InsightVM\Api\Model;

class Fingerprint
{
    /**
     * The description of the matched fingerprint.
     *
     * @var string
     */
    protected $description;
    /**
     * The family of the matched fingerprint.
     *
     * @var string
     */
    protected $family;
    /**
     * The product of the matched fingerprint.
     *
     * @var string
     */
    protected $product;
    /**
     * The description of the matched fingerprint.
     *
     * @var string
     */
    protected $vendor;
    /**
     * The version of the matched fingerprint.
     *
     * @var string
     */
    protected $version;
    /**
     * The description of the matched fingerprint.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the matched fingerprint.
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
     * The family of the matched fingerprint.
     *
     * @return string
     */
    public function getFamily() : string
    {
        return $this->family;
    }
    /**
     * The family of the matched fingerprint.
     *
     * @param string $family
     *
     * @return self
     */
    public function setFamily(string $family) : self
    {
        $this->family = $family;
        return $this;
    }
    /**
     * The product of the matched fingerprint.
     *
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }
    /**
     * The product of the matched fingerprint.
     *
     * @param string $product
     *
     * @return self
     */
    public function setProduct(string $product) : self
    {
        $this->product = $product;
        return $this;
    }
    /**
     * The description of the matched fingerprint.
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * The description of the matched fingerprint.
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(string $vendor) : self
    {
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * The version of the matched fingerprint.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the matched fingerprint.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
}