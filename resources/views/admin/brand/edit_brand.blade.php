@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- category form start -->
            <form class="form-group" action="{{url('admin/update-brand/'.$edit_brand->id)}}" method="post"  enctype="multipart/form-data" style="margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center text-light bg-info">Edit brand </legend>
              <!-- all category start -->
              <?php
                  $all_category=DB::table('categories')
                                ->where('category_status',1)
                                ->get();
               ?><!-- all category end -->

              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Select Your Category Name</label>
                <select class="form-control" name="category_id" required >
                  <option  value="">{{$edit_brand->category->category_name}}</option>
                  @foreach($all_category as $v_all_category)
                  <option value="{{$v_all_category->id}}">{{$v_all_category->category_name}}</option>
                  @endforeach
                </select>
              </div>



              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your brand Name</label>
                <input class="form-control" type="text" name="brand_name" value="{{$edit_brand->brand_name}}" placeholder="Enter Your brand Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your brand Image</label>
                <input class="form-control" type="file" name="brand_image" value="{{$edit_brand->brand_image}}" required>
              </div>

              <input class="btn btn-info mt-2 float-right" type="submit" name="brand_submit" value="brand Update">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
