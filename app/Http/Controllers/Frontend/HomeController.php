<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Model\Admin\Activity;
use App\Model\Admin\ActivityPanel;
use App\Model\Admin\ActivityPost;
use App\Model\Admin\Admin;
use App\Model\Admin\Blog;
use App\Model\Admin\BlogCategory;
use App\Model\Admin\Event;
use App\Model\Admin\News;
use App\Model\Admin\Partner;
use App\Model\Admin\PhotoGallery;
use App\Model\Admin\PhotoGalleryYear;
use App\Model\Admin\Skill;
use App\Model\Admin\Slider;
use App\Model\Admin\SuccessStory;
use App\Model\Admin\Team;
use App\Model\Admin\TeamPanelName;
use App\Model\Admin\Tips;
use App\Model\Admin\Video;
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
        return view('frontend.history');
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactSend(Request $request)
    {
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
        echo phpinfo();
        $otpNumber = \Auth::user()->phone;
        return view('frontend.otp')
            ->with(['phone'=>$otpNumber]);
    }
}
