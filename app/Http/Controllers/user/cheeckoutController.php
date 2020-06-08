<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order;
use App\cart;
use Auth;
use Carbon\Carbon;


class cheeckoutController extends Controller
{
    public function cheeckout(){
      return view('user.cheeckout');
    }

    public function save_order(Request $request){
      $order=new order;
          if (Auth::check()) {
            $order['user_id']=Auth::id();
          }else {
            return redirect()->route('login');
          }
            $order['ip_address']=request()->ip();
            $order['reciver_name']=$request->reciver_name;
            $order['reciver_phone']=$request->reciver_phone;
            $order['reciver_email']=$request->reciver_email;
            $order['reciver_shipping_address']=$request->reciver_shipping_address;
            $order['message']=$request->message;
            $order['payment_id']=$request->payment;
            $order['code']=$request->code;
            $order['date']=Carbon::now()->addDays()->format('Y-m-d');
            $order['month']=Carbon::now()->format('M');
            $order['year']=Carbon::now()->format('Y');
      $order->save();
      foreach (cart::item_cart() as $v_cart_item) {
              $v_cart_item['order_id']=$order->id;
              $v_cart_item->save();
      }
      return redirect()->route('user.dashbord');
    }



}
