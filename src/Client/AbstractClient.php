<?php

namespace WebLabLv\Renoks\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use WebLabLv\Renoks\Entity\Price;
use WebLabLv\Renoks\Exception\BadResponseStatusCodeException;
use WebLabLv\Renoks\Exception\InvocationNotSetException;

/**
 * Class AbstractClient
 * @package WebLabLv\Renoks\Client
 */
abstract class AbstractClient implements ClientInterface
{
    /**
     * @var string $endpoint
     */
    private $endpoint;
    /**
     * @var Client $client
     */
    private $client;
    /**
     * @var Response $result
     */
    private $result;
    /**
     * @var bool $withWatermark
     */
    private $withWatermark = true;

    /**
     * @var string $invocation
     */
    protected $invocation = '';
    /**
     * @var string|null $responseJson
     */
    private $responseJson;
    /**
     * @var array|null $responseArray
     */
    private $responseArray;
    /**
     * @var array|null
     */
    private $responseEntities;

    /**
     * @param string $endpoint
     * @param string $login
     * @param string $password
     */
    public function __construct(string $endpoint, string $login, string $password)
    {
        $this->endpoint = $endpoint;
        $this->client   = new Client([
            'auth' => [
                $login, $password
            ]
        ]);

        $this->checkEndpoint();
    }

    /**
     * @param bool $withWatermark
     * @return AbstractClient
     */
    public function withWatermark(bool $withWatermark): AbstractClient
    {
        $this->withWatermark = $withWatermark;
        return $this;
    }

    /**
     * @throws BadResponseStatusCodeException if endpoint httpStatusCode !== 200
     * @throws InvocationNotSetException if endpoint invocation is not defined
     */
    public function sendRequest()
    {
        if ('' == $this->invocation) {
            throw new InvocationNotSetException();
        }

        $this->result = $this->client->get($this->fullRequestUrl(), [
            'query' => [
                'with-watermark' => $this->withWatermark
            ]
        ]);
        $this->checkResponseStatusCode();
    }

    private function checkEndpoint()
    {
        if ('/' != substr($this->endpoint, strlen($this->endpoint))) {
            $this->endpoint .= '/';
        }
    }

    /**
     * @return string
     */
    private function fullRequestUrl(): string
    {
        return $this->endpoint . $this->invocation;
    }

    /**
     * @throws BadResponseStatusCodeException
     */
    private function checkResponseStatusCode()
    {
        if (200 !== $this->result->getStatusCode()) {
            throw new BadResponseStatusCodeException();
        }
    }

    /**
     * @return array
     */
    public function getResponseEntities(): array
    {
        if (null === $this->responseEntities) {
            $this->responseEntities = [];
            foreach ($this->getResponseArray() as $data) {
                $this->responseEntities[] = $this->arrayToEntity($data);
            }
        }

        return $this->responseEntities;
    }

    /**
     * @return array
     */
    public function getResponseArray(): array
    {
        if (null === $this->responseArray) {
            $this->responseArray = json_decode($this->getResponseJson(), true);
        }
        return $this->responseArray;
    }

    /**
     * @return string
     */
    public function getResponseJson(): string
    {
        if (null === $this->responseJson) {
            $this->responseJson = $this->result->getBody()->__toString();
        }
        return $this->responseJson;
    }
}
