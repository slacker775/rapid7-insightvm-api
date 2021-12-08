<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateWebSpider
{
    /**
     * Whether scanning of multi-use devices, such as printers or print servers should be avoided.
     *
     * @var bool
     */
    protected $dontScanMultiUseDevices;
    /**
     * Whether query strings are using in URLs when web spidering. This causes the web spider to make many more requests to the Web server. This will increase overall scan time and possibly affect the Web server's performance for legitimate users.
     *
     * @var bool
     */
    protected $includeQueryStrings;
    /**
     * 
     *
     * @var ScanTemplateWebSpiderPaths
     */
    protected $paths;
    /**
     * 
     *
     * @var ScanTemplateWebSpiderPatterns
     */
    protected $patterns;
    /**
     * 
     *
     * @var ScanTemplateWebSpiderPerformance
     */
    protected $performance;
    /**
     * Whether to determine if discovered logon forms accept commonly used user names or passwords. The process may cause authentication services with certain security policies to lock out accounts with these credentials.
     *
     * @var bool
     */
    protected $testCommonUsernamesAndPasswords;
    /**
     * Whether to test for persistent cross-site scripting during a single scan. This test helps to reduce the risk of dangerous attacks via malicious code stored on Web servers. Enabling it may increase Web spider scan times.
     *
     * @var bool
     */
    protected $testXssInSingleScan;
    /**
     * The `User-Agent` to use when web spidering. Defaults to `"Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"`.
     *
     * @var string
     */
    protected $userAgent;
    /**
     * Whether scanning of multi-use devices, such as printers or print servers should be avoided.
     *
     * @return bool
     */
    public function getDontScanMultiUseDevices() : bool
    {
        return $this->dontScanMultiUseDevices;
    }
    /**
     * Whether scanning of multi-use devices, such as printers or print servers should be avoided.
     *
     * @param bool $dontScanMultiUseDevices
     *
     * @return self
     */
    public function setDontScanMultiUseDevices(bool $dontScanMultiUseDevices) : self
    {
        $this->dontScanMultiUseDevices = $dontScanMultiUseDevices;
        return $this;
    }
    /**
     * Whether query strings are using in URLs when web spidering. This causes the web spider to make many more requests to the Web server. This will increase overall scan time and possibly affect the Web server's performance for legitimate users.
     *
     * @return bool
     */
    public function getIncludeQueryStrings() : bool
    {
        return $this->includeQueryStrings;
    }
    /**
     * Whether query strings are using in URLs when web spidering. This causes the web spider to make many more requests to the Web server. This will increase overall scan time and possibly affect the Web server's performance for legitimate users.
     *
     * @param bool $includeQueryStrings
     *
     * @return self
     */
    public function setIncludeQueryStrings(bool $includeQueryStrings) : self
    {
        $this->includeQueryStrings = $includeQueryStrings;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateWebSpiderPaths
     */
    public function getPaths() : ScanTemplateWebSpiderPaths
    {
        return $this->paths;
    }
    /**
     * 
     *
     * @param ScanTemplateWebSpiderPaths $paths
     *
     * @return self
     */
    public function setPaths(ScanTemplateWebSpiderPaths $paths) : self
    {
        $this->paths = $paths;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateWebSpiderPatterns
     */
    public function getPatterns() : ScanTemplateWebSpiderPatterns
    {
        return $this->patterns;
    }
    /**
     * 
     *
     * @param ScanTemplateWebSpiderPatterns $patterns
     *
     * @return self
     */
    public function setPatterns(ScanTemplateWebSpiderPatterns $patterns) : self
    {
        $this->patterns = $patterns;
        return $this;
    }
    /**
     * 
     *
     * @return ScanTemplateWebSpiderPerformance
     */
    public function getPerformance() : ScanTemplateWebSpiderPerformance
    {
        return $this->performance;
    }
    /**
     * 
     *
     * @param ScanTemplateWebSpiderPerformance $performance
     *
     * @return self
     */
    public function setPerformance(ScanTemplateWebSpiderPerformance $performance) : self
    {
        $this->performance = $performance;
        return $this;
    }
    /**
     * Whether to determine if discovered logon forms accept commonly used user names or passwords. The process may cause authentication services with certain security policies to lock out accounts with these credentials.
     *
     * @return bool
     */
    public function getTestCommonUsernamesAndPasswords() : bool
    {
        return $this->testCommonUsernamesAndPasswords;
    }
    /**
     * Whether to determine if discovered logon forms accept commonly used user names or passwords. The process may cause authentication services with certain security policies to lock out accounts with these credentials.
     *
     * @param bool $testCommonUsernamesAndPasswords
     *
     * @return self
     */
    public function setTestCommonUsernamesAndPasswords(bool $testCommonUsernamesAndPasswords) : self
    {
        $this->testCommonUsernamesAndPasswords = $testCommonUsernamesAndPasswords;
        return $this;
    }
    /**
     * Whether to test for persistent cross-site scripting during a single scan. This test helps to reduce the risk of dangerous attacks via malicious code stored on Web servers. Enabling it may increase Web spider scan times.
     *
     * @return bool
     */
    public function getTestXssInSingleScan() : bool
    {
        return $this->testXssInSingleScan;
    }
    /**
     * Whether to test for persistent cross-site scripting during a single scan. This test helps to reduce the risk of dangerous attacks via malicious code stored on Web servers. Enabling it may increase Web spider scan times.
     *
     * @param bool $testXssInSingleScan
     *
     * @return self
     */
    public function setTestXssInSingleScan(bool $testXssInSingleScan) : self
    {
        $this->testXssInSingleScan = $testXssInSingleScan;
        return $this;
    }
    /**
     * The `User-Agent` to use when web spidering. Defaults to `"Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"`.
     *
     * @return string
     */
    public function getUserAgent() : string
    {
        return $this->userAgent;
    }
    /**
     * The `User-Agent` to use when web spidering. Defaults to `"Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"`.
     *
     * @param string $userAgent
     *
     * @return self
     */
    public function setUserAgent(string $userAgent) : self
    {
        $this->userAgent = $userAgent;
        return $this;
    }
}