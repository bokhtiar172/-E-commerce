@extends('admin_dashbord')
@section('admin_content')


      <div class="row">

        <div class="col-md-11 justiy-content-center"><!-- brand form start -->
            <form class="form-group" action="{{route('admin.save.flashsell')}}" method="post"  enctype="multipart/form-data" style=" margin-top: 10%; border-radius: 5px;">
              @csrf
              <legend class="text-center text-light bg-info">Add flashsell </legend>

              <div class="row">
                <div class="col-md-6"><!--left side -->


                                <div class="">
                                  <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Name</label>
                                  <input class="form-control" type="text" name="product_title" value="" placeholder="Enter Your flashsell Name" required >
                                </div>


                                <div class="">
                                  <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Image</label>
                                  <input class="form-control" type="file" name="product_image" value="" required>
                                </div>
                                <hr>
                                <div class="">
                                  <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Price</label>
                                  <input class="form-control" type="number" name="product_price" value="" placeholder="Enter Your flashsell price" required >
                                </div>


                                <div class="">
                                  <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell discount parcentage</label>
                                  <input class="form-control" type="text" name="product_parcentage" value="" placeholder="Enter Your flashsell discount parcentage" required >
                                </div>




                </div>

                <div class="col-md-6"><!--right side -->

                                <!-- category strart --->
                                    <?php
                                      $category=DB::table('categories')
                                            ->where('category_status',1)
                                            ->get();
                                     ?>
                                <!--category end -->

                                <!-- brand strart --->
                                    <?php
                                      $brand=DB::table('brands')
                                            ->where('brand_status',1)
                                            ->get();
                                     ?>
                                <!--brand end -->

                                <div class="">
                                  <label for="" class="font-weight-bold text-dark h6" >Enter Your Category</label>
                                  <select class="form-control" name="category_id">
                                      @foreach($category as $v_category)
                                          <option value="{{$v_category->id}}">{{$v_category->category_name}}</option>
                                      @endforeach
                                  </select>
                                </div>

                                <div class="">
                                  <label for="" class="font-weight-bold text-dark h6" >Enter Your Brand</label>
                                  <select class="form-control" name="brand_id">
                                      @foreach($brand as $v_brand)
                                          <option value="{{$v_brand->id}}">{{$v_brand->brand_name}}</option>
                                      @endforeach
                                  </select>
                                </div>
                                <hr>


                                              <div class="">
                                                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Product size</label>
                                                <input class="form-control" type="text" name="product_size" value="" placeholder="Enter Your flashsell Name" required >
                                              </div>


                                              <div class="">
                                                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Product Weight</label>
                                                <input class="form-control" type="text" name="product_weight" value="" required>
                                              </div>


                </div>
              </div>


              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your Short Description</label>

                  <textarea class="form-control"  name="product_description"placeholder="Enter Your flashsell short Description" rows="8" cols="80" required></textarea>
              </div>







              <div class="">

                <input class="" type="hidden" name="product_role_id" value="3" required >
              </div>

              <div class="">
                <label for="" class="font-weight-bold text-dark h6" >Enter Your flashsell Status</label>
                <input class="" type="checkbox" name="product_status" value="1" required >
              </div>

              <input class="btn btn-info float-right" type="submit" name="flashsell_submit" value="flashsell Upload">
            </form>
        </div><!-- category form end -->


        <div class="col-md-5">

        </div>
      </div>


@endsection
