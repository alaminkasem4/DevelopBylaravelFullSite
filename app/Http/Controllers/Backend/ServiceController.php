<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service; 
use Auth;
class ServiceController extends Controller
{
    //
     public function view(){
    	$data['alldata'] = Service::all();
    	return view('backend.services.view-services',$data);
    }

    public function add(){
    	return view('backend.services.add-services');
    }
    
    public function store(Request $request){

        $data = new Service();
        $data->create_by  = Auth::user()->id;
        $data->title = $request->title;
        $data->long_text = $request->long_text;
        $data->save();
    	return redirect()->route('servics.view')->with('success','Services Data Inserted Successful');
    }

    public function edit($id){
    	$editService = Service::find($id);
    	return view('backend.services.edit-services',compact('editService'));
    }

    public function update(Request $request,$id){
        $data = Service::find($id);
        $data->update_by  = Auth::user()->id;
     	$data->title = $request->title;
        $data->long_text = $request->long_text;
        $data->save();
        return redirect()->route('servics.view')->with('success','Services Update Successful');
    }

    public function delete(Request $request){
    	$services = Service::find($request->id);
        $services->delete();
    	return redirect()->back()->with('success','Data Delete Successful');
    }
    
}
