<?php

namespace Rapid7\InsightVM\Api\Model;

class TagAssetSource
{
    /**
     * If the `source` is `"asset-group"` or `"site"` the identifier of the asset group or site that causes the tag to apply to the asset.
     *
     * @var int
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The source by which a tag applies to an asset.
     *
     * @var string
     */
    protected $source;
    /**
     * If the `source` is `"asset-group"` or `"site"` the identifier of the asset group or site that causes the tag to apply to the asset.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * If the `source` is `"asset-group"` or `"site"` the identifier of the asset group or site that causes the tag to apply to the asset.
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
     * Hypermedia links to corresponding or related resources.
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @param Link[] $links
     *
     * @return self
     */
    public function setLinks(array $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * The source by which a tag applies to an asset.
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * The source by which a tag applies to an asset.
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
}