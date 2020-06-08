@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- brand form start -->
            <form class="form-group" action="{{url('admin/update/'.$edit_flashsell->id)}}" method="post"  enctype="multipart/form-data" style=" margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center text-light bg-info">Edit flashsell </legend>

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
                <select class="form-control" name="category_id">
                    @foreach($category as $v_category)
                        <option value="{{$v_category->id}}">{{$v_category->category_name}}</option>
                    @endforeach
                </select>
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Brand</label>
                <select class="form-control" name="brand_id">
                    @foreach($brand as $v_brand)
                        <option value="{{$v_brand->id}}">{{$v_brand->brand_name}}</option>
                    @endforeach
                </select>
              </div>


              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Name</label>
                <input class="form-control" type="text" name="product_title" value="{{$edit_flashsell->product_title}}" placeholder="Enter Your flashsell Name" required >
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Image</label>
                <input class="form-control" type="file" name="product_image" value="{{$edit_flashsell->product_image}}" placeholder="Enter Your flashsell image" required >
              </div>


              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Short Description</label>
                <input class="form-control" type="text" name="product_description" value="{{$edit_flashsell->product_description}}" placeholder="Enter Your flashsell short Description" required >
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Price</label>
                <input class="form-control" type="number" name="product_price" value="{{$edit_flashsell->product_price}}" placeholder="Enter Your flashsell price" required >
              </div>


              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell discount parcentage</label>
                <input class="form-control" type="text" name="product_parcentage" value="{{$edit_flashsell->product_parcentage}}" placeholder="Enter Your flashsell discount parcentage" required >
              </div>


              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Product size</label>
                <input class="form-control" type="text" name="product_size" value="{{$edit_flashsell->product_size}}" placeholder="Enter Your flashsell Name" required >
              </div>


              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Product Weight</label>
                <input class="form-control" type="text" name="product_weight" value="{{$edit_flashsell->product_weight}}" required>
              </div>



              <div class="">
                <input class="" type="hidden" name="product_role_id" value="3" required >
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Status</label>
                <input class="" type="checkbox" name="product_status" value="1" required >
              </div>

              <input class="btn btn-info float-right" type="submit" name="flashsell_edite_submit" value="flashsell Upload">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
