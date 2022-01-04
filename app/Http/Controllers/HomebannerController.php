<?php

namespace App\Http\Controllers;

use App\Home_banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class HomebannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home_banner.index', [
            'banners' => Home_banner::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner_id = Home_banner::insertGetId($request->except('_token', 'thumbnail') + [
            'created_at' => Carbon::now(),
        ]);
        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $banner_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/home_banner/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Home_banner::find($banner_id)->update([
                'thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('add_banner', 'Banner detail added successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Home_banner $banner)
    {
        return view('admin.home_banner.show', [
            'info' => Home_banner::find($banner->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home_banner $banner)
    {
        Home_banner::find($banner->id)->update($request->except('_token', 'thumbnail', '_method'));

        if ($request->hasFile('thumbnail')) {
            if (Home_banner::find($banner->id)->thumbnail != 'default.png') {
                $old_photo_location = 'public/uploads/home_banner/' .Home_banner::find($banner->id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $banner->id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/home_banner/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Home_banner::find($banner->id)->update([
                'thumbnail' => $new_file_name,
            ]);
            return back()->with('update_banner', 'Banner updated successfully!!!');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home_banner $banner)
    {
        if (Home_banner::find($banner->id)->thumbnail != 'default.png') {
            $old_photo_location = 'public/uploads/home_banner/' . Home_banner::find($banner->id)->thumbnail;
            unlink(base_path($old_photo_location));
        }
        Home_banner::find($banner->id)->delete();
        return back()->with('delete_banner', 'Banner deleted successfully!!');
    }
}
