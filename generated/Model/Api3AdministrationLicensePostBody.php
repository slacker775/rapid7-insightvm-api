<?php

namespace Rapid7\InsightVM\Api\Model;

class Api3AdministrationLicensePostBody
{
    /**
     * The contents of a license (.lic) file.
     *
     * @var string
     */
    protected $license;
    /**
     * The contents of a license (.lic) file.
     *
     * @return string
     */
    public function getLicense() : string
    {
        return $this->license;
    }
    /**
     * The contents of a license (.lic) file.
     *
     * @param string $license
     *
     * @return self
     */
    public function setLicense(string $license) : self
    {
        $this->license = $license;
        return $this;
    }
}