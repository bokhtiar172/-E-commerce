<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\sponcer;
use Illuminate\Support\Str;

class sponcerController extends Controller
{
  public function add_sponcer(){
    return view('admin.sponcer.add_sponcer');
  }


  public function save_sponcer(Request $request){
    $sponcer=new sponcer;
        $sponcer['sponcer_name']=$request->sponcer_name;
        $sponcer['sponcer_status']=$request->sponcer_status;


        $path=$request->file('sponcer_image')->store('/image');

        $image=$request->file('sponcer_image');
             if ($image){

               $image_name=Str::random(20);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
                   if ($success) {
                   $sponcer['sponcer_image']=$image_url;
                   $sponcer->save();
                   return back();
                                 }
                      }
    }


    public function all_sponcer(){
      $all_sponcer=sponcer::all();
      return view('admin.sponcer.show_sponcer',compact('all_sponcer'));
    }



    public function unactive_sponcer($id){
      $unactive_sponcer=sponcer::find($id);
              $unactive_sponcer->sponcer_status=0;
              $unactive_sponcer->save();
              return back();
    }

    public function active_sponcer($id){
      $active_sponcer=sponcer::find($id);
              $active_sponcer->sponcer_status=1;
              $active_sponcer->save();
              return back();
    }

    public function delete_sponcer($id){
        $delete_sponcer=sponcer::find($id);
              $delete_sponcer->delete();
              return back();
    }
}
