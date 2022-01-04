<?php

namespace App\Http\Controllers;

use App\Working_service;
use App\Working_service_heading;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class WorkingserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Working_service.index', [
            'services' => Working_service::latest()->get(),
            'heading' => Working_service_heading::find(1)
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
        $service_id = Working_service::insertGetId($request->except('_token', 'thumbnail') + [
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $service_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/service/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Working_service::find($service_id)->update([
                'thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('add_service', 'Service added successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Working_service $service)
    {
        return view('admin.Working_service.show', [
            'info' => Working_service::find($service->id)
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
    public function update(Request $request, Working_service $service)
    {
        Working_service::find($service->id)->update($request->except('_token', 'thumbnail', '_method'));

        if ($request->hasFile('thumbnail')) {
            if (Working_service::find($service->id)->thumbnail != 'default.jpg') {
                $old_photo_location = 'public/uploads/service/' . Working_service::find($service->id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $service->id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/service/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Working_service::find($service->id)->update([
                'thumbnail' => $new_file_name,
            ]);
            return back()->with('update_service', 'Service updated successfully!!!');
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
    public function destroy(Working_service $service)
    {
        if (Working_service::find($service->id)->thumbnail != 'default.jpg') {
            $old_photo_location = 'public/uploads/service/' . Working_service::find($service->id)->thumbnail;
            unlink(base_path($old_photo_location));
        }
        Working_service::find($service->id)->delete();
        return back()->with('delete_service', 'Service deleted successfully!!');
    }
    public function workingserviceheadingupdate ($id){
        return view('admin.Working_service.update_heading', [
            'info' => Working_service_heading::find($id)
        ]);
    }
    public function workingserviceheadingupdatepost(Request $request, $id){
        Working_service_heading::find($id)->update($request->except('_token'));
        return back()->with('update_heading', 'Heading updated successfully!!');
    }
}
