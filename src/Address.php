<?php

namespace Digistorm\SchoolEasyPay;

use JsonSerializable;
use Digistorm\SchoolEasyPay\Traits\JsonSerialize;

class Address implements JsonSerializable
{
    use JsonSerialize;
    
    protected string $address1;
    protected string $address2;
    protected string $suburb;
    protected string $state;
    protected string $country;
    protected string $postcode;

    public function getAddress1(): string
    {
        return $this->address1;
    }

    public function setAddress1(string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): string
    {
        return $this->address2;
    }

    public function setAddress2(string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getSuburb(): string
    {
        return $this->suburb;
    }

    public function setSuburb(string $suburb): self
    {
        $this->suburb = $suburb;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(mixed $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPostcode(): string
    {
        return $this->postcode;
    }

    public function setPostcode(mixed $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    protected function jsonExclude(): array
    {
        return [];
    }
}