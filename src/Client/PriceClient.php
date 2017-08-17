<?php

namespace WebLabLv\Renoks\Client;

use WebLabLv\Renoks\Entity\Price;

class PriceClient extends AbstractClient
{
    protected $invocation = 'prices';

    /**
     * @param array $data
     * @return Price
     */
    public function arrayToEntity(array $data)
    {
        $price = new Price();
        $price
            ->setProductNumber($data['number'])
            ->setProductOeNumber($data['oe_number'])
            ->setDescription($data['description'])
            ->setPrice($data['price'])
            ->setQuantity($data['quantity'])
            ->setPictures($data['pictures']);

        return $price;
    }
}
