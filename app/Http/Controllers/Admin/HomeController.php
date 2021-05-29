<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Helpers\Helper;
use App\Model\Frontend\TnxValue;
use App\Model\Frontend\BaseWallet;
use App\Model\Frontend\CurrencyRate;
use App\Notice;
use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index(){
        return view('admin.home');
    }

    public function all_exchange_show()
    {
    	return view('admin.exchange.show');
    }

    public function all_exchange_change($id)
    {
       $tnx_value = TnxValue::find($id);
       return view('admin.exchange.edit',compact('tnx_value'));
    }

    public function all_exchange_change_post(Request $request,$id)
    {
    	$invoice = "TNX0001";
    	$rand =rand(0,999);
    	if($request->payment_status == 2){

    	$send_you = BaseWallet::where('id',$request->send_you_base_wallets_id)->first();
        

        $send_you->amount = $send_you->amount + $request->send_you;

        $send_you->save();

        $send_to = BaseWallet::where('id',$request->send_to_base_wallets_id)->first();
        $send_to->amount = $send_to->amount - $request->send_to;

        $send_to->save();

        $tnx_value = TnxValue::find($id);

        $tnx_value->success = 1;

        $tnx_value->payment_number = $invoice . ($rand + $id );

        $tnx_value->save();	
        return redirect()->route('admin.exchange.show');

    	}elseif($request->payment_status == 3){
    		$tnx_value->rejected = 1;
    		 $tnx_value->save();
    		 return redirect()->route('admin.exchange.show');	
    	}else{
    		return redirect()->route('admin.exchange.show');
    	}
    

    }

    public function currency_exchange_show()
    {
        return view('admin.currency_rates.show');
    }

    public function currency_exchange_edit($id)
    {
       $currency_rate = CurrencyRate::find($id);

       return view('admin.currency_rates.edit',compact('currency_rate'));
    }

    public function currency_exchange_update(Request $request,$id)
    {
       $currency_rate = CurrencyRate::find($id);

       $currency_rate->base_wallet_id = $request->base_wallet_id;
       $currency_rate->buy = $request->buy;
       $currency_rate->sell = $request->sell;

       $currency_rate->save();


       return back();
    }

    public function reserve_exchange_show()
    {
        return view('admin.reserve.show');
    }

    public function reserve_exchange_edit($id)
    {
       $currency_rate = BaseWallet::find($id);

       return view('admin.reserve.edit',compact('currency_rate'));
    }

    public function reserve_exchange_update(Request $request,$id)
    {
       $currency_rate = BaseWallet::find($id);

       $currency_rate->name = $request->name;
       $currency_rate->amount = $request->amount;
       
       $currency_rate->save();


       return back();
    }

    public function notice_show()
    {
        return view('admin.notice.show');
    }

    public function notice_edit($id)
    {
       $notice = Notice::find($id);

       return view('admin.notice.edit',compact('notice'));
    }

    public function notice_update(Request $request,$id)
    {
       $notice = Notice::find($id);

       $notice->notice = $request->notice;

       
       $notice->save();


       return back();
    }

    public function user_show()
    {
       return view('admin.user.show');
    }

    public function user_edit($id)
    {
       $user = User::find($id);

       return view('admin.user.edit',compact('user'));
    }

    public function user_update(Request $request,$id)
    {
     // dd($request->all());
       $user = User::find($id);

       $user->first_name = $request->first_name;
       $user->last_name = $request->last_name;
       $user->email  = $request->email ;
       $user->address = $request->address;
       $user->phone  = $request->phone ;

       $user->dob = $request->dob;
       $user->city = $request->city;
       $user->is_info_verified = $request->is_info_verified;
       $user->id_type = $request->id_type;

       $user->document_type = $request->document_type;
       $user->is_document_verified = $request->is_document_verified;

       $user->status = $request->status;

       if ($request->id_type == 'nid'){
        if(!is_null($request->nid_front)){
          $user->nid_front =Helper::uploadSingleImage($request->nid_front,'nid_front','nf');
        }
        if(!is_null($request->nid_front)){
           $user->nid_back = Helper::uploadSingleImage($request->nid_back,'nid_back','nb');
        }
            
           
        }else if ($request->id_type == 'driving'){
            if(!is_null($request->driving)){
            $user->driving = Helper::uploadSingleImage($request->driving,'driving','dr');
          }
        }else{
            if(!is_null($request->passport)){
            $user->passport = Helper::uploadSingleImage($request->passport,'passport','pp');
          }
        }
        if ($request->document_type == 'utility'){
            if(!is_null($request->utility)){
            $user->utility = Helper::uploadSingleImage($request->utility,'utility','ut');
          }
        }else{
           if(!is_null($request->bank)){
            $user->bank = Helper::uploadSingleImage($request->bank,'bank','bn');
          }
        }
        if(!is_null($request->image)){
        $user->image = Helper::uploadSingleImage($request->image,'image','img');
      }


       
       $user->save();


       return back();
    }
}
