<?php

namespace Digistorm\SchoolEasyPay;

use Digistorm\SchoolEasyPay\Exceptions\ApiConfigException;
use phpDocumentor\Reflection\Types\Boolean;

class Config
{
    protected string $baseUri;

    /**
     * @throws ApiConfigException
     */
    public function __construct(
        protected string $apiKey,
        protected string $username,
        protected string $password,
        protected bool $testMode = false
    ) {
        if (empty($apiKey) || empty($username) || empty($password)) {
            throw new ApiConfigException('Api key, username and password are all required.');
        }

        $this->baseUri = $testMode ? 'https://apiuat.schooleasypay.com.au/v2' : 'https://api.schooleasypay.com.au/v2';
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function setBaseUri(string $baseUri): self
    {
        $this->baseUri = $baseUri;

        return $this;
    }
}
