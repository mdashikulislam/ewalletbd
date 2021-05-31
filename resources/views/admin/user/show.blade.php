@extends('admin.app')
@section('main-content')
<div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>User Data Show</h2>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

           <div class="table-wrapper-scroll-y my-custom-scrollbar" style="margin-top: 20px;">
                            <table class="table table-bordered table-hover">
                    <thead>
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>User Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\User::orderby('id','desc')->get() as $key => $user)
                                <tr>
                                	<td>
                                		{{$key +1 }}
                                	</td>

                                    <td>
                                        {{$user->first_name}} {{$user->last_name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->phone}}
                                    </td>
                                    <td>
                                        @if($user->is_info_verified == 'verified')
                                      <button class="btn btn-success btn-sm">Active</button>
                                        @else
                                        <button class="btn btn-danger btn-sm">InActive</button>
                                        @endif

                                    </td>

                                    <td><a href="{{route('user.edit',$user->id)}}"  class="btn btn-success">Edit</a></td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                </div>
            </div>

        </div>

        </div>
        <style>
            table.dataTable.nowrap th, table.dataTable.nowrap td{
                vertical-align: middle;
                color: #000;
            }
        </style>


@endsection
