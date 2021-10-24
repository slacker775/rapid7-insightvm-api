<?php

namespace Rapid7\InsightVM\Api\Model;

class Software
{
    /**
     * ${software.attributes.description}
     *
     * @var Configuration[]
     */
    protected $configurations;
    /**
     * 
     *
     * @var SoftwareCpe
     */
    protected $cpe;
    /**
     * The description of the software.
     *
     * @var string
     */
    protected $description;
    /**
     * The family of the software.
     *
     * @var string
     */
    protected $family;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * The product of the software.
     *
     * @var string
     */
    protected $product;
    /**
     * The version of the software.
     *
     * @var string
     */
    protected $type;
    /**
     * The vendor of the software.
     *
     * @var string
     */
    protected $vendor;
    /**
     * The version of the software.
     *
     * @var string
     */
    protected $version;
    /**
     * ${software.attributes.description}
     *
     * @return Configuration[]
     */
    public function getConfigurations() : array
    {
        return $this->configurations;
    }
    /**
     * ${software.attributes.description}
     *
     * @param Configuration[] $configurations
     *
     * @return self
     */
    public function setConfigurations(array $configurations) : self
    {
        $this->configurations = $configurations;
        return $this;
    }
    /**
     * 
     *
     * @return SoftwareCpe
     */
    public function getCpe() : SoftwareCpe
    {
        return $this->cpe;
    }
    /**
     * 
     *
     * @param SoftwareCpe $cpe
     *
     * @return self
     */
    public function setCpe(SoftwareCpe $cpe) : self
    {
        $this->cpe = $cpe;
        return $this;
    }
    /**
     * The description of the software.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the software.
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
     * The family of the software.
     *
     * @return string
     */
    public function getFamily() : string
    {
        return $this->family;
    }
    /**
     * The family of the software.
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
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
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
     * The product of the software.
     *
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }
    /**
     * The product of the software.
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
     * The version of the software.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The version of the software.
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
    /**
     * The vendor of the software.
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * The vendor of the software.
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
     * The version of the software.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the software.
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