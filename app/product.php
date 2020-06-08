<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cart;
class product extends Model
{
      protected $fillable=[
        'category_id',
        'brand_id',
        'product_title',
        'product_image',
        'product_price',
        'product_description',
        'product_size',
        'product_weight',
        'product_status',
      ];

      public function cart(){
        return $this->hasOne(cart::class);
      }
}
