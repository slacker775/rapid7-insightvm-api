<?php

namespace Rapid7\InsightVM\Api\Model;

class Alert
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
     * Hypermedia links to corresponding or related resources.
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
}