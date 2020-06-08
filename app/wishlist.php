<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\wishlist;
use Auth;
use App\product;


class wishlist extends Model
{
    public function product(){
      return $this->belongsTo(product::class);
    }

    public static function total_number_wishlist(){
      if (Auth::check()) {
        $wishlist=wishlist::where('user_id',Auth::id())
                          ->where('order_id',NULL)
                          ->get();
      }else {
        $wishlist=wishlist::where('ip_address',request()->ip())
                          ->where('order_id',NULL)
                          ->get();
      }
        $total_wishlist=0;
      foreach ($wishlist as $v_wishlist) {
              $total_wishlist +=$v_wishlist->quantity;
      }
      return $total_wishlist;

    }


    public static function all_wishlist_show(){
      if (Auth::check()) {
        $wishlist=wishlist::where('user_id',Auth::id())
                          ->where('order_id',NULL)
                          ->get();
      }else {
        $wishlist=wishlist::where('ip_address',request()->ip())
                          ->where('order_id',NULL)
                          ->get();
      }
      return $wishlist;
    }
}
