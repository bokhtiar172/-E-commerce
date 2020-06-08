@extends('admin_dashbord')
@section('admin_content')


      <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-5"><!-- category form start -->
            <form class="form-group" action="{{route('admin.save.payment')}}" method="post"  enctype="multipart/form-data" style="margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center h3 bg-info text-light ">Add Payment </legend>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Payment Name</label>
                <input class="form-control" type="text" name="payment_name" value="" placeholder="Enter Your payment Name" required >
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your payment Phone Number</label>
                <input class="form-control" type="number" name="payment_phone" placeholder="Enter your Phone number" value="" required>
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your payment Delevary Charge</label>
                <input class="form-control" type="number" name="payment_delevary_charge" value="" placeholder="enter your delevary charge" required>
              </div>
              <div class="">
                <label for="" class="font-weight-bold text-dark h6">payment Publication Status</label>
                <input class="" type="checkbox" name="payment_status" value="1" required>
              </div>
              <input class="btn btn-info float-right " type="submit" name="Payment_submit" value="Payment Upload">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
