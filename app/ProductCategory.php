<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
   //each category can have many products
   public function product()
   {
       return $this->hasmany(Product::class);
   }


}
