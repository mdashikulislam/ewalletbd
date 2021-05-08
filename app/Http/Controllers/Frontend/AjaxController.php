<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Helpers\Helper;
use App\OtpVerify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AjaxController extends Controller
{
    public function sendOtp()
    {
        $phoneNumber = \Auth::user()->phone;
        $otp = rand(1111,9999);

        if ($otp){
            $otpVerify = new OtpVerify();
            $otpVerify->phone = $phoneNumber;
            $otpVerify->otp = $otp;
            $otpVerify->save();
        }
//        $response = Helper::sendVerificationCode($phoneNumber,$otp);
        return response()->json([
            'msg'=>'OTP send successfully',
            'status'=>'success',
            'code'=>$otp
        ]);
    }

    public function verify($otp)
    {
        if (empty($otp)){
            return;
        }
        $phone = \Auth::user()->phone;
        $check= OtpVerify::where(['phone'=>$phone,'otp'=>$otp])->orderByDesc('created_at')->first();
        if ($check){
            
            return response()->json([
                'msg'=>'OTP verified',
                'status'=>'success'
            ]);
        }else{
            return response()->json([
                'msg'=>'OTP verification failed',
                'status'=>'error'
            ]);
        }
    }
}
