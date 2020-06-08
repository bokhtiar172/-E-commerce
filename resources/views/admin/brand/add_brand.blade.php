@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- brand form start -->
            <form class="form-group" action="{{route('admin.save.brand')}}" method="post"  enctype="multipart/form-data" style=" margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center text-light bg-info">Add brand </legend>

              <!-- all category start -->
              <?php
                  $all_category=DB::table('categories')
                                ->where('category_status',1)
                                ->get();
               ?><!-- all category end -->

              <div class="">
                <label for="" class="font-weight-bold text-dark" >Select Your Category Name</label>
                <select class="form-control" name="category_id">
                  <option value="">Select Your Category</option>
                  @foreach($all_category as $v_all_category)
                  <option value="{{$v_all_category->id}}">{{$v_all_category->category_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your brand Name</label>
                <input class="form-control" type="text" name="brand_name" value="" placeholder="Enter Your brand Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark" >Enter Your brand Image</label>
                <input class="form-control" type="file" name="brand_image" value="" required>
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark mt-1">brand Publication Status</label>
                <input class="" type="checkbox" name="brand_status" value="1" required>
              </div>
              <input class="btn btn-info float-right" type="submit" name="brand_submit" value="brand Upload">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
