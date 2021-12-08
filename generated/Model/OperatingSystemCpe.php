<?php

namespace Rapid7\InsightVM\Api\Model;

class OperatingSystemCpe
{
    /**
     * Edition-related terms applied by the vendor to the product. 
     *
     * @var string
     */
    protected $edition;
    /**
     * Defines the language supported in the user interface of the product being described. The format is of the language tag adheres to <a target="_blank" href="https://tools.ietf.org/html/rfc5646">RFC5646</a>.
     *
     * @var string
     */
    protected $language;
    /**
     * Captures any other general descriptive or identifying information which is vendor- or product-specific and which does not logically fit in any other attribute value. 
     *
     * @var string
     */
    protected $other;
    /**
     * A single letter code that designates the particular platform part that is being identified.
     *
     * @var string
     */
    protected $part;
    /**
     * the most common and recognizable title or name of the product.
     *
     * @var string
     */
    protected $product;
    /**
     * Characterizes how the product is tailored to a particular market or class of end users. 
     *
     * @var string
     */
    protected $swEdition;
    /**
     * Characterize the instruction set architecture on which the product operates. 
     *
     * @var string
     */
    protected $targetHW;
    /**
     * Characterize the software computing environment within which the product operates.
     *
     * @var string
     */
    protected $targetSW;
    /**
     * Vendor-specific alphanumeric strings characterizing the particular update, service pack, or point release of the product.
     *
     * @var string
     */
    protected $update;
    /**
     * The full CPE string in the <a target="_blank" href="https://cpe.mitre.org/files/cpe-specification_2.2.pdf">CPE 2.2</a> format.
     *
     * @var string
     */
    protected $v22;
    /**
     * The full CPE string in the <a target="_blank" href="http://nvlpubs.nist.gov/nistpubs/Legacy/IR/nistir7695.pdf">CPE 2.3</a> format.
     *
     * @var string
     */
    protected $v23;
    /**
     * The person or organization that manufactured or created the product.
     *
     * @var string
     */
    protected $vendor;
    /**
     * Vendor-specific alphanumeric strings characterizing the particular release version of the product.
     *
     * @var string
     */
    protected $version;
    /**
     * Edition-related terms applied by the vendor to the product. 
     *
     * @return string
     */
    public function getEdition() : string
    {
        return $this->edition;
    }
    /**
     * Edition-related terms applied by the vendor to the product. 
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
     * Defines the language supported in the user interface of the product being described. The format is of the language tag adheres to <a target="_blank" href="https://tools.ietf.org/html/rfc5646">RFC5646</a>.
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * Defines the language supported in the user interface of the product being described. The format is of the language tag adheres to <a target="_blank" href="https://tools.ietf.org/html/rfc5646">RFC5646</a>.
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * Captures any other general descriptive or identifying information which is vendor- or product-specific and which does not logically fit in any other attribute value. 
     *
     * @return string
     */
    public function getOther() : string
    {
        return $this->other;
    }
    /**
     * Captures any other general descriptive or identifying information which is vendor- or product-specific and which does not logically fit in any other attribute value. 
     *
     * @param string $other
     *
     * @return self
     */
    public function setOther(string $other) : self
    {
        $this->other = $other;
        return $this;
    }
    /**
     * A single letter code that designates the particular platform part that is being identified.
     *
     * @return string
     */
    public function getPart() : string
    {
        return $this->part;
    }
    /**
     * A single letter code that designates the particular platform part that is being identified.
     *
     * @param string $part
     *
     * @return self
     */
    public function setPart(string $part) : self
    {
        $this->part = $part;
        return $this;
    }
    /**
     * the most common and recognizable title or name of the product.
     *
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }
    /**
     * the most common and recognizable title or name of the product.
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
     * Characterizes how the product is tailored to a particular market or class of end users. 
     *
     * @return string
     */
    public function getSwEdition() : string
    {
        return $this->swEdition;
    }
    /**
     * Characterizes how the product is tailored to a particular market or class of end users. 
     *
     * @param string $swEdition
     *
     * @return self
     */
    public function setSwEdition(string $swEdition) : self
    {
        $this->swEdition = $swEdition;
        return $this;
    }
    /**
     * Characterize the instruction set architecture on which the product operates. 
     *
     * @return string
     */
    public function getTargetHW() : string
    {
        return $this->targetHW;
    }
    /**
     * Characterize the instruction set architecture on which the product operates. 
     *
     * @param string $targetHW
     *
     * @return self
     */
    public function setTargetHW(string $targetHW) : self
    {
        $this->targetHW = $targetHW;
        return $this;
    }
    /**
     * Characterize the software computing environment within which the product operates.
     *
     * @return string
     */
    public function getTargetSW() : string
    {
        return $this->targetSW;
    }
    /**
     * Characterize the software computing environment within which the product operates.
     *
     * @param string $targetSW
     *
     * @return self
     */
    public function setTargetSW(string $targetSW) : self
    {
        $this->targetSW = $targetSW;
        return $this;
    }
    /**
     * Vendor-specific alphanumeric strings characterizing the particular update, service pack, or point release of the product.
     *
     * @return string
     */
    public function getUpdate() : string
    {
        return $this->update;
    }
    /**
     * Vendor-specific alphanumeric strings characterizing the particular update, service pack, or point release of the product.
     *
     * @param string $update
     *
     * @return self
     */
    public function setUpdate(string $update) : self
    {
        $this->update = $update;
        return $this;
    }
    /**
     * The full CPE string in the <a target="_blank" href="https://cpe.mitre.org/files/cpe-specification_2.2.pdf">CPE 2.2</a> format.
     *
     * @return string
     */
    public function getV22() : string
    {
        return $this->v22;
    }
    /**
     * The full CPE string in the <a target="_blank" href="https://cpe.mitre.org/files/cpe-specification_2.2.pdf">CPE 2.2</a> format.
     *
     * @param string $v22
     *
     * @return self
     */
    public function setV22(string $v22) : self
    {
        $this->v22 = $v22;
        return $this;
    }
    /**
     * The full CPE string in the <a target="_blank" href="http://nvlpubs.nist.gov/nistpubs/Legacy/IR/nistir7695.pdf">CPE 2.3</a> format.
     *
     * @return string
     */
    public function getV23() : string
    {
        return $this->v23;
    }
    /**
     * The full CPE string in the <a target="_blank" href="http://nvlpubs.nist.gov/nistpubs/Legacy/IR/nistir7695.pdf">CPE 2.3</a> format.
     *
     * @param string $v23
     *
     * @return self
     */
    public function setV23(string $v23) : self
    {
        $this->v23 = $v23;
        return $this;
    }
    /**
     * The person or organization that manufactured or created the product.
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * The person or organization that manufactured or created the product.
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
     * Vendor-specific alphanumeric strings characterizing the particular release version of the product.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * Vendor-specific alphanumeric strings characterizing the particular release version of the product.
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