<?php

namespace Rapid7\InsightVM\Api\Model;

class WebApplication
{
    /**
     * The identifier of the web application.
     *
     * @var int
     */
    protected $id;
    /**
     * The pages discovered on the web application.
     *
     * @var WebPage[]
     */
    protected $pages;
    /**
     * The web root of the web application.
     *
     * @var string
     */
    protected $root;
    /**
     * The virtual host of the web application.
     *
     * @var string
     */
    protected $virtualHost;
    /**
     * The identifier of the web application.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the web application.
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
     * The pages discovered on the web application.
     *
     * @return WebPage[]
     */
    public function getPages() : array
    {
        return $this->pages;
    }
    /**
     * The pages discovered on the web application.
     *
     * @param WebPage[] $pages
     *
     * @return self
     */
    public function setPages(array $pages) : self
    {
        $this->pages = $pages;
        return $this;
    }
    /**
     * The web root of the web application.
     *
     * @return string
     */
    public function getRoot() : string
    {
        return $this->root;
    }
    /**
     * The web root of the web application.
     *
     * @param string $root
     *
     * @return self
     */
    public function setRoot(string $root) : self
    {
        $this->root = $root;
        return $this;
    }
    /**
     * The virtual host of the web application.
     *
     * @return string
     */
    public function getVirtualHost() : string
    {
        return $this->virtualHost;
    }
    /**
     * The virtual host of the web application.
     *
     * @param string $virtualHost
     *
     * @return self
     */
    public function setVirtualHost(string $virtualHost) : self
    {
        $this->virtualHost = $virtualHost;
        return $this;
    }
}