@extends('admin.app')
@section('main-content')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="post" action="{{route('post.status.change',$tnx_value->id)}}" enctype="multipart/form-data">
            @csrf
			<input type="hidden" name="send_you" value="{{$tnx_value->send_you}}">
			<input type="hidden" name="send_you_base_wallets_id" value="{{$tnx_value->send_you_base_wallets_id}}">
			<input type="hidden" name="send_to" value="{{$tnx_value->send_to}}">
			<input type="hidden" name="send_to_base_wallets_id" value="{{$tnx_value->send_to_base_wallets_id}}">


			<div class="form-group">
              <label for="exampleFormControlSelect1">Change The Status</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="payment_status">
				    @if($tnx_value->process == 1 and $tnx_value->success == 0 and $tnx_value->rejected == 0)
				    <option value="1" selected="">Processing</option>
				    	@elseif($tnx_value->process == 1 and $tnx_value->success == 1 and $tnx_value->rejected == 0)
				    	<option value="2" selected="">Success</option>
				    	@elseif($tnx_value->rejected == 1)
				    	<option value="3" selected="">Rejected</option>
				    	@endif
				     <option value="1">Processing</option>
				     <option value="2">Success</option>
				     <option value="3">Rejected</option>
				    
				    </select>
  </div>

  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit Now</button>
                </div>

  </form>
		</div>
	</div>
	
</div>

@endsection

