@extends('admin_dashbord')
@section('admin_content')


<?php use Carbon\Carbon;
      $dt=new Carbon();
      $date=Carbon::now()->addDays()->format('Y-m-d');
      $total_amount=0;
      $total_item=0;
 ?>




<table class="table table-light">
  <thead class="table-dark">
    <th>Product SL</th>
    <th>product Name</th>
    <th>product Image</th>
    <th>product Price</th>
  </thead>
  <tbody>
    @foreach($order as $v_order)
    @if($v_order->date ==$date)
        @foreach($v_order->cart as $v_cart)
        <tr>
          <th scope="row">#fshop{{$loop->index +1}}</th>
          <td>{{$v_cart->product->product_title}}</td>
          <td><img height="100px" width="100px" src="{{asset($v_cart->product->product_image)}}" alt=""> </td>
          <td>{{$v_cart->product->product_price * $v_cart->quantity}}</td>
                <?php
                  $total_amount +=$v_cart->product->product_price*$v_cart->quantity;
                  $total_item +=$v_cart->quantity;
                 ?>

        </tr>




        @endforeach
    @else

    @endif
    @endforeach
  </tbody>
</table>
<div class="row">
  <div class="col-md-8">

  </div>
  <div class="col-md-4">
    <p><strong>Total Item Sell :</strong>{{$total_item}} Product's</p>
    <p><strong>Total Ammount:</strong>{{$total_amount}} TAKA</p>
  </div>
</div>


@endsection
