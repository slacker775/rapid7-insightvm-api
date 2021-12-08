<?php

namespace Rapid7\InsightVM\Api\Model;

class VersionInfo
{
    /**
     * The build number.
     *
     * @var string
     */
    protected $build;
    /**
     * The changeset of the source build.
     *
     * @var string
     */
    protected $changeset;
    /**
     * The platform of the build.
     *
     * @var string
     */
    protected $platform;
    /**
     * The semantic version number of the installation.
     *
     * @var string
     */
    protected $semantic;
    /**
     * 
     *
     * @var UpdateInfo
     */
    protected $update;
    /**
     * The build number.
     *
     * @return string
     */
    public function getBuild() : string
    {
        return $this->build;
    }
    /**
     * The build number.
     *
     * @param string $build
     *
     * @return self
     */
    public function setBuild(string $build) : self
    {
        $this->build = $build;
        return $this;
    }
    /**
     * The changeset of the source build.
     *
     * @return string
     */
    public function getChangeset() : string
    {
        return $this->changeset;
    }
    /**
     * The changeset of the source build.
     *
     * @param string $changeset
     *
     * @return self
     */
    public function setChangeset(string $changeset) : self
    {
        $this->changeset = $changeset;
        return $this;
    }
    /**
     * The platform of the build.
     *
     * @return string
     */
    public function getPlatform() : string
    {
        return $this->platform;
    }
    /**
     * The platform of the build.
     *
     * @param string $platform
     *
     * @return self
     */
    public function setPlatform(string $platform) : self
    {
        $this->platform = $platform;
        return $this;
    }
    /**
     * The semantic version number of the installation.
     *
     * @return string
     */
    public function getSemantic() : string
    {
        return $this->semantic;
    }
    /**
     * The semantic version number of the installation.
     *
     * @param string $semantic
     *
     * @return self
     */
    public function setSemantic(string $semantic) : self
    {
        $this->semantic = $semantic;
        return $this;
    }
    /**
     * 
     *
     * @return UpdateInfo
     */
    public function getUpdate() : UpdateInfo
    {
        return $this->update;
    }
    /**
     * 
     *
     * @param UpdateInfo $update
     *
     * @return self
     */
    public function setUpdate(UpdateInfo $update) : self
    {
        $this->update = $update;
        return $this;
    }
}