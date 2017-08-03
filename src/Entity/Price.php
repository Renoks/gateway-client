<?php

namespace WebLabLv\Renoks\Entity;

class Price
{
    /**
     * @var string $productNumber
     */
    private $productNumber;

    /**
     * @var string|null $productOeNumber
     */
    private $productOeNumber;

    /**
     * @var float $price
     */
    private $price;

    /**
     * @var integer $quantity
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
     * @return null|string
     */
    public function getProductOeNumber()
    {
        return $this->productOeNumber;
    }

    /**
     * @param null|string $productOeNumber
     * @return Price
     */
    public function setProductOeNumber(string $productOeNumber = null): Price
    {
        $this->productOeNumber = $productOeNumber;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Price
     */
    public function setPrice(float $price): Price
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
