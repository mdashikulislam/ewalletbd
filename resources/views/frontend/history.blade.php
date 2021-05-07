@extends('frontend.layouts.app')
@section('content')
    <div class="banner-col">
        <div class="container">
            <div class="overlay"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>Previous History</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner End-->
    <!--Faq Start-->
    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 300px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
        }
        .home-faq-col .desc .list-view .tx-vw h2 i{
            color: #ff4b00;
            margin-right: 10px;
        }
        .home-faq-col .desc .list-view .tx-vw h2{
            font-weight: bold;
        }
        .home-faq-col .desc .list-view .tx-vw p{
            padding-left: 80px;
            display: flex;
            justify-content: center;
        }
        .home-faq-col .desc .list-view .tx-vw ul{
            margin-left: 80px;
        }
        .home-faq-col .desc .list-view .tx-vw ul li{
            font-size: 20px;
            margin-top: 10px;
        }
        .home-faq-col .desc .list-view .tx-vw ul li i{
            color: #ff4b00;
            font-size: 22px;
        }
        .latest-col table{
            text-align: center;
            max-height: 600px;
            overflow-x: scroll;
        }
        .latest-col table th{
            text-align: center;
            background: #ff4b00;
            color: #fff;
            border: 1px solid #ff4b00;
        }
        .latest-col table tbody tr td{
            vertical-align: middle;
        }
    </style>
    <div class="home-faq-col latest-col">
        <div class="container">
            <div class="row">
                <div class="advert" style="margin-top: 30px;">
                    <img style="height: auto;width: 100%" src="img/970x90.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-col" style="margin-top: 30px;">
                        <h2>Complete</h2>
                        <div class="border"></div>
                    </div>
                </div>
                <div class="col-md-12">
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
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
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
                <div class="col-md-12">
                    <div class="advert" style="margin-top: 30px;">
                        <img style="height: auto;width: 100%" src="img/970x90.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-col" style="margin-top: 30px;">
                        <h2>Pending</h2>
                        <div class="border"></div>
                    </div>
                </div>
                <div class="col-md-12">
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
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #28a745;color: #fff;"><i class="fa fa-check fa-fw"></i>Success</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ffc107;color: #fff;"><i class="fa fa-clock-o fa-fw"></i>Process</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
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
                <div class="col-md-12">
                    <div class="advert" style="margin-top: 30px;">
                        <img style="height: auto;width: 100%" src="img/970x90.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-col" style="margin-top: 30px;">
                        <h2>Rejected</h2>
                        <div class="border"></div>
                    </div>
                </div>
                <div class="col-md-12">
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

                            </thead>
                            <tbody>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr><tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>100 USD</td>
                                <td>11 Dec 2018</td>
                                <td>11:25 AM</td>
                                <td><span  style="font-size: 14px;padding: 4px 8px;border-radius: 4px;background: #ff0000;color: #fff;"><i class="fa fa-times fa-fw"></i>Rejected</span></td>
                            </tr>
                            <tr>
                                <td>ashik</td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
                                </td>
                                <td>
                                    <img style="width: 40px;height: 40px;" src="img/skrill.png" alt="">
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
                <div class="col-md-12">
                    <div class="advert" style="margin-top: 30px;">
                        <img style="height: auto;width: 100%" src="img/970x90.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
