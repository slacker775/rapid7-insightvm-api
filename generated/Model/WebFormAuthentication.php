<?php

namespace Rapid7\InsightVM\Api\Model;

class WebFormAuthentication
{
    /**
     * The base URL is the main address from which all paths in the target Web site begin. Includes the protocol. Example: http://acme.com.
     *
     * @var string
     */
    protected $baseURL;
    /**
     * Flag indicating whether the HTML form web authentication is enabled for the site's scans.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The identifier of the HTML form web authentication.
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
     * The regular expression matches the message that the Web server returns if the login attempt fails.
     *
     * @var string
     */
    protected $loginRegularExpression;
    /**
     * The login page URL contains form for logging on. Include the base URL. Example: http://acme.com/login.
     *
     * @var string
     */
    protected $loginURL;
    /**
     * The HTML form web authentication name.
     *
     * @var string
     */
    protected $name;
    /**
     * Value indicating whether this web authentication  configuration is for HTML form authentication or HTTP header authentication.
     *
     * @var string
     */
    protected $service;
    /**
     * The base URL is the main address from which all paths in the target Web site begin. Includes the protocol. Example: http://acme.com.
     *
     * @return string
     */
    public function getBaseURL() : string
    {
        return $this->baseURL;
    }
    /**
     * The base URL is the main address from which all paths in the target Web site begin. Includes the protocol. Example: http://acme.com.
     *
     * @param string $baseURL
     *
     * @return self
     */
    public function setBaseURL(string $baseURL) : self
    {
        $this->baseURL = $baseURL;
        return $this;
    }
    /**
     * Flag indicating whether the HTML form web authentication is enabled for the site's scans.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Flag indicating whether the HTML form web authentication is enabled for the site's scans.
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
     * The identifier of the HTML form web authentication.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the HTML form web authentication.
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
     * The regular expression matches the message that the Web server returns if the login attempt fails.
     *
     * @return string
     */
    public function getLoginRegularExpression() : string
    {
        return $this->loginRegularExpression;
    }
    /**
     * The regular expression matches the message that the Web server returns if the login attempt fails.
     *
     * @param string $loginRegularExpression
     *
     * @return self
     */
    public function setLoginRegularExpression(string $loginRegularExpression) : self
    {
        $this->loginRegularExpression = $loginRegularExpression;
        return $this;
    }
    /**
     * The login page URL contains form for logging on. Include the base URL. Example: http://acme.com/login.
     *
     * @return string
     */
    public function getLoginURL() : string
    {
        return $this->loginURL;
    }
    /**
     * The login page URL contains form for logging on. Include the base URL. Example: http://acme.com/login.
     *
     * @param string $loginURL
     *
     * @return self
     */
    public function setLoginURL(string $loginURL) : self
    {
        $this->loginURL = $loginURL;
        return $this;
    }
    /**
     * The HTML form web authentication name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The HTML form web authentication name.
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
     * Value indicating whether this web authentication  configuration is for HTML form authentication or HTTP header authentication.
     *
     * @return string
     */
    public function getService() : string
    {
        return $this->service;
    }
    /**
     * Value indicating whether this web authentication  configuration is for HTML form authentication or HTTP header authentication.
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