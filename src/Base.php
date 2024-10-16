<?php

namespace Digistorm\SchoolEasyPay;

use GuzzleHttp\Exception\GuzzleException;
use JsonSerializable;
use Digistorm\SchoolEasyPay\Traits\JsonSerialize;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

abstract class Base implements JsonSerializable
{
    use JsonSerialize;

    protected Client $client;
    protected array $headers;

    abstract protected function getEndpoint(): string;

    public function __construct(protected Config $config, ?Client $client = null)
    {
        $this->headers = [
            'Api-Key' => $this->config->getApiKey(),
            'Authorization' => 'Basic ' . base64_encode(sprintf(
                '%s:%s',
                $this->config->getUsername(),
                $this->config->getPassword()
            )),
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

    /**
     * @throws GuzzleException
     */
    public function create(): ResponseInterface
    {
        return $this->client->post($this->config->getBaseUri() . $this->getEndpoint(), [
            RequestOptions::BODY => self::toJson(),
            RequestOptions::HEADERS => $this->headers,
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function update(): ResponseInterface
    {
        return $this->client->put($this->config->getBaseUri() . $this->getEndpoint(), [
            RequestOptions::BODY => self::toJson(),
            RequestOptions::HEADERS => $this->headers,
        ]);
    }

    public function setClient(ClientInterface $client): void
    {
        $this->client = $client;
    }
}
