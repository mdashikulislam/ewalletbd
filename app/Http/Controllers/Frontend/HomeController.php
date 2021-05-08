<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;

use App\Model\Admin\Admin;

use App\Model\Frontend\Contact;
use App\Model\Frontend\ContactUs;
use App\Model\Frontend\Upload;
use App\NewsLatter;
use App\User;
use Carbon\Carbon;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function React\Promise\all;

class HomeController extends Controller
{
    public function index()
    {
        if (Helper::checkProfileStatus()){
            return Helper::checkProfileStatus();
        }

        return view('frontend.index');

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
}
