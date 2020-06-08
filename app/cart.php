<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\cart;
use App\product;


class cart extends Model
{
    protected $fillable=[
        'user_id',
        'product_id',
        'order_id',
        'ip_address',
        'alert',
        'quantity',
    ];

    public function product(){
      return $this->belongsTo(product::class);
    }



    public static function total_item_cart(){

                if (Auth::check()) {
                  $cart=cart::where('user_id',Auth::id())
                            ->where('ip_address',request()->ip())
                            ->where('order_id',NULL)
                            ->get();
                }else {
                  $cart=cart::where('ip_address',request()->ip())
                            ->where('order_id',NULL)
                            ->get();
                }
                $total_item=0;
                foreach ($cart as $v_cart) {
                            $total_item +=$v_cart->quantity;
                }
                return $total_item;
    }

    public static function item_cart(){
      if (Auth::check()) {
        $cart=cart::where('user_id',Auth::id())
                  ->where('ip_address',request()->ip())
                  ->where('order_id',NULL)
                  ->get();
      }else {
        $cart=cart::where('ip_address',request()->ip())
                  ->where('order_id',NULL)
                  ->get();
      }

      return $cart;
    }


}
