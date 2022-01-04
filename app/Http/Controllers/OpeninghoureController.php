<?php

namespace App\Http\Controllers;

use App\Opening_houre;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OpeninghoureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Opening_houre.index', [
            'houres' => Opening_houre::latest()->get()
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
        Opening_houre::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('hour_add', 'Opening schedule added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Opening_houre $hour)
    {
        return view('admin.Opening_houre.show', [
            'info' => Opening_houre::find($hour->id)
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
    public function update(Request $request, Opening_houre $hour)
    {
        Opening_houre::find($hour->id)->update($request->except('_token'));
        return back()->with('update_schedule', 'Opening schedule updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opening_houre $hour)
    {
        Opening_houre::find($hour->id)->delete();
        return back()->with('delete_schedule', 'Opening schedule deleted successfully!!');
    }
}
