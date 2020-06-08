@extends('user_dashbord')
@section('user_content')


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

                    @foreach($brand as $v_brand)
                    <div class="col-md-2 col-sm-4 col-xs122 col-md-3 col-lg-2">
                      <a class="text-dark" style="text-decoration: none" href="{{url('user/show_product_brand_by_brand/'.$v_brand->id)}}">
                      <div class="card mb-2" style="">
                          <img height="140px"  class="card-img-top" src="{{asset($v_brand->brand_image)}}" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title text-center">{{$v_brand->brand_name}}</h5>
                          </div>
                      </div>
                    </a>
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
