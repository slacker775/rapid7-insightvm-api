<?php

namespace Rapid7\InsightVM\Api\Model;

class InstallSize
{
    /**
     * 
     *
     * @var BackupsSize
     */
    protected $backups;
    /**
     * 
     *
     * @var DatabaseSize
     */
    protected $database;
    /**
     * 
     *
     * @var File
     */
    protected $directory;
    /**
     * 
     *
     * @var ReportSize
     */
    protected $reports;
    /**
     * 
     *
     * @var ScanSize
     */
    protected $scans;
    /**
     * 
     *
     * @var InstallationTotalSize
     */
    protected $total;
    /**
     * 
     *
     * @return BackupsSize
     */
    public function getBackups() : BackupsSize
    {
        return $this->backups;
    }
    /**
     * 
     *
     * @param BackupsSize $backups
     *
     * @return self
     */
    public function setBackups(BackupsSize $backups) : self
    {
        $this->backups = $backups;
        return $this;
    }
    /**
     * 
     *
     * @return DatabaseSize
     */
    public function getDatabase() : DatabaseSize
    {
        return $this->database;
    }
    /**
     * 
     *
     * @param DatabaseSize $database
     *
     * @return self
     */
    public function setDatabase(DatabaseSize $database) : self
    {
        $this->database = $database;
        return $this;
    }
    /**
     * 
     *
     * @return File
     */
    public function getDirectory() : File
    {
        return $this->directory;
    }
    /**
     * 
     *
     * @param File $directory
     *
     * @return self
     */
    public function setDirectory(File $directory) : self
    {
        $this->directory = $directory;
        return $this;
    }
    /**
     * 
     *
     * @return ReportSize
     */
    public function getReports() : ReportSize
    {
        return $this->reports;
    }
    /**
     * 
     *
     * @param ReportSize $reports
     *
     * @return self
     */
    public function setReports(ReportSize $reports) : self
    {
        $this->reports = $reports;
        return $this;
    }
    /**
     * 
     *
     * @return ScanSize
     */
    public function getScans() : ScanSize
    {
        return $this->scans;
    }
    /**
     * 
     *
     * @param ScanSize $scans
     *
     * @return self
     */
    public function setScans(ScanSize $scans) : self
    {
        $this->scans = $scans;
        return $this;
    }
    /**
     * 
     *
     * @return InstallationTotalSize
     */
    public function getTotal() : InstallationTotalSize
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param InstallationTotalSize $total
     *
     * @return self
     */
    public function setTotal(InstallationTotalSize $total) : self
    {
        $this->total = $total;
        return $this;
    }
}