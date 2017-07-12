<?php
/**
 * Created by PhpStorm.
 * User: jkuprijanovs
 * Date: 7/12/2017
 * Time: 1:13 PM
 */

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
     * @var string
     */
    private $endpoint;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Response
     */
    private $result;

    /**
     * @var string
     */
    protected $invocation = '';

    /**
     * @var string|null
     */
    private $responseJson = null;

    /**
     * @var array|null
     */
    private $responseArray = null;

    /**
     * @var array|null
     */
    private $responseEntities;

    /**
     * AbstractClient constructor.
     * @param string $endpoint
     * @param string $login
     * @param string $password
     */
    public function __construct(
        string $endpoint,
        string $login,
        string $password
    )
    {
        $this->endpoint = $endpoint;
        $this->login = $login;
        $this->password = $password;
        $this->client = new Client();
        $this->checkEndpoint();
    }

    public function sendRequest()
    {
        if ('' == $this->invocation) {
            throw new InvocationNotSetException();
        }

        $this->result = $this->client->get($this->fullRequestUrl());
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
    private function fullRequestUrl()
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
    public function getResponseEntities()
    {
        if (null === $this->responseEntities) {
            $this->responseEntities = [];
            foreach ($this->getResponseArray() as $productNumber => $array) {
                $this->responseEntities[] = $this->arrayToEntity(
                    $productNumber,
                    $array
                );
            }
        }

        return $this->responseEntities;
    }

    /**
     * @return array
     */
    public function getResponseArray()
    {
        if (null === $this->responseArray) {
            $this->responseArray = json_decode(
                $this->getResponseJson(),
                true
            );
        }

        return $this->responseArray;
    }

    /**
     * @return string
     */
    public function getResponseJson()
    {
        if (null === $this->responseJson) {
            $this->responseJson = $this->result->getBody()->__toString();
        }
        return $this->responseJson;
    }
}