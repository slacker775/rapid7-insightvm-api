<?php

namespace Rapid7\InsightVM\Api\Model;

class ConsoleCommandOutput
{
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The output of the command that was executed.
     *
     * @var string
     */
    protected $output;
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
     * The output of the command that was executed.
     *
     * @return string
     */
    public function getOutput() : string
    {
        return $this->output;
    }
    /**
     * The output of the command that was executed.
     *
     * @param string $output
     *
     * @return self
     */
    public function setOutput(string $output) : self
    {
        $this->output = $output;
        return $this;
    }
}