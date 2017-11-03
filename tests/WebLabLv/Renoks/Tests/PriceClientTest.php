<?php

namespace WebLabLv\Renoks\Tests;

use PHPUnit\Framework\TestCase;
use WebLabLv\Renoks\Client\PriceClient;

final class PriceClientTest extends TestCase
{
    public function test_price_array_to_entity()
    {
        $testNumber      = '5013L83X';
        $testOeNumber    = '-';
        $testProducer    = 'BILSTEIN';
        $testPartName    = 'Oil cooler';
        $testPartGroup   = 'Thermal parts';
        $testPartKind    = 'Radiators';
        $testQuality     = 'Q';
        $testMeasureUnit = 'pcs';
        $testDescription = '178;80;48;A/A brazed;air;OEM/OES;';
        $testPrice       = 100.90;
        $testQuantity    = 10;
        $testPictures    = [
            'https://picture.com/path/to/image.jpg'
        ];

        $priceClient = new PriceClient('', '', '');

        $price = $priceClient->arrayToEntity([
            'number'       => $testNumber,
            'oe_number'    => $testOeNumber,
            'producer'     => $testProducer,
            'part_name'    => $testPartName,
            'part_group'   => $testPartGroup,
            'part_kind'    => $testPartKind,
            'quality'      => $testQuality,
            'measure_unit' => $testMeasureUnit,
            'description'  => $testDescription,
            'price'        => $testPrice,
            'quantity'     => $testQuantity,
            'pictures'     => $testPictures
        ]);

        $this->assertInstanceOf('WebLabLv\Renoks\Entity\Price', $price);

        $this->assertEquals($testNumber, $price->getProductNumber());
        $this->assertEquals($testOeNumber, $price->getProductOeNumber());
        $this->assertEquals($testProducer, $price->getProductProducer());
        $this->assertEquals($testPartName, $price->getProductPartName());
        $this->assertEquals($testPartGroup, $price->getProductPartGroup());
        $this->assertEquals($testPartKind, $price->getProductPartKind());
        $this->assertEquals($testQuality, $price->getProductQuality());
        $this->assertEquals($testMeasureUnit, $price->getProductMeasureUnit());
        $this->assertEquals($testDescription, $price->getDescription());
        $this->assertEquals($testPrice, $price->getPrice());
        $this->assertEquals($testQuantity, $price->getQuantity());
        $this->assertEquals($testPictures, $price->getPictures());
    }
}
