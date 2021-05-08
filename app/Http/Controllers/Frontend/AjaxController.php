<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Helpers\Helper;
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
        $sms = 'Your One Time Password (OTP) for EWalletBD is '.$otp.'. Helpline 01521458894';
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
}
