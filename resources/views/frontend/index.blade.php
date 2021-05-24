@extends('frontend.layouts.app')
@section('content')
    <div class="blog-col">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="exchange-col" style="background: #ff4b00;margin-top: 30px;padding: 30px;border-radius:5px ">
                        <div class="notice">
                            <p style="color: #fff;display: flex;justify-content: center;">Send = আপনি যা দিবেন Receive = আপনি যা পেতে চান (Submit পেজে Total Amount ত যে পরিমান টাকা/ডলার আসে তা পরিশোধ করতে হবে ) ১০০ এর উপর অর্ডারে প্রতি ডলারে ১ টাকা , ৩০০ উপর অর্ডারে প্রতি ডলারে ২ টাকা Discount দেওয়া হচ্ছে।অর্ডার করার পর এই Discount পাবেন ।তাই দেরি না করে এখনি অর্ডার করুন।</p>
                            <h1 style="margin-top:30px;color: #fff;display: flex;justify-content: center;font-weight:bold;font-size: 24px;">30 USD এর কম নেটেলার, স্ক্রিল অর্ডার করল ১২০ টাকা করে প্রতি ডলার ।</h1>
                        </div>
                        <div class="service">
                        </div>
                        <div class="currency-col">
                            <form action="{{route('convert')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="send-logo">
                                            <div class="img">
                                                <img src="{{asset('frontend/img/bkash.png')}}" alt="">
                                            </div>
                                            <h1><i class="fa fa-arrow-down"></i>You send</h1>
                                        </div>
                                        <div class="change-currency">
                                            <select class="form-control" name="from" id="from">
                                                {!! \App\Http\Helpers\Helper::getCurrencyDropdown(0,'ASC') !!}
                                            </select>
                                            <input id="from_value" name="from_value" type="text" class="form-control" value="1">
                                        </div>
                                        <div class="rate">
                                            <h2 id="exchange_text"></h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="send-logo">
                                            <div class="img">
                                                <img src="{{asset('frontend/img/bkash.png')}}" alt="">
                                            </div>
                                            <h1><i class="fa fa-arrow-up"></i>You Receive</h1>
                                        </div>
                                        <div class="change-currency">
                                            <select class="form-control" name="to" id="to">
                                                {!! \App\Http\Helpers\Helper::getCurrencyDropdown() !!}
                                            </select>
                                            <input readonly name="to_value" id="to_value" type="text" class="form-control">
                                        </div>
                                        <div class="rate">
                                            <div class="rate">
                                                <h2 id="reserve_value"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="exchange-btn">
                                            <div class="button">
                                                <div class="button-effict"></div>
                                                <a id="submit_btn" href="">Exchange</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="advert" style="margin-top: 30px;">
                        <img style="height: auto;width: 100%" src="{{asset('frontend/img/970x90.jpg')}}" alt="">
                    </div>
                    <div class="latest-col" style="margin-top: 30px;">
                        <div class="heading-col">
                            <h2>Latest exchanges</h2>
                            <div class="border"></div>
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar" style="margin-top: 20px;">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Send</th>
                                    <th>Receive</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Time</th>
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
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Processing</span></td>
                                    @elseif($tnx_value->process == 1 and $tnx_value->success == 1 and $tnx_value->rejected == 0)
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                                    @elseif($tnx_value->process == 1 and $tnx_value->success == 0 and$tnx_value->rejected == 1)
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                                    @endif
                                    
                                </tr>
                                @endforeach
                               <!--  <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                                </tr>
                                <tr>
                                    <td>ashik</td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 40px;height: 40px;" src="{{asset('frontend/img/skrill.png')}}" alt="">
                                    </td>
                                    <td>100 USD</td>
                                    <td>11 Dec 2018</td>
                                    <td>11:25 AM</td>
                                    <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                                </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="advert" style="margin-top: 30px;">
                        <img style="height: auto;width: 100%" src="{{asset('frontend/img/970x90.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="blog-right">
                        <div class="heading-col">
                            <h2>Today exchange rate</h2>
                            <div class="border"></div>
                        </div>
                        <div class="today-rate ">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Currency</th>
                                    <th>Buy</th>
                                    <th>Sell</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($rates)
                                    @foreach($rates as $rate)
                                    <tr>
                                    <td>{{\App\Http\Helpers\Helper::getWalletNameById($rate->base_wallet_id)}}</td>
                                    <td>{{$rate->buy.'TK'}}</td>
                                    <td>{{$rate->sell.'TK'}}</td>
                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="rectangle-col"style="margin-top: 30px;">
                        <div class="advert" >
                            <img style="width: 100%;height: auto" src="{{asset('frontend/img/as.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="reserve-col" style="margin-top: 30px;">
                        <div class="heading-col">
                            <h2>Our Reserve</h2>
                            <div class="border"></div>
                        </div>
                        <div class="reserve" style="margin-top: 20px;">
                            @if($reservesAmount)
                                @foreach($reservesAmount as $amount)
                                <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img style="max-width: 60px;max-height: 60px;" class="media-object" src="{{asset('frontend/img/skrill.png')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$amount->name}}</h4>
                                    <p>-{{$amount->amount.' '.$amount->type}}</p>
                                </div>
                            </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="rectangle-col"style="margin-top: 30px;">
                        <div class="advert" >
                            <img style="width: 100%;height: auto" src="{{asset('frontend/img/as.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(window).on('load',function (){
            var fromSelector = $('#from');
            var toSelector = $('#to');
            var fromCurrencyID = fromSelector.val();
            var toCurrencyID = toSelector.val();
            var fromCurrencyValue = $('#from_value').val();
            currencyConvert(fromCurrencyID,toCurrencyID,fromCurrencyValue);
        });
        $(document).ready(function (){

            $(document).on('change','#from,#to',function (){
                var fromSelector = $('#from');
                var toSelector = $('#to');
                var fromCurrencyID = fromSelector.val();
                var toCurrencyID = toSelector.val();
                var fromCurrencyValue = $('#from_value').val();

                // if (parseInt(fromCurrencyID) === parseInt(toCurrencyID)){
                //     $('#submit_btn').parent('div').hide();
                // }else{
                //     $('#submit_btn').parent('div').show();
                // }
                currencyConvert(fromCurrencyID,toCurrencyID,fromCurrencyValue);
            })
        });
        $('#submit_btn').on('click',function (){
            event.preventDefault();
            $(this).closest('form').submit();
        })
        $('#from_value').on('keyup',function (){
            var fromSelector = $('#from');
            var toSelector = $('#to');
            var fromCurrencyID = fromSelector.val();
            var toCurrencyID = toSelector.val();
            var fromCurrencyValue = $('#from_value').val();
            currencyConvert(fromCurrencyID,toCurrencyID,fromCurrencyValue);
        });
         function currencyData(fromSelector, toSelector){
            console.log(fromSelector + ' - '+toSelector)
            // $.ajax({
            //     url:`/currency/info/${fromSelector}/${toSelector}`,
            //     method:'GET',
            //     success:function (response){
            //         console.log(response);
            //     }
            // });
        }

         function currencyDropdownChange(fromCurrencyID){
            $.ajax({
                url:`/currency/dropdown/${fromCurrencyID}`,
                method:'GET',
                success:function (response){
                    $('#to').empty();
                    $('#to').append(response)
                    currencyData($('#from').find(":selected").val(), $('#to').find(":selected").val());
                }
            });
        }
        function currencyConvert(fromSelector, toSelector,fromCurrencyValue ){
            $.ajax({
                url:`/exchange-rate/${fromSelector}/${toSelector}/${fromCurrencyValue}`,
                method:'GET',
                success:function (response){
                    $('#exchange_text').text(response.exchange);
                    $('#to_value').val(response.rate);
                    $('#reserve_value').text(response.reserve);
                    if (response.is_convert == 1){
                        $('#submit_btn').parent('div').show();
                    }else{
                        $('#submit_btn').parent('div').hide();
                    }
                }
            });
        }


    </script>

@endpush
