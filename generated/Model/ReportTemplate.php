<?php

namespace Rapid7\InsightVM\Api\Model;

class ReportTemplate
{
    /**
     * Whether the report template is builtin.
     *
     * @var bool
     */
    protected $builtin;
    /**
     * The description of the report template.
     *
     * @var string
     */
    protected $description;
    /**
     * The identifier of the report template;
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
     * The name of the report template.
     *
     * @var string
     */
    protected $name;
    /**
     * The sections that comprise the `document` report template.
     *
     * @var string[]
     */
    protected $sections;
    /**
     * The type of the report template. `document` is a templatized, typically printable, report that has various sections of content. `export` is data-oriented output, typically CSV. `file` is a printable report template using a report template file.
     *
     * @var string
     */
    protected $type;
    /**
     * Whether the report template is builtin.
     *
     * @return bool
     */
    public function getBuiltin() : bool
    {
        return $this->builtin;
    }
    /**
     * Whether the report template is builtin.
     *
     * @param bool $builtin
     *
     * @return self
     */
    public function setBuiltin(bool $builtin) : self
    {
        $this->builtin = $builtin;
        return $this;
    }
    /**
     * The description of the report template.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the report template.
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
     * The identifier of the report template;
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The identifier of the report template;
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
     * The name of the report template.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the report template.
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
     * The sections that comprise the `document` report template.
     *
     * @return string[]
     */
    public function getSections() : array
    {
        return $this->sections;
    }
    /**
     * The sections that comprise the `document` report template.
     *
     * @param string[] $sections
     *
     * @return self
     */
    public function setSections(array $sections) : self
    {
        $this->sections = $sections;
        return $this;
    }
    /**
     * The type of the report template. `document` is a templatized, typically printable, report that has various sections of content. `export` is data-oriented output, typically CSV. `file` is a printable report template using a report template file.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the report template. `document` is a templatized, typically printable, report that has various sections of content. `export` is data-oriented output, typically CSV. `file` is a printable report template using a report template file.
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