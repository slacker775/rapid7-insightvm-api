<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateAssetDiscovery
{
    /**
     * Whether to query Whois during discovery. Defaults to `false`.
     *
     * @var bool
     */
    protected $collectWhoisInformation;
    /**
     * The minimum certainty required for a fingerprint to be considered valid during a scan. Defaults to `0.16`.
     *
     * @var float
     */
    protected $fingerprintMinimumCertainty;
    /**
     * The number of fingerprinting attempts made to determine the operating system fingerprint. Defaults to `4`.
     *
     * @var int
     */
    protected $fingerprintRetries;
    /**
     * Whether to fingerprint TCP/IP stacks for hardware, operating system and software information.
     *
     * @var bool
     */
    protected $ipFingerprintingEnabled;
    /**
     * Whether ARP pings are sent during asset discovery. Defaults to `true`.
     *
     * @var bool
     */
    protected $sendArpPings;
    /**
     * Whether ICMP pings are sent during asset discovery. Defaults to `false`.
     *
     * @var bool
     */
    protected $sendIcmpPings;
    /**
     * TCP ports to send packets and perform discovery. Defaults to no ports.
     *
     * @var int[]
     */
    protected $tcpPorts;
    /**
     * Whether TCP reset responses are treated as live assets. Defaults to `true`.
     *
     * @var bool
     */
    protected $treatTcpResetAsAsset;
    /**
     * UDP ports to send packets and perform discovery. Defaults to no ports.
     *
     * @var int[]
     */
    protected $udpPorts;
    /**
     * Whether to query Whois during discovery. Defaults to `false`.
     *
     * @return bool
     */
    public function getCollectWhoisInformation() : bool
    {
        return $this->collectWhoisInformation;
    }
    /**
     * Whether to query Whois during discovery. Defaults to `false`.
     *
     * @param bool $collectWhoisInformation
     *
     * @return self
     */
    public function setCollectWhoisInformation(bool $collectWhoisInformation) : self
    {
        $this->collectWhoisInformation = $collectWhoisInformation;
        return $this;
    }
    /**
     * The minimum certainty required for a fingerprint to be considered valid during a scan. Defaults to `0.16`.
     *
     * @return float
     */
    public function getFingerprintMinimumCertainty() : float
    {
        return $this->fingerprintMinimumCertainty;
    }
    /**
     * The minimum certainty required for a fingerprint to be considered valid during a scan. Defaults to `0.16`.
     *
     * @param float $fingerprintMinimumCertainty
     *
     * @return self
     */
    public function setFingerprintMinimumCertainty(float $fingerprintMinimumCertainty) : self
    {
        $this->fingerprintMinimumCertainty = $fingerprintMinimumCertainty;
        return $this;
    }
    /**
     * The number of fingerprinting attempts made to determine the operating system fingerprint. Defaults to `4`.
     *
     * @return int
     */
    public function getFingerprintRetries() : int
    {
        return $this->fingerprintRetries;
    }
    /**
     * The number of fingerprinting attempts made to determine the operating system fingerprint. Defaults to `4`.
     *
     * @param int $fingerprintRetries
     *
     * @return self
     */
    public function setFingerprintRetries(int $fingerprintRetries) : self
    {
        $this->fingerprintRetries = $fingerprintRetries;
        return $this;
    }
    /**
     * Whether to fingerprint TCP/IP stacks for hardware, operating system and software information.
     *
     * @return bool
     */
    public function getIpFingerprintingEnabled() : bool
    {
        return $this->ipFingerprintingEnabled;
    }
    /**
     * Whether to fingerprint TCP/IP stacks for hardware, operating system and software information.
     *
     * @param bool $ipFingerprintingEnabled
     *
     * @return self
     */
    public function setIpFingerprintingEnabled(bool $ipFingerprintingEnabled) : self
    {
        $this->ipFingerprintingEnabled = $ipFingerprintingEnabled;
        return $this;
    }
    /**
     * Whether ARP pings are sent during asset discovery. Defaults to `true`.
     *
     * @return bool
     */
    public function getSendArpPings() : bool
    {
        return $this->sendArpPings;
    }
    /**
     * Whether ARP pings are sent during asset discovery. Defaults to `true`.
     *
     * @param bool $sendArpPings
     *
     * @return self
     */
    public function setSendArpPings(bool $sendArpPings) : self
    {
        $this->sendArpPings = $sendArpPings;
        return $this;
    }
    /**
     * Whether ICMP pings are sent during asset discovery. Defaults to `false`.
     *
     * @return bool
     */
    public function getSendIcmpPings() : bool
    {
        return $this->sendIcmpPings;
    }
    /**
     * Whether ICMP pings are sent during asset discovery. Defaults to `false`.
     *
     * @param bool $sendIcmpPings
     *
     * @return self
     */
    public function setSendIcmpPings(bool $sendIcmpPings) : self
    {
        $this->sendIcmpPings = $sendIcmpPings;
        return $this;
    }
    /**
     * TCP ports to send packets and perform discovery. Defaults to no ports.
     *
     * @return int[]
     */
    public function getTcpPorts() : array
    {
        return $this->tcpPorts;
    }
    /**
     * TCP ports to send packets and perform discovery. Defaults to no ports.
     *
     * @param int[] $tcpPorts
     *
     * @return self
     */
    public function setTcpPorts(array $tcpPorts) : self
    {
        $this->tcpPorts = $tcpPorts;
        return $this;
    }
    /**
     * Whether TCP reset responses are treated as live assets. Defaults to `true`.
     *
     * @return bool
     */
    public function getTreatTcpResetAsAsset() : bool
    {
        return $this->treatTcpResetAsAsset;
    }
    /**
     * Whether TCP reset responses are treated as live assets. Defaults to `true`.
     *
     * @param bool $treatTcpResetAsAsset
     *
     * @return self
     */
    public function setTreatTcpResetAsAsset(bool $treatTcpResetAsAsset) : self
    {
        $this->treatTcpResetAsAsset = $treatTcpResetAsAsset;
        return $this;
    }
    /**
     * UDP ports to send packets and perform discovery. Defaults to no ports.
     *
     * @return int[]
     */
    public function getUdpPorts() : array
    {
        return $this->udpPorts;
    }
    /**
     * UDP ports to send packets and perform discovery. Defaults to no ports.
     *
     * @param int[] $udpPorts
     *
     * @return self
     */
    public function setUdpPorts(array $udpPorts) : self
    {
        $this->udpPorts = $udpPorts;
        return $this;
    }
}