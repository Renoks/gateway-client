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
use WebLabLv\Renoks\Exception\BadResponseStatusCodeException;
use WebLabLv\Renoks\Exception\InvocationNotSetException;

/**
 * Class AbstractClient
 * @package WebLabLv\Renoks\Client
 */
abstract class AbstractClient
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
        $this->checkReponseStatusCode();
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
    private function checkReponseStatusCode()
    {
        if (200 !== $this->result->getStatusCode()) {
            throw new BadResponseStatusCodeException();
        }
    }

    /**
     * @return array
     */
    public function getResponse()
    {
        return json_decode(
            $this->result->getBody()->__toString(),
            true
        );
    }
}