@extends('frontend.layouts.app')
@section('content')
    <div class="convert-col" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="convert">
                        <table class="table table-bordered">
                            <tr>
                                <td>You Send</td>
                                <td>{{$data['fromValue'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['from']).' ('.\App\Http\Helpers\Helper::getWalletNameById($data['from']).')'}}</td>
                            </tr>
                            <tr>
                                <td>Fee</td>
                                <td>{{$data['fee'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['from'])}}</td>
                            </tr>
                            <tr>
                                <td>Charge</td>
                                <td>{{$data['charge'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['from'])}}</td>
                            </tr>
                            <tr>
                                <td>Total Pay</td>
                                <td>{{$data['payable'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['from'])}}</td>
                            </tr>
                            <tr>
                                <td>You Receive</td>
                                <td>{{$data['toValue'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['to']).' ('.\App\Http\Helpers\Helper::getWalletNameById($data['to']).')'}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
