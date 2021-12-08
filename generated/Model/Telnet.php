<?php

namespace Rapid7\InsightVM\Api\Model;

class Telnet
{
    /**
     * The character set to use.
     *
     * @var string
     */
    protected $characterSet;
    /**
     * Regular expression to match a failed login response.
     *
     * @var string
     */
    protected $failedLoginRegex;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * Regular expression to match a login response.
     *
     * @var string
     */
    protected $loginRegex;
    /**
     * Regular expression to match a password prompt.
     *
     * @var string
     */
    protected $passwordPromptRegex;
    /**
     * Regular expression to match a potential false negative login response.
     *
     * @var string
     */
    protected $questionableLoginRegex;
    /**
     * The character set to use.
     *
     * @return string
     */
    public function getCharacterSet() : string
    {
        return $this->characterSet;
    }
    /**
     * The character set to use.
     *
     * @param string $characterSet
     *
     * @return self
     */
    public function setCharacterSet(string $characterSet) : self
    {
        $this->characterSet = $characterSet;
        return $this;
    }
    /**
     * Regular expression to match a failed login response.
     *
     * @return string
     */
    public function getFailedLoginRegex() : string
    {
        return $this->failedLoginRegex;
    }
    /**
     * Regular expression to match a failed login response.
     *
     * @param string $failedLoginRegex
     *
     * @return self
     */
    public function setFailedLoginRegex(string $failedLoginRegex) : self
    {
        $this->failedLoginRegex = $failedLoginRegex;
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
     * Regular expression to match a login response.
     *
     * @return string
     */
    public function getLoginRegex() : string
    {
        return $this->loginRegex;
    }
    /**
     * Regular expression to match a login response.
     *
     * @param string $loginRegex
     *
     * @return self
     */
    public function setLoginRegex(string $loginRegex) : self
    {
        $this->loginRegex = $loginRegex;
        return $this;
    }
    /**
     * Regular expression to match a password prompt.
     *
     * @return string
     */
    public function getPasswordPromptRegex() : string
    {
        return $this->passwordPromptRegex;
    }
    /**
     * Regular expression to match a password prompt.
     *
     * @param string $passwordPromptRegex
     *
     * @return self
     */
    public function setPasswordPromptRegex(string $passwordPromptRegex) : self
    {
        $this->passwordPromptRegex = $passwordPromptRegex;
        return $this;
    }
    /**
     * Regular expression to match a potential false negative login response.
     *
     * @return string
     */
    public function getQuestionableLoginRegex() : string
    {
        return $this->questionableLoginRegex;
    }
    /**
     * Regular expression to match a potential false negative login response.
     *
     * @param string $questionableLoginRegex
     *
     * @return self
     */
    public function setQuestionableLoginRegex(string $questionableLoginRegex) : self
    {
        $this->questionableLoginRegex = $questionableLoginRegex;
        return $this;
    }
}