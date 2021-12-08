<?php

namespace Rapid7\InsightVM\Api\Model;

class Submission
{
    /**
     * A comment from the submitter as to why the exception was submitted.
     *
     * @var string
     */
    protected $comment;
    /**
     * The date and time the vulnerability exception was submitted.
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
     * The login name of the user that submitted the vulnerability exception.
     *
     * @var string
     */
    protected $name;
    /**
     * The reason the vulnerability exception was submitted. One of: `"False Positive"`, `"Compensating Control"`, `"Acceptable Use"`, `"Acceptable Risk"`, `"Other"`
     *
     * @var string
     */
    protected $reason;
    /**
     * The identifier of the user that submitted the vulnerability exception.
     *
     * @var int
     */
    protected $user;
    /**
     * A comment from the submitter as to why the exception was submitted.
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * A comment from the submitter as to why the exception was submitted.
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
     * The date and time the vulnerability exception was submitted.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * The date and time the vulnerability exception was submitted.
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
     * The login name of the user that submitted the vulnerability exception.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The login name of the user that submitted the vulnerability exception.
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
     * The reason the vulnerability exception was submitted. One of: `"False Positive"`, `"Compensating Control"`, `"Acceptable Use"`, `"Acceptable Risk"`, `"Other"`
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * The reason the vulnerability exception was submitted. One of: `"False Positive"`, `"Compensating Control"`, `"Acceptable Use"`, `"Acceptable Risk"`, `"Other"`
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * The identifier of the user that submitted the vulnerability exception.
     *
     * @return int
     */
    public function getUser() : int
    {
        return $this->user;
    }
    /**
     * The identifier of the user that submitted the vulnerability exception.
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