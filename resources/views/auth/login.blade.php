@extends('frontend.layouts.app')
@section('content')
    <div class="register-col">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="thumbnail" style="margin-top: 30px;">
                        <div class="logo-panel" style="text-align: center;padding-top: 30px;">
                            <img style="max-height: 50px;" src="{{asset('frontend/img/logo.png')}}" alt="">
                        </div>
                        <div class="heading-col" style="padding-top: 30px;">
                            <h2>Login</h2>
                            <div class="border"></div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label for="">Phone</label>
                                    <input maxlength="11" onkeypress="return isNumberKey(event)" name="phone"  type="text"   class="form-control  @error('phone') is-invalid @enderror"  value="{{old('phone')}}" placeholder="01xxxxxxxxx">
                                    @error('phone')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="">
                                    @error('password')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="submit-btn">
                                        <button type="submit" class="btn-submit">Login</button>
                                    </div>
                                </div>
                                <div class="form-group" style="text-align: center">
                                    <p>Don't have account? <a style="color: #ff4b00;" href="{{route('register')}}">Click Here <i class="fa fa-arrow-right"></i> </a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .register-col{
            padding: 120px 0;
            background-image: url("{{asset('frontend/img/32.gif')}}");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
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
    <script>
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
    @endpush
