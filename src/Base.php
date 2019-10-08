<?php

namespace Digistorm\SchoolEasyPay;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;

abstract class Base
{
    protected $client;
    protected $config;
    protected $headers;

    abstract protected function getEndpoint();

    public function __construct(Config $config, $client = null)
    {
        $this->config = $config;
        
        $this->headers = [
            'Api-Key' => $this->config->getApiKey(),
            'Authorization' => 'Basic ' . base64_encode(sprintf('%s:%s', $this->config->getUsername(), $this->config->getPassword())),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        $this->client = $client ?? new Client();
    }

    public function create()
    {
        $endpoint = $this->config->getBaseUri() . $this->getEndpoint();

        return $this->client->post($this->config->getBaseUri() . $this->getEndpoint(), [
            RequestOptions::BODY => self::toJson(),
            RequestOptions::HEADERS => $this->headers,
        ]);
    }

    protected function jsonExclude()
    {
        return [
            'client',
            'config',
            'headers',
        ];
    }

    public function toJson()
    {
        $vars = array_filter(get_object_vars($this), function ($value, $key) {
            return !in_array($key, $this->jsonExclude()) && $value !== null;
        }, ARRAY_FILTER_USE_BOTH);

        return json_encode($vars);
    }

    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }
}
