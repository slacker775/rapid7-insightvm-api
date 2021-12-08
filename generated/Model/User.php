<?php

namespace Rapid7\InsightVM\Api\Model;

class User
{
    /**
     * 
     *
     * @var CreateAuthenticationSource
     */
    protected $authentication;
    /**
     * The email address of the user.
     *
     * @var string
     */
    protected $email;
    /**
     * Whether the user account is enabled. Defaults to `true`.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The identifier of the user.
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
     * 
     *
     * @var LocalePreferences
     */
    protected $locale;
    /**
     * Whether the user account is locked (exceeded maximum password retry attempts).
     *
     * @var bool
     */
    protected $locked;
    /**
     * The login name of the user.
     *
     * @var string
     */
    protected $login;
    /**
     * The full name of the user.
     *
     * @var string
     */
    protected $name;
    /**
     * The password to use for the user.
     *
     * @var string
     */
    protected $password;
    /**
     * Whether to require a reset of the user's password upon first login. Defaults to `false`.
     *
     * @var bool
     */
    protected $passwordResetOnLogin;
    /**
     * 
     *
     * @var UserCreateRole
     */
    protected $role;
    /**
     * 
     *
     * @return CreateAuthenticationSource
     */
    public function getAuthentication() : CreateAuthenticationSource
    {
        return $this->authentication;
    }
    /**
     * 
     *
     * @param CreateAuthenticationSource $authentication
     *
     * @return self
     */
    public function setAuthentication(CreateAuthenticationSource $authentication) : self
    {
        $this->authentication = $authentication;
        return $this;
    }
    /**
     * The email address of the user.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email address of the user.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Whether the user account is enabled. Defaults to `true`.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Whether the user account is enabled. Defaults to `true`.
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
     * The identifier of the user.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the user.
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
     * 
     *
     * @return LocalePreferences
     */
    public function getLocale() : LocalePreferences
    {
        return $this->locale;
    }
    /**
     * 
     *
     * @param LocalePreferences $locale
     *
     * @return self
     */
    public function setLocale(LocalePreferences $locale) : self
    {
        $this->locale = $locale;
        return $this;
    }
    /**
     * Whether the user account is locked (exceeded maximum password retry attempts).
     *
     * @return bool
     */
    public function getLocked() : bool
    {
        return $this->locked;
    }
    /**
     * Whether the user account is locked (exceeded maximum password retry attempts).
     *
     * @param bool $locked
     *
     * @return self
     */
    public function setLocked(bool $locked) : self
    {
        $this->locked = $locked;
        return $this;
    }
    /**
     * The login name of the user.
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * The login name of the user.
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * The full name of the user.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The full name of the user.
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
     * The password to use for the user.
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * The password to use for the user.
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
     * Whether to require a reset of the user's password upon first login. Defaults to `false`.
     *
     * @return bool
     */
    public function getPasswordResetOnLogin() : bool
    {
        return $this->passwordResetOnLogin;
    }
    /**
     * Whether to require a reset of the user's password upon first login. Defaults to `false`.
     *
     * @param bool $passwordResetOnLogin
     *
     * @return self
     */
    public function setPasswordResetOnLogin(bool $passwordResetOnLogin) : self
    {
        $this->passwordResetOnLogin = $passwordResetOnLogin;
        return $this;
    }
    /**
     * 
     *
     * @return UserCreateRole
     */
    public function getRole() : UserCreateRole
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param UserCreateRole $role
     *
     * @return self
     */
    public function setRole(UserCreateRole $role) : self
    {
        $this->role = $role;
        return $this;
    }
}