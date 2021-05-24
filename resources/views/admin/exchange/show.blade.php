@extends('admin.app')
@section('main-content')
<div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>All Exchange Data Show</h2>
            <a href="" class="btn btn-outline-primary btn-sm text-uppercase">
                <i class="fa fa-plus"></i> Add Currency Rate
            </a>
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
                                    <th>Username</th>
                                    <th>Send</th>
                                    <th>Receive</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\Model\Frontend\TnxValue::orderby('id','desc')->get() as $tnx_value)
                                <tr>
                                    <td>{{App\Http\Helpers\Helper::getUserName($tnx_value->user_id)}}</td>
                                    <td>
                                        <!-- <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt=""> -->

                                        {{App\Http\Helpers\Helper::getWalletNameById($tnx_value->send_you_base_wallets_id)}}
                                    </td>
                                    <td>
                                        <!-- <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt=""> -->
                                        {{App\Http\Helpers\Helper::getWalletNameById($tnx_value->send_to_base_wallets_id)}}
                                    </td>
                                    <td>{{$tnx_value->send_to}} {{$tnx_value->send_to_type}}</td>
                                    <td>{{ date('D M Y', strtotime($tnx_value->created_at)) }}</td>
                                    <td>{{ date('h:i a', strtotime($tnx_value->created_at)) }}</td>

                                   @if($tnx_value->process == 1 and $tnx_value->success == 0 and $tnx_value->rejected == 0)
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;">Processing</span></td>
                                    @elseif($tnx_value->process == 1 and $tnx_value->success == 1 and $tnx_value->rejected == 0)
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;">Success</span></td>
                                    @elseif($tnx_value->process == 1 and $tnx_value->success == 0 and$tnx_value->rejected == 1)
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;">Rejected</span></td>
                                    @endif

                                    <td><a href="{{route('change.status.exchange',$tnx_value->id)}}" ><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #0000FF;color: #fff;">Change Status</span></a></td>
                                    
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