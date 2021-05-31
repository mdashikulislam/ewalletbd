@extends('frontend.layouts.app')
@section('content')
    <div class="convert-col" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <h2 style="text-align: center;color: green;font-weight:700;padding: 5px 5px;">Order Summary</h2>
                  <h3 style="text-align: center;color: brown;padding: 5px 5px;">{{App\Http\Helpers\Helper::getWalletNameById($data['from'])}} -> {{App\Http\Helpers\Helper::getWalletNameById($data['to'])}}</h3>
                    <div class="convert">
                        <table class="table table-bordered">
                            <tr>
                                <td>You Send</td>
                                <td>{{$data['fromValue'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['from']).' ('.\App\Http\Helpers\Helper::getWalletNameById($data['from']).')'}}</td>
                            </tr>
                            <tr>
                                <td>Fee</td>
                                <td>{{$data['fee'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['from'])}}</td>
                            </tr>
                            <tr>
                                <td>Charge</td>
                                <td>{{$data['charge'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['from'])}}</td>
                            </tr>
                            <tr>
                                <td>Total Payable</td>
                                <td>{{$data['payable'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['from'])}}</td>
                            </tr>
                            <tr>
                                <td>You Receive</td>
                                <td>{{$data['toValue'].' '.\App\Http\Helpers\Helper::getCurrencyTypeById($data['to']).' ('.\App\Http\Helpers\Helper::getWalletNameById($data['to']).')'}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
          
             
            <?php 
              $send_you = $data['fromValue'];
              $send_you_base_wallets_id = $data['from'];
              $send_you_type = App\Http\Helpers\Helper::getCurrencyTypeById($data['from']);
              $send_you_method = App\Http\Helpers\Helper::getWalletNameById($data['from']);

              $fee = $data['fee'];
              $fee_type = App\Http\Helpers\Helper::getCurrencyTypeById($data['from']);

              $charge = $data['charge'];
              $charge_type = App\Http\Helpers\Helper::getCurrencyTypeById($data['from']);

              $send_to = $data['toValue'];
              $send_to_base_wallets_id = $data['to'];
              $send_to_type = App\Http\Helpers\Helper::getCurrencyTypeById($data['to']);
              $send_to_method = App\Http\Helpers\Helper::getWalletNameById($data['to']);


              ?>
             
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="convert">
                        <form method="post" action="{{route('tnx.convert.input')}}" enctype="multipart/form-data">
                         
                          @csrf
                <div class="card-body">
                      <div class="form-group">
                      <p style="color: red;">Please send Total Payable amount to our {{App\Http\Helpers\Helper::getWalletNameById($data['from'])}} Number: {{App\Http\Helpers\Helper::getWalletAccountById($data['from'])}} and sumit the transation No or account ID in bellow box.</P>
                      </div>
                       <div class="form-group">
                    <label>Tnx Number/Account Number</label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter your Tnx Number" required>

                    <input type="hidden" class="form-control" name="send_you"  placeholder="Enter your Tnx Number" value="{{$send_you}}">
                    <input type="hidden" class="form-control" name="send_you_base_wallets_id"  placeholder="Enter your Tnx Number" value="{{$send_you_base_wallets_id}}">
                    <input type="hidden" class="form-control" name="send_you_type"  placeholder="Enter your Tnx Number" value="{{$send_you_type }}">
                    <input type="hidden" class="form-control" name="send_you_method"  placeholder="Enter your Tnx Number" value="{{ $send_you_method}}">
                    <input type="hidden" class="form-control" name="fee"  placeholder="Enter your Tnx Number" value="{{ $fee}}">
                    <input type="hidden" class="form-control" name="fee_type"  placeholder="Enter your Tnx Number" value="{{ $fee_type}}">
                    <input type="hidden" class="form-control" name="charge"  placeholder="Enter your Tnx Number" value="{{ $charge }}">
                    <input type="hidden" class="form-control" name="charge_type"  placeholder="Enter your Tnx Number" value="{{ $charge_type }}">
                    <input type="hidden" class="form-control" name="send_to"  placeholder="Enter your Tnx Number" value="{{ $send_to }}">
                    <input type="hidden" class="form-control" name="send_to_base_wallets_id"  placeholder="Enter your Tnx Number" value="{{ $send_to_base_wallets_id }}">
                    <input type="hidden" class="form-control" name="send_to_type"  placeholder="Enter your Tnx Number" value="{{ $send_to_type }}">
                    <input type="hidden" class="form-control" name="send_to_method"  placeholder="Enter your Tnx Number" value="{{ $send_to_method }}">


                  </div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit Now</button>
                </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
