<?php

namespace Rapid7\InsightVM\Api\Model;

class OperatingSystem
{
    /**
     * The architecture of the operating system.
     *
     * @var string
     */
    protected $architecture;
    /**
     * Configuration key-values pairs enumerated on the operating system.
     *
     * @var Configuration[]
     */
    protected $configurations;
    /**
     * 
     *
     * @var OperatingSystemCpe
     */
    protected $cpe;
    /**
     * The description of the operating system (containing vendor, family, product, version and architecture in a single string).
     *
     * @var string
     */
    protected $description;
    /**
     * The family of the operating system.
     *
     * @var string
     */
    protected $family;
    /**
     * The identifier of the operating system.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the operating system.
     *
     * @var string
     */
    protected $product;
    /**
     * A combination of vendor and family (with redundancies removed), suitable for grouping.
     *
     * @var string
     */
    protected $systemName;
    /**
     * The type of operating system.
     *
     * @var string
     */
    protected $type;
    /**
     * The vendor of the operating system.
     *
     * @var string
     */
    protected $vendor;
    /**
     * The version of the operating system.
     *
     * @var string
     */
    protected $version;
    /**
     * The architecture of the operating system.
     *
     * @return string
     */
    public function getArchitecture() : string
    {
        return $this->architecture;
    }
    /**
     * The architecture of the operating system.
     *
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture(string $architecture) : self
    {
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * Configuration key-values pairs enumerated on the operating system.
     *
     * @return Configuration[]
     */
    public function getConfigurations() : array
    {
        return $this->configurations;
    }
    /**
     * Configuration key-values pairs enumerated on the operating system.
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
     * @return OperatingSystemCpe
     */
    public function getCpe() : OperatingSystemCpe
    {
        return $this->cpe;
    }
    /**
     * 
     *
     * @param OperatingSystemCpe $cpe
     *
     * @return self
     */
    public function setCpe(OperatingSystemCpe $cpe) : self
    {
        $this->cpe = $cpe;
        return $this;
    }
    /**
     * The description of the operating system (containing vendor, family, product, version and architecture in a single string).
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the operating system (containing vendor, family, product, version and architecture in a single string).
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
     * The family of the operating system.
     *
     * @return string
     */
    public function getFamily() : string
    {
        return $this->family;
    }
    /**
     * The family of the operating system.
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
     * The identifier of the operating system.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the operating system.
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
     * The name of the operating system.
     *
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }
    /**
     * The name of the operating system.
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
     * A combination of vendor and family (with redundancies removed), suitable for grouping.
     *
     * @return string
     */
    public function getSystemName() : string
    {
        return $this->systemName;
    }
    /**
     * A combination of vendor and family (with redundancies removed), suitable for grouping.
     *
     * @param string $systemName
     *
     * @return self
     */
    public function setSystemName(string $systemName) : self
    {
        $this->systemName = $systemName;
        return $this;
    }
    /**
     * The type of operating system.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of operating system.
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
     * The vendor of the operating system.
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * The vendor of the operating system.
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
     * The version of the operating system.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the operating system.
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