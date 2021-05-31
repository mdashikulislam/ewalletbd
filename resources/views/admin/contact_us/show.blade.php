@extends('admin.app')
@section('main-content')
<div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>All Exchange Data Show</h2>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\Model\Frontend\ContactUs::orderby('id','asc')->get() as $contact_info)
                                <tr>
                                    
                                    <td>
                                        {{$contact_info->name}}
                                    </td>
                                    <td>
                                        {{$contact_info->email}}
                                    </td>
                                    <td>
                                        {{$contact_info->phone}}
                                    </td>
                                    <td>
                                        {{$contact_info->subject}}
                                    </td>
                                    <td>
                                        {{$contact_info->message}}
                                    </td>
                                    
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