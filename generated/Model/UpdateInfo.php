<?php

namespace Rapid7\InsightVM\Api\Model;

class UpdateInfo
{
    /**
     * The most recent content update.
     *
     * @var string
     */
    protected $content;
    /**
     * The most recent, partially-applied (in-memory), content update.
     *
     * @var string
     */
    protected $contentPartial;
    /**
     * 
     *
     * @var UpdateId
     */
    protected $id;
    /**
     * The most recent product update.
     *
     * @var string
     */
    protected $product;
    /**
     * The most recent content update.
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The most recent content update.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * The most recent, partially-applied (in-memory), content update.
     *
     * @return string
     */
    public function getContentPartial() : string
    {
        return $this->contentPartial;
    }
    /**
     * The most recent, partially-applied (in-memory), content update.
     *
     * @param string $contentPartial
     *
     * @return self
     */
    public function setContentPartial(string $contentPartial) : self
    {
        $this->contentPartial = $contentPartial;
        return $this;
    }
    /**
     * 
     *
     * @return UpdateId
     */
    public function getId() : UpdateId
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param UpdateId $id
     *
     * @return self
     */
    public function setId(UpdateId $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The most recent product update.
     *
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }
    /**
     * The most recent product update.
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
}