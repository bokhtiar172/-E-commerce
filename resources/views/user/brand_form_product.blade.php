

@extends('user_dashbord')
@section('user_content')


<!-- main content start -->
      <section class="ml-3 mr-4">
        <div class="">
          <div class="row">

              @include('user.user_partial.category')

            </div><!-- left side of content end -->
            <div class="col-md-9"><!-- right side of content -->
              <h2 class="h4 text-center text-info">Product's</h2>
                <div class="">
                  <div class="row">

                    @foreach($product as $v_product)
                    <div class="col-md-3 col-sm-4 col-xs-12 col-lg-2">
                      <div class="card mb-2" style=" ">
                          <img height="150px;"  class="card-img-top" src="{{asset($v_product->product_image)}}" alt="Card image cap">
                            <strong class="text-center">{{$v_product->product_title}}</strong>
                            <strong class="text-center ">{{$v_product->product_price}}TK</strong>
                          <div class="form-inline mt-4 mb-4" style="margin-top: -5px" >
                            <a href="{{url('user/product-show/'.$v_product->id)}}" class="mr-auto ml-1"> <img src="{{asset('img/e.png')}} " alt=""> </a>
                            <a href="{{url('user/wishlists/'.$v_product->id)}}"> <img src="{{asset('img/wish.png')}}" alt=""> </a>
                            <a href="{{url('user/cart-store/'.$v_product->id)}}" class="ml-auto mr-1"><img src="{{asset('img/c.png')}}" alt=""> </a>
                          </div>
                      </div>
                    </div>
                    @endforeach


                  </div>
                </div>
            </div><!-- right side of content end -->
          </div>
        </div>
      </section>
<!-- main content end -->

@endsection
