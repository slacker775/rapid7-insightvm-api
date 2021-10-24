<?php

namespace Rapid7\InsightVM\Api\Model;

class Criterion
{
    /**
     * 
     *
     * @var CriterionExtras
     */
    protected $extras;
    /**
     * 
     *
     * @var IMetaData
     */
    protected $metaData;
    /**
     * 
     *
     * @var MetadataContainer
     */
    protected $metadata2;
    /**
     * 
     *
     * @var string
     */
    protected $operator;
    /**
     * 
     *
     * @var string[]
     */
    protected $values;
    /**
     * 
     *
     * @return CriterionExtras
     */
    public function getExtras() : CriterionExtras
    {
        return $this->extras;
    }
    /**
     * 
     *
     * @param CriterionExtras $extras
     *
     * @return self
     */
    public function setExtras(CriterionExtras $extras) : self
    {
        $this->extras = $extras;
        return $this;
    }
    /**
     * 
     *
     * @return IMetaData
     */
    public function getMetaData() : IMetaData
    {
        return $this->metaData;
    }
    /**
     * 
     *
     * @param IMetaData $metaData
     *
     * @return self
     */
    public function setMetaData(IMetaData $metaData) : self
    {
        $this->metaData = $metaData;
        return $this;
    }
    /**
     * 
     *
     * @return MetadataContainer
     */
    public function getMetadata2() : MetadataContainer
    {
        return $this->metadata2;
    }
    /**
     * 
     *
     * @param MetadataContainer $metadata2
     *
     * @return self
     */
    public function setMetadata2(MetadataContainer $metadata2) : self
    {
        $this->metadata2 = $metadata2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperator() : string
    {
        return $this->operator;
    }
    /**
     * 
     *
     * @param string $operator
     *
     * @return self
     */
    public function setOperator(string $operator) : self
    {
        $this->operator = $operator;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param string[] $values
     *
     * @return self
     */
    public function setValues(array $values) : self
    {
        $this->values = $values;
        return $this;
    }
}