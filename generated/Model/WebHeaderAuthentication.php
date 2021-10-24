<?php

namespace Rapid7\InsightVM\Api\Model;

class WebHeaderAuthentication
{
    /**
     * The base URL is the main address from which all paths in the target Web site begin. Includes the protocol. Example: http://acme.com.
     *
     * @var string
     */
    protected $baseURL;
    /**
     * Flag indicating whether the HTTP header web authentication is enabled for the site's scans.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * A map of HTTP headers the scan engine will use when negotiating with the Web server for an "authenticated" page. Make sure that the session ID is valid between the time you save this ID for the site and when you start the scan. Note: This property is not returned in responses for security.
     *
     * @var string[]
     */
    protected $headers;
    /**
     * The identifier of the HTTP header web authentication.
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
     * The HTTP header web authentication name.
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
     * Flag indicating whether the HTTP header web authentication is enabled for the site's scans.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Flag indicating whether the HTTP header web authentication is enabled for the site's scans.
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
     * A map of HTTP headers the scan engine will use when negotiating with the Web server for an "authenticated" page. Make sure that the session ID is valid between the time you save this ID for the site and when you start the scan. Note: This property is not returned in responses for security.
     *
     * @return string[]
     */
    public function getHeaders() : iterable
    {
        return $this->headers;
    }
    /**
     * A map of HTTP headers the scan engine will use when negotiating with the Web server for an "authenticated" page. Make sure that the session ID is valid between the time you save this ID for the site and when you start the scan. Note: This property is not returned in responses for security.
     *
     * @param string[] $headers
     *
     * @return self
     */
    public function setHeaders(iterable $headers) : self
    {
        $this->headers = $headers;
        return $this;
    }
    /**
     * The identifier of the HTTP header web authentication.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the HTTP header web authentication.
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
     * The HTTP header web authentication name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The HTTP header web authentication name.
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