<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubmitController extends Controller
{

    public function store_contact_us(Request $req)
    {

        $to_name =  $req->name;
        $to_email = "anandhu.brammait@gmail.com";
        $data =  array("name"=>$req->name,"address"=>$req->address,"phone_no"=>$req->phone_no,"message1"=>$req->message);

        Mail::send('emails.mail', $data, function($message) use ($to_email,$to_name) 
    {
        $message->to($to_email)->subject(''.env('APP_NAME').' ');
        $message->from(env('MAIL_FROM_ADDRESS'), $to_name);
    });
       
        return back()->with('message','Thanks for contacting me, I will get back to you soon!');
    }
    
    public function store_feedback_form(Request $req)
    {
        
        $to_name = $req->firstname;
        $to_email = "anandhu.brammait@gmail.com";
        //dd($req->mailid);

        $data =  array("first_name"=>$req->firstname,"last_name"=>$req->lastname,"mail_id"=>$req->mailid,"message1"=>$req->feedback);
        Mail::send('emails.feedback', $data, function($message) use ($to_email,$to_name) 
        {
            $message->to($to_email)->subject(''.env('APP_NAME').' ');
            $message->from(env('MAIL_FROM_ADDRESS'), $to_name);
        });
           
            echo 'Thanks for your feedback!';
    }}
    