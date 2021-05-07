<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
use App\Model\Frontend\Upload;
use App\User;
use Carbon\Carbon;
use http\Message;
use Illuminate\Http\Request;
use function React\Promise\all;

class HomeController extends Controller
{
    public function index()
    {
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
}
