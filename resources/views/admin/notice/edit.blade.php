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
            <form action="{{route('notice.update',$notice->id)}}" method="post" enctype="multipart/form-data">
                @csrf
               
               <label for="event_type">Notice</label>
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="notice">{{$notice->notice}}</textarea>

                 

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit Now</button>
                </div>


            </form>
        </div>
    </div>
    @endsection