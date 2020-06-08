@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- brand form start -->
            <form class="form-group" action="{{url('admin/update/offer/'.$edit_offer->id)}}" method="post"  enctype="multipart/form-data" style=" margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center text-light bg-info">Add offer </legend>

              <!-- category strart --->
                  <?php
                    $category=DB::table('categories')
                          ->where('category_status',1)
                          ->get();
                   ?>
              <!--category end -->

              <!-- brand strart --->
                  <?php
                    $brand=DB::table('brands')
                          ->where('brand_status',1)
                          ->get();
                   ?>
              <!--brand end -->

              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Category</label>
                <select class="form-control" name="category_id" value="{{$edit_offer->category_id}}" >
                    @foreach($category as $v_category)
                        <option value="{{$v_category->id}}">{{$v_category->category_name}}</option>
                    @endforeach
                </select>
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Brand</label>
                <select class="form-control" name="brand_id" value="{{$edit_offer->brand_id}}" >
                    @foreach($brand as $v_brand)
                        <option value="{{$v_brand->id}}">{{$v_brand->brand_name}}</option>
                    @endforeach
                </select>
              </div>



              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your offer product title</label>
                <input class="form-control" type="text" name="product_title" value="{{$edit_offer->product_title}}" placeholder="Enter Your offer Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your offer product image</label>
                <input class="form-control" type="file" name="product_image" value="{{$edit_offer->product_image}}" required>
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your Short product description</label>
                <input class="form-control" type="text" name="product_description" value="{{$edit_offer->product_description}}" placeholder="Enter Your offer short Description" required >
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your offer product price</label>
                <input class="form-control" type="number" name="product_price" value="{{$edit_offer->product_price}}" placeholder="Enter Your offer price" required >
              </div>


              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your offer discount product parcentage</label>
                <input class="form-control" type="text" name="product_parcentage" value="{{$edit_offer->product_parcentage}}" placeholder="Enter Your offer discount parcentage" required >
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your offer discount product size</label>
                <input class="form-control" type="text" name="product_size" value="{{$edit_offer->product_size}}" placeholder="Enter Your offer discount parcentage" required >
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your offer discount product weight</label>
                <input class="form-control" type="text" name="product_weight" value="{{$edit_offer->product_weight}}" placeholder="Enter Your offer discount parcentage" required >
              </div>


              <div class="">
                <input class="" type="hidden" name="product_role_id" value="2"  >
              </div>



              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your offer Status</label>
                <input class="" type="checkbox" name="product_status" value="1" required >
              </div>

              <input class="btn btn-info float-right" type="submit" name="offer_submit" value="Offer Upload">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
