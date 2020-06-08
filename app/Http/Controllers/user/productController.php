<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;


class productController extends Controller
{
      public function product_show($id){
        $product=product::find($id);
                  
            return view('user.single_product_show',compact('product'));
      }
}
