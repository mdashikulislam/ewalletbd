@extends('admin.app')
@section('main-content')
    <div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>Add Event/Campaign</h2>
            <a href="{{route('admin.view.document',$user->id)}}" class="btn btn-outline-primary btn-sm text-uppercase">
                <i class="fa fa-list"></i> View Document
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
                        <option value="{{$user->is_info_verified}}">{{$user->is_info_verified}}</option>
                        <option value="verified">Active</option>
                        <option value="unverified">Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="event_type">Id Type :</label>
                    <select class="form-control" name="id_type">
                        <option value="{{$user->id_type}}">{{$user->id_type}}</option>
                        <option value="nid">NID</option>
                        <option value="passport">Passport</option>
                        <option value="driving">Driving</option>
                    </select>
                </div>

               <div class="form-group">
                    <label for="event_type">Nid front Image</label>
                    <img src="{{asset('storage/'.$user->nid_front)}}" height="100" width="100">
                  <input type="file" class="form-control" name="image"> 
               </div>

               <div class="form-group">
                    <label for="event_type">Nid Back Image</label>
                    <img src="{{asset('storage/'.$user->nid_back)}}" height="100" width="100">
                  <input type="file" class="form-control" name="image"> 
               </div>

               <div class="form-group">
                    <label for="event_type">Passport Image</label>
                    <img src="{{asset('storage/'.$user->passport)}}" height="100" width="100">
                  <input type="file" class="form-control" name="image"> 
               </div>

               <div class="form-group">
                    <label for="event_type">Driving Image</label>
                    <img src="{{asset('storage/'.$user->driving)}}" height="100" width="100">
                  <input type="file" class="form-control" name="image"> 
               </div>

               <div class="form-group">
                    <label for="event_type">Document Type :</label>
                    <select class="form-control" name="document_type">
                        <option value="{{$user->document_type}}">{{$user->document_type}}</option>
                        <option value="utility">utility</option>
                        <option value="bank">bank</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="event_type">Image</label>
                    <img src="{{asset('storage/'.$user->image)}}" height="100" width="100">
                  <input type="file" class="form-control" name="image"> 
               </div>

               <div class="form-group">
                    <label for="event_type">Document Type Verified:</label>
                    <select class="form-control" name="is_document_verified">
                        <option value="{{$user->is_document_verified}}">{{$user->is_document_verified}}</option>
                        <option value="utility">utility</option>
                        <option value="bank">bank</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="event_type">status:</label>
                    <select class="form-control" name="status">
                        <option value="{{$user->status}}">{{$user->status}}</option>
                        <option value="active">active</option>
                        <option value="pending">pending</option>
                         <option value="reject">reject</option>
                    </select>
                </div>






                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit Now</button>
                </div>


            </form>
        </div>
    </div>
    @endsection