@extends('admin.app')
@section('main-content')
<div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>User Document Show</h2>
        </div>
    </div>
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

@endsection