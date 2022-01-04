<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\Testimonial_heading;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimonial.index', [
            'testimonials' => Testimonial::latest()->get(),
            'heading' => Testimonial_heading::find(1)
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
        $testimonial_id = Testimonial::insertGetId($request->except('_token', 'thumbnail') + [
            'created_at' => Carbon::now(),
        ]);
        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $testimonial_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/testimonial/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Testimonial::find($testimonial_id)->update([
                'thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('add_testimonial', 'Testimonial added successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonial.show', [
            'info' => Testimonial::find($testimonial->id)
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
    public function update(Request $request, Testimonial $testimonial)
    {
        Testimonial::find($testimonial->id)->update($request->except('_token', 'thumbnail', '_method'));

        if ($request->hasFile('thumbnail')) {
            if (Testimonial::find($testimonial->id)->thumbnail != 'default.jpg') {
                $old_photo_location = 'public/uploads/testimonial/' . Testimonial::find($testimonial->id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $testimonial->id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/testimonial/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Testimonial::find($testimonial->id)->update([
                'thumbnail' => $new_file_name,
            ]);
            return back()->with('update_testimonial', 'Testimonial updated successfully!!!');
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
    public function destroy(Testimonial $testimonial)
    {
        if (Testimonial::find($testimonial->id)->thumbnail != 'default.jpg') {
            $old_photo_location = 'public/uploads/testimonial/' . Testimonial::find($testimonial->id)->thumbnail;
            unlink(base_path($old_photo_location));
        }
        Testimonial::find($testimonial->id)->delete();
        return back()->with('delete_testimonial', 'Testimonial deleted successfully!!');
    }
    public function testimonialheadingupdate($id)
    {
        return view('admin.testimonial.update_heading', [
            'info' => Testimonial_heading::find($id)
        ]);
    }
    public function testimonialheadingupdatepost(Request $request, $id)
    {
        Testimonial_heading::find($id)->update($request->except('_token'));
        return back()->with('update_heading', 'Heading updated successfully!!');
    }
}
