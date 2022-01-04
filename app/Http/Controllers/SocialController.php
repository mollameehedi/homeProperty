<?php

namespace App\Http\Controllers;

use App\Social_media;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.social.index', [
            'socials' => Social_media::latest()->get()
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
        Social_media::insert($request->except('_token') + [
            'created_at' => Carbon::now()
        ]);  
        return back()->with('add_media', 'Social media added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Social_media $social)
    {
        return view('admin.social.show', [
            'info' => Social_media::find($social->id)
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
    public function update(Request $request, Social_media $social)
    {
        Social_media::find($social->id)->update($request->except('_token', '_method'));
        return back()->with('update_media', 'Social media updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social_media $social)
    {
        Social_media::find($social->id)->delete();
        return back()->with('delete_media', 'Social media deleted successfully!!');
    }
}
