<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;
class brand extends Model
{
    protected $fillable =[
        'category_id',
        'brand_image',
        'brand_name',
        'brand_status',
    ];

    public function category(){
      return $this->belongsTo(category::class);
    }
}
