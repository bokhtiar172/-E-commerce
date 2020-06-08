@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- category form start -->
            <form class="form-group" action="{{route('admin.save.sponcer')}}" method="post"  enctype="multipart/form-data" style="background-color: #34495E; margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center text-light">Add Sponcer </legend>
              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your Sponcer Name</label>
                <input class="form-control" type="text" name="sponcer_name" value="" placeholder="Enter Your Category Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-light" >Enter Your Sponcer Image</label>
                <input class="form-control" type="file" name="sponcer_image" value="" required>
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-light">Sponcer Publication Status</label>
                <input class="" type="checkbox" name="sponcer_status" value="1" required>
              </div>
              <input class="btn btn-info" type="submit" name="sponcer_submit" value="sponcer Upload">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
