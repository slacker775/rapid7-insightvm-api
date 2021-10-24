<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportFrequency
{
    /**
     * List the next 10 dates in the future the schedule will launch. 
     *
     * @var string[]
     */
    protected $nextRuntimes;
    /**
     * 
     *
     * @var RepeatSchedule
     */
    protected $repeat;
    /**
     * The scheduled start date and time. Date is represented in ISO 8601 format. Repeating schedules will determine the next schedule to begin based on this date and time.
     *
     * @var string
     */
    protected $start;
    /**
     * List the next 10 dates in the future the schedule will launch. 
     *
     * @return string[]
     */
    public function getNextRuntimes() : array
    {
        return $this->nextRuntimes;
    }
    /**
     * List the next 10 dates in the future the schedule will launch. 
     *
     * @param string[] $nextRuntimes
     *
     * @return self
     */
    public function setNextRuntimes(array $nextRuntimes) : self
    {
        $this->nextRuntimes = $nextRuntimes;
        return $this;
    }
    /**
     * 
     *
     * @return RepeatSchedule
     */
    public function getRepeat() : RepeatSchedule
    {
        return $this->repeat;
    }
    /**
     * 
     *
     * @param RepeatSchedule $repeat
     *
     * @return self
     */
    public function setRepeat(RepeatSchedule $repeat) : self
    {
        $this->repeat = $repeat;
        return $this;
    }
    /**
     * The scheduled start date and time. Date is represented in ISO 8601 format. Repeating schedules will determine the next schedule to begin based on this date and time.
     *
     * @return string
     */
    public function getStart() : string
    {
        return $this->start;
    }
    /**
     * The scheduled start date and time. Date is represented in ISO 8601 format. Repeating schedules will determine the next schedule to begin based on this date and time.
     *
     * @param string $start
     *
     * @return self
     */
    public function setStart(string $start) : self
    {
        $this->start = $start;
        return $this;
    }
}