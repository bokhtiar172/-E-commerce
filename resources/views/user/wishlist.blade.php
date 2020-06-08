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
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody class="text-center">
@foreach(App\wishlist::all_wishlist_show() as $v_wishlist)
    <tr>
      <th scope="row">#fshop{{$loop->index +1}}</th>
      <td>{{$v_wishlist->product->product_title}}</td>
      <td><img height="100px" width="100px" src="{{asset($v_wishlist->product->product_image)}}" alt=""> </td>
      <td>{{$v_wishlist->product->product_price}}</td>
      <td><a class="btn btn-info" href="{{url('user/cart-store/'.$v_wishlist->product->id)}}">ADD TO CART</a>
      <a class="btn btn-danger" href="{{url('user/wishlist-delete/'.$v_wishlist->id)}}">Delete</a> </td>
    </tr>
@endforeach
  </tbody>
  </table>



  <hr>







<br>
</section>
@endsection
