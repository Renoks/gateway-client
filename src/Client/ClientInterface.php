<?php
/**
 * Created by PhpStorm.
 * User: jkuprijanovs
 * Date: 7/12/2017
 * Time: 3:35 PM
 */

namespace WebLabLv\Renoks\Client;


interface ClientInterface
{
    /**
     * @param string $productNumber
     * @param array $array
     * @return mixed
     */
    function arrayToEntity(string $productNumber, array $array);
}