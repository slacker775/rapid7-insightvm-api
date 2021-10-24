<?php

namespace Rapid7\InsightVM\Api\Model;

class PCI
{
    /**
     * The CVSS score of the vulnerability, adjusted for PCI rules and exceptions, on a scale of 0-10.
     *
     * @var int
     */
    protected $adjustedCVSSScore;
    /**
     * The severity score of the vulnerability, adjusted for PCI rules and exceptions, on a scale of 0-10.
     *
     * @var int
     */
    protected $adjustedSeverityScore;
    /**
     * Whether if present on a host this vulnerability would cause a PCI failure. `true` if "status" is `"Fail"`, `false` otherwise.
     *
     * @var bool
     */
    protected $fail;
    /**
     * Any special notes or remarks about the vulnerability that pertain to PCI compliance.
     *
     * @var string
     */
    protected $specialNotes;
    /**
     * The PCI compliance status of the vulnerability. One of: `"Pass"`, `"Fail"`.
     *
     * @var string
     */
    protected $status;
    /**
     * The CVSS score of the vulnerability, adjusted for PCI rules and exceptions, on a scale of 0-10.
     *
     * @return int
     */
    public function getAdjustedCVSSScore() : int
    {
        return $this->adjustedCVSSScore;
    }
    /**
     * The CVSS score of the vulnerability, adjusted for PCI rules and exceptions, on a scale of 0-10.
     *
     * @param int $adjustedCVSSScore
     *
     * @return self
     */
    public function setAdjustedCVSSScore(int $adjustedCVSSScore) : self
    {
        $this->adjustedCVSSScore = $adjustedCVSSScore;
        return $this;
    }
    /**
     * The severity score of the vulnerability, adjusted for PCI rules and exceptions, on a scale of 0-10.
     *
     * @return int
     */
    public function getAdjustedSeverityScore() : int
    {
        return $this->adjustedSeverityScore;
    }
    /**
     * The severity score of the vulnerability, adjusted for PCI rules and exceptions, on a scale of 0-10.
     *
     * @param int $adjustedSeverityScore
     *
     * @return self
     */
    public function setAdjustedSeverityScore(int $adjustedSeverityScore) : self
    {
        $this->adjustedSeverityScore = $adjustedSeverityScore;
        return $this;
    }
    /**
     * Whether if present on a host this vulnerability would cause a PCI failure. `true` if "status" is `"Fail"`, `false` otherwise.
     *
     * @return bool
     */
    public function getFail() : bool
    {
        return $this->fail;
    }
    /**
     * Whether if present on a host this vulnerability would cause a PCI failure. `true` if "status" is `"Fail"`, `false` otherwise.
     *
     * @param bool $fail
     *
     * @return self
     */
    public function setFail(bool $fail) : self
    {
        $this->fail = $fail;
        return $this;
    }
    /**
     * Any special notes or remarks about the vulnerability that pertain to PCI compliance.
     *
     * @return string
     */
    public function getSpecialNotes() : string
    {
        return $this->specialNotes;
    }
    /**
     * Any special notes or remarks about the vulnerability that pertain to PCI compliance.
     *
     * @param string $specialNotes
     *
     * @return self
     */
    public function setSpecialNotes(string $specialNotes) : self
    {
        $this->specialNotes = $specialNotes;
        return $this;
    }
    /**
     * The PCI compliance status of the vulnerability. One of: `"Pass"`, `"Fail"`.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The PCI compliance status of the vulnerability. One of: `"Pass"`, `"Fail"`.
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
}