<?php

namespace Rapid7\InsightVM\Api\Model;

class Review
{
    /**
     * A comment from the reviewer detailing the review. 
     *
     * @var string
     */
    protected $comment;
    /**
     * The date and time the review took place.
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
     * The identifier of the user that reviewed the vulnerability exception.
     *
     * @var string
     */
    protected $name;
    /**
     * The login name of the user that reviewed the vulnerability exception.
     *
     * @var int
     */
    protected $user;
    /**
     * A comment from the reviewer detailing the review. 
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * A comment from the reviewer detailing the review. 
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
     * The date and time the review took place.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * The date and time the review took place.
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
     * The identifier of the user that reviewed the vulnerability exception.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The identifier of the user that reviewed the vulnerability exception.
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
     * The login name of the user that reviewed the vulnerability exception.
     *
     * @return int
     */
    public function getUser() : int
    {
        return $this->user;
    }
    /**
     * The login name of the user that reviewed the vulnerability exception.
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