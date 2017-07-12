<?php
/**
 * Created by PhpStorm.
 * User: jkuprijanovs
 * Date: 7/12/2017
 * Time: 2:30 PM
 */

namespace WebLabLv\Renoks\Client;


use WebLabLv\Renoks\Entity\Price;

class PriceClient extends AbstractClient
{
    protected $invocation = 'prices';

    /**
     * @param string $productNumber
     * @param array $array
     * @return Price
     */
    public function arrayToEntity(string $productNumber, array $array)
    {
        $price = new Price();
        $price
            ->setProductNumber($productNumber)
            ->setPrice($array[0])
            ->setQuantity($array[1]);
        return $price;
    }
}