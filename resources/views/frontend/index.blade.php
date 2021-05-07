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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="send-logo">
                                        <div class="img">
                                            <img src="{{asset('frontend/img/bkash.png')}}" alt="">
                                        </div>
                                        <h1><i class="fa fa-arrow-down"></i>You send</h1>
                                    </div>
                                    <div class="change-currency">
                                        <select class="form-control" name="" >
                                            <option value="">Nagod</option>
                                            <option value="">Nagod</option>
                                            <option value="">Nagod</option>
                                            <option value="">Nagod</option>
                                        </select>
                                        <input type="text" class="form-control" value="1">
                                    </div>
                                    <div class="rate">
                                        <h2>Exchange rate: 110 BDT = 1 USD</h2>
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
                                        <select class="form-control" name="" id="">
                                            <option value="">Nagod</option>
                                            <option value="">Nagod</option>
                                            <option value="">Nagod</option>
                                            <option value="">Nagod</option>
                                        </select>
                                        <input disabled type="text" class="form-control">
                                    </div>
                                    <div class="rate">
                                        <div class="rate">
                                            <h2>Our Reserve: 6457.5 USD</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="exchange-btn">
                                        <div class="button">
                                            <div class="button-effict"></div>
                                            <a href="">Exchange</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <th>Currency Name</th>
                                    <th>Buy</th>
                                    <th>Sell</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Skrill Doller</td>
                                    <td>50tk</td>
                                    <td>80tk</td>
                                </tr>
                                <tr>
                                    <td>Skrill Doller</td>
                                    <td>50tk</td>
                                    <td>80tk</td>
                                </tr>
                                <tr>
                                    <td>Skrill Doller</td>
                                    <td>50tk</td>
                                    <td>80tk</td>
                                </tr>
                                <tr>
                                    <td>Skrill Doller</td>
                                    <td>50tk</td>
                                    <td>80tk</td>
                                </tr>
                                <tr>
                                    <td>Skrill Doller</td>
                                    <td>50tk</td>
                                    <td>80tk</td>
                                </tr>
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
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img style="max-width: 60px;max-height: 60px;" class="media-object" src="{{asset('frontend/img/skrill.png')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>-282500 BDT</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img style="max-width: 60px;max-height: 60px;" class="media-object" src="{{asset('frontend/img/skrill.png')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>-282500 BDT</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img style="max-width: 60px;max-height: 60px;" class="media-object" src="{{asset('frontend/img/skrill.png')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>-282500 BDT</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img style="max-width: 60px;max-height: 60px;" class="media-object" src="{{asset('frontend/img/skrill.png')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>-282500 BDT</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img style="max-width: 60px;max-height: 60px;" class="media-object" src="{{asset('frontend/img/skrill.png')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>-282500 BDT</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img style="max-width: 60px;max-height: 60px;" class="media-object" src="{{asset('frontend/img/skrill.png')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>-282500 BDT</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img style="max-width: 60px;max-height: 60px;" class="media-object" src="{{asset('frontend/img/skrill.png')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>-282500 BDT</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img style="max-width: 60px;max-height: 60px;" class="media-object" src="{{asset('frontend/img/skrill.png')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>-282500 BDT</p>
                                </div>
                            </div>
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
