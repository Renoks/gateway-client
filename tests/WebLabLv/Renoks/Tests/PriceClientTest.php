<?php
/**
 * Created by PhpStorm.
 * User: jkuprijanovs
 * Date: 7/12/2017
 * Time: 3:44 PM
 */

namespace WebLabLv\Renoks\Tests;

use PHPUnit\Framework\TestCase;
use WebLabLv\Renoks\Client\PriceClient;

class PriceClientTest extends TestCase
{
    public function testArrayToEntity()
    {
        $testNumber = 'testnumber';
        $testPrice = '100.9000';
        $testQuantity = 10;

        $priceClient = new PriceClient('', '', '');

        $price = $priceClient->arrayToEntity($testNumber, [$testPrice, $testQuantity]);

        $this->assertInstanceOf('WebLabLv\Renoks\Entity\Price', $price);
        $this->assertEquals($testNumber, $price->getProductNumber());
        $this->assertEquals($testPrice, $price->getPrice());
        $this->assertEquals($testQuantity, $price->getQuantity());
    }
}
