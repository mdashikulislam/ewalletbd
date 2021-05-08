<?php
namespace App\Http\Helpers;


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
}
