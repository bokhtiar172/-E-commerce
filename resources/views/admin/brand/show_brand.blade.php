@extends('admin_dashbord')
@section('admin_content')



              <table class="table table-light">
              <thead class="table-dark text-center">
                <tr>
                  <th scope="col">Brand SL</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Brand Name</th>
                  <th scope="col">Brand Image</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>

              <tbody class="text-center">
                @foreach($all_brand as $v_brand)
                <tr>
                  <th scope="row">{{$loop->index +1}}</th>
                  <td class="font-weight-bold">{{$v_brand->category->category_name}}</td>
                  <td class="font-weight-bold">{{$v_brand->brand_name}}</td>
                  <td><img height="80px" width="80px" src="{{asset($v_brand->brand_image)}}" alt=""> </td>
                  <td>
                    @if($v_brand->brand_status ==1)
                          <strong class="mr-3">Active</strong>
                          @else
                                <strong class="mr-3">Unactive</strong>
                    @endif


                    @if($v_brand->brand_status ==1)
                          <a class="btn btn-info" href="{{URL::to('admin/unactive_brand/'.$v_brand->id)}}">Unactive</a>
                          @else
                              <a class="btn btn-info" href="{{URL::to('admin/active_brand/'.$v_brand->id)}}">Active</a>
                    @endif




                    <a class="btn btn-success" href="{{URL::to('admin/edit_brand/'.$v_brand->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{URL::to('admin/delete_brand/'.$v_brand->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
              </table>


@endsection
