<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Product;
use App\Price;
use App\Image;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testNotFound()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Product Price Monitor')
                ->type('url', 'abc')
                ->press('Search')
                ->assertPathis('/')
                ->assertSee('Product not Found');
        });
    }

    public function testProductsList()
    {
        $products = Product::all();

        foreach ($products as $product) {
            $this->browse(function (Browser $browser) use ($product) {
                $browser->visit('/products')
                        ->assertSee($product->title);
            });
        }
    }

    public function testFound()
    {
        $product = Product::all()->first();
        $price = Price::where('product_id', $product->id)->orderBy('created_at', 'desc')->first();

        $this->browse(function (Browser $browser) use ($product, $price) {
            $browser->visit('/')
                    ->type('url', $product->url)
                    ->press('Search')
                    ->assertPathis('/product')
                    ->assertSee($product->title)
                    ->assertSee($price->price);
        });
    }
}
