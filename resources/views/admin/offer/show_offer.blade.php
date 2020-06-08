@extends('admin_dashbord')
@section('admin_content')








              <table class="table table-light">
              <thead class="table-dark text-center">
                <tr>
                  <th scope="col">offer SL</th>
                  <th scope="col">  Name</th>
                  <th scope="col">  Image</th>
                  <th scope="col">  Description</th>
                  <th scope="col">  Original price</th>
                  <th scope="col">  Parcentage</th>
                  <th scope="col">  Discount Price</th>
                  <th scope="col">  weight</th>
                  <th scope="col">  size</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>








              <tbody class="text-center">
                @foreach($all_offer as $v_offer)
                <tr>
                  <th scope="row">{{$loop->index +1}}</th>
                  <td class="font-weight-bold">{{$v_offer->product_title}}</td>
                  <td><img height="80px" width="80px;" src="{{asset($v_offer->product_image)}}" alt=""> </td>
                  <td class="font-weight-bold">{{$v_offer->product_description}}</td>
                  <td class="font-weight-bold">{{$v_offer->product_price}}</td>
                  <td class="font-weight-bold">{{$v_offer->product_parcentage}}%</td>
                  <td class="font-weight-bold">{{$v_offer->product_parcentage_price}}</td>
                  <td class="font-weight-bold">{{$v_offer->product_size}}</td>
                  <td class="font-weight-bold">{{$v_offer->product_weight}}</td>
                  <td>
                    @if($v_offer->product_status ==1)
                          <strong class="mr-3">Active</strong>
                          @else
                                <strong class="mr-3">Unactive</strong>
                    @endif


                    @if($v_offer->product_status ==1)
                          <a class="btn btn-info" href="{{URL::to('admin/unactive_offer/'.$v_offer->id)}}">Unactive</a>
                          @else
                              <a class="btn btn-info" href="{{URL::to('admin/active_offer/'.$v_offer->id)}}">Active</a>
                    @endif




                    <a class="btn btn-success" href="{{URL::to('admin/edit_offer/'.$v_offer->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{URL::to('admin/delete_offer/'.$v_offer->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
              </table>


@endsection
