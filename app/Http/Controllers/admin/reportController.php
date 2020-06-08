<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order;
use Carbon\Carbon;

class reportController extends Controller
{
    public function today_report(){
      $order=order::all();
        return view('admin.report.today_report',compact('order'));
    }


    public function month($month){
      $month_order=order::all();
        return view('admin.report.month',compact('month_order'));
    }
}
