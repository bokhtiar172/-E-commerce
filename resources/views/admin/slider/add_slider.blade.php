@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- category form start -->
            <form class="form-group" action="{{route('admin.save.slider')}}" method="post"  enctype="multipart/form-data" style="margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center h3 bg-info text-light ">Add Slider </legend>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Slider Name</label>
                <input class="form-control" type="text" name="slider_name" value="" placeholder="Enter Your Slider Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Slider Image</label>
                <input class="form-control" type="file" name="slider_image" value="" required>
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6">Slider Publication Status</label>
                <input class="" type="checkbox" name="slider_status" value="1" required>
              </div>
              <input class="btn btn-info float-right " type="submit" name="slider_submit" value="Slider Upload">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
