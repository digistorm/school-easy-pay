<?php

namespace Digistorm\SchoolEasyPay;

use JsonSerializable;
use Digistorm\SchoolEasyPay\Traits\JsonSerialize;

class Address implements JsonSerializable
{
    use JsonSerialize;
    
    protected $address1;
    protected $address2;
    protected $suburb;
    protected $state;
    protected $country;
    protected $postcode;

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @return Address
     */
    public function setAddress1(mixed $address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @return Address
     */
    public function setAddress2(mixed $address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * @return Address
     */
    public function setSuburb(mixed $suburb)
    {
        $this->suburb = $suburb;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return Address
     */
    public function setState(mixed $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return Address
     */
    public function setCountry(mixed $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @return Address
     */
    public function setPostcode(mixed $postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    protected function jsonExclude(): array
    {
        return [];
    }
}