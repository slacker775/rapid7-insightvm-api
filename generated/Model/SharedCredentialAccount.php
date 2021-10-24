<?php

namespace Rapid7\InsightVM\Api\Model;

class SharedCredentialAccount
{
    /**
     * 
     *
     * @var string
     */
    protected $authenticationType;
    /**
     * 
     *
     * @var string
     */
    protected $communityName;
    /**
     * 
     *
     * @var string
     */
    protected $database;
    /**
     * 
     *
     * @var string
     */
    protected $domain;
    /**
     * 
     *
     * @var bool
     */
    protected $enumerateSids;
    /**
     * 
     *
     * @var string
     */
    protected $notesIDPassword;
    /**
     * 
     *
     * @var string
     */
    protected $ntlmHash;
    /**
     * 
     *
     * @var string
     */
    protected $oracleListenerPassword;
    /**
     * 
     *
     * @var string
     */
    protected $password;
    /**
     * 
     *
     * @var string
     */
    protected $pemKey;
    /**
     * 
     *
     * @var string
     */
    protected $permissionElevation;
    /**
     * 
     *
     * @var string
     */
    protected $permissionElevationPassword;
    /**
     * 
     *
     * @var string
     */
    protected $permissionElevationUserName;
    /**
     * 
     *
     * @var string
     */
    protected $privacyPassword;
    /**
     * 
     *
     * @var string
     */
    protected $privacyType;
    /**
     * 
     *
     * @var string
     */
    protected $privateKeyPassword;
    /**
     * 
     *
     * @var string
     */
    protected $realm;
    /**
     * 
     *
     * @var string
     */
    protected $service;
    /**
     * 
     *
     * @var string
     */
    protected $sid;
    /**
     * 
     *
     * @var bool
     */
    protected $useWindowsAuthentication;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @return string
     */
    public function getAuthenticationType() : string
    {
        return $this->authenticationType;
    }
    /**
     * 
     *
     * @param string $authenticationType
     *
     * @return self
     */
    public function setAuthenticationType(string $authenticationType) : self
    {
        $this->authenticationType = $authenticationType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommunityName() : string
    {
        return $this->communityName;
    }
    /**
     * 
     *
     * @param string $communityName
     *
     * @return self
     */
    public function setCommunityName(string $communityName) : self
    {
        $this->communityName = $communityName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDatabase() : string
    {
        return $this->database;
    }
    /**
     * 
     *
     * @param string $database
     *
     * @return self
     */
    public function setDatabase(string $database) : self
    {
        $this->database = $database;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain) : self
    {
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnumerateSids() : bool
    {
        return $this->enumerateSids;
    }
    /**
     * 
     *
     * @param bool $enumerateSids
     *
     * @return self
     */
    public function setEnumerateSids(bool $enumerateSids) : self
    {
        $this->enumerateSids = $enumerateSids;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNotesIDPassword() : string
    {
        return $this->notesIDPassword;
    }
    /**
     * 
     *
     * @param string $notesIDPassword
     *
     * @return self
     */
    public function setNotesIDPassword(string $notesIDPassword) : self
    {
        $this->notesIDPassword = $notesIDPassword;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNtlmHash() : string
    {
        return $this->ntlmHash;
    }
    /**
     * 
     *
     * @param string $ntlmHash
     *
     * @return self
     */
    public function setNtlmHash(string $ntlmHash) : self
    {
        $this->ntlmHash = $ntlmHash;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOracleListenerPassword() : string
    {
        return $this->oracleListenerPassword;
    }
    /**
     * 
     *
     * @param string $oracleListenerPassword
     *
     * @return self
     */
    public function setOracleListenerPassword(string $oracleListenerPassword) : self
    {
        $this->oracleListenerPassword = $oracleListenerPassword;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->password = $password;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPemKey() : string
    {
        return $this->pemKey;
    }
    /**
     * 
     *
     * @param string $pemKey
     *
     * @return self
     */
    public function setPemKey(string $pemKey) : self
    {
        $this->pemKey = $pemKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPermissionElevation() : string
    {
        return $this->permissionElevation;
    }
    /**
     * 
     *
     * @param string $permissionElevation
     *
     * @return self
     */
    public function setPermissionElevation(string $permissionElevation) : self
    {
        $this->permissionElevation = $permissionElevation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPermissionElevationPassword() : string
    {
        return $this->permissionElevationPassword;
    }
    /**
     * 
     *
     * @param string $permissionElevationPassword
     *
     * @return self
     */
    public function setPermissionElevationPassword(string $permissionElevationPassword) : self
    {
        $this->permissionElevationPassword = $permissionElevationPassword;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPermissionElevationUserName() : string
    {
        return $this->permissionElevationUserName;
    }
    /**
     * 
     *
     * @param string $permissionElevationUserName
     *
     * @return self
     */
    public function setPermissionElevationUserName(string $permissionElevationUserName) : self
    {
        $this->permissionElevationUserName = $permissionElevationUserName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrivacyPassword() : string
    {
        return $this->privacyPassword;
    }
    /**
     * 
     *
     * @param string $privacyPassword
     *
     * @return self
     */
    public function setPrivacyPassword(string $privacyPassword) : self
    {
        $this->privacyPassword = $privacyPassword;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrivacyType() : string
    {
        return $this->privacyType;
    }
    /**
     * 
     *
     * @param string $privacyType
     *
     * @return self
     */
    public function setPrivacyType(string $privacyType) : self
    {
        $this->privacyType = $privacyType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrivateKeyPassword() : string
    {
        return $this->privateKeyPassword;
    }
    /**
     * 
     *
     * @param string $privateKeyPassword
     *
     * @return self
     */
    public function setPrivateKeyPassword(string $privateKeyPassword) : self
    {
        $this->privateKeyPassword = $privateKeyPassword;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRealm() : string
    {
        return $this->realm;
    }
    /**
     * 
     *
     * @param string $realm
     *
     * @return self
     */
    public function setRealm(string $realm) : self
    {
        $this->realm = $realm;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getService() : string
    {
        return $this->service;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string
     */
    public function getSid() : string
    {
        return $this->sid;
    }
    /**
     * 
     *
     * @param string $sid
     *
     * @return self
     */
    public function setSid(string $sid) : self
    {
        $this->sid = $sid;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUseWindowsAuthentication() : bool
    {
        return $this->useWindowsAuthentication;
    }
    /**
     * 
     *
     * @param bool $useWindowsAuthentication
     *
     * @return self
     */
    public function setUseWindowsAuthentication(bool $useWindowsAuthentication) : self
    {
        $this->useWindowsAuthentication = $useWindowsAuthentication;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}