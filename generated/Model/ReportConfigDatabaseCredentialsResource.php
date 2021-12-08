<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportConfigDatabaseCredentialsResource
{
    /**
     * ${report.config.database.credential.password.description}
     *
     * @var string
     */
    protected $password;
    /**
     * ${report.config.database.credential.username.description}
     *
     * @var string
     */
    protected $username;
    /**
     * ${report.config.database.credential.password.description}
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * ${report.config.database.credential.password.description}
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
     * ${report.config.database.credential.username.description}
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * ${report.config.database.credential.username.description}
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