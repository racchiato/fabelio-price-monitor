<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Price;
use App\Image;
use DB;

class ProductApiController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::select(DB::raw("DISTINCT ON (products.id) *"))
                                    ->join('prices', 'products.id', '=', 'prices.product_id')
                                    ->orderBy('products.id', 'desc')
                                    ->orderBy('prices.created_at', 'desc')
                                    ->get();

        return view('product_list', ['products' => $products]);
    }

    public function searchProduct(Request $request)
    {
        $product = Product::where('url', $request->url)->first();

        //Check if product with given url exists
        if ($product == null) {
            return redirect()->route('Homepage')->with('message', "Product not Found");
        } else {
             return $this->getProductDetail($product->id);
        }
    }

    public function getProductDetail($id)
    {
        //Get product detail (Title, Description, Images, CurrentPrice, and Prices History)

        $product = Product::find($id);
        $images = Product::find($id)->images()->get();
        $currentPrice = Product::find($id)->prices()->orderBy('created_at', 'desc')->first();

        $prices = Product::find($id)->prices()->select(DB::raw("date_trunc('hour', created_at) as time, price"))
                                               ->groupBy('time', 'price')
                                               ->orderBy('time', 'asc')
                                               ->get();

        return view('product_detail', ['product' => $product,
                                'currentPrice' => $currentPrice->price,
                                'images' => $images,
                                'prices' => $prices,
                            ]);
    }

    public function addProduct(Request $request)
    {

        //Check if product exist
        $product = Product::where('url', $request->url)->first();
        if (!$product == null) {
            return back()->with('message', "Product already exists");
        } else {
            $product = new Product;
            $product->url = $request->url;
            $product->title = $request->title;
            $product->description = $request->description;
            $product->save();

            $price = new Price;
            $price->product_id = $product->id;
            $price->price = $request->price;
            $price->save();

            $image = new Image;
            $image->product_id = $product->id;
            $image->url = $request->imageUrl;
            $image->save();

            $message = "Product Successfully Added!";
            return redirect()->route('Homepage')->with('message', $message);
        }
    }

    public function updatePrice($id, Request $request)
    {
        $price = new Price;
        $price->product_id = $id;
        $price->price = $request->price;
        $price->save();

        $message = "Price Successfully Updated!";
        return back()->with('message', $message);
    }

    public function updatePriceForm($id)
    {
        $currentPrice = Price::where('product_id', $id)
                                ->orderBy('created_at', 'desc')
                                ->first();

        $product = Product::find($id);

        return view('update_price', ['currentPrice' => $currentPrice, 'product' => $product ]);
    }

    public function addImageForm($id)
    {
        $product = Product::find($id);

        return view('add_image', ['product' => $product]);
    }

    public function addImage($id, Request $request)
    {
        $image = new Image;
        $image->product_id = $id;
        $image->url = $request->imageUrl;
        $image->save();

        $message = "Image Successfully Added!";
        return back()->with('message', $message);
    }
}
