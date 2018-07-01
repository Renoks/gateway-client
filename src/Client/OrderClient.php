<?php

namespace WebLabLv\Renoks\Client;

use GuzzleHttp;

class OrderClient
{
    /**
     * @var string $endpoint
     */
    private $endpoint;
    /**
     * @var string $invocation
     */
    private static $invocation = 'orders';
    /**
     * @var GuzzleHttp\Client $httpClient
     */
    private $httpClient;

    /**
     * @param string $endpoint
     * @param string $username
     * @param string $password
     */
    public function __construct(string $endpoint, string $username, string $password)
    {
        $this->endpoint   = sprintf('%s/%s', rtrim($endpoint, '/'), self::$invocation);
        $this->httpClient = new GuzzleHttp\Client([
            'auth' => [
                $username, $password
            ]
        ]);
    }

    /**
     * @param array $data
     * @return array
     */
    public function create(array $data): array
    {
        $clientResponse = $this->httpClient->post($this->endpoint, [
            'form_params' => [
                'data' => $data
            ]
        ]);

        return GuzzleHttp\json_decode($clientResponse->getBody()->getContents(), true);
    }
}
