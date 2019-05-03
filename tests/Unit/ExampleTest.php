<?php

namespace Tests\Unit;

use App\Food\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testDatabase()
    {
        $products = factory(Product::class, 5)->make();
    }
}
