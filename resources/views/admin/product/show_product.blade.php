@extends('admin_dashbord')
@section('admin_content')








              <table class="table table-light">
              <thead class="table-dark text-center">
                <tr>

                  <th scope="col">offer SL</th>
                  <th scope="col">  category_id</th>
                  <th scope="col">  brand_id</th>
                  <th scope="col">  product_image </th>
                  <th scope="col">  product_title</th>
                  <th scope="col">  product_price</th>
                  <th scope="col">  product_description</th>
                  <th scope="col">  product_size</th>
                  <th scope="col">  product_weight </th>

                  <th scope="col">  Status</th>
                </tr>
              </thead>

              <tbody class="text-center">
                @foreach($all_product as $v_product)
                <tr>
                  <th scope="row">{{$loop->index +1}}</th>
                  <td>{{$v_product->category_id}}</td>
                  <td>{{$v_product->brand_id}}</td>
                  <td><img height="80px" width="80px" src="{{asset($v_product->product_image)}}" alt=""> </td>
                  <td>{{$v_product->product_title}}</td>
                  <td>{{$v_product->product_price}}</td>
                  <td>{{$v_product->product_description}}</td>
                  <td>{{$v_product->product_size}}</td>
                  <td>{{$v_product->product_weight}}</td>


                  <td>
                    @if($v_product->product_status ==1)
                          <strong class="mr-3">Active</strong>
                          @else
                                <strong class="mr-3">Unactive</strong>
                    @endif


                    @if($v_product->product_status ==1)
                          <a class="btn btn-info" href="{{URL::to('admin/unactive_product/'.$v_product->id)}}">Unactive</a>
                          @else
                              <a class="btn btn-info" href="{{URL::to('admin/active_product/'.$v_product->id)}}">Active</a>
                    @endif




                    <a class="btn btn-success" href="{{URL::to('admin/edit_product/'.$v_product->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{URL::to('admin/delete_product/'.$v_product->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
              </table>


@endsection
