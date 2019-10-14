<?php

namespace Digistorm\SchoolEasyPay;

use Digistorm\SchoolEasyPay\Traits\JsonSerialize;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;

abstract class Base implements \JsonSerializable
{
    use JsonSerialize;

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

    protected function jsonExclude(): array
    {
        return [
            'client',
            'config',
            'headers',
        ];
    }

    public function create()
    {
        $endpoint = $this->config->getBaseUri() . $this->getEndpoint();

        return $this->client->post($this->config->getBaseUri() . $this->getEndpoint(), [
            RequestOptions::BODY => self::toJson(),
            RequestOptions::HEADERS => $this->headers,
        ]);
    }

    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }
}
