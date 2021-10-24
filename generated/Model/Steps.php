<?php

namespace Rapid7\InsightVM\Api\Model;

class Steps
{
    /**
     * Textual representation of the content.
     *
     * @var string
     */
    protected $html;
    /**
     * Textual representation of the content.
     *
     * @var string
     */
    protected $text;
    /**
     * Textual representation of the content.
     *
     * @return string
     */
    public function getHtml() : string
    {
        return $this->html;
    }
    /**
     * Textual representation of the content.
     *
     * @param string $html
     *
     * @return self
     */
    public function setHtml(string $html) : self
    {
        $this->html = $html;
        return $this;
    }
    /**
     * Textual representation of the content.
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * Textual representation of the content.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->text = $text;
        return $this;
    }
}