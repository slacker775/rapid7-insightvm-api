<?php

namespace Rapid7\InsightVM\Api\Model;

class PolicyOverride
{
    /**
     * The date the policy override is set to expire. Date is represented in ISO 8601 format.
     *
     * @var string
     */
    protected $expires;
    /**
     * The identifier of the policy override.
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
     * 
     *
     * @var PolicyOverrideReviewer
     */
    protected $review;
    /**
     * 
     *
     * @var PolicyOverrideScope
     */
    protected $scope;
    /**
    * The state of the policy override. Can be one of the following values:
    | Value            | Description                                                                         | Affects Compliance Results |
    | ---------------- | ----------------------------------------------------------------------------------- |:--------------------------:|
    | `"deleted"`      | The policy override has been deleted.                                               |                            |
    | `"expired"`      | The policy override had an expiration date and it has expired.                      |                            |
    | `"approved"`     | The policy override was submitted and approved.                                     | &check;                    |
    | `"rejected"`     | The policy override was rejected by the reviewer.                                   |                            |
    | `"under-review"` | The policy override was submitted but not yet approved or rejected by the reviewer. |                            |
    
    *
    * @var string
    */
    protected $state;
    /**
     * 
     *
     * @var PolicyOverrideSubmitter
     */
    protected $submit;
    /**
     * The date the policy override is set to expire. Date is represented in ISO 8601 format.
     *
     * @return string
     */
    public function getExpires() : string
    {
        return $this->expires;
    }
    /**
     * The date the policy override is set to expire. Date is represented in ISO 8601 format.
     *
     * @param string $expires
     *
     * @return self
     */
    public function setExpires(string $expires) : self
    {
        $this->expires = $expires;
        return $this;
    }
    /**
     * The identifier of the policy override.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the policy override.
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
     * 
     *
     * @return PolicyOverrideReviewer
     */
    public function getReview() : PolicyOverrideReviewer
    {
        return $this->review;
    }
    /**
     * 
     *
     * @param PolicyOverrideReviewer $review
     *
     * @return self
     */
    public function setReview(PolicyOverrideReviewer $review) : self
    {
        $this->review = $review;
        return $this;
    }
    /**
     * 
     *
     * @return PolicyOverrideScope
     */
    public function getScope() : PolicyOverrideScope
    {
        return $this->scope;
    }
    /**
     * 
     *
     * @param PolicyOverrideScope $scope
     *
     * @return self
     */
    public function setScope(PolicyOverrideScope $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
    * The state of the policy override. Can be one of the following values:
    | Value            | Description                                                                         | Affects Compliance Results |
    | ---------------- | ----------------------------------------------------------------------------------- |:--------------------------:|
    | `"deleted"`      | The policy override has been deleted.                                               |                            |
    | `"expired"`      | The policy override had an expiration date and it has expired.                      |                            |
    | `"approved"`     | The policy override was submitted and approved.                                     | &check;                    |
    | `"rejected"`     | The policy override was rejected by the reviewer.                                   |                            |
    | `"under-review"` | The policy override was submitted but not yet approved or rejected by the reviewer. |                            |
    
    *
    * @return string
    */
    public function getState() : string
    {
        return $this->state;
    }
    /**
    * The state of the policy override. Can be one of the following values:
    | Value            | Description                                                                         | Affects Compliance Results |
    | ---------------- | ----------------------------------------------------------------------------------- |:--------------------------:|
    | `"deleted"`      | The policy override has been deleted.                                               |                            |
    | `"expired"`      | The policy override had an expiration date and it has expired.                      |                            |
    | `"approved"`     | The policy override was submitted and approved.                                     | &check;                    |
    | `"rejected"`     | The policy override was rejected by the reviewer.                                   |                            |
    | `"under-review"` | The policy override was submitted but not yet approved or rejected by the reviewer. |                            |
    
    *
    * @param string $state
    *
    * @return self
    */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return PolicyOverrideSubmitter
     */
    public function getSubmit() : PolicyOverrideSubmitter
    {
        return $this->submit;
    }
    /**
     * 
     *
     * @param PolicyOverrideSubmitter $submit
     *
     * @return self
     */
    public function setSubmit(PolicyOverrideSubmitter $submit) : self
    {
        $this->submit = $submit;
        return $this;
    }
}