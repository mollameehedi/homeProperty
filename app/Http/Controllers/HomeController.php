<?php

namespace App\Http\Controllers;

use App\Logo;
use App\Schedule;
use App\Subscriber;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home.home');
    }
    public function editprofile()
    {
        return view('admin.home.edit_profile');
    }
    public function changename(Request $request){
        User::find(Auth::id())->update([
            'name' => $request->name,
        ]);
        return back()->with('changename', 'Name Change Successfully!@!');
    }
    function changephoto(Request $request)
    {
        if ($request->hasFile('profile_photo')) {
            if (Auth::user()->profile_photo != 'default.jpg') {
                $old_photo_location = 'public/uploads/profile_photos/' . Auth::user()->profile_photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('profile_photo');
            $new_file_name = Auth::id() . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/profile_photos/' . $new_file_name;
            Image::make($uploaded_photo)->resize(300, 300)->save(base_path($new_file_location));
            User::find(Auth::id())->update([
                'profile_photo' => $new_file_name,
            ]);
            return back()->with('profile_photo', 'Your Profile Photo Changed Successfully!!!');
        }
         else {
            return back();
        }
    }
    function changepassword(Request $request)
    {
        if (Hash::check($request->old_password, Auth::user()->password)) {
            if ($request->old_password == $request->password) {
                return back()->with('same_pass', 'your new password is like your current password!!!');
            } else {
                User::find(Auth::id())->update([
                    'password' => Hash::make($request->password)
                ]);
                return back()->with('chang_pass', 'your Password Change Successfully!!!');
            }
        } else {
            return back()->with('not_match', 'Your Password is not match!!!!');
        }
    }
    public function homelogo(){
        return view('admin.logo.index', [
            'logo' => Logo::find(1)
        ]);
    }
    public function homelogoupdate($id){
        return view('admin.logo.update_logo', [
            'info' => Logo::find($id)
        ]);
    }
    public function homelogoupdatepost(Request $request, $id){
        if ($request->hasFile('logo')) {
            if (Logo::find($id)->logo != 'default.png') {
                $old_photo_location = 'public/uploads/logo/' . Logo::find($id)->logo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('logo');
            $new_file_name = $id. "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/logo/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            User::find($id)->update([
                'logo' => $new_file_name,
            ]);
            return back()->with('update_logo', 'Logo updated successfully!!!');
        } else {
            return back();
        }
    }
    public function visitorschedule(){
        return view('admin.visitor_schedule.index', [
            'visitors' => Schedule::latest()->get(),
        ]);
    }
    public function visitorscheduledelete(Request $request, $id){
        Schedule::find($id)->delete();
        return back()->with('schedule_delete', 'Schedule deleted successcully!!');
    }
    public function subscriber(){
        return view('admin.subscriber.index', [
            'subscribers' => Subscriber::latest()->get(),
        ]);
    }
}
