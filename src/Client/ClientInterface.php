<?php

namespace WebLabLv\Renoks\Client;

interface ClientInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    function arrayToEntity(array $data);
}
