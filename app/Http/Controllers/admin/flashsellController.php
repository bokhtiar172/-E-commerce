<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use App\flashsell;
use Illuminate\Support\Str;



class flashsellController extends Controller
{
    public function add_flashsell(){
      return view('admin.flashsell.add_flashsell');
    }


    public function save_flashsell(Request $request){
      $flashsell=new product;
          $flashsell['category_id']=$request->category_id;
          $flashsell['brand_id']=$request->brand_id;
          $flashsell['product_title']=$request->product_title;
          $flashsell['product_description']=$request->product_description;
          $flashsell['product_parcentage_price']=$request->product_price; //this is product_price fild
          $flashsell['product_parcentage']=$request->product_parcentage;
          $flashsell['product_role_id']=$request->product_role_id;
          $flashsell['product_size']=$request->product_size;
          $flashsell['product_weight']=$request->product_weight;
          $flashsell['product_status']=$request->product_status;
                //parcentage flashsell pruduct start
                $parcentage=$request->product_parcentage;
                $parcentage_price=$request->product_price;
                $current_parcentage_price=$parcentage*$parcentage_price/100;
                $orginal_price=$request->product_price;
                $discount_price_is=$orginal_price-$current_parcentage_price;
                //parcentage flashsell pruduct start
          $flashsell['product_price']=$discount_price_is; //this is product_parcentage_price fild


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
                     $flashsell['product_image']=$image_url;
                     $flashsell->save();
                     return back();
                                   }
                        }
      }


      public function all_flashsell(){
            $all_flashsell=product::all()
                          ->where('product_role_id',3);
            return view('admin.flashsell.show_flashsell',compact('all_flashsell'));
          }



        public function unactive_flashsell($id){
          $unactive_flashsell=product::find($id);
                  $unactive_flashsell->product_status=0;
                  $unactive_flashsell->save();
                  return back();
        }

        public function active_flashsell($id){
          $active_flashsell=product::find($id);
                  $active_flashsell->product_status=1;
                  $active_flashsell->save();
                  return back();
        }


      public function edit_flashsell($id){
        $edit_flashsell=product::find($id);
                 return view('admin.flashsell.edit_flashsell',compact('edit_flashsell'));
      }

        public function update_flashsell(Request $request, $id){
        $flashsell=product::find($id);
              $flashsell['category_id']=$request->category_id;
              $flashsell['brand_id']=$request->brand_id;
              $flashsell['product_title']=$request->product_title;
              $flashsell['product_description']=$request->product_description;
              $flashsell['product_price']=$request->product_price;
              $flashsell['product_parcentage']=$request->product_parcentage;
              $flashsell['product_role_id']=$request->product_role_id;
              $flashsell['product_size']=$request->product_size;
              $flashsell['product_weight']=$request->product_weight;
              $flashsell['product_status']=$request->product_status;
                    //parcentage flashsell pruduct start
                    $parcentage=$request->product_parcentage;
                    $parcentage_price=$request->product_price;
                    $current_parcentage_price=$parcentage*$parcentage_price/100;
                    $orginal_price=$request->product_price;
                    $discount_price_is=$orginal_price-$current_parcentage_price;
                    //parcentage flashsell pruduct start
              $flashsell['product_parcentage_price']=$discount_price_is;


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
                         $flashsell['product_image']=$image_url;
                         $flashsell->save();
                         return redirect()->route('admin.all.flashsell');
                                       }
                            }
                          }


         public function delete_flashsell($id){
             $delete_flashsell=product::find($id);
                   $delete_flashsell->delete();
                   return back();
         }


}
