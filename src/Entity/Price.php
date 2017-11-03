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
     * @var string|null $productProducer
     */
    private $productProducer;
    /**
     * @var string $productPartName
     */
    private $productPartName;
    /**
     * @var string $productPartGroup
     */
    private $productPartGroup;
    /**
     * @var string $productPartKind
     */
    private $productPartKind;
    /**
     * @var string $productQuality
     */
    private $productQuality;
    /**
     * @var string $productMeasureUnit
     */
    private $productMeasureUnit;
    /**
     * @var string|null $description
     */
    private $description;
    /**
     * @var float $price
     */
    private $price;
    /**
     * @var integer $quantity
     */
    private $quantity;
    /**
     * @var array $pictures
     */
    private $pictures = [];

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
     * @return null|string
     */
    public function getProductProducer()
    {
        return $this->productProducer;
    }

    /**
     * @param null|string $productProducer
     * @return Price
     */
    public function setProductProducer(string $productProducer = null): Price
    {
        $this->productProducer = $productProducer;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductPartName(): string
    {
        return $this->productPartName;
    }

    /**
     * @param string $productPartName
     * @return Price
     */
    public function setProductPartName(string $productPartName): Price
    {
        $this->productPartName = $productPartName;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductPartGroup(): string
    {
        return $this->productPartGroup;
    }

    /**
     * @param string $productPartGroup
     * @return Price
     */
    public function setProductPartGroup(string $productPartGroup): Price
    {
        $this->productPartGroup = $productPartGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductPartKind(): string
    {
        return $this->productPartKind;
    }

    /**
     * @param string $productPartKind
     * @return Price
     */
    public function setProductPartKind(string $productPartKind): Price
    {
        $this->productPartKind = $productPartKind;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductQuality(): string
    {
        return $this->productQuality;
    }

    /**
     * @param string $productQuality
     * @return Price
     */
    public function setProductQuality(string $productQuality): Price
    {
        $this->productQuality = $productQuality;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductMeasureUnit(): string
    {
        return $this->productMeasureUnit;
    }

    /**
     * @param string $productMeasureUnit
     * @return Price
     */
    public function setProductMeasureUnit(string $productMeasureUnit): Price
    {
        $this->productMeasureUnit = $productMeasureUnit;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     * @return Price
     */
    public function setDescription(string $description = null): Price
    {
        $this->description = $description;
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

    /**
     * @return array
     */
    public function getPictures(): array
    {
        return $this->pictures;
    }

    /**
     * @param array $pictures
     * @return Price
     */
    public function setPictures(array $pictures): Price
    {
        $this->pictures = $pictures;
        return $this;
    }
}
