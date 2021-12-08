<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportStorage
{
    /**
     * The location to storage an additional copy of the report. This is a sub-path post-fixed to `$(install_dir)/nsc/reports/$(user)/`.
     *
     * @var string
     */
    protected $location;
    /**
     * The full path to the additional copy storage location.
     *
     * @var string
     */
    protected $path;
    /**
     * The location to storage an additional copy of the report. This is a sub-path post-fixed to `$(install_dir)/nsc/reports/$(user)/`.
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * The location to storage an additional copy of the report. This is a sub-path post-fixed to `$(install_dir)/nsc/reports/$(user)/`.
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * The full path to the additional copy storage location.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The full path to the additional copy storage location.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
}