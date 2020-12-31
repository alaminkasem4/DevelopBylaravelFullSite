<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Misstion; 
use Auth;

class MisstionController extends Controller
{
    public function view(){
    	$data['Count_misstion'] = Misstion::count();
    	$data['alldata'] = Misstion::all();
    	return view('backend.misstions.view-misstion',$data);
    }

    public function add(){
    	return view('backend.misstions.add-misstion');
    }
    
    public function store(Request $request){

        $data = new Misstion();
        $data->create_by = Auth::user()->id;
        $data->title     = $request->title;
        
    	if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/misstions_img/'),$filename);
            $data['image'] = $filename;
        }
        $data->save();
    	return redirect()->route('misstions.view')->with('success','Misstion Data Inserted Successful');
    }

    public function edit($id){
    	$editMisstion = Misstion::find($id);
    	return view('backend.misstions.edit-misstion',compact('editMisstion'));
    }

    public function update(Request $request,$id){
        $data = Misstion::find($id);
        $data->update_by = Auth::user()->id;
        $data->title     = $request->title;
    
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/misstions_img/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/misstions_img/'),$filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('misstions.view')->with('success','Misstion Update Successful');
    }

    public function delete(Request $request){
    	$misstion = Misstion::find($request->id);
    	if(file_exists('upload/misstions_img/'.$misstion->image) AND ! empty($misstion->image)){
    		unlink('upload/misstions_img/'.$misstion->image);
    	}
        $misstion->delete();
    	return redirect()->back()->with('success','Data Delete Successful');
    }

}
