<?php

namespace Rapid7\InsightVM\Api\Model;

class SiteSharedCredential
{
    /**
     * Flag indicating whether the shared credential is enabled for the site's scans.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The identifier of the shared credential.
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
     * The name of the shared credential.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of service the credential is configured to authenticate with.
     *
     * @var string
     */
    protected $service;
    /**
     * Flag indicating whether the shared credential is enabled for the site's scans.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Flag indicating whether the shared credential is enabled for the site's scans.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * The identifier of the shared credential.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the shared credential.
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
     * The name of the shared credential.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the shared credential.
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
     * The type of service the credential is configured to authenticate with.
     *
     * @return string
     */
    public function getService() : string
    {
        return $this->service;
    }
    /**
     * The type of service the credential is configured to authenticate with.
     *
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service) : self
    {
        $this->service = $service;
        return $this;
    }
}