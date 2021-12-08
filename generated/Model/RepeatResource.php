<?php

namespace Rapid7\InsightVM\Api\Model;

class RepeatResource
{
    /**
     * The day of the week the scheduled task should repeat. This property only applies to schedules with a `every` value of `"day-of-month"`.
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
    * The frequency schedule repeats. Each value represents a different unit of time and is used in conjunction with the property `interval`. For example, a schedule can repeat hourly, daily, monthly, etc. The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | hour | Specifies the schedule repeats in hourly increments. |
    | day | Specifies the schedule repeats in daily increments. |
    | week | Specifies the schedule repeats in weekly increments. |
    | date-of-month | Specifies the schedule repeats nth day of the `interval` month. Requires the property `dateOfMonth` to be specified. For example, if `dateOfMonth` is `17` and the `interval` is `2`, then the schedule will repeat every 2 months on the 17th day of the month. |
    | day-of-month | Specifies the schedule repeats on a monthly interval but instead of a specific date being specified, the day of the week and week of the month are specified. Requires the properties `dayOfWeek` and `weekOfMonth` to be specified. For example, if `dayOfWeek` is `"friday"`, `weekOfMonth` is `3`, and the `interval` is `4`, then the schedule will repeat every 4 months on the 3rd Friday of the month. |
    
    *
    * @var string
    */
    protected $every;
    /**
     * The interval time the schedule should repeat. The is depends on the value set in `every`. For example, if the value in property `every` is set to `"day"` and `interval` is set to `2`, then the schedule will repeat every 2 days.
     *
     * @var int
     */
    protected $interval;
    /**
     * ${schedule.repeat.last.day.of.month}
     *
     * @var bool
     */
    protected $lastDayOfMonth;
    /**
     * The week of the month the scheduled task should repeat. For This property only applies to schedules with a `every` value of `"day-of-month"`. Each week of the month is counted in 7-day increments. For example, week 1 consists of days 1-7 of the month while week 2 consists of days 8-14 of the month and so forth.
     *
     * @var int
     */
    protected $weekOfMonth;
    /**
     * The day of the week the scheduled task should repeat. This property only applies to schedules with a `every` value of `"day-of-month"`.
     *
     * @return string
     */
    public function getDayOfWeek() : string
    {
        return $this->dayOfWeek;
    }
    /**
     * The day of the week the scheduled task should repeat. This property only applies to schedules with a `every` value of `"day-of-month"`.
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek) : self
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
    * The frequency schedule repeats. Each value represents a different unit of time and is used in conjunction with the property `interval`. For example, a schedule can repeat hourly, daily, monthly, etc. The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | hour | Specifies the schedule repeats in hourly increments. |
    | day | Specifies the schedule repeats in daily increments. |
    | week | Specifies the schedule repeats in weekly increments. |
    | date-of-month | Specifies the schedule repeats nth day of the `interval` month. Requires the property `dateOfMonth` to be specified. For example, if `dateOfMonth` is `17` and the `interval` is `2`, then the schedule will repeat every 2 months on the 17th day of the month. |
    | day-of-month | Specifies the schedule repeats on a monthly interval but instead of a specific date being specified, the day of the week and week of the month are specified. Requires the properties `dayOfWeek` and `weekOfMonth` to be specified. For example, if `dayOfWeek` is `"friday"`, `weekOfMonth` is `3`, and the `interval` is `4`, then the schedule will repeat every 4 months on the 3rd Friday of the month. |
    
    *
    * @return string
    */
    public function getEvery() : string
    {
        return $this->every;
    }
    /**
    * The frequency schedule repeats. Each value represents a different unit of time and is used in conjunction with the property `interval`. For example, a schedule can repeat hourly, daily, monthly, etc. The following table describes each supported value:
    | Value | Description |
    | ---------- | ---------------- |
    | hour | Specifies the schedule repeats in hourly increments. |
    | day | Specifies the schedule repeats in daily increments. |
    | week | Specifies the schedule repeats in weekly increments. |
    | date-of-month | Specifies the schedule repeats nth day of the `interval` month. Requires the property `dateOfMonth` to be specified. For example, if `dateOfMonth` is `17` and the `interval` is `2`, then the schedule will repeat every 2 months on the 17th day of the month. |
    | day-of-month | Specifies the schedule repeats on a monthly interval but instead of a specific date being specified, the day of the week and week of the month are specified. Requires the properties `dayOfWeek` and `weekOfMonth` to be specified. For example, if `dayOfWeek` is `"friday"`, `weekOfMonth` is `3`, and the `interval` is `4`, then the schedule will repeat every 4 months on the 3rd Friday of the month. |
    
    *
    * @param string $every
    *
    * @return self
    */
    public function setEvery(string $every) : self
    {
        $this->every = $every;
        return $this;
    }
    /**
     * The interval time the schedule should repeat. The is depends on the value set in `every`. For example, if the value in property `every` is set to `"day"` and `interval` is set to `2`, then the schedule will repeat every 2 days.
     *
     * @return int
     */
    public function getInterval() : int
    {
        return $this->interval;
    }
    /**
     * The interval time the schedule should repeat. The is depends on the value set in `every`. For example, if the value in property `every` is set to `"day"` and `interval` is set to `2`, then the schedule will repeat every 2 days.
     *
     * @param int $interval
     *
     * @return self
     */
    public function setInterval(int $interval) : self
    {
        $this->interval = $interval;
        return $this;
    }
    /**
     * ${schedule.repeat.last.day.of.month}
     *
     * @return bool
     */
    public function getLastDayOfMonth() : bool
    {
        return $this->lastDayOfMonth;
    }
    /**
     * ${schedule.repeat.last.day.of.month}
     *
     * @param bool $lastDayOfMonth
     *
     * @return self
     */
    public function setLastDayOfMonth(bool $lastDayOfMonth) : self
    {
        $this->lastDayOfMonth = $lastDayOfMonth;
        return $this;
    }
    /**
     * The week of the month the scheduled task should repeat. For This property only applies to schedules with a `every` value of `"day-of-month"`. Each week of the month is counted in 7-day increments. For example, week 1 consists of days 1-7 of the month while week 2 consists of days 8-14 of the month and so forth.
     *
     * @return int
     */
    public function getWeekOfMonth() : int
    {
        return $this->weekOfMonth;
    }
    /**
     * The week of the month the scheduled task should repeat. For This property only applies to schedules with a `every` value of `"day-of-month"`. Each week of the month is counted in 7-day increments. For example, week 1 consists of days 1-7 of the month while week 2 consists of days 8-14 of the month and so forth.
     *
     * @param int $weekOfMonth
     *
     * @return self
     */
    public function setWeekOfMonth(int $weekOfMonth) : self
    {
        $this->weekOfMonth = $weekOfMonth;
        return $this;
    }
}