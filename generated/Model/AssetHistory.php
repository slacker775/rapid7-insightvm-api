<?php

namespace Rapid7\InsightVM\Api\Model;

class AssetHistory
{
    /**
     * The date the asset information was collected or changed.
     *
     * @var string
     */
    protected $date;
    /**
     * Additional information describing the change.
     *
     * @var string
     */
    protected $description;
    /**
     * If a scan-oriented change, the identifier of the corresponding scan the asset was scanned in.
     *
     * @var int
     */
    protected $scanId;
    /**
    * The type of change. May be one of:
    | Type                                | Source of Data                                              |
    | ----------------------------------- | ----------------------------------------------------------- |
    | `ASSET-IMPORT`, `EXTERNAL-IMPORT`   | External source such as the API                             |
    | `EXTERNAL-IMPORT-APPSPIDER`         | Rapid7 InsightAppSec (previously known as AppSpider)        |
    | `SCAN`                              | Scan engine scan                                            |
    | `ACTIVE-SYNC`                       | ActiveSync                                                  |
    | `SCAN-LOG-IMPORT`                   | Manual import of a scan log                                 |
    | `VULNERABILITY_EXCEPTION_APPLIED`   | Vulnerability exception applied                             |
    | `VULNERABILITY_EXCEPTION_UNAPPLIED` | Vulnerability exception unapplied                           |
    *
    * @var string
    */
    protected $type;
    /**
     * If a vulnerability exception change, the login name of the user that performed the operation.
     *
     * @var string
     */
    protected $user;
    /**
     * The version number of the change (a chronological incrementing number starting from 1). 
     *
     * @var int
     */
    protected $version;
    /**
     * If a vulnerability exception change, the identifier of the vulnerability exception that caused the change.
     *
     * @var int
     */
    protected $vulnerabilityExceptionId;
    /**
     * The date the asset information was collected or changed.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * The date the asset information was collected or changed.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * Additional information describing the change.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Additional information describing the change.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * If a scan-oriented change, the identifier of the corresponding scan the asset was scanned in.
     *
     * @return int
     */
    public function getScanId() : int
    {
        return $this->scanId;
    }
    /**
     * If a scan-oriented change, the identifier of the corresponding scan the asset was scanned in.
     *
     * @param int $scanId
     *
     * @return self
     */
    public function setScanId(int $scanId) : self
    {
        $this->scanId = $scanId;
        return $this;
    }
    /**
    * The type of change. May be one of:
    | Type                                | Source of Data                                              |
    | ----------------------------------- | ----------------------------------------------------------- |
    | `ASSET-IMPORT`, `EXTERNAL-IMPORT`   | External source such as the API                             |
    | `EXTERNAL-IMPORT-APPSPIDER`         | Rapid7 InsightAppSec (previously known as AppSpider)        |
    | `SCAN`                              | Scan engine scan                                            |
    | `ACTIVE-SYNC`                       | ActiveSync                                                  |
    | `SCAN-LOG-IMPORT`                   | Manual import of a scan log                                 |
    | `VULNERABILITY_EXCEPTION_APPLIED`   | Vulnerability exception applied                             |
    | `VULNERABILITY_EXCEPTION_UNAPPLIED` | Vulnerability exception unapplied                           |
    *
    * @return string
    */
    public function getType() : string
    {
        return $this->type;
    }
    /**
    * The type of change. May be one of:
    | Type                                | Source of Data                                              |
    | ----------------------------------- | ----------------------------------------------------------- |
    | `ASSET-IMPORT`, `EXTERNAL-IMPORT`   | External source such as the API                             |
    | `EXTERNAL-IMPORT-APPSPIDER`         | Rapid7 InsightAppSec (previously known as AppSpider)        |
    | `SCAN`                              | Scan engine scan                                            |
    | `ACTIVE-SYNC`                       | ActiveSync                                                  |
    | `SCAN-LOG-IMPORT`                   | Manual import of a scan log                                 |
    | `VULNERABILITY_EXCEPTION_APPLIED`   | Vulnerability exception applied                             |
    | `VULNERABILITY_EXCEPTION_UNAPPLIED` | Vulnerability exception unapplied                           |
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * If a vulnerability exception change, the login name of the user that performed the operation.
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * If a vulnerability exception change, the login name of the user that performed the operation.
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * The version number of the change (a chronological incrementing number starting from 1). 
     *
     * @return int
     */
    public function getVersion() : int
    {
        return $this->version;
    }
    /**
     * The version number of the change (a chronological incrementing number starting from 1). 
     *
     * @param int $version
     *
     * @return self
     */
    public function setVersion(int $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * If a vulnerability exception change, the identifier of the vulnerability exception that caused the change.
     *
     * @return int
     */
    public function getVulnerabilityExceptionId() : int
    {
        return $this->vulnerabilityExceptionId;
    }
    /**
     * If a vulnerability exception change, the identifier of the vulnerability exception that caused the change.
     *
     * @param int $vulnerabilityExceptionId
     *
     * @return self
     */
    public function setVulnerabilityExceptionId(int $vulnerabilityExceptionId) : self
    {
        $this->vulnerabilityExceptionId = $vulnerabilityExceptionId;
        return $this;
    }
}