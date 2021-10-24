<?php

namespace Rapid7\InsightVM\Api\Model;

class DiscoveryConnection
{
    /**
     * The AWS credential access key identifier (only used for the AWS connection).
     *
     * @var string
     */
    protected $accessKeyId;
    /**
     * ${discovery.connection.address}
     *
     * @var string
     */
    protected $address;
    /**
     * The AWS credential ARN (only used for the AWS connection).
     *
     * @var string
     */
    protected $arn;
    /**
     * The AWS credential session name (only used for the AWS connection).
     *
     * @var string
     */
    protected $awsSessionName;
    /**
     * The type of the discovery connection.
     *
     * @var string
     */
    protected $connectionType;
    /**
     * The event source type to use.
     *
     * @var string
     */
    protected $eventSource;
    /**
     * The hostname of the exchange server to connect to.
     *
     * @var string
     */
    protected $exchangeServerHostname;
    /**
     * The username used to connect to the exchange server.
     *
     * @var string
     */
    protected $exchangeUser;
    /**
     * The folder path to pull logs from.
     *
     * @var string
     */
    protected $folderPath;
    /**
     * The identifier of the discovery connection.
     *
     * @var int
     */
    protected $id;
    /**
     * The LDAP server to connect to.
     *
     * @var string
     */
    protected $ldapServer;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The discovery connection name.
     *
     * @var string
     */
    protected $name;
    /**
     * The address used to connect to the discovery connection source.
     *
     * @var int
     */
    protected $port;
    /**
     * The protocol used to connect to the discovery connection source.
     *
     * @var string
     */
    protected $protocol;
    /**
     * The AWS region (only used for the AWS connection).
     *
     * @var string
     */
    protected $region;
    /**
     * Flag denoting whether the scan engine is in AWS, this is used for AWS discovery connections for scanning purposes (only used for the AWS connection).
     *
     * @var bool
     */
    protected $scanEngineIsInsideAWS;
    /**
     * The AWS credential secret access key (only used for the AWS connection).
     *
     * @var string
     */
    protected $secretAccessKey;
    /**
     * The status of the discovery connection.
     *
     * @var string
     */
    protected $status;
    /**
     * The username used to authenticate to the discovery connection source.
     *
     * @var string
     */
    protected $username;
    /**
     * The WinRM server to connect to. 
     *
     * @var string
     */
    protected $winRMServer;
    /**
     * The AWS credential access key identifier (only used for the AWS connection).
     *
     * @return string
     */
    public function getAccessKeyId() : string
    {
        return $this->accessKeyId;
    }
    /**
     * The AWS credential access key identifier (only used for the AWS connection).
     *
     * @param string $accessKeyId
     *
     * @return self
     */
    public function setAccessKeyId(string $accessKeyId) : self
    {
        $this->accessKeyId = $accessKeyId;
        return $this;
    }
    /**
     * ${discovery.connection.address}
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * ${discovery.connection.address}
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * The AWS credential ARN (only used for the AWS connection).
     *
     * @return string
     */
    public function getArn() : string
    {
        return $this->arn;
    }
    /**
     * The AWS credential ARN (only used for the AWS connection).
     *
     * @param string $arn
     *
     * @return self
     */
    public function setArn(string $arn) : self
    {
        $this->arn = $arn;
        return $this;
    }
    /**
     * The AWS credential session name (only used for the AWS connection).
     *
     * @return string
     */
    public function getAwsSessionName() : string
    {
        return $this->awsSessionName;
    }
    /**
     * The AWS credential session name (only used for the AWS connection).
     *
     * @param string $awsSessionName
     *
     * @return self
     */
    public function setAwsSessionName(string $awsSessionName) : self
    {
        $this->awsSessionName = $awsSessionName;
        return $this;
    }
    /**
     * The type of the discovery connection.
     *
     * @return string
     */
    public function getConnectionType() : string
    {
        return $this->connectionType;
    }
    /**
     * The type of the discovery connection.
     *
     * @param string $connectionType
     *
     * @return self
     */
    public function setConnectionType(string $connectionType) : self
    {
        $this->connectionType = $connectionType;
        return $this;
    }
    /**
     * The event source type to use.
     *
     * @return string
     */
    public function getEventSource() : string
    {
        return $this->eventSource;
    }
    /**
     * The event source type to use.
     *
     * @param string $eventSource
     *
     * @return self
     */
    public function setEventSource(string $eventSource) : self
    {
        $this->eventSource = $eventSource;
        return $this;
    }
    /**
     * The hostname of the exchange server to connect to.
     *
     * @return string
     */
    public function getExchangeServerHostname() : string
    {
        return $this->exchangeServerHostname;
    }
    /**
     * The hostname of the exchange server to connect to.
     *
     * @param string $exchangeServerHostname
     *
     * @return self
     */
    public function setExchangeServerHostname(string $exchangeServerHostname) : self
    {
        $this->exchangeServerHostname = $exchangeServerHostname;
        return $this;
    }
    /**
     * The username used to connect to the exchange server.
     *
     * @return string
     */
    public function getExchangeUser() : string
    {
        return $this->exchangeUser;
    }
    /**
     * The username used to connect to the exchange server.
     *
     * @param string $exchangeUser
     *
     * @return self
     */
    public function setExchangeUser(string $exchangeUser) : self
    {
        $this->exchangeUser = $exchangeUser;
        return $this;
    }
    /**
     * The folder path to pull logs from.
     *
     * @return string
     */
    public function getFolderPath() : string
    {
        return $this->folderPath;
    }
    /**
     * The folder path to pull logs from.
     *
     * @param string $folderPath
     *
     * @return self
     */
    public function setFolderPath(string $folderPath) : self
    {
        $this->folderPath = $folderPath;
        return $this;
    }
    /**
     * The identifier of the discovery connection.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the discovery connection.
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
     * The LDAP server to connect to.
     *
     * @return string
     */
    public function getLdapServer() : string
    {
        return $this->ldapServer;
    }
    /**
     * The LDAP server to connect to.
     *
     * @param string $ldapServer
     *
     * @return self
     */
    public function setLdapServer(string $ldapServer) : self
    {
        $this->ldapServer = $ldapServer;
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
     * The discovery connection name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The discovery connection name.
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
     * The address used to connect to the discovery connection source.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The address used to connect to the discovery connection source.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->port = $port;
        return $this;
    }
    /**
     * The protocol used to connect to the discovery connection source.
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * The protocol used to connect to the discovery connection source.
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol) : self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * The AWS region (only used for the AWS connection).
     *
     * @return string
     */
    public function getRegion() : string
    {
        return $this->region;
    }
    /**
     * The AWS region (only used for the AWS connection).
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region) : self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Flag denoting whether the scan engine is in AWS, this is used for AWS discovery connections for scanning purposes (only used for the AWS connection).
     *
     * @return bool
     */
    public function getScanEngineIsInsideAWS() : bool
    {
        return $this->scanEngineIsInsideAWS;
    }
    /**
     * Flag denoting whether the scan engine is in AWS, this is used for AWS discovery connections for scanning purposes (only used for the AWS connection).
     *
     * @param bool $scanEngineIsInsideAWS
     *
     * @return self
     */
    public function setScanEngineIsInsideAWS(bool $scanEngineIsInsideAWS) : self
    {
        $this->scanEngineIsInsideAWS = $scanEngineIsInsideAWS;
        return $this;
    }
    /**
     * The AWS credential secret access key (only used for the AWS connection).
     *
     * @return string
     */
    public function getSecretAccessKey() : string
    {
        return $this->secretAccessKey;
    }
    /**
     * The AWS credential secret access key (only used for the AWS connection).
     *
     * @param string $secretAccessKey
     *
     * @return self
     */
    public function setSecretAccessKey(string $secretAccessKey) : self
    {
        $this->secretAccessKey = $secretAccessKey;
        return $this;
    }
    /**
     * The status of the discovery connection.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the discovery connection.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The username used to authenticate to the discovery connection source.
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * The username used to authenticate to the discovery connection source.
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
    /**
     * The WinRM server to connect to. 
     *
     * @return string
     */
    public function getWinRMServer() : string
    {
        return $this->winRMServer;
    }
    /**
     * The WinRM server to connect to. 
     *
     * @param string $winRMServer
     *
     * @return self
     */
    public function setWinRMServer(string $winRMServer) : self
    {
        $this->winRMServer = $winRMServer;
        return $this;
    }
}