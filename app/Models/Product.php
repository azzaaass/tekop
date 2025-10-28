<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function favorites(){
        return $this->hasMany(ProductFavorite::class, 'product_id');
    }
}
