@extends('admin_dashbord')
@section('admin_content')



              <table class="table table-light">
              <thead class="table-dark text-center">
                <tr>
                  <th scope="col">Category SL</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Category Image</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>

              <tbody class="text-center">
                @foreach($all_category as $v_category)
                <tr>
                  <th scope="row">{{$loop->index +1}}</th>
                  <td class="font-weight-bold" >{{$v_category->category_name}}</td>
                  <td><img height="80px;" width="80px;" src="{{asset($v_category->category_image)}}" alt=""> </td>
                  <td>
                    @if($v_category->category_status ==1)
                          <strong class="mr-3 btn btn-dark">Active</strong>
                          @else
                                <strong class="mr-3 btn btn-dark">Unactive</strong>
                    @endif


                    @if($v_category->category_status ==1)
                          <a class="btn btn-info" href="{{URL::to('admin/unactive_category/'.$v_category->id)}}">Unactive</a>
                          @else
                              <a class="btn btn-info" href="{{URL::to('admin/active_category/'.$v_category->id)}}">Active</a>
                    @endif




                    <a class="btn btn-success" href="{{URL::to('admin/edit_category/'.$v_category->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{URL::to('admin/delete_category/'.$v_category->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
              </table>


@endsection
