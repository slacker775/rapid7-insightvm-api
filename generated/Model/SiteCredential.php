<?php

namespace Rapid7\InsightVM\Api\Model;

class SiteCredential
{
    /**
     * 
     *
     * @var Account
     */
    protected $account;
    /**
     * The description of the credential.
     *
     * @var string
     */
    protected $description;
    /**
     * Flag indicating whether the credential is enabled for use during the scan.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The host name or IP address that you want to restrict the credentials to.
     *
     * @var string
     */
    protected $hostRestriction;
    /**
     * The identifier of the credential.
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The name of the credential.
     *
     * @var string
     */
    protected $name;
    /**
     * Further restricts the credential to attempt to authenticate on a specific port. The port can only be restricted if the property `hostRestriction` is specified.
     *
     * @var int
     */
    protected $portRestriction;
    /**
     * 
     *
     * @return Account
     */
    public function getAccount() : Account
    {
        return $this->account;
    }
    /**
     * 
     *
     * @param Account $account
     *
     * @return self
     */
    public function setAccount(Account $account) : self
    {
        $this->account = $account;
        return $this;
    }
    /**
     * The description of the credential.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the credential.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Flag indicating whether the credential is enabled for use during the scan.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Flag indicating whether the credential is enabled for use during the scan.
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
     * The host name or IP address that you want to restrict the credentials to.
     *
     * @return string
     */
    public function getHostRestriction() : string
    {
        return $this->hostRestriction;
    }
    /**
     * The host name or IP address that you want to restrict the credentials to.
     *
     * @param string $hostRestriction
     *
     * @return self
     */
    public function setHostRestriction(string $hostRestriction) : self
    {
        $this->hostRestriction = $hostRestriction;
        return $this;
    }
    /**
     * The identifier of the credential.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the credential.
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
     * 
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * 
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
     * The name of the credential.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the credential.
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
     * Further restricts the credential to attempt to authenticate on a specific port. The port can only be restricted if the property `hostRestriction` is specified.
     *
     * @return int
     */
    public function getPortRestriction() : int
    {
        return $this->portRestriction;
    }
    /**
     * Further restricts the credential to attempt to authenticate on a specific port. The port can only be restricted if the property `hostRestriction` is specified.
     *
     * @param int $portRestriction
     *
     * @return self
     */
    public function setPortRestriction(int $portRestriction) : self
    {
        $this->portRestriction = $portRestriction;
        return $this;
    }
}