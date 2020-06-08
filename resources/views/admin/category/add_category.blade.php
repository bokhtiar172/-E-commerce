@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- category form start -->
            <form class="form-group" action="{{route('admin.save.category')}}" method="post"  enctype="multipart/form-data" style="margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center h3 bg-info text-light ">Add Category </legend>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Category Name</label>
                <input class="form-control" type="text" name="category_name" value="" placeholder="Enter Your Category Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Category Image</label>
                <input class="form-control" type="file" name="category_image" value="" required>
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6">Category Publication Status</label>
                <input class="" type="checkbox" name="category_status" value="1" required>
              </div>
              <input class="btn btn-info float-right " type="submit" name="category_submit" value="Category Upload">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
