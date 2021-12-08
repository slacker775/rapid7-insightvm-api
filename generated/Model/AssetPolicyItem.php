<?php

namespace Rapid7\InsightVM\Api\Model;

class AssetPolicyItem
{
    /**
     * 
     *
     * @var AssetPolicyAssessment
     */
    protected $assets;
    /**
     * A description of the policy rule or group.
     *
     * @var string
     */
    protected $description;
    /**
     * A flag indicating whether the policy rule has an active override applied to it. This field only applies to resources representing policy rules. 
     *
     * @var bool
     */
    protected $hasOverride;
    /**
     * The identifier of the policy rule or group.
     *
     * @var int
     */
    protected $id;
    /**
     * A flag indicating whether the policy rule has a role of `"unscored"`. This field only applies to resources representing policy rules.
     *
     * @var bool
     */
    protected $isUnscored;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The name of the policy rule or group.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var PolicyMetadataResource
     */
    protected $policy;
    /**
     * 
     *
     * @var PolicyRuleAssessmentResource
     */
    protected $rules;
    /**
     * The textual representation of the policy rule/group scope. Policy rules or groups that are automatically available have `"Built-in"` scope, whereas policy rules or groups created by users have scope as `"Custom"`.
     *
     * @var string
     */
    protected $scope;
    /**
     * The asset's rule compliance status.
     *
     * @var string
     */
    protected $status;
    /**
     * The title of the policy rule, or group, as visible to the user.
     *
     * @var string
     */
    protected $title;
    /**
     * Indicates whether the resource represents either a policy rule or group.
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return AssetPolicyAssessment
     */
    public function getAssets() : AssetPolicyAssessment
    {
        return $this->assets;
    }
    /**
     * 
     *
     * @param AssetPolicyAssessment $assets
     *
     * @return self
     */
    public function setAssets(AssetPolicyAssessment $assets) : self
    {
        $this->assets = $assets;
        return $this;
    }
    /**
     * A description of the policy rule or group.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A description of the policy rule or group.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * A flag indicating whether the policy rule has an active override applied to it. This field only applies to resources representing policy rules. 
     *
     * @return bool
     */
    public function getHasOverride() : bool
    {
        return $this->hasOverride;
    }
    /**
     * A flag indicating whether the policy rule has an active override applied to it. This field only applies to resources representing policy rules. 
     *
     * @param bool $hasOverride
     *
     * @return self
     */
    public function setHasOverride(bool $hasOverride) : self
    {
        $this->hasOverride = $hasOverride;
        return $this;
    }
    /**
     * The identifier of the policy rule or group.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the policy rule or group.
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
     * A flag indicating whether the policy rule has a role of `"unscored"`. This field only applies to resources representing policy rules.
     *
     * @return bool
     */
    public function getIsUnscored() : bool
    {
        return $this->isUnscored;
    }
    /**
     * A flag indicating whether the policy rule has a role of `"unscored"`. This field only applies to resources representing policy rules.
     *
     * @param bool $isUnscored
     *
     * @return self
     */
    public function setIsUnscored(bool $isUnscored) : self
    {
        $this->isUnscored = $isUnscored;
        return $this;
    }
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @return Link[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * Hypermedia links to corresponding or related resources.
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
     * The name of the policy rule or group.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the policy rule or group.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return PolicyMetadataResource
     */
    public function getPolicy() : PolicyMetadataResource
    {
        return $this->policy;
    }
    /**
     * 
     *
     * @param PolicyMetadataResource $policy
     *
     * @return self
     */
    public function setPolicy(PolicyMetadataResource $policy) : self
    {
        $this->policy = $policy;
        return $this;
    }
    /**
     * 
     *
     * @return PolicyRuleAssessmentResource
     */
    public function getRules() : PolicyRuleAssessmentResource
    {
        return $this->rules;
    }
    /**
     * 
     *
     * @param PolicyRuleAssessmentResource $rules
     *
     * @return self
     */
    public function setRules(PolicyRuleAssessmentResource $rules) : self
    {
        $this->rules = $rules;
        return $this;
    }
    /**
     * The textual representation of the policy rule/group scope. Policy rules or groups that are automatically available have `"Built-in"` scope, whereas policy rules or groups created by users have scope as `"Custom"`.
     *
     * @return string
     */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
     * The textual representation of the policy rule/group scope. Policy rules or groups that are automatically available have `"Built-in"` scope, whereas policy rules or groups created by users have scope as `"Custom"`.
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * The asset's rule compliance status.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The asset's rule compliance status.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The title of the policy rule, or group, as visible to the user.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the policy rule, or group, as visible to the user.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Indicates whether the resource represents either a policy rule or group.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Indicates whether the resource represents either a policy rule or group.
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