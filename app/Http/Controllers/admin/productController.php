<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Str;


class productController extends Controller
{
      public function add_product(){
        return view('admin.product.add_product');
      }

      public function save_product(Request $request){
        $product=new product;
            $product['category_id']=$request->category_id;
            $product['brand_id']=$request->brand_id;
            $product['product_title']=$request->product_title;
            $product['product_price']=$request->product_price;
            $product['product_description']=$request->product_description;
            $product['product_size']=$request->product_size;
            $product['product_weight']=$request->product_weight;
            $product['product_status']=$request->product_status;
            $product['product_role_id']=$request->product_role_id;



            //image upload start
            $path=$request->file('product_image')->store('/image');

            $image=$request->file('product_image');
                 if ($image){

                   $image_name=Str::random(20);
                   $ext=strtolower($image->getClientOriginalExtension());
                   $image_full_name=$image_name.'.'.$ext;
                   $upload_path='image/';
                   $image_url=$upload_path.$image_full_name;
                   $success=$image->move($upload_path,$image_full_name);
                       if ($success) {
                       $product['product_image']=$image_url;
                       $product->save();
                       return back();
                                     }
                          }
        }


        public function all_product(){
              $all_product=product::all();
              return view('admin.product.show_product',compact('all_product'));
            }



          public function unactive_product($id){
            $unactive_product=product::find($id);
                    $unactive_product->product_status=0;
                    $unactive_product->save();
                    return back();
          }

          public function active_product($id){
            $active_product=product::find($id);
                    $active_product->product_status=1;
                    $active_product->save();
                    return back();
          }


        public function edit_product($id){
          $edit_product=product::find($id);
                   return view('admin.product.edit_product',compact('edit_product'));
        }

          public function update_porduct(Request $request, $id){

              $product=product::find($id);
                  $product['category_id']=$request->category_id;
                  $product['brand_id']=$request->brand_id;
                  $product['product_title']=$request->product_title;
                  $product['product_price']=$request->product_price;
                  $product['product_description']=$request->product_description;
                  $product['product_weight']=$request->product_weight;
                  $product['product_size']=$request->product_size;
                  $product['product_status']=$request->product_status;



                  //image upload start
                  $path=$request->file('product_image')->store('/image');

                  $image=$request->file('product_image');
                       if ($image){

                         $image_name=Str::random(20);
                         $ext=strtolower($image->getClientOriginalExtension());
                         $image_full_name=$image_name.'.'.$ext;
                         $upload_path='image/';
                         $image_url=$upload_path.$image_full_name;
                         $success=$image->move($upload_path,$image_full_name);
                             if ($success) {
                             $product['product_image']=$image_url;
                             $product->save();
                             return back();
                                           }
                                }
              }


           public function delete_delete($id){
               $delete_product=product::find($id);
                     $delete_product->delete();
                     return back();
           }





}
