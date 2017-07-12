<?php
/**
 * Created by PhpStorm.
 * User: jkuprijanovs
 * Date: 7/12/2017
 * Time: 3:30 PM
 */

namespace WebLabLv\Renoks\Entity;


class Price
{
    /**
     * @var string
     */
    private $productNumber;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @return string
     */
    public function getProductNumber(): string
    {
        return $this->productNumber;
    }

    /**
     * @param string $productNumber
     * @return Price
     */
    public function setProductNumber(string $productNumber): Price
    {
        $this->productNumber = $productNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return Price
     */
    public function setPrice(string $price): Price
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Price
     */
    public function setQuantity(int $quantity): Price
    {
        $this->quantity = $quantity;
        return $this;
    }

}