@extends('frontend.layouts.app')
@section('content')
<div class="convert-col" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                </div>
                </div>
                <div class="row">
                	<div class="col-md-12 text-center">
                		<div class="card card-default">
                           <div class="card-header card-header-border-bottom d-flex justify-content-between">
                		<h3 style="color: red;">Thanks you for your transaction Mr/Mrs <b>{{App\Http\Helpers\Helper::getUserName($tnx_value->user_id)}}</b> and <br>your tnx_number/Account Number is <b>{{$tnx_value->tnx_number}}</b>

                        Your Order is in Procesing and after confirmation your will see in our dash board.

                		</h3>
                	</div>
                </div>
                	</div>
                </div>
            </div>
@endsection