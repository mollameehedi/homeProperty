<?php

namespace App\Http\Controllers;

use App\Youtube_link;
use App\Youtube_link_heading;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class YoutubelinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.youtube_linke.index', [
            'links' => Youtube_link::latest()->get(),
            'heading' => Youtube_link_heading::find(1)
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
        $youtube_id = Youtube_link::insertGetId($request->except('_token', 'thumbnail') + [
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $youtube_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/youtube_thumbnail/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Youtube_link::find($youtube_id)->update([
                'thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('add_link', 'Link added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Youtube_link $link)
    {
        return view('admin.youtube_linke.show', [
            'info' => Youtube_link::find($link->id)
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
    public function update(Request $request, Youtube_link $link)
    {
        Youtube_link::find($link->id)->update($request->except('_token', '_method', 'thumbnail'));
        if ($request->hasFile('thumbnail')) {
            if (Youtube_link::find($link->id)->thumbnail != 'default.jpg') {
                $old_photo_location = 'public/uploads/youtube_thumbnail/' . Youtube_link::find($link->id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $link->id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/youtube_thumbnail/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Youtube_link::find($link->id)->update([
                'thumbnail' => $new_file_name,
            ]);
            return back()->with('update_link', 'Link updated successfully!!');
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
    public function destroy(Youtube_link $link)
    {
        Youtube_link::find($link->id)->delete();
        return back()->with('delete_link', 'Link deleted successfully!!');
    }
    public function youtubelinkheadingupdate($id){
        return view('admin.youtube_linke.update_heading', [
            'info' => Youtube_link_heading::find($id)
        ]);
    }
    public function youtubelinkheadingupdatepost(Request $request, $id){
        Youtube_link_heading::find($id)->update($request->except('_token'));
        return back()->with('update_heading', 'Heading updated successfully!!');
    }
}
