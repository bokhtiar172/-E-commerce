@extends('admin_dashbord')
@section('admin_content')
<!-- order table stat-->
    <div class="mt-2">
      <div class="row ">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
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
          <!-- navbar for searc admin order table end -->
          <table class="table text-center table-dark  text-light" border="1">
            <thead  >
              <tr>
                <th>Order ID</th>
                <th>Reciver Name</th>
                <th>Reciver Phone</th>
                <th>Reciver E-mail</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($order as $v_order)
              <tr>
                <td>#Fshop{{$loop->index +1}}</td>
                <td>{{$v_order->reciver_name}}</td>
                <td>{{$v_order->reciver_phone}}</td>
                <td>{{$v_order->reciver_email}}</td>
                <td>
                  <a class="btn btn-success" href="#">Order Done</a>
                  <a class="btn btn-info" href="{{url('admin/single-view-product/'.$v_order->id) }}">View</a>
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

              <?php session(['user_id'=>$v_order->user_id]) ?>
              @endforeach

            </tbody>
          </table>
        </div>
        <div class="col-md-1">

        </div>
</div>
@endsection
