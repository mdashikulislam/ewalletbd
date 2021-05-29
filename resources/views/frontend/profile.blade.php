@extends('frontend.layouts.app')
@section('content')
<div class="convert-col" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                     <img src="{{asset('storage/'.$profile->image)}}" height="300" width="300">
                </div>
                </div>
                <div class="row">
                	<div class="col-md-6 text-center">
                		<ul>
                			<li><p>Name:{{$profile->first_name}} {{$profile->last_name}}</p></li>
                			<li><p>Email:{{$profile->email}}</p></li>
                			<li><p>Phone:{{$profile->phone}}</p></li>
                			<li><p>Phone:{{$profile->phone}}</p></li>
                			<li><p>Address:{{$profile->address}}</p></li>
                            
                		</ul>
                	</div>
                    <div class="col-md-6 text-center">
                        <ul>
                            
                            <li><p>Date Of Birth:{{$profile->dob}}</p></li>
                            <li><p>City:{{$profile->city}}</p></li>

                            
                            <li><p>Account Status:</p>
                               @if($profile->is_info_verified == 'verified')
                                      <button class="btn btn-success btn-sm">Active</button>  
                                        @else
                                        <button class="btn btn-danger btn-sm">InActive<</button>
                                        @endif


                            </li>
                            <li><p>ID Type:{{$profile->id_type}}</p></li>

                        </ul>
                    </div>

                    <div class="col-md-12 text-center">
                     <a href="{{route('profile.show.document')}}" class="btn btn-primary">View All Document</a>
                </div>
                	
                </div>
            </div>
        </div>
        
@endsection