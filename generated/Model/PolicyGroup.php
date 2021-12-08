<?php

namespace Rapid7\InsightVM\Api\Model;

class PolicyGroup
{
    /**
     * 
     *
     * @var AssetPolicyAssessment
     */
    protected $assets;
    /**
     * 
     *
     * @var PolicyBenchmark
     */
    protected $benchmark;
    /**
     * A description of the policy group.
     *
     * @var string
     */
    protected $description;
    /**
     * The textual representation of the policy group identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The name of the policy group.
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
     * The textual representation of the policy group scope. Policy groups that are automatically available have `"Built-in"` scope, whereas policy groups created by users have scope as `"Custom"`.
     *
     * @var string
     */
    protected $scope;
    /**
     * The overall compliance status of the policy group.
     *
     * @var string
     */
    protected $status;
    /**
     * The identifier of the policy group.
     *
     * @var int
     */
    protected $surrogateId;
    /**
     * The title of the policy group as visible to the user.
     *
     * @var string
     */
    protected $title;
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
     * 
     *
     * @return PolicyBenchmark
     */
    public function getBenchmark() : PolicyBenchmark
    {
        return $this->benchmark;
    }
    /**
     * 
     *
     * @param PolicyBenchmark $benchmark
     *
     * @return self
     */
    public function setBenchmark(PolicyBenchmark $benchmark) : self
    {
        $this->benchmark = $benchmark;
        return $this;
    }
    /**
     * A description of the policy group.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A description of the policy group.
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
     * The textual representation of the policy group identifier.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The textual representation of the policy group identifier.
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
     * The name of the policy group.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the policy group.
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
     * The textual representation of the policy group scope. Policy groups that are automatically available have `"Built-in"` scope, whereas policy groups created by users have scope as `"Custom"`.
     *
     * @return string
     */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
     * The textual representation of the policy group scope. Policy groups that are automatically available have `"Built-in"` scope, whereas policy groups created by users have scope as `"Custom"`.
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
     * The overall compliance status of the policy group.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The overall compliance status of the policy group.
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
     * The identifier of the policy group.
     *
     * @return int
     */
    public function getSurrogateId() : int
    {
        return $this->surrogateId;
    }
    /**
     * The identifier of the policy group.
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
     * The title of the policy group as visible to the user.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the policy group as visible to the user.
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
}