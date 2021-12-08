<?php

namespace Rapid7\InsightVM\Api\Model;

class JsonNode
{
    /**
     * 
     *
     * @var bool
     */
    protected $array;
    /**
     * 
     *
     * @var bool
     */
    protected $bigDecimal;
    /**
     * 
     *
     * @var bool
     */
    protected $bigInteger;
    /**
     * 
     *
     * @var bool
     */
    protected $binary;
    /**
     * 
     *
     * @var bool
     */
    protected $boolean;
    /**
     * 
     *
     * @var bool
     */
    protected $containerNode;
    /**
     * 
     *
     * @var bool
     */
    protected $double;
    /**
     * 
     *
     * @var bool
     */
    protected $float;
    /**
     * 
     *
     * @var bool
     */
    protected $floatingPointNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $int;
    /**
     * 
     *
     * @var bool
     */
    protected $integralNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $long;
    /**
     * 
     *
     * @var bool
     */
    protected $missingNode;
    /**
     * 
     *
     * @var string
     */
    protected $nodeType;
    /**
     * 
     *
     * @var bool
     */
    protected $null;
    /**
     * 
     *
     * @var bool
     */
    protected $number;
    /**
     * 
     *
     * @var bool
     */
    protected $object;
    /**
     * 
     *
     * @var bool
     */
    protected $pojo;
    /**
     * 
     *
     * @var bool
     */
    protected $short;
    /**
     * 
     *
     * @var bool
     */
    protected $textual;
    /**
     * 
     *
     * @var bool
     */
    protected $valueNode;
    /**
     * 
     *
     * @return bool
     */
    public function getArray() : bool
    {
        return $this->array;
    }
    /**
     * 
     *
     * @param bool $array
     *
     * @return self
     */
    public function setArray(bool $array) : self
    {
        $this->array = $array;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBigDecimal() : bool
    {
        return $this->bigDecimal;
    }
    /**
     * 
     *
     * @param bool $bigDecimal
     *
     * @return self
     */
    public function setBigDecimal(bool $bigDecimal) : self
    {
        $this->bigDecimal = $bigDecimal;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBigInteger() : bool
    {
        return $this->bigInteger;
    }
    /**
     * 
     *
     * @param bool $bigInteger
     *
     * @return self
     */
    public function setBigInteger(bool $bigInteger) : self
    {
        $this->bigInteger = $bigInteger;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBinary() : bool
    {
        return $this->binary;
    }
    /**
     * 
     *
     * @param bool $binary
     *
     * @return self
     */
    public function setBinary(bool $binary) : self
    {
        $this->binary = $binary;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBoolean() : bool
    {
        return $this->boolean;
    }
    /**
     * 
     *
     * @param bool $boolean
     *
     * @return self
     */
    public function setBoolean(bool $boolean) : self
    {
        $this->boolean = $boolean;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getContainerNode() : bool
    {
        return $this->containerNode;
    }
    /**
     * 
     *
     * @param bool $containerNode
     *
     * @return self
     */
    public function setContainerNode(bool $containerNode) : self
    {
        $this->containerNode = $containerNode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDouble() : bool
    {
        return $this->double;
    }
    /**
     * 
     *
     * @param bool $double
     *
     * @return self
     */
    public function setDouble(bool $double) : self
    {
        $this->double = $double;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFloat() : bool
    {
        return $this->float;
    }
    /**
     * 
     *
     * @param bool $float
     *
     * @return self
     */
    public function setFloat(bool $float) : self
    {
        $this->float = $float;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFloatingPointNumber() : bool
    {
        return $this->floatingPointNumber;
    }
    /**
     * 
     *
     * @param bool $floatingPointNumber
     *
     * @return self
     */
    public function setFloatingPointNumber(bool $floatingPointNumber) : self
    {
        $this->floatingPointNumber = $floatingPointNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getInt() : bool
    {
        return $this->int;
    }
    /**
     * 
     *
     * @param bool $int
     *
     * @return self
     */
    public function setInt(bool $int) : self
    {
        $this->int = $int;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIntegralNumber() : bool
    {
        return $this->integralNumber;
    }
    /**
     * 
     *
     * @param bool $integralNumber
     *
     * @return self
     */
    public function setIntegralNumber(bool $integralNumber) : self
    {
        $this->integralNumber = $integralNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getLong() : bool
    {
        return $this->long;
    }
    /**
     * 
     *
     * @param bool $long
     *
     * @return self
     */
    public function setLong(bool $long) : self
    {
        $this->long = $long;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMissingNode() : bool
    {
        return $this->missingNode;
    }
    /**
     * 
     *
     * @param bool $missingNode
     *
     * @return self
     */
    public function setMissingNode(bool $missingNode) : self
    {
        $this->missingNode = $missingNode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeType() : string
    {
        return $this->nodeType;
    }
    /**
     * 
     *
     * @param string $nodeType
     *
     * @return self
     */
    public function setNodeType(string $nodeType) : self
    {
        $this->nodeType = $nodeType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getNull() : bool
    {
        return $this->null;
    }
    /**
     * 
     *
     * @param bool $null
     *
     * @return self
     */
    public function setNull(bool $null) : self
    {
        $this->null = $null;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getNumber() : bool
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param bool $number
     *
     * @return self
     */
    public function setNumber(bool $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getObject() : bool
    {
        return $this->object;
    }
    /**
     * 
     *
     * @param bool $object
     *
     * @return self
     */
    public function setObject(bool $object) : self
    {
        $this->object = $object;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPojo() : bool
    {
        return $this->pojo;
    }
    /**
     * 
     *
     * @param bool $pojo
     *
     * @return self
     */
    public function setPojo(bool $pojo) : self
    {
        $this->pojo = $pojo;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShort() : bool
    {
        return $this->short;
    }
    /**
     * 
     *
     * @param bool $short
     *
     * @return self
     */
    public function setShort(bool $short) : self
    {
        $this->short = $short;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTextual() : bool
    {
        return $this->textual;
    }
    /**
     * 
     *
     * @param bool $textual
     *
     * @return self
     */
    public function setTextual(bool $textual) : self
    {
        $this->textual = $textual;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getValueNode() : bool
    {
        return $this->valueNode;
    }
    /**
     * 
     *
     * @param bool $valueNode
     *
     * @return self
     */
    public function setValueNode(bool $valueNode) : self
    {
        $this->valueNode = $valueNode;
        return $this;
    }
}