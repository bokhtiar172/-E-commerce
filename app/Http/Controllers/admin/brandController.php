<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\brand;
use Illuminate\Support\Str;


class brandController extends Controller
{

      public function add_brand(){
        return view('admin.brand.add_brand');
      }



      public function save_brand(Request $request){
        $brand=new brand;
            $brand['category_id']=$request->category_id;
            $brand['brand_name']=$request->brand_name;
            $brand['brand_status']=$request->brand_status;


            $path=$request->file('brand_image')->store('/image');

            $image=$request->file('brand_image');
                 if ($image){

                   $image_name=Str::random(20);
                   $ext=strtolower($image->getClientOriginalExtension());
                   $image_full_name=$image_name.'.'.$ext;
                   $upload_path='image/';
                   $image_url=$upload_path.$image_full_name;
                   $success=$image->move($upload_path,$image_full_name);
                       if ($success) {
                       $brand['brand_image']=$image_url;
                       $brand->save();
                       return back();
                                     }
                          }
        }


        public function all_brand(){
              $all_brand=brand::all();
              return view('admin.brand.show_brand',compact('all_brand'));
            }



          public function unactive_brand($id){
            $unactive_brand=brand::find($id);
                    $unactive_brand->brand_status=0;
                    $unactive_brand->save();
                    return back();
          }

          public function active_brand($id){
            $active_brand=brand::find($id);
                    $active_brand->brand_status=1;
                    $active_brand->save();
                    return back();
          }


        public function edit_brand($id){
          $edit_brand=brand::find($id);
                   return view('admin.brand.edit_brand',compact('edit_brand'));
        }

          public function update_brand(Request $request, $id){
            $brand=brand::find($id);
                $brand['brand_name']=$request->brand_name;
                $brand['category_id']=$request->category_id;


                $path=$request->file('brand_image')->store('/image');

                $image=$request->file('brand_image');
                     if ($image){

                       $image_name=Str::random(20);
                       $ext=strtolower($image->getClientOriginalExtension());
                       $image_full_name=$image_name.'.'.$ext;
                       $upload_path='image/';
                       $image_url=$upload_path.$image_full_name;
                       $success=$image->move($upload_path,$image_full_name);
                           if ($success) {
                           $brand['brand_image']=$image_url;
                           $brand->save();
                           return redirect()->route('admin.all.brand');
                                         }
                              }
            }


           public function delete_brand($id){
               $delete_brand=brand::find($id);
                     $delete_brand->delete();
                     return back();
           }


}
