<?php

namespace Rapid7\InsightVM\Api\Model;

class TagLink
{
    /**
     * The identifier of the tagged asset.
     *
     * @var int
     */
    protected $id;
    /**
     * The source(s) by which a tag is applied to an asset.
     *
     * @var string[]
     */
    protected $sources;
    /**
     * The identifier of the tagged asset.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the tagged asset.
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
     * The source(s) by which a tag is applied to an asset.
     *
     * @return string[]
     */
    public function getSources() : array
    {
        return $this->sources;
    }
    /**
     * The source(s) by which a tag is applied to an asset.
     *
     * @param string[] $sources
     *
     * @return self
     */
    public function setSources(array $sources) : self
    {
        $this->sources = $sources;
        return $this;
    }
}