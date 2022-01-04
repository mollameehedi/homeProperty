<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layout;
use Carbon\Carbon;
use Image;

class LayoutController extends Controller
{
    public function index(){
        return view('admin.land_layouts.index',[
            'layouts' => Layout::all(),
        ]);
    }
    public function store(Request $request){

        $layout_id = Layout::insertGetId($request->except('_token','photo') + [
            'created_at' => Carbon::now(),
        ]);
        $uploaded_photo = $request->file('photo');
        $new_file_name = $layout_id. "." . $uploaded_photo->getClientOriginalExtension();
        $new_file_location = 'public/uploads/layout_photo/'.$new_file_name;
        Image::make($uploaded_photo)->save(base_path($new_file_location));
        Layout::find($layout_id)->update([
            'photo' => $new_file_name,
        ]);
       return back()->with('success_status', 'Added successfully');
    }
    public function delete($id){
        echo $old_photo_location = 'public/uploads/layout_photo/'.Layout::find($id)->photo;
        Layout::find($id)->delete();
            unlink(base_path($old_photo_location));
        return back()->with('delete_status', 'Deleted successfully');
    }
}
