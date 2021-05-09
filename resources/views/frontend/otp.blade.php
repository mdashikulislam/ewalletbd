@extends('frontend.layouts.app')
@section('content')
    <div class="register-col">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="thumbnail" style="margin-top: 30px;">
                        <div class="heading-col" style="margin-top: 30px;">
                            <h2>OTP Verification</h2>
                            <div class="border"></div>
                        </div>
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="exampleInputEmail1" class="text-center" style="text-align: center;display: block;margin-bottom: 15px;font-size: 24px;">Phone Number</label>
                                <input type="text" disabled name="first_name" class="form-control" style="width: 95%;" value="{{$phone}}" placeholder="Phone Number">
                            </div>
                            <div class="form-group input-musk" style="display: none" >
                                <input type="text" class="pincode-input-text-masked" id="otp_input" />
                            </div>
                            <div class="form-group">

                                <div class="submit-btn">
                                    <p  id="resend_text" style="text-align: center;display: none">You can resend your otp <span></span> sec later</p>
                                    <button class="btn-submit" id="btn-submit">Send OTP</button>
                                    <button style="display: none" class="btn-submit" id="btn-verify">Verify OTP</button>
                                    <button style="display: none" class="btn-submit" id="btn-resend">Resend OTP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #partitioned {
            padding-left: 15px;
            letter-spacing: 42px;
            border: 0;
            background-image: linear-gradient(to left, black 70%, rgba(255, 255, 255, 0) 0%);
            background-position: bottom;
            background-size: 50px 1px;
            background-repeat: repeat-x;
            background-position-x: 35px;
            width: 220px;
            min-width: 220px;
        }

        #divInner{
            left: 0;
            position: sticky;
        }

        #divOuter{
            width: 190px;
            overflow: hidden;
        }
        .pincode-input-text-masked{
            font-family: Arial!important;
        }

        .register-col{
            padding: 80px 0;
            background-image: url("{{asset('frontend/img/background.jpg')}}");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .register-col .thumbnail{
            border-color: transparent;
        }
        .register-col .thumbnail .card-body{
            padding: 30px;
        }
        .register-col .thumbnail .form-control{
            height: 40px;
            /*border-radius: 0;*/
            text-shadow: none;
            box-shadow: none;
            font-size: 16px;
        }
        .register-col .thumbnail .form-control:focus{
            border-color: #ff4b00;
        }
        input.form-control.pincode-input-text.pincode-input-text-masked{
            margin-right: 20px;
            border: none;
            border: 2px solid #000;
        }
        .input-musk {
            width: 50%;
            margin-left: 25%;
            margin-top: 30px;

        }
        .input-musk input{
            border-radius: 0;
        }
        .input-musk input:last-child{
            margin-right: 0;

        }
        .submit-btn{
            padding-top: 20px;
            overflow: hidden;
            text-align: center;
        }
        .submit-btn .btn-submit{
            border: 2px solid #ff4b00;
            color: #ff4b00;
            position: relative;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            letter-spacing: .08em;
            border-radius: 0;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
            background: transparent;
            border-radius: 4px;
            padding: 8px 25px;
        }
        .submit-btn .btn-submit:hover{
            color: #FFF;
            background: #ff4b00;
        }
    </style>
@endsection
@push('js')
    <link rel="stylesheet" href="{{asset('frontend/toaster/bootstrap-pincode-input.css')}}">
    <script src="{{asset('frontend/toaster/bootstrap-pincode-input.js')}}"></script>
    <script src="{{asset('frontend/toaster/jQuerySimpleCounter.js')}}"></script>
    <script>
        $(document).on('load',function (){
            $('.input-musk').hide();
        });
        $(document).ready(function (){
            $('.input-musk').hide();
            $('#otp_input').pincodeInput({
                change:function(input,value,inputnumber){
                    if (inputnumber == 4){
                        $('#btn-verify').attr('disabled',false);
                    }else {
                        $('#btn-verify').attr('disabled',true);
                    }
                }
            });
            $('#btn-submit,#btn-resend').on('click',function (){
                event.preventDefault();
                $('#btn-resend').hide();
                $.ajax({
                    url:'{{route('send.otp')}}',
                    method:'GET',
                    success:function (response){
                        if (response.status == 'success'){
                            $('#btn-verify').hide();
                            $('#btn-verify').attr('disabled',false);
                            $('.input-musk').show()
                            $('#btn-submit').hide();
                            $('#btn-verify').show();
                            $('#btn-verify').attr('disabled',true);
                            $('#resend_text').show();
                            var timeleft = 6;
                            var downloadTimer = setInterval(function(){
                                if(timeleft >= 60){
                                    clearInterval(downloadTimer);
                                    $('#resend_text').hide();
                                    $('#btn-resend').show();
                                }
                                $('#resend_text span').text( 60 - timeleft);
                                timeleft++;
                            }, 1000);
                            toastr.info(response.msg);
                        }else{
                            $('.input-musk').hide();
                            toastr.error(response.msg);
                        }
                    }
                });
            });
            $('#btn-verify').on('click',function (){
                event.preventDefault();
                var otp = $('#otp_input').val();
                if (otp){
                    $.ajax({
                        url:`/otp/verify/${otp}`,
                        method:'GET',
                        success:function (response){
                            if (response.status === 'success'){
                                toastr.info(response.msg);
                                window.location.href = '{{route('user.home')}}';
                            }else{
                                toastr.warning(response.msg);
                            }
                        }
                    });
                }
            });
            function counter(){

            }
        });
    </script>
@endpush
