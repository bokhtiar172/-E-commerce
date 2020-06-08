@extends('admin_dashbord')
@section('admin_content')


<div class="row">


  <div class="col-md-3 ">
    <div class="card bg-success"style="height: 140px; line-height: 140px;      " >
      <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i><span class="ml-1 font-weight-bold text-light">TOTAL ORDER:34</span>  </span>
    </div>
  </div><!--end of col-->


  <div class="col-md-3">
    <div class="card bg-info"style="height: 140px; line-height: 140px;      " >
      <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i><span ></span><span class="ml-1 font-weight-bold"> TOTAL AMMOUNT:43 </span>
    </div>
  </div><!--end of col-->



  <div class="col-md-3">
    <div class="card bg-warning"style="height: 140px; line-height: 140px;      " >
      <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i> TOTAL PRODUCTS:342 </span>
    </div>
  </div><!--end of col-->


  <div class="col-md-3">
    <div class="card bg-primary"style="height: 140px; line-height: 140px;      " >
      <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i>TOTAL SPONCER:23</span>
    </div>
  </div><!--end of col-->




</div><!-- end of part1 in dashbord-->

<!-- order table stat-->
    <div class="mt-2">
      <div class="row">
        <div class="col-md-9">
          <!-- navbar for searc admin order table start -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Order Table</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          </div>
          </nav>

          <!-- start all order show in database -->
            <?php
              $all_orders=DB::table('orders')
                        ->get();
             ?>
          <!-- end all order show in database -->
          <!-- navbar for searc admin order table end -->
          <table class="table text-center table-dark  text-light" border="1">
            <thead  >
              <tr>
                <th>Order ID</th>
                <th>Reciver Name</th>
                <th>Reciver Phone</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($all_orders as $v_order)
              <tr>
                <td>#Fshop1{{$loop->index +1}}</td>
                <td>{{$v_order->reciver_name}}</td>
                <td>{{$v_order->reciver_phone}}</td>
                <td>
                  <a class="btn btn-success" href="#">Order Done</a>
                  <a class="btn btn-info" href="#">View</a>
                  @if($v_order->is_paid==1)
                  <strong class="btn btn-info">Paid</strong>
                  @else
                  <strong class="btn btn-danger">Unpaid</strong>
                  @endif

                  @if($v_order->is_complate==1)
                  <strong class="btn btn-info">Successfull</strong>
                  @else
                  <strong class="btn btn-danger">Unsuccessfull</strong>
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col-md-3">
          <div class="bg-secondary">
            <div class="card  text-light" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title text-dark">Other's Country</h5>
              <img class="card-img-top" height="110px;" src="stat.png" alt="Card image cap">
              <p class="card-text text-center"><b>34534Taka</b> </p>

            </div>
          </div>
          </div>

      <div class="card" style="width: 18rem;">
        <h5 class="card-title">Product Sell</h5>
      <div class="progress">
        <div class="progress-bar mt-1" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
      </div>
      <div class="progress">
        <div class="progress-bar mt-1" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
      </div>
      <div class="progress">
        <div class="progress-bar mt-1" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
      </div>
      <div class="progress">
        <div class="progress-bar mt-1" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">99%</div>
      </div>
          </div>
        </div>
      </div>
    </div>

    @endsection
