
<!-- start query of category -->
            <?php

                  $all_category=DB::table('categories')
                                ->where('category_status',1)
                                ->get();
             ?>
<!-- end quesry of category -->

<div class="col-md-3 text-center"><!-- left side of content -->
  <h2 class="h4 text-center text-info">Category's</h2>
  <div class="list-group">
    @foreach($all_category as $v_category)
      <a href="{{url('/user/category_show_id_by_id/'.$v_category->id)}}" class="list-group-item list-group-item-action">{{$v_category->category_name}} <img height="30px;" width="30px;" height="30px" width="30px;" src="{{asset($v_category->category_image)}}" alt=""> </a>
    @endforeach

</div><!-- end of categorys-->
