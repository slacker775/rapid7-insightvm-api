<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportEmail
{
    /**
     * The format to distribute the report in when sending to users who have explicit access to the report.
     *
     * @var string
     */
    protected $access;
    /**
     * The format to distribute the report to additional recipients.
     *
     * @var string
     */
    protected $additional;
    /**
     * The email address of additional recipients to distribute the report to.
     *
     * @var string[]
     */
    protected $additionalRecipients;
    /**
     * ${report.config.email.additional.asset.access.description}
     *
     * @var bool
     */
    protected $assetAccess;
    /**
     * The format to distribute the report to the owner.
     *
     * @var string
     */
    protected $owner;
    /**
     * 
     *
     * @var ReportEmailSmtp
     */
    protected $smtp;
    /**
     * The format to distribute the report in when sending to users who have explicit access to the report.
     *
     * @return string
     */
    public function getAccess() : string
    {
        return $this->access;
    }
    /**
     * The format to distribute the report in when sending to users who have explicit access to the report.
     *
     * @param string $access
     *
     * @return self
     */
    public function setAccess(string $access) : self
    {
        $this->access = $access;
        return $this;
    }
    /**
     * The format to distribute the report to additional recipients.
     *
     * @return string
     */
    public function getAdditional() : string
    {
        return $this->additional;
    }
    /**
     * The format to distribute the report to additional recipients.
     *
     * @param string $additional
     *
     * @return self
     */
    public function setAdditional(string $additional) : self
    {
        $this->additional = $additional;
        return $this;
    }
    /**
     * The email address of additional recipients to distribute the report to.
     *
     * @return string[]
     */
    public function getAdditionalRecipients() : array
    {
        return $this->additionalRecipients;
    }
    /**
     * The email address of additional recipients to distribute the report to.
     *
     * @param string[] $additionalRecipients
     *
     * @return self
     */
    public function setAdditionalRecipients(array $additionalRecipients) : self
    {
        $this->additionalRecipients = $additionalRecipients;
        return $this;
    }
    /**
     * ${report.config.email.additional.asset.access.description}
     *
     * @return bool
     */
    public function getAssetAccess() : bool
    {
        return $this->assetAccess;
    }
    /**
     * ${report.config.email.additional.asset.access.description}
     *
     * @param bool $assetAccess
     *
     * @return self
     */
    public function setAssetAccess(bool $assetAccess) : self
    {
        $this->assetAccess = $assetAccess;
        return $this;
    }
    /**
     * The format to distribute the report to the owner.
     *
     * @return string
     */
    public function getOwner() : string
    {
        return $this->owner;
    }
    /**
     * The format to distribute the report to the owner.
     *
     * @param string $owner
     *
     * @return self
     */
    public function setOwner(string $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return ReportEmailSmtp
     */
    public function getSmtp() : ReportEmailSmtp
    {
        return $this->smtp;
    }
    /**
     * 
     *
     * @param ReportEmailSmtp $smtp
     *
     * @return self
     */
    public function setSmtp(ReportEmailSmtp $smtp) : self
    {
        $this->smtp = $smtp;
        return $this;
    }
}