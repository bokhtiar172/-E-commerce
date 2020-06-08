@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- category form start -->
            <form class="form-group" action="{{url('admin/update-category/'.$edit_category->id)}}" method="post"  enctype="multipart/form-data" style=" margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center text-light bg-info h4">Edit Category </legend>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Category Name</label>
                <input class="form-control" type="text" name="category_name" value="{{$edit_category->category_name}}" placeholder="Enter Your Category Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Category Image</label>
                <input class="form-control" type="file" name="category_image" value="{{$edit_category->category_image}}" required>
              </div>

              <input class="btn btn-info float-right" type="submit" name="category_submit" value="Update Category">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
