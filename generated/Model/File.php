<?php

namespace Rapid7\InsightVM\Api\Model;

class File
{
    /**
     * Attributes detected on the file.
     *
     * @var Configuration[]
     */
    protected $attributes;
    /**
     * The name of the file.
     *
     * @var string
     */
    protected $name;
    /**
     * The size of the regular file (in bytes). If the file is a directory, no value is returned.
     *
     * @var int
     */
    protected $size;
    /**
     * The type of the file.
     *
     * @var string
     */
    protected $type;
    /**
     * Attributes detected on the file.
     *
     * @return Configuration[]
     */
    public function getAttributes() : array
    {
        return $this->attributes;
    }
    /**
     * Attributes detected on the file.
     *
     * @param Configuration[] $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes) : self
    {
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * The name of the file.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the file.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The size of the regular file (in bytes). If the file is a directory, no value is returned.
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * The size of the regular file (in bytes). If the file is a directory, no value is returned.
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * The type of the file.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the file.
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