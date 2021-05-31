@extends('frontend.layouts.app')
@section('content')
    <div class="banner-col">
        <div class="container">
            <div class="overlay"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner End-->
    <!--Contact Start-->
    <div class="contact-col">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="input-feild">
                        <div class="heading">
                            <h2>send your massage</h2>
                        </div>
                        @include('message')
                        <div class="input">
                            <form action="{{route('user.contact.send')}}" method="post">
                                @csrf
                                <div class="name-email">
                                    <div class="name">
                                        <label>Your Name *</label>
                                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                                        @error('name')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="email">
                                        <label>Your Email *</label>
                                        <input value="{{old('email')}}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" >
                                        @error('email')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="phone">
                                        <label>Your Phone Number *</label>
                                        <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}">
                                        @error('phone')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="subject">
                                    <label>Subject *</label>
                                    <input name="subject" type="text" class="form-control @error('subject') is-invalid @enderror" value="{{old('subject')}}">
                                    @error('subject')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="massage-body">
                                    <label>Massage *</label>
                                    <textarea  class="form-control @error('message') is-invalid @enderror" name="message" cols="30" rows="10">{{old('message')}}</textarea>
                                    @error('message')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="button">
                                    <button type="submit">send us</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="address">
                        <div class="heading">
                            <h2>Connect With Us</h2>
                        </div>
                        <div class="text-col">
                            <div class="title">
                                <h3>Information</h3>
                            </div>
                            <div class="address-bar">
                                <div class="phone">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="text">
                                        <p>01712-888244</p>
                                    </div>
                                </div>
                                <div class="email">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:ewalletebd@gmail.com">ewalletebd@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social">
                            <div class="title">
                                <h3>Connect With Us</h3>
                            </div>
                            <div class="list">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
