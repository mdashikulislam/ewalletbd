@extends('admin.app')
@section('main-content')
<div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>Notice Data Show</h2>
            <!-- <a href="" class="btn btn-outline-primary btn-sm text-uppercase">
                <i class="fa fa-plus"></i> Add Event/Campaign
            </a> -->
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
                                    <th>Notice</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\Notice::orderby('id','asc')->get() as $notice)
                                <tr>
                                    
                                    <td>
                                        {{$notice->notice}}
                                    </td>
                                    
                                    <td><a href="{{route('notice.edit',$notice->id)}}"  class="btn btn-success">Edit</a></td>
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