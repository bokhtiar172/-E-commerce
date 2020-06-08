<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\brand;
class categoryController extends Controller
{
    public function category_show_id_by_id($id){
      $brand=brand::all()->where('category_id',$id);
      return view('user.category_form_brand',compact('brand'));
    }
}
