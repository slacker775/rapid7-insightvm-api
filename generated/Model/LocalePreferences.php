<?php

namespace Rapid7\InsightVM\Api\Model;

class LocalePreferences
{
    /**
     * The default language to use. The format is a <a target="_blank" href="https://tools.ietf.org/html/bcp47">IETF BCP 47</a> language tag.
     *
     * @var string
     */
    protected $default;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The language to use to generate reports. The format is a <a target="_blank" href="https://tools.ietf.org/html/bcp47">IETF BCP 47</a> language tag.
     *
     * @var string
     */
    protected $reports;
    /**
     * The default language to use. The format is a <a target="_blank" href="https://tools.ietf.org/html/bcp47">IETF BCP 47</a> language tag.
     *
     * @return string
     */
    public function getDefault() : string
    {
        return $this->default;
    }
    /**
     * The default language to use. The format is a <a target="_blank" href="https://tools.ietf.org/html/bcp47">IETF BCP 47</a> language tag.
     *
     * @param string $default
     *
     * @return self
     */
    public function setDefault(string $default) : self
    {
        $this->default = $default;
        return $this;
    }
    /**
     * 
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * 
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
     * The language to use to generate reports. The format is a <a target="_blank" href="https://tools.ietf.org/html/bcp47">IETF BCP 47</a> language tag.
     *
     * @return string
     */
    public function getReports() : string
    {
        return $this->reports;
    }
    /**
     * The language to use to generate reports. The format is a <a target="_blank" href="https://tools.ietf.org/html/bcp47">IETF BCP 47</a> language tag.
     *
     * @param string $reports
     *
     * @return self
     */
    public function setReports(string $reports) : self
    {
        $this->reports = $reports;
        return $this;
    }
}