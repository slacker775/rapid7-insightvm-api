<?php

namespace Rapid7\InsightVM\Api\Model;

class AvailableReportFormat
{
    /**
     * The output file-format of a report.
     *
     * @var string
     */
    protected $format;
    /**
     * The report template identifiers that can be used within a report format.
     *
     * @var string[]
     */
    protected $templates;
    /**
     * The output file-format of a report.
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * The output file-format of a report.
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * The report template identifiers that can be used within a report format.
     *
     * @return string[]
     */
    public function getTemplates() : array
    {
        return $this->templates;
    }
    /**
     * The report template identifiers that can be used within a report format.
     *
     * @param string[] $templates
     *
     * @return self
     */
    public function setTemplates(array $templates) : self
    {
        $this->templates = $templates;
        return $this;
    }
}