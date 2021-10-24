<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateServiceDiscovery
{
    /**
     * An optional file that lists each port and the service that commonly resides on it. If scans cannot identify actual services on ports, service names will be derived from this file in scan results. Defaults to empty.
     *
     * @var string
     */
    protected $serviceNameFile;
    /**
     * 
     *
     * @var ScanTemplateServiceDiscoveryTcp
     */
    protected $tcp;
    /**
     * 
     *
     * @var ScanTemplateServiceDiscoveryUdp
     */
    protected $udp;
    /**
     * An optional file that lists each port and the service that commonly resides on it. If scans cannot identify actual services on ports, service names will be derived from this file in scan results. Defaults to empty.
     *
     * @return string
     */
    public function getServiceNameFile() : string
    {
        return $this->serviceNameFile;
    }
    /**
     * An optional file that lists each port and the service that commonly resides on it. If scans cannot identify actual services on ports, service names will be derived from this file in scan results. Defaults to empty.
     *
     * @param string $serviceNameFile
     *
     * @return self
     */
    public function setServiceNameFile(string $serviceNameFile) : self
    {
        $this->serviceNameFile = $serviceNameFile;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateServiceDiscoveryTcp
     */
    public function getTcp() : ScanTemplateServiceDiscoveryTcp
    {
        return $this->tcp;
    }
    /**
     * 
     *
     * @param ScanTemplateServiceDiscoveryTcp $tcp
     *
     * @return self
     */
    public function setTcp(ScanTemplateServiceDiscoveryTcp $tcp) : self
    {
        $this->tcp = $tcp;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateServiceDiscoveryUdp
     */
    public function getUdp() : ScanTemplateServiceDiscoveryUdp
    {
        return $this->udp;
    }
    /**
     * 
     *
     * @param ScanTemplateServiceDiscoveryUdp $udp
     *
     * @return self
     */
    public function setUdp(ScanTemplateServiceDiscoveryUdp $udp) : self
    {
        $this->udp = $udp;
        return $this;
    }
}