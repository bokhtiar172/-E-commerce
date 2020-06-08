@extends('user_dashbord')
@section('user_content')



    <!-- slider add satart -->


    <!-- main content start -->
          <section class="ml-3 mr-4">
            <div class="">
              <div class="row">

                  @include('user.user_partial.category')

                </div><!-- left side of content end -->
                <div class="col-md-9"><!-- right side of content -->
                  <h2 class="h4 text-center text-info">Brand's</h2>
                    <div class="">
                      <div class="row">

                        @foreach($product_search as $v_product)
                        <div class="col-md-3 col-sm-4 col-xs-12 col-lg-2">
                          <div class="card mb-2" style=" ">
                              <img height="170px;"  class="card-img-top" src="{{asset($v_product->product_image)}}" alt="Card image cap">
                                <strong class="text-center">{{$v_product->product_title}}</strong>
                                <strong class="text-center ">{{$v_product->product_price}}TK</strong>
                              <div class="form-inline mt-4 mb-4" style="margin-top: -5px" >
                                <a class="mr-auto ml-1"><img src="{{asset('img/e.png')}} " alt=""> </a>
                                <a href="{{url('user/search-cart-store/'.$v_product->id)}}" class="ml-auto mr-1"><img src="{{asset('img/c.png')}}" alt=""> </a>
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
