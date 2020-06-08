@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- category form start -->
            <form class="form-group" action="{{url('admin/update-category/'.$edit_category->id)}}" method="post"  enctype="multipart/form-data" style="background-color: #34495E; margin-top: 20%; border-radius: 5px;">
              @csrf
              <legend class="text-center text-light">Add Category </legend>
              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your Category Name</label>
                <input class="form-control" type="text" name="category_name" value="{{$edit_category->category_name}}" placeholder="Enter Your Category Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your Category Image</label>
                <input class="form-control" type="file" name="category_image" value="{{$edit_category->category_image}}" required>
              </div>

              <input class="btn btn-info" type="submit" name="category_submit" value="Category Update">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
