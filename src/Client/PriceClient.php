<?php
/**
 * Created by PhpStorm.
 * User: jkuprijanovs
 * Date: 7/12/2017
 * Time: 2:30 PM
 */

namespace WebLabLv\Renoks\Client;


class PriceClient extends AbstractClient
{
    protected $invocation = 'prices';

    /**
     * @param string $productNumber
     * @param array $array
     */
    protected function arrayToEntity(string $productNumber, array $array)
    {
        $price = new Price();
        $price
            ->setProductNumber($productNumber)
            ->setPrice($array[0])
            ->setQuantity($array[1]);
    }
}