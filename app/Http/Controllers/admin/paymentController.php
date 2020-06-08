<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\payment;
class paymentController extends Controller
{
    public function add_payment(){
      return view('admin.payment.add_payment');
    }


    public function save_payment(Request $request){
      $payment=new payment;
          $payment['payment_name']=$request->payment_name;
          $payment['payment_phone']=$request->payment_phone;
          $payment['payment_delevary_charge']=$request->payment_delevary_charge;
          $payment['payment_status']=$request->payment_status;

      $payment->save();
      return back();
    }
}
