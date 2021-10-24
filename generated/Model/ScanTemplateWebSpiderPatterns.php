<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateWebSpiderPatterns
{
    /**
     * A regular expression that is used to find sensitive content on a page.
     *
     * @var string
     */
    protected $sensitiveContent;
    /**
     * A regular expression that is used to find fields that may contain sensitive input. Defaults to `"(p|pass)(word|phrase|wd|code)"`.
     *
     * @var string
     */
    protected $sensitiveField;
    /**
     * A regular expression that is used to find sensitive content on a page.
     *
     * @return string
     */
    public function getSensitiveContent() : string
    {
        return $this->sensitiveContent;
    }
    /**
     * A regular expression that is used to find sensitive content on a page.
     *
     * @param string $sensitiveContent
     *
     * @return self
     */
    public function setSensitiveContent(string $sensitiveContent) : self
    {
        $this->sensitiveContent = $sensitiveContent;
        return $this;
    }
    /**
     * A regular expression that is used to find fields that may contain sensitive input. Defaults to `"(p|pass)(word|phrase|wd|code)"`.
     *
     * @return string
     */
    public function getSensitiveField() : string
    {
        return $this->sensitiveField;
    }
    /**
     * A regular expression that is used to find fields that may contain sensitive input. Defaults to `"(p|pass)(word|phrase|wd|code)"`.
     *
     * @param string $sensitiveField
     *
     * @return self
     */
    public function setSensitiveField(string $sensitiveField) : self
    {
        $this->sensitiveField = $sensitiveField;
        return $this;
    }
}