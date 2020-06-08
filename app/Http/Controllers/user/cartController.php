<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cart;
use Auth;

class cartController extends Controller
{
    public function cart_store($id){
      $cart=new cart;
            if (Auth::check()) {
              $cart['user_id']=Auth::id();
            }else {
              return redirect()->route('login');
            }


              $cart['product_id']=$id;
              $cart['ip_address']=request()->ip();
      $cart->save();
      return back();
    }





    public function cart_show(){
      return view('user.cart_show_item');
    }

    public function update_quantity(Request $request,$id){
      $cart_update=cart::find($id);
                $cart_update['quantity']=$request->product_quantity;
                $cart_update->save();
                return back();
    }

    public function cart_delete($id){
      $cart=cart::find($id);
        $cart->delete();
      return back();
    }
}
