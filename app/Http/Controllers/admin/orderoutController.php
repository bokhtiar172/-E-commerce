<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order;
use App\notificaion;


class orderoutController extends Controller
{
    public function order_show(){
      $order=order::all();
          return view('admin.all_order',compact('order'));
    }

    public function single_view_product($id){
        $order_id=order::find($id);
        return view('admin.show_single_order',compact('order_id'));
    }

    public function unpaid($id){
      $unpaid=order::find($id);
        $unpaid['is_paid']=1;
        $unpaid->save();
        return back();
    }

    public function uncomplate($id){
      $uncomplate=order::find($id);
        $uncomplate['is_complate']=1;

        $notificaion=new notificaion;
              $notificaion['user_id']=session()->get('user_id');
              $notificaion['notification']="Your Product Order Done...!";
              $notificaion->save();


        $uncomplate->save();
        return redirect('admin/order-show');
    }
}
