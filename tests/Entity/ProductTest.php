<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Product;

class ProductTest extends TestCase
{
    /** @var Product */
    protected $product;

    protected function SetUp()
    {
        $this->product = new Product;
    }

    public function testName()
    {
        $this->product->setName('someName');
        $this->assertSame('someName', $this->product->getName());
    }
}
