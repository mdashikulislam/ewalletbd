<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Helpers\Helper;
use App\Model\Frontend\BaseWallet;
use App\Model\Frontend\CurrencyRate;
use App\OtpVerify;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AjaxController extends Controller
{
    public function sendOtp()
    {
        $phoneNumber = \Auth::user()->phone;
        $otp = rand(1111,9999);
        $sms = 'Your One Time Password (OTP) for EWalletBD is '.$otp.'. Helpline 01922304499';
        try {
            $soapClient = new \SoapClient('https://api2.onnorokomsms.com/sendSMS.asmx?wsdl');
            $paramArray = array(
                'userName' => "01521458894",
                'userPassword' => "34839eda48",
                'mobileNumber' => "$phoneNumber",
                'smsText' => "$sms",
                'type' => "TEXT",
                'maskName' => '',
                'campaignName' => '',
            );
            $value = $soapClient->__call("OneToOne", array($paramArray));
            $response =  $value->OneToOneResult;
        }catch (\Exception $exception){
           $error =  $exception->getMessage();
        }
        if ($otp){
            $otpVerify = new OtpVerify();
            $otpVerify->phone = $phoneNumber;
            $otpVerify->otp = $otp;
            $otpVerify->save();
        }
        if ($response == 1900){
            return response()->json([
                'msg'=>'OTP send successfully',
                'status'=>'success',
            ]);
        }else{
            return response()->json([
                'msg'=>'OTP not send',
                'error'=>'success',
            ]);
        }

    }

    public function verify($otp)
    {
        if (empty($otp)){
            return response()->json([
                'msg'=>'OTP not found',
                'status'=>'error'
            ]);
        }
        $phone = \Auth::user()->phone;
        $check= OtpVerify::where(['phone'=>$phone,'otp'=>$otp])->orderByDesc('created_at')->first();
        if ($check){
            $user = User::where('phone',$check->phone)->first();
            $user->is_otp_verified = 'verified';
            $user->save();
            return response()->json([
                'msg'=>'OTP verified',
                'status'=>'success'
            ]);
        }else{
            return response()->json([
                'msg'=>'Incorrect OTP',
                'status'=>'error'
            ]);
        }
    }

    public function exchange($from,$to,$value)
    {
        if (empty($from) || empty($to)){
            return;
        }

        $totalFrom = round((double)$value,2);
        $getFromCurrency = Helper::getWalletById($from);
        $getToCurrency = Helper::getWalletById($to);
        $fromValue = 0;
        $toValue = 0;
        $rate = 0;
        $sendRate = 0;

        if ($getFromCurrency->type == "TK" && $getToCurrency->type == "USD"){
           $fromCurrencyRate =  CurrencyRate::where('base_wallet_id',$getFromCurrency->id)->first();
           $toCurrencyRate =  CurrencyRate::where('base_wallet_id',$getToCurrency->id)->first();
           $rateValue = round((double)$fromCurrencyRate->buy,2)/round((double)$toCurrencyRate->sell,2);
           $sendRate = $rateValue;
           $rate = round($rateValue * $totalFrom,2);
        }else if($getFromCurrency->type == "USD" && $getToCurrency->type == "TK" ){
            $fromCurrencyRate =  CurrencyRate::where('base_wallet_id',$getFromCurrency->id)->first();
            $toCurrencyRate =  CurrencyRate::where('base_wallet_id',$getToCurrency->id)->first();
            $sendRate = round((double)$fromCurrencyRate->buy,2);
            $rate = round(round((double)$fromCurrencyRate->buy,3)  * $totalFrom,2);
        }else if($getFromCurrency->type == "TK" && $getToCurrency->type == "TK"){
            $fromCurrencyRate =  CurrencyRate::where('base_wallet_id',$getFromCurrency->id)->first();
            $sendRate = round((double)$fromCurrencyRate->sell,3);
            $rate = round(round((double)$fromCurrencyRate->sell,3) * $totalFrom,2);
        }else{
            $fromCurrencyRate =  CurrencyRate::where('base_wallet_id',$getFromCurrency->id)->first();
            $toCurrencyRate =  CurrencyRate::where('base_wallet_id',$getToCurrency->id)->first();
            $buyRate = round((double)$fromCurrencyRate->buy,3) /  round((double)$toCurrencyRate->sell,3);
            $sendRate = $buyRate;
            $rate = round($buyRate * $totalFrom,2);
        }
        $reserve = 'Reserve: '.$getToCurrency->amount.' '.$getToCurrency->type;
        $exchangeRate = 'Exchange rate: 1 '.$getFromCurrency->type.' = '.round($rate/ $totalFrom,2).' '.$getToCurrency->type;

        $data = [
            'rate'=>$rate,
            'reserve'=>$reserve,
            'exchange'=>$exchangeRate,
            'from_image'=>$getFromCurrency->image,
            'to_image'=>$getToCurrency->image
        ];
        return response()->json($data);
    }

    public function currencyInfo($from , $to)
    {
        return $to;
    }

    public function dropdown($from)
    {
        $currency = BaseWallet::where('id',$from)->first();
        $changeCurrency = null;
        if ($currency->type == 'TK'){
            $changeCurrency = BaseWallet::where(['type'=>'USD','status'=>'active','receive'=>1])->get();

        }else{
            $changeCurrency = BaseWallet::where(['type'=>'TK','status'=>'active','receive'=>1])->get();
        }
        $html = "";
        foreach ($changeCurrency as $key => $change){
//            $html .= "<option  value='.$change->id.'>'.$change->name.' ('.$change->type.')";
            $html .= "<option ";
            $html .= ($key == 0 ? 'selected':'');
            $html .= " value='$change->id'";
            $html .=">$change->name ($change->type)";
            $html .="</option>";

        }
        return $html;
    }
}
