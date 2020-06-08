
<section>
  <?php
      $offer_product_show=DB::table('products')
                                ->where('product_status',1)
                                ->where('product_role_id',2)
                                ->paginate(6);
   ?>



  <!-- flash sell start -->
  <section class="ml-3">
    <h3 class="text-dark text-center">Offer's</h3>
    <div class="row ml-2 mr-3">
      @foreach($offer_product_show as $v_offer_product_show)
      <div class="col-md-2 col-sm-4 col-xs-12 col-md-3 col-lg-2">
        <div class="card mb-2" style=" ">
            <img height="170px;"  class="card-img-top" src="{{asset($v_offer_product_show->product_image)}}" alt="Card image cap">
              <strong class="text-center">{{$v_offer_product_show->product_title}}</strong>
              <strong class="text-center" >{{$v_offer_product_show->product_parcentage}}%</strong>
              <strong class="text-center ">{{$v_offer_product_show->product_parcentage_price}}TK |
                <strong class="text-center" style="text-decoration: line-through red;">{{$v_offer_product_show->product_price}}TK</strong>
              </strong>
            <div class="form-inline mt-4 mb-4" style="margin-top: -5px" >
              <a href="{{url('user/product-show/'.$v_offer_product_show->id)}}" class="mr-auto ml-1"> <img src="{{asset('img/e.png')}} " alt=""> </a>
              <a href="{{url('user/wishlists/'.$v_offer_product_show->id)}}"> <img src="{{asset('img/wish.png')}}" alt=""> </a>
              <a href="{{url('user/cart-store/'.$v_offer_product_show->id)}}" class="ml-auto mr-1"><img src="{{asset('img/c.png')}}" alt=""> </a>
            </div>
        </div>
      </div>
      @endforeach
      {{$offer_product_show->links()}}
   </div>

  </sectio class="mr-auto ml-1"n>
  <!-- pagination add sta mr-1rt -->
  <nav a class="ml-auto"ria-label="Page navigation example mr-2">
    <ul class="pagination justify-content-end">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
  <!-- pagination add end -->
</section>
