<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\slider;


class sliderController extends Controller
{
    public function add_slider(){
      return view('admin.slider.add_slider');
    }



        public function save_slider(Request $request){
          $slider=new slider;
              $slider['slider_name']=$request->slider_name;
              $slider['slider_status']=$request->slider_status;


              $path=$request->file('slider_image')->store('/image');

              $image=$request->file('slider_image');
                   if ($image){

                     $image_name=Str::random(20);
                     $ext=strtolower($image->getClientOriginalExtension());
                     $image_full_name=$image_name.'.'.$ext;
                     $upload_path='image/';
                     $image_url=$upload_path.$image_full_name;
                     $success=$image->move($upload_path,$image_full_name);
                         if ($success) {
                         $slider['slider_image']=$image_url;
                         $slider->save();
                         return back();
                                       }
                            }
          }

/*
            public function all_category(){
              $all_category=category::all();
              return view('admin.category.show_category',compact('all_category'));
            }



            public function unactive_category($id){
              $unactive_category=category::find($id);
                      $unactive_category->category_status=0;
                      $unactive_category->save();
                      return back();
            }

            public function active_category($id){
              $active_category=category::find($id);
                      $active_category->category_status=1;
                      $active_category->save();
                      return back();
            }


            public function edit_category($id){
              $edit_category=category::find($id);
                      return view('admin.category.edit_category',compact('edit_category'));
            }

            public function update_category(Request $request, $id){
              $category=category::find($id);
                  $category['category_name']=$request->category_name;



                  $path=$request->file('category_image')->store('/image');

                  $image=$request->file('category_image');
                       if ($image){

                         $image_name=Str::random(20);
                         $ext=strtolower($image->getClientOriginalExtension());
                         $image_full_name=$image_name.'.'.$ext;
                         $upload_path='image/';
                         $image_url=$upload_path.$image_full_name;
                         $success=$image->move($upload_path,$image_full_name);
                             if ($success) {
                             $category['category_image']=$image_url;
                             $category->save();
                             return redirect()->route('admin.all.category');
                                           }
                                }
              }


              public function delete_category($id){
                  $delete_category=category::find($id);
                        $delete_category->delete();
                        return back();
              }

              */
}
