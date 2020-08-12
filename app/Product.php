<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // //the product belongs to a category
    public function category()
    {
        return$this->belongsTo(ProductCategory::class);
    }

}
