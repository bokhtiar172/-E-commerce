
<!-- start query of category -->
            <?php

                  $all_brand=DB::table('brands')
                                ->where('brand_status',1)
                                ->get();
             ?>
<!-- end quesry of category -->
@foreach($all_brand as $v_brand)
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
