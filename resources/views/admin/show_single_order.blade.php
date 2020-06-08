@extends('admin_dashbord')
@section('admin_content')

<div class="row contianer">
  <div class="col-md-6 text-center">
    <h5 class="text-light bg-info">Reciver Info</h5>
    <h6 class="font-weight-bold"><strong>Recever Name: </strong> {{$order_id->reciver_name}}</h6>
    <h6 class="font-weight-bold"><strong>Recever Email:  </strong> {{$order_id->reciver_email}}</h6>
        <h6 class="font-weight-bold"><strong>Recever Phone:  </strong> {{$order_id->reciver_phone}}</h6>
  </div>
  <div class="col-md-6 text-center">
    <h5 class="text-light bg-info">Payment Info</h5>

    <h6 class="font-weight-bold"><strong>Pyment Name:</strong> {{$order_id->payment->payment_name}}</h6>
    <h6 class="font-weight-bold"><strong>Special Code:</strong> {{$order_id->code}}</h6>
  </div>
</div>









<table class="table text-center">
  <thead class="" style="background-color: #F4530D; color: white;">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Poruduct Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php  $total_amount=0; ?>
@foreach($order_id->cart as $v_cart)
    <tr>
      <th scope="row">#fshop{{$loop->index +1}}</th>
      <td>{{$v_cart->product->product_title}}</td>
      <td><img height="100px" width="100px" src="{{asset($v_cart->product->product_image)}}" alt=""> </td>
      <td>{{$v_cart->product->product_price * $v_cart->quantity}}</td>
            <?php
              $total_amount +=$v_cart->product->product_price*$v_cart->quantity;
             ?>
      <td>
          <form class="" action="{{url('user/update-quantity/'.$v_cart->id)}}" method="post">
            @csrf
            <input class="form-control " type="text" name="product_quantity" value="{{$v_cart->quantity}}">
            <input class="btn btn-info" type="submit" name="product_quantity_btn" value="Update">
          </form>
       </td>
    </tr>
@endforeach
  </tbody>
  <tr>
    <td class="text-center font-weight-bold" colspan="7">Total Amount: <strong class="text-info">{{$total_amount}}Taka</strong> </td>
  </tr>


</table>

<?php
    $paid=$order_id->is_paid;
    $complate=$order_id->is_complate;
 ?>
@if($paid==1)
  <strong class="btn btn-info">Paid</strong>
@else
  <a href="{{url('/admin/unpaid/'.$order_id->id)}}"><strong class="btn btn-danger">Unaid</strong></a>
@endif <!-- paid info end -->

@if($complate==1)
  <strong class="btn btn-info">Complate</strong>
@else
  <a href="{{url('/admin/uncomplate/'.$order_id->id)}}"><strong class="btn btn-danger">Uncomplate</strong></a>
@endif <!-- compalte info end -->
@endsection
