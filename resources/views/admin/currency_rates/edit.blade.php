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
            <form action="{{route('currency.exchange.update',$currency_rate->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="event_type">Select Type :</label>
                    <select class="form-control" name="base_wallet_id">
                        <option value="{{$currency_rate->base_wallet_id}}">{{App\Http\Helpers\Helper::getWalletNameById($currency_rate->base_wallet_id)}}</option>
                    </select>
                   
                </div>

                <div class="form-group">
                    <label for="event_type">Buy Amount</label>
                  <input type="number" class="form-control" name="buy" value="{{$currency_rate->buy}}">
                   
                </div>

                 <div class="form-group">
                    <label for="event_type">Sell Amount</label>
                  <input type="number" class="form-control" name="sell" value="{{$currency_rate->sell}}">
                   
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit Now</button>
                </div>


            </form>
        </div>
    </div>
    @endsection