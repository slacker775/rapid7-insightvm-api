<?php

namespace Rapid7\InsightVM\Api\Model;

class IMetaData
{
    /**
     * 
     *
     * @var string
     */
    protected $fieldName;
    /**
     * 
     *
     * @var string[]
     */
    protected $supportedOperators;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName;
    }
    /**
     * 
     *
     * @param string $fieldName
     *
     * @return self
     */
    public function setFieldName(string $fieldName) : self
    {
        $this->fieldName = $fieldName;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getSupportedOperators() : array
    {
        return $this->supportedOperators;
    }
    /**
     * 
     *
     * @param string[] $supportedOperators
     *
     * @return self
     */
    public function setSupportedOperators(array $supportedOperators) : self
    {
        $this->supportedOperators = $supportedOperators;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
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