<?php

namespace Rapid7\InsightVM\Api\Model;

class ScanTemplateWebSpiderPaths
{
    /**
     * Paths to bootstrap spidering with.
     *
     * @var string
     */
    protected $boostrap;
    /**
     * Paths excluded from spidering.
     *
     * @var string
     */
    protected $excluded;
    /**
     * ${scan.template.web.spider.paths.robot.directives.description}
     *
     * @var bool
     */
    protected $honorRobotDirectives;
    /**
     * Paths to bootstrap spidering with.
     *
     * @return string
     */
    public function getBoostrap() : string
    {
        return $this->boostrap;
    }
    /**
     * Paths to bootstrap spidering with.
     *
     * @param string $boostrap
     *
     * @return self
     */
    public function setBoostrap(string $boostrap) : self
    {
        $this->boostrap = $boostrap;
        return $this;
    }
    /**
     * Paths excluded from spidering.
     *
     * @return string
     */
    public function getExcluded() : string
    {
        return $this->excluded;
    }
    /**
     * Paths excluded from spidering.
     *
     * @param string $excluded
     *
     * @return self
     */
    public function setExcluded(string $excluded) : self
    {
        $this->excluded = $excluded;
        return $this;
    }
    /**
     * ${scan.template.web.spider.paths.robot.directives.description}
     *
     * @return bool
     */
    public function getHonorRobotDirectives() : bool
    {
        return $this->honorRobotDirectives;
    }
    /**
     * ${scan.template.web.spider.paths.robot.directives.description}
     *
     * @param bool $honorRobotDirectives
     *
     * @return self
     */
    public function setHonorRobotDirectives(bool $honorRobotDirectives) : self
    {
        $this->honorRobotDirectives = $honorRobotDirectives;
        return $this;
    }
}