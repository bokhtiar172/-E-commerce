@extends('admin_dashbord')
@section('admin_content')



              <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">sponcer SL</th>
                  <th scope="col">sponcer Name</th>
                  <th scope="col">sponcer Image</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>

              <tbody>
                @foreach($all_sponcer as $v_sponcer)
                <tr>
                  <th scope="row">{{$loop->index +1}}</th>
                  <td>{{$v_sponcer->sponcer_name}}</td>
                  <td>{{$v_sponcer->sponcer_image}}</td>
                  <td>
                    @if($v_sponcer->sponcer_status ==1)
                          <strong class="mr-3">Active</strong>
                          @else
                                <strong class="mr-3">Unactive</strong>
                    @endif


                    @if($v_sponcer->sponcer_status ==1)
                          <a class="btn btn-info" href="{{URL::to('admin/unactive_sponcer/'.$v_sponcer->id)}}">Unactive</a>
                          @else
                              <a class="btn btn-info" href="{{URL::to('admin/active_sponcer/'.$v_sponcer->id)}}">Active</a>
                    @endif





                    <a class="btn btn-danger" href="{{URL::to('admin/delete_sponcer/'.$v_sponcer->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
              </table>


@endsection
