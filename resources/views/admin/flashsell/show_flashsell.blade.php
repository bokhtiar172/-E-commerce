@extends('admin_dashbord')
@section('admin_content')






              <h4 class="text-center text-light bg-info">Flashsell All Product List</h4>

              <table class="table table-light">
              <thead class="table-dark">
                <tr>
                  <th scope="col">flashsell SL</th>
                  <th scope="col">  Name</th>
                  <th scope="col">  Image</th>
                  <th scope="col">  Description</th>
                  <th scope="col">  Original price</th>
                  <th scope="col">  Parcentage</th>
                  <th scope="col">  Discount Price</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>


              <tbody>
                @foreach($all_flashsell as $v_flashsell)
                <tr>
                  <th scope="row">{{$loop->index +1}}</th>
                  <td class="font-weight-bold ">{{$v_flashsell->product_title}}</td>
                  <td><img height="80px;" width="80px;" src="{{asset($v_flashsell->product_image) }}" alt="awr"> </td>
                  <td class="font-weight-bold ">{{$v_flashsell->product_description}}</td>
                  <td class="font-weight-bold ">{{$v_flashsell->product_price}}</td>
                  <td class="font-weight-bold ">{{$v_flashsell->product_parcentage}}%</td>
                  <td class="font-weight-bold ">{{$v_flashsell->product_parcentage_price}}</td>
                  <td>
                    @if($v_flashsell->product_status ==1)
                          <strong class="mr-3 btn btn-dark">Active</strong>
                          @else
                                <strong class="mr-3 btn btn-dark">Unactive</strong>
                    @endif


                    @if($v_flashsell->product_status ==1)
                          <a class="btn btn-info" href="{{URL::to('admin/unactive_flashsell/'.$v_flashsell->id)}}">Unactive</a>
                          @else
                              <a class="btn btn-info" href="{{URL::to('admin/active_flashsell/'.$v_flashsell->id)}}">Active</a>
                    @endif




                    <a class="btn btn-success" href="{{URL::to('admin/edit_flashsell/'.$v_flashsell->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{URL::to('admin/delete_flashsell/'.$v_flashsell->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
              </table>


@endsection
