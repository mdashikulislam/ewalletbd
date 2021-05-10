@php
    $routeName = Route::currentRouteName();
    $verifyMenu = ($routeName != 'user.otp' && $routeName != 'user.document.verification') ? true : false;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Education Pro - University, Collage & School Responsive Html5 Templet">
    <meta name="author" content="ErrorThemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Title-->
    <title>E-wallet</title>
    <!--Favicon Icon-->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/img/favicon.png')}}" />
    <!--StyleSheet-->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/superfish.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/hover.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.css')}}">
{{--    <link rel="stylesheet" href="{{asset('frontend/css/color-switcher.css')}}">--}}
    <link rel="stylesheet" href="{{asset('frontend/css/simplyCountdown.theme.losange.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}}">
    <!--Main StyleSheet-->
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/colors/default.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/toaster/toastr.css')}}">
    @yield('css')
{{--    <link rel="preconnect" href="https://fonts.gstatic.com">--}}
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,700;1,700&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4391990874850640"
            crossorigin="anonymous"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .reserve-col .reserve{
            /*background: #ff4b00;*/
            padding:  20px;
            border-radius: 10px;
            border: 1px solid #ff4b00;
        }
        .gCdMUP{
            display: none;
        }
        .reserve-col .reserve .media-body h4{
            /*color: #fff;*/
        }
        .reserve-col .reserve .media-body p{
            /*color: #fff;*/
            margin-bottom: 0;
        }
        .my-custom-scrollbar {
            position: relative;
            height: 650px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
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
        .exchange-btn .button{
            left: calc(50% - 70px);
            width: 140px;
            height: 45px;
            border: 2px solid #fff;
            float: left;
            text-align: center;
            cursor: pointer;
            position: relative;
            box-sizing: border-box;
            overflow: hidden;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        .exchange-btn .button:hover a{
            color:#ff4b00 ;
        }
        .exchange-btn .button:hover .button-effict{
            border:70px solid #fff;
        }
        .exchange-btn .button-effict{
            width: 140px;
            height: 45px;
            border: 0 solid #fff;
            position: absolute;
            transition: all .5s ease;
            z-index: 1;
            box-sizing: border-box;
        }
        .exchange-btn a{
            font-size: 18px;
            color: #fff;
            text-decoration: none;
            line-height: 40px;
            transition: all .5s ease;
            z-index: 2;
            position: relative;
        }
        .header-top-col marquee{
            padding-top: 3px;
        }
        .today-rate{
            padding: 15px;
        }
        .today-rate table{
            color:#fff ;
        }
        .today-rate table{
            border: 2px solid #fff;
        }
        .today-rate table thead tr{
            background: #fff;
            color: #333;
        }
        .today-rate table thead tr th{
            border: 2px solid #fff;
        }
        .today-rate table tbody tr td{
            border: 2px solid #fff;
            font-size: 14px;
        }
        .blog-right{
            border-radius: 5px;
        }
        .blog-right .heading-col h2{
            margin-top: 30px;
            font-size: 22px;
            color: #fff;
        }
        .blog-right .heading-col .border{
            background: #fff;
            width: 60px;
            margin: 10px auto;
        }
        .blog-right .heading-col .border:before{
            background: #fff;
            right: 60px;
            width: 80px;
        }
        .blog-right .heading-col .border:after{
            background: #fff;
            left: 60px;
            width: 80px;
        }
        .currency-col{
            margin-top: 30px;
        }
        .currency-col .send-logo .img{
            float: left;
        }
        .currency-col .send-logo .img img{
            width: 60px;
            height: 60px;
            border: 3px solid #fff;
            border-radius: 4px;
            margin-right: 20px;
        }
        .currency-col .send-logo h1{
            color: #fff;
            margin-top: 10px;
            font-weight: bold;
        }
        .currency-col .change-currency{
            margin-top: 40px;
        }
        .currency-col .change-currency select{
            height: 45px;
            font-size: 18px;
        }
        .currency-col .change-currency input{
            margin-top: 20px;
            height: 45px;
            font-size: 18px;
        }
        .currency-col  .rate{
            margin-top: 20px;
        }
        .currency-col  .rate h2{
            font-weight: bold;
            font-size: 26px;
            color: #fff;
            display: flex;
            justify-content: center;
        }
        .logo-nav-col .login-signup ul li{
            float: left;
        }
        .logo-nav-col.sticky .sf-menu li:last-child a{
            padding: 5px 15px;
        }
        .logo-nav-col.sticky .sf-menu li:nth-last-child(2) a{
            padding: 5px 15px;
        }
        .logo-nav-col .login-signup ul li a{
            font-family: 'PT Sans', sans-serif!important;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            color: #ff4b00;
            line-height: 30px;
            padding: 10px 19px;
        }
        .nav-bar ul li:last-child a{
            background: red;
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            margin-top: 3px;
        }
        .nav-bar ul li a{
            font-weight: bold!important;
        }
        .nav-bar ul li:last-child a:hover{
            color: #fff;
        }
        .nav-bar ul li:nth-last-child(2) a{
            background: red;
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            margin-top: 3px;
            margin-right: 10px;
        }
        .nav-bar ul li:nth-last-child(2)  a:hover{
            color: #fff;
        }
        .is-invalid{
            border:1px solid red;
        }
        .invalid-feedback{
            color: red;
            margin-top: 10px;
            display: block;
        }
    </style>
</head>
<body>
<!--Preloader Start-->
<div id="preloader">
    <div id="status"></div>
</div>
<!--Preloader Start End-->
<div class="wrapper">
    @guest
    @else
        @if($verifyMenu == true)
        <div class="logo-nav-col">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{route('user.home')}}">
                            <div class="logo">
                                <img src="{{asset('frontend/img/logo.png')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <!-- Nav Start -->
                        <div class="nav-bar">
                            <ul class="sf-menu">
                                <li class="current-menu-item"><a href="{{route('user.home')}}">Home</a></li>
                                <li><a href="{{route('user.history')}}">History</a></li>
                                <li><a href="{{route('user.about')}}">About</a></li>
                                <li><a href="{{route('user.faq')}}">FAQ</a></li>
                                <li><a href="{{route('user.contact')}}">Contact</a></li>
                                <li><a href=""><i class="fa fa-user-o fa-fw"></i><span>Profile</span></a></li>
                                <li><a id="btn-logout" href="javascript:void(0)"><i class="fa fa-sign-out fa-fw"></i><span>Logout</span></a></li>
                            </ul>
                            <form id="logout" action="{{route('logout')}}" method="POST" style="display: none">@csrf</form>
                        </div>
                        <!-- Nav End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top-col">
            <div class="container">
                <div class="row">
                    <marquee><span style="color: #fff;font-size: 22px;"><span style="color: yellow;font-weight: bold;">Notice : </span> আমাদের কাছে আপনি Astropay Card paben । বিকাশ, রকেট, নগত থেকে টাকা পাঠালে ২% খরচ দিতে হবে। প্রয়োজনে কথা বলুনঃ-  What's App অথবা Live chart</span> </marquee>
                </div>
            </div>
        </div>
        @endif
    @endguest


    @section('content')
    @show


    @guest
    @else
        @if($verifyMenu == true)
            <div class="partner-col">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-col">
                                <h2>We Accept</h2>
                                <div class="border"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="partner-carousel">
                                <div class="partner-content">
                                    <div class="img">
                                        <img src="{{asset('frontend/img/partner8.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="partner-content">
                                    <div class="img">
                                        <img src="{{asset('frontend/img/partner9.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="partner-content">
                                    <div class="img">
                                        <img src="{{asset('frontend/img/partner6.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="partner-content">
                                    <div class="img">
                                        <img src="{{asset('frontend/img/partner10.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="partner-content">
                                    <div class="img">
                                        <img src="{{asset('frontend/img/partner9.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="partner-content">
                                    <div class="img">
                                        <img src="{{asset('frontend/img/partner1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="partner-content">
                                    <div class="img">
                                        <img src="{{asset('frontend/img/partner2.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="partner-content">
                                    <div class="img">
                                        <img src="{{asset('frontend/img/partner3.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="advert" style="margin-top: 30px;">
                            <img style="height: auto;width: 100%" src="{{asset('frontend/img/970x90.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="text">
                                <h2>Subscribe to our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="input">
                                <form action="{{route('newslatter')}}" method="post">
                                    <input  name="email" type="email" class="form-control news_email" placeholder="Enter Your Email." required="required">
                                    <button class="btn btn-success news_btn"><span>Subscribe!</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-col">
                <div class="container">
                    <div class="row">
                        <div class="border">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="{{route('user.home')}}" class="active">Home</a></li>
                                        <li><a href="{{route('user.history')}}">History</a></li>
                                        <li><a href="{{route('user.about')}}">About</a></li>
                                        <li><a href="{{route('user.faq')}}">FAQ</a></li>
                                        <li><a href="{{route('user.contact')}}">Contact</a></li>

                                        <li><a href="">Profile</a></li>
                                        <li><a href="{{route('user.contact')}}">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="copy-right">
                                    <p>&copy; 2021 - EWalletBD.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endguest
    <!--Footer Bottom End-->
    <!--Scroll To Top Start-->
    <a href="#" class="scrollup">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--Scroll To Top End-->
</div>
<!--JavaScript-->

<!-- GetButton.io widget -->

<!-- /GetButton.io widget -->


@include('sweetalert::alert')

<script src="{{asset('frontend/js/jquery-2.2.4.min.js')}}"></script>
@stack('js')
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/superfish.js')}}"></script>
<script src="{{asset('frontend/js/owl.animate.js')}}"></script>
<script src="{{asset('frontend/js/hoverIntent.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/simplyCountdown.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('frontend/toaster/toastr.min.js')}}"></script>
{{--<script src="{{asset('frontend/js/color-switcher.js')}}"></script>--}}
<script src="{{asset('frontend/js/custom.js')}}"></script>

<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "01922304499", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);

    })();
</script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    $(document).ready(function (){
        $(document).on('click','.news_btn',function (event){
            event.preventDefault();
            var email = $('.news_email').val();
            $.ajax({
                url:'{{route('newslatter')}}',
                method:'POST',
                data:{'email':email,'_token':'{{csrf_token()}}'},
                success:function (response){
                    $('.news_email').val('');
                    toastr.info(response.msg);
                },
                error:function (error){
                    toastr.error(error.responseJSON.errors.email)
                }

            });
        });
        $('#btn-logout').on('click',function (){
            $('#logout').submit();
        });
    });


</script>

<style>
    .sc-7dvmpp-1{
        display: none!important;
    }
    #toast-container{
        margin-top: 50px;
    }
</style>

</body>
</html>
