<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\product;
use App\offer;

class offerController extends Controller
{
    public function add_offer(){
      return view('admin.offer.add_offer');
    }


    public function save_offer(Request $request){
      $offer=new product;
          $offer['product_title']=$request->product_title;
          $offer['category_id']=$request->category_id;
          $offer['brand_id']=$request->brand_id;
          $offer['product_description']=$request->product_description;
          $offer['product_parcentage_price']=$request->product_price; //this is product_price fild
          $offer['product_parcentage']=$request->product_parcentage;
          $offer['product_status']=$request->product_status;
          $offer['product_size']=$request->product_size;
          $offer['product_weight']=$request->product_weight;
          $offer['product_role_id']=$request->product_role_id;
                //parcentage flashsell pruduct start
                $parcentage=$request->product_parcentage;
                $parcentage_price=$request->product_price;
                $current_parcentage_price=$parcentage*$parcentage_price/100;
                $orginal_price=$request->product_price;
                $discount_price_is=$orginal_price-$current_parcentage_price;
                //parcentage flashsell pruduct start
          $offer['product_price']=$discount_price_is; //this is product_parcentage_price fild


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
                     $offer['product_image']=$image_url;
                     $offer->save();
                     return back();
                                   }
                        }
      }


      public function all_offer(){
            $all_offer=product::all()
              ->where('product_role_id',2);
            return view('admin.offer.show_offer',compact('all_offer'));
          }



        public function unactive_offer($id){
          $unactive_offer=product::find($id);
                  $unactive_offer->product_status=0;
                  $unactive_offer->save();
                  return back();
        }

        public function active_offer($id){
          $active_offer=product::find($id);
                  $active_offer->product_status=1;
                  $active_offer->save();
                  return back();
        }


      public function edit_offer($id){
        $edit_offer=product::find($id);
                 return view('admin.offer.edit_offer',compact('edit_offer'));
      }

        public function update_offer(Request $request, $id){

            $offer=product::find($id);
              $offer['product_title']=$request->product_title;
              $offer['category_id']=$request->category_id;
              $offer['brand_id']=$request->brand_id;
              $offer['product_description']=$request->product_description;
              $offer['product_price']=$request->product_price;
              $offer['product_parcentage']=$request->product_parcentage;
              $offer['product_status']=$request->product_status;
              $offer['product_size']=$request->product_size;
              $offer['product_weight']=$request->product_weight;
              $offer['product_role_id']=$request->product_role_id;
                //parcentage flashsell pruduct start
                $parcentage=$request->product_parcentage;
                $parcentage_price=$request->product_price;
                $current_parcentage_price=$parcentage*$parcentage_price/100;
                $orginal_price=$request->product_price;
                $discount_price_is=$orginal_price-$current_parcentage_price;
                //parcentage flashsell pruduct start
          $offer['product_parcentage_price']=$discount_price_is;


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
                     $offer['product_image']=$image_url;
                     $offer->save();
                     return back();
                                   }
                        }
          }


         public function delete_offer($id){
             $delete_offer=product::find($id);
                   $delete_offer->delete();
                   return back();
         }



}
