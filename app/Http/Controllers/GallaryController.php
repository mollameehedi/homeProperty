<?php

namespace App\Http\Controllers;

use App\Gallary_heading;
use App\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.index', [
            'galleries' => Gallery::latest()->get(),
            'heading' => Gallary_heading::find(1)
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
        $gallery_id = Gallery::insertGetId($request->except('_token', 'gallary_photo') + [
            'created_at' => Carbon::now(),
        ]);
        if ($request->hasFile('gallary_photo')) {
            $uploaded_photo = $request->file('gallary_photo');
            $new_file_name = $gallery_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/gallery/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Gallery::find($gallery_id)->update([
                'gallary_photo' => $new_file_name,
            ]);
        }
        return back()->with('add_gallery', 'Gallery photo added successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', [
            'info' => Gallery::find($gallery->id)
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
    public function update(Request $request, Gallery $gallery)
    {
        Gallery::find($gallery->id)->update($request->except('_token', 'gallary_photo', '_method'));

        if ($request->hasFile('gallary_photo')) {
            if (Gallery::find($gallery->id)->gallary_photo != 'default.jpg') {
                $old_photo_location = 'public/uploads/gallery/' . Gallery::find($gallery->id)->gallary_photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('gallary_photo');
            $new_file_name = $gallery->id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/gallery/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Gallery::find($gallery->id)->update([
                'gallary_photo' => $new_file_name,
            ]);
            return back()->with('update_gallery', 'Gallery photo updated successfully!!!');
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
    public function destroy(Gallery $gallery)
    {
        if (Gallery::find($gallery->id)->gallay_photo != 'default.jpg') {
            $old_photo_location = 'public/uploads/gallery/' . Gallery::find($gallery->id)->gallary_photo;
            unlink(base_path($old_photo_location));
        }
        Gallery::find($gallery->id)->delete();
        return back()->with('delete_gallery', 'Gallery photo deleted successfully!!');
    }
    public function galleryheadingupdate($id){
        return view('admin.gallery.update_heading', [
            'info' => Gallary_heading::find($id)
        ]);
    }
    public function galleryheadingupdatepost(Request $request, $id){
        Gallary_heading::find($id)->update($request->except('_token'));
        return back()->with('update_heading', 'Heading updated successfully!!');
    }
}
