<?php

namespace App\Http\Controllers;

use App\About_detail;
use App\House_detail;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    public function aboutdetail(){
        return view('admin.about.index', [
            'detail' => About_detail::find(1)
        ]);
    }
    public function aboutdetailupdate($id){
        return view('admin.about.detail_update', [
            'info' => About_detail::find($id)
        ]);
    }
    public function aboutdetailupdatepost(Request $request, $id){
        About_detail::find($id)->update($request->except('_token', 'thumbnail'));
        if ($request->hasFile('thumbnail')) {
            if (About_detail::find($id)->thumbnail != 'default.jpg') {
                $old_photo_location = 'public/uploads/about/' . About_detail::find($id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/about/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            About_detail::find($id)->update([
                'thumbnail' => $new_file_name,
            ]);
            return back()->with('update_detail', 'Detail updated successfully!!!');
        } else {
            return back();
        }
    }
    public function housedetail(){
        return view('admin.House_detail.index', [
            'detail' => House_detail::find(1)
        ]);
    }
    public function housedetailupdate($id){
        return view('admin.House_detail.Update_detail', [
            'info' => House_detail::find($id)
        ]);
    }
    public function housedetailupdatepost(Request $request, $id){
        House_detail::find($id)->update($request->except('_token'));
        return back()->with('update_detail', 'Detail updated successfully!!!');

    }
}
