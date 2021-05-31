<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Helpers\Helper;

use App\Model\Admin\Admin;

use App\Model\Frontend\BaseWallet;
use App\Model\Frontend\Contact;
use App\Model\Frontend\ContactUs;
use App\Model\Frontend\CurrencyRate;
use App\Model\Frontend\Upload;
use App\Model\Frontend\TnxValue;
use App\NewsLatter;
use App\User;
use Carbon\Carbon;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function React\Promise\all;

class HomeController extends Controller
{

    public function is_convert_input(Request $request)
    {
     // dd($request->all());
      $tnxvalue = new TnxValue;


      $tnxvalue->user_id = Auth::id();
      $tnxvalue->tnx_number = $request->name;
      $tnxvalue->send_you = $request->send_you;
      $tnxvalue->send_you_base_wallets_id = $request->send_you_base_wallets_id;
      $tnxvalue->send_you_type = $request->send_you_type;
      $tnxvalue->send_you_method = $request->send_you_method;
      $tnxvalue->fee = $request->fee;
      $tnxvalue->fee_type = $request->fee_type;

      $tnxvalue->charge = $request->charge;
      $tnxvalue->charge_type = $request->send_you;
      $tnxvalue->send_to = $request->send_to;
      $tnxvalue->send_to_base_wallets_id = $request->send_to_base_wallets_id;
      $tnxvalue->send_to_type = $request->send_to_type;
      $tnxvalue->send_to_method = $request->send_to_method;

      $tnxvalue->process = 1;

      $tnxvalue->save();

      $send_you = $request->send_you . $request->send_you_type . '('.$request->send_you_method .')';
      $send_to = $request->send_to . $request->send_to_type . '('.$request->send_to_method .')';


      $details = [
            'tnx_number' => $request->name,
            'send_you' => $send_you,
            'fee'=> $request->fee,
            'charge' =>$request->charge,
            'send_to' =>$send_to,
            'url' => 'In above you get your invoice id and track your product .',
            'website' => 'www.grabsoft.tech'


        ];

        $email = Auth::user()->email;

    Mail::to($email)
         ->cc($email)
         ->bcc($email)
         
       ->send(new WelcomeMail($details));

     return redirect()->route('user.home');
   

    }

    public function index()
    {
        if (Helper::checkProfileStatus()){
            return Helper::checkProfileStatus();
        }

        return view('frontend.index')
            ->with([
                'rates'=>CurrencyRate::whereIn('base_wallet_id',[5,6,7,8,10,11,12,13])->get(),
                'reservesAmount'=>BaseWallet::all()
            ]);

    }

    public function history()
    {
        if (Helper::checkProfileStatus()){
            return Helper::checkProfileStatus();
        }
        return view('frontend.history');
    }

    public function about()
    {
        if (Helper::checkProfileStatus()){
            return Helper::checkProfileStatus();
        }
        return view('frontend.about');
    }
    public function faq()
    {
        if (Helper::checkProfileStatus()){
            return Helper::checkProfileStatus();
        }
        return view('frontend.faq');
    }
    public function contact()
    {
        if (Helper::checkProfileStatus()){
            return Helper::checkProfileStatus();
        }
        return view('frontend.contact');
    }

    public function contactSend(Request $request)
    {
        if (Helper::checkProfileStatus()){
            return Helper::checkProfileStatus();
        }
        $this->validate($request,[
            'name'=>['required'],
            'email'=>['required','email','max:50'],
            'subject'=>['required','max:255'],
            'message'=>['required','min:10'],
        ]);
        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with([
            'success'=>'Thanks for contact with us'
        ]);

    }

    public function newslatter(Request $request)
    {
        $this->validate($request,[
            'email'=>['required','email','unique:news_latters','max:50']
        ]);
        $newsLatter = new NewsLatter();
        $newsLatter->email = $request->email;
        $newsLatter->save();
        return response()->json([
            'msg'=>'Thanks for subscription'
        ]);
    }

    public function otpVerification()
    {
        if (Helper::checkOtpIsVerified()){

            return Helper::checkOtpIsVerified();
        }
        $otpNumber = \Auth::user()->phone;
        return view('frontend.otp')
            ->with(['phone'=>$otpNumber]);
    }
    public function documentVerification()
    {
        if (Auth::user()->is_otp_verified == 'unverified'){
            \Alert::warning('Please verify your OTP first');
            return  redirect()->route('user.otp')->with(['phone'=>Auth::user()->phone]);
        }
        if (Helper::checkDocumentIsVerified()){
            return Helper::checkDocumentIsVerified();
        }
        return view('frontend.document');
    }

    public function documentStore(Request $request)
    {
        $this->validate($request,[
            'nid_front'=>['max:2048'],
            'nid_back'=>['max:2048'],
            'driving'=>['max:2048'],
            'passport'=>['max:2048'],
            'utility'=>['max:2048'],
            'bank'=>['max:2048'],
            'image'=>['max:2048']
        ]);

        $user = User::where('id',Auth::id())->first();
        $user->id_type = $request->id_type;
        if ($request->id_type == 'nid'){
            $user->nid_front =Helper::uploadSingleImage($request->nid_front,'nid_front','nf');
            $user->nid_back = Helper::uploadSingleImage($request->nid_back,'nid_back','nb');
        }else if ($request->id_type == 'driving'){
            $user->driving = Helper::uploadSingleImage($request->driving,'driving','dr');
        }else{
            $user->passport = Helper::uploadSingleImage($request->passport,'passport','pp');
        }
        $user->document_type = $request->document_type;
        if ($request->document_type == 'utility'){
            $user->utility = Helper::uploadSingleImage($request->utility,'utility','ut');
        }else{
            $user->bank = Helper::uploadSingleImage($request->bank,'bank','bn');
        }
        $user->image = Helper::uploadSingleImage($request->image,'image','img');
        if ($user->save()){
            $user->is_document_verified = 'verified';
            $user->save();
            \Alert::success('Document Upload Successfully');
        }else{
            \Alert::error('Document Upload not Successfully');
        }
        return redirect()->route('user.home');
    }

    public function convert(Request $request)
    {
        $form = $request->from;
        $formValue = $request->from_value;
        $to = $request->to;
        $toValue = $request->to_value;
        if (empty($form)){
            return redirect()->back();
        }
        $form = Helper::getWalletById($request->from);
        $to = Helper::getWalletById($request->to);
        $fee = 0;
        $charge = 0;
        if ($form->type === 'USD' && $to->type === "TK"){
            $torate = CurrencyRate::where('base_wallet_id',$form->id)->first();
            $net = $formValue;
            $total = round($fee+$charge+$net,2);
        }else if ($form->type === 'USD' && $to->type === "USD"){
            return 'else if';
        }else if ($form->type === 'TK' && $to->type === "TK"){
            return 'TK';
        }else{
            if ($form->id == 1){
                $charge = round((2 / 100) * (double)$formValue,2);
            }else if ($form->id == 2 || $form->id == 3){
                $charge = round((1.5 / 100) * (double)$formValue,2);
            }else{
                $charge = 0;
            }

            if ($to->id == 6 || $to->id == 7 && $toValue < 30.00){
                $fee = 60;
                $net = $formValue;

            }else if($toValue > 100.00 && $toValue < 299.99){
                $torate = CurrencyRate::where('base_wallet_id',$to->id)->first();
                $torate = $torate->sell - 1;
                $toValue = round((double)$formValue / $torate,2);
                $net = $formValue;
            }else if($toValue > 300.00){
                $torate = CurrencyRate::where('base_wallet_id',$to->id)->first();
                $torate = $torate->sell - 2;
                $toValue = round((double)$formValue / $torate,2);
                $net = $formValue;
            }else{
                $net = $formValue;
            }
            $total = round($fee+$charge+$net,2);
        }
        $data = [
            'fee'=>$fee,
            'charge'=>$charge,
            'from'=>$form->id,
            'fromValue'=>$formValue,
            'to'=>$to->id,
            'toValue'=>$toValue,
            'payable'=>$total
        ];
        return view('frontend.convert')->with([
            'data'=>$data
        ]);
    }
    public function convertMoney($from,$to,$value)
    {
        if (empty($from) || empty($to)){
            return;
        }
        $totalFrom = round((double)$value,2);
        $getFromCurrency = Helper::getWalletById($from);
        $getToCurrency = Helper::getWalletById($to);
        if ($getFromCurrency->type === 'TK'){
            $charge = 0;
            $fee = 0;
            $receiveValue = 0.00;
            if ($getFromCurrency->id == 1){
                $charge = (2/100) * $totalFrom;
            }elseif ($getFromCurrency->id == 2 || $getFromCurrency->id == 3){
                $charge = (1.5/100) * $totalFrom;
            }else{
                $charge = 0;
            }
            $receiveValue = round(($totalFrom - $charge),2);
            $receiveValue = Helper::adjustTotalTk($receiveValue,$getToCurrency->id);
            return $receiveValue;


//            $fee = 0;
//            $charge = 0;
//            $discount = 0;
//            $rate = CurrencyRate::where('base_wallet_id',$getToCurrency->id)->first();
//            $total = 0.00;
//            $receiveValue = 0.00;




//            if ($value > 0 && $value < 99.99){
//                if ($getToCurrency->id == 6 || $getToCurrency->id == 7 && $value < 30.01){
//                    $fee = 60;
//                }else{
//                    $charge = ((2/100)*$value);
//                    $fee = 0;
//                    $total = $value - $charge ;
//                    $receiveValue = ($total/$rate->buy);
//                }
//            }else if ($value > 99.99 && $value < 299.99){
//
//            }else{
//
//            }
        }else{
            return 'USD';
        }
        return $receiveValue;
    }


   public function profile_show()
   {
    $profile = User::find(Auth::user()->id);
    return view('frontend.profile',compact('profile'));
   }

   public function profile_document_show(){
    $user = User::find(Auth::user()->id);
    return view('frontend.profile_document',compact('user'));
   } 

   public function profile_transaction_show()
   {
    $tnxData = TnxValue::where('user_id',Auth::user()->id)->orderby('created_at','desc')->get();
    //dd($tnxData);
    return view('frontend.profile_transaction',compact('tnxData'));
   }  

    

}
