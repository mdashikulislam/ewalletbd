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
            <form action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            

                <div class="form-group">
                    <label for="event_type"> first Name</label>
                  <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}"> 
                   
                </div>

                <div class="form-group">
                    <label for="event_type"> Last Name</label>
                  <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}"> 
                   
                </div>

                <div class="form-group">
                    <label for="event_type">Email</label>
                  <input type="email" class="form-control" name="email" value="{{$user->email}}"> 
                   
                </div>
                 
                 <div class="form-group">
                    <label for="event_type">Address</label>
                  <input type="address" class="form-control" name="address" value="{{$user->address}}"> 
                   
                </div>

                <div class="form-group">
                    <label for="event_type">Phone</label>
                  <input type="text" class="form-control" name="phone" value="{{$user->phone}}"> 
                   
                </div>
                <div class="form-group">
                    <label for="event_type">Date Of Birth</label>
                  <input type="date" class="form-control" name="dob" value="{{$user->dob}}"> 
                   
                </div>
                <div class="form-group">
                    <label for="event_type">City</label>
                  <input type="text" class="form-control" name="city" value="{{$user->city}}"> 
                   
                </div>

                <div class="form-group">
                    <label for="event_type">Verified :</label>
                    <select class="form-control" name="is_info_verified">
                        <option value="verified">Active</option>
                        <option value="unverified">Inactive</option>
                    </select>
                   
                </div>

                <div class="form-group">
                    <label for="event_type">Id Type :</label>
                    <select class="form-control" name="id_type">
                        <option value="nid">NID</option>
                        <option value="passport">Passport</option>
                        <option value="driving">Driving</option>
                    </select>
              
                   
                </div>

         




                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit Now</button>
                </div>


            </form>
        </div>
    </div>
    @endsection