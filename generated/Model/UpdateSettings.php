<?php

namespace Rapid7\InsightVM\Api\Model;

class UpdateSettings
{
    /**
     * Whether automatic content updates are enabled.
     *
     * @var bool
     */
    protected $contentAutoUpdate;
    /**
     * Whether updates are enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Whether automatic product updates are enabled.
     *
     * @var bool
     */
    protected $productAutoUpdate;
    /**
     * Whether automatic content updates are enabled.
     *
     * @return bool
     */
    public function getContentAutoUpdate() : bool
    {
        return $this->contentAutoUpdate;
    }
    /**
     * Whether automatic content updates are enabled.
     *
     * @param bool $contentAutoUpdate
     *
     * @return self
     */
    public function setContentAutoUpdate(bool $contentAutoUpdate) : self
    {
        $this->contentAutoUpdate = $contentAutoUpdate;
        return $this;
    }
    /**
     * Whether updates are enabled.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Whether updates are enabled.
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
     * Whether automatic product updates are enabled.
     *
     * @return bool
     */
    public function getProductAutoUpdate() : bool
    {
        return $this->productAutoUpdate;
    }
    /**
     * Whether automatic product updates are enabled.
     *
     * @param bool $productAutoUpdate
     *
     * @return self
     */
    public function setProductAutoUpdate(bool $productAutoUpdate) : self
    {
        $this->productAutoUpdate = $productAutoUpdate;
        return $this;
    }
}