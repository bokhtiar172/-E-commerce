<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\wishlist;
use Auth;

class wishlistController extends Controller
{
    public function wishlist_store($id){
      $wishlist=new wishlist;
          if (Auth::check()) {
                $wishlist['user_id']=Auth::id();
          }else {
                return redirect()->route('login');
          }

          $wishlist['product_id']=$id;
          $wishlist['ip_address']=request()->ip();
          $wishlist->save();
          return back();
    }

    public function all_wishlist_show(){
              return view('user.wishlist');
    }

    public function wishlist_delete($id){
      $wishlist_delete=wishlist::find($id);
          $wishlist_delete->delete();
      return back();
    }


}
