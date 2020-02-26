<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductApiController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all();

        return response()->json($products);
    }

    public function getProductDetail($id)
    {
        $product = Product::find($id);
        $images = Product::find($id)->images();
        $currentPrice = Product::find($id)->prices()->orderBy('created_at', 'desc')->first();
        $prices = Product::find($id)->prices()->select("date_trunc('hour', created_at) as time", "price")
                                              ->groupBy('time', 'asc')
                                              ->get();

        return response()->json(['product' => $product,
                                'currentPrice' => $currentPrice,
                                'images' => $images,
                                'prices' => $prices]);
        ]);
    }

    public function addProduct(Request $request)
    {
        $product = new Product;
        $proudct->url = $request->url;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->save();

        return response()->json('Product successfully added');
    }

    public function updatePrice($id, Request $request)
    {
        $price = new Price;
        $price->product_id = $id;
        $price->price = $request->price;
        $price->save();

        return response()->json('Price Successfully Updated');
    }

    public function addImage($id, Request $request)
    {
        $image = new Image;
        $image->product_id = $id;
        $image->url = $request->imageUrl;
        $image->save();

        return response()->json('Image successfully added.');
    }
}
