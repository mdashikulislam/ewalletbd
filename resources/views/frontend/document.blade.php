@extends('frontend.layouts.app')
@section('content')
    <div class="register-col">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-col">
                        <h2>Registration</h2>
                        <div class="border"></div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="thumbnail" style="margin-top: 30px;">
                        <div class="card-body">
                            <form action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"  placeholder="First Name" value="{{old('first_name')}}">
                                    @error('first_name')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror"  value="{{old('last_name')}}" placeholder="Last Name">
                                    @error('last_name')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea name="address" col="5"  value="{{old('address')}}" placeholder="Address" class="form-control @error('address') is-invalid @enderror" style="height: 80px!important;"></textarea>
                                    @error('address')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City</label>
                                    <input name="city"  type="text" class="form-control @error('city') is-invalid @enderror"  value="{{old('city')}}" placeholder="City">
                                    @error('city')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date of Birth</label>
                                    <input name="dob" type="date" class="form-control @error('dob') is-invalid @enderror"  value="{{old('dob')}}" placeholder="Date of Birth">
                                    @error('dob')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input name="phone" maxlength="11" onkeypress=" return isNumberKey(event)" type="text"   class="form-control  number @error('phone') is-invalid @enderror"  value="{{old('phone')}}" placeholder="01xxxxxxxxx">
                                    @error('phone')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"  value="{{old('email')}}" placeholder="example@gmail.com">
                                    @error('email')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="">
                                    @error('password')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="submit-btn">
                                        <button class="btn-submit">Register</button>
                                    </div>
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
            padding: 30px 0;
        }
        .register-col .thumbnail{
            border-color: #ff4b00;
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
