<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\Misstion;
use App\Model\Vision;
use App\Model\NewsEvent;
use App\Model\Service;
use App\Model\About;
use App\model\communicate;
use Mail;


class FrontendController extends Controller
{
    // home
    public function index(){
        $data['logo']     = Logo::first();
        $data['sliders']  = Slider::all();
        $data['contact']  = Contact::first();
        $data['misstion'] = Misstion::first();
        $data['vistion']  = Vision::first();
        $data['newsEvent']= NewsEvent::all();
        $data['services'] = Service::all();
    	return view('frontend.layouts.index',$data);
    }
    //about us
    public function AboutUs(){
        $data['logo']     = Logo::first();
        $data['contact']  = Contact::first();
        $data['abouts']  = About::first();
    	return view('frontend.single_pages.about_us',$data);
    }
    //contact us
    public function ContactUs(){
        $data['logo']     = Logo::first();
        $data['contact']  = Contact::first();
    	return view('frontend.single_pages.contact_us',$data);
    }
    public function NewsDetails($id){
        $data['logo']     = Logo::first();
        $data['contact']  = Contact::first();
        $data['news'] = NewsEvent::find($id);
        return view('frontend.single_pages.news-details',$data);
    }

    public function mission(){
        $data['logo']     = Logo::first();
        $data['contact']  = Contact::first();
        $data['misstion'] = Misstion::first();
        return view('frontend.single_pages.our-mission',$data);
    }

    public function vision(){
        $data['logo']     = Logo::first();
        $data['contact']  = Contact::first();
        $data['vistion']  = Vision::first();
        return view('frontend.single_pages.our-vision',$data);
    }
    public function newsEvent(){
        $data['logo']     = Logo::first();
        $data['contact']  = Contact::first();
        $data['newsEvent']= NewsEvent::all();
        return view('frontend.single_pages.News-and-Enents',$data);
    }

    public function contactSotre(Request $request){
        $contact  = new communicate();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->mobile_no = $request->mobile_no;
        $contact->address = $request->address;
        $contact->message = $request->message;
        $contact->save();

        // confrim Mail

        // $data = array(
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'mobile_no'=>$request->mobile_no,
        //     'address'=>$request->address,
        //     'message'=>$request->message
        // );

        // Mail::send('frontend.emails.contact', $data, function($message_mail) use($data){
        //     $message_mail->from('laravel6sylhet@gmail.com','Demo ProjectBD');
        //      $message_mail->to($data['email']);
        //      $message_mail->subject('Thanks For Contact Us');
        // });

        return redirect()->back()->with('success','Sent Your Message Successfull');
    }

}
