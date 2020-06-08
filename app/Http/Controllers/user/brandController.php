<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
class brandController extends Controller
{
    public function show_product_brand_by_brand($id){
      $product=product::all()
                      ->where('brand_id',$id)
                      ->where('product_role_id',1);
      return view('user.brand_form_product',compact('product'));
    }
}
