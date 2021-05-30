@extends('admin.app')
@section('main-content')
    <div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>Add Event/Campaign</h2>
            <a href="" class="btn btn-outline-primary btn-sm text-uppercase">
                <i class="fa fa-list"></i> Event/Campaign List
            </a>
        </div>
        <div class="card-body">
            <form action="{{route('reserve.exchange.update',$currency_rate->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="event_type">Show Type :</label>
                    <select class="form-control" name="name">
                        <option value="{{$currency_rate->name}}">{{$currency_rate->name}}</option>
                    </select>
                   
                </div>

                <div class="form-group">
                    <label for="event_type"> Amount</label>
                  <input type="text" class="form-control" name="amount" value="{{$currency_rate->amount}}"> 

                   
                </div>

                <div class="form-group">
                    <label for="event_type"> Account Info</label>
                  <input type="text" class="form-control" name="account_info" value="{{$currency_rate->account_info}}">  
                </div>

                <div class="form-group">
                    <label for="event_type"> Image</label>
                    <img src="{{asset('storage/'.$currency_rate->image)}}" height="100" width="100">
                  <input type="file" class="form-control" name="image">  
                  <small>image size : 416*279</small>
                </div>


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit Now</button>
                </div>


            </form>
        </div>
    </div>
    @endsection