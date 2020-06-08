@extends('user_dashbord')
@section('user_content')
<section class="container">

<table class="table text-center">
  <thead class="" style="background-color: #F4530D; color: white;">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Poruduct Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
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

       <td><a class="btn btn-danger" href="{{url('/user/cart-delete/'.$v_item_cart->id)}}">Delete</a> </td>
    </tr>
@endforeach
  </tbody>
  <tr>
    <td class="text-center font-weight-bold" colspan="7">Total Amount: <strong class="text-info">{{$total_amount+50}}Taka</strong> </td>
  </tr>


</table>
<div class="float-right">
  <a class="btn btn-info" href="#">Countinue Shopping</a>
  <a class="btn btn-danger" href="{{url('/user/cheeckout')}}">CheeckOut</a>
</div>
<br>
<br>
</section>

<!-- order area -->

    <div class="row">
      <div class="col-md-4">

      </div>
              <div class="col-md-4"><!-- start order -->
                <h4 class="text-center text-light bg-info">Order Conform</h4>
                <form class="" action="{{url('user/save-order')}}" method="post">
                  @csrf

                  <div class="">
                    <label class="text-dark h5 font-weight-bold" for="">Reciver Name</label>
                    <input class="form-control" type="text" name="reciver_name" value="">
                  </div>


                  <div class="">
                    <label class="text-dark h5 font-weight-bold" for="">Reciver Phone</label>
                    <input class="form-control" type="number" name="reciver_phone" value="" required>
                  </div>

                  <div class="">
                    <label class="text-dark h5 font-weight-bold" for="">Reciver Email</label>
                    <input class="form-control" type="email" name="reciver_email" value="">
                  </div>

                  <div class="">
                    <label class="text-dark h5 font-weight-bold" for="">Reciver Shipping Address</label>
                    <input class="form-control" type="text" name="reciver_shipping_address" value="">
                  </div>

                  <div class="">
                    <label class="text-dark h5 font-weight-bold" for="">Message</label>
                    <textarea class="form-control" name="message" rows="8" cols="40"></textarea>
                  </div>
                  <?php
                      $all_payment=DB::table('payments')
                            ->where('payment_status',1)
                            ->get();
                   ?>

                  <div class="">

                    <label class="text-dark h5 font-weight-bold" for="">Pyment Name</label>
                    <select class="form-control" name="payment">
                      @foreach($all_payment as $v_payment)
                      <option value="{{$v_payment->id}}">{{$v_payment->payment_name}}</option>
                      @endforeach
                    </select>





                    <button type="button" id="hide" name="button">ad</button>
                  </div>

                                        <!-- area of payment start -->

                                            <div id="first" style="display: none; " >
                                              asdkjfasdjf
                                            </div>
                                        <!-- area of payment end -->
                                        <script type="text/javascript">
                                          $(document).ready(function(){
                                            $('#hide').click(function(){
                                              $('#first').show();
                                            });
                                          });
                                        </script>

                  <div class="">
                    <label class="text-dark h5 font-weight-bold" for="">Special Code for Transection</label>
                    <input class="form-control" type="number" name="code" value="">
                  </div>

                  <input class="btn btn-info" type="submit" name="order_submit" value="Order Conform">
                </form>
              </div><!-- end order -->
      <div class="col-md-4">

      </div>
    </div>




@endsection
