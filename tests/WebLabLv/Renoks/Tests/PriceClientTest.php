<?php

namespace WebLabLv\Renoks\Tests;

use PHPUnit\Framework\TestCase;
use WebLabLv\Renoks\Client\PriceClient;

class PriceClientTest extends TestCase
{
    public function testArrayToEntity()
    {
        $testNumber   = 'testnumber';
        $testOeNumber = '-';
        $testPrice    = 100.9000;
        $testQuantity = 10;

        $priceClient = new PriceClient('', '', '');

        $price = $priceClient->arrayToEntity([
            'number'    => $testNumber,
            'oe_number' => $testOeNumber,
            'price'     => $testPrice,
            'quantity'  => $testQuantity
        ]);

        $this->assertInstanceOf('WebLabLv\Renoks\Entity\Price', $price);

        $this->assertEquals($testNumber, $price->getProductNumber());
        $this->assertEquals($testOeNumber, $price->getProductOeNumber());
        $this->assertEquals($testPrice, $price->getPrice());
        $this->assertEquals($testQuantity, $price->getQuantity());
    }
}
