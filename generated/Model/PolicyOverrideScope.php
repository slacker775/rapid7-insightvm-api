<?php

namespace Rapid7\InsightVM\Api\Model;

class PolicyOverrideScope
{
    /**
     * The identifier of the asset whose compliance results are to be overridden. Property is required if the property `scope` is set to either `"specific-asset"` or `"specific-asset-until-next-scan"`.
     *
     * @var int
     */
    protected $asset;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The new policy rule result after the override is applied.
     *
     * @var string
     */
    protected $newResult;
    /**
     * The original policy rule result before the override was applied. This property only applies to overrides with a scope of either `"specific-asset"` or `"specific-asset-until-next-scan"`.
     *
     * @var string
     */
    protected $originalResult;
    /**
     * The identifier of the policy rule whose compliance results are to be overridden.
     *
     * @var int
     */
    protected $rule;
    /**
    * The scope of assets affected by the policy override. Can be one of the following values:
    | Value                              | Description                                                                                                                                                 |
    | ---------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | `"all-assets"`                     | Overrides the compliance result of all assets evaluated with the specified policy rule.                                                                     |
    | `"specific-asset"`                 | Overrides the compliance result of a single asset evaluated with the specified policy rule.                                                                 |
    | `"specific-asset-until-next-scan"` | Overrides the compliance result of a single asset evaluated with the specified policy rule until the next time asset is evaluated against that policy rule. |
    
    *
    * @var string
    */
    protected $type;
    /**
     * The identifier of the asset whose compliance results are to be overridden. Property is required if the property `scope` is set to either `"specific-asset"` or `"specific-asset-until-next-scan"`.
     *
     * @return int
     */
    public function getAsset() : int
    {
        return $this->asset;
    }
    /**
     * The identifier of the asset whose compliance results are to be overridden. Property is required if the property `scope` is set to either `"specific-asset"` or `"specific-asset-until-next-scan"`.
     *
     * @param int $asset
     *
     * @return self
     */
    public function setAsset(int $asset) : self
    {
        $this->asset = $asset;
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
     * The new policy rule result after the override is applied.
     *
     * @return string
     */
    public function getNewResult() : string
    {
        return $this->newResult;
    }
    /**
     * The new policy rule result after the override is applied.
     *
     * @param string $newResult
     *
     * @return self
     */
    public function setNewResult(string $newResult) : self
    {
        $this->newResult = $newResult;
        return $this;
    }
    /**
     * The original policy rule result before the override was applied. This property only applies to overrides with a scope of either `"specific-asset"` or `"specific-asset-until-next-scan"`.
     *
     * @return string
     */
    public function getOriginalResult() : string
    {
        return $this->originalResult;
    }
    /**
     * The original policy rule result before the override was applied. This property only applies to overrides with a scope of either `"specific-asset"` or `"specific-asset-until-next-scan"`.
     *
     * @param string $originalResult
     *
     * @return self
     */
    public function setOriginalResult(string $originalResult) : self
    {
        $this->originalResult = $originalResult;
        return $this;
    }
    /**
     * The identifier of the policy rule whose compliance results are to be overridden.
     *
     * @return int
     */
    public function getRule() : int
    {
        return $this->rule;
    }
    /**
     * The identifier of the policy rule whose compliance results are to be overridden.
     *
     * @param int $rule
     *
     * @return self
     */
    public function setRule(int $rule) : self
    {
        $this->rule = $rule;
        return $this;
    }
    /**
    * The scope of assets affected by the policy override. Can be one of the following values:
    | Value                              | Description                                                                                                                                                 |
    | ---------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | `"all-assets"`                     | Overrides the compliance result of all assets evaluated with the specified policy rule.                                                                     |
    | `"specific-asset"`                 | Overrides the compliance result of a single asset evaluated with the specified policy rule.                                                                 |
    | `"specific-asset-until-next-scan"` | Overrides the compliance result of a single asset evaluated with the specified policy rule until the next time asset is evaluated against that policy rule. |
    
    *
    * @return string
    */
    public function getType() : string
    {
        return $this->type;
    }
    /**
    * The scope of assets affected by the policy override. Can be one of the following values:
    | Value                              | Description                                                                                                                                                 |
    | ---------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | `"all-assets"`                     | Overrides the compliance result of all assets evaluated with the specified policy rule.                                                                     |
    | `"specific-asset"`                 | Overrides the compliance result of a single asset evaluated with the specified policy rule.                                                                 |
    | `"specific-asset-until-next-scan"` | Overrides the compliance result of a single asset evaluated with the specified policy rule until the next time asset is evaluated against that policy rule. |
    
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}