<?php

namespace App\Http\Controllers;

use App\About_detail;
use App\Gallary_heading;
use App\Gallery;
use App\Home_banner;
use App\House_detail;
use App\Info;
use App\Logo;
use App\Opening_houre;
use App\Schedule;
use App\Social_media;
use App\Subscriber;
use App\Testimonial;
use App\Testimonial_heading;
use App\Working_service;
use App\Working_service_heading;
use App\Youtube_link;
use App\Youtube_link_heading;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Layout;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index', [
            'logo' => Logo::find(1),
            'banners' => Home_banner::latest()->get(),
            'youtube_heading' => Youtube_link_heading::find(1),
            'youtube_link' => Youtube_link::latest()->get(),
            'working_heading' => Working_service_heading::find(1),
            'workings' => Working_service::latest()->get(),
            'gallery_heading' => Gallary_heading::find(1),
            'galleries' => Gallery::limit(6)->get(),
            'testimonial_heading' => Testimonial_heading::find(1),
            'testimonials' => Testimonial::latest()->get(),
            'infos' => Info::latest()->get(),
            'socials' => Social_media::latest()->get(),
            'schedules' => Opening_houre::latest()->get(),
            'layouts' => Layout::all(),
        ]);
    }
    public function about(){
        return view('frontend.about', [
            'logo' => Logo::find(1),
            'infos' => Info::latest()->get(),
            'socials' => Social_media::latest()->get(),
            'about_detail' => About_detail::find(1),
            'youtube_heading' => Youtube_link_heading::find(1),
            'youtube_link' => Youtube_link::latest()->get(),
            'testimonial_heading' => Testimonial_heading::find(1),
            'testimonials' => Testimonial::latest()->get(),
            'house_detail' => House_detail::find(1),
            'schedules' => Opening_houre::latest()->get(),

        ]);
    }
    public function gallery(){
        return view('frontend.gallery', [
            'logo' => Logo::find(1),
            'infos' => Info::latest()->get(),
            'socials' => Social_media::latest()->get(),
            'gallery_heading' => Gallary_heading::find(1),
            'galleries' => Gallery::latest()->get(),
            'schedules' => Opening_houre::latest()->get(),

        ]);
    }
    public function location(){
        return view('frontend.location', [
            'logo' => Logo::find(1),
            'infos' => Info::latest()->get(),
            'socials' => Social_media::latest()->get(),
            'schedules' => Opening_houre::latest()->get(),

        ]);
    }
    public function schedulepost(Request $request){
        Schedule::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('set_schedule', 'Schedule send successfully!!');
    }
    public function subscriberpost(Request $request){
        Subscriber::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('subscriber_send', 'Subscribtion  Successfully Complete!!');
    }
}
