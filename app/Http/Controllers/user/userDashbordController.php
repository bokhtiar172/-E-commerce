<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use Auth;



class userDashbordController extends Controller
{
  public function index(){
    return view('user.index');
  }



  public function search(Request $request){
          $product_search_value=$request->search;

          $product_search=product::orwhere('product_title','like','%'.$product_search_value.'%')
                                 ->orwhere('product_description','like','%'.$product_search_value.'%')
                                 ->where('product_status',1)
                                 ->get();
          return view('user.product_search',compact('product_search'));

  }


  public function logout(){
    Auth::logout();
    return redirect()->back();
  }
}
