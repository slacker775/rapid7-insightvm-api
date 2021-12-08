<?php

namespace Rapid7\InsightVM\Api\Model;

class SmtpAlert
{
    /**
     * Flag indicating the alert is enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * 
     *
     * @var ScanEvents
     */
    protected $enabledScanEvents;
    /**
     * 
     *
     * @var VulnerabilityEvents
     */
    protected $enabledVulnerabilityEvents;
    /**
     * The identifier of the alert.
     *
     * @var int
     */
    protected $id;
    /**
     * Reports basic information in the alert, if enabled.
     *
     * @var bool
     */
    protected $limitAlertText;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The maximum number of alerts that will be issued. To disable maximum alerts, omit the property in the request or specify the property with a value of `null`.
     *
     * @var int
     */
    protected $maximumAlerts;
    /**
     * The name of the alert.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of alert.
     *
     * @var string
     */
    protected $notification;
    /**
     * The recipient list. At least one recipient must be specified. Each recipient must be a valid e-mail address.
     *
     * @var string[]
     */
    protected $recipients;
    /**
     * The SMTP server/relay to send messages through.
     *
     * @var string
     */
    protected $relayServer;
    /**
     * The sender e-mail address that will appear in the from field.
     *
     * @var string
     */
    protected $senderEmailAddress;
    /**
     * Flag indicating the alert is enabled.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Flag indicating the alert is enabled.
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
     * 
     *
     * @return ScanEvents
     */
    public function getEnabledScanEvents() : ScanEvents
    {
        return $this->enabledScanEvents;
    }
    /**
     * 
     *
     * @param ScanEvents $enabledScanEvents
     *
     * @return self
     */
    public function setEnabledScanEvents(ScanEvents $enabledScanEvents) : self
    {
        $this->enabledScanEvents = $enabledScanEvents;
        return $this;
    }
    /**
     * 
     *
     * @return VulnerabilityEvents
     */
    public function getEnabledVulnerabilityEvents() : VulnerabilityEvents
    {
        return $this->enabledVulnerabilityEvents;
    }
    /**
     * 
     *
     * @param VulnerabilityEvents $enabledVulnerabilityEvents
     *
     * @return self
     */
    public function setEnabledVulnerabilityEvents(VulnerabilityEvents $enabledVulnerabilityEvents) : self
    {
        $this->enabledVulnerabilityEvents = $enabledVulnerabilityEvents;
        return $this;
    }
    /**
     * The identifier of the alert.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the alert.
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
     * Reports basic information in the alert, if enabled.
     *
     * @return bool
     */
    public function getLimitAlertText() : bool
    {
        return $this->limitAlertText;
    }
    /**
     * Reports basic information in the alert, if enabled.
     *
     * @param bool $limitAlertText
     *
     * @return self
     */
    public function setLimitAlertText(bool $limitAlertText) : self
    {
        $this->limitAlertText = $limitAlertText;
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
     * The maximum number of alerts that will be issued. To disable maximum alerts, omit the property in the request or specify the property with a value of `null`.
     *
     * @return int
     */
    public function getMaximumAlerts() : int
    {
        return $this->maximumAlerts;
    }
    /**
     * The maximum number of alerts that will be issued. To disable maximum alerts, omit the property in the request or specify the property with a value of `null`.
     *
     * @param int $maximumAlerts
     *
     * @return self
     */
    public function setMaximumAlerts(int $maximumAlerts) : self
    {
        $this->maximumAlerts = $maximumAlerts;
        return $this;
    }
    /**
     * The name of the alert.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the alert.
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
     * The type of alert.
     *
     * @return string
     */
    public function getNotification() : string
    {
        return $this->notification;
    }
    /**
     * The type of alert.
     *
     * @param string $notification
     *
     * @return self
     */
    public function setNotification(string $notification) : self
    {
        $this->notification = $notification;
        return $this;
    }
    /**
     * The recipient list. At least one recipient must be specified. Each recipient must be a valid e-mail address.
     *
     * @return string[]
     */
    public function getRecipients() : array
    {
        return $this->recipients;
    }
    /**
     * The recipient list. At least one recipient must be specified. Each recipient must be a valid e-mail address.
     *
     * @param string[] $recipients
     *
     * @return self
     */
    public function setRecipients(array $recipients) : self
    {
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * The SMTP server/relay to send messages through.
     *
     * @return string
     */
    public function getRelayServer() : string
    {
        return $this->relayServer;
    }
    /**
     * The SMTP server/relay to send messages through.
     *
     * @param string $relayServer
     *
     * @return self
     */
    public function setRelayServer(string $relayServer) : self
    {
        $this->relayServer = $relayServer;
        return $this;
    }
    /**
     * The sender e-mail address that will appear in the from field.
     *
     * @return string
     */
    public function getSenderEmailAddress() : string
    {
        return $this->senderEmailAddress;
    }
    /**
     * The sender e-mail address that will appear in the from field.
     *
     * @param string $senderEmailAddress
     *
     * @return self
     */
    public function setSenderEmailAddress(string $senderEmailAddress) : self
    {
        $this->senderEmailAddress = $senderEmailAddress;
        return $this;
    }
}