<?php
namespace App\Http\Helpers;


use App\Model\Frontend\BaseWallet;
use App\Model\Frontend\CurrencyRate;

class Helper {
    public static function checkProfileStatus()
    {
        if (\Auth::user()->is_otp_verified === 'unverified'){
            \Alert::warning('Please verify your OTP');
            return \redirect()->route('user.otp');
        }
        if (\Auth::user()->is_document_verified === 'unverified'){
            \Alert::warning('Please upload your Documents');
            return \redirect()->route('user.document.verification');
        }
        return  false;
    }

    public static function checkOtpIsVerified()
    {
        if (\Auth::user()->is_otp_verified === 'verified'){
            return \redirect()->route('user.home');
        }
        return  false;
    }
    public static function checkDocumentIsVerified()
    {
        if (\Auth::user()->is_document_verified === 'verified'){
            return \redirect()->route('user.home');
        }
        return  false;
    }
    public static function uploadSingleImage($request = null, $path = '', $prefix = '')
    {
        $file = $request;
        $fileName = $prefix.'_'.time().rand(0000,9999).'.'.$file->getClientOriginalExtension();
        $destination = $path;
        $file->storeAs($destination,$fileName,'public');
        $fileNameWithDestination = $destination . '/'.$fileName;
        return $fileNameWithDestination;
    }

    public static function getCurrencyDropdown($selected = 0,$orderBy = "DESC")
    {
        $baseWallet = BaseWallet::select('id','name','type');
        if ($orderBy == 'DESC'){
            $baseWallet = $baseWallet->orderByDesc('id');
        }else{
            $baseWallet = $baseWallet->orderBy('id' , 'ASC');
        }
        $baseWallet = $baseWallet->where([
            'status'=>'active',
            'send'=>1,
            'receive'=>1
            ])->get();
        $html = '';
        if ($baseWallet){
            foreach ($baseWallet as $currency){
                $html .= '<option '.($currency->id == $selected ? "selected":'').' value="'.$currency->id.'">'.$currency->name.' ('.$currency->type.')</option>';
            }
        }
        return $html;
    }

    public static function getWalletById($id = 0)
    {
        return BaseWallet::where('id',$id)->first();
    }

    public static function getWalletNameById($id =0)
    {
        $walletName = BaseWallet::where('id',$id)->first();
        return $walletName->name;
    }
    public static function adjustTotalTk($total,$wallet)
    {
        $rate = CurrencyRate::where('base_wallet_id',$wallet)->first();
        $rate = round((double)$rate->sell,2);
        $convertDoller = round(($total/$rate),2);
        return $convertDoller;
    }
}
