<title>{{$product->product_title}}</title>
@extends('user_dashbord')
@section('user_content')

        <div class="row ">
          <div class="col-md-6 ">
            <div class="text-center ">
              <img height="500px;" width="70%" src="{{asset($product->product_image) }}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class=" mt-5">
              <p><strong>Product Name: </strong>{{$product->product_title}}</p>
              <p><strong>Product Title: </strong>{{$product->product_price}} TAKA</p>
              <p><strong>Product Weight: </strong>{{$product->product_weight}} Kg</p>
              <p><strong>Product Description: </strong>{{$product->product_description}}</p>
            </div>
            <div class="mt-5">
              <a class="btn btn-info" href="{{url('/user/cart-store/'.$product->id)}}">ADD TO CART</a>
              <a class="btn btn-info" href="#">Countinue Shopping</a>
            </div>
          </div>
        </div>


        <div class="">


        <h3 class="text-center text-info ">Releted Product's</h3>

        <?php
          $all_product=DB::table('products')
                      ->where('category_id',$product->category_id)
                      ->where('product_status',1)
                      ->get();
         ?>
         <div class="row  ml-4">
         @foreach($all_product as $v_category_product)



         <div class="col-md-3 col-sm-4 col-xs-12 col-lg-2">
           <div class="card mb-2" style=" ">
               <img height="150px;"  class="card-img-top" src="{{asset($v_category_product->product_image)}}" alt="Card image cap">
                 <strong class="text-center">{{$v_category_product->product_title}}</strong>
                 <strong class="text-center ">{{$v_category_product->product_price}}TK</strong>
               <div class="form-inline mt-4 mb-4" style="margin-top: -5px" >
                 <a href="{{url('user/product-show/'.$v_category_product->id)}}" class="mr-auto ml-1"> <img src="{{asset('img/e.png')}} " alt=""> </a>
                 <a href="{{url('user/wishlists/'.$v_category_product->id)}}"> <img src="{{asset('img/wish.png')}}" alt=""> </a>
                 <a href="{{url('user/cart-store/'.$v_category_product->id)}}" class="ml-auto mr-1"><img src="{{asset('img/c.png')}}" alt=""> </a>
               </div>
           </div>
         </div>

         @endforeach
 </div>
         </div>

@endsection
