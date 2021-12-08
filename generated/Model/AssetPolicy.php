<?php

namespace Rapid7\InsightVM\Api\Model;

class AssetPolicy
{
    /**
     * The name of the policy's benchmark.
     *
     * @var string
     */
    protected $benchmarkName;
    /**
     * The version number of the benchmark that includes the policy.
     *
     * @var string
     */
    protected $benchmarkVersion;
    /**
     * A grouping of similar benchmarks based on their source, purpose, or other criteria. Examples include FDCC, USGCB, and CIS.
     *
     * @var string
     */
    protected $category;
    /**
     * The description of the policy.
     *
     * @var string
     */
    protected $description;
    /**
     * The number of assets that are not compliant with the policy. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @var int
     */
    protected $failedAssetsCount;
    /**
     * The number of rules in the policy that are not compliant with any scanned assets. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @var int
     */
    protected $failedRulesCount;
    /**
     * The textual representation of the policy identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * A flag indicating whether the policy is custom.
     *
     * @var bool
     */
    protected $isCustom;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The number of assets that were attempted to be scanned, but are not applicable to the policy. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @var int
     */
    protected $notApplicableAssetsCount;
    /**
     * The number of rules in the policy that are not applicable with any scanned assets. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @var int
     */
    protected $notApplicableRulesCount;
    /**
     * The number of assets that are compliant with the policy. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @var int
     */
    protected $passedAssetsCount;
    /**
     * The number of rules in the policy that are compliant with all scanned assets. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @var int
     */
    protected $passedRulesCount;
    /**
     * The name of the policy.
     *
     * @var string
     */
    protected $policyName;
    /**
     * The ratio of PASS results for the rules to the total number of rules in each policy.
     *
     * @var float
     */
    protected $ruleCompliance;
    /**
     * The change in rule compliance between the last two scans of all assets. The list of scanned policies is based on the user's list of accessible assets.
     *
     * @var float
     */
    protected $ruleComplianceDelta;
    /**
     * The textual representation of the policy scope. Policies that are automatically available have `"Built-in"` scope, whereas policies created by users have scope as `"Custom"`.
     *
     * @var string
     */
    protected $scope;
    /**
     * The overall compliance status of the policy.
     *
     * @var string
     */
    protected $status;
    /**
     * The identifier of the policy
     *
     * @var int
     */
    protected $surrogateId;
    /**
     * The title of the policy as visible to the user.
     *
     * @var string
     */
    protected $title;
    /**
     * The number of rules defined in the policy with a role of "unscored". These rules will not affect rule compliance scoring for the policy.
     *
     * @var int
     */
    protected $unscoredRules;
    /**
     * The name of the policy's benchmark.
     *
     * @return string
     */
    public function getBenchmarkName() : string
    {
        return $this->benchmarkName;
    }
    /**
     * The name of the policy's benchmark.
     *
     * @param string $benchmarkName
     *
     * @return self
     */
    public function setBenchmarkName(string $benchmarkName) : self
    {
        $this->benchmarkName = $benchmarkName;
        return $this;
    }
    /**
     * The version number of the benchmark that includes the policy.
     *
     * @return string
     */
    public function getBenchmarkVersion() : string
    {
        return $this->benchmarkVersion;
    }
    /**
     * The version number of the benchmark that includes the policy.
     *
     * @param string $benchmarkVersion
     *
     * @return self
     */
    public function setBenchmarkVersion(string $benchmarkVersion) : self
    {
        $this->benchmarkVersion = $benchmarkVersion;
        return $this;
    }
    /**
     * A grouping of similar benchmarks based on their source, purpose, or other criteria. Examples include FDCC, USGCB, and CIS.
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * A grouping of similar benchmarks based on their source, purpose, or other criteria. Examples include FDCC, USGCB, and CIS.
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * The description of the policy.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the policy.
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
     * The number of assets that are not compliant with the policy. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @return int
     */
    public function getFailedAssetsCount() : int
    {
        return $this->failedAssetsCount;
    }
    /**
     * The number of assets that are not compliant with the policy. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @param int $failedAssetsCount
     *
     * @return self
     */
    public function setFailedAssetsCount(int $failedAssetsCount) : self
    {
        $this->failedAssetsCount = $failedAssetsCount;
        return $this;
    }
    /**
     * The number of rules in the policy that are not compliant with any scanned assets. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @return int
     */
    public function getFailedRulesCount() : int
    {
        return $this->failedRulesCount;
    }
    /**
     * The number of rules in the policy that are not compliant with any scanned assets. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @param int $failedRulesCount
     *
     * @return self
     */
    public function setFailedRulesCount(int $failedRulesCount) : self
    {
        $this->failedRulesCount = $failedRulesCount;
        return $this;
    }
    /**
     * The textual representation of the policy identifier.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The textual representation of the policy identifier.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * A flag indicating whether the policy is custom.
     *
     * @return bool
     */
    public function getIsCustom() : bool
    {
        return $this->isCustom;
    }
    /**
     * A flag indicating whether the policy is custom.
     *
     * @param bool $isCustom
     *
     * @return self
     */
    public function setIsCustom(bool $isCustom) : self
    {
        $this->isCustom = $isCustom;
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
     * The number of assets that were attempted to be scanned, but are not applicable to the policy. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @return int
     */
    public function getNotApplicableAssetsCount() : int
    {
        return $this->notApplicableAssetsCount;
    }
    /**
     * The number of assets that were attempted to be scanned, but are not applicable to the policy. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @param int $notApplicableAssetsCount
     *
     * @return self
     */
    public function setNotApplicableAssetsCount(int $notApplicableAssetsCount) : self
    {
        $this->notApplicableAssetsCount = $notApplicableAssetsCount;
        return $this;
    }
    /**
     * The number of rules in the policy that are not applicable with any scanned assets. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @return int
     */
    public function getNotApplicableRulesCount() : int
    {
        return $this->notApplicableRulesCount;
    }
    /**
     * The number of rules in the policy that are not applicable with any scanned assets. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @param int $notApplicableRulesCount
     *
     * @return self
     */
    public function setNotApplicableRulesCount(int $notApplicableRulesCount) : self
    {
        $this->notApplicableRulesCount = $notApplicableRulesCount;
        return $this;
    }
    /**
     * The number of assets that are compliant with the policy. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @return int
     */
    public function getPassedAssetsCount() : int
    {
        return $this->passedAssetsCount;
    }
    /**
     * The number of assets that are compliant with the policy. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @param int $passedAssetsCount
     *
     * @return self
     */
    public function setPassedAssetsCount(int $passedAssetsCount) : self
    {
        $this->passedAssetsCount = $passedAssetsCount;
        return $this;
    }
    /**
     * The number of rules in the policy that are compliant with all scanned assets. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @return int
     */
    public function getPassedRulesCount() : int
    {
        return $this->passedRulesCount;
    }
    /**
     * The number of rules in the policy that are compliant with all scanned assets. The assets considered in the calculation are based on the user's list of accessible assets.
     *
     * @param int $passedRulesCount
     *
     * @return self
     */
    public function setPassedRulesCount(int $passedRulesCount) : self
    {
        $this->passedRulesCount = $passedRulesCount;
        return $this;
    }
    /**
     * The name of the policy.
     *
     * @return string
     */
    public function getPolicyName() : string
    {
        return $this->policyName;
    }
    /**
     * The name of the policy.
     *
     * @param string $policyName
     *
     * @return self
     */
    public function setPolicyName(string $policyName) : self
    {
        $this->policyName = $policyName;
        return $this;
    }
    /**
     * The ratio of PASS results for the rules to the total number of rules in each policy.
     *
     * @return float
     */
    public function getRuleCompliance() : float
    {
        return $this->ruleCompliance;
    }
    /**
     * The ratio of PASS results for the rules to the total number of rules in each policy.
     *
     * @param float $ruleCompliance
     *
     * @return self
     */
    public function setRuleCompliance(float $ruleCompliance) : self
    {
        $this->ruleCompliance = $ruleCompliance;
        return $this;
    }
    /**
     * The change in rule compliance between the last two scans of all assets. The list of scanned policies is based on the user's list of accessible assets.
     *
     * @return float
     */
    public function getRuleComplianceDelta() : float
    {
        return $this->ruleComplianceDelta;
    }
    /**
     * The change in rule compliance between the last two scans of all assets. The list of scanned policies is based on the user's list of accessible assets.
     *
     * @param float $ruleComplianceDelta
     *
     * @return self
     */
    public function setRuleComplianceDelta(float $ruleComplianceDelta) : self
    {
        $this->ruleComplianceDelta = $ruleComplianceDelta;
        return $this;
    }
    /**
     * The textual representation of the policy scope. Policies that are automatically available have `"Built-in"` scope, whereas policies created by users have scope as `"Custom"`.
     *
     * @return string
     */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
     * The textual representation of the policy scope. Policies that are automatically available have `"Built-in"` scope, whereas policies created by users have scope as `"Custom"`.
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
     * The overall compliance status of the policy.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The overall compliance status of the policy.
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
     * The identifier of the policy
     *
     * @return int
     */
    public function getSurrogateId() : int
    {
        return $this->surrogateId;
    }
    /**
     * The identifier of the policy
     *
     * @param int $surrogateId
     *
     * @return self
     */
    public function setSurrogateId(int $surrogateId) : self
    {
        $this->surrogateId = $surrogateId;
        return $this;
    }
    /**
     * The title of the policy as visible to the user.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the policy as visible to the user.
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
     * The number of rules defined in the policy with a role of "unscored". These rules will not affect rule compliance scoring for the policy.
     *
     * @return int
     */
    public function getUnscoredRules() : int
    {
        return $this->unscoredRules;
    }
    /**
     * The number of rules defined in the policy with a role of "unscored". These rules will not affect rule compliance scoring for the policy.
     *
     * @param int $unscoredRules
     *
     * @return self
     */
    public function setUnscoredRules(int $unscoredRules) : self
    {
        $this->unscoredRules = $unscoredRules;
        return $this;
    }
}