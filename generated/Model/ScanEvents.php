<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanEvents
{
    /**
     * Generates an alert when a scan fails. Default value is `false`.
     *
     * @var bool
     */
    protected $failed;
    /**
     * Generates an alert when a scan pauses. Default value is `false`.
     *
     * @var bool
     */
    protected $paused;
    /**
     * Generates an alert when a scan resumes. Default value is `false`.
     *
     * @var bool
     */
    protected $resumed;
    /**
     * Generates an alert when a scan starts. Default value is `false`.
     *
     * @var bool
     */
    protected $started;
    /**
     * Generates an alert when a scan stops. Default value is `false`.
     *
     * @var bool
     */
    protected $stopped;
    /**
     * Generates an alert when a scan fails. Default value is `false`.
     *
     * @return bool
     */
    public function getFailed() : bool
    {
        return $this->failed;
    }
    /**
     * Generates an alert when a scan fails. Default value is `false`.
     *
     * @param bool $failed
     *
     * @return self
     */
    public function setFailed(bool $failed) : self
    {
        $this->failed = $failed;
        return $this;
    }
    /**
     * Generates an alert when a scan pauses. Default value is `false`.
     *
     * @return bool
     */
    public function getPaused() : bool
    {
        return $this->paused;
    }
    /**
     * Generates an alert when a scan pauses. Default value is `false`.
     *
     * @param bool $paused
     *
     * @return self
     */
    public function setPaused(bool $paused) : self
    {
        $this->paused = $paused;
        return $this;
    }
    /**
     * Generates an alert when a scan resumes. Default value is `false`.
     *
     * @return bool
     */
    public function getResumed() : bool
    {
        return $this->resumed;
    }
    /**
     * Generates an alert when a scan resumes. Default value is `false`.
     *
     * @param bool $resumed
     *
     * @return self
     */
    public function setResumed(bool $resumed) : self
    {
        $this->resumed = $resumed;
        return $this;
    }
    /**
     * Generates an alert when a scan starts. Default value is `false`.
     *
     * @return bool
     */
    public function getStarted() : bool
    {
        return $this->started;
    }
    /**
     * Generates an alert when a scan starts. Default value is `false`.
     *
     * @param bool $started
     *
     * @return self
     */
    public function setStarted(bool $started) : self
    {
        $this->started = $started;
        return $this;
    }
    /**
     * Generates an alert when a scan stops. Default value is `false`.
     *
     * @return bool
     */
    public function getStopped() : bool
    {
        return $this->stopped;
    }
    /**
     * Generates an alert when a scan stops. Default value is `false`.
     *
     * @param bool $stopped
     *
     * @return self
     */
    public function setStopped(bool $stopped) : self
    {
        $this->stopped = $stopped;
        return $this;
    }
}