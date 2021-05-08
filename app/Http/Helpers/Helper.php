<?php
namespace App\Http\Helpers;


class Helper {
    public static function checkProfileStatus()
    {
        if (\Auth::user()->is_otp_verified === 'unverified'){
            return \redirect()->route('user.otp');
        }
        return  false;
    }

    public static function sendVerificationCode($phone = 0, $otp = 0)
    {
        $curl = curl_init();
        $phone = urlencode($phone);
        $otp = urlencode($otp);
        $sms = 'Please use the code -  to verify your phone for ewalletbd.net';
        $url = 'http://'.env('SMS_GATEWAY_HOST').'/link_sms_send.php?op=SMS&user='.env('SMS_GATEWAY_USER_ID').'&pass='.env('SMS_GATEWAY_USER_PASSWORD').'&mobile='.$phone.'&sms='.$sms;
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Accept-Encoding: gzip, deflate",
                "Cache-Control: no-cache",
                "Connection: keep-alive",
                "Host: 103.230.104.200",
                "User-Agent: PostmanRuntime/7.20.1",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($response){
            return response()->json(['msg'=>$response,'status'=>'success']);
        }else{
            return  response()->json(['msg'=>$err,'status'=>'error']);
        }
    }
}
