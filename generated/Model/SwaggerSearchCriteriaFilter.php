<?php

namespace Rapid7\InsightVM\Api\Model;

class SwaggerSearchCriteriaFilter
{
    /**
     * The filter field for the search criteria.
     *
     * @var string
     */
    protected $field;
    /**
     * The lower value to match in a range criteria.
     *
     * @var string
     */
    protected $lower;
    /**
     * The operator on how to match the search criteria.
     *
     * @var string
     */
    protected $operator;
    /**
     * The upper value to match in a range criteria.
     *
     * @var string
     */
    protected $upper;
    /**
     * The single value to match using the operator.
     *
     * @var string
     */
    protected $value;
    /**
     * An array of values to match using the operator.
     *
     * @var string[]
     */
    protected $values;
    /**
     * The filter field for the search criteria.
     *
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }
    /**
     * The filter field for the search criteria.
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * The lower value to match in a range criteria.
     *
     * @return string
     */
    public function getLower() : string
    {
        return $this->lower;
    }
    /**
     * The lower value to match in a range criteria.
     *
     * @param string $lower
     *
     * @return self
     */
    public function setLower(string $lower) : self
    {
        $this->lower = $lower;
        return $this;
    }
    /**
     * The operator on how to match the search criteria.
     *
     * @return string
     */
    public function getOperator() : string
    {
        return $this->operator;
    }
    /**
     * The operator on how to match the search criteria.
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
     * The upper value to match in a range criteria.
     *
     * @return string
     */
    public function getUpper() : string
    {
        return $this->upper;
    }
    /**
     * The upper value to match in a range criteria.
     *
     * @param string $upper
     *
     * @return self
     */
    public function setUpper(string $upper) : self
    {
        $this->upper = $upper;
        return $this;
    }
    /**
     * The single value to match using the operator.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The single value to match using the operator.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * An array of values to match using the operator.
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * An array of values to match using the operator.
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