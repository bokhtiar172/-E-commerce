@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>

        <?php
            $all_category=DB::table('categories')
                        ->where('category_status',1)
                        ->get();
         ?><!-- category for select manus -->
         <?php
             $all_brand=DB::table('brands')
                         ->where('brand_status',1)
                         ->get();
          ?><!-- brand for select manus -->

        <div class="col-md-5"><!-- brand form start -->
            <form class="form-group" action="{{url('admin/update/product/'.$edit_product->id)}}" method="post"  enctype="multipart/form-data" style="background-color: #34495E; margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center text-light">Add product </legend>

              <div class="">
                <select class="form-control" name="category_id">
                  <option value="">{{$edit_product->category_id}}</option>
                  @foreach($all_category as $v_category_name)
                      <option value="{{$v_category_name->id}}">{{$v_category_name->category_name}}</option>
                  @endforeach
                </select>
              </div><!-- category end -->
              <div class="">
                <select class="form-control" name="brand_id">
                  <option value="">{{$edit_product->brand_id}}</option>
                  @foreach($all_brand as $v_brand_name)
                      <option value="{{$v_brand_name->id}}">{{$v_brand_name->brand_name}}</option>
                  @endforeach
                </select>
              </div><!-- brand end -->
              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your product Name</label>
                <input class="form-control" type="text" name="product_title" value="{{$edit_product->product_title}}" placeholder="Enter Your Product Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your product Image</label>
                <input class="form-control" type="file" name="product_image" value="{{$edit_product->product_image}}" required>
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your Short Description</label>
                <input class="form-control" type="text" name="product_description" value="{{$edit_product->product_description}}" placeholder="Enter Your Product short Description" required >
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your product Price</label>
                <input class="form-control" type="number" name="product_price" value="{{$edit_product->product_price}}" placeholder="Enter Your Product price" required >
              </div>





              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your product size</label>
                <input class="form-control" type="text" name="product_size" value="{{$edit_product->product_size}}">

              </div>






              <div class="">
                <label class="font-weight-bold text-light" for="">Enter Product weight</label>
                <input class="form-control" type="text" name="product_weight" placeholder="Enter Product Weight" value="{{$edit_product->product_weight}}">
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your product Status</label>
                <input class="" type="checkbox" name="product_status" value="1" required >
              </div>

              <input class="btn btn-info" type="submit" name="product_update_submit" value="product Update">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
