<?php

namespace Rapid7\InsightVM\Api\Model;

class SharedCredential
{
    /**
     * 
     *
     * @var SharedCredentialAccount
     */
    protected $account;
    /**
     * The description of the credential.
     *
     * @var string
     */
    protected $description;
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
    * Assigns the shared scan credential either to be available to all sites or to a specific list of sites.
    The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | `"all-sites"` | The shared scan credential is assigned to all current and future sites. |
    | `"specific-sites"` | The shared scan credential is assigned to zero sites by default. Administrators must explicitly assign sites to the shared credential. |
    Shared scan credentials assigned to a site can disabled within the site configuration, if needed.
    *
    * @var string
    */
    protected $siteAssignment;
    /**
     * List of site identifiers. These sites are explicitly assigned access to the shared scan credential, allowing the site to use the credential for authentication during a scan. This property can only be set if the value of property `siteAssignment` is set to `"specific-sites"`. When the property `siteAssignment` is set to `"all-sites"`, this property will be `null`.
     *
     * @var int[]
     */
    protected $sites;
    /**
     * 
     *
     * @return SharedCredentialAccount
     */
    public function getAccount() : SharedCredentialAccount
    {
        return $this->account;
    }
    /**
     * 
     *
     * @param SharedCredentialAccount $account
     *
     * @return self
     */
    public function setAccount(SharedCredentialAccount $account) : self
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
    /**
    * Assigns the shared scan credential either to be available to all sites or to a specific list of sites.
    The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | `"all-sites"` | The shared scan credential is assigned to all current and future sites. |
    | `"specific-sites"` | The shared scan credential is assigned to zero sites by default. Administrators must explicitly assign sites to the shared credential. |
    Shared scan credentials assigned to a site can disabled within the site configuration, if needed.
    *
    * @return string
    */
    public function getSiteAssignment() : string
    {
        return $this->siteAssignment;
    }
    /**
    * Assigns the shared scan credential either to be available to all sites or to a specific list of sites.
    The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | `"all-sites"` | The shared scan credential is assigned to all current and future sites. |
    | `"specific-sites"` | The shared scan credential is assigned to zero sites by default. Administrators must explicitly assign sites to the shared credential. |
    Shared scan credentials assigned to a site can disabled within the site configuration, if needed.
    *
    * @param string $siteAssignment
    *
    * @return self
    */
    public function setSiteAssignment(string $siteAssignment) : self
    {
        $this->siteAssignment = $siteAssignment;
        return $this;
    }
    /**
     * List of site identifiers. These sites are explicitly assigned access to the shared scan credential, allowing the site to use the credential for authentication during a scan. This property can only be set if the value of property `siteAssignment` is set to `"specific-sites"`. When the property `siteAssignment` is set to `"all-sites"`, this property will be `null`.
     *
     * @return int[]
     */
    public function getSites() : array
    {
        return $this->sites;
    }
    /**
     * List of site identifiers. These sites are explicitly assigned access to the shared scan credential, allowing the site to use the credential for authentication during a scan. This property can only be set if the value of property `siteAssignment` is set to `"specific-sites"`. When the property `siteAssignment` is set to `"all-sites"`, this property will be `null`.
     *
     * @param int[] $sites
     *
     * @return self
     */
    public function setSites(array $sites) : self
    {
        $this->sites = $sites;
        return $this;
    }
}