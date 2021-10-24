<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanSchedule
{
    /**
     * 
     *
     * @var ScheduledScanTargets
     */
    protected $assets;
    /**
    * Specifies the maximum duration the scheduled scan is allowed to run. Scheduled scans that do not complete within specified duration will be paused. The scan duration are represented by the format `"P[n]DT[n]H[n]M"`. In these representations, the [n] is replaced by a value for each of the date and time elements that follow the [n].The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | P | The duration designator. It must be placed at the start of the duration representation. |
    | D | The day designator that follows the value for the number of days. |
    | T | The time designator that precedes the time portion of the representation. |
    | H | The hour designator that follows the value for the number of hours. |
    | M | The minute designator that follows the value for the number of minutes. |
    For example, `"P5DT10H30M"` represents a duration of "5 days, 10 hours, and 30 minutes". Each duration designator is optional; however, at least one must be specified and it must be preceded by the `"P"` designator.
    
    *
    * @var string
    */
    protected $duration;
    /**
     * Flag indicating whether the scan schedule is enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The identifier of the scan schedule.
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * List the next 10 dates in the future the schedule will launch. 
     *
     * @var string[]
     */
    protected $nextRuntimes;
    /**
    * Specifies the desired behavior of a repeating scheduled scan when the previous scan was paused due to reaching is maximum duration. The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | restart-scan | Stops the previously-paused scan and launches a new scan if the previous scan did not complete within the specified duration. If the previous scheduled scan was not paused, then a new scan is launched. |
    | resume-scan | Resumes the previously-paused scan if the previous scan did not complete within the specified duration. If the previous scheduled scan was not paused, then a new scan is launched. |
    
    *
    * @var string
    */
    protected $onScanRepeat;
    /**
     * 
     *
     * @var RepeatResource
     */
    protected $repeat;
    /**
     * The identifier of the scan engine to be used for this scan schedule. If not set, the site's assigned scan engine will be used.
     *
     * @var int
     */
    protected $scanEngineId;
    /**
     * A user-defined name for the scan launched by the schedule. If not explicitly set in the schedule, the scan name will be generated prior to the scan launching. Names must be unique.
     *
     * @var string
     */
    protected $scanName;
    /**
     * The identifier of the scan template to be used for this scan schedule. If not set, the site's assigned scan template will be used.
     *
     * @var string
     */
    protected $scanTemplateId;
    /**
     * The scheduled start date and time. Date is represented in ISO 8601 format. Repeating schedules will determine the next schedule to begin based on this date and time.
     *
     * @var string
     */
    protected $start;
    /**
     * 
     *
     * @return ScheduledScanTargets
     */
    public function getAssets() : ScheduledScanTargets
    {
        return $this->assets;
    }
    /**
     * 
     *
     * @param ScheduledScanTargets $assets
     *
     * @return self
     */
    public function setAssets(ScheduledScanTargets $assets) : self
    {
        $this->assets = $assets;
        return $this;
    }
    /**
    * Specifies the maximum duration the scheduled scan is allowed to run. Scheduled scans that do not complete within specified duration will be paused. The scan duration are represented by the format `"P[n]DT[n]H[n]M"`. In these representations, the [n] is replaced by a value for each of the date and time elements that follow the [n].The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | P | The duration designator. It must be placed at the start of the duration representation. |
    | D | The day designator that follows the value for the number of days. |
    | T | The time designator that precedes the time portion of the representation. |
    | H | The hour designator that follows the value for the number of hours. |
    | M | The minute designator that follows the value for the number of minutes. |
    For example, `"P5DT10H30M"` represents a duration of "5 days, 10 hours, and 30 minutes". Each duration designator is optional; however, at least one must be specified and it must be preceded by the `"P"` designator.
    
    *
    * @return string
    */
    public function getDuration() : string
    {
        return $this->duration;
    }
    /**
    * Specifies the maximum duration the scheduled scan is allowed to run. Scheduled scans that do not complete within specified duration will be paused. The scan duration are represented by the format `"P[n]DT[n]H[n]M"`. In these representations, the [n] is replaced by a value for each of the date and time elements that follow the [n].The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | P | The duration designator. It must be placed at the start of the duration representation. |
    | D | The day designator that follows the value for the number of days. |
    | T | The time designator that precedes the time portion of the representation. |
    | H | The hour designator that follows the value for the number of hours. |
    | M | The minute designator that follows the value for the number of minutes. |
    For example, `"P5DT10H30M"` represents a duration of "5 days, 10 hours, and 30 minutes". Each duration designator is optional; however, at least one must be specified and it must be preceded by the `"P"` designator.
    
    *
    * @param string $duration
    *
    * @return self
    */
    public function setDuration(string $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * Flag indicating whether the scan schedule is enabled.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Flag indicating whether the scan schedule is enabled.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * The identifier of the scan schedule.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the scan schedule.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
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
    * Specifies the desired behavior of a repeating scheduled scan when the previous scan was paused due to reaching is maximum duration. The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | restart-scan | Stops the previously-paused scan and launches a new scan if the previous scan did not complete within the specified duration. If the previous scheduled scan was not paused, then a new scan is launched. |
    | resume-scan | Resumes the previously-paused scan if the previous scan did not complete within the specified duration. If the previous scheduled scan was not paused, then a new scan is launched. |
    
    *
    * @return string
    */
    public function getOnScanRepeat() : string
    {
        return $this->onScanRepeat;
    }
    /**
    * Specifies the desired behavior of a repeating scheduled scan when the previous scan was paused due to reaching is maximum duration. The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | restart-scan | Stops the previously-paused scan and launches a new scan if the previous scan did not complete within the specified duration. If the previous scheduled scan was not paused, then a new scan is launched. |
    | resume-scan | Resumes the previously-paused scan if the previous scan did not complete within the specified duration. If the previous scheduled scan was not paused, then a new scan is launched. |
    
    *
    * @param string $onScanRepeat
    *
    * @return self
    */
    public function setOnScanRepeat(string $onScanRepeat) : self
    {
        $this->onScanRepeat = $onScanRepeat;
        return $this;
    }
    /**
     * 
     *
     * @return RepeatResource
     */
    public function getRepeat() : RepeatResource
    {
        return $this->repeat;
    }
    /**
     * 
     *
     * @param RepeatResource $repeat
     *
     * @return self
     */
    public function setRepeat(RepeatResource $repeat) : self
    {
        $this->repeat = $repeat;
        return $this;
    }
    /**
     * The identifier of the scan engine to be used for this scan schedule. If not set, the site's assigned scan engine will be used.
     *
     * @return int
     */
    public function getScanEngineId() : int
    {
        return $this->scanEngineId;
    }
    /**
     * The identifier of the scan engine to be used for this scan schedule. If not set, the site's assigned scan engine will be used.
     *
     * @param int $scanEngineId
     *
     * @return self
     */
    public function setScanEngineId(int $scanEngineId) : self
    {
        $this->scanEngineId = $scanEngineId;
        return $this;
    }
    /**
     * A user-defined name for the scan launched by the schedule. If not explicitly set in the schedule, the scan name will be generated prior to the scan launching. Names must be unique.
     *
     * @return string
     */
    public function getScanName() : string
    {
        return $this->scanName;
    }
    /**
     * A user-defined name for the scan launched by the schedule. If not explicitly set in the schedule, the scan name will be generated prior to the scan launching. Names must be unique.
     *
     * @param string $scanName
     *
     * @return self
     */
    public function setScanName(string $scanName) : self
    {
        $this->scanName = $scanName;
        return $this;
    }
    /**
     * The identifier of the scan template to be used for this scan schedule. If not set, the site's assigned scan template will be used.
     *
     * @return string
     */
    public function getScanTemplateId() : string
    {
        return $this->scanTemplateId;
    }
    /**
     * The identifier of the scan template to be used for this scan schedule. If not set, the site's assigned scan template will be used.
     *
     * @param string $scanTemplateId
     *
     * @return self
     */
    public function setScanTemplateId(string $scanTemplateId) : self
    {
        $this->scanTemplateId = $scanTemplateId;
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