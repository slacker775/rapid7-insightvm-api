<?php

namespace Rapid7\InsightVM\Api\Model;

class RiskSettings
{
    /**
     * Whether risk is adjusted using criticality tags.
     *
     * @var bool
     */
    protected $adjustWithCriticality;
    /**
     * 
     *
     * @var RiskModifierSettings
     */
    protected $criticalityModifiers;
    /**
     * The risk model used to compute risk.
     *
     * @var string
     */
    protected $model;
    /**
     * Whether risk is adjusted using criticality tags.
     *
     * @return bool
     */
    public function getAdjustWithCriticality() : bool
    {
        return $this->adjustWithCriticality;
    }
    /**
     * Whether risk is adjusted using criticality tags.
     *
     * @param bool $adjustWithCriticality
     *
     * @return self
     */
    public function setAdjustWithCriticality(bool $adjustWithCriticality) : self
    {
        $this->adjustWithCriticality = $adjustWithCriticality;
        return $this;
    }
    /**
     * 
     *
     * @return RiskModifierSettings
     */
    public function getCriticalityModifiers() : RiskModifierSettings
    {
        return $this->criticalityModifiers;
    }
    /**
     * 
     *
     * @param RiskModifierSettings $criticalityModifiers
     *
     * @return self
     */
    public function setCriticalityModifiers(RiskModifierSettings $criticalityModifiers) : self
    {
        $this->criticalityModifiers = $criticalityModifiers;
        return $this;
    }
    /**
     * The risk model used to compute risk.
     *
     * @return string
     */
    public function getModel() : string
    {
        return $this->model;
    }
    /**
     * The risk model used to compute risk.
     *
     * @param string $model
     *
     * @return self
     */
    public function setModel(string $model) : self
    {
        $this->model = $model;
        return $this;
    }
}