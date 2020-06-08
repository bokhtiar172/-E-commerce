@extends('user_dashbord')
@section('user_content')


@if(App\cart::total_item_cart() > 0)


<section class="container">

<table class="table text-center">
  <thead class="" style="background-color: #F4530D; color: white;">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Poruduct Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php  $total_amount=0; ?>
@foreach(App\cart::item_cart() as $v_item_cart)

    <tr>
      <th scope="row">#fshop{{$loop->index +1}}</th>
      <td>{{$v_item_cart->product->product_title}}</td>
      <td><img height="100px" width="100px" src="{{asset($v_item_cart->product->product_image)}}" alt=""> </td>
      <td>{{$v_item_cart->product->product_price * $v_item_cart->quantity}}</td>
            <?php
              $total_amount +=$v_item_cart->product->product_price*$v_item_cart->quantity;
             ?>
      <td>
          <form class="" action="{{url('user/update-quantity/'.$v_item_cart->id)}}" method="post">
            @csrf
            <input class="form-control " type="text" name="product_quantity" value="{{$v_item_cart->quantity}}">
            <input class="btn btn-info" type="submit" name="product_quantity_btn" value="Update">
          </form>
       </td>
       <td><a class="btn btn-danger" href="{{url('user/cart-delete/'.$v_item_cart->id)}}">Delete</a> </td>
    </tr>

@endforeach
  </tbody>
  </table>

      <?php $delevary_with_ammount=$total_amount+50 ?>
      <div class="row">
        <div class="col-md-8">
          <p class="text-center font-weight-bold"> Total Delevary Charge: <strong class="text-info">50TAKA</strong> </p>
          <p class="text-center font-weight-bold" colspan="7">Total Amount: <strong class="text-info">{{$total_amount}}TAKA</strong></p>
          <p class="text-center font-weight-bold">Delevary With Total Ammount:<strong class="text-info" >{{$delevary_with_ammount}}TAKA</strong>  </p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-info" href="#">Countinue Shopping</a>
          <a class="btn btn-danger" href="{{url('/user/cheeckout')}}">CheeckOut</a>
        </div>
      </div>

  <hr>







<br>
</section>
@else
<h4 class="text-center text-info">Your Cart is no Item pleace choose Product thankyou .....!</h4>
<a class="btn btn-info ml-5" href="#">ad</a>
@endif
@endsection
