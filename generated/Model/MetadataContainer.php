<?php

namespace Rapid7\InsightVM\Api\Model;

class MetadataContainer
{
    /**
     * 
     *
     * @var IMetaData
     */
    protected $fieldName;
    /**
     * 
     *
     * @return IMetaData
     */
    public function getFieldName() : IMetaData
    {
        return $this->fieldName;
    }
    /**
     * 
     *
     * @param IMetaData $fieldName
     *
     * @return self
     */
    public function setFieldName(IMetaData $fieldName) : self
    {
        $this->fieldName = $fieldName;
        return $this;
    }
}