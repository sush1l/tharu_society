<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Http\Requests\StoreContactMessageRequest;
use App\Http\Requests\StoreMembershipJoinRequest;
use App\Mail\AutoReplyEmail;
use App\Models\AddCity;
use App\Models\Announcement;
use App\Models\Audio;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\ContactMessage;
use App\Models\Country;
use App\Models\EventDetail;
use App\Models\Events;
use App\Models\Job;
use App\Models\Link;
use App\Models\Member;
use App\Models\Membership;
use App\Models\MembershipJoin;
use App\Models\OfficeDetail;
use App\Models\PhotoGallery;
use App\Models\Popup;
use App\Models\Report;
use App\Models\ReportCategory;
use App\Models\Slider;
use App\Models\VideoGallery;
use App\Models\work;
use Illuminate\Support\Facades\Mail;

class FrontendController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $officeDetail = OfficeDetail::whereShowOnIndex(1)->whereType('Introduction')->first();


        $galleries = PhotoGallery::with('photos')->get();
        $blogs = Blog::limit(6)->get();
        $events= Events::limit(6)->get();
        $sliders = Slider::latest()->get();
        $members = Member::orderby('position')->get();
        $popups = Popup::whereShowOnIndex(1)->latest()->get();
        return view('frontend.index', compact('officeDetail','members', 'blogs', 'galleries',  'sliders', 'popups','events'));
    }
    // public function languageChange($lang)
    // {

    //     if (config('default.dual_language')) {
    //         if (!empty($lang) && in_array($lang, config('app.locales'))) {
    //             Cache::put('language', $lang, 60 * 60 * 12);
    //             app()->setLocale($lang);
    //         } else {
    //             Cache::put('language', 'ne', 60 * 60 * 12);
    //             app()->setLocale('ne');
    //         }
    //     }
    //     $url = url()->previous();
    //     $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
    //     if ($route == 'welcome') {
    //         return redirect(\route($route, ['language' => $lang]));
    //     } else {
    //         $count = Str::length($url);

    //         $url = Str::substr($url, 0, $count - 2);
    //         return redirect($url . $lang ?? 'ne');
    //     }
    // }

    public function staticMenus($slug)
    {
        switch ($slug) {
            case 'whatWeDo':
                return view('frontend.work');
                break;
            case 'news':
                return view('frontend.news');
                break;
            default:
                return response(view('errors.404'), 404);
        }
    }

    public function search()
    {
        $keyword = request('keyword');
        if (empty($keyword)) {
            return back();
        }

        $jobs = Job::search($keyword)->paginate(20);

        return view('frontend.search.search_res', compact('keyword', 'jobs'));
    }


    public function officeDetails(OfficeDetail $officeDetail)
    {
        return view('frontend.officeDetail', compact('officeDetail'));
    }

    public function contactStore(StoreContactMessageRequest $request)
    {
        ContactMessage::create($request->validated());
        session()->flash('message', 'Message Sent Successfully');
        return redirect()->back()->withFragment('myDiv');
    }

    public function membershipStore(StoreMembershipJoinRequest $request)
    {
        MembershipJoin::create($request->validated());
        Mail::to($request->input('email'))->send(new AutoReplyEmail);
        session()->flash('message', 'Message Sent Successfully');
        return redirect()->back();
    }

    public function announcement()
    {
        $announcements = Announcement::latest()->paginate(6);
        return view('frontend.announcement', compact('announcements'));
    }

    public function about_us()
    {
        $officeDetail = OfficeDetail::whereShowOnIndex(1)->whereType('Introduction')->first();
        $members = Member::with('membershipCategory')->get();
        return view('frontend.aboutus', compact('officeDetail', 'members'));
    }


    public function photo()
    {
        $photoAlbums = PhotoGallery::with('photos')->paginate(6);
        return view('frontend.gallery.gallery', compact('photoAlbums'));
    }

    public function city()
    {
        $addCities = AddCity::latest()->get();
        return view('frontend.job.city', compact('addCities'));
    }

    public function job(AddCity $addCity)
    {
        $addCity->load('jobs');
        return view('frontend.job.job', compact('addCity'));
    }
    public function jobDetail(Job $job, AddCity $addCity)
    {
        $addCities = AddCity::with('jobs')->get();
        return view('frontend.job.job_detail', compact('job', 'addCities'));
    }
    public function photoGalleryDetail(PhotoGallery $photoGallery)
    {
        return view('frontend.gallery.single_photo', compact('photoGallery'));
    }

    public function video()
    {
        $videoGalleries = VideoGallery::latest()->paginate(6);
        return view('frontend.gallery.video', compact('videoGalleries'));
    }

    // public function tiktok()
    // {
    //     $tiktoks = TikTok::latest()->paginate(6);
    //     return view('frontend.gallery.tiktok', compact('tiktoks'));
    // }

    public function audio()
    {
        $audios = Audio::latest()->paginate('6');
        return view('frontend.gallery.audio', compact('audios'));
    }

    public function store()
    {
        // Validate and store the form data

        return back();
    }

    public function contact()
    {

        return view('frontend.contact');
    }
    public function join()
    {

        $countries = Country::all();
        return view('frontend.joinform', compact('countries'));
    }

    public function workDetail(work $work)
    {
        $works = work::where('id', '!==', $work->id)->paginate(8);
        return view('frontend.pages.what_we_do.single_work', compact('work', 'works'));
    }

    public function reportCategory(ReportCategory $reportCategory)
    {
        $reportCategory->load('reports');
        return view('frontend.pages.form.form', compact('reportCategory'));
    }

    public function report(Report $report)
    {
        $reports = Report::where('id', '!=', $report->id)->where('report_category_id', $report->report_category_id)->get();
        return view('frontend.pages.form.single_form', compact('report', 'reports'));
    }

    public function link()
    {
        $links = link::latest()->get();
        return view('frontend.pages.useful_links', compact('links'));
    }

    public function eventIntro()
    {
        $eventDetails = EventDetail::get();
        return view('frontend.eventDetail', compact('eventDetails'));
    }


    public function membershipIntro()
    {
        $memberships = Membership::get();
        return view('frontend.membership', compact('memberships'));
    }

    public function member()
    {
        $members = Member::with('membershipCategory')->get();
        return view('frontend.member', compact('members'));
    }

    // public function events()
    // {
    //     $events = Events::where('type','news')->orderBy('date','desc')->paginate(6);
    //     return view('frontend.pages.news.news',compact('newses'));
    // }

    // public function newsDetail(News $news)
    // {
    //     return view('frontend.pages.news.single_news',compact('news'));
    // }


    public function events()
    {

        $events = Events::with("videoGalleries")->latest()->get();
        return view('frontend.pages.event.event', compact('events'));
    }

    public function eventDetail(Events $events)
    {
        $events->load("videoGalleries");
        return view('frontend.pages.event.single_event', compact('events'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return view('frontend.pages.blog.blog', compact('blogs'));
    }


    public function blogDetail(Blog $blog)
    {
        return view('frontend.pages.blog.single_blog', compact('blog'));
    }

    public function comment(StoreCommentRequest $request)
    {
        Comment::create($request->validated());
        session()->flash('message', 'Comment Added Successfully');
        return back();
    }
}
