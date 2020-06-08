@extends('admin_dashbord')
@section('admin_content')


    <form class="form-group text-dark" action="{{route('admin.save.product')}}" method="post"  enctype="multipart/form-data">
      @csrf
      <legend class="text-center text-dark font-weight-bold mt-5">Add product </legend>


      <div class="row">
        <div class="col-md-6"><!--left side start --->
          <div class="">
            <label for="" class="font-weight-bold text-dark" >Enter Your product Name</label>
            <input class="form-control" type="text" name="product_title" value="" placeholder="Enter Your Product Name" required >
          </div>
          <div class="">
            <label for="" class="font-weight-bold text-dark" >Enter Your product Image</label>
            <input class="form-control" type="file" name="product_image" value="" required>
          </div>
          <hr>
          <div class="">
            <label for="" class="font-weight-bold text-dark" >Enter Your product Price</label>
            <input class="form-control" type="number" name="product_price" value="" placeholder="Enter Your Product price" required >
          </div>

          <div class="">
            <label for="" class="font-weight-bold text-dark" >Enter Your product size</label>
            <input class="form-control" type="text" name="product_size" value="" placeholder="Enter Your Product Size">

          </div>
        </div><!-- left side end -->


        <div class="col-md-6"><!-- right side start -->
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
            <div class="">
              <label for="" class="font-weight-bold text-dark" >Enter Your product Category</label>
              <select class="form-control" name="category_id">
                <option value="">select Category Nmae</option>
                @foreach($all_category as $v_category_name)
                    <option value="{{$v_category_name->id}}">{{$v_category_name->category_name}}</option>
                @endforeach
              </select>
            </div><!-- category end -->
            <div class="">
              <label for="" class="font-weight-bold text-dark" >Enter Your product Brand</label>
              <select class="form-control" name="brand_id">
                <option value="">select brand Nmae</option>
                @foreach($all_brand as $v_brand_name)
                    <option value="{{$v_brand_name->id}}">{{$v_brand_name->brand_name}}</option>
                @endforeach
              </select>
            </div><!-- brand end -->
            <hr>

            <div class="">
              <label class="font-weight-bold text-dark" for="">Enter Product weight</label>
              <input class="form-control" type="text" name="product_weight" placeholder="Enter Product Weight" value="">
            </div>
            <div class="">
              <input class="" type="hidden" name="product_role_id" value="1"  >
            </div><br>

            <div class="d-flex">
              <label for="" class="font-weight-bold text-dark" >Enter Your product Status</label>
              <input class="" type="checkbox" name="product_status" value="1" required >
            </div>
        </div><!-- right side end -->


      </div><!-- end of row-->
      <div class="">
      <label for="" class="font-weight-bold text-dark" >Enter Your Short Description</label>
      <textarea class="form-control" type="text" name="product_description" value="" placeholder="Enter Your Product short Description" required rows="8" cols="80"></textarea>
      </div>
        <input class="btn btn-info float-right" type="submit" name="product_submit" value="product Upload">
    </form>















@endsection
