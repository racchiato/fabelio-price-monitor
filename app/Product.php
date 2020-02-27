<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Price;

class Product extends Model
{
    protected $fillable = ['url', 'title', 'description'];

    // These functions is to define the model relationship with the other models

    public function prices()
    {
        return $this->hasMany('App\Price');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    // public function updatePrice($price)
    // {
    //     $price = new Price;
    //     $price->product_id = $this->id;
    //     $price->price = $price;
    //     $price->save();

    //     $message = "Price successfully added";

    //     return $message;
    // }

    // public function addImage($imageUrl)
    // {
    //     $image = new Image;
    //     $image->product_id = $this->id;
    //     $image->url = $imageUrl;
    //     $image->save();

    //     $message = "Image successfully added";

    //     return $message;
    // }
}
