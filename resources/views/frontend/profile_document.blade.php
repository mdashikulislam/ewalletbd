@extends('frontend.layouts.app')
@section('content')
<div class="convert-col" style="margin-top: 30px;">
        <div class="container">
        	@if(!is_null($user->nid_front))
            <div class="row">
                <div class="col-md-12 text-center">
                	<p>Nid Front</p>
                	<img src="{{asset('storage/'.$user->nid_front)}}" height="200" width="300">
                </div>
            </div>
            @endif
            @if(!is_null($user->nid_back))
            <div class="row">
                <div class="col-md-12 text-center">
                	<p>Nid back</p>
                	<img src="{{asset('storage/'.$user->nid_back)}}" height="200" width="300">
                </div>
            </div>
            @endif
            @if(!is_null($user->passport))
            <div class="row">
                <div class="col-md-12 text-center">
                	<p>Passport</p>
                	<img src="{{asset('storage/'.$user->passport)}}" height="200" width="300">
                </div>
            </div>
            @endif
            @if(!is_null($user->driving))
            <div class="row">
                <div class="col-md-12 text-center">
                	<p>Driving</p>
                	<img src="{{asset('storage/'.$user->driving)}}" height="200" width="300">
                </div>
            </div>
            @endif
        </div>
</div>
@endsection