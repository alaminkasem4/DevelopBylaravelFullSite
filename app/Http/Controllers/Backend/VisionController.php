<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Vision; 
use Auth;
class VisionController extends Controller
{
     public function view(){
    	$data['Count_vision'] = Vision::count();
    	$data['alldata'] = Vision::all();
    	return view('backend.visions.view-vision',$data);
    }

    public function add(){
    	return view('backend.visions.add-vision');
    }
    
    public function store(Request $request){

        $data = new Vision();
        $data->create_by = Auth::user()->id;
        $data->text      = $request->text;
        
    	if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/visions_img/'),$filename);
            $data['image'] = $filename;
        }
        $data->save();
    	return redirect()->route('visions.view')->with('success',' Vision Data Inserted Successful');
    }

    public function edit($id){
    	$editvision = Vision::find($id);
    	return view('backend.visions.edit-vision',compact('editvision'));
    }

    public function update(Request $request,$id){
        $data = Vision::find($id);
        $data->update_by = Auth::user()->id;
        $data->text    = $request->text;
    
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/visions_img/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/visions_img/'),$filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('visions.view')->with('success','Vision Update Successful');
    }

    public function delete(Request $request){
    	$Vision = Vision::find($request->id);
    	if(file_exists('upload/visions_img/'.$Vision->image) AND ! empty($Vision->image)){
    		unlink('upload/visions_img/'.$Vision->image);
    	}
        $Vision->delete();
    	return redirect()->back()->with('success','Data Delete Successful');
    }


}
