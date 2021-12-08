<?php

namespace Rapid7\InsightVM\Api\Model;

class Settings
{
    /**
     * Whether asset linking is enabled.
     *
     * @var bool
     */
    protected $assetLinking;
    /**
     * 
     *
     * @var AuthenticationSettings
     */
    protected $authentication;
    /**
     * 
     *
     * @var DatabaseSettings
     */
    protected $database;
    /**
     * The root directory of the console.
     *
     * @var string
     */
    protected $directory;
    /**
     * Whether the usage of the Insight Platform is enabled.
     *
     * @var bool
     */
    protected $insightPlatform;
    /**
     * The region used for the Insight Platform, if enabled.
     *
     * @var string
     */
    protected $insightPlatformRegion;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * 
     *
     * @var RiskSettings
     */
    protected $risk;
    /**
     * 
     *
     * @var ScanSettings
     */
    protected $scan;
    /**
     * The console serial number.
     *
     * @var string
     */
    protected $serialNumber;
    /**
     * 
     *
     * @var SmtpSettings
     */
    protected $smtp;
    /**
     * 
     *
     * @var UpdateSettings
     */
    protected $updates;
    /**
     * The universally unique identifier (UUID) of the console.
     *
     * @var string
     */
    protected $uuid;
    /**
     * 
     *
     * @var WebSettings
     */
    protected $web;
    /**
     * Whether asset linking is enabled.
     *
     * @return bool
     */
    public function getAssetLinking() : bool
    {
        return $this->assetLinking;
    }
    /**
     * Whether asset linking is enabled.
     *
     * @param bool $assetLinking
     *
     * @return self
     */
    public function setAssetLinking(bool $assetLinking) : self
    {
        $this->assetLinking = $assetLinking;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationSettings
     */
    public function getAuthentication() : AuthenticationSettings
    {
        return $this->authentication;
    }
    /**
     * 
     *
     * @param AuthenticationSettings $authentication
     *
     * @return self
     */
    public function setAuthentication(AuthenticationSettings $authentication) : self
    {
        $this->authentication = $authentication;
        return $this;
    }
    /**
     * 
     *
     * @return DatabaseSettings
     */
    public function getDatabase() : DatabaseSettings
    {
        return $this->database;
    }
    /**
     * 
     *
     * @param DatabaseSettings $database
     *
     * @return self
     */
    public function setDatabase(DatabaseSettings $database) : self
    {
        $this->database = $database;
        return $this;
    }
    /**
     * The root directory of the console.
     *
     * @return string
     */
    public function getDirectory() : string
    {
        return $this->directory;
    }
    /**
     * The root directory of the console.
     *
     * @param string $directory
     *
     * @return self
     */
    public function setDirectory(string $directory) : self
    {
        $this->directory = $directory;
        return $this;
    }
    /**
     * Whether the usage of the Insight Platform is enabled.
     *
     * @return bool
     */
    public function getInsightPlatform() : bool
    {
        return $this->insightPlatform;
    }
    /**
     * Whether the usage of the Insight Platform is enabled.
     *
     * @param bool $insightPlatform
     *
     * @return self
     */
    public function setInsightPlatform(bool $insightPlatform) : self
    {
        $this->insightPlatform = $insightPlatform;
        return $this;
    }
    /**
     * The region used for the Insight Platform, if enabled.
     *
     * @return string
     */
    public function getInsightPlatformRegion() : string
    {
        return $this->insightPlatformRegion;
    }
    /**
     * The region used for the Insight Platform, if enabled.
     *
     * @param string $insightPlatformRegion
     *
     * @return self
     */
    public function setInsightPlatformRegion(string $insightPlatformRegion) : self
    {
        $this->insightPlatformRegion = $insightPlatformRegion;
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
     * @return RiskSettings
     */
    public function getRisk() : RiskSettings
    {
        return $this->risk;
    }
    /**
     * 
     *
     * @param RiskSettings $risk
     *
     * @return self
     */
    public function setRisk(RiskSettings $risk) : self
    {
        $this->risk = $risk;
        return $this;
    }
    /**
     * 
     *
     * @return ScanSettings
     */
    public function getScan() : ScanSettings
    {
        return $this->scan;
    }
    /**
     * 
     *
     * @param ScanSettings $scan
     *
     * @return self
     */
    public function setScan(ScanSettings $scan) : self
    {
        $this->scan = $scan;
        return $this;
    }
    /**
     * The console serial number.
     *
     * @return string
     */
    public function getSerialNumber() : string
    {
        return $this->serialNumber;
    }
    /**
     * The console serial number.
     *
     * @param string $serialNumber
     *
     * @return self
     */
    public function setSerialNumber(string $serialNumber) : self
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }
    /**
     * 
     *
     * @return SmtpSettings
     */
    public function getSmtp() : SmtpSettings
    {
        return $this->smtp;
    }
    /**
     * 
     *
     * @param SmtpSettings $smtp
     *
     * @return self
     */
    public function setSmtp(SmtpSettings $smtp) : self
    {
        $this->smtp = $smtp;
        return $this;
    }
    /**
     * 
     *
     * @return UpdateSettings
     */
    public function getUpdates() : UpdateSettings
    {
        return $this->updates;
    }
    /**
     * 
     *
     * @param UpdateSettings $updates
     *
     * @return self
     */
    public function setUpdates(UpdateSettings $updates) : self
    {
        $this->updates = $updates;
        return $this;
    }
    /**
     * The universally unique identifier (UUID) of the console.
     *
     * @return string
     */
    public function getUuid() : string
    {
        return $this->uuid;
    }
    /**
     * The universally unique identifier (UUID) of the console.
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid) : self
    {
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * 
     *
     * @return WebSettings
     */
    public function getWeb() : WebSettings
    {
        return $this->web;
    }
    /**
     * 
     *
     * @param WebSettings $web
     *
     * @return self
     */
    public function setWeb(WebSettings $web) : self
    {
        $this->web = $web;
        return $this;
    }
}