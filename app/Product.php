<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
