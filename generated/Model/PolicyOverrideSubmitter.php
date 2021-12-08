<?php

namespace Rapid7\InsightVM\Api\Model;

class PolicyOverrideSubmitter
{
    /**
     * A comment from the submitter as to why the policy override was submitted. Cannot exceed 1024 characters.
     *
     * @var string
     */
    protected $comment;
    /**
     * The date the policy override was submitted.
     *
     * @var string
     */
    protected $date;
    /**
     * 
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The login name of the user that submitted the policy override.
     *
     * @var string
     */
    protected $name;
    /**
     * The identifier of the user that submitted the policy override.
     *
     * @var int
     */
    protected $user;
    /**
     * A comment from the submitter as to why the policy override was submitted. Cannot exceed 1024 characters.
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * A comment from the submitter as to why the policy override was submitted. Cannot exceed 1024 characters.
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * The date the policy override was submitted.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * The date the policy override was submitted.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->date = $date;
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
     * The login name of the user that submitted the policy override.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The login name of the user that submitted the policy override.
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
     * The identifier of the user that submitted the policy override.
     *
     * @return int
     */
    public function getUser() : int
    {
        return $this->user;
    }
    /**
     * The identifier of the user that submitted the policy override.
     *
     * @param int $user
     *
     * @return self
     */
    public function setUser(int $user) : self
    {
        $this->user = $user;
        return $this;
    }
}