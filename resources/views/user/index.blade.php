@extends('user_dashbord')
@section('user_content')



    <!-- slider add satart -->
    <style media="screen">
      .i{
        max-width:100%;
        background-size: cover;
        height: 480px;
        overflow:hidden;
      }

    </style>





    <section class="mt-1">
      <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <!-- slider all show  start -->
      <?php
        $all_slider=DB::table('sliders')
                  ->where('slider_status',1)
                  ->get();
                  $i=0;
                  foreach ($all_slider as $v_slider) {
                    if ($i==1) {


       ?>
    <!-- slider all show  end -->
    <div class="carousel-item active">
    <?php }else { ?>
      <div class="carousel-item ">
        <?php } ?>
      <img   class="d-block w-100 i" src="{{asset($v_slider->slider_image)}}" alt="First slide">

          <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark text-weight-bold"><b> Per Kg 40% Discount</b></h5>
                <img src="#" alt="">
          </div>
    </div>
  <?php $i++; } ?>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



    </section>
    <hr>
    <!-- slider add end -->
                <!-- flashsell start  -->
                  @include('user.user_partial.flashsell')
                <!-- flashsell end -->

    <hr>
    <!-- flash sell end -->
          @include('user.user_partial.offer_product')

    <!-- Offer product  start -->

    <hr>
    <!-- offer product  end -->



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

                        @include('user.user_partial.brand')


                      </div>
                    </div>
                </div><!-- right side of content end -->
              </div>
            </div>
          </section>
    <!-- main content end -->




@endsection
