<?php

namespace Rapid7\InsightVM\Api\Model;

class SiteOrganization
{
    /**
     * The address.
     *
     * @var string
     */
    protected $address;
    /**
     * The city.
     *
     * @var string
     */
    protected $city;
    /**
     * The contact person name.
     *
     * @var string
     */
    protected $contact;
    /**
     * The country.
     *
     * @var string
     */
    protected $country;
    /**
     * The e-mail address.
     *
     * @var string
     */
    protected $email;
    /**
     * The job title.
     *
     * @var string
     */
    protected $jobTitle;
    /**
     * Hypermedia links to corresponding or related resources.
     *
     * @var Link[]
     */
    protected $links;
    /**
     * The organization name.
     *
     * @var string
     */
    protected $name;
    /**
     * The phone number.
     *
     * @var string
     */
    protected $phone;
    /**
     * The state.
     *
     * @var string
     */
    protected $state;
    /**
     * The organization URL.
     *
     * @var string
     */
    protected $url;
    /**
     * The zip or region code.
     *
     * @var string
     */
    protected $zipCode;
    /**
     * The address.
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * The address.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * The city.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * The city.
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * The contact person name.
     *
     * @return string
     */
    public function getContact() : string
    {
        return $this->contact;
    }
    /**
     * The contact person name.
     *
     * @param string $contact
     *
     * @return self
     */
    public function setContact(string $contact) : self
    {
        $this->contact = $contact;
        return $this;
    }
    /**
     * The country.
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * The country.
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * The e-mail address.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The e-mail address.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The job title.
     *
     * @return string
     */
    public function getJobTitle() : string
    {
        return $this->jobTitle;
    }
    /**
     * The job title.
     *
     * @param string $jobTitle
     *
     * @return self
     */
    public function setJobTitle(string $jobTitle) : self
    {
        $this->jobTitle = $jobTitle;
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
     * The organization name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The organization name.
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
     * The phone number.
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * The phone number.
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * The state.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The state.
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
     * The organization URL.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The organization URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * The zip or region code.
     *
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }
    /**
     * The zip or region code.
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode(string $zipCode) : self
    {
        $this->zipCode = $zipCode;
        return $this;
    }
}