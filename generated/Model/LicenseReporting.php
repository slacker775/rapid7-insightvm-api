<?php

namespace Rapid7\InsightVM\Api\Model;

class LicenseReporting
{
    /**
     * Whether advanced reporting is available.
     *
     * @var bool
     */
    protected $advanced;
    /**
     * Whether customizable CSV Export is available.
     *
     * @var bool
     */
    protected $customizableCSVExport;
    /**
     * Whether PCI reporting is available.
     *
     * @var bool
     */
    protected $pci;
    /**
     * Whether advanced reporting is available.
     *
     * @return bool
     */
    public function getAdvanced() : bool
    {
        return $this->advanced;
    }
    /**
     * Whether advanced reporting is available.
     *
     * @param bool $advanced
     *
     * @return self
     */
    public function setAdvanced(bool $advanced) : self
    {
        $this->advanced = $advanced;
        return $this;
    }
    /**
     * Whether customizable CSV Export is available.
     *
     * @return bool
     */
    public function getCustomizableCSVExport() : bool
    {
        return $this->customizableCSVExport;
    }
    /**
     * Whether customizable CSV Export is available.
     *
     * @param bool $customizableCSVExport
     *
     * @return self
     */
    public function setCustomizableCSVExport(bool $customizableCSVExport) : self
    {
        $this->customizableCSVExport = $customizableCSVExport;
        return $this;
    }
    /**
     * Whether PCI reporting is available.
     *
     * @return bool
     */
    public function getPci() : bool
    {
        return $this->pci;
    }
    /**
     * Whether PCI reporting is available.
     *
     * @param bool $pci
     *
     * @return self
     */
    public function setPci(bool $pci) : self
    {
        $this->pci = $pci;
        return $this;
    }
}