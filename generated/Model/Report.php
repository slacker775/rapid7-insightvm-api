<?php

namespace Rapid7\InsightVM\Api\Model;

class Report
{
    /**
     * The name of the bureau for a CyberScope report. Only used when the format is `"cyberscope-xml"`.
     *
     * @var string
     */
    protected $bureau;
    /**
     * The name of the component for a CyberScope report. Only used when the format is `"cyberscope-xml"`.
     *
     * @var string
     */
    protected $component;
    /**
     * 
     *
     * @var ReportConfigDatabaseResource
     */
    protected $database;
    /**
     * 
     *
     * @var ReportEmail
     */
    protected $email;
    /**
     * The name of the enclave for a CyberScope report. Only used when the format is `"cyberscope-xml"`.
     *
     * @var string
     */
    protected $enclave;
    /**
     * 
     *
     * @var ReportConfigFiltersResource
     */
    protected $filters;
    /**
     * The output format of the report. The format will restrict the available templates and parameters that can be specified.
     *
     * @var string
     */
    protected $format;
    /**
     * 
     *
     * @var ReportFrequency
     */
    protected $frequency;
    /**
     * The identifier of the report.
     *
     * @var int
     */
    protected $id;
    /**
     * The locale (language) in which the report is generated
     *
     * @var string
     */
    protected $language;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The name of the report.
     *
     * @var string
     */
    protected $name;
    /**
     * The organization used for a XCCDF XML report. Only used when the format is `"xccdf-xml"`.
     *
     * @var string
     */
    protected $organization;
    /**
     * The identifier of the report owner.
     *
     * @var int
     */
    protected $owner;
    /**
     * The policy to report on. Only used when the format is `"oval-xml"`, `""xccdf-csv"`, or `"xccdf-xml"`.
     *
     * @var int
     */
    protected $policy;
    /**
     * SQL query to run against the Reporting Data Model. Only used when the format is `"sql-query"`.
     *
     * @var string
     */
    protected $query;
    /**
     * 
     *
     * @var ReportConfigScopeResource
     */
    protected $scope;
    /**
     * 
     *
     * @var ReportStorage
     */
    protected $storage;
    /**
     * The template for the report (only required if the format is templatized).
     *
     * @var string
     */
    protected $template;
    /**
     * The timezone the report generates in, such as `"America/Los_Angeles"`.
     *
     * @var string
     */
    protected $timezone;
    /**
     * The identifiers of the users granted explicit access to the report.
     *
     * @var int[]
     */
    protected $users;
    /**
     * The version of the report Data Model to report against. Only used when the format is `"sql-query"`.
     *
     * @var string
     */
    protected $version;
    /**
     * The name of the bureau for a CyberScope report. Only used when the format is `"cyberscope-xml"`.
     *
     * @return string
     */
    public function getBureau() : string
    {
        return $this->bureau;
    }
    /**
     * The name of the bureau for a CyberScope report. Only used when the format is `"cyberscope-xml"`.
     *
     * @param string $bureau
     *
     * @return self
     */
    public function setBureau(string $bureau) : self
    {
        $this->bureau = $bureau;
        return $this;
    }
    /**
     * The name of the component for a CyberScope report. Only used when the format is `"cyberscope-xml"`.
     *
     * @return string
     */
    public function getComponent() : string
    {
        return $this->component;
    }
    /**
     * The name of the component for a CyberScope report. Only used when the format is `"cyberscope-xml"`.
     *
     * @param string $component
     *
     * @return self
     */
    public function setComponent(string $component) : self
    {
        $this->component = $component;
        return $this;
    }
    /**
     * 
     *
     * @return ReportConfigDatabaseResource
     */
    public function getDatabase() : ReportConfigDatabaseResource
    {
        return $this->database;
    }
    /**
     * 
     *
     * @param ReportConfigDatabaseResource $database
     *
     * @return self
     */
    public function setDatabase(ReportConfigDatabaseResource $database) : self
    {
        $this->database = $database;
        return $this;
    }
    /**
     * 
     *
     * @return ReportEmail
     */
    public function getEmail() : ReportEmail
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param ReportEmail $email
     *
     * @return self
     */
    public function setEmail(ReportEmail $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The name of the enclave for a CyberScope report. Only used when the format is `"cyberscope-xml"`.
     *
     * @return string
     */
    public function getEnclave() : string
    {
        return $this->enclave;
    }
    /**
     * The name of the enclave for a CyberScope report. Only used when the format is `"cyberscope-xml"`.
     *
     * @param string $enclave
     *
     * @return self
     */
    public function setEnclave(string $enclave) : self
    {
        $this->enclave = $enclave;
        return $this;
    }
    /**
     * 
     *
     * @return ReportConfigFiltersResource
     */
    public function getFilters() : ReportConfigFiltersResource
    {
        return $this->filters;
    }
    /**
     * 
     *
     * @param ReportConfigFiltersResource $filters
     *
     * @return self
     */
    public function setFilters(ReportConfigFiltersResource $filters) : self
    {
        $this->filters = $filters;
        return $this;
    }
    /**
     * The output format of the report. The format will restrict the available templates and parameters that can be specified.
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * The output format of the report. The format will restrict the available templates and parameters that can be specified.
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return ReportFrequency
     */
    public function getFrequency() : ReportFrequency
    {
        return $this->frequency;
    }
    /**
     * 
     *
     * @param ReportFrequency $frequency
     *
     * @return self
     */
    public function setFrequency(ReportFrequency $frequency) : self
    {
        $this->frequency = $frequency;
        return $this;
    }
    /**
     * The identifier of the report.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The identifier of the report.
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
     * The locale (language) in which the report is generated
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * The locale (language) in which the report is generated
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->language = $language;
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
     * The name of the report.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the report.
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
     * The organization used for a XCCDF XML report. Only used when the format is `"xccdf-xml"`.
     *
     * @return string
     */
    public function getOrganization() : string
    {
        return $this->organization;
    }
    /**
     * The organization used for a XCCDF XML report. Only used when the format is `"xccdf-xml"`.
     *
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(string $organization) : self
    {
        $this->organization = $organization;
        return $this;
    }
    /**
     * The identifier of the report owner.
     *
     * @return int
     */
    public function getOwner() : int
    {
        return $this->owner;
    }
    /**
     * The identifier of the report owner.
     *
     * @param int $owner
     *
     * @return self
     */
    public function setOwner(int $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * The policy to report on. Only used when the format is `"oval-xml"`, `""xccdf-csv"`, or `"xccdf-xml"`.
     *
     * @return int
     */
    public function getPolicy() : int
    {
        return $this->policy;
    }
    /**
     * The policy to report on. Only used when the format is `"oval-xml"`, `""xccdf-csv"`, or `"xccdf-xml"`.
     *
     * @param int $policy
     *
     * @return self
     */
    public function setPolicy(int $policy) : self
    {
        $this->policy = $policy;
        return $this;
    }
    /**
     * SQL query to run against the Reporting Data Model. Only used when the format is `"sql-query"`.
     *
     * @return string
     */
    public function getQuery() : string
    {
        return $this->query;
    }
    /**
     * SQL query to run against the Reporting Data Model. Only used when the format is `"sql-query"`.
     *
     * @param string $query
     *
     * @return self
     */
    public function setQuery(string $query) : self
    {
        $this->query = $query;
        return $this;
    }
    /**
     * 
     *
     * @return ReportConfigScopeResource
     */
    public function getScope() : ReportConfigScopeResource
    {
        return $this->scope;
    }
    /**
     * 
     *
     * @param ReportConfigScopeResource $scope
     *
     * @return self
     */
    public function setScope(ReportConfigScopeResource $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * 
     *
     * @return ReportStorage
     */
    public function getStorage() : ReportStorage
    {
        return $this->storage;
    }
    /**
     * 
     *
     * @param ReportStorage $storage
     *
     * @return self
     */
    public function setStorage(ReportStorage $storage) : self
    {
        $this->storage = $storage;
        return $this;
    }
    /**
     * The template for the report (only required if the format is templatized).
     *
     * @return string
     */
    public function getTemplate() : string
    {
        return $this->template;
    }
    /**
     * The template for the report (only required if the format is templatized).
     *
     * @param string $template
     *
     * @return self
     */
    public function setTemplate(string $template) : self
    {
        $this->template = $template;
        return $this;
    }
    /**
     * The timezone the report generates in, such as `"America/Los_Angeles"`.
     *
     * @return string
     */
    public function getTimezone() : string
    {
        return $this->timezone;
    }
    /**
     * The timezone the report generates in, such as `"America/Los_Angeles"`.
     *
     * @param string $timezone
     *
     * @return self
     */
    public function setTimezone(string $timezone) : self
    {
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * The identifiers of the users granted explicit access to the report.
     *
     * @return int[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * The identifiers of the users granted explicit access to the report.
     *
     * @param int[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->users = $users;
        return $this;
    }
    /**
     * The version of the report Data Model to report against. Only used when the format is `"sql-query"`.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the report Data Model to report against. Only used when the format is `"sql-query"`.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
}