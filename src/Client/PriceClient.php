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
            ->setProductProducer($data['producer'])
            ->setProductPartName($data['part_name'])
            ->setProductPartGroup($data['part_group'])
            ->setProductPartKind($data['part_kind'])
            ->setProductQuality($data['quality'])
            ->setProductMeasureUnit($data['measure_unit'])
            ->setDescription($data['description'])
            ->setPrice($data['price'])
            ->setQuantity($data['quantity'])
            ->setPictures($data['pictures']);

        return $price;
    }
}
