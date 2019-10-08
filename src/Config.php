<?php

namespace Digistorm\SchoolEasyPay;

use Digistorm\SchoolEasyPay\Exceptions\ApiConfigException;
use phpDocumentor\Reflection\Types\Boolean;

class Config
{
    protected $apiKey;
    protected $baseUri;
    protected $password;
    protected $username;

    public function __construct(string $apiKey, string $username, string $password, bool $testMode = false)
    {
        if (empty($apiKey) || empty($username) || empty($password)) {
            throw new ApiConfigException('Api key, username and password are all required.');
        }

        $this->apiKey = $apiKey;
        $this->username = $username;
        $this->password = $password;

        $this->baseUri = $testMode ? 'https://apiuat.schooleasypay.com.au/v2' : 'https://api.schooleasypay.com.au/v2';
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getBaseUri()
    {
        return $this->baseUri;
    }

    /**
     * @param mixed $baseUri
     * @return Config
     */
    public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;

        return $this;
    }
}
