<?php

namespace Rapid7\InsightVM\Api\Model;

class Policy
{
    /**
     * The identifiers of the policies enabled to be checked during a scan. No policies are enabled by default.
     *
     * @var int[]
     */
    protected $enabled;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * Whether recursive windows file searches are enabled, if your internal security practices require this capability. Recursive file searches can increase scan times by several hours, depending on the number of files and other factors, so this setting is disabled for Windows systems by default. Defaults to `false`.
     *
     * @var bool
     */
    protected $recursiveWindowsFSSearch;
    /**
     * Whether Asset Reporting Format (ARF) results are stored. If you are required to submit reports of your policy scan results to the U.S. government in ARF for SCAP certification, you will need to store SCAP data so that it can be exported in this format. Note that stored SCAP data can accumulate rapidly, which can have a significant impact on file storage. Defaults to `false`.
     *
     * @var bool
     */
    protected $storeSCAP;
    /**
     * The identifiers of the policies enabled to be checked during a scan. No policies are enabled by default.
     *
     * @return int[]
     */
    public function getEnabled() : array
    {
        return $this->enabled;
    }
    /**
     * The identifiers of the policies enabled to be checked during a scan. No policies are enabled by default.
     *
     * @param int[] $enabled
     *
     * @return self
     */
    public function setEnabled(array $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * Hypermedia links to corresponding or related resources.
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
     * Whether recursive windows file searches are enabled, if your internal security practices require this capability. Recursive file searches can increase scan times by several hours, depending on the number of files and other factors, so this setting is disabled for Windows systems by default. Defaults to `false`.
     *
     * @return bool
     */
    public function getRecursiveWindowsFSSearch() : bool
    {
        return $this->recursiveWindowsFSSearch;
    }
    /**
     * Whether recursive windows file searches are enabled, if your internal security practices require this capability. Recursive file searches can increase scan times by several hours, depending on the number of files and other factors, so this setting is disabled for Windows systems by default. Defaults to `false`.
     *
     * @param bool $recursiveWindowsFSSearch
     *
     * @return self
     */
    public function setRecursiveWindowsFSSearch(bool $recursiveWindowsFSSearch) : self
    {
        $this->recursiveWindowsFSSearch = $recursiveWindowsFSSearch;
        return $this;
    }
    /**
     * Whether Asset Reporting Format (ARF) results are stored. If you are required to submit reports of your policy scan results to the U.S. government in ARF for SCAP certification, you will need to store SCAP data so that it can be exported in this format. Note that stored SCAP data can accumulate rapidly, which can have a significant impact on file storage. Defaults to `false`.
     *
     * @return bool
     */
    public function getStoreSCAP() : bool
    {
        return $this->storeSCAP;
    }
    /**
     * Whether Asset Reporting Format (ARF) results are stored. If you are required to submit reports of your policy scan results to the U.S. government in ARF for SCAP certification, you will need to store SCAP data so that it can be exported in this format. Note that stored SCAP data can accumulate rapidly, which can have a significant impact on file storage. Defaults to `false`.
     *
     * @param bool $storeSCAP
     *
     * @return self
     */
    public function setStoreSCAP(bool $storeSCAP) : self
    {
        $this->storeSCAP = $storeSCAP;
        return $this;
    }
}